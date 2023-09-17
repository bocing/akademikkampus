<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 50px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 600px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 75px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 500px){
  .modal-content {
    width: 30%;
  }
}
</style>

<?php 

$totsu = 0;
 

  

// if ($tambah !=1 ) {
//       foreach ($rec as $request) {
//          $foto=$request->foto ;
//          $kdsupir = $request -> kdsupir; 
//          $nama = $request -> nama;
//          $noktp = $request -> noktp; 
//          $email = $request -> email;
//          $telp = $request -> telp;
//          $notelpkerabat = $request -> notelpkerabat;
//          $alamat = $request -> alamat;
//          $alamat2 = $request -> alamat2;
//          $kel = $request -> kel;
//          $kec = $request -> kec;
//          $kota = $request -> kota;
//          $suku = $request -> suku;
//          $idlok = $request -> idlok;
//          $rolesid = 12;
//          $jabatan = 'DRIVER';
//          $prop = $request -> prop;
//          $kodepos = $request -> kodepos;
//          $ttl = $request -> ttl;
//          $norek = $request -> norek;
//          $bank = $request -> bank;
//          $agama = $request -> agama;
//          $nosim = $request -> nosim;
//          $tipesim = $request -> tipesim;
//          $notelpistri = $request -> notelpistri;                       
//          $nmistri = $request -> nmistri;
//          $jumanak = $request -> jumanak;
//          $golda = $request -> golda;
//          $tglg = $request -> tglg;
//          $ref = $request -> ref;
//          $status = $request -> status;
         
        



//       }
// }else{
//         $id = '';
//         $nopol = '';       
//         $tipe = '';
//         $thnmobil = '';
//         $thnbeli  = '';
//         $hrgbeli  ='';
//         $ue  = '';
//         $sisaue  = '';
//         $warna='';
//         $tglstnk='';
//         $tglg='';
//         $ref='';
//         $model='';
//         $tglkir='';
//         $kate='';
//         $nobpkb='';
//         $pemilik='';
//         $nosin='';
//         $nosis='';
       
//   }
        $induk = $induk;
 
 $cari=DB::table('users')              
                
                ->where('id', '=', $id)  
                ->first();

                 $caritahun=DB::table('tahun')              
                                ->select('*')                                    
                                ->where('aktif','=','Y')                          
                                ->first();
                                   $idtahun=$caritahun->id;
  
?> 
   
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
                  
      </h1>       
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
               
              <img id="myImg" class="profile-user-img img-responsive img-circle" src="{{asset($cari->foto)}}" alt="User profile picture">

 
              <h3 class="profile-username text-center">{{$cari->nama}}</h3>

              <p class="text-muted text-center">Dosen</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">

                  <b>Beban SKS Bulan ini</b> <a class="pull-right">18</a>
                </li>
               
              </ul>

               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Perform</a></li>
              <li><a href="#timeline" data-toggle="tab">Riwayat Dosen</a></li>
              <li><a href="#settings" data-toggle="tab">Update Data</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                 <div class="form-group">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Jadwal Semester Ini</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <?php
            $rec=DB::table('vjadwalrapor')    
                             
                ->where('tahunid','=',$idtahun)
                ->where('idguru','=',$id)

                ->get();      
                ?>         
            <!-- /.box-header -->
            <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                       <th>Hari</th>

                                         <th class="hidden-480">Kode Mapel</th>
                                          <th class="hidden-480">Mata Pelajaran</th>
                                          <th class="hidden-xs">Mulai</th>  
                                          <th class="hidden-xs">Selesai</th>
                                          <th class="hidden-xs">Prodi</th> 
                                          <th class="hidden-xs">Matakuliah</th>  
                                          <th class="hidden-xs">Ruang</th>  
                                          <th class="hidden-xs">Dosen</th>  
                          
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                         <?php $no=1;
                         

                          
                          ?>
                         @foreach($rec as $abc) 
                          <?php 
                        
                          ?>
                              
                        <tr>
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
                <tfoot>
                
                </tfoot>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
              </div>





              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpansopir')  ?>">
   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
   <input type="hidden" name="tambah" value={{$tambah}}>
      <input type="hidden" name="induk" value={{$induk}}>
      <input type="hidden" name="idmenu" value={{$idmenu}}>
      <input type="hidden" name="id" value={{$id}}>
      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
             
            <div class="box-body">
            <div class="form-group">
                <b>Kode</b>            
                  <input type="text"   name="kdsupir" style="width:60%;"   value="{{ isset($kdsupir) ? $kdsupir : '' }}"  class="form-control">  
            </div>
            <div class="form-group">
              <b>Nama</b>            
                  <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}"  class="form-control"> 
            </div>
                  
                               
            <div class="form-group">
              <b>No KTP</b>            
                  <input type="text" name="noktp"  value="{{ isset($noktp) ? $noktp : '' }}"  class="form-control"> 
            </div>

            <div class="form-group">
               <b>Email</b>            
                  <input type="text" name="email"  value="{{ isset($email) ? $email : '' }}"  class="form-control"    > 
            </div>   
            <div class="form-group">
               <b>Telp</b>            
                  <input type="text" name="telp"  value="{{ isset($telp) ? $telp : '' }}"  class="form-control"    > 
            </div>   
             <div class="form-group">
               <b>Telp Kerabat</b>            
                  <input type="text" name="notelpkerabat"  value="{{ isset($notelpkerabat) ? $notelpkerabat : '' }}"  class="form-control"    > 
            </div>  
            <div class="form-group">
               <b>Alamat</b>            
                  <input type="text" name="alamat"  value="{{ isset($alamat) ? $alamat : '' }}"  class="form-control"  > 
            </div>  
            <div class="form-group">
               <b>Alamat 2</b>            
                  <input type="text" name="alamat2"  value="{{ isset($alamat2) ? $alamat2 : '' }}"  class="form-control"   > 
            </div>  
            <div class="form-group">
               <b>Kelurahan</b>            
                  <input type="text" name="kel"  value="{{ isset($kel) ? $kel : '' }}"  class="form-control"    > 
            </div>  
            <div class="form-group">
               <b>Kecamatan</b>            
                  <input type="text" name="kec"  value="{{ isset($kec) ? $kec : '' }}"  class="form-control"    > 
            </div>  
            <div class="form-group">
               <b>Kota / Kabupaten</b>            
                  <input type="text" name="kota"  value="{{ isset($kota) ? $kota : '' }}"  class="form-control"    > 
            </div>  
             <div class="form-group">
               <b>Propinsi</b>            
                  <input type="text" name="prop"  value="{{ isset($prop) ? $prop : '' }}"  class="form-control"    > 
            </div> 
             <div class="form-group">
               <b>Suku</b>            
                  <input type="text" name="suku"  value="{{ isset($suku) ? $suku : '' }}"  class="form-control"    > 
            </div> 
             <div class="form-group">
               <b>Kode Pos</b>            
                  <input type="text" name="kodepos"  value="{{ isset($kodepos) ? $kodepos : '' }}"  class="form-control"    > 
            </div> 
            

                                                               
                        

                </div>
                <!-- /.box-body -->
              </div>

          
          <!-- /.box -->

        
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
             
            <div class="box-body">
            <div class="form-group">
               <b>Tempat Tanggal Lahir</b>            
                  <input type="text" name="ttl"  value="{{ isset($ttl) ? $ttl : '' }}"  class="form-control"    > 
            </div> 

             <div class="form-group">
               <b>No Rekening</b>            
                  <input type="text" name="norek"  value="{{ isset($norek) ? $norek : '' }}"  class="form-control"    > 
            </div> 

              <div class="form-group">
               <b>Bank</b>            
                  <input type="text" name="bank"  value="{{ isset($bank) ? $bank : '' }}"  class="form-control"    > 
            </div>
              
                             <!-- Input Sebelah Kanan-->
            <div class="form-group">
               <b>Agama</b>            
                  <input type="text" name="agama"  value="{{ isset($agama) ? $agama : '' }}"  class="form-control"    > 
            </div> 
                 
            <div class="form-group">
               <b>No Sim</b>            
                  <input type="text" name="nosim"  value="{{ isset($nosim) ? $nosim : '' }}"  class="form-control"  > 
            </div> 

             <div class="form-group">
               <b>Tipe Sim</b>            
                  <input type="text" name="tipesim"  value="{{ isset($tipesim) ? $tipesim : '' }}"  class="form-control"    > 
            </div>  
             <div class="form-group">
               <b>Nama Istri</b>            
                  <input type="text" name="nmistri"  value="{{ isset($nmistri) ? $nmistri : '' }}"  class="form-control"    > 
            </div>  
            <div class="form-group">
               <b>No Telp Istri</b>            
                  <input type="text" name="notelpistri"  value="{{ isset($notelpistri) ? $notelpistri : '' }}"  class="form-control"> 
            </div>

            <div class="form-group">
               <b>Jumlah Anak</b>            
                  <input type="text" name="jumanak"  value="{{ isset($jumanak) ? $jumanak : '' }}"  class="form-control" > 
            </div>  

            <div class="form-group">
               <b>Golongan Darah</b>            
                  <input type="text" name="golda"  value="{{ isset($golda) ? $golda : '' }}"  class="form-control"> 
            </div>  
            
            <div class="form-group">
               <b>Tanggal Bergabung</b>            
                  <input type="text" name="tglg"  value="{{ isset($tglg) ? $tglg : '' }}"  class="form-control">  [DD-MM-YYYY]
            </div>  
            <div class="form-group">
               <b>Referensi</b>            
                  <input type="text" name="ref"  value="{{ isset($ref) ? $ref : '' }}"  class="form-control">
            </div> 
              
  
                             
                               

                              <div class="form-group">
                               Upload Foto
                                  <input type="file" name="file[]" multiple=""> </br>
                              </div>

                                <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" name="Simpan" class="btn btn-success" onclick="$('#loading').show();" >
                                      <i class="ace-icon fa fa-download bigger-110 blue"></i>
                                      Simpan
                                    </button>
                        </div>
                                    <div id="loading" style="display:none;"><img src="{{ URL::asset('images/simpan.gif')}}" alt="" /></div>
                         </div>   

                
           
            </div>
            
          </div>
         
        </div>
         
      </div>

</form>     
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
    <!-- /.content -->
  </div>

<script>
function onClick(element) {
document.getElementById("img01").src = element.src;
document.getElementById("modal01").style.display = "block";
}
</script>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>