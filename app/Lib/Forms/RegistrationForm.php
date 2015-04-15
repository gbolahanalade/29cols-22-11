<?php namespace App\Lib\Forms;


use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

    protected $rules = [
        'username'  => 'required',//@TODO must not exist in the database
        'email'     => 'required',//@TODO must not exist in the database
        'password'  => 'required|confirmed',
        'terms'     => 'required',
    ];
} 