
<?php   ?>
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
                          <th>ID</th>
                          <th>Nis</th>
                          <th>Nama</th>                         
                          <th>Telp</th>
                           
                          <th>Aksi</th>        
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                     <?php $nou=1; ?>
                     @foreach($data as $abc) 
              
                        <tr>
                          <td>{{$nou++}}</td>                                   
                          <td>{{$abc->id}}</td>                                   
                          <td>{{$abc->nis}}</td>                                 
                          <td>{{$abc->nama}}</td>                                 
                          <td>{{$abc->nohp}}</td>
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                  <a  href="<?php echo '' ?>" data-toggle="modal" data-target="#editModal" onclick="fun_edit('{{$abc->id}}')">
                            <i class="ace-icon fa fa-pencil bigger-130"></i>
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


<input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewsiswa')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletesiswa')}}">  
  

  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Siswa</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('simpansiswa') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              
              <div class="form-group">
                <label for="last_name">Nis</label>
                <input type="text" class="form-control" id="nisx" name="nisx">
              </div>

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="namax" name="namax">
              </div>
              <div class="form-group">
                <label for="last_name">Tempat/Tgl Lahir</label>
                <input type="text" class="form-control" id="tltgll" name="tltgll">
              </div>

               <div class="form-group">
                <label for="last_name">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jekax" name="jekax">1 = Laki Lak1, 2 = Perempuan
              </div>

               <div class="form-group">
                <label for="last_name">Agama</label>
                <input type="text" class="form-control" id="agamaid" name="agamaid">1 = Islam, 2 = Khatolik, 3 = Protestan, 4. Hindu, 5. Budha
              </div>
              <div class="form-group">
                <label for="last_name">Status Dalam Keluar</label>
                <input type="text" class="form-control" id="sta" name="sta">
              </div> 
        
              <div class="form-group">
                <label for="last_name">Anak Ke</label>
                <input type="text" class="form-control" id="akeid" name="akeid">
              </div>
              <div class="form-group">
                <label for="last_name">Alamat</label>
                <input type="text" class="form-control" id="alamatx" name="alamatx">
              </div>

              <div class="form-group">
                <label for="last_name">Telp</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
              </div>
   
              <div class="form-group">
                <label for="last_name">Sekolah Asal</label>
                <input type="text" class="form-control" id="sekasal" name="sekasal">
              </div>

              <div class="form-group">
                <label for="last_name">Diterima Kelas</label>
                <input type="text" class="form-control" id="kelasterima" name="kelasterima">
              </div>

              <div class="form-group">
                <label for="last_name">Diterima Tgl</label>
                <input type="text" class="form-control" id="tglterima" name="tglterima">
              </div>

              <div class="form-group">
                <label for="last_name">Nama Ayah</label>
                <input type="text" class="form-control" id="namaayah" name="namaayah">
              </div>

 
       
              <div class="form-group">
                <label for="last_name">Nama Ibu</label>
                <input type="text" class="form-control" id="namaibu" name="namaibu">
              </div>

              <div class="form-group">
                <label for="last_name">Alamat Ortu</label>
                <input type="text" class="form-control" id="alamatayah" name="alamatayah">
              </div>

              <div class="form-group">
                <label for="last_name">Telp Ortu</label>
                <input type="text" class="form-control" id="nohpayah" name="nohpayah">
              </div>

               <div class="form-group">
                <label for="last_name">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="kerjaayah" name="kerjaayah">
              </div>

   
               <div class="form-group">
                <label for="last_name">Pekerjaan Ibu</label>
                <input type="text" class="form-control" id="kerjaibu" name="kerjaibu">
              </div>


               <div class="form-group">
                <label for="last_name">Nama Wali</label>
                <input type="text" class="form-control" id="namawali" name="namawali">
              </div>

              <div class="form-group">
                <label for="last_name">Alamat Wali</label>
                <input type="text" class="form-control" id="alamatwali" name="alamatwali">
              </div>

              <div class="form-group">
                <label for="last_name">Telp Wali</label>
                <input type="text" class="form-control" id="nohpwali" name="nohpwali">
              </div>


              <div class="form-group">
                <label for="last_name">Pekerjaan Wali</label>
                <input type="text" class="form-control" id="kerjawali" name="kerjawali">
              </div>

             


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
          <h4 class="modal-title">Edit Data Siswa</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('crud/updatesiswa') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              
              <div class="form-group">
                <label for="last_name">Nis</label>
                <input type="text" class="form-control" id="edit_nis" name="edit_nis">
              </div>

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="edit_nama" name="edit_nama">
              </div>
              <div class="form-group">
                <label for="last_name">Tempat/Tgl Lahir</label>
                <input type="text" class="form-control" id="edit_tltgll" name="edit_tltgll">
              </div>

               <div class="form-group">
                <label for="last_name">Jenis Kelamin</label>
                <input type="text" class="form-control" id="edit_jeka" name="edit_jeka">1 = Laki Lak1, 2 = Perempuan
              </div>

               <div class="form-group">
                <label for="last_name">Agama</label>
                <input type="text" class="form-control" id="edit_agamaid" name="edit_agamaid">1 = Islam, 2 = Khatolik, 3 = Protestan, 4. Hindu, 5. Budha
              </div>
              <div class="form-group">
                <label for="last_name">Status Dalam Keluar</label>
                <input type="text" class="form-control" id="edit_sta" name="edit_sta">
              </div> 
        
              <div class="form-group">
                <label for="last_name">Anak Ke</label>
                <input type="text" class="form-control" id="edit_akeid" name="edit_akeid">
              </div>
              <div class="form-group">
                <label for="last_name">Alamat</label>
                <input type="text" class="form-control" id="edit_alamat" name="edit_alamat">
              </div>

              <div class="form-group">
                <label for="last_name">Telp</label>
                <input type="text" class="form-control" id="edit_nohp" name="edit_nohp">
              </div>
   
              <div class="form-group">
                <label for="last_name">Sekolah Asal</label>
                <input type="text" class="form-control" id="edit_sekasal" name="edit_sekasal">
              </div>

              <div class="form-group">
                <label for="last_name">Diterima Kelas</label>
                <input type="text" class="form-control" id="edit_kelasterima" name="edit_kelasterima">
              </div>

              <div class="form-group">
                <label for="last_name">Diterima Tgl</label>
                <input type="text" class="form-control" id="edit_tglterima" name="edit_tglterima">
              </div>

              <div class="form-group">
                <label for="last_name">Nama Ayah</label>
                <input type="text" class="form-control" id="edit_namaayah" name="edit_namaayah">
              </div>

 
       
              <div class="form-group">
                <label for="last_name">Nama Ibu</label>
                <input type="text" class="form-control" id="edit_namaibu" name="edit_namaibu">
              </div>

              <div class="form-group">
                <label for="last_name">Alamat Ortu</label>
                <input type="text" class="form-control" id="edit_alamatayah" name="edit_alamatayah">
              </div>

              <div class="form-group">
                <label for="last_name">Telp Ortu</label>
                <input type="text" class="form-control" id="edit_nohpayah" name="edit_nohpayah">
              </div>

               <div class="form-group">
                <label for="last_name">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="edit_kerjaayah" name="edit_kerjaayah">
              </div>

   
               <div class="form-group">
                <label for="last_name">Pekerjaan Ibu</label>
                <input type="text" class="form-control" id="edit_kerjaibu" name="edit_kerjaibu">
              </div>


               <div class="form-group">
                <label for="last_name">Nama Wali</label>
                <input type="text" class="form-control" id="edit_namawali" name="edit_namawali">
              </div>

              <div class="form-group">
                <label for="last_name">Alamat Wali</label>
                <input type="text" class="form-control" id="edit_alamatwali" name="edit_alamatwali">
              </div>

              <div class="form-group">
                <label for="last_name">Telp Wali</label>
                <input type="text" class="form-control" id="edit_nohpwali" name="edit_nohpwali">
              </div>


              <div class="form-group">
                <label for="last_name">Pekerjaan Wali</label>
                <input type="text" class="form-control" id="edit_kerjawali" name="edit_kerjawali">
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
          $("#edit_nis").val(result.nisn);        
          $("#edit_nama").val(result.nama);
          $("#edit_tltgll").val(result.tltgll);
          $("#edit_jeka").val(result.jeka);
           $("#edit_agamaid").val(result.agamaid);
           $("#edit_sta").val(result.sta);
           $("#edit_akeid").val(result.akeid);
           $("#edit_alamat").val(result.alamat);
           $("#edit_nohp").val(result.nohp);
           $("#edit_sekasal").val(result.sekasal);        

          $("#edit_kelasterima").val(result.kelasterima);
          $("#edit_tglterima").val(result.tglterim);

          $("#edit_namaayah").val(result.namaayah);
          $("#edit_namaibu").val(result.namaibu);
          $("#edit_alamatayah").val(result.alamatayah);
          $("#edit_nohpayah").val(result.nohpayah);
          $("#edit_kerjaayah").val(result.kerjaayah);
          $("#edit_kerjaibu").val(result.kerjaibu);
           $("#edit_namawali").val(result.namawali);
           $("#edit_alamatwali").val(result.alamatwali);
           $("#edit_nohpwali").val(result.nohpwali);
           $("#edit_kerjawali").val(result.kerjawali);


         
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

 