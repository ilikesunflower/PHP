<?php 
	$xau= "ZenthntneZ";
	$arr=array();
	$n=strlen($xau);
	// echo "độ dài của chuỗi:".strlen($xau)."<br>";
	echo "Chuỗi ".$xau."<br>";
	for ($i=0; $i <$n ; $i++) { 
		# code...
		$arr[$i]=substr($xau,$i,1);
		
	}
	// echo "<pre>";
	// 	print_r($arr);
	// echo "<pre>";
	$count=0;
	for ($i=0; $i <($n/2) ; $i++) { 
		# code...
		if ($arr[$i]!=$arr[$n-1-$i]) {
			# code...
			echo "không phải chuỗi Palindrome";
			break;
		}else{
			$count++;
		}
		if ($count==(int)($n/2)) {
			# code...
			echo "chính là chuỗi Palindrome";
		}

	}
 ?>