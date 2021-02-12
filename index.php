<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RottenPotatoes</title>
    <link rel="stylesheet" href="main.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
	.videogame_slides{
		display: none;
	}
	img{
		vertical-align: middle;
	}
	.image-slideshow-container {
		max-width: 1000px;
		position: relative;
		margin: auto;
	}
	.dots {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbb;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
	}
	.active{
		background-color: #717171;
	}
  </style>
  </head>



  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
	<?php
	include 'fullnavbar.php';
        ?>
    <!----end of Navigation Bar-->
    <!----start of full back background-->
    <div class="bg"></div>
    <!----end of full back background-->
   
   <!----------Video game image slideshow (automatic)------------>
    <div class="image-slideshow-container">

	<div class="videogame_slides">
	    <a href="/Playstation_games/CODBlackOps.php">
		<img src="/images/image_slideshow/CODBO1_image_slider.jpg" style="width:100%; height: 375px;" alt="Call of Duty: Black Ops">
	    </a>
        </div>

	<div class="videogame_slides">

	    <a href="Xbox_games/Forza7.php">
		<img src="/images/image_slideshow/forza-7-_image_slider.jpg" style="width:100%; height: 375px;" alt="Forza 7 Motorsport">
	    </a>
        </div>

	<div class="videogame_slides">
		<a href="/Playstation_games/BatmanArkCity.php">
			<img src="/images/image_slideshow/Batman_Arkham_City_image_slider.jpg" style="width: 100%; height: 375px;" alt="Batman Arkham City">
		</a>
	</div>

	<div class="videogame_slides">
		<a href="/PC_games/RedDeadRedemp2.php">
			<img src="/images/image_slideshow/RedDeadRedemption2_image_slider.jpg" style="width: 100%; height: 375px;" alt="Red Dead Rdemption 2">
		</a>
	</div>

	<div class="videogame_slides">
		<a href="/PC_games/TheWitcher3_Wild_Hunt.php">
			<img src="/images/image_slideshow/thewitcher3wildhunt_image_slider.jpg" style="width: 100%; height: 375px;" alt="The Witcher 3: Wild Hunt">
		</a>
	</div>

	<div class="videogame_slides">
		<a href="/Playstation_games/MGS2_Son_Liberty.php">
			<img src="/images/image_slideshow/Metal_Gear_Solid_2_Sons+of_Liberty_image_slider.jpg" style="width: 100%; height: 375px;" alt="Metal Gear Solid 2: Sons of Liberty">
		</a>
	</div>
    </div>

   <!------the dots below the image slider----------------->
	<div style="text-align:center">
		<span class="dots"></span>
		<span class="dots"></span>
		<span class="dots"></span>
		<span class="dots"></span>
		<span class="dots"></span>
		<span class="dots"></span>
	</div>

    <!----start of About us (transparent box)-->
    <div class="transbox">
      <h1>Who are we?</h1>
      <ol>
        <p>
          testv2 We, RottenPotatoes, is a review website for video games on various
          gaming consoles, such as PlayStation, Xbox, Nintendo, and PC!!! Here,
          people like you can view the reviews and rates of the games listed in
          each category before deciding on purchasing the video game in
          question!! Here, members can contribute back by giving comments and
          reviews about the game so other fellow gamers such as yourself can
          decide what to do next. Take a peek at what we can offer you! Or if
          you have an questions about our site, please fill free to contact us
          on the "Contact Us" tab above.
        </p>
      </ol>
    </div>
    <!----end of About us (transparent box)-->
  

    <!---START OF FOOTER-->
    <div id ="page-container">
    <footer id="footer">
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.</br>
        © 2020 RottenPotatoes
    </footer>
    </div>
    <!---END OF FOOTER-->
	<script>
		var slideIndex = 0;
	//	showSlides();
		
		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("videogame_slides");
			var dots = document.getElementsByClassName("dots");
			for (i = 0; i < slides.length; i++){
				slides[i].style.display = "none";
			}
	
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}
			for (i = 0; i < dots.length; i++){
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 6000);
		}
		showSlides();
	</script>

  </body>

 

</html>
