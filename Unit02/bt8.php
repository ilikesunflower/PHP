<?php 
	for ($i=1; $i <=5; $i++) { 
		# cechode...
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
		// for ($j=1; $j <=(7-$i) ; $j++) { 
		// 	# code...
		// 	echo "&nbsp&nbsp";
		// }
		for ($j=1; $j <= $i; $j++) { 
			# code...
			echo "#";
		}
		echo "<br>";
	}
 ?>