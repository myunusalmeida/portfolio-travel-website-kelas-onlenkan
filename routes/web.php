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

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/travel-packages', function () {
    return view('pages.travel-packages');
});

Route::get('/travel-packages/{id}', function () {
    return view('pages.travel-package-detail');
});

Route::get('/travel-packages/{id}/checkout', function () {
    return view('pages.checkout');
});

Route::get('/admin/dashboard', function() {
    return view('pages.admin.dashboard');
});

Route::get('/admin/travel-packages', function() {
    return view('pages.admin.travel-packages.index');
});