<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GameLike extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    // public function users()
    // {
    //     return $this->hasMany(User::class, 'username', 'user_username');
    // }

    // public function game()
    // {
    //     return $this->belongsTo(Game::class, 'code', 'game_code');
    // }
}
