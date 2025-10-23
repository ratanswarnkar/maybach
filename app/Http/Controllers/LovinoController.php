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
    public function founder()
    {
        return view('founder');
    }
    public function p1details()
    {
        return view('p1details');
    }
     public function p2details()
    {
        return view('p2details');
    }
       public function p3details()
    {
        return view('p3details');
    }
      public function p4details()
    {
        return view('p4details');
    }
    public function p5details()
    {
        return view('p5details');
    }
    public function p6details()
    {
        return view('p6details');
    }
     public function p7details()
    {
        return view('p7details');
    }
      public function p8details()
    {
        return view('p8details');
    }
      public function p9details()
    {
        return view('p9details');
    }
      public function p10details()
    {
        return view('p10details');
    }
}
