@extends("im.layout.Common")
@section("content")

<div class="row top-subheader-padding top-subheader">		    			
		<div class="col-sm-12 page-header text-primary">
 				<h1>Computer </h1>
 				<ol class="breadcrumb breadcrum-bg-black">
			    <li><a href="{{ URL::to('home') }}">Home</a></li>
			    <li><a href="#">Manage System User</a></li>
			  </ol>			
  		</div>
</div>

<div class="row row-padding device">
        <div class="col-sm-6 col-padding" >
            <div class="tile tile-black tileshadow im-anchor" data-url="{{ URL::to('manageuser/addedit') }}">
             <div class="carousel slide" data-ride="carousel">
                 <!-- Wrapper for slides -->
                 <div class="carousel-inner">
                     <div class="item active text-center">
                         <div style="position:relative;left:44%">
                               <img src="{{ URL::asset('assets/img/user.png') }}" class="img-responsive" style="width:60px;height:60px" align="middle"/>
                         </div>
                         <div class="icontext">
                             Add New User
                         </div>                                 
                     </div>                                                                        
                 </div>
             </div>
            </div>                
        </div>   
        <div class="col-sm-6 col-padding">
            <div class="tile tile-black tileshadow im-anchor" data-url="{{ URL::to('manageuser/view') }}">
                    <div class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active text-center">
                                <div style="position:relative;left:37%">
                                      <img src="{{ URL::asset('assets/img/eye-512.png') }}" class="img-responsive" style="width:110px;height:60px" align="middle"/>
                                </div>
                                <div class="icontext">
                                    Manage Existing Users
                                </div>                                                                          
                            </div>                                                                                    
                        </div>
                    </div>
            </div>                 
        </div>            
</div> 


@stop
