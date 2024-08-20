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
        return view('home.about');
    }

    public function event()
    {
        return view('home.event');
    }

    public function campaign()
    {
        return view('home.campaign');
    }
}
