<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
	'as'=>'home.home',
	'uses'=>'HomeController@home'
]);
Route::get('/tourhanoi',[
	'as'=>'tourhanoi.show',
	'uses'=>'TourController@hanoi'
]);
Route::get('/tourvietnam',[
	'as'=>'tourvietnam.show',
	'uses'=>'TourController@vietnam'
]); 
Route::get('/booking',[
	'as'=>'guide.booking',
	'uses'=>'TourController@booking'
]);
Route::get('/profile',[
	'as'=>'profile',
	'uses'=>'GuideController@profile'
]);
Route::get('/writereviews',[
	'as'=>'writereviews',
	'uses'=>'GuideController@writereviews'
]);
Route::get('/aboutus',[
	'as'=>'aboutus',
	'uses'=>'CompanyController@aboutus'
]);
Route::get('/contact',[
	'as'=>'contact',
	'uses'=>'CompanyController@contact'
]);
Route::get('/news',[
	'as'=>'news',
	'uses'=>'CompanyController@news'
]);

