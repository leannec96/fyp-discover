<?php
 ob_start();
 session_start();
require_once 'inc/db.php';
 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<title>Student Profile</title>
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
</br>
</br>
</br>
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
					<a class="navbar-brand" href="index.html">Discover</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="studenthome.php">
								<i class="fa fa-home"></i> <span>My Profile</span>
							</a>
						</li>
						<li>
							<a href="searchdb.php">
								<i class="fa fa-comments"></i> <span>Search & Chat</span>
							</a>
						</li>
						<li>
							<a href="conversations.php">
								<i class="fa fa-envelope-square"></i> <span>Conversations</span>
							</a>
						</li>
						<li>
							<a href="test.php">
								<i class="fa fa-cc-discover"></i> <span>Discover Interests</span>
							</a>
						</li>
						<li>
							<a href="usefulinfo.php">
								<i class="fa fa-university"></i> <span>Useful Links</span>
							</a>
						</li>
						<li>
							<a href="index.html">
								<i class="fa fa-times-circle"></i> <span>Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
     
  
  <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="images/school.png" width="120" height="120" alt="default avatar"></div>
      <h1><?php echo $_SESSION["name"]; ?> - <?php echo $_SESSION["type"]; ?></h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#settings" class="sel">My Details</a></li>
        </ul
      </nav>
      
      
      <section id="settings">
        <p>Edit your user settings:</p>
        
       <p class="setting"><span>E-mail Address</span><?php echo $_SESSION["email"]; ?></p>
        
        <p class="setting"><span>Bio <img src="images/edit.png"></span><?php echo $_SESSION["bio"]; ?></p>
        
        <p class="setting"><span>Interest <img src="images/edit.png"></span><?php echo $_SESSION["interest"]; ?></p>
        
         <p class="setting"><span>Type of student <img src="images/edit.png"></span><?php echo $_SESSION["type"]; ?></p>
        
        <p class="setting"><span>Language <img src="images/edit.png"></span> English</p>
        
        <p class="setting"><span>Profile Status <img src="images/edit.png"></span> Active</p>
     
      </section>
      </div><!-- @end #content -->
  </div><!-- @end #w -->
  
   <footer>
  <p>Leanne Cassidy - 114370601</p>
</footer> 
      <? php
      
      
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>

<?php ob_end_flush(); ?>


