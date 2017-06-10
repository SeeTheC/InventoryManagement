<!DOCTYPE html>
<html lang="en">
<head>
  <title>CC:IM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/layout-custom.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}" />

  <script src="{{ URL::asset('assets/js/jquery-2.2.3.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  <link rel="stylesheet" href="{{ URL::asset('assets/css/lm.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/tile.css') }}"> 
  <script src="{{ URL::asset('assets/js/common/common.js') }}"></script>   
  <script type="text/javascript">
    jQuery(function ($) {
        $(".tile").height($("#tile1").width());
        $(".carousel").height($("#tile1").width());
        $(".item").height($("#tile1").width());
        
        $(window).on('resize', function () {
            if (this.resizeTO) {
                clearTimeout(this.resizeTO);
            }
            this.resizeTO = setTimeout(function () {
                $(this).trigger('resizeEnd');
            }, 10);
        });

        $(window).on('resizeEnd', function () {
            $(".tile").height($("#tile1").width());
            $(".carousel").height($("#tile1").width());
            $(".item").height($("#tile1").width());
        });
    });
</script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" >IIT-Bombay</a>
    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="{{ URL::to('home') }}">Home</a></li>
	        <li><a href="{{ URL::to('about') }}">About</a></li>
	        <li><a href="{{ URL::to('underconstruct') }}">Contact</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        
          @if(!isset($_SESSION['loginStatus']) || (isset($_SESSION['loginStatus']) && $_SESSION['loginStatus']==false))          
            <li><a href="{{ URL::to('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	        @endif
          @if(isset($_SESSION['loginStatus']) && $_SESSION['loginStatus']==true)          
            <li> <a> <span class="glyphicon glyphicon-user"> {{$_SESSION['username'] }} </span> </a></li>
            <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          @endif
          
        </ul>
	    </div>
	</div>
  </div>
</nav> 
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 text-left center-content">
    		<div class="row jumbotron content-row1 top-header-padding">
				<div class="col-sm-2">
        </div>
        <div class="col-sm-2">
					<img src="{{ URL::asset('assets/img/logo.png') }}" style="width:180;height:100px;"/>				   
	   		</div>	   		
        <div class="col-sm-8">
						<h1>Computer Center</h1>
						<p>Inventory Management</p>  
				</div>				  							
    		</div>
    		<br/>
    		<div class="row row-padding content-row2">
    		         
        @yield("content")

        </div> <!-- End of content-row2 -->       
    <div class="col-sm-2"> <!-- Right Pan--> 
    </div> 
  </div> <!-- End of content -->
</div> <!-- End of container -->
</body>
</html>
