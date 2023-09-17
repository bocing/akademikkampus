
  
<?php 

$idkuri=$idkuri ;
$idkel=0 ;
$idjur=0;

  
 
?> 


 
  <!-- Left side column. contains the logo and sidebar -->
 
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$judulutama}}
        <small>{{$judul}}</small>
      </h1>
      <ol class="breadcrumb">
      {{ csrf_field() }}
        <?php $no=1; ?>
        @foreach($menuatas as $m)  
        <li><a href="{{url($m->url)}}/{{$m->id_induk}}"><i class="{{$m->icon}}"></i> {{$m->nama}}</a></li>
         @endforeach()     
          
          <li><a data-toggle="modal" data-target="#addModal"><button type="button" class="btn btn-block btn-warning btn-sm">Tambah</button></a></li>
          
          &nbsp;&nbsp;
          <li><a href="{{ url('cetakmapel/'.$idkuri) }}">
               <i class="fa fa-file-pdf-o"></i> Cetak PDF </a> </li>          
            &nbsp;&nbsp;

              <li><a href="{{ url('previewmapel/'.$idkuri) }}">
               <i class="fa fa-file-pdf-o"></i> Preview </a> </li>          
            &nbsp;&nbsp;

 
      </ol>
    </section>
    <form method="post" enctype="multipart/form-data" action="<?=URL::to('carimapelperkuri'.'/'.$induk)  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
         
          <input type="hidden" name="idkuri" value=$idkuri>  

          <section class="content-header">
           <div class="row">     
              <div class="form-group">

                   <div class="col-sm-4"> 
                               
                         <select name="idkuri" id="idkuri" class="form-control select2" style="width: 100%;">                
                        <?php
                         $menuden=DB::table('kuri')              
                          ->select('*')   
                          ->where('aktif','=','Y')                                 
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
 
                 
                   
                   <div class="col-sm-2">
                      <b>Cari</b>  
                       <button type="submit" name="Simpan" class="btn btn-danger" ><i class="glyphicon glyphicon-search"></i></button>                              
                  </div>  
                             
            </div>
            </div> 
          </section>
 
   </form>       

    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->
 
           
          
       
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                     <table class="table table-striped table-bordered">
                                      <thead>
                                        <tr>
                                          <th class="center">#</th>
                                          <th>Jurusan </th>
                                          <th>Tingkat </th>
                                          <th>Semester </th>
                                          <th>Kode</th>
                                          <th>Nama </th>
                                          <th>Kelompok </th>
                                          

                                          <th>EDIT</th>
                                          <th>Hapus</th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                           {{ csrf_field() }}
                                                        <?php $no=1; ?>
                                                            @foreach($rec as $abc)

                                                           <tr>
                                            <td class="center">{{$no++}}</td>
                                             <td>
                                              {{$abc->najur}} </a>
                                            </td>
                                             <td>
                                              {{$abc->tingkat}} </a>
                                            </td>
                                             <td>
                                               {{$abc->sem}}</a>
                                            </td>
                                            <td>
                                              {{$abc->kode}}</a>
                                            </td>
                                            <td>
                                               {{$abc->nama}} </a>
                                            </td>
                                            <td>
                                              {{$abc->namakelompok}} </a>
                                            </td>

                                            
                                            
                                              <td>
                                             
                                             
                                                      <div class="hidden-sm hidden-xs action-buttons">
                                                 <a href="{{url('editmapel')}}/{{$abc->id}}/{{$induk}}"> <i class="ace-icon fa fa-edit bigger-130"></i></a>

                                              </a>
                                              </div>               
 
                                             </td> 
                                            
                                            <td>
                                             
                                                      <div class="hidden-sm hidden-xs action-buttons">
                                              <a href="{{url('deletemapel')}}/{{$abc->id}}/{{$induk}}"> <i class="ace-icon fa fa-trash-o bigger-130" onclick="return confirm('Anda Yakin Menghapus?')"></i></a>
                                               
                                               

                                              </a>
                                              </div>               
 
                                             </td> 
                                             

                                        </tr>
                                         @endforeach()

                                         <tr>
                                 




                                          
                                           <tr>
                                            <!--
                                  <form method="get" enctype="multipart/form-data" action="<?=URL::to('simpanum')  ?>">
                                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
                                 
                                  <input type="hidden" name="induk" value="{{$induk}}">    
                                    
                                          <td class="center" colspan="6" align="right">Uang Muka</td> 
                                          <td align="right" class="hidden-480">                                       
                                          <input type="text"    id="um"  name="um"    value="{{ isset($um) ? $um : '' }}"  > 
                                          </div></td>
                                             <tr>
                                           <td class="center" colspan="6" align="right">Sisa</td>  
                                          <td align="right" class="hidden-480" style="bold">                                           
                                          <input type="number" alt="right"  id="sisa"   name="sisa"  readonly="true"   value="{{ isset($sisa) ? $sisa : '' }}"   > </b>
                                          </div></td>
                                           <td>
                                           <!--
                                             <button type="submit" name="Simpan" class="btn btn-danger" >  </i>Simpan</button>
                                            
                                             </td> 
                                  </form>        
                                             -->



                                        </tr>




                                      </tbody>
                                    </table>
                </div> 
                </simpan>
                     
                 
            </div>
          </div>         
        </div>
        <!-- /.col (left) -->
       
      </div>
 
    </section>

    <!-- /.content -->
  </div>

 
  <style>
    body{
        margin: 0px;
    }
    .pilih:hover{
        cursor: pointer;
    }
  </style>
  <script type="text/javascript">

$(document).ready(function(){
 function hitung(){
    var jumlah = $("#jumlah").val();
    var harga = $("#harga").val();
    
    var total = parseInt(jumlah)*parseInt(harga);
    $("#total").val(total);
  }

  function hitung2(){
    var um = $("#um").val();
    var tot = $("#tot").val();
    
    
    var sisa =parseInt(tot)- parseInt(um);
    $("#sisa").val(sisa);
  }


  $("#jumlah").keyup(function(){
    hitung();
  });

  $("#um").keyup(function(){
    hitung2();
  });


  $("#harga").keyup(function(){
    hitung();
  });

}); 
</script>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Lookup Master Biaya</h4>
                    </div>
                    <div class="modal-body">
                        <table id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID </th> 
                                    <th>Nama </th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                             
                                   $menuden=DB::table('kelas')              
                                    ->select('*')  
                                    ->get();                                  
                                
                                //$con = mysqli_connect('localhost', 'root', '', 'harviacode');
                                //$sql = mysqli_query($con,'SELECT * FROM obat');
                                //while ($r = mysqli_fetch_array($sql)) {
                                    ?>
                                    @foreach ($menuden as $r)                                    
                                    <tr class="pilih" data-id="{{$r->id}}" data-nama="{{$r->nama}}">
                                        <td>{{$r->id}}</td>
                                        <td>{{$r->nama}}</td>
                                         
                                       
                                    </tr>
                                    @endforeach()    
                            </tbody>
                        </table>  
                    </div>


                </div>
            </div>


        </div>



        <script src="{{ URL::asset('lte/modal/js/jquery-1.11.2.min.js')}}"></script> 
        <script src="{{ URL::asset('lte/modal/bootstrap/js/bootstrap.js')}}"></script> 
        <script src="{{ URL::asset('lte/modal/datatables/jquery.dataTables.js')}}"></script> 
        <script src="{{ URL::asset('lte/modal/datatables/dataTables.bootstrap.js')}}"></script> 
        

        <script type="text/javascript">

//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("id").value = $(this).attr('data-id');
                 
                document.getElementById("nama").value = $(this).attr('data-nama');
                 
                $('#myModal').modal('hide');
            });

//            tabel lookup obat
            $(function () {
                $("#lookup").dataTable();
            });

            function dummy() {
                var kode_obat = document.getElementById("kode_obat").value;
                alert('kode obat ' + kode_obat + ' berhasil tersimpan');
            }
        </script>




  <input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewkelas')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletekelas')}}">  
  <input type="hidden" name="id_induk">
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Mapel</h4>
        </div>
        <div class="modal-body">
          <form action="{{ url('simpanmata') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
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
          <h4 class="modal-title">Edit Mapel</h4>
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







