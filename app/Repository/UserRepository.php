<?php namespace App\Repository;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Lib\Mailers\UserMailer;
use User;

class UserRepository
{


    /**
     * @var UserMailer
     */
    private $mailer;

    function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function findByIdentifierOrCreate($userData)
    {
        //@TODO replace spaces in displayName with underscore
        //check if user exists
        $s_user = User::where(['email'=>$userData->email,'is_socialuser'=>1])->first();
        if ( $s_user )
            return $s_user;

        //create user if new
        $u = ['username'=>$userData->displayName, 'email'=>$userData->email, 'password'=>$userData->identifier, 'is_socialuser'=>1,'confirmed'=>1];
        return User::create($u);
    }


    /**
     * @param User $user
     */
    public function save(User $user)
    {
        $user->save();
        return $this->userMustConfirm($user);
    }


    /**
     * Force a User to confirm account
     * @param $user
     * @internal param $user_id
     */
    private function userMustConfirm($user)
    {

        $confirmation_code = $this->getConfirmCode();
        if ($user) {
            $user->confirmation_code = $confirmation_code;
            $user->save();
            return $this->sendUserConfirmEmail($user);
        }
    }

    /**
     * Generate a confirmation code
     * @return string
     */
    private function getConfirmCode()
    {
        return md5(bin2hex(time()) . time());
    }

    /**
     * Send user an email to confirm account
     * @param User $user
     */
    private function sendUserConfirmEmail(User $user)
    {
        $this->mailer->confirm_account($user);
    }


    /**
     * @param $confirm_code
     * @param $user_id
     * @return bool
     */
    public function confirmUserAccount($confirm_code, $user_id)
    {
        $user = $this->getUser($user_id);

        if ($user->confirmation_code == $confirm_code) {
            $user->confirmed = 1;
            $user->confirmation_code = "";
            $user->save();
            Auth::login($user);
            return true;
        }
        return false;
    }

    public function checkIfAccountConfirmed($user_id)
    {
        if ( $this->getUser($user_id)->confirmation_code ) {
            return true;
        } else {
            return false;
        }
    }

    private function getUser($user_id)
    {
        return User::find($user_id);
    }

}