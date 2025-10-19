<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LovinoController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function aboutUs()
    {
        return view('about-us');
    }
    public function projects()
    {
        return view('projects');
    }
     public function sale()
    {
        return view('sale');
    }
     public function rent()
    {
        return view('rent');
    }
    public function team()
    {
        return view('team');
    }
    public function career()
    {
        return view('career');
    }
    public function contact()
    {
        return view('contact');
    }
}
