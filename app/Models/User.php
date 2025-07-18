<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    
    public function privilege_level() {
        return $this->belongsTo(PrivilegeLevel::class, 'PRIVILEGE_LEVEL_ID'); 
    }
}