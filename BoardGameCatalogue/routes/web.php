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

Route::get('/logout', function(){
    auth()->logout();
    return redirect('/');
});

Route::group(['middleware' => ['auth:sanctum', 'verified','admin'], 'prefix' => 'admin'], function(){
    Route::get('/', HomeComponent::class);

    Route::group(['prefix' => 'games'], function(){
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
