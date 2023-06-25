<?php
	$name = $_POST['Name'];
	$phone = $_POST['Phone'];	
	$email = $_POST['email'];
	$How_can_help = $_POST['text'];

	// Database connection
	$conn = new mysqli('localhost','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(name, phone, email, text) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $name ,$phone, $email, $text);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>