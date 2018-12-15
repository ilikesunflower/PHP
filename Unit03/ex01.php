<?php 
	$name= "Zent Group";
	$ex=explode(" ", $name);
	echo "<pre>";
		print_r(explode(" ", $name));
	echo "<pre>";
	echo implode("&",$ex);
	echo "<br>strlen:".strlen($name);
	echo "<br>str_word_count:".str_word_count($name);
	echo "<br> str_repeat(chuỗi , số lần lặp):".str_repeat("<br>zent",9);
	echo "<br> str_replace:" . str_replace("e","E",$name);
	echo "<br>".md5('123455');
	echo "<br>".sha1('1257888');
	echo "<br>".substr($name,1,4);
	echo "<br>".strpos($name, 'Zent');

 ?>