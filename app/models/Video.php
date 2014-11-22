<?php

class Video extends Eloquent {

	protected $fillable = [];
	protected $table = 'videos';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function tags()
	{
		return $this->hasMany('Tag');
	}
	public function reviews()
	{
		return $this->hasMany('Review');
	}

	public function getTimeagoAttribute()
    {
    	$date = \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    	return $date;
    }
}