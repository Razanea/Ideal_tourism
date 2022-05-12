<?php
//require_once 'conncetion.php';

 $servername = "localhost";
 $username = "myuser";
 $password = "myuser12345";
 $dbname = "customers";
 //create connection
 $conn = mysqli_connect($servername, $username, $password ,  $dbname);
 //check conncetion
 if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }

  //fetch last revord from the review_card2 table
 
 $query = "SELECT * FROM review_card2";
  $result = mysqli_query($conn , $query);
   if(!$result || mysqli_num_rows($result) >  0)
    {
      if (is_iterable($result))
       {
        foreach($result as $row) 
        {
        ?>
         <div class="reviewcard_height w3-card-4 w3-margin-left w3-white "> 
         <header class="w3-container w3-center c1">
         <img src="Photos/avatar1.png" class="w3-circle w3-margin-top">
         <h3 class="w3-center w3-cursive"> <?= $row['cutomer_name']; ?></h3><br>
         </header>
         <div class="w3-container "> 
         <p class="reviewSub"> <?= $row['customer_msg']; ?>
         </p><br><br>
         </div>
         </div>
        <?php
        }
      }
    }
  
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

      
?>