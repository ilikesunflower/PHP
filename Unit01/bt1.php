<!DOCTYPE html>
<?php
	if ($_REQUEST["a"] && $_REQUEST["b"] && $_REQUEST["c"]) {
		# code...
		echo "Giải Phương Trình:".$_REQUEST['a']."X2+".$_REQUEST['b']."X+".$_REQUEST['c']."=0<br>"; 
	$deta= $_REQUEST['b']*$_REQUEST['b']-4*$_REQUEST['a']*$_REQUEST['c'];
	if ($deta>0) {
		# code...
		$xau="Phương trình có hai nghiệm". ((-$_REQUEST['b'] + sqrt($deta))/2*$_REQUEST['a']) ." Và".((-$_REQUEST['b'] - sqrt($deta))/2*$_REQUEST['a']);
	}
	if ($deta==0) {
		# code...
		$xau="Phương trình có nghiệm kép:". (-$_REQUEST['b']/2*$_REQUEST['a']);
	}
	if ($deta<0) {
		# code...
		$xau= "Phương trình vô nghiệm";
	}
	echo $xau;
	exit();
	}else{
	  echo "Nhập đầy đủ dữ liệu";

	}
	//https://thachpham.com/category/web-development/php
	?>
<html lang="en">
<body>
	<form method="POST">
	Nhập a:<input type="text" name="a"  /><br>
	Nhập b:<input type="text" name="b"  /><br>
	Nhập c:<input type="text" name="c"  /><br>
	<input type="submit">
	</form>
	
</body>
</html>
