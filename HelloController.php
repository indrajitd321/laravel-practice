<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }

}
