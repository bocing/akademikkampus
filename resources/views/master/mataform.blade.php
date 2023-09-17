<?php 
//echo "string :$tambah";
//dd($menuatas);
//echo "tambah: $tambah";
if ($tambah !=1 ) {
      foreach ($rec as $m) {
        $id = $m->id;
        $kode = $m->kode;
        $nama = $m->nama;
        $kelid  = $m->kelid;
        $sem  = $m->sem;
        $tingkat  = $m->tingkat;
        $idkuri  = $m->idkuri;
        $idjur  = $m->idjur;

         

      }
}else{
        $id = '';
        $kode = '';
        $nama = '';
        $kelid  = '';
         $idjur  = '';
         
       
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
<form method="post" enctype="multipart/form-data" action="<?=URL::to('simpaneditmata')  ?>">
   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
   <input type="hidden" name="tambah" value={{$tambah}}>
      <input type="hidden" name="induk" value={{$induk}}>
      <input type="hidden" name="id" value={{$id}}>
      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
             
            <div class="box-body">
               <div class="form-group">
                                <label>Jurusan</label>
                                <select name="idjur" id="idjur" class="form-control select2" style="width: 100%;">
                                 <?php
                                              
                                    $menuden=DB::table('jurusan')              
                                      ->select('jurusan.*')                                                                        
                                      ->get();
 
                                   foreach($menuden as $rows){
                                    if( $idjur == $rows->id ){ 
                                        echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                                    }
                                    }
                                    ?> 
                                </select>
                              </div>   

            <div class="form-group">
                    <label for="last_name">Tingkat</label>
                    <input type="text" class="form-control" id="tingkat" name="tingkat" value="{{ isset($tingkat) ? $tingkat : '' }}"  >ISI dengan [1-3]
                 </div>

                 <div class="form-group">
                    <label for="last_name">Semester</label>
                    <input type="text" class="form-control" id="sem" name="sem" value="{{ isset($sem) ? $sem : '' }}"  >ISI dengan [1 atau 2]
                 </div>
            <div class="form-group">
                @php if ($tambah !=1)  { @endphp
                <b>Kode Mata Pelajaran</b>            
                      <input type="text"   name="kode" style="width:60%;"   value="{{ isset($kode) ? $kode : '' }}"  class="form-control"> 
                     
                @php  } @endphp

                @php if ($tambah ==1)  { @endphp
                <b>Kode Mata Pelajaran</b>            
                      <input type="text"   name="kode" style="width:60%;"   value="{{ isset($kode) ? $kode : '' }}"  class="form-control"> 
                      
                @php  } @endphp
            </div>
                               
            <div class="form-group">
              <b>Nama Mata Pelajaran</b>            
                  <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}"  class="form-control"> 
            </div>
            <div class="form-group">                 
                                <label>Kurikulum</label>
                                <select name="idkuri" id="idkuri" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('kuri')              
                                  ->select('kuri.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idkuri == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div>  
            <div class="form-group">
                                <label>Kelompok</label>
                                <select name="idkel" id="idkel" class="form-control select2" style="width: 100%;">
                                 <?php
                                   //$menuden = \App\Role::where('id','!=',5)->get();                   
                                    $menuden=DB::table('kelompok')              
                                      ->select('kelompok.*')                                                                        
                                      ->get();
 
                                   foreach($menuden as $rows){
                                    if( $kelid == $rows->kelid ){ 
                                        echo "<option selected = 'selected' value='".$rows->kelid."'>".$rows->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$rows->kelid."'>".$rows->nama."</option>";
                                    }
                                    }
                                    ?> 
                                </select>
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
        
         
      </div>
</form>       

    </section>
     
  </div>

<div class="form-group">                 
  
</div>  






 