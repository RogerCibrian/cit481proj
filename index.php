<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RottenPotatoes</title>
    <link rel="stylesheet" href="/main.css" />
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
		max-width: 900px;
		position: relative;
		margin: auto;
	}
	.dots {
		height: 15px;
		width: 15px;
		margin: 10px 2px;
		background-color: #bbb;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
	}
	.active{
		background-color: #717171;
	}
	
	
	.navbar-brand {
		padding: 0;
	}
	
	/*staffs' best picks ---video games--table CSS edit*/
		table {
		  margin: 0 auto;
		  text-align: center;
		  border-collapse: collapse;
		  border: 1px solid #d4d4d4;
		  font-size: 20px;
		  background: #fff;
		  font-family: 'Times New Roman', sans-serif, serif;
		  float: right;
		  margin-right: 5%;
		  margin-bottom: 20%;
		}

		table th, 
		table tr:nth-child(2n+2) {
		  background: #e7e7e7;
		}

		table th, 
		table td {
		  padding: 20px 30px;
		}

		table th {
		  border-bottom: 1px solid #d4d4d4;
		}     

		.stars-outer {
		  display: inline-block;
		  position: relative;
		  font-family: FontAwesome;
		}

		.stars-outer::before {
		  content: "\f006 \f006 \f006 \f006 \f006";
		}

		.stars-inner {
		  position: absolute;
		  top: 0;
		  left: 0;
		  white-space: nowrap;
		  overflow: hidden;
		  width: 0;
		}

		.stars-inner::before {
		  content: "\f005 \f005 \f005 \f005 \f005";
		  color: #f8ce0b;
		}

		.attribution {
		  font-size: 12px;
		  color: #444;
		  text-decoration: none;
		  text-align: center;
		  position: fixed;
		  right: 10px;
		  bottom: 10px;
		  z-index: -1;
		}
		.attribution:hover {
		  color: #1fa67a;
		}
		
		#page-container{
			position: relative;
			margin-top: 70%;
			min-height: 80vh;
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
          We, RottenPotatoes, are a review website for video games on various
          gaming consoles, such as PlayStation, Xbox, Nintendo, and PC!!! Here,
          people like you can read the reviews and ratings of the games listed in
          each category before deciding on purchasing the video game in
          question! Here, members can contribute back by giving comments and
          reviews about the game so other fellow gamers such as yourself can
          decide what to do next. Take a peek at what we can offer you! Or if
          you have an questions about our site, please feel free to contact us
          on the "Contact Us" tab above.
        </p>
      </ol>
    </div>
    <!----end of About us (transparent box)-->
     <!--------start of top staff best picks----------------------->
		<table>
        <thead>
          <tr>
            <th>Staffs' Best Picks</th>
            <th>Rating</th>
          </tr>
        </thead>
        <tbody>
          <tr class="CODBO1"> 
            <td>
              <a href="/Playstation_games/CODBlackOps.php" title="Call of Duty: Black Ops">
                <img src="images/top_staff_picks/CODBO1_mini.jpg" alt="Call of Duty: Black Ops" style="height: 8rem; width: 25%; float:left; margin-left: -25PX;">
                <p style=" text-indent: 15px; margin-top: 20px;">Call of Duty: Black Ops</p>
              </a>
            </td>
            <td>
              <div class="stars-outer">
                <div class="stars-inner"></div>
              </div>
            </td>
          </tr>
          
          <tr class="GOW4">
            <td>
              <a href="/Xbox_games/GoW4.php" title="Gears of War 4">
                <img src="images/top_staff_picks/gears-of-war-4-mini.jpg" alt="Gears of War 4" style="height: 8rem; width: 25%; float:left; margin-left: -25PX;">
                <p style=" text-indent: 15px; margin-top: 20px;">Gears of War 4</p>
                </a>
              </td>
            <td>
              <div class="stars-outer">
                <div class="stars-inner"></div>
              </div>
            </td>
          </tr>
          
          <tr class="RDR2">
            <td>
              <a href="/PC_games/RedDeadRedemp2.php" title="Red Dead Redemption 2">
                <img src="images/top_staff_picks/red-dead-redemption-2-mini.jpg" alt="Red Dead Redemption 2" style="height: 8rem; width: 25%; float:left; margin-left: -25PX;">
                <p style=" text-indent: 15px; margin-top: 20px;">Red Dead Redemption 2</p>
                </a>
              </td>
            <td>
              <div class="stars-outer">
                <div class="stars-inner"></div>
              </div>
            </td>
          </tr>
          
          <tr class="Control">
            <td>
              <a href="/PC_games/Control.php" title="Control">
                <img src="images/top_staff_picks/control-mini.jpg" alt="Control" style="height: 8rem; width: 25%; float:left; margin-left: -25PX;">
                <p style=" text-indent: 15px; margin-top: 20px;">Control</p>
              </a>
              </td>
            <td>
              <div class="stars-outer">
                <div class="stars-inner"></div>
              </div>
            </td>
          </tr>
          
          <tr class="Minecraft">
            <td>
              <a href="/PC_games/Minecraft.php" title="Minecraft">
                <img src="images/top_staff_picks/minecraft-mini.jpg" alt="Minecraft" style="height: 8rem; width: 25%; float:left; margin-left: -25PX;">
                <p style=" text-indent: 15px; margin-top: 20px;">Minecraft</p>
              </a>
              </td>
            <td>
              <div class="stars-outer">
                <div class="stars-inner"></div>
              </div>
            </td>
          </tr>
          
          <tr class="W3WH">
            <td>
              <a href="/PC_games/TheWitcher3_Wild_Hunt.php" title="The Witcher 3: Wild Hunt">
                <img src="images/top_staff_picks/the-witcher-3-wild-hunt-mini.jpg" alt="The Witcher 3: Wild Hunt" style="height: 8rem; width: 25%; float:left; margin-left: -25PX;">
                <p style=" text-indent: 15px; margin-top: 20px;">The Witcher 3: Wild Hunt</p>
              </a>
              </td>
            <td>
              <div class="stars-outer">
                <div class="stars-inner"></div>
              </div>
            </td>
          </tr>
          
          <tr class="ACNH">
            <td>
              <a href="/Nintendo_games/Animal_Cross_New_Horizons.php" title="Animal Crossing: New Horizons">
                <img src="images/top_staff_picks/animal-crossing-new-horizons-mini.png" alt="Animal Crossing: New Horizons" style="height: 8rem; width: 25%; float:left; margin-left: -25PX;">
                <p style=" text-indent: 15px; margin-top: 20px;">Animal Crossing: New Horizons</p>
              </a>
              </td>
            <td>
              <div class="stars-outer">
                <div class="stars-inner"></div>
              </div>
            </td>
          </tr>
     
        </tbody>
      </table>
	<!---------end of top staff best picks--------------------->
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
		
		
		
		/*****STAFFS' BEST PICKS********/
			const ratings = {
			  CODBO1 : 5.0,
			  GOW4 : 3.65,
			  RDR2 : 4.42,
			  Control : 4.15,
			  Minecraft : 3.90,
			  W3WH : 5.0,
			  ACNH : 4.5
			};

			// total number of stars
			const starTotal = 5;

			for(const rating in ratings) {  
			  const starPercentage = (ratings[rating] / starTotal) * 100;
			  const starPercentageRounded = `${(Math.round(starPercentage / 10) * 10)}%`;
			  document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded; 
			}
	</script>

  </body>

 

</html>
