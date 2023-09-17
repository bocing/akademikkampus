
  
<?php 

$idkelas =$idkelas ;
$idjurusan=$idjurusan;
$idkelas=$idkelas;
$idwali=0;  
 
                               $caritahun=DB::table('tahun')              
                                ->select('*')                                    
                                ->where('aktif','=','Y')                          
                                ->first();
                                   $idtahun=$caritahun->id;
                                
                               ?>

?> 
<style type="text/css">
  
.col-sm-1 {
    width: 3.333333%;
}
</style>

 
  <!-- Left side column. contains the logo and sidebar -->
 
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
       @include('include.menuatasadmin')
    </section>
    <form method="post" enctype="multipart/form-data" action="<?=URL::to('carikrs')  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
          <input type="hidden" name="idkelas" value="{{$idkelas}}">   
         
          <input type="hidden" name="idthn" value=" ">  

          <section class="content-header">
            
              <div class="form-group">
                 <div class="box box-primary">
                    <div class="box-body">
                       <div class="col-sm-4" >
                            <select name="idtahun" id="idtahun"  class="form-control select2" style="width: 100%;">                
                              <?php
                               $menuden=DB::table('tahun')              
                                ->select('*')                                    
                                ->where('aktif','=','Y')                          
                                ->get();
                                
                               ?>
                               @foreach ($menuden as $key)
                               <?php
                                if( $idtahun == $key->id ){ 
                                    echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                } else{ 
                                    echo "<option value='".$key->id."'>".$key->nama."</option>";
                                }
                                ?>
                               @endforeach()
                              </select>
                      </div>

                    <div class="col-sm-4" >
                      <select name="idsiswa" id="idsiswa"  class="form-control select2" style="width: 100%;">                
                        <?php
                         $menuden=DB::table('siswa')              
                          ->select('*')                                    
                          ->where('status','=',1)                          
                          ->get();
                          
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

                 
                   
                   <div class="col-sm-2">
                       <button type="submit" name="Simpan"  value="carikrs" class="btn btn-danger" ><i class="glyphicon glyphicon-hand-right"> </i>Tampilkan<i class="glyphicon glyphicon-hand-left"> </i></button>
                   </div>  
                </div>
             </div>  
           </div>        

      <form method="post" enctype="multipart/form-data" action="<?=URL::to('carikrs'.'/'.$induk)  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
          <input type="hidden" name="idtahun" value="{{$idtahun}}">   
          
           <div class="form-group">
                 <div class="box box-primary">
                    <div class="box-body">
                                       
                                                       
                                                        <div class="col-sm-1">                        
                                                          <div class="col-sm-2">
                                                            <b>Cari </b>  
                                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>

                                                          </div>
                                                         </div>

                                                         <div class="col-sm-1"> 
                                                                     
                                                             <input type="hidden"   id="idjawal"  name="idjadwal" class="form-control"   >                 
                                                         </div>  
                                                          <div class="col-sm-2"> 
                                                              <b>Kode</b>            
                                                             <input type="text"   id="kode_makul"  name="kode_makul" class="form-control"   >                  
                                                         </div>  
                                                         <div class="col-sm-4"> 
                                                              <b>Nama Matakuliah</b>            
                                                             <input type="text"   id="nama_makul"  name="nama_makul" class="form-control"    >                  
                                                         </div>  
                                                       
                                                         <div class="col-sm-1">
                                                          <b>Tambah</b>  
                                                           <button type="submit" name="Simpan" value="simpankrs" class="btn btn-danger" ><i class="fa fa-download"></i><i class="fa fa-download"></i></button>
                                                          
                                                        </div>
                                                        <div id="loading" style="display:none;"><img src="{{ URL::asset('images/simpan.gif')}}" alt="" /></div>
                          </div> 
              </div>
            
            </div>
        </form>    
          </section>

   </form>  
    <?php
     $rec=DB::table('krs')    
                ->select('krs.id as idkrs','vjadwalrapor.*')  
                ->leftjoin('vjadwalrapor', 'vjadwalrapor.id', '=', 'krs.idjadwal') 
                ->where('vjadwalrapor.tahunid','=',$idtahun)
                ->where('krs.idsiswa','=',$idsiswa)
                ->get();        
                 
    ?>

 <a href="{{ url('cetakwebkrs/'.$idtahun.'/'.$idsiswa) }}" target="_blank" ><i class="fa fa-file-print-o"></i> 
                <button type="button" class="btn btn-success" style="margin-right: 5px;">
               <i class="fa fa-print"></i> Cetak Web
                </button>
          </a>         
          <a href="{{ url('cetakpdfkrs/'.$idtahun.'/'.$idsiswa) }}" target="_blank" ><i class="fa fa-file-print-o"></i> 
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
               <i class="fa fa-download"></i> Generate PDF
                </button>
          </a>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                    <div class="table-responsive shadow p-3 mb-5 bg-white rounded card-body">
                     <table class="table table-bordered table-striped">
                                      <thead>
                                        <tr>
                                          <th class="center">#</th>
                                          <th>Hari</th>
                                          <th class="hidden-xs">Mulai</th>  
                                          <th class="hidden-xs">Selesai</th>  
                                          <th class="hidden-480">Kode Matakuliah</th>
                                          <th class="hidden-480">Nama Matakuliah</th>                                         
                                          <th class="hidden-xs">Ruang</th>  
                                          <th class="hidden-xs">Dosen</th>  
                                          <th>Hapus</th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                           {{ csrf_field() }}
                                                        <?php $no=1; ?>
                                                            @foreach($rec as $abc)

                                                           <tr>
                                            <td class="center">{{$no++}}</td>
                                            
                                            <td><a href="#"> {{$abc->namahari}}</a></td>
                                               <td align="right">{{$abc->jammulai}} </td>
                                            <td align="right">{{$abc->jamselesai}} </td>
                                            <td><a href="#"> {{$abc->kodemapel}}</a></td>
                                             <td><a href="#"> {{$abc->nama}}</a></td>
                                         
                                            <td align="left">{{$abc->namaruang}} </td>
                                            <td align="left">{{$abc->namaguru}} </td>
                                          
                                            <td>
                                              <?php if ($no>=1) { ?> 
                                                      <div class="hidden-sm hidden-xs action-buttons">
                                              <a href="{{ URL::asset('/hapusmakulkrs/'.$abc->idkrs.'/'.$induk) }}"    class="red" title="Hapus Matakuliah" onclick="return confirm('Anda Yakin Menghapus?')"      class="red"    >
                                            <i class="ace-icon fa fa-trash-o bigger-130"></i> 

                                              </a>
                                              </div>               

                                                 <?php } ?>
                                             </td> 

                                        </tr>
                                         @endforeach()

                                         <tr>
                                 




                                           
                                           <tr>
                                           



                                        </tr>




                                      </tbody>
                                    </table>
                  </div>                  
                </div> 

                     
                 
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
      <?php  if ($alat =='android') {
      ?>
            <div class="modal-dialog" style="width:600px">
         <?php  }else{ ?>
              <div class="modal-dialog" style="width:1200px">
           <?php  }?>      
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Daftar Matakuliah dan Jadwal</h4>
                    </div>
                    <div class="modal-body">
                     <div class="table-responsive">
                        <table id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                           
                                      
                                          <th>Hari</th>

                                         <th >Kode Mapel</th>
                                          <th >Mata Pelajaran</th>
                                          <th >Mulai</th>  
                                          <th  >Selesai</th>
                                          <th  >Prodi</th>  
                                          <th  >Ruang</th>  
                                          <th  >Dosen</th>  
                                     
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                             
                                   $menuden=DB::table('vjadwalrapor')              
                                    ->select('*')  
                                    ->get();                                  
                                
                                //$con = mysqli_connect('localhost', 'root', '', 'harviacode');
                                //$sql = mysqli_query($con,'SELECT * FROM obat');
                                //while ($r = mysqli_fetch_array($sql)) {
                                    ?>
                                    @foreach ($menuden as $abc)                                    
                                    <tr class="pilih" data-id="{{$abc->idjadwal}}" data-nama="{{$abc->nama}}" data-kode="{{$abc->kodemapel}}" >
                                        <td class="center">{{$no++}}</td>
                                           
                                            <td><a href="#"> {{$abc->namahari}}</a></td>
                                            <td><a href="#"> {{$abc->kodemapel}}</a></td>
                                             <td><a href="#"> {{$abc->nama}}</a></td>
                                            <td align="right">{{$abc->jammulai}} </td>
                                            <td align="right">{{$abc->jamselesai}} </td>
                                            <td align="right">{{$abc->namaprodi}} </td>
                                            
                                            <td align="right">{{$abc->namaruang}} </td>
                                            <td align="right">{{$abc->namaguru}} </td>
                                         
                                       
                                    </tr>
                                    @endforeach()    
                            </tbody>
                        </table>  
                    </div>
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
                document.getElementById("idjawal").value = $(this).attr('data-id');

                 document.getElementById("kode_makul").value = $(this).attr('data-kode');
                document.getElementById("nama_makul").value = $(this).attr('data-nama');
               
                 
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




<input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewkate')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletekate')}}">  
  

  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Jadwal</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanjadwal')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                 <input type="hidden" name="induk" value="{{$induk}}">
                
           
         
              <div class="form-group">
                  <div class="form-group">                 
                                <label>Hari</label>
                                <select name="idhari" id="idhari" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('hari')              
                                  ->select('hari.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idwali == $key->hariid ){ 
                                      echo "<option selected = 'selected' value='".$key->hariid."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->hariid."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div> 
           
             
               <div class="form-group">                 
                                <label>Kelas</label>
                                <select name="idkelas" id="idkelas" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('kelas')              
                                  ->select('kelas.*') 
                                  ->where('kelas.id','=',$idkelas)                                   
                                  ->get();                                  
                                 ?>

                                 @foreach ($menuden as $key)
                                   <?php
                                    if( $idwali == $key->id ){ 
                                        echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                    } else{ 
                                        echo "<option value='".$key->id."'>".$key->nama."</option>";
                                    }
                                    ?>
                                 @endforeach()
                                </select>
                </div>  

                <div class="form-group">                 
                                <label>Mata Pelajaran</label>
                                <select name="idmapel" id="idmapel" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('mapel')              
                                  ->select('mapel.*')                                    
                                  ->where('mapel.idjur','=',$idjurusan)                                   
                                  ->get();                                  
                                 ?>

                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idwali == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      //echo "<option value='".$key->id."'>".$key->nama."</option>";
                                      echo "<option value='".$key->id."'>".$key->kode."-".$key->nama."</option>";
                                  }
                                  ?>                                  
                                 @endforeach()
                                </select>
                
                </div>  
              <div class="form-group">                 
                                <label>Nama Dosen  </label>
                                <select name="idguru" id="idguru" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('guru')              
                                  ->select('guru.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idwali == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div>    

                <div class="form-group">                 
                                <label>Ruang</label>
                                <select name="idruang" id="idruang" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('ruang')              
                                  ->select('ruang.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idwali == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                </div>   
                 <div class="form-group">
                 <b>Jam Mulai </b>           
                  <input type="text" id="jammulai" name="jammulai"  required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>
               <div class="form-group">
                 <b>Jam Selesai </b>           
                  <input type="text" id="jamselesai" name="jamselesai"  required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
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




