<style type="text/css">
@page { size 8.5in 11in; margin: 0px auto }
    div.page { page-break-after: always }
    .style1 {font-weight: bold}
    </style>
  <style type="text/css" media="print">
      .toolbar {
        display: none;
        visibility: hidden;
      }
    </style>
  <script type="text/javascript">
      function doPrint() {
        window.print();
        window.close();
      }
    </script>

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
  font-size: 12px; 
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
  background: url(assets/logo.png);
}
h4 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 1.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;                
  background: url(assets/dimension.png);
}
h3 {
  padding: 6px 10px 3px 1px;
  border-top: 0px solid  #5D6975;
  border-bottom: 0px solid  #5D6975;
  color: #5D6975;
  font-size: 1.2em;
  line-height: 1.6em;
  font-weight: normal;
  text-align: left;
  margin: 0 0 3px 0;                
  background: url(assets/dimension.png);
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
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;

}
 
table td {
  text-align: left;

}

table th {
  padding: 6px 12px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;    
    font-weight: bold;    
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
  padding: 4px;
  text-align: left;
  font-size: 0.8em;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
  text-align: right;
}

table td.grand {
  border-top: 1px solid #5D6975;

}

table td.sks {
 
text-align: center;

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
    <title>KRS </title>
  </head>
  <body>
    
        
    <table>
   
      <h3>Program Studi : {{$namaprodi}}     </h3>

      <h3>Nama Siswa : {{$namasiswa}}     </h3>
         <h3>NIM : {{$nis}}</h3>
      
    </table>
     
  

    <main>
    <table class="table table-striped" border="1"> 
        <thead>
          <tr>
                  <th>No</th>
                    <th>Hari</th>
                                          <th >Mulai</th>  
                                          <th  >Selesai</th>  
                                           
                                          <th  >Nama Matakuliah</th>  
                                           <th class="sks" >Sks</th>                                         
                                          <th >Ruang</th>  
                                          <th  >Dosen</th>  
            
            </td>
          </tr>
        </thead>
        <tbody>
 <?php
       $x=0;

       ?>

    @foreach($items as $abc)
    <?php
       $x=$x+$abc->sks;
       ?>

<tr>
            <td class="center">{{$no++}}</td>
                                            
                                            <td>  {{$abc->namahari}}</a></td>
                                            <td class="sks">{{$abc->jammulai}} </td>
                                            <td class="sks">{{$abc->jamselesai}} </td>
                                             
                                            <td>  {{$abc->nama}}</a></td>
                                            <td class="sks">  {{$abc->sks}}</a></td>
                                         
                                            <td >{{$abc->namaruang}} </td>
                                            <td >{{$abc->namaguru}} </td>
             
           

</tr>
                                         @endforeach()
                                         <?php 
                                        

                                          ?>
          <tr>
            <td colspan="5" class="grand total">Total SKS</td>
            <td class="grand total">{{ number_format($x, 2) }}</td>
            <td></td>
            <td></td>
            
          </tr>

        </tbody>
      </table>
      <a class="toolbar" href="#" onclick="window.print();return false;">Print</a>
      
    </main>
    <footer>
        
    </footer>
  </body>
</html>