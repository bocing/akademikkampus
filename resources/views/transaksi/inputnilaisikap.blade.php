
  
<?php 

//$idkelas =$idkelas ;
$idjadwal=$idjadwal;
$total2=DB::table('jadwal')
       ->select('*') 
       ->where('id', '=', $idjadwal )                 
       ->first();

         $idkelas =$total2->kelasid;
         $idguru =$total2->guruid; 
         $idmapel =$total2->mapelid;   
         $idtahun =$total2->tahunid;    
 
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
          
        </ol>
    </section>
    <form method="post" enctype="multipart/form-data" action="<?=URL::to('carijadwalkelasakhir'.'/'.$induk)  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
         
          <input type="hidden" name="idthn" value=" ">  

          <section class="content-header">
           <div class="row">     
              <div class="form-group">

                   <div class="col-sm-4"> 
                               
                         <select name="idkelascari" id="idkelascari" class="form-control select2" style="width: 100%;">                
                        <?php
                         $menuden=DB::table('kelas')              
                          ->select('*')                                    
                          ->get();
                          
                         ?>
                         @foreach ($menuden as $key)
                         <?php
                          if( $idkelas == $key->id ){ 
                              echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                          } else{ 
                              echo "<option value='".$key->id."'>".$key->nama."</option>";
                          }
                          ?>
                         @endforeach()
                        </select>
 
                   </div> 

                   <div class="col-sm-4"> 
                               
                          

                          <select name="idtahun" id="idtahun" class="form-control select2" style="width: 100%;">                
                        <?php
                         $menuden=DB::table('tahun')              
                          ->select('*')                                    
                          ->get();
                          
                         ?>
                         @foreach ($menuden as $key)
                         <?php
                          if( $idkelas == $key->id ){ 
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
       
        
 <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpansawal')  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
          <input type="hidden" name="bln" value="{{$bln}}">    
          <input type="hidden" name="thn" value="{{$thn}}">    
         
           
         
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                <div class="col-sm-12">
                                      
                                       <button type="submit" name="Simpan" class="btn btn-block btn-primary" >Simpan</button>
                              
                                    </div>
                     <table class="table table-striped table-bordered">
                                      <thead>

                                        <tr>
                                          <th class="center">#</th>

                                      
                                          <th>Nis</th>

                                          <th>Nama</th>
                                         
                                          <th>NA Peng</th>  
                                          <th  >Desc Pengetahuan</th>  
                                          <th  >NA Ket</th>  
                                          <th  >Desc Keterampilan</th>
                                          <th  >NA Sikap</th>    
                                          <th  >Desc Sikap</th>  
                                          
                                        </tr>
                                      </thead>

                                      <tbody>
                                           {{ csrf_field() }}
                                            <?php $no=1; 
                                             $rec2=DB::table('kelassiswa')    
                                              ->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')                                                                                   
                                              ->select('kelassiswa.*','siswa.nama as namasiswa','siswa.nis as nis')                 
                                              ->where('idkelas','=',$idkelas)
                                              ->get();

                                            ?>
                                                @foreach($rec2 as $abc)


                                                           <tr>
                                            <td class="center">{{$no++}}</td>
                                            <td> {{$abc->nis}} </td>
                                             <td> {{$abc->namasiswa}} </td>
  
<?php 
  
  $rec2=DB::table('nilaisiswa')
          ->select('*')                 
          ->where('idsiswa','=',$abc->id)
           ->where('tahunid','=',$idtahun)
           ->where('idmapel','=',$idmapel)
          ->first();
         if ($rec2!=null){
            $angkap =$rec2->angkap;
            $angkak =$rec2->angkak;
            $angkas =$rec2->angkas;
            $desp =$rec2->desp;
            $desk =$rec2->desk;
            $dess =$rec2->dess;
          }else{
            $angkap =0;
            $angkak =0;
            $angkas =0;
            $desp =0;
            $desk =0;
            $dess =0;

          }


?>
<input type="hidden" name="idsiswa[]"  value="{{ isset($abc->id) ? $abc->id : '' }}">       
 <th align="center" >
<input  class="form-control"    maxlength="2" type="text" name="angkap[]" type="text" id="angkap" value="{{ isset($angkap) ? $angkap : '' }}"> 
</th>
<th>
<input   class="form-control"   type="text" name="desp[]" type="text" id="desp" value="{{ isset($desp) ? $desp : '' }}"> 
</th>
<th align="center">
<input  class="form-control"    maxlength="2" type="text" id="angkak[]" name="angkak[]" placeholder="" value="{{ isset($angkak) ? $angkak : '' }}" autocomplte="off" />
</th>
<th >
<input   class="form-control"   type="text" id="desk[]" name="desk[]" placeholder="" value="{{ isset($desk) ? $desk : '' }}"
</th>
<th align="center">
<input  class="form-control"    maxlength="2" type="text" id="angkas[]" name="angkas[]" placeholder="" value="{{ isset($angkas) ? $angkas : '' }}"
</th>
<th >
<input  class="form-control"    type="text" id="dess[]" name="dess[]" placeholder="" value="{{ isset($dess) ? $dess : '' }}"
</th>

                                             

                                        </tr>
                                         @endforeach()

                                         <tr>
                                 

 

                                        </tr>




                                      </tbody>

                                    </table>
                                    <div class="col-sm-12">
                                      
                                       <button type="submit" name="Simpan" class="btn btn-block btn-primary" >Simpan</button>
                              
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

   </form>  
 
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



