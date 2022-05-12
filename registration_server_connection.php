<?php

    $server="localhost";
    $username="root";
    $password="";
    $database_name="customers";
    
    $conn = mysqli_connect($server, $username, $password, $database_name);
     //check conncetion
     if(! $conn )
       {
         die('Could not connect: ' . mysql_error());
       }
       
    $errors = array();

  if (isset($_POST['SignIn_Button'])) {
      // receive all input values from the register.php form
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
     
      //fistly check in database that a user does not already exist with the same username and/or email.
      $get_all = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
      $result = mysqli_query($conn, $get_all);
      $user = mysqli_fetch_assoc($result);

      if ($password != $confirm_password) { //confirm matching password
        array_push($errors, "Failed to Match");
        echo '<script language="javascript">';
          echo 'alert("Your password does not match with the confirm password <br>Please try again)';
          echo '</script>';
    }

      if ($user)
     { // if user exists
      if ($user['username'] === $username) {
          array_push($errors, "Username is already existed");
          echo '<script language="javascript">';
            echo 'alert("Username is already existed")';
            echo '</script>';
      }

      if ($user['email'] === $email) { //if email exists
          array_push($errors, "email is already existed");
          echo '<script language="javascript">';
            echo 'alert("email is already existed")';
            echo '</script>';
      }
    }

      // Finally, register user if no error
      if (count($errors) == 0) {

          $register = "INSERT INTO users (username, email, password)
                  VALUES('$username', '$email', '$password')";
          mysqli_query($conn, $register);
          
          //session start
          $query = "SELECT id FROM users WHERE username='$username' AND password='$password'";
          $results = mysqli_query($conn, $query);
          $rows = mysqli_fetch_assoc($results);

          session_start();
         $_SESSION["userid"] = $rows['id'];
         header('location:home.php');
      
       }
    }
?>