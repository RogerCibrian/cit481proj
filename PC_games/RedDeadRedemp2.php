<?php
session_start();
include '../test_connection.php';
include '../user_rating_form.php';
include '../rememberme.php';
include '../likesdislikes.php';
//multidimentional array of objects
$page = 45;
$multiobj = display_comments($page,$con);
$multiobj2 = display_comments2($page,$con);
$average_r = average_rating($page,$con);
$avr_final = round($average_r);
//subtract average from 5
$final_avg = 5;
$final_avg -= $avr_final;
//print_r($avr_final);
$counterLikes = LikesCount($con,$page);
$usrName = $_SESSION['name'];
$userLikes = LikesCount2($con,$usrName,$page);
//count how many comments have been submitted.
//need to include a where clause to filter correct page
$nbc = $con->prepare("SELECT COUNT(review_id) FROM reviews WHERE Review_game = $page");
$nbc->execute();
$nbcomments = $nbc->get_result()->fetch_row();
//variable $comm holds the amount of comments
$comm = $nbcomments[0];
$nbc->close();
//counters for likes feature section
$num2 = 0;
$num = 0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RottenPotatoes</title>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="/main.css" /> 
	<script src="../js/all.js" crossorigin="anonymous" data-auto-add-css="false"></script>
    <link
    rel="stylesheet"
    href="../css/fontawesome.min.css"
	/>
  <link rel="stylesheet" href="../style2.css" />

  <!-------css edits are in external css link----->
  <link rel="stylesheet" href="../css/PC_games/RedDeadRedemp2.css"/>

</head>
<body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
    <?php
	include '../fullnavbar2.php';
    ?>
    <!----end of Navigation Bar-->
	<div class="bg"></div>
        <div class="REDDEADREDEMPTION2">
        <div class="transbox_reddeadredemp2">
            <ul>
              <h2>Red Dead Redemption 2 </h2>
              <br />
              
         
              <li>Initial Release Date: November 5, 2019</li>
              <li>Developed  by Rockstar Studios</li>
              <li> Published by Rockstar Games</li>
               <li>
                <a href="https://socialclub.rockstargames.com/store/rdr2Standard">
                <strong>Available in the Rockstar Warehouse Store</strong></a>
               </li> 
               <p class="p_text_store">or</p>
               <li>
                <a href="https://store.steampowered.com/app/1174180/Red_Dead_Redemption_2/">
                <strong>Available in the Steam Store</strong></a>
               </li> 
            </ul>

<div class="average">
<?php for ($i=1; $i <= $avr_final; $i++): ?>
      <span class="fa fa-star checked"></span>
<?php endfor; ?>
<?php for ($i=1; $i <= $final_avg; $i++): ?>
      <span class="fa fa-star"></span>
<?php endfor; ?>
</div>
        </div>
        </div>
<div class="transbox">
             <p> 
                Red Dead Redemption 2 is a Western-themed action-adventure game and the story
                 is set in 1899 in a fictionalized representation of the Western, Midwestern, and 
                 Southern United States and follows outlaw Arthur Morgan, a member of the Van der 
                 Linde gang. Arthur must deal with the decline of the Wild West whilst attempting 
                 to survive against government forces, rival gangs, and other adversaries. The 
                 story also follows fellow gang member John Marston, the protagonist of Red Dead 
                 Redemption. The game is presented through both first and third-person 
                 perspectives, and the player may freely roam in its interactive open world.
                  Gameplay elements include shootouts, heists, hunting, horseback riding, interacting 
                  with non-player characters, and maintaining the character's honor rating through
                   moral choices and deeds. A bounty system similar to the "wanted" system from the
                    Grand Theft Auto franchise governs the response of law enforcement and bounty 
                    hunters to crimes committed by the player.  
              </p>  
        </div> 
        <!---START OF comment section-->
        <div class="UserRating_container">
          <h1>Give us your feedback below!</h1>
          <p>Review Section</p>
<form id="java" class="userrating-form" method="POST" action="../user_rating_form.php">
<input type='hidden' name='uid' value="<?php echo $_SESSION['id']; ?>">
<input type='hidden' name='date' value="<?php echo date('Y-m-d H:i:s')?>">
<input type='hidden' name='parent_comment' value="-1";>
	   <input type='hidden' name='page_id' value="<?php echo $page; ?>">
<!--parent_comment is review_parent reviews table-->
<!--input username from session or cookie when sending comment to database -->
<div class="center">
	      <div class="stars">
	        <input type="radio" id="five" name="rate" value="5">
	        <label for="five"></label>
	        <input type="radio" id="four" name="rate" value="4">
	        <label for="four"></label>
	        <input type="radio" id="three" name="rate" value="3">
	        <label for="three"></label>
	        <input type="radio" id="two" name="rate" value="2">
	        <label for="two"></label>
	        <input type="radio" id="one" name="rate" value="1">
	        <label for="one"></label>
	        <span class="result"></span>
               </div>
</div>
<br><br>
  <textarea class="form-control" rows="2" name="comment" 
placeholder="Enter your comment here..."></textarea>
             <!----Timestamp MM/DD/YYYY HH:MIN:SEC AM/PM-->
        <p>Date/Time: <span id="datetime"></span></p>
            <button
              class="btn btn-lg btn-post"
              type="submit"
              name="submit">
              Post!
            </button>
          </form>
        </div>
    <div class="comment_container">
	<div class="count"><h2><b><?php echo "$comm"; ?> comments</b></h2></div>
 	<div class="Comments" id="pComments">
        <?php foreach ($multiobj as $comment): ?>
	<?php if ($comment->review_parent == -1): ?>
<div class="comment">
 <div class="name"><?php echo $comment->user_username; ?> <span class="date"> <?php echo $comment->review_date; ?></span></div>
  <div class="Content"><?php echo $comment->review_content; ?> </div>
<!--start of likes section -->
<div class="LikeAndReplies">
<!-- form for likes -->
<form class="likesContainer" action="../likesdislikes.php" method="POST" id="l<?php echo $num; ?>">
<input type="hidden" id="input1" value="1" name="input1">
<input type='hidden' name='uid' value="<?php echo $_SESSION['name']; ?>">
<input type='hidden' name='page_id' value="<?php echo $page; ?>">
<input type='hidden' name='date' value="<?php echo $comment->review_date; ?>">
<input type='hidden' name='parent_comment' value="-1";>
</form>
<button class="btn2" type="submit" form="l<?php echo $num; ?>" value="Submit" id="likebtn">
<i class="thum fa_thumbs_up"></i>
</button>
<!-- show like count summary -->
<?php foreach ($counterLikes as $Tup): ?>
<?php if ($Tup['date'] == $comment->review_date): ?>
<h2 id="likess"><?php echo $Tup['COUNT(likesvalue)'] ?></h2>
<?php $nope = 1; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php if ($nope == 0): ?>
<h2 id="likess">&nbsp;</h2>
<?php endif; ?>
<?php $nope = 0; ?>
<!-- form for dislikes-->
<form class="dislikesContainer" action="../likesdislikes.php" method="POST" id="d<?php echo $num; ?>">
<input type="hidden" id="input2" value="1" name="input2">
<input type='hidden' name='uid' value="<?php echo $_SESSION['name']; ?>">
<input type='hidden' name='page_id' value="<?php echo $page; ?>">
<input type='hidden' name='date' value="<?php echo $comment->review_date; ?>">
<input type='hidden' name='parent_comment' value="-1">
</form>
<button class="btn2" type="submit" form="d<?php echo $num; ?>" value="Submit" id="dislikebtn">
 <i class="thum fa_thumbs_down"></i>
</button>
<!-- show like count summary dislikes -->
<?php foreach ($counterLikes as $Tdown): ?>
<?php if ($Tdown['date'] == $comment->review_date): ?>
<h2 id="dislikess"><?php echo $Tdown['COUNT(dislikevalue)'] ?></h2>
<?php $nope2 = 1; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php if ($nope2 == 0): ?>
<h2 id="dislikess">&nbsp;</h2>
<?php endif; ?>
<?php $nope2 = 0; ?>
</div>
<!-- end of likes section for parent comments--> 
   <button class="open-button" id="open-button">reply</button> 
       <div class="form-popup" id="<?php echo $num; ?>"> 
      <form class="form-container" method="POST" action="../user_rating_form.php">
<!--review tables has to be altered to make rating an optional field -->
	 <input type='hidden' name='uid' value="<?php echo $_SESSION['id']; ?>">
	 <input type='hidden' name='date' value="<?php echo date('Y-m-d H:i:s')?>">
	 <input type='hidden' name='parent_comment' value="<?php echo $comment->review_id; ?>">
	 <input type='hidden' name='page_id' value="<?php echo $page; ?>">
	<textarea class="textarea_line214" rows="2" name="comment"
	placeholder="Enter your reply here..."></textarea>
	 <button class="button" type="submit" class="btn">Submit</button>
	 <button class="button2" type="button" id="button2"  class="btn cancel">Close</button>
      </form>
    </div>
  </div>
<?php endif;?>
<?php foreach ($multiobj2 as $replies): ?>
<?php if ($replies->review_parent != -1): ?>
<?php if ($replies->review_parent == $comment->review_id): ?>
     <div class="replies">
        <div class="name"><?php echo $replies->user_username;?><span> <?php echo $replies->review_date;?></span></div>
        <div class="Content"><?php echo $replies->review_content;?></div>
<!-- start of likes for replies-->
<div class="LikeAndReplies2">
<!-- form for likes for replies-->
<form class="likesContainer" action="../likesdislikes.php" method="POST" id="e<?php echo ++$num2; ?>">
<input type="hidden" id="input1" value="1" name="input1">
<input type='hidden' name='uid' value="<?php echo $_SESSION['name']; ?>">
<input type='hidden' name='page_id' value="<?php echo $page; ?>">
<input type='hidden' name='date' value="<?php echo $replies->review_date; ?>">
<input type='hidden' name='parent_comment' value="<?php echo $replies->review_id; ?>">
</form>
<button class="btn2" type="submit" form="e<?php echo $num2; ?>" value="Submit" id="likebtn">
<i class="thum fa_thumbs_up"></i>
</button>
<!-- show like count summary for replies -->
<?php foreach ($counterLikes as $Tup): ?>
<?php if ($Tup['date'] == $replies->review_date): ?>
<h2 id="likess"><?php echo $Tup['COUNT(likesvalue)'] ?></h2>
<?php $nope3 = 1; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php if ($nope3 == 0): ?>
<h2 id="likess">&nbsp;</h2>
<?php endif; ?>
<?php $nope3 = 0; ?>
<!-- form for dislikes for replies-->
<form class="dislikesContainer" action="../likesdislikes.php" method="POST" id="f<?php echo ++$num2; ?>">
<input type="hidden" id="input2" value="1" name="input2">
<input type='hidden' name='uid' value="<?php echo $_SESSION['name']; ?>">
<input type='hidden' name='page_id' value="<?php echo $page; ?>">
<input type='hidden' name='date' value="<?php echo $replies->review_date; ?>">
<input type='hidden' name='parent_comment' value="<?php echo $replies->review_id; ?>">
</form>
<button class="btn2" type="submit" form="f<?php echo $num2; ?>" value="Submit" id="dislikebtn">
 <i class="thum fa_thumbs_down"></i>
</button>
<!-- show like count summary -->
<?php foreach ($counterLikes as $Tdown): ?>
<?php if ($Tdown['date'] == $replies->review_date): ?>
<h2 id="dislikess"><?php echo $Tdown['COUNT(dislikevalue)'] ?></h2>
<?php $nope4 = 1; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php if ($nope4 == 0): ?>
<h2 id="dislikess">&nbsp;</h2>
<?php endif; ?>
<?php $nope4 = 0; ?>
</div>
</div>
		 <?php endif; ?>
		 <?php endif; ?>
		 <?php endforeach; ?>
		 <?php endforeach; ?>
		    </div>
		    </div>
		 </div>
	         </div>
	      </div>
        <!---End OF comment section-->
        <!---START OF FOOTER-->
    <div class="footer">
      <p>
        Video games, pictures, all trademarks, and registered trademarks are the
        property of their respective owners.
      </p>
      <p>© 2020 RottenPotatoes</p>
    </div>
    <!---END OF FOOTER-->
    <input type="hidden" id="myPhpValue" value='<?php echo json_encode($userLikes); ?>'/>
<script type="text/javascript" src='../js/commentSystem.js'></script>

</body>
</html>