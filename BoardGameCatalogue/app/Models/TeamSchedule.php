<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamSchedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function username_1()
    {
        return $this->belongsTo(TeamMembership::class, 'member_code_1', 'code');
    }

    public function username_2()
    {
        return $this->belongsTo(TeamMembership::class, 'member_code_2', 'code');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_code', 'code');
    }
}
