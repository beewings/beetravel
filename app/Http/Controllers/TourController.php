<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function show()
    {
    	return view('tour.tourhanoi');
    }
}
