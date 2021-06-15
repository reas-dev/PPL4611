<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

use Auth;

class ProfileHomeComponent extends Component
{
    public $code;
    public $game_code;
    public $name;
    public $icon;
    public $user;

    public $status;

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->user = $user;

        // $status = TeamMembership::where('team_code', $this->code)->where('user_username', Auth::user()->username)->firstOrFail();

        // $this->status = $status->status;
    }

    public function render()
    {
        return view('livewire.profile-home-component', ['user' => $this->user])->layout('layouts.profile');
    }
}
