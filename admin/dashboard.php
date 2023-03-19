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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style/owl.theme.default.min.css">
    <link rel="stylesheet" href="/style/owl.carousel.min.css">
    <link rel="stylesheet" href="/style/slide.css">
    <link rel="stylesheet" href="/style/back.css">

    <style>
      a{ margin: 10px;
      };
    </style>
</head>
<body>
    <div class="form">
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in Admin dashboard page.</p>
        
        
        <p><a href="logout.php">Logout</a></p>
        <br>
        <a href="https://class.techzbd.xyz/p.pptx" class="btn theme-btn-s2">Download Presentation Slide</a>
      	<a href="https://class.techzbd.xyz/pothosishu-v2.zip" class="btn theme-btn-s2">Download Project Source Code</a>
      	<a href="https://class.techzbd.xyz/pothosishu_report.pdf" class="btn theme-btn-s2">Download Project Report</a>
    </div>
</body>
</html>
