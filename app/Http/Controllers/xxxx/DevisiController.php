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


class DevisiController extends Controller
{


    public function __construct(){
      $this->middleware('auth');
     // $this->middleware('rule:Admin');

   }

  public function caridev(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('devisi')
                ->where('devisi.nadev', 'like', "%$cari%")                                    
                ->select('devisi.*')
                ->orderby('devisi.id', 'asc')
                ->get();
                echo  json_encode($db);
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