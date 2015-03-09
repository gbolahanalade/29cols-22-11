@extends('layout.master')
@section('header')
                <div class="collapse navbar-collapse " id="navbar-collapse-1">
                     <!-- MENU --> 
                    <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="{{ action('HomeController@index')}}">
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
                @stop
<div class="wrapper">
    <!-- Breadcrumbs -->
    @section('search')
    <div class="breadcrumbs container">
        <div class="row" style="padding: 0 15px;">
        <div class="col-md-4 col-sm-4 col-xs-6 padding-left0">
            <a href="{{ action('HomeController@index')}}"><h2 class="pull-left padding5000 margin0"><i class="fa fa-home"></i></a> |
            <span>Music</span> <i class="fa fa-music"></i></h2>
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
                    <h2 class="margin0">Music Categories</h2>
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#afrobeat" role="tab" data-toggle="tab">Afrobeat</a></li>
                        <li><a href="#hiphop" role="tab" data-toggle="tab">Hiphop</a></li>
                        <li><a href="#rnb" role="tab" data-toggle="tab">R&B</a></li>
                        <li><a href="#gospel" role="tab" data-toggle="tab">Gospel</a></li>
                        <li><a href="#highlife" role="tab" data-toggle="tab">Highlife</a></li>
                        <li><a href="#others" role="tab" data-toggle="tab">Others</a></li>
                    </ul>
                    <!-- </div> -->
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <!-- Afrobeats -->
                        <div id="afrobeat" class="tab-pane active fade in padding50">
                            @if (Session::get('error'))

                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif

                            @if ($afrobeats->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no Afrobeat Songs! :(</p>
                            @else
                            @foreach ($afrobeats as $afrobeat)
                            <ul class="row list-inline post-item ">
                                <li class="col-md-9 col-xs-8">
                                    <ul class="list-inline">
                                    <li class="pull-left col-md-2 col-xs-4">
                                        <a href="" title="Uploader">  
                                        {{ HTML::image($afrobeat->image, $afrobeat->title, array('class'=>'thumbnail img-responsive')) }} 
                                        </a>
                                    </li>
                                    <li class="pull-left col-md-10 col-xs-8">
                                    <h3>{{ HTML::linkAction('SongController@showSong', $afrobeat->title, array($afrobeat->id), array('class'=>'post-title'))}}</h3>
                                    <h5><!-- {{ $afrobeat->user->username}} -->
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $afrobeat->user->username, array('id'=>$afrobeat->user->id),
                                        array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc hidden-xs">{{ $afrobeat->description}}</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-xs-4 post-util">
                                    <ul class="row list-inline">
                                        <li class="col-md-4 play-icon text-right">
                                        {{ HTML::linkAction('SongController@showSong', '', 
                                        array($afrobeat->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <p class="post-desc">{{$afrobeat->timeago}}</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                             @endforeach
                            @endif 
                           
                            <!-- LOAD MORE -->
                            <ul class="pager">
                                <li class="previous"><a class="btn btn-default" href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <!-- Hip Hop -->
                        <div id="hiphop" class="tab-pane fade in padding50">
                            @if (Session::get('error'))

                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif

                            @if ($hips->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no Hiphop Songs!</p>
                            @else
                            @foreach ($hips as $hip)
                            <ul class="row list-inline post-item">
                                <li class="col-md-9 col-xs-8">
                                    <ul class="list-inline">
                                    <li class="pull-left col-md-2 col-xs-4">
                                        <a href="" title="Uploader">  
                                        {{ HTML::image($hip->image, $hip->title, array('class'=>'thumbnail img-responsive')) }} 
                                        </a>
                                    </li>
                                    <li class="pull-left col-md-10 col-xs-8">
                                    <h3>{{ HTML::linkAction('SongController@showSong', $hip->title, array($hip->id), array('class'=>'post-title'))}}</h3>
                                    <h5><!-- {{ $hip->user->username}} -->
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $hip->user->username, array('id'=>$hip->user->id),
                                        array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc hidden-xs">{{ $hip->description}}</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-xs-4 post-util">
                                    <ul class="row list-inline">
                                        <li class="col-md-4 play-icon text-right">
                                            {{ HTML::linkAction('SongController@showSong', '', 
                                            array($hip->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <p class="post-desc"><!-- live date --> {{$hip->timeago}}</p>                                           
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            @endif 
                            
                            <!-- LOAD MORE -->
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <!-- R&B -->
                        <div id="rnb" class="tab-pane fade in padding50">
                          @if (Session::get('error'))

                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif

                            @if ($rnbs->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no R&B Songs!</p>
                            @else
                            @foreach ($rnbs as $rnb)
                            <ul class="row list-inline post-item">
                                <li class="col-md-9 col-xs-8">
                                    <ul class=" list-inline">
                                    <li class="pull-left col-md-2 col-xs-4">
                                        <a href="#" title="Ajaa">  
                                        {{ HTML::image($rnb->image, $rnb->title, array('class'=>'thumbnail img-responsive')) }} 
                                        </a>
                                    </li>
                                    <li class="pull-left col-md-10 col-xs-8">
                                    <h3>{{ HTML::linkAction('SongController@showSong', $rnb->title, array($rnb->id), array('class'=>'post-title'))}}</h3>
                                    <h5><!-- {{ $rnb->user->username}} -->
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $rnb->user->username, array('id'=>$rnb->user->id),
                                        array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc hidden-xs">{{ $rnb->description}}</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-xs-4 post-util">
                                    <ul class="row list-inline">
                                        <li class="col-md-4 play-icon text-right">
                                            {{ HTML::linkAction('SongController@showSong', '', 
                                        array($rnb->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <p class=""><!-- live date --> {{$rnb->timeago}}</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            @endif                             
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <!-- Gospel -->
                        <div id="gospel" class="tab-pane fade in padding50">
                            @if (Session::get('error'))

                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif

                            @if ($gospels->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no gospel Songs!</p>
                            @else
                            @foreach ($gospels as $gospel)
                            <ul class="row list-inline post-item">
                                <li class="col-md-9 col-xs-8">
                                    <ul class=" list-inline">
                                    <li class="pull-left col-md-2 col-xs-4">
                                        <a href="#" title="Ajaa">  
                                        {{ HTML::image($gospel->image, $gospel->title, array('class'=>'thumbnail img-responsive')) }} 
                                        </a>
                                    </li>
                                    <li class="pull-left col-md-10 col-xs-8">
                                    <h3>{{ HTML::linkAction('SongController@showSong', $gospel->title, array($gospel->id), array('class'=>'post-title'))}}</h3>
                                    <h5><!-- {{ $gospel->user->username}} -->
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $gospel->user->username, array('id'=>$gospel->user->id),
                                        array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc hidden-xs">{{ $gospel->description}}</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-xs-4 post-util">
                                    <ul class="row list-inline">
                                        <li class="col-md-4 play-icon text-right">
                                            {{ HTML::linkAction('SongController@showSong', '', 
                                        array($gospel->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <p class="post-desc"><!-- live date --> {{$gospel->timeago}}</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            @endif 
                            
                            <!-- LOAD MORE -->
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <!-- Highlife -->
                        <div id="highlife" class="tab-pane fade in padding50">
                            @if (Session::get('error'))

                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif

                            @if ($rnbs->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no Highlife Songs! :(</p>
                            @else
                            @foreach ($highlifes as $highlife)
                            <ul class="row list-inline post-item">
                                <li class="col-md-9 col-xs-8">
                                    <ul class=" list-inline">
                                    <li class="pull-left col-md-2 col-xs-4">
                                        <a href="" title="Uploader">  
                                        {{ HTML::image($highlife->image, $rnb->title, array('class'=>'thumbnail img-responsive')) }} 
                                        </a>
                                    </li>
                                    <li class="col-md-10 col-xs-8">
                                    <h3>{{ HTML::linkAction('SongController@showSong', $highlife->title, array($hip->id), array('class'=>'post-title'))}}</h3>
                                    <h5><!-- {{ $highlife->user->username}} -->
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $highlife->user->username, array('id'=>$highlife->user->id),
                                        array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc hidden-xs">{{ $highlife->description}}</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-xs-4 post-util">
                                    <ul class="row list-inline">
                                        <li class="col-md-4 play-icon text-right">
                                            {{ HTML::linkAction('SongController@showSong', '', 
                                        array($highlife->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <p class="post-desc"><!-- live date --> {{$highlife->timeago}}</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            @endif                             
                            <!-- LOAD MORE -->
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <!-- Others -->
                        <div id="others" class="tab-pane fade in padding50">
                            @if (Session::get('error'))

                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}</a></div>
                            @endif

                            @if (Session::get('notice'))
                            <div class="alert alert-info" role="alert"><a name="notice">{{{ Session::get('notice') }}}</a></div>
                            @endif

                            @if ($others->isEmpty())
                              <p class="text-center alert alert-info"  role="alert"> There are no Afrobeat Songs! :(</p>
                            @else
                            @foreach ($others as $other)
                            <ul class="row list-inline post-item">
                                <li class="col-md-9 col-xs-8">
                                    <ul class=" list-inline">
                                    <li class="pull-left col-md-2 col-xs-4">
                                        <a href="" title="Uploader">  
                                        {{ HTML::image($other->image, $other->title, array('class'=>'thumbnail img-responsive')) }} 
                                        </a>
                                    </li>
                                    <li class="pull-left col-md-10 col-xs-8">
                                    <h3>{{ HTML::linkAction('SongController@showSong', $other->title, array($other->id), array('class'=>'post-title'))}}</h3>
                                    <h5><!-- {{ $other->user->username}} -->
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $other->user->username, array('id'=>$other->user->id),
                                        array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc hidden-xs">{{ $other->description}}</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-xs-5 post-util">
                                    <ul class="row list-inline">
                                        <li class="col-md-4 play-icon text-right">
                                            {{ HTML::linkAction('SongController@showSong', '', 
                                        array($other->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <p class="post-desc"><!-- live date --> {{$other->timeago}}</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            @endif 
                            
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
                        <img class="center-block img-responsive" src="http://placehold.it/700x50+=ADSpace" />
                    </div>
                    <!-- RELATED CONTENT Slider -->
                    <div class="border-solid margin0-15">
                                <h2 class="text-left margin0">Featured Music</h2>
                        <div id="owl-demo" class="owl-carousel owl-theme"> 
                             @if (Session::get('error'))
                            <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('error') }}}
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </a></div>
                            @endif
                            
                            @if (Session::get('notice'))
                            <div class="alert"><a name="notice">{{{ Session::get('notice') }}}
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                             </a></div>
                            @endif

                            @if ($songs->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Featured Songs!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($songs as $song)         
                                    <div class="item">
                                        <div class="lazyOwl box thumbnails img-responsive" style="background: url({{$song->image}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('SongController@showSong', $song->id)}}"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-search-plus fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h3>{{ HTML::linkAction('SongController@showSong', $song->title, array('id'=> $song->id), 
                                        array('class'=>'post-title'))}}</h3>
                                        <p class="post-desc">
                                        <em>{{$song->timeago}}</em>
                                        </p>
                                        </div>                                    
                                    </div>
                                    @endforeach
                                    @endif
                        </div>
                    </div>
                    <!-- End Slider -->
                </section>
                @stop

                @include('song.song-sidebar')
</div> <!-- wrapper ends -->    

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