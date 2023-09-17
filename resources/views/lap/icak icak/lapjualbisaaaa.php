<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="86%" height="202"  border="0">
            <tr>
              <td>No</td>
              <td>No Penjualan </td>
              <td>Tgl</td>
              <td>Pelanggan</td>
              <td>No BM </td>
              <td>No HP </td>
            </tr>
            @php
    $noj=''
@endphp
           
              @foreach($items as $abc)
           @php
                   if ($abc->nojual != $noj ) { @endphp

            <tr>
              <td height="28">&nbsp;</td>
              <td>{{$abc->nojual}}</td>
              <td>{{$abc->tgljual}}</td>
              <td>{{$abc->napem}}</td>
              <td>{{$abc->nobm}}</td>
              <td>{{$abc->nohp}}</td>
            </tr>
              @php  
              $noj= $abc->nojual; } 
               @endphp
            <tr>
            <td height="28" class="service"></td>
                      <td class="desc"> {{$abc->namastok}}</td>
                      <td class="unit"> {{ number_format($abc->jml, 2) }}</td>
                      <td class="qty">{{ number_format($abc->harga, 2) }}</td>
                      <td class="total">{{ number_format($abc->subtotal, 2) }}</td>
           
            </tr>
              @endforeach()
            <tr>
              <td height="29" ><div align="center">kode</div></td>
              <td height="29">&nbsp;</td>
            </tr>
            <tr>
              <td ><div align="center">total</div></td>
              <td>&nbsp;</td>
            </tr>
          </table> 
</body>
</html>
