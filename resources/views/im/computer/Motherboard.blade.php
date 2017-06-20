<form method="POST" action="{{url('/computer/motherboard')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />	
	<div class="row">
		<div class="col-sm-12 panel-group">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
			        <h4 class="panel-title">
			          <a href="#detailInfo">Motherboard</a>
			        </h4>
			     </div>					      
			     <div id="detailInfo" class="panel-collapse">
			        		<div class="panel-body">
			        				<div class="row">
											<div class="col-sm-4">
											   	<div class="form-group">
											   		<label>Motherboard:</label>
											     	<input type="text" id="" name="motherboard" value="{{$info==null?'':$info->motherboard}}"class="form-control" placeholder="" >
											  	</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
										   	 		<label>Gnat Id:</label>
										    		<input type="text" id="" name="motherboard_gnatid" class="form-control" value="" placeholder="" >
										  		</div>										  	
											</div>											
											<div class="col-sm-4">
												<div class="form-group">
										   	 		<label>Vendor:</label>
										    		<input type="text" id="" name="motherboard_vendor" class="form-control" value="{{$info==null?'':$info->motherboard_vendor}}" placeholder="" >
										  		</div>										  	
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Date of Purchase:</label>
								    				<input type="text" id="motherboard_purchase_date" name="purchase_date" value="{{$info==null?'':$info->motherboard_purchase_date}}"class="form-control" placeholder="" >
								  				</div>									
											</div>
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Warranty:</label>
								    				<input type="text" id="" name="motherboard_warrenty" value="{{$info==null?'':$info->motherboard_warrenty}}"class="form-control" placeholder="" >
								  				</div>								  	
											</div>										
											<div class="col-sm-4">
												<div class="form-group">
										    		<label for="ops">OPS Ref No.:</label>
										    		<input type="text" name="motherboard_ops_ref_no" id="ops" value="{{$info==null?'':$info->motherboard_ops_ref_no}}"class="form-control" placeholder="">
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