<?php 
session_start();
?>
<!---------- Page Container ------------------------------>
<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="edit_profile.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="menuefooter.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>
<?php

//When the form button is clicked 
 if(array_key_exists('button2', $_POST)) {
            button2();
        }

//function to store the input data to the database 
  function button2() 
{
  
include_once ("conncetion.php");
 //if the connection is work    
 // Taking all 5 values from the form data(input)
 $Uname =  $_REQUEST['Uname'];
 $Uemail=  $_REQUEST['Uemail'];
 $city=  $_REQUEST['city'];
 $age=  $_REQUEST['age'];
 $id = $_SESSION['userid'];
          
$sql = "UPDATE users set username= '$Uname', email= '$Uemail', city= '$city', birth_date= '$age' WHERE id= '$id'";
                   
if(mysqli_query($conn, $sql)){
    header('Location: admin.php');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
 // Close connection
   mysqli_close($conn);
        
} //end function 

?>
<!----------------------Menue---------------------------->

<div class="nav-color">
 <div class="w3-bar"> 
  <div class="w3-bar-item w3-left logo">
   <h3>Ideal Tourism in <span> Riyadh </span></h3> 
  </div>
   <div class="link-1"><a href="admin.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-user w3-right" ></i></a></div>
   <?php
    if(isset($_SESSION['userid']))
    {
    ?> 
   <div class="link-1"><a href="log_out.php" class="w3-bar-item w3-button w3-right">Log out</a></div>
   <?php 
    }
   ?>
   <div class="link-2"><a href="home.php" class="w3-bar-item w3-button Mcenter" > Home </a></div>
   <div class="link-3"><a href="explore.php" class="w3-bar-item w3-button w3-left">Explore Riyadh</a></div>
   <div class="link-4"><a href="aboutriyadh.php" class="w3-bar-item w3-button w3-left">About Riyadh</a></div>
   <div class="link-5"><a href="recommendations.php" class="w3-bar-item w3-button w3-left">Recommendations</a></div>
  </div>
</div>
<!-----------------------------Edit form---------------------------------------->
<center>
<div class = "signin_form">
<form method="post" class=" card  w3-margin"> 
 <div class="container">
    <div class=" w3-container w3-center ">
     <h1>Edit Your Profile</h1>
     <hr>
    </div> 
    <img class = "avatar" src = "Photos/avatar1.png">
     <hr>
     <i class="fa fa-group fa-fw w3-margin-right w3-text-theme w3-opacity"></i> 
     <input class="w3-opacity" type="text" name="Uname" placeholder="Edit your name"><br><br>

     <i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme w3-opacity"></i> 
     <input class="w3-opacity" type="text" name="Uemail" placeholder="Edit your email"><br><br>

     <i class="fa fa-home fa-fw w3-margin-right w3-text-theme w3-opacity"></i>
     <input class="w3-opacity" type="text" name="city" placeholder="Edit your city"><br><br>

     <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme w3-opacity"></i>
     <input class="w3-opacity" type="date" name="age" placeholder="Edit your age">
      
        
     <input class="button1 w3-opacity "type="submit" name="button2" placeholder="Edit"/>
  </div>
 </form>
</div>
</center>

<!--------------------------Footer------------------------------------>

<footer id="footer"> 
  <section id="footer">
    <footer class="footer-distributed">
      <div class="footer-left"> 

        <h3>Ideal Tourism in <span> Riyadh </span></h3>
        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Explore Riyadh</a>
          ·
          <a href="#">About Riyadh</a>
          ·
          <a href="#">Contact</a>
        </p>
 
        <p class="footer-company-name">Ideal Tourism in Riyadh &copy; 2021</p>
      </div>
     
      <div class="footer-center">
         <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Yanbu</span> SA(Saudi Arabia)</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+966 000000000</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#">IdealTourism@gmail.com</a></p>
        </div>
      </div>
 
      <div class="footer-right">
          <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </footer>
  </section> 
</footer>
</body>
</html>