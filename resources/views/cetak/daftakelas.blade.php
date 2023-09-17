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
                         
                          <th>Nama Kelas</th>
                           <th>Nama Wali Kelas</th>
                           <th>Kapasitas</th> 
                          <th>Jml Siswa</th>
                                 
                          <th>Ledger</th>    
                </tr>
                </thead>
                <tbody>
                {{ csrf_field() }}
                         <?php $no=1; ?>
                         @foreach($data as $abc) 

                        <tr>
                         <td>{{$no++}}</td>                                   

                         
                          <td>{{$abc->nama}}</td>
                          <td>{{$abc->namawali}}</td>

                          <td align="right">{{ number_format($abc->kapasitas, 0) }}</td>
                          
                          <td align="right">{{ number_format($abc->jmlsiswa, 0) }}</td>
      
        
                          <td>
          <div class="hidden-sm hidden-xs action-buttons" align="center">
            
           &nbsp;&nbsp;
             

             <a class="green" href="<?php echo '../previewledger/'.$abc->idkls?>" target='_blank' >
              <i class="fa  fa-file-text-o" ></i>
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



 