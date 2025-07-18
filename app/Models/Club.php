<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public $timestamps = false;
    public function owner() {
        return $this->belongsTo(User::class,'OWNER_ID');
    }
    public function tournaments() {
        return $this->belongsToMany(
            Tournament::class,
            'tournaments_clubs',
            'CLUB_ID',
            'TOURNAMENT_ID'
        );
    }
}