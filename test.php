
<?php

require_once('./conn.php');

$sql = "SELECT  * FROM HackN";
$result = $conn->query($sql);

$all  = array();

while($row = $result->fetch_assoc()){
  
  $all[]=$row;
  
  
}

 echo '<h1> ' ,$all[0]["url"], '</h1>' ;



 




?>
