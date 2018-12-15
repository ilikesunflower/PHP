<?php 
	$info=array();
	$info['name']= 'Ngọc Ánh';
	$info['class']= 'Việt Nhật C';
	$info['address']= 'Nghệ An';
	$info['email']= 'msanh.bk@gmail.com';
	echo "<br> Thông tin sinh viên";
	echo "<hr>";
	// echo "name:".$info['name'];
	// echo "<br>class:".$info['class'];
	// echo "<br>address:".$info['address'];
	// echo "<br>email:".$info['email'];
	$point=array();
	
	$point['ly']=9;
	$point['hoa']=10;
	$point['toan']=6;
	$info['point']=$point;
	echo "<pre>";
	 	print_r($info);
	echo "<pre>";

	$row1=array(1,2,3,4);
	$row2=array(2,3,4,6);
	$data = array($row1,$row2);
	echo "<pre>";
	 	print_r($data);
	echo "<pre>";
	for ($i=0; $i < count($data); $i++) { 
		# code...
		for ($j=0; $j <count($data[$i]) ; $j++) { 
			# code...
			echo $data[$i][$j]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			// echo "<br>";
		}
	}

 ?>