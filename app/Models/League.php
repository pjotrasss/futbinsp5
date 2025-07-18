<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public $timestamps = false;
    protected $table = "leagues";
    protected $primaryKey = 'ID';
    public function clubs() {
        return $this->belongsToMany(
            Club::class,
            'leagues_clubs',
            'LEAGUE_ID',
            'CLUB_ID'
        );
    }
}