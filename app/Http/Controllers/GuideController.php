<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function profile()
    {
    	return view('guide.profileguider');
    }
    public function writereviews()
    {
    	return view('guide.writereviews');
    }
}
