<!DOCTYPE html>
<html>
<head>
	<title>Project Flyer</title>
  <link rel="stylesheet" type="text/css" href="/css/libs.css">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
</head>
<body>
<div class="se-pre-con"></div>

<!-- Start of navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project flyer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>

          @if($signedIn)
          <p class="navbar-text navbar-right">
              Hello, {{ $user->name }}
          </p>
          @endif

        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- End of navigation -->

<!-- Start of main container -->
<div class="container">
	@yield('content')
</div>

<script type="text/javascript" src="/js/libs.js"></script>
<!--
<script type="text/javascript">
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
 
<script type="text/javascript">
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>

@yield('scripts')

@include ('flash')

</body>
</html>