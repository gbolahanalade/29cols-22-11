<?php

class Song extends Eloquent {

	protected $fillable = [];
	protected $table = 'songs';

	public static $rules = array(
		'title' =>'min:2',
		'description'=>'min:10',	
		'artist_name'=>'min:2',
		'youtube_link'=>'min:8',
		'soundcloud_link'=>'min:8',
		//'image'=>'image|mimes:jpeg,jpg,bmp,png,gif'
		//'song_url' => 'mimes:mp3,aac,wav'
	);

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function tags()
	{
		return $this->hasMany('Songtag');
	}
	public function reviews()
	{
		return $this->hasMany('Review');
	}

	public function recalculateRating()
  {
    $reviews = $this->reviews()->notSpam()->approved();
    $avgRating = $reviews->avg('rating');
    $this->rating_cache = round($avgRating,1);
    $this->rating_count = $reviews->count();
    $this->save();
  }

  public function getTimeagoAttribute()
    {
    	$date = \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    	return $date;
    }

	public function getCurrenttimeAttribute()
	{

   	$date =\Carbon\Carbon::now()->toDateTimeString();
	return $date;
	}

    public function scopeIdDescending($query)
    {
        return $query->orderBy('id','DESC');
    } 
}