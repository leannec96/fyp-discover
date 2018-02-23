<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>What are you interested in? Quiz Results</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
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
        <a class="nav-link" href="metal-quiz-master/test.php">Discover Interests Here</a>
      </li>
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" href="maps.html">Map</a>-->
      <!--</li>-->
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

            <div class="results-overlay">
            	
            <?php 
            /**
             * Now we compare our outcome variables.
             * I used AND (&&) in the if statements. You can also use OR (||).
             */ 
            ?>

            <?php
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
                  echo '<div class="quiz-overlay result priest"></div><div class="results-text"><p class="you-chose">You Scored:</p><div class="results test-results2"><p class="score">Health</p><p class="score-details">You should select Health from the box and chat to someone in that department! Good Luck!</p><a id="replay" class="take-quiz-btn" href="test2.php">Try Again?</a><a id="replay" class="take-quiz-btn" href="../studenthome.php">Home</a></div>';
            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
                  echo '<div class="quiz-overlay result megadeth"></div><div class="results-text"><p class="you-chose">You Scored:</p><div class="results test-results2"><p class="score">Business</p><p class="score-details">You should select Business from the box and chat to someone in that department! Good Luck!</p><a id="replay" class="take-quiz-btn" href="test2.php">Try Again?</a><a id="replay" class="take-quiz-btn" href="../studenthome.php">Home</a></div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
                  echo '<div class="quiz-overlay result maiden"></div><div class="results-text"><p class="you-chose">You Scored:</p><div class="results test-results2"><p class="score">English & History</p><p class="score-details">You should select English or History from the box and chat to someone in those departments! Good Luck!<p></p><a id="replay" class="take-quiz-btn" href="test2.php">Try Again</a><a id="replay" class="take-quiz-btn" href="../studenthome.php">Home</a></div>';
            }
            elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
                  echo '<div class="quiz-overlay result dio"></div><div class="results-text"><p class="you-chose">You Scored:</p><div class="results test-results2"><p class="score">Computers, Maths & Science</p><p class="score-details">You should select Computers, maths or science from the box and chat to someone in those departments! Good Luck!</p><a id="replay" class="take-quiz-btn" href="test2.php">Try Again</a><a id="replay" class="take-quiz-btn" href="../studenthome.php">Home</a></div>';
            }
            
        ?>     
                </div>
            </div>
	</div>
  
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
</body>
</html>
