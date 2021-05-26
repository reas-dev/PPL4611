<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;

class TeamHomeComponent extends Component
{
    public $code;
    public $game_code;
    public $name;
    public $icon;
    public $team;

    public function mount($code)
    {
        $team = Team::where('code', $code)->first();
        $this->code = $team->code;
        $this->game_code = $team->game_code;
        $this->name = $team->name;
        $this->icon = $team->icon;
        $this->team = $team;
        dump($team->members);
        dump($team);
    }

    public function render()
    {
        return view('livewire.team-home-component', ['team' => $this->team])->layout('layouts.live-guest');
    }
}
