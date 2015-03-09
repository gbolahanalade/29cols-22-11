@include('layout.header')

<body>
    <div id="wrap">
    <section class="container content">
    <div class="row">
    <form action="" class="upload-page main-content center-block">
        <div class="panel-header">
            <div class="panel-title text-center">
            <h2>Add Your Music <i class="fa fa-music"></i></h2>
            <h6 class="alert alert-info" role="alert">Maximum of 10 Uploads (add your best work)</h6>
            </div>
        </div>
        <hr> 
        @if (Session::get('errors'))
        <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errors') }}}</a>
        </div>
        @endif
        @if (Session::get('notices'))
        <div class="alert"><a name="notice">{{{ Session::get('notices') }}}</a>
        </div>
        @endif
        <div class="panel-body" style="margin-bottom:220px;">
            <div class="">
                <div class="upld-comp"> 
                    <h3></h3>               
                    <a class="btn-group-addon btn btn-default btn-file btn-block" type="file" placeholder="">
                    <i class="fa fa-desktop"> {{Form::label('music','Upload Mp3 From your Computer') }}

                     {{Form::open( array('url' => '/song/create', 'files'=> true, 'method'=>'post')) }}</i></a>
                </div>
                    <!-- separator -->
                    <div class="heading upld-section-seprtr"><h2>OR</h2></div>         
                    <!-- separator end -->
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-soundcloud"></i></span>
                    {{Form::text('soundcloud', 'Add Soundcloud Url', array('class'=>'form-control'))}}
                </div>
                <hr>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                    {{Form::text('youtube', 'Add YouTube Url For Music Video (Optional)', array('class'=>'form-control'))}}
                </div>
            </div>
            <hr>
            <div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-">Song Title (Required)</i></span>
                    {{Form::text('title', '', array('class'=>'form-control'))}}
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-">Description</i></span>
                    {{Form::textarea('description', '', array('class'=>'form-control', 'rows'=>'3'))}}
                </div>
            </div>
            <hr>
            <div>
                <div class="col-md-6">
                    <label for="upld-img" class="control-label">Album Art (Optional)</label>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview" data-trigger="fileinput" style="width:150px; height:150px;">
                        {{ HTML::image('img/user.jpg','Album Art')}}</div>
                        <div><span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>{{Form::file('song_image')}}</span>
                        <a href="#" class="btn btn-u fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 form-group text-left">
                    <ul class="list-unstyled">
                        <li><label for="upld-tags" class="control-label">Tags
                            <i class="icon-prepend fa fa-tag"></i> (separated with commas)</label>
                        </li>
                        <li>
                            {{Form::textarea('tags', '', array('class'=>'form-control', 'rows'=>'3'))}}
                        </li>
                    </ul>
                    <ul class="list-unstyled select">
                        <li><label for="upld-genre" class="control-label">Genre</label></li>
                        <li><select class="form-control">
                            <option value="genre" disabled>Genre</option>
                            <option value="afrobeat">Afrobeat</option>
                            <option value="rap">HipHop</option>
                            <option value="rnb">R&B</option>
                            <option value="gospel">Gospel</option>
                            <option value="highlife">Highlife</option>
                            <option value="others">Others</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="panel-footer" style="margin-top:10px;">
            {{Form::submit('Submit', array('class'=>'btn btn-warning')) }}                                
            {{Form::close('Back') }}
        </div>
    </form>
    </div>
    </section>
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <!-- FOOTER LEFT COL-6 -->
                <div class="col-lg-6">
                    <p class="floatleft copyright text-muted small">
                        Copyright &copy; 27Colours 2014. All Rights Reserved
                    </p>
                </div>
                <!-- FOOTER RIGHT COL-6 -->
                <div class="footer-right col-lg-6">
                    <ul class="floatright list-inline">
                        <li>
                            <a href="#home">Contact</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#faqs">FAQS</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#services">Sponsors</a>
                        </li>
                        <li class="footer-menu-divider"> | </li>
                        <li>
                            <a href="#">Credits</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

   
<!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>
    <!-- JS Global Compulsory -->           

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>

</html>
