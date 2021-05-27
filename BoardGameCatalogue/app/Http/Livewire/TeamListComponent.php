<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TeamMembership;

use Auth;

class TeamListComponent extends Component
{
    public function render()
    {
        $username = Auth::user()->username;
        $team_list = TeamMembership::where('user_username', $username)->get();
        return view('livewire.team-list-component', ['team_list' => $team_list])->layout('layouts.home-team');
    }
}
