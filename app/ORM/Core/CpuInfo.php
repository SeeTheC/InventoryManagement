<?php

namespace App\ORM\Core;

use Illuminate\Database\Eloquent\Model;

class CpuInfo extends Model
{
    protected $table = 'tbl_cpuinfo';
	// optional : connection -> Database name
	protected $connection = 'mysql';
	protected $fillable =['processor','processor_speed','motherboard','ram_size','hdd_size','current_os','os_version','processor_gnat_id','processor_vendor','processor_warrenty','processor_purchase_date','processor_ops_ref_no','motherboard_gnat_id','motherboard_vendor','motherboard_warrenty','motherboard_purchase_date','motherboard_ops_ref_no','ram_gnat_id','ram_vendor','ram_warrenty','ram_purchase_date','ram_ops_ref_no','hdd_gnat_id','hdd_vendor','hdd_warrenty','hdd_purchase_date','hdd_ops_ref_no','smps_gnat_id','smps_vendor','smps_warrenty','smps_purchase_date','smps_ops_ref_no'];

	protected $nullable = ['ram_size','hdd_size','processor_purchase_date','motherboard_purchase_date','ram_purchase_date','hdd_purchase_date','smps_purchase_date'];	

	/*
		Sets the field value to null other wise it eloquent will give error.
		By: Khursheed Ali
		On: 8/12/2016 20:25
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
		On: 8/12/2016 20:25
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

    	$m=$mid>0 ? ( CpuInfo::where('mid',$mid)->get() ) : array();                    		
	  	if(count($m)==0)
	  	{
	    	$tb= new CpuInfo($form); 
	    	$tb->mid=$mid;      
	    	$tb->by_user_id=$user_id;  
	    	CpuInfo::setNullables($tb);     
	    	$tb->save();      	    	
			$result["rtnId"]=$tb->id;
			return $result;
	  	}	
	  	else
	  	{

	  		$id=$m[0]->id;
	  		$tb=CpuInfo::find($id);	
	  		$tb->fill($form);	  			  			  		  			  			  		  		
	  		$tb->mid=$mid;	  			  		
	  		$tb->by_user_id=$user_id;
	  		CpuInfo::setNullables($tb);     	    		  
	  		$tb->save();       
	    	$result["rtnId"]=$id;
			return $result;      
	  	}
	  } 
}
