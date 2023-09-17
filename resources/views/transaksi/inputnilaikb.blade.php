
  
<?php 
  
         $idtahun=$idtahun;    
 
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
    
        
 <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpannilaikb'.'/'.$induk)  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
         
           
         
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                 <?php  if ($tersimpan=='T') {?>                                      
                <div class="col-sm-12">              
                                       <button type="submit" name="Simpan" class="btn btn-block btn-primary" >Simpan</button>                              
                                    </div>
                                    <?php } ?>
                     <table class="table table-striped table-bordered">
                                      <thead>

                                        <tr>
                                          <th class="center">#</th>
                                          <th class="center">ID Mapel</th>

                                      
                                          <th>Tingkat </th>
                                          <th>Kode</th>
                                          <th>Semester </th>
                                          <th>Kelompok</th>
                                          <th>Kode </th>
                                          <th>Nama </th>
                                          <th  >Nilai KKM</th>    
                                         
                                          
                                        </tr>
                                      </thead>

                                      <tbody>
                                           {{ csrf_field() }}
                                            <?php $no=1; 
                                            $tahun=DB::table('tahun')
                                            ->select('*') 
                                            ->where('tahun.aktif', '=', 'Y')                 
                                            ->first();
                                              $idtahun =$tahun->id;  


                                            $total=DB::table('kuri')
                                              ->select('*') 
                                              ->where('kuri.aktif', '=', 'Y')                 
                                              ->first();
                                                $idkuri =$total->id;   
                                             if ($idrole==14){
                                             $rec1=DB::table('mapel')     
                                              ->leftjoin('kelompok', 'kelompok.kelid', '=', 'mapel.kelid')                                                            
                                              ->leftjoin('jadwal', 'jadwal.mapelid', '=', 'mapel.id')                                                            
                                              ->select('mapel.*','kelompok.nama as namakelompok')   
                                              ->where('mapel.idkuri','=',$idkuri)
                                              ->where('jadwal.guruid','=',$iduser)
                                              ->groupby('mapel.id')
                                              ->get();
                                              }else{
                                                $rec1=DB::table('mapel')     
                                              ->leftjoin('kelompok', 'kelompok.kelid', '=', 'mapel.kelid')                                                                                                          
                                              ->select('mapel.*','kelompok.nama as namakelompok')   
                                              ->where('mapel.idkuri','=',$idkuri)
                                              ->groupby('mapel.id')
                                              ->get();
                                              }


                                            ?>
                                                @foreach($rec1 as $abc)

                                                <?php 
                                                  $rec2=DB::table('nilaikb')                                                  
                                                    ->select('nilaikb.nilaikb','nilaikb.nilaikbk')                 
                                                    ->where('mapelid','=',$abc->id)
                                                     ->where('tahunid','=',$idtahun)

                                                    ->first(); 
                                                  ?>

                                                           <tr>
                                            <td class="center">{{$no++}}</td>
                                             <td> {{$abc->id}} </td>
                                             <td> {{$abc->tingkat}} </td>
                                             <td> {{$abc->kode}} </td>
                                             <td> {{$abc->sem}} </td>
                                             <td> {{$abc->namakelompok}} </td>
                                            <td> {{$abc->kode}} </td>
                                             <td> {{$abc->nama}} </td>
   


 <input type="hidden" name="idmapel[]" id="idmapel" value="{{$abc->id}}">   
   
<th align="center" >
<input  class="form-control"     type="text" name="nilaikb[]" type="text" id="nilaikb" value="{{ isset($rec2->nilaikb) ? $rec2->nilaikb : '' }}"> 
</th>
 
 

                                             

                                        </tr>
                                         @endforeach()

                                         <tr>
                                 

 

                                        </tr>




                                      </tbody>

                                    </table>
                                   <?php  if ($tersimpan=='T') {?>                                      
                <div class="col-sm-12">              
                                       <button type="submit" name="Simpan" class="btn btn-block btn-primary" >Simpan</button>                              
                                    </div>
                                    <?php } ?>
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



