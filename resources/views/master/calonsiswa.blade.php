
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

            <div class="table-responsive">
                        
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                      <th>No</th>  
                      <th>Nomor Pendaftaran</th> 
                      <th>Program Studi</th>
                      <th>Jalur</th>                       
                          <th>Nohp</th>
                          <th>Nama</th>
                          <th>Email</th>                         
                          <th>V.B. Bayar</th>
                          <th>V.B. Berkas</th>
                          <th>Lihat BB</th>   
                            <th>Lihat Berkas</th>        
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                     <?php $nou=1;
                       $result=DB::table('daftarpmb')    
                        ->leftjoin('prodi','prodi.id','=','daftarpmb.prodi')    
                        ->leftjoin('jalur','.jalur.id','=','daftarpmb.jalur')                    
                        ->select('daftarpmb.*','prodi.nama as namaprodi','jalur.nama as namajalur')
                        ->orderby('daftarpmb.nama', 'asc')  
                           
                  ->get();

                      ?>
                     @foreach($result as $abc) 
              
                        <tr>
                          <td>{{$nou++}}</td>   
                          <td>{{$abc->nopen}}</td>
                          <td>{{$abc->namaprodi}}</td>
                          <td>{{$abc->namajalur}}</td> 

                          <td>{{$abc->nohp}}</td>                                   
                          <td>{{$abc->nama}}</td> 

                          <td>{{$abc->email}}</td>                                 
                          
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                  <a  href="<?php echo '' ?>" data-toggle="modal" data-target="#verbay" onclick="fun_edit('{{$abc->id}}')">
                                  <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a> 
                            
                            </div>           
                          </td>
                            <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                  <a  href="<?php echo '' ?>" data-toggle="modal" data-target="#editModal" onclick="fun_edit('{{$abc->id}}')">
                                  <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a> 
                            
                            </div>           
                          </td>
                           <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                   <a href="{{ URL::asset('/lihatbayar/'.$abc->nopen.'/'.$induk) }}"    class="red"  title="Lihat Bukti Bayar" target="_blank" >
                            <i class="ace-icon fa  fa-check-square-o"></i>
                            </a>
                            
                            </div>           
                          </td>
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                   <a href="{{ URL::asset('/lihatberkas/'.$abc->nopen.'/'.$induk) }}"    class="red"  title="Lihat Berkas" target="_blank"  >
                            <i class="ace-icon fa  fa-check-square-o"></i>
                            </a>
                            
                            </div>           
                          </td>

                                        
                     
                    </tr>
                    
                  @endforeach() 
                </tbody>
                 
              </table>
              </div>
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


<input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewcalonsiswa')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletesiswa')}}">  
  

  

<!-- Edit Modal start -->
  <div class="modal fade" id="verbay" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Verifikasi Pembayaran </h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('simpanverbay') }}" method="post">
           <input type="hidden" name="_token" value="{!! csrf_token() !!}">
   
                  <input type="hidden" name="induk" value={{$induk}}>

            {{ csrf_field() }}
            <div class="form-group">
              
              <div class="form-group">
                <label for="last_name">Nomor Pendaftarann</label>
                <input type="text" class="form-control" id="edit_nopen" name="nopen">
              </div>

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="edit_nama" name="edit_nama">
              </div>
              
              <div class="form-group">
                                    
               <label >Verifikasi Pembayaran</label>
                <select name="verbay" id="verbay" class="form-control select2" style="width: 100%;">
                 <?php
                  // $idkar=$rulkar->idsetkar;
                 $verbay=0;
                    $menuden=DB::table('yatidak')
                      ->get();

                   foreach($menuden as $rows){
                    if( $verbay == $rows->id ){ 
                        echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                    } else{ 
                        echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                    }
                    }
                    ?> 
                </select>
             </div>
  


            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
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
          console.log(result);
          $("#edit_id").val(result.id);   
          $("#edit_nopen").val(result.nopen);        
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

 