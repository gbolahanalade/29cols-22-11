<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | 27 Colours</title>

    <!-- Global Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/header-v4.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/revolution-slider/rs-plugin/css/settings.css') }}" type="text/css" media="screen">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "462b8e41-098f-4d6e-af7f-52472fed576a", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
</head>

<body id="page-top"  >

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
                        <a class="navbar-brand navbar1-brand img-responsive" href="#"><img class="center-block" src="http://placehold.it/800x50+ADSpace" alt="AD Space"></a>
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
                                <a href="index.html" class="active"><i class="fa fa-home fa-fw centered"></i> <span class="network-name"></span></a>
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
                                    <li>{{ HTML::link('/profile', 'Profile Page')}} Profile page</li>
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

    <!-- Header -->
    <!-- /.intro-header -->
    <div class="breadcrumbs">
                <h2 class="container">Home</h2>
            </div>
    <section id="main-content" class="section-black">
        <div class="container"> 
            <!-- content -->
            <div class="content row">                
                <!-- MAIN CONTENT COL-8 -->
                <section class="col-md-7 main-content">
                    <div>
                    <!-- Magazine Slider -->
                    <div class="carousel slide carousel-v1 text-right" id="myCarousel-1">
                    <div class="carousel-inner img-responsive">
                        <div class="item active">

                            <img class="center-block" width="" alt="" src="img/mi-chairman.jpg">
                            <div class="carousel-caption">
                                <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="center-block" alt="" src="img/img2.jpg">
                            <div class="carousel-caption">
                                <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                            </div>
                            </div>
                        <div class="item">
                            <img class="center-block" alt="" src="img/bg1.jpg">
                            <div class="carousel-caption">
                                <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel-1" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel-1" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    </div>
                    <!-- End Magazine Slider -->
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
                              <p> There are No Songs! :(</p>
                            @else
                            @foreach ($songs as $song)
                            <ul class="row list-inline post-item">
                                <li class="col-3 pull-left post-thumbnail">
                                    <a href="post-page.html" title="Ajaa">  
                                            {{ HTML::image($song->image, $song->title, array('class'=>'img-responsive')) }} 
                                    </a>
                                </li>
                                <li class="col-6 pull-left post-info">
                                    <div><a href="post-page.html"><em class="post-title">{{ $song->title}}</em></a></div>
                                    <div class="post-uploader"><a href="">{{ $song->user->username}}</a></div>
                                    <div class="post-desc">{{ $song->read_more}}</div>
                                </li>
                                <li class="col-3 pull-right post-util">
                                    <ul class="row list-inline center-block">
                                        <li class="col-6 play-icon"><a href="post-page.html" target="_blank">
                                            <i class="fa fa-play-circle icon-3x"></i></a></li>
                                        <li class="col-6">
                                            <div><em><!-- live date -->  {{$song->timeago}}</em></div>
                                            <div class="vert-mid"><!-- views --> 200 Views</div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            @endif
                            
                            <!-- LOAD MORE -->
                            <a class="list-unstyled margin-bottom-20 btn btn-u btn-block" href="songs.html" target="_blank">
                                More Songs
                            </a>
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
                              <p> There are No Videos! </p>
                            @else
                            @foreach ($videos as $video)
                            <ul class="row list-inline post-item">
                                <li class="col-3 pull-left post-thumbnail">
                                    <a href="post-page.html" title="Ajaa">  
                                            <img alt="" src="img/img2.jpg" class="img-responsive">
                                    </a>
                                </li>
                                <li class="col-6 pull-left post-info">
                                    <div><a href="post-page.html"><em class="post-title">{{ $video->title}}</em></a></div>
                                    <div class="post-uploader"><a href="">{{ $video->user->username}}</a></div>
                                    <div class="post-desc">{{ $video->read_more}}</div>
                                </li>
                                <li class="col-3 pull-right post-util">
                                    <ul class="row list-inline center-block">
                                        <li class="col-6 play-icon"><a href="post-page.html" target="_blank">
                                            <i class="fa fa-play-circle icon-3x"></i></a></li>
                                        <li class="col-6">
                                            <div><em><!-- live date -->  uploaded <br>{{$video->timeago}}</em></div>
                                            <div class="vert-mid"><!-- views --> 200 Views</div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            @endif
                                                                   
                            <!-- LOAD MORE -->
                            <a class="list-unstyled margin-bottom-20 btn btn-u btn-block" href="videeo.html" target="_blank">
                                More Videos
                            </a>
                        </div>
                        <!-- GALLERY -->
                        <div id="gallery" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-3 mbottom10">
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img class="img-responsive" {{HTML::image('img/img2.jpg', 'Nice Image')}}
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img class="img-responsive" {{HTML::image('img/bg1.jpg', 'Nice Image')}}
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mbottom10">
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <!--<img alt="" src="img/img2.jpg" class="img-responsive"> -->
                                        <img class="img-responsive" {{HTML::image('img/img2.jpg', 'Nice Image')}}
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img class="img-responsive" {{HTML::image('img/bg1.jpg', 'Nice Image')}}
                                    </div>
                                </div>

                                <div class="col-md-3 mbottom10">
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img class="img-responsive" {{HTML::image('img/img2.jpg', 'Nice Image')}}
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                         <img class="img-responsive" {{HTML::image('img/bg1.jpg', 'Nice Image')}}
                                    </div>
                                </div>

                                <div class="col-md-3 mbottom10">
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                        <img class="img-responsive" {{HTML::image('img/img2.jpg', 'Nice Image')}}
                                    </div>
                                    <div class="box-shadow shadow-effect-1 mbottom10">
                                         <img class="img-responsive" {{HTML::image('img/bg1.jpg', 'Nice Image')}}
                                    </div>
                                </div>
                            </div>
                            <!-- LOAD MORE -->
                            <a class="list-unstyled margin-bottom-20 btn btn-u btn-block" href="gallery.html" target="_blank">
                                More Pictures
                            </a>
                        </div>
                    </div>
                    </div>
                </section>
                <!-- SIDEBAR COL-4 -->
                <section class="col-md-5 side-bar">
                    <div>
                        <div class="panel panel-default">
                        <div class="panel-heading input-append search-box">
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group"><input type="text" class="form-control" placeholder="Search">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button></div>
                            </form>
                        </div>
                        <div class="panel-body">

                            <div class="soc-widget"> 
                                <div id="sharethis" class="" style="min-height: 40px;">
                                    <span class='st_sharethis_hcount' displayText='ShareThis'></span>
                                    <span class='st_fblike_hcount' displayText='Fb Like'></span>
                                    <span class='st_facebook_hcount' displayText='Facebook'></span>
                                    <span class='st_twitter_hcount' displayText='Tweet'></span>
                                </div>   
                            </div>
                            <!-- Home_300x250_1 -->
                            <div class="banner center-block" style="padding: 5px 0 5px 0;">
                                <img src="http://placehold.it/350x250+ADSpace">
                            </div>
                        </div>
                        </div>
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

    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000; //changes the speed
    })
    </script>

</body>

</html>
