<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Game;
use App\Models\GameLike;

use Auth;

class GameDetailComponent extends Component
{
    public $game;

    public function mount($code)
    {
        $game = Game::where('code', $code)->firstOrFail();
        $this->game = $game;
    }

    public function like(){
        $is_liked = GameLike::where('game_code', $this->game->code)->where('user_username', Auth::user()->username)->first();

        if($is_liked == null)
        {
            GameLike::create([
                'game_code' => $this->game->code,
                'user_username' => Auth::user()->username,
            ]);
        }
    }

    public function unlike(){
        $is_liked = GameLike::where('game_code', $this->game->code)->where('user_username', Auth::user()->username)->first();

        if($is_liked)
        {
            $is_liked->forceDelete();
        }
    }

    public function render()
    {
        $is_liked = GameLike::where('game_code', $this->game->code)->where('user_username', Auth::user()->username)->first();

        return view('livewire.game-detail-component', ['game' => $this->game, 'liked' => $is_liked])->layout('layouts.game-detail');
    }
}
