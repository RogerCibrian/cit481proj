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

    <!---Start of CSS style for contact form-->
    <style>
      input[type="text"],
      select,
      textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }

      label {
        padding: 12px 12px 12px 0;
        display: inline-block;
      }

      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      .Contact_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
       /* height: 470px;
        width: 450px;*/
		height: fit-content;
		width: min-content;
        text-align: center;
        /*margin-left: 30%;
        margin-right: 50%;
        margin-top: 5%;
        margin-bottom: 10%;*/
		margin: 0 auto;
      }

      /* Responsive layout - when the screen is less than 600px wide, 
      make the two columns stack on top of each other instead of next 
      to each other */
      @media screen and (max-width: 600px) {
        .col-25,
        .col-75,
        input[type="submit"] {
          width: 100%;
          margin-top: 0;
        }
      }
    </style>
    <!---End of CSS style for contact form-->
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
			echo '<span style="float: left;"><span class="glyphicon glyphicon-user"></span><b> Username</b></span><br>';
			echo '<input type="text" name="username" placeholder=' . $_SESSION['name'] . ' disabled>';
			echo '<span style="float: left;"><span class="glyphicon glyphicon-envelope"></span><b> Email </b>- <a href="change_email.php">Update</a></span>';
			echo '<input type="text" name="email" placeholder=' . $_SESSION['userEmail'] . ' disabled>';
			echo '<span style="float: left;"><span class="glyphicon glyphicon-phone"></span><b> Phone </b>- <a href="change_phone.php">Update</a></span>';
			echo '<input type="text" name="phone" placeholder=' . $_SESSION['userPhone'] . ' disabled>';
		?>
		<button type="submit" name="update-pasword" formaction="change_pw.php" style="width: 200px" class="signup">Change Password</button><br><br>
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
  </body>
</html>
