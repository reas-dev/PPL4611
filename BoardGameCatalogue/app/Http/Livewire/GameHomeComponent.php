<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Game;
// use Livewire\WithPagination;

class GameHomeComponent extends Component
{
    public function delete($id){
        // Game::where('code',$code)->first()->delete();
        Game::destroy($id);
        session()->flash('notification', 'Game has been successfully deleted!');
    }

    public function render()
    {
        $games = Game::all();
        return view('livewire.game-home-component', ['games' => $games])->layout('layouts.admin-dashboard');
    }
}
