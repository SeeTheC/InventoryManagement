<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ORM\Core\SystemUser;

/*
	Managing System Users
	By: Khursheed Ali
	On: 16/06/2017 15:25 PM
*/
class ManageUserController extends Controller
{



	protected $redirectLogin = '/login';
    protected $redirectError = '/error';    
    
    //get
    /*
		Managing User Page
		By: Khursheed Ali
		On: 16/06/2017 15:30 PM
	*/		
    public function manageSystemUser()
    {     	
    	if(isset($_SESSION["level"]) && $_SESSION["level"] == 1)
    	{
        	return view("im.core.ManageSystemUser");    	
    	}
    	else{
    		
    		$_SESSION['errmsg']="Unauthorised Access. Information has been logged and also conveyed to Admin";
            return redirect($this->redirectError);
    	}
    }

	//get
	 /*
		View System user
		By: Khursheed Ali
		On: 16/06/2017 15:56 PM
	*/
    public function viewSystemUser()
    {     
        $info=SystemUser::orderBy('level', 'ASC')->get();
        return view("im.core.ViewSystemUser",compact('info'));
    }

	//get
    /*
		Add or Edit the System user
		By: Khursheed Ali
		On: 16/06/2017 15:56 PM
	*/
    public function addEditSystemUser($uid=0)
    {     	
    	$info=null;
    	$info=$uid>0 ? (SystemUser::where("id",$uid)->get()) : array();
    	if($uid!=0 && count($info)==0)
    	{
    		$_SESSION["errmsg"]="Invalid System User Id ".$uid;
    		return redirect($this->redirectError);
    	}          	
       	$info=count($info)>0?$info[0]:array();
        return view("im.core.AddEditSystemUser",compact("info","uid"));
    }


	//post
    /*
		Add or Edit the System user
		By: Khursheed Ali
		On: 16/06/2017 15:56 PM
	*/
    public function addEditSystemUserPost(Request $request)
    {     	
       $form=$request->all();  
       $result=SystemUser::saveForm($form,1);
       return $result;
    }    
}