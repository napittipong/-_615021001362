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


<table border="2" style="width:60%">
    <tr>
    <form method="get" id="form" enctype="multipart/form-data" action="insert_from.php">
        <button class="button4">เพิ่มข้อมูล</button>
    </form>
    </tr>
    <div>
    <form method="get" id="form" enctype="multipart/form-data" action="">
      <input type="text" name="search" placeholder="รหัสนักศึกษา.." value="">
      <input type="submit" class="button5" value="ค้นหา">
    </form>
    </div>
    <tr id="th">
        <th>รหัสภาพยนต์</th>
        <th>ชื่อภาพยนต์</th>
        <th>เวลาที่ฉาย</th>
        <th>ชื่อผู้ใช้</th>
        <th>รหัสผ่าน</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
    </tr>
</table>
</body>
</html>



