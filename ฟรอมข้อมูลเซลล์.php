
<!DOCTYPE html>
<html lang="th">
<head>
  <title>หน้าหลัก</title><!-- 
https://www.w3schools.com/howto/howto_js_topnav.asp -->
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
      <li><a href="เขต.php">ข้อมูลเจ้าหน้าที่</a></li>
      <li><a href="รวมแผนก.php">ข้อมูลลูกค้า</a></li>
      <li><a href="หน้าสินค้า.php">สินค้า</a></li>
    <!--  <div class="action-list-box">
                <div class="nav navbar-nav"><a href="logout.php">ออกจากระบบ </a></div>
            </div>-->
    </ul>
  </div>
</nav>

<body>
  <!-- https://www.mindphp.com/forums/viewtopic.php?f=74&t=18556 
เงื่อนไขศึกษษจากเว็บนี้ แลวก็ลองผิดลองถูกเอง-->
<?php

include('dbconnect.php');
$query = "SELECT * FROM data_sales_person";

$result=mysqli_query($connect,$query);
 ?>
<center>
  <div class="page-header">
    <h3><br>ข้อมูลส่วนตัว</br></h3>  
    
  </div>
</center>
  <div class="container">
  <table class="table table-bordered">

  <style>
    body {
  font-family: Arial;
}

    div.container {
  width: 150vmin;
  height: 30vmin;
  border-radius:30px;
  background-color: #f2f2f2;
  padding: 30px;
}
  </style>
    <thead>
      <tr>
        <th> ID-sale </th>
        <th> เลขบัตรประชาชน </th>
        <th> ชื่อ - นามสกุล </th>
        <th> ที่อยู่ </th>
        <th> จังหวัด </th>
        <th> อำเภอ </th>
        <th> ตำบล </th>
        <th> เลขรหัสไปรษณีย์ </th>
        <th> เบอร์ที่ติดต่อ </th>
        <th> ญาติที่ติดต่อได้ </th>
        <th> ความสัมพันธ์ </th>
        <th> เบอร์ที่ติดต่อ </th>
      </tr>
    </thead>
    <tbody>
      <!-- https://www.thaicreate.com/php/forum/035751.html ดูจากเว็บนี้และลองปรับแก้เองตามความเข้าใจ -->
      <?php 
      foreach ($result as $row) { ?>
      <tr>
          <td> <?php echo $row['ID_person_sales_person']; ?> </td>
          <td> <?php echo $row['IDcardnumber_sales_person']; ?> </td>
          <td><?php echo $row['name_surname_sales_person']; ?> </td>
          <td><?php echo $row['address_sales_person']; ?> </td>
          <td> <?php echo $row['province_sales_person']; ?> </td>
          <td> <?php echo $row['district_sales_person']; ?> </td>
          <td> <?php echo $row['parish_sales_person']; ?> </td>
          <td> <?php echo $row['zip_code_sales_person']; ?> </td>
          <td> <?php echo $row['phone_number_sales_person']; ?> </td>
          <td> <?php echo $row['contact_person_name_sales_person']; ?> </td>
          <td> <?php echo $row['relationship_sales_person']; ?> </td>
          <td> <?php echo $row['contact_number_sales_person']; ?> </td>
      </tr>
      <?php } ?>
    </tbody>
</table>
    </div>
<?php  mysqli_close($connect);

?>
</body>
</html>

