<!DOCTYPE.html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RottenPotatoes</title>
    <!---<link rel="stylesheet" href="/main.css" />--->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
  <!--<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />--->
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

     <!-------css edits for video game section/category are in external css link----->
     <link rel="stylesheet" href="../css/Xbox_games.css"/>
  </head>
  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
  <?php 
        include 'fullnavbar.php';
  ?>
    <!----end of Navigation Bar-->

    <!---footer fix by Sean-->
    <div id="page-container">
    <div id="content-wrap">
    <!---footer fix-->

    <div class="bg"></div>
    <!---------Start listing Xbox games-->
    <!-- MAIN Center website -->
    <div class="main">
      <hr />
      <button id="myBtn" title="Go to top" >Top</button>
      <h2 id="filter">Filter</h2>
       <!----search bar---->
       <input id='search' class="search" type='text' placeholder="search game by name">

      <!-- game games -->
      <!--follow the.php code in Playstation games.php to have same format-->
      <!------https://en.wikipedia.org/wiki/List_of_Xbox_360_games-->
      <!-------Ace Combat 6-->
      <div class="row">
        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/AceCombat6.php">
              <img
				class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/Ace_Combat_6_Fires_of_Liberation_Game_Cover.jpg"
                alt="Ace Combat 6"
                
            /></a>
            <h4>Ace Combat 6</h4>
            
          </div>
        </div>

        <!-- Dead or Alive -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/DeadorAlive4.php">
              <img
				class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/Doa4cover.jpg"
                alt="Dead or Alive 4"
                
            /></a>
            <h4>Dead or Alive 4</h4>
           
          </div>
        </div>

        <!-- Forza 4 -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Forza4.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/Forza_Motorsport_4_cover.jpg"
                alt="Forza 4"
                
            /></a>
            <h4>Forza 4</h4>
           
          </div>
        </div>

        <!-- MotoGP '07 -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/MotoGP07.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/motogp-07-front-cover.jpg"
                alt="MotoGP '07"
                
            /></a>
            <h4>MotoGP '07</h4>
           
          </div>
        </div>

        <!-- Ridge Racer 6 -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Ridgeracer6.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/ridge-racer-game-cover.png"
                alt="Ridge Racer 6"
                
            /></a>
            <h4>Ridge Racer 6</h4>
           
          </div>
        </div>

        <!-- Saints Row -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/SaintsRow.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/Saints_Row_Box_Art.jpg"
                alt="Saints Row"
                
            /></a>
            <h4>Saints Row</h4>
           
          </div>
        </div>

        <!-- Viva Pinata: Party Animals -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/VivaPinata_PartyAnimals.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/viva-pinata-front-cover.jpg"
                alt="Dead or Alive 4"
               
            /></a>
            <h4>Viva Pinata: Party Animals</h4>
           
          </div>
        </div>

        <!-- Wipeout: In The Zone -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Wipeout.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/Wipeout_in_the_Zone_Coverart.png"
                alt="Wipeout: In The Zone"
                
            /></a>
            <h4>Wipeout: In The Zone</h4>
            
          </div>
        </div>

        <!-- Wreckateer -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Wreckateer.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/wreckateer.png"
                alt="Wreckateer"
                
            /></a>
            <h4>Wreckateer</h4>
            
          </div>
        </div>

        <!-- Zumba Fitness Rush -->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/ZumbaFitnessRush.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox360_games/Zumba-Fitness-Rush-Cover.jpg"
                alt="Dead or Alive 4"
                
            /></a>
            <h4>Zumba Fitness Rush</h4>
            
          </div>
        </div>

        <!-- game games -->
        <!----https://en.wikipedia.org/wiki/List_of_Xbox_One_games-->

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Ashen.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/ashen.jpg"
                alt="Ashen"
                
            /></a>
            <h4>Ashen</h4>
           
          </div>
        </div>

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Forza_Horizon_4_cover.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/Forza_Horizon_4_cover.jpg"
                alt="Forza Horizon 4"
                
            /></a>
            <h4>Forza Horizon 4</h4>
           
          </div>
        </div>

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Forza7.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/Forza7.jpg"
                alt="Forza 7"
                
            /></a>
            <h4>Forza 7</h4>
           
          </div>
        </div>

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/GoW4.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/GoW4.jpg"
                alt="Gears of War 4"
               
            /></a>
            <h4>Gears of War 4</h4>
           
          </div>
        </div>

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/gears5.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/gears5.png"
                alt="Gears 5"
               
            /></a>
            <h4>Gears of War 5</h4>
            
          </div>
        </div>

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/halo5.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/halo5.jpg"
                alt="Halo 5: Guardians"
              
            /></a>
            <h4>Halo 5: Guardians</h4>
            
          </div>
        </div>

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Killer_Instinct.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/killer-instinct-game-cover.png"
                alt="Killer Instinct"
              
            /></a>
            <h4>Killer Instinct</h4>
           
          </div>
        </div>

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Quantum_Break.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/quantum_break.jpg"
                alt="Quantum Break"
               
            /></a>
            <h4>Quantum Break</h4>
            
          </div>
        </div>

        <div class="column1 game">
          <div class="content">
            <a href="Xbox_games/Sea_Of_Thieves.php">
              <img
			    class="xbox_wallpaper_image"
                src="Xbox_games/Xbox_One_games/Sea_of_thieves_cover_art.jpg"
                alt="Sea of Thieves"
               
            /></a>
            <h4>Sea of Thieves</h4>
            
          </div>
        </div>

        
          <div class="column1 game">
            <div class="content">
              <a href="Xbox_games/Sunset_Overdrive.php">
                <img
				  class="xbox_wallpaper_image"
                  src="Xbox_games/Xbox_One_games/Sunset_Overdrive_cover.jpg"
                  alt="Sunset Overdrive"
                 
              /></a>
              <h4>Sunset Overdrive</h4>
             
            </div>
          </div>
        
      </div>
      <!-- End of Grid -->
    </div>
    <!-- End of Main-->

    <!---START OF FOOTER-->
    </div>
    </br>
    <footer id="footer">
      <p>
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.
      </p>
      <p>© 2020 RottenPotatoes</p>
    </footer>
    </div>
    <!---END OF FOOTER-->

    <!---external JS script for xbox games----->
    <script src="../js/search_bar_games_filter.js"></script>
    <script src="../js/scroll_top.js"></script>
  </body>
</hmtl>
