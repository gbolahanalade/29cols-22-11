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
                            <li><a class="upload btn btn-default btn-file" href="#">
                                <span class="hidden-xs hidden-sm">Upload</span>
                                <input type="file" />
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