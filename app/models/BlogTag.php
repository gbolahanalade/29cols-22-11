<?php

class BlogTag extends Eloquent {
	protected $fillable = [];
	protected $table = 'blogtags';

	public function blogs()
	{
		return $this->belongsToMany('Blog');
	}


}