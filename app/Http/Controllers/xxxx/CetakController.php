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


class CetakController extends Controller
{


    public function __construct(){
      $this->middleware('auth');
     // $this->middleware('rule:Admin');

   }

 
  public function indexnrc($induk){
    $xxx= Auth::user()->nama;
    $idrole= Auth::user()->rolesid;
    $ly= Auth::user()->layout;
    $idakunn=DB::table('seting')
                                      ->select('seting.idkk')                                      
                                      ->first();
    $idakun=$idakunn->idkk; 
    if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  

                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  

                ->get();
                }
    return view ('pageform')
    ->with('isi','keu.cetak.nrc')  
    ->with('menuatas',$menuatas)
    ->with('idrole',$idrole)
    ->with('ly',$ly) 
    ->with('idakun',$idakun) 
    ->with('induk',$induk) 
    ->with('judulutama','Dashboard')            
    ->with('judul','Neraca')
    ->with('namauser',$xxx); 

  }   

   public function cetakneraca(Request $request)

    {
      /*
         $nobel=$request->nobel;       
      
          $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                        ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')
                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(tran.d) as d'),DB::raw('(tran.k) as k'),'jur.nilai as nilai','bual.nama as namaorang','jur.ctt','jur.tgl')
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'D')
                      ->orderby('tran.notran', 'asc')
                      ->get();
 	
        view()->share('rec',$rec);
        */

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('keu/cetak/lapnrc');
             return $pdf->download('keu/cetak/lapnrc.pdf');
        }
        return view('keu/cetak/lapnrc');
    }



}