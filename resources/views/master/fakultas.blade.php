<?php  ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
       @include('include.menuatasadmin')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
       
          <div class="box">
             
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                     <th>No</th>
                     <th>Kode</th>
                     <th>Nama</th>        
                     <th>Aksi</th>        
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                     <?php $nou=1; ?>
                     @foreach($data as $abc) 
               

                    <tr>
                     <td>{{$nou++}}</td>
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


<input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewfak')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletejur')}}">  
  

  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Fakultas</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('sifak')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                 <input type="hidden" name="induk" value="{{$induk}}">
                
           
         
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
          <h4 class="modal-title">Edit Fakultas</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('upfak')  ?>">
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









