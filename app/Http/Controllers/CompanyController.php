<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function aboutus()
    {
    	return view('company.aboutus');
    }
    public function contact()
    {
    	return view('company.contact');
    }
    public function news()
    {
    	return view('company.news');
    }
}