<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jasonController extends Controller
{
   
    public function index()
    {
        return view('home');
    }
}
