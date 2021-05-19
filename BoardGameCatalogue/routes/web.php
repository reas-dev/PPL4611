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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/welcome/register', function () {
    return view('welcome/register');
});
Route::get('/welcome/login', function () {
    return view('welcome/login');
});
Route::get('/welcome/forgot-password', function () {
    return view('welcome/forgot');
});

Route::get('/user/home-page', function () {
    return view('user/home-page');
});
Route::get('/user/my-team', function () {
    return view('user/myteam');
});
Route::get('/user/profile', function () {
    return view('user/profile');
});
Route::get('/user/statistic', function () {
    return view('user/statistic');
});

Route::get('/home/standing-detail', function () {
    return view('home/standingdetail');
});
