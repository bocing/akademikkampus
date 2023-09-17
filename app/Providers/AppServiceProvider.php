<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Http\Controllers\AdminController;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

     view()->composer('*', function($view)
    {
        if (Auth::check()) {
            $view->with('currentUser', Auth::user());
        }else {
            $view->with('currentUser', null);
        }
    });

        //dd(Auth::user());
        // $id= Auth::user();
        //$nama=AdminController::caridalamtabel('users','*','id',$id);
        // dd($nama);
        $rulkar=DB::table('toko')
                    ->select('*')                 
                    //->where('belid.nobel', '=', $nobel)                      
        ->first();  


          $perido=AdminController::cariperiode();                                               
          
          $bln=$perido['bln'];  
          $thn=$perido['thn'];
          $natahun=$perido['nama']; 

         




         // $namaakun = str_replace("\n", "",shell_exec('wmic DISKDRIVE GET SerialNumber 2>&1'));
         // $namaakun2 = str_replace("\r", "",$namaakun);     
         // $namaakun3 = str_replace(" ", "",$namaakun2);        
         // //dd($namaakun3);
         // if ($namaakun3!="SerialNumber"){
         //       dd('Terjadi Kesalahan Data');              
         // }     
        view()->share('toko',$rulkar);
        view()->share('bln',$bln);
        view()->share('thn',$thn);
        view()->share('natahun',$natahun);
        
        // Check if the "mobile" word exists in User-Agent 
        
        $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
          
        // Check if the "tablet" word exists in User-Agent 
        $isTab = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet")); 
         
        // Platform check  
        $isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows")); 
        $isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android")); 
        $isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone")); 
        $isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad")); 
        $isIOS = $isIPhone || $isIPad; 
         
        // if($isMob){ 
        //     if($isTab){ 
        //         echo 'Using Tablet Device...'; 
        //         view()->share('alat','tablet');
        //     }else{ 
        //         echo 'Using Mobile Device...'; 
        //          view()->share('alat','mobile');
        //     } 
        // }else{ 
        //     echo 'Using Desktop...'; 
        //      view()->share('alat','dekstop');
        // } 
         
       
        if($isIOS){ 
           // echo 'iOS'; 
             view()->share('alat','ios');
        }elseif($isAndroid){ 
            //echo 'ANDROID'; 
             view()->share('alat','android');
        }elseif($isWin){ 
            //echo 'WINDOWS'; 
             view()->share('alat','windows');
        }


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
