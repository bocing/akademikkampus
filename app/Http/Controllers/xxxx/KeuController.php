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
 
use PDF;
use File;


class KeuController extends Controller
{


    public function __construct(){
      $this->middleware('auth');
     // $this->middleware('rule:Admin');

   }

    public function bb(){
      
        $ly=DB::table('layoutmenu')                
                ->select('layoutmenu.*')
                ->first(); 

        $menuatas=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', $induk)                                
                ->get();        
        $result=DB::table('jur')    
                  ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                  ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')                
                  ->select('jur.*','bual.nama as nabual',DB::raw('SUM(tran.d) as total'),DB::raw('SUM(tran.k) as totkredit'))
                  ->where('jur.kojur','=','KK')
                  ->groupby('jur.nojur')
                  ->orderby('jur.nojur', 'desc')
                  ->get(); 

      $xxx= Auth::user()->nama;
      return view('pagelist')
          ->with('data',$result) 
         
          ->with('ly',$ly)
          ->with('induk',$induk)
           ->with('menuatas',$menuatas)              
          ->with('isi','keu.bb')            
          ->with('judul',' Jurnal Kas Keluar')            
          ->with('namauser',$xxx); 
    } 

//----------------------- end latihan pdf------------------------



}
