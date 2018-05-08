<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','frist_name','middle_name','last_name','city','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   
   /** const admin=1;
	const moderator=2;
	const user=3;
	public function isAdmin(){return this->role_id=admin;}
	public function isModerator(){return this->role_id=moderator;}
	public function isUser(){return this->role_id=user;}/**/

     public function companies()
    {
        return $this->hasMany('App\Company');
    }

     public function roles()
    {
        return $this->belongsTo('App\Role');
    }
    public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }
	public function comments()
    {
        return $this->morphMany('App\Comment','commentable');
    }

}
