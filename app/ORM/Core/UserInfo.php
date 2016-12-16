<?php

namespace App\ORM\Core;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'tbl_userinfo';
	// optional : used for multiple DB
	protected $connection = 'mysql';
	protected $primaryKey = 'id';
	protected $fillable =['user_name','user_ldap','user_telno'];

	public static function saveForm($form,$user_id)
	{
		$result=["success"=>true,'errorMsg'=>'','rtnId'=>0];
		$mid=$form["mid"];
		if($mid<0)
		{
			$result["success"]=false;
			$result["errorMsg"]="Invalid Machine Id ".$mid;
			return $result;
		}

    	$m=$mid>0 ? ( UserInfo::where('mid',$mid)->get() ) : array();                    		
	  	if(count($m)==0)
	  	{
	    	$tb= new UserInfo($form); 
	    	$tb->mid=$mid;      
	    	$tb->by_user_id=$user_id;       
	    	$tb->save();      	    	
			$result["rtnId"]=$tb->id;
			return $result;
	  	}	
	  	else
	  	{

	  		$id=$m[0]->id;
	  		$tb=UserInfo::find($id);	
	  		$tb->fill($form);	  			  			  		  			  			  		  		
	  		$tb->mid=$mid;	  			  		
	  		$tb->by_user_id=$user_id;	  		
	  		$tb->save();       
	    	$result["rtnId"]=$id;
			return $result;      
	  	}
	  } 
}
