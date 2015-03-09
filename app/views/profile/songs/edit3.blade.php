<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Songs | 27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet" media="screen">     

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/upload-page.css') }}">
    <link href="{{ asset('css/main.css" rel="stylesheet') }}">
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

<body id="upldsong-page">

    <section class="content">
        <!-- CONTENT -->
        <div class="upld-block">
            <div class="row ">              
                <h2>Edit {{$song->id}}</h2>
                                        
                        <hr> 
                            @if (Session::get('errors'))

                <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errors') }}}</a>
                </div>
                @endif

                @if (Session::get('notices'))
             <div class="alert"><a name="notice">{{{ Session::get('notices') }}}</a>
             </div>
               @endif

            {{Form::model($song, array('url' => array('/song/edit', $song->id), 'files'=> true, 'method'=>'post')) }}
                    <h4>{{Form::label('music','Upload Another Song From your Computer') }}</h4> 

                     <!-- <i class ="fa">{{ Form::file('music', array('class'=>'btn btn-u btn-file btn-file-inverse')) }}</i>
                            <div class="heading upld-section-seprtr"><h3>OR</h3></div> -->

                                                                                           
                                      <!-- upload soundcloud -->
                            <div class="margin-bottom-20 input-group center-block">
                                <h2 class="text-center">Add Your Music <i class="fa fa-music"></i></h2>
                                {{Form::label('music','Upload Mp3 From your Computer') }}
                                 </div>
                                {{ Form::file('song')}}
                                {{ Form::label('soundcloud','Edit SoundCloud Link', array('class'=>'btn btn-u btn-file btn-file-inverse'))}}
                                <i class="input-group-addon fa fa-soundcloud">
                                {{Form::text('soundcloud', '<iframe width="100%" height="100px" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'.$song->soundcloud.'&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>')}}
                                                </i>
                                     </div>
                                        <hr>
                                
                                    <h4>Add YouTube Link For Your Song's Video (Optional)</h4>
                                       <div class="margin-bottom-20  input-group center-block">
                                            {{Form::label('youtube','Edit Youtube Link', array('class'=>'btn btn-u btn-file btn-file-inverse'))}}
                                            <i class="input-group-addon fa fa-youtube">
                                            {{Form::text('youtube')}} </i>
                                         </div>
                                    <h4 class="btn btn-u btn-file btn-file-inverse"> Edit Song Description(Required)</h4>
                                        <div class="margin-bottom-20 input-group center-block">
                                            {{Form::textarea('description')}}
                                            
                                         </div>

                                                                                                                                                      
                            <h4>Song Details</h4>
                            
                            <div class="margin-bottom-20"> 
                            {{Form::label('title','Edit title',array('class'=>'btn btn-u btn-file btn-file-inverse'))}}
                            <i class="fa"> {{Form::text('title')}}</i>
                             
                            </div>
                            
                            <div class="upld-imgbdrght col-sm-6">
                                <label for="upld-img" class="control-label">Edit Album Art (Optional)</label>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width:200px; height:200px;">
                                        {{ HTML::image($song->image,'Album Art')}}</div>
                                    <div><span class="btn btn-u btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                         {{Form::file('image')}}
                                        </span><a href="#" class="btn btn-u fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                    </div> 
                                </div>
                                <div class="upld-tagcol col-sm-6">
                                  <ul class="list-unstyled">
                                    <li>
                                        <i class="icon-prepend glyphicon glyphicon-tags">{{Form::label('tags','Edit tags') }}</i></li>
                                        <li>
                                            {{Form::textarea('tags')}}</li>
                                    </ul>
                                    <ul class="list-unstyled select">
                                        <li><h3>Genre</h3></li>
                                       <li> <select name="genre">
                                        <?php
                                        $genre =array('Music Video' => 'Music Video',
                                                    'Comedy'=> 'Comedy',
                                                    'Dance' => 'Dance');
                                        foreach($genre as $key => $value) {
                                            echo "<option value=\"$key\"> $value</option>\n";
                                        }
                                            
                                        ?>
                                    </select></li>
                                       <!-- <li>{{Form::select('genre', [
                                            'Music video' => 'Music Video',
                                            'Comedy' => 'Comedy',
                                            'Dance'=> 'Dance'], 0, ['class' => 'form-control']) }}
                                         </li>  -->
                                    </ul>
                                </div>
                           
                           {{Form::submit('Submit', array('class'=>'btn btn-u btn-file btn-file-inverse')) }}                                
                           {{Form::close() }}

                         </section>   

                    </div>
                </div>
                    
                          
            </div>
        </div>
    </section>

   
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
