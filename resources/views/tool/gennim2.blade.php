 


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     @include('include.menuatasadmin')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->

      <div class="row">
        <div class="col-md-6">
        <form method="post" enctype="multipart/form-data" action="{{ url('generateim') }}">
             <input type="hidden" name="_token" value="{!! csrf_token() !!}">     
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">FILTER</h3>
                </div>
                <div class="box-body">
                 
                    <div class="form-group">  
                    <label>Tahun Masuk</label>
                    
                                <select name="idtahun" id="idtahun"  class="form-control select2" style="width: 100%;">                
                        <?php
                         $idkelas=0;

                         $menuden=DB::table('periode')              
                          ->select('*')   
                          ->where('aktif',1)                            
                           
                          ->get();
                          
                         ?>
                         @foreach ($menuden as $key)
                         <?php
                          if( $idkelas == $key->id ){ 
                              echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                          } else{ 
                              echo "<option value='".$key->id."'>".$key->nama."</option>";
                          }
                          ?>
                         @endforeach()
                        </select>                       
                      


                </div>
                 <div class="form-group">  
                    <label>Tahu Masuk</label>
                    
                                <select name="idtahun" id="idtahun"  class="form-control select2" style="width: 100%;">                
                        <?php
                         $idkelas=0;

                         $menuden=DB::table('periode')              
                          ->select('*')   
                          ->where('aktif',1)                            
                           
                          ->get();
                          
                         ?>
                         @foreach ($menuden as $key)
                         <?php
                          if( $idkelas == $key->id ){ 
                              echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                          } else{ 
                              echo "<option value='".$key->id."'>".$key->nama."</option>";
                          }
                          ?>
                         @endforeach()
                        </select>                       
                      


                </div>
                <br/>
                 <td>
                        <button type="submit" class="btn btn-block btn-warning btn-sm"><i class="fa fa-search">&nbsp;&nbsp;</i>Genartess</button>
                 </td>
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