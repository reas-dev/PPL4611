<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\TeamInvitation;
use App\Models\TeamMembership;
use App\Models\TeamSchedule;
use App\Models\ScoringLog;

use Auth;

use Illuminate\Support\Str;

class TeamAddScoreComponent extends Component
{
    public $code;
    public $status;
    public $schedule;
    public $winner;

    public function mount($code)
    {
        $schedule = TeamSchedule::where('code', $code)->firstOrFail();
        $status = TeamMembership::where('team_code', $schedule->team_code)->where('user_username', Auth::user()->username)->firstOrFail()->status;
        if($status != 'CAP') {
            redirect('/teams/'.$this->code);
        }
        // $team = Team::where('code', $code)->firstOrFail();
        $this->code = $code;
        $this->schedule = $schedule;
        $this->status = $status;
    }

    public function store(){
        $this->validate([
            'winner' => ['required'],
        ]);

        $schedule = TeamSchedule::where('code', $this->code)->firstOrFail();
        $status = TeamMembership::where('team_code', $schedule->team_code)->where('user_username', Auth::user()->username)->firstOrFail();

        $this->schedule->status = $this->winner;
        $this->schedule->save();

        ScoringLog::create([
            'scorer_code' => $status->code,
            'schedule_code' => $this->schedule->code,
            'score' => $this->winner,
        ]);

        session()->flash('status', 'Schedule result has been submited!');
        return redirect('/teams/'.$this->schedule->team_code);
    }

    public function render()
    {
        return view('livewire.team-add-score-component')->layout('layouts.live-guest');
    }
}
