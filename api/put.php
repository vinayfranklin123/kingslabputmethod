<?php
require '../dbconfig.php';

//http://localhost/kingslabputmethod/api/put.php
/*[{
"name":"Sabin"
}]*/

$post = file_get_contents('php://input');
$content = (array)json_decode($post, true);

//print_r($data[0]['name']);

$squery="INSERT INTO list (`listitem`) VALUES ('".$content[0]['name']."')";
$result=$mysqli->query($squery);
?>