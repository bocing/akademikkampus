<style type="text/css">
   
.clearfix:after {
  content: "";
  display: table;
  clear: both;
  width: 100%;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 19.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
 
   
}

header {
  padding: 6px 0;
  margin-bottom: 15px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 110px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 1.2em;
  line-height: 1.2em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;              
  right: 30px;
  
  background-image:url("/ansoftindo/assets/images/dimension.png");
}

#project {
  float: left;
  text-align: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 20px;
  display: inline-block;
  font-size: 1.0em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 90%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 35px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: left;
}

table th {
  padding: 1px 6px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
  font-size: 1.0em;
}
table no{
   text-align: center;
}

table td {
  padding: 4px;
  text-align: left;
}

               
         

table td.no{
width: 7%;
}

table td.nobukti {
  width: 13%;
}

table td.tgljual {
  width: 15%;
}

table td.napem {
  width: 35%;
}

table td.nohp {
    width: 15%;
    text-align: right;
}

table td.nobm{
 width: 15%;  
 text-align: right; 
}

table td.total {
  font-size: 1.0em;
  width: 15%;
  text-align: right;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.0em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 4px 0;
  text-align: center;
}
</style>
{{ csrf_field() }} 
    <?php $no=1;
       $nou=1;$st=0;
                                                       ?>          

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
 <h1>LAPORAN REKAPITULASI PEMBELIAN
 <br/>
 Periode  :{{$tgl1}} s/d {{$tgl2 }}
 </h1>

<table width="100%" >
            <tr>
              <td><b>No</td>
              <td><b>No Pembelian</b></td>
              <td><b>Tgl Pembelian</b></td>
              <td align="left"><b>Nama Pemasok</b></td>
              <td class="qty"><b>No HP</b></td>              
              <td class="total"><b>Total</b></td>
            </tr>
            @php
                $noj='';   
            @endphp
           
            @foreach($items as $abc) 
              <tr>
                <td class="no">{{$nou++}}</td>
                <td class="nobukti">{{$abc->nobel}}</td>              
                <td class="tgljual"><{{$abc->tglbel}}</td>              
                <td class="napem">{{$abc->napem}}</td>
                <td class="nohp">{{$abc->nohp}}</td>                
                <td class="total">{{ number_format($abc->total, 2) }}</td>
              </tr>

                @php  
                  $st= $st+ $abc->total;                               
                @endphp
            @endforeach()
            
            <tr>
              <td  colspan="5"><div align="center"><b>T O T A L</b></div></td>
              <td class="total"><b>{{ number_format($st, 2) }}</b></td>
            </tr>
          </table> 
</body>
</html>
