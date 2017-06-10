<form method="POST" action="{{url('/computer/user')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />		
	<div class="row">
	  	<div class="col-sm-12 panel-group">
	   	 <div class="panel panel-primary">
		    		<div class="panel-heading">
			        <h4 class="panel-title">
			          <a  href="#user">Machine User</a>
			        </h4>
			      </div>
			      <div id="user" class="panel-collapse">
						<form>
							<div class="panel-body">
								 	<div class="form-group">
								   	 <label>User Name:</label>
								    	<input type="text" id="" name="user_name" value="{{$info==null?'':$info->user_name}}" class="form-control" placeholder="" >
								 	<div class="form-group">
								   	 <label>LDAP Id:</label>
								    	<input type="text" id="" name="user_ldap" value='{{$info==null?'':$info->user_ldap}}'class="form-control" placeholder="" >
								  	</div>							
								  	</div>							
								 	<div class="form-group">
								   	 <label>Telephone Ext:</label>
								    	<input type="text" id="" name="user_telno" value=" {{$info==null?'':$info->user_telno}}" class="form-control" placeholder="" >
								  	</div>															 		
							
							</div>
						  	<div class="panel-footer">
									<button type="reset" class="btn btn-danger">Reset</button>					        									
								  	<button type="button" onclick="javascript:postRequest(this)" class="btn btn-success">Save and Continue</button>					        									
						  	</div>												
						</form>
			      </div>
		    </div>
	  </div> 			 	
	</div>
</form>