<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\TeamMembership;

use Auth;

class ProfileTeamComponent extends Component
{
    public $code;
    public $game_code;
    public $name;
    public $icon;
    public $user;

    public $teams;

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->user = $user;

        $teams = TeamMembership::where('user_username', Auth::user()->username)->get();
        $this->teams = $teams;
    }

    public function render()
    {
        return view('livewire.profile-team-component', ['user' => $this->user, 'teams' => $this->teams])->layout('layouts.profile');
    }
}
