<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Pictures | 27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet" media="screen">  

    <!-- Custom CSS -->
    <link href="{{ asset('plugins/blueimp/css/jquery.fileupload.css') }}" rel="stylesheet">
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
    {{Form::open( array('url' =>'/profile/upload', 'files'=> true, 'method'=>'post', 'class'=>'text-center')) }}
    {{Form::hidden('id', $user->id)}}
        <div class="panel-header">
            <h2>Add Profile Photo</h2>
        
             @if (Session::get('errors'))

                <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errors') }}}</a>
                </div>
                @endif

                @if (Session::get('notices'))
             <div class="alert"><a name="notice">{{{ Session::get('notices') }}}</a>
             </div>
               @endif
        </div>
        <div class="panel-body text-center">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 150px; height: 150px;">{{ HTML::image('img/user.jpg','Album Art', 
                array('width'=>'150px', 'height'=>'150px'))}}</div>
                <div><span class="btn btn-default btn-sm btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{{Form::file('image')}}</span>
                <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
            </div> 
            <hr>
            <div> {{Form::submit('Submit', array('class' => 'btn btn-primary') )}}</div>
        </div> <!-- panel body ends -->
        
        {{Form::close() }}
        <!-- CONTENT -->
    </div> <!-- panel ends -->
    </div> <!-- wrap ends -->
   
<!-- jQuery Version latest version -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>
    <!-- JS Global Compulsory -->           

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>

</html>
