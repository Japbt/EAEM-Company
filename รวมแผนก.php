<!DOCTYPE html>
<html lang="th">
<head>
  <title>หน้าหลัก</title>
  <!-- 
<https://www.w3schools.com/howto/howto_js_topnav.asp แท็บข้างบน และปรับแก้เอง--> -->
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
      <li ><a href="เขต.php">ข้อมูลเจ้าหน้าที่</a></li>
      <li class="active"  ><a href="รวมแผนก.php">ข้อมูลลูกค้า</a></li>
      <li><a href="หน้าสินค้า.php">สินค้า</a></li>
    <!--  <div class="action-list-box">
                <div class="nav navbar-nav"><a href="logout.php">ออกจากระบบ </a></div>
            </div>-->
    </ul>
  </div>
</nav>
<body>

<?php

include('dbconnect.php');

$query = "SELECT * FROM governmant_agency";
// https://docs.google.com/document/d/1HRoI3Sqc6ctIiaN3GOXSeSttgy7kJuBYgMg_m_wVFH4/edit  ดูเงื่อนไขจากเว็บนี้ 
 //WHERE 	data_sales != 'ภาคใต้ตอนบน' ";
 //county_sales
$result=mysqli_query($connect,$query);
 ?>

<center>
  <div class="page-header">
    <h3><br>*ชื่อรพ. (ยังทำไม่ได้)*</br></h3>  
    
  </div>
</center>

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
<form action="ประเภทลูกค้า.php"> 
              <input  type="submit" value="+ เพิ่มข้อมูลลูกค้าใหม่ " >
              <br>
 </form>
</div> 
  <div class="container">
  <table class="table table-bordered">

    <thead>
      <tr>
        <th> แผนก </th>
        <th> เบอร์ที่ติดต่อ </th>
        <th> E-mail </th>
        <th> ที่อยู่ </th>
        <th> ประวัติการสั่งซื้อ</th>
      </tr>
    </thead>
    <tbody>
      <!-- https://www.mindphp.com/forums/viewtopic.php?f=74&t=18556
    ศึกษาจากเว็บนี้และ ลองปรับแก้เอง-->
      <?php 
      foreach ($result as $row) { ?>
      <tr>
          <td> <?php echo $row['division_governmant']; ?> </td>
          <td> <?php echo $row['phone_number']; ?> </td>
          <!--<a href="ฟรอมข้อมูลเซลล์.php">-->
          <td> <?php echo $row['Email_governmant']; ?> </td>
          <td> <?php echo $row['address_governmant']; ?> </td>
        <!--  <td> <?php echo $row['working_status']; ?> </td> -->

      </tr>
      <?php } ?>
    </tbody>
</table>
    </div>
<?php  mysqli_close($connect);

?>

</body>
  
