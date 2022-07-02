<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="nav-color">
 <div class="w3-bar"> 
  <div class="w3-bar-item w3-left logo">
   <h3>Ideal Tourism in <span> Riyadh </span></h3> 
  </div>
  <div class="link-1"><a href="admin.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-user w3-right" ></i></a>
  </div>
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

</body>
</html>