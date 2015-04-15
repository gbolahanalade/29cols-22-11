<?php namespace App\Repository;


use ErrorException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use ProfilePicture;

class ProfilePictureRepository {

    public function getUserPic()
    {
        $user = $this->user();
        //if we dont have a user profile photo return empty
        try { $url = $user->profilePicture->url; } catch (ErrorException $e) {$url = null;}
        return !empty($url) ? '/'.$url : '/img/profile_photos/user.jpg';
    }

    public function uploadImage($file_input)
    {
        $user = Auth::user();
        //delete existing profile picture
        try {$this->removeProfilePicture($user->profilePicture->url); } catch (ErrorException $e){}
        //remove the row for the table
        try {$this->removeProfilePictureRow($user->id); } catch (ErrorException $e){}

        //proceed to register a new picture
        $i = $file_input['image'];
        $destination = $this->getDestination();
        $filename = $this->getFilename($i);

        $data = new ProfilePicture(['url'=>$filename]);
        if ($user->profilePicture()->save($data))
        {
            $i->move($destination, $filename);
        }
        return;
    }


    /** Return the path to profile pictures
     * @return string
     */
    public static function getDestination()
    {
        return public_path() . '/img/profile_photos/';
    }

    /** Return a hashed filename from a file object
     * @param $i
     * @return string
     */
    private function getFilename($i)
    {
        return md5(time() . str_random()) .'.'. $i->getClientOriginalExtension();
    }

    private function removeProfilePicture($url=null)
    {
        if (is_null($url))
            return;
        $img = public_path().'/'.$url;
        if ( file_exists($img) )
            unlink($img);
    }

    private function removeProfilePictureRow($id)
    {
        return ProfilePicture::whereUserId($id)->delete();
    }

    private function user()
    {
        return Auth::user();
    }


} 