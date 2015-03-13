<?php

class OauthController extends \BaseController {



	public function facebook($facebook=null)
	{
		return View::make('fb.test');
	}
	
	public function test()
	{
		require_once(app_path() . '/Lib/hybridauth/');
		return View::make('fb.test');
	}

	public function process($provider)
	{
		$provider = $provider;
		try {
			
			$config = app_path() . '/Lib/hybridauth/config.php';
			require_once(app_path() . '/Lib/hybridauth/Hybrid/auth.php');
		
			$hybridauth = new Hybrid_Auth($config);
			
			$adapter = $hybridauth->authenticate($provider);
			
			$user_profile = $adapter->getUserProfile();
			dd($user_profile);
		}
		catch( \Exception $e )
		{
			Flash::error("Authentication failed");
			return View::make('fb.test');
		}
		
		return $provider;
	}


}
