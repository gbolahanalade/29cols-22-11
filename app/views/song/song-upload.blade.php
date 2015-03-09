<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Songs | 27 Colours</title>

    <!-- Custom Page CSS -->    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet" media="screen">   

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">    

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript">
 $("document").ready(function() {
$('#upload').on('submit', function(){
    var form = $(this);
    var formdata = false;
    if (window.FormData){
        formdata = new FormData(form[0]);
    }
});
    var formAction = form.attr('action');
    $.ajax({
        url         : '/song/create',
        data        : formdata ? formdata : form.serialize(),
        cache       : false,
        contentType : false,
        processData : false,
        type        : 'POST',
        success     : function(data, textStatus, jqXHR){
            // Callback code
        }
    });
  });

   /* if (!$('#image').val())  //check empty song field
      {
          alert("Please upload an image for your song");
           
        }

    $('#image').change(function () {
    var val = $(this).val().toLowerCase();
    var regex = new RegExp("(.*?)\.(jpg|jpeg|png|gif)$");
 
    if(!(regex.test(val))) {
        $(this).val('');
            alert('Upload Accepted Image Format');
        } });

    if (!$('#song').val())  //check empty song field
      {
         alert('Please upload an audio file');
            
        }

    $('#song').change(function () {
        var val = $(this).val().toLowerCase();
        var regex = new RegExp("(.*?)\.(mp3|ogg|wav|mpeg)$");
            if(!(regex.test(val))) {
            $(this).val('');
                alert('Unsupported file');
             } });

    if (!$('#caption').val())  //check empty song field
        {
            alert("Please enter the caption of your Image");
        
        }  */


 


/* function uploadFile(){
   //check whether client browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
    { 
        
        if (!$('#song').val())  //check empty song field
        {
            $("#output").html("Please upload an audio file");
            return false
        }

         if (!$('#image').val())  //check empty song field
        {
            $("#output").html("Please upload an image for your song");
            return false
        }

         if (!$('#caption').val())  //check empty song field
        {
            $("#output").html("Please enter the caption of your Image");
            return false
        }


       var song_size  = $('#song')[0].files[0].size; //get song file size
       var image_size = $('#image')[0].files[0].size; //get image file size
       var song_ftype = $('#song')[0].files[0].type; // get song file type
       var image_ftype= $('#image')[0].files[0].type; // get song file type
        //allow file types 
      switch(image_ftype)
           {
            case 'image/png': 
            case 'image/gif': 
            case 'image/jpeg': 
            case 'image/pjpeg':
            break;
            default:
             $("#output").html("<b>"+image_ftype+"</b> Unsupported file type!");
         return false
           }

     /* switch(song_ftype)
           {
            case 'audio/mp3':
            case 'audio/mpeg':
            case 'audio/ogg':
            case 'audio/wav': 
            break;
            default:
             $("#output").html("<b>"+song_ftype+"</b> Unsupported file type!");
         return false
           } 


        //Allowed file size is less than 5 MB (1048576 = 1 mb)
       if(song_size>5242880) 
       {
         $("#output").html("<b>"+bytesToSize(song_size) +"</b> Too big file! <br />Audio file is too big, it should be less than 5 MB.");
         return false
       }

       if(image_size>5242880) 
       {
         $("#output").html("<b>"+bytesToSize(image_size) +"</b> Too big file! <br />Image file is too big, it should be less than 5 MB.");
         return false
       }

           //  alert('About to submit: \n\n' + queryString);
             return true; 


    }
    else
    {
             //Error for older unsupported browsers that doesn't support HTML5 File API
            $("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
             return false
    }

}   */
</script>

</head>

<body>
    <div id="wrap">
    <div class="panel panel-default center-block upload-page">
        <div class="panel-header">
           <!-- <h6 class="alert alert-info text-center" role="alert">Music uploaded!!!</h6> -->
            <hr>
            <div class="panel-title">
                <div class="breadcrumbs">
                    <h4><a href="{{ action('HomeController@index')}}"><i class="fa fa-home"></i></a>
                    | <a href="{{ action('ProfileController@index') }}">Profile</a> | <a href="{{action('SongController@getNew')}}" >
                    Add Music <i class="fa fa-music"></i> <i class="fa fa-reply"></i></a></h4>              
                </div>
                <h2 class="text-center"> Add music details </h2>
            </div> <!-- panel title end -->
                @if (Session::get('errors'))
                <div class="alert alert-error alert-danger" role="alert"><a name="error">{{{ Session::get('errors') }}}</a>
                </div>
                @endif

                @if (Session::get('notices'))
                <div class="alert"><a name="notice">{{{ Session::get('notices') }}}</a></div>
               @endif
        </div> <!-- panel header end -->
        <div class="panel-body">                        
            <a class="btn-group-addon btn btn-default btn-file btn-block" type="file" placeholder="">
            <i class="fa fa-desktop"> 
            <form class="form-upload" id="upload" enctype="multipart/form-data" method="post" action="/song/create">
               {{Form::label('song','Upload Mp3 From your Computer') }}</i></a>
                <input type="file" id="song" name="song" accept="audio/*"/>

            <div class="heading"><h2>OR</h2></div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-soundcloud"></i></span>
                 <input type="text" class="form-control" id="soundcloud" name="soundcloud" placeholder="Add Soundcloud Url"/>
               
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Add YouTube Url For Music Video (Optional)"/>
            </div>

        <div class="panel-body"> 
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-">Song Title (Required)</i></span>
                {{Form::text('title', '', array('class'=>'form-control'))}}
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-">Description</i></span>
                {{Form::textarea('description', '', array('class'=>'form-control', 'rows'=>'3'))}}
            </div>
            <div>
                <!-- album art -->
                <div class="col-md-4">
                        <label for="upld-img" class="control-label">Album Art (Optional)</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 150px; height: 150px;">
                            {{ HTML::image('img/user.jpg','Album Art', array('width'=>'150px', 'max-height'=>'150px'))}}</div>
                            <div><span class="btn btn-default btn-sm btn-file"><span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span><input type="file" name="image" id="image" accept="image/*"/></span>
                            <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div> 
                </div>
                <div class="col-md-8">
                    <ul class="list-unstyled select">
                            <li><label for="genre" class="control-label">Genre</label></li>
                            <li><select class="form-control" name="genre" id="genre">
                                <option>Afrobeat</option>
                                <option>Gospel</option>
                                <option>RnB</option>
                                <option>Hip-hop</option>
                                <option>highlife</option>
                                <option>Others</option>
                            </select>
                          </li>

                          <!--  <li>{{Form::select('genre', [
                                    'Afrobeat' => 'Afrobeat',
                                    'Gospel' => 'Gospel',
                                    'RnB' => 'R&B',
                                    'Hip-hop' => 'Hip-Hop',
                                    'Highlife' => 'Highlife',
                                    'Others'=> 'Others'], 0, ['class' => 'form-control']) }}
                               </li>  -->
                    </ul> 
                                           
                </div> 
            </div>      
            
            <hr>
            <div class="text-right">
                <input type="submit" id="submit-btn" value="Upload" />
            </div>                     
        </div> <!-- panel-body end -->  
        <img src="asset('img/ajax-loader.gif')}}" id="loading-img" style="display:none;" alt="Please Wait"/>
    {{Form::close()}}
        <div id="progressbox" ><div id="progressbar"></div>
             <div id="statustxt">0%</div></div>

            
            <div id="output"></div>
    </div> <!-- panel end -->
    </div> <!-- wrap end -->

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