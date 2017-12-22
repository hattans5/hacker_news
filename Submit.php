
<iDOCTYPE html>
    <html>
<head>
<title>Submit news</title>
<link rel="stylesheet" type="text/css" href="newStyle3.css">
</head>
<body>
  <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div id="main">
    <h1>Submit</h1>
    
   <label>Title:
    <p>   <input name="Title"type="text"  id="T" ></p>
 
   </label></br>
    <label>
    URL:
    <p><input name="URL"type="text" ></p>
  
   </label>

  
   <label>number of Comment : 
     <p><input name="comment"type="int" id="Tx"></p>
        
   </label>

     <input name="Add-news" type="submit" value="Add News" action="submit" id="B" >
 


     <div id="Out">   <p id="Output" ></p>
        <p id="Output2" ></p></div>

     
    
</div>
</form>
 
<?php
 
 require_once('./conn.php');
 
 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['Add-news'])) {
            // insert a new news
  
   $title= $_POST["Title"] ;
   $url=$_POST["URL"];
   $comment= $_POST["comment"];
     
    
 $sql = "INSERT INTO HackN (title,url,date,comment) VALUES ('$title','$url',now(),'$comment');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
          
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
}
?>

</body> 

</html>