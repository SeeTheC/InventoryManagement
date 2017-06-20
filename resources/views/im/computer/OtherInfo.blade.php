<form method="POST" action="{{url('/computer/otherinfo')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />
		<div class="row">
	  	<div class="col-sm-12 panel-group">
	   	 <div class="panel panel-primary">
		    		<div class="panel-heading">
			        <h4 class="panel-title">
			          <a  href="#user">Other Information</a>
			        </h4>
			      </div>
			      <div id="user" class="panel-collapse">
							<div class="panel-body">
								 	<div class="form-group">
								   	 <label>Attached Printer:</label>
								    	<input type="text" id="atPrinter" name="attached_printer" value="{{$info==null?'':$info->attached_printer}}" class="form-control" placeholder="" >
								 	<div class="form-group">
								   	 <label>Attached Scanner:</label>
								    	<input type="text" id="atScanner" name="attached_scanner" value="{{$info==null?'':$info->attached_scanner}}" class="form-control" placeholder="" >
								  	</div>							
								  	</div>														 	
							</div>
						  	<div class="panel-footer">
									<button type="reset" class="btn btn-danger">Reset</button>					        									
								  	<button id="btnSave" type="button" onclick="javascript:postRequest(this)"  class="btn btn-success">Submit</button>					        									
						  	</div>																	
			      </div>
		    </div>
	  </div> 			 	
	</div>
</form>