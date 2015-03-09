<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Video | 27 Colours</title>

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
    <div class="center-block upload-page">    
        <div class="breadcrumbs">
            <h4><a href="{{ action('HomeController@index')}}"><i class="fa fa-home"></i></a>
            | <a href="{{ action('ProfileController@index') }}">Profile</a> <i class="fa fa-reply"></i></h4>              
        </div>

                            @if (Session::get('errors'))

                                <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errors') }}}</a></div>
                              @endif

                            @if (Session::get('notices'))
                            <div class="alert"><a name="notice">{{{ Session::get('notices') }}}</a></div>
                            @endif
                            
                            <h2 class="text-center"> Update Your Profile</h2>
                            {{Form::open(['url' => '/profile/edit','class'=>'form'])}}
                            {{Form::hidden('id', $user->id)}}


                            <div class="form-group">
                                {{ Form::label('fname', 'First-Name:') }}
                                {{ Form::text('fname', $user->first_name, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('lname', 'Last-Name:') }}
                                {{ Form::text('lname', $user->last_name, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('username', 'UserName:') }}
                                {{ Form::text('username', $user->username, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('talents', 'Enter your talents') }}
                                {{Form::select('talents', [
                                    'dancing' => 'Dancer',
                                    'singing'=> 'Musician',
                                    'comedy'=> 'Comedian',
                                    'modelling'=> 'Models',
                                    'others' => 'Others'], 0, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('facebook', 'Enter the full url to your Facebook profile/page ID') }}
                                {{ Form::text('facebook', $user->facebook, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('twitter', 'Enter the full url to your Twitter account') }}
                                {{ Form::text('twitter', $user->twitter, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('soundcloud', 'Enter the full url to your Soundclound account') }}
                                {{ Form::text('soundcloud', $user->soundcloud, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('youtube', 'Enter the full url to your youtube') }}
                                {{ Form::text('youtube', $user->youtube, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('tagline', 'Enter your favourite slogan/tagline') }}
                                {{ Form::text('tagline', $user->tagline, ['class' => 'form-control']) }}
                            </div>


                             <div class="form-group">
                              {{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
                             
                              </div>

                             {{ Form::close() }}

    </div> <!-- panel ends -->                         
</div> <!-- wrap ends -->
    
        
   
<!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>
    <!-- JS Global Compulsory -->           
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->

</body>

</html>
