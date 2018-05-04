<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
     protected $fillable = [
        'name', 'description','days','user_id','company_id',
    ];
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

public function companies()
    {
        return $this->belongsTo('App\Company');
    }
     public function tasks()
    {
        return $this->hasMany('App\Task');
    }
	
	public function comments()
    {
        return $this->morphTo('App\Comment','commentable');
    }

}
