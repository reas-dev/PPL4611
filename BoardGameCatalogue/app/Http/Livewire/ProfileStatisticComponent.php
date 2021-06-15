<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\TeamMembership;
use App\Models\Team;

use Auth;

class ProfileStatisticComponent extends Component
{
    public $code;
    public $game_code;
    public $name;
    public $icon;
    public $user;

    public $teams;
    public $statistics;

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->user = $user;

        $teams = TeamMembership::where('user_username', Auth::user()->username)->get();
        $this->teams = $teams;

        $this->statistics = collect([]);

        $teams = Team::all();

        $this->statistics = collect([]);

        foreach ($teams as $team) {
            foreach ($team->members as $member) {
            $this->statistics->push((object)['username' => $member->user_username,
                                           'team' => $member->team->name,
                                           'win'=> 0,
                                           'draw'=> 0,
                                           'lose'=> 0,
                                           'score'=> 0,
                                           'rank'=> 0,

                ]);
            }
            foreach ($team->schedules as $schedule) {
                if ($schedule->status != null) {
                    if ($schedule->status == 'draw')
                    {
                        $value = $this->statistics->where('username', $schedule->username_1->user_username)->first();
                        $value->draw += 1;
                        $value = $this->statistics->where('username', $schedule->username_2->user_username)->first();
                        $value->draw += 1;
                    }
                    elseif($schedule->status == $schedule->username_1->user_username)
                    {
                        $value = $this->statistics->where('username', $schedule->username_1->user_username)->first();
                        $value->win += 1;
                        $value->score += 3;
                        $value = $this->statistics->where('username', $schedule->username_2->user_username)->first();
                        $value->lose += 1;
                        $value->score -= 1;
                    }
                    elseif($schedule->status == $schedule->username_2->user_username)
                    {
                        $value = $this->statistics->where('username', $schedule->username_1->user_username)->first();
                        $value->lose += 1;
                        $value->score -= 1;
                        $value = $this->statistics->where('username', $schedule->username_2->user_username)->first();
                        $value->win += 1;
                        $value->score += 3;
                    }

                }
            }
        }
        foreach ($teams as $team) {
            $i = 1;
            foreach ($this->statistics->where('team', $team->name)->sortByDesc('score') as $statistic){
                $statistic->rank = $i;
                $i += 1;
            }
        }

    }

    public function render()
    {
        return view('livewire.profile-statistic-component', ['user' => $this->user, 'teams' => $this->teams])->layout('layouts.profile');
    }
}
