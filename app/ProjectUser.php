<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    //
     protected $fillable = [
        'user_id', 'project_id',
    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }

public function projects()
    {
        return $this->belongsTo('App\Project');
    }

}
