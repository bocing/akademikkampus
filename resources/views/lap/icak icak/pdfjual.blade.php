<div>
  <table id="dynamic-table" class="table table-striped table-bordered table-hover">

  <!-- JUDUULLLLLLLLLLLLLLLLLL--> 
    <thead>
      <tr>
      <th>No</th>  
        <th class="center">
          <label class="pos-rel">
            <input type="checkbox" class="ace" />
            <span class="lbl"></span>
          </label>
        </th>
        <th>No Bukti</th>
        <th> <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Tanggal</th>
        <th>Nama Supplier</th>
        <th>Total</th>         
       
        <th>Aksi

        </th>        
      </tr>
    </thead>
       <!-- ENDDD JUDUULLLLLLLLLLLLLLLLLL--> 


    <tbody>
       {{ csrf_field() }}
       <?php $no=1; ?>
       @foreach($items as $abc) 


      <tr>
       <td>{{$no++}}</td>                                   

        <td class="center">
          <label class="pos-rel">
            <input type="checkbox" class="ace" />
            <span class="lbl"></span>
          </label>
        </td>
        <td>{{$abc->nojual}}</td>
        <td>{{$abc->tgljual}}</td>
        <td>{{$abc->napem}}</td>       
        <td align="right">{{ number_format($abc->total, 2) }}</td>

        

        <td>
          <div class="hidden-sm hidden-xs action-buttons">
            <a class="blue" href="{{ action('AdminController@formgur') }}">
              <i class="ace-icon fa fa-search-plus bigger-130"></i>
            </a>

            <a class="green" href="<?php echo 'editjual/'.$abc->nojual ?>">
              <i class="ace-icon fa fa-pencil bigger-130"></i>
            </a>

            <a class="red" href="<?php echo 'deletegur/'.$abc->id ?>">
              <i class="ace-icon fa fa-trash-o bigger-130"></i>
            </a>

            <a class="red" href="{{ route('pdfview',['download'=>'pdf']) }}">
              <i class="ace-icon fa fa-trash-o bigger-130"></i>
            </a>
          </div>           
        </td>
       
      </tr>
        @endforeach()            
    
    </tbody>
  </table>
</div>
