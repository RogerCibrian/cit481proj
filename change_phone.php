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

   <script>
	$(function () {
			$('.phone').keydown(function(e){
				var key = e.charCode || e.keyCode || 0;
				$text = $(this);
				if (key !== 8 && key !== 9) {
					if($text.val().length === 3){
						$text.val($text.val() + '-');
					}
					if($text.val().length === 7){
						$text.val($text.val() + '-');
					}
				}
				return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <=57) || (key >= 96 && key <= 105));	
			})
			});
    </script>
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

      .email_change_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
        /*height: 350px;
        width: 450px;*/
		height: fit-content;
		width:fit-content;
        text-align: center;
        /*margin-left: 30%;
        margin-right: 50%;
        margin-top: 5%;
        margin-bottom: 20%;*/
		margin: 0 auto;
      }

      /* Responsive layout - when the screen is less than 600px wide, 
      make the two columns stack on top of each other instead of next 
      to each other */
      @media screen and (max-width: 600px) {
        input[type="submit"] {
          width: 100%;
          margin-top: 0;
        }
      }
    </style>
  </head>

  <body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
         <?php
 	  include 'fullnavbar.php';
	 ?>
    <!----end of Navigation Bar-->
    <!----start of full back background-->
    <div class="bg"></div>
    <!----end of full back background-->
	<div id="page-container">
	<div id="content-wrap">
    <!--START OF EMAIL CHANGE FORM-->
    <div class="email_change_container">

<!-- start of php code -->
      <h1>Update Phone Number</h1>
	<?php
		if(!isset($_SESSION['loggedin'])){
                                header("Location: index.php");
                                exit();}
		 if (isset($_GET['errmsg'])){
                        $msg = $_GET['errmsg'];
                        if ($msg == 'empty'){
                        echo "<p>Please fill in both fields.</p>";}
			else echo "<p>Phone number fields do not match. Please try again.</p>";}
	?>
	<form class="form-login" method="POST" action="update_phone_script.php">
	<input class="phone" type="text" name="phone" maxlength="12" placeholder="New Phone Number" required>
	<input class="phone" type="text" name="phone-repeat" maxlength="12" placeholder="Repeat Phone Number" required>
        <div class="clearfix">
          <button type="submit" name="reset-phone-submit" style="width: 150px" class="signup">Submit</button>
        </div>
      </form>
    </div>
	</div>
    <!--END OF EMAIL CHANGE FORM-->
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
