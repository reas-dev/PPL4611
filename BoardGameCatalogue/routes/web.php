<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;
//Admin Component
use App\Http\Livewire\GameHomeComponent;
use App\Http\Livewire\GameAddComponent;
use App\Http\Livewire\GameEditComponent;

//User Component
use App\Http\Livewire\TeamListComponent;
use App\Http\Livewire\TeamHomeComponent;
use App\Http\Livewire\TeamAddComponent;
use App\Http\Livewire\TeamAddMemberComponent;
use App\Http\Livewire\TeamAddScheduleComponent;

use App\Http\Livewire\UserGameListComponent;

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

Route::get('/logout', function(){
    auth()->logout();
    return redirect('/');
});

Route::group(['middleware' => ['auth:sanctum', 'verified','admin'], 'prefix' => 'admin'], function(){
    Route::get('/', HomeComponent::class)->name('admin');

    Route::group(['prefix' => 'games'], function(){
        Route::get('/', GameHomeComponent::class)->name('admin.games');
        Route::get('/create', GameAddComponent::class)->name('admin.games.add');
        Route::get('/edit/{code}', GameEditComponent::class)->name('admin.games.edit');
        // Route::delete('/delete/{code}', GameDeComponent::class)->name('admin.games.delete');
    });
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::group(['prefix' => 'teams'], function(){
        Route::get('/', TeamListComponent::class)->name('teams');
        Route::get('/{code}', TeamHomeComponent::class)->name('teams.show');
        Route::get('/{code}/create-member', TeamAddMemberComponent::class)->name('teams.add-member');
        Route::get('/{code}/create-schedule', TeamAddscheduleComponent::class)->name('teams.add-schedule');
        Route::get('/create', TeamAddComponent::class)->name('teams.add');
    });
    Route::group(['prefix' => 'games'], function(){
        Route::get('/', UserGameListComponent::class)->name('games');
    });
});
Route::get('/home', HomeComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
