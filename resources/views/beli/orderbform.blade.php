 
<?php 

$nobukti =$nobukti ;
echo "string:$nobukti";
if ($master == null){
$idpel ='' ;
$idtermin='';
$idstok ='' ;
$ket ='' ;
$jml =0;
$hrg =0;
$total=0;
 
}elseif ($rec== null){
        $idpel =$master->idpel;
        $idter=$master->idter;
        $idstok = $master->idstok;
        $ket =$master->ctt;
        $jml =$master->jml;
        $hrg =$master->hrg;
        $total=$master->total;
    }else{      
      foreach ($rec as $r) {
        $idpel =$r->idpel;
        $idter=$r->idter;
        $idstok =$r->idstok;
        $tglbel=$r->tgl;
        $ket =$r->ctt;
        $jml =$r->jml;
        $hrg =$r->hrg;
        $total=$master->total;
    }  
  
}
 

 
 
?>
  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>{{$judul}}</h3>
                           
                
              </div>
              
              <div class="title_right">
                <div class="col-md-4 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form method="get" enctype="multipart/form-data" action="<?=URL::to('orderb')  ?>">
                    <div class="input-group">
                      <button   class="btn btn-primary">Keluar</button>
                    </div>
                  </form>
                </div>

                 

                 <div class="col-md-4 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div style="margin-bottom:20px">
                  <a class="red" href="{{ route('ceorderb',['download'=>'pdf','nobukti'=>$nobukti]) }}">
                       
                      <button   class="btn btn-primary">Cetak</button>
                  </a>
                  </div>
                </div>

                <div class="col-md-4 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form method="get" enctype="multipart/form-data" action="<?=URL::to('formorderb')  ?>">
                    <div class="input-group">
                      <button   class="btn btn-primary">Faktur Baru</button>
                    </div>
                  </form>                
                </div>
              </div>
              
                


              


            </div>


            <div class="clearfix"></div>
       <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanorderb')  ?>">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Invoice</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                       
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
           
                     
                        <div class="form-group">
                              <label>No Bukti</label>
                              <input type="text" id="nobukti" name="nobukti" readonly="true" value="{{ isset($nobukti) ? $nobukti : '' }}"   class="form-control" style="width:40%;" placeholder="Enter No Bukti">
                        </div>
 
                        <b>Termin</b>            
                                  <input type="text"  id="cgt" id="idter" name="idter" style="width:100%;"   value="{{ isset($idter) ? $idter : '' }}"  class="form-control"> 
                      

                    
                  </div>
                </div>

            


              </div>
             
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pelanggan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                       
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                    <div class="row">
                        <div class="col-sm-6"> <b>Nama Pelanggan</b><br/>
                              <input id="cp" style="width :250px" type="text" id="idpel" name="idpel" placeholder="Nama Toko"  value="<?php echo $idpel; ?>"></input>
                        </div>

                        <div class="col-sm-6" > 
                          <input class="easyui-datebox" label="Tanggal:" labelPosition="top" data-options="formatter:myformatter,parser:myparser" id="tglbel" name="tglbel" value="<?=$tglbel ?>" style="width:100%;">
                        </div>


                        

                    </div>
                      
                    <div class="form-group">
                      <label>Keterangan</label>
                     <label for="form-field-8">Keterangan</label>
                                              <input type="textarea" name="ket"  class="form-control" id="ket"  value="<?php echo $ket; ?>" ></textarea>
                    </div>
                     
                   
                  </div>
                </div>
              </div>
            
        
            </div>

             

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                     
                     
                    <!-- Form Tambah Stok -->
                     <div class="well" width:100%>
                        <td >
                        <b>Nama Barang </b>
                        <input id="cgb" style="width :400px" type="text" id="idstok" name="idstok" placeholder="Nama Barang"  value="<?php echo $idstok; ?>"></input>
                        </td>
                        <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Jumlah</b><input type="number" style="width :100px"  name="jml" value="<?php echo $jml; ?>" ></td>   
                        <td >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Harga</b><input type="number" name="hrg" value="<?php echo $hrg; ?>"></td>

                        <button type="submit" name="Simpan" class="btn btn-sm btn-success btn-white btn-round" >
                        <i class="ace-icon fa fa-download bigger-110 green"></i>
                        Simpan
                        </button>
                                      
                                  </div>

                    <!-- Endddd  Form Tambah Stok -->
                      
 
                  </div>
                </div>
              </div>
            </div>
            </form>

            <div class="x_panel">
              <div class="x_title">
                <h2>Rincian Pembelian</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              
                                    <table class="table table-striped table-bordered">
                                      <thead>
                                        <tr>
                                          <th class="center">#</th>
                                          <th>Kode</th>
                                          <th class="hidden-xs">Nama Barang</th>
                                          <th class="hidden-480">Qty</th>
                                          <th class="hidden-480">Satuan</th>
                                          <th class="hidden-480">Harga</th>
                                          <th>Total</th>
                                          <th>Aksi</th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                           {{ csrf_field() }}
                                                        <?php $no=1; ?>
                                                            @foreach($rec as $abc)

                                                           <tr>
                                            <td class="center">{{$no++}}</td>

                                            <td>
                                              <a href="#">{{$abc->kode}}</a>
                                            </td>
                                            <td class="hidden-xs">
                                              {{$abc->nastok}}
                                            </td>
                                            <td class="hidden-480"> {{$abc->nasa}} </td>
                                            <td align="right">{{ number_format($abc->jml, 2) }}</td>
                                            <td align="right">{{ number_format($abc->hrg, 2) }}</td>
                                            <td align="right">{{ number_format($abc->st, 2) }}</td>

                                            <td>
                                              <?php if ($no>=1) { ?> 
                                                      <div class="hidden-sm hidden-xs action-buttons">
                                              <a href="{{ URL::asset('/deleteorderbdetil/'.$abc->idobd) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red"    >
                                              <i class="ace-icon fa fa-trash-o bigger-130"></i>

                                              </a>
                                              </div>               

                                                 <?php } ?>
                                             </td>

                                             



                                        </tr>
                                         @endforeach()

                                         <tr>
                                 




                                          <td class="center" colspan="6"> </td>
 
                                          <td align="right">{{ number_format($total, 2) }}</td>
                                            



                                        </tr>




                                      </tbody>
                                    </table>
                                  </div>



            </div>
          </div>
        </div>
        <!-- /page content -->