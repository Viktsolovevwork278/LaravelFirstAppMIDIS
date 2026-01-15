<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showArray() {
        $array = [
            ['id' => 1, 'title' => 'Продукт 1', 'price' => 100, 'path' => 'pict1.jpg'],
            ['id' => 2, 'title' => 'Продукт 2', 'price' => 200, 'path' => 'pict2.jpg'],
        ];
        return view('home', compact('array'));
    }
    public function home() {
        return view('home');
    }
}
