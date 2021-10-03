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
      <li class="nav-item active">
        <a class="nav-link" href="booking.php">BookingPortal <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About </a>
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
<div class="w-50 m-auto">
  <form role="form" action="userinfo2.php" method="post">
    <div class="form-group">
        <label for="c-form-profession">
            <span class="label-text">Available Movies:</span> 
            <span class="contact-error"></span>
        </label>
        <select type="text" name="movie" class="form-control">
            <option value="I want to eat your pancreas">I want to eat your pancreas</option>
            <option value="Avengers:Endgame">Avengers:Endgame</option>
            <option value="Inception">Inception</option>
            <option value="American Pie 2">American Pie 2</option>
            <option value="Netaji Subhas Chandra Bose: The Forgotten Hero">Netaji Subhas Chandra Bose: The Forgotten Hero</option>
            <option value="Pelé: Birth of a Legend">Pelé: Birth of a Legend</option>
        </select>
    </div>
    <div class="form-group">
        <label for="c-form-profession">
            <span class="label-text">Slot:</span> 
            <span class="contact-error"></span>
        </label>
        <select type="text" name="slot" class="form-control">
            <option value="9:00A.M-12:00A.M">9:00A.M-12:00A.M</option>
            <option value="1:00P.M-4:00P.M">1:00P.M-4:00P.M</option>
            <option value="5:00P.M-8:00P.M">5:00P.M-8:00P.M</option>
            <option value="9:00P.M-12:00P.M">9:00P.M-12:00P.M</option>
        </select>
    </div>
    <div class="form-group">
        <label for="c-form-profession">
            <span class="label-text">Ticket Class:</span> 
            <span class="contact-error"></span>
        </label>
        <select type="text" name="ticketclass" class="form-control">
            <option value="₹ 100">₹ 100</option>
            <option value="₹ 200">₹ 200</option>
            <option value="₹ 400">₹ 400</option>
            <option value="₹ 600">₹ 600</option>
        </select>
    </div>
    <div class="form-group">
		  	    <label>Date(dd/mm/yyyy): </label>
		  	    <input type="text" name="date" autocomplete="off" class="form-control">
		  </div>
    <button type="submit" class="btn btn-success">Book</button>
</form>
	
</div>
</div>



   



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</body>
</html>