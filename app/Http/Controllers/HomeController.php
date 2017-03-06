<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }
    
    public function contact()
    {
        return view('home.contact');
    }
    
    public function gallery()
    {
        return view('home.gallery');
    }    
}
