<?php
echo '<nav class="navbar navbar-inverse">';
echo     '<div class="container-fluid">';
echo        '<div class="navbar-header">';
echo          '<a class="navbar-brand" href="../index.php" style="padding: 0;">
				<img src="/images/logo.png" style="width:174px; height:58px; padding-left: 0px; padding-top: 0px;" alt="Logo">
				</a>';
echo        '</div>';
echo        '<ul class="nav navbar-nav">';
echo          '<li class="deactive"><a href="../index.php">Home</a></li>';
echo          '<li class="dropdown">';
echo            '<a class="dropdown-toggle" data-toggle="dropdown" href="#">';
echo             'Video Games <span class="caret"></span></a>';
echo            '<ul class="dropdown-menu">';
echo              '<li><a href="../Playstation_games.php">PlayStation</a></li>';
echo              '<li><a href="../Xbox_games.php">Xbox</a></li>';
echo              '<li><a href="../PC_games.php">PC</a></li>';
echo              '<li><a href="../Nintendo_games.php">Nintendo</a></li>';
echo            '</ul>';
echo          '</li>';
echo          '<li class="deactive"><a href="../Contact_Us.php">Contact Us</a></li>';
echo        '</ul>';
echo        '<ul class="nav navbar-nav navbar-right">';

//Beginning of session checks
	session_start();

	include 'rememberme.php';

        if(!isset($_SESSION['loggedin'])){
                echo'<li><a href="../Sign_Up.php">';
                echo'<span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
                echo'<li><a href="../Member_login.php">';
                echo'<span class="glyphicon glyphicon-log-in"></span> Member Login</a></li>';}
        else {
                echo '<li><a href="../profile_page.php"><span class="glyphicon glyphicon-user"></span> Welcome, ' . $_SESSION['name'] . '!</a></li>';
                echo'<li><a href="../logout.php">';
                echo 'Not you? <span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';}

echo       '</ul>';
echo     '</div>';
echo    '</nav>';
?>
