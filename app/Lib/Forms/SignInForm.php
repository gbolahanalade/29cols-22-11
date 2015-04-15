<?php namespace App\Lib\Forms;


use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator {

    protected $rules = [
        'email'=>'required|email',
        'password'=>'required'
    ];

} 