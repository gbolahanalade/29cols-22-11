@extends('layout.master')
@section('header')
                <div class="collapse navbar-collapse " id="navbar-collapse-1">
                     <!-- MENU --> 
                    <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="{{ action('HomeController@index')}}">
                                <i class="fa fa-home fa-fw centered"></i> Home</a>
                            </li>
                            <li><a href="{{ action('SongController@index')}}">
                            <i class="fa fa-music fa-fw centered"></i> Music</a></li>
                            <li class="active"><a href="{{ action('VideoController@index')}}">
                            <i class="fa fa-video-camera fa-fw centered"></i> Videos</a></li>
                            <li><a href="{{ action('GalleryController@index')}}">
                            <i class="fa fa-camera fa-fw centered"></i> Pictures</a></li>
                            <li><a href="{{ action('TalentController@index')}}">
                            <i class="fa fa-users fa-fw centered"></i> Talents</a></li>
                        </ul> 
                </div>
                @stop
<div class="wrapper">
    <!-- Breadcrumbs -->
    @section('search')
    <div class="breadcrumbs container">
        <div class="row" style="padding: 0 15px;">
        <div class="col-md-4 col-sm-4 col-xs-6 padding-left0">
            <a href="{{ action('HomeController@index')}}"><h2 class="pull-left padding5000 margin0"><i class="fa fa-home"></i></a> |
            <span>Videos</span> <i class="fa fa-video-camera"></i></h2>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8-offset search-bar">
            {{Form::open(['url'=> '/search/song', 'method'=>'get', 'class'=>'navbar-form pull-right', 'role'=>'search'])}}            
            <div class="input-group">
                {{Form::text('s-term',Input::old('username'), array('class'=>'form-control input-sm', 'placeholder'=>'') )}}
                <div class="input-group-btn">
                    {{Form::submit('search', array('class'=>'btn btn-default btn-sm'))}}<i class="fa fa-search">
                    </i>
                </div>
            </div>
           {{Form::close()}}
        </div>
        </div> <!-- row ends -->
    </div> <!-- container ends -->
    @stop
    @section('content')                
                <!-- MAIN CONTENT COL-7 -->
                <section class="col-md-7 margin015">
                <div class="row">
                    <!-- TAB NAV -->
                        <h2 class="margin0">Video Categories</h2>
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active"><a href="#music" role="tab" data-toggle="tab">Music</a></li>
                            <li><a href="#dance" role="tab" data-toggle="tab">Dance</a></li>
                            <li><a href="#comedy" role="tab" data-toggle="tab">Comedy</a></li>
                        </ul>
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <!-- Music videos -->
                        <div id="music" class="tab-pane active fade in padding50">
                            <div class="row margin0">
                            @if (Session::get('error'))

                            <div class="alert alert-error alert-danger padding-left-5 padding-right-5"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info padding-left-5 padding-right-5" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif
    
                            @if ($musics->isEmpty())
                              <p class="text-center alert alert-info padding-left-5 padding-right-5"  role="alert"> There are no Music Videos! </p>
                            @else
                            
                            @foreach ($musics as $music)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 post-thumb padding05">
                                    <div class="box thumbnails" style="background: url({{$music->image}}) no-repeat 0 0; background-size: 100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('VideoController@showVideo', $music->id)}}">
                                        <div class="overlay"><span class="search"><i class="fa fa-play-circle fa-3x"></i></span>
                                        </div></a>
                                    </div>
                                    <div class="caption">
                                        <!-- caption -->
                                        <h5>{{ HTML::linkAction('VideoController@showVideo', 
                                        $music->title, array($music->id), array('class'=>'post-title'))}}</h5>
                                        <h5>
                                            <i class="fa fa-user fa-fw"></i>
                                            {{ HTML::linkAction('ProfileController@show', $music->user->username, array('id'=>$music->user->id), 
                                            array('class'=>'post-uploader'))}}
                                        </h5>
                                        <p class="post-desc"><em><!-- live date --> {{$music->timeago}}</em></p>
                                    </div>                              
                                </div>
                            @endforeach
                            @endif   
                            </div>                 
                            <!-- LOAD MORE -->
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <!-- Dance videos -->
                        <div id="dance" class="tab-pane fade in padding50">
                            <div class="row margin0">
                            @if (Session::get('error'))

                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif
    
                            @if ($dances->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no dance Videos! </p>
                            @else
                            
                            @foreach ($dances as $dance)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 post-thumb padding05">
                                    <div class="box thumbnails" style="background: url({{$dance->image}}) no-repeat 0 0; 
                                    background-size: 100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('VideoController@showVideo', $dance->id)}}">
                                        <div class="overlay"><span class="search"><i class="fa fa-play-circle fa-3x"></i></span>
                                        </div></a>
                                    </div>
                                    <div class="caption">
                                        <!-- caption -->
                                        <h5>{{ HTML::linkAction('VideoController@showVideo', $dance->title, array($dance->id), array('class'=>'post-title'))}}</h5>
                                        <h5>
                                            <i class="fa fa-user fa-fw"></i>
                                            {{ HTML::linkAction('ProfileController@show', $dance->user->username, array('id'=>$dance->user->id), 
                                            array('class'=>'post-uploader'))}}
                                        </h5>
                                        <p class="post-desc"><em><!-- live date --> {{$dance->timeago}}</em></p>
                                    </div>                                    
                                </div>
                            @endforeach
                            @endif  
                            </div>                                                
                            <!-- LOAD MORE -->
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <!-- Comedy videos -->
                        <div id="comedy" class="tab-pane fade in padding50">
                            <div class="row margin0">
                            @if (Session::get('error'))
                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif
    
                            @if ($comedies->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no dance Videos! </p>
                            @else
                            @foreach ($comedies as $comedy)
                                <div class="post-thumb col-lg-3 col-md-3 col-sm-4 col-xs-6 padding05">
                                    <div class="box img-responsive thumbnails" style="background: url({{$comedy->image}}) no-repeat 0 0;
                                     background-size: 100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('VideoController@showVideo', $comedy->id)}}">
                                        <div class="overlay"><span class="search"><i class="fa fa-play-circle fa-3x"></i></span>
                                        </div></a>
                                    </div>
                                    <div class="caption">
                                        <!-- caption -->
                                        <h3>{{ HTML::linkAction('VideoController@showVideo', $comedy->title, 
                                        array($comedy->id), array('class'=>'post-title'))}}</h3>
                                        <h5>
                                            <i class="fa fa-user fa-fw"></i>
                                            {{ HTML::linkAction('ProfileController@show', $comedy->user->username, array('id'=>$comedy->user->id), 
                                            array('class'=>'post-uploader'))}}
                                        </h5>
                                        <p class="post-desc">
                                            <em><!-- live date --> {{$comedy->timeago}}</em>
                                        </p>
                                    </div>                                    
                                </div>
                            @endforeach
                            @endif     
                            </div>  <!-- Row ends -->                   
                            <!-- LOAD MORE -->                            
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>                            
                        </div>
                    </div>
                </div>
                <!-- AD Space -->
                <div class="banner padding50 margin0-15">
                    <img class="center-block img-responsive" src="http://placehold.it/700x50+ADSpace" />
                </div>
                <!-- RELATED CONTENT Slider -->
                    <div class="border-solid margin0-15">
                                <h2 class="text-left margin0">Featured Videos</h2>
                                <div id="owl-demo" class="owl-carousel owl-theme">          
                                    <div class="item post-thumb">
                                        <div class="box thumbnails img-responsive" style="background: url(img/bg1-thumbnail.jpg) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="#"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-play-circle fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h5><em>Caption</em></h5>
                                        <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                        </p>
                                        </div>                                    
                                    </div> 
                                    <div class="item post-thumb">
                                        <div class="box thumbnails img-responsive" style="background: url(img/bg1-thumbnail.jpg) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="#"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-play-circle fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h5><em>Caption</em></h5>
                                        <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                        </p>
                                        </div>                                    
                                    </div> 
                                    <div class="item post-thumb">
                                        <div class="box thumbnails img-responsive" style="background: url(img/bg1-thumbnail.jpg) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href=""><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-play-circle fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h5><em>Caption</em></h5>
                                        <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                        </p>
                                        </div>                                    
                                    </div> 
                                    <div class="item post-thumb">
                                        <div class="box thumbnails img-responsive" style="background: url(img/bg1-thumbnail.jpg) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="#"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-play-circle fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h5><em>Caption</em></h5>
                                        <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                        </p>
                                        </div>                                    
                                    </div> 
                                    <div class="item post-thumb">
                                        <div class="box thumbnails img-responsive" style="background: url(img/bg1-thumbnail.jpg) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="#"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-play-circle fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h5><em>Caption</em></h5>
                                        <p class="post-desc">
                                        <em><!-- live date --> 5 hours ago</em> | 
                                        <span>200 Views</span>
                                        </p>
                                        </div>                                    
                                    </div>                                  
                                </div>
                    </div>
                    <!-- End Slider -->
                </section>
                @stop
                <!-- SIDEBAR COL-5 -->
                @include('video.video-sidebar')
    
@section('scripts2')
    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script src="plugins/owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        lazyLoad : true,
        items : 4,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,4],
        itemsTablet : [600,3],
        itemsMobile : [320,2]
      });
    });
    </script>
   @stop

    <!-- Footer -->
   

