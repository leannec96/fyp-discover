<?php
session_start();
require_once 'inc/db.php';

?>
 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<title>Welcome to Discover</title>
<meta name="author" content="Jake Rocheleau">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link href="https://bootswatch.com/4/lux/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <link rel="icon" href="images/college.png">
     <style>
       body { 
           background-image: url("images/capture1.png");
           background-size: cover;
       }
       
   </style>
</head>
<body>


 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="landingpage.php">Discover</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="studenthome.php">My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="searchdb.php">Search & Chat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="conversations.php">Conversations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="test.php">Discover Interests Here</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usefulinfo.php">Useful Links</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="landingpage.php">Logout</a></a>
      </li>
      <li>
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user"></span><font color="#ffffff">&nbsp;Hi' <?php echo $_SESSION["email"]; ?>&nbsp;</font><span class="caret"></span></a></li>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>
    </ul>
  </div>
</nav>

<center><h3> Your conversation history will appear here if you have spoken to someone</h3>
<p>Haven't spoken to anyone yet? Click <a href="searchdb.php"> here</a> to find someone you share similar interests with!</p></center>
<?php

  include 'init.php';
  include 'inc/middleware.php';

$cuserID= $_SESSION['id'];
// var_dump($cuserID);die();
$sql = "SELECT * FROM users WHERE id <>'$cuserID'";
$run = mysqli_query($conn,$sql);
while ($rows= mysqli_fetch_assoc($run)) {
	$id = p_s($rows['id']);
	$name = p_s($rows['name']);
	$email = p_s($rows['email']);
	$interest = p_s($rows['interest']);
	$type = p_s($rows['type']);
	$bio = p_s($rows['bio']);
	$lastactive = p_s($rows['lastactive']);
	if(getMsgs($id,$cuserID)!= null){
 echo'
<div class="col-md-3 col-sm-6 col-xs-12">
	<div class="panel panel-default">
		<div class="panel-heading">'.$name.' <b>'.$type.'</b></div>
		<div class="panel-body">
			<div class="text-center">
				<img src="http://www.gravatar.com/avatar/'.md5($email).'fs=150" height="30" width="30" class="img-circle">
				<a  href="chat.php?id='.$id.'" class="btn btn-success">Chat Now</a>
			</div>
			
		</div>
		<b><div class="panel-footer">'.unseenMsgs($_SESSION['id'],$id).' New Messages</div></b>
	</div>
</div>
	';
}
}
return $msgs;
?> 

 <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
     
    </body>
    </html>
  