<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\ORM\Core\SystemUser;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string\
     */
    protected $redirectTo = '/home';
    protected $redirectLogin = '/login';
    protected $redirectError = '/error';    
    private $ldaphost = "ldap://ldap.iitb.ac.in";  // your ldap servers

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'logout']);
    }

    /*
        GET: Login Page
        By: Khursheed Ali
        On: 9/07/2017 15:05
    */
    public function login()
    {   
        session_start();
        return view("im.Login");
    }

    /*
        Post: Login Page
        By: Khursheed Ali
        On: 9/07/2017 15:05
    */
    public function loginPost(Request $request)
    {
        session_start();

        //session is already their then send it to login page.
        if(isset($_SESSION['loginStatus']) && $_SESSION['loginStatus']==true)
        {
            return redirect($this->redirectTo);
        }

        $form=$request->all(); 
        $username=$form["ldap"];
        $password=$form["pwd"];
        try{
            $ldapconn = ldap_connect($this->ldaphost);                    
        }catch(\Exception $e){
            $_SESSION['errmsg']="Unable to connect LDAP server. Please Try Again Later..";
            $_SESSION['exception']=$e->getMessage();
            return redirect($this->redirectError);

        }              
        if ($ldapconn) {
            
            try
            {       
                    if(!($bind=ldap_bind($ldapconn)))
                    {
                        $_SESSION['errmsg']="Anonymous Binding failed: LDAP SERVER NOT RESPONDING...!!";
                        return redirect($this->redirectError);
                    }

            }catch(\Exception $e){
                $_SESSION['errmsg']="Anonymous Binding failed: LDAP SERVER NOT RESPONDING...!!";
                $_SESSION['exception']=$e->getMessage();
                return redirect($this->redirectError);
            }
            if (($res_id = ldap_search( $ldapconn,"ou=people,dc=iitb,dc=ac,dc=in","uid=$username")) == false) 
            {
                $_SESSION['inputErrorMsg']= "Invalid LDAP/password1.";                       
                return redirect($this->redirectLogin);
            }
            if (ldap_count_entries($ldapconn, $res_id) != 1) 
            {
                $_SESSION['inputErrorMsg']= "Invalid LDAP/password2.";
                return redirect($this->redirectLogin);
            }

            if (( $entry_id = ldap_first_entry($ldapconn, $res_id))== false) 
            {
               $_SESSION['errmsg']="Unable to fetch LDAP entry.";
               return redirect($this->redirectError);
            }

            if (( $user_dn = ldap_get_dn($ldapconn, $entry_id)) == false) 
            {
                $_SESSION['errmsg']= "Unable to get LDAP details.";
                return redirect($this->redirectError);

            }

            $info=strlen($username)>0? ( SystemUser::where("ldap",$username)->get()) : array();              
            if(count($info)==0)
            {
                $_SESSION['inputErrorMsg']= "LDAP user is not allowed. Please contact Admin. ";  /*LDAP bind Failed. */
                return redirect($this->redirectLogin);
            }

            // checking ldap password
            try
            {
                /* Authenticating the User */
                if (($link_id = ldap_bind($ldapconn, $user_dn, $password)) == false) 
                {
                    $_SESSION['inputErrorMsg']= "Invalid LDAP/Password.";  /*LDAP bind Failed. */
                    return redirect($this->redirectLogin);
                }        

            }catch(\Exception $e){
                $_SESSION['exception']=$e->getMessage();
                $_SESSION['inputErrorMsg']= "Invalid LDAP/Password.";  /*LDAP bind Failed. */
                return redirect($this->redirectLogin);

            }
        }
        else{
            
            $_SESSION['errmsg']="Unable to connect LDAP server. Please Try Again Later..";
            return redirect($this->redirectError);
        }      
        $_SESSION['loginStatus']=true;
        $_SESSION['ldap']=$username;        
        $_SESSION['username']=$info[0]->name;  
        $_SESSION['level']=$info[0]->level;      
        $_SESSION['LAST_ACTIVITY'] = time(); 
        return redirect($this->redirectTo);
    }

    /*
        POST: Logout
        By: Khursheed Ali
        On: 9/07/2017 15:05
    */
    public function logout()
    {
        session_start();
        session_unset();        
        session_destroy();         
        return redirect("/login");
    }
}
