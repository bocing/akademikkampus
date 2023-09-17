<?php
function kekata($x) {
    $x = abs($x);
    $angka = array("", "satu", "dua", "tiga", "empat", "lima",
    "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($x <12) {
        $temp = " ". $angka[$x];
    } else if ($x <20) {
        $temp = kekata($x - 10). " belas";
    } else if ($x <100) {
        $temp = kekata($x/10)." puluh". kekata($x % 10);
    } else if ($x <200) {
        $temp = " seratus" . kekata($x - 100);
    } else if ($x <1000) {
        $temp = kekata($x/100) . " ratus" . kekata($x % 100);
    } else if ($x <2000) {
        $temp = " seribu" . kekata($x - 1000);
    } else if ($x <1000000) {
        $temp = kekata($x/1000) . " ribu" . kekata($x % 1000);
    } else if ($x <1000000000) {
        $temp = kekata($x/1000000) . " juta" . kekata($x % 1000000);
    } else if ($x <1000000000000) {
        $temp = kekata($x/1000000000) . " milyar" . kekata(fmod($x,1000000000));
    } else if ($x <1000000000000000) {
        $temp = kekata($x/1000000000000) . " trilyun" . kekata(fmod($x,1000000000000));
    }     
        return $temp;
}

function format_indo($date){
//    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $BulanIndo = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
    return($result);
}


function ambilpuj($idjadwal){
//    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $result=DB::table('palid')   
                  ->select('palid.*')                  
                  ->where('palid.idjadwal','=',$idjadwal)                  
                  ->first(); 
    $jup=$result->ban+$result->komisi+$result->snack+$result->adm+$result->sr;
    return($jup);
}


function terbilang($x, $style=4) {
    if($x<0) {
        $hasil = "minus ". trim(kekata($x));
    } else {
        $hasil = trim(kekata($x));
    }     
    switch ($style) {
        case 1:
            $hasil = strtoupper($hasil);
            break;
        case 2:
            $hasil = strtolower($hasil);
            break;
        case 3:
            $hasil = ucwords($hasil)." Rupiah";
            break;
        default:
            $hasil = ucfirst($hasil);
            break;
    }     
    return $hasil;
}

function namahari($tanggal){

                                            $tgl=substr($tanggal,8,2);
                                            $bln=substr($tanggal,5,2);
                                            $thn=substr($tanggal,0,4);

                                            $info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
                                            
                                            switch($info){
                                                case '0': return "Minggu"; break;
                                                case '1': return "Senin"; break;
                                                case '2': return "Selasa"; break;
                                                case '3': return "Rabu"; break;
                                                case '4': return "Kamis"; break;
                                                case '5': return "Jumat"; break;
                                                case '6': return "Sabtu"; break;
                                            };

                                          
    
                                            }


?>