<?php
    include "../init.php";
  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<title>SignUp</title>
<meta name="author" content="Jake Rocheleau">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link href="https://bootswatch.com/4/lux/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="libs/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="libs/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    include "navbar.php";
  ?>
  
  <div class="col-md-6">
      <?php 
      if (isset($_GET['suc'])) {
        echo '<div class="alert alert-success">You registered successfully!</div>';
      }
      
  //     if( $count == 1 && $row['password']==$pass && $row['type']=='school') {
  //   $_SESSION['id'] = $row['id'];
  //   header("Location: schoolstudenthome.php");
  // } else if ( $count == 1 && $row['password']==$pass && $row['type']=='college') {
  //   $_SESSION['id'] = $row['id'];
  //   header("Location: collegestudenthome.php");
  // } else {
  //   $errMSG = "Incorrect Credentials, Try again...";
  // }
    
  
      ?>
      
      <div class="signup">
        <div class="panel panel-primary" align="middle">
          <div class="panel-heading" align="middle">
            </br>
            <h4>Register</h4>
          </div>
          <div class="panel-body">
            <form action="accounts/signup.php" method="POST">
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
              <button name="signup" type="submit" class="btn btn-success">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="signin">
        <div class="panel panel-primary" align="middle">
          <div class="panel-heading" align="middle">
            </br>
            </br>
            <h4>Login</h4>
          </div>
          <div class="panel-body" >
            <form action="accounts/login.php" method="POST">
              
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

    