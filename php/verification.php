<?php
	$one = $_POST['one'];
	$two = $_POST['two'];
	$three = $_POST['three'];
	$four = $_POST['four'];
	$five = $_POST['five'];
	$six = $_POST['six'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into verification(one, two, three, four, five, six) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $one, $two, $three, $four, $five, $six); 
		 $stmt->execute();
		 
		 header("location:http://localhost/instalogin2/dashboard.html");

		
		$stmt->close();
		$conn->close();
	}
?>
















