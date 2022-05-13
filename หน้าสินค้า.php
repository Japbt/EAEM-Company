<!DOCTYPE html>
<html lang="en">


<head>

  <title>หน้าสินค้า</title>

<!-- การใส่รูปลงบนแท็บ(title) อ้างอิงจาก https://info.arit.rmutp.ac.th/2016/10/31/การใส่-iconlogo-ลงบน-title-website/ โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
  <!-- EAEM -->
  <link rel="icon" type="image/jpg" href="https://scontent.furt2-1.fna.fbcdn.net/v/t1.15752-9/277961730_738138507349093_1856551219733209075_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeEXml1W0HTowByt2nJq_ksjRmPKKFPR6NJGY8ooU9Ho0iH8TXnNkIE9l7h5jyIaGgCwDe3XwxlqRxYZsoVroU-2&_nc_ohc=_H-l4mivMHQAX_H0VsY&tn=m8vDM57SmZ1ia-6d&_nc_ht=scontent.furt2-1.fna&oh=03_AVI8y44ETG85sKSrS_S9_h2o_DGxXmiX_hYYpKOZVCFv6A&oe=62857941" />
  <!-- <link rel="icon" type="image/jpg" href="https://s3.getstickerpack.com/storage/uploads/sticker-pack/hamsters-memes/tray_large.png?36935a40e46ebfbbc4558385d7a73a16&d=100x100" /> -->
  <!-- EAEM -->


  <!--<link rel="stylesheet" type="text/css" href="style_หน้าหลัก.css"> -->
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
      <li><a href="ข้อมูลเจ้าหน้าที่.php">ข้อมูลเจ้าหน้าที่</a></li>
      <li><a href="ประเภทลูกค้า.php">ข้อมูลลูกค้า</a></li>
      <li class="active"><a href="หน้าสินค้า.php">สินค้า</a></li>
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
    <h2><br>สินค้า</br></h2>
  </div>
</div>
</center>


<!-- ******************************* EAEM ******************************* -->
<?php //ระบบค้นหาสินค้า ******* ยังไม่ได้ทำ *******


  $servername = "localhost";
  $database = "login_db";
  $username = "root";
  $password = "";
  $con = mysqli_connect($servername, $username, $password, $database) or die("ไม่สามารถเชื่อมฐานข้อมูลได้1");

  $query1 = "SELECT DISTINCT category_secon_pd FROM product_eaem ORDER BY id_pd";
  $result1 = mysqli_query($con, $query1);
  while($row1 = mysqli_fetch_row($result1))
  {
    $query2 = "SELECT image_pd FROM product_eaem WHERE category_secon_pd ='{$row1[0]}' ORDER BY id_pd";
    $result2 = mysqli_query($con, $query2);

    $row2 = mysqli_fetch_row($result2);
  }

?>
<!-- ******************************************************************** -->



<form>
  <div class="container">
    <input class="form-control" id="myInput" type="search" placeholder="Search...">
    <br>
  </div>
</form>


<style>
  body
  {
    background-color: rgb(236, 234, 234);
  }


/* อ้างอิงจาก https://www.w3schools.com/css/css_image_gallery.asp โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ */
  div.gallery 
  {
    border: 1px solid #ccc;
    margin: 10px;
    float: left;
    width: 180px;
    height: 230px;
    
    overflow: hidden;
    background-color: white;

  }

  div.gallery:hover 
  {
    border: 1px solid #777;
  }

  div.gallery img 
  {
    /* border: 3px solid #73AD21; */
    width: 100%;
    height: auto;
  }

  
/* การกำหนดความกว้าง ความสูง อ้างอิงจาก https://www.w3schools.com/css/tryit.asp?filename=trycss_max-width โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ */
  div.scope_img
  {
    /* border: 3px solid #73AD21; */
    position: relative;
    width: 180px;
    height: 200px;
    display: table-cell;
    vertical-align: middle;
  }

  div.desc 
  {
    /* border: 3px solid #73AD21; */
    /* padding: 15px; */
    text-align: center;
  }

  li
  {
    display: inline-block; 
  }


/* การทำให้บล็อกซ้อนกัน อ้างอิงจาก https://www.w3schools.com/css/tryit.asp?filename=trycss_zindex2 โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ */
  input[type=submit]
  {
    position: absolute;
    z-index: 1;
    opacity: 0;
    float: left;
    width: 180px;
    height: 230px;
    display: table-cell;
  }




</style>





<center>

<!-- ******************************* EAEM ******************************* -->

<?php 


// การเชื่อมฐานข้อมูล อ้างอิงจาก https://vpn-th.com/how-to-connect-mysql-database-with-php-websites/ โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ
  $servername = "localhost";
  $database = "login_db";
  $username = "root";
  $password = "";
  $con = mysqli_connect($servername, $username, $password, $database) or die("ไม่สามารถเชื่อมฐานข้อมูลได้1");

  $query1 = "SELECT DISTINCT category_secon_pd FROM product_eaem ORDER BY id_pd";
  $result1 = mysqli_query($con, $query1);


// การตัดข้อมูลซ้ำออก อ้างอิงจาก https://www.mainacup.com/php-ตัดข้อมูลซ้ำใน-array-ด้วย-array_unique/ แต่ไม่ได้ใช้
  // ****** สร้าง array แล้วตัดคำซ้ำออก *******

    // $fruit_array = array('ส้ม', 'กล้วย', 'มะละกอ','มังคุด', 'มะพร้าว', 'องุ่น','มะพร้าว','กล้วย');
    // $fruit_array = array_unique($fruit_array);
    // print_r($fruit_array);

  // **************************************


// การตัดข้อมูลที่ซ้ำออก จากการนำเข้าข้อมูล จากฐานข้อมูล อ้างอิงจาก https://www.thaicreate.com/php/forum/092800.html โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ
  // ****** ตัดชื่อที่ซ้ำออก โดยบอกว่า สินค้าชื่อนี้มีรหัสสินค้าอะไรบ้าง ******

    // $sql = "SELECT distinct name_pd from product_eaem order by id_pd";
    // $res1 = mysqli_query($con, $sql);
    // while($data = mysqli_fetch_row($res1))
    // {
    //   echo "{$data[0]} - ";

    //   $sql="SELECT id_pd from product_eaem where name_pd ='{$data[0]}' ";
    //   $res2 = mysqli_query($con, $sql);
    //   while($data2 = mysqli_fetch_row($res2))
    //   {
    //     echo "{$data2[0]}, ";
    //   }
    //   echo "<br />\n";
    // }

  // **********************************************************

// การตัดข้อมูลที่ซ้ำออก โดยนำ โค้ดอ้างอิงข้างบน มาปรับใช้ vvvvvvvvvvvvvv
  while($row1 = mysqli_fetch_row($result1))
  {
    $query2 = "SELECT image_pd FROM product_eaem WHERE category_secon_pd ='{$row1[0]}' ORDER BY id_pd";
    $result2 = mysqli_query($con, $query2);

    $row2 = mysqli_fetch_row($result2);
    ?>    

    <li class="product">
      <div class="gallery">
        <form name = "choose" action = "รายละเอียดสินค้า.php" method = "post">
          <input type="hidden" name="name" value="<?php echo $row1{0}; ?>">
          <input name="sub" type="submit" value="<?php echo $row1{0}; ?>">

          <div class="scope_img">
            <?php     
              echo '<img src="data:image/jpeg;base64,'.base64_encode($row2{0}).'" /> ';
            ?> 
          </div>
          
          <div class="desc">
            <?php // EX. print $row1{0};
              echo $row1{0};
            ?>
          </div>
          
          <!-- *** Auto Submit *** -->

            <!-- <script language="JavaScript">document.choose.submit();</script> --> 

          <!-- ******************* -->

        </form> 

        <?php
          // ****** TEST การนับจำนวนใน rows ******  ไม่ใช้  

            // echo "<br> 1111 ". $row1[0]. "  " ;

            // print "<br> 11111 ". $row1[0];
            // $num = mysqli_num_rows($row1);
            // echo "จำนวนทั้งหมด : ". $num ;

          // **************************************

  }
  mysqli_close($con);
?> 
</div>
</li> 


<!-- ******************************* EAEM ******************************* -->

</center>


