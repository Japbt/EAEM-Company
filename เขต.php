<!DOCTYPE html>
<html lang="th">
<head>
  <title>หน้าหลัก</title><!-- 
https://www.w3schools.com/howto/howto_js_topnav.asp-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">EAEM</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="หน้าหลัก.php">Home</a></li>
      <li class="active" ><a href="#">ข้อมูลเจ้าหน้าที่</a></li>
      <li><a href="รวมแผนก.php">ข้อมูลลูกค้า</a></li>
      <li><a href="หน้าสินค้า.php">สินค้า</a></li>
    <!--  <div class="action-list-box">
                <div class="nav navbar-nav"><a href="logout.php">ออกจากระบบ </a></div>
            </div>-->
    </ul>
  </div>
</nav>
<body>
<!-- https://www.rangforever.com/detail.php?id_t=9&id=117 -->
<?php

include('dbconnect.php');
$query = "SELECT * FROM data_sales";
 //WHERE 	data_sales != 'ภาคใต้ตอนบน' ";
 //county_sales
$result=mysqli_query($connect,$query);
 ?>

<center>
  <div class="page-header">
    <h3><br>เขตภาคใต้ตอนบน</br></h3>  
    
  </div>
</center>
<!-- ปัญญารัตน์เป็ฯคนสอน -->
<style>
  input[type=submit] {
  width: 15%;
  background-color: #04AA6D;
  color: white;
  padding: 5px 10px;
  margin: 10px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
<body>
<div class="container">
<form action="ฟรอมข้อมูลเซลล์.php"> 
              <input  type="submit" value="ข้อมูลส่วนตัว" >
              <br>
 </form>
</div> 
  <div class="container">
  <table class="table table-bordered">

    <thead>
      <tr>
        <th> ID-sale </th>
        <th> ชื่อ - นามสกุล </th>
        <th> เบอร์ที่ติดต่อ </th>
        <th> ตำแหน่ง </th>
        <th> สถานะ </th>
        <th> ภาคที่รับผิดชอบ</th>
      </tr>
    </thead>
    <tbody>
      <!-- https://www.thaicreate.com/php/forum/035751.html และปรับแก้เองตามความเ้าใจ-->
      <?php 
      foreach ($result as $row) { ?>
      <tr>
          <td> <?php echo $row['ID_person_sales']; ?> </td>
          <td> <?php echo $row['name_surname_sales']; ?> </td>
          <!--<a href="ฟรอมข้อมูลเซลล์.php">-->
          <td> <?php echo $row['phone_number_sales']; ?> </td>
          <td> <?php echo $row['position_sales']; ?> </td>
          <td> <?php echo $row['working_status']; ?> </td>
          <td> <?php echo $row['county_sales']; ?> </td>
      </tr>
      <?php } ?>
    </tbody>
</table>
    </div>
<?php  mysqli_close($connect);

?>

</body>
  
