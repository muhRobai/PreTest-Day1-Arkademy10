<?php 
	
	function urut(){
		$data = [2,34,11,21,3,12,56,4,7];

		for ($i = 0; $i < count($data); $i++){
			for ($j = 0; $j < count($data); $j++){
				if ($data[$j] > $data[$i]){
					$tmp = $data[$i];      
					$data[$i] = $data[$j];          
					$data[$j] = $tmp;            
				}  
			}
		}


		for($i = 0; $i < count($data); $i++){
				if ($i == 0) {
					echo "Terkecil";
					echo "<br>";
					echo $data[$i];
					echo "<br>";
				}elseif ($i == count($data)-1) {
					echo "Terbesar";
					echo "<br>";
					echo $data[$i];
					echo "<br>";
				}
				
		}
		echo "Acending";
		echo "<br>";

		for($i = 0; $i < count($data); $i++){
			echo $data[$i].",";
		}

		echo "<br>";
		for ($i = 0; $i < count($data); $i++){
			for ( $j = 0; $j < count($data); $j++){
				if ($data[$j] < $data[$i]){
					$tmp = $data[$i];
					$data[$i] = $data[$j];
					$data[$j] = $tmp;
				}
			}
		}

		echo "Decending";
		echo "<br>";

		for($i = 0; $i < count($data); $i++){
				echo $data[$i].",";
		}
	}

	urut();


?>