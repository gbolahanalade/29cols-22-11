<?php

class Songtag extends Eloquent {

    public function song()
    {
        return $this->belongsTo('Song');
    }
}