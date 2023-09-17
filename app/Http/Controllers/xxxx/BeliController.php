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
 
use PDF;
use File;


class BeliController extends Controller
{


    public function __construct(){
      $this->middleware('auth');
     // $this->middleware('rule:Admin');

   }


//-------------------------Beli-------------------------------
    

 public function indexorderb(){
    // $result =DB::table('member')->paginate(10);
      //  $sup =DB::select("select * from pel");
         $menuatas=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', "999999")                                
                ->get();            
         $ly=DB::table('layoutmenu')                
                ->select('layoutmenu.*')
                ->first(); 
        $result=DB::table('obm')                      
                  ->leftjoin('pel', 'pel.id', '=', 'obm.idpel')                
                  ->select('obm.*','pel.nama')
                  
                  ->groupby('obm.nobukti')
                  ->orderby('obm.nobukti', 'desc')               
                  ->get(); 
      $xxx= Auth::user()->nama;

     

      return view('pagelist')
          ->with('data',$result)  
           ->with('ly',$ly)
           ->with('menuatas',$menuatas)
          ->with('menuaktif','Daftar Order Penjualan')      
          ->with('judulutama','Transaksi')            
          ->with('isi','beli.orderb')            
          ->with('judul',' Order Penjualan')            
          ->with('namauser',$xxx); 
    } 

public function deleteorderbdetil(Request $request)
              {
                  $xxx= Auth::user()->nama;            
                  $id = $request ->id;
                  $nobelx = DB::table('obd')->where('id', $id)->first();
                  $nobukti= $nobelx->nobukti;
                DB::beginTransaction();

                try {
                  DB::delete('delete from obd where id = ?',[$id]);
                 
                   $rec=DB::table('obm')    
                        ->leftjoin('obd', 'obd.nobukti', '=', 'obm.nobukti')
                        ->leftjoin('pel', 'pel.id', '=', 'obm.idpel')
                        ->leftjoin('stok', 'stok.id', '=', 'obd.idstok')
                        ->leftjoin('sat', 'sat.id', '=', 'stok.id')
                        ->select('obm.*','obd.id as idobd','obd.*','pel.nama',DB::raw('obd.jml*obd.hrg as st'),'stok.nama as nastok','stok.kode as kode','sat.nama as nasa')
                      ->where('obm.nobukti', '=', $nobukti)
                      ->orderby('obm.nobukti', 'desc')
                      ->get();
                    //dd($rec);

                  
                    $tot=DB::table('obd')
                     ->select(DB::raw('SUM(jml*hrg) as total')) 
                     ->groupby('obd.nobukti')
                     ->where('obd.nobukti', '=', $nobukti)                                 
                     ->first();   
                     
                     $totallll=$tot->total;     
                     
                     $ha=array
                         (        
                                'total'=>$totallll
                                 
                         );

                     DB::table('obm')->where('nobukti',$nobukti)->update($ha);    
 
                  $master=DB::table('obm')
                     ->select('obm.*') 
                     ->where('obm.nobukti', '=', $nobukti)                                 
                     ->first();   
               
                      DB::commit();
                    // all good
                      } catch (Exception $e) {
                          DB::rollback();
                          // something went wrong
                      }    
                      //dd($nobukti);     
                 return view ('pageform')
                    ->with('menuaktif','Input Jurnal Umum')      
                    ->with('judul','Form Order Pembelian')                    
                    ->with('isi','beli.orderbform')              
                    
                    ->with('tot',$tot)
                    ->with('nobukti',$nobukti) 
                    ->with('rec',$rec)
                    ->with('master',$master)
                    ->with('namauser',$xxx); 
              }    

public function editorderb($nobukti)
               
              {
                  $xxx= Auth::user()->nama;
                 
                // $nobukti = $request -> nobukti;                         
                 
                    $rec=DB::table('obm')    
                        ->leftjoin('obd', 'obd.nobukti', '=', 'obm.nobukti')
                        ->leftjoin('pel', 'pel.id', '=', 'obm.idpel')
                        ->leftjoin('stok', 'stok.id', '=', 'obd.idstok')
                        ->leftjoin('sat', 'sat.id', '=', 'stok.id')
                        ->select('obm.*','obd.id as idobd','obd.*','pel.nama',DB::raw('obd.jml*obd.hrg as st'),'stok.nama as nastok','stok.kode as kode','sat.nama as nasa')
                      ->where('obm.nobukti', '=', $nobukti)
                      ->orderby('obm.nobukti', 'desc')
                      ->get();
                    //dd($rec);

                  $tot=DB::table('obd')
                     ->select(DB::raw('obd.jml*obd.hrg as total') ) 
                     ->groupby('obd.nobukti')
                     ->where('obd.nobukti', '=', $nobukti)                                 
                     ->first();   

              
               //dd($tot);              
             
                  $master=DB::table('obm')
                     ->select('obm.*') 
                     ->where('obm.nobukti', '=', $nobukti)                                 
                     ->first();
        
            return view ('pageform')
              ->with('menuaktif','Input Jurnal Umum')      
              ->with('judul','Form Order Pembelian')                    
              ->with('isi','beli.orderbform')              
              
              ->with('tot',$tot)
              ->with('nobukti',$nobukti) 
              //->with('tglbel',$tglbel) 
              ->with('rec',$rec)
              //->with('stok',$stok)
              ->with('master',$master)
               
              ->with('namauser',$xxx); 
              
              }  


        public function formorderb(){ 
              $thn= date("y"); 
              $bln= date("m");

              $nomax = DB::table('obm')
                           ->select(DB::raw('max(nobukti) as nobukti'))   
                           //->where(month('jur.tgl')=$bln)
                           //->andwhere(year('jur.tgl')=$thn)                  
                           ->first(); 
              $nomax0=$nomax->nobukti;       
              $nomax1 = substr($nomax0, -4);
              $nomax2 = $nomax1+1;
              $num_of_ids = 1000; //Number of "ids" to generate.
              $i = 0; //Loop counter.
              $n = 0; //"id" number piece.         
              $l = "OB"."-"."$bln"."$thn"."-"; //"id" letter piece.        
              $id = $l . sprintf("%04d", $nomax2); //Create "id". Sprintf pads the number to make it 4 digits.        
              $nobukti=$id;
              $tglbel=date("Y/m/d");
              $waktu=date("hh/mm/ss");
              $idbual='';
              $debet=0;
              $kredit=0;
              $ket='';         
              $idakun='';         
              $total=0;
              $tambah=true; 
              $xxx= Auth::user()->nama; 
           
             $rec=DB::table('obm')    
                        ->leftjoin('obd', 'obd.nobukti', '=', 'obm.nobukti')
                        ->leftjoin('pel', 'pel.id', '=', 'obm.idpel')
                        ->leftjoin('stok', 'stok.id', '=', 'obd.idstok')
                        ->leftjoin('sat', 'sat.id', '=', 'stok.id')
                        ->select('obm.*','obd.id as idobd','obd.*','pel.nama',DB::raw('obd.jml*obd.hrg as st'),'stok.nama as nastok','stok.kode as kode','sat.nama as nasa')
                      ->where('obm.nobukti', '=', $nobukti)
                      ->orderby('obm.nobukti', 'desc')
                      ->get();
                    //dd($rec);

               $tot=DB::table('obd')
                     ->select(DB::raw('obd.jml*obd.hrg as total') ) 
                     ->groupby('obd.nobukti')
                     ->where('obd.nobukti', '=', $nobukti)                                 
                     ->first();   

              
               //dd($tot);              
             
             $master=DB::table('obm')
                    ->select('obm.*') 
                     ->where('obm.nobukti', '=', $nobukti)                                 
                     ->first();      

              return view ('pageform')
              ->with('menuaktif','Input Jurnal Umum')      
              ->with('judul','Form Order Pembelian')                    
              ->with('isi','beli.orderbform')              
              
              ->with('tot',$tot)
              ->with('nobukti',$nobukti) 
              ->with('tglbel',$tglbel) 
              ->with('rec',$rec)
              //->with('stok',$stok)
              ->with('master',$master)
               
              ->with('namauser',$xxx); 
        }


         public function simpanorderb(Request $request)

        {
              $v=\Validator::make($request->all(),
            [
              'nobukti'=>'required',
              'idpel'=>'required',
              'idter'=>'required',
              'tglbel'=>'required',        
              'jml'=>'required',
              'hrg'=>'required',
              'idstok'=>'required',
            ]);
            if ($v->fails())
            {

              $nobukti=Input::get('nobukti'); 
              $idpel=Input::get('idpel'); 
              $idter=Input::get('idter'); 
              $tglbel=Input::get('tglbel');    
              $jml=Input::get('jml'); 
              $hrg=Input::get('hrg'); 
              $idstok=Input::get('idstok');  

               $xxx= Auth::user()->nama; 
               //$sup =DB::select("select * from pem");           
               //$stok =DB::select("select * from stok");
              $rec=DB::table('obm')    
                        ->leftjoin('obd', 'obd.nobukti', '=', 'obm.nobukti')
                        ->leftjoin('pel', 'pel.id', '=', 'obm.idpel')
                        ->leftjoin('stok', 'stok.id', '=', 'obd.idstok')
                        ->leftjoin('sat', 'sat.id', '=', 'stok.id')
                        ->select('obm.*','obd.id as idobd','obd.*','pel.nama',DB::raw('obd.jml*obd.hrg as st'),'stok.nama as nastok','stok.kode as kode','sat.nama as nasa')
                      ->where('obm.nobukti', '=', $nobukti)
                      ->orderby('obm.nobukti', 'desc')
                      ->get();
                    //dd($rec);

              
              
               //dd($tot);              
             
             $total=DB::table('obm')
                    ->select('obm.*') 
                     ->where('obm.nobukti', '=', $nobukti)                                 
                     ->first();     
                     //dd($total);
                 \Session::flash('message','Ada field yang kosong.....!!!');

               return view ('pageform')
              ->with('menuaktif','Input Jurnal Umum')      
              ->with('judul','Form Order Pembelian')                    
              ->with('isi','beli.orderbform')              
              
              ->with('tot',$tot)
              ->with('total',$total)
              ->with('nobukti',$nobukti) 
              ->with('tglbel',$tglbel) 
              ->with('rec',$rec);
               


            }
            DB::beginTransaction();
             try {   
                 
                    $nobukti = Input::get('nobukti'); 
                    DB::delete('delete from obm where nobukti = ?',[$nobukti]);
                    
                      
                      $jur=array
                     (        
                        
                      'tgl' => date("Y-m-d", strtotime(Input::get('tglbel'))),               
                        'nobukti'=>Input::get('nobukti'),  
                        'idpel'=>Input::get('idpel'), 
                        'idter'=>Input::get('idter'),
                        'total'=>Input::get('total'),
                        'ctt'=>Input::get('ket')
                     );
                     $idjur=DB::table('obm')->insertgetId($jur);
                     $tran=array
                     (        
                            'idstok'=>Input::get('idstok'),                           
                            'nobukti'=>Input::get('nobukti'),                              
                            'jml'=>Input::get('jml'),                          
                            'hrg'=>Input::get('hrg')
                     );
                    DB::table('obd')->insertgetId($tran);                     
                    $tot=DB::table('obd')
                     ->select(DB::raw('SUM(jml*hrg) as total')) 
                     ->groupby('obd.nobukti')
                     ->where('obd.nobukti', '=', $nobukti)                                 
                     ->first();   
                     
                     $totallll=$tot->total;     
                     
                     $ha=array
                         (        
                                'total'=>$totallll
                                 
                         );

                     DB::table('obm')->where('id',$idjur)->update($ha); 
                     
                   
                        DB::commit();
                    // all good
                   } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                  }        
             
                 $xxx= Auth::user()->nama; 
                $rec=DB::table('obm')    
                        ->leftjoin('obd', 'obd.nobukti', '=', 'obm.nobukti')
                        ->leftjoin('pel', 'pel.id', '=', 'obm.idpel')
                        ->leftjoin('stok', 'stok.id', '=', 'obd.idstok')
                        ->leftjoin('sat', 'sat.id', '=', 'stok.id')
                        ->select('obm.*','obd.id as idobd','obd.*','pel.nama',DB::raw('obd.jml*obd.hrg as st'),'stok.nama as nastok','stok.kode as kode','sat.nama as nasa')
                      ->where('obm.nobukti', '=', $nobukti)
                      ->orderby('obm.nobukti', 'desc')
                      ->get();
                    //dd($rec);

               $tot=DB::table('obd')
                     ->select(DB::raw('obd.jml*obd.hrg as total') ) 
                     ->groupby('obd.nobukti')
                     ->where('obd.nobukti', '=', $nobukti)                                 
                     ->first();   

              
               //dd($tot);              
             
             $master=DB::table('obm')
                    ->select('obm.*') 
                     ->where('obm.nobukti', '=', $nobukti)                                 
                     ->first();            
                    //dd($total);
                  
                     $nobukti=Input::get('nobukti'); 
                     $idpel=Input::get('idpel'); 
                     $tglbel=Input::get('tglbel'); 
                     $idter=Input::get('idter'); 
                     $idstok=''; 
                     $jml=Input::get('jml'); 
                     $hrg=Input::get('hrg');

                 return view ('pageform')
                  ->with('menuaktif','Input Jurnal Umum')      
                  ->with('judul','Form Order Pembelian')                    
                  ->with('isi','beli.orderbform')              
                  ->with('master',$master)
                  ->with('tot',$tot)
                  ->with('total',$totallll)
                  ->with('nobukti',$nobukti) 
                  ->with('tglbel',$tglbel) 
                  ->with('rec',$rec)
                  ->with('namauser',$xxx); 
                  return back()
                          ->with('success','Record Added successfully.');
              }


public function ceorderb(Request $request)

    {
      $nobukti =$request->nobukti;

             $rec=DB::table('obm')    
                        ->leftjoin('obd', 'obd.nobukti', '=', 'obm.nobukti')
                        ->leftjoin('pel', 'pel.id', '=', 'obm.idpel')
                        ->leftjoin('stok', 'stok.id', '=', 'obd.idstok')
                        ->leftjoin('sat', 'sat.id', '=', 'stok.id')
                        ->select('obm.*','obd.id as idobd','obd.*','pel.nama',DB::raw('obd.jml*obd.hrg as st'),'stok.nama as nastok','stok.kode as kode','sat.nama as nasa')
                      ->where('obm.nobukti', '=', $nobukti)
                      ->orderby('obm.nobukti', 'desc')
                      ->get();
                    //dd($rec);

               $tot=DB::table('obd')
                     ->select(DB::raw('obd.jml*obd.hrg as total') ) 
                     ->groupby('obd.nobukti')
                     ->where('obd.nobukti', '=', $nobukti)                                 
                     ->first();   

              
               //dd($tot);              
             
             $master=DB::table('obm')
                     ->leftjoin('pel', 'pel.id', '=', 'obm.idpel')
                     ->select('obm.*','pel.nama as nama','pel.telp') 
                     ->where('obm.nobukti', '=', $nobukti)                                 
                     ->first();  
          if ($master !=null){
               $nobukti= $master->nobukti;               
               $nama= $master->nama;
               $ctt= $master->ctt;
               $tgl= $master->tgl;
               $total= $master->total;
               $nohp= $master->telp;
       
              view()->share('items',$rec);
              view()->share('totallll',$total);
              view()->share('nobukti',$nobukti);
              view()->share('nama',$nama);
              view()->share('nohp',$nohp);
              view()->share('tgl',$tgl);
              view()->share('ket',$ctt);
             
              if($request->has('download')){
                   $pdf = PDF::loadView('beli/cefak');
                   return $pdf->download('beli/cefak.pdf');
             }
           }
            $tglbel=date("Y/m/d");
            $xxx= Auth::user()->nama; 
            return view ('pageform')
              ->with('menuaktif','Input Jurnal Umum')      
              ->with('judul','Form Order Pembelian')                    
              ->with('isi','beli.orderbform')
              ->with('tot',$tot)
              ->with('nobukti',$nobukti) 
              ->with('tglbel',$tglbel) 
              ->with('rec',$rec)
              //->with('stok',$stok)
              ->with('master',$master)
              ->with('namauser',$xxx);       

         
        return view('beli/cefak');
    }
//---------------- end Jual-----------------------------------


}