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
								   	 <label>Processor:</label>
								    	<input type="text" id="" name="processor" value="{{$info==null?'':$info->processor}}" class="form-control" placeholder="" >
								  	</div>
								  	<div class="form-group">
								   	 <label>Processor Speed:</label>
								    	<input type="text" id="" name="processor_speed" value="{{$info==null?'':$info->processor_speed}}" class="form-control" placeholder="" >
								  	</div>
								  	<div class="form-group">
								   	 <label>Motherboard:</label>
								    	<input type="text" id="" name="motherboard" value="{{$info==null?'':$info->motherboard}}"class="form-control" placeholder="" >
								  	</div>
								  	<div class="form-group">
								   	 <label>Ram Size(GB):</label>
								    	<input type="text" id="" name="ram_size" value="{{$info==null?'':$info->ram_size}}"class="form-control" placeholder="" >
								  	</div>
								  	<div class="form-group">
								   	 <label>HDD Size (GB):</label>
								    	<input type="text" id="" name="hdd_size" value="{{$info==null?'':$info->hdd_size}}"class="form-control" placeholder="" >
								  	</div>
								  	<div class="form-group">
								   	 <label>Current OS:</label>
								    	<input type="text" id="" name="current_os" value="{{$info==null?'':$info->current_os}}" class="form-control" placeholder="" >
								  	</div>
								  								  									  								  
							</div>
			      </div>
			     	<div class="panel-heading">
			        <h4 class="panel-title">
			          <a href="#vendor">Vendor</a>
			        </h4>
			      </div>
					<div id="vendor" class="panel-collapse">
							<div class="panel-body">
									<div class="form-group">
								   	 <label>Vendor:</label>
								    	<input type="text" id="" name="vendor" class="form-control" value="{{$info==null?'':$info->vendor}}" placeholder="" >
								  	</div>
								  	<div class="form-group">
								   	 <label>Date of Purchase:</label>
								    	<input type="text" id="purchase_date" name="purchase_date" value="{{$info==null?'':$info->purchase_date}}"class="form-control" placeholder="" >
								  	</div>
									<div class="form-group">
								   	 <label>Warranty:</label>
								    	<input type="text" id="" name="warrenty" value="{{$info==null?'':$info->warrenty}}"class="form-control" placeholder="" >
								  	</div>
								  	<div class="form-group">
								    	<label for="ops">OPS Ref No.:</label>
								    	<input type="text" name="ops_ref_no" id="ops" value="{{$info==null?'':$info->ops_ref_no}}"class="form-control" placeholder="">
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