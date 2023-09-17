<style>
table {
    border-collapse: collapse;
    
    margin-left:5%; 
    margin-right:5%; 
    border: 20px;
    border-color: red;
      padding: 5px;
     
}
 
tr {
  padding:0px;
}
tr:nth-child(even){background-color:#F2F2F2}

th {
    background-color: #FF8000 ;
    color: white;
}
</style> 
 
<?php 
$id_induk=$id_induk;
$iduser=$iduser;
//dd($idrole);
 ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
       @include('include.menuatasadmin')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->

      <div class="row">
        <div class="col-md-6">
          <div class="box box-danger">            
            <div class="box-body">
              <form method="get" enctype="multipart/form-data" action="<?=URL::to('kirimruledep')  ?>">
                                      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                      <input type="hidden" name="id_induk" value="{{ isset($id_induk) ? $id_induk : '' }}">
                                      


                                        
                                          <div class="form-group">                 
                                            <label>Pilih </label>
                                            <select name="iduser"  class="form-control select2" style="width: 100%;">                
                                            <?php
                                             $menuden=DB::table('guru')              
                                              ->select('guru.*')  
                                              ->get();
                                              
                                             ?>
                                             @foreach ($menuden as $key)                                                    
                                              <option value="{{$key->id}}">{{$key->nama}}</option>
                                             @endforeach()    

                                            </select>
                                          </div>  
                                        
                                        <br/>
                                          <!-- /.form-group -->
                                       <button type="submit" name="Simpan" class="btn btn-success" >
                                       <i class="ace-icon fa fa-download bigger-110 blue"></i>Submit
                                       </button>
                                    </form>    
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body">
              <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanruledep')  ?>">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">     
                        <input type="hidden" name="iduser" value="{{ isset($iduser) ? $iduser : '' }}">     
              <table>
                                
                        
                                              <tr>
                                                <th width="200">Nama Departemen</th>
                                                <th width="60">Boleh</th>
                                                
                                               </tr>
                                             
                                                        
    <?php
    //$menu_0 = \App\Departemen::where('id',0)->get();
     $menu_0=DB::table('departemen')                     
                      ->get(); 
    //dd($menu_0);
    if ($iduser!=0) {
          $counterRole=0;
            foreach ($menu_0 as $key) {
              $counterRole++;
             
              $parent22 = DB::table('ruledep')
                     ->select('ruledep.*')                
                     ->where('ruledep.iddep','=',$key->id)
                     ->where('ruledep.iduser','=',$iduser)
                     ->groupby('ruledep.iddep')  
                     ->first();   
               // var_dump($parent22)   
              ?>
                <tr>
                <?php
                $c1="";?>        
                <td>{{$key->nadep}}</td>
                 
                
                <?php 
                if($parent22!=null){ 
                     if($parent22->boleh==1){ 
                         $c1="checked"; 
                     }else{
                         $c1=""; 
                          }           
                    } ?> 
                      <input type="hidden" name="iddep<?php echo  $counterRole; ?>"  id="iddep<?php echo  $counterRole; ?>"   value="{{$key->id}}">  
                      <td><input type="checkbox" name="tambah<?php echo $counterRole ?>" id="tambah<?php echo $counterRole ?>" <?php 
                           if($parent22!=null){ 
                               if($parent22->boleh=='on'){ 
                                   $c1="checked"; 
                               }else{
                                   $c1=""; 
                                    }   
                            }else{
                              $c1="";} 
                          ?> <?php  echo "$c1"; ?> >  
                       </td>
       
                                 </tr>
                          
                    </tr>
                <?php } ?> 
    <?php } ?>           
                                            
                              </table> 
                              
                             
                        <input type="hidden" name="counterRole" value="{{ isset($counterRole) ? $counterRole : '' }}">
                        <button type="submit" name="Simpan" class="btn btn-success" >
                        <i class="ace-icon fa fa-download bigger-110 blue"></i>Simpan </button><br/>
                        </form>
           
            </div>
            
          </div>
          
        </div>
         
      </div>
   
    </section>
    <!-- /.content -->
  </div>






 


