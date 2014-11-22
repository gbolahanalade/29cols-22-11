@section('header')
<header id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="container jumbotron">
                        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <img class="center-block" src="img/bg1.jpg" alt="BG Image 1">
                    <div class="carousel-caption">
                        <h2>27 Colours Image</h2>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the first background image using inline CSS below. -->
                    <img class="center-block" src="img/img2.jpg" alt="BG Image 1">
                    <div class="carousel-caption">
                        <h2>27 Colours Video</h2>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the first background image using inline CSS below. -->
                    <img class="center-block" src="img/bg1.jpg" alt="BG Image 1">
                    <div class="carousel-caption">
                        <h2>27 Colours Audio</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>
    </header>
@stop