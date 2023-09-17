<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;
use App\Cusiklan;

class HomeController extends Controller
{
    
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    
    public function daftar(){
            $user = new User();         
            $user->email=Input::get ('nohp');
            $user->nama=Input::get ('nama');
            $user->password=bcrypt(Input::get('pass'));                      
            $user->rolesid=4;
            $user->save();

        //  dd($user);
           // var_dump($user);
 
           
      
        return view('pagewelcome')->with('isi','bintang.isi')
        ;
}
   public function home()
	{
		
       
		return view('login.formlogin');
        
		

	}
   

   }