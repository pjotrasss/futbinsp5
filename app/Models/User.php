<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID';
    protected $table = 'users';
    
    public function privilege_level() {
        return $this->belongsTo(PrivilegeLevel::class, 'PRIVILEGE_LEVEL_ID', 'ID'); 
    }
}