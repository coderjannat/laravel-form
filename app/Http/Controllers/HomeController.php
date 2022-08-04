<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home view
    public function index()
    {
        return view('welcome');
    }

    //About view
    public function about()
    {
        return view('about');
    }

    //Contact view
    public function contact()
    {
        return view('contact');
    }
}
