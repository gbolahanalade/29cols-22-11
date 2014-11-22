<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <title>Login | 27 Colours</title>

   <!-- Bootstrap Core & CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- CSS Page Style -->    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loginreg-page.css') }}">
    

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/loginreg-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!-- Custom CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('plugins/line-icons/line-icons.css') }}">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="{{ asset('css/themes/default.css') }}" id="style_color">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "462b8e41-098f-4d6e-af7f-52472fed576a", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>

</head>

<body id="loginpage">

    <!--=== Content Part ===-->    
<div class="container">
    <!--Reg Block-->

    <!-- LOGIN TAB-->
    <div class="reg-block">
                    <div class="reg-block-header">
                        <h2>Sign In</h2>
                        <ul class="social-icons text-center">
                            <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                            <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                            <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                            <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                        </ul>
                        <p>Don't Have Account? Click {{ HTML::linkRoute('registration', 'Registration' )}} to register.</p>            
                    </div>

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="text" class="form-control" placeholder="Password">
                    </div>
                    <hr>
                    <label class="checkbox">
                        <input type="checkbox"> 
                        <p>Always stay signed in</p>
                    </label>
                                            
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <button type="submit" class="btn-u btn-block">Log In</button>
                        </div>
                    </div>
    </div>
    
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="{{ asset('plugins/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="{{ asset('plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/countdown/jquery.countdown.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/backstretch/jquery.backstretch.min.js') }}"></script>
<script type="text/javascript">
    $.backstretch([
      "assets/img/bg/5.jpg",
      "assets/img/bg/4.jpg",
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!-- JS Page Level -->           
<script type="text/javascript" src="{{ asset('js/app.js')}} "></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
<![endif]-->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


</body>

</html>

