<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    //
     protected $fillable = [
       'user_id', 'task_id',
    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }

  public function tasks()
    {
        return $this->belongsTo('App\Task');
    }


}
