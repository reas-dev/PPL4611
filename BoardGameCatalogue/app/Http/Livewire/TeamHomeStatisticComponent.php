<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\TeamSchedule;
use App\Models\TeamMembership;

use Auth;

class TeamHomeStatisticComponent extends Component
{
    public $code;
    public $game_code;
    public $name;
    public $icon;
    public $team;

    public $statistics;

    // public $status;

    public function mount($code)
    {
        $team = Team::where('code', $code)->firstOrFail();
        $this->code = $team->code;
        $this->game_code = $team->game_code;
        $this->name = $team->name;
        $this->icon = $team->icon;
        $this->team = $team;

        $this->statistics = collect([]);

        foreach ($team->members as $member) {
            $this->statistics->push((object)['username' => $member->user_username,
                                           'win'=> 0,
                                           'draw'=> 0,
                                           'lose'=> 0,
                                           'score'=> 0,

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

        // $status = TeamMembership::where('team_code', $this->code)->where('user_username', Auth::user()->username)->firstOrFail();

        // $this->status = $status->status;
    }

    public function render()
    {
        return view('livewire.team-home-statistic-component', ['team' => $this->team])->layout('layouts.team-detail');
    }
}
