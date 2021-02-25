<?php
include 'test_connection.php';
// Check connection
//if ($conn->connect_error) {
 // die("Connection failed: " . $conn->connect_error);
//}
//value for name has to be chagned to the user that is signed on

if (isset($_POST['input1'])) {

        if (isset($_POST['uid'], $_POST['date'])) {
        // Insert a new review (user submitted form)
        //have to include if post rate is not set then insert a default -1
        $stmt = $con->prepare('INSERT INTO likes (usr, date, likesvalue, dislikevalue, page, parent) VALUES (?,?,?,?,?,?)');
        $stmt->bind_param('ssiiii', $_POST['uid'], $_POST['date'], $_POST['input1'], $_POST['input2'], $_POST['page_id'], $_POST['parent_comment']);
                $stmt->execute();
                $stmt->close();
               exit();

        }
}
if (isset($_POST['input2'])) {

        if (isset($_POST['uid'], $_POST['date'])) {
        // Insert a new review (user submitted form)
        //have to include if post rate is not set then insert a default -1
        $stmt = $con->prepare('INSERT INTO likes (usr, date, likesvalue, dislikevalue, page, parent) VALUES (?,?,?,?,?,?)');
        $stmt->bind_param('ssiiii', $_POST['uid'], $_POST['date'], $_POST['input1'], $_POST['input2'], $_POST['page_id'], $_POST['parent_comment']);
                $stmt->execute();
                $stmt->close();
               exit();

        }
}
function LikesCount($con){
    //class Thumbs {}
    $p = 7;
    $stmt2 = $con->prepare("SELECT date, COUNT(likesvalue), COUNT(dislikevalue) FROM likes WHERE page = ? GROUP BY date ORDER BY date DESC");
    $stmt2->bind_param('i', $p);
    $stmt2->execute();
    $arr = $stmt2->get_result()->fetch_all(MYSQLI_ASSOC);
    //echo "hello there";
    //print_r($arr);
    return $arr;
    $stmt2->close();
}
//get user likes and dislikes per date
function LikesCount2($con,$usr,$id){
    //class Thumbs {}
    //$ussser = 'Chuyinho';
    //$pagge = 7;
    $stmt2 = $con->prepare("SELECT date, COUNT(likesvalue), COUNT(dislikevalue) FROM likes WHERE usr = ? AND page = ? GROUP BY date ORDER BY date DE$        $stmt2->bind_param('si', $usr, $id);
    $stmt2->execute();
    $arr = $stmt2->get_result()->fetch_all(MYSQLI_ASSOC);
    //echo "hello there";
    //print_r($arr);
    return $arr;
    $stmt2->close();
}
//get all comments by the page id ordered by the submit date
function likes($x,$con){
    $stmt2 = $con->prepare("SELECT * FROM likes WHERE page = 7 ORDER BY date DESC");
    $stmt2->execute();
    $likess = $stmt2->get_result()->fetch_all(MYSQLI_ASSOC);
    //if($likess) alert('No rows');
    $stmt2->close();
//      return = $likess;
    //print_r($likess);
}

?> 