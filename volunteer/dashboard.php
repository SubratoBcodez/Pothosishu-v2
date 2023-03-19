<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
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
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
