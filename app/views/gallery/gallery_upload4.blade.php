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
    <link href="{{ asset('css/fileinput.min.css') }}" rel="stylesheet" media="all">
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

   <script type="text/javascript" src="{{asset('js/jquery-1.11.0.js')}}"></script>  

    <script src="{{ asset('js/bootstrap.min.js') }} type="text/javascript""></script>

    <script type="text/javascript" src="{{asset('js/jquery.form.min.js')}}"></script>
<script>
//wait for the DOM to be loaded
$(document).ready(function() {
    //bind 'upload' form 
var options = { 
    target:   '#output',   // target element(s) to be updated with server response 
    beforeSubmit:  beforeSubmit,  // pre-submit callback 
    success:       afterSuccess,  // post-submit callback 
    uploadProgress: OnProgress, //upload progress callback 
    resetForm: true         // reset the form after successful submit 
  //  dataType: 'json'
};


 $('#upload').submit(function() {
   $(this).ajaxSubmit(options);
       return false;

    });

function afterSuccess()
{
   // $('#upload').submit();
    $('#submit-btn').show(); //hide submit button
    $('#loading-img').hide(); //hide submit button
    $('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar
    // alert(data.message);
    //window.location.replace("http://localhost:8060/profile");

}

function beforeSubmit(formData){
   //check whether client browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
    { 
        
        
        var queryString = $.param(formData); 

       
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
           } */


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

}

function OnProgress(event, position, total, percentComplete)
{
    //Progress bar
    $('#progressbox').show();
    $('#progressbar').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt').css('color','#000'); //change status text to white after 50%
        }
}
//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

});
</script>

</head>

<body>
    <div class="wrap">
    <div class="panel panel-default center-block upload-page">

     <form id="upload" enctype="multipart/form-data" method="post" action="/gallery/create">
   
        <div class="panel-header">
            <div class="panel-title">
            <div class="breadcrumbs">
                    <h4><a href="{{ action('HomeController@index')}}"><i class="fa fa-home"></i></a>
                    | <a href="{{ action('ProfileController@index') }}">Profile</a> <i class="fa fa-reply"></i></h4>              
            </div>
            <h2 class="text-center">Add Your Music <i class="fa fa-music"></i></h2>
            <h6 class="alert alert-info text-center" role="alert">Maximum of 10 Uploads (add your best work)</h6>
            <a class="btn-group-addon btn btn-default btn-file btn-block" type="file" placeholder="">
            <i class="fa fa-desktop">
            @if (Session::get('errorg'))

                <div class="alert alert-error alert-danger"><a name="error">{{{ Session::get('errorg') }}}</a>
                </div>
                @endif

                @if (Session::get('noticeg'))
             <div class="alert"><a name="notice">{{{ Session::get('noticeg') }}}</a>
             </div>
               @endif 
                {{Form::label('songLabel','Upload Mp3 From your Computer') }}</i></a>
                <input type="file" id="song" name="song"/>

            <hr>

            <h2 class="text-center">Add Your Photos</h2>
            <h6 class="alert alert-info text-center" role="alert">Maximum of 10 Uploads</h6>
            </div> <!-- panel title ends -->
        </div> <!-- panel header ends -->
        <div class="panel-body">
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

            <div class="margin-bottom-20 center-block">
                <input type="text" class="form-control" id="caption" name="caption" placeholder="Enter Caption(Required)"/>
               
                <ul class="list-unstyled select">
                   <li> {{Form::label('cat','Category') }} </li>

                   <li><select class="form-control" name="cat" id="cat" required>
                        <option>modelling</option>
                        <option>others</option>
                    </select>
        
                        <!--<li>{{Form::select('category', [
                                'modelling' => 'Modelling',
                                'others' => 'Others'
                              ], 0, ['class' => 'form-control']) }}
                        </li> -->
                    </ul>
             </div>

            
             <hr>
            

            <div class="text-right">
               <!-- <input type="button" value="Upload File"> -->
                <input type="submit" id="submit-btn" value="Upload"/>

                </div>

        </div> <!-- panel body ends-->
        <img src="asset('img/ajax-loader.gif')}}" id="loading-img" style="display:none;" alt="Please Wait"/>
    {{Form::close() }}

    <div id="progressbox" ><div id="progressbar"></div>
             <div id="statustxt">0%</div></div>

            
            <div id="output"></div>
    </div> <!-- panel ends -->
    </div> <!-- wrap ends -->
    
   
<!-- jQuery Version latest version -->

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
<!-- The basic File Upload plugin -->

<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->


</body>

</html>
