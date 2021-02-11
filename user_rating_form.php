<?php
include 'test_connection.php';
$servername = "rottenpotatodb.cjmbcqw5ubno.us-east-1.rds.amazonaws.com:3306";
$username = "rottenuser";
$password = "rotten123";
$database = "mydatabase";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//print_r($_POST);
//var_dump($_POST);
//$rating = $_POST['rate'];
//$date=$_POST['date'];


//value for name has to be chagned to the user that is signed on

if (isset($_POST['page_id'])) {

	if (isset($_POST['uid'], $_POST['comment'])) {
	// Insert a new review (user submitted form)
	//have to include if post rate is not set then insert a default -1
	$stmt = $conn->prepare('INSERT INTO reviews (review_date, review_content, review_score, review_user, Review_game, review_parent) VALUES (?,?,?,?,?,?)');
	$stmt->bind_param('ssiiii', $_POST['date'], $_POST['comment'],$_POST['rate'], $_POST['uid'], $_POST['page_id'], $_POST['parent_comment']);
	        $stmt->execute();
	        $stmt->close();
	       exit();
	
	}
//get all comments by the page id ordered by the submit date
	$stmt = $mysqli->prepare("SELECT * FROM reviews WHERE Review_game = ? ORDER BY review_date DESC");
	$stmt->bind_param("s", $_POST=['page_id']);
	$stmt->execute();
	$comments = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	// get total number of comments
	$stmt = $mysqli->prepare("SELECT COUNT(*) AS total_comments FROM reviews WHERE Review_game = ?");
	$stmt->bind_param("s", $_POST['page_id']);
	$stmt->execute();
	$comments_info = $stmt->get_result()->fetch_assoc();

} 
//else {
//	exit('no page id specified');

//}

//function to formulate comments
function display_comments($x,$conn){
$pagenum = $x;
$getcomments = $conn->prepare("SELECT review_id, review_date, review_content,
                              review_score, review_parent, users.user_username
                              FROM reviews INNER JOIN users
                              ON reviews.review_user = users.user_id
                              WHERE Review_game = $pagenum
                              ORDER BY review_id DESC");
//shoudl be $POST[PAGE NUMBER]

class myClass {}
$arr = [];
$getcomments->execute();
$result = $getcomments->get_result();
while($row = $result->fetch_object('myClass')) {
 $arr[] = $row;
}
$getcomments->close();
//print_r($arr);
return $arr;
}

//get comments in ascending order by date
function display_comments2($x2,$conn){
$pagenum2 = $x2;
$getcomments2 = $conn->prepare("SELECT review_id, review_date, review_content,
                              review_score, review_parent, users.user_username
                              FROM reviews INNER JOIN users
                              ON reviews.review_user = users.user_id
                              WHERE Review_game = $pagenum2
                              ORDER BY review_date ASC");
//shoudl be $POST[PAGE NUMBER]

class myClass2 {}
$arr2 = [];
$getcomments2->execute();
$result2 = $getcomments2->get_result();
while($row2 = $result2->fetch_object('myClass2')) {
 $arr2[] = $row2;
}
$getcomments2->close();
return $arr2;
}

//get average rating 
function average_rating($a,$conn){
$page = $a;
$getaverage = $conn->prepare("SELECT AVG(review_score) AS AverageScore 
			     FROM reviews
			     WHERE Review_game = $page");
$getaverage->execute();
$avg = $getaverage->get_result()->fetch_row();
$average = $avg[0];
$getaverage->close();
return $average;
}
?>

