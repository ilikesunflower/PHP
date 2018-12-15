<?php 
	$n=8;
	$s=0;
	$mau=1;
	for ($i=1; $i <=8 ; $i++) { 
		# code...
		for ($j=1; $j <= $i; $j++) { 
			# code...
			$mau *=$j;

		}
		$s +=$i/$mau;
	}
	echo "Tổng S=".$s;
 ?>