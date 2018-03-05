<?php 
		$touser = p_s($_GET['id']);
		$fromuser = $_SESSION['id'];
	if (isset($_POST['sendmsg'])) {
		$msg= p_s($_POST['msg']);

		if ($conv_id = start_conv($fromuser, $touser)) {
			$sql = "INSERT INTO conv_reply (conv_id,user_id,content) VALUES('$conv_id','$fromuser','$msg')";
			if (mysqli_query($conn,$sql)) {
				header('Location: cchat.php?id='.$touser);
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
  <!--<link href="https://bootswatch.com/4/lux/bootstrap.min.css" rel="stylesheet" type="text/css">-->
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <link rel="icon" href="images/college.png">
   
    <!-- Nav bar -->
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Navbar With Icons</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,500,500i">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
     <style>
       body { 
           background-image: url("images/capture1.png");
           background-size: cover;
       }
       
   </style>
</head>
<body>


<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<a href="index.html"><img src="../images/Discov (6).png" alt="Homepage" height="75" width="200"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="collegestudenthome.php">
								<i class="fa fa-home"></i> <span>My Profile</span>
							</a>
						</li>
						<li>
							<a href="collegconvo.php">
								<i class="fa fa-envelope-square"></i> <span>Conversations</span>
							</a>
						</li>
						<li>
							<a href="index.php">
								<i class="fa fa-times-circle"></i> <span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		</br>
		</br>
		</br>
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
			</br>
			<button class="btn  btn-success" name="sendmsg">Send</button>			
		</form>

	</div>
</div>
</br>
</br>
  <footer>
      <img src="../images/dlogo.png" alt="Homepage" height="75" width="200"> </br>
  <p>Leanne Cassidy - 114370601</p>
</footer> 
 <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>