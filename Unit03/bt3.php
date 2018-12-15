<?php 
	$xau= "Duong Vu Van Qua";
	$xau= "Luu Duoc Phi";
	$so= str_word_count($xau);
	$data= explode(" ", $xau);
	
	if ($so==3) {
		# code...
		echo "Họ :".$data[0];
		echo "<br>Đệm :".$data[1];
		echo "<br>Tên :".$data[2];

	}
	if ($so==4) {
		# code...
		echo "Họ :".$data[0];
		echo "<br>Đệm :".$data[1]."&nbsp".$data[2];
		echo "<br>Tên :".$data[3];

	}
 ?>