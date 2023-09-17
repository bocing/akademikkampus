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
use App\Daftarpmb;
use App\Jur;
use App\Kur;
use App\Mata;
use App\Jadwal;
use App\Ruang;
use App\Kelas;
use App\Kelompok;
use App\Jenis;
use App\Seting;
use App\Satuan;
use App\Kate;
use App\Guru;
use App\Pem;
use App\Cobalayout; 
use App\Role;
use App\Stok;
use App\Belim;
use App\Menu;
use App\Extra;
use App\Coa;
use App\layoutmenu;
use App\Belid;
use App\Mek;
use App\Siswa;
use App\Calonsiswa;
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

public static function cariperiode(){
           $prd=DB::table('periode')              
                ->select('periode.*')                                   
                ->where('periode.aktif', '=',1) 
                ->first();
                //dd($prd);
                 
                if ($prd!=null){
                  $bln= $prd->bln;
                  $thn= $prd->thn;
                  $nama=$prd->nama;
                  $id=  $prd->id;
                }
          return compact("bln", "thn","id","nama");
}

public function caribarang(Request $request)     
   {
      
     $cari = $request ->q; 
      $db=DB::table('stok')
              //  ->where('stok.nama', 'like', "%$cari%")                                    
                ->select('stok.*')
                ->orderby('stok.nama', 'asc')
                ->get();
                echo  json_encode($db);

                dd($db);
   }  

//==================== setting ===========================================
  public function Adminyes(){
     $xxx= Auth::user()->nama;
     $idrole= Auth::user()->rolesid;
     $ly= Auth::user()->layout;
     

    return view ('pageadmin')     
    ->with('idrole',$idrole)     
    ->with('judulutama','Dashboard')            
    ->with('judul','Dashboard')
    ->with('namauser',$xxx); 

  } 



  public function formguru (Request $request){
          $tambah=1;
          $induk = $request->induk;
          $xxx= Auth::user()->nama;            
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

                $tambah =1;

                $xxx= Auth::user()->nama;
                return view('pageform')
                   // ->with('data',$result)  
                    ->with('menuatas',$menuatas)                       
                    ->with('judulutama','Master Data') 
                    ->with('tambah',$tambah) 
                    ->with('idrole',$idrole) 
                    ->with('induk',$induk) 
                    ->with('isi','master.guruform') 
                    ->with('judul','Form Guru')            
                    ->with('namauser',$xxx); 
  }




public function editjadwal(Request $request)
         
        {
              $induk= $request->induk;
              $id= $request->id;
              $idprodi= $request->idprodi;
              $xxx= Auth::user()->nama;            
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
            //$nobel = $request -> nobel;                         
            $rec=DB::table('jadwal')                       
                  
                  ->select('*')
                  ->where('jadwal.id', '=', $id)                
                  ->first();
              
            
                 return view ('pageform')
                 
                  ->with('judul','Form Jadwal')     
                    ->with('induk',$induk)       
                            ->with('menuatas',$menuatas)       
                  ->with('isi','master.jadwalform') 
                     ->with('judulutama','Master') 
                    ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('id',$id)  
                  ->with('idprodi',$idprodi)  
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }   

public function editguru(Request $request)
         
        {
              $induk= $request->induk;
              $id= $request->id;
              $xxx= Auth::user()->nama;            
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
            //$nobel = $request -> nobel;                         
            $rec=DB::table('guru')                       
                //  ->leftjoin('role', 'role.id', '=', 'users.rolesid')                   
                  ->select('guru.*')
                  ->where('guru.id', '=', $id)                
                  ->get();
                  //echo "string:$rec";
                  //dd($tambah);
            
                 return view ('pageform')
                  ->with('menuaktif','Input Departemen')      
                  ->with('judul','Form Guru')     
                    ->with('induk',$induk)       
                            ->with('menuatas',$menuatas)       
                  ->with('isi','master.guruform') 
                     ->with('judulutama','Master') 
                    ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('id',$id)    
                  ->with('tambah',$tambah)                                    
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
            $indukmenu=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.ai', '=','I') 
                ->orderby('menu.urut')
                ->get();
                 
                    
    $menu2=DB::table('menu')                
                ->select('menu.*')                
                ->first();              
     //dd($menu);

    return view ('pageform')
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
             $menu2=DB::table('menu')                
                ->select('menu.*')                
                ->first();   

            return view ('pageform')
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
            $menu2=DB::table('menu')                
                ->select('menu.*')                
                ->first();      

            return view ('pageform')
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
     

      return view ('pageform')
          ->with('isi','master.updatemenu')  
          ->with('carim',$carim)  
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('menuatas',$menuatas)           
          ->with('judulutama','Dashboard')            
          ->with('judul','Edit Menu')
          ->with('namauser',$xxx); 
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
                  ->orderby ('menu.urut')
                  ->get();}else{
              $menuatas=DB::table('menu')              
                  ->select('menu.*')                                 
                  ->where('menu.id_induk', '=', $induk)  
                  ->orderby ('menu.urut')
                  ->get();
                  }   
                 

            if ($result== null){
              DB::delete('delete from menu where id = ?',[$id]);            
             
 
            return view ('pageform')
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

  public function simpanruledep(Request $request)
  {
     $count = $_POST['counterRole'];    
     $idrolesetting = $_POST['iduser'];
     DB::delete('delete from ruledep where iduser = ?',[$idrolesetting]);            
     for ($idx = 1; $idx <= $count; $idx++) 
     {
      $iddep = $_POST['iddep'.$idx];
      $tambah = isset($_POST['tambah'.$idx]) ? $_POST['tambah'.$idx] : '';
     
      
      //dd($tambah);
     
        $pro=array
                     (        
                            'iduser'=>$idrolesetting,     
                            'iddep'=>$iddep, 
                            'boleh'=>$tambah 
                                  
                             
                     );

                     DB::table('ruledep')->insertgetId($pro);
        
              }
                  return back()
                          ->with('success','Record Updated successfully.');
            }          
  public function indexrule($induk){
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
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

   public function indexruledep($induk){
        $xxx= Auth::user()->nama;
        $idrole= Auth::user()->rolesid;
     
         
        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
       
        return view ('pageform')
        ->with('isi','master.ruledep')  
        ->with('menuatas',$menuatas)
        ->with('idrole',$idrole)

        ->with('iduser',0)
        ->with('id_induk',$induk)        
        ->with('judulutama','Master')            
        ->with('judul','Hak Akses Guru')
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
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


  public function kirimruledep(Request $request){
        $xxx= Auth::user()->nama;
        $idrole= Auth::user()->rolesid;
        $induk = $request -> id_induk;
        $iduser = $request -> iduser;
       

        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
        return view ('pageform')        
        ->with('isi','master.ruledep')  
        ->with('menuatas',$menuatas)
        ->with('idrole',$idrole)
        ->with('iduser',$iduser)
        ->with('id_induk',$induk)             
        ->with('judulutama','Master')            
        ->with('judul','Hak Akses Departemen')
        ->with('namauser',$xxx); 

  }   


  public function indexrole($id){
    $xxx= Auth::user()->nama;
    $idrole= Auth::user()->rolesid;

    $result=DB::table('role')                                             
                ->select('role.*')
                ->orderby('role.id', 'asc')
                ->get();
  
                          
    $menu=DB::table('menu')
                ->select('menu.*')                 
                ->where('menu.id_induk', '=', $id)                                
                ->get();                

    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)   
         ->with('idrole',$idrole)
        ->with('menuatas',$menu)    
        ->with('judulutama','Role')      
        ->with('judul',' Role')
        ->with('isi','master.role')
        ->with('namauser',$xxx); 
  } 



  public function simpanrole(Request $request)
        {
            $data = new Role;
             
            $data -> nama = $request -> last_name;
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        } 


  public function simpantahun(Request $request)
        {
            $data = new Tahun;
             
            $data -> kode = $request -> kode;
            $data -> tahun = $request -> tahun;
            $data -> aktif = $request -> aktif;
             
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
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
  public function updaterole(Request $request)
        {
            $id = $request -> edit_id;
            $data = Role::find($id);             
            $data -> nama = $request -> edit_nama;
          
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
        }
  public function deleterole(Request $request)
        {
            $id = $request -> id;
            $id_induk = $request -> id_induk;
            $data = Role::find($id);
            $response = $data -> delete();
            if($response)
                 
            return back()
                    ->with('success','Record Delete successfully.');
        }     

//===================== end setting==========================

//===================== Pelanggan =======================================        


  public function indexjur($induk){
     
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

        $result=DB::table('jurusan')                                             
                      ->select('jurusan.*')
                      ->orderby('nama', 'asc')
                       
                      ->get();

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Jurusan')            
          ->with('namauser',$xxx)
          ->with('isi','master.prodiok')            
         ; 
    } 




  public function indexfak($induk){
     
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

        $result=DB::table('fakultas')                                             
                      ->select('fakultas.*')
                      ->orderby('nama', 'asc')
                       
                      ->get();

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Fakultas')            
          ->with('namauser',$xxx)
          ->with('isi','master.fakultas')            
         ; 
    } 



  public function indexkur($induk){
     
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

        $result=DB::table('kuri')                                             
                      ->select('kuri.*')
                      ->orderby('nama', 'asc')
                       
                      ->get();

      
      return view('pagelist')
          ->with('data',$result)  
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Kurikulum')            
          ->with('namauser',$xxx)
          ->with('isi','master.kurikulum')            
         ; 
    } 



 public function sijur(Request $request)
        {
            //$data = new User;
            $data = new Jur;
            $data -> idfak = $request -> fakultas;   
            $data -> kode = $request -> kode;             
            $data -> nama = $request -> nama;             
          
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }      
 



 public function sifak(Request $request)
        {
          
           $pro=array
                       (                                             
                          'kode'=>$request -> kode, 
                          'nama'=>$request -> nama
                         
                          
                       );
                        DB::table('fakultas')->insertgetId($pro); 
            
            return back()
                    ->with('success','Record Added successfully.');
        }      
 
 public function sikur(Request $request)
        {
            //$data = new User;
            $data = new Kur;
            $data -> kodes = $request -> nama;             
            $data -> nama = $request -> nama;             
              $data -> idkuri = $request -> idkuri;
                $data -> tingkat = $request -> tingkat;
          
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
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
 


  public function updatepel(Request $request)
  {
           $id = $request -> idpele;
            $data = User::find($id);     

            $data -> nama = $request -> namae;
            $data -> alamat = $request -> alamate;              
            $data -> telp = $request -> nohpe;
            $data -> email = $request -> emaile;

            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
       
        }  

//=====================end Pelanggan ==========================    


//===================== Departemen =======================================        


  public function indexdep($induk){
     
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

        $result=DB::table('departemen')                                             
                      ->select('departemen.*')
                      ->orderby('departemen.nadep', 'asc')
                     
                      ->get();

      
      return view('pagelist')
          ->with('data',$result)  
        
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Departemen')            
          ->with('namauser',$xxx)
          ->with('isi','master.departemen')            
         ; 
    } 

     
  public function viewjur(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Jur::find($id);
                 
                return response()->json($info);
            }
        }                  
 



     
  public function viewfak(Request $request)
        {
             $info=DB::table('fakultas')
                ->select('*') 
                ->where('id', '=',$request->id)                 
                ->first();
             
                return response()->json($info);
            
        }                  
 


  public function viewkur(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Kur::find($id);
                 
                return response()->json($info);
            }
        }                  



  public function viewsiswa(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Siswa::find($id);
                 
                return response()->json($info);
            }
        }        


  public function viewcalonsiswa(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Calonsiswa::find($id);
                
                return response()->json($info);
            }
        }                       
 


  public function updatejur(Request $request)
  {
           $id = $request -> id_edit;
            $data = Jur::find($id);     

            $data -> kode = $request -> edit_kode;
            $data -> nama = $request -> edit_nama;              
             
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
       
        }

  public function updatefak(Request $request)
  {
          
           
             $pro=array
                       (                                             
                          'kode'=>$request -> edit_kode, 
                          'nama'=>$request -> edit_nama
                         
                          
                       );
                        DB::table('fakultas')->where('id',$request->id_edit)->update($pro); 
            return back()
                    ->with('success','Record Updated successfully.');
       
        }



  public function updatesiswa(Request $request)
  {
            $id = $request -> edit_id;
            $data = Siswa::find($id);     

              
            $data -> nisn = $request -> edit_nis;
            $data -> nama = $request -> edit_nama;  
            $data -> tltgll = $request -> edit_tltgll;  
            $data -> jeka = $request -> edit_jeka;  
            $data -> agamaid = $request -> edit_agamaid;  
            $data -> sta = $request -> edit_sta;  
            $data -> akeid = $request -> aedit_keid;  
            $data -> alamat = $request -> edit_alamat;  
            $data -> nohp = $request -> edit_nohp;  
            $data -> sekasal = $request -> edit_sekasal;  
            $data -> kelasterima = $request -> edit_kelasterima;  
            $data -> tglterim = $request -> edit_tglterima;  
            $data -> namaayah = $request -> edit_namaayah;  
            $data -> namaibu = $request -> edit_namaibu;  
            $data -> alamatayah = $request -> edit_alamatayah;  
            $data -> nohpayah = $request -> edit_nohpayah;  
            $data -> kerjaayah = $request -> edit_kerjaayah;  
            $data -> kerjaibu = $request -> edit_kerjaibu;  
            $data -> namawali = $request -> edit_namawali;  
            $data -> alamatwali = $request -> edit_alamatwali;  
            $data -> nohpwali = $request -> edit_nohpwali;  
            $data -> kerjawali = $request -> edit_kerjawali; 


             
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
       
        }        


  public function simpancalonsiswa(Request $request)
  {
            $data = new Daftarpmb;    
           
            $data -> nisn = $request -> nisx;
            $data -> nama = $request -> namax;  
            $data -> tltgll = $request -> tltgll;  
            $data -> jeka = $request -> jekax;  
            $data -> agamaid = $request -> agamaid;  
            $data -> sta = $request -> sta;  
            $data -> akeid = $request -> akeid;  
            $data -> alamat = $request -> alamatx;  
            $data -> nohp = $request -> nohp;  
            $data -> sekasal = $request -> sekasal;  
            $data -> kelasterima = $request -> kelasterima;  
            $data -> tglterim = $request -> tglterima;  
            $data -> namaayah = $request -> namaayah;  
            $data -> namaibu = $request -> namaibu;  
            $data -> alamatayah = $request -> alamatayah;  
            $data -> nohpayah = $request -> nohpayah;  
            $data -> kerjaayah = $request -> kerjaayah;  
            $data -> kerjaibu = $request -> kerjaibu;  
            $data -> namawali = $request -> namawali;  
            $data -> alamatwali = $request -> alamatwali;  
            $data -> nohpwali = $request -> nohpwali;  
            $data -> kerjawali = $request -> kerjawali; 

             
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
       
        }        



    public function updatekur(Request $request)
  {
           $id = $request -> id_edit;
            $data = Kur::find($id);     

            $data -> kode = $request -> edit_kode;
            $data -> nama = $request -> edit_nama;              
            $data -> aktif = $request -> edit_aktif;  
             
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
       
        }    

   public function deletejur(Request $request)
        {
            $id = $request -> id;
            $id_induk = $request -> id_induk;
            $data = Jur::find($id);
            $response = $data -> delete();
            if($response)
                 
            return back()
                    ->with('success','Record Delete successfully.');
        }             

   public function deletemapel(Request $request)
        {
            $id = $request -> id;
            $id_induk = $request -> id_induk;
            $data = Mata::find($id);
            $response = $data -> delete();
            if($response)
                 
            return back()
                    ->with('success','Record Delete successfully.');
        }         


//=====================end Departemen ==========================    


  public function indexruang($induk){
     
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $iduser= Auth::user()->id;
//dd($iduser);
        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

        $result=DB::table('ruang')                                             
                      ->select('ruang.*')
                      ->orderby('nama', 'asc')
                     
                      ->get();

      
      return view('pagelist')
          ->with('data',$result)  
        
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Ruang')   
          ->with('iduser',$iduser)            
          ->with('namauser',$xxx)
          ->with('isi','master.ruang')            
         ; 
    } 



    public function cetakwebkrs(Request $request)

        {
          $idsiswa =$request->idsiswa;
         
             $idtahun =$request->idtahun;    
             
            $result=DB::table('krs')    
                ->select('krs.id as idkrs','vjadwalrapor.*')  
                ->leftjoin('vjadwalrapor', 'vjadwalrapor.id', '=', 'krs.idjadwal') 
                ->where('vjadwalrapor.tahunid','=',$idtahun)
                ->where('krs.idsiswa','=',$idsiswa)
                ->get();     

             $ide=DB::table('siswa')    
                                
                    ->where('id','=',$idsiswa)
                     
                    ->first();   

              
                $cariprodi=DB::table('krs')    
                ->select('krs.id as idkrs','vjadwalrapor.*')  
                ->leftjoin('vjadwalrapor', 'vjadwalrapor.id', '=', 'krs.idjadwal') 
                ->where('vjadwalrapor.tahunid','=',$idtahun)
                ->where('krs.idsiswa','=',$idsiswa)
                ->first();   

                if ($cariprodi!=null){
                  $namaprodi=$cariprodi->namaprodi;
                }else{
                  $namaprodi='-';
                }  



            if ($ide!=null){
             $namasiswa= $ide->nama;
             $nis= $ide->nis;
              
               
                 
            view()->share('items',$result);
            view()->share('namasiswa',$namasiswa);
            view()->share('nis',$nis);
            view()->share('namaprodi',$namaprodi);
             
             

         
            if($request->has('download')){
                 $pdf = PDF::loadView('cetak/cetakkrs');
                 return $pdf->download('cetak/cetakkrs.pdf');
            }
            return view('cetak/cetakkrs');
          }
        }




    public function cetakpdfkrs(Request $request)

        {
          $idsiswa =$request->idsiswa;         
          $idtahun =$request->idtahun;    
             
            $result=DB::table('krs')    
                ->select('krs.id as idkrs','vjadwalrapor.*')  
                ->leftjoin('vjadwalrapor', 'vjadwalrapor.id', '=', 'krs.idjadwal') 
                ->where('vjadwalrapor.tahunid','=',$idtahun)
                ->where('krs.idsiswa','=',$idsiswa)
                ->get(); 

                $cariprodi=DB::table('krs')    
                ->select('krs.id as idkrs','vjadwalrapor.*')  
                ->leftjoin('vjadwalrapor', 'vjadwalrapor.id', '=', 'krs.idjadwal') 
                ->where('vjadwalrapor.tahunid','=',$idtahun)
                ->where('krs.idsiswa','=',$idsiswa)
                ->first();   

                if ($cariprodi!=null){
                  $namaprodi=$cariprodi->namaprodi;
                }else{
                  $namaprodi='-';
                }  

             $ide=DB::table('siswa')
                    ->where('id','=',$idsiswa)
                    ->first();   

              
            if ($ide!=null){
             $namasiswa= $ide->nama;
             $nis= $ide->nis;

              
               
            view()->share('items',$result);
            view()->share('namasiswa',$namasiswa);
            view()->share('nis',$nis);
            view()->share('namaprodi',$namaprodi);
             

         
           
                 $pdf = PDF::loadView('cetak/cetakkrspdf');
                 return $pdf->download('cetak/cetakkrspdf.pdf');
            
            return view('cetak/cetakkrs');
          }
        }





   public function cekelp(Request $request)

        {
          $idkelas =$request->idkelas;
        
            $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
             $idtahun =$total->id;    
             
             $result=DB::table('kelassiswa')     
              ->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')                 
            
                    ->select('siswa.*')
                    ->where('idkelas','=',$idkelas)
                    ->where('tahunid','=',$idtahun)
                    ->get();

             $ide=DB::table('kelas')    
                    ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')                
                    ->select('guru.*','kelas.nama as namakelas')                                     
                    ->where('kelas.id','=',$idkelas)
                     ->where('idtahun','=',$idtahun)
                    ->first();   

              
            if ($ide!=null){
             $namawali= $ide->nama;
             $namakelas= $ide->namakelas;
              
               
            view()->share('items',$result);
            view()->share('namawali',$namawali);
            view()->share('namakelas',$namakelas);
             

            //echo "string:$nobel";
            if($request->has('download')){
                 $pdf = PDF::loadView('cetak/cekel');
                 return $pdf->download('cetak/cekel.pdf');
            }
            return view('cetak/cekel');
          }
        }      


  public function indexrangking($induk){
     
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;         
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
        $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;             

      $rec=DB::table('vkelassum')
                  ->select('vkelassum.*')
                  ->where('vkelassum.idtahun','=',$idtahun)
                  ->get();
      
      return view('pagelist')
          ->with('data',$rec) 
          ->with('idrole',$idrole)
          ->with('iduser',$iduser)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Rangking')            
          ->with('judul','Siswa')            
          ->with('namauser',$xxx)
          ->with('isi','cetak.listrangking')            
         ; 
    } 
    
public function rangking(Request $request)

        {
          $idkelas =$request->idkelas;
        
            $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
             $idtahun =$total->id;    
             
  
   
             
               
        $baris=DB::table('jadwal')
            ->select('*')
            ->where('jadwal.kelasid','=',$idkelas)
            ->where('jadwal.tahunid','=',$idtahun)
            ->groupby('jadwal.mapelid')
             ->get();
             $jml=0;
              foreach ($baris as $key => $value) {
                    $jml=$jml+1;
                  }
            /*
             $siswa=DB::table('nilaisiswas')     
                    ->leftjoin('siswa', 'siswa.id', '=', 'nilaisiswa.idsiswa')                             
                    ->select('siswa.nama as namasiswa','siswa.nis as nis',DB::raw('SUM(nilaisiswa.angkap) as total'))
                    ->where('idkelas','=',$idkelas)
                    ->where('tahunid','=',$idtahun)
                    ->groupby('nilaisiswa.idsiswa')
                    ->orderby(DB::raw('SUM(nilaisiswa.angkap)','desc'))
                    ->get();
                    */
                   // dd($siswa);
             $siswa=DB::table('vrangkingok')     
                     
                    ->select('*')
                    ->where('idkelas','=',$idkelas)
                    ->where('tahunid','=',$idtahun)                     
                    ->orderby('total','desc')
                    ->get();
                    
                    //dd($siswa);       
             $ide=DB::table('kelas')    
                    ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')                
                    ->select('guru.*','kelas.nama as namakelas')                                     
                    ->where('kelas.id','=',$idkelas)
                     ->where('idtahun','=',$idtahun)
                    ->first();   

              
            if ($ide!=null){
             $namawali= $ide->nama;
             $namakelas= $ide->namakelas;
              
               
            view()->share('items',$siswa);
             view()->share('jml',$jml);
            view()->share('namawali',$namawali);
            view()->share('namakelas',$namakelas);
             

            //echo "string:$nobel";
            if($request->has('download')){
                 $pdf = PDF::loadView('cetak/rangking');
                 return $pdf->download('cetak/rangking.pdf');
            }
            return view('cetak/rangking');
          }
        }   
  public function cetaknilai(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idsiswa = $request->idkelas;         
         $induk = $request->induk;   
         $idkelas = $request->idkelas;   
         $idtahun = $request->idtahun;   
          
            
                          
                          
       
        return view ('cetak.nilai')
      
        
        ->with('idtahun',$idtahun)   
         ->with('idkelas',$idkelas)  
        ->with('idsiswa',$idsiswa);
       
    }           

  public function celedger($idkelas){
        
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;

      
      return view('cetak.celedger')
           
          ->with('ly',$ly)
          ->with('idrole',$idrole)
           
          ->with('idkelas',$idkelas)
         
           
          ->with('judulutama','Master Data')            
          ->with('judul','Kelas')            
          ->with('namauser',$xxx)
             
         ; 
    } 


  public function indexkel($induk){
     
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

        $result=DB::table('kelompok')                                                                   
                      ->select('*')
                      ->orderby('nama', 'asc')                     
                      ->get();

       
      
      return view('pagelist')
          ->with('data',$result)  
        
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Kelompok')            
          ->with('namauser',$xxx)
          ->with('isi','master.kelompok')            
         ; 
    }   


  public function indexkelas($induk){
     
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
                $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;    

        $result=DB::table('kelas')                                             
                       ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')
                       ->leftjoin('jurusan', 'jurusan.id', '=', 'kelas.jurid')
                      ->select('kelas.*','guru.nama as namaguru','jurusan.nama as najur')
                      -> where('kelas.idtahun','=',$idtahun)
                      ->orderby('kelas.nama', 'asc')
                     
                      ->get();
        $guru=DB::table('guru')                                             
                        
                      ->select('*')
                      ->orderby('nama', 'asc')                     
                      ->get();              

      
      return view('pagelist')
          ->with('data',$result)  
        
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('guru',$guru)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Kelas')            
          ->with('namauser',$xxx)
          ->with('isi','master.kelas')            
         ; 
    } 


public function indexguru($induk){
          $xxx= Auth::user()->nama;            
          $iduser= Auth::user()->id;
          $idrole= Auth::user()->rolesid;

    // $result =DB::table('member')->paginate(10);
      if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

     
           $result=DB::table('guru')                                             
                ->select('guru.*')                
                ->orderby('guru.nama', 'asc')                
                ->get();

      $xxx= Auth::user()->nama;
      return view('pagelist')
          ->with('data',$result)  
          ->with('induk',$induk)  
          ->with('menuatas',$menuatas)  
          ->with('idrole',$idrole) 
          ->with('iduser',$iduser) 
          ->with('menuaktif','Guru') 
          ->with('judulutama','Master Data') 
          ->with('judul','Daftar Guru')            
          ->with('isi','master.guru')
          ->with('namauser',$xxx); 
  } 




public function profdosen(Request $request)
         
        {
              $induk= $request->induk;
              $id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;$idmenu=$request -> idmenu;

            $tambah=0;
                    
            //$nobel = $request -> nobel;                         
            $rec=DB::table('users')                       
                  // ->leftjoin('sat', 'sat.id', '=', 'stok.satid')                   
                  // ->select('stok.*','sat.nama as namasat')
                  ->where('users.id', '=', $id)                
                  ->get();
               
                 return view ('pageform')
                  ->with('menuaktif','Input Departemen')      
                  ->with('judul','Dosen')     
                  ->with('induk',$induk)->with('idmenu',$idmenu)       
                    
                  ->with('isi','master.profdosen') 
                  ->with('judulutama','Profil') 
                  ->with('idrole',$idrole)  
                  ->with('id',$id)                                                    
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }     


public function indexsiswa($induk){
          $xxx= Auth::user()->nama;            
          $idrole= Auth::user()->rolesid;

    // $result =DB::table('member')->paginate(10);
      if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

      $result=DB::table('siswa')                       
                  ->select('*')
                  ->orderby('siswa.nama', 'asc')                                            
                  ->get();

      $xxx= Auth::user()->nama;
      return view('pagelist')
          ->with('data',$result)  
          ->with('induk',$induk)  
          ->with('menuatas',$menuatas)  
          ->with('idrole',$idrole)  
          ->with('menuaktif','Siswa') 
          ->with('judulutama','Master Data') 
          ->with('judul','Daftar Siswa')            
          ->with('isi','master.siswa')
          ->with('namauser',$xxx); 
  } 


public function indexcalonsiswa($induk){
          $xxx= Auth::user()->nama;            
          $idrole= Auth::user()->rolesid;

    // $result =DB::table('member')->paginate(10);
      if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

    
      $xxx= Auth::user()->nama;
      return view('pagelist')
         
          ->with('induk',$induk)  
          ->with('menuatas',$menuatas)  
          ->with('idrole',$idrole)  
          ->with('menuaktif','Siswa') 
          ->with('judulutama','Master Data') 
          ->with('judul','Calon Mahasiswa')            
          ->with('isi','master.calonsiswa')
          ->with('namauser',$xxx); 
  } 


  public function indexmata($induk){
     
       
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
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

        $result=DB::table('mapel')      
                       ->leftjoin('kelompok', 'kelompok.kelid', '=', 'mapel.kelid')                                                      
                       ->leftjoin('jurusan', 'jurusan.id', '=', 'mapel.idjur')                                                      
                      ->select('mapel.*','kelompok.nama as namakelompok','jurusan.nama as najur')
                      ->orderby('mapel.tingkat', 'asc')                     
                      ->get();    

      
      return view('pagelist')
          ->with('data',$result)  
        
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
         
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Mata Pelajaran')            
          ->with('namauser',$xxx)
          ->with('isi','master.mata')            
         ; 
    }   


 public function siruang(Request $request)
        {
            //$data = new User;
            $data = new Ruang;
            $data -> kode = $request -> kode;             
            $data -> nama = $request -> nama;             
          

          
            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }    
  

 public function simpanmata(Request $request)
        {
            //$data = new User;
            $data = new Mata;
            $data -> kode = $request -> kode;             
            $data -> nama = $request -> nama;   
            $data -> idkuri = $request -> idkuri; 
            $data -> tingkat = $request -> tingkat; 
            $data -> kelid = $request -> idkel; 
            $data -> idjur = $request -> idjur; 
            $data -> sem = $request -> sem; 
             
          
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }         
     
  public function viewruang(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Ruang::find($id);
                 
                return response()->json($info);
            }
        }                  
 

 public function simpankel(Request $request)
        {
            //$data = new User;
            $data = new Kelompok;
            $data -> kode = $request -> kode;             
            $data -> nama = $request -> nama;   

                     
          
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }         


 public function simpankelas(Request $request)
        {
               $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;    


            $data = new Kelas;
            $data -> kode = $request -> kode;             
            $data -> idtahun = $idtahun;             
            $data -> nama = $request -> nama;   
            $data -> waliid = $request -> idwali;   
            $data -> jurid = $request -> idjur;   
            $data -> kapasitas= $request -> kapasitas;   
                     
          
            $data -> save();

        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request -> induk;

        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
                $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;    

        $result=DB::table('kelas')                                             
                       ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')
                       ->leftjoin('jurusan', 'jurusan.id', '=', 'kelas.jurid')
                      ->select('kelas.*','guru.nama as namaguru','jurusan.nama as najur')
                      -> where('kelas.idtahun','=',$idtahun)
                      ->orderby('kelas.nama', 'asc')
                     
                      ->get();
        $guru=DB::table('guru')                                             
                        
                      ->select('*')
                      ->orderby('nama', 'asc')                     
                      ->get();              

      
      return view('pagelist')
          ->with('data',$result)  
        
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('guru',$guru)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Kelas')            
          ->with('namauser',$xxx)
          ->with('isi','master.kelas')            
         ; 
            
        }          


    public function copykelas(Request $request){
        $xxx= Auth::user()->nama;
        $idrole= Auth::user()->rolesid;
        $induk = $request -> induk;
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
        return view ('pageform')
            ->with('menuaktif','Input Penjualan')      
            ->with('judul','Copy Data Kelas')            
            ->with('judulutama','Copy Data Kelas')           
            ->with('isi','tool.copykelas')
            ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('idrole',$idrole)
            ->with('menuatas',$menuatas)  
            ->with('namauser',$xxx); 
              
          
      }        



    public function gennim(Request $request){
        $xxx= Auth::user()->nama;
        $idrole= Auth::user()->rolesid;
        $induk = $request -> induk;
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
        return view ('pageform')
            ->with('menuaktif','Input Penjualan')      
            ->with('judul','Nim')            
            ->with('judulutama','Generate')           
            ->with('isi','tool.gennim')
            ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('idrole',$idrole)
            ->with('menuatas',$menuatas)  
            ->with('namauser',$xxx); 
              
          
      }         



 public function simpanuploadsiswa(Request $request)
        {
            $xxx= Auth::user()->nama;
            $idrole= Auth::user()->rolesid;
            $ly= Auth::user()->layout;
            $induk= $request->induk;
            $idmenu= $request->idmenu;
            $id= $request->id;
            $tambah = $request->tambah;        

            //dd('xxxxxxxx');

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

            $this->validate($request, [
                'select_file' => 'required|mimes:xls,xlsx']);
                  $path = $request->file('select_file')->getRealpath();
                  $data = Excel::load($path)->get();
                  
            DB::beginTransaction();

             try {


                  // DB::table('siswa')                    
                  //   ->delete(); 

                    //dd($data);
                  if ($data->count() > 0 ){
                    
                    $rows = $data->toArray();
                  //  dd($rows);
                    foreach ($rows as $row) { 
                       
                          $pro=array
                         (                                                
                            'nis' => $row['nim'],                            
                            'nama'=>$row['nama'],
                            'sta'=>$row['sta'],
                            
                            
                         );

                         $idsiswa = DB::table('siswa')->insertgetId($pro);                          
                     
                    // $kelas=array
                    //      (                                                
                    //         'idkelas' => $row['idkelas'],                            
                    //         'tahunid' => 4,
                    //         'idtingkat' => 1,                            
                    //         'pindahan' => 0,  
                    //         'bulpin' => 0,                           
                    //         'idsiswa'=>$idsiswa
                            
                    //      );

                    //      DB::table('kelassiswa')->insertgetId($kelas);                          
                      
                    }
                  }
                DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }          
                  
               $result=DB::table('siswa')                       
                  ->leftjoin('jurusan', 'jurusan.id', '=', 'siswa.idjurusan')
                  ->leftjoin('tingkat', 'tingkat.id', '=', 'siswa.idkelas')
                  ->leftjoin('stasis', 'stasis.id', '=', 'siswa.sta')
                  ->select('siswa.*','stasis.nama as namasta','tingkat.nama as namatingkat','jurusan.nama as namajurusan')
                  ->orderby('siswa.nama', 'asc')                                            
                  ->get();

            return view ('pagelist')
            ->with('isi','master.siswa')  
            ->with('menuatas',$menuatas)
            ->with('ly',$ly) 
            ->with('idrole',$idrole) 
             ->with('data',$result) 
             ->with('induk',$induk) 
             ->with('idmenu',$idmenu) 
            ->with('judulutama','Master Data')            
            ->with('judul','Siswa')
            ->with('namauser',$xxx);
        }



 public function simpanjadwal(Request $request)
        {
              $induk= $request->induk;
              $iduser= Auth::user()->id;         
              //$id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;
              $idkelas =$request->idkelas;
              $cajur=DB::table('kelas')
                ->select('*') 
                ->where('kelas.id', '=', $idkelas)                 
                ->first();
              $idjurusan = $cajur->jurid;   

            $tambah=0;
              if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
            
           $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;    

               $cari=DB::table('jadwal')              
                ->select('jadwal.*')                                 
                ->where('kelasid', '=', $request -> idkelas)  
                ->where('hariid', '=', $request -> idhari)  
                ->where('mapelid', '=', $request -> idmapel)  
                ->where('ruangid', '=', $request -> idruang)  
                ->first();
               ///dd($cari); 
              if ($cari==null){

                  $data = new Jadwal;
                  $data -> kelasid = $request -> idkelas;             
                  $data -> mapelid = $request -> idmapel;   
                  $data -> hariid = $request -> idhari;             
                  $data -> guruid = $request -> idguru;    
                  $data -> ruangid = $request -> idruang;   
                  $data -> jammulai = $request -> jammulai;             
                  $data -> jamselesai = $request -> jamselesai;  
                   $data -> tahunid = $idtahun;  
                   $data -> save();
               }    
          
            $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru','mapel.kode as kodemapel',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=',$idtahun)
                ->where('kelasid','=',$idkelas)

                ->get();         
           
                   
                 return view ('pagelist')
                 
                  ->with('judul','Jadwal')     
                  ->with('induk',$induk)       
                  ->with('iduser',$iduser)   
                  ->with('menuatas',$menuatas)       
                  ->with('isi','transaksi.jadwal') 
                  ->with('judulutama','Master Data') 
                  ->with('idrole',$idrole)  
                  ->with('idkelas',$idkelas)
                  ->with('idjurusan',$idjurusan)
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
        }       
        


 public function simpaneditjadwal(Request $request)
        {
              $induk= $request->induk;
              //$id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;
              $idkelas =$request->idkelas;
              $id =$request->id;
               $idprodi =$request->idprodi;
              $cajur=DB::table('kelas')
                ->select('*') 
                ->where('kelas.id', '=', $idkelas)                 
                ->first();
              $idjurusan = $cajur->jurid;   

            $tambah=0;
              if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
            
           $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;    



            $ha=array
               (      
            'kelasid' =>Input::get('idkelas'),                
            'mapelid' =>Input::get('idmapel'),     
            'hariid'  =>Input::get('idhari'),            
            'guruid' =>Input::get('idguru'),    
            'ruangid' =>Input::get('idruang'),    
            'jammulai' =>Input::get('jammulai'),                 
            'jamselesai' =>Input::get('jamselesai'),    
            'tahunid' => $idtahun
             ); 
               
              
            
            $ee=DB::table('jadwal')->where('id',$id)->update($ha); 
           if ($idprodi==1){ 
       $rec=DB::table('jadwal')    
       ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')   
                ->leftjoin('prodi', 'prodi.id', '=', 'kelas.jurid') 

                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','prodi.nama as namaprodi','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel','mapel.kode as kodemapel')                 
                ->where('tahunid','=',$idtahun)
                ->get();
      }else{
         $rec=DB::table('jadwal')   
          ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')   
                ->leftjoin('prodi', 'prodi.id', '=', 'kelas.jurid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
               
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','prodi.nama as namaprodi','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel','mapel.kode as kodemapel')                 
                ->where('tahunid','=',$idtahun)
                ->where('kelas.jurid','=',$idprodi)
                ->get();
      }        
           
                   
                 return view ('pagelist')
                 
                  ->with('judul','Jadwal')     
                  ->with('induk',$induk)       
                  ->with('menuatas',$menuatas)       
                  ->with('isi','transaksi.jadwal') 
                  ->with('judulutama','Master Data') 
                  ->with('idrole',$idrole)  
                  ->with('idkelas',$idkelas)
                  ->with('idprodi',$idprodi)
                  ->with('idjurusan',$idjurusan)
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
        }       
               
       
     
  public function viewkel(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Kelompok::find($id);
                //dd($info);  
                return response()->json($info);
            }
        }                  
 

  public function view(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Kelompok::find($id);
                 
                return response()->json($info);
            }
        }                  
 
  public function formmata (Request $request){
          $tambah=1;
          $induk = $request->induk;
          $xxx= Auth::user()->nama;            
          $idrole= Auth::user()->rolesid;


          if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

                $tambah =1;

                $xxx= Auth::user()->nama;
                return view('pageform')
                   // ->with('data',$result)  
                    ->with('menuatas',$menuatas)  
                     
                    ->with('judulutama','Master Data') 
                    ->with('tambah',$tambah) 
                    ->with('idrole',$idrole) 
                    ->with('induk',$induk) 
                    ->with('isi','master.mataform') 
                    ->with('judul','Pelajaran')            
                    ->with('namauser',$xxx); 
  }

 public function viewkelas(Request $request)
        {
            if($request->ajax()){
                $id = $request->id;
                $info = Kelas::find($id);
                 
                return response()->json($info);
            }
        }                  

public function editmata(Request $request)
         
        {
              $induk= $request->induk;
              $id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;

            $tambah=0;
              if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
            //$nobel = $request -> nobel;                         
            $rec=DB::table('mapel')                       
                  ->leftjoin('kelompok', 'kelompok.kelid', '=', 'mapel.kelid')                   
                  ->select('mapel.*','kelompok.nama as namakelompok')
                  ->where('mapel.id', '=', $id)                
                  ->get();
                  //echo "string:$rec";
                  //dd($tambah);
            
                 return view ('pageform')
                 
                  ->with('judul','Form Mata Pelajaran')     
                  ->with('induk',$induk)       
                  ->with('menuatas',$menuatas)       
                  ->with('isi','master.mataform') 
                     ->with('judulutama','Master') 
                    ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }    


public function editkelas(Request $request)
          
        {
              $induk= $request->induk;
              $id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;

            $tambah=0;
              if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
            //$nobel = $request -> nobel;                         
            $rec=DB::table('kelas')                       
                 
                  ->select('*')
                  ->where('kelas.id', '=', $id)                
                  ->get();
                   
                 return view ('pageform')
                 
                  ->with('judul','Form Kelas')     
                  ->with('induk',$induk)       
                  ->with('menuatas',$menuatas)       
                  ->with('isi','master.kelasform') 
                  ->with('judulutama','Master') 
                  ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }    


public function edituser(Request $request)
          
        {
              $induk= $request->induk;
              $id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;

            $tambah=0;
              if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
            //$nobel = $request -> nobel;                         
            $rec=DB::table('users')                       
                 
                  ->select('*')
                  ->where('users.id', '=', $id)                
                  ->get();
                   
                 return view ('pageform')
                 
                  ->with('judul','Form User')     
                  ->with('induk',$induk)       
                  ->with('menuatas',$menuatas)       
                  ->with('isi','master.userform') 
                  ->with('judulutama','Master') 
                  ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }    


public function editkel(Request $request)
          
        {
              $induk= $request->induk;
              $id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;

            $tambah=0;
              if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }
            //$nobel = $request -> nobel;                         
            $rec=DB::table('kelompok')                       
                 
                  ->select('*')
                  ->where('kelompok.kelid', '=', $id)                
                  ->get();
                   
                 return view ('pageform')
                 
                  ->with('judul','Kelompok')     
                  ->with('induk',$induk)       
                  ->with('menuatas',$menuatas)       
                  ->with('isi','master.kelform') 
                  ->with('judulutama','Master') 
                  ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }           
      
 public function editmapel(Request $request)
         
        {
              $induk= $request->induk;
              $id= $request->id;
              $xxx= Auth::user()->nama;            
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
            //$nobel = $request -> nobel;                         
            $rec=DB::table('mapel')                       
                 
                  ->select('*')
                  ->where('mapel.id', '=', $id)                
                  ->get();
                   
                 return view ('pageform')
                 
                  ->with('judul','Form Mata Pelajaran')     
                  ->with('induk',$induk)       
                  ->with('menuatas',$menuatas)       
                  ->with('isi','master.mataform') 
                  ->with('judulutama','Master') 
                  ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }    



 public function indexlihatbayar(Request $request)
         
        {
              $induk= $request->induk;
              $nopen= $request->nopen;
              $xxx= Auth::user()->nama;            
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
            //$nobel = $request -> nobel;                         
            $rec=DB::table('daftarpmb')                       
                 
                  ->select('*')
                  ->where('nopen', '=', $nopen)                
                  ->first();
                 
                 return view ('pageform')
                 
                  ->with('judul','Calon Mahasiswa')     
                  ->with('induk',$induk)       
                  ->with('menuatas',$menuatas)       
                  ->with('isi','master.lihatbayar') 
                  ->with('judulutama','Bukti Pembayaran') 
                  ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }    
           



  public function indexdcsis($induk, Request $r){
     
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;         
        $idrole= Auth::user()->rolesid;
        $idmenu = $r->idmenu;
        $induk = $r->induk;


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
            $total=DB::table('periode')
                ->select('*') 
                ->where('periode.aktif', '=', 1 )                      
                ->first();
            $idtahun =$total->id;             

       
      
      return view('pageform')
          //->with('data',$rec) 
          ->with('idrole',$idrole)
          ->with('iduser',$iduser)
          ->with('idmenu',$idmenu)
          ->with('induk',$induk)
          ->with('idtahun',$idtahun)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Discount/Beasiswa')            
          ->with('judul','Mahasiswa')            
          ->with('namauser',$xxx)
          ->with('isi','transaksi.dcsis')            
         ; 
    } 

  


     public function simpanverbay(Request $r)
    {
      
      $nopen=$r->nopen; 
      $induk=$r->induk; 
      
                  $pro=array
                     (        
                            
                            'verifikasibayar'=>1,
                             
                     );

                     DB::table('daftarpmb')->where('nopen',$nopen)->update($pro); 

                             //terimnonspp/196/414
        return redirect('calonmasiswa/'.$induk)
        ->with('success','Delete Success');          
               
}


 public function simpaneditkelas(Request $request)
        {
              $induk= $request->induk;
              //$id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;
              $id =$request->id;

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
            
           $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;    

            $data = Kelas::find($id);    
            $data -> kode = Input::get('kode');
            $data -> waliid = Input::get('idwali'); 
            $data -> jurid = Input::get('idjur'); 
            $data -> nama = Input::get('nama');  
            $data -> kapasitas = Input::get('kapasitas');     
            $data -> save();   
          
           
           $rec=DB::table('kelas')                                             
                       ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')
                       ->leftjoin('jurusan', 'jurusan.id', '=', 'kelas.jurid')
                      ->select('kelas.*','guru.nama as namaguru','jurusan.nama as najur')
                      ->orderby('kelas.nama', 'asc')
                     
                      ->get();
        $guru=DB::table('guru')                                             
                        
                      ->select('*')
                      ->orderby('nama', 'asc')                     
                      ->get();    
         return view('pagelist')
          ->with('data',$rec)  
        
           
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('guru',$guru)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Kelas')            
          ->with('namauser',$xxx)
          ->with('isi','master.kelas')            
         ; 
      } 
 


 public function simpaneditguru(Request $request)
        {
              $induk= $request->induk;
              //$id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;
              $id =$request->id;

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
            
           $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;    

            $data = Kelas::find($id);    
            $data -> kode = Input::get('kode');
            $data -> nama = Input::get('nama'); 
            $data -> nohp = Input::get('nohp');  
            $data -> jeka = Input::get('jeka');     
            $data -> alamat = Input::get('alamat');     
            $data -> rolesid = Input::get('rolesid');     

            $data -> save();   
          
           
           $rec=DB::table('kelas')                                             
                       ->join('guru', 'guru.id', '=', 'kelas.waliid')
                      ->select('kelas.*','guru.nama as namaguru')
                      ->orderby('kelas.nama', 'asc')
                     
                      ->get();
        $guru=DB::table('guru')                                             
                        
                      ->select('*')
                      ->orderby('nama', 'asc')                     
                      ->get();    
         return view('pagelist')
          ->with('data',$rec)  
        
           
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('guru',$guru)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Kelas')            
          ->with('namauser',$xxx)
          ->with('isi','master.kelas')            
         ; 
      } 
 

 public function simpaneditkel(Request $request)
        {
              $induk= $request->induk;
              //$id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;
              $id =$request->id;

            $tambah=0;
              if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby('menu.urut')
                ->get();
                }
            
          $ha=array
               (                                         
                      'kode'=>Input::get('kode'),             
                      'nama'=>Input::get('nama')
                       
               ); 
            
            $ee=DB::table('kelompok')->where('kelid',$id)->update($ha); 
          
           
           $rec=DB::table('kelompok')
                      ->orderby('kelompok.nama', 'asc')
                      ->get();
      
         return view('pagelist')
          ->with('data',$rec)  
        
           
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('guru',$rec)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Kelompok')            
          ->with('namauser',$xxx)
          ->with('isi','master.kelompok')     
         ; 
      } 
 
 



 public function simpaneditmata(Request $request)
        {
              $induk= $request->induk;
              //$id= $request->id;
              $xxx= Auth::user()->nama;            
              $idrole= Auth::user()->rolesid;
              $id =$request->id;

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
            
           $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;    

            $data = Mata::find($id);    
            $data -> kode = Input::get('kode');
            $data -> kelid = Input::get('idkel'); 
            $data -> nama = Input::get('nama');  
            $data -> sem = Input::get('sem');  
            $data -> idkuri = Input::get('idkuri');  
            $data -> tingkat = Input::get('tingkat');  
            $data -> idjur = Input::get('idjur');             
            $data -> save();   
            $idkuri= Input::get('idkuri'); 
         $rec=DB::table('mapel')      
                       ->leftjoin('kelompok', 'kelompok.kelid', '=', 'mapel.kelid')                                                      
                       ->leftjoin('jurusan', 'jurusan.id', '=', 'mapel.idjur')                                                      
                      ->select('mapel.*','kelompok.nama as namakelompok','jurusan.nama as najur')
                      ->orderby('mapel.tingkat', 'asc')                     
                      ->get();
           
                   
                 return view ('pagelist')
                 
                  ->with('judul','Mata Pelajaran')     
                  ->with('induk',$induk)       
                  ->with('idkuri',$idkuri)       
                  ->with('menuatas',$menuatas)       
                   ->with('isi','master.mata')  
                  ->with('judulutama','Master Data') 
                  ->with('idrole',$idrole)  
                  ->with('data',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
        }       
 

  public function updateruang(Request $request)
  {
            $id = $request -> edit_id;
            $data = Ruang::find($id);     

            $data -> kode = $request -> edit_kode;
            $data -> nama = $request -> edit_nama;              
             
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
       
        }


  public function updatekelasxxx(Request $request)
  {
            $id = $request -> edit_id;
            $data = Kelas::find($id);     

            $data -> kode = $request -> edit_kode;
            $data -> nama = $request -> edit_nama;              
            $data -> kapasitas = $request -> edit_kapasitas;              
            $data -> waliid = $request -> idwali;              
             
            $data -> save();
            return back()
                    ->with('success','Record Updated successfully.');
       
        }    

   public function deleteruang(Request $request)
        {
            $id = $request -> id;
            $id_induk = $request -> id_induk;
            $data = Ruang::find($id);
            $response = $data -> delete();
            if($response)
                 
            return back()
                    ->with('success','Record Delete successfully.');
        }             



   public function deletekelas(Request $request)
        {
            $id = $request -> id;
            $id_induk = $request -> id_induk;
            $data = Kelas::find($id);
            $response = $data -> delete();
            if($response)
                 
            return back()
                    ->with('success','Record Delete successfully.');
        }             

  
   public function deletekel(Request $request)
        {
            $id = $request -> id;
            
            $data = Kelompok::find($id);
            $response = $data -> delete();
            if($response)
                 
            return back()
                    ->with('success','Record Delete successfully.');
        }         




  public function indexmasterenrol($induk){
     
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;         
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
        $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;             

      $rec=DB::table('vkelassum')
                  ->select('vkelassum.*')
                  ->where('vkelassum.idtahun','=',$idtahun)
                  ->get();
      
      return view('pagelist')
          ->with('data',$rec) 
          ->with('idrole',$idrole)
          ->with('iduser',$iduser)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Enroll Siswa')            
          ->with('judul','Enroll')            
          ->with('namauser',$xxx)
          ->with('isi','transaksi.enroll')            
         ; 
    } 




  public function indexledger($induk){
     
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;         
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
        $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
            $idtahun =$total->id;             

      $rec=DB::table('vkelassum')
                  ->select('vkelassum.*')
                  ->where('vkelassum.idtahun','=',$idtahun)
                  ->get();
      
      return view('pagelist')
          ->with('data',$rec) 
          ->with('idrole',$idrole)
          ->with('iduser',$iduser)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Cetak Ledger')            
          ->with('judul','Ledger')            
          ->with('namauser',$xxx)
          ->with('isi','cetak.daftakelas')            
         ; 
    } 

 


  public function indexnilaisikap($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
          
          
          

         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
     
      
        return view ('pageforminput')
      
        ->with('judul','Nilai Sikap')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaisikap')              
        ->with('menuatas',$menuatas)
         
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)

        ->with('idrole',$idrole)
        ->with('iduser',$iduser)
        ->with('induk',$induk)
        ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }   


  public function indexabsen($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
          
          
          

         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
     
      
        return view ('pageforminput')
      
        ->with('judul','Absen')            
        ->with('judulutama','Siswa')           
        ->with('isi','transaksi.absen')              
        ->with('menuatas',$menuatas)
         
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)

        ->with('idrole',$idrole)
        ->with('iduser',$iduser)
        ->with('induk',$induk)
        ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }   



  public function indexnilaipsg($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
          
          
          

         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
        
        return view ('pageforminput')
      
        ->with('judul','Nilai PSG')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaipsg')              
        ->with('menuatas',$menuatas)
       
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)

        ->with('idrole',$idrole)
        ->with('induk',$induk)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }     


  public function indexnilaieks($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
        
        return view ('pageforminput')
      
        ->with('judul','Nilai Ekskul')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaieks')              
        ->with('menuatas',$menuatas)
       
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)

        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('iduser',$iduser)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }     


public function indextahun($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                //->where('tahun.id', '!=', 'Y')                 
                ->get();
         //$idtahun =$total->id;        

         //$tersimpan='T';
         //$simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
         
        return view ('pagelist')
      
        ->with('judul','Tahun')            
        ->with('judulutama','Master')           
        ->with('isi','master.tahun')              
        ->with('menuatas',$menuatas) 
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('data',$total)
        ->with('iduser',$iduser)             
        ->with('namauser',$xxx); 
    }     




  public function indexjadwal(Request $r){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $r->id;
        $idprodi = $r->idprodi;
        
        
         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;  

         $tersimpan='T';
         $simpan='T';

 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;      
      
        $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=',$idtahun)
                ->where('kelasid','=',$idkelascari)

                ->get();                    
                          
        
        return view ('pageforminput')
      
        ->with('judul','Jadwal')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.jadwal')              
        ->with('menuatas',$menuatas)
        ->with('idjurusan',0)
        ->with('idprodi',$idprodi)
        
        ->with('simpan',$simpan)
        ->with('rec',$rec)
        ->with('iduser',$iduser)
        ->with('tersimpan',$tersimpan)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }     





  public function indexkrs(Request $r){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk= $r->id;
        $idsiswa= $r->idsiswa;
        
  
        
         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';

 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;      
       


       $rec=DB::table('krs')    
                ->leftjoin('vjadwalrapor', 'vjadwalrapor.id', '=', 'krs.idjadwal') 
                ->where('vjadwalrapor.tahunid','=',$idtahun)
                ->where('krs.idsiswa','=',$idsiswa)
                ->get();                    
                          
        
        return view ('pageforminput')
      
        ->with('judul','Jadwal')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.krs')              
        ->with('menuatas',$menuatas)
        ->with('idjurusan',0)
        ->with('idsiswa',0)
        ->with('idtahun',0)
        ->with('simpan',$simpan)
        ->with('rec',$rec)
        ->with('iduser',$iduser)
        ->with('tersimpan',$tersimpan)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }     


  public function carijadwalkelasxx(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
          
          

        
        

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Jadwal')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.jadwal')              
        ->with('menuatas',$menuatas)
         
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        



  public function indexsampul1($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
        
        return view ('pageforminput')
      
        ->with('judul','Sampul 1')            
        ->with('judulutama','Cetak')           
        ->with('isi','transaksi.sampul1')              
        ->with('menuatas',$menuatas)
       
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)

        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('iduser',$iduser)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }     



  public function indexbiodata($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
        
        return view ('pageforminput')
      
        ->with('judul','Biodata')            
        ->with('judulutama','Cetak')           
        ->with('isi','transaksi.biodata')              
        ->with('menuatas',$menuatas)
       
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)

        ->with('idtahun',$idtahun)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }     



  public function indexnilai($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = '';
         
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
                  
                          
        
        return view ('pageforminput')
      
        ->with('judul','Nilai')            
        ->with('judulutama','Cetak')           
        ->with('isi','transaksi.nilai')              
        ->with('menuatas',$menuatas)
       
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)

        ->with('idrole',$idrole)
        ->with('idtahun',$idtahun)
        ->with('iduser',$iduser)
        ->with('induk',$induk)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }     




  public function indexsampul2($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
        
        return view ('pageforminput')
      
        ->with('judul','Sampul 2')            
        ->with('judulutama','Cetak')           
        ->with('isi','transaksi.sampul2')              
        ->with('menuatas',$menuatas)
       
        ->with('idtahun',$idtahun)
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)

        ->with('idrole',$idrole)
        ->with('induk',$induk)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }     




  public function indexnilaipres($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
          
          
          

         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $tersimpan='T';
         $simpan='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
        
        return view ('pageforminput')
      
        ->with('judul','Prestasi')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaipres')              
        ->with('menuatas',$menuatas)
       
        ->with('simpan',$simpan)
        ->with('tersimpan',$tersimpan)
        ->with('iduser',$iduser)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }       

  public function indexnilaiakhir($induk){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
          
          
          

         $idkelascari = '';
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $salah='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=','')
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Nilai Akhir')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaiakhir')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('idtahun',$idtahun)
         ->with('salah',$salah)
         ->with('idrole',$idrole)
         ->with('iduser',$iduser)
            ->with('induk',$induk)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }   


  public function inputnilaiakhir(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;
        $idtahun =   $request->idtahun;
        $idjadwal  = $request->idjadwal; 


        //dd($idjawal);
        $total2=DB::table('jadwal')
                ->select('*') 
                ->where('id', '=', $idjadwal )                 
                ->first();
         $idkelas =$total2->kelasid;   
         $idmapel =$total2->mapelid;   
         //dd($idkelas);
          
          
          

         $idkelascari = '';
          
          

         $salah='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
                      
                    /*      
       $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=','')
                ->get();
      */

      $mades=DB::table('mades')    
               
                ->select('*')                  
                ->where('mapelid','=',$idmapel)
                ->first();
        return view ('pageforminput')
      
        ->with('judul','Nilai Akhir')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.inputnilaiakhir')              
        ->with('menuatas',$menuatas)
        ->with('mades',$mades)
        ->with('idmapel',$idmapel)
        ->with('idjadwal',$idjadwal)
        ->with('idtahun',$idtahun)
        ->with('salah',$salah)
        ->with('idkelas',$idkelas)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('iduser',$iduser)
         
        ->with('namauser',$xxx); 
    }   


  public function formnilaikb(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;
        
              

        
       $xxx= Auth::user()->nama; 
        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby('menu.urut')  
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk) 
                ->orderby ('menu.urut')
                ->get();
                }
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
       $tersimpan='T';         

     
        return view ('pageforminput')
      
        ->with('judul','Nilai KKM')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.inputnilaikb')              
        ->with('menuatas',$menuatas)
        
        ->with('idtahun',$idtahun)        
        ->with('iduser',$iduser)  
        ->with('tersimpan',$tersimpan)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
         
        ->with('namauser',$xxx); 
    }     



  public function formmades(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;
        
              

        
       $xxx= Auth::user()->nama; 
        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby('menu.urut')  
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk) 
                ->orderby ('menu.urut')
                ->get();
                }
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
       $tersimpan='T';         

     
       
        return view ('pageforminput')
      
        ->with('judul','Master Deskripsi')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.mades')              
        ->with('menuatas',$menuatas)
         
        ->with('idtahun',$idtahun)        
        ->with('tersimpan',$tersimpan)
        ->with('idrole',$idrole)
        ->with('iduser',$iduser)
        ->with('induk',$induk)
         
        ->with('namauser',$xxx); 
    }     



  public function formmadessikap(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;
        
              

        
       $xxx= Auth::user()->nama; 
        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby('menu.urut')  
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk) 
                ->orderby ('menu.urut')
                ->get();
                }
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
       $tersimpan='T';         

     
       
        return view ('pageforminput')
      
        ->with('judul','Master Deskripsi')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.mades')              
        ->with('menuatas',$menuatas)
         
        ->with('idtahun',$idtahun)        
        ->with('tersimpan',$tersimpan)
        ->with('idrole',$idrole)
        ->with('iduser',$iduser)
        ->with('induk',$induk)
         
        ->with('namauser',$xxx); 
    }     


  public function formsetting(Request $request){
      
        $xxx= Auth::user()->nama; 
      $idrole= Auth::user()->rolesid;
      $idmenu=$request -> idmenu; 
      $ly= Auth::user()->layout; 
      $induk = $request->induk;
               
      
           
            $totpem=0;                  
            $totpel=0;
            $totbar=0;
            $totkar=0;
            $data=DB::table('toko')                                             
                      ->select('toko.*')                      
                      ->first();
            
      return view ('pageforminput')
          ->with('isi','setting')  
          ->with('data',$data)           
          
           
          ->with('ly',$ly)
          ->with('totpem',$totpem)
          ->with('totpel',$totpel)
          ->with('totkar',$totkar)
          ->with('totbar',$totbar)
          ->with('idrole',$idrole)
           
          ->with('judulutama','Profil')            
          ->with('judul','Sekolah')
          ->with('namauser',$xxx); 
    }      



  public function formnilaisikap(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;

        $idkelas =   $request->idkelas;
        
              

        
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
        $total=DB::table('kelas')
                ->select('*') 
                ->where('kelas.id', '=', $idkelas)                 
                ->first();

       $namakelas =$total->nama;              
       $tersimpan='T';                   
       
      
        return view ('pageforminput')
      
        ->with('judul','Nilai Sikap')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.inputnilaisikap')              
        ->with('menuatas',$menuatas)
        ->with('idkelas',$idkelas)             
        ->with('namakelas',$namakelas)   
        ->with('idtahun',$idtahun)        
        ->with('tersimpan',$tersimpan)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
         
        ->with('namauser',$xxx); 
    }     



  public function simpannilaiakhir(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;
        $idjadwal  = $request->idjadwal; 
        //dd($idjawal);
        
        $total2=DB::table('jadwal')
                ->select('*') 
                ->where('id', '=', $idjadwal )                 
                ->first();

         $idkelas =$total2->kelasid;
         $idguru =$total2->guruid; 
         $idmapel =$total2->mapelid;   
         $idtahun =$total2->tahunid;   
         //dd($idtahun);
        

         DB::beginTransaction();

             try {
                $idsiswa = Input::get('idsiswa'); 
                $angkap = Input::get('angkap'); 
                $angkak = Input::get('angkak');
                $angkas = Input::get('angkas'); 
                $desp = Input::get('desp'); 
                $desk = Input::get('desk'); 
                $dess = Input::get('dess'); 
               // dd($idsiswa);

 
                  foreach($angkap as $key => $val){
                     $idsiswax=$idsiswa[$key];
                    //dd($key);
                      
                       $cari=DB::table('nilaisiswa')                       
                          ->select('*')                 
                          ->where('idsiswa', '=', $idsiswax)  
                          ->where('idmapel', '=', $idmapel)  
                          ->where('tahunid', '=', $idtahun)  
                          ->where('idkelas', '=', $idkelas)  
                          ->first();
                       


                      if ($cari==null){
                        $pro=array
                       (                                             
                          'idsiswa'=>$idsiswax, 
                          'angkap'=>$angkap[$key], 
                          'angkak'=>$angkak[$key], 
                          'angkas'=>$angkas[$key], 
                          'desp'=>$desp[$key], 
                          'desk'=>$desk[$key], 
                          'dess'=>$dess[$key], 

                          'idkelas'=>$idkelas, 
                          'idguru'=>$idguru, 
                          'idmapel'=>$idmapel, 
                          'idjadwal'=>$idjadwal, 
                          'tahunid'=>$idtahun
                       );
                        DB::table('nilaisiswa')->insertgetId($pro); 
                      } 
                         if ($cari!=null){
                      //dd($idtahun);
                         DB::table('nilaisiswa')
                          ->where('idkelas', $idkelas)
                          ->where('idsiswa', $idsiswax)                         
                          ->where('idmapel', $idmapel)
                          ->where('tahunid', $idtahun)

                          ->update(['angkap' => $angkap[$key],
                                    'angkak' => $angkak[$key],
                                    'angkas' => $angkas[$key],
                                    'desp' => $desp[$key],
                                    'desk' => $desk[$key],
                                    'dess' => $dess[$key]
                                    ]);

                      }

                      

                  }

                   
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }  
        
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=','')
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Nilai Akhir')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaiakhir')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('idjadwal',$idjadwal)
        ->with('idtahun',$idtahun)
      
        ->with('idkelas',$idkelas)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('iduser',$iduser)         
        ->with('namauser',$xxx); 
    }   



  public function simpannilaisikap(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;

        $idkelas  = $request->idkelas; 
        $idtahun  = $request->idtahun; 
        //dd($idjawal);
        
        $tersimpan='T';
        $simpan='T';

         DB::beginTransaction();

             try {
                $idsiswa = Input::get('idsiswa'); 
                $angkas = Input::get('angkas'); 
                $angkasos = Input::get('angkasos');                  
                $des_spritual = Input::get('des_spritual'); 
                $des_sosial = Input::get('des_sosial'); 
                $cat = Input::get('cat'); 
                

 
                  foreach($idsiswa as $key => $val){
                     $idsiswax=$idsiswa[$key];
                     
                     $recari=DB::table('t_sikap_semester')
                                    ->select('*')                 
                                    ->where('idsiswa','=',$idsiswax)
                                     ->where('tahunid','=',$idtahun)                                    
                                    ->first();
                       
                      if ($recari==null){
                        $pro=array
                       (                                             
                          'idsiswa'=>$idsiswax, 
                          'tahunid'=>$idtahun, 
                          'idkelas'=>$idkelas, 
                          'spiritual_deskripsi'=>$des_spritual[$key],
                          'sosial_deskripsi'=>$des_sosial[$key],
                          'angkas'=>$angkas[$key], 
                          'angkassos'=>$angkasos[$key],                           
                          'cat'=>$cat[$key] 
                       );
                        DB::table('t_sikap_semester')->insertgetId($pro); 
                      } 
                         if ($recari!=null){
                      //dd($idtahun);
                         DB::table('t_sikap_semester')
                          ->where('idkelas', $idkelas)
                          ->where('idsiswa', $idsiswax)                                                   
                          ->where('tahunid', $idtahun)

                          ->update(['angkas' => $angkas[$key],
                                    'angkassos' => $angkasos[$key],
                                    'spiritual_deskripsi' => $des_spritual[$key],
                                    'sosial_deskripsi' => $des_sosial[$key],                                    
                                    'cat' => $cat[$key]
                                    ]);

                      }

                      

                  }

                   $tersimpan='Y';
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }  
        
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=','')
                ->get();
      
        return view ('pageforminput')      
        ->with('judul','Nilai Sikap')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaisikap')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('tersimpan',$tersimpan)
        ->with('simpan',$simpan)
        ->with('idkelas',$idkelas)
        ->with('idrole',$idrole)
        ->with('induk',$induk)  
        ->with('iduser',$iduser)         
        ->with('namauser',$xxx); 
    }   



  public function simpanabsensiswa(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;

        $idkelas  = $request->idkelas; 
        $idtahun  = $request->idtahun; 
        //dd($idjawal);
        
        $tersimpan='T';
        $simpan='T';

         DB::beginTransaction();

             try {
                $idsiswa = Input::get('idsiswa'); 
                $sakit = Input::get('sakit'); 
                $izin = Input::get('izin');                  
                $tanpa = Input::get('tanpa');
                $idtahun = Input::get('idtahun'); 
                 

 
                  foreach($idsiswa as $key => $val){
                     $idsiswax=$idsiswa[$key];
                     
                     $recari=DB::table('absensiswa')
                                    ->select('*')                 
                                    ->where('idsiswa','=',$idsiswax)
                                     ->where('tahunid','=',$idtahun)                                    
                                    ->first();
                       
                      if ($recari==null){
                        $pro=array
                       (                                             
                          'idsiswa'=>$idsiswax, 
                          'tahunid'=>$idtahun, 
                          'idkelas'=>$idkelas, 
                          'sakit'=>$sakit[$key],
                          'izin'=>$izin[$key],
                          'tanpa'=>$tanpa[$key]
                           
                       );
                        DB::table('absensiswa')->insertgetId($pro); 
                      } 
                         if ($recari!=null){
                      //dd($idtahun);
                         DB::table('absensiswa')
                          ->where('idkelas', $idkelas)
                          ->where('idsiswa', $idsiswax)                                                   
                          ->where('tahunid', $idtahun)

                          ->update(['sakit' => $sakit[$key],
                                    'izin' => $izin[$key],
                                    'tanpa' => $tanpa[$key]
                                     
                                    ]);

                      }

                      

                  }

                   $tersimpan='Y';
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }  
        
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=','')
                ->get();
      
        return view ('pageforminput')      
        ->with('judul','Absen')            
        ->with('judulutama','Siswa')           
        ->with('isi','transaksi.absen')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('tersimpan',$tersimpan)
        ->with('simpan',$simpan)
        ->with('idkelas',$idkelas)
        ->with('idrole',$idrole)
        ->with('induk',$induk)  
        ->with('iduser',$iduser)         
        ->with('namauser',$xxx); 
    }      



  public function simpannilaipsg(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;

        $idkelas  = $request->idkelas; 
        $idtahun  = $request->idtahun; 
        //dd($idjawal);
        
        $tersimpan='T';
        $simpan='T';

         DB::beginTransaction();

             try {
                $idsiswa = Input::get('idsiswa'); 
                $angkas = Input::get('angkas'); 
                $angkasos = Input::get('angkasos');                  
                $des_spritual = Input::get('des_spritual'); 
                $des_sosial = Input::get('des_sosial'); 
                $cat = Input::get('cat'); 
                

 
                  foreach($idsiswa as $key => $val){
                     $idsiswax=$idsiswa[$key];
                     
                     $recari=DB::table('t_sikap_semester')
                                    ->select('*')                 
                                    ->where('idsiswa','=',$idsiswax)
                                     ->where('tahunid','=',$idtahun)                                    
                                    ->first();
                       
                      if ($recari==null){
                        $pro=array
                       (                                             
                          'idsiswa'=>$idsiswax, 
                          'tahunid'=>$idtahun, 
                          'idkelas'=>$idkelas, 
                          'spiritual_deskripsi'=>$des_spritual[$key],
                          'sosial_deskripsi'=>$des_sosial[$key],
                          'angkas'=>$angkas[$key], 
                          'angkassos'=>$angkasos[$key],                           
                          'cat'=>$cat[$key] 
                       );
                        DB::table('t_sikap_semester')->insertgetId($pro); 
                      } 
                         if ($recari!=null){
                      //dd($idtahun);
                         DB::table('t_sikap_semester')
                          ->where('idkelas', $idkelas)
                          ->where('idsiswa', $idsiswax)                                                   
                          ->where('tahunid', $idtahun)

                          ->update(['angkas' => $angkas[$key],
                                    'angkassos' => $angkasos[$key],
                                    'spiritual_deskripsi' => $des_spritual[$key],
                                    'sosial_deskripsi' => $des_sosial[$key],                                    
                                    'cat' => $cat[$key]
                                    ]);

                      }

                      

                  }

                   $tersimpan='Y';
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }  
        
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=','')
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Nilai Sikap')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaisikap')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('tersimpan',$tersimpan)
        ->with('simpan',$simpan)
        ->with('idkelas',$idkelas)
        ->with('idrole',$idrole)
        ->with('induk',$induk)         
        ->with('namauser',$xxx); 



    }   



  public function simpannilaieks(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;

        $idkelas  = $request->idkelas; 
        $idtahun  = $request->idtahun; 
        //dd($idjawal);
        
        $tersimpan='T';
        $simpan='T';

         DB::beginTransaction();

             try {

               
                $nilai = Input::get('nilai'); 
                $nilai2 = Input::get('nilai2'); 
                $nilai3 = Input::get('nilai3'); 

                $idsiswa = Input::get('idsiswa'); 
                
                $nama_eks = Input::get('nama_eks');                
                $nama_eks2 = Input::get('nama_eks2');   
                $nama_eks3 = Input::get('nama_eks3'); 

                $ket = Input::get('ket');  
                $ket2 = Input::get('ket2');
                $ket3 = Input::get('ket3');  

 
                  foreach($idsiswa as $key => $val){
                     $idsiswax=$idsiswa[$key];
                     
                     $recari=DB::table('t_nikaleks')
                                    ->select('*')                 
                                    ->where('idsiswa','=',$idsiswax)
                                     ->where('tahunid','=',$idtahun)                                    
                                    ->first();
                       
                      if ($recari==null){
                        $pro=array
                       (                                             
                          'idsiswa'=>$idsiswax, 
                          'tahunid'=>$idtahun, 
                          'idkelas'=>$idkelas, 

                          'nama_eks'=>$nama_eks[$key],
                          'nama_eks2'=>$nama_eks2[$key],
                          'nama_eks3'=>$nama_eks3[$key], 

                          'nilai'=>$nilai[$key],                           
                          'nilai2'=>$nilai2[$key],                           
                          'nilai3'=>$nilai3[$key],


                          'ket'=>$ket[$key],                                                         
                          'ket2'=>$ket2[$key], 
                          'ket3'=>$ket3[$key] 
                       );
                        DB::table('t_nikaleks')->insertgetId($pro); 
                      } 
                         if ($recari!=null){
                      //dd($idtahun);
                         DB::table('t_nikaleks')
                          ->where('idkelas', $idkelas)
                          ->where('idsiswa', $idsiswax)                                                   
                          ->where('tahunid', $idtahun)

                          ->update(['nama_eks' => $nama_eks[$key],
                                    'nama_eks2' => $nama_eks2[$key],
                                    'nama_eks3' => $nama_eks3[$key],
                                    'nilai' => $nilai[$key],
                                    'nilai2' => $nilai2[$key],
                                    'nilai3' => $nilai3[$key],
                                    'ket' => $ket[$key],
                                    'ket2' => $ket2[$key],
                                    'ket3' => $ket3[$key]
 
                                    ]);

                      }

                      

                  }

                   $tersimpan='Y';
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }  
        
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
 
      
        return view ('pageforminput')
      
        ->with('judul','Nilai Ekskul')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaieks')              
        ->with('menuatas',$menuatas)
        ->with('iduser',$iduser)
        ->with('tersimpan',$tersimpan)
        ->with('simpan',$simpan)
        ->with('idkelas',$idkelas)
        ->with('idrole',$idrole)
        ->with('induk',$induk)         
        ->with('namauser',$xxx); 
    }   


  public function simpannilaipres(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;

        $idkelas  = $request->idkelas; 
        $idtahun  = $request->idtahun; 
        //dd($idjawal);
        
        $tersimpan='T';
        $simpan='T';

         DB::beginTransaction();

             try {

                
                $idsiswa = Input::get('idsiswa'); 
                
                $nama_pres = Input::get('nama_pres');                
                $nama_pres2 = Input::get('nama_pres2');   
                $nama_pres3 = Input::get('nama_pres3'); 

                $ket = Input::get('ket');  
                $ket2 = Input::get('ket2');
                $ket3 = Input::get('ket3');  

 
                  foreach($idsiswa as $key => $val){
                     $idsiswax=$idsiswa[$key];
                     
                     $recari=DB::table('t_nilaiprestasi')
                                    ->select('*')                 
                                    ->where('idsiswa','=',$idsiswax)
                                     ->where('tahunid','=',$idtahun)                                    
                                    ->first();
                       
                      if ($recari==null){
                        $pro=array
                       (                                             
                          'idsiswa'=>$idsiswax, 
                          'tahunid'=>$idtahun, 
                          'idkelas'=>$idkelas, 

                          'nama_pres'=>$nama_pres[$key],
                          'nama_pres2'=>$nama_pres2[$key],
                          'nama_pres3'=>$nama_pres3[$key],
                           'ket' => $ket[$key],
                                    'ket2' => $ket2[$key],
                                    'ket3' => $ket3[$key]
 
 
                       );
                        DB::table('t_nilaiprestasi')->insertgetId($pro); 
                      } 
                         if ($recari!=null){
                      //dd($idtahun);
                         DB::table('t_nilaiprestasi')
                          ->where('idkelas', $idkelas)
                          ->where('idsiswa', $idsiswax)                                                   
                          ->where('tahunid', $idtahun)

                          ->update(['nama_pres' => $nama_pres[$key],
                                    'nama_pres2' => $nama_pres2[$key],
                                    'nama_pres3' => $nama_pres3[$key],                                     
                                    'ket' => $ket[$key],
                                    'ket2' => $ket2[$key],
                                    'ket3' => $ket3[$key]
 
                                    ]);

                      }

                      

                  }

                   $tersimpan='Y';
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }  
        
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
 
      
        return view ('pageforminput')
      
        ->with('judul','Prestasi')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaipres')              
        ->with('menuatas',$menuatas)
        ->with('iduser',$iduser)
        
        ->with('tersimpan',$tersimpan)
        ->with('simpan',$simpan)
        ->with('idkelas',$idkelas)
        ->with('idrole',$idrole)
        ->with('induk',$induk)         
        ->with('namauser',$xxx); 



    }   



  public function simpannilaikb(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;
        //$idtahun =   $request->idtahun;
        //$idjadwal  = $request->idjadwal; 
        //dd($idjawal);
        
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;  
         $tersimpan='T';

         DB::beginTransaction();

             try {
                 $idmapel = Input::get('idmapel');       
                 $nilaikb = Input::get('nilaikb'); 
                 $nilaikbk = Input::get('nilaikbk'); 
 
                  foreach($idmapel as $key => $val){
                       
                       $idmapelx =$idmapel[$key] ; 
                       $nilaikbx =$nilaikb[$key] ; 
                       $nilaikbkx =$nilaikbk[$key] ; 

                       $cari=DB::table('nilaikb')                       
                          ->select('*')
                          ->where('mapelid', '=', $idmapelx)  
                          ->where('tahunid', '=', $idtahun)  
                          ->first();
                       //dd($cari);


                      if ($cari==null){
                        $pro=array
                       (                                             
                          'mapelid'=>$idmapelx, 
                          'tahunid'=>$idtahun, 
                          'nilaikb'=>$nilaikbx, 
                          'nilaikbk'=>$nilaikbkx
                          
                       );
                        DB::table('nilaikb')->insertgetId($pro); 
                      } 
                         if ($cari!=null){
                      //dd($idtahun);
                         DB::table('nilaikb')
                          ->where('mapelid', $idmapelx)                           
                          ->where('tahunid', $idtahun)

                          ->update(['nilaikb' => $nilaikbx,                                     
                                    'nilaikbk' => $nilaikbkx
                                    ]);

                      }

                      

                  }

                   
                  $tersimpan='Y';
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();

                    // something went wrong
                }  
        
        
        
 
       $xxx= Auth::user()->nama; 
        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk) 
                ->orderby('menu.urut')
                ->get();
                }
 
                         
         $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
                ->where('tahunid','=','')
                ->get();
                        
        
        
        return view ('pageforminput')
      
        ->with('judul','Nilai KKM')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.inputnilaikb')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('iduser',$iduser)
        ->with('tersimpan',$tersimpan)
      
        
        ->with('idrole',$idrole)
        ->with('induk',$induk)
          ->with('idtahun',$idtahun)
         
        ->with('namauser',$xxx); 
    }   




  public function simpanmades(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
      
        $idrole= Auth::user()->rolesid;
        $induk =   $request->induk;
        //$idtahun =   $request->idtahun;
        //$idjadwal  = $request->idjadwal; 
        //dd($idjawal);
        
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;  
         $tersimpan='T';

         DB::beginTransaction();

             try {
                 $idmapel = Input::get('idmapel');       
                 $preapx = Input::get('preap'); 
                 $prebpx= Input::get('prebp'); 
                 $precpx = Input::get('precp'); 
                 $predpx = Input::get('predp'); 

                 $preakx = Input::get('preak'); 
                 $prebkx = Input::get('prebk'); 
                 $preckx = Input::get('preck'); 
                 $predkx = Input::get('predk'); 
 
                  foreach($idmapel as $key => $val){
                       
                       $idmapelx =$idmapel[$key] ; 
                       $preap =$preapx[$key] ; 
                       $prebp =$prebpx[$key] ; 
                       $precp =$precpx[$key] ; 
                       $predp =$predpx[$key] ; 

                       $preak =$preakx[$key] ; 
                       $prebk =$prebkx[$key] ; 
                       $preck =$preckx[$key] ; 
                       $predk =$predkx[$key] ; 


                       $cari=DB::table('mades')                       
                          ->select('*')
                          ->where('mapelid', '=', $idmapelx)  
                          ->where('tahunid', '=', $idtahun)  
                          ->where('guruid', '=', $iduser) 
                          ->first();
                       

                      if ($cari==null){
                        $pro=array
                       (                                             
                          'mapelid'=>$idmapelx, 
                          'tahunid'=>$idtahun, 
                          'guruid'=>$iduser, 
                          'desap'=>$preap, 
                          'desbp'=>$prebp, 
                          'descp'=>$precp, 
                          'desdp'=>$predp, 

                          'desak'=>$preak, 
                          'desbk'=>$prebk, 
                          'desck'=>$preck, 
                          'desdk'=>$predk 
                           
                          
                       );
                        DB::table('mades')->insertgetId($pro); 
                      } 
                         if ($cari!=null){
                      //dd($idtahun);
                         DB::table('mades')
                          ->where('mapelid', $idmapelx)                           
                          ->where('tahunid', $idtahun)
                          ->where('guruid', $iduser)

                          ->update(['desap' => $preap,                                     
                                    'desbp' => $prebp,
                                    'descp' => $precp,
                                    'desdp' => $predp,

                                    'desak' => $preak,
                                    'desbk' => $prebk,
                                    'desck' => $preck,
                                    'desdk' => $predk


                                    ]);

                      }

                      

                  }

                   
                  $tersimpan='Y';
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();

                    // something went wrong
                }  
        
        
        
 
       $xxx= Auth::user()->nama; 
        if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk) 
                ->orderby('menu.urut')
                ->get();
                }
  
        return view ('pageforminput')
      
        ->with('judul','Master Deskripsi')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.mades')              
        ->with('menuatas',$menuatas)
        ->with('iduser',$iduser) 
        ->with('tersimpan',$tersimpan)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('idtahun',$idtahun)         
        ->with('namauser',$xxx); 
    }   



  public function carijadwalkelas(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $idprodi = $request->idprodi;
         // $cajur=DB::table('kelas')
         //        ->select('*') 
         //        ->where('kelas.id', '=', $idkelascari)                 
         //        ->first();
         //$idjurusan = $cajur->jurid;   
         $induk = $request->induk;   
          
          

        
         $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
         $idtahun =$total->id;        

         $salah='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
  
   if ($idprodi==1){ 
       $rec=DB::table('jadwal')    
       ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')   
                ->leftjoin('prodi', 'prodi.id', '=', 'kelas.jurid') 

                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','prodi.nama as namaprodi','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel','mapel.kode as kodemapel')                 
                ->where('tahunid','=',$idtahun)
                ->get();
      }else{
         $rec=DB::table('jadwal')   
          ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')   
                ->leftjoin('prodi', 'prodi.id', '=', 'kelas.jurid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
               
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','prodi.nama as namaprodi','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel','mapel.kode as kodemapel')                 
                ->where('tahunid','=',$idtahun)
                ->where('kelas.jurid','=',$idprodi)
                ->get();
      }

        return view ('pageforminput')
      
        ->with('judul','Jadwal')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.jadwal')              
        ->with('menuatas',$menuatas)
         ->with('idjurusan',$idprodi)
        ->with('rec',$rec)
         ->with('iduser',$iduser)
       // ->with('mapel',$mapel)
       // ->with('ruang',$ruang)
       // ->with('guru',$guru)
       // ->with('hari',$hari)

         ->with('salah',$salah)
         ->with('idrole',$idrole)
         ->with('induk',$induk)
         ->with('idkelas',0)
          ->with('idprodi',$idprodi)
        ->with('namauser',$xxx); 
    }      






  public function carikrs(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $namasimpan= $request->Simpan;
        
        $induk = $request->induk;   
        $idtahun = $request->idtahun;   
        $idsiswa =Input::get('idsiswa'); 
        $idjadwal= Input::get('idjadwal');

        $salah='T';

        if ($namasimpan=='simpankrs'){
             $total=DB::table('krs')
                ->select('*') 
                ->where('idjadwal', '=',$idjadwal)
                ->where('idsiswa', '=',$idsiswa)                 
                ->first();
              if ($total==null){  
                  DB::beginTransaction();

                     try {

                                    $pro=array
                                          (        
                                                 
                                          'idsiswa'=>Input::get('idsiswa'), 
                                          'idjadwal'=>Input::get('idjadwal'), 
                                          'tahunid'=>$idtahun
                                         );
                                       DB::table('krs')->insertgetId($pro);    
                           DB::commit();
                            // all good
                        } catch (Exception $e) {
                            DB::rollback();
                            // something went wrong
                        }                
        
            
              } 

        }
 
        
 
       $xxx= Auth::user()->nama; 
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
  
                          
      
      
        return view ('pageforminput')
      
        ->with('judul','Jadwal')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.krs')              
        ->with('menuatas',$menuatas)
         ->with('idsiswa',$idsiswa)
      
         ->with('iduser',$iduser)
    
         ->with('salah',$salah)
         ->with('idrole',$idrole)
         ->with('induk',$induk)
         ->with('idkelas',0)
         ->with('idjurusan',0)
        ->with('namauser',$xxx); 
    }      



  public function hapusmakulkrs(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $namasimpan= $request->Simpan;
        
        $induk = $request->induk;   
        $idtahun = $request->idtahun;   
      
        $idkrsdelete=  $request->id; 
       

        $salah='T';
    
        $total=DB::table('krs')
                ->select('*') 
                ->where('id', '=',$idkrsdelete)
                  
                ->first();
                if ( $total!=null){
                  $idsiswa = $total->idsiswa;
                }else{
                  $idsiswa=0;
                }

         DB::beginTransaction();

             try {

                     DB::delete('delete from krs where id = ?',[$idkrsdelete]);             
                   
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }                
        
 
       $xxx= Auth::user()->nama; 
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
  
                          
      
      
        return view ('pageforminput')
      
        ->with('judul','Jadwal')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.krs')              
        ->with('menuatas',$menuatas)
         ->with('idsiswa',$idsiswa)
      
         ->with('iduser',$iduser)
    
         ->with('salah',$salah)
         ->with('idrole',$idrole)
         ->with('induk',$induk)
         ->with('idkelas',0)
         ->with('idjurusan',0)
        ->with('namauser',$xxx); 
    }      






  public function carijadwalkelasakhir(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         //dd($idkelascari);
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
          
          

        
         //$total=DB::table('tahun')
           //     ->select('*') 
           //     ->where('tahun.aktif', '=', 'Y')                 
           //     ->first();
        // $idtahun =$total->id;        

         $salah='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       
       $rec=DB::table('jadwal')    
                ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')                                     
                ->leftjoin('guru', 'guru.id', '=', 'jadwal.guruid')      
                ->leftjoin('hari', 'hari.hariid', '=', 'jadwal.hariid')  
                ->leftjoin('ruang', 'ruang.id', '=', 'jadwal.ruangid')  
                ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
                ->select('jadwal.*','kelas.nama as namakelas','guru.nama as namaguru',
                  'hari.nama as namahari','ruang.nama as namaruang','mapel.nama as namamapel')                 
               // ->where('tahunid','=',$idtahun)
                ->where('jadwal.id','=',$idkelascari)
                //->where('jadwal.guruid','=',$iduser)
              //  ->groupby('jadwal.mapelid')
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Nilai Akhir')            
        ->with('judulutama','Input')   
          ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('salah',$salah)
        ->with('idrole',$idrole)
        ->with('iduser',$iduser)
        ->with('idtahun',$idtahun)
        ->with('induk',$induk)
        ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx)        
        ->with('isi','transaksi.nilaiakhir')              
      ; 
    }        



  public function carinamasiswasikap(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
          
          

        
        

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Nilai Sikap')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaisikap')              
        ->with('menuatas',$menuatas)
        ->with('idtahun',$idtahun)
         
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('iduser',$iduser)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        


  public function carinamasiswaabsen(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
          
          

        
        

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Absen')            
        ->with('judulutama','Siswa')           
        ->with('isi','transaksi.absen')              
        ->with('menuatas',$menuatas)
         
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('iduser',$iduser)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        




  public function carinamasiswapsg(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
          
          

        
        

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Nilai PSG')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaipsg')              
        ->with('menuatas',$menuatas)
         
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        



  public function carinamasiswaeks(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
          
          

        
        

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Nilai Ekskul')            
        ->with('judulutama','Input')         

        ->with('isi','transaksi.nilaieks')              
        ->with('menuatas',$menuatas)
           ->with('iduser',$iduser)
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        



  public function carinamasiswasampul1(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
           

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Sampul 1')            
        ->with('judulutama','Cetak')           
        ->with('isi','transaksi.sampul1')              
        ->with('menuatas',$menuatas)
          ->with('idtahun',$idtahun)
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('iduser',$iduser)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        


  public function carinamasiswsabiodata(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
           

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Biodata')            
        ->with('judulutama','Cetak')           
        ->with('isi','transaksi.biodata')              
        ->with('menuatas',$menuatas)
         
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        


  public function carinamasiswanilai(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
           

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       //$total=DB::table('tahun')
         ///       ->select('*') 
         //       ->where('tahun.aktif', '=', 'Y')                 
           //     ->first();
       //$idtahun =$total->id;                          
                          
       //dd($idtahun);
        return view ('pageforminput')
      
        ->with('judul','Nilai')            
        ->with('judulutama','Cetak')           
        ->with('isi','transaksi.nilai')              
        ->with('menuatas',$menuatas)
        ->with('idtahun',$idtahun)
         
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('iduser',$iduser)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        


  public function carinamasiswasampul2(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
           

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Sampul 2')            
        ->with('judulutama','Cetak')           
        ->with('isi','transaksi.sampul2')              
        ->with('menuatas',$menuatas)
         
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        



  public function cetaksampul1(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelas = $request->idkelas;
         
         $induk = $request->induk;   
          
            
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('cetak.sampul1')
      
        
        ->with('idtahun',$idtahun)   
        ->with('idkelas',$idkelas);
       
    }        


  public function cetakbiodata(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelas = $request->idkelas;
         
         $induk = $request->induk;   
          
            
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('cetak.biodata')
      
        
        ->with('idtahun',$idtahun)   
        ->with('idkelas',$idkelas);
       
    }          



  public function cetaksampul2(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelas = $request->idkelas;
         
         $induk = $request->induk;   
          
            
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('cetak.sampul2')
      
        
        ->with('idtahun',$idtahun)   
        ->with('idkelas',$idkelas);
       
    }        


  public function cetaksampul11(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idsiswa = $request->idkelas;         
         $induk = $request->induk;   
          
            
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('cetak.sampul11')
      
        
        ->with('idtahun',$idtahun)   
        ->with('idsiswa',$idsiswa);
       
    }    



  public function cetakbiodata2(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idsiswa = $request->idkelas;         
         $induk = $request->induk;   
          
            
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('cetak.biodata2')
      
        
        ->with('idtahun',$idtahun)   
        ->with('idsiswa',$idsiswa);
       
    }    



  public function cetaknilaixxx(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idsiswa = $request->idkelas;         
         $induk = $request->induk;   
          
            
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('cetak.nilai')
      
        
        ->with('idtahun',$idtahun)   
        ->with('idsiswa',$idsiswa);
       
    }     



  public function cetaksampul22(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idsiswa = $request->idkelas;         
         $induk = $request->induk;   
          
            
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('cetak.sampul22')
      
        
        ->with('idtahun',$idtahun)   
        ->with('idsiswa',$idsiswa);
       
    }    






  public function carinamasiswapres(Request $request){
      
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        
         $idkelascari = $request->idkelascari;
         $idtahun = $request->idtahun;   
         $induk = $request->induk;   
          
          

        
        

        $tersimpan='Y';
        $simpan='Y';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       
        return view ('pageforminput')
      
        ->with('judul','Prestasi')            
        ->with('judulutama','Input')           
        ->with('isi','transaksi.nilaipres')              
        ->with('menuatas',$menuatas)
         
         ->with('tersimpan',$tersimpan)
         ->with('idrole',$idrole)
         ->with('iduser',$iduser)
            ->with('induk',$induk)
            ->with('simpan',$simpan)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
    }        



  public function formenroll (Request $request){
           $thn= date("y"); 
        $bln= date("m");
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;

         $idkelascari = $request->idkelas;
         $idtahun = $request->idtahun;

         $salah='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       $rec=DB::table('vsiswada')                      
                ->select('*')
                ->where('idkelas','=',$idkelascari)
                ->where('tahunid','=',$idtahun)
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Enroll Siswa')            
        ->with('judulutama','Transaksi')           
        ->with('isi','transaksi.formenroll')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
         ->with('salah',$salah)
         ->with('idtahun',$idtahun)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
  }


  public function formkuri (Request $request){
           $thn= date("y"); 
        $bln= date("m");
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;

         $idkelascari = $request->idkelas;
         $idtahun = $request->idtahun;

         $salah='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
       $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                          
                          
       $rec=DB::table('vsiswada')                      
                ->select('*')
                ->where('idkelas','=',$idkelascari)
                ->where('tahunid','=',$idtahun)
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Enroll Siswa')            
        ->with('judulutama','Transaksi')           
        ->with('isi','transaksi.formkuri')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
         ->with('salah',$salah)
         ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
  }



  public function carisiswaperkelas (Request $request){
        $thn= date("y"); 
        $bln= date("m");
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;

        $idkelascari = $request->idkelascari;
        $idtahun = $request->idtahun;

        $salah='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
                          
       $rec=DB::table('vsiswada')                      
                ->select('*')
                ->where('idkelas','=',$idkelascari)
                ->where('tahunid','=',$idtahun)
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Enroll Siswa')            
        ->with('judulutama','Transaksi')           
        ->with('isi','transaksi.formenroll')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('salah',$salah)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('idtahun',$idtahun)
        ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
  }




  public function carimapelperkuri (Request $request){
        $thn= date("y"); 
        $bln= date("m");
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;

        $idkuri = $request->idkuri;
 
 
        $salah='T';
 
        
 
       $xxx= Auth::user()->nama; 
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
 
                          
       $rec=DB::table('mapel')    
                 ->leftjoin('kelompok', 'kelompok.kelid', '=', 'mapel.kelid')           
                ->select('*', 'kelompok.nama as namakelompok ')
                ->where('idkuri','=',$idkuri)
                
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Mata Pelajaran')            
        ->with('judulutama','Transaksi')           
        ->with('isi','transaksi.formmata')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('salah',$salah)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('idkuri',$idkuri)
        ->with('namauser',$xxx); 
  }


  public function deletesiswadalamkelas (Request $request){
           $thn= date("y"); 
        $bln= date("m");
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;

        $idsiswa = $request->idsiswa;
        $total=DB::table('kelassiswa')
                ->select('*') 
                ->where('id', '=', $idsiswa)                 
                ->first();
             
        $idkelascari =$total->idkelas;   
        $salah='T';
       
 
        
 
       $xxx= Auth::user()->nama; 
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

            DB::beginTransaction();

             try {

                      DB::delete('delete from kelassiswa where id = ?',[$idsiswa]);             
                   
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }         

 
        $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
       $idtahun =$total->id;                            
       $rec=DB::table('vsiswada')                      
                ->select('*')
                ->where('idkelas','=', $idkelascari)
                ->where('tahunid','=',$idtahun)
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Enroll Siswa')            
        ->with('judulutama','Transaksi')           
        ->with('isi','transaksi.formenroll')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('salah',$salah)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('idkelas',$idkelascari)
        ->with('namauser',$xxx); 
  }




     public function simpansiswakekelas(Request $request)

            {

            $xxx= Auth::user()->nama;
            $iduser= Auth::user()->id;
            $ly= Auth::user()->layout;
            $idrole= Auth::user()->rolesid;
            $induk = $request->induk;
            
            $idkelas = Input::get('idkelas'); 
            $idsiswa = Input::get('idsiswa'); 
             
            $total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();    
            $idtahun =$total->id;    
            $pro=array
           (        
                         
                  'idsiswa'=>Input::get('idsiswa'), 
                  'idkelas'=>Input::get('idkelas'), 
                  'tahunid'=>$idtahun
                   
                   
           );

                       
            DB::beginTransaction();

             try {


                  $cari=DB::table('kelassiswa')                      
                    ->select('*')
                    ->where('idsiswa','=',$idsiswa)
                    ->where('tahunid','=',$idtahun)
                    ->first();
                  //dd($cari);  
                   if ($cari == null){
                     DB::table('kelassiswa')->insertgetId($pro); 
                     $salah='T';
                   }
                   else{
                     $salah='Y';
                   }

                   
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }         

 
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

                       $rec=DB::table('vsiswada')                      
                ->select('*')
                ->where('idkelas','=',$idkelas)
                ->where('tahunid','=',$idtahun)
                ->get();
      
        return view ('pageforminput')
      
        ->with('judul','Enroll Siswa')            
        ->with('judulutama','Transaksi')           
        ->with('isi','transaksi.formenroll')              
        ->with('menuatas',$menuatas)
        ->with('rec',$rec)
        ->with('salah',$salah)
        ->with('idtahun',$idtahun)
        ->with('idrole',$idrole)
        ->with('induk',$induk)
        ->with('idkelas',$idkelas)
        ->with('namauser',$xxx); 
              }
        




     public function generatenim(Request $request)

            {

            $xxx= Auth::user()->nama;
            $iduser= Auth::user()->id;
            $ly= Auth::user()->layout;
            $idrole= Auth::user()->rolesid;
            $induk = $request->induk;
            $radio = $request -> Radio;
            dd($radio);
            $idtahun = Input::get('idtahun'); 
            $idprodi = Input::get('idprodi'); 
            if ($radio=='satu'){
                //semua cama

            }else{
               //per prodi

               
            } 
           

           //  $total=DB::table('tahun')
           //      ->select('*') 
           //      ->where('tahun.aktif', '=', 'Y')                 
           //      ->first();    
           //  $idtahun =$total->id;    
           //  $pro=array
           // (        
                         
           //        'idsiswa'=>Input::get('idsiswa'), 
           //        'idkelas'=>Input::get('idkelas'), 
           //        'tahunid'=>$idtahun
                   
                   
           // );

                       
            DB::beginTransaction();

             try {


                  // $cari=DB::table('kelassiswa')                      
                  //   ->select('*')
                  //   ->where('idsiswa','=',$idsiswa)
                  //   ->where('tahunid','=',$idtahun)
                  //   ->first();
                  // //dd($cari);  
                  //  if ($cari == null){
                  //    DB::table('kelassiswa')->insertgetId($pro); 
                  //    $salah='T';
                  //  }
                  //  else{
                  //    $salah='Y';
                  //  }

                   
                 
     
                   DB::commit();
                    // all good
                } catch (Exception $e) {
                    DB::rollback();
                    // something went wrong
                }         

 
               if ($idrole!=1) {
           $menuatas=DB::table('menu')
                ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                ->select('menu.*')                 
                ->where('rolerule.idrole', '=', $idrole)  
                ->where('rolerule.tambah', '=', 'on')  
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();}else{
            $menuatas=DB::table('menu')              
                ->select('menu.*')                                 
                ->where('menu.id_induk', '=', $induk)  
                ->orderby ('menu.urut')
                ->get();
                }

      $result=DB::table('siswa')                       
                  ->select('*')
                  ->orderby('siswa.nama', 'asc')                                            
                  ->get();

      $xxx= Auth::user()->nama;
      return view('pagelist')
          ->with('data',$result)  
          ->with('induk',$induk)  
          ->with('menuatas',$menuatas)  
          ->with('idrole',$idrole)  
          ->with('menuaktif','Siswa') 
          ->with('judulutama','Master Data') 
          ->with('judul','Daftar Siswa')            
          ->with('isi','master.siswa')
          ->with('namauser',$xxx); 
              }
        

//===================== User ================================================

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
                ->leftjoin('role', 'role.id', '=', 'users.rolesid')
                ->orderby('users.nama', 'asc')
               // ->where('users.rolesid','=',3)
               // ->orwhere('users.rolesid','=',2)
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
          ->with('judul','User')            
          ->with('namauser',$xxx)
          ->with('isi','master.user')            
         ; 
    } 


   public function simpanuser(Request $request)
        {
          $dari= $request->dari;
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
                 $data -> jeka = $request -> jeka;
               
                  
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
                        $data -> jeka = $request -> jeka;

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

              
              if (Input::get('pass') !='') {
                       $pro=array(                             
                      'email'=>Input::get('nohp'),              
                      'nama'=>Input::get('nama'),
                      'jeka'=>Input::get('jeka'),
                      'password'=>bcrypt(Input::get('pass')),
                      'foto'=>$realpath,
                      'filename'=> $newfile,
                      'alamat'=>Input::get('alamat')
                        );
                }else{
                    $pro=array(                             
                      'email'=>Input::get('nohp'),              
                      'nama'=>Input::get('nama'),
                      'jeka'=>Input::get('jeka'),
                      'foto'=>$realpath,
                      'filename'=> $newfile,
                      'alamat'=>Input::get('alamat')
                        );
                }
                  $proguru=array(               
                     'email'=>Input::get('nohp'),              
                      'nip'=>Input::get('nip'),   
                     'nama'=>Input::get('nama'),
                     'jeka'=>Input::get('jeka'),     
                      'foto'=>$realpath,
                      'filename'=> $newfile,                           
                     'alamat'=>Input::get('alamat')
                  );

        }
      }else{
             if (Input::get('pass') !='') {
                      $pro=array(               
                          'email'=>Input::get('nohp'),              
                          'nama'=>Input::get('nama'),
                          'jeka'=>Input::get('jeka'),            
                          'password'=>bcrypt(Input::get('pass')),              
                          'alamat'=>Input::get('alamat')
                        );
              }else
              {
                     $pro=array(               
                          'email'=>Input::get('nohp'),              
                          'nama'=>Input::get('nama'),
                          'jeka'=>Input::get('jeka'),                                                 
                          'alamat'=>Input::get('alamat')
                        );
              }        

                       $proguru=array(               
                           'email'=>Input::get('nohp'),             
                          
                            'nip'=>Input::get('nip'),   
                           'nama'=>Input::get('nama'),
                           'jeka'=>Input::get('jeka'), 
                           'alamat'=>Input::get('alamat')
                        );
      }
            $idpele=Input::get('id');

            $e=DB::table('users')->where('id',$idpele)->update($pro); 
            $ee=DB::table('guru')->where('id',$idpele)->update($proguru); 

            $xxx= Auth::user()->nama;
            $induk=Input::get('induk');             
            $idrole= Auth::user()->rolesid;


         


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

                if ($dari!='guru'){
                    $result=DB::table('users')                                             
                ->select('users.*','role.nama as level')
                ->join('role', 'role.id', '=', 'users.rolesid')
                ->orderby('users.nama', 'asc')
              //  ->where('users.rolesid','=',3)
                //->orwhere('users.rolesid','=',2)
                ->get();
                return view('pagelist')
                    ->with('data',$result)  
                    ->with('idrole',$idrole)  
                    ->with('menuatas',$menuatas) 
        
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('induk',$induk) 
                    ->with('isi','master.user') 
                    ->with('judul','Daftar Karyawan')            
                    ->with('namauser',$xxx); 
                  }else
                  {
                      $result=DB::table('guru')                                             
                ->select('guru.*')
                ->orderby('guru.nama', 'asc')
                ->get();
                     return view('pagelist')
                    ->with('data',$result)  
                    ->with('idrole',$idrole)  
                    ->with('menuatas',$menuatas) 
        
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('induk',$induk) 
                    ->with('isi','master.guru') 
                    ->with('judul','Daftar Guru')            
                    ->with('namauser',$xxx);
                  }


              
          }
            
          
        }


   public function simpanguru(Request $request)
        {
          
         //$idmobil=Input::get('idmobil');
         if ($request -> tambah !=0 ) {
              $data = new User;
              $data2 = new Guru;
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

                  $pro=array(               
                      'email'=>Input::get('nohp'),              
                      'telp'=>Input::get('nohp'),      
                      'nama'=>Input::get('nama'),
                      'nip'=>Input::get('nip'),
                      'password'=>bcrypt($request ->pass),
                      'jeka'=>Input::get('jeka'),
                      'rolesid'=>14,
                      'foto'=>$realpath,
                      'filename'=> $newfile,
                      'alamat'=>Input::get('alamat')
                      );

 
                      $idee=DB::table('users')->insertgetId($pro); 
              


                   $proguru=array(    
                      'id'   =>$idee,         
                      'email'=>Input::get('nohp'),              
                      'nohp'=>Input::get('nohp'),      
                      'nama'=>Input::get('nama'),
                      'nip'=>Input::get('nip'),
                    
                      'jeka'=>Input::get('jeka'),
                      
                      'foto'=>$realpath,
                      'filename'=> $newfile,
                      'alamat'=>Input::get('alamat')
                      );

                 
                  DB::table('guru')->insertgetId($proguru);
                  return back()
                          ->with('success','Record Added successfully.');
                  }
                }else{
                       $pro=array(               
                      'email'=>Input::get('nohp'),              
                      'telp'=>Input::get('nohp'),      
                      'nama'=>Input::get('nama'),
                      'nip'=>Input::get('nip'),
                      'password'=>bcrypt($request ->pass),
                      'jeka'=>Input::get('jeka'),
                      'rolesid'=>14,
                   
                      'alamat'=>Input::get('alamat')
                      );

 
                   $idee=DB::table('users')->insertgetId($pro); 
                   $proguru=array(               
                      'email'=>Input::get('nohp'),              
                      'nohp'=>Input::get('nohp'),      
                      'nama'=>Input::get('nama'),
                      'nip'=>Input::get('nip'),
                    
                      'jeka'=>Input::get('jeka'),
                      
                     
                      'alamat'=>Input::get('alamat')
                      );

                 
                 DB::table('guru')->insertgetId($proguru);
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
              'email'=>Input::get('nohp'),              
              'nama'=>Input::get('nama'),
              'nip'=>Input::get('nip'),
              'jeka'=>Input::get('jeka'),
              'rolesid'=>Input::get('level'),
              'foto'=>$realpath,
              'filename'=> $newfile,
              'alamat'=>Input::get('alamat')

            );

        }
      }else{
        $idpele=Input::get('id');
         $pro=array(               
               'email'=>Input::get('nohp'),              
              'nama'=>Input::get('nama'),
              'jeka'=>Input::get('jeka'),
              'nip'=>Input::get('nip'), 
             'rolesid'=>Input::get('level'),
              
              
              'alamat'=>Input::get('alamat')
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
                ->where('users.rolesid','=',14)                 
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

                 
                return view('pagelist')
                    ->with('data',$result)  
                    ->with('idrole',$idrole)  
                    ->with('menuatas',$menuatas) 
        
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('induk',$induk) 
                    ->with('isi','master.guru') 
                    ->with('judul','Daftar Guru')            
                    ->with('namauser',$xxx); 


              
          }
            
          
        }        

//=====================end user=======================================        

//==================== sdetting======================================
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

//====================end sdetting======================================


//===================== stok======================================

public function editstok(Request $request)
         
        {
              $induk= $request->induk;
              $id= $request->id;
              $xxx= Auth::user()->nama;            
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
            //$nobel = $request -> nobel;                         
            $rec=DB::table('stok')                       
                  ->leftjoin('sat', 'sat.id', '=', 'stok.satid')                   
                  ->select('stok.*','sat.nama')
                  ->where('stok.id', '=', $id)                
                  ->get();
                  //echo "string:$rec";
                  //dd($tambah);
            
                 return view ('pageform')
                  ->with('menuaktif','Input Departemen')      
                  ->with('judul','Form Stok')     
                    ->with('induk',$induk)       
                            ->with('menuatas',$menuatas)       
                  ->with('isi','master.stokform') 
                     ->with('judulutama','Master') 
                    ->with('idrole',$idrole)  
                  ->with('rec',$rec)                                                    
                  ->with('tambah',$tambah)                                    
                  ->with('namauser',$xxx);
             
        }     



  public function indexstok($induk){
  	  		$xxx= Auth::user()->nama;            
          $idrole= Auth::user()->rolesid;

    // $result =DB::table('member')->paginate(10);
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

      $result=DB::table('stok')    
                  //->leftjoin('jenis', 'jenis.id', '=', 'stok.jenid')                                      
                  //->leftjoin('sat', 'sat.id', '=', 'stok.satid')                                      
                  //->leftjoin('kate', 'kate.id', '=', 'stok.katid')  
                  //->leftjoin('departemen', 'departemen.id', '=', 'stok.iddep')  
                  ->leftjoin('pem', 'pem.id', '=', 'stok.pemid')                                      
                  ->leftjoin('vbelirata', 'vbelirata.idstok', '=', 'stok.id')                                                       
                  //->select('stok.*','sat.nama as nasa', 'kate.nama as naka','pem.nama as nasok','jenis.nama as naje','stok.hrgakhir')
                  ->select('stok.*','pem.nama as nasok','stok.hrgakhir','vbelirata.hrgrata as ratarata')
                  ->orderby('stok.nama', 'asc')                                            
                  ->get();

      $xxx= Auth::user()->nama;
      return view('pagelist')
          ->with('data',$result)  
          ->with('induk',$induk)  
          ->with('menuatas',$menuatas)  
          ->with('idrole',$idrole)  
          ->with('menuaktif','Master Data Barang') 
          ->with('judulutama','Master') 
          ->with('judul','Daftar Stok')            
          ->with('isi','master.stok')
          ->with('namauser',$xxx); 
  } 




  

  public function indexstokfo($induk){
          $xxx= Auth::user()->nama;            
          $idrole= Auth::user()->rolesid;

    // $result =DB::table('member')->paginate(10);
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

    $result=DB::table('stok')    
                  //->leftjoin('jenis', 'jenis.id', '=', 'stok.jenid')                                      
                  //->leftjoin('sat', 'sat.id', '=', 'stok.satid')                                      
                  //->leftjoin('kate', 'kate.id', '=', 'stok.katid')  
                  //->leftjoin('departemen', 'departemen.id', '=', 'stok.iddep')  
                  ->leftjoin('pem', 'pem.id', '=', 'stok.pemid')                                      
                  ->leftjoin('vbelirata', 'vbelirata.idstok', '=', 'stok.id')                                                       
                  //->select('stok.*','sat.nama as nasa', 'kate.nama as naka','pem.nama as nasok','jenis.nama as naje','stok.hrgakhir')
                  ->select('stok.*','pem.nama as nasok','stok.hrgakhir','vbelirata.hrgrata as hargarata')
                  ->orderby('stok.nama', 'asc')                                            
                  ->get();

      $xxx= Auth::user()->nama;
      return view('pagelist')
          ->with('data',$result)  
          ->with('induk',$induk)  
          ->with('menuatas',$menuatas)  
          ->with('idrole',$idrole)  
          ->with('menuaktif','Master Data Barang') 
          ->with('judulutama','Master') 
          ->with('judul','Daftar Stok')            
          ->with('isi','master.stokfo')
          ->with('namauser',$xxx); 
  } 

  

  public function formbarang (Request $request){
          $tambah=1;
          $induk = $request->induk;
          $xxx= Auth::user()->nama;            
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

                $tambah =1;

                $xxx= Auth::user()->nama;
                return view('pageform')
                   // ->with('data',$result)  
                    ->with('menuatas',$menuatas)  
                    ->with('menuaktif','Master Data Barang') 
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('idrole',$idrole) 
                    ->with('induk',$induk) 
                    ->with('isi','master.stokform') 
                    ->with('judul','Daftar Stok')            
                    ->with('namauser',$xxx); 
  }

//======================and stok=========================================

//================= kate ===============================


 public function indexkate($induk){
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


        $result=DB::table('kate')
                  ->get(); 
                //  dd($idrole);
      
      return view('pagelist')
          ->with('data',$result)           
          ->with('ly',$ly)
          ->with('idrole',$idrole)
          ->with('induk',$induk)
          ->with('menuatas',$menuatas)
          ->with('judulutama','Master Data')            
          ->with('judul','Kategori')            
          ->with('isi','master.kate')            
          ->with('judul',' Data Kategori')            
          ->with('namauser',$xxx); 
    } 



  public function updatekate(Request $request)
        {
            $id = $request -> id_edit;
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


  public function deletepel(Request $request)
        {
            $id = $request -> id;
            $data = Pelanggan::find($id);
            $response = $data -> delete();
            if($response)
                 return back()
                    ->with('success','Record Updated successfully.');
            else
                echo "There was a problem. Please try again later.";


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


 public function simpankate(Request $request)
        {
            $data = new Kate;             
            $data -> nama = $request -> nama;            
            $data -> save();
            return back()
                    ->with('success','Record Added successfully.');
        }
//=============================end kate==============================     


//==========================BELI ============================

 public function indexmasterbeli(Request $request){
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
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
         ->with('idrole',$idrole)  
         ->with('induk',$induk)
         ->with('menuatas',$menuatas)  
        ->with('menuaktif','Daftar Penjualan')
        ->with('judulutama','Transaksi')            
        ->with('isi','transaksi.pembelian')            
        ->with('judul',' Pembelian')            
        ->with('namauser',$xxx); 
  } 




  public function formbeli (Request $request){
           $thn= date("y"); 
        $bln= date("m");
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;

        $nomax = DB::table('belim')
                     ->select(DB::raw('max(nobel) as nojual'))                     
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
         
        $l = "PB"."-"."$bln"."$thn"."-"; //"id" letter piece.

        //while ($i <= $num_of_ids) { 
        $id = $l . sprintf("%04d", $nomax2); //Create "id". Sprintf pads the number to make it 4 digits.
        
        $nobel=$id;
 
 
       $tglbel=date("Y/m/d");
       $idsup='';
       $jml='';
       $ket='';
       $idpel='';
       $iddep='';
       $harga='';
       $idter='';
       $idstok='';
       $total=0;
       $tambah=true;
 
       $xxx= Auth::user()->nama; 
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
                ->orderby('belid.nobel')
                ->orderby('belid.nobel', 'desc')
                ->first();      

        return view ('pageforminput')
        ->with('menuaktif','Input Pembelian')      
        ->with('judul','Form Pembelian')            
        ->with('judulutama','Transaksi')           
        ->with('isi','transaksi.fb')              
        ->with('nobel',$nobel)
        
        ->with('idrole',$idrole)
        ->with('tglbel',$tglbel)
        ->with('idsup',$idsup)
        ->with('iddep',$iddep)
        ->with('iduser',$iduser)
        ->with('idpel',$idpel)
        ->with('idrole',$idrole)
        ->with('menuatas',$menuatas)
        ->with('induk',$induk)
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



 public function savebeli(Request $request)

        {

        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;
        $tglbel = Input::get('tglbel'); 
        

        //dd($tglbel);
        $nobel = Input::get('nobel'); 
        $sisa = Input::get('sisa'); 
        $nomax = DB::table('belim')->max('urut');
        $cariid = DB::table('belim')->max('urut');
        if ($sisa>0){
        $cariidhupi=DB::table('hupi')                   
                  ->where('hupi.nobukti', '=', $nobel)                   
                  ->where('hupi.kode', '=','B')                                     
                  ->first();        
        $idhupidelete=0;          
        if ($cariidhupi !='' ) {
        $idhupidelete=$cariidhupi->id;
        }}          

        $pro=array
       (        
              'tglbel' => date("Y-m-d", strtotime(Input::get('tglbel'))),               
              'nobel'=>Input::get('nobel'), 
              'idsup'=>Input::get('idpel'), 
              'iddep'=>Input::get('iddep'),
              'urut'=>$nomax+1,
              'total'=>Input::get('tootaal'),
              'sisa'=>Input::get('sisa'),
              'ket'=>Input::get('ket')             
               
       );
       $idstok=Input::get('idstok');  
       $email = Stok::find($idstok);    
       $hrgrata= $email->hrgrata;

       $pro2=array
       (        
              'idstok'=>Input::get('idstok'),                           
              'nobel'=>Input::get('nobel'), 
              'jml'=>Input::get('jumlah'),                          
              'kode'=>'B',      
              'mk'=>'M',
              'harga'=>Input::get('harga'),
              'hrgrata'=>$hrgrata             

       );
       /*
        $pro3=array
       (        
                                       
              'nobukti'=>Input::get('nobel'), 
              'tgl' => date("Y-m-d", strtotime(Input::get('tglbel'))),                      
              'kode'=>'B',
              'kurang'=>'0',
              'ket'=>'Pembelian',      
              'tambah'=>Input::get('sisa')
                
       );
 */

        DB::beginTransaction();

         try {


               DB::delete('delete from belim where nobel = ?',[$nobel]);             
               

               DB::table('belim')->insertgetId($pro); 
               DB::table('belid')->insertgetId($pro2);
               //if ($sisa>0){
               //DB::delete('delete from hupi where id = ?',[$idhupidelete]);             
               //DB::table('hupi')->insertgetId($pro3);
               //}

                $total=DB::table('belid')
                  ->select(DB::raw('SUM(jml*harga) as total'))                 
                  ->where('belid.nobel', '=', $nobel)
                  ->orderby('belid.nobel')
                  ->orderby('belid.nobel', 'desc')
                  ->first();      
               /*   
                $kasd=array
                 (        
                        'ket'=>Input::get('nama_obat'),                           
                        'nobukti'=>Input::get('nobel'), 
                        'jml'=>Input::get('jumlah'),                                                        
                        'mk'=>'K',   
                        'ijd'=>$indexdetil,      
                        'harga'=>Input::get('harga')             
                         
                 );      
                 // DB::table('kaskeluard')->insertgetId($kasd);      
                  */
                  $totel=$total->total;  
                 $kasm=array
                 (                    
                        'tglkas'=>date("Y-m-d", strtotime(Input::get('tglbel'))),              
                        'nobukti'=>Input::get('nobel'), 
                        'ket'=>Input::get('ketu'),     
                        'idkar'=>Input::get('idpel'),               
                        'iddep'=>Input::get('iddep'),   
                        'urut'=>$nomax+1,
                        'total'=>$totel,
                        'ket'=>Input::get('ket'),
                        'dk'=>'K'
                 ); 

                  DB::delete('delete from kaskeluarm where nobukti = ?',[$nobel]);       
                  //DB::table('kaskeluarm')->insertgetId($kasm);                 
                           
 
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
                ->where('belid.nobel', '=', $nobel)
                ->orderby('belid.nobel', 'desc')
                ->get();
          $idstok=Input::get('idstok'); 
          $email = Vhrgrata::find($idstok);    
          $hrgrata= $email->hrgrata; 

           $ha=array
               (        
                                                        
                      'hrgakhir'=>Input::get('harga'),             
                      'hrgrata'=>$hrgrata            
                       
               );

              // $idstok=Input::get('idstok'); 
         $ee=DB::table('stok')->where('id',$idstok)->update($ha);      

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

         $tambah=true;
         $tglbel=Input::get('tglbel'); 

         
         $idstok=Input::get('idstok'); 
         $idpel=Input::get('idpel'); 
         $iddep=Input::get('iddep'); 
         $idstok=Input::get('idstok'); 
         $jml=0; 
         $harga=Input::get('harga');         
         $ket=Input::get('ket');        
         $nobel=Input::get('nobel'); 
         $xxx= Auth::user()->nama; 
      
        return view ('pageforminput')
        ->with('menuaktif','Input Pembelian')      
        ->with('judul','Form Pembelian')            
        ->with('judulutama','Pembelian')           
        ->with('isi','transaksi.fb')              
        ->with('nobel',$nobel)       
        ->with('idrole',$idrole)
        ->with('induk',$induk)
         ->with('iduser',$iduser)
        ->with('tglbel',$tglbel)
       
        ->with('iddep',$iddep)
        ->with('idpel',$idpel)
        ->with('idrole',$idrole)
        ->with('menuatas',$menuatas)        
        ->with('jml',$jml)
        ->with('harga',$harga)
        ->with('idstok',$idstok)
        ->with('ket',$ket)
        ->with('rec',$rec)      
        ->with('total',$total)
        ->with('tambah',$tambah)
        ->with('namauser',$xxx);  
               
          }


//==========================Kas Keluar ============================

 public function indexmasterkk(Request $request){
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
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
       $result=DB::table('kaskeluarm')    
                ->leftjoin('mek', 'mek.id', '=', 'kaskeluarm.idkar')
                ->leftjoin('kaskeluard', 'kaskeluard.nobukti', '=', 'kaskeluarm.nobukti')
                ->select('kaskeluarm.*','mek.nama as napem',DB::raw('SUM(kaskeluard.jml*kaskeluard.harga) as total'))
                ->where('dk','=','K')
                ->groupby('kaskeluarm.nobukti')
                ->orderby('kaskeluarm.tglkas', 'desc')               
                ->get(); 



    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
         ->with('idrole',$idrole)  
         ->with('induk',$induk)
         ->with('menuatas',$menuatas)  
        ->with('menuaktif','Kas Keluar')
        ->with('judulutama','Jurnal')            
        ->with('isi','jurnal.kaskeluar')            
        ->with('judul',' Kas Keluar')            
        ->with('namauser',$xxx); 
  } 



 public function indexmasterkm(Request $request){
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
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
       $result=DB::table('kaskeluarm')    
                ->leftjoin('mek', 'mek.id', '=', 'kaskeluarm.idkar')
                ->leftjoin('kaskeluard', 'kaskeluard.nobukti', '=', 'kaskeluarm.nobukti')
                ->select('kaskeluarm.*','mek.nama as napem',DB::raw('SUM(kaskeluard.jml*kaskeluard.harga) as total'))
                ->where('dk','=','M')
                ->groupby('kaskeluarm.nobukti')
                ->orderby('kaskeluarm.tglkas', 'desc')               
                ->get(); 



    $xxx= Auth::user()->nama;
    return view('pagelist')
        ->with('data',$result)  
         ->with('idrole',$idrole)  
         ->with('induk',$induk)
         ->with('menuatas',$menuatas)  
        ->with('menuaktif','Kas Masuk')
        ->with('judulutama','Jurnal')            
        ->with('isi','jurnal.kasmasuk')            
        ->with('judul',' Kas Masuk')            
        ->with('namauser',$xxx); 
  } 


  public function formkm (Request $request){
           $thn= date("y"); 
        $bln= date("m");
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;


        $nomax = DB::table('kaskeluarm')
                     ->select(DB::raw('max(nobukti) as nojual'))                     
                     ->where('kaskeluarm.dk', '=', 'M')
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
         
        $l = "KM"."-"."$bln"."$thn"."-"; //"id" letter piece.

        //while ($i <= $num_of_ids) { 
        $id = $l . sprintf("%04d", $nomax2); //Create "id". Sprintf pads the number to make it 4 digits.
        
        $nobel=$id;
 
 
       $tglbel=date("Y/m/d");
       $idsup='';
       $jml='';
       $ket='';
       $idpel='';
       $idmek='';
       $iddep='';
       $harga='';
       $idter='';
       $idstok='';
       $total=0;
       $tambah=true;
 
       $xxx= Auth::user()->nama; 
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
 
                          
        $rec=DB::table('kaskeluard')    
                  ->leftjoin('kaskeluarm', 'kaskeluarm.nobukti', '=', 'kaskeluard.nobukti')
                  ->leftjoin('users', 'users.id', '=', 'kaskeluarm.idkar')

                ->select('kaskeluard.*','users.nama as napem',DB::raw('(jml*harga) as subtotal'))
                 ->where('kaskeluard.nobukti', '=', 'xxxxx')
                ->orderby('kaskeluard.nobukti', 'desc')
                  ->get();
       
        $total=DB::table('kaskeluard')
                ->select(DB::raw('SUM(jml*harga) as total')) 

                ->where('kaskeluard.nobukti', '=', $nobel)
                ->orderby('kaskeluard.nobukti')
                ->orderby('kaskeluard.nobukti', 'desc')
                ->first();  
                    
                $master=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', 'xxxxx')             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->first();    
        return view ('pageforminput')
        ->with('menuaktif','Input Kas Masuk')      
        ->with('judul','Form Kas Masuk')            
        ->with('judulutama','Transaksi Kas Masuk')           
        ->with('isi','jurnal.fm')              
        ->with('nobel',$nobel)
        ->with('idmek',$idmek)
        ->with('idrole',$idrole)
        ->with('tglbel',$tglbel)
        ->with('idsup',$idsup)
        ->with('iddep',$iddep)
        ->with('iduser',$iduser)
        ->with('idpel',$idpel)
        ->with('idrole',$idrole)
        ->with('menuatas',$menuatas)
        ->with('induk',$induk)
        ->with('jml',$jml)
        ->with('harga',$harga)
        ->with('idstok',$idstok)
        ->with('ket',$ket)
        ->with('rec',$rec)
        ->with('master',$master)
       
        ->with('total',$total)
        ->with('tambah',$tambah)
        ->with('namauser',$xxx); 
  }


 

      public function deletekmdetil(Request $request)
            {
                $xxx= Auth::user()->nama;
                $iduser= Auth::user()->id;
                $ly= Auth::user()->layout;
                $idrole= Auth::user()->rolesid;

                $tambah=False;
                $id = $request -> id;
                $induk = $request -> induk;
                $nobelx = DB::table('kaskeluard')->where('id', $id)->first();
                $nobel= $nobelx->nobukti;


              DB::beginTransaction();

              try {
                DB::delete('delete from kaskeluard where id = ?',[$id]);
               
              $rec=DB::table('kaskeluard')     
              ->select('kaskeluard.*',DB::raw('(jml*harga) as subtotal')  )
              ->where('kaskeluard.nobukti', '=', $nobel)
              ->orderby('kaskeluard.nobukti', 'desc')
              ->get();
              $master=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', $nobel)             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->get();       

                 $master2=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', $nobel)             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->first();    
                $idpel=$master2->idkar;        

                  $total=DB::table('kaskeluard')
                  ->select(DB::raw('SUM(jml*harga) as total'))                 
                  ->where('kaskeluard.nobukti', '=', $nobel)             
                  ->orderby('kaskeluard.nobukti', 'desc')
                  ->first(); 
         $total=$total->total;  
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
                    DB::commit();
                  // all good
                    } catch (Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }         
          $tambah = false;       
        return view ('pageform')
          ->with('menuaktif','Input Kas Masuk')      
          ->with('judul','Form Kas Masuk')            
          ->with('judulutama','Transaksi Kas Masuk')            
          ->with('isi','jurnal.fm')   
            //->with('pem',$sup)
            ->with('nobel',$nobel)
             
            ->with('iduser',$iduser)
           
            ->with('rec',$rec)
            ->with('induk',$induk)
            ->with('menuatas',$menuatas)
            ->with('tambah',$tambah)
            ->with('total',$total)
            ->with('master',$master)
            ->with('idrole',$idrole)
            ->with('namauser',$xxx); 


                         
            }    



      public function deletekkdetil(Request $request)
            {
                $xxx= Auth::user()->nama;
                $iduser= Auth::user()->id;
                $ly= Auth::user()->layout;
                $idrole= Auth::user()->rolesid;

                $tambah=False;
                $id = $request -> id;
                $induk = $request -> induk;
                $nobelx = DB::table('kaskeluard')->where('id', $id)->first();
                $nobel= $nobelx->nobukti;


              DB::beginTransaction();

              try {
                DB::delete('delete from kaskeluard where id = ?',[$id]);
               
              $rec=DB::table('kaskeluard')     
              ->select('kaskeluard.*',DB::raw('(jml*harga) as subtotal')  )
              ->where('kaskeluard.nobukti', '=', $nobel)
              ->orderby('kaskeluard.nobukti', 'desc')
              ->get();
              $master=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', $nobel)             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->get();       

                 $master2=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', $nobel)             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->first();    
                $idpel=$master2->idkar;        

                  $total=DB::table('kaskeluard')
                  ->select(DB::raw('SUM(jml*harga) as total'))                 
                  ->where('kaskeluard.nobukti', '=', $nobel)             
                  ->orderby('kaskeluard.nobukti', 'desc')
                  ->first(); 
         $total=$total->total;  
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
                    DB::commit();
                  // all good
                    } catch (Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }         
          $tambah = false;       
        return view ('pageform')
          ->with('menuaktif','Input Kas Keluar')      
          ->with('judul','Form Kas Keluar')            
          ->with('judulutama','Transaksi Kas Keluar')            
          ->with('isi','jurnal.fk')   
            //->with('pem',$sup)
            ->with('nobel',$nobel)
             
            ->with('iduser',$iduser)
           
            ->with('rec',$rec)
            ->with('induk',$induk)
            ->with('menuatas',$menuatas)
            ->with('tambah',$tambah)
            ->with('total',$total)
            ->with('master',$master)
            ->with('idrole',$idrole)
            ->with('namauser',$xxx); 


                         
            }              


 public function savekm(Request $request)

        {
        
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;
         
        DB::beginTransaction();

         try { 
          //$id=$request->nobel;
        $nobel = Input::get('nobel'); 
     
        $nomax = DB::table('kaskeluarm')->max('urut');
           
        $pro2=array
         (        
                'ket'=>Input::get('ket'),                           
                'nobukti'=>Input::get('nobel'), 
                'jml'=>Input::get('jumlah'),                                                        
                'mk'=>'M',         
                'harga'=>Input::get('harga')             
                 
         );
        DB::table('kaskeluard')->insertgetId($pro2);       
        
        
         $total=DB::table('kaskeluard')
                  ->select(DB::raw('SUM(jml*harga) as total'))                 
                  ->where('kaskeluard.nobukti', '=', $nobel)             
                  ->orderby('kaskeluard.nobukti', 'desc')
                  ->first(); 
         $total=$total->total;  
         $pro=array
         (                    
                'tglkas'=>date("Y-m-d", strtotime(Input::get('tglbel'))),              
                'nobukti'=>Input::get('nobel'), 
                'ket'=>Input::get('ketu'),     
                'idkar'=>Input::get('idmek'),               
                'iddep'=>Input::get('iddep'),   
                'urut'=>$nomax+1,
                'total'=>$total,
                'dk'=>'M'
         );
              DB::delete('delete from kaskeluarm where nobukti = ?',[$nobel]);       
              DB::table('kaskeluarm')->insertgetId($pro);
              DB::commit();
              // all good
          } catch (Exception $e) {
              DB::rollback();
              
          }         

          $rec=DB::table('kaskeluard')     
              ->select('kaskeluard.*',DB::raw('(jml*harga) as subtotal')  )
              ->where('kaskeluard.nobukti', '=', $nobel)
              ->orderby('kaskeluard.nobukti', 'desc')
              ->get();

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
         $master=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', $nobel)             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->get();    
         
        // dd($total);
         $tambah=false;
         $idmek=Input::get('idmek'); 
          
         $jml=Input::get('jml'); 
         $tglbel=Input::get('tglbel'); 
         $harga=Input::get('harga'); 
         $iddep=Input::get('iddep');
         $ketu=Input::get('ketu'); 
         $ket=Input::get('ket');        
         $nobel=Input::get('nobel'); 
         $xxx= Auth::user()->nama; 
        // $sup =DB::select("select * from pem");          me 
      // $stok =DB::select("select * from stok"); 

         return view ('pageform')
          ->with('menuaktif','Input Kas Keluar')      
          ->with('judul','Form Kas Keluar')            
          ->with('judulutama','Transaksi Kas Keluar')            
          ->with('isi','jurnal.fm')   
            //->with('pem',$sup)
            ->with('nobel',$nobel)
            ->with('tglbel',$tglbel)
            ->with('idmek',$idmek)    
            ->with('iddep',$iddep)  
            ->with('harga',$harga)
            ->with('jml',$jml)
            ->with('iduser',$iduser)
            ->with('ket',$ket)
            ->with('ketu',$ketu)           
            ->with('rec',$rec)
            ->with('induk',$induk)
            ->with('menuatas',$menuatas)
            ->with('tambah',$tambah)
            ->with('total',$total)
            ->with('master',$master)
            ->with('idrole',$idrole)
            ->with('namauser',$xxx); 


            return back()
                    ->with('success','Record Added successfully.');
        }
 

 public function editkm(Request $request)

        {
        
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;
         
        DB::beginTransaction();

       
        $nobel = $request->nobukti; 
     
        
         $total=DB::table('kaskeluard')
                  ->select(DB::raw('SUM(jml*harga) as total'))                 
                  ->where('kaskeluard.nobukti', '=', $nobel)             
                  ->orderby('kaskeluard.nobukti', 'desc')
                  ->first(); 
         $total=$total->total;  
           

          $rec=DB::table('kaskeluard')     
              ->select('kaskeluard.*',DB::raw('(jml*harga) as subtotal')  )
              ->where('kaskeluard.nobukti', '=', $nobel)
              ->orderby('kaskeluard.nobukti', 'desc')
              ->get();

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
         $master=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', $nobel)             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->get();    
         
        // dd($total);
         $tambah=false;
         $idmek=Input::get('idmek'); 
          
         $jml=Input::get('jml'); 
         $tglbel=Input::get('tglbel'); 
         $harga=Input::get('harga'); 
         $iddep=Input::get('iddep');
         $ketu=Input::get('ketu'); 
         $ket=Input::get('ket');        
         $nobel=Input::get('nobel'); 
         $xxx= Auth::user()->nama; 
        // $sup =DB::select("select * from pem");          me 
      // $stok =DB::select("select * from stok"); 

         return view ('pageform')
          ->with('menuaktif','Input Kas Keluar')      
          ->with('judul','Form Kas Keluar')            
          ->with('judulutama','Transaksi Kas Keluar')            
          ->with('isi','jurnal.fm')   
            //->with('pem',$sup)
            ->with('nobel',$nobel)
            ->with('tglbel',$tglbel)
            //->with('idmek',$idmek)    
            ->with('iddep',$iddep)  
            ->with('harga',$harga)
            ->with('jml',$jml)
            ->with('iduser',$iduser)
            ->with('ket',$ket)
            ->with('ketu',$ketu)           
            ->with('rec',$rec)
            ->with('induk',$induk)
            ->with('menuatas',$menuatas)
            ->with('tambah',$tambah)
            ->with('total',$total)
            ->with('master',$master)
            ->with('idrole',$idrole)
            ->with('namauser',$xxx); 


            return back()
                    ->with('success','Record Added successfully.');
        }
 
 public function editkk(Request $request)

        {
        
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;
         
        DB::beginTransaction();

       
        $nobel = $request->nobukti; 
     
        
         $total=DB::table('kaskeluard')
                  ->select(DB::raw('SUM(jml*harga) as total'))                 
                  ->where('kaskeluard.nobukti', '=', $nobel)             
                  ->orderby('kaskeluard.nobukti', 'desc')
                  ->first(); 
         $total=$total->total;  
           

          $rec=DB::table('kaskeluard')     
              ->select('kaskeluard.*',DB::raw('(jml*harga) as subtotal')  )
              ->where('kaskeluard.nobukti', '=', $nobel)
              ->orderby('kaskeluard.nobukti', 'desc')
              ->get();

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
         $master=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', $nobel)             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->get();    
         
        // dd($total);
         $tambah=false;
         $idmek=Input::get('idmek'); 
          
         $jml=Input::get('jml'); 
         $tglbel=Input::get('tglbel'); 
         $harga=Input::get('harga'); 
         $iddep=Input::get('iddep');
         $ketu=Input::get('ketu'); 
         $ket=Input::get('ket');        
         $nobel=Input::get('nobel'); 
         $xxx= Auth::user()->nama; 
        // $sup =DB::select("select * from pem");          me 
      // $stok =DB::select("select * from stok"); 

         return view ('pageform')
          ->with('menuaktif','Input Kas Masu')      
          ->with('judul','Form Kas Masuk')            
          ->with('judulutama','Transaksi Kas Masuk')            
          ->with('isi','jurnal.fk')   
            //->with('pem',$sup)
            ->with('nobel',$nobel)
            ->with('tglbel',$tglbel)
            //->with('idmek',$idmek)    
            ->with('iddep',$iddep)  
            ->with('harga',$harga)
            ->with('jml',$jml)
            ->with('iduser',$iduser)
            ->with('ket',$ket)
            ->with('ketu',$ketu)           
            ->with('rec',$rec)
            ->with('induk',$induk)
            ->with('menuatas',$menuatas)
            ->with('tambah',$tambah)
            ->with('total',$total)
            ->with('master',$master)
            ->with('idrole',$idrole)
            ->with('namauser',$xxx); 


            return back()
                    ->with('success','Record Added successfully.');
        }
 


 public function savekk(Request $request)

        {
        
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;
         
        DB::beginTransaction();

         try { 
          //$id=$request->nobel;
        $nobel = Input::get('nobel'); 
     
        $nomax = DB::table('kaskeluarm')->max('urut');
           
        $pro2=array
         (        
                'ket'=>Input::get('ket'),                           
                'nobukti'=>Input::get('nobel'), 
                'jml'=>Input::get('jumlah'),                                                        
                'mk'=>'K',         
                'harga'=>Input::get('harga')             
                 
         );
        DB::table('kaskeluard')->insertgetId($pro2);       
        
        
         $total=DB::table('kaskeluard')
                  ->select(DB::raw('SUM(jml*harga) as total'))                 
                  ->where('kaskeluard.nobukti', '=', $nobel)             
                  ->orderby('kaskeluard.nobukti', 'desc')
                  ->first(); 
         $total=$total->total;  
         $pro=array
         (                    
                'tglkas'=>date("Y-m-d", strtotime(Input::get('tglbel'))),              
                'nobukti'=>Input::get('nobel'), 
                'ket'=>Input::get('ketu'),     
                'idkar'=>Input::get('idmek'),               
                'iddep'=>Input::get('iddep'),   
                'urut'=>$nomax+1,
                'total'=>$total,
                'dk'=>'K'
         );
              DB::delete('delete from kaskeluarm where nobukti = ?',[$nobel]);       
              DB::table('kaskeluarm')->insertgetId($pro);
              DB::commit();
              // all good
          } catch (Exception $e) {
              DB::rollback();
              
          }         

          $rec=DB::table('kaskeluard')     
              ->select('kaskeluard.*',DB::raw('(jml*harga) as subtotal')  )
              ->where('kaskeluard.nobukti', '=', $nobel)
              ->orderby('kaskeluard.nobukti', 'desc')
              ->get();

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
         $master=DB::table('kaskeluarm')
                  ->select('kaskeluarm.*')                 
                  ->where('kaskeluarm.nobukti', '=', $nobel)             
                  ->orderby('kaskeluarm.nobukti', 'desc')
                  ->get();    
         
        // dd($total);
         $tambah=false;
         $idmek=Input::get('idmek'); 
          
         $jml=Input::get('jml'); 
         $tglbel=Input::get('tglbel'); 
         $harga=Input::get('harga'); 
         $iddep=Input::get('iddep');
         $ketu=Input::get('ketu'); 
         $ket=Input::get('ket');        
         $nobel=Input::get('nobel'); 
         $xxx= Auth::user()->nama; 
        // $sup =DB::select("select * from pem");          me 
      // $stok =DB::select("select * from stok"); 

         return view ('pageform')
          ->with('menuaktif','Input Kas Keluar')      
          ->with('judul','Form Kas Keluar')            
          ->with('judulutama','Transaksi Kas Keluar')            
          ->with('isi','jurnal.fk')   
            //->with('pem',$sup)
            ->with('nobel',$nobel)
            ->with('tglbel',$tglbel)
            ->with('idmek',$idmek)    
            ->with('iddep',$iddep)  
            ->with('harga',$harga)
            ->with('jml',$jml)
            ->with('iduser',$iduser)
            ->with('ket',$ket)
            ->with('ketu',$ketu)           
            ->with('rec',$rec)
            ->with('induk',$induk)
            ->with('menuatas',$menuatas)
            ->with('tambah',$tambah)
            ->with('total',$total)
            ->with('master',$master)
            ->with('idrole',$idrole)
            ->with('namauser',$xxx); 


            return back()
                    ->with('success','Record Added successfully.');
        }
 



//==========================jual ============================

 public function indexmasterjual(Request $request){
        $xxx= Auth::user()->nama;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
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
         ->with('idrole',$idrole)  
         ->with('induk',$induk)
         ->with('menuatas',$menuatas)  
        ->with('menuaktif','Daftar Penjualan')
        ->with('judulutama','Transaksi')            
        ->with('isi','transaksi.penjualan')            
        ->with('judul',' Penjualan')            
        ->with('namauser',$xxx); 
  } 


  public function formjual (Request $request){
           $thn= date("y"); 
        $bln= date("m");
        $xxx= Auth::user()->nama;
        $iduser= Auth::user()->id;
        $ly= Auth::user()->layout;
        $idrole= Auth::user()->rolesid;
        $induk = $request->induk;

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
       $idpel='';
       $iddep='';
       $harga='';
       $idter='';
       $idstok='';
       $total=0;
       $tambah=true;
 
       $xxx= Auth::user()->nama; 
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

        return view ('pageforminput')
        ->with('menuaktif','Input Penjualan')      
        ->with('judul','Form Penjualan')            
        ->with('judulutama','Transaksi Penjualan')           
        ->with('isi','transaksi.fj')              
        ->with('nobel',$nobel)
        
        ->with('idrole',$idrole)
        ->with('tglbel',$tglbel)
        ->with('idsup',$idsup)
        ->with('iddep',$iddep)
        ->with('iduser',$iduser)
        ->with('idpel',$idpel)
        ->with('idrole',$idrole)
        ->with('menuatas',$menuatas)
        ->with('induk',$induk)
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



public function editbeli(Request $request)
             
            {
                $xxx= Auth::user()->nama;
                $iduser= Auth::user()->id;
                $idrole= Auth::user()->rolesid;
                $nobel = $request->nobel;
                $induk = $request->induk;
               
                //$nobel = $request -> nobel;                         
                $rec=DB::table('belid')    
                    ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                    ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                    ->select('belid.*','sat.nama as nasa',DB::raw('(jml*harga) as subtotal'),'stok.nama as namastok','stok.kode as kodestok','belid.harga')                   
                    ->where('belid.nobel', '=', $nobel)
                    ->orderby('belid.nobel', 'desc')
                    ->get();

                $master=DB::table('belim')
                    ->select('belim.*')
                     ->where('belim.nobel', '=', $nobel)                
                    ->get(); 

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


                 $total=DB::table('belid')
                    ->select(DB::raw('SUM(jml*harga) as total'))                 
                    ->where('belid.nojual', '=', $nobel)
                    ->orderby('belid.nojual')
                    ->orderby('belid.nojual', 'desc')
                    ->first();          
                
                     $tambah=false; 
                return view ('pageforminput')
                    ->with('menuaktif','Input Penjualan')      
                    ->with('judul','Form Pembelian')            
                    ->with('judulutama','Transaksi Pembelian')           
                    ->with('isi','transaksi.fb')              
                    ->with('nobel',$nobel)        
                    ->with('idrole',$idrole)                
                    ->with('menuatas',$menuatas)
                    ->with('induk',$induk)
                     ->with('iduser',$iduser)
                     ->with('master',$master)
                   
                    
                    ->with('rec',$rec)      
                    ->with('total',$total)
                    ->with('tambah',$tambah)
                    ->with('namauser',$xxx); 
                         
            }   
  
  
   






    public function editjual(Request $request)
             
            {
                $xxx= Auth::user()->nama;
                $iduser= Auth::user()->id;
                $idrole= Auth::user()->rolesid;
                $nobel = $request->nobel;
                $induk = $request->induk;
               
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


                 $total=DB::table('belid')
                    ->select(DB::raw('SUM(jml*harga) as total'))                 
                    ->where('belid.nojual', '=', $nobel)
                    ->orderby('belid.nojual')
                    ->orderby('belid.nojual', 'desc')
                    ->first();          
                
                     $tambah=false; 
                return view ('pageforminput')
                    ->with('menuaktif','Input Penjualan')      
                    ->with('judul','Form Penjualan')            
                    ->with('judulutama','Transaksi Penjualan')           
                    ->with('isi','transaksi.fj')              
                    ->with('nobel',$nobel)        
                    ->with('idrole',$idrole)                
                    ->with('menuatas',$menuatas)
                    ->with('induk',$induk)
                     ->with('iduser',$iduser)
                     ->with('master',$master)
                   
                    
                    ->with('rec',$rec)      
                    ->with('total',$total)
                    ->with('tambah',$tambah)
                    ->with('namauser',$xxx); 
                         
            }     

     

      public function deletejualdetil(Request $request)
            {
                $xxx= Auth::user()->nama;
                $iduser= Auth::user()->id;
                $ly= Auth::user()->layout;
                $idrole= Auth::user()->rolesid;

                $tambah=False;
                $id = $request -> id;
                $induk = $request -> induk;
                $nobelx = DB::table('belid')->where('id', $id)->first();
                $nobel= $nobelx->nojual;


              DB::beginTransaction();

              try {
                DB::delete('delete from belid where id = ?',[$id]);
                DB::delete('delete from kaskeluard where ijd = ?',[$id]);
                //DB::delete('delete from kaskeluard where nobukti = ?',[$nobel]);
               
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
                $idpel=$master2->idpel;        

                $total=DB::table('belid')
                    ->select(DB::raw('SUM(jml*harga) as total'))                 
                    ->where('belid.nojual', '=', $nobel)
                    ->orderby('belid.nojual')
                    ->orderby('belid.nojual', 'desc')
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
              $nomax = DB::table('jualm')->max('urut');      
                
                $kas=array
                 (        
                        'tglkas'=>$master2->tgljual,     
                        'nobukti'=>$nobel, 
                        'idkar' =>$master2->idpel,                      
                        'dk'=>'M',
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
          $tambah = false;       
          return view ('pageforminput')
            ->with('menuaktif','Input Penjualan')      
            ->with('judul','Form Penjualan')            
            ->with('judulutama','Transaksi Penjualan')           
            ->with('isi','transaksi.fj')              
            ->with('nobel',$nobel) 
            ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('master',$master)
           // ->with('tglbel',$tglbel)
            ->with('idpel',$idpel)
            ->with('idrole',$idrole)
            ->with('menuatas',$menuatas)
            ->with('iduser',$iduser)
            //->with('jml',$jml)
            //->with('harga',$harga)
            //->with('idstok',$idstok)
            //->with('ket',$ket)
            ->with('rec',$rec)
            //->with('stok',$stok)
            ->with('total',$total)
            ->with('tambah',$tambah)
            ->with('namauser',$xxx); 
                 
            }    


      public function deletebelidetil(Request $request)
            
{                $xxx= Auth::user()->nama;
                $iduser= Auth::user()->id;
                $ly= Auth::user()->layout;
                $idrole= Auth::user()->rolesid;

                $tambah=False;
                $id = $request -> id;
                $induk = $request -> induk;
                $nobelx = DB::table('belid')->where('id', $id)->first();
                $nobel= $nobelx->nobel;


              DB::beginTransaction();

              try {
                DB::delete('delete from belid where id = ?',[$id]);
                //DB::delete('delete from kaskeluard where ijd = ?',[$id]);
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

                $master2=DB::table('belim')
                    ->select('belim.*')
                     ->where('belim.nobel', '=', $nobel)                
                    ->first();
                $idpel=$master2->idsup;        

                $total=DB::table('belid')
                    ->select(DB::raw('SUM(jml*harga) as total'))                 
                    ->where('belid.nobel', '=', $nobel)
                    ->orderby('belid.nobel')
                    ->orderby('belid.nobel', 'desc')
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
                //$nomax = DB::table('jualm')->max('urut');      
                 
                //$kas=array
                 //(        
                   //     'tglkas'=>$master2->tglbel,     
                     //   'nobukti'=>$nobel, 
                       // 'idkar' =>$master2->idsup,                      
                        //'dk'=>'K',
                      //  'total'=>$total->total,
                      //  'ket'=>'Pembelian'             
                         
                // );

               
                 //$ada='';
                // $ada = DB::table('kaskeluarm')->where('nobukti', $nobel)->first();
                 //if ($ada !='' ) {
                  // DB::table('kaskeluarm')->where('nobukti',$nobel)->update($kas); 
                 //}else{
                 //  DB::table('kaskeluarm')->insertgetId($kas); 
                // }
                

                 DB::commit();    
                    DB::commit();
                  // all good
                    } catch (Exception $e) {
                        DB::rollback();
                        // something went wrong
                    }         
          $tambah = false;       
          return view ('pageforminput')
            ->with('menuaktif','Input Penjualan')      
            ->with('judul','Form Penjualan')            
            ->with('judulutama','Transaksi Pembelian')           
            ->with('isi','transaksi.fb')              
            ->with('nobel',$nobel) 
            ->with('idrole',$idrole)
            ->with('induk',$induk)
            ->with('master',$master)
           // ->with('tglbel',$tglbel)
            ->with('idpel',$idpel)
            ->with('idrole',$idrole)
            ->with('menuatas',$menuatas)
            ->with('iduser',$iduser)
            //->with('jml',$jml)
            //->with('harga',$harga)
            //->with('idstok',$idstok)
            //->with('ket',$ket)
            ->with('rec',$rec)
            //->with('stok',$stok)
            ->with('total',$total)
            ->with('tambah',$tambah)
            ->with('namauser',$xxx); 
                 
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
            if ($ide!=null){
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
        }

    public function flrincijual(Request $request){
        $xxx= Auth::user()->nama;
        $idrole= Auth::user()->rolesid;
        $induk = $request -> induk;
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
        return view ('pageform')
            ->with('menuaktif','Input Penjualan')      
            ->with('judul','Rinci')            
            ->with('judulutama','Laporan Penjualan')           
            ->with('isi','lap.flrincjual')                   
           
            ->with('idrole',$idrole)
            ->with('induk',$induk)
             
            ->with('idrole',$idrole)
            ->with('menuatas',$menuatas)       
          
           
            ->with('namauser',$xxx); 
              
          
      } 



   public function fllabakotor(Request $request){
        $xxx= Auth::user()->nama;
        $idrole= Auth::user()->rolesid;
        $induk = $request -> induk;
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
        return view ('pageform')
            ->with('menuaktif','Input Penjualan')      
            ->with('judul','Rinci')            
            ->with('judulutama','Laporan Laba Kotor')           
            ->with('isi','lap.fllabakotor')                   
           
            ->with('idrole',$idrole)
            ->with('induk',$induk)
             
            ->with('idrole',$idrole)
            ->with('menuatas',$menuatas)       
          
           
            ->with('namauser',$xxx); 
              
          
      }      


  public function flrkpjual(Request $request){
      $xxx= Auth::user()->nama;
      $idrole= Auth::user()->rolesid;
      $induk = $request -> induk;
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
      return view ('pageform')
          ->with('menuaktif','Input Penjualan')      
          ->with('judul','Rekap')            
          ->with('judulutama','Laporan Penjualan')           
          ->with('isi','lap.flrkpjual')                   
         
          ->with('idrole',$idrole)
          ->with('induk',$induk)
           
          ->with('idrole',$idrole)
          ->with('menuatas',$menuatas)       
        
         
          ->with('namauser',$xxx); 
            
        
    } 



  public function flrrincibeli(Request $request){
      $xxx= Auth::user()->nama;
      $idrole= Auth::user()->rolesid;
      $induk = $request -> induk;
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
      return view ('pageform')
          ->with('menuaktif','Input Penjualan')      
          ->with('judul','Rekap')            
          ->with('judulutama','Laporan Rincian Pembelian')           
          ->with('isi','lap.flrrincibeli')                   
         
          ->with('idrole',$idrole)
          ->with('induk',$induk)
           
          ->with('idrole',$idrole)
          ->with('menuatas',$menuatas)       
        
         
          ->with('namauser',$xxx); 
            
        
    } 


 public function flposisikas(Request $request){
      $xxx= Auth::user()->nama;
      $idrole= Auth::user()->rolesid;
      $induk = $request -> induk;
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
      return view ('pageform')
          ->with('menuaktif','Input Penjualan')      
          ->with('judul','Rekap')            
          ->with('judulutama','Laporan Posisi Kas')           
          ->with('isi','lap.flposisikas')                   
         
          ->with('idrole',$idrole)
          ->with('induk',$induk)
           
          ->with('idrole',$idrole)
          ->with('menuatas',$menuatas)       
        
         
          ->with('namauser',$xxx); 
            
        
    } 


    public function celaprinjul(Request $request)

        
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
                 $pdf = PDF::loadView('lap/laprinjulpdf');
                 return $pdf->download('lap/laprinjulpdf.pdf');
            }
            return view('jual/cefak');
        }



    public function celaprinbel(Request $request)

        
           {
            $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
            $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));               
           // $items = DB::table("jualm")->get();
          //$nobel=$request->nobel;       
             //echo "string:$tgl1";
              $result=DB::table('belim')    
                    ->leftjoin('pem', 'pem.id', '=', 'belim.idsup')
                    ->leftjoin('belid', 'belid.nobel', '=', 'belim.nobel')
                    ->leftjoin('stok', 'stok.id', '=', 'belid.idstok')
                    ->leftjoin('sat', 'sat.id', '=', 'stok.satid')
                    ->select('belim.*','belim.ket as ket','pem.nama as napem','pem.telp as nohp','stok.kode as kodestok','stok.nama as namastok','sat.nama as nasa','belid.*',DB::raw('(belid.jml*belid.harga) as subtotal'))                 
                    ->orderby('belim.nobel', 'desc')               
                    ->where('belim.tglbel','>=',$tgl1)
                    ->where('belim.tglbel','<=',$tgl2)              
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
                 $pdf = PDF::loadView('lap/laprinbelpdf');
                 return $pdf->download('lap/laprinbelpdf.pdf');
            }
            return view('jual/cefak');
        }



    public function celapposisikas(Request $request)

        
           {
            $tgl1=date("Y-m-d", strtotime(Input::get('tgl1')));               
            $tgl2=date("Y-m-d", strtotime(Input::get('tgl2')));               
           // $items = DB::table("jualm")->get();
          //$nobel=$request->nobel;       
             //echo "string:$tgl1";
              $result=DB::table('kaskeluarm')                         
                    ->leftjoin('users', 'users.id', '=', 'kaskeluarm.idkar')        
                    ->select('kaskeluarm.*','users.nama')                 
                    ->orderby('kaskeluarm.tglkas', 'asc')               
                    ->where('kaskeluarm.tglkas','>=',$tgl1)
                    ->where('kaskeluarm.tglkas','<=',$tgl2)              
                    ->get();

              $saldoawald=DB::table('kaskeluarm')                                                     
                     ->select(DB::raw('SUM(total) as totawal'))                             
                    ->where('kaskeluarm.tglkas','<',$tgl1)                     
                    ->where('kaskeluarm.dk','=','M')          
                    ->first();       
               $sawald=$saldoawald->totawal;


               $saldoawalk=DB::table('kaskeluarm')                     
                            
                     ->select(DB::raw('SUM(total) as totawal'))   
                      ->where('kaskeluarm.tglkas','<',$tgl1)                                    
                     ->where('kaskeluarm.dk','=','K')            
                    ->first();           

              $sawalk=$saldoawalk->totawal; 

              $sawal=$sawald-$sawalk;
             
             //$user = DB::table('users')->where('id', '1')->first();
            $total=DB::table('kaskeluarm')
                    ->select(DB::raw('total as tot'))                 
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
            view()->share('sawal',$sawal);
            view()->share('sawald',$sawald);
            view()->share('sawalk',$sawalk);
            view()->share('totallll',$total);
         
           

            //echo "string:$nobel";
            if($request->has('download')){
                 $pdf = PDF::loadView('lap/lapposisikas');
                 return $pdf->download('lap/lapposisikas.pdf');
            }
            return view('jual/cefak');
        }


 

      public function celaprkpjul(Request $request)

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
//================== end jual         

 public function simpanstok(Request $request) 
        {
          $xxx= Auth::user()->nama;            
          $idrole= Auth::user()->rolesid;  
          $induk =$request->induk;
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
                     $data -> hrgrata = 0;
                     $data -> foto = $realpath;
                     $data -> filename = $newfile;
                     
                     $data -> save();
                      
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
                       $data -> hrgrata = 0;
                       $data -> save();
                      
                    }
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
 
                $tambah=1;  
                $xxx= Auth::user()->nama;
                return view('pageform')
                    ->with('idrole',$idrole)  
                    ->with('induk',$induk)
                    ->with('menuatas',$menuatas)  
                    ->with('menuaktif','Master Data Barang') 
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('isi','master.stokform') 
                    ->with('judul','Daftar Stok')            
                    ->with('namauser',$xxx); 

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
              'hrgrata'=>0

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
              'hrgrata'=>0

            );
      }


            $e=DB::table('stok')->where('kode',$request->kode)->update($pro); 

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
 
                $tambah=1;  
                $xxx= Auth::user()->nama;
                return view('pageform')
                    ->with('idrole',$idrole) 
                    ->with('induk',$induk) 
                    ->with('menuatas',$menuatas)  
                    ->with('menuaktif','Master Data Barang') 
                    ->with('judulutama','Master') 
                    ->with('tambah',$tambah) 
                    ->with('isi','master.stokform') 
                    ->with('judul','Daftar Stok')            
                    ->with('namauser',$xxx); 


              
          }
            
          
        }

//==============================end stok =========================================

}
?>