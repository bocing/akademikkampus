<?php 
  //dd($data->idbiayap2j);
  use App\Http\Controllers\AdminController;

  ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
           
    </section>
<?php 
$nape=$data->nape; 
$nama=$data->nama ;
$selo=$data->selogan ;
$foto=$data->foto ;
 $js=DB::table('siswa')
                    ->select(DB::raw('count(siswa.nama) as total'))                 
                    //->where('belid.nobel', '=', $nobel)                      
                    ->first();   

                     
    
    $idtahun=11; 

?>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <img class="profile-user-img img-responsive img-box" src="{{asset($foto)}}" alt="">

                

               <a href data-toggle="modal" data-target="#gantifoto" align="center">Ganti Logo</a>
                              
              
               
              
              <a href data-toggle="modal" data-target="#pemilik"><h3 align="center"> {{$nape}}</h3></a>

            
               

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                <?php
                $js=DB::table('siswa')
                    ->select(DB::raw('count(siswa.nama) as total'))                 
                    //->where('belid.nobel', '=', $nobel)                      
                    ->first();   

                $jg=DB::table('guru')
                    ->select(DB::raw('count(nama) as total'))                 
                    //->where('belid.nobel', '=', $nobel)                      
                    ->first();   
                 $jk=DB::table('users')
                    ->select(DB::raw('count(nama) as total'))                 
                    //->where('belid.nobel', '=', $nobel)                      
                    ->first();       

                ?>
                  <b>Jumlah Siswa</b> <a class="pull-right">{{$js->total}}</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Guru</b> <a class="pull-right">{{$jg->total}}</a>
                </li>
                
                <li class="list-group-item">
                  <b>Jumlah Karyawan</b> <a class="pull-right">{{$jk->total}}</a>
                </li>
                
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Identitas Sekolah</a></li>
              <li><a href="#timeline" data-toggle="tab">Komponen Gaji</a></li>
              <li><a href="#settings" data-toggle="tab">Setting</a></li>
              <li><a href="#settingcoa" data-toggle="tab">Setting COA</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                 <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          Nama Sekolah
                        </span>
                  </li>                 
                  <p>
                    <h4><a href data-toggle="modal" data-target="#namatoko"><h4 align="center"> {{$nama}}</h4></a></h4>
                  </p>
                  <li class="time-label">
                        <span class="bg-red">
                          Selogan Sekolah
                        </span>
                  </li>
                     <p>
                        <h4><a href data-toggle="modal" data-target="#selogan"><h4 align="center"> {{$selo}}</h4></a></h4>
                     </p>
                   <li class="time-label">
                        <span class="bg-red">
                          Alamat Sekolah
                        </span>
                        <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href data-toggle="modal" data-target="#alamat">Jalan/Komplek :</a> {{$data->alamat}}
                            </h3>
                          </div>
                        </li>
                        <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href data-toggle="modal" data-target="#alamat">Kelurahan/Desa :</a> {{$data->kel}}
                            </h3>
                          </div>
                        </li>
                        <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                             

                            <h3 class="timeline-header no-border"><a href data-toggle="modal" data-target="#alamat">Kecamatan :</a> {{$data->kec}}
                            </h3>
                          </div>
                        </li>
                         <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href data-toggle="modal" data-target="#alamat">Kabupaten/Kota :</a> {{$data->kota}}
                            </h3>
                          </div>
                        </li>
                        <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href data-toggle="modal" data-target="#alamat">Kode Pos :</a> {{$data->kodepos}}
                            </h3>
                          </div>
                        </li>
                        <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href data-toggle="modal" data-target="#alamat">Propinsi :</a> {{$data->prop}}
                            </h3>
                          </div>
                        </li>

                        <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href data-toggle="modal" data-target="#alamat">Email :</a> {{$data->email}}
                            </h3>
                          </div>
                        </li>
                        <li>
                          <i class="fa fa-user bg-aqua"></i>
                          <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href data-toggle="modal" data-target="#alamat">Telp :</a> {{$data->telp}}
                            </h3>
                          </div>
                        </li>

                  </li>
                     
                   
                
                <!-- /.post -->

                <!-- Post -->
                 
                <!-- /.post -->

                <!-- Post -->
                   
                </ul>  
                
                <section class="content">
                    

                   
                </section>



                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                 <div class="col-sm-2">
                    <a data-toggle="modal" data-target="#tambahdata"><button type="button" class="btn btn-block btn-warning btn-sm">Tambah</button></a>
                </div>
                <section class="content">
                   <div class="row">
                      <div class="col-xs-12">
                         
                        <div class="box">
                           
                          <!-- /.box-header -->
                          <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                    <th>No</th>                          
                                       
                                        <th>Nama</th>
                                            
                              </tr>
                              </thead>
                              <tbody>
                              
                              </tbody>
                               
                            </table>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      </div>
                      <!-- /.col -->
                    </div>

                   
                </section>

              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="settings">
                 <div class="box-body">      
                    <form class="form-horizontal"  method="post" class="contact-form row" enctype="multipart/form-data" action="<?=URL::to('simpanjamkerja')  ?>">
                      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                       <div class="form-group " >
                        <div class="col-sm-12">
                          <div class="box box-danger">
                            <div class="box-header with-border">
                              <h3 class="box-title">Setting Utama</h3>
                              <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                              

                               
                               

                              


                               <div class="form-group">
                                <div class="row">  
                                   <div class="col-sm-6">
                                     <label >Role Dosen</label>
                                       <select name="iddosen" id="iddosen" class="form-control" select2 style="width: 100%;">
                                                 <?php
                                                   //$menuden = \App\Role::where('id','!=',5)->get();                   
                                                   

                                                    $menuden=DB::table('role')              
                                                      ->select('role.*')                                                                       
                                                     
                                                      ->get();
                 
                                                   foreach($menuden as $rows){
                                                    if( $data->iddosen == $rows->id ){ 
                                                        echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                                                    } else{ 
                                                        echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                                                    }
                                                    }
                                                    ?> 
                                                </select>
                                  </div>
                                 <div class="col-sm-6">
                                         <label >Metode Pembayarang Uang Kuliah</label>
                                         
                                        
                                  </div>

                                </div> 


                              </div>   
                              <div class="form-group">
                                    <div class="row"> 
                                       <div class="col-sm-6">
                                           <label >Role Tendik PMB</label>
                                            
                                       </div>
                                      
                                       <div class="col-sm-6">
                                     
                                  </div>

                                        
                                       
                                    </div>
                               </div>  

                               <div class="form-group">
                                    <div class="row"> 
                                       <div class="col-sm-6">
                                           <label >Role Tendik Univ</label>
                                            
                                       </div>
                                      
                                        

                                  <div class="col-sm-6">
                                       <label >ID SPP Kelas XII </label>
                                        
                                  </div>


                                       
                                    </div>

                               </div> 


                               <div class="form-group">
                                    <div class="row"> 
                                       <div class="col-sm-6">
                                           <label >ID Persediaan Habis Pakai</label>
                                          
                                       </div>
                                      
                                       <div class="col-sm-6">
                                           <label >ID SPP Juli</label>
                                            
                                       </div>


                                    </div>
                               </div> 

                               <div class="form-group">
                                    <div class="row"> 
                                       <div class="col-sm-6">
                                           <label >ID Persediaan Lain Lain</label>
                                            
                                       </div>
                                       <div class="col-sm-6">
                                           <label >ID Persediaan ATK</label>
                                            
                                       </div>
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <div class="row"> 
                                       <div class="col-sm-6">
                                          <label>Istilah NIS/NIM</label>
                                            <input type="text" id="isnim" name="isnim" class="form-control"   value="{{ isset($data->isnim) ? $data->isnim : '' }}"   class="form-control" >
                                            
                                       </div>

                                        <div class="col-sm-6">
                                           
                                          <label>Istilah Siswa/Mahasiswa</label>
                                            <input type="text" id="iswa" name="iswa" class="form-control"   value="{{ isset($data->iswa) ? $data->iswa : '' }}"   class="form-control" >
                                       
                                       </div>
                                    </div> 
                               </div> 
                                <div class="form-group">
                                    <div class="row"> 
                                <div class="col-sm-6">
                                       <label >ID Akun Biaya Discount SPP</label>
                                        
                                  </div>

                                   <div class="col-sm-6">
                                       <label >ID Akun Biaya Dispensasi (Discount Langsung & Disc Kewajibaan Lain) </label>
                                       
                                  </div>


                                  </div>
                                  </div>


                                  <div class="form-group">
                                    <div class="row"> 
                                

                                   <div class="col-sm-6">
                                       <label >ID Akun Biaya Discount PPDB/P. Sarana </label>
                                        
                                  </div>
                                  </div>
                                  </div>

                                   
                              
                            </div><!-- /.box-body -->
                          </div><!-- /.box -->
                       </div><!-- /.col -->
                       </div>  
                       <!-- kas keluar -->
                       <div class="row" >
                           
                          <div class="col-sm-6">
                              <div class="box box-danger">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Setting Tambahan</h3>
                                  <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                 
                                 <div class="form-group">
                                     <label>ID Akun Kas</label> 
                                     
                                 </div>

                                <div class="form-group">
                                     <label>ID Akun Kas Dana Bos</label> 
                                     
                                 </div>

                                 <div class="form-group">
                                     <label>ID Akun Kas Bosda</label> 
                                      
                                 </div>


                                 <div class="form-group">
                                     <label>ID Akun Debet Penerimaan</label> 
                                     
                                 </div>

                                  <div class="form-group">
                                     <label>ID Akun Kredit Pengeluaran</label> 
                                     
                                 </div>

                                 <div class="form-group">
                                   <label>ID Hutang Biaya Sopir</label> 
                                   
                                 </div>

                                  
                                  <div class="form-group">
                                       <label >SPP Per Jurusan Sama [Tingkat Boleh Beda]</label>
                                     
                                  </div>
                                  <div class="form-group">
                                     <label >-</label>
                                      
                                  </div>

                                   
                                   <div class="form-group">
                                     <label >Tingkat Sekolah</label>
                                       
                                  </div>




                                   
                                  
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->
                          </div><!-- /.col -->

                           <div class="col-sm-6">
                              <div class="box box-danger">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Setting Tambahan</h3>
                                  <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                 
                                 <div class="form-group">
                                     <label>ID Akun  Bank 1</label> 
                                      
                                 </div>
                                
                                  <div class="form-group">
                                     <label>ID Akun   Bank 2</label> 
                                      
                                 </div>

                                  <div class="form-group">
                                     <label>ID Akun   Bank 3</label> 
                                     
                                 </div>

                                 <div class="form-group">
                                     <label>ID Akun   Bank 4</label> 
                                      
                                 </div>

                                 <div class="form-group">
                                     <label>ID Akun   Bank 5</label> 
                                     
                                 </div>




                                   
                                  
                                </div><!-- /.box-body -->
                              </div><!-- /.box -->
                          </div><!-- /.col -->

                       </div>

                        
                         <!-- end kas keluar -->
                         <!-- pemutihan -->
                      

                       

                       <!-- end pemutihan -->
                       
                      
                      
                  </div>
              </div> 

              <div class="tab-pane" id="settingcoa">
                   <div class="box-body">      
                    
                      
                      <div class="row" >
                          <div class="col-sm-6">
                            <div class="box box-danger">
                              <div class="box-header with-border">
                                <h3 class="box-title">Akun Neraca dan Laba Rugi</h3>
                                <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                              </div><!-- /.box-header -->
                              <div class="box-body">
                                <div class="form-group">
                                     <label>ID Akun Bantuan Dana Bos</label> 
                                      
                                </div>

                                <div class="form-group">
                                   <label>Kenaikan / Penurunan Asset</label> 
                                  
                                </div>

                                <div class="form-group">
                                   <label>Akun Asset Bersih AKhir Tahun</label> 
                                
                                </div>

                                <div class="form-group">
                                     <label>ID Akun Pendapatan Lain Lain</label> 
                                      
                                </div>

                                <div class="form-group">
                                     <label>ID Akun Kredit Penampung Piutang </label> 
                                      
                                </div>


                              
                                
                              </div><!-- /.box-body -->
                            </div><!-- /.box -->
                          </div><!-- /.col -->

                          <div class="col-sm-6">
                            <div class="box box-danger">
                              <div class="box-header with-border">
                                <h3 class="box-title">Akun Setting </h3>
                                <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                              </div><!-- /.box-header -->
                              <div class="box-body">
                                 <div class="form-group">
                                       <label>PPDB Termasuk SPP Bulan Juli</label> 
                                       
                                 </div>

                                  <div class="form-group">
                                     <label>Akun SPP Bulan Juli</label> 
                                     
                                  </div>

                                  <div class="form-group">
                                     <label>Akun Labor Juli</label> 
                                      
                                  </div>

                                  <div class="form-group">
                                     <label>Akun Infaq Bulan Juli</label> 
                                      
                                  </div>

                                  <div class="form-group">
                                     <label>Akun Piutang Siswa Aktif</label> 
                                      
                                  </div>
                                  <div class="form-group">
                                     <label>Akun Kas Bos</label> 
                                      
                                  </div>

                              
                                
                              </div><!-- /.box-body -->
                            </div><!-- /.box -->
                          </div><!-- /.col -->
 


                      <div class="row" >
                          <div class="col-sm-6">
                            <div class="box box-danger">
                              <div class="box-header with-border">
                                <h3 class="box-title">Akun Hutang</h3>
                                <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                              </div><!-- /.box-header -->
                              <div class="box-body">
                               
                               <div class="form-group">
                                       <label>ID Akun Hutang Pemasok</label>
                                       
                               </div>
                               <div class="form-group">
                                     <label>ID Akun Hutang Mitra</label>a 
                                      
                               </div>
                             
                                <div class="form-group">
                                   <label>ID Akun Hutang Jasa</label> 
                                    
                                </div>
  
                              <div class="form-group">
                                 <label >ID Akun Pembayaran Hutang</label>
                                
                              </div>

                               
                                
                              </div><!-- /.box-body -->
                            </div><!-- /.box -->
                          </div><!-- /.col -->

                          <div class="col-sm-6">
                            <div class="box box-danger">
                              <div class="box-header with-border">
                                <h3 class="box-title">Akun Piutang</h3>
                                <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                              </div><!-- /.box-header -->
                              <div class="box-body">
                                 <div class="form-group">
                                     <label>ID Akun Piutang Usaha</label> 
                                    
                                 </div>

                                 

                                 <div class="form-group">
                                     <label>ID Akun Piutang Karyawan</label>
                                     
                                 </div>

                               
                                 <div class="form-group">
                                     <label>ID Akun Piutang Mitra</label>
                                       
                                 </div>

                                <div class="form-group">
                                   <label >ID Akun Penerimaan Piutang</label>
                                   
                                </div>

                                  
                                 
                                
                              </div><!-- /.box-body -->
                            </div><!-- /.box -->
                          </div><!-- /.col -->

                      </div>


                      <div class="row" >
                          <div class="col-sm-6">
                            <div class="box box-danger">
                              <div class="box-header with-border">
                                <h3 class="box-title">Akun Kas Bon</h3>
                                <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                              </div><!-- /.box-header -->
                              <div class="box-body">
                                
                                 
                                  <div class="form-group">
                                     <label>ID Akun Kas Bon</label>
                                       
                                  </div>
                                  
                                 
                               
                                
                              </div><!-- /.box-body -->
                            </div><!-- /.box -->
                          </div><!-- /.col -->

                          <div class="col-sm-6">
                            <div class="box box-danger">
                              <div class="box-header with-border">
                                <h3 class="box-title">Akun Tunggakan Siswa Aktif</h3>
                                <span class="label label-danger pull-right"><i class="fa fa-database"></i></span>
                                 
                                  </div>


                              </div><!-- /.box-header -->
                              <div class="box-body">
                                  
                               
                                
                              </div><!-- /.box-body -->
                            </div><!-- /.box -->
                          </div><!-- /.col -->

                      </div>


                      
                      <div class="form-group " >
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-block btn-warning btn-sm">Simpan OK</button>
                        </div>
                      </div>
                    </form>
                  </div>   
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
</div>

  <div class="modal fade" id="selogan" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Pemilik Toko-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Selogan</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanselogan')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                  
           
         
              <div class="form-group">
                 <b>Nama Sekolah</b>           
                <input type="text" name="selo"  
                value="{{ isset($selo) ? $selo : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
              </div>  

             
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="namatoko" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Pemilik Toko-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Nama Sekolah</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpannamatoko')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                 
           
         
              <div class="form-group">
                 <b>Nama Sekolah</b>           
                  <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
              </div>  

             
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="pemilik" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Pemilik Toko-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Profil Sekolah</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpannamapemilik')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                  
                
           
         
              <div class="form-group">
                 <b>Nama Pemilik Sekolah</b>           
                  <input type="text" name="nape"  value="{{ isset($nape) ? $nape : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
              </div>  

             
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="gantifoto" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Pemilik Toko-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ganti Logo</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanfotopemilik')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                  <input type="hidden" name="induk" value=$induk>
                
           
         
              <div class="form-group">
                               Upload Foto
                                  <input type="file" name="file[]" multiple=""> </br>
                              </div>

             
            <button type="Simpan" class="btn btn-primary" onclick="$('#loading').show();" >Submit</button>
            <div id="loading" style="display:none;"><img src="{{ URL::asset('images/simpan.gif')}}" alt="" /></div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="alamat" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Pemilik Toko-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Alamat Sekolah</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanalamattoko')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                 <input type="hidden" name="induk" value=$induk>
                  <div class="form-group">
                    <b>Jalan/Komplek :</b>           
                    <input type="text" name="alamat"  value="{{ isset($data->alamat) ? $data->alamat : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
                  </div>
                  
                  <div class="form-group">
                    <b>Kelurahan/Desa :</b>           
                    <input type="text" name="kel"  value="{{ isset($data->kel) ? $data->kel : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
                  </div>
                  <div class="form-group">
                    <b>Kecamatan :</b>           
                    <input type="text" name="kec"  value="{{ isset($data->kec) ? $data->kec : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
                  </div>
                   <div class="form-group">
                    <b>Kabupeten/Kota :</b>           
                    <input type="text" name="kota"  value="{{ isset($data->kota) ? $data->kota : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
                  </div>
                  <div class="form-group">
                    <b>Kode Pos</b>           
                    <input type="text" name="kodepos"  value="{{ isset($data->kodepos) ? $data->kodepos : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
                  </div>
                  <div class="form-group">
                    <b>Propinsi :</b>           
                    <input type="text" name="prop"  value="{{ isset($data->prop) ? $data->prop : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
                  </div>
                  <div class="form-group">
                    <b>Telp/HP :</b>           
                    <input type="text" name="telp"  value="{{ isset($data->telp) ? $data->telp : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
                  </div>
                  <div class="form-group">
                    <b>Email :</b>           
                    <input type="text" name="email"  value="{{ isset($data->email) ? $data->email : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
                  </div>



             
            <button type="Simpan" class="btn btn-primary">Simpan</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
   
  <div class="modal fade" id="tambahdata" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Pemilik Toko-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Komponen Gaji</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpankompoga')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
                 
              <div class="form-group">
                 <b>Nama</b>           
                  <input type="text" name="nama"  value="{{ isset($namax) ? $namax : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>                                  
              </div>  
                

             
            <button type="Simpan" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
 
 
