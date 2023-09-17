
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle"alt="">
           
        </div>
        <div class="pull-left info">
          <p>{{$namauser}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Onlines</a>
        </div>
      </div>
       
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
         
        
        

        <?php

          //dd($idrole);
             if ($idrole!=1) {
                    $menu_0=DB::table('menu')
                      ->leftjoin('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                      ->select('menu.*')                 
                      ->where('menu.id_induk', '=', 0)                                
                      ->where('rolerule.idrole', '=', $idrole)         
                      ->where('rolerule.tambah', '=', 'on')         
                      ->orderby('menu.urut')
                      ->get(); 
                  }
                 if ($idrole==1) {
                    //$menu_0 = \App\Menu::where('id_induk',0)
                     $menu_0=DB::table('menu')                            
                            ->select('menu.*')
                             ->where('id_induk', '=',0)      
                             ->orderby('urut')  
                             ->get();
                   }     
                      foreach ($menu_0 as $key) {                        
                         if ($idrole!=1) {
                         $menu_1=DB::table('menu')
                            ->join('rolerule', 'rolerule.idmenu', '=', 'menu.id')
                            ->select('menu.*')                 
                            ->where('menu.id_induk', '=', $key->id)                                
                            ->where('rolerule.idrole', '=', $idrole)         
                            ->where('rolerule.tambah', '=', 'on')         
                            ->orderby('menu.urut')
                            ->get(); 
                          }
                           if ($idrole==1) {
                              //$menu_1 = \App\Menu::where('id_induk', $key->id)->get();

                              $menu_1=DB::table('menu')
                            
                              ->select('menu.*')                 
                              ->where('menu.id_induk', '=', $key->id)
                              ->orderby('menu.urut')
                              ->get(); 
                          }    

                              //$parent1 = \App\Menu::where('id',$key->id)->first();

                               $parent1=DB::table('menu')                               
                                  ->select('menu.*')                 
                                  ->where('menu.id', '=', $key->id)  
                                  ->orderby('menu.urut')
                                  ->first(); 

                          ?> 
                          <li class="treeview">
                              <a href="#">
                                <i class="{{$parent1->icon}}"></i> <span>{{$parent1->nama}}</span>
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                  <?php
                                  foreach ($menu_1 as $key1) 
                                    { ?>
                                    
                                        <?php
                                             
                                           // $parent3 = \App\Menu::where('ids',$key1->id)->first();

                                            $parent3=DB::table('menu')                               
                                                ->select('menu.*')                 
                                                ->where('id', '=', $key1->id)  
                                               ->orderby('menu.urut')
                                                ->first(); 
                                        ?>
                                        <li>
                                           <a href="{{url($parent3->url)}}/{{$parent3->id_induk}}">
                                           <i class="{{$parent3->icon}}"></i>&nbsp; {{$parent3->nama}}</a></li>
                                        </li>
       

                                      <?php  
                                    }

                            ?>
                            </ul>      
                              
                              <?php
                               }
                            ?>
                           
                       </li>  
                          

 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
