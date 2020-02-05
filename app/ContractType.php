<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    public function Job(){
        return $this->hasMany(Job::class);
    }
}
