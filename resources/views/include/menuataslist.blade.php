{{ csrf_field() }}
        <?php $no=1; ?>
        @foreach($menuatas as $m)  
        <li><a href="{{url($m->url)}}/{{$induk}}/{{$m->id}}"> {{$m->nama}}</a></li> |
         @endforeach()               
         <li><a href="{{ url('formkm/'.$induk) }}"><i class="fa fa-fw fa-plus"></i> Tambah </a> </li>