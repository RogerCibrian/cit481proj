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
        width: 150px;
		margin-left: 20px;
      }

      .btn:hover {
        background-color: #ddd;
      }

      .btn.active {
        background-color: #f25bffa1;
	color: white;
      }
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
    <!---------Start listing Xbox games-->
    <!-- MAIN (Center website) -->
    <div class="main">
      <hr />
      <button onclick="topFunction()" id="myBtn" title="Go to top" >Top</button>
      <h2 style="color: white">Filter</h2>

      <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">
          Show all
        </button>
        <button class="btn" onclick="filterSelection('Xbox 360')">
          Xbox 360
        </button>
        <button class="btn" onclick="filterSelection('Xbox One')">
          Xbox One
        </button>
      </div>

      <!-- XBOX 360 games -->
      <!--follow the.php code in Playstation games.php to have same format-->
      <!------https://en.wikipedia.org/wiki/List_of_Xbox_360_games-->
      <!-------Ace Combat 6-->
      <div class="row">
        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/AceCombat6.php">
              <img
                src="Xbox_games/Xbox360_games/Ace_Combat6.png"
                alt="Ace Combat 6"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Ace Combat 6</h4>
            
          </div>
        </div>

        <!-- Dead or Alive -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/DeadorAlive4.php">
              <img
                src="Xbox_games/Xbox360_games/DoA4.jpg"
                alt="Dead or Alive 4"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Dead or Alive 4</h4>
           
          </div>
        </div>

        <!-- Forza 4 -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/Forza4.php">
              <img
                src="Xbox_games/Xbox360_games/Forza4.jpg"
                alt="Forza 4"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Forza 4</h4>
           
          </div>
        </div>

        <!-- MotoGP '07 -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/MotoGP07.php">
              <img
                src="Xbox_games/Xbox360_games/Motogp07.jpg"
                alt="MotoGP '07"
                style="width: 100%; height: 250px"
            /></a>
            <h4>MotoGP '07</h4>
           
          </div>
        </div>

        <!-- Ridge Racer 6 -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/Ridgeracer6.php">
              <img
                src="Xbox_games/Xbox360_games/Ridgeracer6.jpg"
                alt="Ridge Racer 6"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Ridge Racer 6</h4>
           
          </div>
        </div>

        <!-- Saints Row -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/SaintsRow.php">
              <img
                src="Xbox_games/Xbox360_games/Saintsrow.jpg"
                alt="Saints Row"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Saints Row</h4>
           
          </div>
        </div>

        <!-- Viva Pinata: Party Animals -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/VivaPinata_PartyAnimals.php">
              <img
                src="Xbox_games/Xbox360_games/vivapinata.jpg"
                alt="Dead or Alive 4"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Viva Pinata: Party Animals</h4>
           
          </div>
        </div>

        <!-- Wipeout: In The Zone -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/Wipeout.php">
              <img
                src="Xbox_games/Xbox360_games/wipeout.jpg"
                alt="Wipeout: In The Zone"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Wipeout: In The Zone</h4>
            
          </div>
        </div>

        <!-- Wreckateer -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/Wreckateer.php">
              <img
                src="Xbox_games/Xbox360_games/wreckateer.png"
                alt="Wreckateer"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Wreckateer</h4>
            
          </div>
        </div>

        <!-- Zumba Fitness Rush -->

        <div class="column Xbox 360">
          <div class="content">
            <a href="Xbox_games/ZumbaFitnessRush.php">
              <img
                src="Xbox_games/Xbox360_games/zumba_fitness-_rush.jpg"
                alt="Dead or Alive 4"
                style="width: 100%; height: 250px"
            /></a>
            <h4>Zumba Fitness Rush</h4>
            
          </div>
        </div>

        <!-- XBOX One games -->
        <!----https://en.wikipedia.org/wiki/List_of_Xbox_One_games-->

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/Ashen.php">
              <img
                src="Xbox_games/Xbox_One_games/ashen.jpg"
                alt="Ashen"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Ashen</h4>
           
          </div>
        </div>

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/Forza_Horizon_4_cover.php">
              <img
                src="Xbox_games/Xbox_One_games/Forza_Horizon_4_cover.jpg"
                alt="Forza Horizon 4"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Forza Horizon 4</h4>
           
          </div>
        </div>

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/Forza7.php">
              <img
                src="Xbox_games/Xbox_One_games/Forza7.jpg"
                alt="Forza 7"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Forza 7</h4>
           
          </div>
        </div>

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/GoW4.php">
              <img
                src="Xbox_games/Xbox_One_games/GoW4.jpg"
                alt="Gears of War 4"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Gears of War 4</h4>
           
          </div>
        </div>

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/gears5.php">
              <img
                src="Xbox_games/Xbox_One_games/gears5.png"
                alt="Gears 5"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Gears of War 5</h4>
            
          </div>
        </div>

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/halo5.php">
              <img
                src="Xbox_games/Xbox_One_games/halo5.jpg"
                alt="Halo 5: Guardians"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Halo 5: Guardians</h4>
            
          </div>
        </div>

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/Killer_Instinct.php">
              <img
                src="Xbox_games/Xbox_One_games/killer_instinct.jpg"
                alt="Killer Instinct"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Killer Instinct</h4>
           
          </div>
        </div>

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/Quantum_Break.php">
              <img
                src="Xbox_games/Xbox_One_games/quantum_break.jpg"
                alt="Quantum Break"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Quantum Break</h4>
            
          </div>
        </div>

        <div class="column Xbox One">
          <div class="content">
            <a href="Xbox_games/Sea_Of_Thieves.php">
              <img
                src="Xbox_games/Xbox_One_games/Sea_of_thieves_cover_art.jpg"
                alt="Sea of Thieves"
                style="width: 100%; height: 275px"
            /></a>
            <h4>Sea of Thieves</h4>
            
          </div>
        </div>

        
          <div class="column Xbox One">
            <div class="content">
              <a href="Xbox_games/Sunset_Overdrive.php">
                <img
                  src="Xbox_games/Xbox_One_games/Sunset_Overdrive_cover.jpg"
                  alt="Sunset Overdrive"
                  style="width: 100%; height: 275px"
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
    <!-----Filter Javascript: No need to make changes here-->
	<script>
	//get the button by id name
	var mybutton = document.getElementById("myBtn");

	//when the user scrolls down from the top of the document, show the button
	window.onscroll = function(){
		scrollFunction();
	};
	function scrollFunction(){
	   if(
		document.body.scrollTop > 20 ||
		document.documentElement.scrollTop > 20
	   ) {
		mybutton.style.display = "block";
	  } else {
		mybutton.style.display = "none";
	  }
	}

	//when user click on the button, scrolll to the top of the dcument
	function topFunction(){
	    document.body.scrollTop = 0;
	    document.documentElement.scrollTop = 0;
	}
    </script>
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
</hmtl>
