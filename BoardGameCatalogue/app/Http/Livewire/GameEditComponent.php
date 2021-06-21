<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Game;

class GameEditComponent extends Component
{
    use WithFileUploads;

    public $code;
    public $name;
    public $image;
    public $newimage;
    public $description;

    public function mount($code)
    {
        $game = Game::where('code', $code)->first();
        $this->code = $game->code;
        $this->name = $game->name;
        $this->image = $game->image;
        $this->description = $game->description;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required','string', 'min:1', 'max:255'],
            'description' => ['required', 'min:4'],
        ]);
        $game = Game::where('code', $this->code)->first();
        $game->name = $this->name;
        if($this->newimage)
        {
            // dd($this->newimage);
            $this->validate([
                'newimage' => ['required','mimes:jpg,jpeg,png', 'max:1024'],
            ]);
            $imageName = $this->code . '.' . $this->newimage->extension();
            $newname = $this->newimage->storeAs('game-images', $imageName);
            $game->image = $newname;
        }
        $game->description = $this->description;
        $game->save();

        session()->flash('status', 'Game has been successfully updated!');
        return redirect()->route('admin.games');
    }

    public function render()
    {
        $games = Game::all();
        return view('livewire.game-edit-component', ['games' => $games])->layout('layouts.admin-dashboard');
    }
}
