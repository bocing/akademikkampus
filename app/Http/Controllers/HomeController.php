<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;
use App\Daftarpmb;
use App\Cusiklan;

class HomeController extends Controller
{
    
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    
    public function daftar(){
            $user = new User();         
            $user->email=Input::get ('nohp');
            $user->nama=Input::get ('nama');
            $user->password=bcrypt(Input::get('pass'));                      
            $user->rolesid=4;
            $user->save();

        //  dd($user);
           // var_dump($user);
 
           
      
        return view('pagewelcome')->with('isi','bintang.isi')
        ;
}
   public function home()
	{
		
       
		//return view('login.formlogin');
        return view('toko');
        
		

	}

     public function daftarpmb()
    {
        
       $pesan='';
       $nopen='';
        //return view('login.formlogin');
       $result=DB::table('daftarpmb')
                ->leftjoin ('jalur','jalur.id','=','daftarpmb.jalur')
                ->leftjoin ('prodi','prodi.id','=','daftarpmb.prodi')
                ->select('daftarpmb.*','prodi.nama as napro','jalur.nama as najal')
                ->where('nopen','=',$nopen)
                ->first();
                    

                           
                                  return view('pmbonline')
                                  ->with('data',$result)
                                   ->with('pesan',$pesan)
                                   ->with('ada',0)
                                    ;
        
        

    }
   

    public function simpandaftarpmb()
    {
          $nohp = $_POST['nohp'];
         
          $nama = strtoupper($_POST['nama']);
          $jalur = $_POST['jalur'];
          $prodi = $_POST['prodi'];
          $email = $_POST['email'];
          $a = $_POST['a'];
          $b = $_POST['b'];
          $hasil = $_POST['hasil'];
          
          $str_time = date('ymdHis');


          $hasilasli = $a + $b;
       
      if ($hasilasli==$hasil){
       // dd($str_time);
              $l = "MB"."$str_time";
              $nobel = $l;    
              $rand = strtoupper(substr(md5(microtime()),rand(0,26),5));
                        

                $result=DB::table('daftarpmb')
                      ->where('nohp','=',$nohp)
                      ->where('email','=',$email)
                      ->first();

              if ( $result!=null){
                     $pesan="NOHP atau email sudah pernah di pakai.....!";
                 
                        //return view('login.formlogin');
                        return view('register')
                        ->with('pesan',$pesan)
                        ;

              }else{
                  $pro=array
                           (        
                                  'nohp'=>$nohp,     
                                  'nama'=>$nama, 
                                
                                  'nohp'=>$nohp,
                                  'email'=>$email,
                                  'jalur'=>$jalur,
                                  'nopen'=>$nobel,
                                  'nover'=>$rand,
                                  'prodi'=>$prodi
                           );

                           DB::table('daftarpmb')->insertgetId($pro); 
                     $pesan='Terimakasih, Sudah Mendaftar melakukan pembayaran dan upload bukti ';
                        return view('respondaftar')
                        ->with('nopen',$nobel)
                        ->with('nama',$nama)
                        ->with('nover',$rand)
                        ->with('nover',$rand)
                        ->with('pesan',$pesan)
                        
                        
                          ;
                  }               
           }else{
              $pesan='Penjumlahan Anda Salah';
                return view('register')
                        ->with('pesan',$pesan)
                        ;
           }               


                   


         
                  

    }





    public function simpandaftarpmbok()
    {
          $nohp = $_POST['nohp'];
         
          $nama = strtoupper($_POST['nama']);
          $jalur = $_POST['jalur'];
          $prodi = $_POST['prodi'];
          $email = $_POST['email'];
          $a = $_POST['a'];
          $b = $_POST['b'];
          $hasil = $_POST['hasil'];
          
          $str_time = date('ymdHis');


          $hasilasli = $a + $b;
       
      if ($hasilasli==$hasil){
       // dd($str_time);
              $l = "MB"."$str_time";
              $nobel = $l;    
              $rand = strtoupper(substr(md5(microtime()),rand(0,26),5));
                        

                $result=DB::table('daftarpmb')
                      ->where('nohp','=',$nohp)
                      ->where('email','=',$email)
                      ->first();



                      if ( $result!=null){
                             $pesan="Nohp atau email sudah pernah di pakai.....!";
                             
                                $nama =  '';
                                $jalur = '';
                                $prodi =  '';
                                $email = '';
                                $nopen= '';
                                $nover= '';
                                $verifikasibayar= 0;
                                $verifikasiberkas=0;
                                $btf = ''; 

                                 $result=DB::table('daftarpmb')
                              ->where('nohp','=','xx')
                              ->where('email','=','xx')
                              ->first();
                                //return view('login.formlogin');
                                return view('pmbonline')
                                          ->with('data',$result)
                                          ->with('pesan',$pesan)
                                          ->with('ada',0)
                                ;

                      }else{

                          $pro=array
                                   (        
                                          'nohp'=>$nohp,     
                                          'nama'=>$nama,
                                          'nohp'=>$nohp,
                                          'email'=>$email,
                                          'jalur'=>$jalur,
                                          'nopen'=>$nobel,
                                          'nover'=>$rand,
                                          'prodi'=>$prodi
                                   );

                                   DB::table('daftarpmb')->insertgetId($pro); 


                             $pesan='Terimakasih, Sudah Mendaftar silakan melakukan pembayaran';
                               $ada=1;

                               $result=DB::table('daftarpmb')
                                  ->where('nopen','=',$nobel)
                                  
                                  ->first();
                                return view('pmbonline')
                                          ->with('data',$result)
                                          ->with('pesan',$pesan)
                                          ->with('ada',$ada) 
                                
                                  ;
                          }               
           }else{
              $pesan='Penjumlahan Anda Salah';
                $nama =  '';
                        $jalur = '';
                        $prodi =  '';
                        $email = '';
                        $nopen= '';
                        $nover= '';
                        $verifikasibayar= 0;
                        $verifikasiberkas=0;
                        $btf = ''; 
                        $jalur = 0;
                        $prodi=0 ;
                          $result=DB::table('daftarpmb')
                      ->where('nohp','=','xx')
                      ->where('email','=','xx')
                      ->first();

                              
                         return view('pmbonline')
                                  ->with('data',$result)
                                  ->with('pesan',$pesan)
                                  ->with('ada',0)
                        ;
           }               


                   


         
                  

    }





     public function telusuriok()
    {
           $nopen = $_POST['nopen'];
           $result=DB::table('daftarpmb')
                ->leftjoin ('jalur','jalur.id','=','daftarpmb.jalur')
                ->leftjoin ('prodi','prodi.id','=','daftarpmb.prodi')
                ->select('daftarpmb.*','prodi.nama as napro','jalur.nama as najal')
                ->where('nopen','=',$nopen)
                ->first();
                
           
           if ($result!=null){
           
              $nama =  $result->nama;
              $jalur = $result->jalur;
              $prodi =  $result->prodi;
              $email = $result->email;
              $nopen= $result->nopen;
              $nover= $result->nover;
              $verifikasibayar=$result->verifikasibayar;
              $verifikasiberkas=$result->verifikasiberkas;
              $btf = $result->btf;
              $nohp = $result->nohp;
              
              $isibiodata = $result->isibiodata;

              $ada=1; 
                 $pesan='Nomor pendaftaran telah terdaftar, silakan lanjutkan proses pendaftaran ';
             }else{
                        $nama =  '';
                        $jalur = '';
                        $prodi =  '';
                        $email = '';
                        $nopen= '';
                        $nover= '';
                        $verifikasibayar= 0;
                        $verifikasiberkas=0;
                        $btf = '';
                        $ada=0;
                         $pesan='Nomor pendaftaran ini tidak ditemukan, silakan mendaftar ';
             }

                          

                              return view('pmbonline')
                                  ->with('data',$result)
                                  ->with('pesan',$pesan)
                                  ->with('ada',$ada)
                                  
                                  
                                   
                                    ;
 

 }







  public function simpancalonsiswa(Request $request)
  {
          $nopen=$request->nopen;
            $pro=array
                     (        
                            'tltgll'=>$request -> tltgll,  
                            'jeka'=> $request -> jekax, 
                             'agamaid'=> $request -> agamaid, 
                              'sta'=> $request -> sta, 
                               'akeid'=> $request -> akeid, 
                                'alamat'=> $request -> alamat, 
                                 'nohp'=> $request -> nohp, 
                                  'sekasal'=> $request -> sekasal, 
                                   'kelasterima'=> $request -> kelasterima, 
                                    'tglterim'=> $request -> tglterima, 
                                     'namaayah'=> $request -> namaayah, 
                                      'namaibu'=> $request -> namaibu, 
                                       'alamatayah'=> $request -> alamatayah, 

                                         'nohpayah'=> $request -> nohpayah, 
                                  'kerjaayah'=> $request -> kerjaayah, 
                                   'kerjaibu'=> $request -> kerjaibu, 
                                    'namawali'=> $request -> namawali, 
                                     'alamatwali'=> $request -> alamatwali, 
                                      'nohpwali'=> $request -> nohpwali, 
                                      'isibiodata'=> 1, 
                                       'kerjawali'=> $request -> kerjawali
                           
                     );

                     DB::table('daftarpmb')->where('nopen',$nopen)->update($pro); 


                      $result=DB::table('daftarpmb')
                ->leftjoin ('jalur','jalur.id','=','daftarpmb.jalur')
                ->leftjoin ('prodi','prodi.id','=','daftarpmb.prodi')
                ->select('daftarpmb.*','prodi.nama as napro','jalur.nama as najal')
                ->where('nopen','=',$nopen)
                ->first();
                   if ($result!=null){
                        $nama =  $result->nama;
                        $jalur = $result->najal;
                        $prodi =  $result->napro;
                        $email = $result->email;
                        $nopen= $result->nopen;
                        $nover= $result->nover;
                        $verifikasibayar=$result->verifikasibayar;
                        $verifikasiberkas=$result->verifikasiberkas;
                        $btf = $result->btf;
                  }      
                              $pesan='Terimakasih telah mengisi biodata, silakan menunggu verifikasi';
                                  return view('responsetelahkirimberkas')
                                  ->with('nopen',$nopen)
                                  ->with('nama',$nama)
                                   ->with('nopen',$nopen)
                                  ->with('nover',$nover)
                                  ->with('btf',$btf)
                                  ->with('verifikasi',$verifikasibayar)
                                  ->with('verifikasiberkas',$verifikasiberkas)
                                   ->with('pesan',$pesan)
                                    ;
          
       
        }        






  public function simpancalonsiswaok(Request $request)
  {
          $nopen=$request->nopen;
            $pro=array
                     (        
                            'tltgll'=>$request -> tltgll,  
                            'jeka'=> $request -> jekax, 
                             'agamaid'=> $request -> agamaid, 
                              'sta'=> $request -> sta, 
                               'akeid'=> $request -> akeid, 
                                'alamat'=> $request -> alamat, 
                                 'nohp'=> $request -> nohp, 
                                  'sekasal'=> $request -> sekasal, 
                                   'kelasterima'=> $request -> kelasterima, 
                                    'tglterim'=> $request -> tglterima, 
                                     'namaayah'=> $request -> namaayah, 
                                      'namaibu'=> $request -> namaibu, 
                                       'alamatayah'=> $request -> alamatayah, 

                                         'nohpayah'=> $request -> nohpayah, 
                                  'kerjaayah'=> $request -> kerjaayah, 
                                   'kerjaibu'=> $request -> kerjaibu, 
                                    'namawali'=> $request -> namawali, 
                                     'alamatwali'=> $request -> alamatwali, 
                                      'nohpwali'=> $request -> nohpwali, 
                                      'isibiodata'=> 1, 
                                       'kerjawali'=> $request -> kerjawali
                           
                     );

                     DB::table('daftarpmb')->where('nopen',$nopen)->update($pro); 

                  $result=DB::table('daftarpmb')
                      ->leftjoin ('jalur','jalur.id','=','daftarpmb.jalur')
                      ->leftjoin ('prodi','prodi.id','=','daftarpmb.prodi')
                      ->select('daftarpmb.*','prodi.nama as napro','jalur.nama as najal')
                      ->where('nopen','=',$nopen)
                      ->first();

                   if ($result!=null){
                
                              $pesan='Terimakasih telah mengisi biodata, silakan menunggu verifikasi';
                                  return view('pmbonline')
                                  ->with('data',$result)
                                  ->with('ada',1)
                                   ->with('pesan',$pesan)
                                    ;
                   }                 
          
       
        }        


     public function telusuri()
    {
          $nopen = $_POST['nopen'];
           $result=DB::table('daftarpmb')
                ->leftjoin ('jalur','jalur.id','=','daftarpmb.jalur')
                ->leftjoin ('prodi','prodi.id','=','daftarpmb.prodi')
                ->select('daftarpmb.*','prodi.nama as napro','jalur.nama as najal')
                ->where('nopen','=',$nopen)
                ->first();
               // dd( $result);

           
           if ($result!=null){
              $nama =  $result->nama;
              $jalur = $result->najal;
              $prodi =  $result->napro;
              $email = $result->email;
              $nopen= $result->nopen;
              $nover= $result->nover;
              $verifikasibayar=$result->verifikasibayar;
              $verifikasiberkas=$result->verifikasiberkas;
              $btf = $result->btf;
              $isibiodata = $result->isibiodata;
              if ($isibiodata==1){
                  

                                 $pesan='Biodata dan berkas persyaratan anda sudah di verfikasi, silakan tunggu proses seleksi.';
                                  return view('responsetelahupload')
                                  ->with('nopen',$nopen)
                                  ->with('nama',$nama)
                                   ->with('nopen',$nopen)
                                  ->with('nover',$nover)
                                  ->with('btf',$btf)
                                  ->with('verifikasi',$verifikasibayar)
                                  
                                   ->with('pesan',$pesan)
                                    ;
              }





                      if ($btf==''){
                              $pesan='Anda Sudah Pernah Mendaftar, silakan lakukan pembayaran dan upload bukti pembayaran ';

                                return view('responbelumbayar')
                                  ->with('nopen',$nopen)
                                  ->with('nover',$nover)
                                  ->with('nama',$nama)                                  
                                   ->with('btf',$btf)
                                    ->with('pesan',$pesan)
                                   ;


                      }else{  

                         if($verifikasibayar==1){

                                 $pesan='Pembayaran anda sudah diverifikasi,  silakan isi biodata';
                                  return view('responsetelahupload')
                                  ->with('nopen',$nopen)
                                  ->with('nama',$nama)
                                   ->with('nopen',$nopen)
                                  ->with('nover',$nover)
                                  ->with('btf',$btf)
                                  ->with('verifikasi',$verifikasibayar)
                                  
                                   ->with('pesan',$pesan)
                                    ;
                       }else{
                               $pesan='Pembayaran sudah kami terima, menunggu verifikasi';
                                  return view('responsetelahupload')
                                  ->with('nopen',$nopen)
                                  ->with('nama',$nama)
                                   ->with('nopen',$nopen)
                                  ->with('nover',$nover)
                                  ->with('btf',$btf)
                                  ->with('verifikasi',$verifikasibayar)
                                   ->with('pesan',$pesan)
                                    ;
                           }    


                  }
   

           }else{
            $pesan='Nomor pendaftaran ini tidak ditemukan, silakan mendaftar ';

                              return view('register')
                              ->with('pesan',$pesan)
                              ;

           }

 }







     public function uploadbuktibayar(Request $r)
    {
      
      $nopen=$r->nopen; 
      $nama=$r->nama; 
      $pengirim=$r->pengirim; 
      $bank=$r->bank; 
      $a=$r->a;
      $b=$r->b;
      $hasil=$r->hasil;



      $hasilasli = $a + $b;
       
      if ($hasilasli==$hasil){
          $ada=Input::file('file');  
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
               
                  $pro=array
                     (        
                            'btf'=>$realpath,
                            'foto'=>$realpath,
                            'pengirim'=>$pengirim,
                            'bank'=>$bank,
                            
                            'filename'=>$newfile,
                             
                     );

                     DB::table('daftarpmb')->update($pro); 
             }        


            
          $result=DB::table('daftarpmb')
                ->leftjoin ('jalur','jalur.id','=','daftarpmb.jalur')
                ->leftjoin ('prodi','prodi.id','=','daftarpmb.prodi')
                ->select('daftarpmb.*','prodi.nama as napro','jalur.nama as najal')
                ->where('nopen','=',$nopen)
                ->first();
               // dd( $result);

           if ($result!=null){
              $nama =  $result->nama;
              $jalur = $result->najal;
              $prodi =  $result->napro;
              $email = $result->email;
              $nopen= $result->nopen;
              $nover= $result->nover;
              $btf = $result->btf;
              $telp = $result->nohp;
               $verifikasi = $result->verifikasibayar;
          
                $simpanuser=array
                     (        
                            'nama'=>$nama,
                            'telp'=>$telp,
                            'nama'=>$email,
                            'nama'=>$nama,
                            'nama'=>$nama,
                            'foto'=>$realpath,
                            'filename'=>$newfile,
                             
                     );

                     DB::table('users')->insertgetId($simpanuser); 


                     
                              $pesan='Terimakasih telah melakukan pengiriman bukti pembayaran, silakan tunggu verifikasi dari kami';

                                return view('responsetelahupload')
                                  ->with('nopen',$nopen)
                                  ->with('nover',$nover)
                                  ->with('nama',$nama)                                  
                                   ->with('btf',$btf)
                                   ->with('verifikasi',$verifikasi)
                                    ->with('pesan',$pesan)
                                   ;
            }                       


      }else{
         $pesan='Penjumlahan Anda Salah';

                                return view('responbelumbayar')
                                  ->with('nopen',$nopen)                                   
                                  ->with('nama',$nama)
                                  ->with('pesan',$pesan)
                                   ;
      }



            

 }




 


     public function uploadbuktibayarok(Request $r)
    {
      
      $nopen=$r->nopen; 
      $nama=$r->nama; 
      $pengirim=$r->pengirim; 
      $bank=$r->bank; 
      $a=$r->a;
      $b=$r->b;
      $hasil=$r->hasil;



      $hasilasli = $a + $b;
       
      if ($hasilasli==$hasil){
          $ada=Input::file('file');  
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
               
                  $pro=array
                     (        
                            'btf'=>$realpath,
                            'foto'=>$realpath,
                            'pengirim'=>$pengirim,
                            'bank'=>$bank,
                            
                            'filename'=>$newfile,
                             
                     );

                     DB::table('daftarpmb')->where('nopen',$nopen)->update($pro); 
             }        


            
          $result=DB::table('daftarpmb')
                ->leftjoin ('jalur','jalur.id','=','daftarpmb.jalur')
                ->leftjoin ('prodi','prodi.id','=','daftarpmb.prodi')
                ->select('daftarpmb.*','prodi.nama as napro','jalur.nama as najal')
                ->where('nopen','=',$nopen)
                ->first();
               // dd( $result);

           if ($result!=null){
              $nama =  $result->nama;
              $jalur = $result->jalur;
              $prodi =  $result->prodi;
              $email = $result->email;
              $nopen= $result->nopen;
              $nover= $result->nover;
              $verifikasibayar=$result->verifikasibayar;
              $verifikasiberkas=$result->verifikasiberkas;
              $btf = $result->btf;
              $nohp = $result->nohp;
              
              $isibiodata = $result->isibiodata;

              $ada=1; 
                 $pesan='Nomor pendaftaran telah terdaftar, silakan lanjutkan proses pendaftaran ';

           

                              $ada=1;
                              $pesan='Terimakasih telah melakukan pengiriman bukti pembayaran, silakan tunggu verifikasi dari kami';

                                return view('pmbonline')
                                  ->with('data',$result)
                                  ->with('pesan',$pesan)
                                  ->with('ada',$ada)
                                   ;
            }                       


      }else{
         $pesan='Penjumlahan Anda Salah';

                                return view('pmbonline')
                                  ->with('nopen',$nopen)                                   
                                  ->with('nama',$nama)
                                  ->with('pesan',$pesan)
                                  ->with('ada',0)
                                  
                                   ;
      }



            

 }




}