<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Game;
use App\Models\Team;
use App\Models\TeamMembership;

use Auth;

use Illuminate\Support\Str;

class TeamAddComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $icon;
    public $game;

    public function store(){
        $this->validate([
            'name' => ['required','string', 'min:4', 'max:50'],
            'icon' => ['required', 'mimes:jpg,jpeg,png', 'max:1024'],
            'game' => ['required', 'exists:App\Models\Game,code', 'min:4', 'max:20'],
        ]);

        $code = Str::random(20);
        $iconName = $code . '.' . $this->icon->extension();

        // $this->icon->storeAs('game-icons', $iconName);

        Team::create([
            'code' => $code,
            'name' => $this->name,
            'icon' => $this->icon->storeAs('team-icons', $iconName),
            'game_code' => $this->game,
        ]);

        $codeTM = Str::random(30);
        TeamMembership::create([
            'code' => $codeTM,
            'team_code' => $code,
            'user_username' => Auth::user()->username,
            'status' => 'CAP'
        ]);

        return redirect()->route('teams');
    }

    public function render()
    {
        $games = Game::all()->sortBy("name");
        return view('livewire.team-add-component', ['games' => $games])->layout('layouts.live-guest');
    }
}
