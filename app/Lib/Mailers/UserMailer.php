<?php namespace Lib\Mailers;


use User;

class UserMailer extends Mailer {

    public function welcome(){}

    public function confirm_account(User $user)
    {
        $view = 'emails.confirm_email';
        $data = [];
        $subject = 'Pleas confirm your email on 29cols.com';

        return $this->sendTo($user, $subject, $view, $data);
    }

} 