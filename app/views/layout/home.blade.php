@extends('layout.master')
@section('header')
                <div class="collapse navbar-collapse " id="navbar-collapse-1">
                     <!-- MENU --> 
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active">
                                <a href="{{ action('HomeController@index')}}" class="active">
                                <i class="fa fa-home fa-fw centered"></i> Home</a>
                            </li>
                            <li><a href="{{ action('SongController@index')}}">
                            <i class="fa fa-music fa-fw centered"></i> Music</a></li>
                            <li><a href="{{ action('VideoController@index')}}">
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
        <div class="row" style="margin: 0 15px;">
        <div class="col-md-4 col-sm-4 col-xs-4 padding-left0">
            <a href="{{ action('HomeController@index')}}"><h2 class="pull-left padding5000 margin0"><i class="fa fa-home"></i></h2></a>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8 search-bar padding-right0">
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
                <section class="col-md-7 padding0">
                    <!-- 27Colours Slider -->
                    <div class="carousel slide" id="myCarousel-1">
                    	<div class="carousel-inner">
                        <div class="item active">
                            <img width="" height="" alt="" src="{{ asset('img/slider-images/img-slide-31.jpg') }}">
                        </div>
                        <div class="item">
                            <img class="center-block" alt="" src="{{ asset('img/slider-images/img-slide-51.jpg') }}">
                        </div>
                        <div class="item">
                            <img class="center-block" alt="" src="{{ asset('img/slider-images/img-slide-21.jpg') }}">
                        </div>
                    	</div>  <!-- carousel inner ends -->                  
                    	<div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel-1" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel-1" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    	</div>
                    </div>
                    <!-- End Slider -->
                    <!-- TAB NAV -->
                    <h2 class="margin0">Latest Entries</h2>
                    <ul class="nav nav-tabs nav-justified list-inline padding05" role="tablist">
                        <li class="active col-xs-4"><a href="#music" role="tab" data-toggle="tab">Music</a></li>
                        <li class=" col-xs-4"><a href="#videos" role="tab" data-toggle="tab">Videos</a></li>
                        <li class=" col-xs-4"><a href="#pictures" role="tab" data-toggle="tab">Pictures</a></li>
                    </ul>
                   <!--  </div> -->
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                    	<!-- SONGS -->
                        <div id="music" class="tab-pane active fade in">
                            @if (Session::get('errors'))

                    		<div class="alert alert-error alert-danger" role="alert"><a name="error">{{{ Session::get('errors') }}}</a></div>
                 			@endif

                    		@if (Session::get('notices'))
                			<div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notices') }}}</a></div>
                			@endif

                        	@if ($songs->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no Songs! :(</p>
                            @else
                            @foreach ($songs as $song)
                            <ul class="list-inline post-item row">
                            	<li class="col-md-9 col-sm-9 col-xs-8">
                            		<ul class="list-inline">
                            		<li class="pull-left col-md-2 col-xs-4">  
                                        {{ HTML::image($song->image, $song->title, array('class'=>'thumbnail img-responsive')) }}
                                	</li>
                                	<li class="pull-left col-md-10 col-xs-8">
                                    <h3>{{ HTML::linkAction('SongController@showSong', $song->title, array('id'=> $song->id), array('class'=>'post-title'))}}</h3>
                                    <h5>
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $song->user->username, array('id'=>$song->user->id),
                                        array('class'=>'post-uploader'))}}
                                    </h5>   
                                      <!--<h5 class="username">{{ $song->user->username}}</h5></a> -->
                                    <p class="post-desc hidden-xs">{{ $song->description}}</p>
                                	</li>
                                	</ul>
                                </li>
                                <li class="col-md-3 col-sm-3 col-xs-4 post-util">
                                    <ul class="row list-inline">
                                        <li class="col-md-4 play-icon text-right">
                                            {{ HTML::linkAction('SongController@showSong', '', array($song->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                        </li>
                                        <li class="col-8 text-left">
                                            <div> <em>{{$song->timeago}}</em></div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            @endif                            
                            <!-- LOAD MORE -->
                           <!--  {{ $songs->links() }} -->
                            <a class="list-unstyled margin-bottom-20 btn btn-red btn-block" href="{{ action ('SongController@index') }}">
                                More Songs
                            </a>
                        </div>
                    	<!-- VIDEOS -->
                        <div id="videos" class="tab-pane fade in padding5000">
                            <div class="container">
                        	@if (Session::get('error'))
                    		<div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                 			@endif

                    		@if (Session::get('notice'))
                			<div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                			@endif
	
    	                    @if ($videos->isEmpty())
                                <p class="text-center alert alert-info"  role="alert"> There are no Videos! </p>
                            @else
                            </div>
                            @foreach ($videos as $video)                            
                                <div class="post-thumb col-lg-3 col-md-3 col-sm-4 col-xs-6 padding05">
                                    <!-- video -->
                                    <div class="box img-responsive thumbnails" style="background: url({{$video->image}}) no-repeat 0 0; background-size: 100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('VideoController@showVideo', $video->id)}}">
                                        <div class="overlay"><span class="search"><i class="fa fa-play-circle fa-3x"></i></span></div>
                                        </a>
                                    </div>     
                                    <!-- Caption -->                           
                                	<div class="caption">
                                        <h5> {{ HTML::linkAction('VideoController@showVideo', $video->title, array($video->id), array('class'=>'post-title'))}}</h5>
                                	    <h5>
                                            <i class="fa fa-user fa-fw"></i>
                                            {{ HTML::linkAction('ProfileController@show', $video->user->username, array('id'=>$video->user->id), 
                                            array('class'=>'post-uploader'))}}
                                        </h5>
                                        <p class="post-desc">
                                            <em>{{$video->timeago}}</em>
                                        </p>
                                	</div>  
                                </div>                              
                            @endforeach
                            @endif                                                                   
                            <!-- LOAD MORE -->
                            <!-- {{ $videos->links() }} -->
                            <a class="margin-bottom-20 btn btn-red btn-block" href="{{ action('VideoController@index')}}">
                                More Videos
                            </a>
                        </div>
                        <!-- GALLERY -->
                        <div id="pictures" class="tab-pane fade in padding5000">
                            <div class="container">
                                @if (Session::get('errorg'))

                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errorg') }}}</a></div>
                            @endif

                            @if (Session::get('noticeg'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('noticeg') }}}</a></div>
                            @endif

                            @if ($galleries->isEmpty())
                            <p class="text-center alert alert-info"  role="alert"> There are no Photos!:</p>
                            @else
                            </div> <!-- container ends -->
                            @foreach ($galleries as $gallery)
                                <div class="post-thumb col-lg-3 col-md-3 col-sm-4 col-xs-6 padding05">
                                    <div class="box img-responsive thumbnails" style="background: url({{$gallery->image}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
									    <a href="{{ action('GalleryController@showGallery', $gallery->id)}}"><div class="overlay">
									    <span class="search">
									    <i class="fa fa-search-plus fa-3x"></i></span></div>
									    </a>
									</div>
									<div class="caption">
                                        <h5>{{ HTML::linkAction('GalleryController@showGallery', $gallery->caption, array($gallery->id), array('class'=>'post-title'))}}</h5>
                                        <h5><i class="fa fa-user fa-fw"></i>
                                            {{ HTML::linkAction('ProfileController@show', $gallery->user->username, array('id'=>$gallery->user->id), array('class'=>'post-uploader'))}}</h5>
                                        <p class="post-desc">
									    <em>{{$gallery->timeago}}</em>
									    </p>
									</div>
                                </div> 
                                @endforeach
                                @endif
                            <!-- LOAD MORE -->
                            <!-- {{ $galleries->links() }} -->
                            <a class="list-unstyled margin-bottom-20 btn btn-red btn-block" href="{{ action ('GalleryController@index') }}">
                                More Pictures
                            </a>
                        </div>
                    </div>
                </section>
                @stop
                <!-- SIDEBAR COL-5 -->
                @section('side') 
        <aside class="col-md-5">
                    <!-- Home_300x250_1 -->
                        <div class="embed-responsive embed-responsive-16by9" style="margin: 0 0 5px 0; min-height:320px;">
                            <iframe class="embed-responsive-item" width="100%" height="250" src="//www.youtube.com/embed/xzRXKlgq7zs?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="sidebar-widget">
                        <div class="fb-like-box" data-href="https://www.facebook.com/27colours" data-width="400" data-colorscheme="light" 
                            data-show-faces="true" data-header="true" data-stream="false" data-show-border="true" style="width:250px; min-height:300px;">
                        </div>
                        </div> 
                        
                        <div class="recent-uploads panel panel-default">
                            <div class="panel-heading">
                            <h2 style="margin:0 !important;">Recent Entries</h2>
                            <hr class="hr5">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="active col-xs-4" style="border-bottom:none; padding: 0 !important;">
                                    <a href="#rmusic" style="border:none; backround-color:transparent; border-bottom.active:1px solid #ff0000;" role="tab" data-toggle="tab">Music</a>
                                </li>
                                <li class=" col-xs-4"><a href="#rvideos" role="tab" data-toggle="tab">Videos</a></li>
                                <li class=" col-xs-4"><a href="#rpictures" role="tab" data-toggle="tab">Pictures</a></li>
                            </ul>
                            </div>
                            <div class="tab-content panel-body">
                                <div id="rmusic" class="tab-pane active fade in">
                                    @foreach ($recentSongs as $song)
                                    <ul class="list-inline post-item">
                                        <li class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-inline">
                                            <li class="col-md-3 pull-left">
                                              {{ HTML::image($song->image, $song->title, array('class'=>'img-responsive thumbnail','width'=>'50px','height'=>'50px')) }}                                       
                                            </li>
                                            <li class="col-md-9 pull-left post-desc">                                    
                                                <h5>{{ HTML::linkAction('SongController@showSong', $song->title, array($song->id), array('class'=>'post-title'))}}</h5>
                                                <h5><i class="fa fa-user fa-fw"></i>
                                                {{ HTML::linkAction('ProfileController@show', $song->user->username, array('id'=>$song->user->id), array('class'=>'post-uploader'))}}</h5>
                                                <p class="post-desc hidden-xs"> {{$song->description}}</p>
                                            </li>
                                            </ul>
                                        </li>
                                        <li class="col-md-4 col-sm-4 col-xs-12 post-util">
                                            <ul class="list-inline">
                                                <li class="col-md-4 play-icon text-right">
                                                    {{ HTML::linkAction('SongController@showSong', '', array($song->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                                </li>
                                                <li class="col-md-8 text-left">
                                                    <h6 class="">{{$song->timeago}}</h6>
                                                    <!-- <h6>views 156 Views</h6> -->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    @endforeach
                                </div>
                                <div id="rvideos" class="tab-pane fade in">
                                    @foreach ($recentVideos as $video)
                                    <ul class="list-inline post-item">
                                        <li class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-inline">
                                            <li class="col-md-3 pull-left">
                                              {{ HTML::image($video->image, $video->title, array('class'=>'img-responsive thumbnail','width'=>'50px','height'=>'50px')) }}                                       
                                            </li>
                                            <li class="col-md-9 pull-left post-desc">                                    
                                                <h5>{{ HTML::linkAction('VideoController@showVideo', $video->title, array($video->id), array('class'=>'post-title'))}}</h5>
                                                <h5><i class="fa fa-user fa-fw"></i>
                                                {{ HTML::linkAction('ProfileController@show', $video->user->username, array('id'=>$video->user->id), array('class'=>'post-uploader'))}}</h5>
                                                <p class="post-desc hidden-xs"> {{$video->description}}</p>
                                            </li>
                                            </ul>
                                        </li>
                                        <li class="col-md-4 col-sm-4 col-xs-12 post-util">
                                            <ul class="list-inline">
                                                <li class="col-md-4 play-icon text-right">
                                                    {{ HTML::linkAction('VideoController@showVideo', '', array($video->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                                </li>
                                                <li class="col-md-8 text-left">
                                                    <h6 class="">{{$video->timeago}}</h6>
                                                    <!-- <h6>views 156 Views</h6> -->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    @endforeach
                                </div>
                                <div id="rpictures" class="tab-pane fade in">
                                    @foreach ($recentGalleries as $gallery)
                                    <ul class="list-inline post-item">
                                        <li class="col-md-8 col-sm-8 col-xs-12">
                                            <ul class="list-inline">
                                            <li class="col-md-3 pull-left">
                                              {{ HTML::image($gallery->image, $gallery->caption, array('class'=>'img-responsive thumbnail','width'=>'50px','height'=>'50px')) }}                                       
                                            </li>
                                            <li class="col-md-9 pull-left post-desc">                                    
                                                <h5>{{ HTML::linkAction('GalleryController@showGallery', $gallery->caption, array($gallery->id), array('class'=>'post-title'))}}</h5>
                                                <h5><i class="fa fa-user fa-fw"></i>
                                                {{ HTML::linkAction('ProfileController@show', $gallery->user->username, array('id'=>$gallery->user->id), array('class'=>'post-uploader'))}}</h5>
                                                <p class="post-desc hidden-xs"> {{$gallery->caption}}</p>
                                            </li>
                                            </ul>
                                        </li>
                                        <li class="col-md-4 col-sm-4 col-xs-12 post-util">
                                            <ul class="list-inline">
                                                <li class="col-md-4 play-icon text-right">
                                                    {{ HTML::linkAction('GalleryController@showGallery', '', array($gallery->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                                </li>
                                                <li class="col-md-8 text-left">
                                                    <h6 class="">{{$gallery->timeago}}</h6>
                                                    <!-- <h6>views 156 Views</h6> -->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div> <!-- recent uploads end -->                        
        </aside>
    @stop
    <!-- Footer -->    
</div> <!-- End of wrapper -->
	@section('scripts2')
    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000; //changes the speed
    })
    </script>
   @stop
