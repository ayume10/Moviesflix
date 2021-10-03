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
      <li class="nav-item">
        <a class="nav-link" href="homepage.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="movies.php">Movies </a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="about.php">AboutUs <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">ContactUs </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="py-5">
<div class="container-fluid" >
           <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                      <img src="images/ani.jpg" width="400" height="400">
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                      <h3>Animesh Barun</h3>
                      <p>Hello guys! I am Animesh.Currently I am in 2nd year of my Btech program in Computer Science major in SRMIST Kattankulathur.</p>
                      <p>I have developed the backend of this website and also worked towards developing the frontend.Along with this I am also the Co-founder of our organisation TeamAlpha. Moviesflix is a very big and ambitious project that we are currently working on.</p>

                
                      <a href="contactus.php" class="btn btn-success"> Reach us here at...</a>

                 </div>
           </div>       
    </div>
</div>

<div class="py-5">
<div class="container-fluid" >
           <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                      <img src="images/ayush.jpg" width="400" height="400">
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                      <h3>Ayush Mehta</h3>
                      <p>Hi I am Ayush and I am a co-founder of this Team Alpha.I am in 2nd year of my Btech program in Computer Science major in SRMIST Kattankulathur.
                      I have a major interest in frontend and a little interest in backend and yes my major contribution is towards frontend only. This is a very helpful and user friendly website for the users all over the country

</p>

                
                      <a href="contactus.php" class="btn btn-success"> Reach us here at...</a>

                 </div>
           </div>       
    </div>
</div>

<div class="py-5">
<div class="container-fluid" >
           <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                      <img src="images/kr.jpg" width="400" height="400">
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                      <h3>Saikiran Reddy</h3>
                      <p>Hi and Hello to everyone ! I am kiran.Currently I am in 2nd year of my Btech program in Computer Science major in SRMIST Kattankulathur.

                      I have worked in developing both backend of this website and also worked towards frontend.Along with this I am also the Co-founder of our organisation TeamAlpha. Moviesflix is a very big entertainment site.this is the project that we are currently working on.</p>

                
                      <a href="contactus.php" class="btn btn-success"> Reach us here at...</a>

                 </div>
           </div>       
    </div>
</div>




   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<footer>
        <p class="p-5 bg-dark text-white text-center">  @TeamAlphaProductions</p>
 </footer>
</html>


