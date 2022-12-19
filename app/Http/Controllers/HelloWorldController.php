<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        return view('hello_world', ['text'=>"Hi"]);
    }
    public function create()
    {
    }
}
