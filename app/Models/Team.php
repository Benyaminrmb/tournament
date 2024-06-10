<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function plays1()
    {
        return $this->hasMany(Play::class,'team1_id');
    }
    public function plays2()
    {
        return $this->hasMany(Play::class,'team2_id');
    }

    public function sumPlays(){
        return $this->plays1->count() + $this->plays2->count();
    }
}
