<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\LengAwarePaginator;
use Illuminate\Validation\Validator;
use App\Http\Controllers\Confirm;
use DB;
use Auth;
use App\Devisi;
 
use PDF;
use File;


class BintangController extends Controller
{


    public function __construct(){
      $this->middleware('auth');
     // $this->middleware('rule:Admin');

   }

  public function pilihkursi(Request $request)     
   {
      
            $idrole = Auth::user()->rolesid;
            //$dd($idrole);
            $xxx= Auth::user()->nama;
            $iduser= Auth::user()->id;
            $ly= Auth::user()->layout;

            $idjadwal=$request->idjadwal;

             
            $menuatas=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', "999999")                                
                ->get();
               
                   
            $result=DB::table('kursi') 
                  ->select('kursi.*')                  
                  ->where('kursi.idjadwal','=',$idjadwal)
                  ->first(); 

            $result2=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                    ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.id','=',$idjadwal)
                  ->first();       


            return view ('pagewelcome')
                  ->with('judulutama','Dashboard')   

                  ->with('judul','Dashboard')
                  ->with('idrole',$idrole) 
                  ->with('iduser',$iduser) 
                  ->with('idjadwal',$idjadwal) 
                  ->with('data',$result) 
                  ->with('abc',$result2) 
                  ->with('isi','bintang.ambilkursi')  

                  
                  ->with('menuatas',$menuatas)
                  ->with('ly',$ly)
                  ->with('namauser',$xxx); 
   }  


  public function jemputantar(Request $request)     
   {
      
            $idrole = Auth::user()->rolesid;
            //$dd($idrole);
            $xxx= Auth::user()->nama;
            $iduser= Auth::user()->id;
            $ly= Auth::user()->layout;

            $idjadwal=$request->idjadwal;

             
            $menuatas=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', "999999")                                
                ->get();
               
                   
            $result=DB::table('kursi') 
                  ->select('kursi.*')                  
                  ->where('kursi.idjadwal','=',$idjadwal)
                  ->first(); 

            $result2=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                    ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.id','=',$idjadwal)
                  ->first();

            $resultja=DB::table('lokasiantarjadwal') 
                  ->select('lokasiantarjadwal.*')                  
                  ->where('lokasiantarjadwal.idjadwal','=',$idjadwal)
                  ->where('lokasiantarjadwal.idpelanggan','=',$iduser)
                  ->first();
            if($resultja!=null){      
            $idlokasiantar= $resultja->idlokasiantar;
          }else $idlokasiantar= 0;

            return view ('pagewelcome')
                  ->with('judulutama','Dashboard')   

                  ->with('judul','Dashboard')
                  ->with('idrole',$idrole) 
                  ->with('iduser',$iduser) 
                  ->with('idlokasiantar',0) 
                  ->with('idjadwal',$idjadwal) 
                  ->with('data',$result) 
                  ->with('abc',$result2) 
                  ->with('isi','bintang.jemputantar')  

                  
                  ->with('menuatas',$menuatas)
                  ->with('ly',$ly)
                  ->with('namauser',$xxx); 
   }  

 public function simpankursi(Request $request)

  {
              
      DB::beginTransaction();


      try {   
              $iduser=$request->iduser;
              $idjadwal=$request->idjadwal;
              $nokursi=$request->nokursi;

              if($nokursi==7){
                    $kcc=array
               (        
                      'kursicc'=>1,                      
                      'idcc'=>$iduser
               );
                  $ee=DB::table('kursi')->where('idjadwal',$idjadwal)->update($kcc); 

              }elseif ($nokursi==1) {
                $k1=array
               (        
                      'kursi1'=>1,                      
                      'id1'=>$iduser
               );
                $ee=DB::table('kursi')->where('idjadwal',$idjadwal)->update($k1); 
              }elseif ($nokursi==2) {
                 $k2=array
               (        
                      'kursi2'=>1,                      
                      'id2'=>$iduser
               );
                $ee=DB::table('kursi')->where('idjadwal',$idjadwal)->update($k2); 
              }elseif ($nokursi==3) {
                 $k3=array
               (        
                      'kursi3'=>1,                      
                      'id3'=>$iduser
               );
                $ee=DB::table('kursi')->where('idjadwal',$idjadwal)->update($k3); 
              }elseif ($nokursi==4) {
                 $k4=array
               (        
                      'kursi4'=>1,                      
                      'id4'=>$iduser
               );
                $ee=DB::table('kursi')->where('idjadwal',$idjadwal)->update($k4); 
              }elseif ($nokursi==5) {
                 $k5=array
               (        
                      'kursi5'=>1,                      
                      'id5'=>$iduser
               );
                $ee=DB::table('kursi')->where('idjadwal',$idjadwal)->update($k5); 
              }elseif ($nokursi==6) {
                 $k6=array
               (        
                      'kursi6'=>1,                      
                      'id6'=>$iduser
               );
                $ee=DB::table('kursi')->where('idjadwal',$idjadwal)->update($k6); 
              }


                  

                  DB::commit();
              // all good
          } catch (Exception $e) {
              DB::rollback();
              // something went wrong
            }        
          $result2=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                    ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.id','=',$idjadwal)
                  ->first();       
                    

          $result=DB::table('kursi') 
                  ->select('kursi.*')                  
                  ->where('kursi.idjadwal','=',$idjadwal)
                  ->first(); 

           $menuatas=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', "999999")                                
                ->get();


           $xxx= Auth::user()->nama; 
           $iduser= Auth::user()->id; 
           $idrole= Auth::user()->rolesid;
           $ly=1; 
             
            return view ('pagewelcome')
                ->with('judulutama','Dashboard')
                  ->with('judul','Dashboard')
                  ->with('idrole',$idrole) 
                  ->with('iduser',$iduser) 
                  ->with('ly',$ly  )
                  ->with('abc',$result2  )  
                  ->with('data',$result  ) 
                  ->with('menuatas',$menuatas  ) 
                  ->with('idjadwal',$idjadwal) 
                  ->with('isi','bintang.ambilkursi')
                  ->with('namauser',$xxx); 
                
 
        }


   public function jadwal(Request $request)     
   {
      
      $idrole = Auth::user()->rolesid;
            //$dd($idrole);
            $xxx= Auth::user()->nama;
            $iduser= Auth::user()->id;
            $idrole= Auth::user()->rolesid;
            $ly= Auth::user()->layout;
             
             
            
            $result=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                  ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','kursi.kursicc','kursi.kursi1','kursi.kursi2','kursi.kursi3','kursi.kursi4','kursi.kursi5','kursi.kursi6','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.valid','=',0)                  
                  ->get(); 
                    
                  return view ('pagewelcome')
                  ->with('judulutama','Dashboard')            
                  ->with('judul','Dashboard')
                  ->with('idrole',$idrole) 
                  ->with('data',$result) 
                  ->with('iduser',$iduser) 

                  ->with('isi','bintang.jadwal') 
                   
                  
                  
                  ->with('ly',$ly)
                  ->with('namauser',$xxx); 
   }  

//-------------------------Devisi-------------------------------
    
  public function indexdev($id){
    // $result =DB::table('member')->paginate(10);
    $result=DB::table('devisi')                                             
                ->select('devisi.*')
                ->orderby('devisi.nadev', 'asc')
                ->get();
    $ly=DB::table('layoutmenu')                
                ->select('layoutmenu.*')
                ->first();   

     
                         
    $menu=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', $id)                                
                ->get();                

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)   
         ->with('ly',$ly)
        ->with('menuatas',$menu)    
        ->with('judulutama','Devisi-Departemen')      
        ->with('judul',' Devisi')
        ->with('isi','master.devisi')
        ->with('namauser',$xxx); 
  } 



  public function indexkosong(){
    // $result =DB::table('member')->paginate(10);
       

    $xxx= Auth::user()->nama;
    return view('pagelist')
         
       
        ->with('judulutama','Support By Versi  2.0')              
         
        ->with('isi','include.isikosong')
        ->with('namauser',$xxx); 
  } 

   public function view(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Devisi::find($id);
                //echo json_decode($info);
                //dd($info);
                return response()->json($info);
            }
        }

  public function update(Request $request)
        {
            $id = $request -> edit_id;
            $data = Devisi::find($id);             
            $data -> nadev = $request -> edit_nama;
          
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }      

   public function delete(Request $request)
        {
            $id = $request -> id;
            $data = Devisi::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }

 public function simpan(Request $request)
        {
            $data = new Devisi;
             
            $data -> nadev = $request -> last_name;
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }
 
//---------------- end Jenis-----------------------------------

}