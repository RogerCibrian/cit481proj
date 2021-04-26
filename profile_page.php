<?php
session_start();
?>
<!DOCTYPE html>
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

    <!---external css file----------->
    <link rel="stylesheet" href="../css/profile_page.css"/>
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

    <!----Start of profile box-->
    <div class="Contact_container">
	<h1>Profile Info</h1>
		<?php
			if(!isset($_SESSION['loggedin'])){
				header("Location: index.php");
				exit();}
			echo '<form class="form-login" method="POST">';
			echo '<span class="span1"><span class="glyphicon glyphicon-user"></span><b> Username</b></span><br>';
			echo '<input type="text" name="username" placeholder=' . $_SESSION['name'] . ' disabled>';
			echo '<span class="span2"><span class="glyphicon glyphicon-envelope"></span><b> Email </b>- <a href="change_email.php">Update</a></span>';
			echo '<input type="text" name="email" placeholder=' . $_SESSION['userEmail'] . ' disabled>';
			echo '<span class="span3"><span class="glyphicon glyphicon-phone"></span><b> Phone </b>- <a href="change_phone.php">Update</a></span>';
			echo '<input type="text" name="phone" placeholder=' . $_SESSION['userPhone'] . ' disabled>';
		?>
		<button type="submit" name="update-pasword" formaction="change_pw.php" class="signup">Change Password</button><br><br>
		</form>
	</div>
    <!----end of box-->
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
	</div>
  </body>
</html>
