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
    <!-- MAIN (Center website) -->
    <div class="main">
      <hr />
      <!----scroll to top button-->
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <h2>Filter</h2>

      <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">
          Show all
        </button>
        <button class="btn" onclick="filterSelection('Switch')">Switch</button>
        <button class="btn" onclick="filterSelection('3DS')">3DS</button>
        <button class="btn" onclick="filterSelection('2DS')">2DS</button>
        <button class="btn" onclick="filterSelection('Wii')">Wii</button>
        <button class="btn" onclick="filterSelection('Game Boy Advance')">
          Game Boy Advance
        </button>
        <button class="btn" onclick="filterSelection('GameCube')">
          GameCube
        </button>
      </div>

      <!-- Nintendo games -->
      <!-- Switch games -->
      <!--Mario Kart 8   -->
      <div class="row">
        <div class="column Switch">
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
        <div class="column Switch">
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
        <div class="column Switch">
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
        <div class="column Switch">
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
        <div class="column Switch">
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
        <div class="column 2DS">
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
        <div class="column 2DS">
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
        <div class="column 3DS">
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
        <div class="column 3DS">
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
        <div class="column Wii, GameCube">
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
        <div class="column Wii">
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
        <div class="column Game Boy Advance">
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
        <div class="column Game Boy Advance">
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
        <div class="column GameCube">
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

    <!-----Scroll to top Javascript code-->
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <!-----Filter Javascript code-->
    <script>
      filterSelection("all");
      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          w3RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
      }

      function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
          }
        }
      }

      function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
          }
        }
        element.className = arr1.join(" ");
      }

      // Add active class to the current button (highlight it)
      var btnContainer = document.getElementById("myBtnContainer");
      var btns = btnContainer.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
    </script>
  </body>
</html>
