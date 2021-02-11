<?php

$dbhash = '$2y$10$QJ801BtMnJtVS7v7K0Eux.J7ShmNVvlkbVdmD7ezVvZNLnmhY6zUG';

$newpw = 'test1';

$hashtest = password_hash($newpw, PASSWORD_DEFAULT);

echo $hashtest;

$date = date("U");
$dateexpire = date("U") + 1800;

if(password_verify($newpw, $dbhash)){
echo "youre good";}
else echo "nope";

echo "\n\r";
echo "$date\n\r";
echo "$dateexpire";

?>
