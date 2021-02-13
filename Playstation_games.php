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
        background-color: white;
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
        background-color: white;
        cursor: pointer;
        width: 150px;
        margin-left: 20px;
      }

      .btn:hover {
        background-color: #ddd;
      }

      .btn.active {
        background-color: #666;
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
    
    <!---added by Sean-->
    <div id="page-container">
    <div id="content-wrap">
    <!--end Sean-->    

    <div class="bg"></div>
    <!---------Start listing playstation games-->
    <!-- MAIN (Center website) --->
    <div class="main">
      <hr />
      <!----scroll to top button----->
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <h2 style="color: white">Filter</h2>

      <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">
          Show all
        </button>
        <button class="btn" onclick="filterSelection('PlayStation 4')">
          PlayStation 4
        </button>
        <button class="btn" onclick="filterSelection('PlayStation 3')">
          PlayStation 3
        </button>
        <button class="btn" onclick="filterSelection('PlayStation 2')">
          PlayStation 2
        </button>
      </div>

      <!-- PS4 games -->
      <!--7days to die  -->
      <div class="row">
        <div class="column PlayStation 4">
          <div class="content">
            <a href="/Playstation_games/7daystodie.php ">
              <img
                src="/Playstation_games/Playstation_4_games/7Days-to-Die.jpg"
                alt="7 Days to Die"
                style="width: 100%; height: 275px"
            /></a>
            <h4>7 Days to Die</h4>
            
          </div>
        </div>
        <!--Age of Wonders: Planetfall  -->
        <div class="column PlayStation 4">
          <div class="content">
            <a href="/Playstation_games/AgeofWonders_Planetfall.php">
              <img
                src="/Playstation_games/Playstation_4_games/Age_of_Wonders_Planetfall_cover_art.jpg"
                alt="Age of Wonders: Planetfall"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Age of Wonders: Planetfall</h4>
           
          </div>
        </div>
        <!--Agony  -->
        <div class="column PlayStation 4">
          <div class="content">
            <a href="/Playstation_games/Agony.php">
              <img
                src="/Playstation_games/Playstation_4_games/Agony.jpg"
                alt="Agony"
                style="width: 100%; height: 275px;"
            /></a>
            <h4>Agony</h4>
            
          </div>
        </div>
        <!--Alien:Isolation  -->
        <div class="column PlayStation 4, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/AlienIsolation.php">
              <img
                src="/Playstation_games/Playstation_4_games/alien-isolation.jpg"
                alt="Alien: Isolation"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Alien: Isolation</h4>
            
          </div>
        </div>
        <!--Blair Witch  -->
        <div class="column PlayStation 4">
          <div class="content">
            <a href="/Playstation_games/BlairWitch.php">
              <img
                src="/Playstation_games/Playstation_4_games/Blair_Witch.jpg"
                alt="Blair Witch"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Blair Witch</h4>
           
          </div>
        </div>
        <!--COD:warzone  -->
        <div class="column PlayStation 4">
          <div class="content">
            <a href="/Playstation_games/COD_Warzone.php">
              <img
                src="/Playstation_games/Playstation_4_games/call-of-duty-warzone.jpg"
                alt="Call of Duty:Warzone"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Call of Duty:Warzone</h4>
            
          </div>
        </div>
        <!--Death Stranding  -->
        <div class="column PlayStation 4">
          <div class="content">
            <a href="/Playstation_games/DeathStranding.php">
              <img
                src="/Playstation_games/Playstation_4_games/Death_Stranding.jpg"
                alt="Death Stranding"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Death Stranding</h4>
          
          </div>
        </div>
        <!--Fall Guys: Ultimate Knockout -->
        <div class="column PlayStation 4">
          <div class="content">
            <a href="/Playstation_games/FallGuys.php">
              <img
                src="/Playstation_games/Playstation_4_games/Fall_Guys.jpg"
                alt="Fall Guys: Ultimate Knockout"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Fall Guys: Ultimate Knockout</h4>
            
          </div>
        </div>
        <!--The Amazing Spider-Man 2-->
        <div class="column PlayStation 4, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/AmazingSpiderMan2.php">
              <img
                src="/Playstation_games/Playstation_4_games/The_Amazing_Spider-Man_2.png"
                alt="The Amazing Spider-Man 2"
                style="width: 100%; height: 275px"
            /></a>
            <h4>The Amazing Spider-Man 2</h4>
          
          </div>
        </div>
        <!--The Last Of Us: 2-->
        <div class="column PlayStation 4">
          <div class="content">
            <a href="/Playstation_games/TLOU2.php">
              <img
                src="/Playstation_games/Playstation_4_games/TheLastOfUs2.png"
                alt="The Last Of Us: 2"
                style="width: 100%; height: 275px"
            /></a>
            <h4>The Last Of Us: 2</h4>
            
          </div>
        </div>
        <!-- PS3 games -->
        <!--Batman: Arkham City-->
        <div class="column PlayStation 4, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/BatmanArkCity.php">
              <img
                src="/Playstation_games/Playstation_3_games/Batman_Arkham_City.jpg"
                alt="Batman: Arkham City"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Batman: Arkham City</h4>
           
          </div>
        </div>
        <!--Beyond: Two Souls-->
        <div class="column PlayStation 4, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/BeyondTwoSouls.php">
              <img
                src="/Playstation_games/Playstation_3_games/Beyond_Two_Souls.jpg"
                alt="Batman: Arkham City"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Beyond: Two Souls</h4>
            
          </div>
        </div>
        <!--Call of Duty: Black Ops-->
        <div class="column PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/CODBlackOps.php">
              <img
                src="/Playstation_games/Playstation_3_games/CoD_Black_Ops.png"
                alt="Call of Duty: Black Ops"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Call of Duty: Black Ops</h4>		
          </div>
        </div>
        <!--Grand Theft Auto IV-->
        <div class="column PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/GTA_IV.php">
              <img
                src="/Playstation_games/Playstation_3_games/Grand_Theft_Auto_IV.jpg"
                alt="Grand Theft Auto IV"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Grand Theft Auto IV</h4>
            
          </div>
        </div>
        <!--Grand Theft Auto V-->
        <div class="column PlayStation 4, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/GTA_V.php">
              <img
                src="/Playstation_games/Playstation_3_games/Grand_Theft_Auto_V.png"
                alt="Grand Theft Auto V"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Grand Theft Auto V</h4>
            
          </div>
        </div>
        <!--Heavy Rain-->
        <div class="column PlayStation 4, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/HeavyRain.php">
              <img
                src="/Playstation_games/Playstation_3_games/Heavy_Rain.jpg"
                alt="Heavy Rain"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Heavy Rain</h4>
            
          </div>
        </div>
        <!--inFamous-->
        <div class="column PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/inFamous.php">
              <img
                src="/Playstation_games/Playstation_3_games/Infamous.jpg"
                alt="inFamous"
                style="width: 100%; height: 275px"
            /></a>
            <h4>inFamous</h4>
            
          </div>
        </div>
        <!--Red Dead Redemption-->
        <div class="column PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/RedDeadRedemp.php">
              <img
                src="/Playstation_games/Playstation_3_games/Red_Dead_Redemption.jpg"
                alt="Red Dead Redemption"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Red Dead Redemption</h4>
            
          </div>
        </div>
        <!--Resident Evil 5-->
        <div class="column PlayStation 4, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/ResidentEvil5.php">
              <img
                src="/Playstation_games/Playstation_3_games/Resident_Evil_5.jpg"
                alt="Resident Evil 5"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Resident Evil 5</h4>
            
          </div>
        </div>
        <!--The Last of Us-->
        <div class="column PlayStation 4, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/TLOU.php">
              <img
                src="/Playstation_games/Playstation_3_games/The_Last_of_Us.jpg"
                alt="The Last of Us"
                style="width: 100%; height: 275px"
            /></a>
            <h4>The Last of Us</h4>
           
          </div>
        </div>
        <!-- PS2 games -->
        <!-------Aliens Versus Predator: Extinction-->
        <div class="column PlayStation 2">
          <div class="content">
            <a href="/Playstation_games/AliensVPredExct.php">
              <img
                src="/Playstation_games/Playstation_2_games/Aliens_Versus_Predator_Extinction.jpg"
                alt="Alien Versus Predator: Extinction"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Aliens Versus Predator: Extinction</h4>
            
          </div>
        </div>
        <!-------Bionicle-->
        <div class="column PlayStation 2">
          <div class="content">
            <a href="/Playstation_games/Bionicle.php">
              <img
                src="/Playstation_games/Playstation_2_games/bionicle.jpg"
                alt="Bionicle"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Bionicle</h4>
          
          </div>
        </div>
        <!-------Bully-->
        <div class="column PlayStation 2">
          <div class="content">
            <a href="/Playstation_games/Bully.php">
              <img
                src="/Playstation_games/Playstation_2_games/Bully.jpg"
                alt="Bully"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Bully</h4>
            
          </div>
        </div>
        <!-------Call of Duty: World at War-->
        <div class="column PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/CODWorldWar.php">
              <img
                src="/Playstation_games/Playstation_3_games/Call_of_dutyu_wolrd_at_war.jpg"
                alt="Call of Duty: World at War"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Call of Duty: World at War</h4>
            
          </div>
        </div>
        <!-------God of War-->
        <div class="column PlayStation 2, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/GodOfWar.php">
              <img
                src="/Playstation_games/Playstation_2_games/God_of+War.png"
                alt="God of War"
                style="width: 100%; height: 250px"
            /></a>
            <h4>God of War</h4>
           
          </div>
        </div>
        <!-------Grand Theft Auto III-->
        <div class="column PlayStation 2">
          <div class="content">
            <a href="/Playstation_games/GTA_III.php">
              <img
                src="/Playstation_games/Playstation_2_games/GTA_III.jpg"
                alt="Grand Theft Auto III"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Grand Theft Auto III</h4>
            
          </div>
        </div>
        <!-------Grand Theft Auto: San Andreas-->
        <div class="column PlayStation 2, PlayStation 3">
          <div class="content">
            <a href="/Playstation_games/GTA_san_andreas.php">
              <img
                src="/Playstation_games/Playstation_2_games/GTA_San_Andreas.jpg"
                alt="Grand Theft Auto: San Andreas"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Grand Theft Auto: San Andreas</h4>
           
          </div>
        </div>
        <!-------Grand Theft Auto: Vice City-->
        <div class="column PlayStation 2">
          <div class="content">
            <a href="/Playstation_games/GTA_Vice_City.php">
              <img
                src="/Playstation_games/Playstation_2_games/GTA_Vice_City.jpg"
                alt="Grand Theft Auto: Vice City"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Grand Theft Auto: Vice City</h4>
         
          </div>
        </div>
        <!-------Metal Gear Solid 2: Sons of Liberty-->
        <div class="column PlayStation 2">
          <div class="content">
            <a href="/Playstation_games/MGS2_Son_Liberty.php">
              <img
                src="/Playstation_games/Playstation_2_games/Metal_Gear_Solid_2_Sons_of_Liberty.jpg"
                alt="Metal Gear Solid 2: Sons of Liberty"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Metal Gear Solid 2: Sons of Liberty</h4>
           
          </div>
        </div>
        <!-------Tekken 5-->
        <div class="column PlayStation 2">
          <div class="content">
            <a href="/Playstation_games/Tekken5.php">
              <img
                src="/Playstation_games/Playstation_2_games/Tekken_5.jpg"
                alt="Tekken 5"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Tekken 5</h4>
           
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
    </div>
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
