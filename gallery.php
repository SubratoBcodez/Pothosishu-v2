    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PothoShishu</title>
      <meta name="author" content="SubratoB, Belal Hossain">
      <link rel="stylesheet" href="style/style.css">
      <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style/owl.theme.default.min.css">
      <link rel="stylesheet" href="style/owl.carousel.min.css">
      <link rel="stylesheet" href="style/slide.css">
      <style>

        .gallery{
          margin-top: 80px;
          margin-bottom: 20px;
        }
        .container {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
          grid-gap: 10px;
          grid-auto-flow: dense;
        }
        .container img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: 5px 5px 5px 5px;
        }
        .horizontal {
          grid-column: span 2;
        }
        .vertical {
          grid-row: span 2;
        }
        .big {
          grid-column: span 2;
          grid-row: span 2;
        }
      </style>
    </head>
    <body>


      <section class="ftco-section">

        <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
          <div class="container">
            <a class="navbar-brand" href="/">pothoshishu</a>
            <div class="social-media order-lg-last">
              <p class="mb-0 d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>

              </p>
            </div>;
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav ml-auto mr-md-3">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="project.php" class="nav-link">Projects</a></li>
                <li class="nav-item active"><a href="gallery.php" class="nav-link">Gallary</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </section>

<section class="help_area">
    <div class="container">
      <div class="help_title text-center">
        <span>POTHOSISHU</span>
        <h1>Photo Gallery</h1>
      </div>
    </div> 
        <div class="container">
          <div><a href="images/n1.png"><img src="images/n1.png" /></a></div>
          <div class="vertical"><a href="images/v1.png"><img src="images/v1.png" /></a></div>
          <div class="horizontal"><a href="images/h1.png"><img src="images/h1.png" /></a></div>
          <div><a href="images/n2.png"><img src="images/n2.png" /></a></div>
          <div><a href="images/n3.png"><img src="images/n3.png" /></a></div>
          <div class="big"><a href="images/b1.png"><img src="images/b1.png" /></a></div>
          <div><a href="images/n4.png"><img src="images/n4.png" /></a></div>
          <div class="vertical"><a href="images/v2.png"><img src="images/v2.png" /></a></div>
          <div><a href="images/n5.png"><img src="images/n5.png" /></a></div>
          <div class="horizontal"><a href="images/h2.png"><img src="images/h2.png" /></a></div>
          <div><a href="images/n6.png"><img src="images/n6.png" /></a></div>
          <div class="big"><a href="images/b2.png"><img src="images/b2.png" /></a></div>
          <div><a href="images/n7.png"><img src="images/n7.png" /></a></div>
          <div class="horizontal"><a href="images/h3.png"><img src="images/h3.png" /></a></div>
          <div><a href="images/n8.png"><img src="images/n8.png" /></a></div>
          <div class="big"><a href="images/b3.png"><img src="images/b3.png" /></a></div>
          <div><a href="images/n9.png"><img src="images/n9.png" /></a></div>
          <div class="vertical"><a href="images/v3.png"><img src="images/v3.png" /></a></div>
        </div>
      </section>




      <?php include('foot.php'); ?>

