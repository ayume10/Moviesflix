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
        <a class="nav-link" href="homepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="movies.php">Movies</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">AboutUs</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactus.php">ContactUs <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

    </ul>
    
  </div>
</nav>

<section>
<div class="py-5">
<div class="w-50 m-auto">
	<form action="userinfo.php" method="post">
		  <div class="form-group">
		  	    <label>Username </label>
		  	    <input type="text" name="user" autocomplete="off" class="form-control">
		  </div>
		  <div class="form-group">
		  	    <label>Email Id</label>
		  	    <input type="text" name="email" autocomplete="off" class="form-control">
		  </div>
		  <div class="form-group">
		  	    <label>Mobile</label>
		  	    <input type="text" name="mobile" autocomplete="off" class="form-control">
		  </div>
		   <div class="form-group">
		  	    <label>Comments</label>
		  	    <textarea class="form-control" name="comment">
		  	    	
		  	    </textarea>
		  </div>
		  <button type="submit" class="btn btn-success">Submit</button>
  </form>
	
</div>
</div>



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</section>

<footer>
	<p class="p-5 bg-dark text-white  text-center">@TeamAlphaproductions</p>
</footer>
 
</html>