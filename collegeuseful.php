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
   <link rel="icon" href="images/college.png">
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
        <a class="nav-link" href="collegestudenthome.php">My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="collegeconvo.php">Conversations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="collegeuseful.php">Useful Links</a>
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
<center><p> Below are a number of links to useful sites that will provide you with more information regarding college.</p>
<p> You will be redirected to a new tab once you click on the link.</p>
<p>If you would like to download Maps of the UCC Campus, click <a href="https://www.ucc.ie/en/discover/visit/maps/">here</a></p></center>
<a href="https://www.ucc.ie/">
  <img src="images/ucc.jpg" alt="HTML tutorial" style="width:400px;height:250px;border:100;">
</a>
</br>
<center><a href="https://www.cao.ie/">
  <img src="images/cao.jpg" alt="HTML tutorial" style="width:300px;height:150px;border:100;">
</a></center>
</br>
<a href="https://careersportal.ie/ed_training/course_search.php?client_id=67&ed_sub_cat_id=48#.WodlpoPFLIU">
  <img src="images/careersportal.png" alt="HTML tutorial" style="width:400px;height:150px;border:100;">
</a>




    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>


