<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
   
    return view("welcome");
});

Route::get('/abcontroller',"TestController@abc");

/*
-----------------------------------------------------------------
*/

Route::get('/error', function () {
	session_start();
    return view("im.Error");
});

/*
	Adding middleware for checing the authentication
	By: Khursheed Ali
	On: 10/06/2017 21:39PM
*/
Route::group(['middleware' => ['sessionAuth']], function()
{	

	Route::get('/home', function () {
	    return view("im.Home");
	});

	Route::get('/about', function () {
	    return view("im.About");
	});


    Route::get('/underconstruct', function () {			
    	return view("im.Underconstruct");
	}); 

    Route::get('/underconstruct.php', function () {			
    	return view("im.Underconstruct");
	}); 
});

/*
------------------------------[Login]-------------------------------------
*/
Route::get('/', 'Auth\LoginController@login');
Route::get('/login','Auth\LoginController@login');
Route::post('/login/authenticate','Auth\LoginController@loginPost');
Route::get('/logout','Auth\LoginController@logout');

Route::get('/manageuser','Core\ManageUserController@manageSystemUser');

Route::get('/manageuser/addedit/{uid?}','Core\ManageUserController@addEditSystemUser');
Route::post('/manageuser/addedit','Core\ManageUserController@addEditSystemUserPost');
Route::get('/manageuser/view','Core\ManageUserController@viewSystemUser');

/*
------------------------------[Computer]-------------------------------------
*/

Route::group(['middleware' => ['sessionAuth']], function()
{
	Route::get('/computer','Computer\ComputerController@computerMgm');

	Route::get('/computer/manage/{mid?}','Computer\ComputerController@addEditComputer');
	Route::get('/computer/view','Computer\ComputerController@viewMachine');

	Route::get('/computer/machine/{mid}', 'Computer\ComputerController@machine');
	Route::post('/computer/machine', 'Computer\ComputerController@machinePost');

	Route::get('/computer/user/{mid}', 'Computer\ComputerController@user' );
	Route::post('/computer/user', 'Computer\ComputerController@userPost' );

	Route::get('/computer/cpu/{mid}', 'Computer\ComputerController@cpu' );
	Route::post('/computer/cpu', 'Computer\ComputerController@cpuPost' );

	Route::get('/computer/motherboard/{mid}', 'Computer\ComputerController@motherboard' );	
	Route::post('/computer/motherboard', 'Computer\ComputerController@motherboardPost' );

	Route::get('/computer/processor/{mid}', 'Computer\ComputerController@processor' );
	Route::post('/computer/processor', 'Computer\ComputerController@processorPost' );
	
	Route::get('/computer/hdd/{mid}', 'Computer\ComputerController@hdd' );
	Route::post('/computer/hdd', 'Computer\ComputerController@hddPost' );
	
	Route::get('/computer/ram/{mid}', 'Computer\ComputerController@ram' );
	Route::post('/computer/ram', 'Computer\ComputerController@ramPost' );
	
	Route::get('/computer/smps/{mid}', 'Computer\ComputerController@smps' );
	Route::post('/computer/smps', 'Computer\ComputerController@smpsPost' );

	Route::get('/computer/monitor/{mid}', 'Computer\ComputerController@monitor' );
	Route::post('/computer/monitor', 'Computer\ComputerController@monitorPost' );

	Route::get('/computer/keyboard/{mid}', 'Computer\ComputerController@keyboard' );
	Route::post('/computer/keyboard', 'Computer\ComputerController@keyboardPost' );

	Route::get('/computer/mouse/{mid}', 'Computer\ComputerController@mouse' );
	Route::post('/computer/mouse', 'Computer\ComputerController@mousePost' );

	Route::get('/computer/otherinfo/{mid}', 'Computer\ComputerController@other' );
	Route::post('/computer/otherinfo', 'Computer\ComputerController@otherPost' );

	Route::get('/computer/component/{mid?}','Computer\ComputerComponentController@manageComponent');
	
	Route::get('/manageuser','Core\ManageUserController@manageSystemUser');

	Route::get('/manageuser/addedit/{uid?}','Core\ManageUserController@addEditSystemUser');
	Route::post('/manageuser/addedit','Core\ManageUserController@addEditSystemUserPost');
	Route::get('/manageuser/view','Core\ManageUserController@viewSystemUser');

});
//---------------------------------------------------------------------------------------
