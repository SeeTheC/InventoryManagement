@extends("im.layout.Common")
@section("content")
<div class="row  well-margin panel panel-primary">
 		<div class="panel-heading text-center"><h3>Login</h3></div>
   		<div class="panel-body">
				<div class="col-sm-4 text-left"></div>				
	    		<div class="col-sm-4 text-left">
				 <form method="POST" id="form1" action="{{url('/login/authenticate')}}" >
					{{csrf_field()}}
						
						@if (isset($_SESSION['inputErrorMsg'])) 
	    					<div class="form-group">
							    <label for="error" style="color:red">Error:</label>
	   							<label id="error">
									{{ $_SESSION["inputErrorMsg"] }}
								</label>						 
						 	</div>						
						@endif   							

						<div class="form-group">
						    <label for="text">LDAP:</label>
						    <input type="text" class="form-control" id="ldap" name="ldap" placeholder="LDAP">
						</div>
						<div class="form-group">
						    <label for="pwd">Password:</label>
						    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="***************">
						</div>
						<button type="submit" class="btn btn-primary im-anchor"  data-url="">Login</button>
				</form>
				</div>
				<div class="col-sm-4 text-left"></div>					    		
    	</div>
</div>

@stop

