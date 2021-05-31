<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TeamMembership;
use App\Models\TeamInvitation;

use App\Models\Game;
use Auth;

class GameListComponent extends Component
{
    public $search;

    public function decline($id){
        TeamInvitation::destroy($id);
        // redirect('/');
    }

    public function accept($id){
        $invitation = TeamInvitation::find($id);

        TeamMembership::create([
            'code' => $invitation->code,
            'team_code' => $invitation->team_code,
            'user_username' => $invitation->user_username,
            'status' => 'MBR',
        ]);

        $invitation->delete();
    }

    public function render()
    {
        $username = Auth::user()->username;
        $invitations = TeamInvitation::where('user_username', $username)->get();
        if ($this->search)
        {
            $games = Game::where('name', 'like', '%'.$this->search.'%')->get()->sortByDesc(function($game, $key){
                return $game->likes->count();
            });
        }
        else
        {
            $games = Game::all()->sortByDesc(function($game, $key){
                return $game->likes->count();
            });
        }

        return view('livewire.game-list-component', ['games' => $games, 'invitations' => $invitations])->layout('layouts.home-team');
    }
}
