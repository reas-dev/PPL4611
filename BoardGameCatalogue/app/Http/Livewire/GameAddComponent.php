<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
// use Livewire\WithPagination;

use App\Models\Game;

use Illuminate\Support\Str;
use Carbon\Carbon;

class GameAddComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $description;

    public function store(){
        $this->validate([
            'name' => ['required','string', 'min:4', 'max:255'],
            'image' => ['required', 'mimes:jpg,jpeg,png', 'max:1024'],
            'description' => ['required', 'min:4', 'max:255'],
        ]);

        $code = Str::random(20);
        $imageName = $code . '-' . Carbon::now()->timestamp . '.' . $this->image->extension();

        // $this->image->storeAs('game-images', $imageName);

        Game::create([
            'code' => $code,
            'name' => $this->name,
            'image' => $this->image->storeAs('game-images', $imageName),
            'description' => $this->description,
        ]);

        return redirect('/');
    }

    public function render()
    {
        $games = Game::all();
        return view('livewire.game-add-component', ['games' => $games])->layout('layouts.app');
    }
}
