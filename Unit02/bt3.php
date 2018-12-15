<?php 
	$arr = array(1,4,2,6,9,100,45,8,20);
	$max=$arr[0];
	for ($i=0; $i <9 ; $i++) { 
		# code...
		if ($arr[$i]>$max) {
			# code...
			$max=$arr[$i];

		}
	}
	echo "Phần tử lớn nhất mảng là:".$max;
 ?>