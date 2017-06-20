@extends("im.layout.Common")
@section("content")

<script src="{{ URL::asset('assets/js/core/manageuser.js') }}"></script>
<script type="text/javascript">
    var HOMEURL="{{URL::to("home")}}";
    var MANAGEUSERURL="{{URL::to("manageuser")}}";
    var ENDURL=MANAGEUSERURL;
</script>
<style type="text/css">
    .nav-pill-text-custom{
        font-size: 12px;
    }
    .nav-pill-img-custom{
        position:relative;
        left:20%;
        width:30px;
        height:30px;
    }
    .nav-pill-width-custom{
        width: 85px;
    }
</style>
<div class="row top-subheader-padding">		    			
		<div class="col-sm-12 page-header text-primary">
 				<h1>Computer </h1>
 				<ol class="breadcrumb breadcrum-bg-black">
			    <li><a href="{{ URL::to('home')}}">Home</a></li>
			    <li><a href="{{ URL::to('manageuser/')}}">Manage System User</a></li>
                <li><a href="#">
                    @if($uid==0)
                        Add
                    @else
                        Edit
                    @endif
                </a></li>
			  </ol>			
  			</div>
</div>
<?php
    /*
        Rules:        
        1. Only Super user can create the other users with low never. 
        2. Super user cannot change/modify other super user details
        3. Super user can only be created using database. Not from UI

        By: Khursheed Ali
        ON: 17/06/2016 00:36
    */ 
    $fieldDisable=$info==null?'':($info->level==1?"disabled":"");
    $userlevel=$info==null?'User':($info->level==1?"Super User":"User");
?>
<div id="pageForm">
<form method="POST" action="{{url('/manageuser/addedit')}}" >
    {{csrf_field()}}
    <input type="hidden" name="uid" value="{{$uid}}" /> 
    <input type="hidden" name="user_level" value="{{$info==null?'2':$info->level}}" />     
    <div class="row">
        <div class="col-sm-12 panel-group">
         <div class="panel panel-primary">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                      <a  href="#user">System User</a>
                    </h4>
                  </div>
                  <div id="user" class="panel-collapse">
                        <form>
                            <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                             <label>LDAP Id <span style="color: red">*</span>:</label>
                                                <input {{$fieldDisable}} type="text" id=""  data-validation="required"  name="ldap" value='{{$info==null?'':$info->ldap}}'class="form-control" placeholder="" >
                                            </div>                                                                      
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                             <label>User Name <span style="color: red">*</span>:</label>
                                                <input  {{$fieldDisable}} type="text" id="" name="name" data-validation="required" value="{{$info==null?'':$info->name}}" class="form-control" placeholder="" >
                                            </div>                                                                      
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                             <label>Status <span style="color: red">*</span>:</label>
                                                <?php 
                                                    $eSelected= ($info==null?'':($info->is_account_enable==1?'selected':''));

                                                    $dSelected= ($info==null?'':($info->is_account_enable==0?'selected':''));
                                                 ?>

                                                 <select class="form-control" data-validation="required" {{$fieldDisable}} name="is_account_enable" value=''  id="machineType">
                                                    <option {{$eSelected}} value='1'> Enable  </option>
                                                    <option {{$dSelected}} value='0'> Disable </option>
                                                 </select>
                                            </div>    
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Access Level (Super User/User):</label>
                                                <input {{$fieldDisable}} type="text" disabled value="{{$userlevel}}" class="form-control" placeholder="" >
                                            </div>                    
                                        </div>                                         
                                    </div>
                                    
                                    
                                                                                  
                                    
                            </div>
                            <div class="panel-footer">
                                    <button type="reset" {{$fieldDisable}} class="btn btn-danger">Reset</button>                                                              
                                    <button id="btnSave" {{$fieldDisable}} type="button" onclick="javascript:postRequest(this)" class="btn btn-success">Save</button>                                                                
                            </div>                                              
                        </form>
                  </div>
            </div>
      </div>                
    </div>
</form>
</div>


@stop
    