<?php

// WARNING: NEVER DO THIS IN PRODUCTION
$servername = "localhost";
$username = "hattans5";
$password = "";
$database = "c9";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from HackN";
$result = $conn->query($sql);

$all  = array();

while($row = mysqli_fetch_assoc($result)){
   $all[]= $row;
}
 
  echo json_encode($all[1]);
   

?>
