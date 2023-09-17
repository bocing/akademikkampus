
  
<?php 

$idkelas =$idkelas ;
  
 
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
    <form method="post" enctype="multipart/form-data" action="<?=URL::to('carinamasiswasikap'.'/'.$induk)  ?>">
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
                          $total=DB::table('tahun')
                                                        ->select('*') 
                                                        ->where('tahun.aktif', '=', 'Y')                 
                                                        ->first();
                                                        $idtahun =$total->id;   

                                                    if ($idrole!=14){

                                                         $menuden=DB::table('kelas')  
                                                         ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')            
                                                        ->select('kelas.*','guru.nama as namawali')
                                                        ->where('idtahun', '=', $idtahun)                                    
                                                        ->get();
                                                        }else{
                                                           $menuden=DB::table('kelas')  
                                                         ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')            
                                                        ->select('kelas.*','guru.nama as namawali')
                                                        ->where('idtahun', '=', $idtahun)                                    
                                                        ->where('waliid', '=', $iduser)                                    
                                                        ->get();
                                                        } 


                        
                          
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
                          if( $idtahun == $key->id ){ 
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
    
      
 <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpannilaisikap'.'/'.$idkelas.'/'.$induk)  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
          <input type="hidden" name="idtahun" value="{{$idtahun}}">    
       
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">

          <br/>

        <?php  if ($simpan =='Y') {?>                                      
                <div class="col-sm-12">              
                                       <button type="submit" name="Simpan" class="btn btn-block btn-primary" >Simpan</button>                              
                                    </div>

                                    <?php } ?>

            <div class="box-body">

                <div class="form-group">
                     <tr> 
                     <table class="table table-hover">
                                      <thead>
                                        <tr>
                                          <th style="width: 2%">#</th>

                                      
                                          <th style="width: 8%">Nis</th>

                                          <th>Nama</th>
                                         
                                          <th style="width: 8%">Nilai</th>  
                                          
                                          <th style="width: 70%"> Deskripsi</th>    
                                           
                                          
                                        </tr>
                                      </thead>

                                      <tbody>
   {{ csrf_field() }}
                <?php $no=1; 
                   $rec=DB::table('kelassiswa')  
                 ->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')            
                ->select('kelassiswa.*','siswa.nama as namasiswa','siswa.nis as nissiswa')
                ->where('idkelas', '=', $idkelas)                                    
                ->get(); 

                ?>
                    @foreach($rec as $abc)

                          <?php 
                            
                            $rec2=DB::table('t_sikap_semester')
                                    ->select('*')                 
                                    ->where('idsiswa','=',$abc->idsiswa)
                                     ->where('tahunid','=',$idtahun)
                                    
                                    ->first();
                                   if ($rec2!=null){
                                      $angkas=$rec2->angkas;
                                      $angkasos=$rec2->angkassos;
                                      $cat=$rec2->cat;

                                      //$sosial_predikat =$rec2->sosial_predikat;
                                     // $spritual_predikat =$rec2->spiritual_predikat;
                                      $sosial_des =$rec2->sosial_deskripsi;
                                      $spritual_des =$rec2->spiritual_deskripsi;

                                       
                                    }else{
                                     $angkas='';
                                      $angkasos='';
                                      $cat='';

                                      $sosial_predikat ='';
                                      $spritual_predikat ='';
                                      $sosial_des ='';
                                      $spritual_des ='';


                                    }


                          ?>          
                                                           <tr>
                                            <td class="center">{{$no++}}</td>
                                            <td><a href="#"> {{$abc->nissiswa}}</a></td>
                                            <td><a href="#"> {{$abc->namasiswa}}</a></td>
                                            <input type="hidden" name="idsiswa[]"  value="{{ isset($abc->idsiswa) ? $abc->idsiswa : '' }}">       
                 <tr>
                <th></th>
                <th></th>
                <th>NA-Des Spiritual</th>                             
                 <th align="center" >
                <input  class="form-control"    maxlength="2" type="text" name="angkas[]" type="text" id="angkas" value="{{ isset($angkas) ? $angkas : '' }}"> 
                </th>
                <th>
                <input   class="form-control"   type="text" name="des_spritual[]" type="text" id="des_spritual" value="{{ isset($spritual_des) ? $spritual_des : '' }}"> 
                </th>
                
                <tr>
                <th></th>
                <th></th>
                <th>NA-Des Sosial</th>
                <th align="center">
                <input  class="form-control"    maxlength="2" type="text" id="angkasos[]" name="angkasos[]" placeholder="" value="{{ isset($angkasos) ? $angkasos : '' }}" autocomplte="off" />
                </th>
                <th >
                <input   class="form-control"   type="text" id="des_sosial[]" name="des_sosial[]" placeholder="" value="{{ isset($sosial_des) ? $sosial_des : '' }}"
                </th>
                </tr>

                

                <tr>
                <th></th>
                <th></th>
                <th>Catatan Wali Kelas</th>
                <th></th>
                <th align="center">
                <textarea class="form-control"  rows="4"    id="cat[]" name="cat[]"   > {{ isset($cat) ? $cat : '' }}</textarea>  

                </th>
                </tr>
                 


                                            
                                            

                                        </tr>
                                         @endforeach()

                                         <tr>
                                 




                                           
                                           <tr>

                                     
                                      
                                             


                                        </tr>




                                      </tbody>
                                    </table>

                </div> 

                     
                  <?php  if ($simpan =='Y') {?>                                      
                <div class="col-sm-12">              
                                       <button type="submit" name="Simpan" class="btn btn-block btn-primary" >Simpan</button>                              
                                    </div>

                                    <?php } ?>
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



