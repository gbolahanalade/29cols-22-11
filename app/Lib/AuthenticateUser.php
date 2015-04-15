<?php namespace App\Lib;

use App\Repository\UserRepository;
use Hybrid_Auth;
use Auth;

define('APP_PATH', app_path());
define('SOCIAL_AUTH', APP_PATH . '/config/social_auth.php');
define('FB_AUTH', APP_PATH . '/config/fb_auth.php');
define('TW_AUTH', APP_PATH . '/config/twit_auth.php');
define('GG_AUTH', APP_PATH . '/config/gg_auth.php');

class AuthenticateUser
{

    CONST FACEBOOK = FB_AUTH;
    CONST TWITTER = TW_AUTH;
    CONST GOOGLE = GG_AUTH;

    /**
     * @var Auth
     */
    private $auth;
    /**
     * @var UserRepository
     */
    private $userRepository;

    function __construct(Auth $auth, UserRepository $userRepository)
    {

        $this->auth = $auth;
        $this->userRepository = $userRepository;
    }

    /**
     * Do the social login. if we have auth, redirect to the social login page
     * if not get the social user details.
     *
     * @param $auth
     * @param $provider
     * @param $listener
     */
    public function execute($auth, $provider, $listener)
    {

        //Do social auth
        if ($auth == 'auth') return $this->getAuthorizationFirst();

        //social auth
        dd($this->getSocialUser($provider));
        $user = $this->userRepository->findByIdentifierOrCreate($this->getSocialUser($provider));

        \Auth::login($user, true);

        return $listener->userHasLoggedIn($user);

    }

    private function getAuthorizationFirst()
    {
        return \Hybrid_Endpoint::process();
    }

    private function getSocialUser($provider)
    {
        switch (strtolower($provider)) {
            case 'facebook':
                $provider = 'Facebook';
                $config = FB_AUTH;
                break;
            case 'twitter':
                $provider = 'Twitter';
                $config = TW_AUTH;
                break;
            case 'google':
                $provider = 'Google';
                $config = GG_AUTH;
                break;
            default:
                $oauth = null;
                $config = null;
        }

        $oauth = new hybrid_Auth($config);
        $provider = $oauth->authenticate($provider);
        return  $provider->getUserProfile();
    }

}