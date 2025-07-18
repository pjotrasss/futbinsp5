<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public $timestamps = false;
    public function clubs() {
        return $this->belongsToMany(
            Club::class,
            'tournaments_clubs',
            'TOURNAMENT_ID',
            'CLUB_ID'
        );
    }
}