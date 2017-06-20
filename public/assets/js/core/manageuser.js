$(function () {
	$.validate();			
});


/*
	Post the form data properly.
	By:Khursheed Ali
	On: 16/06/2017 23:33PM
*/
function postRequest($this){
	var url=$("form")[0].action;
	var fdata=$("form").serialize();
	if($($("form")[0]).isValid()){
		$.post(url,fdata,function(data,status){			
			if(data["success"]){
				alert("Saved Successfully.");
				window.location=MANAGEUSERURL;
			}else{
				alert("Error is saving. "+data["errorMsg"]);			
			}
		}).error(function(e){
			alert("Error in saving. Refer terminal log.");
			console.log(e);
		});

	}	
	
}