<?php

class Review extends Eloquent {

	protected $fillable = [];
	protected $table = 'reviews';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function tags()
	{
		return $this->hasMany('Songtag');
	}
	public function song()
	{
		return $this->belongsTo('Song');
	}

	 public function scopeApproved($query)
  {
    return $query->where('approved', true);
  }

  public function scopeSpam($query)
  {
    return $query->where('spam', true);
  }

  public function scopeNotSpam($query)
  {
    return $query->where('spam', false);
  }

  public function storeReviewForSong($song_id, $user_id, $comment, $rating)
{
  $song = Song::find($song_id);

  // this will be added when we add user's login functionality
  //$this->user_id = Auth::user()->id;

  $this->user_id = Auth::user()->id;
  $this->comment = $comment;
  $this->rating = $rating;
  $song->reviews()->save($this);

  // recalculate ratings for the specified product
  $song->recalculateRating();
}
 public function getCreateRules()
    {
        return array(
            'comment'=>'required|min:10',
            'rating'=>'required|integer|between:1,5'
        );
    }

}