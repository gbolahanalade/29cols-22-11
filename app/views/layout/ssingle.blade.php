@extends('layout.master')
@section('header')

<div class="wrapper">
    <!-- Header -->
    <!-- /.intro-header -->
    <header id="pp-header">
        <div class="container  page-intro">
            <h2>Discover music <i class="fa fa-music fa-fw"></i> from new talents</h2>
        </div>
    </header>    
@section('content')
    <section id="post-page">
        <!-- CONTENT -->
        <div class="container">
            <div class="row blog-item">
                <!-- MAIN CONTENT COL-8 -->
                <section id="main-content" class="jumbotron col-lg-8">
                    <!-- CONTENT HEADER -->
                    <div class="pp-introtitle">
                    <h2 class="pull-left red">{{$blog->title }} <span class="small">(Produced by Chopstix)</span></h2>
                        <div id="sharethis" class="">
                        <span class='st_sharethis_hcount' displayText='ShareThis'></span>
                        <span class='st_facebook_hcount' displayText='Facebook'></span>
                        <span class='st_twitter_hcount' displayText='Tweet'></span>
                        <span class='st_fblike_hcount' displayText='Facebook Like'></span>
                        </div>
                    </div>
                    <!-- ROW 1 - UPLOADER INFO & UTILITIES -->
                    <div class="row ">
                        <div class="blog-post-tags">
                        <ul class="list-unstyled list-inline blog-info">
                            <li><i class="fa fa-calendar"></i> November 02, 2014</li>
                            <li><i class="fa fa-pencil"></i>Admin</li>
                            <li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>
                            <li class="blog-tags">
                                <i class="fa fa-tags">Tags: </i> 
                                <a href="#">Songs,</a> 
                                <a href="#">Hiphop,</a>
                                <a href="#">Chopstix,</a>
                                <a href="#">Brand new</a>
                            </li>
                        </ul>                                                
                        </div>
                    </div>
                    <hr>
                     <!-- ROW 2 - UPLOAD & DESCRIPTION -->
                    <div class="row">
                        <section class="">
                            <ul class="list-inline row container">
                            <li class="thumbnail">
                                <img class="albumart" src="img/bg1-thumbnail.jpg">
                            </li> 
                            <li>
                                <ul class="list-unstyled">
                                    <!-- SONG TITLE & ARTIST -->
                                    <li class="pp-title"><h4>
                                        <span class="pp-title1">Anuofia</span>
                                        <span class="pp-title2"><a class="red" href="pp-artist">Ajaa</a></span></h4>
                                    </li>
                                    
                                    <!-- RATING -->
                                    <li>
                                    <div class="pp-rating">
                                            <div>
                                            <ul class="list-inline">
                                                    <li>User Rating :</li>
                                                    <li><a href="#"><i class="glyphicon glyphicon-star"></i></a></li>
                                                    <li><a href="#"><i class="glyphicon glyphicon-star"></i></a></li>
                                                    <li><a href="#"><i class="glyphicon glyphicon-star-empty"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <!-- PLAYER -->
                                    <li class="pp-player scplayer">
                                        <iframe width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/175199197&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false">
                                        </iframe>
                                    </li> 
                                </ul>
                            </li>
                            </ul>   
                        </section>
                        <section class="content-desc">
                            <!-- DESCRIPTION -->
                            <div class="">
                            <h4 class="upload-desc"> Another hit banger from music producer Chopstix
                            </h4>
                            <p>
                                Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Fusce condimentum eleifend enim a feugiatt non libero consectetur adipiscing elit magna. Sed et quam lacus. Condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.
                            </p>
                            </div>
                        </section>
                    </div>
                    <hr>
                    <!-- SONG VIDEO -->
                    <div class="song-vid row">
                    </div>
                    <hr>
                    <!--  -->
                    <div class="row">
                        <!-- ADS -->
                        <div id="" class="banner google-ads col-12"></div>
                        <!-- TAGS -->
                        <div class="tags"></div>
                        <!-- ARTICLE INTERACTION -->
                        <div class="article-share"></div>
                        <!-- RELATED CONTENT -->
                        <div class="related-upld">
                            <div class="row">
                                <div class="">
                                <div>
                                    <h2 class="pull-left">Related Uploads</h2>
                                </div>
                                <div id="owl-demo">          
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>
                                  <div class="item"><img src="img/bg1-thumbnail.jpg" alt="Owl Image"></div>                               
                                </div>
                                </div>
                            </div>
                            <!-- COMMENTS -->
                            <div class="comments">
                                <hr>
                                <!-- Recent Comments -->
                                <div class="media">
                                    <h3>Comments</h3>
                                    <a class="pull-left" href="#">
                                        <img class="small-thumbnail media-object" src="img/bg1-thumbnail.jpg" alt="" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="">Celebrity Stalker</a> <span>5 hours ago / <a href="#">Reply</a></span></h4>
                                        <p>Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>

                                        <hr>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="img/bg1-thumbnail.jpg" alt="" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading <span>17 hours ago / <a href="#">Reply</a></span></h4>
                                                <p>Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum anibhut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="img/bg1-thumbnail.jpg" alt="" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading <span>2 days ago / <a href="#">Reply</a></span></h4>
                                                <p>Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum anibhut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/media-->

                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="img/bg1-thumbnail.jpg" alt="" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading <span>July 5,2013 / <a href="#">Reply</a></span></h4>
                                        <p>Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..</p>
                                    </div>
                                </div><!--/media-->
                                <!-- End Recent Comments -->

                                <hr>

                                <!-- Comment Form -->
                                <div class="post-comment">
                                    <h3>Leave a Comment</h3>
                                    <form>
                                        <label>Name</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-7 col-md-offset-0">
                                                <input type="text" class="form-control">
                                            </div>                
                                        </div>
                                        
                                        <label>Email <span class="color-red">*</span></label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-7 col-md-offset-0">
                                                <input type="text" class="form-control">
                                            </div>                
                                        </div>
                                        
                                        <label>Message</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-11 col-md-offset-0">
                                                <textarea class="form-control" rows="8"></textarea>
                                            </div>                
                                        </div>
                                        
                                        <p><button class="btn-u" type="submit">Send Message</button></p>
                                    </form>
                                </div>
                                <!-- End Comment Form -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SIDEBAR COL-3 -->
                
            </div>
        </div>
    </section>
</div>
@stop
<!-- SIDEBAR COL-4 -->
     @extends('layout.side')
     @yield('sidebar')