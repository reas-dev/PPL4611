<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\TeamSchedule;

class TeamHomeMemberComponent extends Component
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
    }

    public function render()
    {
        return view('livewire.team-home-member-component', ['team' => $this->team])->layout('layouts.team-detail');
    }
}
