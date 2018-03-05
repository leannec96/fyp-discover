<!--http://1bestcsharp.blogspot.ie/2015/10/php-html-table-search-filter-data-mysql-database.html -->

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
				<a href="index.html"><img src="../images/Discov (6).png" alt="Homepage" height="75" width="200"></a>
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
                </br>
                <form action="" method="get" style="margin-bottom:45px;">
                    <select name="usr_interest" class="form-control" style="margin-bottom:25px;" required>
                        <option disabled>Select an interest</option>
                        <option value="Computers">Computers</option>
                        <option value="Business">Business</option>
                        <option value="Science">Science</option>
                        <option value="Maths">Maths</option>
                        <option value="English">English</option>
                        <option value="Geography">Geography</option>
                        <option value="History">History</option>
                        <option value="Health">Health</option>
                        <option value="Languages">Languages</option>
                    </select>
                    <div class="form-group" class="radio">
                        <label for="input1" class="col-sm-2 col-md-5 control-label">Type of student</label>
                        <div class="col-sm-10 col-md-7" class="checkbox">
                            <div class="col-md-6">
                                <input type="radio" name="usr_type" id="chooseType" value="school"> <label for="chooseType">School</label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" name="usr_type" id="chooseType2" value="college"> <label for="chooseType2">College</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="gs_search" class="btn btn-success pull-right">Search</button>
                    <div class="clearfix"></div>

                </form>
                <p>Not sure of what your interest is? Click
                    <a href="test.php">here </a>to take a quiz to discover some interests!</span>
                </p>
                <?php if(isset($_GET['usr_interest']) && isset($_GET['usr_type'])){ ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Interest</th>
                            <th scope="col">Click on a Student Name to Chat to them</th>
                            <th scope="col">Type of Student</th>
                            <th scope="col">View Student on Map of UCC</th>
                            <th scope="col">View interest on UCC Website</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php

                        function p_s($variable)
                        {
                            global $conn;
                            $variable = mysqli_real_escape_string($conn, trim($variable));
                            return $variable;
                        }
                        function g_s($variable)
                        {
                            $variable = strip_tags($variable);
                            return $variable;
                        }
                        if (isset($_GET['usr_interest']) && isset($_GET['usr_type'])) {
                            $type = p_s($_GET['usr_type']);
                            $interest = p_s($_GET['usr_interest']);
                            $sql = "SELECT * FROM users WHERE type='$type' AND interest='$interest'";
                            $run = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($run)) {
                                $usr_id = g_s($rows['id']);
                                $usr_name = g_s($rows['name']);
                                $usr_type = g_s($rows['type']);
                                $usr_url = g_s($rows['url']);
                                $usr_faculty = g_s($rows['faculty']);
                                $usr_interest = g_s($rows['interest']);
                                ?>
                                  <tr>
                                    <td><?=$usr_interest?></td>
                                    <td><a href="chat.php?id=<?=$usr_id?>"><?=$usr_name?></a></td>
                                    <td><?=$usr_type?></td>
                                    <td><a href="<?=$usr_url?>">View on map</a></td>
                                    <td><a href="<?=$usr_faculty?>">View on UCC Website</a></td>
                                  </tr>
                                  <?php
                        }
                        }
                        
                        ?>
                    </tbody>
                </table>
                <?php }else{echo '<div class="alert alert-info">You have to Select an Interest and Type of Student to See Results!</div>';}?>

                </form>
            </div>
        </div>
        </script>
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