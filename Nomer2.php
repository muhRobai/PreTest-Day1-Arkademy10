<?php 
	function siku($AT){
		if ( $AT <= 0 || $AT >= 10) {
			echo "Alas/Tinggi tidak sesuai!";
		}else{
			for ($i=1; $i <= 50 ; $i++) {
   				 $t = 0; 
        	for ($j=1; $j <= $i ; $j++) {
	            if ($i % $j == 0) {
	                $t++;
	            }
        	}

    			if ($t == 2) {
       				$prima[] = $i;
    			}
			}

			for($i=0;$i<$AT;$i++){

				for($j=0;$j<=$i;$j++){

					echo $prima[$j];
				}

					echo "<br>";
				}
			}
		}
		

	siku(5);
?>