<!DOCTYPE.html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RottenPotatoes</title>
   
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
     <link rel="stylesheet" href="../css/Playstation_games.css"/>
     <!--<link rel="stylesheet" href="/main.css" />-->
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
    <!-- MAIN Center website --->
    <div class="main">
      <hr />
      <!----scroll to top button----->
      <button id="myBtn" title="Go to top">Top</button>
      <h2 id="filter">Filter</h2>
      <!----search bar---->
      <input id='search' class="search" type='text' placeholder="search game by name">
      <!-- PS4 games -->
      <!--7days to die  -->
      <div class="row">
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/7daystodie.php ">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/7Days-to-Die.jpg"
                alt="7 Days to Die"
                
            /></a>
            <h4>7 Days to Die</h4>
            
          </div>
        </div>
        <!--Age of Wonders: Planetfall  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/AgeofWonders_Planetfall.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/Age_of_Wonders_Planetfall_cover_art.jpg"
                alt="Age of Wonders: Planetfall"
                
            /></a>
            <h4>Age of Wonders: Planetfall</h4>
           
          </div>
        </div>
        <!--Agony  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/Agony.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/Agony.jpg"
                alt="Agony"
               
            /></a>
            <h4>Agony</h4>
            
          </div>
        </div>
        <!--Alien:Isolation  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/AlienIsolation.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/alien-isolation.jpg"
                alt="Alien: Isolation"
                
            /></a>
            <h4>Alien: Isolation</h4>
            
          </div>
        </div>
        <!--Blair Witch  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/BlairWitch.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/Blair_Witch.jpg"
                alt="Blair Witch"
                
            /></a>
            <h4>Blair Witch</h4>
           
          </div>
        </div>
        <!--COD:warzone  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/COD_Warzone.php">
              <img
               class="ps4_image"
                src="/Playstation_games/Playstation_4_games/call-of-duty-warzone.jpg"
                alt="Call of Duty:Warzone"
            /></a>
            <h4>Call of Duty:Warzone</h4>
            
          </div>
        </div>
        <!--Death Stranding  -->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/DeathStranding.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/Death_Stranding.jpg"
                alt="Death Stranding"  
            /></a>
            <h4>Death Stranding</h4>
          
          </div>
        </div>
        <!--Fall Guys: Ultimate Knockout -->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/FallGuys.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/Fall_Guys.jpg"
                alt="Fall Guys: Ultimate Knockout"
            /></a>
            <h4>Fall Guys: Ultimate Knockout</h4>
            
          </div>
        </div>
        <!--The Amazing Spider-Man 2-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/AmazingSpiderMan2.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/The_Amazing_Spider-Man_2.png"
                alt="The Amazing Spider-Man 2"
                
            /></a>
            <h4>The Amazing Spider-Man 2</h4>
          
          </div>
        </div>
        <!--The Last Of Us: 2-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/TLOU2.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_4_games/TheLastOfUs2.png"
                alt="The Last Of Us: 2"
               
            /></a>
            <h4>The Last Of Us: 2</h4>
            
          </div>
        </div>
        <!-- PS3 games -->
        <!--Batman: Arkham City-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/BatmanArkCity.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_3_games/Batman_Arkham_City.jpg"
                alt="Batman: Arkham City"
                
            /></a>
            <h4>Batman: Arkham City</h4>
           
          </div>
        </div>
        <!--Beyond: Two Souls-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/BeyondTwoSouls.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_3_games/Beyond_Two_Souls.jpg"
                alt="Batman: Arkham City"
                s
            /></a>
            <h4>Beyond: Two Souls</h4>
            
          </div>
        </div>
        <!--Call of Duty: Black Ops-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/CODBlackOps.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_3_games/CoD_Black_Ops.png"
                alt="Call of Duty: Black Ops"
            /></a>
            <h4>Call of Duty: Black Ops</h4>		
          </div>
        </div>
        <!--Grand Theft Auto IV-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/GTA_IV.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_3_games/Grand_Theft_Auto_IV.jpg"
                alt="Grand Theft Auto IV"
            /></a>
            <h4>Grand Theft Auto IV</h4>
            
          </div>
        </div>
        <!--Grand Theft Auto V-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/GTA_V.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_3_games/Grand_Theft_Auto_V.png"
                alt="Grand Theft Auto V"
                
            /></a>
            <h4>Grand Theft Auto V</h4>
            
          </div>
        </div>
        <!--Heavy Rain-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/HeavyRain.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_3_games/Heavy_Rain.jpg"
                alt="Heavy Rain"
                
            /></a>
            <h4>Heavy Rain</h4>
            
          </div>
        </div>
        <!--inFamous-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/inFamous.php">
              <img
                class="ps4_image"
                src="/Playstation_games/Playstation_3_games/Infamous.jpg"
                alt="inFamous"
                
            /></a>
            <h4>inFamous</h4>
            
          </div>
        </div>
        <!--Red Dead Redemption-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/RedDeadRedemp.php">
              <img
              class="ps4_image"
                src="/Playstation_games/Playstation_3_games/Red_Dead_Redemption.jpg"
                alt="Red Dead Redemption"
                
            /></a>
            <h4>Red Dead Redemption</h4>
            
          </div>
        </div>
        <!--Resident Evil 5-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/ResidentEvil5.php">
              <img
              class="ps4_image"
                src="/Playstation_games/Playstation_3_games/Resident_Evil_5.jpg"
                alt="Resident Evil 5"
                
            /></a>
            <h4>Resident Evil 5</h4>
            
          </div>
        </div>
        <!--The Last of Us-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/TLOU.php">
              <img
              class="ps4_image"
                src="/Playstation_games/Playstation_3_games/The_Last_of_Us.jpg"
                alt="The Last of Us"
               
            /></a>
            <h4>The Last of Us</h4>
           
          </div>
        </div>
        <!-- PS2 games -->
        <!-------Aliens Versus Predator: Extinction-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/AliensVPredExct.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/Aliens_Versus_Predator_Extinction.jpg"
                alt="Alien Versus Predator: Extinction"
                
            /></a>
            <h4>Aliens Versus Predator: Extinction</h4>
            
          </div>
        </div>
        <!-------Bionicle-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/Bionicle.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/bionicle.jpg"
                alt="Bionicle"
                
            /></a>
            <h4>Bionicle</h4>
          
          </div>
        </div>
        <!-------Bully-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/Bully.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/Bully.jpg"
                alt="Bully"
                
            /></a>
            <h4>Bully</h4>
            
          </div>
        </div>
        <!-------Call of Duty: World at War-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/CODWorldWar.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_3_games/Call_of_duty_world_at_war.jpg"
                alt="Call of Duty: World at War"
              
            /></a>
            <h4>Call of Duty: World at War</h4>
            
          </div>
        </div>
        <!-------God of War-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/GodOfWar.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/God_of+War.png"
                alt="God of War"
              
            /></a>
            <h4>God of War</h4>
           
          </div>
        </div>
        <!-------Grand Theft Auto III-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/GTA_III.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/GTA_III.jpg"
                alt="Grand Theft Auto III"
                
            /></a>
            <h4>Grand Theft Auto III</h4>
            
          </div>
        </div>
        <!-------Grand Theft Auto: San Andreas-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/GTA_san_andreas.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/GTA_San_Andreas.jpg"
                alt="Grand Theft Auto: San Andreas"
               
            /></a>
            <h4>Grand Theft Auto: San Andreas</h4>
           
          </div>
        </div>
        <!-------Grand Theft Auto: Vice City-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/GTA_Vice_City.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/GTA_Vice_City.jpg"
                alt="Grand Theft Auto: Vice City"
               
            /></a>
            <h4>Grand Theft Auto: Vice City</h4>
         
          </div>
        </div>
        <!-------Metal Gear Solid 2: Sons of Liberty-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/MGS2_Son_Liberty.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/Metal_Gear_Solid_2_Sons_of_Liberty.jpg"
                alt="Metal Gear Solid 2: Sons of Liberty"
                
            /></a>
            <h4>Metal Gear Solid 2: Sons of Liberty</h4>
           
          </div>
        </div>
        <!-------Tekken 5-->
        <div class="column1 game">
          <div class="content">
            <a href="/Playstation_games/Tekken5.php">
              <img
              class="ps2_image"
                src="/Playstation_games/Playstation_2_games/Tekken_5.jpg"
                alt="Tekken 5"
               
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

    <script src="../js/search_bar_games_filter.js"></script>
    <!---external JS script for PC games----->
    <script src="../js/scroll_top.js"></script>
   
  </body>
</html>
