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
        <title>Search & Chat</title>
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
                                <input type="radio" name="usr_type" id="chooseType" value="school" checked> <label for="chooseType">School</label>
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
        <script src="assets/jquery-1.11.3-jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>