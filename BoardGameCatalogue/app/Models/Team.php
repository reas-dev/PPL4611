<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function members()
    {
        return $this->hasMany(TeamMembership::class, 'team_code', 'code');
    }

    public function schedules()
    {
        return $this->hasMany(TeamSchedule::class, 'team_code', 'code');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_code', 'code');
    }
}
