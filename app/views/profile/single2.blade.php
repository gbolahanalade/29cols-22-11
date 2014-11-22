<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <title>Post Page | 27 Colours</title>

    <!-- Bootstrap Core & CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="{{ asset('css/pages/post-page.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Custom CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('plugins/line-icons/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}">
    <link href="{{ asset('plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="{{ asset('css/themes/default.css') }}" id="style_color">

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

<body id="page-top">    
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
        <div class="main-menu">
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
                                <a href="{{action('HomeController@getIndex')}}"><i class="fa fa-home fa-fw centered"></i> <span class="network-name"></span></a>
                            </li>
                            <li class="active"><a href="{{ action('HomeController@getIndex')}}">Songs</a></li>
                            <li><a href="videos.html">Videos</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="talents.html">Talents</a></li>
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
                            </li>  
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
    <div class="breadcrumbs container">
        <h2 class=""><i class="fa fa-home"></i> | Songs <i class="fa fa-music"></i></h2>
    </div>
    <section id="main-content" class="section-black">
        <div class="container"> 
            <!-- content -->
            <div class="row main-content">                
                <!-- MAIN CONTENT COL-8 -->
                <section class="col-md-7 center-block">
                    <div>
                    <!-- CONTENT HEADER -->
                    <div class="pp-introtitle">
                    <h2 class="pull-left red"> {{ $song->title}}</h2>
                    </div>
                    <!-- ROW 1 - UPLOADER INFO & UTILITIES -->
                    <div class="border-bttm">
                        <div class="blog-post-tags">
                        <ul class="list-inline blog-info">
                            <li><i class="fa fa-calendar"></i> {{ $song->created_at }} </li>
                            <li><i class="fa fa-pencil"></i>{{ $song->user->username}}S</li>
                            <li><i class="fa fa-comments"></i> <a href="#">{{ $song->rating_count}}</a></li>
                            <li class="blog-tags">
                                <i class="fa fa-tags">Tags: </i>
                                @foreach ($song->tags as $tag) 
                                 <span class="label label-info">{{HTML::linkRoute('song.show',$tag->name, $song->id)}}</span>
                                 @endforeach
                            </li>
                        </ul>                                                
                        </div>
                    
                        <div id="sharethis" class="margin-bottom-5">
                            <span class='st_sharethis_hcount' displayText='ShareThis'></span>
                            <span class='st_facebook_hcount' displayText='Facebook'></span>
                            <span class='st_twitter_hcount' displayText='Tweet'></span>
                            <span class='st_fblike_hcount' displayText='Facebook Like'></span>
                        </div>
                    </div>
                     <!-- ROW 2 - UPLOAD & DESCRIPTION -->
                    <div class="">
                        <section class="row border-bttm">
                            <ul class="col-md-4 list-unstyled">
                                <li class="thumbnail">
                                    <img class="albumart" src="img/bg1-thumbnail.jpg"></li> 
                                <!-- SONG TITLE & ARTIST -->
                                <li class="">
                                    <ul class="list-unstyled">
                                        <li><span class="pp-title1">{{$song->user->username}}</span></li>
                                        <li><span class="pp-title2"><a class="red" href="{{action('ProfileController')}}" target="_blank">Ajaa</a></span></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="col-md-8 list-unstyled ">
                                <!-- PLAYER -->
                                <li class="pp-player scplayer">
                                    <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/175199197&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
                                    </iframe>
                                </li>
                                <!-- LIKE -->
                                <li>
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-thumbs-up icon-2x"></i></a></li>
                                        <li><em>50 views <i class="fa fa-eye"></i></em></li>
                                        <li><em>3 hours ago <i class="fa fa-clock-o"></i></em></li>
                                    </ul>
                                </li>
                            </ul>   
                        </section>
                        <section class="content-desc">
                            <!-- DESCRIPTION -->
                            <div class="">
                            <h4 class="upload-desc"> Another hit banger from music producer Chopstix
                            </h4>
                            <p>
                                Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce condimentum eleifend enim a feugiatt non libero consectetur adipiscing elit magna. Sed et quam lacus. Condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.
                            </p>
                            </div>
                        </section>
                    </div>
                    <hr>
                    <!-- SONG VIDEO -->
                    <div class="song-vid row">
                    </div>
                    
                    <!--  -->
                    <div class="">
                        <!-- ADS 150 x 50-->
                        <div class="banner center-block" style="padding: 5px;">
                            <img src="http://placehold.it/600x50+ADSpace">
                        </div>
                        <!-- RELATED CONTENT -->
                        <div class="related-upld border-bttm">
                                <h2 class="text-left">Related Uploads</h2>
                                <div id="owl-demo">          
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                </div>
                        </div>
                        <!-- COMMENTS -->
                        <div class="comments">
                                <!-- Recent Comments -->
                            <div class="media border-bttm">
                                    <h3>Comments</h3>
                                    <a class="pull-left" href="#">
                                        <img class="small-thumbnail media-object" src="img/bg1-thumbnail.jpg" alt="" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading "><a href="">Celebrity Stalker</a> <span>5 hours ago / <a href="#">Reply</a></span></h4>
                                        <p>Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="img/bg1-thumbnail.jpg" alt="" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading <span>17 hours ago / <a href="#">Reply</a></span></h4>
                                                <p>Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum anibhut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>
                                            </div>
                                        </div>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="img/bg1-thumbnail.jpg" alt="" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading <span>2 days ago / <a href="#">Reply</a></span></h4>
                                                <p>Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum anibhut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>
                                            </div>
                                        </div>
                                    </div>
                            </div><!--/media-->

                                <div class="media border-bttm">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="img/bg1-thumbnail.jpg" alt="" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading <span>July 5,2013 / <a href="#">Reply</a></span></h4>
                                        <p>Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>
                                    </div>
                                </div><!--/media-->
                                <!-- End Recent Comments -->

                                <!-- Comment Form -->
                                <div class="post-comment">
                                    <h3>Leave a Comment</h3>
                                    <form>
                                        <label>Name</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-7 col-md-offset-0">
                                                <input type="text" class="form-control">
                                            </div>                
                                        </div>
                                        
                                        <label>Comment</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-11 col-md-offset-0">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>                
                                        </div>
                                        
                                        <p><button class="btn-u" type="submit">Post comment</button></p>
                                    </form>
                                </div>
                                <!-- End Comment Form -->
                        </div>
                    </div>
                </section>
                <!-- SIDEBAR COL-4 -->
                <section class="col-md-5">
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
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
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
