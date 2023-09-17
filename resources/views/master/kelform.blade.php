<?php 
//echo "string :$tambah";
//dd($menuatas);
//echo "tambah: $tambah";
if ($tambah !=1 ) {
      foreach ($rec as $m) {
        $id = $m->kelid;
        $kode = $m->kode;
        $nama = $m->nama;
      

      }
}else{
        $id = '';
        $kode = '';
        $nama = '';
        
         
       
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
<form method="post" enctype="multipart/form-data" action="<?=URL::to('simpaneditkel')  ?>">
   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
   <input type="hidden" name="tambah" value={{$tambah}}>
      <input type="hidden" name="induk" value={{$induk}}>
      <input type="hidden" name="id" value={{$id}}>
      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
             
            <div class="box-body">
            <div class="form-group">
                
                <b>Kode </b>            
                      <input type="text"   name="kode" style="width:60%;"   value="{{ isset($kode) ? $kode : '' }}"  class="form-control"> 
                      
 
            </div>
                               
            <div class="form-group">
              <b>Nama </b>            
                  <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}"  class="form-control"> 
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






 