<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return response()->json("This is a Test");
    }

    // Home Page
    public function home()
    {
        return view("home");
    }

    // Landing Page
    public function landing()
    {
        return view("welcome");
    }
    // About Page
    public function about()
    {
        return view("about");
    }

    // Contact page
    public function contact()
    {
        return view("contact");
    }
    // Blog Page
    public function blog()
    {
        return view("blog");
    }

    // Coming Soon Page
    public function soon()
    {
        return view("soon");
    }
}

