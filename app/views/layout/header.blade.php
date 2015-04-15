<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', '27 Colours')</title>
    <meta name="description" content="@yield('description','Looking for the next singing, dancing and modelling talents')">
    <meta name="keywords" content="@yield('keywords', 'singing, photoshoot,modelling,talent search')">

    <!-- Global Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}">
    <!-- audio player -->
    <link rel="stylesheet" href="{{ asset('plugins/musicplayer/css/audioplayer.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/revolution-slider/rs-plugin/css/settings.css') }}" type="text/css" media="screen">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Exo+2:500|Raleway:500|Open+Sans:400,600' rel='stylesheet' type='text/css'>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
        <script src="{{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="{{ asset('http://w.sharethis.com/button/buttons.js') }}"></script>
    <script type="text/javascript">stLight.options({publisher: "462b8e41-098f-4d6e-af7f-52472fed576a", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=941520272544256&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">   
        <div class="main-menu">
            <div class="row center-block">
                    <!-- Brand and toggle get grouped for better mobile display -->
            <!-- HEADER 2 COLUMN 1 -->  
            <div class="col-lg-8 col-sm-8 col-xs-8 padding2-right0">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        {{HTML::image('img/logo.png', '27 colours', array('class'=>'img-responsive', 
                        'width'=>'130px', 'height'=>'70px', 'style'=>'margin-top:-7px;'))}}
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                @yield('header')
            </div>
            <!-- HEADER 2 COLUMN 2 -->    
            <div class="col-sm-4 menu-button">
                     <!-- MENU --> 
                        <ul class="list-inline btn-group pull-right">
                            @if(Auth::check())
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{$pic}}" style="width:38px;height: 38px;" />
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">

                                            @if(Auth::check())
                                                <li>{{ HTML::link('/profile', 'Profile Page')}}</li>
                                                <li>{{ HTML::linkRoute('logout_path', 'logout' )}} </li>
                                            @else
                                                                           
                                            <li>{{ HTML::linkRoute('register_path', 'Registration', array('class'=>'hidden-xs hidden-sm'))}}</li>
                                            <li>{{ HTML::linkRoute('login_path', 'Sign In' )}}</li>
                                            @endif   
                                @else
                            <li class="btn-group upload-btn">
                                <button class="btn btn-default btn-sm" type="button" aria-expanded="false"><span class="">{{ HTML::linkRoute('login', 'Upload')}}</span>
                                <i class="fa fa-upload fa-fw centered"></i></button>
                            </li>
                            <li class="btn-group">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span class="">Register | Sign in
                                </span><span class="caret"></span>
                                <i class="fa fa-user fa-fw centered"></i></button>
                                    <ul class="list-unstyled dropdown-menu" role="menu">
                                        <li>{{ HTML::linkRoute('register_path', 'Register' )}}</li>
                                        <li>{{ HTML::linkRoute('login_path', 'Sign In')}}</li>
                                    </ul>
                            </li>
                            @endif
                        </ul>
            </div>
            
          </div>
        </div>
    </nav>
    <!-- AD & Logo
    HEADER 1    
    <div class="ad-space">
        <a class="container" href="#">
            {{ HTML::image('img/ad/ad1050.GIF', 'AD Space', array('class'=>'img-responsive center-block'))}}
        </a>
    </div> -->
    