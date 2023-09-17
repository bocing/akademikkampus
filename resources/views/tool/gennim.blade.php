 @include('include.atur')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">   
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">{{$judulutama}}-{{$judul}}</a>
          </div>
          <ul class="nav navbar-nav">
              <?php $cc=0;      
               foreach($menuatas as $m) {  
                    if ($cc < 5) 
                      { $cc++;?>                
                          <a href="{{url($m->url)}}/{{$m->id_induk}}/{{$m->id}}"><button class="btn btn-danger navbar-btn">{{$m->nama}}</button></a>
                      <?php 
                      }else { ?>
          </ul> 
          <ul class="nav navbar-nav">            
                            <a href="{{url($m->url)}}/{{$m->id_induk}}/{{$m->id}}"><button class="btn btn-danger navbar-btn">{{$m->nama}}</button></a>
                      <?php  } } ?>   

                    
          </ul>


           
        </div>
      </nav>       
 </section>

 
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
      <!-- /.box -->

      <div class="row">
        <div class="col-md-5">
         <form action="{{ url('generatenim') }}" method="post">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">     
          <input type="hidden" name="induk" value="{{$induk}}">     

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">FILTER</h3>
                </div>
                <div class="box-body">
                      
                    <div class="form-group">
                          <label>Tahun Ajaran</label>
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
                                 
                                  <label> 
                                     <input type="radio" name="Radio" value="satu" >SEMUA PRODI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
                                  </label>   
                                  
                                  <label> 
                                     <input type="radio" name="Radio" value="tig" >PER PRODI</label>  
                                  </label>  
                                  
                          </div>

                           <div  class="tig selectt">     
                            

                                <div class="form-group">
                                   <label>PRODI </label>
                                  <select name="idbln" class="form-control select2" style="width: 100%;">
                                   <?php
                                   $idjurusan=0;
                                    $menuden=DB::table('prodi')                                      
                                      ->get();                
                                      
                                     foreach($menuden as $rows){
                                      if( $idjurusan == $rows->id ){ 
                                          echo "<option selected = 'selected' value='".$rows->id."'>".$rows->nama."</option>";
                                      } else{ 
                                          echo "<option value='".$rows->id."'>".$rows->nama."</option>";
                                      }
                                      }
                                      ?> 
                                   
                                  </select>
                               
                              </div>  

                            </div>

                        

                            </div>

                     
              
                       
        <br/>              
      

                        
                     
                     <td>
                            <button type="submit" class="btn btn-block btn-warning btn-sm" onclick="$('#loading').show();" ><i class="fa fa-calculator">&nbsp;&nbsp;</i>Tampilkan</button>
                     </td>
                </div>
                <div id="loading" style="display:none;"><img src="{{ URL::asset('images/simpan.gif')}}" alt="" /></div>

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

<style>
    body{
        margin: 0px;
    }
    .pilih:hover{
        cursor: pointer;
    }
  </style>
  <script type="text/javascript">

$(document).ready(function(){
  
 
}); 
</script>
 <script type="text/javascript"> 
      $(document).ready(function() { 
        $('input[type="radio"]').click(function() { 
          var inputValue = $(this).attr("value"); 
          var targetBox = $("." + inputValue); 
          $(".selectt").not(targetBox).hide(); 
          $(targetBox).show(); 
        }); 
      }); 
    </script>