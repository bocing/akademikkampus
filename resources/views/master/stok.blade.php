
<?php   ?>
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
         <li><a href="{{ url('formbarang/'.$induk) }}"><i class="fa fa-fw fa-plus"></i> Tambah </a> </li>
      </ol>
    </section>
      

    <!-- Main content -->
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
                          <th>Kode</th>
                          <th>Nama</th>                         
                          <th>Pemasok Utama</th>
                          <th>Harga Jual</th>
                          <th>HB Terakhir</th>
                          <th>H.Rata</th>
                          <th>Aksi</th>        
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                     <?php $nou=1; ?>
                     @foreach($data as $abc) 
              
                        <tr>
                          <td>{{$nou++}}</td>                                   
                          <td>{{$abc->id}}</td>                                 
                              <td>{{$abc->nama}}</td>                                 
                             
                              <td>{{$abc->nasok}}</td>
                              <td align="right">{{ number_format($abc->hrgjual, 2) }}</td>
                              <td align="right">{{ number_format($abc->hrgakhir, 2) }}</td>
                              <td align="right">{{ number_format($abc->ratarata, 2) }}</td>
                          <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                               
                               

                                 <a class="green" href="<?php echo '../editmata/'.$abc->id.'/'.$induk ?>">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                              </a>
                            
                            </div>           
                          </td>
                                        
                     
                    </tr>
                    
                  @endforeach() 
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
    <!-- /.content -->
</div>


 