
  
<?php 
 


if ($tambah ==true ){
$nobel =$nobel ; 
//$idpel =$idpel ;
$iddep =$iddep ;
$iduser =$iduser ;
$idstok ='' ;
$ket ='' ;
$jml ='' ; 
$harga ='';
$ketu='';
$total=0;
$tglbel = date('m/d/Y', strtotime($tglbel));


//dd($master);
//dd($total);
} else{
  $total=$total;
  
  if(count ($rec) <= 0  ){
      foreach ($master as $m) {
       $nobel = $m->nobukti;
        $iddep = $m->iddep; 
        //$sisa = $m->sisa;
        $ketu    = $m->ket;  

        $idmek = $m->idkar;
       $tglbel = date('m/d/Y', strtotime($m->tglkas)) ;        
       
    }
    }else{    
    $total=$total;
      foreach ($master as $m) {
        $nobel = $m->nobukti;
        $iddep = $m->iddep; 
        //$sisa = $m->sisa;
        $ketu    = $m->ket;  

        $idmek = $m->idkar;
       $tglbel = date('m/d/Y', strtotime($m->tglkas)) ;
      }

       
        
      foreach ($rec as $j) {
       // $idstok = $j->idstok;
        $jml = $j->jml;
        $harga = $j->harga;
        
      }
  }

}

 //dd($iddep);
//dd($menuden);

//$pemasokid = set_value('kelasid', $data->kelasid); 
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
         <li><a href="{{ url('formkk/'.$induk) }}"><i class="fa fa-fw fa-plus"></i> Tambah </a> </li>
         <li><a href="{{ route('cefak',['download'=>'pdf','nobel'=>$nobel]) }}"><i class="fa fa-fw fa-print"></i> Cetak </a> </li>


      </ol>
    </section>
     
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->
      <form method="post" enctype="multipart/form-data" action="<?=URL::to('savekk')  ?>">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
          <input type="hidden" name="induk" value="{{$induk}}">    
           
          <div class="row">
            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
               
                      <div class="col-sm-6">
                        <label>No Bukti</label>
                        <input type="text" id="nobel" name="nobel" class="form-control" readonly="true" value="{{ isset($nobel) ? $nobel : '' }}"   class="form-control" >
                                       
                            </div>  
                             <div class="col-sm-6"> 
                                <label>Tanggal </label>
                                  <div class="input-group date">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tglbel" class="form-control pull-right" id="datepicker" value="{{ isset($tglbel) ? $tglbel : '' }}" required data-validation-required-message="Please enter your name.">
                                  </div>                         
                             </div>       

                         </div>
                          </div> 

                         
                     
                </div>
              </div>         
            </div>
            <!-- /.col (left) -->
            <div class="col-md-6">
              <div class="box box-primary">           
                 <div class="box-body">               
                      
                      <div class="form-group">
                        <div class="row">
                     
                            <div class="col-sm-6">                 
                                <label>Penanggung Jawab </label>
                                <select name="idmek" id="idmek" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('users')              
                                  ->select('users.*')                                    
                                  ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                  if( $idmek == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nama."</option>";
                                  }
                                  ?>
                                 @endforeach()
                                </select>
                            </div>  

                              <div class="col-sm-6">                 
                                <label>Departemen </label>
                                <select name="iddep" id="iddep" class="form-control select2" style="width: 100%;">                
                                <?php
                                 $menuden=DB::table('departemen')
                                        ->join('ruledep', 'ruledep.iddep', '=', 'departemen.id')
                                        ->select('departemen.*')                 
                                        ->where('ruledep.iduser', '=', $iduser)  
                                        ->where('ruledep.boleh', '=', 'on')  
                                        ->get();

                                       //

                                 //$menuden=DB::table('departemen')              
                                 // ->select('departemen.*')  
                                  
                                 // ->get();
                                  
                                 ?>
                                 @foreach ($menuden as $key)
                                 <?php
                                 $x=$key->id;
                                  if( $iddep == $key->id ){ 
                                      echo "<option selected = 'selected' value='".$key->id."'>".$key->nadep."</option>";
                                  } else{ 
                                      echo "<option value='".$key->id."'>".$key->nadep."</option>";
                                  }
                                  ?>
                                 @endforeach()

                                  
                                </select>
                            </div>  

                             
                              
                         </div>
                      </div>
                      
                       
                 </div>            
              </div>    
            </div>

              <div class="col-md-12">
              <div class="box box-primary">           
                 <div class="box-body">               
                      
                      <div class="form-group">
                        <div class="row">
                     
                             
                           <div class="col-sm-12"> 
                                  <b>Keterangan</b>            
                                 <input type="text"   id="ketu"  name="ketu" value="{{ isset($ketu) ? $ketu : '' }}"  class="form-control" required data-validation-required-message="Please enter your nama."     >                  
                             </div>  
                              
                             
                              
                         </div>
                      </div>
                      
                       
                 </div>            
              </div>    
            </div>
             
          </div>
     
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">       

                                 <input type="hidden"    id="idstok"  name="idstok">                                                            
                            
                            
                            
                             <div class="col-sm-6"> 
                                  <b>Rincian</b>            
                                 <input type="text"   id="ket"  name="ket" class="form-control" required data-validation-required-message="Please enter your nama."     >                  
                             </div>  
                            <div class="col-sm-1">                 
                                 <b>Jumlah</b>            
                                 <input type="text"  id="jumlah"  name="jumlah" class="form-control"  required data-validation-required-message="Please enter your name."    >                                                            
                            </div>       
                            <div class="col-sm-2">                 
                                 <b>Harga</b>            
                                 <input type="text"   id="harga"  name="harga" class="form-control"    required data-validation-required-message="Please enter your name."   >                                                            
                            </div> 

                            <div class="col-sm-2">                 
                                 <b>Sub Total</b>            
                                 <input type="text"    id="total"  name="total" class="form-control"  required data-validation-required-message="Please enter your name."  >                                                            
                            </div> 
                             <div class="col-sm-1">
                              <b>Simpan</b>  
                               <button type="submit" name="Simpan" class="btn btn-danger" ><i class="fa fa-download"></i><i class="fa fa-download"></i></button>
                              
                            </div>

                        </div>
                    </div> 

                         
                     
                </div>
              </div>         
            </div>
            <!-- /.col (left) -->           
          </div>

       
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
                <div class="form-group">
                     <table class="table table-striped table-bordered">
                                      <thead>
                                        <tr>
                                          <th class="center">#</th>
                                          
                                          <th class="hidden-xs">Rincian</th>
                                          
                                          <th class="hidden-480">Qty</th>
                                          <th class="hidden-480">Harga</th>
                                          <th   class="center">Total</th>
                                          <th>Aksi</th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                           {{ csrf_field() }}
                                                        <?php $no=1; ?>
                                                            @foreach($rec as $abc)

                                                           <tr>
                                            <td class="center">{{$no++}}</td>

                                             
                                             
                                            <td class="hidden-480"> {{$abc->ket}} </td>
                                            <td align="right">{{ number_format($abc->jml, 2) }}</td>
                                            <td align="right">{{ number_format($abc->harga, 2) }}</td>
                                            <td align="right">{{ number_format($abc->subtotal, 2) }}</td>

                                            <td>
                                              <?php if ($no>=1) { ?> 
                                                      <div class="hidden-sm hidden-xs action-buttons">
                                              <a href="{{ URL::asset('/deletekkdetil/'.$abc->id.'/'.$induk) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red"    >
                                              <i class="ace-icon fa fa-trash-o bigger-130"></i>

                                              </a>
                                              </div>               

                                                 <?php } ?>
                                             </td> 

                                        </tr>
                                         @endforeach()

                                         <tr>
                                 




                                          <td class="center" colspan="4" align="right">Total</td>
 
                                          <td align="right">{{ number_format($total, 2) }}
                                          <input type="hidden" id="tot" name="tot" value={{$total}}>
                                          </td>
                                           <tr>
                                            <!--
                                  <form method="Post" enctype="multipart/form-data" action="<?=URL::to('simpanregister')  ?>">
                                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
                                  <input type="hidden" name="nobukti" value="{{$nobel}}"> 
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
  



        <script src="{{ URL::asset('lte/modal/js/jquery-1.11.2.min.js')}}"></script> 
        <script src="{{ URL::asset('lte/modal/bootstrap/js/bootstrap.js')}}"></script> 
        <script src="{{ URL::asset('lte/modal/datatables/jquery.dataTables.js')}}"></script> 
        <script src="{{ URL::asset('lte/modal/datatables/dataTables.bootstrap.js')}}"></script> 
        

        <script type="text/javascript">

//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("idstok").value = $(this).attr('data-id');
                document.getElementById("kodestok").value = $(this).attr('data-kode');
                document.getElementById("nama_obat").value = $(this).attr('data-nama');
                document.getElementById("harga").value = $(this).attr('data-harga');
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



