<?php

namespace App\ORM\Core;

use Illuminate\Database\Eloquent\Model;
class MachineInfo extends Model
{

    protected $table = 'tbl_machineinfo';	
	// optional : used for multiple DB	
	protected $connection = 'mysql';
	protected $primaryKey = 'id';
	//protected $guarded = array();
	protected $fillable =['mac','ip','section_id','machine_type_id','counter_no'];
	protected $nullable = ['counter_no','section_id','machine_type_id'];	

	/*
		Fetchs the Section Information
		By: Khursheed Ali
		On: 17/12/2016 01:20 AM
	*/
	public function section()
	{
		return $this->belongsTo("App\ORM\Metadata\Section","section_id");
	}

	/*
		Fetchs the Section Information
		By: Khursheed Ali
		On: 17/12/2016 01:20 AM
	*/
	public function machineType()
	{
		return $this->belongsTo("App\ORM\Metadata\TypeOfMachine","machine_type_id");
	}

	/*
		Sets the field value to null other wise it eloquent will give error.
		By: Khursheed Ali
		On: 8/12/2016 20:25
	*/
	protected function setNullables()
	{
	    foreach($this->nullable as $field)
	    {
	      if(empty($this->{$field}))
	      {
	        $model->{$field} = null;
	      }
	    }
	}

	/*
		Save the form value. If its is record is not their then it will insert else update.
		Update of record is based on backup. Records will be first inserted into the backup DB and 
		insert. 
		By: Khursheed Ali
		On: 8/12/2016 16:00
	*/
	public static function saveForm($form,$user_id)
	{
		$result=["success"=>true,'errorMsg'=>'','rtnId'=>0];
		$mid=$form["mid"];
    	$m=$mid>0 ? ( MachineInfo::find($mid) ) : array();                    
		if($mid!=0 && count($m)==0)
		{
			$result["success"]=false;
			$result["errorMsg"]="Invalid Machine id ".$mid;
			return $result;
		}
	  	if($mid==0)
	  	{
	    	$tbMachine= new MachineInfo($form);      	    
	    	$tbMachine->by_user_id=$user_id;       
	    	$tbMachine->setNullables();	    	
	    	$tbMachine->save();      	    	
			$result["rtnId"]=$tbMachine->id;
			return $result;
	  	}	
	  	else
	  	{
	    	$m->fill($form);
	    	$m->by_user_id=$user_id;       
	    	$m->setNullables();	    		    		    
	    	$m->save();  
	    	$result["rtnId"]=$m->id;
			return $result;      
	  	} 

	}
}
