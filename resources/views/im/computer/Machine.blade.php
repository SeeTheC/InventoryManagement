
<script type="text/javascript">
	$(function(){		
		  $.validate();		  
	});
</script>

<form method="POST" id="form1" action="{{url('/computer/machine')}}" >
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
								  <div class="row col-sm-12 form-group">
								    <label for="machine_type_id">Type of machine <span style="color: red">*</span>:</label>
								    <select class="form-control" data-validation="required" name="machine_type_id" value=''  id="machineType">
										 		<option value="">--Select--</option>			
									    		@foreach($machineType as $row)	
									    			<?php $selected= ($info==null?'':($info->machine_type_id==$row->id?'selected':'')) ?>									    			   	
									    			<option {{$selected}} value='{{ $row->id }}'> {{ $row->machine_type }}</option>
									    		@endforeach
									   
									 </select>
								  </div>
								  <div class="row">
									  <div class="col-sm-6">
										  <div class="form-group">
										    <label for="machineSection">Section <span style="color: red">*</span>:</label>
										    <select class="form-control" data-validation="required" name="section_id" value=''id="machineSection">
														<option value="">--Select--</option>								    									    		
											    		@foreach($section as $row){
											    			<?php $selected= ($info==null?'':($info->section_id==$row->id?'selected':'')) ?>									    			   										    			
											    			<option {{$selected}} value='{{$row->id}}'>{{$row->name}} </option>;									    		
											    		@endforeach
											    											   
											  </select>	
								  			</div>

									  </div>
									  <div class="col-sm-6">
											<div class="form-group">
											    <label for="machineSection">Sub-Section:</label>
											    <select class="form-control" name="subsection_id" value=''id="machineSection">
															<option value="">--Select--</option>								    									    		
												    		@foreach($subsection as $row){
												    			<?php $selected= ($info==null?'':($info->subsection_id==$row->id?'selected':'')) ?>								    		   										    
												    			<option {{$selected}} value='{{$row->id}}'>{{$row->name}} </option>;									    		
												    		@endforeach
												    		
												     
												  </select>	
											  </div>
											 
									  </div>
								  </div>
								   <div class="row col-sm-12 form-group">
								    <label for="ip">IP:</label>
								    <input type="text" name="ip" data-validation="custom" data-validation-regexp="^(([01]?\d\d?|2[0-4]\d|25[0-5])\.([01]?\d\d?|2[0-4]\d|25[0-5])\.([01]?\d\d?|2[0-4]\d|25[0-5])\.([01]?\d\d?|2[0-4]\d|25[0-5]))?$" data-validation-error-msg="The input value format is incorrect" class="form-control" value='{{$info==null?'':$info->ip}}' id="ip" placeholder="127.0.0.1">
								  </div>	

								  <div class="row col-sm-12 form-group">
								    <label for="mac">MAC:</label>
								    <input type="text" name="mac"  data-validation="custom" data-validation-regexp="^([0-9a-fA-F][0-9a-fA-F]:[0-9a-fA-F][0-9a-fA-F]:[0-9a-fA-F][0-9a-fA-F]:[0-9a-fA-F][0-9a-fA-F]:[0-9a-fA-F][0-9a-fA-F]:[0-9a-fA-F][0-9a-fA-F])?$" value='{{$info==null?'':$info->mac}}' class="form-control" placeholder="ab:cd:df:ab:cd:df:ab:cd" id="mac" >								    
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
