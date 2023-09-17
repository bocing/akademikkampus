<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Source Code Boleh</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('lte/bootstrap/css/bootstrap.min.css')}}">
   
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ URL::asset('lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('lte/dist/css/AdminLTE.min.css')}}">
   
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <link rel="stylesheet" href="{{ URL::asset('lte/dist/css/skins/_all-skins.min.css')}}">
    

 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>


<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b>Aplikasi</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

     <form class="form-horizontal" role="form" method="POST" action="{{ url(action('LoginController@postLogin')) }}">
                        {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <input type="text" id="email" name="email" class="form-control" placeholder="No HP">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
         
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ URL::asset('lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>   
 
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('lte/bootstrap/js/bootstrap.min.js')}}"></script>   
 
<!-- FastClick -->
<script src="{{ URL::asset('lte/plugins/fastclick/fastclick.js')}}"></script>   
 
<!-- AdminLTE App -->
<script src="{{ URL::asset('lte/dist/js/app.min.js')}}"></script>   
 
<!-- Sparkline -->
<script src="{{ URL::asset('lte/plugins/sparkline/jquery.sparkline.min.js')}}"></script>   
 
<!-- jvectormap -->
<script src="{{ URL::asset('lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>   
 

<script src="{{ URL::asset('lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>   
 
<!-- SlimScroll 1.3.0 -->
<script src="{{ URL::asset('lte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>   
 
<!-- ChartJS 1.0.1 -->
<script src="{{ URL::asset('lte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>   
 
<!-- AdminLTE dashboard demo (This is only for demo purposes) 
<script src="{{ URL::asset('lte/dist/js/pages/dashboard2.js')}}"></script>   
 -->
<!-- AdminLTE for demo purposes -->
 
</body>
</html>
