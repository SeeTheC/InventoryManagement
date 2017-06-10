@extends("im.layout.Common")
@section("content")
<div class="row  well-margin panel panel-primary">
 		<div class="panel-heading text-center"><h3 style="color:red">Error</h3></div>
   		<div class="panel-body">
	    		<p>	    		
	    			@if(isset($_SESSION['errmsg']))
						{{ $_SESSION['errmsg'] }}		
					@endif						    	
	    		</p>	    		
    	</div>				
</div>		

@stop