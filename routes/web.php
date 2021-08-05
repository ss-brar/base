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
    return view('welcome');
});

Route::get('/admin/dark', function () {
    return view('admin.dashboard_dark');
});

Route::get('/admin/light', function () {
    return view('admin.dashboard_light');
});

Route::get('/admin/custom', function () {
    return view('admin.dashboard_custom');
});