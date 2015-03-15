<?php

define('APP_PATH', app_path());
define('SOCIAL_AUTH', APP_PATH . '/config/social_auth.php');
define('FB_AUTH', APP_PATH . '/config/fb_auth.php');
define('TW_AUTH', APP_PATH . '/config/twit_auth.php');
define('GG_AUTH', APP_PATH . '/config/gg_auth.php');

class OauthController extends \BaseController {

    CONST FACEBOOK = FB_AUTH;
    CONST TWITTER = TW_AUTH;
    CONST GOOGLE = GG_AUTH;
    /**
     * @param $provider
     * @param null $auth
     * @return mixed
     */
    public function process($provider, $auth=null)
    {
        if ( $auth == 'auth' )
        {
            try {
                Hybrid_Endpoint::process();
            }
            catch ( \Exception $e )
            {
                return Redirect::to($provider);
            }
            return;
        }

        switch(strtolower($provider))
        {
            case 'facebook':
                $provider = 'Facebook';
                $config = self::FACEBOOK;
                break;
            case 'twitter':
                $provider = 'Twitter';
                $config = self::TWITTER;
                break;
            case 'google':
                $provider = 'Google';
                $config = self::GOOGLE;
                break;
            default:
                $oauth = null;
        }

        try {
            $oauth = new Hybrid_Auth($config);
            $provider = $oauth->authenticate($provider);
            $profile = $provider->getUserProfile();
        }
        catch ( Exception $e )
        {
            Flash::error("Unknown Error. Please try again");
            return Redirect::to('social_login.test');
        }


        //login via social media successful if we get here.
        //store a Session variable to kwow this user is from social media
        Session::put('social_auth', $config);

        return var_dump($profile) . '<a href="/users/logout">Log Out</a>';
    }

}
