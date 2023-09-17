<style type="text/css">
   
.clearfix:after {
  content: "";
  display: table;
  clear: both;
  width: 110%;
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
  font-size: 14px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
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
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;                
  background: url(..assets/images/dimension.png);
}

#project {
  float: left;
  text-align: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
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
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 1px 12px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}
table no{
   text-align: center;
}

table td {
  padding: 6px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
</style>
 {{ csrf_field() }}
 
                                                        <?php $no=1;
                                                       ?>                                         
 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="../assets/images/logo.png">
      </div>
                           

      <h1>NO INVOICE : </h1>
      <div id="company" class="clearfix">
        
      </div>
      <div id="project">
        
       
        <div>SYAFIRA MOTOR</div>
        <div>Pekanbaru,<br />Riau, Indonesia</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">syafiramotor@gmail.com</a></div> 
      </div>
    </header> 

    <main>
      <table>
        <thead>
          <tr>
                 
            <th class="service">NO</th>
            <th class="desc">NAMA BARANG</th>
            <th class="qty"> QTY</th>
            <th class="qty"> HARGA</th>
            <th class="total"> TOTAL</th>            
            </td>
          </tr>
        </thead>
        <tbody>

    @foreach($items as $abc)
    

<tr>
            <td class="service">{{$no++}}</td>
            <td class="desc"> {{$abc->namastok}}</td>
            <td class="unit"> {{ number_format($abc->jml, 2) }}</td>
            <td class="qty">{{ number_format($abc->harga, 2) }}</td>
            <td class="total">{{ number_format($abc->subtotal, 2) }}</td>
           

</tr>
                                         @endforeach()

          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">{{ number_format($totallll, 2) }}</td>
          </tr>
        </tbody>
      </table>
       
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>