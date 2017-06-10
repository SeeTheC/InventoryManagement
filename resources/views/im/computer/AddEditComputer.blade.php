@extends("im.layout.Common")
@section("content")

<script src="{{ URL::asset('assets/js/computer/common.js') }}"></script>
<script type="text/javascript">
    var HOMEURL="{{URL::to("home")}}";
    var COMPUTERURL="{{URL::to("computer")}}";
    var ENDURL=COMPUTERURL;
</script>
<style type="text/css">
    .nav-pill-text-custom{
        font-size: 12px;
    }
    .nav-pill-img-custom{
        position:relative;
        left:20%;
        width:30px;
        height:30px;
    }
    .nav-pill-width-custom{
        width: 85px;
    }
</style>
<div class="row top-subheader-padding">		    			
		<div class="col-sm-12 page-header text-primary">
 				<h1>Computer </h1>
 				<ol class="breadcrumb breadcrum-bg-black">
			    <li><a href="{{ URL::to('home')}}">Home</a></li>
			    <li><a href="{{ URL::to('computer/')}}">Computer</a></li>
                <li><a href="#">Add</a></li>
			  </ol>
			  <ul class="nav nav-pills sub-menu text-danger">
				   <li class="active">
				  		<a href="javascript:void(0);" data-url="{{ url("/computer/machine/") }}" data-mid="{{$mid}}"  class="sub-form first-form nav-pill-width-custom"> 
				  				<img src="{{ URL::asset('assets/img/cpu.png') }}" class="img-responsive nav-pill-img-custom" align="middle"/>
    							<span  class='nav-pill-text-custom' style="position:relative;left:10%;"> Machine <span style="color: red">*</span> </span>
    					</a>
    				</li>
    				<li>
				  		<a href="javascript:void(0)"  data-url="{{ url("computer/user/") }}" data-mid="{{$mid}}" class="sub-form nav-pill-width-custom"> 
				  				<img src="{{ URL::asset('assets/img/user.png') }}" class="img-responsive nav-pill-img-custom"  align="middle"/>
    							<span class='nav-pill-text-custom' style="position:relative;left:20%"> User </span>
    					</a>
    				</li>
    				<li class="active">
				  		<a href="javascript:void(0);" data-url="{{ url("/computer/cpu/") }}" data-mid="{{$mid}}"  class="sub-form nav-pill-width-custom"> 
				  				<img src="{{ URL::asset('assets/img/cpu.png') }}" class="img-responsive nav-pill-img-custom"  align="middle"/>
    							<span  class='nav-pill-text-custom' style="position:relative;left:20%"> Cpu </span>
    					</a>
    				</li>    				
    				<li>
				  		<a href="javascript:void(0);" data-url="{{ url("computer/monitor/") }}" data-mid="{{$mid}}" class="sub-form nav-pill-width-custom"> 
				  				<img src="{{ URL::asset('assets/img/monitor.png') }}" class="img-responsive nav-pill-img-custom" style="position:relative;left:20px;" align="middle"/>
    							<span class='nav-pill-text-custom' style="position:relative;left:10%"> Monitor </span>
    					</a>
    				</li>
					<li>
				  		<a href="javascript:void(0);" data-url="{{ url("computer/keyboard/") }}" data-mid="{{$mid}}"  class="sub-form nav-pill-width-custom"> 
				  				<img src="{{ URL::asset('assets/img/keyboard.png') }}" class="img-responsive nav-pill-img-custom"  align="middle"/>
    							<span class='nav-pill-text-custom' style="position:relative;left:4%"> Keyboard </span>
    					</a> 
    				</li>
    				<li>
				  		<a href="javascript:void(0);" data-url="{{ url("computer/mouse/") }}" data-mid="{{$mid}}"  class="sub-form nav-pill-width-custom"> 
				  				<img src="{{ URL::asset('assets/img/mouse1.png') }}" class="img-responsive nav-pill-img-custom"  align="middle"/>
    							<span  class='nav-pill-text-custom' style="position:relative;left:16%"> Mouse </span>
    					</a>
    				</li>				 								  
    				 <li>
				  		<a href="javascript:void(0);" data-url="{{ url("computer/otherinfo/") }}" data-mid="{{$mid}}"  class="sub-form nav-pill-width-custom"> 
				  				<img src="{{ URL::asset('assets/img/attached_hardware.png') }}" class="img-responsive nav-pill-img-custom"  align="middle"/>
    							<span class='nav-pill-text-custom' style="position:relative;left:1%"> Other Info </span>
    					</a>
    				</li>                  					
				</ul>
  			</div>
</div>

<div id="pageForm">

</div>


@stop
