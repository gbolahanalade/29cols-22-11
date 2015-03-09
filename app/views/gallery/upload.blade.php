<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Pictures | 27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet" media="screen">  

    <!-- Custom CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="plugins/blueimp/css/jquery.fileupload.css">   -->  
    
    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
    <div class="col-lg-3 col-lg-offset-4">
    <br>
        <h4 id="title" style="text-align: center">Change Gallery Picture</h4>
        <img src="../../img/user.jpg" id="galleryImage" class="col-lg-12">
        <div class="col-lg-12">&nbsp;</div>
        <input type="file" id="galleryPicture" name="galleryPicture" onchange="changeGalleryPicture()">
        <br>
        <textarea id="caption" placeholder="Caption"></textarea>
        <br>
        <div id="mediaProgress" class="progress progress-striped active" style="display: none">
            <div id="progressBar" class="progress-bar progress-bar-primary"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                <span class="sr-only">45% Complete</span>
            </div>
        </div>
        <button type="button" id="uploadButton" class="btn btn-primary disabled pull-right" onclick="uploadGalleryPicture()">Upload</button>
    </div>
  </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/editGallery.js"></script>   
<!-- jQuery Version latest version 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <script src="plugins/blueimp/js/vendor/jquery.ui.widget.js"></script> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
 The basic File Upload plugin -->
<!-- <script src="plugins/blueimp/js/jquery.fileupload.js"></script> -->
<!-- Bootstrap JS is not required, but included for the responsive demo navigation 
<script>
/*jslint unparam: true */
/*global window, $ */
/*$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : '';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});*/ -->
</body>

</html>
