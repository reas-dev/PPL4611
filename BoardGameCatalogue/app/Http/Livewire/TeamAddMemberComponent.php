<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Team;
use App\Models\TeamInvitation;
use App\Models\TeamMembership;

use Auth;

use Illuminate\Support\Str;

class TeamAddMemberComponent extends Component
{
    public $username;
    public $code;
    public $status;

    public function mount($code)
    {
        $status = TeamMembership::where('team_code', $this->code)->where('user_username', Auth::user()->username)->firstOrFail()->status;
        if($status != 'CAP') {
            redirect('/teams/'.$this->code);
        }
        // $team = Team::where('code', $code)->firstOrFail();
        $this->code = $code;
        $this->status = $status;
    }

    public function store(){
        $this->validate([
            'username' => ['required', 'exists:App\Models\User,username', 'alpha_num', 'string', 'min:6', 'max:16'],
        ]);

        if($this->status != 'CAP') {
            redirect('/teams/'.$this->code);
        }

        $tes1 = TeamInvitation::where('team_code', $this->code)->where('user_username', $this->username)->get()->isEmpty();
        $tes2 = TeamMembership::where('team_code', $this->code)->where('user_username', $this->username)->get()->isEmpty();

        if ($tes1 && $tes2)
        {
            $codeTM = Str::random(30);
            TeamInvitation::create([
                'code' => $codeTM,
                'team_code' => $this->code,
                'user_username' => $this->username,
            ]);
            // TeamMembership::create([
            //     'code' => $codeTM,
            //     'team_code' => $this->code,
            //     'user_username' => $this->username,
            //     'status' => 'MBR',
            // ]);

            return redirect('/teams/'.$this->code);
        }
        else
        {
            return redirect('/teams/'.$this->code);
        }
    }

    public function render()
    {
        return view('livewire.team-add-member-component')->layout('layouts.live-guest');
    }
}
