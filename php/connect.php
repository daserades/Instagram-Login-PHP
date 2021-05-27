<?php
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(userName, password) values(?, ?)");
		$stmt->bind_param("ss", $userName, $password); 
		 $stmt->execute();
		 
		echo "Registration successfully...";

		header("location:http://localhost/instalogin2/verification.html");
		
		$stmt->close();
		$conn->close();
	}
?>
















