
<?php   ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       @include('include.menuatasadmin')
    </section>
      

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
                          <th>Nip</th>
                          <th>Nama</th>                         
                          <th>Telp</th>
                          
                          <th>Foto</th>
                           
                          <th>Aksi</th>        
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                     <?php $nou=1; ?>
                     @foreach($data as $abc) 
              
                        <tr>
                          <td>{{$nou++}}</td>                                   
                          <td>{{$abc->nip}}</td>                                 
                              <td>{{$abc->nama}}</td>                                 
                               <td>{{$abc->email}}</td>
                              
                                 <td><img src="{{asset($abc->foto)}}" style="width: 200px;height: 200px"> </td>
                             
                           
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                               
                               


                                 <a class="green" href="{{ URL::asset('/editguru/'.$abc->id.'/'.$induk) }}">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                              </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a class="green" href="{{ URL::asset('/profdosen/'.$abc->id.'/'.$induk) }}">
                             <i class="ace-icon fa fa-trash-o fa-file-text-o"></i>
                              </a>
                            
                            </div>           
                          </td>
                                        
                     
                    </tr>
                    
                  @endforeach() 
                </tbody>
                 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      
    </section>
    <!-- /.content -->
</div>


<input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewpel')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deleteuser')}}">  
  

  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Guru</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanguru')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                 <input type="hidden" name="induk" value="{{$induk}}">
                
           
               
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
                    <input type="text" name="pass"  value="{{ isset($pass) ? $pass : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>       
                                      
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
          <h4 class="modal-title">Edit Data Karyawan</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanuser')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="0">
                 <input type="hidden" name="induk" value="{{$induk}}">
                 <input type="hidden" id="idpele" name="idpele">
            <div class="form-group">
                
           
               
               
              <div class="form-group">
                <b>No HP</b>           
                    <input type="text" id="nohpe" name="nohpe"  value="{{ isset($nohpe) ? $nohpe : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
              </div>
              <div class="form-group">
                 <b>Nama </b>           
                  <input type="text"  id="namae" name="namae"  value="{{ isset($namae) ? $namae : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>
               <div class="form-group">
                   <b>Password</b>           
                    <input type="text" id="passe" name="passe"  value="{{ isset($passe) ? $passe : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>       
                                      
              </div>
              <div class="form-group">
                   <b>Alamat</b>           
                    <input type="text" id="alamate"  name="alamate"  value="{{ isset($alamate) ? $alamate : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>       
                                      
              </div>
               
               


               <div class="form-group">
                <b>Foto</b><br/>
                <input type="file" name="file[]" multiple=""> </br>  
              </div>  
               
             
 
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
             
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
          //console.log(result);
          

          $("#idpele").val(result.id);           
          $("#nohpe").val(result.email);
          $("#namae").val(result.nama);
          $("#passe").val(result.password);
          $("#alamate").val(result.alamat);
           


         
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





 