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
        foreach ($team_list as $team) {
            $team_name = $team->team->name;
            dump($team_name);
        }
        dd($team_list);
        return view('livewire.team-list-component')->layout('layouts.live-guest');
    }
}
