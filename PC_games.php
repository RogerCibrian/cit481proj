<!DOCTYPE.html>
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
    <link rel="stylesheet" href="../css/PC_games.css"/>
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
      <button id="myBtn" title="Go to top">Top</button>
      <h2>Filter</h2>

      <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">
          Show all
        </button>
        <button class="btn" onclick="filterSelection('Windows')">
          Windows
        </button>
        <button class="btn" onclick="filterSelection('Mac OS X')">
          Mac OS X
        </button>
        <button class="btn" onclick="filterSelection('SteamOS + Linux')">
          SteamOS + Linux
        </button>
      </div>

      <!-- Windows games -->
      <!--The Witcher 3: Wild Hunt    -->
      <div class="row">
        <div class="column Windows">
          <div class="content">
            <a href="/PC_games/TheWitcher3_Wild_Hunt.php ">
              <img
              class="PC_images"
                src="/PC_games/220px-Witcher_3_cover_art.jpg"
                alt="The Witcher 3: Wild Hunt   "
               
            /></a>
            <h4>The Witcher 3: Wild Hunt</h4>
           
          </div>
        </div>
        <!--Fall Guys: Ultimate Knockout   -->
        <div class="column Windows">
          <div class="content">
            <a href="/PC_games/Fall_Guys_Ultimate_Knockout.php">
              <img
                src="/PC_games/220px-Fall_Guys_cover.jpg"
                alt="Fall Guys: Ultimate Knockout"
                class="PC_images"
            /></a>
            <h4>Fall Guys: Ultimate Knockout</h4>
            
          </div>
        </div>
        <!--Dark Souls III  -->
        <div class="column Windows">
          <div class="content">
            <a href="/PC_games/Dark_Souls_III.php">
              <img
                src="/PC_games/220px-Dark_souls_3_cover_art.jpg"
                alt="Dark Souls III "
                class="PC_dark_souls_image"
            /></a>
            <h4>Dark Souls III</h4>
            
          </div>
        </div>
        <!--Control  -->
        <div class="column Windows">
          <div class="content">
            <a href="/PC_games/Control.php">
              <img
                src="/PC_games/220px-Control.jpg"
                alt="Control"
                class="PC_images"
            /></a>
            <h4>Control</h4>
            
          </div>
        </div>
        <!--Red Dead Redemption 2   -->
        <div class="column Windows">
          <div class="content">
            <a href="/PC_games/RedDeadRedemp2.php">
              <img
                src="/PC_games/220px-Red_Dead_Redemption_II.jpg"
                alt="Red Dead Redemption 2 "
                class="PC_images"
            /></a>
            <h4>Red Dead Redemption 2</h4>
           
          </div>
        </div>
        <!--Doom: Eternal  -->
        <div class="column Windows">
          <div class="content">
            <a href="/PC_games/Doom_Eternal.php">
              <img
                src="/PC_games/220px-Cover_Art_of_Doom_Eternal.png"
                alt="Doom: Eternal"
                class="PC_images"
            /></a>
            <h4>Doom: Eternal</h4>
          
          </div>
        </div>
        <!--Garry's Mod -->
        <div class="column Windows, Mac OS X, SteamOS + Linux">
          <div class="content">
            <a href="/PC_games/Garrys_Mod.php">
              <img
                src="/PC_games/220px-Garry_s_Mod_logo.png"
                alt="Garry's Mod"
                class="PC_images"
            /></a>
            <h4>Garry's Mod</h4>
            
          </div>
        </div>
        <!--Diablo III  -->
        <div class="column Windows, Mac OS X">
          <div class="content">
            <a href="/PC_games/Diablo_III.php">
              <img
                src="/PC_games/220px-Diablo_III_cover.png"
                alt="Diablo III "
                class="PC_images"
            /></a>
            <h4>Diablo III</h4>
           
          </div>
        </div>
        <!--Minecraft -->
        <div class="column Windows, Mac OS X, SteamOS + Linux">
          <div class="content">
            <a href="/PC_games/Minecraft.php">
              <img
                src="/PC_games/220px-Minecraft_cover.png"
                alt="Minecraft "
                class="PC_images"
            /></a>
            <h4>Minecraft</h4>
           
          </div>
        </div>
        <!--World of Warcraft-->
        <div class="column Windows, Mac OS X">
          <div class="content">
            <a href="/PC_games/World_of_Warcraft.php">
              <img
                src="/PC_games/220px-WoW_Box_Art1.jpg"
                alt="World of Warcraft"
                class="PC_images"
            /></a>
            <h4>World of Warcraft</h4>
           
          </div>
        </div>
        <!--League of Legends-->
        <div class="column Windows, Mac OS X">
          <div class="content">
            <a href="/PC_games/League_of_Legends.php">
              <img
                src="/PC_games/league-of-legends_hu5457919bdd3a081ce5d4f2b2d385ed1a_580546_250x0_resize_q75_catmullrom.jpg"
                alt="League of Legends"
                class="PC_images"
            /></a>
            <h4>League of Legends</h4>
           
          </div>
        </div>
        <!--Dying Light -->
        <div class="column Windows, Mac OS X, SteamOS + Linux">
          <div class="content">
            <a href="/PC_games/Dying_Light.php">
              <img
                src="/PC_games/220px-Dying_Light_cover.jpg"
                alt="Dying Light "
                class="PC_images"
            /></a>
            <h4>Dying Light</h4>
           
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
    <script src="../js/PC_games_filter.js"></script>
  </body>
<.html>
