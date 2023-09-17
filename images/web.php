<?php
use Illuminate\Support\Facades\Input;
use App\Stok;

Route::get('/', 'HomeController@home'); 

Route::any('/search',function(){
  $q=Input::get('q');
  if ($q!='') {
    $posts=Stok::where('nama','like','%'.$q.'%')                     
                    ->paginate(9)
                    ->setpath('');
    $posts->appends(array('q'=>Input::get('q'),
    ));
      $toko=DB::table('toko')                                             
                      ->select('toko.*')                      
                      ->first();

        $dataslide=DB::table('stok')                  
                  ->select('stok.*')                   
                  ->orderby('stok.nama', 'asc')                                            
                  ->where('stok.slide','=',1)
                  ->get(); 
    if (count($posts)>0 ){
       return view('toko',compact('posts'))
          ->with('toko',$toko)
           ->with('dataslide',$dataslide)
       ;
     }
      return view('toko')->withMessage('Data Yang Anda Cari Tidak Ditemukan...!')
      ->with('toko',$toko)
      ->with('dataslide',$dataslide)
      ;
    }                
  
});
Route::get('/', 'HomeController@home')->name('homeuser'); 
Route::get('maha/{nomor}', 'AdminController@listmahasiswa'); 
Route::get('tbmaha', 'AdminController@formmaha'); 
Route::post('simpanmaha', 'AdminController@simpanmaha'); 
Route::post('simpankompoga', 'AdminController@simpankompoga'); 
Route::get('home', 'AdminController@adminyes'); 
Route::get('profiltoko/{induk}', 'AdminController@profil'); 
Route::get('kompoga/{induk}', 'AdminController@indexkompoga'); 
Route::get('proga/{induk}', 'AdminController@flrproga'); 

Route::post('hitunggaji', 'AdminController@hitunggaji'); 
Route::get('masga/{induk}', 'AdminController@indexmasga'); 
Route::get('cobamulti/{induk}', 'AdminController@cobamulti'); 
Route::get('addchart/{idstok}', 'CutomerController@addchart'); 
Route::get('delchart/{idstok}', 'CutomerController@delchart'); 
Route::get('del1chart/{idstok}', 'CutomerController@del1chart'); 
Route::get('chart', 'CutomerController@chart'); 
Route::get('profil', 'CutomerController@profil'); 

Route::post('simpanprofil', 'CutomerController@simpanprofil'); 
Route::post('simpaninputmasgakar', 'AdminController@simpaninputmasgakar'); 
Route::post('simpanalamattoko', 'AdminController@simpanalamattoko'); 
Route::post('simpanjamkerja', 'AdminController@simpanjamkerja'); 
Route::get('checkout', 'CutomerController@checkout'); 


Route::get('rincistok/{idstok}', 'HomeController@rincistok'); 
Route::get('nosekel/{induk}', 'AdminController@indexnosekel'); 
Route::get('inosekel/{nobel}/{induk}', 'AdminController@inosekel');
Route::get('inputmasgakar/{idkomponen}/{induk}', 'AdminController@inputmasgakar');
Route::get('deletenosekel/{idnosekel}/{induk}/{nobel}', 'AdminController@deletenosekel');
Route::post('saveinosekel', 'AdminController@saveinosekel');
Route::post('simpanbarangslide', 'AdminController@simpanbarangslide');
Route::get('deletenosemas/{idnosemas}/{induk}/{nobel}', 'AdminController@deletenosemas');
Route::get('nosemas/{induk}', 'AdminController@indexnosemas'); 
Route::get('inosemas/{nobel}/{induk}', 'AdminController@inosemas');

Route::post('saveinosemas', 'AdminController@saveinosemas');
Route::post('simpannamapemilik', 'AdminController@simpannamapemilik');
Route::post('simpanfotopemilik', 'AdminController@simpanfotopemilik');
Route::post('simpannamatoko', 'AdminController@simpannamatoko');
Route::post('simpanselogan', 'AdminController@simpanselogan');
Route::get('deleteslide/{id}/{induk}', 'AdminController@deleteslide');

Route::get('rule/{id}', 'AdminController@indexrule'); 
Route::get('jenis/{id}', 'AdminController@indexjenis'); 
Route::get('coa/{id}', 'AdminController@indexcoa'); 
Route::post('simpancoa', 'AdminController@simpancoa');

Route::get('barka/{induk}', 'AdminController@indexbarka'); 
Route::get('formbarka/{induk}', 'AdminController@formbarka'); 
Route::get('barma/{induk}', 'AdminController@indexbarma'); 
Route::get('formbarma/{induk}', 'AdminController@formbarma'); 

Route::get('rincibeli/{id}', 'AdminController@flrrincibeli'); 
Route::get('role/{id}', 'AdminController@indexrole'); 
Route::get('kirimrole', 'AdminController@kirimrole');
Route::post('simpanrole', 'AdminController@simpanrole');
Route::post('simpanrule', 'AdminController@simpanrule'); 
Route::post('crud/deleterole', 'AdminController@deleterole');
Route::get('crud/viewrole', 'AdminController@viewrole');
Route::get('crud/viewkompoga', 'AdminController@viewkompoga');
Route::post('crud/updaterole', 'AdminController@updaterole');


Route::get('ruledep/{id}', 'AdminController@indexruledep');  
Route::get('kirimruledep', 'AdminController@kirimruledep'); 
Route::post('simpanruledep', 'AdminController@simpanruledep'); 
//Route::get('pel', 'AdminController@indexpel');
Route::get('pel/{id}', 'AdminController@indexpel');
Route::get('pem/{id}', 'AdminController@indexpem');
Route::post('simpanpel', 'HomeController@simpanpel');
Route::post('simpanregister', 'HomeController@simpanregister');
Route::post('simpanpem', 'AdminController@simpanpem');

Route::get('crud/viewpel', 'AdminController@viewpel');
Route::post('crud/deletepel', 'AdminController@deletepel');
Route::post('updatepel', 'AdminController@updatepel');
Route::post('updateuser', 'AdminController@updateuser');


Route::get('crud/viewpem', 'AdminController@viewpem');
Route::post('crud/deletepem', 'AdminController@deletepem');
Route::post('updatepem', 'AdminController@updatepem');

Route::post('simpansat', 'AdminController@simpansat');
Route::get('crud/viewsat', 'AdminController@viewsat');
Route::post('crud/deletesat', 'AdminController@deletesat');
Route::post('updatesat', 'AdminController@updatesat');



Route::get('user/{id}', 'AdminController@indexuser');
Route::post('simpanuser', 'AdminController@simpanuser');


Route::get('dep/{id}', 'AdminController@indexdep');
Route::post('simpandep', 'AdminController@simpandep');
Route::get('crud/viewdep', 'AdminController@viewdep');
Route::post('crud/deletedep', 'AdminController@deletedep');
Route::post('updatedep', 'AdminController@updatedep');

Route::get('jasa/{induk}', 'AdminController@indexjasa');
Route::get('stok/{induk}', 'AdminController@indexstok');
Route::get('saldo/{induk}', 'AdminController@indexsaldo');
Route::get('sat/{induk}', 'AdminController@indexsat');

Route::get('stokfo/{induk}', 'AdminController@indexstokfo');
Route::get('formbarang/{induk}', 'AdminController@formbarang');
Route::get('formjasa/{induk}', 'AdminController@formjasa');
Route::post('crud/deletestok', 'AdminController@deletestok');
Route::get('crud/caribarang', 'AdminController@caribarang');
Route::post('simpanstok', 'AdminController@simpanstok');
Route::post('simpanjasa', 'AdminController@simpanjasa');
Route::get('editstok/{id}/{induk}', 'AdminController@editstok');
 
Route::post('updatemasga', 'AdminController@updatemasga');
Route::get('editjasa/{id}/{induk}', 'AdminController@editjasa');



//---------------Devisi--------------------------------

Route::get('dev', 'DevisiController@indexdev');
Route::get('devisi/{induk}', 'DevisiController@indexdev');
Route::get('departemen/{induk}', 'AdminController@Adminyes');
Route::get('caridev', 'DevisiController@caridev');
Route::get('crud/viewdev', 'DevisiController@view');
 
Route::get('crud/viewmobil', 'MasterController@viewmobil');
//Route::get('crud/viewpel', 'MasterController@viewpel');
Route::get('crud/viewuser', 'MasterController@viewuser');
Route::post('crud/updatedev', 'DevisiController@update');
Route::post('crud/deletedev', 'DevisiController@delete');
Route::post('crud/deletemobil', 'MasterController@deletemobil');
Route::post('simpandev', 'DevisiController@simpan');
 
//---------------End Devisi--------------------------------


/*
//---------------Departemen--------------------------------
Route::get('dep/{induk}', 'DepartemenController@index');
Route::get('cariakundapat', 'DepartemenController@cariakundapat'); 
Route::get('cariakunhpp', 'DepartemenController@cariakunhpp'); 
Route::get('cariakunsedia', 'DepartemenController@cariakunsedia'); 


Route::get('dep', 'DepartemenController@index'); 
Route::get('caridep', 'DepartemenController@caridep');  
Route::post('crud/deletedep', 'DepartemenController@delete');
Route::get('editdep/{id}', 'DepartemenController@editdep');



Route::get('formdep', 'DepartemenController@formdep'); 
Route::get('crud/viewdep', 'DepartemenController@view');
Route::post('crud/updatedep', 'DepartemenController@update');
Route::post('crud/deletedep', 'DepartemenController@delete');
Route::post('simpandep', 'DepartemenController@simpan');
 
//---------------End Departemen--------------------------------
*/

//---------------Kategori--------------------------------
Route::get('kate/{id}', 'IklanController@indexkate'); 
Route::get('subkate/{id}', 'IklanController@indexsubkate'); 
Route::get('formsubjenis/{id}', 'IklanController@tambahsubjenis'); 
Route::get('subjenis/{id}', 'IklanController@indexsubjenis'); 
Route::post('simpansubkate', 'IklanController@simpansubkate'); 
Route::get('crud/viewsubkate', 'IklanController@viewsubkate');
Route::post('crud/deletesubkate','IklanController@deletesubkate');



//---------------Kas Keluar--------------------------------

Route::get('kaskeluar/{induk}', 'AdminController@indexmasterkk');
Route::get('formkk/{induk}', 'AdminController@formkk');
Route::post('savekk', 'AdminController@savekk');
Route::get('editkk/{nobukti}/{induk}', 'AdminController@editkk');
Route::get('deletekkdetil/{id}/{induk}', 'AdminController@deletekkdetil');

//---------------Kas Masuk--------------------------------
Route::get('deletekmdetil/{id}/{induk}', 'AdminController@deletekmdetil');
Route::get('kasmasuk/{induk}', 'AdminController@indexmasterkm');
Route::get('formkm/{induk}', 'AdminController@formkm');
Route::get('editkm/{nobukti}/{induk}', 'AdminController@editkm');
Route::post('savekm', 'AdminController@savekm');

//---------------Jual--------------------------------

Route::get('jual/{induk}', 'AdminController@indexmasterjual');
 
Route::get('caripel', 'AdminController@caripel');
Route::get('editjual/{nobel}/{induk}', 'AdminController@editjual');
Route::get('carimek', 'AdminController@carimek'); 
Route::get('caribarang', 'AdminController@caribarang');
Route::get('deletejualdetil/caribarang', 'AdminController@caribarang');
//Route::get('formjual', 'AdminController@formjual');

Route::get('formjual/{induk}', 'AdminController@formjual');
Route::post('savejual', 'AdminController@savejual');
Route::post('simpanum', 'AdminController@simpanum');
Route::get('editstok/{id}', 'AdminController@editstok'); 
Route::get('deletejualdetil/{id}/{induk}', 'AdminController@deletejualdetil');
Route::post('simpanstok', 'AdminController@simpanstok');
Route::get('cefak/{nobel}',array('as'=>'cefak','uses'=>'AdminController@cefak'));


Route::get('cetakbarang/{induk}', 'AdminController@cetakbarang');



//---------------Beli--------------------------------

Route::get('beli/{induk}', 'AdminController@indexmasterbeli');
 
Route::get('caripel', 'AdminController@caripel');
Route::get('editbeli/{nobel}/{induk}', 'AdminController@editbeli');
Route::get('editbarka/{nobel}/{induk}', 'AdminController@editbarka');
Route::get('editbarma/{nobel}/{induk}', 'AdminController@editbarma');
Route::get('carimek', 'AdminController@carimek'); 
Route::get('caribarang', 'AdminController@caribarang');
Route::get('deletejualdetil/caribarang', 'AdminController@caribarang');
//Route::get('formjual', 'AdminController@formjual');

Route::get('formbeli/{induk}', 'AdminController@formbeli');
Route::post('savebeli', 'AdminController@savebeli');
Route::post('savebarka', 'AdminController@savebarka');
Route::post('savebarma', 'AdminController@savebarma');
Route::post('simpanum', 'AdminController@simpanum');
Route::get('editstok/{id}', 'AdminController@editstok'); 
Route::get('deletebelidetil/{id}/{induk}', 'AdminController@deletebelidetil');
Route::get('deletebarkadetil/{id}/{induk}', 'AdminController@deletebarkadetil');
Route::get('deletebarmadetil/{id}/{induk}', 'AdminController@deletebarmadetil');
Route::post('simpanstok', 'AdminController@simpanstok');
Route::get('cefak/{nobel}',array('as'=>'cefak','uses'=>'AdminController@cefak'));
Route::get('cekel/{nokel}',array('as'=>'cekel','uses'=>'AdminController@cekel'));
Route::get('cemas/{nomas}',array('as'=>'cemas','uses'=>'AdminController@cemas'));


//----------------lap jual ---------------------------------
Route::get('rinjual/{induk}', 'AdminController@flrincijual');
Route::get('rincijasameka/{induk}', 'AdminController@flrrincijasameka');
Route::get('cegaslip/{induk}', 'AdminController@flrcegaslip');
//Route::get('ceslip', 'AdminController@ceslip');
Route::get('rekapjasameka/{induk}', 'AdminController@flrrekapjasameka');
Route::get('lapmas/{induk}', 'AdminController@fllapmas');
Route::get('lapkel/{induk}', 'AdminController@fllapkel');
Route::get('kartu/{induk}', 'AdminController@flkartu');

Route::post('celaprinjul',array('as'=>'celaprinjul','tgl1','tgl2','uses'=>'AdminController@celaprinjul'));
Route::post('celaprinjas',array('as'=>'celaprinjas','tgl1','tgl2','uses'=>'AdminController@celaprinjas'));
Route::post('ceslip',array('as'=>'ceslip','tgl1','tgl2','uses'=>'AdminController@ceslip'));
Route::post('celaprekjas',array('as'=>'celaprekjas','tgl1','tgl2','uses'=>'AdminController@celaprekjas'));
Route::post('celapmas',array('as'=>'celapmas','tgl1','tgl2','uses'=>'AdminController@celapmas'));
Route::post('celapkel',array('as'=>'celapkel','tgl1','tgl2','uses'=>'AdminController@celapkel'));
 
Route::post('celapkartu',array('as'=>'celapkartu','tgl1','tgl2','uses'=>'AdminController@celapkartu'));


Route::post('celaprinbel',array('as'=>'celaprinbel','tgl1','tgl2','uses'=>'AdminController@celaprinbel'));

Route::get('rekjul/{induk}', 'AdminController@flrkpjual');
Route::post('celaprkpjul',array('as'=>'celaprkpjul','tgl1','tgl2','uses'=>'AdminController@celaprkpjul'));
//---------------End Jual--------------------------------

//--------------------- Kas posisi----------------------
Route::get('posisikas/{induk}', 'AdminController@flposisikas');
Route::post('celapposisikas',array('as'=>'celapposisikas','tgl1','tgl2','uses'=>'AdminController@celapposisikas'));
//---------------End Kas posisi--------------------------------


//----------------lap Laba kotor ---------------------------------
Route::get('labakotor/{induk}', 'AdminController@fllabakotor');
Route::post('celaplabakotor',array('as'=>'celaplabakotor','tgl1','tgl2','uses'=>'AdminController@celaplabakotor'));

Route::get('kate/{id}', 'AdminController@indexkate');
Route::get('carikate', 'SearchController@carikate');

Route::get('editkate/{id}', 'AdminController@editkate');
Route::get('crud/viewkate', 'AdminController@viewkate');
Route::post('updatekate', 'AdminController@updatekate');
Route::post('updatekompoga', 'AdminController@updatekompoga');
Route::post('crud/deletekate', 'AdminController@deletekate');
Route::post('simpankate', 'AdminController@simpankate');

//---------------End Kateogir--------------------------------



Route::get('tambahiklan', 'HomeController@tambahiklan');
Route::get('admin', 'AdminController@admin');
Route::get('pilihkate/{idkate}', 'HomeController@tampilgroup');
Route::get('pilihsubkate/{idsubkate}/{idkate}', 'HomeController@tampilsubkate');
Route::get('login','LoginController@getLogin');
Route::get('loginuser','LoginController@getLoginuser');

Route::get('login/{idsubkate}','LoginController@getLogin');
Route::get('login/{id}/{id2}','LoginController@getLogin');

Route::get('logout', function(Request $request){
    Auth::logout();
    //$request->session()->put('url.intended',url()->previous());
         
       // return view('login');
       //return view('login.formlogin')
      $toko=DB::table('toko')                                             
                      ->select('toko.*')                      
                      ->first();
        
        return view('tokologin')
           ->with('toko',$toko) 
           ->with('pesan','') ;
   //return view('login.formlogin');
		
       
});


Route::post('simpaniklan','HomeController@simpaniklan'); 
Route::post('postLogin','LoginController@postLogin');
Route::post('postLoginuser','LoginController@postLoginuser');
//Route::get('postLogin','LoginController@postLogin');

 



Route::get('menu/{id}', 'AdminController@menuyes'); 
Route::get('carimenu', 'AdminController@carimenu'); 
Route::get('editmenu/{id}/{induk}', 'AdminController@editmenu'); 
Route::get('editcoa/{id}/{induk}', 'AdminController@editcoa'); 
Route::get('deletecoa/{id}/{induk}', 'AdminController@deletecoa'); 
Route::post('simpanmenu', 'AdminController@simpanmenu'); 

Route::post('updatemenu', 'AdminController@updatemenu'); 
Route::post('updatecoa', 'AdminController@updatecoa'); 
Route::get('deletemenu/{id}/{induk}', 'AdminController@deletemenu'); 

?>