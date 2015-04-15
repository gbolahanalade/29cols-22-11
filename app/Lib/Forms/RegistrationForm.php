<?php namespace App\Lib\Forms;


use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

    protected $rules = [
        'username'  => 'required|alpha_dash|min:6|max:15|unique:users,username',//@TODO must not exist in the database
        'email'     => 'required|email|unique:users,email',//@TODO must not exist in the database
        'password'  => 'required|confirmed',
        'terms'     => 'required',
    ];
} 