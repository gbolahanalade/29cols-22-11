<?php
use App\Lib\Forms\SignInForm;
use Illuminate\Support\Facades\Auth;


/**
 * UsersController Class
 *
 * Implements actions regarding user management
 */
class UserController extends Controller
{


    /**
     * @var SignInForm
     */
    private $signInForm;

    function __construct(SignInForm $signInForm)
    {
        $this->beforeFilter('guest', ['except'=>'destroy']);
        $this->signInForm = $signInForm;
    }

    public function login()
    {
        return View::make('user.login');
    }

    public function store()
    {
        $input = Input::only('email','password');
        $this->signInForm->validate($input);
        $input = array_add($input, 'confirmed',1);

        if ( Auth::attempt($input, true) )
        {
            Flash::Overlay('You have been logged in successfully.');
            return Redirect::intended('/profile');
        } else {
            Flash::error('User Login Failed');
            return Redirect::to('user/login')->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        Flash::message('You have been logged out');
        return Redirect::home();
    }



}
