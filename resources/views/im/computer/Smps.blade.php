<form method="POST" action="{{url('/computer/smps')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />	
	<div class="row">
		<div class="col-sm-12 panel-group">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
			        <h4 class="panel-title">
			          <a href="#detailInfo">SMPS</a>
			        </h4>
			     </div>					      
			     <div id="detailInfo" class="panel-collapse">
			        		<div class="panel-body">	
			        				<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
										   	 		<label>Gnat Id:</label>
										    		<input type="text" id="" name="smps_gnatid" class="form-control" value="" placeholder="" >
										  		</div>										  	
											</div>											
																						
											<div class="col-sm-6">
												<div class="form-group">
										   	 		<label>Vendor:</label>
										    		<input type="text" id="" name="smps_vendor" class="form-control" value="{{$info==null?'':$info->smps_vendor}}" placeholder="" >
										  		</div>										  	
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Date of Purchase:</label>
								    				<input type="text" id="smps_purchase_date" name="purchase_date" value="{{$info==null?'':$info->smps_purchase_date}}"class="form-control" placeholder="" >
								  				</div>									
											</div>
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Warranty:</label>
								    				<input type="text" id="" name="smps_warrenty" value="{{$info==null?'':$info->smps_warrenty}}"class="form-control" placeholder="" >
								  				</div>								  	
											</div>										
											<div class="col-sm-4">
												<div class="form-group">
										    		<label for="ops">OPS Ref No.:</label>
										    		<input type="text" name="smps_ops_ref_no" id="ops" value="{{$info==null?'':$info->smps_ops_ref_no}}"class="form-control" placeholder="">
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