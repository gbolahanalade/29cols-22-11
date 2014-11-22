@extends('layout.master')
@section('content')
        <!-- CONTENT -->
                <!-- MAIN CONTENT COL-8 -->
                <section id="main-content" class="jumbotron col col-lg-8">
                    <!-- CONTENT HEADER -->
                    <h2></h2>
                    <!-- TAB NAV -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a href="{{action('BlogController@index') }}" role="tab" data-toggle="tab">Blogs</a></li>
                        <li><a href="{{action('SongController@index')}}" role="tab" data-toggle="tab">Songs</a></li>
                        <li class="active>"><a href="{{ action('VideoController@index')}}" role="tab" data-toggle="tab">Videos</a></li>
                        <li><a href="{{ action('GalleryController@index')}}" role="tab" data-toggle="tab">Galleries</a></li>
                    </ul>
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <!-- TAB 1 -->
                        <div class="tab-pane active" id="tab2">
                         @if ($videos->isEmpty())
                              <p> There are no Videos! :(</p>
                            @else
                            @foreach ($videos as $video)                          
                            <section class="media">                            
                                <div class="media-body">
                                
                                    <!-- THUMBNAIL -->
                                    <a href="post-page.html" class="pull-left thumbnail">
                                        <img src="img/bg1-thumbnail.jpg">
                                    </a>                                
                                    <!-- TITLE -->
                                    <a href="{{ action('SongController@showSong', $song->id, $song->title )}}"><h3 class="media-heading lead text-center">{{ $song->title }}</h3></a>
                                    <!-- DESCRIPTION -->
                                    <p class="text-left">{{ $song->description}}</p>
                                    <!-- SOCIALS -->
                                    <p>
                                        <ul class="list-inline pull-right">
                                            <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i><span class="">30</span></a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-thumbs-down"></i><span class="">0</span></a></li>
                                            <li><a href="#"><i class="fa fa-download fa-fw"></i></a></li>
                                            <li><button type="button" class="btn btn-default">Share
                                                <i class="fa fa-share-square fa-fw"></i></button>
                                            </li>
                                            <li><button class="btn btn-primary" type="button">
                                                     Comments <span class="badge">{{ $song->rating_count}}</span></button>
                                            </li>
                                        </ul>
                                    </p>
                                    
                                </div>
                                 
                                <nav>
                                  <ul class="pager">
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                  </ul>
                                </nav>

                            </section>
                            @endforeach                             
                             @endif
                        </div>
                    </div>
                              
                </section>
                @stop
                <!-- SIDEBAR COL-4 -->
                @extends('layout.side')
                 @yield('sidebar')
           
   
