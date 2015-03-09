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
                            <li><a href="{{ action('VideoController@index')}}">
                            <i class="fa fa-video-camera fa-fw centered"></i> Videos</a></li>
                            <li><a href="{{ action('GalleryController@index')}}">
                            <i class="fa fa-camera fa-fw centered"></i> Pictures</a></li>
                            <li class="active"><a href="{{ action('TalentController@index')}}">
                            <i class="fa fa-users fa-fw centered"></i> Talents</a></li>
                        </ul>           
                </div>
                @stop
<div class="wrapper">
    @section('search')
        <!-- Breadcrumbs -->
    <div class="breadcrumbs container">
        <div class="row" style="padding: 0 15px;">
        <div class="col-md-4 col-sm-4 col-xs-6 padding-left0">
            <a href="{{ action('HomeController@index')}}"><h2 class="pull-left padding5000 margin0"><i class="fa fa-home"></i></a> |
            <span>Talents</span> <i class="fa fa-users"></i></h2>
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
                    <h2 class="margin0">Talent Categories</h2>
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#modelling" role="tab" data-toggle="tab">Models</a></li>
                        <li><a href="#singing" role="tab" data-toggle="tab">Singers</a></li>
                        <li><a href="#dancing" role="tab" data-toggle="tab">Dancers</a></li>
                        <li><a href="#comedy" role="tab" data-toggle="tab">Comedian</a></li>
                    </ul>
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <!-- Latest Pictures -->
                        <div id="modelling" class="tab-pane active fade in padding50">
                            <div class="row margin0">
                            @if ($models->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Models!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($models as $model)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 post-thumb padding05">
                                    <div class="box thumbnails img-responsive" style="background: url({{isset($model->profilePhoto->image) ? $model->profilePhoto->image : 'img/user.jpg'}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                    <a href="{{ action('ProfileController@show', $model->id)}}"><div class="overlay">
                                    <span class="search">
                                    <i class="fa fa-search-plus fa-3x"></i></span></div>
                                    </a>
                                    </div>
                                    <div class="caption">
                                    <!-- caption -->
                                    <h5>
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $model->username, array('id'=>$model->id), 
                                            array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> {{ $model->timeago}}</em>
                                    </p>
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
                        <!-- Popular pictures -->
                        <div id="singing" class="tab-pane fade in padding50">
                            <div class="row margin0">
                        @if ($musicians->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Musicians!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($musicians as $musician)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 post-thumb padding05">
                                    <div class="box thumbnails img-responsive" style="background: url({{isset($musician->profilePhoto->image) ? $musician->profilePhoto->image : 'img/user.jpg'}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                    <a href="{{ action('ProfileController@show', $musician->id)}}"><div class="overlay">
                                    <span class="search">
                                    <i class="fa fa-search-plus fa-3x"></i></span></div>
                                    </a>
                                    </div>
                                    <div class="caption">
                                    <!-- caption -->
                                    <h5>
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $musician->username, array('id'=>$musician->id), 
                                            array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> {{ $musician->timeago}}</em>
                                    </p>
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

                        <div id="dancing" class="tab-pane fade in padding50">
                            <div class="row margin0">
                        @if ($dancers->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Dancers!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($dancers as $dancer)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 post-thumb padding05">
                                    <div class="box thumbnails img-responsive" style="background: url({{isset($dancer->profilePhoto->image) ? $dancer->profilePhoto->image : 'img/user.jpg'}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                    <a href="{{ action('ProfileController@show', $dancer->id)}}"><div class="overlay">
                                    <span class="search">
                                    <i class="fa fa-search-plus fa-3x"></i></span></div>
                                    </a>
                                    </div>
                                    <div class="caption">
                                    <!-- caption -->
                                    <h5>
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $dancer->username, array('id'=>$dancer->id), 
                                            array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> {{ $dancer->timeago}}</em>
                                    </p>
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

                        <div id="comedy" class="tab-pane fade in padding50">
                            <div class="row margin0">
                        @if ($comedians->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Comedians!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($comedians as $comedian)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 post-thumb padding05">
                                    <div class="box thumbnails img-responsive" style="background: url({{isset($comedian->profilePhoto->image) ? $comedian->profilePhoto->image : 'img/user.jpg'}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                    <a href="{{ action('ProfileController@show', $comedian->id)}}"><div class="overlay">
                                    <span class="search">
                                    <i class="fa fa-search-plus fa-3x"></i></span></div>
                                    </a>
                                    </div>
                                    <div class="caption">
                                    <!-- caption -->
                                    <h5>
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $comedian->username, array('id'=>$comedian->id), 
                                            array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> {{ $comedian->timeago}}</em>
                                    </p>
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
                    </div>
                    </div> <!-- row ends -->
                    <!-- AD Space -->
                    <div class="banner padding50 margin0-15">
                        <img class="center-block img-responsive" src="http://placehold.it/700x50+ADSpace" />
                    </div> <!-- row ends -->
                    <!-- RELATED CONTENT -->
                    <div class="border-solid margin0-15">
                            <h2 class="text-left margin0">Featured Users</h2>
                            <div id="owl-demo" class="owl-carousel owl-theme"> 
                            @if ($tops->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Top Users!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($tops as $top)         
                                    <div class="item">
                                        <div class="lazyOwl box thumbnails img-responsive" style="background: url({{isset($top->profilePhoto->image) ? asset($top->profilePhoto->image) : 'img/user.jpg'}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('ProfileController@show', $top->id)}}}"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-search-plus fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h3>{{ HTML::linkAction('ProfileController@show', $top->username, array('id'=> $top->id), 
                                        array('class'=>'post-title'))}}</h3>
                                        <p class="post-desc">
                                        <em><!-- live date --> {{$top->timeago}}</em>
                                        </p>
                                        </div>                                    
                                    </div>
                                    @endforeach
                                    @endif

                            </div>
                    </div> <!-- row ends -->
                    <!-- End Magazine Slider -->
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
</div> <!-- End of wrapper -->
    @section('scripts2')
    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>
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

    
