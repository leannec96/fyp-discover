<?php 


//for c9
	$server = 'localhost';
	$username= 'root';
	$password='';
	$db = 'chatapp';
	
	
	// //for heroku
	// 	$server = 'd4f9cda4@eu-cdbr-west-02.cleardb.net';
	// $username= 'b94bc67ee56667';
	// $password='d4f9cda4';
	// $db = 'heroku_09f39c0d0356122';

	$conn = mysqli_connect($server,$username,$password,$db);
	$conn->set_charset('utf8');

 ?>