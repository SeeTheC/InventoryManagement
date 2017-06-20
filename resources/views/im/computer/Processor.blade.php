<form method="POST" action="{{url('/computer/processor')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />	
	<div class="row">
		<div class="col-sm-12 panel-group">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
			        <h4 class="panel-title">
			          <a href="#detailInfo">Processor</a>
			        </h4>
			     </div>					      
			     <div id="detailInfo" class="panel-collapse">
			        		<div class="panel-body">	
			        				<div class="row">
											<div class="col-sm-4">
											   	<div class="form-group">										
											   	 <label>Processor:</label>
											      <input type="text" id="" name="processor" value="{{$info==null?'':$info->processor}}" class="form-control" placeholder="" >
											  	</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
											   	 <label>Processor Speed:</label>
											      <input type="text" id="" name="processor_speed" value="{{$info==null?'':$info->processor_speed}}" class="form-control" placeholder="" >
											  	</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
										   	 		<label>Gnat Id:</label>
										    		<input type="text" id="" name="motherboard_gnatid" class="form-control" value="" placeholder="" >
										  		</div>										  	
											</div>												
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
											   	 <label>Vendor:</label>
											    	<input type="text" id="" name="processor_vendor" class="form-control" value="{{$info==null?'':$info->processor_vendor}}" placeholder="" >
											  	</div>											  	
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Date of Purchase:</label>
								    				<input type="text" id="processor_purchase_date" name="purchase_date" value="{{$info==null?'':$info->processor_purchase_date}}"class="form-control" placeholder="" >
								  				</div>									
											</div>
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Warranty:</label>
								    				<input type="text" id="" name="processor_warrenty" value="{{$info==null?'':$info->processor_warrenty}}"class="form-control" placeholder="" >
								  				</div>								  	
											</div>										
											<div class="col-sm-4">
												<div class="form-group">
										    		<label for="ops">OPS Ref No.:</label>
										    		<input type="text" name="processor_ops_ref_no" id="ops" value="{{$info==null?'':$info->processor_ops_ref_no}}"class="form-control" placeholder="">
										   		</div>
											</div>
										</div>

							</div>
							<div class="panel-footer">
									<button type="reset" class="btn btn-danger">Reset</button>					        									
								  	<button type="button" onclick="javascript:postRequest(this)"  class="btn btn-success">Save and Continue</button>					        									
						  	</div>		
			      </div>
			     					 
		 	</div>
		 </div>
	</div>
</form>