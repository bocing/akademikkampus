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
use App\Role;
use App\Mobil;
use App\Pelanggan;
use App\User;
use App\Palid;
use App\Lokasiantar;
use App\Sujal;
use App\Lokasiantarjadwal;



 
use PDF;
use File;


class MasterController extends Controller
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
   
public function celapsujal(Request $request)

    {

        $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $result=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                  ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','kursi.kursicc','kursi.kursi1','kursi.kursi2','kursi.kursi3','kursi.kursi4','kursi.kursi5','kursi.kursi6','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.valid','=',1)
                  ->where('sujal.tgl','>=',$tgl1)
                  ->where('sujal.tgl','<=',$tgl2)                      
                  ->get(); 
 
       //$total=DB::table('kaskeluard')
             //   ->select(DB::raw('SUM(jml*harga) as tot'))                 
              //   ->first(); 

        // $total= $total->tot;
 
        view()->share('items',$result);
       // view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2); 

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('bintang.lap/lapsujalpdf');
             return $pdf->download('bintang.lap/lapsujalpdf.pdf');
        }
        return view('bintang.sujal');
    }
 


public function celaprincisujal(Request $request)

    {

        $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));
        $induk=$request->induk;
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
      // echo "string:$nobel";
          $result=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                  ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','sujal.id as idjadwal',
                    'kursi.kursicc','kursi.kursi1','kursi.kursi2','kursi.kursi3',
                    'kursi.kursi4','kursi.kursi5','kursi.kursi6',
                     'kursi.idcc','kursi.id1','kursi.id2','kursi.id3',
                    'kursi.id4','kursi.id5','kursi.id6',
                    'sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.valid','=',1)
                  ->where('sujal.tgl','>=',$tgl1)
                  ->where('sujal.tgl','<=',$tgl2)                      
                  ->get(); 

       
        view()->share('items',$result);
       // view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2); 
        view()->share('induk',$induk); 

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('bintang.lap/laprincisujalpdf');
             return $pdf->download('bintang.lap/laprincisujalpdf.pdf');
        }
        return view('bintang.sujal');
    }
 
 

   public function indexlapsujal($induk){
      $xxx= Auth::user()->nama;
      $ly= Auth::user()->layout;
      $idrole= Auth::user()->rolesid;
      //dd($induk);
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
        ->with('idrole',$idrole)    
        ->with('induk',$induk)        
        ->with('judulutama','Laporan')            
        ->with('menuatas',$menuatas)        
        ->with('judul','Rekap Surat Jalan')            
        ->with('isi','bintang.lap.flsujal')            
        ->with('namauser',$xxx);   
   
    
  } 


   public function indexlaprincisujal($induk){
      $xxx= Auth::user()->nama;
      $ly= Auth::user()->layout;
      $idrole= Auth::user()->rolesid;
      //dd($induk);
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
        ->with('idrole',$idrole)    
        ->with('induk',$induk)        
        ->with('judulutama','Laporan')            
        ->with('menuatas',$menuatas)        
        ->with('judul','Rincian Surat Jalan')            
        ->with('isi','bintang.lap.flrincisujal')            
        ->with('namauser',$xxx);   
   
    
  } 
  
  public function indexrole($id){
    // $result =DB::table('member')->paginate(10);
    $result=DB::table('role')                                             
                ->select('role.*')
                ->orderby('role.id', 'asc')
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
        ->with('judulutama','Role')      
        ->with('judul',' Role')
        ->with('isi','master.role')
        ->with('namauser',$xxx); 
  } 



  public function indexpelxxx($induk){
    // $result =DB::table('member')->paginate(10);
      $xxx= Auth::user()->nama;
      $ly= Auth::user()->layout;
      $idrole= Auth::user()->rolesid;
      //dd($induk);
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
      $result=DB::table('users')                                             
                ->select('users.*')
                ->orderby('users.nama', 'asc')
                ->where('users.rolesid','=',4)
                ->get();

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
        ->with('namauser',$xxx)  
        ->with('ly',$ly)  
        ->with('induk',$induk)  
        ->with('menuatas',$menuatas)  
        ->with('idrole',$idrole)  
          ->with('menuaktif','Master Data Pelanggan')
        ->with('judulutama','Master')

        ->with('isi','bintang.pelanggan')            
        ->with('judul','Daftar Pelanggan')            
        ->with('namauser',$xxx); 
  } 

public function indexpel($induk){
    // $result =DB::table('member')->paginate(10);
      //  $sup =DB::select("select * from pel");
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;

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

 $result=DB::table('users')                                             
                ->select('users.*')
                ->orderby('users.nama', 'asc')
                ->where('users.rolesid','=',4)
                ->get();

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Mobil')   
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Pelanggan')            
          ->with('namauser',$xxx)
          ->with('isi','bintang.pelanggan')            
         ; 
    } 


public function indexuser($induk){
    // $result =DB::table('member')->paginate(10);
      //  $sup =DB::select("select * from pel");
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $tambah=1;

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

           $result=DB::table('users')                                             
                ->select('users.*','role.nama as level')
                ->join('role', 'role.id', '=', 'users.rolesid')
                ->orderby('users.nama', 'asc')
                ->where('users.rolesid','=',3)
                ->orwhere('users.rolesid','=',2)
                ->get();

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Mobil')   
          ->with('ly',$ly)
          ->with('tambah',$tambah)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Karyawan')            
          ->with('namauser',$xxx)
          ->with('isi','bintang.user')            
         ; 
    } 

 public function indexmobil($induk){
    // $result =DB::table('member')->paginate(10);
      //  $sup =DB::select("select * from pel");
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;

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


        $result=DB::table('mobil') 
                  ->leftjoin('users', 'users.id', '=', 'mobil.idsopir')
                  ->select('mobil.*','users.nama as namasopir')
                  ->get(); 

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Mobil')   
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Mobil')            
          ->with('isi','bintang.mobil')            
          ->with('judul',' Data Mobil')            
          ->with('namauser',$xxx); 
    } 



 public function indexsujal($induk){
    // $result =DB::table('member')->paginate(10);
      //  $sup =DB::select("select * from pel");
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $tambah=1;

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


        $result=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                  ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','kursi.kursicc','kursi.kursi1','kursi.kursi2','kursi.kursi3','kursi.kursi4','kursi.kursi5','kursi.kursi6','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.valid','=',0)                  
                  ->get(); 

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Mobil Dibuka')   
          ->with('ly',$ly)
          ->with('tambah',$tambah)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Surat Jalan')            
          ->with('isi','bintang.sujal')            
          ->with('judul',' Data Surat Jalan')            
          ->with('namauser',$xxx); 
    } 


 public function indexlokasi($induk){
    // $result =DB::table('member')->paginate(10);
      //  $sup =DB::select("select * from pel");
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $tambah=1;

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


            $result=DB::table('lokasiantar') 
                      ->leftjoin('darike', 'darike.id', '=', 'lokasiantar.idtujuan')
                      ->select('darike.*','lokasiantar.id as idlokasiantar','lokasiantar.nama as namalokasi')                  
                                 
                      ->get(); 

      
        return view('pagelist')
            ->with('data',$result)  
            ->with('menuaktif','Daftar Mobil Dibuka')   
            ->with('ly',$ly)
            ->with('idtujuan',0)
            ->with('tambah',$tambah)
            ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('menuatas',$menuatas)
            ->with('judulutama','Lokasi Antar')            
            ->with('isi','bintang.lokasiantar')            
            ->with('judul',' Lokasi')            
            ->with('namauser',$xxx); 
    } 


 public function carilokasi(Request $request){
    // $result =DB::table('member')->paginate(10);
      //  $sup =DB::select("select * from pel");
        $induk = $request->induk;
        $idtujuan = $request->idtujuan;
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $tambah=1;

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


            $result=DB::table('lokasiantar') 
                      ->leftjoin('darike', 'darike.id', '=', 'lokasiantar.idtujuan')
                      ->select('darike.*','lokasiantar.id as idlokasiantar','lokasiantar.nama as namalokasi')                  
                      ->where('lokasiantar.idtujuan','=',$idtujuan)           
                      ->get(); 

      
        return view('pagelist')
            ->with('data',$result)  
            ->with('menuaktif','Daftar Mobil Dibuka')   
            ->with('ly',$ly)
            ->with('tambah',$tambah)
            ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('idtujuan',$idtujuan)
            ->with('menuatas',$menuatas)
            ->with('judulutama','Lokasi Antar')            
            ->with('isi','bintang.lokasiantar')            
            ->with('judul',' Lokasi')            
            ->with('namauser',$xxx); 
    } 


 public function tiketsujal(Request $request){
        $induk=$request->induk;
        $idjadwal=$request->id;
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $tambah=1;

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

       
        $result=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                  ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','kursi.idcc','kursi.id1','kursi.id2','kursi.id3','kursi.id4','kursi.id5','kursi.id6','sujal.nosujal','darike.nama as namatujuan', 'darike1.nama as namadari')                  
                  ->where('sujal.id','=',$idjadwal)                  
                  ->get(); 

      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Mobil Dibuka')   
          ->with('ly',$ly)
          ->with('tambah',$tambah)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Surat Jalan')            
          ->with('isi','bintang.tiketsujal')            
          ->with('judul',' Cetak Tiket')            
          ->with('namauser',$xxx); 
    } 

public function deletemobil(Request $request)
        {
            $id = $request -> id;
            $data = Mobil::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }


  public function deletepel(Request $request)
        {
            $id = $request -> id;
            $data = Pelanggan::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }      

  public function deletelokasi(Request $request)
        {
            $id = $request -> id;
            $data = Lokasiantar::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }        


  public function deleteuser(Request $request)
        {
            $id = $request -> id;
            $data = Pelanggan::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }    

 public function viewmobil(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Mobil::find($id);
                //echo json_decode($info);
                //dd($info);
                return response()->json($info);
            }
        }
 public function viewpel(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Pelanggan::find($id);
                //echo json_decode($info);
                //dd($info);
                return response()->json($info);
            }
        }
 
 public function simpanpel(Request $request)
        {
          
         //$idmobil=Input::get('idmobil');
         if ($request -> tambah !=0 ) {
              $data = new Pelanggan;
              $ada=Input::file('file');  
              if($ada!=''){//cek apakah ada image atau tidak..

             foreach(Input::file('file') as $image) 
              {
                  $prod=$image->getClientOriginalName();
                  $prods=$image->getSize();
                  $prodtext=$image->getClientOriginalExtension();
                  $newfile= $image->getClientOriginalName();
                  $fullpathb='Pelanggan/'.$newfile;
                  //echo $newfile;
                  $fullpath =$image->move('Pelanggan/',$newfile);
                  //$fullpathb =$image->move('besar/',$newfile);
                  $realpath= str_replace('\\','/',$fullpath);

                 $data -> email = $request -> nohp;
                 $data -> nama = $request -> nama;
                 $data -> rolesid =4;
                 $data -> alamat = $request -> alamat;
                 $data -> password = bcrypt($request ->pass);
                
               
                  
                 $data -> foto = $realpath;
                 $data -> filename = $newfile;
                 
                 $data -> save();
                  return back()
                          ->with('success','Record Added successfully.');
                  }
                }else{
                     $data -> email = $request -> nohp;
                     $data -> nama = $request -> nama;
                     $data -> rolesid =4;
                     $data -> alamat = $request -> alamat;
                     $data -> password = bcrypt($request ->pass);
                        
                   $data -> save();
                  return back()
                          ->with('success','Record Added successfully.');
                }

          }else
          {  
          $ada=Input::file('file');  
          if($ada!=''){//cek apakah ada image atau tidak..
             foreach(Input::file('file') as $image) 
             {

              $prod=$image->getClientOriginalName();
              $prods=$image->getSize();

              $prodtext=$image->getClientOriginalExtension();
              $newfile= $image->getClientOriginalName();
              $fullpathb='Pelanggan/'.$newfile;
              //echo $newfile;
              $fullpath =$image->move('Pelanggan/',$newfile);
              //$fullpathb =$image->move('besar/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);

              

               $pro=array(               
              'email'=>Input::get('nohpe'),              
              'nama'=>Input::get('namae'),
              'password'=>bcrypt(Input::get('passe')),
              
              'rolesid'=>4,
              'foto'=>$realpath,
              'filename'=> $newfile,
              'alamat'=>Input::get('alamate')

            );

        }
      }else{
        $idpele=Input::get('idpele');
         $pro=array(               
               'email'=>Input::get('nohpe'),              
              'nama'=>Input::get('namae'),
              'password'=>bcrypt(Input::get('passe')),
              'rolesid'=>4,
              'alamat'=>Input::get('alamate')
            );
      }
            $e=DB::table('users')->where('id',$idpele)->update($pro); 

            $xxx= Auth::user()->nama;
             $induk=Input::get('induk');
            $ly= Auth::user()->layout;
            $idrole= Auth::user()->rolesid;


           $result=DB::table('users')                                             
                ->select('users.*')
                ->orderby('users.nama', 'asc')
                ->where('users.rolesid','=',4)
                ->get();
                  if ($idrole!=1) {
               $menuatas=DB::table('menu')
                    ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                    ->select('menu.*')                 
                    ->where('rolerule.idrole', '=', $idrole)  
                    ->where('rolerule.tambah', '=', 'on')  
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                  }else{
                $menuatas=DB::table('menu')              
                    ->select('menu.*')                                 
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                    }
                $tambah=1;  

                 
                return view('pageform')
                    ->with('data',$result)  
                    ->with('idrole',$idrole)  
                    ->with('menuatas',$menuatas) 
        
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('induk',$induk) 
                    ->with('isi','bintang.pelanggan') 
                    ->with('judul','Daftar Pelanggan')            
                    ->with('namauser',$xxx); 


              
          }
            
          
        }


 

 public function simpanuser(Request $request)
        {
          
         //$idmobil=Input::get('idmobil');
         if ($request -> tambah !=0 ) {
              $data = new User;
              $ada=Input::file('file');  
              if($ada!=''){//cek apakah ada image atau tidak..

             foreach(Input::file('file') as $image) 
              {
                  $prod=$image->getClientOriginalName();
                  $prods=$image->getSize();
                  $prodtext=$image->getClientOriginalExtension();
                  $newfile= $image->getClientOriginalName();
                  $fullpathb='User/'.$newfile;
                  //echo $newfile;
                  $fullpath =$image->move('User/',$newfile);
                  //$fullpathb =$image->move('besar/',$newfile);
                  $realpath= str_replace('\\','/',$fullpath);

                 $data -> email = $request -> nohp;
                 $data -> nama = $request -> nama;
                 $data -> password = bcrypt($request ->pass);
                 $data -> rolesid = $request -> level;                  
                 $data -> alamat = $request -> alamat;
               
                  
                 $data -> foto = $realpath;
                 $data -> filename = $newfile;
                 
                 $data -> save();
                  return back()
                          ->with('success','Record Added successfully.');
                  }
                }else{
                       $data -> email = $request -> nohp;
                       $data -> nama = $request -> nama;
                       $data -> password = bcrypt($request ->pass);

                       $data -> rolesid = $request -> level;                  
                       $data -> alamat = $request -> alamat;
                     
                   $data -> save();
                  return back()
                          ->with('success','Record Added successfully.');
                }

          }else
          {  
          $ada=Input::file('file');  
          if($ada!=''){//cek apakah ada image atau tidak..
             foreach(Input::file('file') as $image) 
             {

              $prod=$image->getClientOriginalName();
              $prods=$image->getSize();

              $prodtext=$image->getClientOriginalExtension();
              $newfile= $image->getClientOriginalName();
              $fullpathb='Pelanggan/'.$newfile;
              //echo $newfile;
              $fullpath =$image->move('Pelanggan/',$newfile);
              //$fullpathb =$image->move('besar/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);

              

               $pro=array(               
              'email'=>Input::get('nohpe'),              
              'nama'=>Input::get('namae'),
              'password'=>bcrypt(Input::get('passe')),
              

              'foto'=>$realpath,
              'filename'=> $newfile,
              'alamat'=>Input::get('alamate')

            );

        }
      }else{
        $idpele=Input::get('idpele');
         $pro=array(               
               'email'=>Input::get('nohpe'),              
              'nama'=>Input::get('namae'),
            
              'password'=>bcrypt(Input::get('passe')),
              
              'alamat'=>Input::get('alamate')
            );
      }
            $e=DB::table('users')->where('id',$idpele)->update($pro); 

            $xxx= Auth::user()->nama;
             $induk=Input::get('induk');
            $ly= Auth::user()->layout;
            $idrole= Auth::user()->rolesid;


           $result=DB::table('users')                                             
                ->select('users.*','role.nama as level')
                ->join('role', 'role.id', '=', 'users.rolesid')
                ->orderby('users.nama', 'asc')
                ->where('users.rolesid','=',3)
                ->get();


                  if ($idrole!=1) {
               $menuatas=DB::table('menu')
                    ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                    ->select('menu.*')                 
                    ->where('rolerule.idrole', '=', $idrole)  
                    ->where('rolerule.tambah', '=', 'on')  
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                  }else{
                $menuatas=DB::table('menu')              
                    ->select('menu.*')                                 
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                    }
                $tambah=1;  

                 
                return view('pageform')
                    ->with('data',$result)  
                    ->with('idrole',$idrole)  
                    ->with('menuatas',$menuatas) 
        
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('induk',$induk) 
                    ->with('isi','bintang.pelanggan') 
                    ->with('judul','Daftar Pelanggan')            
                    ->with('namauser',$xxx); 


              
          }
            
          
        }

 public function simpanmobil(Request $request)
        {
         $idmobil = $request -> idmobile;
         //$idmobil=Input::get('idmobil');
         if ($request -> tambah !=0 ) {
              $data = new Mobil;
              $ada=Input::file('file');  
              if($ada!=''){//cek apakah ada image atau tidak..

             foreach(Input::file('file') as $image) 
              {
                  $prod=$image->getClientOriginalName();
                  $prods=$image->getSize();
                  $prodtext=$image->getClientOriginalExtension();
                  $newfile= $image->getClientOriginalName();
                  $fullpathb='mobil/'.$newfile;
                  //echo $newfile;
                  $fullpath =$image->move('mobil/',$newfile);
                  //$fullpathb =$image->move('besar/',$newfile);
                  $realpath= str_replace('\\','/',$fullpath);

                 $data -> noplat = $request -> noplat;
                 $data -> nama = $request -> nama;
                 $data -> pemilik = $request -> pemilik;
                 $data -> idsopir = $request -> idsopir;
                 $data -> kursi = $request -> kursi;
                  
                 $data -> foto = $realpath;
                 $data -> filename = $newfile;
                 
                 $data -> save();
                  return back()
                          ->with('success','Record Added successfully.');
                  }
                }else{
                     $data -> noplat = $request -> noplat;
                     $data -> nama = $request -> nama;
                     $data -> pemilik = $request -> pemilik;
                     $data -> idsopir = $request -> idsopir;
                     $data -> kursi = $request -> kursi;
                   $data -> save();
                  return back()
                          ->with('success','Record Added successfully.');
                }

          }else
          {  
          $ada=Input::file('file');  
          if($ada!=''){//cek apakah ada image atau tidak..
             foreach(Input::file('file') as $image) 
             {

              $prod=$image->getClientOriginalName();
              $prods=$image->getSize();

              $prodtext=$image->getClientOriginalExtension();
              $newfile= $image->getClientOriginalName();
              $fullpathb='mobil/'.$newfile;
              //echo $newfile;
              $fullpath =$image->move('mobil/',$newfile);
              //$fullpathb =$image->move('besar/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);

              

               $pro=array(               
              'noplat'=>Input::get('noplat'),              
              'nama'=>Input::get('nama'),
              'pemilik'=>Input::get('pemilik'),
              'kursi'=>Input::get('kursi'),
               'foto'=>$realpath,
              'filename'=> $newfile,
              'idsopir'=>Input::get('idsopir')
              
            );

        }
      }else{
         $pro=array(               
              'noplat'=>Input::get('noplate'),              
              'nama'=>Input::get('namae'),
              'pemilik'=>Input::get('pemilike'),
              'kursi'=>Input::get('kursie'),
              'idsopir'=>Input::get('idsopire')
            );
      }
            $e=DB::table('mobil')->where('id',$idmobil)->update($pro); 
             $induk=Input::get('induk');
            $xxx= Auth::user()->nama;
            $ly= Auth::user()->layout;
            $idrole= Auth::user()->rolesid;


             $result=DB::table('mobil')    
                  ->leftjoin('users', 'users.id', '=', 'mobil.idsopir')                                      
                   
                  ->select('mobil.*','users.nama as namasopir')
                  ->orderby('mobil.noplat', 'asc')
                  ->get();
                   if ($idrole!=1) {
               $menuatas=DB::table('menu')
                    ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                    ->select('menu.*')                 
                    ->where('rolerule.idrole', '=', $idrole)  
                    ->where('rolerule.tambah', '=', 'on')  
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                  }else{
                $menuatas=DB::table('menu')              
                    ->select('menu.*')                                 
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                    }
                $tambah=1;  

                $xxx= Auth::user()->nama;
                return view('pageform')
                    ->with('data',$result)  
                    ->with('idrole',$idrole)  
                    ->with('menuatas',$menuatas) 
        
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('induk',$induk) 
                    ->with('isi','bintang.mobil') 
                    ->with('judul','Daftar Mobil')            
                    ->with('namauser',$xxx); 

              
          }
            
          
        }



 public function simpansujal(Request $request)


     {
      $induk=$request->induk;
     if ($request -> tambah !=0 ) {

        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;

              $data = new Sujal;
              
                 $pro=array(               
                    'tgl'=>date("Y-m-d", strtotime(Input::get('tgl'))),           
                    'idmobil'=>Input::get('idmobil'),
                    'nosujal'=>Input::get('nosujal'),
                    'idtujuan'=>Input::get('idtujuan'),
                    'iddari'=>Input::get('iddari'),
                    'tarif'=>Input::get('tarif'),
                    'jam'=>Input::get('jam'),
                    'idsopir'=>Input::get('idsopir')
                  );

                  
                $idjadwal=DB::table('sujal')->insertgetId($pro);
                $pro2=array(               
                    'idjadwal'=>$idjadwal
                  );
                $idjadwal=DB::table('kursi')->insertgetId($pro2);


             
      }else{

         $pro=array(               
              'tgl'=>date("Y-m-d", strtotime(Input::get('tgl'))),           
              'idmobil'=>Input::get('idmobil'),               
              'idtujuan'=>Input::get('idtujuan'),
              'iddari'=>Input::get('iddari'),
              'tarif'=>Input::get('tarif'),
              'jam'=>Input::get('jam'),
              'idsopir'=>Input::get('idsopir')
            );
    


            $e=DB::table('sujal')->where('id',$request->id)->update($pro);  
      }

        $result=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                  ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','kursi.kursicc','kursi.kursi1','kursi.kursi2','kursi.kursi3','kursi.kursi4','kursi.kursi5','kursi.kursi6','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.valid','=',0)                  
                  ->get(); 


                 $tambah=1;  

                 $xxx= Auth::user()->nama;
                 $ly= Auth::user()->layout;
                 $idrole= Auth::user()->rolesid;

                   $menuatas=DB::table('menu')              
                    ->select('menu.*')                                 
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                   
          return view('pagelist')
                    ->with('data',$result)  
                    ->with('menuaktif','Daftar Mobil Dibuka')   
                    ->with('ly',$ly)
                    ->with('tambah',$tambah)
                    ->with('idrole',$idrole)
                    ->with('induk',$induk)
                    ->with('menuatas',$menuatas)
                    ->with('judulutama','Surat Jalan')            
                    ->with('isi','bintang.sujal')            
                    ->with('judul',' Data Surat Jalan')            
                    ->with('namauser',$xxx); 
        }        

public function formmobil($induk){ 
              $iduser= Auth::user()->id;
              $xxx= Auth::user()->nama;
              $ly= Auth::user()->layout;
              $idrole= Auth::user()->rolesid;
              $tambah=1;
              //dd($iduser);
             
               

               if ($idrole!=1) {
               $menuatas=DB::table('menu')
                    ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                    ->select('menu.*')                 
                    ->where('rolerule.idrole', '=', $idrole)  
                    ->where('rolerule.tambah', '=', 'on')  
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                  }else{
                $menuatas=DB::table('menu')              
                    ->select('menu.*')                                 
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                    }

                  
              return view ('pageform')
              ->with('menuaktif','Input Jurnal Umum')      
              ->with('judul','Form Update Mobil')                    
              ->with('isi','master.formmobil')
              ->with('namauser',$xxx)              
              ->with('ly',$ly)
              ->with('tambah',$tambah)
              ->with('idrole',$idrole)
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ; 
        }


public function formsujal($induk){ 
              $iduser= Auth::user()->id;
              $xxx= Auth::user()->nama;
              $ly= Auth::user()->layout;
              $idrole= Auth::user()->rolesid;
              $tambah=1;
              $thn= date("y"); 
            $bln= date("m");
            $nomax = DB::table('sujal')
                         ->select(DB::raw('max(nosujal) as nosujal'))                     
                         ->first();

          
            $nomax0=$nomax->nosujal;
            //}

            //var_dump($nomax0);
            $nomax1 = substr($nomax0, -4);
            //echo "aaa:$nomax1";
            $nomax2 = $nomax1+1;

            $num_of_ids = 1000; //Number of "ids" to generate.
            $i = 0; //Loop counter.
            $n = 0; //"id" number piece.
             
            $l = "SJ"."-"."$bln"."$thn"."-"; //"id" letter piece.

            //while ($i <= $num_of_ids) { 
            $id = $l . sprintf("%04d", $nomax2); //Create "id". Sprintf pads the number to make it 4 digits.
            
            $nosujal=$id; 
             
              //dd($iduser);
              
               if ($idrole!=1) {
               $menuatas=DB::table('menu')
                    ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                    ->select('menu.*')                 
                    ->where('rolerule.idrole', '=', $idrole)  
                    ->where('rolerule.tambah', '=', 'on')  
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                  }else{
                $menuatas=DB::table('menu')              
                    ->select('menu.*')                                 
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                    }

                  
              return view ('pageform')
              ->with('menuaktif','Input Jurnal Umum')      
              ->with('judul','Form Update Surat Jalan')                    
              ->with('isi','bintang.formsujal')
              ->with('namauser',$xxx) 
              ->with('judulutama','Transaksi') 
              ->with('nosujal',$nosujal)                           
              ->with('ly',$ly)
              ->with('tambah',$tambah)
              ->with('idrole',$idrole)
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ; 
        }      

public function editsujal($id,$induk){ 

              $iduser= Auth::user()->id;
              $xxx= Auth::user()->nama;
              $ly= Auth::user()->layout;
              $idrole= Auth::user()->rolesid;
              $tambah=0;
              //dd($iduser);
              
               if ($idrole!=1) {
               $menuatas=DB::table('menu')
                    ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                    ->select('menu.*')                 
                    ->where('rolerule.idrole', '=', $idrole)  
                    ->where('rolerule.tambah', '=', 'on')  
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                  }else{
                $menuatas=DB::table('menu')              
                    ->select('menu.*')                                 
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                    }
             $result=DB::table('sujal')  
                  ->select( 'sujal.*')
                  ->where('id','=',$id)                  
                  ->first(); 
       
                  
              return view ('pageform')
              ->with('judulutama','Transaksi')
              ->with('judul','Form Update Surat Jalan')                    
              ->with('isi','bintang.formsujal')
              ->with('namauser',$xxx)              
              ->with('ly',$ly)
              ->with('id',$id)
              ->with('data',$result)
              ->with('tambah',$tambah)
              ->with('idrole',$idrole)
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ; 
        }        



public function validsujal($id,$induk,$total){ 

              $iduser= Auth::user()->id;
              $xxx= Auth::user()->nama;
              $ly= Auth::user()->layout;
              $idrole= Auth::user()->rolesid;
      
              //dd($iduser);
              
               if ($idrole!=1) {
               $menuatas=DB::table('menu')
                    ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                    ->select('menu.*')                 
                    ->where('rolerule.idrole', '=', $idrole)  
                    ->where('rolerule.tambah', '=', 'on')  
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                  }else{
                $menuatas=DB::table('menu')              
                    ->select('menu.*')                                 
                    ->where('menu.id_induk', '=', $induk)  

                    ->get();
                    }
             $result=DB::table('sujal')  
                  ->select( 'sujal.*')
                  ->where('id','=',$id)                  
                  ->first(); 
       
                  
              return view ('pageform')
              ->with('judulutama','Transaksi')
              ->with('judul','Form Update Surat Jalan')                    
              ->with('isi','bintang.validsujal')
              ->with('namauser',$xxx)              
              ->with('ly',$ly)
              ->with('total',$total)
              ->with('id',$id)
              ->with('data',$result)               
              ->with('idrole',$idrole)
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ; 
        }        




   public function viewrole(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Role::find($id);
                //dd($info);
                //echo json_decode($info);
                //dd($info);
                return response()->json($info);
            }
        }

  public function update(Request $request)
        {
            $id = $request -> edit_id;
            $data = Role::find($id);             
            $data -> nama = $request -> edit_nama;
          
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }      

   public function delete(Request $request)
        {
            $id = $request -> id;
            $id_induk = $request -> id_induk;
            $data = Role::find($id);
            $response = $data -> delete();
            if($response)
                 
            return back()
                    ->with('success','Record Added successfully.');
        }

 public function simpanrole(Request $request)
        {
            $data = new Role;
             
            $data -> nama = $request -> last_name;
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        } 

public function simpanlokasi(Request $request)
        {
            $data = new Lokasiantar;
            $data -> idtujuan = $request -> idtujuan; 
            $data -> nama = $request -> nama;            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }         
public function simpanlokasija(Request $request)
        {

            $iduser= Auth::user()->id;
            $idjadwal= $request -> idjadwal; 
            DB::table('lokasiantarjadwal')
            ->where('idjadwal', $idjadwal)
            ->where('idpelanggan', $iduser)
            ->delete(); 
 
            $data = new Lokasiantarjadwal;
            $data -> idjadwal = $request -> idjadwal; 
            $data -> idpelanggan = $iduser= Auth::user()->id; 
            $data -> alamatjemput = $request -> alamatjemput; 
            $data -> idlokasiantar = $request -> idlokasiantar;            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }         
public function simpanvalid(Request $request)
        {
            $id = $request -> id;
            $induk=$request -> induk;
            $total=$request -> total;
            $data = new Palid;

            $data -> idjadwal = $id;
            $data -> ban = $request -> ban;
            $data -> komisi = $request -> komisi;
            $data -> snack = $request -> snack;
            $data -> sr = $request -> sr;
            $data -> adm = $request -> adm;
            $data -> total = $total;

            
            $data -> save();

            $pro=array(               
               
              'valid'=>1,
              'total'=>$total
            );
            DB::table('sujal')->where('id',$id)->update($pro); 

            $xxx= Auth::user()->nama;
            $ly= Auth::user()->layout;
            $idrole= Auth::user()->rolesid;
            $tambah=1;

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


        $result=DB::table('sujal') 
                  ->leftjoin('users', 'users.id', '=', 'sujal.idsopir')
                  ->leftjoin('mobil', 'mobil.id', '=', 'sujal.idmobil')
                  ->leftjoin('darike', 'darike.id', '=', 'sujal.idtujuan')
                  ->leftjoin('darike as darike1' , 'darike1.id', '=', 'sujal.iddari')
                  ->leftjoin('kursi', 'kursi.idjadwal', '=', 'sujal.id')
                  ->select('mobil.noplat','users.nama as namasopir','sujal.*','kursi.kursicc','kursi.kursi1','kursi.kursi2','kursi.kursi3','kursi.kursi4','kursi.kursi5','kursi.kursi6','sujal.nosujal','darike.singkatan as namatujuan', 'darike1.singkatan as namadari')                  
                  ->where('sujal.valid','=',0)                  
                  ->get(); 

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Mobil Dibuka')   
          ->with('ly',$ly)
          ->with('tambah',$tambah)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Surat Jalan')            
          ->with('isi','bintang.sujal')            
          ->with('judul',' Data Surat Jalan')            
          ->with('namauser',$xxx); 
        }
//---------------- end Jenis-----------------------------------

}