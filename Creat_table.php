<?php
$servername = "localhost";
$username = "Movie";
$password = "as2301";
$port = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<html> 
<body> 
<form action = "insert.php" = method="post">
 รหัสภาพยนตร์:<input type="text" name="firstname" /> <br/> 
ชื่อภาพยนตร์:<input type="text" name="lastname" /> <br/> 
เวลา:<input type="text" name="lastname" /> <br/>  
ชื่อผู้ใช้งาน:<input type="text" name="lastname" /> <br/>
รหัส PIN:<input type="text" name="lastname" /> <br/>
<input type="submit" value="บันทึก" name="submit_btn"/> 
</form> 
</body> 
</html>


