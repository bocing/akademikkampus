<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

          $xxx= Auth::user()->nama;
          $a= Auth::user()->rolesid;
    	
        //$result =DB::select('select *  from slide');
        //$privs =DB::select('select *  from marp');
        //$deals =DB::select('select mard.*, marchant.logo, marchant.nama from mard left outer join marchant on (marchant.id=mard.idmar)');        
        //$deals =DB::table('mard');
        return view('user.index')
          ->with('judulutama','Dashboard')            
          ->with('judul','User Dashboard')
          ->with('data2',$xxx); 
        
    }
}
