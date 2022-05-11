<!DOCTYPE html>
<html lang="th">
<head>
  <title>ประเภทลูกค้า</title><!-- 
https://www.w3schools.com/howto/howto_js_topnav.asp  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">,
      <a class="navbar-brand" href="#">EAEM</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="หน้าหลัก.php">Home</a></li>
      <li><a href="ข้อมูลเจ้าหน้าที่.php">ข้อมูลเจ้าหน้าที่</a></li>
      <li ><a href="รวมแผนก.php">ข้อมูลลูกค้า</a></li>
      <li><a href="หน้าสินค้า.php">สินค้า</a></li>
    <!--  <div class="action-list-box">
                <div class="nav navbar-nav"><a href="logout.php">ออกจากระบบ </a></div>
            </div>-->
    </ul>
  </div>
</nav>
</body>
<center>
<div class="container">
  <div class="page-header">
    <h2><br>ประเภทลูกค้า</br></h2>
  </div>
</div>
</center>
<!-- ปัญญษรัตน์เป็นคนสอน-->
<style>

  .one:link,.one:visited 
  {
    display: block;
    background-color: #204ed8;
    color: white;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    font-size:18px;
    font-weight: bold;

    width:40%; 
    height:40%; 
    margin-bottom:30px; 
    margin-left: 30%;

  } 
  .one:hover, .one:active 
  {
    color: white;
    background-color: #00008B;
    /* margin:50px; */
  }

</style>
<!-- เขียนเอง -->
<div>
  <a href="บุคคล.php" class="one" >ข้อมูลบุคคล</a>
  <a href="เอกชน.php" class="one" >ข้อมูลหน่วยงานเอกชน</a>
  <a href="รัฐ.php" class="one" >ข้อมูลหน่วยงานรัฐบาล</a> 
</div>
