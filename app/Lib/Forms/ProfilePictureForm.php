<?php namespace App\Lib\Forms;


use Laracasts\Validation\FormValidator;

class ProfilePictureForm extends FormValidator {

    protected $rules = [
        'image' => 'required|image|max:150'
    ];

    protected $messages = [
        'image.required'    => 'The Profile Picture is required.',
        'image.image'       => 'The file type must be of an image',
        'image.size'        => 'Maximum allowed file size is 150KB',
    ];
} 