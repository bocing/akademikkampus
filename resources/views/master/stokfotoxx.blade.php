<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ isset($judulutama) ? $judulutama : 'Master' }}
                    <small>{{ isset($judul) ? $judul : 'Default' }}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li>

                       <a href="{{ action('AdminController@formbarang') }}"><i class="fa fa-plus-circle"></i> Tambah </a>
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
                          <th>Kode</th>
                          <th>Nama</th>
                          <th>Stn</th>         
                          <th>Kategori</th>
                          <th>Pemasok Utama</th>
                          <th>Harga Jual</th>
                          <th>HB Terakhir</th>
                          <th>H.Rata/Mek</th>
                          <th>Foto</th>    
                        </tr>
                      </thead>


                      <tbody>
                         {{ csrf_field() }}
                         <?php $no=1; ?>
                         @foreach($data as $abc) 

                        <tr>
                         <td>{{$no++}}</td>                                   

                         
                          <td>{{$abc->kode}}</td>                                 
                              <td>{{$abc->nama}}</td>                                 
                              <td>{{$abc->nasa}}</td>                                  
                              <td>{{$abc->naka}}</td>
                              <td>{{$abc->nasok}}</td>
                              <td align="right">{{ number_format($abc->hrgjual, 2) }}</td>
                              <td align="right">{{ number_format($abc->hrgakhir, 2) }}</td>
                              <td align="right">{{ number_format($abc->hrgrata, 2) }}</td>
                              <td><img src="{{asset($abc->foto)}}" style="width: 200px;height: 200px"> </td>
                         
                        </tr>
                          @endforeach()                  
                      </tbody>

                      
                    </table>
                  </div>
                </div>
              </div>

          
         
        </div>
        <!-- /page content -->
   