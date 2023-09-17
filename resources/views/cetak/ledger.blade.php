<?php 
session_start();
//error_reporting(0);
$idkelas=$_GET[idkelas];

include "koneksi.php"; 
include "fungsi_indotgl.php"; 
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=nilai.xls");
 
?>
<head>
<title>Raport Siswa</title>

<style type="text/css">
<!--
.style1 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: x-small;

}
.style2 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: x-small;
  border-width: 1px;
  border-style: solid;
  border-color: #000;
  border-collapse: collapse;
  margin: 10px 0px;
  padding:10px 6px 20px 15px;
  border: 1px solid #000; 
}

.style3 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: x-small;
  border-width: 1px;
  border-style: solid;
  border-color: #000;
  border-collapse: collapse;
  margin: 10px 0px;
  padding:4px 2px 2px 3px;
  border: 1px solid #000; 
}
.style4 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: x-small;
  border-width: 1px;
  border-style: solid;
  border-color: #000;
  border-collapse: collapse;
  margin: 20px 2px;
  padding:30px 6px 60px 30px;
  border: 1px solid #000; 
}
-->
</style>

</head>
 
<body onload="window.print()">
 
<?php
//$s = mysql_fetch_array(mysql_query("SELECT  * from vsiswadalamkelas where idsiswa='$idd'"));
//$ss = mysql_fetch_array(mysql_query("SELECT  * from Sekolah"));
 

	$ttt = mysql_fetch_array(mysql_query("SELECT * FROM vkelas2 where id='$idkelas'" ));
          $nk = $ttt[nama];
          $nw = $ttt[namawali];
          $nip = $ttt[nip];
  $ttt = mysql_fetch_array(mysql_query("SELECT * FROM tahun where aktif='Y'" ));
          $nt = $ttt[nama];
           
        
 echo "<h2 align='center'>SMKN 2 Padang Panjang</h2>"; 
 echo "<h2 align='center'>LEDGER NILAI</h2>"; 

 
echo "<table width=100%>
        <tr><td width=140px class='style1'>Tahun </td>      <td class='style1'>  : $nt</td></tr>
        <tr><td width=140px class='style1'>Kelas</td><td class='style1'>  : $nk  </td></tr>
        <tr><td width=140px class='style1'>Wali Kelas</td><td class='style1'>  : $nw  </td></tr>
       
      </table>
 
</span>"; 
 $kelompok = mysql_query("SELECT distinct(m.nama) 
                                    FROM jadwal j 
                                    left outer join mapel m on (j.mapelid = m.id) where j.kelasid='$idkelas' group by m.id order by j.mapelid ");  
                                    while ($k = mysql_fetch_array($kelompok))
          {
            $no++;
                       
          } 
          
if ($no==3)
    $xxx="<td colspan='6' class='style3' style='text-align:center'>Mata Pelajaran</td>";            
if ($no==4)
    $xxx="<td colspan='8' class='style3' style='text-align:center'>Mata Pelajaran</td>";            
if ($no==5)
    $xxx="<td colspan='10' class='style3' style='text-align:center'>Mata Pelajaran</td>";            
if ($no==6)
    $xxx="<td colspan='12' class='style3' style='text-align:center'>Mata Pelajaran</td>";            
if ($no==7)
    $xxx="<td colspan='14'class='style3' style='text-align:center'>Mata Pelajaran</td>";       
if ($no==8)
    $xxx="<td colspan='16'class='style3' style='text-align:center'>Mata Pelajaran</td>";       
if ($no==10)
    $xxx="<td colspan='20'class='style3' style='text-align:center'>Mata Pelajaran</td>";       
 if ($no==12)
    $xxx="<td colspan='24'class='style3' style='text-align:center'>Mata Pelajaran</td>";        


 
echo " 
  <table width=100% border=1 class='style3'>
          <tr>
            <td width=2% rowspan='3' class='style3'>No</td>
            <td width='10%' rowspan='3' class='style3'>Nis</td>            
            <td width='25%' rowspan='3' class='style3'>Nama</td>            
            $xxx
          </tr>
          <tr>";
          $no=0;
          $buah[] = ""; 
          $i=0;
          $kelompok = mysql_query("SELECT distinct(m.nama), j.mapelid 
                                    FROM jadwal j 
                                    left outer join mapel m on (j.mapelid = m.id) 
                                    left outer join tahun t on (j.tahunid = t.id) 
                                    where j.kelasid='$idkelas' and t.aktif='Y' group by m.id order by j.mapelid ");  
                                    while ($k = mysql_fetch_array($kelompok))
          {
            $no++;
            $i++;
            $buah[$i] = $k[mapelid] ;
            
            echo "            
              <td colspan='2'>$k[nama]</td>";                 
          } 
          
        

 if ($no==2){        
                echo "</tr>
                <tr>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    
               
                  </tr>"; 
             }      
    if ($no==3){        
                echo "</tr>
                <tr>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
               
                  </tr>"; 
             }      

    if ($no==4){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
               
                  </tr>"; 
             }                     

    if ($no==5){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>                  
                  </tr>"; 
             }              
   if ($no==6){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
              
                  </tr>"; 
             }        
  if ($no==7){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                  </tr>"; 
             }

  if ($no==8){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                  </tr>"; 
             }

    if ($no==9){        
                echo "</tr>
                <tr>  <tr>
                     <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>     
                  </tr>"; 
             }         

    if ($no==10){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 

                  </tr>"; 
             }                  

    if ($no==11){        
                echo "</tr>
                <tr>  <tr>
                   <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                  </tr>"; 
             } 

  if ($no==19){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'></td>
                    <td align='center'></td>
                    <td align='center'></td>                    
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    
                     
                  </tr>"; 
             }            

 if ($no==20){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'></td>
                    <td align='center'></td>
                    <td align='center'></td>
                    
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                     <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                     
                  </tr>"; 
             } 

             if ($no==21){        
                echo "</tr>
                <tr>  <tr>
                    <td align='center'></td>
                    <td align='center'></td>
                    <td align='center'></td>                   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td>   
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                    <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                     <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                     <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                     <td align='center'>NP</td>
                    <td align='center'>NK</td> 
                  </tr>"; 
             } 

             $x=0;
  $kelompok = mysql_query("
  SELECT 
        k.idkelas, 
        k.idsiswa, 
        s.nama ,
        s.nis
  FROM kelassiswa k 
        left outer join siswa s on (s.id = k.idsiswa) 
        left outer join tahun t on (t.id = k.tahunid) 
        where k.idkelas='$idkelas' and t.aktif='Y' order by s.nis ");  
  while ($k = mysql_fetch_array($kelompok))
  {
    $x++;
      echo "</tr>
                <tr><tr>
        <td width='2%'   class='style3'> $x</td>
        <td width='10%'  class='style3'> $k[nis]</td>            
        <td width='25%'   class='style3'> $k[nama]</td>";  
        

        for ($a=1; $a  < $i+1 ; $a++) 
         { 
        # code...
             // echo "idmapel :'$buah[$a]'";

             $ttt = mysql_fetch_array(mysql_query("
                SELECT 
                    n.angkap,
                    n.angkak,
                    t.id 
                FROM nilaisiswa  n
                left outer join tahun t on (t.id=n.tahunid)
                where idkelas='$idkelas' and idsiswa ='$k[idsiswa]'  and idmapel='$buah[$a]' and t.aktif='Y'" ));
                $np = $ttt[angkap];
                $nk = $ttt[angkak];           
                       echo "<td class='style3'>$np</td>";
                       echo "<td class='style3'>$nk</td>";
         }
         echo "</tr>"; 

    }
  
?>   

<table width="100%"  border="0">
  <tr>
    <td width="40%">&nbsp;</td>
    <td width="20%">&nbsp;</td>     
    <p> <td width="40%" align='left'>Padang Panjang,<?php echo tgl_raport(date("Y-m-d")); ?> <br><b></p>
    <p><br><br><br><br><br> 
    <p> <?php echo $nw; ?></b><br></p>
    <p>NIP: <?php echo $nip; ?></td><td width="0%"></p><td width="0%"></td>
  </tr>
</table>
 
 
 
</body>