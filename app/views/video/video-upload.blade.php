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
<script>
//wait for the DOM to be loaded

$('#upload').on('submit', function(){
    var form = $(this);
    var formdata = false;
    if (window.FormData){
        formdata = new FormData(form[0]);
    }
});
    var formAction = form.attr('action');
    $.ajax({
        url         : '/video/create',
        data        : formdata ? formdata : form.serialize(),
        cache       : false,
        contentType : false,
        processData : false,
        type        : 'POST',
        success     : function(data, textStatus, jqXHR){
            // Callback code
        }
    });
 
</script>
</head>

<body>
    <div id="wrap">
    <div class="panel panel-default center-block upload-page">
    <form class="form-upload" id="upload" enctype="multipart/form-data" method="post" action="/video/create">
    </i></a>
    {{Form::label('video','Upload Mp4/Mpeg/ogg/ From your Computer') }}
    <input type="file" id="video" name="video" accept="video/*"/>
        <div class="panel-header">
            <div class="breadcrumbs text-left">
                <h5><a href="{{ action('HomeController@index')}}"><i class="fa fa-home"></i></a>
                    | <a href="{{ action('ProfileController@index') }}">Profile</a> | <a href="{{action('VideoController@getNew')}}" >
                    Add Video <i class="fa fa-video-camera"></i> <i class="fa fa-reply"></i></a></h5>              
            </div>
            <hr>
             @if (Session::get('errorv'))
                <div class="alert alert-error alert-danger" role="alert"><a name="error">{{{ Session::get('errorv') }}}</a>
                </div>
                @endif

                @if (Session::get('noticev'))
                <div class="alert"><a name="notice">{{{ Session::get('noticev') }}}</a></div>
               @endif
             <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-soundcloud"></i></span>
                    <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Add Youtube Url"/>
                </div>
        </div>
             <hr>         
            <div class="panel-body">
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-">Video Title (Required)</i></span>
                    <input type="text" class="form-control" id="title" name="title"/>
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-">Description</i></span>
                    {{Form::textarea('description', '', array('class'=>'form-control', 'rows'=>'3'))}}
                </div>
                <div>
                    <div class="col-md-4">
                    <label for="upld-img" class="control-label">Album Art (Optional)</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 150px; height: 150px;">
                            {{ HTML::image('img/user.jpg','Album Art', array('width'=>'150px', 'max-height'=>'150px'))}}</div>
                            <div><span class="btn btn-default btn-sm btn-file"><span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span><input type="file" name="image" id="image" accept="image/*"/></span>
                            <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-8">
                    <ul class="list-unstyled select">
                        <li> {{Form::label('genre','Genre') }} </li>
                        <li><select name="genre" id="genre" class="form-control">
                                <option>Music video</option>
                                <option>Comedy</option>
                                <option>Dance</option>
                            </select>
                        </li>
                    </ul>
                    </div> 
                </div>                         
            </div> <!-- panel-body ends -->
            <div class="text-right">
                <input type="submit" id="submit-btn" value="Upload" />
            </div> <!-- panel-footer ends -->
        <img src="asset('img/ajax-loader.gif')}}" id="loading-img" style="display:none;" alt="Please Wait"/>

    {{Form::close()}}
        <div id="progressbox" ><div id="progressbar"></div>
             <div id="statustxt">0%</div></div>

            
            <div id="output"></div>
    </div> <!-- panel ends -->
    </div> <!-- wrap ends -->

<!-- jQuery Version 1.11.0 -->
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