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

    public function update(Request $request)
    {
         
    }

  public function gallery(){
     $xxx= Auth::user()->nama;
     $a= Auth::user()->rolesid;
    // var_dump($a);

    return view ('other.gallery')
    ->with('judulutama','Dashboard')            
    ->with('judul','Dashboard')
    ->with('namauser',$xxx); 

  }

//--------------------penawaran----------------------------
     public function indexmasterpenawaran(){
      // $result =DB::table('member')->paginate(10);
          $pel =DB::select("select * from pel");        
           
          $result=DB::table('tawarm')    
                    ->leftjoin('pel', 'pel.id', '=', 'tawarm.idpel')
                    ->leftjoin('taward', 'taward.notawar', '=', 'tawarm.notawar')
                    ->select('tawarm.*','pel.nama as napel',DB::raw('SUM(taward.jml*taward.harga) as total'))
                    ->groupby('tawarm.notawar')
                    ->orderby('tawarm.tgltawar', 'desc')               
                    ->get();
                     

        $xxx= Auth::user()->nama;
        return view('penawaran.indexmaster')
            ->with('data',$result)  
            ->with('menuaktif','Daftar Penawaran')  
            ->with('sup',$pel)  
            ->with('judulutama','Transaksi')            
            ->with('judul',' Penawaran')            
            ->with('namauser',$xxx); 
    } 


   public function formpenawaran(){ 
       $notawar='';
       $tgltawar='';
       $idpel='';
       $jml='';
       $ket='';
       $harga='';
       $idter='';
       $idstok='';
       $total=0;
       $tambah=true;
        
       $xxx= Auth::user()->nama; 
       //$sup =DB::select("select * from pem");           
       //$stok =DB::select("select * from stok"); 
       $rec=DB::table('taward')     //ini untuk SQL nya
                  ->leftjoin('stok', 'stok.id', '=', 'taward.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                ->select('taward.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','taward.harga as harga')
                 ->where('taward.notawar', '=', 'xxxxx')
                ->orderby('taward.notawar', 'desc')
                ->get();

        $total=DB::table('taward')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('taward.notawar', '=', $notawar)                
                ->orderby('taward.notawar', 'desc')
                ->get();      

          return view ('penawaran.isiform')
            ->with('menuaktif','Input Penawaran')      
            ->with('judul','Form Penawaran')            
           // ->with('pem',$sup)
            ->with('notawar',$notawar)
            ->with('tgltawar',$tgltawar)
            ->with('idpel',$idpel)
            ->with('idter',$idter)
            ->with('jml',$jml)
            ->with('harga',$harga)
            ->with('idstok',$idstok)
            ->with('ket',$ket)
            ->with('rec',$rec)
           // ->with('stok',$stok)
            ->with('total',$total)
            ->with('tambah',$tambah)
            ->with('namauser',$xxx); 
    }

 
      public function savepenawaran(Request $request)

        {
              $v=\Validator::make($request->all(),
            [
              'notawar'=>'required',
              'idpel'=>'required',
              'idter'=>'required',
              'tgltawar'=>'required',
              'idstok'=>'required',
              'jml'=>'required',
              'harga'=>'required',
            ]);
            if ($v->fails())
            {

               $tambah=true;
               $tgltawar=Input::get('tgltawar'); 
               $idpel=Input::get('idpel'); 
               $idstok=Input::get('idstok'); 
               $jml=Input::get('jml'); 
               $harga=Input::get('harga'); 
               $idter=Input::get('idter'); 
               $ket=Input::get('ket');        
               $notawar=Input::get('notawar'); 
               $xxx= Auth::user()->nama; 
               $pel =DB::select("select * from pel");           
               $stok =DB::select("select * from stok");
               $mk='K' ;
              $rec=DB::table('taward')    
                        ->leftjoin('stok', 'stok.id', '=', 'taward.idstok')
                        ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                      ->select('taward.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','taward.harga as harga')
                      ->where('taward.notawar', '=', $notawar)
                      ->orderby('taward.notawar', 'desc')
                      ->get();

               $total=DB::table('taward')
                      ->select(DB::raw('SUM(jml*harga) as total'))                 
                      ->where('taward.notawar', '=', $notawar)
                      ->orderby('taward.notawar')
                      ->orderby('taward.notawar', 'desc')
                      ->get();        
                           
                return view ('penawaran.isiform')
                  ->with('menuaktif','Transaksi Penawaran')      
                  ->with('judul','Form Penawaran')            
                  ->with('pel',$pel)
                  ->with('notawar',$notawar)
                  ->with('tglbel',$tgltawar)
                  ->with('idter',$idter)
                  ->with('idpel',$idpel)
                  ->with('idstok',$idstok)
                  ->with('harga',$harga)
                  ->with('jml',$jml)
                  ->with('ket',$ket)
                  ->with('stok',$stok)
                  ->with('rec',$rec)
                  ->with('total',$total)
                  ->with('tambah',$tambah)
                  ->with('namauser',$xxx); 
                  return redirect()->back()->withErrors($v->errors());


            }
             DB::beginTransaction();

                try {   
                //$id=$request->nobel;
                    $notawar = Input::get('notawar'); 
                    DB::delete('delete from tawarm where notawar = ?',[$notawar]);
                    
               
                      $pro=array
                     (        
                            'tgltawar'=>Input::get('tgltawar'),     
                            'notawar'=>Input::get('notawar'), 
                            'idpel'=>Input::get('idpel'), 
                            'idter'=>Input::get('idter'), 
                            'ket'=>Input::get('ket')             
                             
                     );
                     $idmar2=DB::table('tawarm')->insertgetId($pro);
                   
                    

                     $pro2=array
                     (        
                            'idstok'=>Input::get('idstok'),                           
                            'notawar'=>Input::get('notawar'), 
                            'jml'=>Input::get('jml'),                          
                            'kode'=>'P',                            
                            'harga'=>Input::get('harga')             
                             
                     );
                     DB::table('taward')->insertgetId($pro2);
                     $idstok=Input::get('idstok'); 
                     $email = Vhrgrata::find($idstok);    
                     $hrgrata= $email->hrgrata;

                     $ha=array
                     (        
                                                              
                            'hrgakhir'=>Input::get('harga'),             
                            'hrgrata'=>$hrgrata            
                             
                     );

                     $idstok=Input::get('idstok'); 
                     $ee=DB::table('stok')->where('id',$idstok)->update($ha); 
                        DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }        
             
             $xxx= Auth::user()->nama; 
             $pel =DB::select("select * from pel");           
             $stok =DB::select("select * from stok"); 
             $rec=DB::table('taward')    
                        ->leftjoin('stok', 'stok.id', '=', 'taward.idstok')
                        ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                      ->select('taward.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','taward.harga as harga')
                      ->where('taward.notawar', '=', $notawar)
                      ->orderby('taward.notawar', 'desc')
                      ->get();
              
              $total=DB::table('taward')
                      ->select(DB::raw('SUM(jml*harga) as total'))                 
                      ->where('taward.notawar', '=', $notawar)
                      ->orderby('taward.notawar')
                      ->orderby('taward.notawar', 'desc')
                      ->get();        
                  
            
             $tambah=true;
             $tgltawar=Input::get('tgltawar'); 
             $idpel=Input::get('idpel'); 
             $idstok=Input::get('idstok'); 
             $jml=Input::get('jml'); 
             $harga=Input::get('harga'); 
             $idter=Input::get('idter'); 
             $ket=Input::get('ket');        
             $notawar=Input::get('notawar'); 
             $xxx= Auth::user()->nama; 
             $pel =DB::select("select * from pel");           
             $stok =DB::select("select * from stok"); 

            return view ('penawaran.isiform')
              ->with('menuaktif','Transaksi Penawaran')      
              ->with('judul','Form Penawaran')            
              ->with('pel',$pel)
              ->with('notawar',$notawar)
              ->with('tgltawar',$tgltawar)
              ->with('idter',$idter)
              ->with('idpel',$idpel)
              ->with('idstok',$idstok)
              ->with('harga',$harga)
              ->with('jml',$jml)
              ->with('ket',$ket)
              ->with('stok',$stok)
              ->with('rec',$rec)
              ->with('tambah',$tambah)
              ->with('total',$total)
              ->with('namauser',$xxx); 


                  return back()
                          ->with('success','Record Added successfully.');
              }


//--------------------end penawaran----------------------------

//=======================Jenis =================================
          
        public function indexjenis(){
          // $result =DB::table('member')->paginate(10);
            $result=DB::table('jenis')                                             
                      ->select('jenis.*')
                      ->orderby('jenis.nama', 'asc')
                      ->get();

          $xxx= Auth::user()->nama;
          return view('pagelist')
              ->with('data',$result)
             
              ->with('judulutama','Data Master')              
              ->with('judul',' Jenis')
              ->with('isi','master.jenis')
              ->with('namauser',$xxx); 
        } 

         public function viewjenis(Request $request)
              {
                  if($request->ajax()){
                      $id = $request->id;
                      $info = Jenis::find($id);
                      //echo json_decode($info);
                      return response()->json($info);
                  }
              }

        public function updatejenis(Request $request)
              {
                  $id = $request -> edit_id;
                  $data = Jenis::find($id);             
                  $data -> nama = $request -> edit_nama;
                
                  $data -> save();
                  return back()
                          ->with('success','Record Updated successfully.');
              }      

         public function deletejenis(Request $request)
              {
                  $id = $request -> id;
                  $data = Jenis::find($id);
                  $response = $data -> delete();
                  if($response)
                      echo "Record Deleted successfully.";
                  else
                      echo "There was a problem. Please try again later.";
              }

       public function simpanjenis(Request $request)
              {
                  $data = new Jenis;
                   
                  $data -> nama = $request -> last_name;
                  
                  $data -> save();
                  return back()
                          ->with('success','Record Added successfully.');
              }
      public function simpanseting(Request $request)
              {
                  
                  $data = Seting::find(1);             
                   
                  $data -> np = $request -> np;
                  $data -> alamat = $request -> alamat;
                  $data -> telp = $request -> telp;
                  $data -> email = $request -> email;
                  $data -> iddir = $request -> iddir;
                  $data -> idkasir = $request -> idkasir;
                  $data -> idbpb = $request -> idbpb;
                  $data -> idbpj = $request -> idbpj;
                  $data -> idbpb = $request -> idbpb;
                  $data -> idbku = $request -> idbku;
                  $data -> idkk = $request -> idkk;
                  $data -> idkm = $request -> idkm;
                  $data -> idhk = $request -> idhk;
                  $data -> idpk = $request -> idpk;
                   
                  $data -> save();
                  return back()
                          ->with('success','Record Updated successfully.');


              }
//=========================== end Jenis =====================================



//-------------------------Satuan-------------------------------
    
  public function indexsatuan(){
   
      $result=DB::table('sat')                                             
                ->select('sat.*')
                ->orderby('sat.nama', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    $menuaktif= "Daftar Satuan";
    return view('pagelist')
        ->with('data',$result)  
        ->with('menuaktif',$menuaktif)  
        ->with('judulutama','Master')  
        ->with('judul','Daftar Satuan')            
        ->with('isi','master.satuan')            
        ->with('namauser',$xxx); 
  } 

 public function viewsatuan(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Satuan::find($id);
                //echo json_decode($info);
                return response()->json($info);
            }
        }

  public function formsatuan(){ 
      $xxx= Auth::user()->nama;         
      return view ('satuan.form')
        ->with('judul','Form Satuan')            
        ->with('namauser',$xxx); ;
  }


  public function simpansatuan(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'nama'=>'required',
         
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
                                
              'nama'=>Input::get('nama'),
             
       );
       $idmar=DB::table('sat')->insertgetId($pro2);

      
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('satuan');
  }
 
 
 
  
  public function updatesatuan(Request $request)
        {
            $id = $request -> edit_id;
            $data = Satuan::find($id);             
            $data -> nama = $request -> edit_nama;
          
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }     


   public function deletesatuan(Request $request)
        {
            $id = $request -> id;
            $data = Satuan::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }

//---------------- end Satuan-----------------------------------





//-------------------------Kategori-------------------------------
    
  public function indexkate(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('kate')                                             
                ->select('kate.*')
                ->orderby('kate.nama', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
         ->with('menuaktif','Master Datas Kategori')
        ->with('judulutama','Master')              
        ->with('judul','Daftar Kategori')            
        ->with('isi','master.kate')            
        ->with('namauser',$xxx); 
  } 

   public function viewkate(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Kate::find($id);
                //echo json_decode($info);
                return response()->json($info);
            }
        }

  public function updatekate(Request $request)
        {
            $id = $request -> edit_id;
            $data = Kate::find($id);             
            $data -> nama = $request -> edit_nama;
          
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }      

   public function deletekate(Request $request)
        {
            $id = $request -> id;
            $data = Kate::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }



 public function simpankate(Request $request)
        {
            $data = new kate;
             
            $data -> nama = $request -> last_name;
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }
//---------------- end Kate-----------------------------------


//-------------------------Termin-------------------------------
    
  public function indexter(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('termin')                                             
                ->select('termin.*')
                ->orderby('termin.kode', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
         ->with('menuaktif','Master Data Termin')
        ->with('judulutama','Master')              
        ->with('judul','Daftar Termin')            
        ->with('isi','master.termin')            
        ->with('namauser',$xxx); 
  } 

   public function viewter(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Ter::find($id);
                //echo json_decode($info);
                return response()->json($info);
            }
        }

  public function updateter(Request $request)
        {
            $id = $request -> ide;
            $data = Ter::find($id);             
            $data -> kode = $request -> kodee;
            $data -> nama = $request -> namae;
          
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }      

   public function deleteter(Request $request)
        {
            $id = $request -> id;
            $data = Ter::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }



 public function simpanter(Request $request)
        {
            $data = new Ter;
             
            $data -> nama = $request -> nama;
            $data -> kode = $request -> kode;
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }

//---------------- end Kate-----------------------------------



//-------------------------Mekanik-------------------------------
        
      public function indexmek(){
        // $result =DB::table('member')->paginate(10);
          $result=DB::table('mek')                                             
                    ->select('mek.*')
                    ->where('mek.mekanik','=',true)
                    ->orderby('mek.nama', 'asc')
                    ->get();

        $xxx= Auth::user()->nama;
        return view('pagelist')
            ->with('data',$result)  
             ->with('menuaktif','Master Data Tekhnisi')
            ->with('judulutama','Master')              
            ->with('isi','master.tekhnisi')              
            ->with('judul','Daftar Tekhnisi')            
            ->with('namauser',$xxx); 
      } 


      public function indexkar(){
        // $result =DB::table('member')->paginate(10);
          $result=DB::table('mek')                                             
                    ->select('mek.*')               
                    ->orderby('mek.nama', 'asc')
                    ->get();

        $xxx= Auth::user()->nama;
        return view('pagelist')
            ->with('data',$result)  
             ->with('menuaktif','Master Data Karyawan')
            ->with('judulutama','Master')              
            ->with('isi','master.karyawan')              
            ->with('judul','Daftar Karyawan')            
            ->with('namauser',$xxx); 
      } 

       public function viewmek(Request $request)
            {
                if($request->ajax()){
                    $id = $request->id;
                    $info = Mek::find($id);
                    //echo json_decode($info);
                    return response()->json($info);
                }
            }

      public function updatemek(Request $request)
            {
                $id = $request -> ide;
                $data = Mek::find($id);             
                $data -> nama = $request    -> namae;
                $data -> alamat = $request  -> alamate;
                $data -> telp = $request    -> telpe;
                $data -> pinbb =  $request   -> pinbbe;
                 
                $data -> save();
                return back()
                        ->with('success','Record Updated successfully.');
            }         

       public function deletemek(Request $request)
            {
                $id = $request -> id;
                $data = Mek::find($id);
                $response = $data -> delete();
                if($response)
                    echo "Record Deleted successfully.";
                else
                    echo "There was a problem. Please try again later.";
            }



     public function simpanmek(Request $request)
            {
                $data = new Mek;
                 
                $data -> nama = $request -> nama;           
                $data -> alamat = $request -> alamat;
                $data -> telp = $request -> telp;
                $data -> pinbb = $request -> pin;
                $data -> mekanik = 1;
               

                
                $data -> save();
                return back()
                        ->with('success','Record Added successfully.');
            }


    public function simpankar(Request $request)
            {
                $data = new Mek;
                 
                $data -> nama = $request -> nama;           
                $data -> alamat = $request -> alamat;
                $data -> telp = $request -> telp;
                $data -> pinbb = $request -> pin;
                $data -> mekanik = 0;

                
                $data -> save();
                return back()
                        ->with('success','Record Added successfully.');
            }
//---------------- end Kate-----------------------------------


//-------------------------Pemasok-------------------------------
   
  public function indexpem(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('pem')                                             
                ->select('pem.*')
                ->orderby('pem.nama', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('pagelist')
      
        ->with('data',$result)  
        ->with('judulutama','Master')        
        ->with('judul','Daftar Pemasok')            
        ->with('isi','master.pemasok')            
        ->with('namauser',$xxx); 
  } 


   public function viewpem(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Pem::find($id);
                //echo json_decode($info);
                return response()->json($info);
            }
        }

  public function updatepem(Request $request)
        {
            $id = $request -> ide;
            $data = Pem::find($id);             
            $data -> nama = $request -> namae;
             $data -> alamat = $request -> alamate;
              $data -> telp = $request -> telpe;
               $data -> pinbb = $request -> pinbbe;
                $data -> kontak = $request -> kontake;


          
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }      

   public function deletepem(Request $request)
        {
            $id = $request -> id;
            $data = Pem::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }

 public function simpanpem(Request $request)
        {
            $data = new Pem;
             
            $data -> nama = $request -> nama;
            $data -> kontak = $request -> kontak;
            $data -> alamat = $request -> alamat;
            $data -> telp = $request -> telp;
            $data -> pinbb = $request -> pin;

            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }
//---------------- end Pemasok-----------------------------------


//-------------------------Pelanggan-------------------------------
    

  public function formpel($induk){
    // $result =DB::table('member')->paginate(10);
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
      

    $xxx= Auth::user()->nama;
    return view('pageform')
       
        ->with('namauser',$xxx)  
        ->with('ly',$ly)  
        ->with('tambah',$tambah)  
        ->with('induk',$induk)  
        ->with('menuatas',$menuatas)  
        ->with('idrole',$idrole)  
          ->with('menuaktif','Master Data Pelanggan')
        ->with('judulutama','Master')

        ->with('isi','master.formpel')            
        ->with('judul','Form Pelanggan')            
        ->with('namauser',$xxx); 
  } 

   public function viewpel(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Pel::find($id);
                //echo json_decode($info);
                return response()->json($info);
            }
        }

   public function deletepel(Request $request)
        {
            $id = $request -> id;
            $data = Pel::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }

 public function simpanpel(Request $request)
        {
            $data = new User;
            $data -> nama = $request -> nama;             
            $data -> alamat = $request -> alamat;
            $data -> email = $request -> telp;
            $data -> rolesid =4;
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }
//---------------- end Pelangan-----------------------------------



//-------------------------Stok-------------------------------
    
  public function indexstok(){
    // $result =DB::table('member')->paginate(10);
      

      $result=DB::table('stok')    
                  //->leftjoin('jenis', 'jenis.id', '=', 'stok.jenid')                                      
                  //->leftjoin('sat', 'sat.id', '=', 'stok.satid')                                      
                  //->leftjoin('kate', 'kate.id', '=', 'stok.katid')  
                  ->leftjoin('departemen', 'departemen.id', '=', 'stok.iddep')  
                  ->leftjoin('pem', 'pem.id', '=', 'stok.pemid')                                      
                  //->leftjoin('vbelirata', 'vbelirata.idstok', '=', 'stok.id')                                                       
                  //->select('stok.*','sat.nama as nasa', 'kate.nama as naka','pem.nama as nasok','jenis.nama as naje','stok.hrgakhir')
                  ->select('stok.*','departemen.nadep','pem.nama as nasok','stok.hrgakhir')
                  ->orderby('stok.nama', 'asc')                                            
                  ->get();

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
        ->with('menuaktif','Master Data Barang') 
        ->with('judulutama','Master') 
        ->with('judul','Daftar Stok')            
        ->with('isi','master.stok')
        ->with('namauser',$xxx); 
  } 

  public function indexstokfo(){
    // $result =DB::table('member')->paginate(10);
      

      $result=DB::table('stok')    
                  ->leftjoin('jenis', 'jenis.id', '=', 'stok.jenid')                                      
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')                                      
                  ->leftjoin('kate', 'kate.id', '=', 'stok.katid')  
                  ->leftjoin('pem', 'pem.id', '=', 'stok.pemid')                                      
                  //->leftjoin('vbelirata', 'vbelirata.idstok', '=', 'stok.id')                                                       
                  ->select('stok.*','sat.nama as nasa', 'kate.nama as naka','pem.nama as nasok','jenis.nama as naje','stok.hrgakhir')
                  ->orderby('stok.kode', 'asc')                                            
                  ->get();

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
        ->with('menuaktif','Master Data Barang dan Foto') 
        ->with('judulutama','Master') 
        ->with('judul','Daftar Stok Dan Foto')            
        ->with('isi','master.stokfoto') 
        ->with('namauser',$xxx); 
  } 
 public function editstok($idstok)
         
        {
            $xxx= Auth::user()->nama;
            $tambah=0;
            //$nobel = $request -> nobel;                         
            $rec=DB::table('stok')                       
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                  ->leftjoin('kate', 'kate.id', '=', 'stok.satid')
                  ->leftjoin('jenis', 'jenis.id', '=', 'stok.satid')
                  ->select('stok.*')
                  ->where('stok.id', '=', $idstok)                
                  ->get();
                  //echo "string:$rec";
            
                 return view ('pageform')
                  ->with('menuaktif','Edit')      
                  ->with('judul','Form Edit Stok')
                  ->with('tambah',$tambah)      
                   ->with('isi','master.stokform')                                              
                  ->with('namauser',$xxx)
                  ->with('rec',$rec);
             
        }       


  public function updatepel(Request $request)
        {

            $id = $request -> id;
            $data = User::find($id);             
            $data -> nama = $request -> nama;
            $data -> alamat = $request -> alamat;              
            $data -> email = $request -> telp;
            $data -> save();
              
            $xxx= Auth::user()->nama;
            $induk = $request ->induk;
           
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
        ->with('namauser',$xxx)  
        ->with('ly',$ly)  
        ->with('induk',$induk)  
        ->with('menuatas',$menuatas)  
        ->with('idrole',$idrole) 
        ->with('isi','master.pel')            
        ->with('judul','Daftar Pelanggan')            
        ->with('namauser',$xxx); 
        }      

public function editpel($idstok,$induk)
         
        {
            $xxx= Auth::user()->nama;
            $ly= Auth::user()->layout;
            $idrole= Auth::user()->rolesid;
            $tambah=0;

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
                ->where('users.id','=',$idstok)
                ->first();
                  //echo "string:$rec";
            
                 return view ('pageform')
                  ->with('menuaktif','Edit')      
                  ->with('ly',$ly)     
                  ->with('menuatas',$menuatas)     
                  ->with('idrole',$idrole)      
                  ->with('namauser',$xxx)       
                  ->with('judul','Form Edit Pelanggan')
                  ->with('tambah',$tambah)      
                  ->with('id',$idstok)   
                  ->with('induk',$induk)   
                  ->with('isi','master.formeditpel')                                              
                  ->with('namauser',$xxx)
                  ->with('rec',$result);
             
        }              


   public function viewstok(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Stok::find($id);
                //echo json_decode($info);

                return response()->json($info);
            }
        }
 
      

  public function updatestok(Request $request)
        {
            $id = $request -> ide;
            $data = Stok::find($id);             
            $data -> kode =  $request -> kodee;
            $data -> satid = $request -> sat;
            $data -> katid = $request -> kat;
            $data -> pemid = $request -> pem;
            $data -> jenid = $request -> jen;
            $data -> nama =  $request -> namae;
                
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }      

   public function deletestok(Request $request)
        {
            $id = $request -> id;
            $data = Stok::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }

 public function simpanstok(Request $request)
        {
          if ($request -> tambah !=0 ) {

              $data = new Stok;
              $ada=Input::file('file');  
              if($ada!=''){//cek apakah ada image atau tidak..

             foreach(Input::file('file') as $image) 
              {
                  $prod=$image->getClientOriginalName();
                  $prods=$image->getSize();
                  $prodtext=$image->getClientOriginalExtension();
                  $newfile= $image->getClientOriginalName();
                  $fullpathb='besar/'.$newfile;
                  //echo $newfile;
                  $fullpath =$image->move('fotostok/',$newfile);
                  //$fullpathb =$image->move('besar/',$newfile);
                  $realpath= str_replace('\\','/',$fullpath);

                 $data -> kode = $request -> kode;
                 $data -> iddep = $request -> dep;
                 $data -> satid = $request -> sat;
                 $data -> katid = $request -> kat;
                 $data -> pemid = $request -> pem;
                 $data -> jenid = $request -> jen;
                 $data -> nama = $request -> nama;
                 $data -> hrgjual = $request -> hrgjual;
                 $data -> hrgrata = $request -> hrgrata;
                 $data -> foto = $realpath;
                 $data -> filename = $newfile;
                 
                 $data -> save();
                  return back()
                          ->with('success','Record Added successfully.');
                  }
                }else{
                   $data -> kode = $request -> kode;
                   $data -> iddep = $request -> dep;
                   $data -> satid = $request -> sat;
                   $data -> katid = $request -> kat;
                   $data -> pemid = $request -> pem;
                   $data -> jenid = $request -> jen;
                   $data -> nama = $request -> nama;
                   $data -> hrgjual = $request -> hrgjual;
                   $data -> hrgrata = $request -> hrgrata;
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
              $fullpathb='besar/'.$newfile;
              //echo $newfile;
              $fullpath =$image->move('fotostok/',$newfile);
              //$fullpathb =$image->move('besar/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);

              

               $pro=array(               
              'kode'=>Input::get('kode'),
              'iddep'=>Input::get('dep'),
              'nama'=>Input::get('nama'),
              'jenid'=>Input::get('jen'),
              'satid'=>Input::get('sat'),
              'katid'=>Input::get('kat'),
              'pemid'=>Input::get('pem'),
              'foto'=>$realpath,
              'filename'=>$newfile,
              'hrgjual'=>Input::get('hrgjual'),
              'hrgrata'=>Input::get('hrgrata')

            );

        }
      }else{
         $pro=array(               
              'kode'=>Input::get('kode'),
              'iddep'=>Input::get('dep'),
              'nama'=>Input::get('nama'),
              'jenid'=>Input::get('jen'),
              'satid'=>Input::get('sat'),
              'katid'=>Input::get('kat'),
              'pemid'=>Input::get('pem'),              
              'hrgjual'=>Input::get('hrgjual'),
              'hrgrata'=>Input::get('hrgrata')

            );
      }


            $e=DB::table('stok')->where('kode',$request->kode)->update($pro); 




             $result=DB::table('stok')    
                  ->leftjoin('jenis', 'jenis.id', '=', 'stok.jenid')                                      
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')                                      
                  ->leftjoin('kate', 'kate.id', '=', 'stok.katid')  
                  ->leftjoin('pem', 'pem.id', '=', 'stok.pemid')                                      
                  ->select('stok.*','sat.nama as nasa', 'kate.nama as naka','pem.nama as nasok','jenis.nama as naje','stok.hrgakhir')
                  ->orderby('stok.nama', 'asc')
                  ->get();
                $tambah=1;  
                $xxx= Auth::user()->nama;
                return view('pageform')
                    ->with('data',$result)  
                    ->with('menuaktif','Master Data Barang') 
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('isi','master.stokform') 
                    ->with('judul','Daftar Stok')            
                    ->with('namauser',$xxx); 


              
          }
            
          
        }
  public function formbarang(){
          $tambah=1;
           $xxx= Auth::user()->nama;
          return view ('pageform')
                  ->with('menuaktif','Input Stok')      
                  ->with('judul','Form Pembelian')                  
                  ->with('isi','master.stokform')                  
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
  }
        
//---------------- end Stok-----------------------------------



//==================================beliiiiiii==========================================
    
  public function indexbelixxxx(){
    // $result =DB::table('member')->paginate(10);
      $sup =DB::select("select * from pem");        
       
      $result=DB::table('belim')    
                  ->leftjoin('pem', 'pem.id', '=', 'belim.idsup')                                       
                  ->join('belid', 'belid.id', '=', 'belim.id')
                ->select('belim.*','pem.nama as napem','belid.kode','belid.jml','belid.harga')
                ->orderby('belim.tglbel', 'desc')
                ->paginate(10);

   

    $sum = DB::table('belid')
                ->select('belid.*', DB::raw('SUM(jml * harga) as total'))
                ->groupBy('nobel')                
                ->get();

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
        ->with('sup',$sup)  
        ->with('sum',$sum)  
        ->with('judulutama','Master')            
        ->with('isi','transaksi.pembelian')            
        ->with('judul','Master Detail Pembelian')
        ->with('namauser',$xxx); 
  } 


   public function indexbeli(){
    // $result =DB::table('member')->paginate(10);
      $sup =DB::select("select * from pem");        
       
      $result=DB::table('belim')    
                ->leftjoin('pem', 'pem.id', '=', 'belim.idsup')
                ->leftjoin('belid', 'belid.nobel', '=', 'belim.nobel')
                ->select('belim.*','pem.nama as napem',DB::raw('SUM(belid.jml*belid.harga) as total'))
                ->groupby('belim.nobel')
                ->orderby('belim.tglbel', 'desc')               
                ->get();
                 

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
        ->with('menuaktif','Daftar Pembelian')  
        ->with('sup',$sup)  
        ->with('judulutama','Transaksi')            
        ->with('isi','transaksi.pembelian')            
        ->with('judul',' Pembelian')            
        ->with('namauser',$xxx); 
  } 

   public function viewbeli(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Stok::find($id);
                //echo json_decode($info);
                return response()->json($info);
            }
        }
 
  public function formbeli(){ 
       $nobel='';
       $tglbel='';
       $idsup='';
       $jml='';
       $ket='';
       $harga='';
       $idter='';
       $idstok='';
       $total=0;
       $tambah=true;
       $tglbel='';
       $xxx= Auth::user()->nama; 
       //$sup =DB::select("select * from pem");           
       //$stok =DB::select("select * from stok"); 
       $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                 ->where('belid.nobel', '=', 'xxxxx')
                ->orderby('belid.nobel', 'desc')
                ->get();

        $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('belid.nobel', '=', $nobel)                
                ->orderby('belid.nobel', 'desc')
                ->get();      

      return view ('pageform')
        ->with('menuaktif','Input Pembelian')      
        ->with('judul','Form Pembelian')            
        ->with('judulutama','Transaksi Pembelian')            
        ->with('isi','transaksi.beliform')            
       // ->with('pem',$sup)
        ->with('nobel',$nobel)
        ->with('tglbel',$tglbel)
        ->with('idsup',$idsup)
        ->with('idter',$idter)
        ->with('jml',$jml)
        ->with('harga',$harga)
        ->with('idstok',$idstok)
        ->with('ket',$ket)
        ->with('data',$rec)
       // ->with('stok',$stok)
        ->with('total',$total)
        ->with('tambah',$tambah)
        ->with('namauser',$xxx); 
  }
  public function updatebeli(Request $request)
        {
            $id = $request -> ide;
            $data = Stok::find($id);             
            $data -> kode =  $request -> kodee;
            $data -> satid = $request -> sat;
            $data -> katid = $request -> kat;
            $data -> pemid = $request -> pem;
            $data -> jenid = $request -> jen;
            $data -> nama =  $request -> namae;
                
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }      

   public function carisup(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('pem')
                ->where('pem.nama', 'like', "%$cari%")                                    
                ->select('pem.*')
                ->orderby('pem.id', 'asc')
                ->get();
                echo  json_encode($db);
   }


public function cariakun(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('akun')
                ->where('akun.nakun', 'like', "%$cari%")                                    
                ->where('akun.ai', '=', "A")                                    
                ->select('akun.*')
                ->orderby('akun.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

   public function cariakuninduk(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('akun')
                ->where('akun.nakun', 'like', "%$cari%")                                    
                ->where('akun.ai', '=', "I")                                    
                ->select('akun.*')
                ->orderby('akun.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

   public function cariakunanak(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('akun')
                ->where('akun.nakun', 'like', "%$cari%")                                    
                ->where('akun.ai', '=', "A")                                    
                ->select('akun.*')
                ->orderby('akun.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

   

   public function carijen(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('jenis')
                ->where('jenis.nama', 'like', "%$cari%")                                    
                ->select('jenis.*')
                ->orderby('jenis.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

   public function carisat(Request $request)     
   {
      
      $cari = $request ->q; 
      $db=DB::table('sat')
                ->where('sat.nama', 'like', "%$cari%")                                    
                ->select('sat.*')
                ->orderby('sat.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

    public function carirole(Request $request)     
   {
      
      $cari = $request ->q; 
      $db=DB::table('role')
                ->where('role.nama', 'like', "%$cari%")                                    
                ->select('role.*')
                ->orderby('role.id', 'asc')
                ->get();

                echo  json_encode($db);
   }

    public function carikat(Request $request)     
   {
      
      $cari = $request ->q; 
      $db=DB::table('kate')
                ->where('nama', 'like', "%$cari%")                                    
                ->select('*')
                ->orderby('id', 'asc')
                ->get();
                echo  json_encode($db);
   }






   public function caripel(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('pel')
                ->where('pel.nama', 'like', "%$cari%")                                    
                ->select('pel.*')
                ->orderby('pel.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

   public function carisopir(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('users')
                ->where('users.nama', 'like', "%$cari%")                                    
                ->select('users.id','users.nama')
                ->where('users.rolesid','=',3)
                ->orderby('users.nama', 'asc')
                ->get();
                echo  json_encode($db);
   }

    public function carimobil(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('mobil')
                ->where('mobil.noplat', 'like', "%$cari%")                                    
                ->select('mobil.id','mobil.nama','mobil.noplat')                
                ->orderby('mobil.noplat', 'asc')
                ->get();
                echo  json_encode($db);
   }

     public function caritujuan(Request $request)     
   {
      
      $cari = $request ->q; 
      $db=DB::table('tujuan')
                ->where('tujuan.nama', 'like', "%$cari%")                                    
                ->select('tujuan.*')                
                ->orderby('tujuan.nama', 'asc')
                ->get();
                echo  json_encode($db);
   }
  

 public function carimek(Request $request)     
   {
      
     $cari = $request ->q; 
     $db=DB::table('mek')
                ->where('mek.nama', 'like', "%$cari%")                                    
                ->where('mek.mek', '=', true)                                    
                ->select('mek.*')
                ->orderby('mek.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

   public function carikar(Request $request)     
   {
      
     $cari = $request ->q; 
     $db=DB::table('mek')
                ->where('mek.nama', 'like', "%$cari%")                                    
                                          
                ->select('mek.*')
                ->orderby('mek.id', 'asc')
                ->get();
                echo  json_encode($db);
   }


public function caribarang(Request $request)     
   {
      
     $cari = $request ->q; 
     $db=DB::table('stok')
                ->where('stok.nama', 'like', "%$cari%")                                    
                ->select('stok.*')
                ->orderby('stok.nama', 'asc')
                ->get();
                echo  json_encode($db);
   }

   public function caritermin(Request $request)     
   {
      
     $cari = $request ->q; 
     $db=DB::table('termin')
                ->where('termin.nama', 'like', "%$cari%")                                    
                ->select('termin.*')
                ->orderby('termin.id', 'asc')
                ->get();
                echo  json_encode($db);
   }

    

   public function deletebeli(Request $request)
        {
            $id = $request -> id;
            $data = Stok::find($id);
            $response = $data -> delete();
            if($response)
                echo "Record Deleted successfully.";
            else
                echo "There was a problem. Please try again later.";
        }

 public function savebeli(Request $request)

  {
        $v=\Validator::make($request->all(),
      [
        'nobel'=>'required',
        'idsup'=>'required',
        'idter'=>'required',
        'tglbel'=>'required',
        'idstok'=>'required',
        'jml'=>'required',
        'harga'=>'required',
      ]);
      if ($v->fails())
      {

        $tambah=true;
         $tglbel=Input::get('tglbel'); 
         $idsup=Input::get('idsup'); 
         $idstok=Input::get('idstok'); 
         $jml=Input::get('jml'); 
         $harga=Input::get('harga'); 
         $idter=Input::get('idter'); 
         $ket=Input::get('ket');        
         $nobel=Input::get('nobel'); 
         $xxx= Auth::user()->nama; 
         $sup =DB::select("select * from pem");           
         $stok =DB::select("select * from stok");
         $mk='K' ;
         $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                ->where('belid.nobel', '=', $nobel)
                ->orderby('belid.nobel', 'desc')
                ->get();

         $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual')
                ->orderby('belid.nojual', 'desc')
                ->get();        
                     
          return view ('pageform')
            ->with('menuaktif','Transaksi Pembelian')      
            ->with('judul','Form Pembelian')            
            ->with('judulutama','Transaksi')       
            ->with('isi','transaksi.beliform')        
            ->with('pem',$sup)
            ->with('nobel',$nobel)
            ->with('tglbel',$tglbel)
            ->with('idter',$idter)
            ->with('idsup',$idsup)
            ->with('idstok',$idstok)
            ->with('harga',$harga)
            ->with('jml',$jml)
            ->with('ket',$ket)
            ->with('stok',$stok)
            ->with('data',$rec)
            ->with('total',$total)
            ->with('tambah',$tambah)
            ->with('namauser',$xxx); 
            return redirect()->back()->withErrors($v->errors());


      }
      DB::beginTransaction();

      try {   
           
              $nobel = Input::get('nobel'); 
              DB::delete('delete from belim where nobel = ?',[$nobel]);
              
         
                $pro=array
               (        
                      'tglbel'=>Input::get('tglbel'),     
                      'nobel'=>Input::get('nobel'), 
                      'idsup'=>Input::get('idsup'), 
                      'idter'=>Input::get('idter'), 
                      'ket'=>Input::get('ket')             
                       
               );
               $idmar2=DB::table('belim')->insertgetId($pro);
             
              

               $pro2=array
               (        
                      'idstok'=>Input::get('idstok'),                           
                      'nobel'=>Input::get('nobel'), 
                      'jml'=>Input::get('jml'),                          
                      'kode'=>'B',      
                      'mk'=>'M',
                      'harga'=>Input::get('harga')             
                       
               );
               DB::table('belid')->insertgetId($pro2);

               $idstok=Input::get('idstok'); 
               $email = Vhrgrata::find($idstok);    
               $hrgrata= $email->hrgrata;

               $ha=array
               (        
                                                        
                      'hrgakhir'=>Input::get('harga'),             
                      'hrgrata'=>$hrgrata            
                       
               );

               $idstok=Input::get('idstok'); 
               $ee=DB::table('stok')->where('id',$idstok)->update($ha); 


                  DB::commit();
              // all good
          } catch (Exception $e) {
              DB::rollback();
              // something went wrong
            }        
       
           $xxx= Auth::user()->nama; 
           $sup =DB::select("select * from pem");           
           $stok =DB::select("select * from stok"); 
           $rec=DB::table('belid')    
                      ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                      ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                    ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                    ->where('belid.nobel', '=', $nobel)
                    ->orderby('belid.nobel', 'desc')
                    ->get();
        
            $total=DB::table('belid')
                    ->select(DB::raw('SUM(jml*harga) as total'))                 
                    ->where('belid.nobel', '=', $nobel)                   
                    ->orderby('belid.nobel', 'desc')
                    ->get();        
            
      
             $tambah=true;
             $tglbel=Input::get('tglbel'); 
             $idsup=Input::get('idsup'); 
             $idstok=Input::get('idstok'); 
             $jml=Input::get('jml'); 
             $harga=Input::get('harga'); 
             $idter=Input::get('idter'); 
             $ket=Input::get('ket');        
             $nobel=Input::get('nobel'); 
             $xxx= Auth::user()->nama; 
             $sup =DB::select("select * from pem");           
             $stok =DB::select("select * from stok"); 

            return view ('pageform')
              ->with('menuaktif','Transaksi Pembelian')      
              ->with('judul','Form Pembelian')       
              ->with('judulutama','Transaksi')       
              ->with('isi','transaksi.beliform')             
              ->with('pem',$sup)
              ->with('nobel',$nobel)
              ->with('tglbel',$tglbel)
              ->with('idter',$idter)
              ->with('idsup',$idsup)
              ->with('idstok',$idstok)               
              ->with('harga',$harga)
              ->with('jml',$jml)
              ->with('ket',$ket)
              ->with('stok',$stok)
              ->with('data',$rec)
              ->with('tambah',$tambah)
              ->with('total',$total)
              ->with('namauser',$xxx); 


            return back()
                    ->with('success','Record Added successfully.');
        }





 public function deletebelidetil(Request $request)
        {
            $xxx= Auth::user()->nama;
            $tambah=False;
            $id = $request -> id;
            $nobelx = DB::table('belid')->where('id', $id)->first();
            $nobel= $nobelx->nobel;

            DB::delete('delete from belid where id = ?',[$id]);
            
            $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                ->where('belid.nobel', '=', $nobel)
                ->orderby('belid.nobel', 'desc')
                ->get();

            $master=DB::table('belim')
                ->select('belim.*')
                 ->where('belim.nobel', '=', $nobel)                
                ->get();    

            $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('belid.nobel', '=', $nobel)
                ->orderby('belid.nobel')
                ->orderby('belid.nobel', 'desc')
                ->get();        
               
                 return view ('beli.isiform')
                  ->with('menuaktif','Input Pembelian')      
                  ->with('judul','Form Pembelian')
                  ->with('tambah',$tambah)
                  ->with('master',$master)
                  ->with('total',$total)
                  ->with('namauser',$xxx)
                  ->with('rec',$rec);
             
        }       





        public function editbeli($nobel)
         
        {
            $xxx= Auth::user()->nama;
            $tambah=0;
            //$nobel = $request -> nobel;                         
            $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
 

                 ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                     
                
                 ->where('belid.nobel', '=', $nobel)
                ->orderby('belid.nobel', 'desc')
                ->get();

            $master=DB::table('belim')
                ->select('belim.*')
                 ->where('belim.nobel', '=', $nobel)                
                ->get(); 

             $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('belid.nobel', '=', $nobel)
                ->orderby('belid.nobel')
                ->orderby('belid.nobel', 'desc')
                ->get();          
            

            
                 return view ('beli.isiform')
                  ->with('menuaktif','Input Pembelian')      
                  ->with('judul','Form Pembelian')
                  ->with('tambah',$tambah)
                  ->with('master',$master)
                  ->with('total',$total)
                  ->with('namauser',$xxx)
                  ->with('rec',$rec);
             
        }       
//=========================== end Beli =================================================
 
 public function cetakkk(Request $request)

    {
     // dd($request);
      $nobel=$request->nobel;       
      
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                        ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')
                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(tran.d) as d'),DB::raw('(tran.k) as k'),'jur.nilai as nilai','bual.nama as namaorang','jur.ctt','jur.tgl')
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'D')
                      ->orderby('tran.notran', 'asc')
                      ->get();

         // $total=DB::table('jur')
           //          ->leftjoin('akun', 'akun.id', '=', 'jur.idakun') 
             //        ->select('jur.*','akun.nakun') 
               //      ->where('jur.nojur', '=', $nobel)                                 
                 //    ->first();        
          //$tot=DB::table('tran')
            //         ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
              //       ->groupby('tran.nojur')
                //     ->where('tran.nojur', '=', $nobel)                                 
                  //   ->first();

          
        
        view()->share('rec',$rec);

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('jurnal/cetakkk');
             return $pdf->download('jurnal/cetakkk.pdf');
        }
       // return view('jurnal/cetakkk');
    }

    public function cetakbkm(Request $request)

    {
     // dd($request);
      $nobel=$request->nobel;       
      
          $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                        ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')
                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(tran.d) as d'),DB::raw('(tran.k) as k'),'jur.nilai as nilai','bual.nama as namaorang','jur.ctt','jur.tgl')
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'K')
                      ->orderby('tran.notran', 'asc')
                      ->get();
 
        
        view()->share('rec',$rec);

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('jurnal/cetakbkm');
             return $pdf->download('jurnal/cetakbkm.pdf');
        }
       // return view('jurnal/cetakkk');
    }

    public function cetakbk(Request $request)

    {
     // dd($request);
      $nobel=$request->nobel;       
      
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                        ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')
                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(tran.d) as d'),DB::raw('(tran.k) as k'),'jur.nilai as nilai','bual.nama as namaorang','jur.ctt','jur.tgl')
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'D')
                      ->orderby('tran.notran', 'asc')
                      ->get();

         // $total=DB::table('jur')
           //          ->leftjoin('akun', 'akun.id', '=', 'jur.idakun') 
             //        ->select('jur.*','akun.nakun') 
               //      ->where('jur.nojur', '=', $nobel)                                 
                 //    ->first();        
          //$tot=DB::table('tran')
            //         ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
              //       ->groupby('tran.nojur')
                //     ->where('tran.nojur', '=', $nobel)                                 
                  //   ->first();

          
        
        view()->share('rec',$rec);

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('jurnal/cetakbk');
             return $pdf->download('jurnal/cetakbk.pdf');
        }
       // return view('jurnal/cetakkk');
    }


  public function cetakttm(Request $request)

    {
     // dd($request);
      $nobel=$request->nobel;       
      
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                        ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')
                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(tran.d) as d'),DB::raw('(tran.k) as k'),'jur.nilai as nilai','bual.nama as namaorang','jur.ctt','jur.tgl')
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'K')
                      ->orderby('tran.notran', 'asc')
                      ->get();

       
        view()->share('rec',$rec);

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('jurnal/cetakttm');
             return $pdf->download('jurnal/cetakttm.pdf');
        }
       // return view('jurnal/cetakkk');
    }

//--------------------jual ------------------------------

public function pdfviewxx(Request $request)

    {

        $items = DB::table("items")->get();

        view()->share('items',$items);


        if($request->has('download')){

            $pdf = PDF::loadView('pdfview');

            return $pdf->download('pdfview.pdf');

        }


        return view('pdfview');

    }
 

public function cefak(Request $request)

    {
      $nobel =$request->nobel;
    
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $result=DB::table('jualm')    
                ->leftjoin('pel', 'pel.id', '=', 'jualm.idpel')
                ->leftjoin('belid', 'belid.nojual', '=', 'jualm.nojual')
                ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                ->select('jualm.*','jualm.ket as ket','pel.nama as napem','pel.nobm as nobm','pel.telp as nohp','stok.kode as kodestok','stok.nama as namastok','sat.nama as nasa','belid.*',DB::raw('(belid.jml*belid.harga) as subtotal'))                 
                ->orderby('jualm.tgljual', 'desc')               
                ->where('jualm.nojual','=',$nobel)
                ->get(); 

         $ide=DB::table('jualm')    
                ->leftjoin('pel', 'pel.id', '=', 'jualm.idpel')                
                ->select('jualm.*','pel.*')                 
                ->orderby('jualm.tgljual', 'desc')               
                ->where('jualm.nojual','=',$nobel)
                ->first();      
         //$user = DB::table('users')->where('id', '1')->first();
        $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as tot'))                 
                ->where('belid.nojual', '=', $nobel)
                ->groupby('belid.nojual')                
                ->first();  
        
         $nohp= $ide->telp;
         $napem=$ide->nama;
         $nobm= $ide->nobm;
         $ket= $ide->ket;
         $tgljual= $ide->tgljual;

         
         $total= $total->tot;

        
        //$tot=array_get($total,'belid.nojual');
        //$nobukti=array_get($result,%no);
       // $nob=$result->nojual;      
        //echo "string;$total";
        view()->share('items',$result);
        view()->share('totallll',$total);
        view()->share('nohp',$nohp);
        view()->share('napem',$napem);
        view()->share('nobm',$nobm);
        view()->share('ket',$ket);
        view()->share('tgljual',$tgljual);
        view()->share('nobukti',$nobel);

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('jual/cefak');
             return $pdf->download('jual/cefak.pdf');
        }
        return view('jual/cefak');
    }



public function celapjul(Request $request)

    {
        $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));               
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
         //echo "string:$tgl1";
          $result=DB::table('jualm')    
                ->leftjoin('pel', 'pel.id', '=', 'jualm.idpel')
                ->leftjoin('belid', 'belid.nojual', '=', 'jualm.nojual')
                ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                ->select('jualm.*','jualm.ket as ket','pel.nama as napem','pel.nobm as nobm','pel.telp as nohp','stok.kode as kodestok','stok.nama as namastok','sat.nama as nasa','belid.*',DB::raw('(belid.jml*belid.harga) as subtotal'))                 
                ->orderby('jualm.nojual', 'desc')               
                ->where('jualm.tgljual','>=',$tgl1)
                ->where('jualm.tgljual','<=',$tgl2)              
                ->get();

         
         //$user = DB::table('users')->where('id', '1')->first();
        $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as tot'))                 
                 //->whereColumn([
                   // ['jualm.tgljual', '>=', '2017-01-01'],
                   // ['jualm.tgljual', '<=', '2017-12-30']
                  //])
                 ->first(); 

         $total= $total->tot;
 
        view()->share('items',$result);
        view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2);
        view()->share('totallll',$total);
     
       

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('lap/lapjualpdf');
             return $pdf->download('lap/lapjualpdf.pdf');
        }
        return view('jual/cefak');
    }


public function celaplaba(Request $request)

    {
      $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $result=DB::table('jualm')    
                ->leftjoin('pel', 'pel.id', '=', 'jualm.idpel')
                ->leftjoin('belid', 'belid.nojual', '=', 'jualm.nojual')
                ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                ->select('jualm.*','jualm.ket as ket','pel.nama as napem','pel.nobm as nobm','pel.telp as nohp','stok.kode as kodestok','stok.nama as namastok','sat.nama as nasa','belid.*', DB::raw('(belid.jml * belid.hrgrata) as stthpp'),DB::raw('(belid.jml * belid.harga) as sttjual'))                 
                ->orderby('jualm.nojual', 'desc')               
                ->where('jualm.tgljual','>=',$tgl1)
                ->where('jualm.tgljual','<=',$tgl2)              
                ->get();

         
         //$user = DB::table('users')->where('id', '1')->first();
        $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as tot'))                 
                 //->whereColumn([
                   // ['jualm.tgljual', '>=', '2017-01-01'],
                   // ['jualm.tgljual', '<=', '2017-12-30']
                  //])
                 ->first(); 

         $total= $total->tot;
 
        view()->share('items',$result);
        view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2);
        view()->share('totallll',$total);
     
       

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('lap/laplabapdf');
             return $pdf->download('lap/laplabapdf.pdf');
        }
        return view('jual/cefak');
    }



public function celaprkpjual(Request $request)

    {
        $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $result=DB::table('jualm')    
                ->leftjoin('pel', 'pel.id', '=', 'jualm.idpel')
                ->leftjoin('belid', 'belid.nojual', '=', 'jualm.nojual')                 
                ->select('jualm.*','jualm.ket as ket','pel.nama as napem','pel.nobm as nobm','pel.telp as nohp','belid.*',DB::raw('SUM(belid.jml*belid.harga) as total'))                 
                ->orderby('jualm.nojual', 'desc')               
                ->where('jualm.tgljual','>=',$tgl1)
                ->where('jualm.tgljual','<=',$tgl2)              
                ->groupby('jualm.nojual')
                ->get();

         
         //$user = DB::table('users')->where('id', '1')->first();
        //$total=DB::table('belid')
          //      ->select(DB::raw('SUM(jml*harga) as tot'))                 
                 //->whereColumn([
                   // ['jualm.tgljual', '>=', '2017-01-01'],
                   // ['jualm.tgljual', '<=', '2017-12-30']
                  //])
            //     ->first(); 

       //  $total= $total->tot;
 
        view()->share('items',$result);
        //view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2);
        //view()->share('totallll',$total);
     
       

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('lap/laprkpjualpdf');
             return $pdf->download('lap/laprkpjualpdf.pdf');
        }
        return view('jual/cefak');
    }



public function celaprkpbeli(Request $request)

    {
        $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $result=DB::table('belim')    
                ->leftjoin('pem', 'pem.id', '=', 'belim.idsup')
                ->leftjoin('belid', 'belid.nobel', '=', 'belim.nobel')                 
                ->select('belim.*','belim.ket as ket','pem.nama as napem','pem.telp as nohp','belid.*',DB::raw('SUM(belid.jml*belid.harga) as total'))                 
                ->orderby('belim.nobel', 'desc')               
                ->where('belim.tglbel','>=',$tgl1)
                ->where('belim.tglbel','<=',$tgl2)              
                ->groupby('belim.tglbel')
                ->get();

         
 
        view()->share('items',$result);
        //view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2);
        //view()->share('totallll',$total);
     
       

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('lap/laprkpbelipdf');
             return $pdf->download('lap/laprkpbelipdf.pdf');
        }
        return view('jual/cefak');
    }


public function celapbel(Request $request)

    {
        $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2'))); 
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $result=DB::table('belim')    
                ->leftjoin('pem', 'pem.id', '=', 'belim.idsup')
                ->leftjoin('belid', 'belid.nobel', '=', 'belim.nobel')
                ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                ->select('belim.*','belim.ket as ket','pem.nama as nasup','pem.telp as nohp','stok.kode as kodestok','stok.nama as namastok','sat.nama as nasa','belid.*',DB::raw('(belid.jml*belid.harga) as subtotal'))                 
                ->orderby('belim.nobel', 'desc')                                 
                ->where('belim.tglbel','>=',$tgl1)
                ->where('belim.tglbel','<=',$tgl2)              
                ->get();

 
        $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as tot'))                 
                 ->first(); 

         $total= $total->tot;
 
        view()->share('items',$result);
        view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2);
        view()->share('totallll',$total);
     
       

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('lap/lapbelipdf');
             return $pdf->download('lap/lapbelipdf.pdf');
        }
        return view('beli/cefak');
    }



public function celapkas(Request $request)

    {
        $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $result=DB::table('kaskeluarm')    
                ->join('mek', 'mek.id', '=', 'kaskeluarm.idkar')
                ->join('kaskeluard', 'kaskeluard.nobukti', '=', 'kaskeluarm.nobukti')                
                ->select('kaskeluarm.*','kaskeluard.*','mek.nama as napem','kaskeluard.ket as ket2',DB::raw('(kaskeluard.jml*kaskeluard.harga) as subtotal'))
                ->orderby('kaskeluarm.nobukti', 'asc')                                 
                ->where('kaskeluarm.tglkas','>=',$tgl1)
                ->where('kaskeluarm.tglkas','<=',$tgl2)              
                ->where('kaskeluarm.dk','=','K')              
                ->get();

 
        $total=DB::table('kaskeluard')
                ->select(DB::raw('SUM(jml*harga) as tot'))                 
                 ->first(); 

         $total= $total->tot;
 
        view()->share('items',$result);
        view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2); 

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('lap/lapkaspdf');
             return $pdf->download('lap/lapkaspdf.pdf');
        }
        return view('beli/cefak');
    }



public function celapcashflow(Request $request)

    {
         $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
        $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));
       // $items = DB::table("jualm")->get();
      //$nobel=$request->nobel;       
        // echo "string:$nobel";
          $result=DB::table('kaskeluarm')  
                ->select('kaskeluarm.*')
                ->orderby('kaskeluarm.tglkas', 'asc')               
                ->where('kaskeluarm.tglkas','>=',$tgl1)
                ->where('kaskeluarm.tglkas','<=',$tgl2)                              
                ->get();
   
        view()->share('items',$result);
        //view()->share('total',$total);
        view()->share('tgl1',$tgl1);
        view()->share('tgl2',$tgl2);
        //view()->share('totallll',$total);
     
       

        //echo "string:$nobel";
        if($request->has('download')){
             $pdf = PDF::loadView('lap/lapcashflowpdf');
             return $pdf->download('lap/lapcashflowpdf.pdf');
        }
        return view('jual/cefak');
    }




public function cefak2(Request $request)

    {
      $nobel =$request->nobel;

       // $items = DB::table("jualm")->get();
          $result=DB::table('jualm')    
                ->leftjoin('pel', 'pel.id', '=', 'jualm.idpel')
                ->leftjoin('belid', 'belid.nojual', '=', 'jualm.nojual')
                ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                ->select('jualm.*','pel.nama as napem',DB::raw('SUM(belid.jml*belid.harga) as total'))
                ->groupby('jualm.nojual')
                ->orderby('jualm.tgljual', 'desc')               
                ->where('jualm.nojualss','=',$nobel)
                ->get(); 

        view()->share('items',$result);


        if($request->has('download')){

            $pdf = PDF::loadView('jual/cefak');

             return $pdf->download('jual/cefak.pdf');

        }


        return view('jual/cefak');

    }


public function pdfjual(Request $request)

    {

       // $items = DB::table("jualm")->get();
          $result=DB::table('jualm')    
                ->leftjoin('pel', 'pel.id', '=', 'jualm.idpel')
                ->leftjoin('belid', 'belid.nojual', '=', 'jualm.nojual')
                ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                ->select('jualm.*','pel.nama as napem',DB::raw('SUM(belid.jml*belid.harga) as total'))
                ->groupby('jualm.nojual')
                ->orderby('jualm.tgljual', 'desc')               
                ->get(); 

        view()->share('items',$result);


        if($request->has('download')){

            $pdf = PDF::loadView('jual/pdfjual');

            return $pdf->download('jual/pdfjual.pdf');

        }


        return view('jual/pdfjual');

    }

//======================== jurnal umum======================================


 public function indexju($induk){
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


        $result=DB::table('jur')    
                  ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                  ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')                
                  ->select('jur.*','bual.nama as nabual',DB::raw('SUM(tran.d) as total'),DB::raw('SUM(tran.k) as totkredit'))
                  ->where('jur.kojur','=','JU')
                  ->groupby('jur.nojur')
                  ->orderby('jur.nojur', 'desc')               
                  ->get(); 

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Jurnal Umum')   
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Transaksi')            
          ->with('isi','transaksi.ju')            
          ->with('judul',' Jurnal Umum')            
          ->with('namauser',$xxx); 
    } 



      public function editju($nobel, $induk)
               
              {
                  $xxx= Auth::user()->nama;
                  $xxx= Auth::user()->nama;
                  $ly= Auth::user()->layout;

                  $idrole= Auth::user()->rolesid;
                 
                  $induk = $induk;                         
                 
                  $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->orderby('tran.notran', 'asc')
                      ->get();

                   $tot=DB::table('tran')
                       ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                       ->groupby('tran.nojur')
                       ->where('tran.nojur', '=', $nobel)                                 
                       ->first();    
               //dd($tot);               
             
                  $total=DB::table('jur')
                    ->select('jur.*') 
                    ->where('jur.nojur', '=', $nobel)                                 
                     ->first();      
                 //dd($total);   
                   
                   
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
                        ->with('menuaktif','Input Jurnal Umum')      
                        ->with('judul','Form Jurnal Umum')                    
                        ->with('isi','transaksi.juform') 
                        ->with('menuatas',$menuatas)             
                        
                        ->with('ly',$ly)
                        ->with('induk',$induk)
                        ->with('idrole',$idrole)
                        ->with('rec',$rec)
                        ->with('nobel',$nobel)

                        ->with('tot',$tot)
                        //->with('master',$master)
                        ->with('total',$total)
                       
                        ->with('namauser',$xxx); 
              
              }  


        public function formju($induk){ 
              $iduser= Auth::user()->id;
              $xxx= Auth::user()->nama;
              $ly= Auth::user()->layout;
              $idrole= Auth::user()->rolesid;
              //dd($iduser);
              $thn= date("y"); 
              $bln= date("m");
              $nomax = DB::table('jur')
                           ->select(DB::raw('max(nojur) as nojur'))   
                           ->where('jur.kojur','=','JU')
                           ->whereMonth('jur.tgl', '=',$bln)
                           ->whereYear('jur.tgl', '=',$thn)
                           ->first();
               //dd($nomax);            

              $nomax0=$nomax->nojur;       
              $nomax1 = substr($nomax0, -3);
              $nomax2 = $nomax1+1;
              $iduser2 =sprintf("%02d", $iduser);

              $num_of_ids = 100; //Number of "ids" to generate.
              $i = 0; //Loop counter.
              $n = 0; //"id" number piece.         
              $l = "JU"."$iduser2"."-"."$bln"."$thn"."-"; //"id" letter piece.        
              $id = $l . sprintf("%03d", $nomax2); //Create "id". Sprintf pads the number to make it 4 digits.        
              $nobel=$id;
              $tglbel=date("Y/m/d");
              $idbual='';
              $debet=0;
              $kredit=0;
              $ket='';         
              $idakun='';         
              $total=0;
              $tambah=true; 
            
           
              $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', 'xxxxx')
                      ->orderby('tran.notran', 'desc')
                      ->get();
                      //dd($rec);
              $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();    
               //dd($tot);              
             
              $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();      
             

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
              ->with('judul','Form Jurnal Umum')                    
              ->with('isi','transaksi.juform')              
              ->with('ly',$ly)
              ->with('idrole',$idrole)
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ->with('tot',$tot)
              ->with('nobel',$nobel) 
              ->with('tglbel',$tglbel) 
              ->with('rec',$rec)
              //->with('stok',$stok)
              ->with('total',$total)
               
              ->with('namauser',$xxx); 
        }
      public function deleteju(Request $request)
              {
                  $xxx= Auth::user()->nama;
                  $ly= Auth::user()->layout;
                  $idrole= Auth::user()->rolesid;


                  $id = $request ->idtran;
                  $induk = $request ->induk;

                  $nobelx = DB::table('tran')->where('idtran', $id)->first();
                  $nobel= $nobelx->nojur;


                DB::beginTransaction();

                try {
                  DB::delete('delete from tran where idtran = ?',[$id]); 
               
                      DB::commit();
                    // all good
                      } catch (Exception $e) {
                          DB::rollback();
                          // something went wrong
                      }         
                   
                  $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=',$nobel)
                      ->orderby('tran.notran', 'desc')
                      ->get();
                     // dd($rec);
                  $tot=DB::table('tran')
                         ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                         ->groupby('tran.nojur')
                         ->where('tran.nojur', '=', $nobel)                                 
                         ->first();    
                   //dd($tot);              
                 
                  $total=DB::table('jur')
                         ->select('jur.*') 
                         ->where('jur.nojur', '=', $nobel)                                 
                         ->first();      
                   

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
                  ->with('menuaktif','Input Jurnal Umum')      
                  ->with('judul','Form Jurnal Umum')                    
                  ->with('isi','transaksi.juform')              
                  ->with('tot',$tot)
                  ->with('ly',$ly) 
                  ->with('idrole',$idrole)
                  ->with('induk',$induk) 
                  ->with('menuatas',$menuatas)
                  ->with('rec',$rec)
                  ->with('nobel',$nobel)
                  ->with('total',$total)
                   
                  ->with('namauser',$xxx); 
                   
              }    


      public function simpanju(Request $request)
       
        {
          $xxx= Auth::user()->nama;
          $ly= Auth::user()->layout;
          $idrole= Auth::user()->rolesid;

          $induk=Input::get('induk');
              $v=\Validator::make($request->all(),
            [
              'nobel'=>'required',
              'idbual'=>'required',
              'idakun'=>'required',
              'tglbel'=>'required',        
              'debet'=>'required',
              'kredit'=>'required',
            ]);
            if ($v->fails())
            {

               $tambah=true;
               $tglbel=Input::get('tglbel'); 
               $idbual=Input::get('idbual'); 
               $idakun=Input::get('idakun'); 
               $debet=Input::get('debet'); 
               $kredit=Input::get('kredit');           
               $ket=Input::get('ket');                 
               $nobel=Input::get('nobel'); 


                
               //$sup =DB::select("select * from pem");           
               //$stok =DB::select("select * from stok");
               $kojur='JU' ;

                $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->orderby('tran.notran', 'asc')
                      ->get();

                 $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();            

                $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();    
              

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

                                         
                             
               $carim=DB::table('akun')                 
                              ->select('akun.*')
                              ->orderby('akun.id', 'asc')
                              ->first();          
                     //dd($total);
                            \Session::flash('message','Ada field yang kosong.....!!!');
                return view ('pageform')
              ->with('menuaktif','Input Jurnal Umum')      
              ->with('judul','Form Jurnal Umum')                    
              ->with('isi','transaksi.juform')              
              ->with('nobel',$nobel)
              ->with('tglbel',$tglbel)
              ->with('idbual',$idbual)
              ->with('idakun',$idakun)
              ->with('ly',$ly) 
              ->with('idrole',$idrole) 
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ->with('tot',$tot)
              ->with('debet',$debet)
              ->with('kredit',$kredit)
              ->with('idakun',$idakun)
              ->with('ket',$ket)        
              ->with('rec',$rec)        
              ->with('total',$total)
              ->with('tambah',$tambah)
              ->with('namauser',$xxx); 
               


            }
            DB::beginTransaction();
            $urut=DB::table('tran')
                     ->select(DB::raw('max(notran) as notran'))                               
                     ->first();         
            $notran =$urut->notran+1;   
            $nilaidebet=Input::get('debet'); 
            if ($nilaidebet==0){
              $dk='K';
            }else{
              $dk='D';
            }
            try {   
                    
                    $nobel = Input::get('nobel'); 
                    DB::delete('delete from jur where nojur = ?',[$nobel]);
                    

                     $tran=array
                     (        
                            'idakun'=>Input::get('idakun'),                           
                            'nojur'=>Input::get('nobel'), 
                            'notran'=>$notran, 
                            'dk'=>$dk, 
                            'd'=>Input::get('debet'),                          
                            'k'=>Input::get('kredit')                                                 
                                     
                             
                     );
                     DB::table('tran')->insertgetId($tran);
                     
                     $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();
                     
                     $jd=$tot->td;

                     $jur=array
                     (        
                        
                            'tgl' => date("Y-m-d", strtotime(Input::get('tglbel'))),               
                            'nojur'=>Input::get('nobel'), 
                            'idbual'=>Input::get('idbual'), 
                            'nilai'=>$jd,
                            'kojur'=>'JU',
                            'ctt'=>Input::get('ket')             
                             
                     );
                     $idjur=DB::table('jur')->insertgetId($jur);
                   
                   
                        DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                  }        
             
                 $xxx= Auth::user()->nama; 
                $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->orderby('tran.notran', 'asc')
                      ->get();

                $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();        
                 
                 //$nilai = $tot->td;
                 //DB::table('jur')->where('nojur',$nobel)->update($nilai);           
                  

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

                              
                 $carim=DB::table('akun')                 
                                ->select('akun.*')
                                ->orderby('akun.id', 'asc')
                                ->first();
                     $tambah=true;
                     $nobel=Input::get('nobel'); 
                     $idbual=Input::get('idbual'); 
                     $tglbel=Input::get('tglbel'); 
                     $idmek=Input::get('idmek'); 
                     $idakun=''; 
                     $debet=Input::get('debet'); 
                     $kredit=Input::get('kredit');           
                     $ket=Input::get('ket');                 
                     


                    return view ('pageform')
                    ->with('menuaktif','Input Jurnal Umum')      
                    ->with('judul','Form Jurnal Umum')                    
                    ->with('isi','transaksi.juform')              
                    ->with('nobel',$nobel)
                    ->with('tglbel',$tglbel)
                    ->with('idbual',$idbual)
                    ->with('idakun',$idakun)
                    ->with('tot',$tot) 
                    ->with('ly',$ly) 
                    ->with('idrole',$idrole) 
                    ->with('induk',$induk) 
                    ->with('menuatas',$menuatas)
                    ->with('debet',$debet)
                    ->with('kredit',$kredit)             
                    ->with('ket',$ket)           
                    ->with('rec',$rec)
                    //->with('stok',$stok)
                    ->with('total',$total)            
                    ->with('namauser',$xxx); 

                  return back()
                          ->with('success','Record Added successfully.');
              }

//==========================end jurnal umum=================================    

 public function indexmasterjual(){
    // $result =DB::table('member')->paginate(10);
    //  $sup =DB::select("select * from pel");
            
       
      $result=DB::table('jualm')    
                ->leftjoin('pel', 'pel.id', '=', 'jualm.idpel')
                ->leftjoin('belid', 'belid.nojual', '=', 'jualm.nojual')
                ->select('jualm.*','pel.nama as napem',DB::raw('SUM(belid.jml*belid.harga) as total'))
                ->groupby('jualm.nojual')
                ->orderby('jualm.tgljual', 'desc')               
                ->get(); 
    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
        ->with('menuaktif','Daftar Penjualan')   
 
        ->with('judulutama','Transaksi')            
        ->with('isi','transaksi.penjualan')            
        ->with('judul',' Penjualan')            
        ->with('namauser',$xxx); 
  } 


    
  public function formjual(){ 
        $thn= date("y"); 
        $bln= date("m");
        $nomax = DB::table('jualm')
                     ->select(DB::raw('max(nojual) as nojual'))                     
                     ->first();

        //$nomax = DB::table('jualm')->max('nojual'); //DB::table('loan')->max('kodepinjam');
        //if ($nomax->num_row()>0 ){
          
          $nomax0=$nomax->nojual;
        //}

        //var_dump($nomax0);
        $nomax1 = substr($nomax0, -4);
        //echo "aaa:$nomax1";
        $nomax2 = $nomax1+1;
        $num_of_ids = 1000; //Number of "ids" to generate.
        $i = 0; //Loop counter.
        $n = 0; //"id" number piece.
         
        $l = "PJ"."-"."$bln"."$thn"."-"; //"id" letter piece.

        //while ($i <= $num_of_ids) { 
        $id = $l . sprintf("%04d", $nomax2); //Create "id". Sprintf pads the number to make it 4 digits.
        
        $nobel=$id;
 
 
       $tglbel=date("Y/m/d");
       $idsup='';
       $jml='';
       $ket='';
       $harga='';
       $idter='';
       $idstok='';
       $total=0;
       $tambah=true;
 
       $xxx= Auth::user()->nama; 
     
       $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                 ->where('belid.nojual', '=', 'xxxxx')
                ->orderby('belid.nojual', 'desc')
                  ->get();
       
        $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total')) 

                ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual')
                ->orderby('belid.nojual', 'desc')
                ->first();      

        return view ('pageform')
        ->with('menuaktif','Input Penjualan')      
        ->with('judul','Form Penjualan')            
        ->with('judulutama','Transaksi Penjualan')           
        ->with('isi','transaksi.jualform')              
        ->with('nobel',$nobel)
        ->with('tglbel',$tglbel)
        ->with('idsup',$idsup)
        ->with('idter',$idter)
        ->with('jml',$jml)
        ->with('harga',$harga)
        ->with('idstok',$idstok)
        ->with('ket',$ket)
        ->with('rec',$rec)
        //->with('stok',$stok)
        ->with('total',$total)
        ->with('tambah',$tambah)
        ->with('namauser',$xxx); 
  }







public function editjual($nobel)
         
        {
            $xxx= Auth::user()->nama;
           
            //$nobel = $request -> nobel;                         
            $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                  ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga') 
                  
                 ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual', 'desc')
                ->get();

            $master=DB::table('jualm')
                ->select('jualm.*')
                 ->where('jualm.nojual', '=', $nobel)                
                ->get(); 




             $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual')
                ->orderby('belid.nojual', 'desc')
                ->first();          
            
                 $tambah=0; 
                 return view ('pageform')
                  ->with('menuaktif','Input Penjualan')      
                  ->with('judul','Form Penjualan')            
                  ->with('judulutama','Transaksi Penjualan')           
                  ->with('isi','transaksi.jualform')      
                  ->with('tambah',$tambah)
                  ->with('master',$master)
                  ->with('total',$total)
                  ->with('namauser',$xxx)
                  ->with('rec',$rec);
             
        }     

 public function savejual(Request $request)

        {
           $xxx= Auth::user()->nama; 
           $v=\Validator::make($request->all(),
      [
        'nobel'=>'required',
        'idsup'=>'required',
        'idter'=>'required',
        'tglbel'=>'required',
        'idstok'=>'required',
        'jml'=>'required',
        'harga'=>'required',
      ]);
      if ($v->fails())
      {

        $tambah=true;
       $tglbel=Input::get('tglbel'); 
       $idsup=Input::get('idsup'); 
       $idstok=Input::get('idstok'); 
       $jml=Input::get('jml'); 
       $harga=Input::get('harga'); 
       $idter=Input::get('idter'); 
       $ket=Input::get('ket');        
       $nobel=Input::get('nobel'); 
       $xxx= Auth::user()->nama; 
       $sup =DB::select("select * from pem");           
       $stok =DB::select("select * from stok");
       $mk='K' ;
       $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                ->where('belid.nobel', '=', $nobel)
                ->orderby('belid.nobel', 'desc')
                ->get();
        $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual')
                ->orderby('belid.nojual', 'desc')
                ->first();        
                   
     return view ('pageform')
        ->with('menuaktif','Input Penjualan')      
        ->with('judul','Form Penjualan')            
        ->with('judulutama','Transaksi Penjualan')           
        ->with('isi','transaksi.jualform')      
        ->with('pem',$sup)
        ->with('nobel',$nobel)
        ->with('tglbel',$tglbel)
        ->with('idter',$idter)
        ->with('idsup',$idsup)
        ->with('idstok',$idstok)
        ->with('harga',$harga)
        ->with('jml',$jml)
        ->with('ket',$ket)
        ->with('stok',$stok)
        ->with('rec',$rec)
        ->with('total',$total)
        ->with('tambah',$tambah)
        ->with('namauser',$xxx); 
        return redirect()->back()->withErrors($v->errors());


      }
         
          //$id=$request->nobel;
        $nobel = Input::get('nobel'); 
        $nomax = DB::table('jualm')->max('urut');
        $pro=array
       (        
              'tgljual' => date("Y-m-d", strtotime(Input::get('tglbel'))),               
              'nojual'=>Input::get('nobel'), 
              'idpel'=>Input::get('idsup'), 
              'idmek'=>Input::get('idter'),
              'urut'=>$nomax+1,
              'ket'=>Input::get('ket')             
               
       );
       $idstok=Input::get('idstok');  
       $email = Stok::find($idstok);    
       $hrgrata= $email->hrgrata;

       $pro2=array
       (        
              'idstok'=>Input::get('idstok'),                           
              'nojual'=>Input::get('nobel'), 
              'jml'=>Input::get('jml'),                          
              'kode'=>'J',      
              'mk'=>'K',
              'harga'=>Input::get('harga'),
              'hrgrata'=>$hrgrata             

       );
 

        DB::beginTransaction();

         try {


             DB::delete('delete from jualm where nojual = ?',[$nobel]);             
             DB::table('jualm')->insertgetId($pro); 
             DB::table('belid')->insertgetId($pro2);

              $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual')
                ->orderby('belid.nojual', 'desc')
                ->first();      

             $kas=array             (        
                    'tglkas' => date("Y-m-d", strtotime(Input::get('tglbel'))),               
                    'nobukti'=>Input::get('nobel'), 
                    'idkar'=>Input::get('idsup'), 
                    'dk'=>'D',
                    'total'=>$total->total,
                    'ket'=>'Penjualan'             
                     
             );

             $ada ='';
             $ada = DB::table('kaskeluarm')->where('nobukti', $nobel)->first();
             if ($ada !='' ) {
               DB::table('kaskeluarm')->where('nobukti',$nobel)->update($kas); 
             }else{
               DB::table('kaskeluarm')->insertgetId($kas); 
             }


 
             DB::commit();
              // all good
          } catch (Exception $e) {
              DB::rollback();
              // something went wrong
          }         


          $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')

                ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual', 'desc')
                ->get();


         
         $tambah=true;
         $tglbel=Input::get('tglbel'); 
         $idsup=Input::get('idsup'); 
         $idstok=Input::get('idstok'); 
         $jml=Input::get('jml'); 
         $harga=Input::get('harga'); 
         $idter=Input::get('idter'); 
         $ket=Input::get('ket');        
         $nobel=Input::get('nobel'); 
         $xxx= Auth::user()->nama; 
        // $sup =DB::select("select * from pem");           
        // $stok =DB::select("select * from stok"); 

        return view ('pageform')
        ->with('menuaktif','Input Penjualan')      
        ->with('judul','Form Penjualan')            
        ->with('judulutama','Transaksi Penjualan')           
        ->with('isi','transaksi.jualform')             
          //->with('pem',$sup)
          ->with('nobel',$nobel)
          ->with('tglbel',$tglbel)
          ->with('idter',$idter)
          ->with('idsup',$idsup)
          ->with('idstok',$idstok)
          ->with('harga',$harga)
          ->with('jml',$jml)
          ->with('ket',$ket)
          //->with('stok',$stok)
          ->with('rec',$rec)
          ->with('tambah',$tambah)
          ->with('total',$total)
          ->with('namauser',$xxx); 


              return back()
                      ->with('success','Record Added successfully.');
          }


        public function deletejualdetil(Request $request)
        {
            $xxx= Auth::user()->nama;
            $tambah=False;
            $id = $request -> id;
            $nobelx = DB::table('belid')->where('id', $id)->first();
            $nobel= $nobelx->nojual;


          DB::beginTransaction();

          try {
            DB::delete('delete from belid where id = ?',[$id]);
           
            $rec=DB::table('belid')    
                  ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga as harga')
                ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual', 'desc')
                ->get();

            $master=DB::table('jualm')
                ->select('jualm.*')
                 ->where('jualm.nojual', '=', $nobel)                
                ->get();    

            $master2=DB::table('jualm')
                ->select('jualm.*')
                 ->where('jualm.nojual', '=', $nobel)                
                ->first();    

            $total=DB::table('belid')
                ->select(DB::raw('SUM(jml*harga) as total'))                 
                ->where('belid.nojual', '=', $nobel)
                ->orderby('belid.nojual')
                ->orderby('belid.nojual', 'desc')
                ->first(); 

            //$nomax = DB::table('jualm')->max('urut');      
            
            $kas=array
             (        
                    'tglkas'=>$master2->tgljual,     
                    'nobukti'=>$nobel, 
                    'idkar' =>$master2->idpel,                      
                    'dk'=>'D',
                    'total'=>$total->total,
                    'ket'=>'Penjualan'             
                     
             );

           
             $ada='';
             $ada = DB::table('kaskeluarm')->where('nobukti', $nobel)->first();
             if ($ada !='' ) {
               DB::table('kaskeluarm')->where('nobukti',$nobel)->update($kas); 
             }else{
               DB::table('kaskeluarm')->insertgetId($kas); 
             }


             DB::commit();    
                DB::commit();
              // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }         
             
                 return view ('pageform')
                  ->with('menuaktif','Input Penjualan')      
                  ->with('judul','Form Penjualan')            
                  ->with('judulutama','Transaksi Penjualan')           
                  ->with('isi','transaksi.jualform')   
                  ->with('tambah',$tambah)
                  ->with('master',$master)
                  ->with('total',$total)
                  ->with('namauser',$xxx)
                  ->with('rec',$rec);
             
        }    


//----------------------------proses Kas--------------------------------


//======================== kas Keluar======================================


 public function indexkk($induk){
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

        $result=DB::table('jur')    
                  ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                  ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')                
                  ->select('jur.*','bual.nama as nabual',DB::raw('SUM(tran.d) as total'),DB::raw('SUM(tran.k) as totkredit'))
                  ->where('jur.kojur','=','KK')
                  ->groupby('jur.nojur')
                  ->orderby('jur.nojur', 'desc')
                  ->get(); 

     
      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Kas Keluar')   
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
           ->with('menuatas',$menuatas)
          ->with('judulutama','Transaksi')            
          ->with('isi','transaksi.kk')            
          ->with('judul',' Jurnal Kas Keluar')            
          ->with('namauser',$xxx); 
    } 



      public function editkk($nobel,$induk)
               
              {
                  $xxx= Auth::user()->nama;
                  $ly= Auth::user()->layout;
                  $idrole= Auth::user()->rolesid;
                  $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'D')
                      ->orderby('tran.notran', 'asc')
                      ->get();
                     // dd($rec);

                   $tot=DB::table('tran')
                       ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                       ->groupby('tran.nojur')
                       ->where('tran.nojur', '=', $nobel)                                 
                       ->first();    
               //dd($tot);               
             
                  $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();  
                  

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
                   
                   
               //   $master=DB::table('jur')
                    //  ->select('jur.*')
                    //   ->where('jur.nojur', '=', $nobel)                
                    //  ->get(); 
                   // dd($master);
        
                        
                         return view ('pageform')
                        ->with('menuaktif','Input Kas Keluar')      
                        ->with('judul','Form Kas Keluar')                    
                        ->with('isi','transaksi.kkform')                                      
                        ->with('ly',$ly) 
                        ->with('idrole',$idrole)
                        ->with('induk',$induk) 
                        ->with('menuatas',$menuatas)
                        ->with('rec',$rec)
                        ->with('nobel',$nobel)
                        ->with('tot',$tot)
//                        ->with('master',$master)
                        ->with('total',$total)
                        ->with('namauser',$xxx); 
              
              }  


        public function editkm($nobel,$induk)
               
              {
                  $xxx= Auth::user()->nama;
                  $ly= Auth::user()->layout;
                  $idrole= Auth::user()->rolesid;
                 
                  //$nobel = $request -> nobel;                         
                 
                  $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'K')
                      ->orderby('tran.notran', 'asc')
                      ->get();
                     // dd($rec);

                   $tot=DB::table('tran')
                       ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                       ->groupby('tran.nojur')
                       ->where('tran.nojur', '=', $nobel)                                 
                       ->first();    
               //dd($tot);               
             
                  $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();  
                  
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
                   
                   
                  //$master=DB::table('jur')
                //      ->select('jur.*')
                    //   ->where('jur.nojur', '=', $nobel)                
                 //     ->get(); 
                   // dd($master);
        
                        
                         return view ('pageform')
                        ->with('menuaktif','Input Kas Keluar')      
                        ->with('judul','Form Kas Keluar')                    
                        ->with('isi','transaksi.jurnal.kmform')                                      
                        ->with('ly',$ly) 
                        ->with('idrole',$idrole) 
                        ->with('induk',$induk) 
                        ->with('menuatas',$menuatas)
                        ->with('rec',$rec)
                        ->with('nobel',$nobel)
                        ->with('tot',$tot)
                      //  ->with('master',$master)
                        ->with('total',$total)
                       
                        ->with('namauser',$xxx); 
              
              }         


        public function formkk($induk){ 
              $iduser= Auth::user()->id;
              $xxx= Auth::user()->nama;
              $ly= Auth::user()->layout;
              $idrole= Auth::user()->rolesid;
              $thn= date("y"); 
              $bln= date("m");
              $nomax = DB::table('jur')
                           ->select(DB::raw('max(nojur) as nojur'))   
                           ->where('jur.kojur','=','KK')
                           ->whereMonth('jur.tgl', '=',$bln)
                           ->whereYear('jur.tgl', '=',$thn)
                           ->first();
               //dd($nomax);            

              $nomax0=$nomax->nojur;       
              $nomax1 = substr($nomax0, -3);
              $nomax2 = $nomax1+1;
              $iduser2 =sprintf("%02d", $iduser);

              $num_of_ids = 100; //Number of "ids" to generate.
              $i = 0; //Loop counter.
              $n = 0; //"id" number piece.         
              $l = "KK"."$iduser2"."-"."$bln"."$thn"."-"; //"id" letter piece.        
              $id = $l . sprintf("%03d", $nomax2); //Create "id". Sprintf pads the number to make it 4 digits.        
              $nobel=$id;
              $tglbel=date("Y/m/d");
              $idbual='';
              $debet=0;
              $kredit=0;
              $ket='';         
              $idakun='';         
              $total=0;
              $tambah=true; 
             

             
              $cidkk=DB::table('seting')                
                ->select('seting.idkk')
                ->first();
              $idkk=$cidkk->idkk;   
              $cidkasir=DB::table('seting')                
                ->select('seting.idkasir')
                ->first();
              $idkasir=$cidkasir->idkasir;

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
             
              $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', 'xxxxx')
                      ->orderby('tran.notran', 'desc')
                      ->get();
                      //dd($rec);
              $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();    
               //dd($tot);              
             
              $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();      
                     //dd($induk);
              return view ('pageform')
              ->with('menuaktif','Input Kas Keluar')      
              ->with('judul','Form Kas Keluar')                    
              ->with('isi','transaksi.kkform')              
              ->with('ly',$ly) 
              ->with('idrole',$idrole) 
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ->with('ak',$idkk)
              ->with('idbual',$idkasir)
              ->with('tot',$tot)
              ->with('nobel',$nobel) 
              ->with('tglbel',$tglbel) 
              ->with('rec',$rec)
              //->with('stok',$stok)
              ->with('total',$total)
               
              ->with('namauser',$xxx); 
        }
      public function deletekk($idtran,$induk)
              {
                  $xxx= Auth::user()->nama;
                  $ly= Auth::user()->layout;
                  $idrole= Auth::user()->rolesid;   
                  $nobelx = DB::table('tran')->where('idtran', $idtran)->first();
                  $nobel= $nobelx->nojur; 
                  DB::beginTransaction();
                  try { 
                      DB::delete('delete from tran where idtran = ?',[$idtran]); 
                       //DB::delete('delete from tran where nojur = ?',[$nobel]); and dk='K'
                      $tot=DB::table('tran')
                         ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                         ->groupby('tran.nojur')
                         ->where('tran.nojur', '=', $nobel)                                 
                         ->first(); 
                      $jd=$tot->td;

                      $trank=array
                           (        
                                   
                                  'k'=>$jd                          
                           );
                      //DB::table('tran')->insertgetId($trank);        
                          
                      DB::table('tran')
                        ->where('nojur',$nobel)
                        ->where('dk','K')
                        ->update($trank); 

                      $jur=array
                      (                              
                          'nilai'=>$jd                                   
                      );

                      DB::table('jur')->where('nojur',$nobel)->update($jur);

                      $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                        ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                        ->where('jur.nojur', '=',$nobel)
                        ->where('tran.dk', '=', 'D')
                        ->orderby('tran.notran', 'desc')
                        ->get();


             
                        $total=DB::table('jur')
                               ->select('jur.*') 
                               ->where('jur.nojur', '=', $nobel)                                 
                               ->first();      
                       

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
                         
                                DB::commit();
                              // all good
                                } catch (Exception $e) {
                                    DB::rollback();
                                    // something went wrong
                                }         
                   
                        $tot=DB::table('tran')
                         ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                         ->groupby('tran.nojur')
                         ->where('tran.nojur', '=', $nobel)                                 
                         ->first(); 
                          
                  return view ('pageform')
                  ->with('menuaktif','Input Jurnal Umum')      
                  ->with('judul','Form Kas Keluar')                    
                  ->with('isi','transaksi.kkform')                                
                  ->with('tot',$tot)
                  ->with('ly',$ly) 
                  ->with('idrole',$idrole) 
                  ->with('induk',$induk) 
                  ->with('menuatas',$menuatas)
                  ->with('rec',$rec)
                  ->with('nobel',$nobel)
                  ->with('total',$total)
                   
                  ->with('namauser',$xxx); 
                   
              }
      public function deletekm($idtran,$induk)
              {
                  $xxx= Auth::user()->nama;
                  $ly= Auth::user()->layout;
                  $idrole= Auth::user()->rolesid;    
                  $nobelx = DB::table('tran')->where('idtran', $idtran)->first();
                  $nobel= $nobelx->nojur; 
                  DB::beginTransaction();
                  try { 
                      DB::delete('delete from tran where idtran = ?',[$idtran]); 
                       //DB::delete('delete from tran where nojur = ?',[$nobel]); and dk='K'
                      $tot=DB::table('tran')
                         ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                         ->groupby('tran.nojur')
                         ->where('tran.nojur', '=', $nobel)                                 
                         ->first(); 
                      $jd=$tot->tk;

                      $trank=array
                           (        
                                   
                                  'd'=>$jd                          
                           );
                      //DB::table('tran')->insertgetId($trank);        
                          
                      DB::table('tran')
                        ->where('nojur',$nobel)
                        ->where('dk','D')
                        ->update($trank); 

                      $jur=array
                      (                              
                          'nilai'=>$jd                                   
                      );

                      DB::table('jur')->where('nojur',$nobel)->update($jur);

                      $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')
                        ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                        ->where('jur.nojur', '=',$nobel)
                        ->where('tran.dk', '=', 'K')
                        ->orderby('tran.notran', 'desc')
                        ->get();


             
                        $total=DB::table('jur')
                               ->select('jur.*') 
                               ->where('jur.nojur', '=', $nobel)                                 
                               ->first();      
                      

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
                         
                                DB::commit();
                              // all good
                                } catch (Exception $e) {
                                    DB::rollback();
                                    // something went wrong
                                }         
                   
                        $tot=DB::table('tran')
                         ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                         ->groupby('tran.nojur')
                         ->where('tran.nojur', '=', $nobel)                                 
                         ->first(); 
                          
                  return view ('pageform')
                  ->with('menuaktif','Input Jurnal Umum')      
                  ->with('judul','Form Kas Keluar')                    
                  ->with('isi','transaksi.jurnal.kmform')                                
                  ->with('tot',$tot)
                  ->with('idrole',$idrole)
                  ->with('ly',$ly) 
                  ->with('induk',$induk) 
                  ->with('menuatas',$menuatas)
                  ->with('rec',$rec)
                  ->with('nobel',$nobel)
                  ->with('total',$total)
                   
                  ->with('namauser',$xxx); 
                   
              }               


      public function simpankk(Request $request)

        {
           $xxx= Auth::user()->nama;
           $ly= Auth::user()->layout;
           $idrole= Auth::user()->rolesid; 
           $induk=Input::get('induk'); 
           $ak=Input::get('ak');  
          // $td=Input::get('td');  
           //dd($ak); 
           $v=\Validator::make($request->all(),
            [
              'nobel'=>'required',
              'idbual'=>'required',
              'ak'=>'required',
              'ad'=>'required',
              'tglbel'=>'required',        
              'debet'=>'required',
               
            ]);
            if ($v->fails())
            {

               $tambah=true;
               $tglbel=Input::get('tglbel'); 
               $idbual=Input::get('idbual'); 
               $ak=Input::get('ak'); 
               $kettran=Input::get('kettran'); 
               $ad=Input::get('ad'); 
               $debet=Input::get('debet');
               $ket=Input::get('ket');    
               $nobel=Input::get('nobel');
               $xxx= Auth::user()->nama; 
               //$sup =DB::select("select * from pem");           
               //$stok =DB::select("select * from stok");
                $kojur='KK' ;
               
                $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'D')
                      ->orderby('tran.notran', 'asc')
                      ->get();

                 $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();            

                $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();  

               
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
                     //dd($total);
                            \Session::flash('message','Ada field yang kosong.....!!!');
                return view ('pageform')
              ->with('menuaktif','Input Kas Keluar')      
              ->with('judul','Form Kas Keluar')                    
              ->with('isi','transaksi.kkform')              
              ->with('nobel',$nobel)
              ->with('tglbel',$tglbel)
              ->with('idbual',$idbual)
              ->with('idakun',$idakun)             
              ->with('tot',$tot)
              ->with('ly',$ly)
              ->with('idrole',$idrole)
              ->with('ak',$ak) 
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ->with('ket',$ket)        
              ->with('rec',$rec)        
              ->with('total',$total)
              ->with('tambah',$tambah)
              ->with('namauser',$xxx); 
               


            }

            DB::beginTransaction();
            $urut=DB::table('tran')
                     ->select(DB::raw('max(notran) as notran'))                               
                     ->first();         
            $notran =$urut->notran+1;   
             
            try {   
                 
                    $nobel = Input::get('nobel'); 
                    DB::delete('delete from jur where nojur = ?',[$nobel]);
                     //delete tran Kredit
                    DB::table('tran')
                    ->where('nojur',$nobel)
                    ->where('dk','K')
                    ->delete();
                     
                     $trand=array
                     (        
                            'idakun'=>Input::get('ad'),                           
                            'nojur'=>Input::get('nobel'), 
                            'ket'=>Input::get('kettran'), 
                            'notran'=>$notran, 
                            'dk'=>'D',
                            'd'=>Input::get('debet')                          
                            
                     );
  
                    
                     DB::table('tran')->insertgetId($trand);


                      $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();

                      $td = $tot->td;     
                      
                      $jur=array
                      (  
                            'tgl' => date("Y-m-d", strtotime(Input::get('tglbel'))),               
                            'nojur'=>Input::get('nobel'), 
                            'idbual'=>Input::get('idbual'), 
                            'nilai'=>$td,
                            'idakun'=>$ak,                          
                            'kojur'=>'KK',
                            'ctt'=>Input::get('ket')             
                      );
                      $trank=array
                     (        
                            'idakun'=>Input::get('ak'),                           
                            'nojur'=>Input::get('nobel'), 
                            'notran'=>$notran, 
                            'ket'=>Input::get('kettran'), 
                            'dk'=>'K',
                            'k'=>$td                          
                            
                     );

                      DB::table('jur')->insertgetId($jur);
                      DB::table('tran')->insertgetId($trank);

                     
                   
                      DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                  }        
             
                 
                $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'D')
                      ->orderby('tran.notran', 'asc')
                      ->get();

                $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();        
                 $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();
              

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
                 //$nilai = $tot->td;
                 //DB::table('jur')->where('nojur',$nobel)->update($nilai);           
            
                     $tambah=true;
                     $nobel=Input::get('nobel'); 
                     $idbual=Input::get('idbual'); 
                     $tglbel=Input::get('tglbel'); 
                     $idmek=Input::get('idmek'); 
                     $idakun=''; 
                     $debet=Input::get('debet'); 
                     $kettran=Input::get('kettran'); 
                     $kredit=Input::get('kredit');           
                     $ket=Input::get('ket');                 
                     


                    return view ('pageform')
                    ->with('menuaktif','Input Jurnal Umum')      
                    ->with('judul','Form Kas Keluar')                    
                    ->with('isi','transaksi.kkform')              
                    ->with('nobel',$nobel)
                    ->with('ly',$ly)
                    ->with('idrole',$idrole)
                    ->with('ak',$ak) 
                    ->with('kettran','-')
                    ->with('induk',$induk) 
                    ->with('menuatas',$menuatas)
                    ->with('tglbel',$tglbel)
                    ->with('idbual',$idbual)
                    ->with('tot',$tot) 
                    ->with('ket',$ket)           
                    ->with('rec',$rec)
                    //->with('stok',$stok)
                    ->with('total',$total)            
                    ->with('namauser',$xxx); 

                  return back()
                          ->with('success','Record Added successfully.');
              }

//==========================end kas keluar=================================  


//=============== kas masuk ===============================


 public function indexkm($induk){
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
        $result=DB::table('jur')    
                  ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                  ->leftjoin('bual', 'bual.id', '=', 'jur.idbual')                
                  ->select('jur.*','bual.nama as nabual',DB::raw('SUM(tran.d) as total'),DB::raw('SUM(tran.k) as totkredit'))
                  ->where('jur.kojur','=','KM')
                  ->groupby('jur.nojur')
                  ->orderby('jur.nojur', 'desc')
                  ->get(); 

      $xxx= Auth::user()->nama;
      return view('pagelist')
          ->with('data',$result)  
          ->with('menuaktif','Daftar Kas Keluar')   
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Transaksi')            
          ->with('isi','transaksi.jurnal.km')            
          ->with('judul',' Jurnal Kas Masuk')            
          ->with('namauser',$xxx); 
    } 

 public function formkm($induk){ 
              $xxx= Auth::user()->nama;
              $ly= Auth::user()->layout;
              $idrole= Auth::user()->rolesid;
              $iduser= Auth::user()->id;
              //dd($iduser);
              $thn= date("y"); 
              $bln= date("m");
              $nomax = DB::table('jur')
                           ->select(DB::raw('max(nojur) as nojur'))   
                           ->where('jur.kojur','=','KM')
                           ->whereMonth('jur.tgl', '=',$bln)
                           ->whereYear('jur.tgl', '=',$thn)
                           ->first();
               //dd($nomax);            

              $nomax0=$nomax->nojur;       
              $nomax1 = substr($nomax0, -3);
              $nomax2 = $nomax1+1;
              $iduser2 =sprintf("%02d", $iduser);

              $num_of_ids = 100; //Number of "ids" to generate.
              $i = 0; //Loop counter.
              $n = 0; //"id" number piece.         
              $l = "KM"."$iduser2"."-"."$bln"."$thn"."-"; //"id" letter piece.        
              $id = $l . sprintf("%03d", $nomax2); //Create "id". Sprintf pads the number to make it 4 digits.        
              $nobel=$id;
              $tglbel=date("Y/m/d");
              $idbual='';
              $debet=0;
              $kredit=0;
              $ket='';         
              $idakun='';         
              $total=0;
              $tambah=true; 
              
              $cidkk=DB::table('seting')                
                ->select('seting.idkm')
                ->first();
              $idkk=$cidkk->idkm;   
              $cidkasir=DB::table('seting')                
                ->select('seting.idkasir')
                ->first();
              $idkasir=$cidkasir->idkasir;

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
             
              $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', 'xxxxx')
                      ->orderby('tran.notran', 'desc')
                      ->get();
                      //dd($rec);
              $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();    
               //dd($tot);              
             
              $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();      
                     //dd($induk);
              return view ('pageform')
              ->with('menuaktif','Input Kas Keluar')      
              ->with('judul','Form Kas Masuk')                    
              ->with('isi','transaksi.jurnal.kmform')              
              ->with('ly',$ly) 
              ->with('idrole',$idrole)
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ->with('ad',$idkk)
              ->with('idbual',$idkasir)
              ->with('tot',$tot)
              ->with('nobel',$nobel) 
              ->with('tglbel',$tglbel) 
              ->with('rec',$rec)
              //->with('stok',$stok)
              ->with('total',$total)
               
              ->with('namauser',$xxx); 
        }          


        public function simpankm(Request $request)

        {
           $xxx= Auth::user()->nama;
           $ly= Auth::user()->layout;
           $idrole= Auth::user()->rolesid; 
           $induk=Input::get('induk'); 
           $ad=Input::get('ad');  
          // $td=Input::get('td');  
           //dd($ak); 
           $v=\Validator::make($request->all(),
            [
              'nobel'=>'required',
              'idbual'=>'required',
              'ak'=>'required',
              'ad'=>'required',
              'tglbel'=>'required',        
              'kredit'=>'required',
               
            ]);
            if ($v->fails())
            {

               $tambah=true;
               $tglbel=Input::get('tglbel'); 
               $idbual=Input::get('idbual'); 
               $ak=Input::get('ak'); 
               $kettran=Input::get('kettran'); 
               $ad=Input::get('ad'); 
               $kredit=Input::get('kredit');
               $ket=Input::get('ket');    
               $nobel=Input::get('nobel');
              
               //$sup =DB::select("select * from pem");           
               //$stok =DB::select("select * from stok");
               $kojur='KM' ;

                $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'K')
                      ->orderby('tran.notran', 'asc')
                      ->get();

                 $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();            

                $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();  

                 

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
                     //dd($total);
                            \Session::flash('message','Ada field yang kosong.....!!!');
                return view ('pageform')
              ->with('menuaktif','Input Kas Keluar')      
              ->with('judul','Form Kas Masuk')                    
              ->with('isi','transaksi.jurnal.kmform')              
              ->with('nobel',$nobel)
              ->with('tglbel',$tglbel)
              ->with('idbual',$idbual)
              ->with('idrole',$idrole)
             // ->with('idakun',$idakun)             
              ->with('tot',$tot)
              ->with('ly',$ly)
              ->with('ad',$ad) 
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas)
              ->with('ket',$ket)        
              ->with('rec',$rec)        
              ->with('total',$total)
              ->with('tambah',$tambah)
              ->with('namauser',$xxx); 
               


            }

            DB::beginTransaction();
            $urut=DB::table('tran')
                     ->select(DB::raw('max(notran) as notran'))                               
                     ->first();         
            $notran =$urut->notran+1;   
             
            try {   
                 
                    $nobel = Input::get('nobel'); 
                    DB::delete('delete from jur where nojur = ?',[$nobel]);
                     //delete tran Kredit
                    DB::table('tran')
                    ->where('nojur',$nobel)
                    ->where('dk','D')
                    ->delete();
                     
                     $trank=array
                     (        
                            'idakun'=>Input::get('ak'),                           
                            'nojur'=>Input::get('nobel'), 
                            'ket'=>Input::get('kettran'), 
                            'notran'=>$notran, 
                            'dk'=>'K',
                            'k'=>Input::get('kredit')                          
                            
                     );
  
                    
                     DB::table('tran')->insertgetId($trank);


                      $tot=DB::table('tran')
                     ->select(DB::raw('sum(k) as tk'),DB::raw('sum(d) as td') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();

                      $tk = $tot->tk;     
                      
                      $jur=array
                      (  
                            'tgl' => date("Y-m-d", strtotime(Input::get('tglbel'))),               
                            'nojur'=>Input::get('nobel'), 
                            'idbual'=>Input::get('idbual'), 
                            'nilai'=>$tk,
                            'idakun'=>$ad,                          
                            'kojur'=>'KM',
                            'ctt'=>Input::get('ket')             
                      );
                      $trand=array
                     (        
                            'idakun'=>Input::get('ad'),                           
                            'nojur'=>Input::get('nobel'), 
                            'notran'=>$notran, 
                            'ket'=>Input::get('kettran'), 
                            'dk'=>'D',
                            'd'=>$tk                          
                            
                     );

                      DB::table('jur')->insertgetId($jur);
                      DB::table('tran')->insertgetId($trand);

                     
                   
                      DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                  }        
              
                  $rec=DB::table('jur')    
                        ->leftjoin('tran', 'tran.nojur', '=', 'jur.nojur')
                        ->leftjoin('akun', 'akun.id', '=', 'tran.idakun')

                      ->select('tran.*','tran.ket as kettran','akun.nakun as nakun',DB::raw('(d) as d'),DB::raw('(k) as k'))
                      ->where('jur.nojur', '=', $nobel)
                      ->where('tran.dk', '=', 'K')
                      ->orderby('tran.notran', 'asc')
                      ->get();

                 $total=DB::table('jur')
                     ->select('jur.*') 
                     ->where('jur.nojur', '=', $nobel)                                 
                     ->first();        
                 $tot=DB::table('tran')
                     ->select(DB::raw('sum(d) as td'),DB::raw('sum(k) as tk') ) 
                     ->groupby('tran.nojur')
                     ->where('tran.nojur', '=', $nobel)                                 
                     ->first();
                

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
                 //$nilai = $tot->td;
                 //DB::table('jur')->where('nojur',$nobel)->update($nilai);           
            
                     $tambah=true;
                     $nobel=Input::get('nobel'); 
                     $idbual=Input::get('idbual'); 
                     $tglbel=Input::get('tglbel'); 
                     $idmek=Input::get('idmek'); 
                     $idakun=''; 
                     $debet=Input::get('debet'); 
                     $kettran=Input::get('kettran'); 
                     $kredit=Input::get('kredit');           
                     $ket=Input::get('ket');                 
                     


                    return view ('pageform')
                    ->with('menuaktif','Input Jurnal Umum')      
                    ->with('judul','Form Kas Keluar')                    
                    ->with('isi','transaksi.jurnal.kmform')              
                    ->with('nobel',$nobel)
                    ->with('ly',$ly)
                    ->with('idrole',$idrole)
                    ->with('ad',$ad) 
                    ->with('kettran','-')
                    ->with('induk',$induk) 
                    ->with('menuatas',$menuatas)
                    ->with('tglbel',$tglbel)
                    ->with('idbual',$idbual)
                    ->with('tot',$tot) 
                    ->with('ket',$ket)           
                    ->with('rec',$rec)
                    //->with('stok',$stok)
                    ->with('total',$total)            
                    ->with('namauser',$xxx); 

                  return back()
                          ->with('success','Record Added successfully.');
              }

//================end kas masuk              


//---------------------lap jual--------------------

 public function indexlapjual(){
    // $result =DB::table('member')->paginate(10);
    //  $sup =DB::select("select * from pel");        
       
     
    $xxx= Auth::user()->nama;
     return view ('pageform')
               
        ->with('judulutama','Laporan Rincian Penjualan')            
        ->with('isi','lap.fljual')            
        ->with('namauser',$xxx); 
    // $result =DB::table('member')->paginate(10);
    //  $sup =DB::select("select * from pel");        
       
      
  } 



 public function indexlaplaba(){
   
    $xxx= Auth::user()->nama;
     return view ('pageform')
               
        ->with('judulutama','Laporan Laba Kotor')            
        ->with('isi','lap.fllaba')            
        ->with('namauser',$xxx);     
        
  } 


 public function indexflrkpjual(){
    // $result =DB::table('member')->paginate(10);
    //  $sup =DB::select("select * from pel");        
       
     
    $xxx= Auth::user()->nama;
     return view ('pageform')
               
        ->with('judulutama','Laporan Rekap Penjualan')            
        ->with('isi','lap.flrkpjual')            
        ->with('namauser',$xxx); 
  } 



 public function indexflrkpbeli(){
    // $result =DB::table('member')->paginate(10);
    //  $sup =DB::select("select * from pel");        
       
     
    $xxx= Auth::user()->nama;
     return view ('pageform')
               
        ->with('judulutama','Laporan Rekap Pembelian')            
        ->with('isi','lap.flrkpbeli')            
        ->with('namauser',$xxx); 
  } 

///--------------------end lap jual------------------        


//---------------------lap Beli--------------------

 public function indexlapbeli(){
    
    $xxx= Auth::user()->nama;
     return view ('pageform')
               
        ->with('judulutama','Laporan Rincian Pembelian')            
        ->with('isi','lap.flbeli')            
        ->with('namauser',$xxx); 


    
  } 

   public function indexlapkas(){
     
    $xxx= Auth::user()->nama;
     return view ('pageform')
               
        ->with('judulutama','Rincian Kas Keluar')            
        ->with('isi','lap.flkas')            
        ->with('namauser',$xxx);   
   
    
  } 



 public function indexlapcashflow(){
     $xxx= Auth::user()->nama;
     return view ('pageform')
               
        ->with('judulutama','Laporan Mutasi Kas')            
        ->with('isi','lap.flkas')            
        ->with('namauser',$xxx);     
    
  } 

///--------------------end lap jual------------------        





//-------------------------Beli-------------------------------
    
  public function indexjual(){
    // $result =DB::table('member')->paginate(10);
      $sup =DB::select("select * from pem");        
       
      $result=DB::table('belim')    
                  ->leftjoin('pem', 'pem.id', '=', 'belim.idsup')                                                         
                ->select('belim.*','pem.nama as napem','belim.total as total')
                ->orderby('belim.tglbel', 'desc')
                ->paginate(10);

     $result2=DB::table('belid')   
                  ->join('stok', 'stok.id', '=', 'belid.idstok')                     
                  ->join('belim', 'belim.nobel', '=', 'belid.nobel')                     
                ->select('belid.*','belid.kode','belid.jml','belid.harga','stok.nama as nama','stok.kode as kode')
                ->orderby('belid.id', 'desc')
                ->paginate(10);           



    $xxx= Auth::user()->nama;
    return view('jual.jual')
        ->with('data',$result)  
        ->with('data3',$result2) 
        ->with('sup',$sup)  
        ->with('judulutama','Master')            
        ->with('judul','Master Detail mbelian')            
        ->with('namauser',$xxx); 
  } 


//---------------- end Jual-----------------------------------








//-------------------------marchant-------------------------------
   
  public function indexmar(){
        
    $users = DB::table('users')
            ->join('marchant', 'users.id', '=', 'marchant.userid')         
            ->select('users.*', 'marchant.*', 'marchant.nama')
            ->paginate(10);
    //$users = DB::table('users')
      //      ->leftJoin('marchant', 'users.id', '=', 'marchant.userid')
        //    ->paginate(4);

    $xxx= Auth::user()->nama;
    return view('marchant.indexmar')
        ->with('data',$users)  
        ->with('judul','Data Marchant')            
        ->with('namauser',$xxx); 
  } 


 public function enrollsiswamodal(){
        
    $users = DB::table('users')            
            ->select('users.*')
            ->paginate(10);
     
    $xxx= Auth::user()->nama;
    return view('enroll.data_pinjam')
        ->with('data',$users)  
        ->with('judul','Data Marchant')            
        ->with('namauser',$xxx); 
  } 





  public function formmar(){ 
      $xxx= Auth::user()->nama;         
      return view ('marchant.form')
        ->with('judul','Form Marchant')            
        ->with('namauser',$xxx); ;
  }


  public function savemar(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'nama'=>'required',
        'email'=>'required',
        'telp'=>'required',
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'email'=>Input::get('email'),     
              'nama'=>Input::get('nama'),                       
              'rolesid'=>Input::get('rolesid'),             
              'password'=>bcrypt(Input::get('password'))
       );
       $idmar=DB::table('users')->insertgetId($pro2);
 
        foreach(Input::file('file') as $image) 
      {
 
              $newfile= $image->getClientOriginalName();
              $fullpathb='logomar/'.$newfile;
              //echo $newfile;
              $newfile= time().$image->getClientOriginalName();
              $fullpath =$image->move('logo/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);
              $data=array (
                  'id'=>$idmar,              
                  'userid'=>$idmar,              
                  'nama'=>Input::get('nama'),
                  'alamat'=>Input::get('alamat'),
                  'contact'=>Input::get('contact'),              
                  'fb'=>Input::get('fb'),
                  'twiter'=>Input::get('twiter'),
                  'pinbb'=>Input::get('pinbb'),
                  'ketentuan'=>Input::get('ketentuan'),
                  'telp'=>Input::get('telp'),
                  'dv'=>Input::get('dv'),
                  'dm'=>Input::get('dm'),                  
                  'logo'      =>  $realpath
                  
                ); 
        $d=DB::table('marchant')->insertgetId($data);    
        }


            if ($d>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('indexmar');
  }
 

  public function updatemar(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'nama'=>'required',
        'email'=>'required',
        'telp'=>'required',
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }
       if (Input::get('password')!='') {
        $pro2=array
       (        
              'email'=>Input::get('email'),                           
              'nama'=>Input::get('nama'),
              'rolesid'=>Input::get('rolesid'),             
              'password'=>bcrypt(Input::get('password'))
       ); 

       }else{
        $pro2=array
       (        
              'nama'=>Input::get('nama'),
              'email'=>Input::get('email'),
              'rolesid'=>Input::get('rolesid')
       );
       }

       $ee=DB::table('users')->where('id',$post['id'])->update($pro2); 


           $pro=array(               
              'nama'=>Input::get('nama'),
              'alamat'=>Input::get('alamat'),
              'contact'=>Input::get('contact'),             
              'fb'=>Input::get('fb'),
              'twiter'=>Input::get('twiter'),
              'pinbb'=>Input::get('pinbb'),
              'ketentuan'=>Input::get('ketentuan'),
              'telp'=>Input::get('telp'),
              'dv'=>Input::get('dv'),
              'dm'=>Input::get('dm')

            );

            $e=DB::table('marchant')->where('id',$post['id'])->update($pro); 
            if ($e>0 and $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
            else{
             \Session::flash('message','Gagal update data.....'); 
            }
          return redirect('indexmar');
  }
 
  
  public function editmar($id){
    $xxx= Auth::user()->nama;
    $result = DB::table('users')
            ->leftjoin('marchant', 'users.id', '=', 'marchant.id')            
            ->select('users.*', 
              'marchant.telp',
              'marchant.nama',
              'marchant.alamat',
              'marchant.fb',
              'marchant.twiter',
              'marchant.dv',
              'marchant.contact',
              'marchant.pinbb',
              'marchant.ketentuan',
              'marchant.dm')
              ->where('users.id', '=', $id)
              ->first();

     
  return view('marchant.edit')
        ->with('abc',$result)        
        ->with('judul','Update Marchant')        
        ->with('namauser',$xxx); 
  }


  public function deletemar($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
             $i =DB::table ('marchant')->where ('id',$id)->delete();
             $ii =DB::table ('users')->where ('id',$id)->delete();
             if($ii>0 and $i> 0)
             {
                \Session::flash('message','Sukses Menghapus.....');
              return redirect('indexmar')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end marchant-----------------------------------





//-------------------------Ruang-------------------------------
    
  public function indexruang(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('ruang')                                             
                ->select('ruang.*')
                ->orderby('ruang.kode', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('ruang.indexruang')
        ->with('data',$result)  
        ->with('judul','Daftar Ruangan')            
        ->with('namauser',$xxx); 
  } 


  public function formruang(){ 
      $xxx= Auth::user()->nama;         
      return view ('ruang.form')
        ->with('judul','Form Ruangan')            
        ->with('namauser',$xxx); ;
  }


  public function saveruang(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'kode'=>Input::get('kode'),                            
              'nama'=>Input::get('nama'),
             
       );
       $idmar=DB::table('ruang')->insertgetId($pro2);

      
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('ruang');
  }
 

   public function updateruang(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
         
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }
          $pro2=array
       (        
              'kode'=>Input::get('kode'),
              'nama'=>Input::get('nama')
              
       );
       $ee=DB::table('ruang')->where('id',$post['id'])->update($pro2); 

 
            
            if ( $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
             
            
          return redirect('ruang');
  }
 
  
  public function editruang($id){
    $xxx= Auth::user()->nama;
    $result = DB::table('ruang')
                       
            ->select('ruang.*') 
              ->where('ruang.id', '=', $id)
              ->first();

     
  return view('ruang.edit')
        ->with('abc',$result)        
        ->with('judul','Update Ruangan')        
        ->with('namauser',$xxx); 
  }


  public function deleteruang($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
            
             $ii =DB::table ('ruang')->where ('id',$id)->delete();
             if($ii>0 )
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('ruang')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end Ruang-----------------------------------



//-------------------------Kelas-------------------------------
    
  public function indexkelas(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('kelas')                                             
                ->select('kelas.*')
                ->orderby('kelas.kode', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('kelas.indexkelas')
        ->with('data',$result)  
        ->with('judul','Daftar Kelas')            
        ->with('namauser',$xxx); 
  } 


  public function formkelas(){ 
      $xxx= Auth::user()->nama;         
      return view ('kelas.form')
        ->with('judul','Form Kelas')            
        ->with('namauser',$xxx); 
  }


  public function savekelas(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'kode'=>Input::get('kode'),                            
              'nama'=>Input::get('nama'),
             
       );
       $idmar=DB::table('kelas')->insertgetId($pro2);

      
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('ruang');
  }
 
   public function updatekelasmodal(Request $request)
        {
            $id = $request -> edit_id;
            $data = Kelas::find($id);
            $data -> kode = $request -> edit_first_name;
            $data -> last_name = $request -> edit_last_name;
            $data -> email = $request -> edit_email;
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }
 


   public function updatekelas(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
         
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }
          $pro2=array
       (        
              'kode'=>Input::get('kode'),
              'nama'=>Input::get('nama')
              
       );
       $ee=DB::table('kelas')->where('id',$post['id'])->update($pro2); 

 
            
            if ( $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
             
            
          return redirect('kelas');
  }
 
  
  public function editkelas($id){
    $xxx= Auth::user()->nama;
    $result = DB::table('kelas')
                       
            ->select('kelas.*') 
              ->where('kelas.id', '=', $id)
              ->first();

     
  return view('kelas.edit')
        ->with('abc',$result)        
        ->with('judul','Update Kelas')        
        ->with('namauser',$xxx); 
  }


  public function deletekelas($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
            
             $ii =DB::table ('kelas')->where ('id',$id)->delete();
             if($ii>0 )
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('kelas')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end Ruang-----------------------------------




//-------------------------Enroll-------------------------------
    
  public function indexenroll(){
    // $result =DB::table('member')->paginate(10);
     
      $result2=DB::table('siswa')
                ->join('kelamin', function ($join) {
                    $join->on('siswa.jeka', '=', 'kelamin.id');
                })
                //->where('users.rolesid', '=', 1)                
                ->select('siswa.*', 'kelamin.nama as nakel')
                ->orderby('siswa.nama', 'asc')
                ->paginate(10);         
      $kelas =DB::select("select * from kelas");      
      $idkelas =0;                                  


    $xxx= Auth::user()->nama;
    return view('enroll.indexenroll')
        ->with('data',$result2)          
        ->with('kelas',$kelas)  
        ->with('idkelas',$idkelas)
        ->with('judul','Enroll Siswa ')            
        ->with('namauser',$xxx); 
  } 
 

 public function enrollsiswa(){
    // $result =DB::table('member')->paginate(10);
       $result=DB::table('kelassiswa')
                ->join('kelas', function ($join) {
                    $join->on('kelassiswa.idkelas', '=', 'kelas.id');
                })
                //->where('users.rolesid', '=', 1)                
                ->select('kelas.nama','kelas.kode',  DB::raw('SUM(kelassiswa.idsiswa) as jmlmhsw'),'kelas.id')                
                ->groupby('kelassiswa.idkelas' )
                ->paginate(10);


    $xxx= Auth::user()->nama;
    return view('enroll.data_pinjam')
        ->with('data',$result)  
        ->with('judul','Daftar Siswa Per Kelas')            
        ->with('namauser',$xxx); 
  } 
  public function formenroll(){ 
      $xxx= Auth::user()->nama;         
      return view ('enroll.form')
        ->with('judul','Enroll Siswa')            
        ->with('namauser',$xxx); ;
  }


  public function savekelasx(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'kode'=>Input::get('kode'),                            
              'nama'=>Input::get('nama'),
             
       );
       $idmar=DB::table('kelas')->insertgetId($pro2);

      
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('ruang');
  }


  public function insertenroll()
  {
       
 
       $pro2=array
       (        
              'idkelas'=>Input::get('id'),                            
              'idsiswa'=>Input::get('id2'),
              'jeka'  =>Input::get('jeka'),

       );

                
var_dump($id);
var_dump($id2);

       $idmar=DB::table('kelas')->insertgetId($pro2);

      
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('ruang');
  }
 

   public function updatekelasx(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
         
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }
          $pro2=array
       (        
              'kode'=>Input::get('kode'),
              'nama'=>Input::get('nama')
              
       );
       $ee=DB::table('kelas')->where('id',$post['id'])->update($pro2); 

 
            
            if ( $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
             
            
          return redirect('kelas');
  }
 
  
  public function editkelasx($id){
    $xxx= Auth::user()->nama;
    $result = DB::table('kelas')
                       
            ->select('kelas.*') 
              ->where('kelas.id', '=', $id)
              ->first();

     
  return view('kelas.edit')
        ->with('abc',$result)        
        ->with('judul','Update Kelas')        
        ->with('namauser',$xxx); 
  }


  public function deletekelasx($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
            
             $ii =DB::table ('kelas')->where ('id',$id)->delete();
             if($ii>0 )
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('kelas')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end Enroll-----------------------------------



//-------------------------Kelomp0k-------------------------------
    
  public function indexkel(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('kelompok')                                             
                ->select('kelompok.*')
                ->orderby('kelompok.kode', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('kelompok.indexkel')
        ->with('data',$result)  
        ->with('judul','Daftar Kelompok')            
        ->with('namauser',$xxx); 
  } 


  public function formkel(){ 
      $xxx= Auth::user()->nama;         
      return view ('kelompok.form')
        ->with('judul','Form Kelompok')            
        ->with('namauser',$xxx); ;
  }


  public function savekel(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'kode'=>Input::get('kode'),                            
              'nama'=>Input::get('nama'),
             
       );
       $idmar=DB::table('kelompok')->insertgetId($pro2);

      
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('kelompok');
  }
 

   public function updatekel(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
         
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }
          $pro2=array
       (        
              'kode'=>Input::get('kode'),
              'nama'=>Input::get('nama')
              
       );
       $ee=DB::table('kelompok')->where('kelid',$post['id'])->update($pro2); 

 
            
            if ( $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
             
            
          return redirect('kelompok');
  }
 
  
  public function editkel($id){
    $xxx= Auth::user()->nama;
    $result = DB::table('kelompok')
                       
            ->select('kelompok.*') 
              ->where('kelompok.kelid', '=', $id)
              ->first();

     
  return view('kelompok.edit')
        ->with('abc',$result)        
        ->with('judul','Update Kelompok')        
        ->with('namauser',$xxx); 
  }


  public function deletekel($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
            
             $ii =DB::table ('kelompok')->where ('kelid',$id)->delete();
             if($ii>0 )
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('kelompok')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end Kelompok-----------------------------------



//-------------------------Mapel-------------------------------
    
  public function indexmapel(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('mapel')                                             
                ->select('mapel.*')
                ->orderby('mapel.kode', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('mapel.indexmapel')
        ->with('data',$result)  
        ->with('judul','Daftar Matapelajaran')            
        ->with('namauser',$xxx); 
  } 


  public function formmapel(){ 
      $xxx= Auth::user()->nama;         
      return view ('mapel.form')
        ->with('judul','Form Matapelajaran')            
        ->with('namauser',$xxx); ;
  }


  public function savemapel(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'kode'=>Input::get('kode'),                            
              'nama'=>Input::get('nama'),
             
       );
       $idmar=DB::table('mapel')->insertgetId($pro2);

      
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('mapel');
  }
 

   public function updatemapel(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'kode'=>'required',
        'nama'=>'required',
         
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }
          $pro2=array
       (        
              'kode'=>Input::get('kode'),
              'nama'=>Input::get('nama')
              
       );
       $ee=DB::table('mapel')->where('id',$post['id'])->update($pro2); 

 
            
            if ( $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
             
            
          return redirect('mapel');
  }
 
  
  public function editmapel($id){
    $xxx= Auth::user()->nama;
    $result = DB::table('mapel')
                       
            ->select('mapel.*') 
              ->where('mapel.id', '=', $id)
              ->first();

     
  return view('mapel.edit')
        ->with('abc',$result)        
        ->with('judul','Update Matapelajaran')        
        ->with('namauser',$xxx); 
  }


  public function deletemapel($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
            
             $ii =DB::table ('mapel')->where ('id',$id)->delete();
             if($ii>0 )
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('mapel')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end Kelompok-----------------------------------



//-------------------------Pegawai-------------------------------
    
  public function indexpeg(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('kar')
                ->join('kelamin', function ($join) {
                    $join->on('kar.jeka', '=', 'kelamin.id');
                })
                //->where('users.rolesid', '=', 1)                
                ->select('kar.*', 'kelamin.nama as nakel')
                ->orderby('kar.nama', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('peg.indexpeg')
        ->with('data',$result)  
        ->with('judul','Daftar Pegawai')            
        ->with('namauser',$xxx); 
  } 


  public function formpeg(){ 
      $xxx= Auth::user()->nama;         
      $kategori =DB::select("select * from kelamin");  

      return view ('peg.form')
        ->with('kategori',$kategori) 
        ->with('judul','Form Pegawai')            
        ->with('namauser',$xxx); ;
  }


 

  public function savepeg(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'noc'=>'required',
        'nip'=>'required',
        'kelamin'=>'required',
        'ttgl'=>'required',
        'alamat'=>'required',
        'nohp'=>'required',


        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'no'=>Input::get('noc'),                            
              'nip'=>Input::get('nip'),
              'jeka'=>Input::get('kelamin'),
              'tltgll'=>Input::get('ttgl'),
              'alamat'=>Input::get('alamat'),
              'nohp'=>Input::get('nohp'),
              'nama'=>Input::get('nama'),
             
       );
       $idmar=DB::table('kar')->insertgetId($pro2);    
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('pegawai');
  }
 

   public function updatepeg(Request $request)
  {
      $post=$request->all();
      
           $pro2=array
       (        
              'no'=>Input::get('noc'),                            
              'nip'=>Input::get('nip'),
              'jeka'=>Input::get('kelamin'),
              'tltgll'=>Input::get('ttgl'),
              'alamat'=>Input::get('alamat'),
              'nohp'=>Input::get('nohp'),
              'nama'=>Input::get('nama'),
       );
       $ee=DB::table('kar')->where('id',$post['id'])->update($pro2); 

 
            
            if ( $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
             
            
          return redirect('pegawai');
  }
 
  
  public function editpeg($id){
     $kategori =DB::select("select * from kelamin");  
     $xxx= Auth::user()->nama;    
  $result=DB::table('kar')
                ->join('kelamin', function ($join) {
                    $join->on('kar.jeka', '=', 'kelamin.id');
                })
                ->where('kar.id', '=', $id)                          
                ->select('kar.*', 'kelamin.nama as nakel')                
                ->first();

 
     
  return view('peg.edit')
        ->with('abc',$result)  
         ->with('kategori',$kategori)       
        ->with('judul','Update Pegawai')        
        ->with('namauser',$xxx); 
  }


  public function deletepeg($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
            
             $ii =DB::table ('kar')->where ('id',$id)->delete();
             if($ii>0 )
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('pegawai')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end Mapel-----------------------------------



//-------------------------Guru-------------------------------
    
  public function indexgur(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('guru')
                ->join('kelamin', function ($join) {
                    $join->on('guru.jeka', '=', 'kelamin.id');
                })
                //->where('users.rolesid', '=', 1)                
                ->select('guru.*', 'kelamin.nama as nakel')
                ->orderby('guru.nama', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('guru.indexgur')
        ->with('data',$result)  
        ->with('judul','Daftar Guru')            
        ->with('namauser',$xxx); 
  } 


  public function formgur(){ 
      $xxx= Auth::user()->nama;         
      $kategori =DB::select("select * from kelamin");  

      return view ('guru.form')
        ->with('kategori',$kategori) 
        ->with('judul','Form Guru')            
        ->with('namauser',$xxx); ;
  }


 

  public function savegur(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'noc'=>'required',
        'nip'=>'required',
        'kelamin'=>'required',
        'ttgl'=>'required',
        'alamat'=>'required',
        'nohp'=>'required',


        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'no'=>Input::get('noc'),                            
              'nip'=>Input::get('nip'),
              'jeka'=>Input::get('kelamin'),
              'tltgll'=>Input::get('ttgl'),
              'alamat'=>Input::get('alamat'),
              'nohp'=>Input::get('nohp'),
              'nama'=>Input::get('nama'),
             
       );
       $idmar=DB::table('guru')->insertgetId($pro2);    
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('guru');
  }
 

   public function updategur(Request $request)
  {
      $post=$request->all();
      
           $pro2=array
       (        
              'no'=>Input::get('noc'),                            
              'nip'=>Input::get('nip'),
              'jeka'=>Input::get('kelamin'),
              'tltgll'=>Input::get('ttgl'),
              'alamat'=>Input::get('alamat'),
              'nohp'=>Input::get('nohp'),
              'nama'=>Input::get('nama'),
       );
       $ee=DB::table('guru')->where('id',$post['id'])->update($pro2); 

 
            
            if ( $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
             
            
          return redirect('guru');
  }
 
  
  public function editgur($id){
     $kategori =DB::select("select * from kelamin");  
     $xxx= Auth::user()->nama;    
  $result=DB::table('guru')
                ->join('kelamin', function ($join) {
                    $join->on('kar.jeka', '=', 'kelamin.id');
                })
                ->where('guru.id', '=', $id)                          
                ->select('guru.*', 'kelamin.nama as nakel')                
                ->first();

 
     
  return view('guru.edit')
        ->with('abc',$result)  
         ->with('kategori',$kategori)       
        ->with('judul','Update Guru')        
        ->with('namauser',$xxx); 
  }


  public function deletegur($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
            
             $ii =DB::table ('guru')->where ('id',$id)->delete();
             if($ii>0 )
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('guru')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end Mapel-----------------------------------





//-------------------------Siswa-------------------------------
    
  public function indexsis(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('siswa')
                ->join('kelamin', function ($join) {
                    $join->on('siswa.jeka', '=', 'kelamin.id');
                })
                //->where('users.rolesid', '=', 1)                
                ->select('siswa.*', 'kelamin.nama as nakel')
                ->orderby('siswa.nama', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('siswa.indexsis')
        ->with('data',$result)  
        ->with('judul','Daftar Siswa')            
        ->with('namauser',$xxx); 
  } 
//
//protected $table_defake = "ake";
//protected $table_defsauka = "sauka";
//protected $table_defsauti = "sauti";
  //protected $table_defstatus = "status";
 // protected $table_deftiber = "tiber";
  //protected $table_defjarak = "jarak";
 // protected $table_defpddk = "pddk";
 // protected $table_defagama = "agama";
 // protected $table_defkerja = "kerja";
 // protected $table_defhasil = "hasil";
 // protected $table_defpddkibu = "pddk";


  public function formsis(){ 
      $xxx= Auth::user()->nama;         
      $ake =DB::select("select * from ake");  
      $jeka =DB::select("select * from kelamin");        
      $sauka =DB::select("select * from sauka");  
      $sauti =DB::select("select * from sauti");  
      $status =DB::select("select * from status");  
      $tiber =DB::select("select * from tiber");  
      $jarak =DB::select("select * from jarak");  
      $pddk =DB::select("select * from pddk");  
      $agama =DB::select("select * from agama");  
      $kerja =DB::select("select * from kerja");  
      $hasil =DB::select("select * from hasil");  
      $pddk =DB::select("select * from pddk");  
       

      return view ('siswa.form')
        ->with('ake',$ake) 
        ->with('jeka',$jeka) 
        ->with('sauka',$sauka) 
        ->with('sauti',$sauti) 
        ->with('status',$status) 
        ->with('tiber',$tiber) 
        ->with('jarak',$jarak) 
        ->with('pddk',$pddk) 
        ->with('agama',$agama) 
        ->with('kerja',$kerja) 
        ->with('hasil',$hasil) 
        ->with('judul','Form Siswa')            
        ->with('namauser',$xxx); ;
  }


 

  public function savesis(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
         
        'nis'=>'required',        
        'nama'=>'required',


        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
               
       
        'nis'  =>Input::get('nis'),
        'nama'  =>Input::get('nama'),
        'napa'  =>Input::get('napa'),
        'jeka'  =>Input::get('jeka'),
        'tltgll'  =>Input::get('tltgll'),
        'akeid'  =>Input::get('akeid'),
        'saukaid'  =>Input::get('saukaid'),
        'sautiid'  =>Input::get('sautiid'),
        'sta'  =>Input::get('sta'),
        'bahasa'  =>Input::get('bahasa'),
        'alamat'  =>Input::get('alamat'),
        'nohp'  =>Input::get('nohp'),
        'tiberid'  =>Input::get('tiberid'),
        'jarakid'  =>Input::get('jarakid'),
        'goldar'  =>Input::get('goldar'),
        'sakit'  =>Input::get('sakit'),
        'kelainan'  =>Input::get('kelainan'),
        'tirat'  =>Input::get('tirat'),
        'sekasal'  =>Input::get('sekasal'),
        'alsek'  =>Input::get('alsek'),
        'tglnoijazah' =>Input::get('tglnoijazah'),
        'nil41'  =>Input::get('nil41'),
        'nil42'  =>Input::get('nil42'),
        'nil51'  =>Input::get('nil51'),
        'nil52'  =>Input::get('nil52'),
        'nil61'  =>Input::get('nil61'),
        'lamabelajar'  =>Input::get('lamabelajar'),
        'nisn'  =>Input::get('nisn'),
        'hobi' =>Input::get('hobi'),
        'namaayah'  =>Input::get('namaayah'),
        'tltgllayah'  =>Input::get('tltgllayah'),
        'pddkayah'  =>Input::get('pddkayah'),
        'kerjaayah'  =>Input::get('kerjaayah'),
        'isilainayah'  =>Input::get('isilainayah'),
        'hasilayah'  =>Input::get('hasilayah'),
        'alamatayah'  =>Input::get('alamatayah'),
        'nohpayah'  =>Input::get('nohpayah'),
        'statusayah'  =>Input::get('statusayah'),
        'namaibu'  =>Input::get('namaibu'),
        'tltgllibu'  =>Input::get('tltgllibu'),
        'pddkibu'  =>Input::get('pddkibu'),
        'kerjaibu'  =>Input::get('kerjaibu'),
        'isilainibu'  =>Input::get('isilainibu'),
        'hasilibu'  =>Input::get('hasilibu'),
        'alamatibu'  =>Input::get('alamatibu'),
        'nohpibu'  =>Input::get('nohpibu'),
        'namawali'  =>Input::get('namawali'),
        'tltgllwali'  =>Input::get('tltgllwali'),
        'pddkwali'  =>Input::get('pddkwali'),
        'kerjawali'  =>Input::get('kerjawali'),
        'isilainwali'  =>Input::get('isilainwali'),
        'hasilwali'  =>Input::get('hasilwali'),
        'alamatwali'  =>Input::get('alamatwali'),
        'nohpwali'  =>Input::get('nohpwali'),
        'agamaid'  =>Input::get('agamaid'),
        'tglterim'  =>Input::get('tglterim'),
        'kelasterima'  =>Input::get('kelasterima'),
        'tglterim'  =>Input::get('tglterim'),


             
       );
       $idmar=DB::table('siswa')->insertgetId($pro2);    
 
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('siswa');
  }
 

   public function updatesis(Request $request)
  {
      $post=$request->all();
      
           $pro2=array
       (        
               
       
        'nis'  =>Input::get('nis'),
        'nama'  =>Input::get('nama'),
        'napa'  =>Input::get('napa'),
        'jeka'  =>Input::get('jeka'),
        'tltgll'  =>Input::get('tltgll'),
        'akeid'  =>Input::get('akeid'),
        'saukaid'  =>Input::get('saukaid'),
        'sautiid'  =>Input::get('sautiid'),
        'sta'  =>Input::get('sta'),
        'bahasa'  =>Input::get('bahasa'),
        'alamat'  =>Input::get('alamat'),
        'nohp'  =>Input::get('nohp'),
        'tiberid'  =>Input::get('tiberid'),
        'jarakid'  =>Input::get('jarakid'),
        'goldar'  =>Input::get('goldar'),
        'sakit'  =>Input::get('sakit'),
        'kelainan'  =>Input::get('kelainan'),
        'tirat'  =>Input::get('tirat'),
        'sekasal'  =>Input::get('sekasal'),
        'alsek'  =>Input::get('alsek'),
        'tglnoijazah' =>Input::get('tglnoijazah'),
        'nil41'  =>Input::get('nil41'),
        'nil42'  =>Input::get('nil42'),
        'nil51'  =>Input::get('nil51'),
        'nil52'  =>Input::get('nil52'),
        'nil61'  =>Input::get('nil61'),
        'lamabelajar'  =>Input::get('lamabelajar'),
        'nisn'  =>Input::get('nisn'),
        'hobi' =>Input::get('hobi'),
        'namaayah'  =>Input::get('namaayah'),
        'tltgllayah'  =>Input::get('tltgllayah'),
        'pddkayah'  =>Input::get('pddkayah'),
        'kerjaayah'  =>Input::get('kerjaayah'),
        'isilainayah'  =>Input::get('isilainayah'),
        'hasilayah'  =>Input::get('hasilayah'),
        'alamatayah'  =>Input::get('alamatayah'),
        'nohpayah'  =>Input::get('nohpayah'),
        'statusayah'  =>Input::get('statusayah'),
        'namaibu'  =>Input::get('namaibu'),
        'tltgllibu'  =>Input::get('tltgllibu'),
        'pddkibu'  =>Input::get('pddkibu'),
        'kerjaibu'  =>Input::get('kerjaibu'),
        'isilainibu'  =>Input::get('isilainibu'),
        'hasilibu'  =>Input::get('hasilibu'),
        'alamatibu'  =>Input::get('alamatibu'),
        'nohpibu'  =>Input::get('nohpibu'),
        'namawali'  =>Input::get('namawali'),
        'tltgllwali'  =>Input::get('tltgllwali'),
        'pddkwali'  =>Input::get('pddkwali'),
        'kerjawali'  =>Input::get('kerjawali'),
        'isilainwali'  =>Input::get('isilainwali'),
        'hasilwali'  =>Input::get('hasilwali'),
        'alamatwali'  =>Input::get('alamatwali'),
        'nohpwali'  =>Input::get('nohpwali'),
        'agamaid'  =>Input::get('agamaid'),
        'tglterim'  =>Input::get('tglterim'),
        'kelasterima'  =>Input::get('kelasterima'),
        'tglterim'  =>Input::get('tglterim'),


             
       );
       $ee=DB::table('siswa')->where('id',$post['id'])->update($pro2); 

 
            
            if ( $ee>0){
              \Session::flash('message','Sukses update data.....');
            }
             
            
          return redirect('siswa');
  }
 
  
  public function editsis($id){
     $kategori =DB::select("select * from kelamin");  
     $xxx= Auth::user()->nama; 


  $result=DB::table('siswa')
                ->join('kelamin', function ($join) {
                    $join->on('siswa.jeka', '=', 'kelamin.id');
                })
                ->where('siswa.id', '=', $id)                          
                ->select('siswa.*', 'kelamin.nama as nakel')                
                ->first();

 
            
      $ake =DB::select("select * from ake");  
      $jeka =DB::select("select * from kelamin");        
      $sauka =DB::select("select * from sauka");  
      $sauti =DB::select("select * from sauti");  
      $status =DB::select("select * from status");  
      $tiber =DB::select("select * from tiber");  
      $jarak =DB::select("select * from jarak");  
      $pddk =DB::select("select * from pddk");  
      $agama =DB::select("select * from agama");  
      $kerja =DB::select("select * from kerja");  
      $hasil =DB::select("select * from hasil");  
      $pddk =DB::select("select * from pddk");  
  return view('siswa.edit')
        ->with('abc',$result)  
           ->with('ake',$ake) 
        ->with('jeka',$jeka) 
        ->with('sauka',$sauka) 
        ->with('sauti',$sauti) 
        ->with('status',$status) 
        ->with('tiber',$tiber) 
        ->with('jarak',$jarak) 
        ->with('pddk',$pddk) 
        ->with('agama',$agama) 
        ->with('kerja',$kerja) 
        ->with('hasil',$hasil) 
        ->with('judul','Update Guru')        
        ->with('namauser',$xxx); 
  }


  public function deletesis($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
            
             $ii =DB::table ('siswa')->where ('id',$id)->delete();
             if($ii>0 )
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('siswa')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end Mapel-----------------------------------











//-------------------------User-------------------------------
    
  public function indexuser(){
    // $result =DB::table('member')->paginate(10);
      $result=DB::table('users')
                ->join('roles', function ($join) {
                    $join->on('users.rolesid', '=', 'roles.id');
                })
                ->where('users.rolesid', '=', 1)                
                ->select('users.*', 'roles.rolename')
                ->orderby('users.nama', 'asc')
                ->paginate(10);

    $xxx= Auth::user()->nama;
    return view('user.indexuser')
        ->with('data',$result)  
        ->with('judul','Data User')            
        ->with('namauser',$xxx); 
  } 


  public function formuser(){ 
      $xxx= Auth::user()->nama;         
      return view ('user.form')
        ->with('judul','Form User')            
        ->with('namauser',$xxx); ;
  }


  public function saveuser(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'nama'=>'required',
        'email'=>'required'
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       $pro2=array
       (        
              'email'=>Input::get('email'),                            
              'nama'=>Input::get('nama'),                            
              'rolesid'=>Input::get('rolesid'),             
              'password'=>bcrypt(Input::get('password'))
       );
       $idmar=DB::table('users')->insertgetId($pro2);

      

          
            if ($idmar>0){
              \Session::flash('message','Sukses Menyimpan.....');
            }
          return redirect('indexuser');
  }
 

   public function updateuser(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'nama'=>'required',
        'email'=>'required',
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }
       if (Input::get('password')!='') {
        $pro2=array
       (        
              'email'=>Input::get('email'),                           
              'nama'=>Input::get('nama'),                           
              'rolesid'=>Input::get('rolesid'),             
              'password'=>bcrypt(Input::get('password'))
       ); 

       }else{
        $pro2=array
       (        
              'email'=>Input::get('email'),
              'nama'=>Input::get('nama'),          
              'rolesid'=>Input::get('rolesid')
       );
       }

       $ee=DB::table('users')->where('id',$post['id'])->update($pro2); 


         
            if ($ee>0 ){
              \Session::flash('message','Sukses update data.....');
            }
            else{
             \Session::flash('message','Gagal update data.....'); 
            }
          return redirect('indexuser');
  }
 
  
  public function edituser($id){
    $xxx= Auth::user()->nama;
    $result = DB::table('users')
            ->leftjoin('roles', 'users.rolesid', '=', 'roles.id')            
            ->select('users.*', 
              'roles.rolename',
              'users.nama',
              'users.email')              
              ->where('users.id', '=', $id)
              ->first();     
  return view('user.edit')
        ->with('abc',$result)        
        ->with('judul','Update User')        
        ->with('namauser',$xxx); 
  }


  public function deleteusr($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;          
       //dd($xxx);
        {
             
             $ii =DB::table ('users')->where ('id',$id)->delete();
             if($i>0 and $i> 0)
             {
               \Session::flash('message','Sukses Menghapus.....');
              return redirect('indexuser')          
                ->with('namauser',$xxx); 
             }

        }     
      
  }

//---------------- end marchant-----------------------------------





//-------------------------foto deal kecil marchant-------------------------------
  
  public function indexfotodeal(){
    //$result =DB::table('marchant')->paginate(10);
 //   $result =DB::select("select * from users where  rolesid=3");
    $result=DB::table('mard')
                ->leftjoin('marchant', function ($join) {                
                $join->on('mard.idmar', '=', 'marchant.id');
                })                
                ->leftjoin('kategori', function ($join) {                
                $join->on('kategori.id', '=', 'mard.kategori');
                })                
                ->select('mard.*', 'marchant.*','kategori.nama as namakate')
                ->orderby('marchant.nama', 'asc')
                ->paginate(10);
          
            $xxx= Auth::user()->nama;
            return view('marchant.indexfotodeal')
                ->with('data',$result)                 
                ->with('judul','Foto Deal Up Kecil')            
                ->with('namauser',$xxx); 
  } 


  public function formdeal(){ 
      $xxx= Auth::user()->nama;         
      $kategori =DB::select("select * from kategori");  
      $mar =DB::select("select id, nama from marchant");  

      return view ('marchant.formdeal')
      ->with('judul','Form Foto Deal Up Kecil')            
      ->with('kategori',$kategori)  
      ->with('mms',$mar)  
      ->with('namauser','$xxx');
  }


  public function formdealsave(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'idmar'=>'required',
        'hrgnormal'=>'required',
        'hrgdisc'=>'required',
        'prodname'=>'required',
        'proddiscr'=>'required',
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       foreach(Input::file('file') as $image) 
      {

              $prod=$image->getClientOriginalName();
              $prods=$image->getSize();

              $prodtext=$image->getClientOriginalExtension();
              $newfile= $image->getClientOriginalName();
              $fullpathb='besar/'.$newfile;
              //echo $newfile;
              $fullpath =$image->move('kecil/',$newfile);
              //$fullpathb =$image->move('besar/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);
              $data=array (
                  'idmar'     =>Input::get('idmar'),
                  'prodname'  =>Input::get('prodname'),
                  'proddiscr'  =>Input::get('proddiscr'),
                  'hrgnormal' =>Input::get('hrgnormal'),
                  'kategori'  =>Input::get('kategori'),
                  'hrgdisc'   =>Input::get('hrgdisc'),
                  'prodsize'  => $prods,
                  'prodtext'  => $prodtext,
                  'filename'  => $newfile,
                  'path'      =>  $realpath
                   
                ); 
              $i=DB::table('mard')->insertgetId($data);              
        }

         foreach(Input::file('filed') as $image) 
      {

              $prod=$image->getClientOriginalName();
              $prods=$image->getSize();

              $prodtext=$image->getClientOriginalExtension();
              $newfile= $image->getClientOriginalName();
              $fullpathb='besar/'.$newfile;
              //echo $newfile;
              $fullpath =$image->move('besar/',$newfile);
              //$fullpathb =$image->move('besar/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);
              $data=array (
                  'idkecil'   =>$i,
                  'idmar'     =>Input::get('idmar'),
                  'prodname'  =>Input::get('prodname'),
                  'proddiscr'  =>Input::get('proddiscr'),
                  'hrgnormal' =>Input::get('hrgnormal'),
                  'kategori'  =>Input::get('kategori'),
                  'hrgdisc'   =>Input::get('hrgdisc'),
                  'prodsize'  => $prods,
                  'prodtext'  => $prodtext,
                  'filename'  => $newfile,                
                  'pathb'      =>  $realpath
                ); 
              $ii=DB::table('mardb')->insertgetId($data);              
        }

        if ($i>0){
                \Session::flash('message','Sukses Menyimpan.....');
              }              
        return redirect('fotodeal');
  }
 
  


  public function deletedeal($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;      
      // $namafile = Form::getIdAttribute('path', $id);
        
       //$namafile=FOO::carifield($id,'path');   
       //$namafile = FOO::carifield('id', $id); 
       //dd($namafile);
      // var_dump($myquery);
        
            // $i =DB::table ('mard')->where ('id',$id)->delete();
             //$i =DB::File ('mard')->where ('path',$id)->delete();
             //File::delete($id);
             $i =DB::table ('mard')->where ('filename',$id)->delete();
             File::delete('kecil/' . $id);
            
             if($i> 0)
             {
                \Session::flash('message','Sukses Menghapus.....');
              return redirect('fotodeal')        
                ->with('namauser',$xxx); 
             }

             
      
  }

//---------------- end foto deal marchant-----------------------------------



//-------------------------foto deal besar marchant-------------------------------
  
  public function indexfotodealbesar(){
    //$result =DB::table('marchant')->paginate(10);
 //   $result =DB::select("select * from users where  rolesid=3");
    $result=DB::table('mardb')
                ->leftjoin('marchant', function ($join) {                
                $join->on('mardb.idmar', '=', 'marchant.id');
                })                
                ->leftjoin('kategori', function ($join) {                
                $join->on('kategori.id', '=', 'mardb.kategori');
                })                
                ->select('mardb.*', 'marchant.*','kategori.nama as namakate')
                ->orderby('marchant.nama', 'asc')
                ->paginate(10);
          
            $xxx= Auth::user()->nama;
            return view('marchant.indexfotodealbesar')
                ->with('data',$result)                 
                ->with('judul','Foto Deal Up Besar')            
                ->with('namauser',$xxx); 
  } 


  public function formdealbesar(){ 
      $xxx= Auth::user()->nama;         
      $kategori =DB::select("select * from kategori");  
      $mar =DB::select("select id, nama from marchant");  
      return view ('marchant.formdealbesar')
      ->with('judul','Form Foto Deal Up Besar')            
      ->with('kategori',$kategori)  
      ->with('mms',$mar)  
      ->with('namauser','$xxx');
  }


  public function formdealsavebesar(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'idmar'=>'required',
        'hrgnormal'=>'required',
        'hrgdisc'=>'required',
        'prodname'=>'required',
        'proddiscr'=>'required',
        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       foreach(Input::file('file') as $image) 
      {

              $prod=$image->getClientOriginalName();
              $prods=$image->getSize();

              $prodtext=$image->getClientOriginalExtension();
              $newfile= $image->getClientOriginalName();
              //echo $newfile;
              $fullpath =$image->move('besar/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);
              $data=array (
                  'idmar'     =>Input::get('idmar'),
                  'prodname'  =>Input::get('prodname'),
                  'proddiscr'  =>Input::get('proddiscr'),
                  'hrgnormal' =>Input::get('hrgnormal'),
                  'kategori'  =>Input::get('kategori'),
                  'hrgdisc'   =>Input::get('hrgdisc'),
                  'prodsize'  => $prods,
                  'prodtext'  => $prodtext,
                  'filename'  => $newfile,
                  'path'      =>  $realpath
                ); 
              $i=DB::table('mardb')->insertgetId($data);              
        }
        if ($i>0){
                \Session::flash('message','Sukses Menyimpan.....');
              }              
        return redirect('fotodealbesar');
  }
 
  


  public function deletedealbesar($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;      
      // $namafile = Form::getIdAttribute('path', $id);
        
       //$namafile=FOO::carifield($id,'path');   
       //$namafile = FOO::carifield('id', $id); 
       //dd($namafile);
      // var_dump($myquery);
        
            // $i =DB::table ('mard')->where ('id',$id)->delete();
             //$i =DB::File ('mard')->where ('path',$id)->delete();
             //File::delete($id);
             $i =DB::table ('mardb')->where ('filename',$id)->delete();
             File::delete('besar/' . $id);
            
             if($i> 0)
             {
                \Session::flash('message','Sukses Menghapus.....');
              return redirect('fotodealbesar')        
                ->with('namauser',$xxx); 
             }

             
      
  }

//---------------- end foto deal marchant-----------------------------------



//-------------------------foto privilege marchant-------------------------------
  
  public function indexfotopriv(){
     $xxx= Auth::user()->nama;   
    //$result =DB::table('marchant')->paginate(10);
 //   $result =DB::select("select * from users where  rolesid=3");
    $result=DB::table('marp')
                ->leftjoin('marchant', function ($join) {                
                $join->on('marp.idmar', '=', 'marchant.id');
                })                
                ->leftjoin('kategori', function ($join) {                
                $join->on('kategori.id', '=', 'marp.kategori');
                })                
                ->select('marp.*', 'marchant.*','kategori.nama as namakate')
                ->orderby('marchant.nama', 'asc')
                ->paginate(10);
            //$items = Item::lists('nama', 'id');   
             //$kategori =DB::select("select * from kategori");             
           
            $xxx= Auth::user()->nama;
            return view('marchant.indexfotopriv')
                ->with('data',$result)       
                ->with('judul','Foto Privilege')            
                ->with('namauser',$xxx); 
  } 


  public function formpriv(){ 
       $xxx= Auth::user()->nama;      
      // $kategori = DB::table('kategori')->lists('id','nama');  
        $kategori =DB::select("select * from kategori");  
        $mar =DB::select("select id, nama from marchant");  
      return view ('marchant.formpriv')
      ->with('judul','Form Foto Privilege')            
      ->with('kategori',$kategori)  
      ->with('mms',$mar)  
      ->with('namauser','$xxx');
  }


  public function formprivsave(Request $request)
  {
      $post=$request->all();
      $v=\Validator::make($request->all(),
      [
        'idmar'=>'required',
        'hrgnormal'=>'required',
        'hrgdisc'=>'required',
        'prodname'=>'required',
        'proddiscr'=>'required',

        
      ]);
      if ($v->fails())
      {
        return redirect()->back()->withErrors($v->errors());
      }

       foreach(Input::file('file') as $image) 
      {

              $prod=$image->getClientOriginalName();
              $prods=$image->getSize();

              $prodtext=$image->getClientOriginalExtension();
              $newfile= time().$image->getClientOriginalName();
              //echo $newfile;
              $fullpath =$image->move('priv/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);
              $data=array (
                  'idmar'     =>Input::get('idmar'),
                  'prodname'  =>Input::get('prodname'),
                  'kategori'  =>Input::get('kategori'),
                  'proddiscr'  =>Input::get('proddiscr'),
                  'hrgnormal' =>Input::get('hrgnormal'),
                  'hrgdisc'   =>Input::get('hrgdisc'),
                  'prodsize'  => $prods,
                  'prodtext'  => $prodtext,
                  'filename'  => $newfile,
                  'path'      =>  $realpath
                ); 
              $i=DB::table('marp')->insertgetId($data);              
        }
        if ($i>0){
                \Session::flash('message','Sukses Menyimpan.....');
              }              
        return redirect('fotopriv');
  }
 
  


  public function deletepriv($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;      
      // $namafile = Form::getIdAttribute('path', $id);
        
       //$namafile=FOO::carifield($id,'path');   
       //$namafile = FOO::carifield('id', $id); 
       //dd($namafile);
      // var_dump($myquery);
        
            // $i =DB::table ('mard')->where ('id',$id)->delete();
             //$i =DB::File ('mard')->where ('path',$id)->delete();
             //File::delete($id);
             $i =DB::table ('marp')->where ('filename',$id)->delete();
             File::delete('priv/' . $id);
            
             if($i> 0)
             {
                \Session::flash('message','Sukses Menghapus.....');
              return redirect('fotopriv')        
                ->with('namauser',$xxx); 
             }

             
      
  }

//---------------- end foto priv marchant-----------------------------------




//-------------------------foto privilege marchant-------------------------------
  
  public function indexslide(){
     $xxx= Auth::user()->nama;   
    $result =DB::table('slide')->paginate(10);
 //   $result =DB::select("select * from users where  rolesid=3");
  
           
            $xxx= Auth::user()->nama;
            return view('admin.indexslide')
                ->with('data',$result)       
                ->with('judul','Foto SLide Utama')            
                ->with('namauser',$xxx); 
  } 


  public function formslide(){ 
       $xxx= Auth::user()->nama;      
      // $kategori = DB::table('kategori')->lists('id','nama');  
         
      return view ('admin.formslide')
      ->with('judul','Form Foto Slide Utama')                      
      ->with('namauser','$xxx');
  }


  public function formslidesave(Request $request)
  {
      
       foreach(Input::file('file') as $image) 
      {

              $prod=$image->getClientOriginalName();
              $prods=$image->getSize();

              $prodtext=$image->getClientOriginalExtension();
              $newfile= time().$image->getClientOriginalName();
              //echo $newfile;
              $fullpath =$image->move('slide/',$newfile);
              $realpath= str_replace('\\','/',$fullpath);
              $data=array (
                  
                  'text1'  =>Input::get('text1'),
                  'text2'  =>Input::get('text2'),
                  'text3'  =>Input::get('text3'),
                  'filename'  => $newfile,
                  'path'      =>  $realpath
                ); 
              $i=DB::table('slide')->insertgetId($data);              
        }
        if ($i>0){
                \Session::flash('message','Sukses Menyimpan.....');
              }              
        return redirect('indexslide');
  }
 
  


  public function deleteslide($id){
     //  $email = User::find($id);
       $xxx= Auth::user()->nama;      
      // $namafile = Form::getIdAttribute('path', $id);
        
       //$namafile=FOO::carifield($id,'path');   
       //$namafile = FOO::carifield('id', $id); 
       //dd($namafile);
      // var_dump($myquery);
        
            // $i =DB::table ('mard')->where ('id',$id)->delete();
             //$i =DB::File ('mard')->where ('path',$id)->delete();
             //File::delete($id);
             $i =DB::table ('slide')->where ('filename',$id)->delete();
             File::delete('slide/' . $id);
            
             if($i> 0)
             {
                \Session::flash('message','Sukses Menghapus.....');
              return redirect('indexslide')        
                ->with('namauser',$xxx); 
             }

             
      
  }

//---------------- end foto priv marchant-----------------------------------


  
//------------------------ latihan pdf -------------------------

 public function pdfview(Request $request)

    {

        $items = DB::table("items")->get();

        view()->share('items',$items);


        if($request->has('download')){

            $pdf = PDF::loadView('pdfview');

            return $pdf->download('pdfview.pdf');

        }


        return view('pdfview');

    }


   public function carimenu(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('menu')
                ->where('menu.nama', 'like', "%$cari%")                                    
                ->select('menu.*')
                ->orderby('menu.id_induk', 'asc')
                ->get();
                echo  json_encode($db);
   }
  

 public function simpanmenu(Request $request)
        {
            $data = new Menu;
            $xxx= Auth::user()->nama;
            $idrole= Auth::user()->rolesid;
            $ly= Auth::user()->layout;
            $induk= $request->induk;
           
            $data -> nama = $request -> nama;
            $data -> id_induk = $request -> induk;
            $data -> icon = $request -> icon;
            $data -> url = $request -> url;
            $data -> urut = $request -> urut;
            $data -> ai = $request -> ai;
            $data -> save();
           
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
            $menu2=DB::table('menu')                
                ->select('menu.*')                
                ->first();      

            return view ('pageformlte')
            ->with('isi','master.menuok')  
            //->with('isi','boleh.master.subkate')   
            ->with('menuatas',$menuatas)
            ->with('ly',$ly) 
            ->with('idrole',$idrole) 
            ->with('menu2',$menu2)  
            ->with('induk',$induk) 
            ->with('judulutama','Dashboard')            
            ->with('judul','Menu')
            ->with('namauser',$xxx); 

            
        }


 public function simpancoa(Request $request)
        {
            $data = new Coa;
            $induk = $request -> induk; 
            $data -> nakun = $request -> nama;
            $data -> parentid = $request -> induk;
            $data -> ai = $request -> ai;
            $data -> ap = $request -> jn;
            $data -> sn = $request -> sn;
            $data -> nr = $request -> nr;
            $data -> level = $request -> level;
            $data -> save();
            
             
            $xxx= Auth::user()->nama;
            $idrole= Auth::user()->rolesid;
            $ly= Auth::user()->layout;
     
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
    ->with('isi','master.coaaview')  
    ->with('menuatas',$menuatas)
    
    ->with('idrole',$idrole)
    ->with('ly',$ly) 
   
    ->with('induk',$induk) 
    ->with('judulutama','Dashboard')            
    ->with('judul','Char Of Akun')
    ->with('namauser',$xxx); 

            
        }
      

  public function updatemenu(Request $request)
        {
            $data = new Menu;
            $xxx= Auth::user()->nama;
            $idrole= Auth::user()->rolesid;
            $ly= Auth::user()->layout;
            $id=$request->id; 
            $induk=$request->induk; 
            
            $ha=array
               (                                         
                      'nama'=>Input::get('nama'),             
                      'url'=>Input::get('url'),     
                      'id_induk'=>Input::get('induk'),     
                      'icon'=>Input::get('icon'),  
                      'urut'=>Input::get('urut')     
               ); 
            
            $ee=DB::table('menu')->where('id',$id)->update($ha); 

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
             $menu2=DB::table('menu')                
                ->select('menu.*')                
                ->first();   

            return view ('pageformlte')
            ->with('isi','master.menuok')  
            ->with('menuatas',$menuatas)  
            ->with('menu2',$menu2)
            ->with('ly',$ly)

            ->with('induk',$induk)
            ->with('idrole',$idrole)
            ->with('judulutama','Dashboard')            
            ->with('judul','Menu')
            ->with('namauser',$xxx); 

            
        }      


  public function updatecoa(Request $request)
        {
            $data = new Menu; 

            $induk = $request->indukmenu;
           
            $id = $request->id;
            $nakun = $request->nakun;
            $ha=array
               (                                         
                      'nakun'=>$nakun             
                     

               );  
            $ee=DB::table('akun')->where('id',$id)->update($ha);

        }         


  public function updatelevel(Request $request)
        {
            $data = new Menu; 

            $induk = $request->indukmenu;
           
            $id = $request->id;
            $level = $request->level;
            $ha=array
               (                                         
                      'level'=>$level             
                     

               );  
            $ee=DB::table('akun')->where('id',$id)->update($ha);

        }           

  public function updatejn(Request $request)
        {
            $data = new Menu; 

            $induk = $request->indukmenu;
           
            $id = $request->id;
            $jn = $request->jn;
            $ha=array
               (                                         
                      'ap'=>$jn 

               );  
            $ee=DB::table('akun')->where('id',$id)->update($ha);

        }       

    public function updateai(Request $request)
        {
            $data = new Menu; 

            $induk = $request->indukmenu;
           
            $id = $request->id;
            $ai = $request->ai;
            $ha=array
               (                                         
                      'ai'=>$ai 

               );  
            $ee=DB::table('akun')->where('id',$id)->update($ha);

        }       

  public function updatesn(Request $request)
        {
            $data = new Menu; 

            $induk = $request->indukmenu;
           
            $id = $request->id;
            $sn = $request->sn;
            $ha=array
               (                                         
                      'sn'=>$sn 

               );  
            $ee=DB::table('akun')->where('id',$id)->update($ha);

        } 

public function updateurut(Request $request)
        {
            $data = new Menu; 

            $induk = $request->indukmenu;
           
            $id = $request->id;
            $urut = $request->urut;
            $ha=array
               (                                         
                      'urut'=>$urut 

               );  
            $ee=DB::table('akun')->where('id',$id)->update($ha);

        } 



  public function deletemenu(Request $request)
        {
            $data = new Menu;
            $idrole= Auth::user()->rolesid;
            $xxx= Auth::user()->nama;
            $ly= Auth::user()->layout;
            $induk= $request->induk;
            
            $id=$request->id;
            $result=DB::table('menu')
                ->select('menu.*')
                ->where('menu.id_induk','=',$id)
                ->first();
            //dd($result);    
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
                 

            if ($result== null){
              DB::delete('delete from menu where id = ?',[$id]);            
             
 
            return view ('pageformlte')
            ->with('isi','master.menuok')  
            ->with('menuatas',$menuatas) 
            ->with('idrole',$idrole)   
            ->with('ly',$ly) 
            ->with('induk',$induk) 
            ->with('judulutama','Dashboard')            
            ->with('judul','Menu')
            ->with('namauser',$xxx); 
            }else{
                \Session::flash('message','Menu ini masih punya anak, tidak bisa dihapus...!!!');
                $menu=DB::table('menu')                
                ->select('menu.*')
                ->orderby('menu.id', 'asc')
                ->first();  
                return view ('pageform')
                ->with('isi','master.menuok')  
                ->with('menuatas',$menuatas)  
                ->with('menu',$menu)  
                ->with('idrole',$idrole)   
                ->with('ly',$ly) 
                ->with('judulutama','Dashboard')            
                ->with('judul','Menu')
                ->with('namauser',$xxx); 
            }
                
            
        }      
  public function deletecoa(Request $request)
        {
            $data = new Coa;          
            $id = $request->id;
            $induk = $request->induk;
           
            $xxx= Auth::user()->nama; 
            $idrole= Auth::user()->rolesid; 
            $ly= Auth::user()->layout; 
            
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

            $result=DB::table('akun')
                      ->where('akun.parentid', '=', $id)                                    
                      ->select('akun.*')                       
                      ->first();           
          // dd($result);          

            if ($result== null){
                DB::delete('delete from akun where id = ?',[$id]);            
               
                return view ('pageform')
                ->with('isi','master.coaaview')  
                ->with('menuatas',$menuatas)                
                ->with('ly',$ly)
                ->with('induk',$induk)              
                ->with('idrole',$idrole)
                ->with('judulutama','Dashboard')            
                ->with('judul','Menu')
                ->with('namauser',$xxx); 
            }else{
                \Session::flash('message','Menu ini masih punya anak, tidak bisa dihapus...!!!');
               
                return view ('pageform')
                ->with('isi','master.coaaview')  
                ->with('menuatas',$menuatas)  
                ->with('induk',$induk)       
                ->with('ly',$ly) 
                ->with('idrole',$idrole)                                
                ->with('judulutama','Dashboard')            
                ->with('judul','Menu')
                ->with('namauser',$xxx); 
            }
                
            
        }    

  public function editmenu($id,$induk){
      $xxx= Auth::user()->nama; 
      $idrole= Auth::user()->rolesid; 
      $ly= Auth::user()->layout; 

      $carim=DB::table('menu')
                ->where('menu.id', '=', $id)                                    
                ->select('menu.*')
                ->orderby('menu.id', 'asc')
                ->first();
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
     

      return view ('pageformlte')
          ->with('isi','master.updatemenu')  
          ->with('carim',$carim)  
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('menuatas',$menuatas)           
          ->with('judulutama','Dashboard')            
          ->with('judul','Edit Menu')
          ->with('namauser',$xxx); 
  }

  public function editcoa($id,$indukmenu){
      $xxx= Auth::user()->nama; 
      $ly= Auth::user()->layout;    
      $idrole= Auth::user()->rolesid;      
      $carim=DB::table('akun')
                ->where('akun.id', '=', $id)                                    
                ->select('akun.*')
                ->orderby('akun.id', 'asc')
                ->first();
      //dd($carim);          
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
          ->with('isi','master.updatecoa')  
          ->with('carim',$carim)
          ->with('idrole',$idrole)
          ->with('indukmenu',$indukmenu)
          ->with('ly',$ly)
          ->with('menuatas',$menuatas)           
          ->with('judulutama','Dashboard')            
          ->with('judul','Edit Coa')
          ->with('namauser',$xxx); 
  }
      
   public function coa($induk){
    $xxx= Auth::user()->nama;
    $idrole= Auth::user()->rolesid;
    $ly= Auth::user()->layout;
     
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
    ->with('isi','master.coaaview')  
    ->with('menuatas',$menuatas)
    ->with('idrole',$idrole)
    ->with('ly',$ly) 
    ->with('induk',$induk) 
    ->with('judulutama','Dashboard')            
    ->with('judul','Char Of Akun')
    ->with('namauser',$xxx); 

  }   

  public function tambahcoa($induk){
    $xxx= Auth::user()->nama;
    $idrole= Auth::user()->rolesid;
    $ly= Auth::user()->layout;
     
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
    ->with('isi','master.coa')  
    ->with('menuatas',$menuatas)
    ->with('idrole',$idrole)
    ->with('ly',$ly) 
    ->with('induk',$induk) 
    ->with('judulutama','Dashboard')            
    ->with('judul','Char Of Akun')
    ->with('namauser',$xxx); 

  }   

  public function caribb(Request $request){
    $xxx= Auth::user()->nama;
    $idrole= Auth::user()->rolesid;
    $ly= Auth::user()->layout;

    $idakun = $request->idakun;
    $induk = $request->induk;


     
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
    ->with('isi','keu.bb')  
    ->with('menuatas',$menuatas)
    ->with('idrole',$idrole)
    ->with('ly',$ly) 
    ->with('induk',$induk) 
    ->with('idakun',$idakun)      
    ->with('judulutama','Dashboard')            
    ->with('judul','Buku Besar')
    ->with('namauser',$xxx); 

  }   

  public function indexbb($induk){
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
    ->with('isi','keu.bb')  
    ->with('menuatas',$menuatas)
    ->with('idrole',$idrole)
    ->with('ly',$ly) 
    ->with('idakun',$idakun) 
    ->with('induk',$induk) 
    ->with('judulutama','Dashboard')            
    ->with('judul','Buku Besar')
    ->with('namauser',$xxx); 

  }   

  public function menuyes($induk){
    $xxx= Auth::user()->nama;
    $idrole= Auth::user()->rolesid;
    $ly= Auth::user()->layout;
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
            $indukmenu=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.ai', '=','I') 
                ->get();
                 
                    
    $menu2=DB::table('menu')                
                ->select('menu.*')                
                ->first();              
     //dd($menu);

    return view ('pageformlte')
    ->with('isi','master.menuok')  
    ->with('menuatas',$menuatas)
    ->with('menu2',$menu2)  
    ->with('induk',$induk)  
    
     ->with('idrole',$idrole)
     ->with('ly',$ly) 
    ->with('judulutama','Setting')            
    ->with('judul','Menu')
    ->with('namauser',$xxx); 

  }   

   public function simpanrule(Request $request)
              {
     $count = $_POST['counterRole'];    
     $idrolesetting = $_POST['idrolesetting'];
     DB::delete('delete from rolerule where idrole = ?',[$idrolesetting]);            
     for ($idx = 1; $idx <= $count; $idx++) 
     {
      $idmenu = $_POST['menuid'.$idx];
      $tambah = isset($_POST['tambah'.$idx]) ? $_POST['tambah'.$idx] : '';
      $edit = isset($_POST['edit'.$idx]) ? $_POST['edit'.$idx] : '';
      $hapus = isset($_POST['hapus'.$idx]) ? $_POST['hapus'.$idx] : '';
      
      //dd($tambah);
     
        $pro=array
                     (        
                            'idrole'=>$idrolesetting,     
                            'idmenu'=>$idmenu, 
                            'tambah'=>$tambah, 
                            'edit'=>$edit, 
                            'hapus'=>$hapus             
                             
                     );

                     DB::table('rolerule')->insertgetId($pro);
        
              }
                  return back()
                          ->with('success','Record Updated successfully.');
            }
  public function rule($induk){
        $xxx= Auth::user()->nama;
        $idrole= Auth::user()->rolesid;
        $ly= Auth::user()->layout;
         
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
        ->with('isi','master.rule')  
        ->with('menuatas',$menuatas)
        ->with('idrole',$idrole)
        ->with('idrolesetting',0)
        ->with('id_induk',$induk)
        //->with('menu2',$menu2)  
         ->with('ly',$ly) 
        ->with('judulutama','Dashboard')            
        ->with('judul','Rule & Role User')
        ->with('namauser',$xxx); 

  }   

  public function kirimrole(Request $request){
        $xxx= Auth::user()->nama;
        $idrole= Auth::user()->rolesid;
        $induk = $request -> id_induk;
        $idrolesetting = $request -> idrolesetting;
        $ly= Auth::user()->layout;

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
        ->with('isi','master.rule')  
        ->with('menuatas',$menuatas)
        ->with('idrole',$idrole)
        ->with('idrolesetting',$idrolesetting)
        ->with('id_induk',$induk)
        //->with('menu2',$menu2)  
         ->with('ly',$ly) 
        ->with('judulutama','Dashboard')            
        ->with('judul','Rule & Role User')
        ->with('namauser',$xxx); 

  }   

  public function seting($induk){
             $thn= date("y");               
             $xxx= Auth::user()->nama; 
             $idrole= Auth::user()->rolesid;
             $ly= Auth::user()->layout;

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
              $rec=DB::table('seting')   
                      ->select('seting.*')                    
                      ->first();
                      
              
              return view ('pageform')
              ->with('menuaktif','Input Kas Keluar')      
              ->with('judul','Seting Perusahaan dan Akun')                    
              ->with('isi','master.seting')       
              ->with('idrole',$idrole)        
              ->with('ly',$ly) 
              ->with('induk',$induk) 
              ->with('menuatas',$menuatas) 
              ->with('rec',$rec) 
              ->with('namauser',$xxx); 

  }  

  public function Adminyes($id){
     $xxx= Auth::user()->nama;
     $idrole= Auth::user()->rolesid;
     $ly= Auth::user()->layout;
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
     //dd($menu);

    return view ('pageadmin')
    ->with('ly',$ly) 
    ->with('idrole',$idrole) 
    ->with('menuatas',$menuatas) 
    ->with('judulutama','Dashboard')            
    ->with('judul','Dashboard')
    ->with('namauser',$xxx); 

  }



  public function admin(){
     $xxx= Auth::user()->nama;
     $idrole= Auth::user()->rolesid;      
     $ly= Auth::user()->layout;   
     $induk=9999999;
     //dd($idrole);
      
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
    // var_dump($a);

    return view ('pageadmin')
    ->with('menuatas',$menuatas) 
    ->with('idrole',$idrole) 
    ->with('ly',$ly)
   // ->with('isi','include.isiadmin') 
    ->with('judulutama','Dashboard')            
    ->with('judul','Dashboard')
    ->with('namauser',$xxx); 

  }

  public function mini($induk){
     $xxx= Auth::user()->nama;
     $iduser= Auth::user()->id;
     $idrole= Auth::user()->rolesid;
     $ly= Auth::user()->layout;


    
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
     $ha=array
               (
                'layout'=>1            
               );            
     DB::table('users')->where('id',$iduser)->update($ha); 
      $lyy=DB::table('users')                
                ->select('users.layout')
                ->where('users.id','=',$iduser)
                ->first(); 
                $ly=$lyy->layout;
      return view ('pageadmin')
     ->with('ly',$ly) 
     ->with('idrole',$idrole) 
     ->with('menuatas',$menuatas) 
     ->with('judulutama','Dashboard')            
     ->with('judul','Dashboard')
     ->with('namauser',$xxx); 

  }

  public function normal($induk){
     $xxx= Auth::user()->nama;
     $idrole= Auth::user()->rolesid;
     $ly= Auth::user()->layout;
     $iduser= Auth::user()->id;


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
     $ha=array
               (
                'layout'=>0            
               );            
     DB::table('users')->where('id',$iduser)->update($ha); 
     $lyy=DB::table('users')                
                ->select('users.layout')
                ->where('users.id','=',$iduser)
                ->first(); 
     $ly=$lyy->layout;           
       return view ('pageadmin')
    ->with('ly',$ly)
    ->with('idrole',$idrole)  
    ->with('induk',$induk)  
    ->with('menuatas',$menuatas) 
    ->with('judulutama','Dashboard')            
    ->with('judul','Dashboard')
    ->with('namauser',$xxx); 

  }
  public function Admin2(){
     $xxx= Auth::user()->nama;
     $a= Auth::user()->rolesid;
    // var_dump($a);

    return view ('pageadmin2')
    ->with('judulutama','Dashboard')            
    ->with('judul','Dashboard')
    ->with('namauser',$xxx); 

  }
  public function Admin3(){
     $xxx= Auth::user()->nama;
     $a= Auth::user()->rolesid;
    // var_dump($a);

    return view ('pageadmin3')
    ->with('judulutama','Dashboard')            
    ->with('judul','Dashboard')
    ->with('namauser',$xxx); 

  }

  public function topmenu(){
     $xxx= Auth::user()->nama;
     $a= Auth::user()->rolesid;
    // var_dump($a);

    return view ('menu.top-menu')
    ->with('judul','Dashboard')
    ->with('namauser',$xxx); 

  }

 public function tabel(){
     $xxx= Auth::user()->nama;
     $a= Auth::user()->rolesid;
    // var_dump($a);

    return view ('pagelist')
    ->with('judul','Dashboard')
    ->with('namauser',$xxx)
    ->with('isi','include.isitabel')
    ; 

  }

   public function form(){
       $xxx= Auth::user()->nama;
     $a= Auth::user()->rolesid;
    // var_dump($a);

    return view ('pageform')
    ->with('judul','Dashboard')
    ->with('namauser',$xxx)
    ->with('isi','include.isiform')
    ; 

  }
//----------------------- end latihan pdf------------------------



}
