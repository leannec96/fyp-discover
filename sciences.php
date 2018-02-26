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
        <a class="nav-link" href="test.php">Quiz</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
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


     
<h2>
    Below are a number of different science courses offered in UCC.</br>
    Click on the name to be redirected to that course on the UCC Website.
</h2>
</br>
</br>
</br>

 
   <center><p><a href="https://www.ucc.ie/en/bees/">Biological, Earth & Enviornmental Sciences</a></p>
   <p><a href="https://www.ucc.ie/en/ck402/">Biological & Chemical Sciences</a></p>
     <p><a href="https://www.ucc.ie/en/compsci/">Computer Science</a></p>
        <p><a href="https://www.ucc.ie/en/ck404/earth-science/">Earth Science</a></p>
       <p><a href="https://www.ucc.ie/en/ace-dfsct/">Food Science & Technology</a></p>
   <p><a href="https://www.ucc.ie/en/ck407/">Mathematical Sciences</a></p>
  <p><a href="https://www.ucc.ie/en/ck707/">Medical & Health Sciences</a></p>
    <p><a href="https://www.ucc.ie/en/ck504/">Nutritional Sciences</a></p>
  <p><a href="https://www.ucc.ie/en/ot/about/">Occupational Science & Occupational Therapy</a></p>
  <p><a href="https://www.ucc.ie/en/sefs/">Science, Engineering & Food Science</a></p>


    <p><a href="https://www.ucc.ie/en/#">Or search through other options on UCC here</a></p></center>
   
  
  
  
 
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>

