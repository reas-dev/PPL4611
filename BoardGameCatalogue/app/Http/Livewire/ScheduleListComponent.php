<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TeamMembership;
use App\Models\TeamInvitation;
use App\Models\TeamSchedule;

use Auth;

class ScheduleListComponent extends Component
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
            $team_list = TeamMembership::whereHas('team', function($query){
                $query->where('name', 'like', '%'.$this->search.'%');
            })->where('user_username', $username)->get();
        }
        else
        {
            $team_list = TeamMembership::where('user_username', $username)->get();
        }

        $schedules = collect([]);
        foreach ($team_list as $team) {
            $schedule = TeamSchedule::where('member_code_1', $team->code)->orWhere('member_code_2', $team->code)->get();
            $schedules = $schedules->merge($schedule);
        }
        return view('livewire.schedule-list-component', ['team_list' => $team_list, 'schedules' => $schedules, 'invitations' => $invitations])->layout('layouts.home-team');
    }
}
