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
use App\User;
use App\Jenis;
use App\Seting;
use App\Satuan;
use App\Kate;
use App\Pem;
use App\Cobalayout;
use App\Pel;
use App\Stok;
use App\Belim;
use App\Menu;
use App\Extra;
use App\Coa;
use App\layoutmenu;
use App\Belid;
use App\Mek;
use App\Ter;
use App\Vhrgrata;
use PDF;
use File;


class AdminController extends Controller
{


    public function __construct(){
      $this->middleware('auth');
     // $this->middleware('rule:Admin');

   }


  public function indexstok(){
  	  		$xxx= Auth::user()->nama;            
            $idrole= Auth::user()->rolesid;
    // $result =DB::table('member')->paginate(10);
      

      $result=DB::table('stok')    
                  //->leftjoin('jenis', 'jenis.id', '=', 'stok.jenid')                                      
                  //->leftjoin('sat', 'sat.id', '=', 'stok.satid')                                      
                  //->leftjoin('kate', 'kate.id', '=', 'stok.katid')  
                  //->leftjoin('departemen', 'departemen.id', '=', 'stok.iddep')  
                  ->leftjoin('pem', 'pem.id', '=', 'stok.pemid')                                      
                  //->leftjoin('vbelirata', 'vbelirata.idstok', '=', 'stok.id')                                                       
                  //->select('stok.*','sat.nama as nasa', 'kate.nama as naka','pem.nama as nasok','jenis.nama as naje','stok.hrgakhir')
                  ->select('stok.*','pem.nama as nasok','stok.hrgakhir')
                  ->orderby('stok.nama', 'asc')                                            
                  ->get();

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
        ->with('idrole',$idrole)  
        ->with('menuaktif','Master Data Barang') 
        ->with('judulutama','Master') 
        ->with('judul','Daftar Stok')            
        ->with('isi','master.stok')
        ->with('namauser',$xxx); 
  } 

  public function formbarang (){
          $tambah=1;
           $xxx= Auth::user()->nama;
          return view ('pageform')
                  ->with('menuaktif','Input Stok')      
                  ->with('judul','Form Pembelian')                  
                  ->with('isi','master.stokform')                  
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
  }
  

}
?>