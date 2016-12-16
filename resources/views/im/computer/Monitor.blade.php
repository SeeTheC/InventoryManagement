<form method="POST" action="{{url('/computer/monitor')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />
	<div class="row">
			  	<div class="col-sm-12 panel-group">
			   	 <div class="panel panel-primary">
			      	<div class="panel-heading">
			        	<h4 class="panel-title">
			          <a  href="#machineInfo">Monitor Info</a>
			        </h4>
			      </div>			      
			      <div id="machineInfo" class="panel-collapse">
							<div class="panel-body">
									<div class="form-group">
								    <label for="sn">Serial Number:</label>
								    <input type="text" name="serial_no" value="{{$info==null?'':$info->serial_no}}" class="form-control" placeholder="123456">
								  </div>
								  <div class="form-group">
								    <label for="dsize">Display size(inch):</label>
								    <input type="text" name="display_size" value="{{$info==null?'':$info->display_size}}" class="form-control" >
								  </div>
								  <div class="form-group">
								    <label for="brand">Brand:</label>
								    <input type="text" name="brand" id="" value="{{$info==null?'':$info->brand}}" class="form-control" placeholder="LG/Dell">
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
								    	<input type="text" id="" name="vendor" value="{{$info==null?'':$info->vendor}}" class="form-control" placeholder="" >
								  	</div>
								  	<div class="form-group">
								   	 <label>Date of Purchase:</label>
								    	<input type="text" id="" name="purchase_date" value="{{$info==null?'':$info->purchase_date}}" class="form-control" placeholder="" >
								  	</div>
									<div class="form-group">
								   	 <label>Warranty:</label>
								    	<input type="text" id="" name="warrenty" value="{{$info==null?'':$info->warrenty}}" class="form-control" placeholder="" >
								  	</div>
								  	<div class="form-group">
								    	<label for="ops">OPS Ref No.:</label>
								    	<input type="text" name="ops_ref_no" id="ops"  value="{{$info==null?'':$info->ops_ref_no}}" class="form-control" placeholder="">
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