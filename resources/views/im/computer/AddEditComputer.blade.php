@extends("im.layout.Common")
@section("content")

<script src="{{ URL::asset('assets/js/computer/common.js') }}"></script>
<script type="text/javascript">
    var HOMEURL="{{URL::to("home")}}";
    var COMPUTERURL="{{URL::to("computer")}}";
    var ENDURL=COMPUTERURL;
</script>
<div class="row">		    			
		<div class="col-sm-12 page-header text-primary">
 				<h1>Computer </h1>
 				<ol class="breadcrumb breadcrum-bg-black">
			    <li><a href="{{ URL::to('home')}}">Home</a></li>
			    <li><a href="{{ URL::to('computer/')}}">Computer</a></li>
                <li><a href="#">Add</a></li>
			  </ol>
			  <ul class="nav nav-pills sub-menu text-danger">
				   <li class="active">
				  		<a href="javascript:void(0);" data-url="{{ url("/computer/machine/") }}" data-mid="{{$mid}}" style="width:120px" class="sub-form first-form"> 
				  				<img src="{{ URL::asset('assets/img/cpu.png') }}" class="img-responsive" style="position:relative;left:20px;width:50px;height:50px" align="middle"/>
    							<span style="position:relative;left:20px"> Machine <span style="color: red">*</span> </span>
    					</a>
    				</li>
    				<li>
				  		<a href="javascript:void(0)" style="width:120px" data-url="{{ url("computer/user/") }}" data-mid="{{$mid}}" class="sub-form"> 
				  				<img src="{{ URL::asset('assets/img/user.png') }}" class="img-responsive" style="position:relative;left:20px;width:50px;height:50px" align="middle"/>
    							<span style="position:relative;left:30px"> User </span>
    					</a>
    				</li>
    				<li class="active">
				  		<a href="javascript:void(0);" data-url="{{ url("/computer/cpu/") }}" data-mid="{{$mid}}" style="width:120px" class="sub-form"> 
				  				<img src="{{ URL::asset('assets/img/cpu.png') }}" class="img-responsive" style="position:relative;left:20px;width:50px;height:50px" align="middle"/>
    							<span style="position:relative;left:20px"> Cpu </span>
    					</a>
    				</li>    				
    				<li>
				  		<a href="javascript:void(0);" data-url="{{ url("computer/monitor/") }}" data-mid="{{$mid}}" style="width:120px" class="sub-form"> 
				  				<img src="{{ URL::asset('assets/img/monitor.png') }}" class="img-responsive" style="position:relative;left:20px;width:50px;height:50px" align="middle"/>
    							<span style="position:relative;left:20px"> Monitor </span>
    					</a>
    				</li>
					<li>
				  		<a href="javascript:void(0);" data-url="{{ url("computer/keyboard/") }}" data-mid="{{$mid}}" style="width:120px" class="sub-form"> 
				  				<img src="{{ URL::asset('assets/img/keyboard.png') }}" class="img-responsive" style="position:relative;left:20px;width:50px;height:50px" align="middle"/>
    							<span style="position:relative;left:14px"> Keyboard </span>
    					</a> 
    				</li>
    				<li>
				  		<a href="javascript:void(0);" data-url="{{ url("computer/mouse/") }}" data-mid="{{$mid}}" style="width:120px" class="sub-form"> 
				  				<img src="{{ URL::asset('assets/img/mouse1.png') }}" class="img-responsive" style="position:relative;left:20px;width:50px;height:50px" align="middle"/>
    							<span style="position:relative;left:26px"> Mouse </span>
    					</a>
    				</li>				 								  
    				 <li>
				  		<a href="javascript:void(0);" data-url="{{ url("computer/otherinfo/") }}" data-mid="{{$mid}}" style="width:120px" class="sub-form"> 
				  				<img src="{{ URL::asset('assets/img/attached_hardware.png') }}" class="img-responsive" style="width:80px;height:50px" align="middle"/>
    							<span style="position:relative;left:10px"> Other Info </span>
    					</a>
    				</li>                  					
				</ul>
  			</div>
</div>

<div id="pageForm">

</div>


@stop
