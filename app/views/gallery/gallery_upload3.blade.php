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
    <link href="{{ asset('css/fileinput.min.css') }}" rel="stylesheet" media="all">
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="{{asset('js/fileinput.min.js')}}" type="text/javascript"></script>    

    <script src="{{ asset('js/bootstrap.min.js') }} type="text/javascript""></script>
<script>
function _(el){
    return document.getElementById(el);
}
function uploadFile() {
    var song =_("song").files[0];
    var image =_("image").files[0];
    var caption = _("caption").value;
    var category = _("cat").value;
   // alert(file.name+" | "+file2.name+" |"+file.size+" | "+file2.size+" |"+file.type);
    var formdata = new FormData();
    formdata.append("song", song);
    formdata.append("image", image);
    formdata.append("cap", caption);
    formdata.append("cat", category);
    var ajax =new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "/gallery/create");
    ajax.send(formdata);
}

function progressHandler(event) {
    _("loaded_n_total").innerHTML= "Uploaded "+event.loaded+" bytes of "+event.total;
    var percent = (event.loaded /event.total) * 100;
    _("progresBar").value = Math.round(percent);
    _("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}

function completeHandler(event) {
   _("status").innerHTML=event.target.responseText;
    _("progresBar").value =0;
    window.location.replace("http://localhost:8060/profile");
}

function errorHandler(event) {
    _("status").innerHTML="Upload Failed";
}

function abortHandler(event) {
    _("status").innerHTML="Upload Aborted";
}

</script>

</head>

<body>
    <div class="wrap">
    <div class="panel panel-default center-block upload-page">
    <form id="upload" enctype="multipart/form-data" method="post">
   <!-- {{Form::open( array('url' =>'/gallery/create', 'files'=> true, 'method'=>'post', 'enctype'=>'multipart/form-data')) }} -->
        <div class="panel-header">
            <div class="panel-title">
            <div class="breadcrumbs">
                    <h4><a href="{{ action('HomeController@index')}}"><i class="fa fa-home"></i></a>
                    | <a href="{{ action('ProfileController@index') }}">Profile</a> <i class="fa fa-reply"></i></h4>              
            </div>
            <h2 class="text-center">Add Your Music <i class="fa fa-music"></i></h2>
            <h6 class="alert alert-info text-center" role="alert">Maximum of 10 Uploads (add your best work)</h6>
            <a class="btn-group-addon btn btn-default btn-file btn-block" type="file" placeholder="">
            <i class="fa fa-desktop">
            @if (Session::get('errorg'))

                <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errorg') }}}</a>
                </div>
                @endif

                @if (Session::get('noticeg'))
             <div class="alert"><a name="notice">{{{ Session::get('noticeg') }}}</a>
             </div>
               @endif 
                {{Form::label('songLabel','Upload Mp3 From your Computer') }}</i></a>
                <input type="file" id="song" name="song"/>
                 <!-- {{ Form::file('song', ['id'=>'song']) }} -->

            <hr>

            <h2 class="text-center">Add Your Photos</h2>
            <h6 class="alert alert-info text-center" role="alert">Maximum of 10 Uploads</h6>
            </div> <!-- panel title ends -->
        </div> <!-- panel header ends -->
        <div class="panel-body">
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

            <div class="margin-bottom-20 center-block">
                <input type="text" class="form-control"id="caption" name="caption" onblur="validate('caption1', this.value)" placeholder="Enter Caption(Required)"/>
               <!-- {{Form::text('caption','', array('class'=>'form-control','width'=> '50%', 'margin-left'=> '25%', 'placeholder'=>'Enter Caption (Required)'))}} -->
                <ul class="list-unstyled select">
                   <li> {{Form::label('cat','Category') }} </li>

                   <li><select class="form-control" name="cat" id="cat" required>
                        <option>modelling</option>
                        <option>others</option>
                    </select>
        
                        <!--<li>{{Form::select('category', [
                                'modelling' => 'Modelling',
                                'others' => 'Others'
                              ], 0, ['class' => 'form-control']) }}
                        </li> -->
                    </ul>
             </div>

            
             <hr>
             <progress id="progresBar" value="0" max="100" style="width:300px;">
            </progress>
            <h3 id="status"></h3>
            <p id="loaded_n_total"></p>
            
            <div id="output"></div>

            <div class="text-right">
                <input type="button" value="Upload File" onclick="uploadFile()">
               <!-- <input type="submit" value= "Submit" class="btn btn-primary"> -->

                </div>

        </div> <!-- panel body ends-->
    {{Form::close() }}
    </div> <!-- panel ends -->
    </div> <!-- wrap ends -->
    
   
<!-- jQuery Version latest version -->

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
<!-- The basic File Upload plugin -->

<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->


</body>

</html>
