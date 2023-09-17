<style type="text/css">
  .skin-blue .main-header .navbar .nav>li>a {
    color: #040403;
}
.skin-blue .main-header .logo {
    background-color: #222d32;
    color: #fff;
    border-bottom: 0 solid transparent;
}

.navbar-nav>.user-menu>.dropdown-menu>li.user-header {
    height: 144px;
    padding: 10px;
    text-align: center;
}
 
.logo .a:hover {
  color: yellow;
}
.logo .a:active {
  color: yellow;
}

</style>
<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<div class="wrapper">

<header class="main-header">
    <!-- Logo -->
    <a href="{{url('/home')}}" class="logo" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" ><b>&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
      <!-- logo for regular state and mobile devices -->
      
       <img src="{{URL::asset('images/logoans.png')}}"   alt="User Image" style="width:100px;height:40px;" >           
       
    </a>
   

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
           
          
        
          <!-- Notifications: style can be found in dropdown.less -->
         
          <!-- Tasks: style can be found in dropdown.less -->

          
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php
          //  dd($currentUser->foto);
             if ($currentUser->foto !='') { ?>                           
              <img src = "{{asset($currentUser->foto)}}"  class="user-image"    class="user-image"> </amp-img> </amp-img>
            <?php } else{  ?>                                          
                <img src = "{{URL::asset('images/orang.png')}}"  class="user-image"    class="user-image"> </amp-img> </amp-img>
          <?php } ?>                                                      
              <span class="hidden-xs"><b>{{$namauser}}</b></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                 <?php if ($currentUser->foto !='') { ?>                           
              <img src="{{asset($currentUser->foto)}}" class="img-circle" alt="">
            <?php } else{  ?>                                          
                <img src = "{{URL::asset('images/orang.png')}}"  class="user-image"    class="user-image"> </amp-img> </amp-img>
          <?php } ?>                                          
           
                
              
                <p>
                  {{$namauser}}                   
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
              <div class="pull-left">
                  <a href="{{ URL::asset('/profile') }}"> <img src="{{URL::asset('images/prof2.jpg')}}"  alt="User Image" style="width:60px;height:40px;" ></a>
                </div>
                
                <div class="pull-right">
                  <a href="{{ URL::asset('/logout') }}"> <img src="{{URL::asset('images/log.png')}}"  alt="User Image" style="width:30px;height:30px;" ></a>
                     
                </div>
              </li>
            </ul>
          </li>



          <!-- Control Sidebar Toggle Button -->
         
      </ul>
      </div>
 


      <div class="navbar-custom-menu">  

        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->

          <?php
          $nato= strtoupper($toko->nama);
          ?>
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="{{ URL::asset('/home')}}" class="dropdown-toggle" data-toggle="dropdown">
             <span  align="left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $nato}}</b> &nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TA :{{$natahun}}
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
              </b></span>
            </a>
            
          </li>




          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
</header>
 