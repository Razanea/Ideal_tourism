<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="menuefooter.css" rel="stylesheet">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<title>Home</title>
</head>

<body>
<?php

//When the form button (in the review card section) is submitted
 if(array_key_exists('button2', $_POST))
{
   button2();
}

//function to store the input data to the database 
 function button2() 
{
  include_once ("connection.php");

 //if the connection is work    
 // Taking the values from the form data(input)

 $customer_name =  $_REQUEST['name'];
 $customer_msg =  $_REQUEST['msg'];
          
 // Performing insert query execution
 // the table name is review_card2

 $sql = "INSERT INTO review_card2 (cutomer_name, customer_msg)  VALUES ('$customer_name', '$customer_msg')";

  if(mysqli_query($conn, $sql))
  {
   ""; //do nothing
  }
  else
  {
   echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
  }

 //Close connection

   mysqli_close($conn);
        
} //end function 

?>

<!----------------------Menue---------------------------->
<?php include("menue.php"); ?>

<!----------------------SLIDESHOW---------------------------->
<br>
<div class="w3-container">
<h1 class="title w3-opacity">LIVE A NUIQUE EXPERIENCE IN RIYADH</h1>
<br>
</div>

<div class="slideshow-container">

  <!-- First Image-->
  <div class="fade">
   <img class = "mySlides" src="Photos/Event_1.png">
  </div>

  <!-- Second Image-->
  <div class="fade">
   <img class = "mySlides" src="Photos/Event_2.png">
  </div>

  <!-- Third Image-->
  <div class="fade">
   <img class = "mySlides" src="Photos/Event_3.png">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- The dots/circles -->
  <div style="text-align:center">
   <span class="dot" onclick="currentSlide(1)"></span>
   <span class="dot" onclick="currentSlide(2)"></span>
   <span class="dot" onclick="currentSlide(3)"></span>
  </div>

</div>
<script src = "slideshow.js"></script>
<br><br><hr>
<!----------------------What does Riyadh have to offer section---------------------------->
<br><br>
<div id="Explore">
 <div class="w3-container w3-left"> 
  <h1 class="title w3-opacity">WHAT DOES RIYADH HAVE TO OFFER?</h1> 
  <p class="subTitle">EXPLORE RIYADH THE WAY TOU LIKE</p>

  <div class="container">
   <img src="Photos/RiyadhAdv.jpg" class="image">
    <div class="middle">
     <div class="text">Adventures & Sports</div>
    </div>
  </div>

  <div class="container">
   <img src="Photos/RiyadhMall.png" class="image">
    <div class="middle">
     <div class="text">Shooping</div>
    </div>
  </div>

  <div class="container">
   <img src="Photos/Riyadhculture.jpg" class="image">
    <div class="middle">
     <div class="text">Art & Culture</div>
    </div>
  </div>

 </div>
 <div class="w3-container w3-center">
  <form action="explore.php">
   <button class="w3-margin-top w3-button homebtn w3-padding-large ">Explore more</button>
  </form>
 </div><br><br>
</div>
<hr>
<!----------------------Visiting Riyadh section ---------------------------->
<div class="w3-container"><br><br>
 <h1 class="title w3-opacity w3-margin">DISCOVER THE BEST OF RIYADH</h1>
 <p class="subTitle"> DISCOVER THE BEST OF RIYADH IN A LIMITED TIMEFRAME </p> 

 <a href="#" class="card1">
  <div class="inner">
    <h2 class="title2">About Riyadh</h2>
    <div class="subtitle" href="aboutriyadh.php"> Read More</div>
  </div>
 </a>
   
 <a href="#" class="card2">
  <div class="inner">
    <h2 class="title2">People's Recommendations</h2>
    <div class="subtitle" href="recommendations.html"> Read More</div>
  </div>
 </a> 
</div>    
<br><br><br> <hr>

<!------------------------Review card--------------------------------------->
<div class="w3-container w3-margin-top marginPeoplethoughts">
 <h1 class="title w3-opacity">People's Thoughts</h1> <br>
 <!-- display the review cards that stored in the database -->
 <?php include("review_card.php"); ?>

<!------------------------Form--------------------------------------->
 <div class="w3-container w3-center"><br>
  <button onclick="w3_show()" class="w3-button homebtn w3-padding-large ">Add Review</button>
 </div>
 <br><br><br><br><br><br><br><br>

 <form method="post" class="w3-container w3-card-4 w3-white w3-margin formWidth" id="demo">
  <h2 class="w3-center ReviewFormTitle">Review Form</h2>

  <div class="w3-row w3-section">
   <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-user iconColor"></i></div>
    <div class="w3-rest">
     <input class="w3-input w3-border" name="name" type="text" placeholder="Name">
    </div>
  </div>

  <div class="w3-row w3-section">
   <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-envelope-o iconColor"></i></div>
    <div class="w3-rest">
     <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
    </div>
  </div>

  <div class="w3-row w3-section">
   <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-pencil iconColor"></i></div>
    <div class="w3-rest">
     <input class="w3-input w3-border " name="msg" type="text" placeholder="Message">
    </div>
  </div>
  <input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type="submit" name="button2" value="send"/> 
 </form>

</div>
<br><br><br><br><br><br>
<!--------------------------Footer------------------------------------>
<footer class="footer"> 
  <section class="footer">
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <h3>Ideal Tourism in <span> Riyadh </span></h3>
        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">About Riyadh</a>
          ·
          <a href="#">Explore Riyadh</a>
          ·
          <a href="#">Recommendations</a>
        </p> 
        <p class="footer-company-name">Ideal Tourism in Riyadh &copy; 2022</p>
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
