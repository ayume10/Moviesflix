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
      <li class="nav-item active">
        <a class="nav-link" href="movies.php">Movies <span class="sr-only">(current)</span></a>
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
  </div>
</nav>


 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pic2.png" alt="Los Angeles" width="1100" height="500">
       <div class="carousel-caption">
            <h2>Life moves pretty fast. If you don’t stop and look around once in a while, you could miss it.</h2>
            
       </div>
     </div>
    <div class="carousel-item">
      <img src="images/img1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
            <h2>Our lives are defined by opportunities, even the once we miss.
            </h2>
       </div>
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
            <h2>Why are you trying so hard to fit in, when you were born to stand out.</h2>
       </div>
     </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Coming Soon...</h2>
	</div>
    <div class="container-fluid">
           <div class="row">
    	         <div class="col-lg-6 col-md-6 col-12">
                      <img src="images/pic2.png" class="img-fluid">
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                      <h3>Horizon Forbidden West</h3>
                      <p>The land is dying. Vicious storms and an unstoppable blight ravage the scattered remnants of humanity, while fearsome new machines prowl their borders. Life on Earth is hurtling towards another extinction, and no one knows why.

                      It's up to Aloy to uncover the secrets behind these threats and restore order and balance to the world. Along the way, she must reunite with old friends, forge alliances with warring new factions and unravel the legacy of the ancient past – all the while trying to stay one step ahead of a seemingly undefeatable new enemy.</p>

                
                      <a href="https://www.youtube.com/watch?v=Lq594XmpPBg" class="btn btn-success"> check out the trailer here...</a>

                 </div>
           </div>       
    </div>
    <div class="py-5">
    <div class="container-fluid">
           <div class="row">
                 <div class="col-lg-6 col-md-6 col-12">
                      <h3>The Last of Us</h3>
                      <p>Five years after their dangerous journey across the post-pandemic United States, Ellie and Joel have settled down in Jackson, Wyoming. Living amongst a thriving community of survivors has allowed them peace and stability, despite the constant threat of the infected and other, more desperate survivors.

                      When a violent event disrupts that peace, Ellie embarks on a relentless journey to carry out justice and find closure. As she hunts those responsible one by one, she is confronted with the devastating physical and emotional repercussions of her actions.</p>
                      
                
                      <a href="https://www.youtube.com/watch?v=1M5pCg9BB0s" class="btn btn-success"> check out the trailer here...</a>

                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                      <img src="images/Tlou.jpg" class="img-fluid">
                 </div>
           </div>       
    </div>
    </div>
    </div>
    <div class="container-fluid">
           <div class="row">
    	         <div class="col-lg-6 col-md-6 col-12">
                      <img src="images/venom.jpg" class="img-fluid">
                 </div>
                 <div class="col-lg-6 col-md-6 col-12">
                      <h3>Venom: Let There Be Carnage</h3>
                      <p>Venom: Let There Be Carnage is an upcoming American superhero film based on the Marvel Comics character Venom, produced by Columbia Pictures in association with Marvel and Tencent Pictures. Distributed by Sony Pictures Releasing, it is intended to be the second film in the Sony Pictures Universe of Marvel Characters and the sequel to Venom (2018). The film is directed by Andy Serkis from a screenplay by Kelly Marcel, and stars Tom Hardy as Eddie Brock / Venom alongside Woody Harrelson, Michelle Williams, Reid Scott, and Naomie Harris.</p>

                
                      <a href="https://www.youtube.com/watch?v=PR2MOy5W1oY" class="btn btn-success"> check out the trailer here...</a>

                 </div>
           </div>       
    </div>
</section>

 

 <section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Popular Among the Folks...</h2>
	</div>
    
    <div class="container-fluid">
    	 <div class="row">
    	 	   <div class="col-lg-4 col-lg-4 col-12">
    	 	   <div class="card">
        <img class="card-img-top" src="images/iwteyp.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">I want to eat your pancreas</h4>
            <p class="card-text">Haruki comes across a book in a hospital waiting room. He soon discovers that it is a diary kept by his very popular classmate, Sakura, who reveals to him that she is secretly suffering from a fatal pancreatic illness. Despite this, Sakura intends to maintain a normal school life, and thus is drawn to Haruki due to his relatively unfazed reaction to her condition. They begin to spend time together and become friends....</p>
            <a href="booking.php" class="btn btn-primary">BookNow</a>
       </div>
</div>
    	 	   </div>

    	 	   <div class="col-lg-4 col-lg-4 col-12">
    	 	   <div class="card">
        <img class="card-img-top" src="images/endgame.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Avengers:Endgame</h4>
            <div class="py-2">
            <p class="card-text">In 2018, twenty-three days after Thanos killed half of all life in the universe, Carol Danvers rescues Tony Stark and Nebula from deep space and they reunite with the remaining Avengers—Bruce Banner, Steve Rogers, Thor, Natasha Romanoff, and James Rhodes—and Rocket on Earth. .....</p></div>
            <a href="booking.php" class="btn btn-primary">BookNow</a>
       </div>
</div>
    	 	   </div>
    	 	   <div class="col-lg-4 col-lg-4 col-12">
    	 	   <div class="card">
        <img class="card-img-top" src="images/inc.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Inception</h4>
            <p class="card-text">Dominick "Dom" Cobb and Arthur are "extractors"; they perform corporate espionage using experimental military technology to infiltrate their targets' subconscious and extract information through a shared dream world. Their latest target, Saito, reveals he arranged their mission to test Cobb for a seemingly impossible job: implanting an idea in a person's subconscious, or "inception". Saito wants Cobb to convince Robert, the son of Saito's competitor Maurice Fischer, to dissolve his father's company......</p>
            <a href="booking.php" class="btn btn-primary">BookNow</a>
       </div>
</div>
    	 	   </div>
    	 </div>
    </div>
 </section>
 <section class="my-5">
	<div class="py-2">
	</div>
    
    <div class="container-fluid">
    	 <div class="row">
    	 	   <div class="col-lg-4 col-lg-4 col-12">
    	 	   <div class="card">
        <img class="card-img-top" src="images/amp2.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">American Pie 2</h4>
            <p class="card-text">
            Home for the summer after college, Jim Levenstein, Kevin Meyers, Chris "Oz" Ostreicher, and Paul Finch attend Steve Stifler's party until the police shut it down. Kevin is inspired by his brother to rent a Lake Michigan beach house and throw a massive party to close out the summer. The group obtains jobs painting houses in order to afford the rent. Jim receives a call from former love interest Nadia who informs him that she plans to visit him. To gain sexual experience, Jim seeks out his prom date, Michelle, who agrees to help him after he is mistaken for a mentally challenged trombone prodigy and makes a fool of himself in front of a band camp concert audience.....</p>
            <a href="booking.php" class="btn btn-primary">BookNow</a>
       </div>
</div>
    	 	   </div>

    	 	   <div class="col-lg-4 col-lg-4 col-12">
    	 	   <div class="card">
        <img class="card-img-top" src="images/btfh.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Netaji Subhas Chandra Bose: The Forgotten Hero</h4>
            <div class="py-2">
            <p class="card-text">Set up in British Raj, after a political disagreement with Mahatma Gandhi, Bose's arrest and subsequent release sets the scene for his escape to Germany, via Afghanistan and the Soviet Union. A few days before his escape, he sought solitude and, on this pretext, avoided meeting British guards and grew a beard. On the night of his escape, he dresses himself as a Pathan to avoid being identified. Bose escapes from under British surveillance at his house in Calcutta on 16 January 1941, accompanied by his nephew Sisir K. Bose in a car. .....</p></div>
            <a href="booking.php" class="btn btn-primary">BookNow</a>
       </div>
</div>
    	 	   </div>
    	 	   <div class="col-lg-4 col-lg-4 col-12">
    	 	   <div class="card">
        <img class="card-img-top" src="images/pele.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Pelé: Birth of a Legend</h4>
            <p class="card-text">Pelé: Birth of a Legend is an American biographical film about the early life of Brazilian footballer Pelé and his journey with Brazil to win the 1958 FIFA World Cup. The film is directed and written by Jeff Zimbalist and Michael Zimbalist.

            The film stars Kevin de Paula, Vincent D'Onofrio, Rodrigo Santoro, Diego Boneta, with Colm Meaney, and a cameo of Pelé himself. The film is centered on the relationship between the character Pelé and his father.

            The principal photography started in Rio de Janeiro on September 2013, and the filming lasted until late 2014. The film was released to negative critical response, with film critics pointing out flaws in the narrative, criticising the lack of depth.......</p>
            <a href="booking.php" class="btn btn-primary">BookNow</a>
       </div>
</div>
    	 	   </div>
    	 </div>
    </div>
 </section>

 <footer>
        <p class="p-5 bg-dark text-white text-center">	@TeamAlphaProductions</p>
 </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>