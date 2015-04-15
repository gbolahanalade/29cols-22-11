<?php

use App\Lib\Forms\RegistrationForm;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends \BaseController {


    /**
     * @var RegistrationForm
     */
    private $registrationForm;
    /**
     * @var UserRepository
     */
    private $repository;

    function __construct(RegistrationForm $registrationForm, UserRepository $repository)
    {
        $this->registrationForm = $registrationForm;
        $this->repository = $repository;
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->registrationForm->validate(Input::all());

        extract(Input::only('username', 'email', 'password'));

        $user = User::register($username,$email,$password);

        $this->repository->save($user);

        Flash::overlay('Please check your email for further instructions.', 'Account Registered');
        return Redirect::back();


	}


	public function confirm($confirm_code=null, $userid=null)
    {
        //if confirm code is empty return error
        if ( $confirm_code == null || $userid == null ):

            Flash::overlay('You have made a mistake in your request. Please try again.');
            return Redirect::home();
        endif;

        $confirm_code = Request::segment(3);
        $userid = Crypt::decrypt(Request::segment(4));

        //if user is already confirmed redirect to login
        if ( !$this->repository->checkIfAccountConfirmed($userid) )
        {
            Flash::message("Your Account has already been confirmed. Please Login.");
            return Redirect::route('login_path');
        }


        //confirm user account
        if ( $this->repository->confirmUserAccount($confirm_code, $userid) )
        {
            Flash::overlay("Your account has been confirmed. You have been logged in.");
            return Redirect::home();
        }

        Flash::error("Account confirmation failed");
        return Redirect::home();
    }
}
