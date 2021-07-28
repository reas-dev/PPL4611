<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Team;
use App\Models\TeamInvitation;
use App\Models\TeamMembership;
use App\Models\TeamSchedule;

use Auth;
use Carbon\Carbon;

use Illuminate\Support\Str;

class TeamAddScheduleComponent extends Component
{
    public $username_1;
    public $username_2;
    public $date;
    public $time;
    public $code;
    public $status;

    public function mount($code)
    {
        $status = TeamMembership::where('team_code', $this->code)->where('user_username', Auth::user()->username)->firstOrFail()->status;
        if($status != 'CAP') {
            redirect('/teams/'.$this->code);
        }
        $this->code = $code;
        $this->status = $status;
    }

    public function store(){
        $this->validate([
            'username_1' => ['required', 'exists:App\Models\User,username', 'alpha_num', 'string', 'min:6', 'max:16'],
            'username_2' => ['required', 'exists:App\Models\User,username', 'alpha_num', 'string', 'min:6', 'max:16'],
            'time' => ['required'],
            'date' => ['required'],
        ]);

        $datetime_now = Carbon::now();
        $datetime_fight_string = $this->date . ' ' . $this->time . ':00';
        $datetime_fight = Carbon::createFromFormat('Y-m-d H:i:s', $datetime_fight_string);

        $check_username_1_in_teams = TeamMembership::where('team_code', $this->code)->where('user_username', $this->username_1)->first();
        $check_username_2_in_teams = TeamMembership::where('team_code', $this->code)->where('user_username', $this->username_2)->first();

        if (!$check_username_1_in_teams)
        {
            dd('username_1 not in teams');
        }
        else if (!$check_username_2_in_teams)
        {
            dd('username_2 not in teams');
        }
        else
        {
            if ($datetime_fight->gt($datetime_now))
            {
                $codeTM = Str::random(30);
                TeamSchedule::create([
                    'code' => $codeTM,
                    'team_code' => $this->code,
                    'member_code_1' => $check_username_1_in_teams->code,
                    'member_code_2' => $check_username_2_in_teams->code,
                    'fight_at' => $datetime_fight,
                ]);

                return redirect('/teams/'.$this->code);
            }
            else
            {
                dd('false');
            }
        }

        return redirect('/teams/'.$this->code);
    }

    public function render()
    {
        return view('livewire.team-add-schedule-component')->layout('layouts.live-guest');
    }
}
