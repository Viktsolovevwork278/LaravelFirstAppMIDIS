<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'string | required | max:255 | min:4',
            'description' => 'string | required',
            'price' => 'numeric | required',
        ]);
        $product->create($data);
        return redirect()->route('products.index');
    }
    public function destroy(Product $product) 
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
