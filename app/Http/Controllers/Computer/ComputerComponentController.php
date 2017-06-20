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

/*
	Managing Computer Components
*/
class ComputerComponentController extends Controller
{


    //get
    public function manageComponent($mid=0)
    {
     
        $info=$mid>0 ? ( MachineInfo::where("id",$mid)->get()) : array();              
        if($mid!=0 && count($info)==0)
          return "Error: Invalid Machine Id ".$mid;                  
        return view("im.computer.ManageComputerComponents",compact("mid"));
    }
}