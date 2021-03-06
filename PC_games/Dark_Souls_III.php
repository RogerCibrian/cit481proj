<?php
session_start();
include '../test_connection.php';
include '../user_rating_form.php';
include '../rememberme.php';
include '../likesdislikes.php';
//multidimentional array of objects
$page = 37;
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
   <link rel="stylesheet" href="../css/PC_games/Dark_Souls_III.css"/>
  
</head>
<body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
    <?php
	include '../fullnavbar2.php';
    ?>
    <!----end of Navigation Bar-->
	<div class="bg"></div>
        <div class="DARKSOULSIII">
        <div class="transbox_darksoulsiii">
            <ul>
              <h2>Dark Souls III</h2>
              <br />
              <br />
              <br />
              <br />
         
              <li>Initial Release Date: April 12, 2016</li>
              <li>Developed  by FromSoftware</li>
              <li> Published by Bandai Namco Entertainment</li>
               <li>
                <a href="https://store.steampowered.com/app/374320/DARK_SOULS_III/">
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
            < <p> 
                Dark Souls III is an action role-playing video game played in a third-person 
                perspective, similar to previous games in the series. Players are equipped with 
                a variety of weapons to fight against enemies, such as bows, throwable projectiles, and 
                swords. Shields can act as secondary weapons but they are mainly used to deflect 
                enemies' attacks and protect the player from suffering damage. Each weapon has two 
                basic types of attack, one being a standard attack, and the other being slightly more 
                powerful that can be charged up. In addition, attacks can be evaded through dodge-rolling. 
                Bonfires, which serve as checkpoints, return from previous installments. Magic is featured 
                in the game, with a returning magic system from Demon's Souls, now known 
                as "focus points" (FP). When performing spells, the player's focus points are consumed. 
                There are two separate types of Estus Flasks in the game, which can be allotted to fit a 
                players' particular play style. One of them refills hit points like previous games in the 
                series, while another refills focus points, a feature new to the game. Throughout the 
                game, players encounter different types of enemies, each with different behaviors. Some of 
                them change their combat pattern during battles. New combat features are introduced in Dark 
                Souls III, including weapon and shield "Skills", which are special abilities that vary from 
                weapon to weapon that enable unique attacks and features at the cost of focus points. The
                 game places more focus on role-playing; the expanded character builder and improved weapons 
                 provide the player with more tactical options.
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
	<textarea class="textarea_line217" rows="2" name="comment"
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