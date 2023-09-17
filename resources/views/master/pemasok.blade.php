<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$judulutama}} <small>{{$judul}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a data-toggle="modal" data-target="#addModal"><i class="fa fa-plus-circle"></i>Tambah</a>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                       
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                            <th>Nama</th>
                            <th>Kontak</th>
                            <th>Telp</th>
                            <th>Pin BB</th>
                            <th>Aksi</th>        
                        </tr>
                      </thead>


                      <tbody>
                        {{ csrf_field() }}
                        <?php $no=1; ?>
                        @foreach($data as $abc)  

                        <tr>
                          <td>{{$no++}}</td>       
                            <td>{{$abc->nama}}</td>
                            <td>{{$abc->kontak}}</td>
                            <td>{{$abc->telp}}</td>
                            <td>{{$abc->pinbb}}</td>
                           <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                               

                              <a  href="<?php echo '' ?>" data-toggle="modal" data-target="#editModal" onclick="fun_edit('{{$abc->id}}')">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                              </a> 
                              &nbsp;&nbsp;
                              <a class="red" href="<?php echo '' ?>"  onclick="fun_delete('{{$abc -> id}}')" >
                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                              </a>
                            </div>           
                          </td>
                        </tr>
                         @endforeach()            
                      </tbody>

                      
                    </table>
                  </div>
                </div>
              </div>

          
         
        </div>
        <!-- /page content -->
   <input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewpem')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletepem')}}">
      
   <!-- Add Modal start -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Record</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('simpanpem') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
               
              <div class="form-group">
                <label for="last_name">Nama Pemasok:</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="last_name">Kontak:</label>
                <input type="text" class="form-control" id="kontak" name="kontak">
              </div>
               <div class="form-group">
                <label for="last_name">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
              <div class="form-group">
                <label for="last_name">Telp:</label>
                <input type="text" class="form-control" id="telp" name="telp">
              </div>
              <div class="form-group">
                <label for="last_name">Pin BB:</label>
                <input type="text" class="form-control" id="pin" name="pin">
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
  <!-- add code ends -->

  <!-- View Modal start -->
  <div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Kelas</h4>
        </div>
        <div class="form-group">
                <label for="last_name">Nama Pemasok:</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="last_name">Kontak:</label>
                <input type="text" class="form-control" id="kontak" name="kontak">
              </div>
               <div class="form-group">
                <label for="last_name">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
              <div class="form-group">
                <label for="last_name">Telp:</label>
                <input type="text" class="form-control" id="telp" name="telp">
              </div>
              <div class="form-group">
                <label for="last_name">Pin BB:</label>
                <input type="text" class="form-control" id="pin" name="pin">
              </div>
        
         <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- view modal ends -->

  <!-- Edit Modal start -->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('crud/updatepem') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              
              <label for="last_name">Nama Pemasok:</label>
                <input type="text" class="form-control" id="namae" name="namae">
              </div>
              <div class="form-group">
                <label for="last_name">Kontak:</label>
                <input type="text" class="form-control" id="kontake" name="kontake">
              </div>
               <div class="form-group">
                <label for="last_name">Alamat:</label>
                <input type="text" class="form-control" id="alamate" name="alamate">
              </div>
              <div class="form-group">
                <label for="last_name">Telp:</label>
                <input type="text" class="form-control" id="telpe" name="telpe">
              </div>
              <div class="form-group">
                <label for="last_name">Pin BB:</label>
                <input type="text" class="form-control" id="pinbbe" name="pinbbe">
              </div>
                 
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <input type="hidden" id="ide" name="ide">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
      
    </div>
  </div>
    <!-- Edit code ends -->

 
  
  <script type="text/javascript">
    function fun_view(id)
    {
      var view_url = $("#hidden_view").val();
      $.ajax({
        url: view_url,
        type:"GET", 
        data: {"id":id}, 
        success: function(result){
          //console.log(result);
           
          $("#view_nama").val(result.nama);
          $("#view_alamat").val(result.alamat);
          $("#view_kontak").val(result.kontak);
          $("#view_telp").val(result.telp);
          $("#view_pinbb").val(result.pinbb);

          
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
          $("#ide").val(result.id);           
          $("#namae").val(result.nama);
          $("#alamate").val(result.alamat);
          $("#kontake").val(result.kontak);
          $("#telpe").val(result.telp);
          $("#pinbbe").val(result.pinbb);
         
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