
<?php $idwali=0;
 foreach($menuatas as $m)  {
  $url=$m->url;


 }
   $induk=$induk;
   $idjur=0;

 ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
       @include('include.menuatasadmin')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <!--
          <div class="box">
           
            <div class="box-header">
               <div class="col-xs-4 text-left">
                    <b>Operation Panel</b>
                  </div>
                  <div class="col-xs-4 text-center">
                     
                  </div>
                  <div class="col-xs-1 text-right" >
                     
                  </div>
                   <div class="col-xs-1 text-right" >
                    
                  </div>
                   <div class="col-xs-1 text-right" >
                    
                  </div>
                   <div class="col-xs-1 text-right" >
                    <a data-toggle="modal" data-target="#addModal"><button type="button" class="btn btn-block btn-warning btn-sm">Tambah</button></a>
                  </div>

            </div>
            -->
            <!-- /.box-header -->
            
            <!-- /.box-body 
          </div>

          <!-- /.box -->

          <div class="box">
             
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th>No</th> 
                         
                           <th>Kode</th>
                           <th>Nama </th>
                           <th>Jurusan </th>
                           
                           <th>Kapasitas</th>
                           <th>Aksi</th>     
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                        <?php $no=1; ?>
                        @foreach($data as $abc)  

                        <tr>
                          <td>{{$no++}}</td>       
                          <td>{{$abc->kode}}</td>
                          <td>{{$abc->nama}}</td>
                          <td>{{$abc->najur}}</td>
                         
                           <td>{{$abc->kapasitas}}</td>
                           <td>
                       <div class="hidden-sm hidden-xs action-buttons">
                          
                           &nbsp;&nbsp;
                           <a href="{{url('editkelas')}}/{{$abc->id}}/{{$induk}}"> <i class="ace-icon fa fa-pencil bigger-130"></i></a>
                          
                          
                        </div>          
                    </td>
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


  <input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewkelas')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletekelas')}}">  
  <input type="hidden" name="id_induk">
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Kelas</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('simpankelas') }}" method="post">
          <input type="hidden" name="tambah" value=1>
          <input type="hidden" name="induk" value={{$induk}}>
            {{ csrf_field() }}
            <div class="form-group">
               
              <div class="form-group">
                <label for="last_name">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode">
              </div>

              <div class="form-group">
                <label for="last_name">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">                 
                                <label>Jurusan</label>
                                <select name="idjur" id="idjur" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('jurusan')              
                                  ->select('jurusan.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idjur == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div>  
                
                <div class="form-group">
                <label for="last_name">Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas">
              </div>
               
            </div>
            
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
          <h4 class="modal-title">Edit Kelas</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('upkelas') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              
              <div class="form-group">
                <label for="edit_last_name">Kode </label>
                <input type="text" class="form-control" id="edit_kode" name="edit_kode">
              </div>            

              <div class="form-group">
                <label for="edit_last_name">Nama Kelas</label>
                <input type="text" class="form-control" id="edit_nama" name="edit_nama">
              </div>  

           
                <div class="form-group">
                <label for="last_name">Kapasitas</label>
                <input type="text" class="form-control" id="edit_kapasitas" name="edit_kapasitas">
              </div>

            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <input type="hidden" id="edit_id" name="edit_id">
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
      $.ajax({
        url: view_url,
        type:"GET", 
        data: {"id":id}, 
        success: function(result){
          //console.log(result);
          $("#edit_id").val(result.id);           
          $("#edit_kode").val(result.kode);
          $("#edit_nama").val(result.nama);
          $("#edit_waliid").val(result.waliid);
          $("#edit_kapasitas").val(result.kapasitas);
         
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





















 





 