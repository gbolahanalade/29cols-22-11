<?php

use App\Repository\ProfilePictureRepository;

class ProfilePicture extends  Eloquent
{
    protected $table = 'profile_pictures';
    protected $guarded = ['id'];

    public function getUrlAttribute($url)
    {
        return $this->attributes['url'] = 'img/profile_photos/'. $url;
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
} 