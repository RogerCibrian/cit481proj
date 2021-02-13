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
    <style>
      input[type="text"],
      select {
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

      .passwrd_recovery_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
        height: 400px;
        width: 450px;
        text-align: center;
        margin-left: 30%;
        margin-right: 50%;
        margin-top: 5%;
        margin-bottom: 20%;
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
	<?php
		/*<!--include 'navbar.php';-->*/
		include 'fullnavbar.php';
	?>
        </ul>
      </div>
    </nav>
    <!----end of Navigation Bar-->
    <!----start of full back background-->
    <div class="bg"></div>
    <!----end of full back background-->
    <!--START OF PASSWORD RECOVERY FORM-->
    <div class="passwrd_recovery_container">
      <h1>Password Recovery</h1>
	  
	<?php
                if (isset($_GET['msg'])){
                        $msg = $_GET['msg'];
                        if ($msg == 'err'){
                        echo "<p>Error: please try again later!</p>";}
                        else
                        echo "<p>Request received! Check your email.</p>";}
		elseif (isset($_GET['limit'])){
			echo "<p>Password reset request expired. <br>Please submit your request again.</p>";}
		else echo "<p>Please enter your email address.</p>";
	?>
	  <br>
      Or<a href="passwrd_recovery_phone.php"> via phone number</a>
      <form
        class="psswd-recovery-form"
        method="post"
        action="pswd_recovery.php"
      >
        <input
          type="text"
          name="mail"
          placeholder="Enter Email Address"
          required
        />
        <div class="clearfix">
          <button
            type="cancel"
            style="width: 150px; margin-left: 25px;"
            onclick="window.location='index.php';return false;"
            class="cancelbtn"
          >
            Cancel
          </button>
          <button type="submit" name="resetrequestsubmit" style="width: 150px" class="signup"> Recovery </button>
        </div>
      </form>
    </div>
    <!--END OF PASSWORD RECOVERY FORM-->
  </body>
</html>
