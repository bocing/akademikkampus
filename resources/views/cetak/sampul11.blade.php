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

td {
    padding: 10px;
    border: 1px solid #4CAF50;
}
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
    </head>
	
	<?php  $data=DB::table('siswa')                                      
                  ->select('siswa.nama as namasiswa','siswa.nis as nissiswa')
                  ->where('id', '=', $idsiswa)
                  ->first(); 

                  $total=DB::table('tahun')
                                                        ->select('*') 
                                                        ->where('tahun.aktif', '=', 'Y')                 
                                                        ->first();
                                                        $namatahun =$total->nama;   
 ?>

	<body>
  <a class="toolbar" href="#" onclick="window.print();return false;">Print</a>
   
     
    <br/>	
      <p><h3  >RAPOR</h3>
      <p><h3  >Madrasah Aliyah Negeri 1 Rokan Hilir</h3>
      <p><h3  >(MAN)</h3>
	  
	 <p align="center">&nbsp;</p>
	 <p align="center">&nbsp;</p>
	 
	  
	 <p align="center"><img src="{{ URL::asset('img/tut.jpg')}}" width="142" height="132"></p>
	  
	 <p>&nbsp;</p>
	 <p>&nbsp;</p>
 
	 <p align="center">&nbsp;</p>
	 <p align="center"><strong>Nama Siswa</strong></p>	 
    <div align="center">  
	 <table width="30%"  border="2">
       <tr>
         <td align="left"><div align="center"><?php echo $data->namasiswa; ?></div></td>
       </tr>
     </table>
	 <p>&nbsp;</p>
	 </div>
	 <p align="center"><strong>NISN</strong></p>	 
	 <div align="center">  
	 <table width="30%"  border="1">
       <tr>
         <td align="left"><div align="center"><?php echo $data->nissiswa; ?></div></td>
       </tr>
     </table>
	 </div>
	 <p align="center">&nbsp;</p>
	 <p align="center"><strong>Tahun Pelajaran</strong></p>
    <div align="center">  
	 <table width="30%"  border="1">
       <tr>
         <td align="left"><div align="center"><?php echo $namatahun; ?></div></td>
       </tr>
     </table>
	 <p>&nbsp;</p>
	 <p>&nbsp;</p>
	 
    </div>
	  <p><h3  >KEMENTERIAN AGAMA RI</h3>
      <p><h3  >DIREKTORAT JENDERAL KELEMBAGAAN AGAMA ISLAM</h3>
      <p><h3  >DIREKTORAT MADRASAH DAN PENDIDIKAN AGAMA ISLAM</h3>
    <div class="page">	</div>		  
 

    </body>
    </html>