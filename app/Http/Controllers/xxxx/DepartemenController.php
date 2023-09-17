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
use App\Departemen;
 
use PDF;
use File;


class DepartemenController extends Controller
{


    public function __construct(){
      $this->middleware('auth');
     // $this->middleware('rule:Admin');

   }

  public function cariakundapat(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('akun')
                ->where('akun.nakun', 'like', "%$cari%")                                    
                ->where('akun.AP', '=', 'Pendapatan')                                    
                ->select('akun.*')
                ->orderby('akun.id', 'asc')
                ->get();
                echo  json_encode($db);
   }


  public function cariakunsedia(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('akun')
                ->where('akun.nakun', 'like', "%$cari%")                                    
                ->where('akun.AP', '=', 'Aktiva')                                    
                ->select('akun.*')
                ->orderby('akun.id', 'asc')
                ->get();
                echo  json_encode($db);
   }


  public function cariakunhpp(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('akun')
                ->where('akun.nakun', 'like', "%$cari%")                                    
                ->where('akun.AP', '=', 'Biaya')                                    
                ->select('akun.*')
                ->orderby('akun.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

    public function caridep(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('departemen')
                ->where('departemen.nadep', 'like', "%$cari%")                                    
                ->select('departemen.*')
                ->orderby('departemen.id', 'asc')
                ->get();
                echo  json_encode($db);
   }


//-------------------------Jenis-------------------------------
    
  public function index(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('departemen')   
                 ->leftjoin('devisi', 'devisi.id', '=', 'departemen.iddev')                                        
                ->select('departemen.*', 'devisi.nadev')
                ->orderby('devisi.nadev', 'asc')
                ->get();
      $ly=DB::table('layoutmenu')                
                ->select('layoutmenu.*')
                ->first();            

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
        ->with('ly',$ly)         
        ->with('judulutama','Devisi-Departemen')      
        ->with('judul',' Departemen')
        ->with('isi','master.departemen')
        ->with('namauser',$xxx); 
  } 
 
  public function editdep($id)
         
        {
            $xxx= Auth::user()->nama;
            $tambah=0;
            //$nobel = $request -> nobel;                         
            $rec=DB::table('departemen')                       
                  ->leftjoin('devisi', 'devisi.id', '=', 'departemen.iddev')                   
                  ->select('departemen.*','devisi.nadev')
                  ->where('departemen.id', '=', $id)                
                  ->get();
                  //echo "string:$rec";
                  //dd($tambah);
            
                 return view ('pageform')
                  ->with('menuaktif','Input Departemen')      
                  ->with('judul','Form Departemen')                  
                  ->with('isi','master.depform') 
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
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

  

//---------------------- departemen --------------------------------------
 public function formdep(){
          $tambah=1;
           $xxx= Auth::user()->nama;
          return view ('pageform')
                  ->with('menuaktif','Input Departemen')      
                  ->with('judul','Form Departemen')                  
                  ->with('isi','master.depform')                  
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
  }

//----------------------end departemen --------------------------------------


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
            $data = Departemen::find($id);
            $response = $data -> delete();

              $result=DB::table('departemen')   
                 ->leftjoin('devisi', 'devisi.id', '=', 'departemen.iddev')                                        
                ->select('departemen.*', 'devisi.*')
                ->orderby('devisi.nadev', 'asc')
                ->get();

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)            
         ->with('judulutama','Devisi-Departemen')      
        ->with('judul',' Departemen')
        ->with('isi','master.departemen')
        ->with('namauser',$xxx); 
        }

 public function simpan(Request $request)
        {
          if ($request -> tambah !=0 ) { 
            $data = new Departemen;             
            $data -> nadep = $request -> nadep;
            $data -> iddev = $request -> dev;
            $data -> iddapat = $request -> dapat;
            $data -> idhpp = $request -> hpp;
            $data -> idbiaya = $request -> biaya;
            $data -> idsedia = $request -> sedia;
            $data -> save();

          }else  {
             $pro=array(         

              'nadep'=>Input::get('nadep'),
              'iddev'=>Input::get('dev'),
              'iddapat'=>Input::get('dapat'),
              'idhpp'=>Input::get('hpp'),
              'idbiaya'=>Input::get('biaya'),
              'idsedia'=>Input::get('sedia')
            );

              $e=DB::table('departemen')->where('id',$request->id)->update($pro); 
          }

               $result=DB::table('departemen')   
                 ->leftjoin('devisi', 'devisi.id', '=', 'departemen.iddev')                                        
                ->select('departemen.*', 'devisi.nadev')
                ->orderby('devisi.nadev', 'asc')
                ->get();

            $xxx= Auth::user()->nama;
            return view('pagelist')
                ->with('data',$result)            
                 ->with('judulutama','Devisi-Departemen')      
                ->with('judul',' Departemen')
                ->with('isi','master.departemen')
                ->with('namauser',$xxx); 
        }
//---------------- end Jenis-----------------------------------



}