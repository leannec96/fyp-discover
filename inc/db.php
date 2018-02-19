<?php 


// for c9
	// $server = 'localhost';
	// $username= 'root';
	// $password='';
	// $db = 'chatapp';
	
	
	// //for heroku
		$server = 'eu-cdbr-west-02.cleardb.net';
	$username= 'b63ef7fd9df32c:2e792dbb';
	$password='2e792dbb';
	$db = 'heroku_42aad86fb486075';

	$conn = mysqli_connect($server,$username,$password,$db);
	$conn->set_charset('utf8');

 ?>