<?php
require('db.php');
include("auth_session.php");
?>




<!DOCTYPE html>
<html>

<head>
	<title></title>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="CSS/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Moviesflix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="movies.php">Movies</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">AboutUs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">ContactUs</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
</nav>


<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="video/trimtrim.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Welcome to awesomeness</h1>
        <p class="lead mb-0">with Moviesflix</p>
      </div>
    </div>
  </div>
</header>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>Watching a movie is not only entertaining but at times, it even leads to a life changing experience. Whether you wish to woo that girl next door or to get over your ex, to invoking the zeal to achieve something big during those struggling days or ways of cracking a brilliant business plan, movies do have the power to transform you from reel to the real</p>
        <p>"Maintain a cordial relation with your customers and try to connect with them on a personal level. Address their needs and demands. Let a feedback mechanism drive your marketing approach."</p>
        <p>This is what we believe on and this is the founding principles behind our organization.</p>
        <p class="mb-0">
          To know more about Us <a href="about.php">head here....</a>
        </p>
      </div>
    </div>
  </div>
</section>

<footer>
        <p class="p-5 bg-dark text-white  text-center">	@TeamAlphaProductions</p>
 </footer>


</body>
</html>