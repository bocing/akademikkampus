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
$idrolesetting=$idrolesetting;
//dd($idrole);
 ?>



  <div class="content-wrapper">
   <section class="content-header">
      <h4>
        {{$judulutama}}-{{$judul}}
      </h4>       
    </section>
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->

      <div class="row">
        <div class="col-md-4">
          <div class="box box-danger">            
            <div class="box-body">
              <form method="get" enctype="multipart/form-data" action="<?=URL::to('kirimrole')  ?>">
                                      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                      <input type="hidden" name="id_induk" value="{{ isset($id_induk) ? $id_induk : '' }}">
                                      


                                        
                                          <div class="form-group">                 
                                            <label>Pilih </label>
                                            <select name="idrolesetting"  class="form-control select2" style="width: 100%;">                
                                            <?php
                                             $menuden=DB::table('role')              
                                              ->select('role.*')  
                                              ->get();
                                              
                                             foreach($menuden as $key){
                                                if( $idrolesetting == $key->id ){ 
                                                    echo "<option selected = 'selected' value='".$key->id."'>".$key->nama."</option>";
                                                } else{ 
                                                    echo "<option value='".$key->id."'>".$key->nama."</option>";
                                                }
                                                } 
                                                ?>   

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
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-body">
              <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpanrule')  ?>">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">     
                        <input type="hidden" name="idrolesetting" value="{{ isset($idrolesetting) ? $idrolesetting : '' }}">     
              <table>
                                
                        
                                              <tr>
                                                <th width="400">Nama</th>
                                                <th width="60">Tambah</th>
                                                <th width="60">Edit</th>   
                                                <th width="60">Hapus</th>
                                               </tr>
                                             
                                                        
    <?php
    $menu_0 = \App\Menu::where('id_induk',0)->get();
    //var_dump($idrolesetting);
    if ($idrolesetting!=0) {
       $counterRole=0;
      foreach ($menu_0 as $key) {
        $counterRole++;
        $menu=DB::table('menu')
                      ->leftjoin('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                      ->select('menu.*')                                                                      
                      ->where('menu.id_induk', '=', $key->id)
                       ->groupby('menu.id')  
                      ->get(); 

      
        $parent2 = \App\Menu::where('id',$key->id)->first();
          
        $parent22 = DB::table('rolerule')
               ->where('rolerule.idmenu','=',$key->id)
               ->where('rolerule.idrole','=',$idrolesetting)
               ->first();   
         // var_dump($parent22)   
        ?>
          <tr>
          <?php
          $c1="";$c2="";$c3=""; ?>        
          <td>{{$parent2->nama}}</td>
          <input type="hidden" name="menuid<?php echo  $counterRole; ?>"  id="menuid<?php echo  $counterRole; ?>"   value="{{$parent2->id}}">  
          <td><input type="checkbox" name="tambah<?php echo $counterRole ?>" id="tambah<?php echo $counterRole ?>" <?php 
       if($parent22!=null){ 
           if($parent22->tambah=='on'){ 
               $c1="checked"; 
           }else{
               $c1=""; 
                }   
        }else{
          $c1="";} 
      ?> <?php  echo "$c1"; ?> >  </td>
          <td><input type="checkbox" name="edit<?php echo $counterRole ?>" id="edit<?php echo $counterRole ?>" <?php 
       if($parent22!=null){ 
           if($parent22->edit=='on'){ 
               $c2="checked"; 
           }else{
               $c2=""; 
                }   
        }else{
          $c2="";} 
      ?>  <?php  echo "$c2"; ?>> </td>
          <td><input type="checkbox" name="hapus<?php echo $counterRole ?>" id="hapus<?php echo $counterRole ?>" <?php 
       if($parent22!=null){ 
           if($parent22->hapus=='on'){ 
               $c3="checked"; 
           }else{
               $c3=""; 
                }   
        }else{
          $c3="";} 
      ?> <?php  echo "$c3"; ?>>  </td>
 
                   <?php
                    $c1="";$c2="";$c3=""; 
                    foreach ($menu as $key2) {
                      $counterRole++;
                      //$menu2 = \App\Rolerule::where('id_induk',$key2->id)->get();
                      $parent222 = \App\Menu::where('id',$key2->id)->first();

                      $cekkk = DB::table('rolerule')
                         ->where('rolerule.idmenu','=',$key2->id)
                         ->where('rolerule.idrole','=',$idrolesetting)

                         ->first();   
                          ?> 
                          <tr>             
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$parent222->nama}}</td>
                           <input type="hidden" name="menuid<?php echo  $counterRole; ?>" id="menuid<?php echo $counterRole; ?>"   value="{{$parent222->id}}"> 
                           <td><input type="checkbox" name="tambah<?php echo $counterRole ?>" id="tambah<?php echo $counterRole ?>" <?php 
       


       if($cekkk!=null){ 
           if($cekkk->tambah=='on'){ 
               $c1="checked"; 
           }else{
               $c1=""; 
                }   
        }else{
          $c1="";} 
      ?> <?php  echo "$c1"; ?> >  </td>
          <td><input type="checkbox" name="edit<?php echo $counterRole ?>" id="edit<?php echo $counterRole ?>" <?php 
       if($cekkk!=null){ 
           if($cekkk->edit=='on'){ 
               $c2="checked"; 
           }else{
               $c2=""; 
                }   
        }else{
          $c2="";} 
      ?>  <?php  echo "$c2"; ?>> </td>
          <td><input type="checkbox" name="hapus<?php echo $counterRole ?>" id="hapus<?php echo $counterRole ?>" <?php 
       if($cekkk!=null){ 
           if($cekkk->hapus=='on'){ 
               $c3="checked"; 
           }else{
               $c3=""; 
                }   
        }else{
          $c3="";} 
      ?> <?php  echo "$c3"; ?>>  </td>
                           </tr>
                      <?php } ?> 
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






 


