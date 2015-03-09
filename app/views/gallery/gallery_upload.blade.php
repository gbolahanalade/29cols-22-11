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
    {{Form::open( array('url' =>'/gallery/create', 'files'=> true, 'method'=>'post', 'id'=>'')) }}
        <div class="panel-header">
            <div class="panel-title">
            <div class="breadcrumbs">
                    <h4><a href="{{ action('HomeController@index')}}"><i class="fa fa-home"></i></a>
                    | <a href="{{ action('ProfileController@index') }}">Profile</a> <i class="fa fa-reply"></i></h4>              
            </div>

            <hr>

            <h2 class="text-center">Add Your Photos</h2>
            <h6 class="alert alert-info text-center" role="alert">Maximum of 10 Uploads</h6>
             @if (Session::get('errorg'))

                <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errorg') }}}</a>
                </div>
                @endif

                @if (Session::get('noticeg'))
             <div class="alert"><a name="notice">{{{ Session::get('noticeg') }}}</a>
             </div>
               @endif
            </div> <!-- panel title ends -->
        </div> <!-- panel header ends -->
        <div class="panel-body text-center">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 150px; height: 150px;">{{ HTML::image('img/user.jpg','Album Art', array('width'=>'150px', 'height'=>'150px'))}}</div>
                <div><span class="btn btn-default btn-sm btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{{Form::file('image')}}</span>
                <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
            </div> 
            <div class="margin-bottom-20 center-block">
                {{Form::text('caption','', array('class'=>'form-control','width'=> '50%', 'margin-left'=> '25%', 'placeholder'=>'Enter Caption (Required)'))}}
             </div>

            
             <hr>

            <div class="text-right"> {{Form::submit('Submit', array('class' => 'btn btn-primary') )}}</div>

        </div> <!-- panel body ends-->
    {{Form::close() }}
    </div> <!-- panel ends -->
    </div> <!-- wrap ends -->
    
   
<!-- jQuery Version latest version -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="plugins/blueimp/js/vendor/jquery.ui.widget.js"></script>
<!-- The basic File Upload plugin -->
<script src="plugins/blueimp/js/jquery.fileupload.js"></script>    

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'GalleryController@postCreate';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
</body>

</html>
