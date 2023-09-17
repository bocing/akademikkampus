    <html>
    <head>
    <style>
    p {
       line-height: 8px;
    }
    th {
    padding: 70px;
    border: 1px solid #4CAF50;
}
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
    

     
          $row=DB::table('siswa')   
                  ->leftjoin('agama', 'agama.id', '=', 'siswa.agamaid')                                                            
                  ->leftjoin('kelamin', 'kelamin.id', '=', 'siswa.jeka')                                                            
                  ->leftjoin('kerja', 'kerja.kerjaid', '=', 'siswa.kerjaayah')                                                            
                  ->select('siswa.*','agama.nama as namaagama','kelamin.nama as namakelamin','kerja.nama as namakerjaayah ')
                  ->where('siswa.id', '=', $idsiswa)
                  ->first();  
                  $namaagama =$row->namaagama;

    ?>
   <br/>  
      <p><h3  >RAPOR</h3>
      <p><h3  >MADRASAH ALIYAH NEGERI BAGANSIAPIAPI</h3>
      <p><h3  >(MAN)</h3>
   <table width="89%"  border="0">
       <tr>
         <td width="600" height="36">1. Nama Siswa (Lengkap) </td>
         <td width="1%">:</td>
         <td width="59%"><?php echo $row->nama; ?></td>
       </tr>
       <tr>
         <td height="30">2. Nomor Induk /NISN </td>
         <td>:</td>
         <td><?php  echo $row->nis; ?></td>
       </tr>
       <tr>
         <td height="30">3. Tempat Tanggal Lahir</td>
         <td>:</td>
         <td><?php  echo $row->tltgll;?></td>
       </tr>
       <tr>
         <td height="30">4. Jenis Kelamin</td>
         <td>:</td>
         <td><?php echo $row->namakelamin;  ?></td>
       </tr>
       <tr>
         <td height="30">5. Agama</td>
         <td>:</td>
         <td><?php  echo $namaagama; ?></td>
       </tr>


       <tr>
         <td height="30">6. Status Dalam Keluarga</td>
         <td>:</td>
         <td><?php  echo $row->sta; ?></td>
       </tr>
       <tr>
         <td height="30">7. Anak Ke </td>
         <td>:</td>
         <td><?php  echo $row->akeid; ?></td>
       </tr>
       <tr>
         <td height="30">8. Alamat Siswa </td>
         <td>:</td>
         <td colspan="2"><?php  echo $row->alamat; ?></td>
       </tr>
       
       <tr>
         <td height="30">9. No Telp Rumah</td>
         <td>:</td>
         <td><?php  echo $row->nohp; ?></td>
       </tr>
       <tr>
         <td height="30">10. Sekolah Asal </td>
         <td>:</td>
         <td><?php echo $row->sekasal ; ?></td>
       </tr>
       <tr>
         <td height="30">11. Diterima Disekolah Ini  </td>
       </tr>        
       <tr>
         <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dikelas</td>
         <td>:</td>
         <td><?php echo $row->kelasterima; ?></td>
       </tr>
       <tr>
         <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal </td>
         <td>:</td>
         <td><?php echo $row->tglterim; ?></td>
       </tr>
       <tr>
         <td height="30">12. Nama Orang Tua </td>
         <td>:</td>
         
     <tr>
         <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A. Ayah </td>
         <td>:</td>
         <td><?php echo $row->namaayah; ?></td>
     <tr>
         <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B. Ibu </td>
         <td>:</td>
         <td><?php echo $row->namaibu; ?></td>
     </tr>
       <tr>
         <td height="30">13. Alamat Orang Tua</td>
         <td>:</td>
         <td><?php echo $row->alamatayah; ?></td>
       </tr>
        <tr>
         <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Telp Orang Tua</td>
         <td>:</td>
         <td><?php echo $row->nohpayah; ?></td>
       </tr>
       <tr>
         <td height="30">14. Pekerjaan Orang Tua</td>
         <td>:</td>
         
       </tr>
     <tr>
         <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A. Ayah </td>
         <td>:</td>
         <td><?php echo $row->kerjaayah; ?></td>
     </tr>
     
     <tr>
         <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B. Ibu </td>
         <td>:</td>
         <td><?php echo $row->kerjaibu;   ?></td>
     </tr>
     <tr>
         <td height="30">15. Nama Wali Siswa </td>
         <td>:</td>
         <td><?php echo $row->namawali; ?></td>
     </tr>
     <tr>
         <td height="30">16.&nbsp;Alamat Wali Siswa </td>
         <td>:</td>
         <td><?php echo $row->alamatwali; ?></td>
     </tr>
     <tr>
         <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Telp Rumah Wali</td>
         <td>:</td>
         <td><?php echo $row->nohpwali; ?></td>
     </tr>
     <tr>
         <td height="30">17.&nbsp;Pekerjaan Wali Siswa </td>
         <td>:</td>
         <td><?php echo $row->kerjawali;  ?></td>
     </tr>


     
     
  </table>
  <table border="0" cellpadding="0" cellspacing="0" width="1000" style="border-collapse: collapse; table-layout: fixed; width: 1000;">
    
    </table>
    
  
  
   <p>  
<table border="0" cellpadding="0" cellspacing="0" width="1000" style="border-collapse: collapse; table-layout: fixed; width: 1000;">
     <tr>
       <td width="73%"><table width="25%" height="151"  border="0">
         <tr>
           <td width="30%" height="147">&nbsp;</td>
           <th width="70%" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center">
             <p>Pas Photo</p>
             <p>3 X 4 </p>
           </div></td>
         </tr>
       </table>         <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p></td>
         <td width="27%" align="left" valign="top"><div align="left">
         <p>Bagansiapiapi, 15 Desember  2018 </p>
         <p>Kepala Madrasah, </p>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <p><u>Dra. Hj. RAHMAWATI, M.Pd.I</u></p>
         <p>NIP.196606152005012002</p>
         <p>&nbsp;</p>
       </div></td>



     </tr>
   </table>
   <blockquote>
     <blockquote>
       <p>&nbsp;      </p>
     </blockquote>
   </blockquote>
   <div class="page"> </div>      
   

    </body>
    </html>