            @section('side') 
               <aside class="col-md-5">
                    <!-- Home_300x250_1 -->
                        <div style="padding: 5px 0 5px 0; min-height:350px;" class="sidebar-ad">
                            <img class="img-responsive" alt="AD Space" src="{{ asset('img/ad/ad450x350.gif')}}">
                        </div>
                        <div class="fb-like-box" data-href="https://www.facebook.com/27colours" data-width="100%" data-colorscheme="light"
                         data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                        <!-- Featured Uploads-->
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center">Recent Songs</h3>
                        </div>
                        <div class="panel-body">
                            <div class="">
                            @foreach ($recentSongs as $song)
                            <ul class="list-inline post-item">
                                <li class="col-md-9 col-sm-9 col-xs-12">
                                    <ul class="list-inline">
                                    <li class="col-md-3 pull-left">
                                      {{ HTML::image($song->image, $song->title, array('class'=>'img-responsive thumbnail','width'=>'50px','height'=>'50px')) }}                                       
                                    </li>
                                    <li class="col-md-9 pull-left post-desc">                                    
                                        <h3>{{ HTML::linkAction('SongController@showSong', $song->title, array($song->id), array('class'=>'post-title'))}}</h3>
                                        <h5><a href="">{{ $song->user->username}} </a></h5>
                                        <p class="post-desc hidden-xs"> {{$song->description}}</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-sm-3 col-xs-12 post-util">
                                    <ul class="row list-inline">
                                        <li class="col-md-4 play-icon text-right">
                                            {{ HTML::linkAction('SongController@showSong', '', array($song->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <h6 class="">{{$song->timeago}}</h6>
                                            <h6><!-- views --> 156 Views</h6>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            </div>
                        </div>
                        </div>
                        <!-- Top 10 Uploads-->
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center">Top 10 Uploads</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="row list-inline post-item">
                                <li class="col-md-8 col-xs-7">
                                    <ul class="list-inline">
                                    <li class="col-md-3">
                                        <a href="post-page.html" title="Ajaa">  
                                        <img class="thumbnail" width="50px" height="50px" alt="" src="img/bg1-thumbnail.jpg" class="img-responsive">
                                        </a>
                                    </li>
                                    <li class="col-md-9 post-desc">
                                        <h3 class="post-title"><a href="post-page.html">Girlie 'O</a></h3>
                                        <h5><a href="user-profile-page.html">Patoranking </a></h5>
                                        <p class="post-desc hidden-xs">Another club banger from the new talent in the industry</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-4 col-xs-5 post-util">
                                    <ul class="list-inline">
                                        <li class="col-md-4 play-icon text-right"><a href="post-page.html">
                                            <i class="fa fa-play-circle fa-3x"></i></a>
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <h6><!-- live date --> 11 months ago</h6>
                                            <h6><!-- views --> 156 Views</h6>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="row list-inline post-item">
                                <li class="col-md-8 col-xs-7">
                                    <ul class="list-inline">
                                    <li class="col-md-3">
                                        <a href="post-page.html" title="Ajaa">  
                                        <img class="thumbnail" width="50px" height="50px" alt="" src="img/bg1-thumbnail.jpg" class="img-responsive">
                                        </a>
                                    </li>
                                    <li class="col-md-9 post-desc">
                                        <h3 class="post-title"><a href="post-page.html">Girlie 'O</a></h3>
                                        <h5><a href="user-profile-page.html">Patoranking </a></h5>
                                        <p class="post-desc hidden-xs">Another club banger from the new talent in the industry</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-4 col-xs-5 post-util">
                                    <ul class="list-inline">
                                        <li class="col-md-4 play-icon text-right"><a href="post-page.html">
                                            <i class="fa fa-play-circle fa-3x"></i></a>
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <h6><!-- live date --> 11 months ago</h6>
                                            <h6><!-- views --> 156 Views</h6>
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
                                <li class="col-md-8 col-xs-7">
                                    <ul class="list-inline">
                                    <li class="col-md-3">
                                        <a href="post-page.html" title="Ajaa">  
                                        <img class="thumbnail" width="50px" height="50px" alt="" src="img/bg1-thumbnail.jpg" class="img-responsive">
                                        </a>
                                    </li>
                                    <li class="col-md-9 post-desc">
                                        <h3 class="post-title"><a href="post-page.html">Girlie 'O</a></h3>
                                        <h5><a href="user-profile-page.html">Patoranking </a></h5>
                                        <p class="post-desc hidden-xs">Another club banger from the new talent in the industry</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-4 col-xs-5 post-util">
                                    <ul class="list-inline">
                                        <li class="col-md-4 play-icon text-right"><a href="post-page.html">
                                            <i class="fa fa-play-circle fa-3x"></i></a>
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <h6><!-- live date --> 11 months ago</h6>
                                            <h6><!-- views --> 156 Views</h6>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="row list-inline post-item">
                                <li class="col-md-8 col-xs-7">
                                    <ul class="list-inline">
                                    <li class="col-md-3">
                                        <a href="post-page.html" title="Ajaa">  
                                        <img class="thumbnail" width="50px" height="50px" alt="" src="img/bg1-thumbnail.jpg" class="img-responsive">
                                        </a>
                                    </li>
                                    <li class="col-md-9 post-desc">
                                        <h3 class="post-title"><a href="post-page.html">Girlie 'O</a></h3>
                                        <h5><a href="user-profile-page.html">Patoranking </a></h5>
                                        <p class="post-desc hidden-xs">Another club banger from the new talent in the industry</p>
                                    </li>
                                    </ul>
                                </li>
                                <li class="col-md-4 col-xs-5 post-util">
                                    <ul class="list-inline">
                                        <li class="col-md-4 play-icon text-right"><a href="post-page.html">
                                            <i class="fa fa-play-circle fa-3x"></i></a>
                                        </li>
                                        <li class="col-md-8 text-left">
                                            <h6><!-- live date --> 11 months ago</h6>
                                            <h6><!-- views --> 156 Views</h6>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        </div>
                </aside>
                @stop
      
             