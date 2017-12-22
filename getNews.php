<?php
$servername = "localhost";
$username = "hattans5";
$password = "";
$database = "c9";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT * FROM HackN";
$result = $conn->query($sql);

$all  = array();
$count=0;
while($row = $result->fetch_array()){
 // echo $row ;
  echo "</br>";
  
  $all[$count] = $row;
 
  $count++;
}

 //echo "----------------------------------------------" ;


   echo json_encode($all);
   
    
     



?>
