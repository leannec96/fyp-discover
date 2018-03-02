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
<title>Useful Links</title>
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
 <div id="w">
    <div id="content" class="clearfix">
<center><p> Below are a number of links to useful sites that will </br>
provide you with more information regarding college.</br>
You will be redirected to a new page once you click on the image.</br>
If you would like to download Maps of the UCC Campus, click <a href="https://www.ucc.ie/en/discover/visit/maps/">here</a></p></center>
</div>
</div>
<center><a href="http://www.qualifax.ie/">
  <img src="images/qualifax.gif" alt="HTML tutorial" style="width:300px;height:150px;border:100;">
</a></center>

<center><a href="https://careersportal.ie/ed_training/course_search.php?client_id=67&ed_sub_cat_id=48#.WodlpoPFLIU">
  <img src="images/career.png" alt="HTML tutorial" style="width:400px;height:150px;border:100;">
</a></center>

<center><a href="https://www.cao.ie/">
  <img src="images/cao.jpg" alt="HTML tutorial" style="width:300px;height:150px;border:100;">
</a></center>

    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>


