<!DOCTYPE html>
<html lang="zxx">
    <head> 
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Educavo - Education HTML Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav-orange.png')}}">
        <!-- Bootstrap v5.0.2 css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/animate.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/off-canvas.css')}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/fonts/linea-fonts.css')}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/fonts/flaticon.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ URL::asset('edu/assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/responsive.css')}}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
   <style type="text/css">
    .btn-shop.orange-color:hover {
    background: #13640f;
}
.btn-shop.orange-color {
    background: #17c937;
    color: #ffffff;
}
   </style>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                   <img src="{{ URL::asset('assets/pre-logo.png')}}" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        <!--Full width header Start-->
        <div class="full-width-header header-style1 home8-style4">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area home8-topbar">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-7">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:support@rstheme.com">support@ansoftindo.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        Pekanbaru, Indonesia
                                    </li>
                                </ul>
                            </div>
                             
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
               <div>
                <div align="center">
                     <h2 class="page-title"><a href="{{ URL::asset('/')}}"> ANSOFTINDO UNIVERSITY</a></h2>
                </div>    
                </div>
           
                <!-- Menu End -->

              
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

        <!-- Main content Start -->
        <div class="main-content">
            
            <!-- Breadcrumbs End -->

            <!-- Checkout section start -->
            <div class="row" > 
                  <div class="col-lg-6 md-mb-50">
                      <div id="rs-checkout" class="rs-checkout orange-color  md-pt-70 md-pb-70">
                           <div class="container">
                               <?php
                               if ($pesan!=''){?>
                                                   
                                                                      <div class="btn-part">
                                                                      <a href="#" class="btn readon2 orange">{{$pesan}}</a>                                   
                                                                      </div>
                                      <?php }?>                                 
                               <div class="full-grid">
                                    <form method="post" enctype="multipart/form-data" action="<?=URL::to('simpandaftarpmb')  ?>">
                                           <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                           
                                       <div class="billing-fields">
                                           <div class="checkout-title">
                                               <h3>FORM PENDAFTARAN</h3>
                                           </div>
                                           <div class="form-content-box">
                                               <div class="row">
                                                   <div class="col-md-6 col-sm-12 col-xs-12">
                                                       <div class="form-group">
                                                           <label>Nama *</label>
                                                           <input id="nama" name="nama" class="form-control-mod" type="text" required="">
                                                       </div>
                                                   </div>
                                                 
                                               </div>
                                               <div class="row">
                                                   <div class="col-md-12 col-sm-12 col-xs-12">
                                                       <div class="form-group">
                                                           <label>Nomor Handphone</label>
                                                           <input id="nohp" name="nohp" class="form-control-mod" type="text">
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                   <div class="col-md-12 col-sm-12 col-xs-12">
                                                       <div class="form-group">
                                                           <label>Jalur *</label>
                                                            
                                                            <select name="jalur" id="jalur" class="form-control select2" style="width: 100%;">
                                                             
                                                             <?php
                                                             $idjalur=0;
                                                             // echo "<option selected = 'selected' value='0'>".'Semua'."</option>";
                                                               $menuden=DB::table('jalur')                                         
                                                                      ->select('*')                                       
                                                                      ->orderby('id','asc')                                                                                          
                                                                      ->get(); 


                                                               foreach($menuden as $rows){
                                                                if( $idjalur == $rows->id ){ 
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
                                                <div class="row">
                                                   <div class="col-md-12 col-sm-12 col-xs-12">
                                                       <div class="form-group">
                                                           <label>Program Studi *</label>
                                                            <select name="prodi" id="prodi" class="form-control select2" style="width: 100%;">
                                                             
                                                             <?php
                                                             $idjalur=0;
                                                             // echo "<option selected = 'selected' value='0'>".'Semua'."</option>";
                                                               $menuden=DB::table('prodi')                                         
                                                                      ->select('*')                                       
                                                                      ->orderby('id','asc')  
                                                                      ->where('id','!=',1)                                                                                        
                                                                      ->get(); 


                                                               foreach($menuden as $rows){
                                                                if( $idjalur == $rows->id ){ 
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
                                               <?php
                                                $a= rand(1,9);
                                               
                                                    $b= rand(1,6);
                                               ?>
                                             
                                               
                                               <div class="row">
                                                   <div class="col-md-12 col-sm-12 col-xs-12">
                                                       <div class="form-group">
                                                           <label>Email address *</label>
                                                           <input id="email" name="email" class="form-control-mod" type="email" required="">
                                                       </div>
                                                   </div>
                                               </div>

                                                 <div class="row">
                                                   <div class="col-md-4 col-sm-4 col-xs-4">
                                                       <div class="form-group">
                                                           <label>Jumlahkan</label>
                                                           <input id="city" name="a" class="form-control-mod" type="text" value="{{$a}}" required="" readonly="true">
                                                       </div>
                                                   </div>

                                                   <div class="col-md-4 col-sm-4 col-xs-4">
                                                       <div class="form-group">
                                                           <label>+</label>
                                                           <input id="city" name="b" class="form-control-mod" type="text" value="{{$b}}" required="" readonly="true">
                                                       </div>
                                                   </div>

                                                   <div class="col-md-4 col-sm-4 col-xs-4">
                                                       <div class="form-group">
                                                           <label>Hasil *</label>
                                                           <input id="city" name="hasil" class="form-control-mod" type="text"  required="" >
                                                       </div>
                                                   </div>
                                               </div>
                                                
                                           </div>
                                       </div><!-- .billing-fields -->

                                       

                                       
                                       <div class="payment-method mt-40 md-mt-20">
                                           
                                           <div class="bottom-area">
                                               
                                               <button class="btn-shop orange-color" type="submit">Daftar</button>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </div>
                      </div>
                  </div>
                  <div class="col-lg-6 md-mb-50">
                  <div class="checkout-title">
                                               <h3>TELUSURI PENDAFTARAN</h3>
                                           </div>
                                             <form method="post" enctype="multipart/form-data" action="{{ url('telusuri') }}">
                                               <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                              
                                               <label>Masukkan Nomor Pendaftaran Disini :</label>
                                               <input type="text" name="nopen">
                                                <div class="bottom-area">
                                               
                                               <button class="btn-shop orange-color" type="submit">Telusuri</button>
                                           </div>
                                           </form>

                   </div>   

            </div>
            <!-- Checkout section end -->
            <!-- Newsletter section start -->
            
            <!-- Newsletter section end -->
        </div> 
            <!-- Main content End --> 

        <!-- Footer Start -->
         
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
       
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ URL::asset('edu/assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{ URL::asset('edu/assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v5.0.2 js -->
        <script src="{{ URL::asset('edu/assets/js/bootstrap.min.js')}}"></script>
        <!-- Menu js -->
        <script src="{{ URL::asset('edu/assets/js/rsmenu-main.js')}}"></script> 
        <!-- op nav js -->
        <script src="{{ URL::asset('edu/assets/js/jquery.nav.js')}}"></script>
        <!-- wow js -->
        <script src="{{ URL::asset('edu/assets/js/wow.min.js')}}"></script>     
        <!-- plugins js -->
        <script src="{{ URL::asset('edu/assets/js/plugins.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{ URL::asset('edu/assets/js/jquery.magnific-popup.min.js')}}"></script>  
        <!-- contact form js -->
        <script src="{{ URL::asset('edu/assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{ URL::asset('edu/assets/js/main.js')}}"></script>
    </body>
</html>