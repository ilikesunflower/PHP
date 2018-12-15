<?php 
	$array= array(1,4,2,6,9,100,4);
	for ($i=0; $i <7 ; $i++) { 
		# code...
		for ($j=$i; $j <7 ; $j++) { 
			# code...
			if ($array[$i]>=$array[$j]) {
				# code...
				$temp=$array[$i];
				$array[$i]=$array[$j];
				$array[$j]=$temp;
			}
			
		}
				
	}
	for ($i=0; $i <7 ; $i++) { 
		# code...
		echo $array[$i]."&nbsp &nbsp";
	}

 ?>