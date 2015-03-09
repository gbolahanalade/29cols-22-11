<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password Music | 27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet" media="screen">   

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">       
    <link href="{{ asset('plugins/blueimp/css/jquery.fileupload.css') }}" rel="stylesheet">         

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrap">
    <div class="container">
    <div class="row">
    <form class="login-page main-content center-block" method="POST" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">       
                <div class="breadcrumbs">
                <h4><a href="{{ action('HomeController@index')}}"><i class="fa fa-home"></i></a>
                <i class="fa fa-reply"></i></h4>              
                </div>
                <div class="text-center">
                <h1 class="">Forgot Password</h1>
                </div>
            <div class="form-group">
                <!-- <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label> -->
                <div class="input-append input-group">
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                    <span class="input-group-btn">
                        <input class="btn btn-default" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
                    </span>
                </div>
            </div>
            @if (Session::get('error'))
                <div class="alert alert-error alert-danger" role="alert">{{{ Session::get('error') }}}</div>
            @endif

            @if (Session::get('notice'))
                <div class="alert alert-info" role="alert">{{{ Session::get('notice') }}}</div>
            @endif
    </form>
    </div> <!-- row ends -->
    </div>
    </div>
    
<!-- JS Global Compulsory -->           
<script type="text/javascript" src="{{ asset('plugins/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script> 

</body>

</html>

