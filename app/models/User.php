<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    #use SoftDeletingTraits;

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Hash the password parameter
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }



    public function getTimeagoAttribute($value)
    {
        return $this->created_at->diffForHumans();
    }


    public static function register($username, $email, $password)
    {
        $user = new static(compact('username','email','password'));
        return $user;
    }

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

    public function profilePhoto()
    {
        return $this->hasOne('ProfilePhoto');
    }

    public function profilePicture()
    {
        return $this->hasOne('ProfilePicture');
    }

    public function songs()
    {
        return $this->hasMany('Song');
    }
    public function videos()
    {
        return $this->hasMany('Video');
    }
    public function galleries()
    {
        return $this->hasMany('Gallery');
    }

    public function pictures()
    {
        return $this->hasMany('Picture');
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }


    public function scopeConfirmed($query)
    {
        return $query->where('confirmed', 1);
    }

}