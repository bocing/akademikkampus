<?php

Route::get('/', 'HomeController@home'); 


Route::get('home', 'AdminController@adminyes'); 

Route::get('rule/{id}', 'AdminController@indexrule'); 
Route::get('rincibeli/{id}', 'AdminController@flrrincibeli'); 
Route::get('role/{id}', 'AdminController@indexrole'); 
Route::get('kirimrole', 'AdminController@kirimrole');
Route::post('simpanrole', 'AdminController@simpanrole');
Route::post('simpanrule', 'AdminController@simpanrule'); 
Route::post('crud/deleterole', 'AdminController@deleterole');
Route::get('crud/viewrole', 'AdminController@viewrole');
Route::post('crud/updaterole', 'AdminController@updaterole');


Route::get('ruledep/{id}', 'AdminController@indexruledep');  
Route::get('kirimruledep', 'AdminController@kirimruledep'); 
Route::post('simpanruledep', 'AdminController@simpanruledep'); 

Route::get('jur/{id}', 'AdminController@indexjur');
Route::post('simpanpel', 'AdminController@simpanpel');
Route::get('crud/viewpel', 'AdminController@viewpel');
Route::post('crud/deletepel', 'AdminController@deletepel');
Route::post('updatepel', 'AdminController@updatepel');


Route::get('user/{id}', 'AdminController@indexuser');
Route::post('simpanuser', 'AdminController@simpanuser');


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

//---------------End Kateogir--------------------------------



Route::get('tambahiklan', 'HomeController@tambahiklan');
Route::get('admin', 'AdminController@admin');
Route::get('pilihkate/{idkate}', 'HomeController@tampilgroup');
Route::get('pilihsubkate/{idsubkate}/{idkate}', 'HomeController@tampilsubkate');
Route::get('login','LoginController@getLogin');

Route::get('logout', function(){
    Auth::logout();
   return view('login.formlogin');
		
       
});


Route::post('simpaniklan','HomeController@simpaniklan'); 
Route::post('postLogin','LoginController@postLogin');
Route::get('postLogin','LoginController@postLogin');

 



Route::get('menu/{id}', 'AdminController@menuyes'); 
Route::get('carimenu', 'AdminController@carimenu'); 
Route::get('editmenu/{id}/{induk}', 'AdminController@editmenu'); 

Route::post('simpanmenu', 'AdminController@simpanmenu'); 
Route::post('updatemenu', 'AdminController@updatemenu'); 
Route::get('deletemenu/{id}/{induk}', 'AdminController@deletemenu'); 

?>