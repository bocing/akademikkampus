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
  width: 15%;
}

table td.tgljual {
  width: 15%;
}
 
table td.napem {
  width: 40%;

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
<title>Mutasi Kas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
 <h1>LAPORAN MUTASI KAS
 <br/>
 Periode  :{{$tgl1}} s/d {{$tgl2 }}
 </h1>

<table width="100%" >
            <tr>
              <td><b>No</td>
              <td><b>No Bukti</b></td>
              <td><b>Tgl </b></td>
              <td align="left"><b>Keterangan</b></td>              
              <td align="left"><b>Masuk</b></td>              
              <td align="left"><b>Keluar</b></td>              
              
            </tr>
            @php
                $noj='';   
                $totdd=0;
                $totkk=0;
            @endphp
           
            @foreach($items as $abc) 
            @php
                if ($abc->dk == 'D')  {
                      $totd = $abc->total;
                      $totk = 0; 
                      $totdd=$totdd +  $totd;                   

                    }else 
                    {                    
                      $totd = 0; 
                      $totk = $abc->total;
                      $totkk=$totkk +  $totk;
                    }
         
            @endphp 
              <tr>
                <td class="no">{{$nou++}}</td>
                <td class="nobukti">{{$abc->nobukti}}</td>              
                <td class="tgljual">{{$abc->tglkas}}</td>                              
                <td class="napem">{{$abc->ket}}</td>                                           
                        
                <td class="total">{{ number_format($totd, 2) }}</td>               
                <td class="total">{{ number_format($totk, 2) }}</td>               
                 
              </tr>

                 
            @endforeach()
               @php
               $saldo = $totdd-$totkk;
               @endphp 

            <tr>
              <td  colspan="4"><div align="center"><b>T O T A L</b></div></td>
              <td class="total"><b>{{ number_format($totdd, 2) }}</b></td>
              <td class="total"><b>{{ number_format($totkk, 2) }}</b></td>
            </tr>
            <tr>
              <td  colspan="4"><div align="center"><b>S A L D O</b></div></td>
              <td class="total"><b>{{ number_format($saldo, 2) }}</b></td>
               
            </tr>
          </table> 
</body>
</html>
