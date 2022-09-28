<?php

use Illuminate\Support\Facades\Route;

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
// Show Home Page
Route::get('/', function () {
    return view('pages/home');
});
// Show All Listing
Route::get('/{property_type}/{listing_type}', function () {
    return view('welcome');
});
// Show single Listing
Route::get('/listing/{slug}/{id}', function () {
    return view('welcome');
});
// Show User login
Route::get('/login', function () {
    return view('welcome');
});
// Show User register
Route::get('/register', function () {
    return view('welcome');
});
// Show User saved Listings
Route::get('/accounts/saved', function () {
    return view('welcome');
});
// Show User show status
Route::get('/account/show-status', function () {
    return view('welcome');
});

