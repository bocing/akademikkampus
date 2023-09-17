<?php 
//echo "string :$tambah";
//dd($menuatas);
//echo "tambah: $tambah";
if ($tambah !=1 ) {
      foreach ($rec as $m) {
        $id = $m->id;

        $dep = $m->iddep;
        $kode = $m->kode;
        $nama = $m->nama;
        $sat  = $m->satid;
        $jen  = $m->jenid;
        $kat  = $m->katid;
        $pem  = $m->pemid;
        $hrgrata=$m->hrgrata;
        $hrgjual=$m->hrgjual;

      }
}else{
        $id = '';
        $kode = '';
        $nama = '';
        $sat  = '';
        $jen  = '';
        $kat  = '';
         
        $pem  = '';
        $hrgrata='';
        $hrgjual='';
       
  }
        $induk = $induk;
 

  
?> 


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$judulutama}}
        <small>{{$judul}}</small>
      </h1>
      <ol class="breadcrumb">
      {{ csrf_field() }}
        <?php $no=1; ?>
        @foreach($menuatas as $m)  
        <li><a href="{{url($m->url)}}/{{$m->id_induk}}"><i class="{{$m->icon}}"></i> {{$m->nama}}</a></li>
         @endforeach()               
          
          
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->
<form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanstok')  ?>">
   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
   <input type="hidden" name="tambah" value={{$tambah}}>
      <input type="hidden" name="induk" value={{$induk}}>
      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
             
            <div class="box-body">
            <div class="form-group">
                @php if ($tambah !=1)  { @endphp
                <b>Kode Barang</b>            
                      <input type="text" readonly="true" name="kode" style="width:60%;"   value="{{ isset($kode) ? $kode : '' }}"  class="form-control"> 
                     
                @php  } @endphp

                @php if ($tambah ==1)  { @endphp
                <b>Kode Barang</b>            
                      <input type="text"   name="kode" style="width:60%;"   value="{{ isset($kode) ? $kode : '' }}"  class="form-control"> 
                      
                @php  } @endphp
            </div>
                               
            <div class="form-group">
              <b>Nama Barang</b>            
                  <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}"  class="form-control"> 
            </div>
              <div class="form-group">    
              <b>Harga Jual</b>           
                  <input type="text" name="hrgjual"  value="{{ isset($hrgjual) ? $hrgjual : '' }}"  class="form-control"> 
               </div> 

            <div class="form-group">
              <b>Tarif Mekanik</b>[Isi Jika Yang Diinput Jasa]          
                  <input type="text" name="hrgrata"  value="{{ isset($hrgrata) ? $hrgrata : '' }}"  class="form-control"> 
            </div>      
                            

           <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">

                                   

                                     
                                  <button type="submit" name="Simpan" class="btn btn-success" >
                                              <i class="ace-icon fa fa-download bigger-110 blue"></i>
                                              Simpan
                                            </button>
                                </div>
                     </div>   

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
             
            <div class="box-body">
              
                             <!-- Input Sebelah Kanan-->
                             <div class="form-group">
                                <label>satuan</label>
                                <select name="sat" id="sat" class="form-control select2" style="width: 100%;">
                                 <?php
                                   //$menuden = \App\Role::where('id','!=',5)->get();                   
                                    $menuden=DB::table('sat')              
                                      ->select('sat.*')                                                                        
                                      ->get();
 
                                   foreach($menuden as $rows){
                                    if( $sat == $rows->id ){ 
                                        echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                                    }
                                    }
                                    ?> 
                                </select>
                              </div>  
                              <div class="form-group">
                                <label>Jenis</label>
                                <select name="sat" id="jen" class="form-control select2" style="width: 100%;">
                                 <?php
                                   //$menuden = \App\Role::where('id','!=',5)->get();                   
                                    $menuden=DB::table('jenis')              
                                      ->select('jenis.*')                                                                        
                                      ->get();
 
                                   foreach($menuden as $rows){
                                    if( $jen == $rows->id ){ 
                                        echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                                    }
                                    }
                                    ?> 
                                </select>
                              </div>
                               

                              <div class="form-group">
                                <label>Kategori</label>
                                <select name="kat" id="kat" class="form-control select2" style="width: 100%;">
                                 <?php
                                   //$menuden = \App\Role::where('id','!=',5)->get();                   
                                    $menuden=DB::table('kate')              
                                      ->select('kate.*')                                                                        
                                      ->get();
 
                                   foreach($menuden as $rows){
                                    if( $kat == $rows->id ){ 
                                        echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                                    }
                                    }
                                    ?> 
                                </select>
                              </div>
                               
                              <div class="form-group">
                                <label>Pemasok Utama</label>
                                <select name="pem" id="pem" class="form-control select2" style="width: 100%;">
                                 <?php
                                   //$menuden = \App\Role::where('id','!=',5)->get();                   
                                    $menuden=DB::table('pem')              
                                      ->select('pem.*')                                                                        
                                      ->get();
 
                                   foreach($menuden as $rows){
                                    if( $pem == $rows->id ){ 
                                        echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                                    }
                                    }
                                    ?> 
                                </select>
                              </div>
                              <br/>
                              <div class="form-group">
                               Upload Foto
                                  <input type="file" name="file[]" multiple=""> </br>
                              </div>

                
           
            </div>
            
          </div>
         
        </div>
         
      </div>
</form>       

    </section>
     
  </div>

<div class="form-group">                 
  
</div>  






 