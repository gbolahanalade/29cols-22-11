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
        <div class="row" style="padding: 0 15px;">
        <div class="col-md-4 col-sm-4 col-xs-6 padding-left0">
            <a href="{{ action('HomeController@index')}}"><h2 class="pull-left padding5000 margin0"><i class="fa fa-home"></i></a> |
            <span>Pictures</span> <i class="fa fa-camera"></i></h2>
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
                    <h2 class="margin0">Pictures Categories</h2>
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#modelling" role="tab" data-toggle="tab">Modelling</a></li>
                        <li><a href="#others" role="tab" data-toggle="tab">Others</a></li>
                    </ul>
                    <!-- </div> -->
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <!-- Modelling Pictures -->
                        <div id="modelling" class="tab-pane active fade in padding50">
                            <div class="row margin0">
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

                            @if ($modelling->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Modelling Photos!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($modelling as $model)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 post-thumb padding05">
                                    <div class="box thumbnails img-responsive" style="background: url({{$model->image}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                    <a href="{{ action('GalleryController@showGallery', $model->id)}}"><div class="overlay">
                                    <span class="search">
                                    <i class="fa fa-search-plus fa-3x"></i></span></div>
                                    </a>
                                    </div>
                                    <div class="caption">
                                    <!-- caption -->
                                    <h5>{{ HTML::linkAction('GalleryController@showGallery', $model->caption, 
                                        array($model->id), array('class'=>'post-title'))}}
                                    </h5>
                                    <h5>
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $model->user->username, array('id'=>$model->user->id), 
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
                        <!-- Other pictures -->
                        <div id="others" class="tab-pane fade in padding50">
                            <div class="row margin0">
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

                            @if ($others->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Modelling Photos!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($others as $other)
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 post-thumb padding05">
                                    <div class="box thumbnails img-responsive" style="background: url({{$other->image}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                    <a href="{{ action('GalleryController@showGallery', $other->id)}}"><div class="overlay">
                                    <span class="search">
                                    <i class="fa fa-search-plus fa-3x"></i></span></div>
                                    </a>
                                    </div>
                                    <div class="caption">
                                    <!-- caption -->
                                    <h5>{{ HTML::linkAction('GalleryController@showGallery', $other->caption, 
                                        array($other->id), array('class'=>'post-title'))}}
                                    </h5>
                                    <h5>
                                        <i class="fa fa-user fa-fw"></i>
                                        {{ HTML::linkAction('ProfileController@show', $other->user->username, array('id'=>$other->user->id), 
                                            array('class'=>'post-uploader'))}}
                                    </h5>
                                    <p class="post-desc">
                                        <em><!-- live date --> {{$other->timeago}}</em>
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
                    </div>
                    <!-- AD Space -->
                    <div class="banner padding50 margin0-15">
                        <img class="center-block img-responsive" src="http://placehold.it/700x50+ADSpace" />
                    </div>
                    <!-- RELATED CONTENT -->
                        <div class="border-solid margin0-15">
                            <h2 class="text-left margin0">Featured Pictures</h2>
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

                            @if ($gals->isEmpty())
                            <p class="alert alert-info text-center" role="alert"> There are no Featured Photos!
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span></button>
                            </p>

                            @else
                            @foreach ($gals as $gal)         
                                    <div class="item">
                                        <div class="lazyOwl box thumbnails img-responsive" style="background: url({{$gal->image}}) no-repeat 0 0; background-size:100% 100%;" width="auto" heigth="100px">
                                        <a href="{{ action('GalleryController@showGallery', $gal->id)}}"><div class="overlay">
                                        <span class="search">
                                        <i class="fa fa-search-plus fa-3x"></i></span></div>
                                        </a>
                                        </div>
                                        <div class="caption">
                                        <!-- caption -->
                                        <h3>{{ HTML::linkAction('GalleryController@showGallery', $gal->caption, array('id'=> $gal->id), 
                                        array('class'=>'post-title'))}}</h3>
                                        <p class="post-desc">
                                        <em><!-- live date --> {{$gal->timeago}}</em>
                                        </p>
                                        </div>                                    
                                    </div>
                                    @endforeach
                                    @endif
                        </div>
                        </div>
                    <!-- End Magazine Slider -->
                </section>
                @stop
                <!-- SIDEBAR COL-5 -->
               @include('gallery.gallery-sidebar')
            
</div> <!-- End of wrapper -->
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

    