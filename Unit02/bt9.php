<?php 
echo "10 số chẵn đầu tiên là:";
$count=0;
   for ($i=2; $i <30 ; $i+=2) { 
   	# code...
   	echo $i."&nbsp&nbsp";
   	$count++;
   	if ($count==10) {
   		# code...
   		die();
   	}
   }
 ?>