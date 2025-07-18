<?php

namespace App\Http\Controllers;

use App\Models\Club;

class ClubController extends Controller {
    public function index() {
        $season = 4;
        
        $clubs = Club::with(['owner', 'currentLeague' => function($query) use ($season) {
            $query->wherePivot('SEASON', $season);
        }])->get();
        $clubs = $clubs->sortBy(function ($club) {
            return $club->currentLeague->first()?->ID ?? PHP_INT_MAX;
        });
        
        return view('clubs', compact('clubs'));
    }
}