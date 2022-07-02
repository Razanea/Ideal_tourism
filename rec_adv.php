<?php
session_start();
 if(!isset($_SESSION['userid'])) // If session is not set then redirect to Login Page
  {
   header("Location:log_in.php");  
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="menuefooter.css" rel="stylesheet">
  <link href="adminstylesheet.css" rel="stylesheet">
  <link href="stylerecommendationpage.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>People Recommendation's</title>
</head>
<body>

<!----------------------Menue---------------------------->
<?php include("menue.php"); ?>
<!----------------------People Recomndations---------------------------->

<div class=" content w3-container w3-content peopleRecom ">    
  <!-- The Grid -->
  <div class="w3-row">
  <h1 class=" title w3-opacity w3-center">People's Recommendations</h1> <br>

<!----------------------Filter---------------------------->
  <div class="w3-display-container w3-content w3-center w3-margin-top">
  <div class="w3-bar w3-round w3-hide-small ExploreNavbar">
    <a href="recommendations.php" class="w3-bar-item w3-button Explorebtn w3-text-white">Show All</a>
    <a href="rec_adv.php" class="w3-bar-item w3-button Explorebtn w3-text-white">Adventures & Sports</a>
    <a href="rec_shopping.php" class="w3-bar-item w3-button Explorebtn w3-text-white">Shopping</a>
    <a href="rec_art.php" class="w3-bar-item w3-button Explorebtn w3-text-white">Art & Culture</a>
  </div>
</div> <br><br><br>

 <!--------- Left Column ---------------->
 <div>
  <?php     
      include("connection.php");
      $query = "SELECT * FROM recommendation WHERE place_type = '  Adventure & sport'";
      $result = mysqli_query($conn , $query);
      if(mysqli_num_rows($result)>0)
    {
      while ($rows = mysqli_fetch_assoc($result)) 
      {
      ?>
       <div class="w3-col m3 spacebetweencards">
       <!------- card ----------->
        <div class="w3-card w3-round w3-white recomendationCard">
         <div class="w3-container">
          <div class="w3-center"> 
           <p>
            <img src="Photos/avatar1.png" class="w3-circle Ravatar" alt="Avatar">
            <h4><?php echo $rows['username']; ?></h4>
           </p>
          </div>
         <hr class="horizontal_line">
         <?php
            $imageURL = 'uploads/'.$rows["rec_img"];
          ?>
          <img src="<?php echo $imageURL; ?>" class="img2"> 
           <div class="w3-center"> 
            <h3><?php echo $rows['place_name']; ?></h3>
           </div>
           <a href ="<?php echo $rows['place_link']; ?>" 
            class = "location w3-small w3-left"><i class="material-icons">location_on</i><?php echo $rows['place_name']; ?></a><br>
           <p><?php echo $rows['place_msg']; ?></p>
        </div>
       </div>
      </div>
        <?php
       }
     }
     else{
     echo '<h4 class=" title w3-opacity w3-center"> No recommendation found</h4> ';
     }
    ?>
  </div>
 </div>
</div><br>
<!----------------------------Footer------------------------>
<footer id="footer"> 
  <section id="footer">
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
  </section> 
</footer>
</body>
</html>