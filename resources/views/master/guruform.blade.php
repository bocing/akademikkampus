<?php 
//echo "string :$tambah";
//dd($menuatas);
//echo "tambah: $tambah";
if ($tambah !=1 ) {
      foreach ($rec as $m) {
        $id = $m->id;
        $nip = $m->nip;
        $nama = $m->nama;
        //$rolesid  = $m->rolesid;
        $alamat  = $m->alamat;
        $nohp  = $m->email;
       // $pass  = $m->password;
        $jeka  = $m->jeka;
         

      }
}else{
        $id = '';
        $kode = '';
        $nama = '';
        $waliid  = '';
         
       
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
<form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanuser')  ?>">
   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
   <input type="hidden" name="tambah" value={{$tambah}}>
      <input type="hidden" name="induk" value={{$induk}}>
      <input type="hidden" name="id" value={{$id}}>
      <input type="hidden" name="dari" value='guru'>
      <input type="hidden" name="tambah" value=0>
      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
             
            <div class="box-body">
            <div class="form-group">
               <div class="form-group">
                <b>No HP</b>           
                    <input type="text" id="nohp" name="nohp"  value="{{ isset($nohp) ? $nohp : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
              </div>
              <div class="form-group">
                 <b>NIP </b>[Isi Jika Ada]           
                  <input type="text" name="nip"  value="{{ isset($nip) ? $nip : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>
              <div class="form-group">
                 <b>Nama </b>           
                  <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>
               <div class="form-group">
                   <b>Password</b>           
                    <input type="text" name="pass"  value="{{ isset($pass) ? $pass : '' }}"   class="form-control"><br/>       
                                      
              </div>
              <div class="form-group">
                   <b>Alamat</b>           
                    <input type="text" name="alamat"  value="{{ isset($alamat) ? $alamat : '' }}"    class="form-control"><br/>       
                                      
              </div>
              <div class="form-group">
                   <b>Jenis Kelamin</b>[L/P]           
                    <input type="text" name="jeka"  value="{{ isset($jeka) ? $jeka : '' }}"    class="form-control"><br/>                                             
              </div>
               
              


               <div class="form-group">
                <b>Foto</b><br/>
                <input type="file" name="file[]" multiple=""> </br>  
              </div>  
               
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






 