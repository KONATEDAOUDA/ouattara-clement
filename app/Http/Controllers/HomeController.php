<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('template.pages.about');
    }

    public function blog()
    {
        return view('template.pages.blog');
    }

    public function contact()
    {
        return view('template.pages.contact');
    }
}
