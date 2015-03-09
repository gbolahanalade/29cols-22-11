<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Videos | 27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="{{asset('css/style.css') }}">

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

<body id="upldvideo-page">

    
         {{Form::open( array('url' =>'/video/create', 'files'=> true, 'method'=>'post', 'class'=>'text-center')) }}
        <div class="modal-header">
            <h2>Add Your Videos</h2>
            <h6 class="red">Maximum of 10 Uploads</h6>
            @if (Session::get('errorv'))

                <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errorv') }}}</a>
                </div>
                @endif

                @if (Session::get('noticev'))
             <div class="alert"><a name="notice">{{{ Session::get('noticev') }}}</a>
             </div>
               @endif
        </div>
        <div class="modal-body">
            <div class="">
                <div class="upld-comp"> 
                    <h3></h3>               
                    <a class="btn-group-addon btn btn-default btn-file btn-block" type="file" placeholder="">
                        <i class="fa fa-desktop"> Select video from your computer{{Form::file('image')}}</i></a>
                </div>
                    <!-- separator -->
                    <div class="heading upld-section-seprtr"><h2>OR</h2></div>         
                    <!-- separator end -->
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-youtube"></i></span>

                     {{Form::text('youtube','Embed your YouTube video link here', array('class'=>'form-control span5')) }}
                    <span class="input-group-addon" name="submit" type="submit">Add <i class="fa fa-plus"></i></span>
                </div>
            </div>
            <hr>
            <div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-">Video Title (Required)</i></span>
                    {{Form::text('title', '', array('class'=>'form-control'))}}
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-">Description</i></span>
                    {{Form::textarea('description', '', array('class'=>'form-control', 'rows'=>'3'))}}
                </div>
            </div>
            <div class="row">
                    <div class="col-md-6">
                         {{Form::label('image','Album Art (Optional)', array('class'=> 'control-label'))}}
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 200px;">{{ HTML::image('img/user.jpg','Album Art')}}</div>
                            <div><span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{{Form::file('image')}}</span>
                            <a href="#" class="btn btn-u fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 form-group text-left">
                        <ul class="list-unstyled">
                            <li>{{Form::label('tags','Tags', array('class'=> 'control-label'))}}
                                <i class="icon-prepend fa fa-tag"></i></li>
                            <li> {{Form::text('tags', 'Type tags for your video here' , array('class'=>'form-control')) }}
                             </li>
                        </ul>
                        <ul class="list-unstyled select">
                            <li>{{Form::label('genre','Genre', array('class'=> 'control-label'))}}</li>

                            <li><select name="video">
                                       <option value="music">Music Video</option>
                                        <option value="comedy">comedy</option>
                                         <option value="freestyle">Freestyle</option>
                                         <option value="dance">Dance</option>
                                         <option value="drama">Drama</option>
                                        </select> </li>

                        </ul>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            {{Form::button('Back',array('class'=>'btn btn-default', 'data-dismisss'=> 'modal'))}}
        
            {{Form::button('Save',array('class'=>'btn btn-primary'))}}
            
        </div>
    {{Form::close()}}

   
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
