<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="sign_up.css" rel="stylesheet">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <title>Log in</title>
    </head>
<body>
<div class = "signin_form">
<form method="post" action="log_in_server.php" class = "w3-border">

  <div class="container">
    <div class=" w3-container w3-center ">
    <h1>Log in form</h1>
    <h4>Welcome back!</h4>
    <hr>
  </div>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
    <p>Don't you have an account? <a href="sign_up.php" class="link_color" >Click here</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="login_button">Log in</button>
    </div>
  </div>
</form>

</body>
</html>