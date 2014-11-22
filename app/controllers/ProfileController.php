<?php

class ProfileController extends BaseController {

  /*
  */

  public function getIndex()
  {
    if (Auth::check())  {
     $user = Auth::user();

      $name= $user->username;
      $songs= $user->songs()->idDescending()->get();
      $videos= $user->videos;
      $galleries= $user->galleries;
      
     return View::make('profile.index')
     ->with('songs', $songs)
     ->with('galleries', $galleries)
     ->with('videos', $videos)
     ->with('user', $user);

   }
   else{
    return Redirect::to('users/login');

   }
  
 }

 //public function getSingle(Song $song , Video $video, Gallery $galleries)
 //{

 //}
}
