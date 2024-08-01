<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.home');
    }


    public function hotel()
    {
        return view('main.hotel');
    }


    public function services()
    {
        return view('main.services');
    }

    public function blog()
    {
        return view('main.blog');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function ravshan()
    {
        return view('main.cafes.ravshan');
    }
}
