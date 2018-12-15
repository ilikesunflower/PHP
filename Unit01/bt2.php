<!DOCTYPE html>
<?php 
   if ($_REQUEST["a"] && $_REQUEST["b"]) {
   	# code...
   	echo "Giải Phương Trình Bậc 1:".$_REQUEST['a']."X +".$_REQUEST['b']."<br>";
   	if ($_REQUEST['a']==0) {
   		# code...
   		echo "Phương trình vô nghiệm";
   	}else {
   		# code...
   		echo "Phương trình có nghiệm là:".(-$_REQUEST['b']/$_REQUEST['a']);
   	}
   	exit();

   }else
   echo "Điền đầy đủ thông tin vào";
 ?>
<html lang="en">
<body>
	<form method="POST"> 
		<input type="text" name="a">
		<input type="text" name="b">
		<input type="submit" >
	</form>
</body>
</html>