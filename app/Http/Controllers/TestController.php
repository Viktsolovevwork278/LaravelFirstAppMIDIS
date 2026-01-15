<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function first() {
        $a = 5;
        $b = 10;
        return view('first', compact('a', 'b'));
    }

     public function second() {
        $users = User::all();
        return view('second', compact('users'));
    }

    
}
