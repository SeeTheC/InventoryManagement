<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\TypeOfMachine;
class TestController extends Controller
{
   	public function abc()
   	{

   		$people=[" abcontroller_abc","abcontroller_pqr","abcontroller_xyz"];
   		$machine=DB::table("tbl_type_of_machine")->get();
   		$mModel=TypeOfMachine::all();
   		return view("test.abc",compact('machine','people','mModel'));
   	}
}
