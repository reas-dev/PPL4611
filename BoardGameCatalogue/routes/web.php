<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;
//Admin Component
use App\Http\Livewire\GameHomeComponent;
use App\Http\Livewire\GameAddComponent;
use App\Http\Livewire\GameEditComponent;

//User Component
use App\Http\Livewire\TeamListComponent;
use App\Http\Livewire\ScheduleListComponent;

use App\Http\Livewire\TeamHomeMemberComponent;
use App\Http\Livewire\TeamHomeScheduleComponent;
use App\Http\Livewire\TeamHomeStatisticComponent;
use App\Http\Livewire\TeamAddComponent;
use App\Http\Livewire\TeamAddMemberComponent;
use App\Http\Livewire\TeamAddScheduleComponent;
use App\Http\Livewire\TeamAddScoreComponent;


use App\Http\Livewire\UserGameListComponent;
use App\Http\Livewire\GameListComponent;
use App\Http\Livewire\GameDetailComponent;

use App\Http\Livewire\ProfileHomeComponent;
use App\Http\Livewire\ProfileEditComponent;
use App\Http\Livewire\ProfileTeamComponent;
use App\Http\Livewire\ProfileStatisticComponent;

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
    return redirect('/login');
});

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::group(['middleware' => ['auth:sanctum', 'verified', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', GameHomeComponent::class)->name('admin');

    Route::group(['prefix' => 'games'], function () {
        Route::get('/', GameHomeComponent::class)->name('admin.games');
        Route::get('/create', GameAddComponent::class)->name('admin.games.add');
        Route::get('/edit/{code}', GameEditComponent::class)->name('admin.games.edit');
    });
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::group(['prefix' => 'teams'], function () {
        Route::get('/', TeamListComponent::class)->name('teams');
        Route::get('/schedule', ScheduleListComponent::class)->name('schedules');
        Route::get('/create', TeamAddComponent::class)->name('teams.add');
        Route::get('/{code}', TeamHomeMemberComponent::class)->name('teams.show');
        Route::get('/{code}/schedule', TeamHomeScheduleComponent::class)->name('teams.schedule');
        Route::get('/{code}/statistic', TeamHomeStatisticComponent::class)->name('teams.statistic');
        Route::get('/{code}/create-member', TeamAddMemberComponent::class)->name('teams.add-member');
        Route::get('/{code}/create-schedule', TeamAddscheduleComponent::class)->name('teams.add-schedule');
        Route::get('/{code}/scoring', TeamAddScoreComponent::class)->name('teams.add-score');
    });
    Route::group(['prefix' => 'games'], function () {
        Route::get('/', UserGameListComponent::class)->name('games');
        Route::get('/most-liked', GameListComponent::class)->name('games.most-liked');
        Route::get('/{code}/detail', GameDetailComponent::class)->name('games.detail');
    });
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', ProfileHomeComponent::class)->name('profile');
        // Route::get('/user/profile', ProfileEditComponent::class)->name('profile.edit');
        Route::get('/my-teams', ProfileTeamComponent::class)->name('profile.my-teams');
        Route::get('/my-statistics', ProfileStatisticComponent::class)->name('profile.my-statistics');
    });
});
Route::get('/home', HomeComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




//Layout Testing Frontend
Route::get('/welcome/register', function () {
    return view('views-main/welcome/register');
});
Route::get('/welcome/login', function () {
    return view('views-main/welcome/login');
});
Route::get('/welcome/forgot-password', function () {
    return view('views-main/welcome/forgot');
});

// Route::get('/user/home-page', function () {
//     return view('views-main/user/home-page');
// });

//User Profile
Route::get('/user-test/my-team', function () {
    return view('views-main/user/myteam');
});
Route::get('/user-test/profile', function () {
    return view('views-main/user/profile');
});
Route::get('/user-test/statistic', function () {
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


Route::get('/home/game-detail', function () {
    return view('views-main/home/detailgame');
});
Route::get('/home/game-list-most-liked', function () {
    return view('views-main/home/gamelist-mostliked');
});
Route::get('/home/game-list-new-games', function () {
    return view('views-main/home/gamelist-newgames');
});
Route::get('/home/myteam-schedule', function () {
    return view('views-main/home/myteam-schedule');
});
Route::get('/home/myteam-teamlist', function () {
    return view('views-main/home/myteam-teamlist');
});
Route::get('/home/standing-detail', function () {
    return view('views-main/home/standingdetail');
});
