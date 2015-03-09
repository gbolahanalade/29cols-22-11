<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Video | 27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet" media="screen">   

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">    

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
    <div class="wrap">
    <div class="panel panel-default center-block upload-page">
        <div class="panel-header">
            <div class="panel-title">
            <div class="breadcrumbs">
                <h4><a href="{{ action('HomeController@index')}}"><i class="fa fa-home"></i></a> | 
                <a href="{{ action('ProfileController@index') }}">Profile</a> <i class="fa fa-reply"></i></h4>              
            </div>
            <h2 class="text-center">Add Your Video <i class="fa fa-video-camera"></i></h2>
            <h6 class="alert alert-info text-center" role="alert">Maximum of 10 Uploads (add your best work)</h6>
            </div>
        
        @if (Session::get('errorv'))
        <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errorv') }}}</a>
        </div>
        @endif
        @if (Session::get('noticev'))
        <div class="alert alert-info"><a name="notice">{{{ Session::get('noticev') }}}</a>
        </div>
        @endif
        </div> <!-- panel header end -->
        <div class="panel-body"> 
                    <h3></h3>               
                    <a class="btn-group-addon btn btn-default btn-file btn-block" type="file" placeholder="">
                    <i class="fa fa-desktop"> 
                     {{Form::open( array('url' =>'/video/create', 'files'=> true, 'method'=>'post', 'id'=>'myForm')) }}</i></a>
                     {{Form::label('video','Upload Mp4/Mpeg/ogg/quicktime/wmv From your Computer') }}
                     {{ Form::file('video') }}
                    <!-- progress bar -->
                    <div class="progress progress-striped">
                      <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                        <span class="sr-only">10% Complete</span>
                      </div>
                    </div>

                     <div class="heading"><h2>OR</h2></div>         
                    <!-- separator end -->
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-soundcloud"></i></span>
                    {{Form::text('youtube', 'Add Youtube Url', array('class'=>'form-control'))}}
                </div>

                <div class="text-right">{{Form::submit('Upload video', array('class'=>'btn btn-primary'))}}</div>
        </div> <!-- panel-body end -->
    {{Form::close()}}
    </div> <!-- panel end -->
    </div> <!-- wrap end -->

<!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>
    <script src="{{ asset('plugins/jquery.form.js') }}"></script>
    <script src="{{ asset('js/progressbar.js') }}"></script>
    <!-- JS Global Compulsory -->           

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
<!-- script for progress bar -->


<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>

</html>