<?php
 ob_start();
 session_start();
require_once 'inc/db.php';
 
// // if session is not set this will redirect to login page
// if( !isset($_SESSION['user']) ) {
//   header("Location: home.php");
//   exit;
// }
// // select loggedin users detail
// $res=mysql_query("SELECT * FROM users WHERE id=".$_SESSION['user']);
// $userRow=mysql_fetch_array($res);

 
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
</head>
<body>


 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="landingpage.php">Discover</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <!--<li class="nav-item ">-->
      <!--  <a class="nav-link" href="landingpage.php">Home </a>-->
      <!--</li>-->
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


     
  
  <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="images/avatar.png" alt="default avatar"></div>
      <h1><?php echo $_SESSION["name"]; ?></h1>

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


