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
         <li><a href="{{ url('formjual/'.$induk) }}"><i class="fa fa-fw fa-plus"></i> Tambah </a> </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->

          <div class="box">
             
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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

                         
                          <td>{{$abc->nojual}}</td>
        <td>{{$abc->tgljual}}</td>
        <td>{{$abc->napem}}</td>       
        <td align="right">{{ number_format($abc->total, 2) }}</td>
                          <td>
          <div class="hidden-sm hidden-xs action-buttons" align="center">
            

            <a class="green" href="<?php echo '../editjual/'.$abc->nojual .'/'.$induk?>">
              <i class="ace-icon fa fa-pencil bigger-130"></i>
            </a>

            
          </div>           
        </td>
                     
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



 