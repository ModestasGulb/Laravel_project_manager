<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = [
        'name', 'surname', 'skills', 'project_id'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
