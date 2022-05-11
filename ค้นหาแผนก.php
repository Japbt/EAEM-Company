<!DOCTYPE html>
<html lang="th">
<head>
  <title></title><!-- 
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
    <li><a href="หน้าหลัก.php">Home</a></li>
    <li><a href="ข้อมูลเจ้าหน้าที่.php">ข้อมูลเจ้าหน้าที่</a></li>
    <li class="active" ><a href="รวมแผนก.php">ข้อมูลลูกค้า</a></li>
      <li><a href="หน้าสินค้า.php">สินค้า</a></li>
    <!--  <div class="action-list-box">
                <div class="nav navbar-nav"><a href="logout.php">ออกจากระบบ </a></div>
            </div>-->
    </ul>
  </div>
  </nav>
<!-- ปัญญารัตน์เป็นคนสอน  -->
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
<center>
<div class="container">
  <div class="page-header">
    <h2><br></br></h2>
  </div>
</div>
</center>
<body>
<div class="container">
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  
  <form action="ประเภทลูกค้า.php">
  <input  type="submit" value="+ เพิ่มข้อมูลลูกค้าใหม่ " >

  <br>
</form>
</div>
</body>
<div class="container">
          <table class="table table-striped">
    <thead>
      <tr>
         <th>ชื่อ</th>
        <th>แผนก</th>  
        <th>เบอร์โทรศัพท์</th>
        <th>E-mail</th>
        <th>อยู่ที่</th>
        <th>ประวัติการซื้อขาย</th>


      </tr>
    </thead>
    <tbody>
     <!-- https://dev.to/supaluckn/php-mysqli-4ke6 และปรับแก้เอง -->
      <tr>
<td><?php
echo $ID_cardnumber=$_POST["ID_cardnumber"]."<br>";
?>
</td>
<td><?php
echo $name_surname=$_POST["name_surname"]."<br>";
?>
</td>
<td><?php
echo $address_person=$_POST["address_person"]."<br>";
?>
</td>
<td><?php
echo  $province_person=$_POST["province_person"]."<br>";
?>
</td>
<td><?php
echo $distrct_person=$_POST["distrct_person"]."<br>";
?>
</td>
<td><?php
echo $parish_person=$_POST["parish_person"]."<br>";
?>
</td>

</tr>