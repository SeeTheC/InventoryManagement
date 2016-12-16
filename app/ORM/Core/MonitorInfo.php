<?php

namespace App\ORM\Core;

use Illuminate\Database\Eloquent\Model;

class MonitorInfo extends Model
{
    protected $table = 'tbl_monitor_info';
	// optional : connection -> Database name
	protected $connection = 'mysql';
	protected $fillable =['brand','display_size','serial_no','vendor','warrenty','purchase_date','ops_ref_no'];
	protected $nullable = ['brand','display_size','serial_no','vendor','warrenty','purchase_date','ops_ref_no'];	

	/*
		Sets the field value to null other wise it eloquent will give error.
		By: Khursheed Ali
		On: 14/12/2016 18:28
	*/
	protected static function setNullables($model)
	{
	    foreach($model->nullable as $field)
	    {
	      if(empty($model->{$field}))
	      {
	        $model->{$field} = null;
	      }
	    }
	}

	/*
		Saves the form on to the database;
		By: Khursheed Ali
		On: 14/12/2016 20:18
	*/	
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

    	$m=$mid>0 ? ( MonitorInfo::where('mid',$mid)->get() ) : array();                    		
	  	if(count($m)==0)
	  	{
	    	$tb= new MonitorInfo($form); 
	    	$tb->mid=$mid;      
	    	$tb->by_user_id=$user_id;  
	    	MonitorInfo::setNullables($tb);     
	    	$tb->save();      	    	
			$result["rtnId"]=$tb->id;
			return $result;
	  	}	
	  	else
	  	{

	  		$id=$m[0]->id;
	  		$tb=MonitorInfo::find($id);	
	  		$tb->fill($form);	  			  			  		  			  			  		  		
	  		$tb->mid=$mid;	  			  		
	  		$tb->by_user_id=$user_id;
	  		MonitorInfo::setNullables($tb);     	    		  
	  		$tb->save();       
	    	$result["rtnId"]=$id;
			return $result;      
	  	}
	  }
}
