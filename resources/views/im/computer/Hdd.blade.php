<form method="POST" action="{{url('/computer/hdd')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />	
	<div class="row">
		<div class="col-sm-12 panel-group">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
			        <h4 class="panel-title">
			          <a href="#detailInfo">Hard Disk Drive(HDD)</a>
			        </h4>
			     </div>					      
			     <div id="detailInfo" class="panel-collapse">
			        		<div class="panel-body">	
			        		<div class="row">
											<div class="col-sm-4">
											   	<div class="form-group">
								   	 				<label>HDD Size (GB):</label>
								    				<input type="text" id="" name="hdd_size" value="{{$info==null?'':$info->hdd_size}}"class="form-control" placeholder="" >
								  				</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
										   	 		<label>Gnat Id:</label>
										    		<input type="text" id="" name="hdd_gnatid" class="form-control" value="" placeholder="" >
										  		</div>										  	
											</div>											
																						
											<div class="col-sm-4">
												<div class="form-group">
										   	 		<label>Vendor:</label>
										    		<input type="text" id="" name="hdd_vendor" class="form-control" value="{{$info==null?'':$info->hdd_vendor}}" placeholder="" >
										  		</div>										  	
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Date of Purchase:</label>
								    				<input type="text" id="hdd_purchase_date" name="purchase_date" value="{{$info==null?'':$info->hdd_purchase_date}}"class="form-control" placeholder="" >
								  				</div>									
											</div>
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Warranty:</label>
								    				<input type="text" id="" name="hdd_warrenty" value="{{$info==null?'':$info->hdd_warrenty}}"class="form-control" placeholder="" >
								  				</div>								  	
											</div>										
											<div class="col-sm-4">
												<div class="form-group">
										    		<label for="ops">OPS Ref No.:</label>
										    		<input type="text" name="hdd_ops_ref_no" id="ops" value="{{$info==null?'':$info->hdd_ops_ref_no}}"class="form-control" placeholder="">
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