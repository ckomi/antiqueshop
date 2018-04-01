<?php include('cform.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Anteique Stojilovic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/products/products.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="antique.html">Antiques</a></li>
            <li><a href="#">Cart</a></li>
            <li class="active"><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="iframe-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d707.7935177764334!2d20.476925167934002!3d44.7976410206837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d44.7975506!2d20.4771143!5e0!3m2!1sen!2sca!4v1522344175765" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <form class="contact-form" mailto="vukovicmiomir@yahoo.com" method="post">
    <div class="container">
      <div class="row">
        <h2>Contact</h2>
        <p>Ask what you want to know</p>
        <div class="col-lg-12 col-md-6">
          <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" aria-describedby="sizaing-addon1" placeholder="Name" name="name">
          </div>
          <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control" aria-describedby="sizaing-addon1" placeholder="E-mail" name="email">
          </div>
          <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-box"></i></span>
            <input type="text" class="form-control" aria-describedby="sizaing-addon1" placeholder="Subject" name="subject">
          </div>
          <div class="input-group">
            <textarea name="" id="" cols="190" rows="4" class="form-control" placeholder="Type message..." name="message"></textarea>
          </div>
          <button class="btn btn-lg" type="submit" value="submit">SEND</button>
        </div>
      </div>
    </div>
  </form>
  <footer>
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-md-4">
          <h5>CONTACT</h5>
          <hr class="light">
          <p>Makenzijeva 43, Beograd</p>
          <p>antique@gmail.com</p>
          <p>063 123 1234</p>
        </div>
        <div class="col-md-4">
          <h5>ALL RIGHTS RESERVED</h5>
          <hr class="light">
          <h4>&copyAntique Stojilovic</h4>
        </div>
        <div class="col-md-4">
          <h5>HOURS</h5>
          <hr class="light">
          <p>Mon-Fri: 9h-13h 16h-19h</p>
          <p>Sat-Sun: 9h-14h</p>
        </div>
      </div>
    </div>
  </footer>
</html>
