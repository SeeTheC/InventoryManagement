@extends("im.layout.Common")
@section("content")

<div class="row top-subheader-padding top-subheader">		    			
		<div class="col-sm-12 page-header text-primary">
 				<h1>Computer </h1>
 				<ol class="breadcrumb breadcrum-bg-black">
			    <li><a href="{{ URL::to('home') }}">Home</a></li>
			    <li><a href="#">Computer</a></li>
			  </ol>			
  		</div>
</div>

<div class="row row-padding device">
        <div class="col-sm-6 col-padding" >
            <div class="tile tile-black tileshadow im-anchor" data-url="{{ URL::to('computer/manage/') }}">
             <div class="carousel slide" data-ride="carousel">
                 <!-- Wrapper for slides -->
                 <div class="carousel-inner">
                     <div class="item active text-center">
                         <div style="position:relative;left:40%">
                               <img src="{{ URL::asset('assets/img/desktop.png') }}" class="img-responsive" style="width:60px;height:60px" align="middle"/>
                         </div>
                         <div class="icontext">
                             Add New Computer
                         </div>                                 
                     </div>                                                                        
                 </div>
             </div>
            </div>                
        </div>   
        <div class="col-sm-6 col-padding">
            <div class="tile tile-black tileshadow im-anchor" data-url="{{ URL::to('computer/view') }}">
                    <div class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active text-center">
                                <div style="position:relative;left:37%">
                                      <img src="{{ URL::asset('assets/img/eye-512.png') }}" class="img-responsive" style="width:110px;height:60px" align="middle"/>
                                </div>
                                <div class="icontext">
                                    View
                                </div>                                                                          
                            </div>                                                                                    
                        </div>
                    </div>
            </div>                 
        </div>            
</div> 


@stop
