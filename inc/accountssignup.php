<?php 
	include '../inc/db.php';
	include '../inc/functions.php';


	if (isset($_POST['signup'])) {
		$name = p_s($_POST['name']);
		$email = p_s($_POST['email']);
		$password = p_s($_POST['password']);
		$rpassword = p_s($_POST['rpassword']);
		$bio = p_s($_POST['bio']);
			$interest = p_s($_POST['interest']);
		$type = p_s($_POST['type']);
		if (!empty($name) && !empty($email) && !empty($password) && !empty($bio) && !empty($interest) && !empty($type)) {
			if (strlen($password) === strlen($rpassword)) {

	      $options = [
	          'cost' => 12,
	      ];
	      $password = password_hash($password, PASSWORD_BCRYPT, $options);
	      $created_at = date('Y-m-d G:i:s');

				$sql = "INSERT INTO users (name, email, password, bio, interest, type, status, created_at) VALUES ('$name', '$email', '$password', '$bio', '$interest', '$type', 'approved', '$created_at')";
				if (mysqli_query($conn, $sql)) {
					header('Location: /inc/signup.php?suc');exit();
				}
			}else{
				header('Location: /inc/signup.php?fidpass');exit();
			}
		}else{
			header('Location: /inc/signup.php?fempt');exit();
		}


	}

 ?>