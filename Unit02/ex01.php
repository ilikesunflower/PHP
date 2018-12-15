<?php 
   $n= 9;
   $s=0;
   for ($i=0; $i<$n ; $i++) { 
   	# code...
   	$s +=($i*$i);
   }
   echo "<br>S=".$s;
   $s=0;
   $i=0;
   while ($i<$n) {
   	# code...
   	$s +=($i*$i);
   	$i++;
   }
   echo "<br>S=".$s;
 ?>