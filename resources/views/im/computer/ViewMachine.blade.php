@extends("im.layout.Common")
@section("content")

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/datatables.css') }}"/> 
<script type="text/javascript" src="{{ URL::asset('assets/js/datatables.js') }}"></script>

<script type="text/javascript">
    $(function(){

        $("#table_id").DataTable({
            "order":[]
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
                        <th>Section</th>
                        <th>User</th>
                        <th>IP</th>
                        <th>Processor</th>
                        <th>RAM</th>
                        <th>HDD</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $row)
                        <tr>
                            <td> {{$row->section->name}}</td>
                            <td> {{$row->userinfo["user_name"]}}</td>
                            <td> {{$row->ip}}</td>
                            <td> {{$row->cpuinfo["processor"]}}</td>
                            <td> {{$row->cpuinfo["ram_size"]}}</td>
                            <td> {{$row->cpuinfo["hdd_size"]}}</td>                            
                            <td> 
                                    <a href="{{ url("/computer/manage/".$row->id) }}" target="_blank">Edit</a>
                                    <a href="{{ url("/computer/component/".$row->id) }}">Hardware</a>                                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

@stop
