<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'jobTitle','jobDescription', 'jobRequirement', 'contractType', 'jobCategory',
        'salary', 'jobLocation', 'hire', 'deadLine', 'level', 'degree', 'experience', 'language'
    ];
    public function location(){
        return $this->belongsToMany(Location::class);
    }


    //job.php
    public function company(){
        return $this->belongsTo(Company::class);
    }

    //Job.php
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //contract type
    public function contractType(){
        return $this->belongsTo(ContractType::class);
    }

    // check if has location

    public function hasLocation($locationId)
    {
        return in_array($locationId, $this->location->pluck('id')->toArray());
    }




}
