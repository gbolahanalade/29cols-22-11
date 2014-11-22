<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title>Index Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top"  >

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- HEADER 1-->    
        <div class="container">
            <div class="row">
                <!-- HEADER 1 COLUMN 1 -->    
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <a class="headmargintop logo navbar-brand navbar1-brand" href="#"><img class="img-responsive center-block" src="img/logo.fw.png" alt="27 Colours"></a>
                </div>
                <!-- HEADER 1 COLUMN 2 -->    
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <a class="navbar-brand navbar1-brand" href="#"><img class="img-responsive center-block" src="img/AD-space.fw.png" alt="AD Space"></a>
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <!-- MENU --> 
                    <div class="">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="{{action('BlogController@index')}}"><i class="fa fa-home fa-fw centered"></i> <span class="network-name"></span></a>
                            </li>
                            <li>
                                <a href="{{action('SongController@index')}}">Songs</a>
                            </li>
                            <li>
                                <a href="{{action('VideoController@index')}}">Videos</a>
                            </li>
                            <li>
                                <a href="{{action('GalleryController@index')}}">Gallery</a>
                            </li>
                            <li>
                                <a href="{{action('BlogController@index')}}">Blog</a>
                            </li>
                        </ul>
                    </div>
                     <!-- SOCIALS --> 
                    <div class="socials">
                        <ul class="socials list-inline">
                                    <li>
                                        <a href="" class=""><i class="fa fa-twitter fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                                    <li>
                                        <a href="" class=""><i class="fa fa-facebook fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><i class="fa fa-youtube fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><i class="fa fa-soundcloud fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                                    <li>
                                        <a href="#" class=""><i class="fa fa-instagram fa-fw"></i> <span class="network-name"></span></a>
                                    </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- HEADER 2 COLUMN 2 -->    
            <div class="col-sm-4 col-xs-4">
                     <!-- MENU --> 
                        <ul class="list-inline socials">
                            <li><a class="upload btn btn-default btn-file" href="{{action('UploadController@index')}}">
                                <span class="hidden-xs hidden-sm"><button type="submit" class="btn-u btn-block">Upload</button></span>
                                <!--<input type="file" 
                                <button type="submit" class="btn-u btn-block">Upload</button>  />  -->
                                <i class="fa fa-upload fa-fw centered"></i></a>
                            </li>
                            <li>
                                <ul class="list-unstyled">
                                @if(Auth::check())
                                    <li>{{ HTML::linkRoute('logout', 'logout' )}} </li>

                                @else
                                <li>{{ HTML::linkRoute('register', 'Registration' )}}| {{ HTML::linkRoute('login', 'Sign In' )}}</li>
                                @endif
                                
                                </ul>
                            </li>
                        </ul>
            </div>
            
          </div>
        </div>
    </nav>
  

    <!-- Header -->
   <header id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="container jumbotron">
                        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <img class="center-block" src="img/bg1.jpg" alt="BG Image 1">
                    <div class="carousel-caption">
                        <h2>27 Colours Image</h2>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the first background image using inline CSS below. -->
                    <img class="center-block" src="img/img2.jpg" alt="BG Image 1">
                    <div class="carousel-caption">
                        <h2>27 Colours Video</h2>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the first background image using inline CSS below. -->
                    <img class="center-block" src="img/bg1.jpg" alt="BG Image 1">
                    <div class="carousel-caption">
                        <h2>27 Colours Audio</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>
    </header>
   
    <!-- /.intro-header -->
    <section id="content">
        <!-- CONTENT -->
        <div class="container">
            <div class="row">
    @yield('content')
    @yield('sidebar')
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