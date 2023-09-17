<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style7 {font-size: 12px}
-->
</style>
</head>

<body>
<table width="100%" height="202"  border="0">
  <tr>


    <td><span class="style6">No</span></td>
     <td width="15%><span class="style6" >Nomor Invoice</span></td>
    <td width="30%><span class="style6">Nama Barang</span></td>    
    <td><span class="style6">Qty</span></td>
    <td><span class="style6">Harga</span></td>
    <td><span class="style6">Sub Total </span></td>
    
  </tr>
    @php
    $noj=''
@endphp
           
              @foreach($items as $abc)
           @php
                   if ($abc->nojual != $noj ) { @endphp
  <tr>
              <td >&nbsp;</td>
              <td >{{$abc->nojual}}</td>              
              <td >{{$abc->napem}}</td>
              <td >{{$abc->tgljual}}</td>
              <td >{{$abc->nobm}}</td>
              <td >{{$abc->nohp}}</td>
            </tr>
              @php  
              $noj= $abc->nojual; } 
               @endphp
  <tr>


  <td>&nbsp;</td>
                      
    <td height="28"><span class="style6">1</span></td>     
    <td><span class="style6">{{$abc->namastok}}</span></td>
    <td><span class="style6"> {{ number_format($abc->jml, 2) }}</span></td>
    <td><span class="style6">{{ number_format($abc->harga, 2) }}</span></td>
    <td><span class="style6">{{ number_format($abc->subtotal, 2) }}</span></td>
  </tr>
   @endforeach()
  <tr>
    <td height="29" colspan="5"><div align="center" class="style1 style7">kode</div></td>
    <td height="29"><span class="style7"></span></td>
  </tr>
  <tr>
    <td colspan="5"><div align="center" class="style6">total</div></td>
    <td><span class="style7"></span></td>
  </tr>
</table>
</body>
</html>
