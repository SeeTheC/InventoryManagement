<form method="POST" action="{{url('/computer/cpu')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />	
	<div class="row">
		<div class="col-sm-12 panel-group">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
			        <h4 class="panel-title">
			          <a href="#detailInfo">Detail Info</a>
			        </h4>
			     </div>					      
			     <div id="detailInfo" class="panel-collapse">
			        		<div class="panel-body">	
			        				<div class="form-group">
								   	 <label>Current OS:</label>
								    	<input type="text" id="" name="current_os" value="{{$info==null?'':$info->current_os}}" class="form-control" placeholder="" >
								  	</div>
  									<div class="form-group">
									    <label for="couter_no">Counter:</label>
									    <input type="text" name="counter_no"  data-validation="custom" data-validation-regexp="^([0-9]*)?$" data-validation-error-msg="Only positive number is allowed" class="form-control" value='{{$info==null?'':$info->counter_no}}' id="ip" placeholder="#">
								  	</div>

			        				<div class="panel panel-info">
								      <div class="panel-heading">Processor</div>
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
								    </div>
									
							
									<div class="panel panel-warning">
								      <div class="panel-heading">Motherboard</div>
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
								    </div>
								  	
								  	<div class="panel panel-info">
								      <div class="panel-heading">RAM</div>
								      <div class="panel-body">
								      	
										<div class="row">
											<div class="col-sm-4">											   	
											  	<div class="form-group">
											   	 <label>Ram Size(GB):</label>
											    	<input type="text" id="" name="ram_size" value="{{$info==null?'':$info->ram_size}}"class="form-control" placeholder="" >
											  	</div>								  
											</div>				
											<div class="col-sm-4">
												<div class="form-group">
										   	 		<label>Gnat Id:</label>
										    		<input type="text" id="" name="ram_gnatid" class="form-control" value="" placeholder="" >
										  		</div>										  	
											</div>							
											<div class="col-sm-4">
												<div class="form-group">
										   	 		<label>Vendor:</label>	
										    		<input type="text" id="" name="ram_vendor" class="form-control" value="{{$info==null?'':$info->ram_vendor}}" placeholder="" >
										  		</div>										  	
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Date of Purchase:</label>
								    				<input type="text" id="ram_purchase_date" name="purchase_date" value="{{$info==null?'':$info->ram_purchase_date}}"class="form-control" placeholder="" >
								  				</div>									
											</div>
											<div class="col-sm-4">
												<div class="form-group">
								   	 				<label>Warranty:</label>
								    				<input type="text" id="" name="ram_warrenty" value="{{$info==null?'':$info->ram_warrenty}}"class="form-control" placeholder="" >
								  				</div>								  	
											</div>										
											<div class="col-sm-4">
												<div class="form-group">
										    		<label for="ops">OPS Ref No.:</label>
										    		<input type="text" name="ram_ops_ref_no" id="ops" value="{{$info==null?'':$info->ram_ops_ref_no}}"class="form-control" placeholder="">
										   		</div>
											</div>
										</div>

								      </div>
								    </div>
								  	
								  	<div class="panel panel-warning">
								      <div class="panel-heading">Hard Disk</div>
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
								    </div>
								  									  								  
								  								  									  								  
							</div>
			      </div>
			     					 
		 	</div>
		 </div>
	</div>
</form>