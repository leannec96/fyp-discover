<?php 


// for c9
	// $server = 'localhost';
	// $username= 'root';
	// $password='';
	// $db = 'chatapp';
	
	
 //for heroku
		$server = 'eu-cdbr-west-02.cleardb.net';
	$username= 'b63ef7fd9df32c';
	$password='2e792dbb';
	$db = 'heroku_42aad86fb486075';

//Retrieving vaules POSTed
	$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$rpassword = $_POST['rpassword'];
		$bio = $_POST['bio'];
		$interest = $_POST['interest'];
		$type = $_POST['type'];

//Db connection
	$conn = mysqli_connect($server,$username,$password,$db);
	$conn->set_charset('utf8');

//SQL Query using the fetched values
$sql = "INSERT INTO users (name, email, password, bio, interest, type) VALUES ('$name', '$email', '$password', '$bio', '$interest', '$type')";

if ($conn->query($sql) === TRUE){
	echo "New record created successfully";
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>