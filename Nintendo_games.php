<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RottenPotatoes</title>
    <!----<link rel="stylesheet" href="/main.css" />---->
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
    <link rel="stylesheet" href="../css/Nintendo_games.css"/>
    
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
    <!---------Start listing playstation games-->
    <!-- MAIN---Center website -->
    <div class="main">
      <hr />
      <!----scroll to top button-->
      <button id="myBtn" title="Go to top">Top</button>
    
      <h2 id="filter">Filter</h2>
      <!----search bar---->
      <input id='search' class="search" type='text' placeholder="search game by name">
      <!-- Nintendo games -->
      <!-- game games -->
      <!--Mario Kart 8----->
      <div class="row">
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Mario_Kart8.php ">
              <img
                src="/Nintendo_games/Switch/220px-MarioKart8Boxart.jpg"
                alt="Mario Kart 8  "
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Mario Kart 8</h4>
           
          </div>
        </div>
        <!-- Animal Crossing: New Horizons  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Animal_Cross_New_Horizons.php">
              <img
                src="/Nintendo_games/Switch/220px-Animal_Crossing_New_Horizons.jpg"
                alt="Animal Crossing: New Horizons  "
                class="nintendo_wallpaper_image_2"
            /></a>
            <h4>Animal Crossing: New Horizons</h4>
            
          </div>
        </div>
        <!-- Super Smash Bros Ultimate -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Super_Smash_Bros_Ultimate.php">
              <img
                src="/Nintendo_games/Switch/220px-Super_Smash_Bros._Ultimate.jpg"
                alt="Super Smash Bros Ultimate  "
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Super Smash Bros Ultimate</h4>
          
          </div>
        </div>
        <!--Pokemon Sword -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Pokemon_Sword.php">
              <img
                src="/Nintendo_games/Switch/PokВmon_Sword.jpg"
                alt="Pokemon Sword"
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Pokemon Sword</h4>
           
          </div>
        </div>
        <!--Super Mario Party -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Super_Mario_Party.php">
              <img
                src="/Nintendo_games/Switch/220px-Super_Mario_Party.jpg"
                alt="Super Mario Party"
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Super Mario Party</h4>
           
          </div>
        </div>
        <!--Nintendo 2DS -->
        <!--New Super Mario Bros -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/New_Super_Mario_Bros.php">
              <img
                src="/Nintendo_games/DS/new_super_mario_bros_2DS.jpg"
                alt="New Super Mario Bros."
                class="nintendo_wallpaper_image"
            /></a>
            <h4>New Super Mario Bros.</h4>
            
          </div>
        </div>
        <!--Pokémon Platinum  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Pokemon_Platinum.php ">
              <img
                src="/Nintendo_games/DS/Pokemon_platinum.png"
                alt="Pokémon Platinum "
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Pokémon Platinum</h4>
           
          </div>
        </div>
        <!------Nintendo 3DS-->
        <!--Pokémon Sun  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Pokemon_Sun.php">
              <img
                src="/Nintendo_games/3DS/Pokemon_Sun_Boxart.jpg"
                alt="Pokémon Sun  "
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Pokémon Sun</h4>
            
          </div>
        </div>
        <!--The Legend of Zelda: A Link Between Worlds-->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/LOZ_Link_btw_Worlds.php">
              <img
                src="/Nintendo_games/3DS/220px-The_Legend_of_Zelda_A_Link_Between_Worlds_NA_cover.jpg"
                alt="The Legend of Zelda: A Link Between Worlds"
                class="nintendo_wallpaper_image_2"
            /></a>
            <h4>The Legend of Zelda: A Link Between Worlds</h4>
          
          </div>
        </div>
        <!------Nintendo Wii-->
        <!--The Legend of Zelda: Twilight Princess  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/LOZ_Twilight_Princess.php">
              <img
                src="/Nintendo_games/Wii/220px-The_Legend_of_Zelda_Twilight_Princess_Game_Cover.jpg"
                alt="The Legend of Zelda: Twilight Princess"
                class="nintendo_wallpaper_image_2"
            /></a>
            <h4>The Legend of Zelda: Twilight Princess</h4>
           
          </div>
        </div>
        <!--Just Dance   -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Just_Dance.php">
              <img
                src="/Nintendo_games/Wii/220px-Just_Dance_(Wii)_boxart.jpg"
                alt="Just Dance"
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Just Dance</h4>
            
          </div>
        </div>
        <!------Nintendo Game Boy Advance-->
        <!--Pokemon Emerald -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Pokemon_Emerald.php">
              <img
                src="/Nintendo_games/Game_Boy_Advance/Pokemon_Emerald.jpg"
                alt="Pokemon Emerald"
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Pokemon Emerald</h4>
            
          </div>
        </div>
        <!--Dragon Ball Z: The Legacy of Goku-->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/DBZ_Legacy_of_Goku.php ">
              <img
                src="/Nintendo_games/Game_Boy_Advance/DBZ_Legacy_of_goku.jpg"
                alt="Dragon Ball Z: The Legacy of Goku"
                class="nintendo_wallpaper_image_2"
            /></a>
            <h4>Dragon Ball Z: The Legacy of Goku</h4>
           
          </div>
        </div>
        <!------Nintendo GameCube-->
        <!--Resident Evil 4  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Nintendo_games/Resident_Evil_4.php ">
              <img
                src="/Nintendo_games/GameCube/Resident_Evil_4_Cover.png"
                alt="Resident Evil 4"
                class="nintendo_wallpaper_image"
            /></a>
            <h4>Resident Evil 4</h4>
            
          </div>
        </div>
        <!-- END GRID -->
      </div>
      <!-- END MAIN -->
    </div>
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
    <!---END OF FOOTER-->
    <!---external JS script for playstation games----->
    <script src="../js/scroll_top.js"></script>
    <script src="../js/search_bar_games_filter.js"></script>
  </body>
</html>
