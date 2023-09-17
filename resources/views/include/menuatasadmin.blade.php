   <section class="content-header">
      <h1>
        {{$judulutama}}
        <small><b>{{$judul}}</b></small>
      </h1>
      <ol class="breadcrumb">


      {{ csrf_field() }}
        <?php 
        

        $no=1; ?>
        @foreach($menuatas as $m)  
        <li><a href="{{url($m->url)}}/{{$m->id_induk}}"><i class="{{$m->icon}}"></i><b> {{strtoupper($m->nama)}}</b></a></li>
         @endforeach()     
          
          <li><a data-toggle="modal" data-target="#addModal"><button type="button" class="btn btn-block btn-warning btn-sm">Tambah</button></a></li>
      </ol>
    </section>