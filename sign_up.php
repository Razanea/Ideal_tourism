<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="sign_up.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <title>Sign up</title>
    </head>
<body>
<div class = "signup_form">
<form method="post" action="registration_server_connection.php" class = "w3-border">
  <div class="container">
    <div class="w3-container w3-center">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
  </div>

    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="confirm_password" required>
    
    <p>By creating an account you agree to our <a href="#"  class="link_color">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="SignIn_Button">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>