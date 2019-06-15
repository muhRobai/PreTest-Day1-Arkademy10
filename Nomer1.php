<?php
function math($harga,$beli){
	$hasil = 0;
	$j = 0;
	while($harga <= $beli){
		$beli = $beli - $harga;
		$j++;
		if($j != 4) {
			$hasil++;
		}else{
			$hasil = $hasil + 2;
			$j = 0;

		}
	}

	echo $hasil;
}

math(2500,50000);
?>