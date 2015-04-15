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

    <div class="container content">

    <div class="row">
    {{Form::open( array('url' =>'/profile/upload', 'files'=> true, 'method'=>'post', 'class'=>'login-page main-content center-block')) }}
        <div class="panel-header">
            <h2>Add Profile Photo</h2>
            @include('flash::message')
            @include('layouts.partials.errors')
        </div>
        <div class="panel-body text-center">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 150px; height: 150px;">
                    <img src="{{$pic}}" alt="Profile Image" style="width:150px;" />

                </div>

                <div>
                    <span class="btn btn-default btn-sm btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>{{Form::file('image')}}
                     </span>
                    <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
            </div> 
            <hr>
            <div> 
            	<span>{{Form::submit('Submit', array('class' => 'btn btn-primary btn-sm') )}}</span>
            	<span><a href="{{ action('ProfileController@index')}}" class="btn btn-danger btn-sm">Cancel</a></span>
            </div>
        </div> <!-- panel body ends -->
        
        {{Form::close() }}
        <!-- CONTENT -->
</div>

    </div>

    <div id="push"></div>
</div>
@include('layout.partials.footer')
