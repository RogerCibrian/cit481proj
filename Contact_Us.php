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
	
	 <!-- Google reCAPTCHA API Call -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
	function ValidateContactForm(){
		
		var full_name_field = document.forms["myForm"]["name"].value;
		var email_field = document.forms["myForm"]["email"].value;
		var subject_field = document.forms["myForm"]["subject"].value;
		var message_box_field = document.forms["myForm"]["message"].value;


		if (full_name_field == ""){
			alert("Full Name field must be filled");
			return false;
		}
		if (email_field == ""){
			alert("Emaill Address field must be filled in");
			return false;
		}
		if (subject_field == ""){
			alert("Subject field must be filled in");
			return false;
		}	
		if (message_box_field == ""){
			alert("Message field must be filled out");
			return false;
		}
	
		var email = document.getElementById('email_addr');
		var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (!filter.test(email.value)){
			alert("Please provide a valid email address. Example: oinkster159@sbcglobal.net");
			return false;
		}
	}
	
		/***************************
	* RESTRICT KEYWORDS IN MESSAGE BOX
	*8************************8*/
	$(document).ready(function() {
		$('#textarea-box').keyup(function() {
			var textBoxValue = $(this).val();
			console.log(textBoxValue);

			var forbidden = [
				'http', 'https', '.py', '.php', '.exe', '.diff', '.sh',
				'.c', '.wnry', '.java', '.json', '.ps1', '.js', '.pl',
				'.pas', '.rb', '.r', '.sql', '.xml', '.html', 'micro', 'zepto','cerber',
		 		'locky','cerber3','cryp1','mole','onion','axx','osiris','crpyz','crypt',
				'locked', 'odin','ccc', 'cerber2','sage', 'globe','exx','1txt', 'decrypt2017',
				'encrypt','ezz','zzzzz', 'MERRY', 'enciphered', 'r5a','aesir','ecc', 'enigma',
				'cryptowall', 'breaking_bad','angelamerkel','windows10','PEGS1', '1cbu1','venusf',
				'rnsmwr', 'evillock','realfs0ciety@sigiant.org.fs0ciety','zorro', 'hush', 'bin',
				'crypte','dll','rokku','mbed','djvu','.bat','gero','.hese','.seto','.peta', 
				'.moka','.meds','.kvga','.domn','.karl','.nesa','.noos','.kuub','.reco',
				'.bora','.nols','.werd','.coot','.derp','.meka','.toec','.kodg'		
			
			];

			for (var i =0; i < forbidden.length; i++){
				if(textBoxValue.search(forbidden[i]) > -1){
					textBoxValue = textBoxValue.replace(forbidden[i], '');
				}
			}
			$(this).val(textBoxValue);
		});
	});
	


	</script>
    <!---Start of CSS style for contact form-->
    <style>
	/*attempting to fix how it looks on mobile device*/
	/* Center website */
      /* testing for git push on git gui*/
      .main {
        max-width: 850px;
        margin: auto;
      }
	  
	  
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

      /*attempting to fix look on mobile devices*/
      .Contact_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
       /* height: 600px;
        width: 450px;*/
        height: auto;
        width: auto;
        text-align: center;
       /* margin-left: 30%;
        margin-right: 50%;*/
        margin-top: 5%;
        margin-bottom: 10%;
      }


      /*these CSS edits are related to the google recptcha*/ 
      /*testing*/
      .rc-anchor-normal .rc-anchor-pt{
        margin: 2px 11px 0 0;
        text-indent: -25px;

      }
      .rc-anchor-light.rc-anchor-normal{
        border: 1px solid #d3d3d3;
        height: fit-content;
        width: fit-content;
      }
      .rc-anchor-logo-portrait{
        margin: 0;
        width: 58px;
      }
      .rc-anchor-logo-img-portrait{
        background-size: 32px;
        height: 32px;
        margin: 0;
        width: 32px
      }
      .rc-anchor-logo-text{
        cursor: default;
        font-family: Roboto,helvetica,arial,sans-serif;
        font-size: 10px;
        font-weight: 400;
        line-height: 10px;
        margin-top: 5px;
        text-indent: -20px;
      }
      /* Responsive layout - when the screen is less than 600px wide, 
      make the two columns stack on top of each other instead of next 
      to each other */
     /* @media screen and (max-width: 600px) {
        .col-25,
        .col-75,
        input[type="submit"] {
          width: 100%;
          margin-top: 0;
        }
      }*/
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
    <!---trying to test out git push-->
	<div class="main">
    <!----Start of Contact us box-->
    <div class="Contact_container">
      <h1>Contact Us!</h1>
      <p>Please fill in this form to send us your feedback!</p>
	<?php
	if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	if($msg == 'suc'){
		echo '<b><font style="color:#28DF06;">Message sent!</font></b>';}
	else echo "<b>Message failed. Try again!</b>";}
	?>
      <form class="contact-form" name="myForm" onsubmit="return ValidateContactForm()"  method="POST" action="contactform.php">
        <input type="text" name="name" maxlength="40" placeholder="Full name" required/>
        <input type="text" name="email" id="email_addr" maxlength="40" placeholder="Your Email Address" required/>
        <input type="text" name="subject" maxlength="100" placeholder="Subject" required/>
        <textarea name="message" id="textarea-box" maxlength="200" placeholder="Message" required ></textarea>
		<!--recaptcha thing for form-->
		 <div class="g-recaptcha" data-sitekey="6LdsxD4aAAAAAIWbPoSulkJXNVH6py4KRs8on4LR" style="padding-top: 10px; padding-bottom: 10px; margin-left: 30%; margin-right: 30%;"></div>
        <button type="submit" name="submit" style="width: auto">
          SEND MESSAGE
        </button>
      </form>
    </div>
    <!----end of Contact us box-->
    <!---START OF FOOTER-->
	</div>
	<!---end o main class---->
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
  </body>
</html>
