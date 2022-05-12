<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="menuefooter.css" rel="stylesheet">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<title>Explore</title>
</head>
<body>

<?php

//When the button (fav1) is clicked 
 if(array_key_exists('fav1', $_POST)) {
           fav1();
        }
        elseif (array_key_exists('fav1_2', $_POST)) {
          fav1_2();
        }
        elseif (array_key_exists('fav2_1', $_POST)){
          fav2_1();
        }
        elseif (array_key_exists('fav2_2', $_POST)){
          fav2_2();
        }
         elseif (array_key_exists('fav3_1', $_POST)){
          fav3_1();
        }
        elseif (array_key_exists('fav3_2', $_POST)){
          fav3_2();
        }


//function to store the input data to the database 
  function fav1() 
{
 $id = $_SESSION['userid'];
 include_once ("conncetion.php");
          
 // Performing insert query execution
 // Our table name is fav_place
 $sql = "INSERT INTO fav_place (place_name , id) VALUES ('UNESCO Heritage Site: At-Turaif' , '$id')";

if(mysqli_query($conn, $sql)){
  echo ""; 

}else{
  echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
}
 
//close connection         
mysqli_close($conn);
        
} //end function 

 function fav1_2() 
{
 $id = $_SESSION['userid'];
 include_once ("conncetion.php");
          
 // Performing insert query execution
 // Our table name is fav_place
 $sql = "INSERT INTO fav_place (place_name , id) VALUES ('Al Masmak Fortr' , '$id')";

if(mysqli_query($conn, $sql)){
  echo ""; 

} else{
  echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
}
          
mysqli_close($conn);
        
} //end function 

 function fav2_1() 
{

 include_once ("conncetion.php");
          
 // Performing insert query execution
 // Our table name is fav_place
 $id = $_SESSION['userid'];
 $sql = "INSERT INTO fav_place (place_name , id) VALUES ( 'Al Nakheel Mall' , '$id')";

 if(mysqli_query($conn, $sql)){
  echo ""; 

 } else{
  echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
 }
          
 mysqli_close($conn);
        
} //end function 

 function fav2_2() 
{
 $id = $_SESSION['userid'];
 include_once ("conncetion.php");
          
 // Performing insert query execution
 // Our table name is fav_place
 $sql = "INSERT INTO fav_place (place_name , id) VALUES ('Riyadh shopping mall' , '$id')";

 if(mysqli_query($conn, $sql)){
  echo ""; 

 } else{
  echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
 }
          
 mysqli_close($conn);
        
} //end function 

 function fav3_1() 
{
 $id = $_SESSION['userid'];
 include_once ("conncetion.php");
          
 // Performing insert query execution
 // here our table name is fav_place
 $sql = "INSERT INTO fav_place (place_name , id) VALUES ('On safari in Nofa Wild life park' , '$id')";

 if(mysqli_query($conn, $sql)){
    echo ""; 

  } else{
   echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
 }
          
 mysqli_close($conn);
        
} //end function 

 function fav3_2() 
{
 $id = $_SESSION['userid'];
 include_once ("conncetion.php");
          
 // Performing insert query execution
 // here our table name is fav_place
 $sql = "INSERT INTO fav_place (place_name , id) VALUES ('BLVD Skate Park' , '$id')";

 if(mysqli_query($conn, $sql)){
    echo ""; 

  } else{
     echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
}
          
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

<!--------------------- Header --------------------------->
<header class="w3-display-container w3-content w3-center w3-margin-top ExploreHeader">
  <img class="w3-image" src="Photos/header1.jpg"/>
    <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-black w3-center">
      <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">Explore</h1>
      <h3 class="w3-hide-medium w3-hide-small">RIYADH!</h3>
   </div>
</header><br>

<!--------------------- Navbar----------------------------->
 <div class="w3-display-container w3-content w3-center w3-margin-top">
  <div class="w3-bar w3-round w3-display-bottommiddle w3-hide-small ExploreNavbar">
    <a href="#Adventures & Sports" class="w3-bar-item w3-button Explorebtn w3-text-white ">Adventures & Sports</a>
    <a href="#Shooping" class="w3-bar-item w3-button Explorebtn w3-text-white">Shooping</a>
    <a href="#Art & Culture" class="w3-bar-item w3-button Explorebtn w3-text-white">Art & Culture</a>
  </div>
</div> 

<!------------------ Page content ------------------------->

<!-- (Art & Culture) -->
<div class="w3-content w3-padding-large w3-margin-top w3-border w3-panel " id="Art & Culture"><br> 
  <div class="w3-center "> 
    <h1 class="w3-bold w3-cursive" > Art & Culture</h1>
  </div>

  <!-- Images (Art & Culture) -->
  <div class="w3-row w3-padding-64">

     <div class="w3-col m6 w3-padding-large w3-hide-small">
       <img src="Photos/Riyadhculture.jpg" class="w3-round w3-image w3-opacity-min">
       <img src="Photos/At-Turaif.png" class="w3-round w3-image w3-opacity-min w3-margin-top">
       <img src="Photos/masmak.png" class="w3-round w3-image w3-opacity-min w3-margin-top">
     </div>

  <!-- texts (Art & Culture) -->
     <div class="w3-col m6 w3-padding-large">
       <h4 class="w3-center w3-bold w3-cursive">UNESCO Heritage Site: At-Turaif</h4>
       <p class="w3-large"> Diriyah’s historical center is the UNESCO-listed site of At-Turaif, which was founded in the 15th century. It is the original seat of power of Saudi Arabia’s Al Saud family and contains ruins of mud-brick houses connected by narrow alleyways. The site has not been open to the public since it gained its UNESCO designation in 2010. The redevelopment of the area will enable people to walk through the ruins as well as the myriad museums and other spaces found inside.</p> 
       <div class="w3-container w3-center">       
        <form method="post" >
         <input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type="submit" name="fav1" value="Add to your favorite"/> 
        </form>
       </div><hr>
     </div> 
 
    <div class="w3-col m6 w3-padding-large">
      <h4 class="w3-center w3-bold w3-cursive">Al-Masmak</h4>
      <p class="w3-large"> Al Masmak Fortress
        Built in 1865 and superbly preserved, Al Masmak Fortress is a vast clay and mud-brick citadel that’s a favorite among tourists wanting to step back in time and explore Saudi’s roots. In 1902, King Abdulaziz captured the fortress and took control of Riyadh (his ancestral home) after having lived in Kuwait. From this fortress, Abdulaziz Al Saud conquered and united the different kingdoms and provinces that make up the Saudi nation as we know it today.
        Another must-visit location is the Saudi National Museum, which has more than 3,700 antiquities on display, documenting the grand history of Arabia over millennia. </p>
      <div class="w3-container w3-center">
       <form method="post" >
        <input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type="submit" name="fav1_2" value="Add to your favorite"/> 
       </form>
      </div>
    </div>
    <a href="recommendations.php" class="w3-opacity linkPlace"> See more related places</a>
  </div> 
</div> 

<!-- (Shooping) -->
<div class="w3-content w3-padding-large w3-margin-top w3-border w3-panel " id="Shooping"> <br> 
  <div class="w3-center "> 
    <h1 class="w3-bold w3-cursive" >Shoooping</h1>
  </div>

  <!-- Images (Shooping) -->
  <div class="w3-row w3-padding-64">
     <div class="w3-col m6 w3-padding-large w3-hide-small"><br><br>
       <img src="Photos/RiyadhMall.png" class="w3-round w3-image w3-opacity-min"> 
       <img src="Photos/malls.jpg" class="w3-round w3-image w3-opacity-min w3-margin-top">
       <img src="Photos/nakheel-mall-riyadh.jpg" class="w3-round w3-image w3-opacity-min w3-margin-top">
     </div>
  <!-- texts (shooping) -->
    <div class="w3-col m6 w3-padding-large">
       <h4 class="w3-center w3-bold w3-cursive">Al Nakheel Mall</h4>
       <p class="w3-large"> The most innovative design and the finest service have made Al Nakheel Mall an ideal shopping place in the city. Built over a vast area, the mall experiences a footfall of more than 200,000 people per week. With international brands like LC Waikiki, Lefties, ZARA, Kipling, Nespresso, Karaca, Bershka, and Aldo, this is the biggest mall in Riyadh that attracts both locals and tourists for discovering the trending fashion.
       Serving the visitors, excellent service and features, Al Nakheel Mall is home to entertainment and fun. Theme parks like Billy Beaez and Sparquez are the two most interesting places to spend a day with family. These theme parks will offer everything fun and thrill to all, irrespective of age. There are dining options. From Subway to McDonald's, there is every dining firm you need to get a bite at.</p> 
       <div class="w3-container w3-center">
        <form method="post" >
          <input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type="submit" name="fav2_1" value="Add to your favorite"/> 
         <!-- try db -->
        </form>
       </div><hr>
    </div> 

    <div class="w3-col m6 w3-padding-large">
      <h4 class="w3-center w3-bold w3-cursive">Riyadh shopping mall</h4>
      <p class="w3-large"> The most iconic Riyadh shopping mall, Kingdom Center is the best shoppers' destination, where you can discover diversity in brands and entertainment. The mall houses some of the best international retailers and utmost luxury with premium cafes and restaurants, luxury hotels, and more. This three-story retail center is spreading over an area of 41,000 m2 as a state-of-the-art where you can experience every comfort and style. The traditionally built design and the use of modern technology have marked it as one of the famous attractions in Riyadh where you cannot just shop but discover entertainment like never before. </p>
     <div class="w3-container w3-center">
      <form method="post" >
        <input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type="submit" name="fav2_2" value="Add to your favorite"/> 
      </form>
     </div>
    </div>
     <a href="recommendations.php" class="w3-opacity linkPlace"> See more related places</a>
 </div> 
</div> 


<!-- (Adventures & Sports) -->
<div class="w3-content w3-padding-large w3-margin-top w3-border w3-panel " id="Adventures & Sports"><br> 
  <div class="w3-center "> 
    <h1 class="w3-bold w3-cursive" >Adventures & Sports</h1>
  </div>

  <!-- Images (Adventures & Sports) -->
  <div class="w3-row w3-padding-64">
     <div class="w3-col m6 w3-padding-large w3-hide-small"><br><br>
       <img src="Photos/RiyadhAdv.jpg" class="w3-round w3-image w3-opacity-min"> 
       <img src="Photos/r2.jpg" class="w3-round w3-image w3-opacity-min w3-margin-top">
       <img src="Photos/skate.jpeg" class="w3-round w3-image w3-opacity-min w3-margin-top">
     </div>

     <div class="w3-col m6 w3-padding-large">
       <h4 class="w3-center w3-bold w3-cursive">On safari in Nofa Wild life park </h4>
       <p class="w3-large"> Nofa feels a world away from Riyadh’s frenetic traffic and fast-paced streets. Here, the peach-coloured plains are punctuated by gambolling giraffes and grazing white oryx, and ostriches pick their way across the dunes. The best way to see the resort’s more than 700 animals is with a guided safari drive, where an open-topped vehicle will bring you mesmerizingly close to wildebeest, impala, wallowing pygmy hippos and a roaming assortment of other wildlife. The resort fuses tourism with wildlife conservation – eight giraffes have been born at the park – and is also home to several endangered and threatened species. Look out for the graceful Grévy's zebra at shaded grazing stations, or wandering the reserve.</p> 
       <div class="w3-container w3-center">
        <form method="post" >
          <input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type="submit" name="fav3_1" value="Add to your favorite"/> 
        </form>
       </div><hr>
     </div> 

    <div class="w3-col m6 w3-padding-large">
      <h4 class="w3-center w3-bold w3-cursive">BLVD Skate Park</h4>
      <p class="w3-large"> Saudi Skate Parks has opened BLVD Skate Park. BLVD Skate Park offer skateboards, in-line and scooters available for rental right now at the park or you can bring your own. Then you enter the park and depending upon your level, you’re paired up with an instructor immediately when you get through the door who’ll make sure that you are padded up correctly and that you have the right safety gear.</p>
     <div class="w3-container w3-center">
       <form method="post" >
        <input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type="submit" name="fav3_2" value="Add to your favorite"/> 
       </form>
     </div>
   </div>
   <a href="recommendations.php" class="w3-opacity linkPlace"> See more related places</a>
 </div> 
</div> 
<!----------------------------Footer------------------------>
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

