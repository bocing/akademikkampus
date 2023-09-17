<!-- page content -->
  <!-- page content -->
       
 <div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <h4>{{$judul}}</h4>
            <a href="{{ action('BeliController@formorderb') }}"><i class="fa fa-plus-circle">Tambah</i></a>
             <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        
                        <div id="collapse4" class="body">
                            <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>No Bukti</th>
                                  <th>Tanggal</th>
                                  <th>Nama Pelanggan</th>
                                  <th>Total</th>         
                                  <th>Aksi</th>       
                                </tr>
                                </thead>
                                <tbody>
                                   {{ csrf_field() }}
                         <?php $no=1; ?>
                         @foreach($data as $abc) 

                        <tr>
                         <td>{{$no++}}</td>                                   

                         
                          <td>{{$abc->nobukti}}</td>
        <td>{{$abc->tgl}}</td>
        <td>{{$abc->nama}}</td>       
        <td align="right">{{ number_format($abc->total, 2) }}</td>
                          <td>
          <div class="hidden-sm hidden-xs action-buttons">
            <a class="blue" href="{{ action('BeliController@formorderb') }}">
              <i class="ace-icon fa fa-search-plus bigger-130"></i>
            </a>

            <a class="green" href="<?php echo 'editorderb/'.$abc->nobukti ?>">
              <i class="ace-icon fa fa-pencil bigger-130"></i>
            </a>

            
          </div>           
        </td>
                         
                        </tr>
                          @endforeach()        
                                         
                                </tbody>   
                            </table>
                        </div>
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
 

 






        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ isset($judulutama) ? $judulutama : 'Master' }}
                    <small>{{ isset($judul) ? $judul : 'Default' }}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li>

                       <a href="{{ action('BeliController@formorderb') }}"><i class="fa fa-plus-circle"></i> Tambah </a>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                       
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                           <th>No Bukti</th>
                          <th>Tanggal</th>
                          <th>Nama Pelanggan</th>
                          <th>Total</th>         
                          <th>Aksi</th>        
                        </tr>
                      </thead>


                      <tbody>
                         {{ csrf_field() }}
                         <?php $no=1; ?>
                         @foreach($data as $abc) 

                        <tr>
                         <td>{{$no++}}</td>                                   

                         
                          <td>{{$abc->nobukti}}</td>
        <td>{{$abc->tgl}}</td>
        <td>{{$abc->nama}}</td>       
        <td align="right">{{ number_format($abc->total, 2) }}</td>
                          <td>
          <div class="hidden-sm hidden-xs action-buttons">
            <a class="blue" href="{{ action('BeliController@formorderb') }}">
              <i class="ace-icon fa fa-search-plus bigger-130"></i>
            </a>

            <a class="green" href="<?php echo 'editorderb/'.$abc->nobukti ?>">
              <i class="ace-icon fa fa-pencil bigger-130"></i>
            </a>

            
          </div>           
        </td>
                         
                        </tr>
                          @endforeach()                  
                      </tbody>

                      
                    </table>
                  </div>
                </div>
              </div>

          
         
        </div>
        <!-- /page content -->
   