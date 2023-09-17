<?php 
 
 
$idkelas =$idkelas ;
 
?>

<head>
<title>Raport Siswa</title>

<style type="text/css">
.tagak{
  position: absolute;
  top: 60px
  -moz-transform:rotate(-90deg);
  -webkit-transform:rotate(-90deg);
  -o-transform:rotate(-90deg);
  -ms-transform:rotate(-90deg);
  transform:rotate(-90deg);

}

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

table, tr, td, th {
  border: 0.2px solid #000;
  position: relative;
  padding: 12px;

}

th span {
  transform-origin: 0 50%;
  transform: rotate(-90deg); 
  white-space: nowrap; 
  display: block;
  position: absolute;
  bottom: 0;
  
  left: 30%;
}


th spanx {
  transform-origin: 0 50%;
  transform: rotate(-90deg); 
  white-space: nowrap; 
  display: block;
  position: absolute;
  bottom: 0;
  font-size: 12px;
  left: 30%;
}


</style>

</head>
 
<body onload="window.print()">
  
<?php
//$s = mysql_fetch_array(mysql_query("SELECT  * from vsiswadalamkelas where idsiswa='$idd'"));
//$ss = mysql_fetch_array(mysql_query("SELECT  * from Sekolah"));
 $total=DB::table('tahun')
        ->select('*') 
        ->where('tahun.aktif', '=', 'Y')                 
        ->first();
        $idtahun =$total->id;       
        $nt =$total->nama;

  $kelas=DB::table('kelas')
        ->leftjoin('guru', 'guru.id', '=', 'kelas.waliid')
        ->select('kelas.*','guru.nama as nw','guru.nip') 
        ->where('kelas.id', '=', $idkelas)                 
        ->where('kelas.idtahun', '=', $idtahun)                 
        ->first();

        //dd($kelas);

        $nk =$kelas->nama;        
        $nw =$kelas->nw;        
        $nip =$kelas->nip;        

   
   
 echo "<h2 align='center'>MAN 1 ROKAN HILIR</h2>"; 
 echo "<h2 align='center'>LEDGER NILAI</h2>"; 

 
echo "<table width=100% class='style2'>
        <tr><td width=140px class='style1'>Tahun </td>      <td class='style1'>  : $nt</td></tr>
        <tr><td width=140px class='style1'>Kelas</td><td class='style1'>  : $nk  </td></tr>
        <tr><td width=140px class='style1'>Wali Kelas</td><td class='style1'>  : $nw  </td></tr>
       
      </table>
 
</span>"; 
 $baris=DB::table('jadwal')
            ->distinct()
            ->where('jadwal.kelasid','=',$idkelas)
            ->where('jadwal.tahunid','=',$idtahun)
            ->count('mapelid');


 
  //dd($baris);         
 
    

   $siswa=DB::table('kelassiswa')         
             ->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
             ->select('siswa.nama as namasiswa','siswa.nis','siswa.id')
            ->where('kelassiswa.idkelas','=',$idkelas)            
            ->where('kelassiswa.tahunid','=',$idtahun)    
            ->get();           
           // ->groupby('jadwal.mapelid');
 
    
?>   

<table width="100%" class="style2">
  <tr>
    <th rowspan="8"><span>No. Urut </span></th>
    <th rowspan="8"><span>Nisn</span></th>
    <th rowspan="8"><span>Nama Siswa </span></th>
    <th rowspan="8"><span>Aspek Nilai </span></th>
    <td colspan="26"><div align="center"><strong>Mata Pelajaran </strong></div></td>
    <th rowspan="8"><span>Jumlah Nilai</span></th>
    <th rowspan="8" valign="middle"><span>Rata2</span></th>
    <th rowspan="8"><span>Rata2 (P+K)</span></th>
    <th rowspan="8"><span>Peringat Kelas </span></th>
    <td colspan="8" rowspan="2">Ekskul</span></td>
  </tr>
  <tr>
    <td colspan="11"><div align="center">Wajib A </div></td>
    <td colspan="6"><div align="center">Wajib B &amp; Mulok </div></td>
    <td colspan="5"><div align="center">Peminatan</div></td>
    <td colspan="4"><div align="center">Lin. Minat </div></td>
  </tr>
   <?php    
        $awal1=0 ;
        $awal2=0 ;
        $awal3=0 ;
        $awal4=0 ;

        $akhir1=0 ;
        $akhir2=0 ;
        $akhir3=0 ;
        $akhir4=0 ;
        $jmlnilai=0;
        $jmlnilaik=0;
        $i=0 ;
        $ii=0 ;
        $iii=0 ;
        $iiii=0 ;

        $mapel=DB::table('jadwal')         
            ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
            ->select('mapel.nama as namamapel','jadwal.mapelid')
            ->where('jadwal.kelasid','=',$idkelas)
            ->where('jadwal.tahunid','=',$idtahun)
            ->where('mapel.kelid','=','8')
            ->groupby('jadwal.mapelid')
            ->get();
           // dd($mapel);  
   ?>

   @foreach($mapel as $abc)  
        <?php    

        $i=$i+1;
        $awal1=$awal1+1;
        $akhir1=$akhir1+1;

        $idmapel[$i] =$abc->mapelid;
        $napel[$i]=$abc->namamapel;

        ?>
   @endforeach()    
  <tr>
  	  <?php   
        $a=1;
        for ($a=1; $a <= $akhir1; $a++) {        
  	   ?>	
    	<th rowspan="6"><span>{{$napel[$a]}}</span></th>
     <?php
 		}
 	 ?>		

    <th rowspan="6"><span>&nbsp;</span></th>
    <?php    
         
        $mapel=DB::table('jadwal')         
            ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
            ->select('mapel.nama as namamapel','jadwal.mapelid')
            ->where('jadwal.kelasid','=',$idkelas)
            ->where('jadwal.tahunid','=',$idtahun)
            ->where('mapel.kelid','=','9')
            ->groupby('jadwal.mapelid')
            ->get();
           // dd($mapel);  
   $akhir1=$i;
   $awal2=$i+1;
   $akhir2=$i;
   ?>
   @foreach($mapel as $abc)  
        <?php   
        $i=$i+1;    
        $akhir2=$akhir2+1;

        $idmapel[$i] =$abc->mapelid;
        $napel[$i]=$abc->namamapel;

        ?>
   @endforeach()    
   
  	  <?php         
     // dd($awal2);
        for ($a=$awal2; $a <= $akhir2; $a++) {        
  	   ?>	
    	<th rowspan="6"><span>{{$napel[$a]}}</span></th>
     <?php
 		}
 	 ?>		
    <th rowspan="6"><span>&nbsp;</span></th>
    <th rowspan="6"><span>&nbsp;</span></th>
    <th rowspan="6"><span>&nbsp;</span></th>
     <?php    
        
        $mapel=DB::table('jadwal')         
            ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
            ->select('mapel.nama as namamapel','jadwal.mapelid')
            ->where('jadwal.kelasid','=',$idkelas)
            ->where('jadwal.tahunid','=',$idtahun)
            ->where('mapel.kelid','=','10')
            ->groupby('jadwal.mapelid')
            ->get();
           // dd($mapel);  
  
    $awal3=$i+1;
    $akhir3=$i;
   ?>
   @foreach($mapel as $abc)  
        <?php    

        

        $i=$i+1;         
        $akhir3=$akhir3+1;

        $idmapel[$i] =$abc->mapelid;
        $napel[$i]=$abc->namamapel;

        ?>
   @endforeach()    
   
  	  <?php   
       
        for ($a=$awal3; $a <= $akhir3; $a++) {        
  	   ?>	
    	<th rowspan="6"><span>{{$napel[$a]}}</span></th>
     <?php
 		}
 	 ?>	
 	 <th rowspan="6"><span> </span></th>


 	 <?php    
        
        $mapel=DB::table('jadwal')         
            ->leftjoin('mapel', 'mapel.id', '=', 'jadwal.mapelid')  
            ->select('mapel.nama as namamapel','jadwal.mapelid')
            ->where('jadwal.kelasid','=',$idkelas)
            ->where('jadwal.tahunid','=',$idtahun)
            ->where('mapel.kelid','=','11')
            ->groupby('jadwal.mapelid')
            ->get();
           // dd($mapel);  
   
    $awal4=$i+1;
    $akhir4=$i;
    ?>
   @foreach($mapel as $abc)  
        <?php    
        
        $i=$i+1;
         $akhir4=$akhir4+1;

        $idmapel[$i] =$abc->mapelid;
        $napel[$i]=$abc->namamapel;

        ?>
   @endforeach()    
   
  	  <?php   
        
        for ($a=$awal4; $a <= $akhir4; $a++) {        
  	   ?>	
    	<th rowspan="6"><span>{{$napel[$a]}}</span></th>
     <?php
 		}
 	 ?>	
 	 <th rowspan="6"><span> </span></th>
 	 <th rowspan="6"><span> </span></th>
 	  <th rowspan="6"><span> </span></th>
 	 <th rowspan="6"><span> </span></th>
 	  <th rowspan="6"><span> </span></th>
 	 <th rowspan="6"><span> </span></th>
   </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td colspan="39">&nbsp;</td>
  </tr>
     <?php    
        $s=0 ;
   ?>
@foreach($siswa as $sis)  
        <?php    

          $s=$s+1;
         // $kodemapel[$i] =$abc->mapelid;
          //$napel[$i]=$abc->namamapel;

          ?>
       
    <tr>
      <td rowspan="4">{{$s}}</td>
      <th rowspan="4"><span>{{$sis->nis}}</span></th>
      <th rowspan="4"><spanx>{{$sis->namasiswa}}</span></th>
      <td rowspan="2">Peng</td>
      
      <?php
      $x=1;
      //dd($akhir1);
                    $nnangkap=0;

          while ($x <= $akhir1) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)               
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      
                if($nil!=null){
                    $nnangkap=$nil->angkap;
                }else{
                    $nnangkap=0;
                }
              ?>
              
              <td>{{$nnangkap}}</td>
              <?php
                  $x=$x+1;
                  $jmlnilai=$jmlnilai+$nnangkap;
                 }
                 ?>


              <td>&nbsp;</td>



        <?php
          //dd($akhir2);
          while ($x <= $akhir2) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)               
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      
                if($nil!=null){
                    $nnangkap=$nil->angkap;
                }else{
                    $nnangkap=0;
                }
              ?>
              
              <td>{{$nnangkap}}</td>
              <?php
                  $x=$x+1;
                      $jmlnilai=$jmlnilai+$nnangkap;
                 }
                 ?>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            <?php
          //dd($akhir2);
          while ($x <= $akhir3) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
              ->where('idsiswa','=',$sis->id)
              ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      
                    if($nil!=null){
                    $ab=$nil->angkap;
                }else{
                    $ab=0;
                }
              ?>
              
              <td>{{$ab}}</td>
              <?php
                  $x=$x+1;
                      $jmlnilai=$jmlnilai+$ab;
                 }
                 ?>
                <td>&nbsp;</td>
               <?php
          //dd($akhir2);

               $nangkap=0;
          while ($x <= $akhir4) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
              ->where('idsiswa','=',$sis->id)
              ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      
                //dd($nil);
              if ($nil!=null){
                $nangkap =$nil->angkap;

              }else{
                $nangkap =0;
                }
              ?>
              
              <td>
                  {{$nangkap}}
              </td>
              <?php
                  $x=$x+1;
                      $jmlnilai=$jmlnilai+ $nangkap;
                 }
                 ?>
              <td>&nbsp;</td>
                <td>&nbsp;</td>
                 <th rowspan="4"><span>{{$jmlnilai}}</span></th>
                 <th rowspan="4"><span>{{$jmlnilai/$i}}</span></th>
                 <th rowspan="4"><span>Rata2 (p+k)</span></th>
                 <th rowspan="4"><span>Peringkat</span></th>
                 <th rowspan="4"><span>Ekskul</span></th>
                 <th rowspan="4"><span></span></th>
                 <th rowspan="4"><span></span></th>
                 <th rowspan="4"><span></span></th>
                 <th rowspan="4"><span></span></th>

            </tr>
  <!--
  Huruuuuff
  -->

           <?php
      $x=1;
      //dd($akhir1);
      while ($x <= $akhir1) {        
     
            $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
              ->where('nilaisiswa.tahunid','=',$idtahun)          
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      

            $nilaikbbbb=DB::table('nilaikb')               
              ->select('*')  
              ->where('mapelid', '=', $idmapel[$x])   
              ->where('tahunid', '=', $idtahun)   
              ->first(); 
          //dd($nilaikbbbb);
                 if ($nilaikbbbb!=null){
                 $nilkb = $nilaikbbbb->nilaikb;
               }else{
                  $nilkb=0;
               }

               if ($nilkb==80) {
                      if($nil!=null){
                 
                      if ($nil->angkap>=94){
                        $predikat = 'A';
                      }elseif ($nil->angkap>=87) {
                        $predikat = 'B';
                      }elseif ($nil->angkap>=80) {
                        $predikat = 'C';
                      }else{
                        $predikat = 'D';
                      }
                    }  
                  }else{
                          $predikat = 'D';
                  }

                    if ($nilkb==78) {
                     // if ($n!=null) {
                          if ($nil->angkap>=92){
                            $predikat = 'A';
                          }elseif ($nil->angkap>=85) {
                            $predikat = 'B';
                          }elseif ($nil->angkap>=78) {
                            $predikat = 'C';
                          }else{
                            $predikat = 'D';
                          }
                        }  
                      // }else{
                      //       $predikat = 'D';
                      // }  
                    //if ($n!=null){
                        if ($nilkb==75) {                      
                          if ($nil->angkap>=91){
                            $predikat = 'A';
                          }elseif ($nil->angkap>=83) {
                            $predikat = 'B';
                          }elseif ($nil->angkap>=75) {
                            $predikat = 'C';
                          }else{
                            $predikat = 'D';
                          }
                        }  
                     // }else{
                     //  $predikat='';
                     // }   
                    //dd($predikat);
                    if ($predikat=='A'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
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
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->desbp;
                            }else{
                              $desp='';   
                            }
                             
                    }elseif ($predikat=='C'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->descp; 
                            }else{
                              $desp='';   
                            }
                                              
                    }else{
                      $desp='';
                    }
              ?>
              
              <td>{{$predikat}}</td>
              <?php
                  $x=$x+1;
                 }
                 ?>


              <td>&nbsp;</td>



        <?php
          //dd($akhir2);
          while ($x <= $akhir2) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])  
              ->where('nilaisiswa.tahunid','=',$idtahun)          
              ->first();      

              $nilaikbbbb=DB::table('nilaikb')               
              ->select('*')  
              ->where('mapelid', '=', $idmapel[$x])   
              ->where('tahunid', '=', $idtahun)   
              ->first(); 
          //dd($nilaikbbbb);
                 if ($nilaikbbbb!=null){
                 $nilkb = $nilaikbbbb->nilaikb;
               }else{
                  $nilkb=0;
               }

               if ($nilkb==80) {
                      if ($nil->angkap>=94){
                        $predikat = 'A';
                      }elseif ($nil->angkap>=87) {
                        $predikat = 'B';
                      }elseif ($nil->angkap>=80) {
                        $predikat = 'C';
                      }else{
                        $predikat = 'D';
                      }
                    }  

                    if ($nilkb==78) {
                       //if ($n!=null) {
                              if ($nil->angkap>=92){
                                $predikat = 'A';
                              }elseif ($nil->angkap>=85) {
                                $predikat = 'B';
                              }elseif ($nil->angkap>=78) {
                                $predikat = 'C';
                              }else{
                                $predikat = 'D';
                              }
                            } 
                          // }else{
                          //       $predikat = 'D';
                          // }   

                    if ($nilkb==75) {
                        //if ($n!=null) {
                            if ($nil->angkap>=91){
                              $predikat = 'A';
                            }elseif ($nil->angkap>=83) {
                              $predikat = 'B';
                            }elseif ($nil->angkap>=75) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                         // }else{
                         //    $predikat = 'D';  
                         // } 
                    //dd($predikat);
                    if ($predikat=='A'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
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
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->desbp;
                            }else{
                              $desp='';   
                            }
                             
                    }elseif ($predikat=='C'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->descp; 
                            }else{
                              $desp='';   
                            }
                                              
                    }else{
                      $desp='';
                    }
              ?>
              
              <td>{{$predikat}}</td>
              <?php
                  $x=$x+1;
                 }
                 ?>

             
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            <?php
          //dd($akhir2);
          while ($x <= $akhir3) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
              ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      

              $nilaikbbbb=DB::table('nilaikb')               
              ->select('*')  
              ->where('mapelid', '=', $idmapel[$x])   
              ->where('tahunid', '=', $idtahun)   
              ->first(); 
          //dd($nilaikbbbb);
                 if ($nilaikbbbb!=null){
                 $nilkb = $nilaikbbbb->nilaikb;
               }else{
                  $nilkb=0;
               }

               if ($nilkb==80) {
                      if ($nil->angkap>=94){
                        $predikat = 'A';
                      }elseif ($nil->angkap>=87) {
                        $predikat = 'B';
                      }elseif ($nil->angkap>=80) {
                        $predikat = 'C';
                      }else{
                        $predikat = 'D';
                      }
                    }  

                    if ($nilkb==78) {
                       //if ($n!=null) {
                            if ($nil->angkap>=92){
                              $predikat = 'A';
                            }elseif ($nil->angkap>=85) {
                              $predikat = 'B';
                            }elseif ($nil->angkap>=78) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                       // }else{
                       //        $predikat = 'D';
                       // }   

                    if ($nilkb==75) {
                       //if ($n!=null) {
                            if ($nil->angkap>=91){
                              $predikat = 'A';
                            }elseif ($nil->angkap>=83) {
                              $predikat = 'B';
                            }elseif ($nil->angkap>=75) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                        // }else{
                        //      $predikat = 'D';
                        // }  
                    //dd($predikat);
                    if ($predikat=='A'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
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
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->desbp;
                            }else{
                              $desp='';   
                            }
                             
                    }elseif ($predikat=='C'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->descp; 
                            }else{
                              $desp='';   
                            }
                                              
                    }else{
                      $desp='';
                    }
              ?>
              
              <td>{{$predikat}}</td>
              <?php
                  $x=$x+1;
                 }
                 ?>

              
                <td>&nbsp;</td>
               <?php
          //dd($akhir2);
          while ($x <= $akhir4) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      

               $nilaikbbbb=DB::table('nilaikb')               
              ->select('*')  
              ->where('mapelid', '=', $idmapel[$x])   
              ->where('tahunid', '=', $idtahun)   
              ->first(); 
          //dd($nilaikbbbb);
                 if ($nilaikbbbb!=null){
                 $nilkb = $nilaikbbbb->nilaikb;
               }else{
                  $nilkb=0;
               }

               if ($nilkb==80) {
                      if ($nil->angkap>=94){
                        $predikat = 'A';
                      }elseif ($nil->angkap>=87) {
                        $predikat = 'B';
                      }elseif ($nil->angkap>=80) {
                        $predikat = 'C';
                      }else{
                        $predikat = 'D';
                      }
                    }  

                    if ($nilkb==78) {
                      //if ($n!=null) {
                              if ($nil->angkap>=92){
                                $predikat = 'A';
                              }elseif ($nil->angkap>=85) {
                                $predikat = 'B';
                              }elseif ($nil->angkap>=78) {
                                $predikat = 'C';
                              }else{
                                $predikat = 'D';
                              }
                            }  
                          // }else{
                          //    $predikat = 'D';
                          // }  

                    if ($nilkb==75) {
                     //  if ($n!=null) {
                              if ($nil->angkap>=91){
                                $predikat = 'A';
                              }elseif ($nil->angkap>=83) {
                                $predikat = 'B';
                              }elseif ($nil->angkap>=75) {
                                $predikat = 'C';
                              }else{
                                $predikat = 'D';
                              }
                            }  
                        // }else{
                        //      $predikat = 'D';
                        // }    
                    //dd($predikat);
                    if ($predikat=='A'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
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
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->desbp;
                            }else{
                              $desp='';   
                            }
                             
                    }elseif ($predikat=='C'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->descp; 
                            }else{
                              $desp='';   
                            }
                                              
                    }else{
                      $desp='';
                    }
              ?>
              
              <td>{{$predikat}}</td>
              <?php
                  $x=$x+1;
                 }
                 ?>

              <td>&nbsp;</td>
                <td>&nbsp;</td>
                
            </tr>
            <tr>
              <td rowspan="2">Ket</td>
  <!--
  Akhir Huruuuuff
  -->



    <?php
      


      $x=1;
      //dd($akhir1);
      $nn=0;
      while ($x <= $akhir1) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      
                if ($nil!=null){
                  $nn= $nil->angkak;
                }else{
                  $nn=0;
                }
              ?>
              
              <td>{{$nn}}</td>
              <?php
                  $x=$x+1;
                  $jmlnilaik=$jmlnilaik+$nn;
                 }
                 ?>


              <td>&nbsp;</td>



        <?php
          //dd($akhir2);
          while ($x <= $akhir2) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      
                   if ($nil!=null){
                  $nn= $nil->angkak;
                }else{
                  $nn=0;
                }
              ?>
              
              <td>{{$nn}}</td>
              <?php
                  $x=$x+1;
                   $jmlnilaik=$jmlnilaik+$nn;
                 }
                 ?>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            <?php
          //dd($akhir2);
            $ab=0;
          while ($x <= $akhir3) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      
                  
                if($nil != null){
                        $ab=$nil->angkak;
                  }else{
                        $ab=0;
                        }
              ?>
              
              <td>{{$ab}}</td>
              <?php
                  $x=$x+1;
                  $jmlnilaik=$jmlnilaik+$ab;
                 }
                 ?>
                <td>&nbsp;</td>
               <?php
          //dd($akhir2);
          while ($x <= $akhir4) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      
                if($nil!=null){
                  $nangkak=$nil->angkak;
                }else{
                  $nangkak=0;
                }
              ?>
              
              <td>{{$nangkak}}</td>
              <?php
                  $x=$x+1;
                  $jmlnilaik=$jmlnilaik+$nangkak;
                 }
                 ?>
              <td>&nbsp;</td>
                <td>&nbsp;</td>
                
            </tr>
            <tr>

              <!--
  Huruuuuff
  -->

           <?php
      $x=1;
      //dd($akhir1);
      while ($x <= $akhir1) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
                ->where('nilaisiswa.tahunid','=',$idtahun)          
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      

            $nilaikbbbb=DB::table('nilaikb')               
              ->select('*')  
              ->where('mapelid', '=', $idmapel[$x])   
              ->where('tahunid', '=', $idtahun)   
              ->first(); 
          //dd($nilaikbbbb);
                 if ($nilaikbbbb!=null){
                 $nilkb = $nilaikbbbb->nilaikb;
               }else{
                  $nilkb=0;
               }

               if ($nilkb==80) {
                    //if ($n!=null) {
                      if ($nil->angkak>=94){
                        $predikat = 'A';
                      }elseif ($nil->angkak>=87) {
                        $predikat = 'B';
                      }elseif ($nil->angkak>=80) {
                        $predikat = 'C';
                      }else{
                        $predikat = 'D';
                      }
                    }  
                  // }else{
                  //    $predikat = 'D';
                  // }

                    if ($nilkb==78) {
                     // if ($n!=null) {
                            if ($nil->angkak>=92){
                              $predikat = 'A';
                            }elseif ($nil->angkak>=85) {
                              $predikat = 'B';
                            }elseif ($nil->angkak>=78) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                        // }else{
                        //    $predikat = 'D';
                        // }  

                      //if ($n!=null){
                 
                          if ($nilkb==75) {
                            if ($nil->angkak>=91){
                              $predikat = 'A';
                            }elseif ($nil->angkak>=83) {
                              $predikat = 'B';
                            }elseif ($nil->angkak>=75) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                        // }else{
                        //    $predikat = 'D';
                        // }  
                    //dd($predikat);
                    if ($predikat=='A'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
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
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->desbp;
                            }else{
                              $desp='';   
                            }
                             
                    }elseif ($predikat=='C'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->descp; 
                            }else{
                              $desp='';   
                            }
                                              
                    }else{
                      $desp='';
                    }
              ?>
              
              <td>{{$predikat}}</td>
              <?php
                  $x=$x+1;
                 }
                 ?>


              <td>&nbsp;</td>



        <?php
          //dd($akhir2);

          while ($x <= $akhir2) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      

              $nilaikbbbb=DB::table('nilaikb')               
              ->select('*')  
              ->where('mapelid', '=', $idmapel[$x])   
              ->where('tahunid', '=', $idtahun)   
              ->first(); 
          //dd($nilaikbbbb);
                 if ($nilaikbbbb!=null){
                 $nilkb = $nilaikbbbb->nilaikb;
               }else{
                  $nilkb=0;
               }

               if ($nilkb==80) {
                      if ($nil->angkak>=94){
                        $predikat = 'A';
                      }elseif ($nil->angkak>=87) {
                        $predikat = 'B';
                      }elseif ($nil->angkak>=80) {
                        $predikat = 'C';
                      }else{
                        $predikat = 'D';
                      }
                    }  

                    if ($nilkb==78) {
                      //if ($n!=null) {
                          if ($nil->angkak>=92){
                            $predikat = 'A';
                          }elseif ($nil->angkak>=85) {
                            $predikat = 'B';
                          }elseif ($nil->angkak>=78) {
                            $predikat = 'C';
                          }else{
                            $predikat = 'D';
                          }
                        }  
                      // }else{
                      //       $predikat = 'D';
                      // }

                    if ($nilkb==75) {
                        //if ($n!=null) {
                            if ($nil->angkak>=91){
                              $predikat = 'A';
                            }elseif ($nil->angkak>=83) {
                              $predikat = 'B';
                            }elseif ($nil->angkak>=75) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                        // }else{
                        //    $predikat = 'D';
                        // }  
                    //dd($predikat);
                    if ($predikat=='A'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
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
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->desbp;
                            }else{
                              $desp='';   
                            }
                             
                    }elseif ($predikat=='C'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->descp; 
                            }else{
                              $desp='';   
                            }
                                              
                    }else{
                      $desp='';
                    }
              ?>
              
              <td>{{$predikat}}</td>
              <?php
                  $x=$x+1;
                 }
                 ?>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            <?php
          //dd($akhir2);
          while ($x <= $akhir3) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      

               $nilaikbbbb=DB::table('nilaikb')               
              ->select('*')  
              ->where('mapelid', '=', $idmapel[$x])   
              ->where('tahunid', '=', $idtahun)   
              ->first(); 
          //dd($nilaikbbbb);
                 if ($nilaikbbbb!=null){
                 $nilkb = $nilaikbbbb->nilaikb;
               }else{
                  $nilkb=0;
               }

               if ($nilkb==80) {
                      if ($nil->angkak>=94){
                        $predikat = 'A';
                      }elseif ($nil->angkak>=87) {
                        $predikat = 'B';
                      }elseif ($nil->angkak>=80) {
                        $predikat = 'C';
                      }else{
                        $predikat = 'D';
                      }
                    }  

                    if ($nilkb==78) {
                     // if ($n!=null) {
                            if ($nil->angkak>=92){
                              $predikat = 'A';
                            }elseif ($nil->angkak>=85) {
                              $predikat = 'B';
                            }elseif ($nil->angkak>=78) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                       // }else{
                       //        $predikat = 'D';
                       // }   

                    if ($nilkb==75) {
                     // if ($n!=null) {
                          if ($nil->angkak>=91){
                            $predikat = 'A';
                          }elseif ($nil->angkak>=83) {
                            $predikat = 'B';
                          }elseif ($nil->angkak>=75) {
                            $predikat = 'C';
                          }else{
                            $predikat = 'D';
                          }
                        }  
                    // }else{
                    //     $predikat = 'D';
                    // }  
                    //dd($predikat);
                    if ($predikat=='A'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
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
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->desbp;
                            }else{
                              $desp='';   
                            }
                             
                    }elseif ($predikat=='C'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->descp; 
                            }else{
                              $desp='';   
                            }
                                              
                    }else{
                      $desp='';
                    }
              ?>
              
              <td>{{$predikat}}</td>
              <?php
                  $x=$x+1;
                 }
                 ?>
                <td>&nbsp;</td>
               <?php
          //dd($akhir2);
          while ($x <= $akhir4) {        
     
              $nil=DB::table('nilaisiswa')         
               //->leftjoin('siswa', 'siswa.id', '=', 'kelassiswa.idsiswa')  
               ->select('nilaisiswa.*')
               ->where('nilaisiswa.tahunid','=',$idtahun)
              ->where('idsiswa','=',$sis->id)
              ->where('idmapel','=',$idmapel[$x])            
              ->first();      

              $nilaikbbbb=DB::table('nilaikb')               
              ->select('*')  
              ->where('mapelid', '=', $idmapel[$x])   
              ->where('tahunid', '=', $idtahun)   
              ->first(); 
          //dd($nilaikbbbb);
                 if ($nilaikbbbb!=null){
                 $nilkb = $nilaikbbbb->nilaikb;
               }else{
                  $nilkb=0;
               }

               if ($nilkb==80) {
                      if ($nil->angkak>=94){
                        $predikat = 'A';
                      }elseif ($nil->angkak>=87) {
                        $predikat = 'B';
                      }elseif ($nil->angkak>=80) {
                        $predikat = 'C';
                      }else{
                        $predikat = 'D';
                      }
                    }  

                    if ($nilkb==78) {
                      //if ($n!=null) {
                            if ($nil->angkak>=92){
                              $predikat = 'A';
                            }elseif ($nil->angkak>=85) {
                              $predikat = 'B';
                            }elseif ($nil->angkak>=78) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                        // }else{
                        //       $predikat = 'D';
                        // }  

                    if ($nilkb==75) {
                       //if ($n!=null) {
                            if ($nil->angkak>=91){
                              $predikat = 'A';
                            }elseif ($nil->angkak>=83) {
                              $predikat = 'B';
                            }elseif ($nil->angkak>=75) {
                              $predikat = 'C';
                            }else{
                              $predikat = 'D';
                            }
                          }  
                         // }else{
                         //   $predikat = 'D';
                         // } 
                    //dd($predikat);
                    if ($predikat=='A'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
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
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->desbp;
                            }else{
                              $desp='';   
                            }
                             
                    }elseif ($predikat=='C'){
                        $ambildesp=DB::table('mades')               
                          ->select('mades.*')
                          ->where('mapelid', '=', $idmapel[$x])                                    
                          ->where('tahunid', '=', $idtahun)                                    
                          ->first(); 
                          if ($ambildesp!=null){
                              $desp=$ambildesp->descp; 
                            }else{
                              $desp='';   
                            }
                                              
                    }else{
                      $desp='';
                    }
              ?>
              
              <td>{{$predikat}}</td>
              <?php
                  $x=$x+1;
                 }
                 ?>
              <td>&nbsp;</td>
                <td>&nbsp;</td>
                
            </tr>
             
            <tr>
              <td ></td>
  <!--
  Akhir Huruuuuff
  -->
          
            <tr>    


  
    @endforeach()  
</table>

  
 
 
</body>

<script type="text/javascript">
$(function() {
    var header_height = 0;
    $('table th span').each(function() {
        if ($(this).outerWidth() > header_height) header_height = $(this).outerWidth();
    });

    $('table th').height(header_height);
});
</script>