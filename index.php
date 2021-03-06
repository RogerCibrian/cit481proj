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

<!-- new account success alert -->
	<script src='./js/accountCheck.js'></script>
    <link rel="stylesheet" href="./css/index.css"/>
  </head>



  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
	<?php
	include 'fullnavbar.php';
        ?>
    <!----end of Navigation Bar-->
	
	<div id="content-wrap-home">
    <!----start of full back background-->
    <div class="bg"></div>
    <!----end of full back background-->
   
   <!----------Video game image slideshow (automatic)------------>
    <div class="image-slideshow-container">

	<div class="videogame_slides">
	    <a href="/Playstation_games/CODBlackOps.php">
		<img src="/images/image_slideshow/CODBO1_image_slider.jpg" class="videogame_img" alt="Call of Duty: Black Ops">
	    </a>
        </div>

	<div class="videogame_slides">

	    <a href="Xbox_games/Forza7.php">
		<img src="/images/image_slideshow/forza-7-_image_slider.jpg" class="videogame_img" alt="Forza 7 Motorsport">
	    </a>
        </div>

	<div class="videogame_slides">
		<a href="/Playstation_games/BatmanArkCity.php">
			<img src="/images/image_slideshow/Batman_Arkham_City_image_slider.jpg" class="videogame_img" alt="Batman Arkham City">
		</a>
	</div>

	<div class="videogame_slides">
		<a href="/PC_games/RedDeadRedemp2.php">
			<img src="/images/image_slideshow/RedDeadRedemption2_image_slider.jpg" class="videogame_img" alt="Red Dead Rdemption 2">
		</a>
	</div>

	<div class="videogame_slides">
		<a href="/PC_games/TheWitcher3_Wild_Hunt.php">
			<img src="/images/image_slideshow/thewitcher3wildhunt_image_slider.jpg" class="videogame_img" alt="The Witcher 3: Wild Hunt">
		</a>
	</div>

	<div class="videogame_slides">
		<a href="/Playstation_games/MGS2_Son_Liberty.php">
			<img src="/images/image_slideshow/Metal_Gear_Solid_2_Sons+of_Liberty_image_slider.jpg" class="videogame_img" alt="Metal Gear Solid 2: Sons of Liberty">
		</a>
	</div>
    </div>
	</div> 
   <!------the dots below the image slider----------------->
	<div class="dots_container">
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
     <!--------start of top staff best picks----------------->
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
                <img src="images/top_staff_picks/CODBO1_mini.jpg" alt="Call of Duty: Black Ops" class="staff_img">
                <p class="staff_title">Call of Duty: Black Ops</p>
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
                <img src="images/top_staff_picks/gears-of-war-4-mini.jpg" alt="Gears of War 4" class="staff_img">
                <p class="staff_title">Gears of War 4</p>
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
                <img src="images/top_staff_picks/red-dead-redemption-2-mini.jpg" alt="Red Dead Redemption 2" class="staff_img">
                <p class="staff_title">Red Dead Redemption 2</p>
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
                <img src="images/top_staff_picks/control-mini.jpg" alt="Control" class="staff_img">
                <p class="staff_title">Control</p>
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
                <img src="images/top_staff_picks/minecraft-mini.jpg" alt="Minecraft" class="staff_img">
                <p class="staff_title">Minecraft</p>
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
                <img src="images/top_staff_picks/the-witcher-3-wild-hunt-mini.jpg" alt="The Witcher 3: Wild Hunt" class="staff_img">
                <p class="staff_title">The Witcher 3: Wild Hunt</p>
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
                <img src="images/top_staff_picks/animal-crossing-new-horizons-mini.png" alt="Animal Crossing: New Horizons" class="staff_img">
                <p class="staff_title">Animal Crossing: New Horizons</p>
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
	 <!-- </div> -->
	<!---------end of top staff best picks--------------------->
    <!---START OF FOOTER-->
    <!--><div id ="page-container">-->
    <footer id="footer">
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.</br>
        © 2020 RottenPotatoes
    </footer>
    <!--</div>-->
    <!---END OF FOOTER-->
	<script src='./js/slideShow.js'></script>

  </body>

 

</html>
