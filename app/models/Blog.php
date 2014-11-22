<?php

class Blog extends Eloquent {

	protected $fillable = [];
	protected $table = 'blogs';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function tags()
	{
		return $this->belongsToMany('BlogTag','blog_blogtag');
	}
	public function comments()
	{
		return $this->hasMany('Comment');
	}
}