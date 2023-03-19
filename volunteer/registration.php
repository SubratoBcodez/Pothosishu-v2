<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PothoShishu</title>
    <meta name="author" content="SubratoB, Belal Hossain">
    <link rel="stylesheet" href="/style/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style/owl.theme.default.min.css">
    <link rel="stylesheet" href="/style/owl.carousel.min.css">
    <link rel="stylesheet" href="/style/slide.css">
    <link rel="stylesheet" href="/style/back.css">
    <style>
    </style>
</head>
<body>
    <?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($con, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $fname    = stripslashes($_REQUEST['fname']);
            $fname    = mysqli_real_escape_string($con, $fname);
            $lname    = stripslashes($_REQUEST['lname']);
            $lname    = mysqli_real_escape_string($con, $lname);
            $g    = stripslashes($_REQUEST['g']);
            $g    = mysqli_real_escape_string($con, $g);
            $create_datetime = date("Y-m-d H:i:s");
            $query    = "INSERT into `volunteer` (username, password, email, fname, lname, g, create_datetime)
            VALUES ('$username', '" . md5($password) . "', '$email','$fname','$lname','$g', '$create_datetime')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
              </div>";
          } else {
            echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
          </div>";
      }
  } else {
  ?>
  <form class="form" action="" method="post">
    <h1 class="login-title">Registration</h1>
    <input type="text" class="login-input" name="username" placeholder="Username" required />
    <input type="text" class="login-input" name="email" placeholder="Email Adress">
    <input type="password" class="login-input" name="password" placeholder="Password">
    <input type="text" class="login-input" name="fname" placeholder="First Name" required />
    <input type="text" class="login-input" name="lname" placeholder="Last Name" required />
    <br>
    <input type="radio" name="g" value="m" level="Male"/> Male 
    <input type="radio" name="g" value="f" level="Female"/> Female
    <input type="submit" name="submit" value="Register" class="login-button">
    <p class="link">Already have an account? <a href="login.php">Login here</a></p>
</form>
<?php
}
?>
</body>
</html>
