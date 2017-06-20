$(function () {	
	bindComponent();
});
/*
	Binds on change event
	By:Khursheed Ali
	On: 21/06/2017 21:20PM
*/
function bindComponent(){

	$("#component").bind("change",function(){
		url=$(this).val();		
		if(url.length>0){
			$("#pageForm").load(url,function(){
				//changing button test
				$("#btnSave").text("Save");
			});	
		}
	});

}

/*
	Post the form data properly.
	By:Khursheed Ali
	On: 21/06/2017 21:33PM
*/
function postRequest($this,isMainForm){
	var url=$("form")[0].action;
	var fdata=$("form").serialize();
	if($($("form")[0]).isValid()){
		$.post(url,fdata,function(data,status){			
			alert("Save Successfully.");
		}).error(function(e){
			alert("Error in saving. Refer terminal log.");
			console.log(e);
		});

	}	
	
}