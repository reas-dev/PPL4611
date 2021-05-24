<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\GameHomeComponent;
use App\Http\Livewire\GameAddComponent;
use App\Http\Livewire\GameEditComponent;

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

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::group(['middleware' => ['auth:sanctum', 'verified', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', HomeComponent::class);

    Route::group(['prefix' => 'games'], function () {
        Route::get('/', GameHomeComponent::class)->name('admin.games');
        Route::get('/create', GameAddComponent::class)->name('admin.games.add');
        Route::get('/edit/{code}', GameEditComponent::class)->name('admin.games.edit');
        // Route::delete('/delete/{code}', GameDeComponent::class)->name('admin.games.delete');
    });
});

Route::get('/home', HomeComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/welcome/register', function () {
    return view('views-main/welcome/register');
});
Route::get('/welcome/login', function () {
    return view('views-main/welcome/login');
});
Route::get('/welcome/forgot-password', function () {
    return view('views-main/welcome/forgot');
});

Route::get('/user/home-page', function () {
    return view('views-main/user/home-page');
});
Route::get('/user/my-team', function () {
    return view('views-main/user/myteam');
});
Route::get('/user/profile', function () {
    return view('views-main/user/profile');
});
Route::get('/user/statistic', function () {
    return view('views-main/user/statistic');
});

Route::get('/team/add-member', function () {
    return view('views-main/team/addmember');
});
Route::get('/team/add-schedule', function () {
    return view('views-main/team/addschedule');
});
Route::get('/team/add-scoring', function () {
    return view('views-main/team/addscoring');
});
Route::get('/team/add-team', function () {
    return view('views-main/team/addteam');
});
Route::get('/team/member-detail', function () {
    return view('views-main/team/memberdetail');
});
Route::get('/team/schedule-detail', function () {
    return view('views-main/team/scheduledetail');
});
Route::get('/team/statistic-detail', function () {
    return view('views-main/team/statisticdetail');
});

Route::get('/home/standing-detail', function () {
    return view('views-main/home/standingdetail');
});
