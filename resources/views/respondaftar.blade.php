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
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 140px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 600px;
  padding: 5px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text]{
  width: 100%;
  padding: 8px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text2]{
  width: 30%;
  padding: 8px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=password] {
  width: 30%;
  padding: 8px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=text]:focus {
  background-color: #ddd;
  outline: none;

}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo1.png" alt="">
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
                                        <a href="mailto:support@ansodftindo.com">support@ansodftindo.com</a>
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
              
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="assets/images/dark-logo.png" alt="logo"></a>
                    </div>
                   
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            
               <div>
                <div align="center">
                    <h2 class="page-title"><a href="{{ URL::asset('/')}}"> ANSOFTINDO UNIVERSITY</a></h2>
                </div>    
                </div>
           
            <!-- Breadcrumbs End -->            

            <!-- Intro Courses -->
            <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="col-lg-12 md-mb-50">
                            <!-- Intro Info Tabs-->
                            <div class="intro-info-tabs">
                                <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                                    <li class="nav-item tab-btns" role="presentation">
                                        <a class="nav-link tab-btn active" id="prod-overview-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Info&nbsp;Pendaftaran</a>
                                    </li>
                                    <li class="nav-item tab-btns" role="presentation">
                                        <a class="nav-link tab-btn" id="prod-curriculum-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-curriculum" role="tab" aria-controls="prod-curriculum" aria-selected="false">Pilihan&nbsp;Bank</a>
                                    </li>
                                    <li class="nav-item tab-btns" role="presentation">
                                        <a class="nav-link tab-btn" id="prod-instructor-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-instructor" role="tab" aria-controls="prod-instructor" aria-selected="false">Cara&nbsp;Pembayaran</a>
                                    </li>
                                    <li class="nav-item tab-btns" role="presentation">
                                        <a class="nav-link tab-btn" id="prod-faq-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-faq" role="tab" aria-controls="prod-faq" aria-selected="false">Faq</a>
                                    </li>
                                    <li class="nav-item tab-btns" role="presentation">
                                        <a class="nav-link tab-btn" id="prod-reviews-tab" data-bs-toggle="tab" href="#" data-bs-target="#prod-reviews" role="tab" aria-controls="prod-reviews" aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content tabs-content" id="myTabContent">
                                    <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                        <div class="content white-bg pt-30">
                                            <!-- Cource Overview -->
                                            <div class="course-overview">
                                                <div class="inner-box">
                                                      <?php 
                                                          $nopendaftaran=$nopen;    
                                                          $kodeverifikasi=$nover;

                                                          
                                                          $a= rand(1,9);
                                                     
                                                          $b= rand(1,6);
                                                      
                                                      ?>

                                                        <p>Selamat, <b>{{$nama}}&nbsp;</b>,anda sudah berhasil mendaftar sebagai calon mahasiswa, berikut informasi pendaftaran anda 
                                                          untuk masuk ke halaman calon mahasiswa :</p>
                                                          </a> 
                                                            <ul class="student-list">
                                                                  <li>
                                                                  <div class="btn-part"><h4>Nomor Pendaftaran :</h4>
                                                                  <a href="#" class="btn readon2 orange">{{$nopendaftaran}}</a>                                   
                                                                  </div>
                                                                  </li>

                                                                  <li>
                                                                  <div class="btn-part"><h4>Kode Verifikasi : <h4>
                                                                  <a href="#" class="btn readon2 orange">{{$kodeverifikasi}}</a>                                   
                                                                  </div>
                                                                  </li>
                                                            </ul>       

                                                          
                                                          <P>Jika nomor pendaftaran dan kode verifikasi ini hilang, anda dapat menghubungi : 
                                                          <p>HP/WA : 081374472466, untuk meminta data kembali</P>

                                                        
                                                                  
                                                                <div class="btn-part">
                                                                <button class="btn readon2 blue" onclick="openForm()">KLIK DISINI UNTUK UPLOAD BUKTI PEMBAYARAN</button>
                                                                </div>
                                                                                                                  

                                                                <div class="form-popup" id="myForm">
                                                                  <form method="post" enctype="multipart/form-data" action="<?=URL::to('uploadbuktibayar')  ?>" class="form-container">
                                                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                                        <input type="hidden" name="nopen" value="{{$nopen}}">
                                                                        <input type="hidden" name="nama" value="{{$nama}}">
                                                                        <h4>Upload Bukti</h4>
                                                                        <div class="form-group">
                                                                          <label><h3>NOMOR : {{$nopen}}</h3></label>
                                                                        </div>
                                                                         <label>Nama Pengirim</label>
                                                                         <input type="text" name="pengirim" value="" required  >  
                                                                         <label>Nama Bank</label>
                                                                         <input type="text" name="bank" value="" required >  
                                                                          <div class="form-group">
                                                                         <label>Jumlahkan</label>
                                                                          </div>
                                                                        <input type="text2" name="a" value="{{$a}}" readonly="true"> <label><b>+</b></label>
                                                                       
                                                                        <input type="text2" name="b" value="{{$b}}" readonly="true"><label><b>=</b></label>
                                                                        <input type="text2" name="hasil" required> 

                                                                        <div class="form-group">
                                                                            Bukti Transfer
                                                                            <input type="file" name="file[]" multiple="" required> </br>
                                                                        </div>
                                                                        <br/> 
                                                                   
                                                                 
                                                                     <div class="form-group">                         
                                                                    <button type="submit" class="btn">Kirim</button>
                                                                    <button type="button" class="btn cancel" onclick="closeForm()">Tutup</button>
                                                                   </form>
                                                                   </div>
                                                                </div>

                                                                <script>
                                                                function openForm() {
                                                                  document.getElementById("myForm").style.display = "block";
                                                                }

                                                                function closeForm() {
                                                                  document.getElementById("myForm").style.display = "none";
                                                                }
                                                                </script>
                                                                                                                                                              
                                                </div>                                                                                                      
                                               
                                            </div>                                                
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="prod-curriculum" role="tabpanel" aria-labelledby="prod-curriculum-tab">
                                        <div class="content">
                                            <div id="accordion" class="accordion-box">
                                                <div class="card accordion block">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link acc-btn" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bank BSI Rp. 250.000</button>
                                                        </h5>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                       
                                                    </div>
                                                </div>
                                                <div class="card accordion block">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bank BCA Rp. 252.500</button>
                                                        </h5>
                                                    </div>
                                                   
                                                </div>
                                                <div class="card accordion block">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Bank Mandiri Rp. 250.000</button>
                                                        </h5>
                                                    </div>
                                                   
                                                </div>
                                            </div>                                             
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="prod-instructor" role="tabpanel" aria-labelledby="prod-instructor-tab">
                                        <div class="content pt-30 pb-30 pl-30 pr-30 white-bg">
                                            <h3 class="instructor-title">Instructors</h3>
                                            <div class="row rs-team style1 orange-color transparent-bg clearfix">
                                                    <p><b>1. Melalui Teller Bank</b> </p>
                                                    <p>                                                
                                                    Ambil formulir setoran tunai
                                                    Gunakan nomor pembayaran
                                                    (Contoh: 10303212332000)
                                                    Masukkan nominal pembayaran </p>
                                                    <p> <b>
                                                    2. Melalui ATM Bank BRI</b> </p>
                                                    <p> Masukkan kartu ATM dan PIN BRI anda
                                                    <p>
                                                    Pilih menu Transaksi > Pembayaran > Lainnya > BRIVA
                                                    Masukkan kode briva untuk pembayaran tagihan Anda yang akan dibayarkan
                                                    (Contoh: 10303212332000)</p>
                                                    <p>
                                                    Dihalaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti Nomor BRIVA, Nama Pelanggan dan Jumlah Pembayaran
                                                    Ikuti instruksi untuk menyelesaikan transaksi
                                                    Simpan struk transaksi sebagai bukti pembayaran</p>
                                                    <p><b>
                                                    3. Melalui BRIMO</b></p>
                                                    <p>
                                                    Login ke BRIMO
                                                    Pilih Beli dan Barang > Pembayaran > Briva
                                                    Masukkan kode briva untuk pembayaran tagihan Anda yang akan dibayarkan(Contoh: 10303212332000)
                                                    Masukkan PIN
                                                    Cetak/simpan struk pembayaran BRIVA sebagai bukti pembayaran </p>
                                                    <p><b>
                                                    4. Melalui Internet Banking Bank BRI</b></p>
                                                    Login pada alamat Internet Banking BRI
                                                    Pilih menu Pembayaran & Pembelian
                                                    Pilih submenu BRIVA
                                                    Masukkan kode briva untuk pembayaran tagihan Anda yang akan dibayarkan
                                                    (Contoh: 10303212332000)
                                                    Masukkan PIN
                                                    Dihalaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti Nomor BRIVA, Nama Pelanggan dan Jumlah Pembayaran
                                                    Cetak/simpan struk pembayaran BRIVA sebagai bukti pembayaran
                                                    </p>
                                                    <p><b>
                                                    5. Melalui Mobile Banking Bank BRI</b></p>
                                                    <p>
                                                    Login Mobile Banking BRI
                                                    Pilih menu Info > Info BRIVA
                                                    Masukkan kode briva untuk pembayaran tagihan Anda yang akan dibayarkan
                                                    (Contoh: 10303212332000)
                                                    Masukkan PIN
                                                    Simpan notifikasi SMS sebagai bukti pembayaran</p>
                                                    <p><b>
                                                    6. Melalui Mini ATM Bank BRI</b></p>
                                                    <p>
                                                    Pilih menu Mini ATM & Pembayaran & BRIVA
                                                    Swipe kartu ATM BRI Anda di Terminal
                                                    Masukkan kode briva untuk pembayaran tagihan Anda yang akan dibayarkan
                                                    (Contoh: 10303212332000)
                                                    Masukkan PIN ATM
                                                    Dihalaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti Nomor BRIVA, Nama Pelanggan dan Julmah Pembayaran
                                                    Simpan struk transaksi sebagai bukti pembayaran</p>
                                                    <p><b>
                                                    7. Melalui ATM Bank Lain</b></p>
                                                    <p>
                                                    Masukkan kartu ATM dan PIN BRI Anda
                                                    Pilih menu Transaksi Lainnya & Transfer & ke Rek Bank Lain
                                                    Masukkan kode bank BRI : 002
                                                    Masukkan jumlah pembayaran yang akan dibayar
                                                    Masukkan kode briva untuk pembayaran tagihan Anda yang akan dibayarkan
                                                    (Contoh: 002 10303212332000)
                                                    Ikuti instruksi untuk menyelesaikan transaksi
                                                    Simpan struk transaksi sebagai bukti pembayaran</p>
                                                </p>                                                         
                                                                                               
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="prod-faq" role="tabpanel" aria-labelledby="prod-faq-tab">
                                        <div class="content">
                                            <div id="accordion3" class="accordion-box">
                                                <div class="card accordion block">
                                                    <div class="card-header" id="headingSeven">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link acc-btn" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">BANK MANDIRI</button>
                                                        </h5>
                                                    </div>

                                                   
                                                </div>
                                                <div class="card accordion block">
                                                    <div class="card-header" id="headingEight">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Color Theory</button>
                                                        </h5>
                                                    </div>
                                                    
                                                </div>
                                                <div class="card accordion block">
                                                    <div class="card-header" id="headingNine">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Basic Typography</button>
                                                        </h5>
                                                    </div>
                                                  
                                                </div>
                                            </div>                                              
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="prod-reviews" role="tabpanel" aria-labelledby="prod-reviews-tab">
                                        <div class="content pt-30 pb-30 white-bg">
                                            <div class="cource-review-box mb-30">
                                                <h4>Stephane Smith</h4>
                                                <div class="rating">
                                                    <span class="total-rating">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>&ensp; 256 Reviews
                                                </div>
                                                <div class="text">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus.</div>
                                                <div class="helpful">Was this review helpful?</div>
                                                <ul class="like-option">
                                                    <li><i class="fa fa-thumbs-o-up"></i></li>
                                                    <li><i class="fa fa-thumbs-o-down"></i></li>
                                                    <li><a class="report" href="#">Report</a></li>
                                                </ul>
                                            </div>
                                            <div class="cource-review-box mb-30">
                                                <h4>Anna Sthesia</h4>
                                                <div class="rating">
                                                    <span class="total-rating">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>&ensp; 256 Reviews
                                                </div>
                                                <div class="text">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus.</div>
                                                <div class="helpful">Was this review helpful?</div>
                                                <ul class="like-option">
                                                    <li><i class="fa fa-thumbs-o-up"></i></li>
                                                    <li><i class="fa fa-thumbs-o-down"></i></li>
                                                    <li><a class="report" href="#">Report</a></li>
                                                </ul>
                                            </div>
                                            <div class="cource-review-box mb-30">
                                                <h4>Petey Cruiser</h4>
                                                <div class="rating">
                                                    <span class="total-rating">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>&ensp; 256 Reviews
                                                </div>
                                                <div class="text">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus.</div>
                                                <div class="helpful">Was this review helpful?</div>
                                                <ul class="like-option">
                                                    <li><i class="fa fa-thumbs-o-up"></i></li>
                                                    <li><i class="fa fa-thumbs-o-down"></i></li>
                                                    <li><a class="report" href="#">Report</a></li>
                                                </ul>
                                            </div>
                                            <div class="cource-review-box">
                                                <h4>Rick O'Shea</h4>
                                                <div class="rating">
                                                    <span class="total-rating">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>&ensp; 256 Reviews
                                                </div>
                                                <div class="text">Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus.</div>
                                                <div class="helpful">Was this review helpful?</div>
                                                <ul class="like-option">
                                                    <li><i class="fa fa-thumbs-o-up"></i></li>
                                                    <li><i class="fa fa-thumbs-o-down"></i></li>
                                                    <li><a class="report" href="#">Report</a></li>
                                                </ul>
                                                <a href="#" class="more">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                    </div>                
                </div>
            </section>
            <!-- End intro Courses -->

           
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
        <div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <button type="button" class="close" data-bs-dismiss="modal">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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


<input type="hidden" name="hidden_view" id="hidden_view" value="{{url('crud/viewjur')}}">  
  <input type="hidden" name="hidden_delete" id="hidden_delete" value="{{url('crud/deletejur')}}">  
  

  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Jurusan</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('sijur')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="1">
         
                
           
         
              <div class="form-group">
                 <b>Kode</b>           
                  <input type="text" name="kode"  value="{{ isset($kode) ? $kode : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>  
              <div class="form-group">
                 <b>Nama Jurusan</b>           
                  <input type="text" name="nama"  value="{{ isset($nama) ? $nama : '' }}" required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div> 
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- Edit Modal start -->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Jurusan</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?=URL::to('upjur')  ?>">
                 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <input type="hidden" name="tambah" value="0">
               
                
            <div class="form-group">
                 
           
              <div class="form-group">
                 <b>Kode </b>           
                  <input type="text" id="edit_kode" name="edit_kode"  required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>

              <div class="form-group">
                 <b>Nama</b>           
                  <input type="text" id="edit_nama" name="edit_nama"  required data-validation-required-message="Please enter your name."  class="form-control"><br/>
                                  
              </div>
               
                      
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <input type="hidden" id="id_edit" name="id_edit">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
      
    </div>
  </div>

   <script type="text/javascript">
      function fun_view(id)
      {
        var view_url = $("#hidden_view").val();
        $.ajax({
          url: view_url,
          type:"GET", 
          data: {"id":iddev}, 
          success: function(result){
            //console.log(result);
             
            $("#view_nama").val(result.nadev);
            
          }
        });
      }

    function fun_edit(id)
    {          

      var view_url = $("#hidden_view").val();
      var idsopir;
      $.ajax({
        url: view_url,
        type:"GET", 
        data: {"id":id}, 
        success: function(result){        
          $("#id_edit").val(result.id);
          $("#edit_kode").val(result.kode);
          $("#edit_nama").val(result.nama);
        }
      });
      
    }



    function fun_delete(id)
    {
      var conf = confirm("Are you sure want to delete??");
      if(conf){
        var delete_url = $("#hidden_delete").val();
        $.ajax({
          url: delete_url,
          type:"POST", 
          data: {"id":id,_token: "{{ csrf_token() }}"}, 
          success: function(response){
            alert(response);
            location.reload(); 
          }
        });
      }
      else{
        return false;
      }
    }
  </script>




