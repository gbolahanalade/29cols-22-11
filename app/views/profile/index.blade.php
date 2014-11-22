<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile | 27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/box-shadows.css') }}" rel="stylesheet">
    
   <!--  <link rel="stylesheet" href="plugins/fancybox/source/jquery.fancybox.css"> -->

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

<body id="">    
<div class="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <!-- HEADER 1-->    
        <div class="container">
            <div class="row">
                <!-- HEADER 1 COLUMN 1 -->    
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <a class="headmargintop logo navbar-brand navbar1-brand" href="#"><img class="img-responsive center-block" src="img/logo.fw.png" alt="27 Colours"></a>
                </div>
                <!-- HEADER 1 COLUMN 2 -->    
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
                        <a class="navbar-brand navbar1-brand img-responsive" href="#"><img class="center-block" src="http://placehold.it/700x50+ADSpace" alt="AD Space"></a>
                </div>
            </div>
        </div>
        <!-- HEADER 2 -->    
        <div class="main-menu shadow-effect-1">
          <div class="row container center-block">
                    <!-- Brand and toggle get grouped for better mobile display -->
            <!-- HEADER 2 COLUMN 1 -->  
            <div class="vert-mid col-lg-8 col-sm-8 col-xs-8">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                     <!-- MENU --> 
                    <div class="">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="{{action('HomeController@getIndex')}}" class="active"><i class="fa fa-home fa-fw centered"></i> <span class="network-name"></span></a>
                            </li>
                            <li><a name="#songs" href="{{ action('HomeController@getIndex')}}">Songs</a></li>
                            <li><a href="#videos">Videos</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#talent">Talents</a></li>
                            <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Pages<span class="hidden-xs hidden-sm caret"></span>
                            </a>
                            <ul class="dropdown-menu">

                                @if(Auth::check())
                                    <li>{{ HTML::linkRoute('profile', 'Profile Page' )}}</li>
                                    <li>{{ HTML::linkRoute('logout', 'logout' )}} </li>
                                @else
                                                               
                                <li>{{ HTML::linkRoute('register', 'Registration' )}}</li>
                                <li>{{ HTML::linkRoute('login', 'Sign In' )}}</li>
                                <li><a href="uploadsong-page.html">Song Upload page</a></li>
                                <li><a href="uploadvideo-page.html">Video Upload page</a></li>
                                <li><a href="uploadpicture-page.html">Pictures Upload page</a></li>
                                @endif                          
                        </ul>
                    </div>
                     <!-- SOCIALS --> 
                    <div class="socials">
                        <ul class="socials list-inline">
                                    <li>
                                        <a href="" class=""><i class="icon-twitter fa fa-twitter fa-lg fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                                    <li>
                                        <a href="" class=""><i class="icon-fb fa fa-facebook fa-lg fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><i class="icon-yt fa fa-youtube fa-lg fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><i class="icon-sc fa fa-soundcloud fa-lg fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><i class="icon-inst fa fa-instagram fa-lg fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- HEADER 2 COLUMN 2 -->    
            <div class="col-sm-4 col-xs-4">
                     <!-- MENU --> 
                        <ul class="list-inline socials btn-group">
                            @if(Auth::check())
                                    <li class="btn-group"><button class="btn btn-default btn-xs btn-block" type="button">{{ HTML::linkRoute('logout', 'logout' )}} </button></li>

                                @else
                            <li class="btn-group">
                                <button class="upload btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Upload <i class="fa fa-upload fa-fw centered"></i></button>
                            </li>
                            <li class="btn-group">
                                <button class="upload btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Register | Sign in
                                <span class="hidden-xs hidden-sm caret"></span>
                                <i class="fa fa-user fa-fw centered"></i></button>
                                    <ul class="list-unstyled dropdown-menu" role="menu">
                                        <li><button class="btn btn-default btn-xs btn-block" type="button">{{ HTML::linkRoute('register', 'Registration' )}}</button></li>
                                        <li><button class="btn btn-default btn-xs btn-block" type="button">{{ HTML::linkRoute('login', 'Sign In' )}}</button></li>               
                                    </ul>
                            </li>
                            @endif
                        </ul>
            </div>
            
          </div>
        </div>
    </nav>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Welcome!!! {{$user-> username }}</h1>
            <ul class="pull-right list-inline">
                <li><a href="index.html">Home </a> &nbsp;|</li>
                <li><a href="talents.html">Talents </a> &nbsp;|</li>
               
            </ul>
        </div>
    </div>
    <!-- content -->
    <section id="main-content" class="section-black">
        <!-- CONTENT -->
        <div class="container">
            <div class="row main-content">
                <!-- MAIN CONTENT COL-3 -->
                <section id="sidebarleft-fixed" class="col-lg-3">
                    <!-- PROFILE -->
                    <div class="profile-body">
                        <div class="profile-bio">
                            <div class="row panel panel-default">
                                <div class="col-md-12 panel-heading">
                                    <img class="img-responsive md-margin-bottom-10" src="img/bg1.jpg" alt="">
                                    <a class="btn-u btn-u-sm" href="#">Change Picture</a>
                                </div>
                                <div class="col-md-12 panel-body border-bttm">
                                    <div class="">
                                        <a href="" class="tooltips" data-original-title="Edit" data-toggle="Edit"
                                        data-placement="top"><i class="fa fa-cog pull-right"></i></a>
                                        <h2 class="red">{{$user->username}}</h2>
                                    </div>
                                    <div>   
                                            <h5><strong>Real Name:</strong> {{$user->getFullNameAttribute()}}</h5>
                                            <h5><strong>Talent:</strong> {{$user->talent}}</h5>
                                            <hr>                                    
                                            <h6>In Baba God we trust.</h6>                                        
                                            <hr>
                                    </div>
                                    <div>
                                        <ul class="list-inline text-center"><li>
                                        <span class="counter t">
                                            109
                                        </span><br>
                                        <span class="counter-title">Uploads</span></li>
                                        <li>
                                        <span class="counter">
                                            50
                                        </span><br>
                                        <span class="counter-title">Followers</span></li>
                                        </ul>
                                        <ul class="list-inline text-center ">
                                            <li><a class="fb-icon" href="#"><i class="fb rounded-md fa fa-facebook fa-lg"></i></a></li>
                                            <li><a class="twitter-icon" href="#"><i class="tw rounded-md fa fa-twitter fa-lg"></i></a></li>
                                            <li><a class="sc-icon" href="#"><i class="gp rounded-md fa fa-soundcloud fa-lg"></i></a></li>
                                            <li><a class="yt-icon" href="#"><i class="yt rounded-md fa fa-youtube fa-lg"></i></a></li>
                                        </ul>
                                        
                                        </ul>
                                    </div>
                                    <hr>
                                    <div>
                                        
                                        <div class="btn-group list-unstyled">
                                            <a href="{{action('SongController@getNew')}}" class="upload btn btn-twitter-inversed rounded btn-sm btn-block" type="button">Add Songs<i class="fa fa-plus fa-fw centered"></i>
                                            </a>
                                            <a href="uploadvideo-page.html" class="upload btn btn-youtube-inversed rounded btn-sm btn-block" type="button">Add Videos<i class="fa fa-plus fa-fw centered"></i>
                                            </a>
                                            <a href="uploadpicture-page.html" class="upload btn btn-facebook-inversed rounded btn-sm btn-block" type="button">Add Pictures<i class="fa fa-plus fa-fw centered"></i>
                                            </a>
                                        </div>
                                        
                                    </div>                                    
                                </div>
                            </div>    
                        </div>
                    </div>
                </section><!--/end col-3-->
                <!-- UPLOADS TAB NAV START-->
                <section id="" class="col-lg-5 profile-body">
                    <div>
                    <!-- TAB NAV -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#songs" role="tab" data-toggle="tab">Songs</a></li>
                        <li><a href="#videos" role="tab" data-toggle="tab">Videos</a></li>
                        <li><a href="#gallery" role="tab" data-toggle="tab">Gallery</a></li>
                    </ul>
                    <!-- TAB CONTENT -->
                    <div class="tab-content post-thread">
                    <!-- SONGS -->
                        <div id="songs" class="tab-pane active fade in">
                            @if (Session::get('error'))

                    <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                 @endif

                    @if (Session::get('notice'))
                <div class="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                @endif

                        @if ($songs->isEmpty())
                              <p> You have not added any Songs!:</p>
                            @else
                            @foreach ($songs as $song)
                            <ul class="row list-inline post-item">
                                <li class="col-3 pull-left post-thumbnail">
                                    <a href="post-page.html" title="Ajaa"> 
                                    {{ HTML::image($song->image, $song->title, array('class'=>'img-responsive')) }} 
                                           <!-- <img alt="" src="img/bg1.jpg" class="img-responsive"> -->
                                    </a>
                                </li>
                                <li class="col-6 pull-left post-info">

                                    <div><em>{{HTML::linkAction('SongController@showSong', $song->title, array($song->id), array('class'=>'post-title'))}}</em></div>

                                    <div class="post-uploader"><a href="">{{$user->username}}</a></div>
                                    <div class="post-desc">{{ $song->read_more}}</div>

                                    <div class="btn-group list-unstyled">
                                            <a href="{{action('SongController@getNew')}}" class="upload btn btn-twitter-inversed rounded btn-sm btn-block" type="button">Edit<i class="fa fa-fw centered"></i>
                                            </a>                                       
                                            
                                   </div>

                                   <div class="btn-group list-unstyled">
                                        <a href="uploadvideo-page.html" class="upload btn btn-youtube-inversed rounded btn-sm btn-block" type="button">Delete<i class="fa fa-minus fa-fw centered"></i></a>
                                    </div>

                                </li>
                                <li class="col-3 pull-right post-util">
                                    <ul class="row list-inline center-block">
                                        <li class="col-6 play-icon"><a href="post-page.html" target="_blank">
                                            <i class="fa fa-play-circle icon-3x"></i></a></li>
                                        <li class="col-6">
                                            <div><em>{{ $song->timeago }}</em></div>
                                            <div class="vert-mid"><!-- views --> 200 Views</div>
                                        </li>
                                    </ul>
                                </li>

                            </ul>                          
                            @endforeach
                            <div class="btn-group list-unstyled">
                                            <a href="{{action('SongController@getNew')}}" class="upload btn btn-twitter-inversed rounded btn-sm btn-block" type="button">Add Songs<i class="fa fa-plus fa-fw centered"></i>
                                            </a>                                       
                                            
                                </div>
                                
                            @endif

                                              
                            <!-- PAGER -->
                            <nav class="">
                                <ul class="pager">
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- VIDEOS -->
                        <div id="videos" class="tab-pane fade in">
                             @if (Session::get('error'))

                        <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                         @endif

                            @if (Session::get('notice'))
                        <div class="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                         @endif

                        @if ($videos->isEmpty())
                              <p> You have not added any Video!:</p>
                            @else
                            @foreach ($videos as $video)
                            <ul class="row list-inline post-item">
                                <li class="col-3 pull-left post-thumbnail">
                                    <a href="post-page.html" title="Ajaa">  
                                            <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </a>
                                </li>
                                <li class="col-6 pull-left post-info">
                                    <div><a href="post-page.html"><em class="post-title">{{$video->title}}</em></a></div>
                                    <div class="post-uploader"><a href="">{{$user->username}}</a></div>
                                    <div class="post-desc">{{$video->read_more}}</div>
                                </li>
                                <li class="col-3 pull-right post-util">
                                    <ul class="row list-inline center-block">
                                        <li class="col-6 play-icon"><a href="post-page.html" target="_blank">
                                            <i class="fa fa-play-circle icon-3x"></i></a></li>
                                        <li class="col-6">
                                            <div><em> {{$video->timeago }}</em></div>
                                            <div class="vert-mid"><!-- views --> 156 Views</div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                             @endforeach
                             <div class="btn-group list-unstyled">
                            <a href="uploadvideo-page.html" class="upload btn btn-youtube-inversed rounded btn-sm btn-block" type="button">Add Videos<i class="fa fa-plus fa-fw centered"></i></a>
                            </div>
                             @endif
                        
                            <!-- PAGER -->
                            <nav>
                                <ul class="pager">
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- GALLERY -->
                        <div id="gallery" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-3 mbottom10">
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mbottom10">
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </div>
                                </div>

                                <div class="col-md-3 mbottom10">
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </div>
                                </div>

                                <div class="col-md-3 mbottom10">
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <!-- PAGER -->
                            <nav>
                                <ul class="pager">
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    </div>
                </section>
                <!-- SIDEBAR COL-4 -->
                <section id="col-right" class="col col-lg-4">
                    <div>
                    <!-- Featured Uploads-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center">Featured</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="row list-inline post-item">
                                <li class="col-3 pull-left post-thumbnail">
                                    <a href="post-page.html" title="Ajaa">  
                                            <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </a>
                                </li>
                                <li class="col-6 pull-left post-info">
                                    <div><a href="post-page.html"><em class="post-title">Anuofia</em></a></div>
                                    <div class="post-uploader"><a href="">Ajaa</a></div>
                                    <div class="post-desc">This is my best work yet...</div>
                                </li>
                                <li class="col-3 pull-right post-util">
                                    <ul class="row list-inline center-block">
                                        <li class="col-6 play-icon"><a href="post-page.html" target="_blank">
                                            <i class="fa fa-play-circle icon-3x"></i></a></li>
                                        <li class="col-6">
                                            <div><em><!-- live date --> 5 hours ago</em></div>
                                            <div class="vert-mid"><!-- views --> 200 Views</div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            
                        </div>
                        <div class="panel-body">
                            
                        </div>
                    </div>
                    <!-- Top 10 Uploads-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center">Top 10 Uploads</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="row list-inline post-item">
                                <li class="col-3 pull-left post-thumbnail">
                                    <a href="post-page.html" title="Ajaa">  
                                            <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </a>
                                </li>
                                <li class="col-6 pull-left post-info">
                                    <div><a href="post-page.html"><em class="post-title">Anuofia</em></a></div>
                                    <div class="post-uploader"><a href="">Ajaa</a></div>
                                    <div class="post-desc">This is my best work yet...</div>
                                </li>
                                <li class="col-3 pull-right post-util">
                                    <ul class="row list-inline center-block">
                                        <li class="col-6 play-icon"><a href="post-page.html" target="_blank">
                                            <i class="fa fa-play-circle icon-3x"></i></a></li>
                                        <li class="col-6">
                                            <div><em><!-- live date --> 5 hours ago</em></div>
                                            <div class="vert-mid"><!-- views --> 200 Views</div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  Uploads-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center">All-time Uploads</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="row list-inline post-item">
                                <li class="col-3 pull-left post-thumbnail">
                                    <a href="post-page.html" title="Ajaa">  
                                            <img alt="" src="img/bg1.jpg" class="img-responsive">
                                    </a>
                                </li>
                                <li class="col-6 pull-left post-info">
                                    <div><a href="post-page.html"><em class="post-title">Anuofia</em></a></div>
                                    <div class="post-uploader"><a href="">Ajaa</a></div>
                                    <div class="post-desc">This is my best work yet...</div>
                                </li>
                                <li class="col-3 pull-right post-util">
                                    <ul class="row list-inline center-block">
                                        <li class="col-6 play-icon"><a href="post-page.html" target="_blank">
                                            <i class="fa fa-play-circle icon-3x"></i></a></li>
                                        <li class="col-6">
                                            <div><em><!-- live date --> 5 hours ago</em></div>
                                            <div class="vert-mid"><!-- views --> 200 Views</div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="main-footer">
        <div class="container">
            <div class="row">
                <!-- FOOTER LEFT COL-6 -->
                <div class="col-lg-6">
                    <p class="floatleft copyright text-muted small">
                        Copyright &copy; 27Colours 2014. All Rights Reserved
                    </p>
                </div>
                <!-- FOOTER RIGHT COL-6 -->
                <div class="footer-right col-lg-6">
                    <ul class="floatright list-inline">
                        <li>
                            <a href="#home">Contact</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#faqs">FAQS</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#services">Sponsors</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#">Credits</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
   
<!-- jQuery Version 1.11.0 -->
    <script src="{{asset('js/jquery-1.11.0.js') }}"></script>
    <!-- JS Global Compulsory -->           
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>

<!-- JS Customization -->
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="{{ asset('assets/js/app.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/fancy-box.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        FancyBox.initFancybox();      
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>

</html>
