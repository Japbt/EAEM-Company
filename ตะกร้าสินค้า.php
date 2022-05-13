<!DOCTYPE html>
<html lang="en">

<head>
  <title>ตะกร้าสินค้า</title>

<!-- การใส่รูปลงบนแท็บ(title) อ้างอิงจาก https://info.arit.rmutp.ac.th/2016/10/31/การใส่-iconlogo-ลงบน-title-website/ โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
  <!-- EAEM -->
  <link rel="icon" type="image/jpg" href="https://scontent.furt2-1.fna.fbcdn.net/v/t1.15752-9/277961730_738138507349093_1856551219733209075_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeEXml1W0HTowByt2nJq_ksjRmPKKFPR6NJGY8ooU9Ho0iH8TXnNkIE9l7h5jyIaGgCwDe3XwxlqRxYZsoVroU-2&_nc_ohc=_H-l4mivMHQAX_H0VsY&tn=m8vDM57SmZ1ia-6d&_nc_ht=scontent.furt2-1.fna&oh=03_AVI8y44ETG85sKSrS_S9_h2o_DGxXmiX_hYYpKOZVCFv6A&oe=62857941" />
  <!-- <link rel="icon" type="image/jpg" href="https://s3.getstickerpack.com/storage/uploads/sticker-pack/hamsters-memes/tray_large.png?36935a40e46ebfbbc4558385d7a73a16&d=100x100" /> -->
  

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
          <li><a href="#">ข้อมูลเจ้าหน้าที่</a></li>
          <li><a href="หน้าหลัก.php">ข้อมูลลูกค้า</a></li>
          <li><a href="หน้าสินค้า.php">สินค้า</a></li>
        <!--  <div class="action-list-box">
                    <div class="nav navbar-nav"><a href="logout.php">ออกจากระบบ </a></div>
                </div>-->
        </ul>
      </div>
    </nav>
</body>



<style>
    body
    {
        background-color: rgb(236, 234, 234);
    }

/* การตกแต่งตาราง อ้างอิงจาก https://www.w3schools.com/html/tryit.asp?filename=tryhtml_table6 โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ */
    table, th, td 
    {
        /* border:1px solid black; */
        /* padding: 50px; */
    }
    table.b, th.b, td.b 
    {
        border:1px solid black;
    }


    .other 
    {
        background-color: #04AA6D;
        color: white;
        border:1px #04AA6D;
        border-radius: 4px;
        padding: 3px;
        padding-left: 8px;
        padding-right: 8px;
    }

</style>




<!-- การเชื่อมฐานข้อมูล อ้างอิงจาก https://vpn-th.com/how-to-connect-mysql-database-with-php-websites/ โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
<?php //บันทึกรายการสั่งซื้อ
    $servername = "localhost";
    $database = "login_db";
    $username = "root";
    $password = "";
    $con = mysqli_connect($servername, $username, $password, $database) or die("ไม่สามารถเชื่อมฐานข้อมูลได้1");


//  การรับข้อมูลจาก Input ในหน้าเว็บอื่นที่กำหนดให้ส่งข้อมูล มายังหน้าเว็บนี้ อ้างอิงจาก https://www.thaicreate.com/php/php-html-hidden-field.html 
//  และ https://www.thaicreate.com/php/php-html-input-text-field.html โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ

//  การรับข้อมูลจากผู้ใช้ แล้วบันทึกข้อมูลเข้าฐานข้อมูล(Database) อ้างอิงจาก https://www.youtube.com/watch?v=gP8-7liso8c&t=891s โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ

    //รหัสที่ส่งมา หลังจากการทำการเลือกจำนวนสินค้า
    $id_pd = $_POST["id_pd"];   // รหัสสินค้า
    $amount = $_POST["amount"]; // จำนวนสินค้าที่ต้องการ
    $price = $_POST["price"];   // ราคาที่ตกลงกับลูกค้า
    $sum = $_POST["amount"] * $_POST["price"];  
    // $sum_p = $_POST["sum_p"]; // ราคารวมสุทธิ (amount*price)   // ERROR
    // echo "code-son-teen : ". $id_pd. " - ". $amount. " - ". $price;



    $insert = "INSERT INTO history_eaem(id_pd_hs, amount_hs, price_hs, sum_hs) VALUES ('$id_pd', '$amount', '$price', '$sum')";
    $result = mysqli_query($con, $insert);

    // mysqli_close($con);
    

?>


<?php
    // $query1 = "SELECT DISTINCT category_secon_pd FROM product_eaem ORDER BY id_pd";
    // $query1 = "SELECT * FROM product_eaem WHERE id_pd = '$id_pd'";
    $query1 = "SELECT * FROM history_eaem";
    $result1 = mysqli_query($con, $query1);
    $AllSum = 0;
    $SumPrice_pd = 0;
    $tax = 0;
?>


<!-- การทำตารางข้อมูล อ้างอิง https://www.w3schools.com/html/tryit.asp?filename=tryhtml_table6 โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
<div style="padding-top: 100px; padding-left: 250px; padding-right: 200px;">
    <div style="padding: 50px; padding-left: 80px; background-color: white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">

        <table style="width:100%;">
            <tr style="height:100px">
                <th style="width:15%;"> </th>
                <th style="width:10%;"> </th>
                <th style="width:50%; text-align: center; font-size: 30px"> รายการสินค้า  </th>
                <th style="width:10%; text-align: right; padding-right: 10px;"> เลขที่ </th>
                <th style="width:10%; text-align: right; padding-right: 20px;"> ????? </th>
                <th style="width:5%;"> </th>
            </tr>
        </table>
        <table style="width:100%">
            <tr style="height:30px">
                <th style="width:50%;"> นามผู้ซื้อ __________________________________________________ </th>
                <th style="width:30%;"> รหัสลูกค้า _________________________ </th>
                <th style="text-align: right; padding-right: 10px;"> วันที่ __ / __ / __ </th>
                <td style="width:5%;"> </td>
            </tr>    
        </table>
        <table style="width:100%">
            <tr style="height:30px">
                <th> ที่อยู่ _____________________________________________________________________________________________________________ </th> 
            </tr>    
        </table>



        <table style="width:100%">
            <tr style="height:30px;"> 
                <th class="b" style="width:10%; text-align: center;"> รหัสสินค้า </th>
                <th class="b" style="width:50%; text-align: center;"> รายการ </th>
                <th class="b" style="width:10%; text-align: center;"> จำนวน </th>
                <th class="b" style="width:10%; text-align: center;"> หน่วยละ </th>
                <th class="b" style="width:15%; text-align: center;"> จำนวนเงิน </th>
                <th style="width:5%; text-align: center;">  </th>
            </tr>
            <?php

// การตัดข้อมูลที่ซ้ำออก จากการนำเข้าข้อมูล จากฐานข้อมูล อ้างอิงจาก https://www.thaicreate.com/php/forum/092800.html โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ
                while($row1 = mysqli_fetch_row($result1))
                {   
                    $AllSum = $AllSum + $row1[8];
                    $SumPrice_pd = $AllSum / 1.07;
                    $tax = $AllSum - $SumPrice_pd;        
                    ?>
                    <form action="ตะกร้าสินค้า(ใบสั่งซื้อสินค้า).php">
                        <tr style="height:30px;"> 
                            <td class="b" style="text-align: center;"> <?php echo $row1[5] ?> </td> 
                            
                            <?php
                                $query2 = "SELECT * FROM product_eaem WHERE id_pd = '$row1[5]'";
                                $result2 = mysqli_query($con, $query2); 
                                while($row2 = mysqli_fetch_row($result2))
                                {
                                    ?>
                                    <td class="b" style="text-align: center;"> <?php echo $row2[1]. " ". $row2[3] ?> </td>
                                    <?php
                                }
                            ?>

                            <td class="b" style="text-align: center;"> <?php echo $row1[6] ?> </td>
                            <td class="b" style="text-align: center;"> <?php echo $row1[7] ?> </td>
                            <td class="b" style="text-align: center;"> <?php echo $row1[8] ?> </td>

                            <!-- ยกเลิกการสั่งซื้อสินค้า ยังไม่ได้ทำ -->
                            <!-- <td style="text-align: center;"> <input type="reset" value=" x "> </td> -->   
                        </tr>
                    </form>
                    <?php
                    // mysqli_close($con);
                }
            ?>    
                
            <tr style="height:30px;"> 
                <td class="b">  </td>
                <td class="b" style="padding-left: 10px;"> 
                    <a href="หน้าสินค้า.php"> 
                        <button class="other"> + รายการสินค้าอื่นๆ </button> 
                    </a>
                </td>
                <td class="b">  </td>
                <td class="b">  </td>
                <td class="b">  </td>
                <td >  </td>
            </tr>
        </table>



        <table style="width:100%">
            <tr style="height:30px">
                <th style="width:10%;">  </th> 
                <th style="width:20%;">  </th>
                <th style="width:20%;">  </th>
                <th style="width:10%;">  </th> 
                <th style="width:20%; text-align: right; padding-right: 10px;"> ราคาสินค้า </th>
<!-- การทำให้ตัวเลขมีจุดทศนิยม 2 ตำแหน่ง อ้างอิงจาก https://nakomah.com/blog/คำสั่ง-number-format-ใส่จุดทศนิยม-และ-คอมม่าให้กับตัวเลข โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
                <td class="b" style="width:15%; text-align: center;"> <?php echo number_format( $SumPrice_pd, 2, '.', ''); ?> </td>
                <td style="width:5%; text-align: center;">  </td> 
            </tr> 
            <tr style="height:30px">
                <th>  </th> 
                <th>  </th>
                <th>  </th>
                <th>  </th> 
                <th style="text-align: right; padding-right: 10px;"> ภาษีมูลค่าเพิ่ม </th>
                <td class="b" style="text-align: center;"> <?php echo number_format( $tax, 2, '.', ''); ?> </td>
                <td style="text-align: center;">  </td> 
            </tr> 
            <tr style="height:30px">
                <th>  </th> 
                <th>  </th>
                <th>  </th>
                <th>  </th> 
                <th style="text-align: right; padding-right: 10px;"> รวมเงิน </th>
                <td class="b" style="text-align: center;"> <?php echo number_format( $AllSum, 2, '.', ''); ?> </td>
                <td style="text-align: center;">  </td> 
            </tr> 
        </table>
        <table style="width:100%">
            <tr style="height:150px">
                <th style="width:10%; vertical-align: text-top; padding-top: 30px; text-align: center;" > หมายเหตุ </th> 
                <td style="width:85%; vertical-align: text-top; padding-top: 30px; padding-left: 10px;">
                    _______________________________________________________________________________________________
                    _______________________________________________________________________________________________
                    _______________________________________________________________________________________________     
                </td>
                <td style="width:5%;"> </td>
            </tr>  
        </table>

    </div>
</div>











