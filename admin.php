<?php
session_start();
$id = $_SESSION['userid'];
$session_id = session_id();
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
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Admin</title>
</head>
<body>

<?php

include("connection.php");

if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $username =  $_REQUEST['name'];
  $place_name =  $_REQUEST['place_name'];
  $place_link =  $_REQUEST['place_link'];
  $place_type =  $_REQUEST['place_type'];
  $place_discription =  $_REQUEST['msg'];


  $target_dir = "D:/xampp/htdocs/CS381_project/Uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){       
        $id = $_SESSION['userid'];
         // Insert record
        $sql = "INSERT INTO recommendation (username, place_name ,place_link ,  place_type ,  place_msg , rec_img , id) VALUES ('$username' , '$place_name' , '$place_link', '  $place_type', '$place_discription' , '$name' , '$id' ) "; 

      if(mysqli_query($conn, $sql)){
           ""; //do nothing
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
 // Close connection
   mysqli_close($conn);
        
} //end function 

}
}
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

<!---------- Page Container ------------------------------>
<div class="w3-container w3-content AdminPageContent">    
  <!-- The Grid -->
  <div class="w3-row">

    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center w3-opacity left">My Profile</h4>
         <p class="w3-center">
         <img class = "avatar" src = "Photos/avatar1.png"></p>
         <?php   
             include("connection.php");
             $query = "SELECT * FROM users where id = $id";
             $result = mysqli_query($conn , $query);
               if(!$result || mysqli_num_rows($result) >  0)
         {
           if (is_iterable($result))
            {
             foreach($result as $rows) 
             {
             ?>
                <p><i class="fa fa-group fa-fw w3-margin-right w3-text-theme"></i> <?php echo $rows['username']; ?> </p>
                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i> <?php echo $rows['email']; ?> </p>
                <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo $rows['city']; ?> </p>
                <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $rows['birth_date']; ?> </p>
                <form action="edit_profile.php">
                 <input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type='submit' value='Edit your profile' />
               </form>
         </div>
      </div>
       <?php
            }
          }
        }
      ?>
    </div>
  
<!----------------------------- Middle Column ---------------------------------------->
  <div class="w3-col m7 w3-margin ">
<!----------------------------------fav list ------------------------------->
     <div class="w3-row-padding">
      <div class="w3-container w3-col m12">
       <h3 class="w3-opacity"> Your favorite place saved here!</h3> 
        <div class="table1 w3-card w3-round w3-white">
          <div class="w3-container w3-padding">
            <?php
             $id = $_SESSION['userid'];
             include_once ("connection.php");
             $query = "SELECT * FROM fav_place where id = '$id' ";
             $result = mysqli_query($conn , $query);
             ?>

            <table class="w3-table w3-bordered ">
             <tr>
              <th>Place name</th>
              <th>saved at</th>
             </tr>
             <?php
              while ($rows = mysqli_fetch_assoc($result)) 
              {
             ?>
              <tr>
                <td><?php echo $rows['place_name']; ?> </td>
                <td><?php echo date("Y/m/d") ?> </td>
              </tr>
             <?php
              }
             ?>
          </table><br>
        </div>       
      </div>
    </div>
  </div><br>

<!----------------------Recommendations---------------------------->
   <div class="w3-col m12">
   <h3 class="w3-container w3-opacity "> Your previous recommendation!</h3> 
    <?php
     $id = $_SESSION['userid'];
     $query = "SELECT * FROM recommendation where id = $id ";
     $result = mysqli_query($conn , $query);
     if(!$result || mysqli_num_rows($result) >  0)
     {
      if (is_iterable($result))
       {
        foreach($result as $rows) 
        {
        ?>
          <div class="recommendation_section">
           <div class="w3-row-padding">
             <div class="w3-col m12">
               <div class="w3-card w3-round w3-white">
                 <div class="w3-container w3-padding ">  
                    <img class = "avatar_rec" src = "Photos/avatar1.png">
                    <h3 id = "username"> <?php echo $rows['username']; ?></h3> <br>
                    <a href = "<?php echo $rows['place_link']; ?>" class = " w3-left location"><i class="material-icons">location_on</i><?php echo $rows['place_name']; ?></a> <br>
                    <hr class = "horizontal_line">
                    <div class="w3-container w3-center w3-opacity">
                      <p><?php echo $rows['place_msg']; ?></p>
                      <div class="w3-content slideRec">
                       <?php
                       $imageURL = 'uploads/'.$rows["rec_img"];
                       ?>
                       <img src="<?php echo $imageURL; ?>" class="mySlides_rec "><br><br>
                      </div>
                      <a href="recommendations.php" class="w3-opacity linkPlace"> Veiw as a page visitor</a> 
                    </div>
                  </div>
                </div> 
              </div> 
           </div>
         </div>
       <?php
        }
       }
     }
   ?>
    <script src = "showhide.js"></script>
    <div class="w3-container w3-center ">
     <button  class=" w3-button w3-padding-large homebtn " onclick="w3_show()" >Add Recommendation</button>
    </div>
  </div>
 </div><br><br><br><br><br><br><br><br><br><br><br>

<!------------------------Form--------------------------------------->
<div class="w3-col m12">
<form method="post" class="w3-container w3-card-4 w3-white w3-margin formWidthRecomendation " enctype='multipart/form-data' id="demo">

<h2 class="w3-center ReviewFormTitle">Recommendation Form</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-user iconColor"></i></div>
  <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" placeholder="Username">
  </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-pencil iconColor"></i></div>
  <div class="w3-rest">
      <input class="w3-input w3-border " name="place_name" type="text" placeholder="place name">
  </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-location-arrow iconColor"></i></div>
  <div class="w3-rest">
      <input class="w3-input w3-border " name="place_link" type="text" placeholder="place link">
  </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-comment-o iconColor"></i></div>
  <div class="w3-rest">
      <input class="w3-input w3-border " name="msg" type="text" placeholder="Recomendation message">
  </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-building-o iconColor"></i></div>
  <div class="w3-rest">
       <select class="w3-input w3-border " name="place_type">
         <option>places</option>
         <option>Shooping</option>
         <option>Adventure & sport</option>
         <option>Art & Culture</option>
         </select>
  </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col FormiconStyle"><i class="w3-xxlarge fa fa-photo iconColor"></i></div>
  <div class="w3-rest">
      <input class="w3-input w3-border" type='file' name='file'/>
  </div>
</div><br>

<input class="w3-button homebtn w3-block w3-section FormBtnColor w3-ripple w3-padding w3-text-white w3-padding-large" type='submit' value='Send' name='but_upload'/>

</form>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
  
<!--------------------------Footer------------------------------------>

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