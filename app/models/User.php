<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

class User extends Eloquent implements ConfideUserInterface
{
    use ConfideUser;
    protected $table = 'users';
    protected $fillable = [];

public function blogs()
	{
	return $this->hasMany('Blog');
	}
public function coomments()
	{
	return $this->hasMany('Comment');
	}
public function profiles()
	{
	return $this->hasMany('Profile');
	}
	public function reviews()
	{
	return $this->hasMany('Review');
	}

	public function songs()
	{
	return $this->hasMany('Song');
	}
	public function videos()
	{
	return $this->hasMany('Video');
	}
	public function getFullNameAttribute()
	{
		return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
	}

	
}