
  
<?php 

$idkelas =$idkelas ;
$idtahun =$idtahun ;
 
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
  <div class="box box-primary">
                 <div class="box-body">
                   <div class="col-sm-4"> 
                               
                         <select name="idkelascari" id="idkelascari" class="form-control select2" style="width: 100%;">                
                         <?php
                            
//dd($idrole);
                                                         if ($idrole!=14){
                                                         $menuden=DB::table('kelas')  
                                                         //->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')            
                                                         ->leftjoin('tahun', 'tahun.id', '=', 'kelas.idtahun')            
                                                         ->select('kelas.*','tahun.nama as namatahun')
                                                        //->where('idtahun', '=', $idtahun)                                    
                                                        //->where('kelas.waliid', '=', $iduser)                                    
                                                       // ->groupby('jadwal.kelasid')
                                                        ->get();   
                                                      }else
                                                      {
                                                          /*
                                                          $menuden=DB::table('kelas')  
                                                         ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')            
                                                        ->select('kelas.*','guru.nama as namawali')
                                                        ->where('kelas.idtahun', '=', $idtahun)   
                                                        ->where('kelas.waliid', '=', $iduser)                                   
                                                        ->get(); 
                                                        */
                                                       //  $menuden=DB::table('kelas')  
                                                       //   //->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')            
                                                       //   ->leftjoin('tahun', 'tahun.id', '=', 'kelas.idtahun')            
                                                       //  ->select('kelas.*','tahun.nama as namatahun')
                                                       //  //->where('kelas.idtahun', '!=',1)                                    
                                                       //  //->where('idtahun', '=', $idtahun)                                    
                                                       // // ->where('kelas.waliid', '=', $iduser)                                    
                                                       //  ->groupby('kelas.mapelid')
                                                       //  ->get();   

                                                          $menuden=DB::table('jadwal')  
                                                         ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')            
                                                         ->leftjoin('tahun', 'tahun.id', '=', 'jadwal.tahunid')            
                                                        ->select('kelas.nama','jadwal.id','tahun.nama as namatahun')
                                                        ->where('jadwal.guruid', '=',$iduser)                                    
                                                        ->where('idtahun', '!=', 1)                                    
                                                       // ->where('kelas.waliid', '=', $iduser)                                    
                                                       // ->groupby('jadwal.mapelid')
                                                       /// ->groupby('jadwal.tahunid')   
                                                       // ->groupby('jadwal.guruid')   
                                                        ->orderby('jadwal.tahunid')                                                      
                                                        ->get();   
                                                      }
                        
                          
                         ?>
                         @foreach ($menuden as $key)
                         <?php
                          if( $idkelas == $key->id ){ 
                              echo "<option selected = 'selected' value='".$key->id."'>".$key->namatahun."-".$key->nama."</option>";
                          } else{ 
                              echo "<option value='".$key->id."'>".$key->namatahun."-".$key->nama."</option>";
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
    
       
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                     <table class="table table-hover">
                                      <thead>
                                        <tr>
                                          <th class="center">#</th>

                                      
                                          <th>Hari</th>

                                         
                                          <th class="hidden-480">Mata Pelajaran</th>
                                          <th class="hidden-xs">Mulai</th>  
                                          <th class="hidden-xs">Selesai</th>  
                                          <th class="hidden-xs">Ruang</th>  
                                          <th class="hidden-xs">Nama Guru</th>  
                                          <th>Nilai</th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                           {{ csrf_field() }}
                                                        <?php $no=1; ?>
                                                            @foreach($rec as $abc)

                                                           <tr>
                                            <td class="center">{{$no++}}</td>
                                            <td><a href="#"> {{$abc->namahari}}</a></td>
                                             <td><a href="#"> {{$abc->namamapel}}</a></td>
                                            <td align="right">{{$abc->jammulai}} </td>
                                            <td align="right">{{$abc->jamselesai}} </td>
                                            <td align="right">{{$abc->namaruang}} </td>
                                            <td align="right">{{$abc->namaguru}} </td>
                                          
                                            <td>
                                              <?php if ($no>=1) { ?> 
                                                      <div class="hidden-sm hidden-xs action-buttons">
                                              <a href="{{ URL::asset('/inputnilaiakhir/'.$abc->id.'/'.$induk.'/'.$idtahun) }}"    class="red"    >
                                              <i class="ace-icon fa fa-trash-o fa-file-text-o"></i>

                                              </a>
                                              </div>               

                                                 <?php } ?>
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



