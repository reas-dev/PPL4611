<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\TeamSchedule;
use App\Models\TeamMembership;

use Auth;

class TeamHomeScheduleComponent extends Component
{
    public $code;
    public $game_code;
    public $name;
    public $icon;
    public $team;

    public $status;

    public function mount($code)
    {
        $team = Team::where('code', $code)->firstOrFail();
        $this->code = $team->code;
        $this->game_code = $team->game_code;
        $this->name = $team->name;
        $this->icon = $team->icon;
        $this->team = $team;

        $status = TeamMembership::where('team_code', $this->code)->where('user_username', Auth::user()->username)->firstOrFail();

        $this->status = $status->status;
    }

    public function render()
    {
        return view('livewire.team-home-schedule-component', ['team' => $this->team])->layout('layouts.team-detail');
    }
}
