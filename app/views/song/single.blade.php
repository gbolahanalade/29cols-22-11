@extends('layout.master')
@section('header')
                <div class="collapse navbar-collapse " id="navbar-collapse-1">
                     <!-- MENU --> 
                    <div class="collapse navbar-collapse " id="navbar-collapse-1">
                     <!-- MENU --> 
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="{{ action('HomeController@index')}}" class="active">
                                <i class="fa fa-home fa-fw centered"></i> Home</a>
                            </li>
                            <li class="active"><a href="{{ action('SongController@index')}}">
                            <i class="fa fa-music fa-fw centered"></i> Music</a></li>
                            <li><a href="{{ action('VideoController@index')}}">
                            <i class="fa fa-video-camera fa-fw centered"></i> Videos</a></li>
                            <li><a href="{{ action('GalleryController@index')}}">
                            <i class="fa fa-camera fa-fw centered"></i> Pictures</a></li>
                            <li><a href="{{ action('TalentController@index')}}">
                            <i class="fa fa-users fa-fw centered"></i> Talents</a></li>
                        </ul>   
                </div>
                </div>
                @stop

    <!-- Breadcrumbs -->
    @section('search')
    <div class="breadcrumbs container">
        <div class="row" style="padding-right: 15px; padding-left: 30px;">
        <div class="col-md-4 col-sm-4 col-xs-6 padding-left0">
            <a href="{{ action('HomeController@index')}}"><h2 class="pull-left padding5000 margin0"><i class="fa fa-home"></i></a> |
            <a href="{{ action('SongController@index')}}"><span>Music</span></a> <i class="fa fa-music"></i></h2>
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
                <!-- MAIN CONTENT COL-8 -->
                <section class="col-md-7">
                     <!-- ROW 2 - UPLOAD & DESCRIPTION -->
                    <div class="panel panel-default" style="margin-bottom:5px;">
                        <div class="panel-heading panel-title">
                                <h2 class="post-title margin0"> {{$song->title}} </h2>                                                       
                        </div>
                        <div class="panel-body">
                            <div class="row padding015">
                                <ul class="list-inline post-item">
                                <li class="pull-left" style="padding-left: 0;"> 
                                    {{HTML::image(isset($song->image) ? $song->image : null,'page pics', 
                                    array('class'=>'img-responsive thumbnail margin0'))}}
                                </li>
                                <li>                                    
                                    <p class="post-uploader">
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $song->user->username, array('id'=>$song->user->id),
                                        array('class'=>'post-uploader'))}}
                                    </p>
                                    <!-- <p class="post-desc margin0">{{ $song->description}}</p> -->
                                    <div class="post-util">
                                        <span><i class="fa fa-clock-o"> <!-- live date -->{{$song->timeago}} </i></span> | 
                                        <!-- <li><i class="glyphicon glyphicon-stats">views156 Views</i></li> -->
                                        <span class="blog-tags">
                                        <i class="fa fa-tags">Tag: </i>                                  
                                        <a href="#" class="btn btn-primary btn-xs">{{$genre}}</a>                                                                    
                                        </span>
                                    </div>               
                                </li>
                                </ul>
                            </div>
                            <div class="row padding015">
                                @if( isset($song->soundcloud))
                                <div class="">
                                <iframe width="100%" height="100px" scrolling="no" frameborder="no"
                                 src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{$song->soundcloud}}&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
                                </iframe>
                                </div>
                           
                                @elseif ( isset($song->song))
                                <div id="wrapper">
                                <audio class="audioplayer" preload="auto" controls style="width: 100%; margin-top:5px;">
                                    <source src="{{asset($song->song)}}"> <!-- .mp3 -->
                                    <source src="{{asset($song->song)}}"> <!-- .ogg -->
                                    <source src="{{asset($song->song)}}"> <!-- .wav -->
                                </audio>                        
                                </div>
                                @else
                                <p class="text-center alert alert-info"  role="alert"> You added an invalid Audio track/ soundcloud link!!! </p>
                                @endif
                            </div>
                        </div>
                        <div class="panel-footer text-left" style="padding:0 0 5px;">       
                            <div id="sharethis" class="" style="min-height:40px; max-height: 40px; margin-top:-10px;">
                                <!-- <span class='st_sharethis_hcount' displayText='ShareThis'></span> -->
                                <span class='st_facebook_hcount' displayText='Facebook'></span>
                                <span class='st_twitter_hcount' displayText='Tweet'></span>
                                <span class='st_fblike_hcount' displayText='Facebook Like'></span>
                            </div>                   
                        </div>
                    </div> <!-- upload panel ends -->                   
                    <div class="">
                        <!-- ADS 700 x 50-->
                        <div class="img-responsive center-block padding50">
                            <img class="img-responsive center-block" src="http://placehold.it/700x50+ADSpace">
                        </div>
                         <!-- COMMENTS -->
                        @include('discomment')
                       
                        <!-- RELATED CONTENT -->
                        <section id="recent-works" class="border-solid padding05">
                            <h2 class="text-left margin0"> Youtube Video</h2>
                            @if( isset($video->youtube))
                            <div class="post-upld">
                                <iframe width="100%" height="315" src="//www.youtube.com/embed/{{$song->youtube}}?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            @else
                            <p class="text-center alert alert-info"  role="alert"> No linked-related Videos! </p>
                            @endif 
                        </section>

                        <!-- RELATED CONTENT Slider -->
                    <div class="related-upld border-solid">
                            <h2 class="margin0">Related Songs</h2>
                            <div id="owl-demo" class="owl-carousel owl-theme"> 
                             @if ($reSongs->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Related Songs!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($reSongs as $reSong)         
                                    <div class="item">
                                        <div class="lazyOwl box thumbnails img-responsive" style="background:url({{asset($reSong->image)}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('SongController@showSong', $reSong->id)}}"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-search-plus fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h3>{{ HTML::linkAction('SongController@showSong', $song->title, array('id'=> $song->id), 
                                        array('class'=>'post-title'))}}</h3>
                                        <p class="post-desc">
                                        <em><!-- live date --> {{$reSong->timeago}}</em>
                                        </p>
                                        </div>                                    
                                    </div>
                                    @endforeach
                                    @endif
                                    <!-- End Slider -->
                            </div>
                    </div>
                    </div>
                </section>
                @stop
                <!-- SIDEBAR COL-5 -->
                @include('song.song-sidebar')
</div> <!-- End of wrapper -->   
    <!-- Footer -->
    @section('scripts2')
    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js')}}"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        lazyLoad : true,
        items : 4,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,4],
        itemsTablet : [600,2],
        itemsMobile : [320,1]
      });
    });
    </script>
   @stop
