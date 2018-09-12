<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function hanoi()
    {
    	return view('tour.tourhanoi');
    }

    public function vietnam()
    {
    	return view('tour.tourvietnam');
    }
    public function booking()
    {
    	return view('guide.booking');
    }
    
}

