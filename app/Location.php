<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    
    public function job(){
        return $this->belongsToMany(Job::class);
    }

    public function company(){
        return $this->hasMany(Company::class);
    }
    
}
