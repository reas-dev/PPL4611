<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
// use Livewire\WithPagination;

use App\Models\Game;

use Illuminate\Support\Str;

class GameAddComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $description;

    public function store(){
        $this->validate([
            'name' => ['required','string', 'min:1', 'max:255'],
            'image' => ['required', 'mimes:jpg,jpeg,png', 'max:1024'],
            'description' => ['required', 'min:4'],
        ]);

        $code = Str::random(20);
        $imageName = $code . '.' . $this->image->extension();

        // $this->image->storeAs('game-images', $imageName);

        Game::create([
            'code' => $code,
            'name' => $this->name,
            'image' => $this->image->storeAs('game-images', $imageName),
            'description' => $this->description,
        ]);

        return redirect()->route('admin.games');
    }

    public function render()
    {
        $games = Game::all();
        return view('livewire.game-add-component', ['games' => $games])->layout('layouts.admin-dashboard');
    }
}
