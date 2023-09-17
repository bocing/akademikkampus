
<?php $idjur=0;
$idkel=0;
$idkuri=0;

  

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
                        <th>ID Mapel</th> 
                           <th>Jurusan </th>
                           <th>Tingkat</th>
                           <th>Semester</th>
                           <th>Kode</th>
                           <th>Nama </th>
                           <th>Kelompok</th>                          
                           <th>Aksi</th>     
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                        <?php $no=1; ?>
                        @foreach($data as $abc)  

                        <tr>
                          <td>{{$no++}}</td>       
                          <td>{{$abc->id}}</td>  
                          <td>{{$abc->najur}}</td>	
                          <td>{{$abc->tingkat}}</td>	
                          <td>{{$abc->sem}}</td>	
                          <td>{{$abc->kode}}</td>
                          <td>{{$abc->nama}}</td>
                          <td>{{$abc->namakelompok}}</td>
                           <td>
                       <div class="hidden-sm hidden-xs action-buttons">
                          
                           &nbsp;&nbsp;
                           <a href="{{url('editmapel')}}/{{$abc->id}}/{{$induk}}"> <i class="ace-icon fa fa-pencil bigger-130"></i></a>
                          
                          
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
          <h4 class="modal-title">Tambah Mata Pelajaran</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('simpanmata') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
            	 <div class="form-group">
                                <label>Jurusan</label>
                                <select name="idjur" id="idjur" class="form-control select2" style="width: 100%;">
                                 <?php
                                              
                                    $menuden=DB::table('jurusan')              
                                      ->select('jurusan.*')                                                                        
                                      ->get();
 
                                   foreach($menuden as $rows){
                                    if( $idjur == $rows->id ){ 
                                        echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                                    }
                                    }
                                    ?> 
                                </select>
                              </div>   

                               <div class="form-group">
                    <label for="last_name">Tingkat</label>
                    <input type="text" class="form-control" id="tingkat" name="tingkat">ISI dengan [1-3]
                 </div>

                 <div class="form-group">
                    <label for="last_name">Semester</label>
                    <input type="text" class="form-control" id="sem" name="sem">ISI dengan [1 atau 2]
                 </div>
              <div class="form-group">
                <label for="last_name">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode">
              </div>

              <div class="form-group">
                <label for="last_name">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>

               <div class="form-group">                 
                                <label>Kurikulum</label>
                                <select name="idkuri" id="idkuri" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('kuri')              
                                  ->select('kuri.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idkuri == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div>  

               <div class="form-group">                 
                                <label>Kelompok</label>
                                <select name="idkel" id="idkel" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('kelompok')              
                                  ->select('kelompok.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idkel == $key->kelid ){ 
                                      echo "<option selected = 'selected' value='".$key->kelid."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->kelid."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
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





















 





 