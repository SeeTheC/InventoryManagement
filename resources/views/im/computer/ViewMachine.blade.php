@extends("im.layout.Common")
@section("content")

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/datatables.css') }}"/> 
<script type="text/javascript" src="{{ URL::asset('assets/js/datatables.js') }}"></script>

<script type="text/javascript">
    $(function(){

        $("#table_id").DataTable();

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
			    <li><a href="{{ URL::to('computer/')}}">Computer</a></li>
                <li><a href="#">View</a></li>
			  </ol>			 
  		</div>
</div>
<div class="row">
        <div class="col-sm-12 panel-group">
            <table id="table_id" class="display table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Section</th>
                        <th>User</th>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>Update by</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $row)
                        <tr>
                            <td> {{$row->machineType->machine_type}} </td>
                            <td> {{$row->section->name}}</td>
                            <td> {{$row->section_id}}</td>
                            <td> {{$row->ip}}</td>
                            <td> {{$row->mac}}</td>
                            <td> {{$row->by_user_id}}</td>
                            <td> 
                                    <a href="{{ url("/computer/manage/".$row->id) }}" target="_blank">Edit</a>
                                    <a href="#">Part</a>                                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

@stop
