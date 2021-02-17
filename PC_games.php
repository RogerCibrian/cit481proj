<!DOCTYPE.html>
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
      * {
        box-sizing: border-box;
      }

      /* Center website */
      .main {
        max-width: 850px;
        margin: auto;
      }

      h1 {
        font-size: 50px;
        word-break: break-all;
      }

      .row {
        margin: 10px -16px;
      }

      /* Add padding BETWEEN each column */
      .row,
      .row > .column {
        padding: 8px;
      }

      /* Create three equal columns that floats next to each other */
      .column {
        float: left;
        width: 33.33%;
        display: none; /* Hide all elements by default */
      }

      /* Clear floats after rows */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Content */
      .content {
        background-color: #00dbf966;
        padding: 10px;
        height: 350px;
        width: auto;
      }

      /* The "show" class is added to the filtered elements */
      .show {
        display: block;
      }

      /* Style the buttons */
      .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: #222222;
		color: white;
        cursor: pointer;
        margin-left: 20px;
      }

      .btn:hover {
        background-color: #ddd;
      }

      .btn.active {
        background-color: #f25bffa1;
        color: white;
      }
      /* scroll to the top button*/
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 10px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: black;
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 4px;
        width: 100px;
      }

      #myBtn:hover {
        background-color: #555;
      }
    </style>
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
      <h2 style="color: white">Filter</h2>

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
                src="/PC_games/220px-Witcher_3_cover_art.jpg"
                alt="The Witcher 3: Wild Hunt   "
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 270px"
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
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 275px"
            /></a>
            <h4>Doom: Eternal</h4>
          
          </div>
        </div>
        <!--Garry's Mod -->
        <div class="column Windows, Mac OS X, SteamOS + Linux">
          <div class="content">
            <a href="/PC_games/Garrys_Mod.php">
              <img
                src="/PC_games/220px-Garry_s_Mod_logo.svg.png"
                alt="Garry's Mod"
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 275px"
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
                style="width: 100%; height: 275px"
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
<.html>
