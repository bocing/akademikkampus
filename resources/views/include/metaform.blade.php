<!DOCTYPE html>
<html>
<head>
<?php
  $nato= strtoupper($toko->nama);
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{$nato}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('lte/bootstrap/css/bootstrap.min.css')}}">
  
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('lte/cssonline/css/font-awesome.min.css')}}">
   

  <link rel="stylesheet" href="{{ URL::asset('lte/cssonline/css/ionicons.min.css')}}">
   

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
   
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ URL::asset('lte/plugins/datepicker/datepicker3.css')}}">
   
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ URL::asset('lte/plugins/iCheck/all.css')}}">
   
  <!-- Bootstrap Color Picker -->
  
   
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ URL::asset('lte/plugins/timepicker/bootstrap-timepicker.min.css')}}">
   
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ URL::asset('lte/plugins/select2/select2.min.css')}}">
   
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('lte/dist/css/AdminLTE.min.css')}}">
  
  <link rel="stylesheet" href="{{ URL::asset('lte/modal/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('lte/modal/datatables/dataTables.bootstrap.css')}}">
 
   
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ URL::asset('lte/dist/css/skins/_all-skins.min.css')}}">
  <!--  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  -->
  
  <script src="{{ URL::asset('lte/bootstrap/js/jquery-1.12.4.js')}}"></script>   
  
</head>