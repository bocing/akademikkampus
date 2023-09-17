
  
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
                                      
                                      <tbody>
                                           {{ csrf_field() }}
                                            <?php $no=1; 
                                             $rec2=DB::table('seko')  
                                             
                                              ->select('*')                 
                                               
                                              ->get();

                                            ?>
                                                @foreach($rec2 as $abc)


                                                           <tr>
                                             
                                            

  
   
<th align="center" >Kode</th><th>
<input  class="form-control"     type="text" name="kode" type="text" id="kode" value="{{ isset($abc->kode) ? $abc->kode : '' }}"> 
</th>
<tr>
<th align="center" >Nama Sekolah</th><th>
<input  class="form-control"     type="text" name="nama" type="text" id="kode" value="{{ isset($abc->nama) ? $abc->nama : '' }}"> 
</th>
<tr>
<th align="center" >Kepala Sekolah</th><th>
<input  class="form-control"     type="text" name="kepsek" type="text" id="kepsek" value="{{ isset($abc->kepsek) ? $abc->kepsek : '' }}"> 
</th>
<tr>
<th align="center" >Nip</th><th>
<input  class="form-control"     type="text" name="nip" type="text" id="nip" value="{{ isset($abc->nip) ? $abc->nip : '' }}"> 
</th>
<tr>
<th align="center" >NSM</th><th>
<input  class="form-control"     type="text" name="kode" type="text" id="kode" value="{{ isset($abc->nsm) ? $abc->nsm : '' }}"> 
</th>
<tr>
<th align="center" >NPSN</th><th>
<input  class="form-control"     type="text" name="npsn" type="text" id="npsn" value="{{ isset($abc->npsn) ? $abc->npsn : '' }}"> 
</th>
<tr>
<th align="center" >Alamat</th><th>
<input  class="form-control"     type="text" name="alamat" type="text" id="alamat" value="{{ isset($abc->alamat) ? $abc->alamat : '' }}"> 
</th>
<tr>
<th align="center" >Kelurahan</th><th>
<input  class="form-control"     type="text" name="kel" type="text" id="kel" value="{{ isset($abc->kel) ? $abc->kel : '' }}"> 
</th>
 <tr>
 <th align="center" >Kecamatan</th><th>
<input  class="form-control"     type="text" name="kec" type="text" id="kec" value="{{ isset($abc->kec) ? $abc->kec : '' }}"> 
</th>
<tr>
<th align="center" >Kabupaten/Kota</th><th>
<input  class="form-control"     type="text" name="kota" type="text" id="kota" value="{{ isset($abc->kota) ? $abc->kota : '' }}"> 
</th>
<tr>
<th align="center" >Propinsi</th><th>
<input  class="form-control"     type="text" name="prop" type="text" id="prop" value="{{ isset($abc->prop) ? $abc->prop : '' }}"> 
</th>
<tr>
<tr>
<th align="center" >Kode Pos</th><th>
<input  class="form-control"     type="text" name="kodepos" type="text" id="kodepos" value="{{ isset($abc->kodepos) ? $abc->kodepos : '' }}"> 
</th>
<tr>
<tr>
<th align="center" >Email</th><th>
<input  class="form-control"     type="text" name="email" type="text" id="email" value="{{ isset($abc->email) ? $abc->email : '' }}"> 
</th>
<tr>
<th align="center" >Web Site</th><th>
<input  class="form-control"     type="text" name="web" type="text" id="web" value="{{ isset($abc->web) ? $abc->web : '' }}"> 
</th>

<tr>
<th align="center" >No Telp</th><th>
<input  class="form-control"     type="text" name="telp" type="text" id="telp" value="{{ isset($abc->telp) ? $abc->telp : '' }}"> 
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



