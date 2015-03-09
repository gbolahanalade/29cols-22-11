<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet" media="screen">  

    <!-- Custom CSS -->
    <link href="{{ asset('plugins/blueimp/css/jquery.fileupload.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">    
    
    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">   
        <div class="main-menu">
            <div class="row center-block">
                    <!-- Brand and toggle get grouped for better mobile display -->
            <!-- HEADER 2 COLUMN 1 -->  
            <div class="col-lg-8 col-sm-8 col-xs-8">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{action('HomeController@index')}}">
                        {{HTML::image('img/logo.png', '27 colours', array('class'=>'img-responsive', 
                        'width'=>'130px', 'height'=>'70px', 'style'=>'margin-top:-7px;'))}}
                    </a>
                    <button type="button" class="navbar-toggle hidden" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="">Menu</span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse hidden" id="navbar-collapse-1">
                     <!-- MENU --> 
                    <div class="">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active">
                                <a href="{{ action('HomeController@index')}}" class="active"><i class="fa fa-home fa-fw centered"></i> <span class="network-name"></span></a>
                            </li>
                            <li><a href="{{ action('SongController@index')}}">Music</a></li>
                            <li><a href="{{ action('VideoController@index')}}">Videos</a></li>
                            <li><a href="{{ action('GalleryController@index')}}">Pictures</a></li>
                            <li><a href="{{ action('TalentController@index')}}">Talents</a></li>
                        </ul>
                    </div>            
                </div>
            </div>
            <!-- HEADER 2 COLUMN 2 -->    
            <div class="col-sm-4 col-xs-4 menu-button hidden">
                     <!-- MENU --> 
                        <ul class="list-inline btn-group pull-right">
                            @if(Auth::check())
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                            {{HTML::image(isset(Auth::user()->profilePhoto->image) ? Auth::user()->profilePhoto->image : 'img/user.jpg', 'Profile thumbnail', array('width'=>'38px', 'height'=>'38px'))}}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">

                                            @if(Auth::check())
                                                <li>{{ HTML::link('/profile', 'Profile Page')}}</li>
                                                <li>{{ HTML::linkRoute('logout', 'logout' )}} </li>
                                            @else
                                                                           
                                            <li>{{ HTML::linkRoute('register', 'Registration', array('class'=>'hidden-xs hidden-sm'))}}</li>
                                            <li>{{ HTML::linkRoute('login', 'Sign In' )}}</li>
                                            @endif   
                                @else
                            <li class="btn-group upload-btn">
                                <button class="btn btn-default btn-sm" type="button" aria-expanded="false"><span class="hidden-xs">{{ HTML::linkRoute('login', 'Upload')}}</span>
                                <i class="fa fa-upload fa-fw centered"></i></button>
                            </li>
                            <li class="btn-group">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span class="hidden-xs">Register | Sign in
                                </span><span class="caret"></span>
                                <i class="fa fa-user fa-fw centered"></i></button>
                                    <ul class="list-unstyled dropdown-menu" role="menu">
                                        <li>{{ HTML::linkRoute('register', 'Register' )}}</li>
                                        <li>{{ HTML::linkRoute('login', 'Sign In')}}</li>               
                                    </ul>
                            </li>
                            @endif
                        </ul>
            </div>
            
          </div>
        </div>
    </nav>
    <div id="wrap">

    <div class="container">

    <div class="row">

    <form class="register-page center-block" role="form" method="POST" action="{{{ URL::to('users') }}}" accept-charset="UTF-8">

        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

            <div class="text-center">
                <header>
                    <h2 class="margin0">Register</h2>
                </header>
                <div class="list-inline text-center margin-bottom-10 hidden">

                    <a class="btn rounded btn-facebook btn-facebook-inversed" data-original-title="Facebook" 

                        href="{{action('HomeController@loginWithFacebook')}}"><i class="fa fa-facebook"></i> Facebook</a>

                    <a class="btn rounded btn-youtube btn-youtube-inversed" data-original-title="Google" 

                        href="{{action('HomeController@loginWithGoogle')}}"><i class="fa fa-google"></i> Google</a>

                </div>

                <p>Already registered? Click {{ HTML::linkRoute('login', 'here' )}} to sign in.</p>

            </div>

            <!--=== Content Part ===-->

            <div class="input-group margin-bottom-20">

                <span class="input-group-addon"><i class="fa fa-user "></i></span>

                <input required type="text" class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" name="username" id="username" value="{{{ Input::old('username') }}}">

            </div>

            <div class="input-group margin-bottom-20">

                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                <input required type="email" class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" name="email" id="email" value="{{{ Input::old('email') }}}">

            </div>

            <div class="input-group margin-bottom-20">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input required type="password" class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" name="password" id="password">

            </div>

            <div class="input-group margin-bottom-30">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input required type="password" class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" name="password_confirmation" id="password_confirmation">

            </div>

            

            <label class="checkbox">

                <input required type="checkbox"> 

                <p>I read have the <a target="_blank" href="#">Terms and Conditions</a></p>

            </label>



            @if (Session::get('error'))

                <div class="alert alert-error alert-danger" role="alert">

                    @if (is_array(Session::get('error')))

                        {{ head(Session::get('error')) }}

                    @endif

                </div>

            @endif



            @if (Session::get('notice'))

                <div class="alert alert-info" role="alert">{{ Session::get('notice') }}</div>

            @endif

            <button type="submit" class="btn btn-primary rounded btn-md">{{{ Lang::get('confide::confide.signup.submit') }}}</button>

    </form>

    </div>

    </div>

    </div>

<footer id="footer">
        <div class="row">
            <div class="container">
                <!-- FOOTER LEFT COL-6 -->
                <div class="text-center">
                    <p class="copyright text-muted small">
                        Copyright &copy; 27Colours 2014. All Rights Reserved
                    </p>
                </div>
                <!-- FOOTER RIGHT COL-6 -->
                <!-- <div class="col-lg-6">
                    <ul class="list-inline pull-right">
                        <li>
                            <a href="#home">Contact</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#faqs">FAQS</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#services">Sponsors</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#">Credits</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
</footer>

<!-- JS Global Compulsory -->           

<script type="text/javascript" src="{{ asset('plugins/jquery-1.10.2.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('plugins/jquery-migrate-1.2.1.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script> 



</body>



</html>

