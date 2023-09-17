<?php

Route::get('/', 'HomeController@home'); 
Route::get('/daftarpmb', 'HomeController@daftarpmb'); 


Route::get('home', 'AdminController@adminyes'); 

Route::get('seting/{id}', 'AdminController@formsetting'); 


Route::get('rule/{id}', 'AdminController@indexrule'); 
Route::get('tendikpmb', 'AdminController@Adminyes');
Route::post('telusuri', 'HomeController@telusuri'); 
Route::post('telusuriok', 'HomeController@telusuriok'); 

Route::post('uploadbuktibayar', 'HomeController@uploadbuktibayar'); 
Route::post('uploadbuktibayarok', 'HomeController@uploadbuktibayarok'); 

Route::get('rincibeli/{id}', 'AdminController@flrrincibeli'); 
Route::get('role/{id}', 'AdminController@indexrole'); 
Route::get('tahun/{id}', 'AdminController@indextahun'); 
Route::get('kirimrole', 'AdminController@kirimrole');
Route::post('simpanrole', 'AdminController@simpanrole');
Route::post('simpansiswa', 'AdminController@simpansiswa');
Route::post('simpancalonsiswa', 'HomeController@simpancalonsiswa');
Route::post('simpancalonsiswaok', 'HomeController@simpancalonsiswaok');

Route::post('simpanrule', 'AdminController@simpanrule'); 
Route::post('simpantahun', 'AdminController@simpantahun'); 
Route::post('crud/deleterole', 'AdminController@deleterole');
Route::get('crud/viewrole', 'AdminController@viewrole');
Route::post('crud/updaterole', 'AdminController@updaterole');
Route::post('simpandaftarpmb', 'HomeController@simpandaftarpmb');

Route::post('simpandaftarpmbok', 'HomeController@simpandaftarpmbok');



Route::get('ruledep/{id}', 'AdminController@indexruledep');  
Route::get('kirimruledep', 'AdminController@kirimruledep'); 
Route::post('simpanruledep', 'AdminController@simpanruledep'); 

Route::get('kuri/{id}', 'AdminController@indexkur');
Route::post('carimapelperkuri/{id}', 'AdminController@carimapelperkuri');
Route::post('sikur', 'AdminController@sikur');
Route::get('crud/viewkur', 'AdminController@viewkur');
Route::post('crud/deletekur', 'AdminController@deletekur');
Route::post('upkur', 'AdminController@updatekur');
Route::get('deletemapel/{id}/{induk}', 'AdminController@deletemapel');
Route::get('editmapel/{id}/{induk}', 'AdminController@editmapel'); 
Route::get('editguru/{id}/{induk}', 'AdminController@editguru'); 

Route::get('formguru/{induk}', 'AdminController@formguru');

Route::get('jur/{id}', 'AdminController@indexjur');
Route::get('fakultas/{id}', 'AdminController@indexfak');

Route::get('lihatbayar/{nopen}/{induk}', 'AdminController@indexlihatbayar');
Route::post('sijur', 'AdminController@sijur');
Route::post('sifak', 'AdminController@sifak');

Route::get('crud/viewjur', 'AdminController@viewjur');
Route::get('crud/viewfak', 'AdminController@viewfak');

Route::get('crud/viewsiswa', 'AdminController@viewsiswa');

Route::get('crud/viewcalonsiswa', 'AdminController@viewcalonsiswa');

Route::post('crud/deletejur', 'AdminController@deletejur');
Route::post('upjur', 'AdminController@updatejur');
Route::post('upfak', 'AdminController@updatefak');

Route::get('edituser/{id}/{induk}', 'AdminController@edituser');
Route::get('editjadwal/{id}/{induk}/{idprodi}', 'AdminController@editjadwal');

Route::get('kelas/{id}', 'AdminController@indexkelas');
Route::get('jadwal/{id}', 'AdminController@indexjadwal');

Route::get('krs/{id}', 'AdminController@indexkrs');
Route::post('carijadwalkelas', 'AdminController@carijadwalkelas'); 
Route::post('carikrs', 'AdminController@carikrs'); 

Route::get('crud/viewkelas', 'AdminController@viewkelas');
Route::get('editkelas/{id}/{induk}', 'AdminController@editkelas');
Route::get('editkel/{id}/{induk}', 'AdminController@editkel');
Route::post('crud/deletekelas', 'AdminController@deletekelas');
Route::post('upkelas', 'AdminController@updatekelas');
Route::get('cetaksiswaperkelas/{idkelas}',array('as'=>'cekel','uses'=>'AdminController@cekel'));


Route::get('cetakwebkrs/{idtahun}/{idsiswa}',array('as'=>'cekel','uses'=>'AdminController@cetakwebkrs'));
Route::get('cetakpdfkrs/{idtahun}/{idsiswa}',array('as'=>'cekel','uses'=>'AdminController@cetakpdfkrs'));
Route::get('cetakpdfkrs/{idtahun}/{idsiswa}/{download}',array('as'=>'cekel','uses'=>'AdminController@cetakpdfkrs'));

Route::get('previewsiswaperkelas/{idkelas}',array('as'=>'cekel','uses'=>'AdminController@cekelp'));


Route::get('previewrangking/{idkelas}',array('as'=>'rangkin','uses'=>'AdminController@rangking'));
Route::get('previewledger/{idkelas}','AdminController@celedger');
Route::get('rangking/{idkelas}','AdminController@indexrangking');


Route::get('mades/{induk}', 'AdminController@formmades'); 
Route::get('dessikapok/{induk}', 'AdminController@formmadessikap'); 
Route::get('kel/{id}', 'AdminController@indexkel');
Route::get('crud/viewkel/{id}', 'AdminController@viewkel');
Route::post('crud/deletekel', 'AdminController@deletekel');
Route::post('upkel', 'AdminController@updatekel');
Route::post('simpankel', 'AdminController@simpankel');
Route::post('simpanverbay', 'AdminController@simpanverbay');

Route::post('simpanjadwal', 'AdminController@simpanjadwal');


Route::get('mata/{id}', 'AdminController@indexmata');
Route::get('crud/viewmata', 'AdminController@viewmata');



Route::post('crud/deletemata', 'AdminController@deletemata');
Route::get('editmata/{id}/{induk}', 'AdminController@editmata');
Route::post('simpanmata', 'AdminController@simpanmata');
Route::post('simpaneditmata', 'AdminController@simpaneditmata');
Route::post('simpaneditjadwal', 'AdminController@simpaneditjadwal');


Route::get('dosen/{id}', 'AdminController@indexguru');
Route::get('profdosen/{id}/{induk}', 'AdminController@profdosen');

Route::get('siswa/{id}', 'AdminController@indexsiswa');
Route::get('calonmasiswa/{id}', 'AdminController@indexcalonsiswa');

Route::get('crud/viewguru', 'AdminController@viewguru');
Route::post('crud/deleteguru', 'AdminController@deleteguru');
Route::post('upmata', 'AdminController@updateguru');
Route::get('formmata/{induk}', 'AdminController@formmata');
Route::post('simpanguru', 'AdminController@simpanguru');


Route::get('ruang/{id}', 'AdminController@indexruang');
Route::get('copykelas/{id}', 'AdminController@copykelas');


Route::get('gen/{id}', 'AdminController@gennim');

Route::post('siruang', 'AdminController@siruang');
Route::post('simpankelas', 'AdminController@simpankelas');

Route::post('simpaneditkelas', 'AdminController@simpaneditkelas');
Route::post('simpaneditkel', 'AdminController@simpaneditkel');
Route::get('crud/viewruang', 'AdminController@viewruang');
Route::post('crud/deleteruang', 'AdminController@deleteruang');
Route::post('upruang', 'AdminController@updateruang');


//---------------Enrol--------------------------------

Route::get('enrol/{induk}', 'AdminController@indexmasterenrol');
Route::get('formenroll/{idkelas}/{induk}', 'AdminController@formenroll');
Route::get('formmapel/{idkelas}/{induk}', 'AdminController@formmapel');
Route::post('simpansiswakekelas', 'AdminController@simpansiswakekelas');
Route::get('deletesiswadalamkelas/{idsiswa}/{induk}', 'AdminController@deletesiswadalamkelas');
Route::get('hapusmakulkrs/{id}/{induk}', 'AdminController@hapusmakulkrs');

Route::get('asis/{induk}', 'AdminController@indexabsen');  
Route::get('nilsikap/{induk}', 'AdminController@indexnilaisikap'); 
Route::get('nilpsg/{induk}', 'AdminController@indexnilaipsg'); 
Route::get('nilaieks/{induk}', 'AdminController@indexnilaieks'); 
Route::get('ledger/{induk}', 'AdminController@indexledger'); 
Route::get('prestasi/{induk}', 'AdminController@indexnilaipres'); 

Route::get('nilakhir/{induk}', 'AdminController@indexnilaiakhir'); 
Route::get('nilkb/{induk}', 'AdminController@formnilaikb'); 
Route::post('simpanmades/{induk}', 'AdminController@simpanmades'); 
Route::get('inputnilaiakhir/{idjadwal}/{induk}', 'AdminController@inputnilaiakhir'); 
//Route::get('inputnilaisikap/{idkelas}/{induk}', 'AdminController@formnilaisikap'); 
Route::post('simpannilaiakhir/{idjadwal}/{induk}', 'AdminController@simpannilaiakhir'); 
Route::post('simpannilaisikap/{idkelas}/{induk}', 'AdminController@simpannilaisikap'); 
Route::post('simpanabsensiswa/{idkelas}/{induk}', 'AdminController@simpanabsensiswa'); 

Route::post('simpannilaipsg/{idkelas}/{induk}', 'AdminController@simpannilaipsg'); 
Route::post('simpannilaieks/{idkelas}/{induk}', 'AdminController@simpannilaieks'); 
Route::post('simpannilaipres/{idkelas}/{induk}', 'AdminController@simpannilaipres'); 
Route::post('simpannilaikb/{induk}', 'AdminController@simpannilaikb'); 
Route::post('carinamasiswasikap/{induk}', 'AdminController@carinamasiswasikap'); 
Route::post('carinamasiswaabsen/{induk}', 'AdminController@carinamasiswaabsen'); 
Route::post('carinamasiswapsg/{induk}', 'AdminController@carinamasiswapsg'); 
Route::post('carinamasiswaeks/{induk}', 'AdminController@carinamasiswaeks'); 
Route::post('carinamasiswapres/{induk}', 'AdminController@carinamasiswapres'); 
Route::get('carijadwalkelas/{induk}', 'AdminController@carijadwalkelas'); 
 
Route::post('carijadwalkelasakhir/{induk}', 'AdminController@carijadwalkelasakhir'); 

Route::get('cetaksampul1/{idkelas}/{induk}', 'AdminController@cetaksampul1'); 
Route::get('cetaksampul11/{idkelas}/{induk}', 'AdminController@cetaksampul11'); 
Route::get('sampul1/{induk}', 'AdminController@indexsampul1'); 
Route::post('carinamasiswsampul1/{induk}', 'AdminController@carinamasiswasampul1'); 


Route::get('cetaksampul2/{idkelas}/{induk}', 'AdminController@cetaksampul2'); 
Route::get('cetaksampul22/{idkelas}/{induk}', 'AdminController@cetaksampul22'); 
Route::get('sampul2/{induk}', 'AdminController@indexsampul2'); 
Route::post('carinamasiswsampul2/{induk}', 'AdminController@carinamasiswasampul2'); 



Route::get('cetakbiodata/{idkelas}/{induk}', 'AdminController@cetakbiodata'); 
Route::get('cetakbiodata2/{idkelas}/{induk}', 'AdminController@cetakbiodata2'); 
Route::get('biodata/{induk}', 'AdminController@indexbiodata'); 
Route::post('carinamasiswsabiodata/{induk}', 'AdminController@carinamasiswsabiodata'); 


Route::get('cetaknilai/{idkelas}/{induk}/{idtahun}', 'AdminController@cetaknilai'); 
//Route::get('cetakbiodata2/{idkelas}/{induk}', 'AdminController@cetaknilai2'); 
Route::get('nilai/{induk}', 'AdminController@indexnilai'); 
Route::post('carinamasiswanilai/{induk}', 'AdminController@carinamasiswanilai'); 






Route::get('caripel', 'AdminController@caripel');
Route::get('editbeli/{nobel}/{induk}', 'AdminController@editbeli');
Route::get('carimek', 'AdminController@carimek'); 
Route::get('caribarang', 'AdminController@caribarang');
Route::get('deletejualdetil/caribarang', 'AdminController@caribarang');

//Route::get('formjual', 'AdminController@formjual');

Route::get('formbeli/{induk}', 'AdminController@formbeli');
Route::post('carisiswaperkelas/{induk}', 'AdminController@carisiswaperkelas');

Route::post('savebeli', 'AdminController@savebeli');
Route::post('simpanum', 'AdminController@simpanum');
Route::get('editstok/{id}', 'AdminController@editstok'); 

Route::get('deletebelidetil/{id}/{induk}', 'AdminController@deletebelidetil');
Route::post('simpanstok', 'AdminController@simpanstok');
Route::get('cefak/{nobel}',array('as'=>'cefak','uses'=>'AdminController@cefak'));




Route::post('simpanpel', 'AdminController@simpanpel');
Route::get('crud/viewpel', 'AdminController@viewpel');
Route::post('crud/deletepel', 'AdminController@deletepel');
Route::post('updatepel', 'AdminController@updatepel');


Route::get('user/{id}', 'AdminController@indexuser');
Route::post('simpanuser', 'AdminController@simpanuser');
Route::post('simpanguru', 'AdminController@simpanguru');


Route::get('dep/{id}', 'AdminController@indexdep');
Route::post('simpandep', 'AdminController@simpandep');
Route::get('crud/viewdep', 'AdminController@viewdep');
Route::post('crud/deletedep', 'AdminController@deletedep');
Route::post('updatedep', 'AdminController@updatedep');


Route::get('stok/{induk}', 'AdminController@indexstok');
Route::get('stokfo/{induk}', 'AdminController@indexstokfo');
Route::get('formbarang/{induk}', 'AdminController@formbarang');
Route::post('crud/deletestok', 'AdminController@deletestok');
Route::get('crud/caribarang', 'AdminController@caribarang');
Route::post('simpanstok', 'AdminController@simpanstok');
Route::get('editstok/{id}/{induk}', 'AdminController@editstok');



//---------------Devisi--------------------------------

Route::get('dev', 'DevisiController@indexdev');
Route::get('devisi/{induk}', 'DevisiController@indexdev');
Route::get('departemen/{induk}', 'AdminController@Adminyes');
Route::get('caridev', 'DevisiController@caridev');
Route::get('crud/viewdev', 'DevisiController@view');
 
Route::get('crud/viewmobil', 'MasterController@viewmobil');
Route::get('crud/viewpel', 'MasterController@viewpel');
Route::get('crud/viewuser', 'MasterController@viewuser');
Route::post('crud/updatedev', 'DevisiController@update');
Route::post('crud/updatesiswa', 'AdminController@updatesiswa');
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



//---------------Beli--------------------------------

Route::get('beli/{induk}', 'AdminController@indexmasterbeli');
 
Route::get('caripel', 'AdminController@caripel');
Route::get('editbeli/{nobel}/{induk}', 'AdminController@editbeli');
Route::get('carimek', 'AdminController@carimek'); 
Route::get('caribarang', 'AdminController@caribarang');
Route::get('deletejualdetil/caribarang', 'AdminController@caribarang');
//Route::get('formjual', 'AdminController@formjual');

Route::get('formbeli/{induk}', 'AdminController@formbeli');
Route::post('savebeli', 'AdminController@savebeli');
Route::post('simpanum', 'AdminController@simpanum');
Route::get('editstok/{id}', 'AdminController@editstok'); 
Route::get('deletebelidetil/{id}/{induk}', 'AdminController@deletebelidetil');
Route::post('simpanstok', 'AdminController@simpanstok');
Route::get('cefak/{nobel}',array('as'=>'cefak','uses'=>'AdminController@cefak'));

//----------------lap jual ---------------------------------
Route::get('rinjual/{induk}', 'AdminController@flrincijual');
Route::post('celaprinjul',array('as'=>'celaprinjul','tgl1','tgl2','uses'=>'AdminController@celaprinjul'));

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
Route::post('crud/deletekate', 'AdminController@deletekate');
Route::post('simpankate', 'AdminController@simpankate');
Route::post('generatenim', 'AdminController@generatenim');
 
//---------------End Kateogir--------------------------------



Route::get('tambahiklan', 'HomeController@tambahiklan');
Route::get('admin', 'AdminController@admin');
Route::get('pilihkate/{idkate}', 'HomeController@tampilgroup');
Route::get('pilihsubkate/{idsubkate}/{idkate}', 'HomeController@tampilsubkate');
Route::get('login','LoginController@getLogin');

Route::get('logout', function(){
    Auth::logout();
  
     $toko=DB::table('toko')                                             
                      ->select('toko.*')                      
                      ->first();
       return view('tokologin')
           ->with('toko',$toko)
           ->with('pesan','')
    ;
       
});


Route::post('simpaniklan','HomeController@simpaniklan'); 
Route::post('postLogin','LoginController@postLogin');
//Route::get('postLogin','LoginController@postLogin');

 



Route::get('menu/{id}', 'AdminController@menuyes'); 
Route::get('carimenu', 'AdminController@carimenu'); 
Route::get('editmenu/{id}/{induk}', 'AdminController@editmenu'); 

Route::post('simpanmenu', 'AdminController@simpanmenu'); 
Route::post('updatemenu', 'AdminController@updatemenu'); 
Route::get('deletemenu/{id}/{induk}', 'AdminController@deletemenu'); 

?>