<?php 
session_start();
//error_reporting(0);
$idd=$idsiswa;
$kls=DB::table('kelassiswa')
                                                        ->select('*') 
                                                        ->where('idsiswa', '=',$idd)                 
                                                        ->where('tahunid', '=',$idtahun)      
                                                        ->first();
                                                        $idkelas =$kls->idkelas;   
  //dd($idkelas);
//$idtahun =$idtahun;   
?>
<head>
<title>Raport Siswa</title>
<!--
<thead>
      <tr>
          <table width=100% border=1 class='style3'>
          <tr>
            <th width=2% rowspan='2' class='style3'>No</th>
            <th width='230px' rowspan='2' class='style3'>Mata Pelajaran</th>
            <th colspan='4' class='style3' style='text-align:center'>Pengetahuan</th>
            <th colspan='4' class='style3' style='text-align:center'>Keterampilan</th>
          </tr>
          <tr>
            <th width='40px' class='style3'>KB</th>
            <th width='40px' class='style3'>Angka</th>
            <th width='50px' class='style3'>Predikat</th>
            <th class='style3'>Deskripsi</th>
            <th width='40px' class='style3'>KB</th>
            <th width='40px' class='style3'>Angka</th>
            <th width='50px' class='style3'>Predikat</th>
            <th class='style3'>Deskripsi</th>
          </tr>
      </tr>
   </thead>

   -->
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
  margin: 15px 0px;
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
  text-align: justify;
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
  text-align:left;
}

.style5 {
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


@media all
  {
  #page-one, .footer, .page-break { display:none; }
  }

@media print {
   thead {display: table-header-group;}

}
@media print {
  pre, blockquote {page-break-inside: avoid;}
}
@media all {
    .page-break { display: none; }
}

@media print {
    .page-break { display: block; page-break-before: always; }
}
</style>
  

</head>
 
<body onload="window.print()">
 
<?php
  
  $total=DB::table('tahun')
                                                        ->select('*') 
                                                        ->where('tahun.aktif', '=', 'Y')                 
                                                        ->first();
                                                        $idtahun =$total->id;   
  $tt=DB::table('vsiswadalamkelas')               
            ->select('*')
            ->where('idsiswa', '=', $idd)                                    
            ->where('tahunid', '=', $idtahun)                                    
            ->first(); 

//$s = mysql_fetch_array(mysql_query("SELECT  * from vsiswadalamkelas where idsiswa='$idd'"));
//$ss = mysql_fetch_array(mysql_query("SELECT  * from Sekolah"));
//$tt = mysql_fetch_array(mysql_query("SELECT * FROM vsiswadalamkelas where idsiswa='$idd'" ));
          $a = $tt->namasiswa;
          $n = $tt->noinduk;
          $ni = $tt->nis;
          $nk = $tt->namakelas;
          $nl = $tt->namalain;
          $nt = $tt->namatahun;
          $nw = $tt->namawali;
          $nip = $tt->nip;

    $ttt=DB::table('seko')               
            ->select('*')                                            
            ->first();       
		//$ttt = mysql_fetch_array(mysql_query("SELECT * FROM seko" ));
          $aa = $ttt->nama;
          $nn = $ttt->alamat;
        

echo "<table width=100%>
        <tr>
        <td width=140px class='style1'>Nama Sekolah</td><td class='style1'>  : $aa  </td>                   
        <td width=140px class='style1'>Kelas </td>      <td class='style1'>  : $nk</td></tr>
        <tr><td class='style1'>Alamat</td>              <td class='style1'>  : $nn    </td> 
        <td class='style1'>Semester </td>        <td class='style1'>  : $nt</td>
        </tr>
        <tr>
        <td class='style1'>Nama Peserta Didik</td>      <td class='style1'>  : <b>$a</b> </td>                    
        <td class='style1'>Tahun Pelajaran </td>        <td class='style1'>  : $nl</td>
        </tr>
        <tr>
        <td class='style1'>No Induk/NISN</td>           <td class='style1'>  : $n / $ni</td>                            
        <td class='style1'></td></tr>
      </table>
<span class='style1'><br>
</span>";

echo "<span class='style1'><b>CAPAIAN HASIL BELAJAR</b> <br>
      <b>A. Sikap</b> </span>";

 //$t = mysql_fetch_array(mysql_query("SELECT * FROM t_sikap_semester  where idsiswa='$idd'"));
$t=DB::table('t_sikap_semester')               
            ->select('*')  
            ->where('idsiswa', '=', $idd)                                             
            ->where('tahunid', '=', $idtahun)                                             
            ->first(); 

 if ($t!=null){
  $angkas   =$t->angkas;
  $angkassos=$t->angkassos;
  
  //$spiritual_deskripsi=$t->spiritual_deskripsi;
  //$sosial_deskripsi=$t->sosial_deskripsi;

 }else
  {
    $angkas=0;
    $angkassos=0;
   // $spiritual_deskripsi='';
   // $sosial_deskripsi='';
  }           

$ssss=DB::table('dessikap')               
            ->select('*')                            
            ->first(); 
//dd($ssss);
 if ($ssss!=null){
  $dessa =$ssss->dessa;
  $dessb=$ssss->dessb;

  $desosa   =$ssss->desosa;
  $desosb=$ssss->desosb;
   

 }else
  {
    $dessa   ='';
  $dessb='';

  $desosa   ='';
  $desosb='';
  }           
if ($angkas=='A'){
    $dess=$dessa;
}else{
    $dess=$dessb;
}

if ($angkassos=='A'){
    $desos=$desosa;
}else{
    $desos=$desosb;
}

echo"<table width=100% border=1 class='style2'>

  <tr>
      <td class='style2'>Predikat Sikap Spiritual : $angkas<br>
        Deskripsi: $dess<br><br>
      Predikat Sikap Sosial: $angkassos<br>
        Deskripsi: $desos<br><br>
      </td>
  </tr>
  
  </table>
      <span class='style1'><b>B. Pengetahuan dan Keterampilan</b> </span>
      <table width=100% border=1 class='style3'>
          <tr>
            <th width=2% rowspan='2' class='style3'>No</th>
            <th width='100px' rowspan='2' class='style3'>Mata Pelajaran</th>
            <th colspan='4' class='style3' style='text-align:center'>Pengetahuan</th>
            <th colspan='4' class='style3' style='text-align:center'>Keterampilan</th>
          </tr>
          <tr>
            <th width='40px' class='style3'>KKM</th>
            <th width='40px' class='style3'>Angka</th>
            <th width='50px' class='style3'>Predikat</th>
            <th class='style3'>Deskripsi</th>
            <th width='40px' class='style3'>KKM</th>
            <th width='40px' class='style3'>Angka</th>
            <th width='50px' class='style3'>Predikat</th>
            <th class='style3'>Deskripsi</th>
          </tr>";
       $kelompokk=DB::table('kelompok')               
            ->select('*')  
           
            ->orderby('kode')                                             
            ->get(); 
               
      //$kelompok = mysql_query("SELECT * FROM kelompok order by kode");  
      foreach ($kelompokk as $k){
      //while ($k = mysql_fetch_array($kelompok)){
      echo "<tr>
            <td class='style5' colspan='2'><b>$k->nama</b></td>
            <td class='style3' colspan='8'></td>
          </tr>";

        
        //$mapel = mysql_query("SELECT * FROM  vjadwalrapor where   kelid='$k[kelid]' ORDER BY kodemapel asc ");
           $mapell=DB::table('vjadwalrapor')               
            ->select('*')  
            ->where('kelid', '=', $k->kelid)
             ->where('kelasid', '=', $idkelas)
            ->groupby('vjadwalrapor.mapelid')
            ->orderby('kodemapel')                                             
            ->get(); 
        //dd($mapell);    
       // $mapell=DB::table('mapel')               
         //   ->select('*')  
          //  ->where('kelid', '=', $k->kelid)
          //  ->orderby('kodemapel')                                             
          //  ->get();             


        $no = 1;
        foreach ($mapell as $m){
        //while ($m = mysql_fetch_array($mapel)){
        //$nilaikb = mysql_fetch_array(mysql_query("SELECT * FROM nilaikb where id=$m[mapelid]" ));
        $nilaikbbbb=DB::table('nilaikb')               
            ->select('*')  
            ->where('mapelid', '=', $m->mapelid)   
            ->where('tahunid', '=', $idtahun)   
            ->first(); 

        //dd($nilaikbbbb);
         if ($nilaikbbbb!=null){
         $nilkb = $nilaikbbbb->nilaikb;
       }else{
          $nilkb=0;
       }
         //dd($nilkb);

        // $n=DB::table('vnilaisiswarapor')               
        //    ->select('*')  
        //    ->where('idsiswa', '=', $idd)                                             
        //    ->where('idmapel', '=', $m->mapelid) 
        //    ->first();
         $n=DB::table('nilaisiswa')               
            ->leftjoin('mapel', 'mapel.id', '=', 'nilaisiswa.idmapel')                                     
            ->select('mapel.kode as kodemapel','mapel.id as idmapel','mapel.nama as namapelajaran','nilaisiswa.angkap'
              ,'nilaisiswa.angkak','nilaisiswa.desp','nilaisiswa.desk')  
            ->where('nilaisiswa.idsiswa', '=', $idd)                                             
            ->where('nilaisiswa.idmapel', '=', $m->mapelid) 
            ->where('nilaisiswa.tahunid', '=', $idtahun) 
            ->first();     
            //dd($n);
        if ($n!=null){
        //$n = mysql_fetch_array(mysql_query("SELECT * FROM vnilaisiswarapor where idsiswa='$idd' and idmapel=$m[mapelid]"));
        echo "<tr>
                
                 
                 <td class='style3' align=center>$no</td>
                <td class='style5'> $n->namapelajaran</td>
                <td class='style4'>$nilkb</td>
                <td class='style4'>$n->angkap</td>";
        //        $nilaipredikat= (100-$m[kb])/3;
                //dd($nilkb);
                  if ($nilkb==80) {
                    if ($n->angkap>=94){
                      $predikat = 'A';
                    }elseif ($n->angkap>=87) {
                      $predikat = 'B';
                    }elseif ($n->angkap>=80) {
                      $predikat = 'C';
                    }else{
                      $predikat = 'D';
                    }
                  }  
                  //dd($predikat);

                  if ($nilkb==78) {
                    if ($n->angkap>=92){
                      $predikat = 'A';
                    }elseif ($n->angkap>=85) {
                      $predikat = 'B';
                    }elseif ($n->angkap>=78) {
                      $predikat = 'C';
                    }else{
                      $predikat = 'D';
                    }
                  }  

                  if ($nilkb==75) {
                    if ($n->angkap>=91){
                      $predikat = 'A';
                    }elseif ($n->angkap>=83) {
                      $predikat = 'B';
                    }elseif ($n->angkap>=75) {
                      $predikat = 'C';
                    }else{
                      $predikat = 'D';
                    }
                  }
                  if ($nilkb==0){
                  	 $predikat = '';                  	 
                  }

                  //dd($predikat);

                  if ($predikat=='A'){
                      $ambildesp=DB::table('mades')               
                        ->select('mades.*')
                        ->where('mapelid', '=', $m->mapelid)                                    
                        ->where('tahunid', '=', $idtahun)                                    
                        ->first(); 
                      if ($ambildesp!=null){
                        $desp=$ambildesp->desap;    
                      }else{
                        $desp='';   
                      }
                  }elseif ($predikat=='B'){

                      $ambildesp=DB::table('mades')               
                        ->select('mades.*')
                        ->where('mapelid', '=', $m->mapelid)                                    
                        ->where('tahunid', '=', $idtahun)                                    
                        ->first(); 
                         
                        if ($ambildesp!=null){
                            $desp=$ambildesp->desbp;
                          }else{
                            $desp='';   
                          }
                          // if ($m->mapelid==251){
                             
                          //    $ambildesp=DB::table('mades')               
                          //     ->select('mades.*')
                          //     ->where('mapelids', '=', $m->mapelid)                                    
                          //     ->where('tahunid', '=', $idtahun)                                    
                          //     ->first(); 
                          //    dd($ambildesp); 
                          // }
                   }elseif ($predikat=='C'){
                      $ambildesp=DB::table('mades')               
                        ->select('mades.*')
                        ->where('mapelid', '=', $m->mapelid)                                    
                        ->where('tahunid', '=', $idtahun)                                    
                        ->first(); 
                        if ($ambildesp!=null){
                            $desp=$ambildesp->descp; 
                          }else{
                            $desp='Nilai KKM Belum Di Input';   
                          }
                               

                  }else{
                      $desp='Nilai KKM Belum Di Input Atau KKM Belum Diinput';  
                  }

                     
                 // $interval = (100 - ($m->kb))/3;
                 // $min_a = ($m->kb+($interval+$interval));
                 // $min_b = ($m->kb+($interval-1));
                 // $min_c = ($m->kb);
                  
                 // if ($n->angkap >= $min_a)
                 // { $predikat = 'A';}
                 // elseif ($n->angkap >= $min_b)
                  //{ $predikat = 'B';}
                 // elseif ($n->angkap >= $min_c)
                 // { $predikat = 'C';}
                 // elseif ($n->angkap >= 0) 
                 // { $predikat = 'D';}
        
      
                
        echo"   <td class='style4' >$predikat</td>
                <td class='style3'>$desp</td>";
        
              $angkak=$n->angkak;
                if ($nilkb==80) {
                    if ($n->angkak>=94){
                      $predikat = 'A';
                    }elseif ($n->angkak>=87) {
                      $predikat = 'B';
                    }elseif ($n->angkak>=80) {
                      $predikat = 'C';
                    }else{
                      $predikat = 'D';
                    }
                  }  

                  if ($nilkb==78) {
                    if ($n->angkak>=92){
                      $predikat = 'A';
                    }elseif ($n->angkak>=85) {
                      $predikat = 'B';
                    }elseif ($n->angkak>=78) {
                      $predikat = 'C';
                    }else{
                      $predikat = 'D';
                    }
                  }  

                  if ($nilkb==75) {
                     if ($n->angkak>=91){
                      $predikat = 'A';
                    }elseif($n->angkak>=83) {
                      $predikat = 'B';
                    }elseif($n->angkak>=75) {
                      $predikat = 'C';
                    }else{
                     
                      $predikat = 'D';
                    }
                  }   


               if ($predikat=='A'){
                      $ambildesp=DB::table('mades')               
                        ->select('mades.*')
                        ->where('mapelid', '=', $m->mapelid)                                    
                        ->where('tahunid', '=', $idtahun)                                    
                        ->first(); 
                      
                      if ($ambildesp!=null){
                        $desk=$ambildesp->desak;   
                      }else{
                        $desk='';   
                      }


                  }elseif ($predikat=='B'){
                      $ambildesp=DB::table('mades')               
                        ->select('mades.*')
                        ->where('mapelid', '=', $m->mapelid)                                    
                        ->where('tahunid', '=', $idtahun)                                    
                        ->first(); 
                      if ($ambildesp!=null){
                        $desk=$ambildesp->desbk; 
                      }else{
                        $desk='';   
                      }

                           
                  }elseif ($predikat=='C'){
                      $ambildesp=DB::table('mades')               
                        ->select('mades.*')
                        ->where('mapelid', '=', $m->mapelid)                                    
                        ->where('tahunid', '=', $idtahun)                                    
                        ->first(); 
                       if ($ambildesp!=null){
                        $desk=$ambildesp->desck; 
                      }else{
                        $desk='';   
                      }                   
                  }else{
                    $desk='';   
                  }   

        /*        
        $intervalk = (100 - ($m->kb))/3;
        $min_ak = ($m->kb+($intervalk+$intervalk));
        $min_bk = ($m->kb+($intervalk-1));
        $min_ck = ($m->kb);
        
        if ($n->angkak >= $min_ak)
        { $predikatk = 'A';}
        elseif ($n->angkak >= $min_bk)
        { $predikatk = 'B';}
        elseif ($n->angkak >= $min_ck)
        { $predikatk = 'C';}
        elseif ($n->angkak >= 0) 
        { $predikatk = 'D';}
        */

         echo"       <td class='style4'>$nilkb</td>
                <td class='style4' >$angkak</td>";
                 //dd($n->angkak);
          
         echo"       <td class='style4' align=center>$predikat</td>
                <td class='style3'>$desk</td>
            </tr>";
        $no++;
      }
        }
      }

    echo "</table>";
 
    echo "</table>";

echo"
<br/>
<span class='style1'><b>D. Ekstrakurikuler</b> </span>
<table width=100% border=1 class='style3'>
  <tr>
      <th width=2% class='style3'>No</th>
      <th width=25% class='style3'>Nama Ekstrakurikuler</th>
      <th width=5% class='style3' align='right'>Nilai</th>
      <th width=68% class='style3'>Keterangan</th> 
  </tr>    
";

   $pklr=DB::table('t_nikaleks')               
            ->select('*')  
            ->where('idsiswa', '=', $idd)
            ->where('tahunid', '=', $idtahun)
            ->first();
      //$pkl = mysql_query("SELECT * FROM veks2 where   idsiswa='$idd'");
     $no=1;
     //echo "$tahun_akademik $_GET[semester] $s[noinduk]";
      //while ($pklr = mysql_fetch_array($pkl)){
if($pklr!=null){
    $nilai=$pklr->nilai;
    $nilai2=$pklr->nilai2;
    $nilai3=$pklr->nilai3;
    $nama=$pklr->nama_eks;
    $nama2=$pklr->nama_eks2;
    $nama3=$pklr->nama_eks3;
    $ket=$pklr->ket;
    $ket2=$pklr->ket2;
    $ket3=$pklr->ket3;

  }else
  {
    $nilai='';
    $nilai2='';
    $nilai3='';
    $nama='';
    $nama2='';
    $nama3='';
    $ket='';
    $ket2='';
    $ket3='';
  }

   echo "
  
  <tr>
      <td class='style3'>1</td>     
      <td class='style3'>$nama</td>
      <td class='style3' align='center'>$nilai</td>
      <td class='style3'>$ket</td>      
  </tr>
   <tr>
      <td class='style3'>2</td>     
      <td class='style3'>$nama2</td>
       <td class='style3' align='center'>$nilai2</td>
      <td class='style3'>$ket2</td>      
  </tr>
   <tr>
      <td class='style3'>3</td>     
      <td class='style3'>$nama3</td>
       <td class='style3' align='center'>$nilai3</td>
      <td class='style3'>$ket3</td>      
  </tr>
 </table>
  ";

 


echo "
<br/>
<span class='style1'><b>E. Prestasi</b> </span>
<table width=100% border=1 class='style3'>
  <tr>
      <th width=2% class='style3'>No</th>
      <th width=30% class='style3'>Nama Prestasi</th>
      <th width=68% class='style3'>Keterangan</th> 
  </tr>    
";

   $pklr=DB::table('t_nilaiprestasi')               
            ->select('*')  
            ->where('idsiswa', '=', $idd)
              ->where('tahunid', '=', $idtahun)
            ->first();
      //$pkl = mysql_query("SELECT * FROM veks2 where   idsiswa='$idd'");
     $no=1;
     //echo "$tahun_akademik $_GET[semester] $s[noinduk]";
      //while ($pklr = mysql_fetch_array($pkl)){
if($pklr!=null){
  $nama =$pklr->nama_pres;
  $ket  =$pklr->ket;
  $nama2=$pklr->nama_pres2;
  $ket2 =$pklr->ket2;
  $nama3=$pklr->nama_pres3;
  $ket3 =$pklr->ket3;
  }else{
    $nama='';
  $ket='';
  $nama2='';
  $ket2='';
  $nama3='';
  $ket3='';
  }
   echo"
 
  <tr>
      <td class='style3'>1</td>     
      <td class='style3'>$nama</td>
      <td class='style3'>$ket</td>      
  </tr>
   <tr>
      <td class='style3'>2</td>     
      <td class='style3'>$nama2</td>
      <td class='style3'>$ket2</td>      
  </tr>
   <tr>
      <td class='style3'>3</td>     
      <td class='style3'>$nama</td>
      <td class='style3'>$ket3</td>      
  </tr>
  </table>
  ";

  //}

   $total=DB::table('tahun')
        ->select('*') 
        ->where('tahun.aktif', '=', 'Y')                 
        ->first();
        $idtahun =$total->id;       
        
  $abs=DB::table('absensiswa')               
            ->select('*')  
            ->where('idsiswa', '=', $idd)
            ->where('tahunid', '=', $idtahun)
            ->first();


  if ($abs!=null){
    $sakit= $abs->sakit;
    $izin= $abs->izin;
    $tanpa= $abs->tanpa;
  }else{
    $sakit= '';
    $izin= '';
    $tanpa= '';
  }          


echo "
 

<span class='style1'><b>F. Kehadiran</b> </span>
<table width=40% border=1 class='style3'>
  <tr>
      <th align='left' width=3o% class='style3'>Sakit</th> 
      <td width=10%>: $sakit</td> 
  </tr>    
  <tr>
    <th align='left' width=30% class='style3'>Izin</th>
    <td>: $izin</td> 
  </tr>
  <tr>
    <th align='left' width=30% class='style3'>Tanpa Keterangan</th>
    <td>: $tanpa</td> 
  </tr>
  </table>

<span class='style1'><b>G. Catatan Wali Kelas</b> </span>

<table width=100% border=1 class='style2'>
  ";


   
   $sikap=DB::table('t_sikap_semester')               
            ->select('*')  
            ->where('idsiswa', '=', $idd)
            ->where('tahunid', '=', $idtahun)
            ->first();
   if ($sikap!=null){
    $cat=$sikap->cat;
   }else{
      $cat='';
   }         
//  $cat = mysql_query("SELECT * FROM t_catatanwalikelas where tahun_akademik='$tahun_akademik' AND semester='$_GET[semester]' AND noinduk='$s[noinduk]'");
    // while ($catr = mysql_fetch_array($cat)){
   
      echo "<tr></tr>
      <tr>
            <td class='style4' >$cat</td>               
          </tr>";
       // }
    echo "</table>";

?>  
<div class="page-break"></div>
<span class='style1'><b>H. Tanggapan Orang Tua/Wali</b> </span>

<table width=100% border=1 class='style2'>
  <tr>
      <td class='style2'><br> &nbsp <br> &nbsp <br> &nbsp <br> &nbsp <br> &nbsp <br> &nbsp <br> &nbsp <br>

      </td>
  </tr>
  
  </table>
<table class='style1' width=100%>
  <tr>
    <td class='style1' colspan="2"></td>
    <td class='style1' width="286"></td>
  </tr>
  <tr>
    <td class='style1' width="230" align="center">Orang Tua/Wali Peserta Didik</td>
    <td class='style1' width="530"></td>
    <td class='style1'align="center">Bagansiapiapi, 29 Juni 2019 <br> Wali Kelas</td>
  </tr>
  <tr>
    <td class='style1' align="center"><br /><br /><br /><br /><br />
      ...................................... <br /><br /></td>
    <td class='style1'>&nbsp;</td>
    <td class='style1' align="center" valign="top"><br /><br /><br /><br /><br />
      <?php echo $nw; ?><br />
      NIP : <?php echo $nip; ?>
    </td>
  </tr>
  <tr>
    <td class='style1' colspan="3" align='center'>
    Mengetahui<br><b>
    Kepala Sekolah
    <br><br><br><br><br><br><br>
    Dra. Hj. RAHMAWATI, M.Pd.I</b><br>
    NIP. 196606152005012002</td>
    
    
  </tr>
 
</table> 
</body>