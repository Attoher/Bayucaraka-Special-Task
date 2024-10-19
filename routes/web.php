<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about',['title' => 'About']);
});
Route::get('/rp', function () {
    return view('rp',['title' => 'Racing Plane']);
});
Route::get('/fw', function () {
    return view('fw',['title' => 'Fixed Wings']);
});
Route::get('/VTOL', function () {
    return view('VTOL',['title' => 'VTOL']);
});
Route::get('/td', function () {
    return view('td',['title' => 'Technology Development']);
});
Route::get('/official', function () {
    return view('official',['title' => 'Official']);
});

use App\Http\Controllers\Controller;

Route::get('/timeline', [Controller::class, 'yourMethod']);