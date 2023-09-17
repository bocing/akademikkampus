<!-- page content -->
     
<style>
 
  
tr {
  padding:0px;
}
tr:nth-child(even){background-color:#F2F2F2}

th {
    background-color: #FF8000 ;
    color: white;
}
</style>      

<?php
      $indukmenu = $indukmenu;
      $id = $carim->id;
      $induk = $carim->parentid;
      
      $nama = $carim->nakun;
      $ap = $carim->ap;

      $ai = $carim->ai;
      $sn = $carim->sn;
      $nr = $carim->nr;
      $level = $carim->level;
      //dd($nr);
      //$icon = $carim->icon;
?>      
             
 <div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <h4>{{$judul}}</h4>
             <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <form method="post" enctype="multipart/form-data" action="<?=URL::to('updatecoa')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="id" value="{{$id}}">
                 <input type="hidden" name="indukmenu" value="{{$indukmenu}}">
                  
                  
                    <div class="row">
                      <!-- form input mask -->
                      <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="box dark">
                            <header>
                                <div class="icons"><i class="fa fa-edit"></i></div>
                                <h5>Daftar Menu</h5>
                                <!-- .toolbar -->
                                <div class="toolbar">
                                  <nav style="padding: 8px;">
                                      <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                          <i class="fa fa-minus"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                          <i class="fa fa-expand"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                                          <i class="fa fa-times"></i>
                                      </a>
                                  </nav>
                                </div>            <!-- /.toolbar -->
                            </header>
                          <div id="div-1" class="body">
                             
                                <table width="100%">
                                    <tr>
                                      <th width="300">Nama</th>
                                      <th width="40" align="center">Level</th>
                                      <th width="50" align="center">Edit</th>
                                       <th width="60">Hapus</th>
                                     </tr>
                                     <?php 
                                     $menu_0 = \App\Coa::where('parentid',0)->get();
                                    
                                     foreach ($menu_0 as $key) {
                                          $menu = \App\Coa::where('parentid',$key->id)->get();
                                          $parent = \App\Coa::where('id',$key->id)->first();
                                          ?>
                                          <tr>
                                            <td>{{$parent->nakun}}</td>
                                            <td align="center">{{$parent->level}}</td>
                                           <td align="center"> 
                                              <i class="ace-icon fa fa-pencil bigger-130"></i> 
                                              <a class="green" href="{{url('/editcoa/'.$parent->id.'/'.$induk)}}">Edit 
                                              </a>
                                            </td>
                                            <td>  
                                               <a href="{{ URL::asset('/deletecoa/'.$parent->id.'/'.$induk) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red">
                                              <i class="ace-icon fa fa-trash-o bigger-130"></i>  Hapus
                                              </a>  
                                             </td>
                                             <?php 
                                             foreach ($menu as $key2) {
                                              $menu1 = \App\Coa::where('parentid',$key->id)->get();
                                              $parent1 = \App\Coa::where('id',$key2->id)->first();
                                              ?>
                                              <tr>             
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp; 
                                                 {{$parent1->nakun}}</td>
                                                 <td align="center">{{$parent1->level}}</td>
                                                  <td align="center"> 
                                              <i class="ace-icon fa fa-pencil bigger-130"></i> 
                                              <a class="green" href="{{url('/editcoa/'.$parent1->id.'/'.$induk)}}">Edit 
                                              </a>
                                            </td>
                                            <td>  
                                               <a href="{{ URL::asset('/deletecoa/'.$parent1->id.'/'.$induk) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red">
                                              <i class="ace-icon fa fa-trash-o bigger-130"></i>  Hapus
                                              </a>  
                                             </td>
                                               <?php 
                                                       foreach ($menu1 as $key3) {
                                                            $menu2 = \App\Coa::where('parentid',$key3->id)->get();
                                                            $parent2 = \App\Coa::where('id',$key3->id)->first();
                                                            ?>
                                                            <tr>             
                                                              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                               {{$parent2->nakun}}</td>
                                                               <td align="center">{{$parent2->level}}</td>
                                                                <td align="center"> 
                                                                  <i class="ace-icon fa fa-pencil bigger-130"></i> 
                                                                  <a class="green" href="{{url('/editcoa/'.$parent2->id.'/'.$induk)}}">Edit 
                                                                  </a>
                                                                </td>
                                                                <td>  
                                                                   <a href="{{ URL::asset('/deletecoa/'.$parent2->id.'/'.$induk) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red">
                                                                  <i class="ace-icon fa fa-trash-o bigger-130"></i>  Hapus
                                                                  </a>  
                                                                 </td>

                                                                 <?php 
                                                               foreach ($menu2 as $key4) {
                                                                     $menu3 = \App\Coa::where('parentid',$key4->id)->get(); 
                                                                    $parent3 = \App\Coa::where('id',$key4->id)->first();
                                                                    ?>
                                                                    <tr>             
                                                                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  
                                                                       {{$parent3->nakun}}</td>
                                                                       <td align="center">{{$parent3->level}}</td>
                                                                         <td align="center"> 
                                              <i class="ace-icon fa fa-pencil bigger-130"></i> 
                                              <a class="green" href="{{url('/editcoa/'.$parent3->id.'/'.$induk)}}">Edit 
                                              </a>
                                            </td>
                                            <td>  
                                               <a href="{{ URL::asset('/deletecoa/'.$parent3->id.'/'.$induk) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red">
                                              <i class="ace-icon fa fa-trash-o bigger-130"></i>  Hapus
                                              </a>  
                                             </td>
                                                                        <?php 
                                                               foreach ($menu3 as $key5) {
                                                                     $menu4 = \App\Coa::where('parentid',$key5->id)->get(); 
                                                                     $parent4 = \App\Coa::where('id',$key5->id)->first();
                                                                    ?>
                                                                    <tr>             
                                                                      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                                                                       {{$parent4->nakun}}</td>
                                                                       <td align="center">{{$parent4->level}}</td>
                                                                         <td align="center"> 
                                                                          <i class="ace-icon fa fa-pencil bigger-130"></i> 
                                                                          <a class="green" href="{{url('/editcoa/'.$parent4->id.'/'.$induk)}}">Edit 
                                                                          </a>
                                                                        </td>
                                                                        <td>  
                                                                           <a href="{{ URL::asset('/deletecoa/'.$parent4->id.'/'.$induk) }}" onclick="return confirm('Anda Yakin Menghapus?')"  class="red">
                                                                          <i class="ace-icon fa fa-trash-o bigger-130"></i>  Hapus
                                                                          </a>  
                                                                         </td>



                                                                   
                                                                     </tr>
                                                                  <?php } ?>



                                                                     </tr>
                                                                  <?php } ?>


                                             


                                                 
                                              </tr>
                                              <?php } ?>



                                                 
                                              </tr>
                                              <?php } ?> 
                                          

                                          </tr>
                                        <?php } ?>                                            
                            </table> 
                        </div>
                      </div>
                  </div>            


                      

                       
                      <!-- /form input mask -->

                      <!-- form color picker -->
                      <div class="col-md-6 col-sm-12 col-xs-12">
                          <div class="box dark">
                            <header>
                                <div class="icons"><i class="fa fa-edit"></i></div>
                                <h5>Input Menu</h5>
                                <!-- .toolbar -->
                                <div class="toolbar">
                                  <nav style="padding: 8px;">
                                      <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                          <i class="fa fa-minus"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                          <i class="fa fa-expand"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                                          <i class="fa fa-times"></i>
                                      </a>
                                  </nav>
                                </div>            <!-- /.toolbar -->
                            </header>
                            <div id="div-1" class="body">

                                <b>Induk</b><br/>
                                    <input id="cakuninduk" style="width :250px" type="text" id="induk" name="induk" placeholder="Induk"  value="{{ isset($induk) ? $induk : '' }}" ></input>

                                 
                                  <br/>
                                   <br/>
                               <b>Nama Akun</b>           
                                      <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}"" required data-validation-required-message="Please enter your name." class="form-control"><br/>
                                <b>Aku Neraca / Rugi Laba</b>  isi dengan : <b> [N/R] </b>         
                                      <input type="text" name="nr"  style="width: 60%" value="{{ isset($nr) ? $nr : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/> 

                                    
                                <b>Isi Jika Akun Neraca :[A/P], Isi Jika Akun Laba/Rugi :[P/B]</b>  
                               <br/>   <b>A:Aktiva,P: Pasiva, P:Pendapatan, B:Biaya</b></p>  
                                      <input type="text" name="ap" style="width: 40%" value="{{ isset($ap) ? $ap : '' }}" required data-validation-required-message="Please enter your name."   class="form-control"><br/>

                                  <b>Anak/Induk</b> isi dengan : <b> [A/I] </b>          
                                      <input type="text" name="ai"  style="width: 40%" value="{{ isset($ai) ? $ai : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>           
                                 
                                  

                                   <b>Saldo Normal</b> isi dengan : <b> [D/K] </b>          
                                      <input type="text" name="sn" style="width: 40%" value="{{ isset($sn) ? $sn : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>      

                                      <b>Level</b> isi dengan : <b> [1..4] </b>          
                                      <input type="text" name="level" style="width: 40%" value="{{ isset($level) ? $level : '' }}" required data-validation-required-message="Please enter your name." class="form-control"><br/>     
                                        

                                 <!-- End Input Sebelah Kanan-->
                                 <div class="ln_solid"></div>

                                 <button type="submit" name="Simpan" class="btn btn-success" >
                                              <i class="ace-icon fa fa-download bigger-110 blue"></i>
                                              Simpan
                                 </button>


                            </div>
                          </div>
                      </div>              
                    </div>
              </form>   
                        

                    </div>
                </div>
             </div>            
        </div>
                        <!-- /.inner -->
    </div>
                    <!-- /.outer -->
</div>
<div id="right" class="onoffcanvas is-right is-fixed bg-light" aria-expanded=false>
                        <a class="onoffcanvas-toggler" href="#right" data-toggle=onoffcanvas aria-expanded=false></a>
                        <br>
                        <br>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
</div>
</div>
 
 

   