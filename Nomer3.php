<?php 
	function pohon($tahun, $tinggi){

		if ($tahun <= 0 || $tinggi <= 0) {
			echo "tahun dan tinggi tidak sesuai!";
		}else{
			$i = 1;

			while($i <= $tahun){
				$tinggi = $tinggi * 2;
				$tinggi++;
				$i++;
			}

			echo $tinggi;
		}
	}

	pohon(2,2);


?>