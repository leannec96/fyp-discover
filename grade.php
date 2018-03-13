<?php 
session_start();
require_once 'inc/db.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Quiz Results</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
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
</br>
</br>
	<div id="page-wrap">

		<h1 class="transparent index-headline" >Here&#8217;s What are you interested in?</h1>
		
        <?php
        
           /**
            * Make a new variable for each question, so we can grab the answers from them.
            * If you have more than five questions, add answer variables as appropriate.
            */
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            
            /**
            * Now, make outcome variables, and set those values to zero.
            * These variables represent our four outcome screens.
            * Whatever outcome variable has the most points at the end, "wins".
            */

            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;
            
            /**
            * For each question, look at the answers, and add points to the outcome variables as indicated.
            * You may ask, "Why aren't we giving one point to A, one point to B, etc?".
            * Good question. It has to do with tie breakers.
            * In a five question test, what if someone "votes" twice each for A and B, and once for C?
            * How do you determine what wins between A and B in that scenario?
            * There has to be at least one unevenly weighted question to break ties, but you can have more than one.
            * For this quiz, I also wanted to add give points to different outcomes for certain answers.
            * 
            */

            if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            if ($answer2 == "A") { $totalA = $totalA + 1.23; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; }
            if ($answer2 == "D") { $totalD = $totalD + 1.16; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
            if ($answer3 == "D") { $totalD = $totalD + 1.16; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; }
            if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            if ($answer5 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

            ?>

</br>
</br>
 
            <center><div class="results-overlay">
         
            <?php 
            /**
             * Now we compare our outcome variables.
             * I used AND (&&) in the if statements. You can also use OR (||).
             */ 
            ?>

            <?php
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
                  echo '<div class="quiz-overlay result priest"></div><div class="results-text"><p class="you-chose">Your interest is:</p><div class="results test-results2"><p class="score">Health</p><p>You should select Health from the list and chat to someone in that department! Good Luck!</p><a id="replay" class="take-quiz-btn" href="test2.php">Try Again?</a><a id="replay" class="take-quiz-btn" href="../searchdb.php">Chat to someone</a></div>';
            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
                  echo '<div class="quiz-overlay result megadeth"></div><div class="results-text"><p class="you-chose">Your interest is:</p><div class="results test-results2"><p class="score">Business</p><p>You should select Business from the list and chat to someone in that department! Good Luck!</p><a id="replay" class="take-quiz-btn" href="test2.php">Try Again?</a><a id="replay" class="take-quiz-btn" href="../searchdb.php">Chat to someone</a></div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
                  echo '<div class="quiz-overlay result maiden"></div><div class="results-text"><p class="you-chose">Your interest is:</p><div class="results test-results2"><p class="score">English & History</p><p>You should select English or History from the list and chat to someone in those departments! Good Luck!<p></p><a id="replay" class="take-quiz-btn" href="test2.php">Try Again</a><a id="replay" class="take-quiz-btn" href="../searchdb.php">Chat to someone</a></div>';
            }
            elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
                  echo '<div class="quiz-overlay result dio"></div><div class="results-text"><p class="you-chose">Your interest is:</p><div class="results test-results2"><p class="score">Computers, Maths & Science</p><p>You should select Computers, maths or science from the list and chat to someone in those departments! Good Luck!</p><a id="replay" class="take-quiz-btn" href="test2.php">Try Again</a><a id="replay" class="take-quiz-btn" href="../searchdb.php">Chat to someone</a></div>';
            }
            
        ?>     
                </div>
            </div>
	</div>

	</center>
  
  <script type="text/javascript">
      function modalshow(){

        modalbg = document.getElementById("modalbg");
        modalbg.style.display = "block";
        modalwindow = document.getElementById("modalwindow");
        modalwindow.style.display = "block";
      }
      function modalhide(){
        document.getElementById("modalbg").style.display = "none";
        document.getElementById("modalwindow").style.display = "none";
      }
  </script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-000000000-1', 'auto');
  ga('send', 'pageview');
</script>
</br>
</br>
<footer class="site-footer">
      <img src="../images/dlogo.png" alt="Homepage" height="75" width="200"> </br>
  <p>Leanne Cassidy - 114370601</p>
</footer> 
</body>
</html>
