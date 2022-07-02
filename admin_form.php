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

<?php include("menue.php"); ?>

<!-------------------Page contents ---------------------->

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
</body>
</html>