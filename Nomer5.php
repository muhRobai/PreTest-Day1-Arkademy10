<?php
function Kata($kalimat,$kata){
        $kata1 = $kalimat;
        $kata2= strrev($kata1);
        $cari = $kata;
        $jumlah_kata = 0;
        $arr_kata1 = str_split($kata1);
        $arr_kata2 = str_split($kata2);
        $arr_cari = str_split($cari);
        $jml_kata = count($arr_kata2);
        $jml_cari = count($arr_cari);

        for ($i = 0; $i <= ($jml_kata - $jml_cari); $i++) {
            $kata = "";
            for ($j = $i; $j < ($i + $jml_cari); $j++) {
                $kata .= $arr_kata1[$j];
            }
            if ($kata == $cari) {
                $jumlah_kata += 1;
            }

        }
        
        for ($i = 0; $i <= ($jml_kata - $jml_cari); $i++) {
            $kata = "";
            for ($j = $i; $j < ($i + $jml_cari); $j++) {
                $kata .= $arr_kata2[$j];
            }
            if ($kata == $cari) {
                $jumlah_kata += 1;
            }

        }
        echo "data ditemukan " . $jumlah_kata . " kali";
}

Kata('banananana','nana');


?>
