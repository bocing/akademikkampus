
<?php  ?>
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
                           <td>
                       <div class="hidden-sm hidden-xs action-buttons">
                          <a  href="<?php echo '' ?>" data-toggle="modal" data-target="#addModal" onclick="fun_add('{{$abc->id}}')">
                            <i class="glyphicon glyphicon-plus"></i>
                          </a>  
                           &nbsp;&nbsp;
                          <a  href="<?php echo '' ?>" data-toggle="modal" data-target="#editModal" onclick="fun_edit('{{$abc->id}}')">
                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                          </a> 
                          &nbsp;&nbsp;
                          <a class="red" href="{{$abc -> id}}')"  onclick="fun_delete('{{$abc -> id}}')" >
                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                          </a>
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


  <input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewruang')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deleteruang')}}">  
  <input type="hidden" name="id_induk">
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Ruang</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('siruang') }}" method="post">
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
          <h4 class="modal-title">Edit Ruang</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('upruang') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              
              <div class="form-group">
                <label for="edit_last_name">Kode </label>
                <input type="text" class="form-control" id="edit_kode" name="edit_kode">
              </div>            

              <div class="form-group">
                <label for="edit_last_name">Nama Ruang</label>
                <input type="text" class="form-control" id="edit_nama" name="edit_nama">
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





















 





 