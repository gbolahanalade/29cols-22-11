<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Talents | 27 Colours</title>

    <!-- Global Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/header-v4.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}">
    <link href="{{ asset('plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">
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

<body id="gallery">
<div class="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="clear-fix"></div>
        <!-- HEADER 2 -->    
        <div class="main-menu">
          <div class="row container center-block">
                    <!-- Brand and toggle get grouped for better mobile display -->
            <!-- HEADER 2 COLUMN 1 -->  
            <div class="vert-mid col-md-8 col-sm-8 col-xs-8">
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
                                <a href="{{action('HomeController@getIndex')}}"><i class="fa fa-home fa-fw centered"></i> <span class="network-name"></span></a>
                            </li>
                            <li><a href="{{ action('SongController@index')}}">Songs</a></li>
                            <li><a href="{{ action('VideoController@index')}}">Videos</a></li>
                            <li class="active"><a href="{{ action('GalleryController@index')}}">Gallery</a></li>
                            <li><a href="{{ action('TalentController@index')}}">Talents</a></li> 
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
            <div class="col-md-4 col-sm-4 col-xs-4 user-login">
                     <!-- MENU --> 
                        <ul class="list-inline socials btn-group">
                             @if (!Auth::check())
                            <li class="btn-group"><span class="hidden-xs">{{ action('UsersController@getLogin','Upload', array('class'=>'btn btn-default btn-sm',
                                'type'=>'button','data-toggle'=>'modal', 'data-target'=>'#login'))}}</span><i class="fa fa-upload fa-fw centered"></i> 
                                
                            </li>
                            <li class="btn-group login">
                               
                                  {{ HTML::linkRoute('logout', 'logout', array('class'=>'btn btn-default btn-xs btn-block', 'type'=>'button')) }}
                                  HTML::linkRoute('register', 'Register | Sign in', array('class'=>'upload btn btn-default btn-sm dropdown-toggle',
                                  'type'=>'button','data-toggle'=> 'dropdown', 'aria-expanded'=>'false')) }}
                               
                                  <!--<button class="upload btn btn-default 
                                btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><span class="hidden-xs"> Register | Sign in </span>
                                <span class="caret"></span><i class="fa fa-user fa-fw centered"></i></button> -->
                                @if (Auth::check())
                                    <ul class="list-unstyled dropdown-menu" role="menu">
                                        <li>{{ HTML::link('/profile', 'Profile Page',array('class'=>'btn btn-default btn-xs btn-block', 'type'=>'button')) }}</li>
                                        <li>{{ HTML::linkRoute('logout', 'logout', array('class'=>'btn btn-default btn-xs btn-block', 'type'=>'button')) }} </li>
                                        @else
                                        <li><a href="{{ action('UsersController@getCreate') }}" class="btn btn-default btn-xs btn-block" type="button" data-toggle="modal" data-target="#register">Register</a></li>
                                        <li><a href="{{ action('UsersController@getLogin') }}" class="btn btn-default btn-xs btn-block" type="button" data-toggle="modal" data-target="#login">Sign in</a></li>
                                    </ul>
                                @endif
                            </li>
                        </ul>
            </div>
            
          </div>
        </div>
    </nav>
    <!-- AD & Logo -->
    <!-- HEADER 1-->  
    <div class="brand"> 
        <div class="container">
            <div class="row header1">
                <!-- HEADER 1 COLUMN 1 -->    
                <div class="logo col-md-4">
                    <a class="navbar-brand" href="#">
                        <img class="img-responsive center-block" src="img/logo.fw.png" alt="27 Colours">
                    </a>
                </div>
                <div class="clear-fix"></div>
                <!-- HEADER 1 COLUMN 2 -->    
                <div class="ad-space  col-md-8">
                        <a class="navbar-brand navbar1-brand" href="#"><img class="img-responsive center-block" src="http://placehold.it/600x60+ADSpace" alt="AD Space"></a>
                </div>
            </div>
        </div>
    </div> 
    <!-- Header -->
    <div class="breadcrumbs container row center-block">
        <div class="col-md-4"><h2 class="pull-left"><i class="fa fa-home"></i> | Gallery <i class="fa fa-camera"></i></h2></div>
        <div class="col-md-8">
            <form class="navbar-form pull-right" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <section id="main-section">
        <div  class="container">
            <!-- content -->
            <div class="main-content row content">
                <!-- MAIN CONTENT COL-7 -->
                <section class="col-md-7">
                <!-- Magazine Slider -->
                    <!-- RELATED CONTENT -->
                        <div class="related-upld border-bttm">
                                <h2 class="text-left">Featured Talents</h2>
                                <div id="owl-demo">          
                                  <a href="post-page.html" class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image">
                                  </a>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                </div>
                        </div>
                    <!-- End Magazine Slider -->
                <div class="">      
                <!-- TAB NAV -->
                <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#latestpics" role="tab" data-toggle="tab">Latest Pictures</a></li>
                        <li><a href="#popularpics" role="tab" data-toggle="tab">Popular Pictures</a></li>
                </ul>
                    <!-- TAB CONTENT -->
                    <div class="tab-content post-thread">
                        <!-- Latest Pictures -->
                        <div id="latestpics" class="tab-pane active fade in">
                            <div class="row">
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                            </div>
                            <!-- LOAD MORE -->
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <!-- Popular pictures -->
                        <div id="popularpics" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-md-3 post-thumb">
                                    <div class="thumbnail"><a href="post-page.html">
                                    <img src="img/bg1-thumbnail.jpg" alt="Thumbnail">
                                    <i class="post-util fa fa-eye fa-4x"></i></a>
                                    </div>
                                    <div class="caption">
                                    <h3 class="red">Ajaa</h3>
                                    <h5><em>Anuofia</em></h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                    </p>
                                    </div>                                    
                                </div>
                            </div>
                            <!-- LOAD MORE -->
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </section>
                <!-- SIDEBAR COL-5 -->
                <section class="col-md-5">
                        <!-- Home_300x250_1 -->
                            <div class="banner" style="padding: 5px 0 5px 0;">
                                <img class="center-block" src="http://placehold.it/350x250+ADSpace">
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
               <!--  FOOTER LEFT COL-6 -->
                <div class="col-lg-6">
                    <p class="floatleft copyright text-muted small">
                        Copyright &copy; 27Colours 2014. All Rights Reserved
                    </p>
                </div>
               <!--  FOOTER RIGHT COL-6 -->
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
    <!-- MODAL FOR LOGIN & REGISTER FORMS -->
        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 350px;">
                <div class="modal-content">      
                    <div class="modal-body"><iframe src="login-page.html" frameborder="0"></iframe></div>      
                </div>
            </div>
        </div>
        <!-- Register Modal -->
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="width: 350px;">
            <div class="modal-content">              
              <div class="modal-body"><iframe src="register-page.html" frameborder="0"></iframe></div>
            </div>  
          </div>
        </div>
    <!-- END OF MODAL -->
    <!-- jQuery Version 1.11.0 -->
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/fancybox/lib/jquery-1.10.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> 

     <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>
    
    <!-- Script to Activate the Carousel -->
    <script>

    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>
</body>

</html>
