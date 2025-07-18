<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID';
    public function owner() {
        return $this->belongsTo(User::class,'OWNER_ID', 'ID');
    }
    public function currentLeague() {
        $season = 4;

        return $this->belongsToMany(
            League::class,
            'leagues_clubs',
            'CLUB_ID',
            'LEAGUE_ID'
        )->withPivot('SEASON')
        ->wherePivot('SEASON', $season);
    }
}