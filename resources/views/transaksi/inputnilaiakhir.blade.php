
  
<?php 

//$idkelas =$idkelas ;
$idjadwal=$idjadwal;
$idtahun=$idtahun;

$total=DB::table('tahun')
                ->select('*') 
                ->where('tahun.aktif', '=', 'Y')                 
                ->first();
             $idtahunaktif =$total->id; 

$total2=DB::table('jadwal')
       ->select('*') 
       ->where('id', '=', $idjadwal )                 
       ->first();
if ($total2!=null){
        $idkelas =$total2->kelasid;
         $idguru =$total2->guruid; 
         $idmapel =$total2->mapelid;   
         $idtahun =$total2->tahunid;    
 
       }else{
         $idkelas =0;
         $idguru =0; 
         $idmapel =0;   
         
       }

$kkm = DB::table('nilaikb')
           ->select('*')                           
           ->where('tahunid','=',$idtahun)
           ->where('mapelid','=',$idmapel)
           ->first();
     if ($kkm!=null ){
           $nilaikb=$kkm->nilaikb;
         }else{
           $nilaikb=0;
         }

$mades = DB::table('mades')
           ->select('*')                           
           ->where('tahunid','=',$idtahun)
           ->where('mapelid','=',$idmapel)
           ->first();
           if ($mades!=null){
           $desap=$mades->desap;         
           $desbp=$mades->desbp;         
           $descp=$mades->descp;         
           $desdp=$mades->desdp;         

           $desak=$mades->desak;         
           $desbk=$mades->desbk;         
           $desck=$mades->desck;         
           $desdk=$mades->desdk;    
           }else{
             $desap='';         
           $desbp='';      
           $descp='';      
           $desdp='';      

           $desak='';      
           $desbk='';      
           $desck='';      
           $desdk='';      
           }     

 
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
                                                       //  //->where('idtahun', '=', $idtahun)                                    
                                                       //  //->where('kelas.waliid', '=', $iduser)                                    
                                                       // // ->groupby('jadwal.kelasid')
                                                       //  ->get();   


                                                         $menuden=DB::table('jadwal')  
                                                         ->leftjoin('kelas', 'kelas.id', '=', 'jadwal.kelasid')            
                                                         ->leftjoin('tahun', 'tahun.id', '=', 'jadwal.tahunid')            
                                                        ->select('kelas.nama','jadwal.id','tahun.nama as namatahun')
                                                        ->where('jadwal.guruid', '=',$iduser)                                    
                                                        ->where('idtahun', '!=', 1)                                    
                                                       // ->where('kelas.waliid', '=', $iduser)                                    
                                                        ->groupby('jadwal.mapelid')
                                                        ->groupby('jadwal.tahunid')   
                                                        ->orderby('jadwal.tahunid')                                           
                                                        ->get();   
                                                      }
                        
                        
                          
                         ?>
                         @foreach ($menuden as $key)
                         <?php
                         if( $idjadwal == $key->id ){ 
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
     
 <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpannilaiakhir'.'/'.$idjadwal.'/'.$induk)  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
         
           
         
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                          @if($idtahunaktif==$idtahun) 
                              <div class="col-sm-12">
                                      
                                       <button type="submit" name="Simpan" class="btn btn-block btn-primary" >Simpan</button>
                              
                                    </div>
                         @endif           
                     <table class="table table-hover">
                                      <thead>

                                        <tr>
                                          <th class="center">#</th>

                                          <th>ID Siswa Tabel Siswa</th>
                                           <th>ID Siswa Tabel Kelas</th>
                                          <th>Nis</th>
                                          <th style="width: 13%">Nama</th>                                         
                                          <th style="width: 8%">NA Peng</th>  
                                          <th style="width: 8%" >NA Ket</th>
                                          
                                          <th>Desc Pengetahuan</th>  
                                          <th style="width: 4%">Predikat</th>    
                                          <th style="width: 4%" >Predikat</th>  
                                           <th >Desc Keterampilan</th>  
                                         
                                          
                                        </tr>
                                      </thead>

                                      <tbody>
                                           {{ csrf_field() }}
                                            <?php $no=1; 
                                             $rec2=DB::table('kelassiswa')    
                                              ->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')                                                                                   
                                              ->select('kelassiswa.*','siswa.nama as namasiswa','siswa.nis as nis','siswa.id as idsiswa','kelassiswa.idsiswa as idsiswa2')                 
                                              ->where('idkelas','=',$idkelas)
                                              ->get();

                                            ?>
                                                @foreach($rec2 as $abc)


                                                           <tr>
                                            <td class="center">{{$no++}}</td>
                                            <td> {{$abc->idsiswa}} </td>
                                             <td> {{$abc->idsiswa2}} </td>
                                            <td> {{$abc->nis}} </td>
                                             <td> {{$abc->namasiswa}} </td>
  
<?php 
    $prep ='';
    $prek ='';

 


  $rec2=DB::table('nilaisiswa')
          ->select('*')                 
          ->where('idsiswa','=',$abc->idsiswa)
           ->where('tahunid','=',$idtahun)
           ->where('idmapel','=',$idmapel)
          ->first();

          if ($rec2!=null)
          {
            $angkap =$rec2->angkap;
            $angkak =$rec2->angkak;        

            $desp =$rec2->desp;
            $desk =$rec2->desk;

               
            if ($angkap > 0 && trim($desp) !=''){
               // dd($angkap);



                    $interval = (100 - ($nilaikb))/3;
                    $min_a = ($nilaikb+($interval+$interval));
                    $min_b = ($nilaikb+($interval-1));
                    $min_c = ($nilaikb);

                    if ($angkap >= $min_a)
                        {                            
                            $prep = 'A';         
                        }
                    elseif ($angkap >= $min_b)
                        {                             
                            $prep = 'B';                                             
                        }
                    else 
                    //($angkap >= $min_c)
                        { 
                            $prep = 'C';                                                       
                        }
                    //elseif ($angkap >= 0) 
                      //  {  
                       //     $prep = 'D';                                                    
                       // }
                    // else 
                     //   {  $prep = '';                                     
                      //  }    

                     $desp=$desp;
               
                     
                }elseif ($angkap > 0 && trim($desp) =='') {
                 
                      $interval = (100 - ($nilaikb))/3;
                      $min_a = ($nilaikb+($interval+$interval));
                      $min_b = ($nilaikb+($interval-1));
                      $min_c = ($nilaikb);

                      if ($angkap >= $min_a)
                          {                            
                              $prep = 'A';
                              $desp=$desap;         
                          }
                      elseif ($angkap >= $min_b)
                          {                             
                              $prep = 'B';                                             
                              $desp=$desbp;
                          }
                      else //if ($angkap >= $min_c)
                          { 
                              $prep = 'C'; 
                              $desp=$descp;                                                      
                          }
                      //elseif ($angkap >= 0) 
                        //  {  
                          //    $prep = 'D'; 
                           //   $desp=$desdp;                                                   
                         // }
                       //else 
                         // {  $prep = '';   
                           //  $desp='';                                  
                          //}    
                        
                         // dd($desp);
                  }

         //================================================================

                  if ($angkak > 0 && trim($desk) !=''){
               // dd($angkap);
                    $interval = (100 - ($nilaikb))/3;
                    $min_a = ($nilaikb+($interval+$interval));
                    $min_b = ($nilaikb+($interval-1));
                    $min_c = ($nilaikb);

                    if ($angkak >= $min_a)
                        {                            
                            $prek = 'A';         
                        }
                    elseif ($angkak >= $min_b)
                        {                             
                            $prek = 'B';                                             
                        }
                    else //if ($angkak >= $min_c)
                        { 
                            $prek = 'C';                                                       
                        }
                    //elseif ($angkak >= 0) 
                      //  {  
                        //    $prek = 'D';                                                    
                      //  }
                     //else 
                       // {  $prek = '';                                     
                       // }    

                     $desk=$desk;
               
                     
                }elseif ($angkak > 0 && trim($desk) =='') {
                 
                      $interval = (100 - ($nilaikb))/3;
                      $min_a = ($nilaikb+($interval+$interval));
                      $min_b = ($nilaikb+($interval-1));
                      $min_c = ($nilaikb);

                      if ($angkak >= $min_a)
                          {                            
                              $prek = 'A';
                              $desk=$desak;         
                          }
                      elseif ($angkak >= $min_b)
                          {                             
                              $prek = 'B';                                             
                              $desk=$desbk;
                          }
                      else //if ($angkak >= $min_c)
                          { 
                              $prek = 'C'; 
                              $desk=$desck;                                                      
                          }
                      //elseif ($angkak >= 0) 
                        //  {  
                          //    $prek = 'D'; 
                           //   $desk=$desdk;                                                   
                         // }
                       //else 
                         // {  $prek = '';   
                          //   $desk='';                                  
                          //}    
                        
                         // dd($desp);
                  }
          


          
            
          }else{
            $angkap ='';
            $angkak ='';
            $angkas ='';
            $desp ='';
            $desk ='';
            $dess ='';
            $prep ='';

          }
  
         //dd($desp);
?>
@if($idtahunaktif==$idtahun) 
<input type="hidden" name="idsiswa[]"  value="{{ isset($abc->idsiswa) ? $abc->idsiswa : '' }}">       
 <th align="center" >
<input  class="form-control"    maxlength="2" type="text" name="angkap[]" type="text" id="angkap" value="{{ isset($angkap) ? $angkap : '' }}"> 
</th>
@else
<input type="hidden" name="idsiswa[]"  value="{{ isset($abc->idsiswa) ? $abc->idsiswa : '' }}" readonly="true">       
 <th align="center" >
<input  class="form-control"    maxlength="2" type="text" name="angkap[]" type="text" id="angkap" value="{{ isset($angkap) ? $angkap : '' }}" readonly="true"> 
</th>
@endif



@if($idtahunaktif==$idtahun) 
<th align="center">
<input  class="form-control"    maxlength="2" type="text" name="angkak[]" id="angkak" placeholder="" value="{{ isset($angkak) ? $angkak : '' }}" autocomplte="off" >
</th>
@else
<th align="center">
<input  class="form-control"    maxlength="2" type="text" name="angkak[]" id="angkak" placeholder="" value="{{ isset($angkak) ? $angkak : '' }}" autocomplte="off" readonly="true">
</th>
@endif

<!--
<td>{{$prep}}</td>

<td>{{$prek}}</td>

<td>
<textarea rows="3"  class="form-control"   type="text" name="desp[]" type="text" id="desp" >{{ isset($desp) ? $desp : '' }} </textarea>
</td>



<td >
<textarea rows="3" class="form-control"   type="text" id="desk[]" name="desk[]" placeholder="" >{{ isset($desk) ? $desk : '' }} </textarea> 
</td> -->
 

                                             

                                        </tr>
                                         @endforeach()

                                         <tr>
                                 

 

                                        </tr>




                                      </tbody>

                                    </table>
                                    @if($idtahunaktif==$idtahun) 
                                    <div class="col-sm-12">
                                      
                                       <button type="submit" name="Simpan" class="btn btn-block btn-primary" >Simpan</button>
                              
                                    </div>
                                    @endif
                </div> 

                     
                 
            </div>
          </div>         
        </div>
        <!-- /.col (left) -->
       
      </div>
 

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
    var angkap = $("#angkap").val();
    var angkak = $("#angkak").val();
    
    var total = $desa;
    $("#desp").val(total);
  }

  function hitung2(){
    var um = $("#um").val();
    var tot = $("#tot").val();
    
    
    var sisa =parseInt(tot)- parseInt(um);
    $("#sisa").val(sisa);
  }

  

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



