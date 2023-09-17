 


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('include.menuatasadmin')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->

      <div class="row">
        <div class="col-md-12">
        
            
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Nomor Pendaftaran :{{$rec->nopen}}</h3>
                  <br/>
                  <h3 class="box-title">Nama Calon :{{$rec->nama}}</h3>
                   <br/>
                   <h3 class="box-title">Nomor Pengirim :{{$rec->pengirim}}</h3>
                  <br/>
                  <h3 class="box-title">Nama Bank :{{$rec->bank}}</h3>
                </div>
                <div class="box-body">
                 
                      <img src = "{{asset($rec->foto)}}"  class="user-image"    class="user-image"> </amp-img> </amp-img>


                </div>
                
              </div>
                <!-- /.box-body -->
              </div>
        </form>

        </div>
        <!-- /.col (left) -->
        
      </div>
       

    </section>
     
  </div>

<div class="form-group">                 
  
</div>  