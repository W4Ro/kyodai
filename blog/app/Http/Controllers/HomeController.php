<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view ("home");
    }
    public function blog()
    {
        return view ("blog");
    }
    public function studio()
    {
        return view ("studio");
    }
    public function showcases()
    {
        return view ("showcases");
    }
    public function contact()
    {
        return view ("contact");
    }
}

