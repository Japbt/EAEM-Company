<!-- https://www.youtube.com/watch?v=JDn6OAMnJwQ 
ระบบlogin ทั้งหมด เอามาจากคลิปนี้-->
<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "login_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
