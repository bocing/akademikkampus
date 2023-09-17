<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\Menu;
class LoginController extends Controller
{
   public function __construct()
    {
        $this->middleware('guest');
    }


    public function getLogin(){
       return view('login.formlogin')
    ;
      
    }

    public function daftarkan(){
       return view('pagewelcome')->with('isi','bintang.daftar')    ;
      
    }

     

  public function daftar(){
            $user = new User();         
            $user->email=Input::get ('nohp');
            $user->name=Input::get ('nama');
            $user->password=bcrypt(Input::get('password'));                      
            $user->rolesid=3;
            $user->save();
        //  dd($user);
           // var_dump($user);
 
    
        return view('pagewelcome')->with('isi','bintang.isi')
        ;
}
    public function postLogin(Request $request){
      //  var_dump("aaaa: $request->rolesid");
       
      if (Auth::attempt([
        'email'=>$request->email,
        'password'=>$request->password,                       
          ])) 
        {     
            $idrole = Auth::user()->rolesid;
            //$dd($idrole);
            $xxx= Auth::user()->nama;
            $hp= Auth::user()->email;
            $ly= Auth::user()->layout;
            $iduser= Auth::user()->id;
             
            $menuatas=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', "999999")                                
                ->get();
            
            $data = DB::table('users')
                    ->select('email','nama','koref','rolesid')
                    ->where('email', '=', Auth::user()->email)
                    ->first();

            $datax=$data->nama;   
            if ($idrole!=1) {  

               $result=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                  ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','kursi.kursicc','kursi.kursi1','kursi.kursi2','kursi.kursi3','kursi.kursi4','kursi.kursi5','kursi.kursi6','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.valid','=',0)                  
                  ->get(); 



                  $xxx= Auth::user()->nama;
             
                  return view ('pagewelcome')
                  ->with('isi','bintang.jadwal')   
                  ->with('judulutama','Dashboard')            
                  ->with('judul','Dashboard')
                  ->with('data',$result)
                  ->with('iduser',$iduser)
                  ->with('idrole',$idrole)
                  ->with('hp',$hp)
                  ->with('menuatas',$menuatas)
                  ->with('ly',$ly)
                  ->with('namauser',$xxx); 
 
        }elseif (($idrole==1)) {
          $idrole = Auth::user()->rolesid;
            //$dd($idrole);
            $xxx= Auth::user()->nama;
            $ly= Auth::user()->layout;
             
            $menuatas=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', "999999")                                
                ->get();
            
            $data = DB::table('users')
                    ->select('email','nama','koref','rolesid')
                    ->where('email', '=', Auth::user()->email)
                    ->first();
            $datax=$data->nama;   
           // if ($id==1) {                
                  $xxx= Auth::user()->nama;
                   
                     
                  //dd($menu)
                 // $ly=DB::table('layoutmenu')                
                   //   ->select('layoutmenu.*')
                     // ->first(); 

                  return view ('pageadmin')
                  ->with('judulutama','Dashboard')            
                  ->with('judul','Dashboard')
                  ->with('idrole',$idrole) 
                   
                  
                  ->with('menuatas',$menuatas)
                  ->with('ly',$ly)
                  ->with('namauser',$xxx); 
        }

       
        
        } else {
          return 'Anda Salah Password..!';
        }
    }

}
