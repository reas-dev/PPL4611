<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Team;

class TeamEditComponent extends Component
{
    use WithFileUploads;

    public $code;
    public $game_code;
    public $name;
    public $icon;
    public $newicon;

    public function mount($code)
    {
        $team = Team::where('code', $code)->first();
        $this->code = $team->code;
        $this->game_code = $team->game_code;
        $this->name = $team->name;
        $this->icon = $team->icon;
    }

    public function render()
    {
        return view('livewire.team-edit-component');
    }
}
