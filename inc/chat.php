<?php 
		$touser = p_s($_GET['id']);
		$fromuser = $_SESSION['id'];
	if (isset($_POST['sendmsg'])) {
		$msg= p_s($_POST['msg']);

		if ($conv_id = start_conv($fromuser, $touser)) {
			$sql = "INSERT INTO conv_reply (conv_id,user_id,content) VALUES('$conv_id','$fromuser','$msg')";
			if (mysqli_query($conn,$sql)) {
				header('Location: chat.php?id='.$touser);
			}
		}
	}

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
<div class="container">
	<div class="msgs" style="height: 60vh; overflow-y: auto">
		<?php 
		if (!empty(getMsgs($fromuser,$touser))) {
			foreach (getMsgs($fromuser,$touser) as $msg) {
				if ($msg['user_id'] == $_SESSION['id']) {
					echo '<div>
						<div  class="alert alert-info" style="width:80%;float:right">'.$msg['content'].'</div>
					</div>';
				}else{
					if (msgSeen($msg['id'])) {
						
					}
					echo '<div><div class="alert alert-success" style="width:80%;float:left">'.$msg['content'].'</div></div>';
				}
			}
		}

		 ?>
	</div>
	<div class="sendmsg">
		<form action="" method="POST">
			<textarea class="form-control" rows="3" name="msg"></textarea>
			<button class="btn  btn-success" name="sendmsg">Send</button>			
		</form>

	</div>
</div>
 <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>