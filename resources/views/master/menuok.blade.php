    
<style>
table {
    border-collapse: collapse;
    
    margin-left:5%; 
    margin-right:5%; 
    border: 20px;
    border-color: red;
      padding: 5px;
     
}
  
tr {
  padding:0px;
}
tr:nth-child(even){background-color:#F2F2F2}

th {
    background-color: #FF8000 ;
    color: white;
}
</style>              
<!-- page content -->
<?php
      $induk = $induk;
      $url = '';
      $nama = '';
      $icon = '';
      $urut = '';
?> 

 
  <!-- Left side column. contains the logo and sidebar -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('include.menuatasadmin')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->

      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Daftar Menu</h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
             <table>
                                    <tr>
                                      <th width="250">Nama</th>
                                      <th width="100">Edit</th>
                                       <th width="100">Hapus</th>
                                     </tr>
                                     <?php 
                                     $menu_0 = \App\Menu::where('id_induk',0)->orderby('urut')->get();
                                     foreach ($menu_0 as $key) {
                                          $menu = \App\Menu::where('id_induk',$key->id)->get();
                                          $parent = \App\Menu::where('id',$key->id)->first();
                                          ?>
                                          <tr>
                                            <td><i class="{{$parent->icon}}"></i> {{$parent->nama}}</td>
                                            <td>
                                              <i class="ace-icon fa fa-pencil bigger-130"></i> 
                                             <a class="green" href="{{url('/editmenu/'.$parent->id.'/'.$induk)}}">Edit 
                                            </td>
                                            <td>  
                                               <a href="{{ URL::asset('/deletemenu/'.$parent->id.'/'.$induk) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red">
                                              <i class="ace-icon fa fa-trash-o bigger-130"></i>  Hapus
                                              </a>  
                                             </td> 
                                             <?php 
                                             foreach ($menu as $key2) {
                                              $parent222 = \App\Menu::where('id',$key2->id)->first();
                                              ?>
                                              <tr>             
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="{{$parent222->icon}}">
                                                 {{$parent222->nama}}</td>
                                                  <td> 
                                              <i class="ace-icon fa fa-pencil bigger-130"></i> 
      <a class="green" href="{{url('/editmenu/'.$parent222->id.'/'.$induk)}}">Edit 
                                              </a>
                                            </td>
                                            <td>  
                                               <a href="{{ URL::asset('/deletemenu/'.$parent222->id.'/'.$induk) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red">
                                              <i class="ace-icon fa fa-trash-o bigger-130"></i>  Hapus
                                              </a>  
                                             </td> 
                                                 
                                              </tr>
                                              <?php } ?> 
                                          

                                          </tr>
                                        <?php } ?>                                           
                            </table> 
              

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Input Menu</h3>
            </div>
            <div class="box-body">
              
               <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanmenu')  ?>">
                     <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <div class="form-group">                 
                  <label>Induk</label>
                  <select name="induk"  class="form-control select2" style="width: 100%;">                
                  <?php
                   $menuden = \App\Menu::where('id_induk',0)->get();                   
                   ?>
                   @foreach ($menuden as $key)                                                    
                    <option value="{{$key->id}}">{{$key->nama}}</option>
                   @endforeach()    

                  </select>
                </div>
              
 
                <div class="form-group">
               <b>Nama Menu</b>           
                    <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"> 
                </div>                                        
               
               <div class="form-group">
                <b>URL</b>           
                    <input type="text" name="url"  value="{{ isset($url) ? $url : '-' }}" required data-validation-required-message="Please enter your name." class="form-control">            
                </div>                                        
                    
                <div class="form-group">
                <b>Icon</b>           
                    <input type="text" name="icon"  value="{{ isset($icon) ? $icon : '-' }}" required data-validation-required-message="Please enter your name." class="form-control">            
                    </div>  
                <div class="form-group">
                <b>Urutan</b>           
                    <input type="text" name="urut"  value="{{ isset($urut) ? $urut : '' }}"   class="form-control"> 
                  </div>      

                
               <button type="submit" name="Simpan" class="btn btn-success" >
                            <i class="ace-icon fa fa-download bigger-110 blue"></i>
                            Simpan
               </button>
           
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>


