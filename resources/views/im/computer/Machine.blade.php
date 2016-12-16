
<form method="POST" action="{{url('/computer/machine')}}" >
	{{csrf_field()}}
	<input type="hidden" name="mid" value="{{$mid}}" />	
	<div class="row">
			  	<div class="col-sm-12 panel-group">
			   	 <div class="panel panel-primary">
			      	<div class="panel-heading">
			        	<h4 class="panel-title">
			        	<a  href="#machineInfo">Machine Info</a>
			        </h4>
			      </div>			      
			      <div id="machineInfo" class="panel-collapse">
			        		<div id="globalError" style='color:red'></div>
							<div class="panel-body">
								  <div class="form-group">
								    <label for="machine_type_id">Type of machine <span style="color: red">*</span>:</label>
								    <select class="form-control" required="required" name="machine_type_id" value=''  id="machineType">
										 		<option value="">--Select--</option>			
									    		@foreach($machineType as $row)	
									    			<?php $selected= ($info==null?'':($info->machine_type_id==$row->id?'selected':'')) ?>									    			   	
									    			<option {{$selected}} value='{{ $row->id }}'> {{ $row->machine_type }}</option>
									    		@endforeach
									   
									 </select>
								  </div>
								  <div class="form-group">
								    <label for="machineSection">Section <span style="color: red">*</span>:</label>
								    <select class="form-control" name="section_id" required="required" value=''id="machineSection">
												<option value="">--Select--</option>								    									    		
									    		@foreach($section as $row){
									    			<?php $selected= ($info==null?'':($info->section_id==$row->id?'selected':'')) ?>									    			   										    			
									    			<option {{$selected}} value='{{$row->id}}'>{{$row->name}} </option>;									    		
									    		@endforeach
									    		
									     
									  </select>	
								  </div>
								  <div class="form-group">
								    <label for="couter_no">Counter:</label>
								    <input type="text" name="counter_no" class="form-control" value='{{$info==null?'':$info->counter_no}}' id="ip" placeholder="#">
								  </div>
								  
								  <div class="form-group">
								    <label for="mac">MAC:</label>
								    <input type="text" name="mac" value='{{$info==null?'':$info->mac}}' class="form-control" placeholder="ab:cd:df:ab:cd:df:ab:cd" id="mac">
								  </div>				  					
								  <div class="form-group">
								    <label for="ip">IP:</label>
								    <input type="text" name="ip" class="form-control" value='{{$info==null?'':$info->ip}}' id="ip" placeholder="127.0.0.1">
								  </div>								  
							</div>		
							<div class="panel-footer">
									<button type="reset" class="btn btn-danger">Reset</button>					        									
								  	<button type="button" onclick="javascript:postRequest(this,true)" class="btn btn-success">Save and Continue</button>					        									
						  	</div>						  												
			      </div>
			     	
			    </div>
			  </div> 			 	
	</div>
</form>
