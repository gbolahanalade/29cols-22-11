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
                            <li class="active"><a href="{{ action('GalleryController@index')}}">
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
        <div class="row" style="padding-right: 15px; padding-left: 30px;">
        <div class="col-md-4 col-sm-4 col-xs-6 padding-left0">
            <a href="{{ action('HomeController@index')}}"><h2 class="pull-left padding5000 margin0"><i class="fa fa-home"></i></a> |
            <a href="{{ action('GalleryController@index')}}"><span>Pictures</span></a> <i class="fa fa-camera"></i></h2>
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
                    <div class="panel panel-default"  style="margin-bottom:5px;">
                        <div class="panel-heading panel-title">
                            <h2 class="post-title margin0"> {{$gallery->caption}} </h2> 
                        </div>
                        <div class="panel-body">
                            <div class="row padding015">
                                <ul class="list-inline post-item">
                                <li class="pull-left" style="padding-left: 0;">
                                    {{ HTML::image(isset($gallery->user->profilePhoto->image) ? $gallery->user->profilePhoto->image : null,'Gallery pics', 
                                    array('class'=>'img-responsive thumbnail margin0'))}}
                                </li>
                                <li>
                                    <p class="post-uploader">
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $gallery->user->username, array('id'=>$gallery->user->id), 
                                            array('class'=>'post-uploader'))}}
                                    </p>
                                    <div class="post-util">
                                    <span><i class="fa fa-clock-o"> {{$gallery->timeago}}</i></span> | 
                                    <!-- <li><i class="glyphicon glyphicon-stats">156 Views</i></li> -->
                                    <span class="blog-tags">
                                        <i class="fa fa-tags fw"> Tag:</i> <a href="#" class="btn btn-primary btn-xs"> {{$cat}}</a>                                                                    
                                    </span>
                                    </div>
                                </li>
                                </ul>
                            </div> <!-- row ends -->                          
                            <div class="row padding015" style="min-height:200px; max-height:400px; width: 100%;">
                                {{ HTML::image($gallery->image, 'Uploaded-Image', 
                                array('class'=>'center-block img-responsive', 'width'=>'100%', 'height'=>'315px'))}}                                
                            </div>
                        </div> <!-- end of panel-body -->
                        <div class="panel-footer text-left" style="padding:0 0 5px;">
                            <div id="sharethis" style="min-height:40px; max-height: 40px; margin-top:-10px;">
                                    <!-- <span class='st_sharethis_hcount' displayText='ShareThis'></span> -->
                                    <span class='st_facebook_hcount' displayText='Facebook'></span>
                                    <span class='st_twitter_hcount' displayText='Tweet'></span>
                                    <span class='st_fblike_hcount' displayText='Facebook Like'></span>
                            </div>
                        </div>
                    </div> <!-- end of upload panel -->
                    <div>
                        <!-- ADS 700 x 50-->
                    <div class="img-responsive center-block padding50">
                        <img class="img-responsive center-block" src="http://placehold.it/700x50+ADSpace">
                    </div>
                    <!-- COMMENTS -->
                    @include('discomment')                            
                        
                        <!-- RELATED CONTENT -->
                        <div class="related-upld border-solid">
                            <h2 class="text-left margin0">Related Pictures</h2>
                            <div id="owl-demo" class="owl-carousel owl-theme"> 
                             @if (Session::get('error'))
                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </a></div>
                            @endif
                            
                            @if (Session::get('notice'))
                            <div class="alert"><a name="notice">{{{ Session::get('notice-song') }}}
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                             </a></div>
                            @endif

                            @if ($reCats->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Related Pictures!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($reCats as $reCat)         
                                    <div class="item">
                                        <div class="lazyOwl box thumbnails img-responsive" style="background:url({{asset($reCat->image)}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('GalleryController@showGallery', $reCat->id)}}"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-search-plus fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h3>{{ HTML::linkAction('SongController@showSong', $reCat->caption, array('id'=> $reCat->id), 
                                        array('class'=>'post-title'))}}</h3>
                                        <p class="post-desc"><em><!-- live date --> {{$reCat->timeago}}</em></p>
                                        </div>                                    
                                    </div>
                                    @endforeach
                                    @endif

                            </div>
                        </div>
                </section>
                @stop
                <!-- SIDEBAR COL-5 -->
                @include('gallery.gallery-sidebar')
            
</div> <!-- wrapper ends -->
    
    <!-- jQuery Version 1.11.0 -->
    @section('scripts2')
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>

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
        itemsTablet : [600,2],
        itemsMobile : [320,1]
      });
    });
    </script>
    @stop