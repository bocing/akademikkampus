    <html>
    <head>
    <style>
    h1 {
    text-align: center;
}

h2 {
    text-align: center;
    margin: 10px;
}

h3 {
    text-align: center;
    line-height: 10px;
      
}

    @page { size 210mm 297mm; margin: 0px auto }
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
    </head>
  
  <body>
  <a class="toolbar" href="#" onclick="window.print();return false;">Print</a>
   
   
    <?php 
 
    $data=DB::table('kelassiswa')                         
                  ->select('kelassiswa.*')
                  ->where('idkelas', '=', $idkelas)
                  ->get();  
    $satuan=DB::table('seko')                         
                  ->select('*')                  
                  ->first();    
  
  $namaku = $satuan->nama;
  $alamat = $satuan->alamat;
  $telp = $satuan->telp;
  $email = $satuan->email;
  $web = $satuan->web;
  $nds = $satuan->nds;
  $npsn = $satuan->npsn;
  $prop = $satuan->prop;
  $kota = $satuan->kota;
  $kec = $satuan->kec;
  $kel =  $satuan->kel;
  $kodepos =$satuan->kodepos;            
    

    foreach ($data as $row) {
      ?>
     <br/>  
      <p><h3  >RAPOR</h3>
      <p><h3  >Madrasah Aliyah Negeri 1 Rokan Hilir</h3>
      <p><h3  >(MAN)</h3>
  
   
   <p>&nbsp;</p>
   <p align="center">&nbsp;</p>
   <table width="89%"  border="0">
       <tr>
         <td width="11%" height="36">Nama Sekolah </td>
         <td width="1%">:</td>
         <td colspan="2"><?php echo $namaku; ?></td>
       </tr>
       <tr>
         <td height="35">NPSN</td>
         <td>:</td>
         <td colspan="2"><?php echo $npsn; ?></td>
       </tr>
       <tr>
         <td height="38">NIS/NSS/NDS</td>
         <td>:</td>
         <td colspan="2"><?php echo $nds; ?></td>
       </tr>
       <tr>
         <td height="41">Alamat Sekolah </td>
         <td>:</td>
         <td colspan="2"><?php echo $alamat; ?></td>
       </tr>

       <tr>
         <td height="41">Kode Pos </td>
         <td>:</td>
         <td colspan="2"><?php echo $kodepos; ?></td>
       </tr>

      <tr>
         <td height="41">Telp </td>
         <td>:</td>
         <td colspan="2"><?php echo $telp; ?></td>
       </tr>       

        
       <tr>
         <td height="49">Kelurahan</td>
         <td>:</td>
         <td colspan="2"><?php echo $kel; ?></td>
       </tr>
       <tr>
         <td height="42">Kecamatan</td>
         <td>:</td>
         <td colspan="2"><?php echo $kec; ?></td>
       </tr>
       <tr>
         <td height="37">Kota/Kabupaten</td>
         <td>:</td>
         <td colspan="2"><?php echo $kota ; ?></td>
       </tr>
       <tr>
         <td height="41">Propinsi</td>
         <td>:</td>
         <td colspan="2"><?php echo $prop; ?></td>
       </tr>
       <tr>
         <td height="45">Web Site </td>
         <td>:</td>
         <td colspan="2"><?php echo $web; ?></td>
       </tr>
       <tr>
         <td height="47">Email</td>
         <td>:</td>
         <td colspan="2"><?php echo $email; ?></td>
       </tr>
     </table>
   <p> 
   <div class="page"> </div>      
  <?php 
   
  }
  ?>

</body>
    </html>