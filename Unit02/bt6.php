<?php 
  for ($i=8; $i >=1; $i--) { 
		# cechode...
  	    echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
  		for ($j=1; $j <=(8-$i) ; $j++) { 
			# code...
			echo "&nbsp&nbsp";
		}
		for ($j=1; $j <= $i; $j++) { 
			# code...
			echo "#";
		}

		echo "<br>";
	}
 ?>