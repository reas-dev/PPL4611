<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Game;

class UserGameListComponent extends Component
{
    public function render()
    {
        $games = Game::all();
        dd($games);
        return view('livewire.user-game-list-component', ['games' => $games])->layout('layouts.live-guest');
    }
}
