<?php

namespace App\Http\Controllers\Computer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ORM\Metadata\TypeOfMachine;
use App\ORM\Metadata\Section;
use App\ORM\Metadata\Subsection;
use App\ORM\Core\MachineInfo;
use App\ORM\Core\UserInfo;
use App\ORM\Core\CpuInfo;
use App\ORM\Core\MonitorInfo;
use App\ORM\Core\MachineOtherInfo;
use App\ORM\Core\KeyboardInfo;
use App\ORM\Core\MouseInfo;

class ComputerController extends Controller
{
  
    //get
    public function computerMgm()
    {
     
        return view("im.computer.ComputerMgm");
    }

    //get
    public function viewMachine()
    {     
        $info=MachineInfo::all();
        return view("im.computer.ViewMachine",compact('info'));
    }

    //get
    public function AddEditComputer($mid=0)
    {
     
        $info=$mid>0 ? ( MachineInfo::where("id",$mid)->get()) : array();              
        if($mid!=0 && count($info)==0)
          return "Error: Invalid Machine Id ".$mid;                  
        return view("im.computer.AddEditComputer",compact("mid"));
    } 
    //get
    public function machine($mid)
   	{      
     
      $info=$mid!=0 ? ( MachineInfo::find($mid)) : array();              
   	  if($mid!=0 && $info==null)
          return "Error: Invalid Machine Id ".$mid;                  
     
      $machineType=TypeOfMachine::all();
      $section=Section::orderBy('name', 'ASC')->get();
      $subsection=Subsection::orderBy('name', 'ASC')->get();      
   	  return view("im.computer.Machine",compact('machineType','section','subsection',"mid","info"));
   	}
    //post
    public function machinePost(Request $request)
    {
      $form=$request->all();  
      $result=MachineInfo::saveForm($form,1);      
      return $result;
    }

    //get
    public function user($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (UserInfo::where("mid",$mid)->get() ) : array();                            
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.User",compact('mid','info'));
    }
    
    //post
    public function userPost(Request $request)
    {
      $form=$request->all();  
      $result=UserInfo::saveForm($form,1);
      return $result;
    }

    //get
    public function cpu($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (CpuInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Cpu",compact('mid',"info"));
    }
    
    //post
    public function cpuPost(Request $request)
    {
      $form=$request->all();  
      $result=CpuInfo::saveForm($form,1);
      return $result;
    }

    /*
        Motherboard get detail
        By: Khursheed Ali
        On: 12/06/2017 22:05
    */
    //get    
    public function motherboard($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (CpuInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Motherboard",compact('mid',"info"));
    }


    /*
        Motherboard Saves detail
        By: Khursheed Ali
        On: 12/06/2017 22:05
    */    
    //post
    public function motherboardPost(Request $request)
    {
      $form=$request->all();  
      $result=CpuInfo::saveForm($form,1);
      return $result;
    }


    /*
        Processor get detail
        By: Khursheed Ali
        On: 12/06/2017 22:05
    */
    //get    
    public function processor($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (CpuInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Processor",compact('mid',"info"));
    }


    /*
        Processor Saves detail
        By: Khursheed Ali
        On: 12/06/2017 22:05
    */    
    //post
    public function processorPost(Request $request)
    {
      $form=$request->all();  
      $result=CpuInfo::saveForm($form,1);
      return $result;
    }

    /*
        RAM get detail
        By: Khursheed Ali
        On: 12/06/2017 22:05
    */
    //get    
    public function ram($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (CpuInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Ram",compact('mid',"info"));
    }


    /*
        Processor Saves detail
        By: Khursheed Ali
        On: 12/06/2017 22:05
    */    
    //post
    public function ramPost(Request $request)
    {
      $form=$request->all();  
      $result=CpuInfo::saveForm($form,1);
      return $result;
    }

     /*
        HDD get detail
        By: Khursheed Ali
        On: 12/06/2017 22:05
    */
    //get    
    public function hdd($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (CpuInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Hdd",compact('mid',"info"));
    }


    /*
        Processor Saves detail
        By: Khursheed Ali
        On: 12/06/2017 22:05
    */    
    //post
    public function hddPost(Request $request)
    {
      $form=$request->all();  
      $result=CpuInfo::saveForm($form,1);
      return $result;
    }

     /*
        SMPS get detail
        By: Khursheed Ali
        On: 12/06/2017 22:10
    */
    //get    
    public function smps($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (CpuInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Smps",compact('mid',"info"));
    }


    /*
        Processor Saves detail
        By: Khursheed Ali
        On: 12/06/2017 22:10
    */    
    //post
    public function smpsPost(Request $request)
    {
      $form=$request->all();  
      $result=CpuInfo::saveForm($form,1);
      return $result;
    }

    //get
    public function monitor($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (MonitorInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Monitor",compact('mid',"info"));
    }
    
    //post
    public function monitorPost(Request $request)
    {
      $form=$request->all();  
      $result=MonitorInfo::saveForm($form,1);
      return $result;
    }

    //get
    public function keyboard($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (KeyboardInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Keyboard",compact('mid',"info"));
    }
    
    //post
    public function keyboardPost(Request $request)
    {
      $form=$request->all();  
      $result=KeyboardInfo::saveForm($form,1);
      return $result;
    }     
   	
    //get
    public function mouse($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (MouseInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.Mouse",compact('mid',"info"));
    }
    
    //post
    public function MousePost(Request $request)
    {
      $form=$request->all();  
      $result=MouseInfo::saveForm($form,1);
      return $result;
    }
    
    //get
    public function other($mid)
    {
      if($mid<=0)
          return "Error: Invalid Machine Id ".$mid;                              
      $info=$mid>0 ? (MachineOtherInfo::where("mid",$mid)->get() ) : array();
      $info=count($info)>0?$info[0]:array();
      return view("im.computer.OtherInfo",compact('mid',"info"));
    }
    
    //post
    public function otherPost(Request $request)
    {
      $form=$request->all();  
      $result=MachineOtherInfo::saveForm($form,1);
      return $result;
    }  
   
}
