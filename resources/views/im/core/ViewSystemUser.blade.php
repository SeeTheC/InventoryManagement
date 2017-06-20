@extends("im.layout.Common")
@section("content")

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/datatables.css') }}"/> 
<script type="text/javascript" src="{{ URL::asset('assets/js/datatables.js') }}"></script>

<script type="text/javascript">
    $(function(){

        $("#table_id").DataTable({
            "order": []
            });

    });

</script>
<style type="text/css">
    
    thead{
        background: #607D8B;
        color: #c3c3c3;
    }
</style>

<div class="row">		    			
		<div class="col-sm-12 page-header text-primary">
 				<h1>Computer </h1>
 				<ol class="breadcrumb breadcrum-bg-black">
			    <li><a href="{{ URL::to('home')}}">Home</a></li>
			    <li><a href="{{ URL::to('manageuser/')}}">Manage System User</a></li>
                <li><a href="#">View</a></li>
			  </ol>			 
  		</div>
</div>
<div class="row">
        <div class="col-sm-12 panel-group">
            <table id="table_id" class="display table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>LDAP</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Status</th>                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $row)
                        <tr>
                            <td> {{$row->ldap}} </td>
                            <td> {{$row->name}}</td>
                            <td> {{$row->level==1?"Super User":"User"}}</td>
                            <td> {{$row->is_account_enable==1?"Enable":"Disable"}}</td>
                            <td> 
                                     <a href="{{ url("/manageuser/addedit/".$row->id) }}" target="_blank">Edit</a>                                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

@stop
