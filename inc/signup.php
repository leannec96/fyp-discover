<div class="col-xs-6 col-md-13">
      <?php 
      if (isset($_GET['suc'])) {
        echo '<div class="alert alert-success">You registered successfully!</div>';
      }
    ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<title>Register/Login</title>
<link rel="icon" href="../images/college.png">
<meta name="author" content="Jake Rocheleau">
 
  <!--<link href="https://bootswatch.com/4/lux/bootstrap.min.css" rel="stylesheet" type="text/css">-->
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <link rel="icon" href="../images/college.png">
    <!-- Nav bar -->
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Navbar With Icons</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,500,500i">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
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
				<img src="../images/Discov (6).png" alt="Homepage" height="75" width="200">
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="../index.html">
								<i class="fa fa-home"></i> <span>Home</span>
							</a>
						</li>
						<li>
							<a href="signup.php">
								<i class="fa fa-plus-square"></i> <span>Register/Login</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    
      <div class="signup">
        </br>
     </br>
     </br>
     </br>
     </br>
    
        <div class="panel panel-primary" align="middle">
          <div class="panel-heading" align="middle">
         
            <h4>Register</h4>
          </div>
          <div class="panel-body">
            <form action="inc/accountssignup.php" method="POST">
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input name="name" type="text" class="form-control" id="fullname" placeholder="Enter your FullName" required>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label for="rpassword">Repeat Password</label>
                <input name="rpassword" type="password" class="form-control" id="rpassword" placeholder="Repeat Password" required>
              </div>
              <div class="form-group">
                <label for="bio">Bio</label>
                <input name="bio" type="text" class="form-control" id="bio" placeholder="Enter your Bio" required>
              </div>
<div class="form-group">
   <label for="interest">Interest</label>
    <div class="input-group">
    <select class="custom-select" onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
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
     <input type="hidden" name="displayValue" id="displayValue" 
         placeholder="Select an interest" onfocus="this.select()">
        
  <input name="interest" class="form-control" id="idValue" type="hidden">
  </div>
                <span class="text-danger"><?php echo $interestError; ?></span>
            </div>
            </div>
               
            <div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Type of student</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="school" checked> School
			  </label>
			  	  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="college"> College
			  </label>
			</div>
			</div>
			</br>
			</br>
              <button name="signup" type="submit" class="btn btn-success">Register</button>
              </br>
            </form>
            </br>
          </div>
        </div>
      </div>
    </div>
   <div class="col-xs-6 col-md-13">
      <div class="signin">
        </br>
            </br>
            </br>
            </br>
            </br>
            
            
        <div class="panel panel-primary" align="middle">
          <div class="panel-heading" align="middle">
            <h4>Login</h4>
          </div>
          <div class="panel-body" >
            <form action=" inc/accountslogin.php" method="POST">
              
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <button name="login" type="submit" class="btn btn-success">Login</button>
            </form>
            
          </div>
        </div>

      </div>
    </div>
    </br>
    </br>
</body>
</html>