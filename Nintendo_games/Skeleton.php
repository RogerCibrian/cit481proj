<?php
session_start();
include '../test_connection.php';
include '../user_rating_form.php';

include '../rememberme.php';
include '../likesdislikes.php';
//multidimentional array of objects
$page = 4;
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
<link rel="stylesheet" href="/main.css" />
  <!-------
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script type='text/javascript' src='../js/jquery-3.6.0.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    ---->

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  />
  <script type='text/javascript' src='../js/jquery-3.6.0.min.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../js/all.js" crossorigin="anonymous" data-auto-add-css="false"></script>
    <link
    rel="stylesheet"
    href="../css/fontawesome.min.css"
	/>
  <link rel="stylesheet" href="../style2.css" />
   <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  height: 100%;
  min-width: 800px;
  margin: 0;
  padding: 0;
  background-size: cover;
  background-repeat: repeat;
  background-image: url("/images/Space2.jpg");
  background-position: center;
}

* {
  box-sizing: border-box;
}
html {
  height: 100%;
  margin: 0;
  padding: 0;
}

margin: 30px;
        border: 1px solid black;
        margin: 0rem;
        padding: 0.1 rem;
        height: 244px;
        text-indent: 185px;
        background: url('');
        background-repeat: no-repeat;
        width: 100%;
        height: 234px;
        }

      ul{
        list-style: none;
        margin: 0;
        padding: 20;
      }
      li{
      padding: 0px 5px;
      }

      /* summary transparent box    */
      div.transbox {
        margin: 0;
        background-color: #ffffff;
        border: 1px solid black;
        opacity: 0.5;
        }
        div.transbox p {
            margin: 5%;
            font-weight: bold;
            color: #000000;
            text-indent:50px;
            }
    /*  COMMENT/  USER RATING*/
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

      .UserRating_container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        height: 450px;
        width: 100%;
        text-align: center;
	justify-content: center;
        margin-left: 0%;
        margin-right: 20%;
        margin-top: 0%;
        margin-bottom: 0%;
      }

      .unchecked {
        color: black;
      } 
  /*START OF FOOTER EDITING*/
.footer {
  left: 0;
  bottom: 0;
  width: 100%;
  background: black;
  padding: 4px 6px;
  font-size: 14px;
  font-family: "Times New Roman", Times, serif;
  text-align: center;
  position: relative;
  margin-top: 100%;
  margin: 0 auto;
}
/*END OF FOOTER EDITING*/
//comment section
.count {
     font-family:"Comic Sans MS", cursive, sans-serif;
     font-weight: bold;
}
.comment_container {
     margin-left: 35px;
     margin-right: 35px;
     font-family:"Comic Sans MS", cursive, sans-serif;
     color: white;
}
.name {
     font-size: 18px;
}
.comment {
margin-top: 15px;
border-style: solid;
background-color: rgba(0,0,0, 0.7);
}
.Content {
     margin-top:5px;
     font-size: 15px;
     margin-bottom: 5px;
}
.replies {
     margin-top:5px;
     margin-left: 25px;
     border-style: solid;
     background-color: rgba(0,0,0, 0.7);

}
.form-popup {
    display: none;
    border: 3px solid #f1f1f1;
    z-index: 9;
}

/*.replies {	margin-left:20px;
}*/
.checked {
 padding:0;
 color: orange;
}

.open-button{
 background-color: #006400;
 font-size: 16px;
 padding: 4px 10px;
 border: none;
 border-radius: 8px;
 margin: 4px 4px
}
.button {
 background-color: #FF0000;
 opacity: 0.5;
 font-size: 16px;
 padding: 4px 10px;
 border: none;
 border-radius: 8px;
 margin: 4px 4px

}

.button2 {
 background-color: #696969;
 opacity: 0.5;
 font-size: 16px;
 padding: 4px 10px;
 border: none;
 border-radius: 8px;
 margin: 4px 4px
}
.button:hover {
 opacity: 1.0;
}
.button2:hover {
 opacity: 1.0;
}
.average{
 display:flex;
border: none;
  align-self: left;
  text-align: left;
  justify-content: left;
  padding:0;
  margin:0 auto;
  height: 50px;
        font-size: 1.70rem;
        overflow: auto;
        position: relative;
        width: 50%;
        border-radius: none;
        margin: 0rem;
	margin-top: 14px;
        padding: 0.1 rem;
        outline-offset: 0.25rem;
        height: 20px;
        text-indent: 20px;

}
    </style>

</head>
<body>
    <!----start of  Navigation Bar with search bar, member login, sign up-->
    <?php
	include '../fullnavbar2.php';
	echo '<pre>';
	var_dump($_SESSION);
	echo '</pre>';
    ?>
    <!----end of Navigation Bar-->

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
********
            </p> 
        </div> 
        <!---START OF comment section-->
        <div class="UserRating_container">
          <h1>Give us your feedback below!</h1>
          <p>Review Section</p>
<form class="userrating-form" method="POST" action="../user_rating_form.php">
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
              name="submit"
              style="width: 300px; background-color: green; color: white;">
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
 <i class="fas fa-thumbs-up"></i>
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
 <i class="fas fa-thumbs-down"></i>
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
<!-- end of likes section for parent comments-->   <button class="open-button" onclick="openForm(<?php echo $num; ?>)">reply</button>
     <div class="form-popup" id="<?php echo $num; ?>">
      <form class="form-container" method="POST" action="../user_rating_form.php">
<!--review tables has to be altered to make rating an optional field -->
	 <input type='hidden' name='uid' value="<?php echo $_SESSION['id']; ?>">
	 <input type='hidden' name='date' value="<?php echo date('Y-m-d H:i:s')?>">
	 <input type='hidden' name='parent_comment' value="<?php echo $comment->review_id; ?>">
	 <input type='hidden' name='page_id' value="<?php echo $page; ?>">
	<textarea style="color:black;" rows="2" name="comment"
	placeholder="Enter your reply here..."></textarea>
	 <button class="button" type="submit" class="btn">Submit</button>
	 <button class="button2" type="button" class="btn cancel"
	  onclick="closeForm(<?php echo $num++; ?>)">Close</button>
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
 <i class="fas fa-thumbs-up"></i>
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
 <i class="fas fa-thumbs-down"></i>
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
    </div>    </div>
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
    <script type="text/javascript">
      var count;

      function starmark(item) {
        count = item.id[0];
        //sessionStorage.starRating = count;
        var subid = item.id.substring(1);
        for (var i = 0; i < 5; i++) {
          if (i < count) {
            document.getElementById(i + 1 + subid).style.color = "orange";
          } else {
            document.getElementById(i + 1 + subid).style.color = "black";
          }
        }
      }
	//i think this is jquery
	//function finalrating(item) {
	//var count = item.id[0];
	//$.post("../user_rating_form.php", {rating:count});
       
	/*Timestamp javascript code */
       var dt = new Date();
      document.getElementById("datetime").innerHTML =
        ("0" + (dt.getMonth() + 1)).slice(-2) +
        "/" +
        ("0" + dt.getDate()).slice(-2) +
        "/" +
        dt.getFullYear() +
        " " +
       dt.toLocaleTimeString();
      /*
      function result() {
        //Rating : Count
        //Review : Comment(id)
        alert(
          "Rating : " +
            count +
            "\nReview : " +
            document.getElementById("comment").value
        );
      }*/

  function openForm($id) {
   document.getElementById($id).style.display = "block";
}
// likes click events stop submit with ajax call
$('.likesContainer').submit(function(e){
e.preventDefault();
        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : $(this).serialize()
           /* success : function() {
             alert('liked!');
            //alert("Thanks for your comment");
        }*/
    });

});
$('.dislikesContainer').submit(function(e){
e.preventDefault();
        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : $(this).serialize()
            /*success : function() {
             alert('didnt like it!');
        }*/
    });

});
    </script>
</body>
</html>