<?php 
 
  

?> 

@include('include.aturform')
  @include('include.munyemunye')
 </section>

    <!-- Main content -->

    <section class="content">
    @if(count($errors) > 0 )
    <div class="alert alert-danger">
      Terjadi Kesalahan <br/>
      <br/>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach()
      </ul>      
    </div>
   @endif
   @if ($message = Session::get('success')) 
     <div class="alert alert-success alert-block">
      <button type="button" class="close" data-datadismiss="alert"></button>
      <strong>{{$message}}</strong>
     </div>
    @endif 


<form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanuploadsiswa')  ?>">
   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
   <input type="hidden" name="tambah" value={{$tambah}}>
      <input type="hidden" name="induk" value={{$induk}}>
      <input type="hidden" name="idmenu" value={{$idmenu}}>
      <div class="row">
        <div class="col-md-6">        
          <div class="box box-primary">
            <div class="box-body">
                              <br/>
                              <div class="form-group">
                               Upload File
                                  <input type="file" name="select_file" > </br>
                              </div>
                  <div class="col-md-9 col-md-offset-3">
                                     <button type="submit" name="Simpan" class="btn btn-success" onclick="$('#loading').show();" >
                                      <i class="ace-icon fa fa-download bigger-110 blue"></i>

                                      Simpan

                                    </button>
                                    <div id="loading" style="display:none;"><img src="{{ URL::asset('images/simpan.gif')}}" alt="" /></div>
                        </div>

            </div>

            

          </div>

         

        </div>

         

      </div>



</form>       



    </section>

     

  </div>



<div class="form-group">                 

  

</div>  













 