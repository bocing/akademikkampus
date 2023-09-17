@include('include.atur')
<?php
                   
//dd($hak);
?>
<div class="content-wrapper">
 @include('include.menuatasadmin')

<style type="text/css">
  body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.22857143;
    color: #333;
    background-color: #fff;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 4px;
    line-height: 1.22857143;
    vertical-align: top;
    font-size: 12px;
    border-top: 1px solid #ddd;
}
.content-header>h1 {
    margin-top: 15px;
    padding-top: 0px;
    font-size: 22px;
    padding: 5px 0px 10px;
}
</style>


    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->

          <div class="box">
             
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                          <th>Fakultas</th>
                          <th>Prodi</th>
                                                 
                          <th>Aksi</th>    
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                         <?php $no=1; 
                           $data=DB::table('fakultas')
                             
                            ->get();

                         ?>
                         @foreach($data as $abc) 
                         <?php
                           
                          $qtydc=DB::table('jurusan')
                            ->leftjoin('fakultas', 'fakultas.id', '=', 'jurusan.idfak')
                            ->select('jurusan.*', 'fakultas.nama as nafak','fakultas.kode as kofak','jurusan.nama as najur','jurusan.kode as kojur')
                            ->where('jurusan.idfak',$abc->id)
                            ->get();
                              
                          ?>

                        <tr>
                          <td><b>{{$no++}}</b></td>
                          <td><b>{{$abc->kode}} - {{$abc->nama}}</b></td>
                          <td align="center"> <b></b></td>
                         
                          @foreach($qtydc as $x)
                              <tr>  
                              <td colspan="2">-</td>     
                               <td>{{$x->kojur}} -{{$x->najur}} </td>                 
                              <td align="center">
                                 <a  href="<?php echo '' ?>" data-toggle="modal" data-target="#editModal" onclick="fun_edit('{{$x->id}}')">
                            <i class="ace-icon fa fa-edit bigger-130"></i>
                          </a> 
                              </td>
                           
                              
                              </tr>
                           @endforeach()     
                        </tr>
                    
                  @endforeach() 
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewjur')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletejur')}}">  
  

  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Jurusan</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('sijur')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                 <input type="hidden" name="induk" value="{{$induk}}">
                
             <div class="form-group">               
                        <label>Fakultas</label>
                        <select name="fakultas" id="fakultas" class="form-control select2" style="width: 100%;" >                
                        <?php
                          $menuden=DB::table('fakultas')
                                                                
                         
                          ->get();
                            $idsiswa=0;
                          
                         ?>
                         @foreach ($menuden as $key)
                         <?php
                          if( $idsiswa == $key->id ){ 
                              echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                          } else{ 
                              echo "<option value='".$key->id."'>".$key->nama."</option>";
                          }
                          ?>
                         @endforeach()
                        </select>
             </div>  
         
              <div class="form-group">
                 <b>Kode</b>           
                  <input type="text" name="kode"  value="{{ isset($kode) ? $kode : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>  
              <div class="form-group">
                 <b>Nama Jurusan</b>           
                  <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div> 
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- Edit Modal start -->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Jurusan</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('upjur')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="0">
                 <input type="hidden" name="induk" value="{{$induk}}">
                
            <div class="form-group">
                 
           
              <div class="form-group">
                 <b>Kode </b>           
                  <input type="text" id="edit_kode" name="edit_kode"  required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>

              <div class="form-group">
                 <b>Nama</b>           
                  <input type="text" id="edit_nama" name="edit_nama"  required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>
               
                      
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <input type="hidden" id="id_edit" name="id_edit">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
      
    </div>
  </div>

   <script type="text/javascript">
      function fun_view(id)
      {
        var view_url = $("#hidden_view").val();
        $.ajax({
          url: view_url,
          type:"GET", 
          data: {"id":iddev}, 
          success: function(result){
            //console.log(result);
             
            $("#view_nama").val(result.nadev);
            
          }
        });
      }

    function fun_edit(id)
    {          

      var view_url = $("#hidden_view").val();
      var idsopir;
      $.ajax({
        url: view_url,
        type:"GET", 
        data: {"id":id}, 
        success: function(result){        
          $("#id_edit").val(result.id);
          $("#edit_kode").val(result.kode);
          $("#edit_nama").val(result.nama);
        }
      });
      
    }



    function fun_delete(id)
    {
      var conf = confirm("Are you sure want to delete??");
      if(conf){
        var delete_url = $("#hidden_delete").val();
        $.ajax({
          url: delete_url,
          type:"POST", 
          data: {"id":id,_token: "{{ csrf_token() }}"}, 
          success: function(response){
            alert(response);
            location.reload(); 
          }
        });
      }
      else{
        return false;
      }
    }
  </script>









