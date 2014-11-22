<?php

class Comment extends Eloquent{
	
	public function blog()
	{
		return $this->belongsTo('Blog');
	}


}