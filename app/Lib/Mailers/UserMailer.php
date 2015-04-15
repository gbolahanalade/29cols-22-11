<?php namespace Lib\Mailers;


use Illuminate\Support\Facades\Crypt;
use User;

class UserMailer extends Mailer {

    public function test()
    {
        $view = 'emails.welcome';
        $data = ['firstname'=>'Shegun', 'lastname'=>'Babs'];
        $subject = "First Test email";
        $user = (Object) (['email'=>'shegun.babs@gmail.com']);

        return $this
            ->sendTo($user, $subject, $view, $data);
    }

    public function welcome_social()
    {

    }

    public function welcome(){}


    /**
     * Send email to User to confirm account
     * @param User $user
     */
    public function confirm_account(User $user)
    {
        $view = 'emails.confirmation';
        $data = [
            'username' => $user->username,
            'confirm_url' => getenv('CONFIRM_URL') . $user->confirmation_code . '/' . Crypt::encrypt($user->id),
        ];
        $subject = 'Please confirm your email on '. getenv('SITE_NAME');

        return $this->sendTo($user, $subject, $view, $data);
    }

} 