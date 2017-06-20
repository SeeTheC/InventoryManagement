<?php

namespace App\ORM\Core;

use Illuminate\Database\Eloquent\Model;

class SystemUser extends Model
{
    protected $table = 'tbl_system_user';
	// optional : used for multiple DB
	protected $connection = 'mysql';
	protected $primaryKey = 'id';
	protected $fillable =['ldap','name','by_user_id','is_account_enable'];

	public static function saveForm($form,$user_id)
	{
		$result=["success"=>true,'errorMsg'=>'','rtnId'=>0];
		$ldap=$form["ldap"];					  
		$uid=$form["uid"];

		if($uid<0)
		{
			$result["success"]=false;
			$result["errorMsg"]="Invalid excess.";
			return $result;
		}
		else
		if($uid==0)
		{
			
			$l=strlen($ldap)>0 ? (SystemUser::where('ldap',$ldap)->get() ) : array(); 
			if(count($l)>0)
	  		{
	  			$result["success"]=false;
				$result["errorMsg"]="LDAP id already exists, goto view and update.";
				return $result;
	  		}    
    		
		}	
		$m=$uid>0 ? ( SystemUser::where('id',$uid)->get() ) : array();    	    		
	  	if(count($m)==0)
	  	{
	    	$tb= new SystemUser($form); 
	    	$tb->by_user_id=$user_id;       
	    	$tb->level=2;
	    	$tb->save();      	    	
			$result["rtnId"]=$tb->id;
			return $result;
	  	}	
	  	else if($m[0]->level==1)//superuser
	  	{
	  		$result["success"]=false;
			$result["errorMsg"]="Cannot create/modify superuser detail.";
			return $result;	
	  	}
	  	else
	  	{

	  		$id=$m[0]->id;
	  		$tb=SystemUser::find($id);	
	  		$tb->fill($form);	  			  			  		  			  			
	  		$tb->by_user_id=$user_id;	  		
	  		$tb->save();       
	    	$result["rtnId"]=$id;
			return $result;      
	  	}
	  } 
}
