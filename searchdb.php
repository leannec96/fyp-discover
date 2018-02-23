<!--http://1bestcsharp.blogspot.ie/2015/10/php-html-table-search-filter-data-mysql-database.html -->

<?php
session_start();
require_once 'inc/db.php';

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`interest`, `name`, `type`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "chatapp");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}



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
      <!--  <a class="nav-link" href="landingpage.php?logout">Home </a>-->
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
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" href="maps.html">Map</a>-->
      <!--</li>-->
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
  
 
      
        <form action="searchdb.php" method="post">
             <h3> Select an interest & the type of student you want to chat with!</h3>
            <select name="interest" style="position:absolute;:0px;center:0px;width:500px; height:25px;line-height:20px;margin:0;padding:0;"
          onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                 <option>Select an interest</option>
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
            
  
            </br>
          <!--   <select style="position:absolute;:0px;center:0px;width:500px; height:25px;line-height:20px;margin:0;padding:0;"-->
          <!--onchange="document.getElementById('displayValue').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">-->
   
       
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
			

   
    <!--             <option>Select the type of student you want to chat to</option>-->
    <!--<option value="College">College</option>-->
    <!--<option value="School">School</option>-->
 
                
    <!--        </select>-->
            
            <input type="hidden" name="valueToSearch" id="displayValue"  placeholder="Value To Search" onfocus="this.select()"><br><br>
            <button type="submit" name="search" value="Filter" id="idValue" id="optionsRadios1" class="btn btn-success">Search</button><br><br>
          
            <p>Not sure of what your interest is? Click <a href="test.php">here </a>to take a quiz to discover some interests!</span></p>
           
             <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Interest</th>
      <th scope="col">Student Name</th>
      <th scope="col">Type of Student</th>
     <th scope="col">View Student on Map of UCC</th>
      <th scope="col">View interest on UCC Website</th>
    </tr>
  </thead>
  <tbody>
      <tr class="table-success">
      <th scope="row"></th>
                    <td><?php echo $row['interest'];?></td>
                    <td><a href="chat.php?id=<?= $row['id']?>"><?= $row['name'];?></a></td>
                    <td><?php echo $row['type'];?></td>
                     <td><?php echo $row[''];?></td>
                </tr>
    </tr>
    </tbody>
      <!-- populate table from mysql database -->
                <?php 
                
                while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['interest'];?></td>
                    <td><a href="chat.php?id=<?= $row['id']?>"><?= $row['name'];?></a></td>
                    <td><?php echo $row['type'];?></td>
                     <!--//<td><a href="https://final-year-project-leannecassidy96.c9users.io/maps.html";?>View on map</a></td>-->
                     <td><a href="<?= $row['url']?>">View on map</a></td>
                      <td><a href="<?= $row['faculty']?>">View on UCC</a></td>
                   
                </tr>
                <?php endwhile;?>
</table> 
    
            
        </form>
        </div>
        </div>
        </script>
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
