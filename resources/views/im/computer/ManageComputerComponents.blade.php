@extends("im.layout.Common")
@section("content")

<script src="{{ URL::asset('assets/js/computer/computerComponent.js') }}"></script>
<script type="text/javascript">
    var HOMEURL="{{URL::to("home")}}";
    var COMPUTERURL="{{URL::to("computer")}}";
    var ENDURL=COMPUTERURL;
</script>
<div class="row top-subheader-padding">		    			
		<div class="col-sm-12 page-header text-primary">
 				<h1>Computer </h1>
 				<ol class="breadcrumb breadcrum-bg-black">
			    <li><a href="{{ URL::to('home')}}">Home</a></li>
			    <li><a href="{{ URL::to('computer/')}}">Computer</a></li>
                <li><a href="#">Manage Hardware</a></li>
			  </ol>			 
  			</div>
</div>

<div class="row">
    <div class="col-sm-6">
            <label for="component">Component <span style="color: red">*</span>:</label>
            <select class="form-control" data-validation="required" name="component" value=""  id="component">
                        <option value="">--Select--</option>
                        <option value="{{ url("/computer/keyboard/$mid") }}">Keyboard</option>
                        <option value="{{ url("/computer/mouse/$mid") }}">Mouse</option>
                        <option value="{{ url("/computer/monitor/$mid") }}">Monitor</option>
                        <option value="{{ url("/computer/motherboard/$mid") }}">Motherboard</option>                                                        
                        <option value="{{ url("/computer/processor/$mid") }}">Processor</option>
                        <option value="{{ url("/computer/ram/$mid") }}">RAM</option>
                        <option value="{{ url("/computer/hdd/$mid") }}">HDD</option>
                        <option value="{{ url("/computer/smps/$mid") }}">SMPS</option> 
             </select>
    </div>
</div>
<hr/>
<div class="row">
    <div id="pageForm" class='ol-sm-12'>
    </div>
</div>

@stop
