<?php 
//echo "string :$tambah";
//dd($menuatas);
//echo "tambah: $tambah";
if ($tambah !=1 ) {
      //foreach ($rec as $m) {
        $id = $rec->id;

        $idruang = $rec->ruangid;
        $idwali = $rec->guruid;
        $idkelas = $rec->kelasid;
        $idhari  = $rec->hariid;
        $idmapel  = $rec->mapelid;
        $jammulai  = $rec->jammulai;
        $jamselesai  = $rec->jamselesai;
         
 
     // }
}else{
       
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
<form method="post" enctype="multipart/form-data" action="<?=URL::to('simpaneditjadwal')  ?>">
   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
   <input type="hidden" name="tambah" value={{$tambah}}>
      <input type="hidden" name="induk" value={{$induk}}>
      <input type="hidden" name="id" value={{$id}}>
      <input type="hidden" name="idprodi" value={{$idprodi}}>

      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
             
            <div class="box-body">                

                      <div class="form-group">
                          <div class="form-group">                 
                                <label>Hari</label>
                                <select name="idhari" id="idhari" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('hari')              
                                  ->select('hari.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idhari == $key->hariid ){ 
                                      echo "<option selected = 'selected' value='".$key->hariid."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->hariid."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div> 
           
             
               <div class="form-group">                 
                                <label>Kelas</label>
                                <select name="idkelas" id="idkelas" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('kelas')              
                                  ->select('kelas.*') 
                                  ->where('kelas.id','=',$idkelas)                                   
                                  ->get();                                  
                                 ?>

                                 @foreach ($menuden as $key)
                                   <?php
                                    if( $idkelas == $key->id ){ 
                                        echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$key->id."'>".$key->nama."</option>";
                                    }
                                    ?>
                                 @endforeach()
                                </select>
                </div>  

                <div class="form-group">                 
                                <label>Mata Kuliah</label>
                                <select name="idmapel" id="idmapel" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('mapel')              
                                  ->select('mapel.*')                                    
                                  //->where('mapel.idjur','=',$)                                   
                                  ->get();                                  
                                 ?>

                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idmapel == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->kode."-".$key->nama."</option>";
                                  } else{ 
                                      //echo "<option value='".$key->id."'>".$key->nama."</option>";
                                      echo "<option value='".$key->id."'>".$key->kode."-".$key->nama."</option>";
                                  }
                                  ?>                                  
                                 @endforeach()
                                </select>
                
                </div>  
              <div class="form-group">                 
                                <label>Nama Dosen  </label>
                                <select name="idguru" id="idguru" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('guru')              
                                  ->select('guru.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idwali == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div>    

                <div class="form-group">                 
                                <label>Ruang</label>
                                <select name="idruang" id="idruang" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('ruang')              
                                  ->select('ruang.*')                                    
                                  ->get();
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idruang == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div>   
                 <div class="form-group">
                 <b>Jam Mulai </b>           
                  <input type="text" id="jammulai" name="jammulai"  required data-validation-required-message="Please enter your name."  value="{{ isset($jammulai) ? $jammulai : ''}}"  class="form-control"><br/>
                                  
              </div>
               <div class="form-group">
                 <b>Jam Selesai </b>           
                  <input type="text" id="jamselesai" name="jamselesai"  required data-validation-required-message="Please enter your name." value="{{ isset($jamselesai) ? $jamselesai : ''}}"   class="form-control"><br/>
                                  
              </div>


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
                             
                
           
            </div>
            
          </div>
         
        </div>
         
      </div>
</form>       

    </section>
       
  </div>

<div class="form-group">                 
  
</div>  






 