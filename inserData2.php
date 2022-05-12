<!-- บุคคล] -->
<!DOCTYPE html>
<html lang="th">
<head>
  <title>ข้อมูลบุคคล</title>
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
    <li ><a href="รวมแผนก.php">ข้อมูลลูกค้า</a></li>
      <li><a href="หน้าสินค้า.php">สินค้า</a></li>
    <!--  <div class="action-list-box">
                <div class="nav navbar-nav"><a href="logout.php">ออกจากระบบ </a></div>
            </div>-->
    </ul>
  </div>
  </nav>

 <br>
 <br>
 <br>
  <div class="container">
          <table class="table table-striped">
    <thead>
      <tr>
        <th>เลขบัตรประชาชน</th>
        <th>ชื่อ-นามสกุล</th>
        <th>อยู่ที่</th>
        <th>จังหวัด</th>
        <th>อำเภอ</th>
        <th>ตำบล</th>
        <th>เลขรหัสไปรษณีย์</th>
        <th>เขต</th>
        <th>เบอร์โทรศัพท์</th>
        <th>E-mail</th>

      </tr>
    </thead>
    <tbody>
     
      <tr>
        <!-- https://dev.to/supaluckn/php-mysqli-4ke6 
      การบันทึกลงในฐานข้อมูล และดึกออกมาแสดง-->
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
<td><?php
echo $zip_cod_persone=$_POST["zip_code_person"]."<br>";
?>
</td>
<td><?php
echo $county_person=$_POST["county_person"]."<br>";
?>
</td>
<td><?php
echo $phone_number_person= $_POST["phone_number_person"]."<br>";
?>
</td>
<td><?php
echo $Email_person=$_POST["Email_person"]."<br>";
?>
</td>
<!--https://www.youtube.com/watch?v=hT0juFPWVPc
    https://www.youtube.com/watch?v=K_PGMKBaFww
ตั้งแต่ บรรทัดที่ 95-142 -->
      <?php
          require('dbconnect.php');
        
        $ID_cardnumber=$_POST["ID_cardnumber"];
        $name_surname=$_POST["name_surname"];
        $address_person=$_POST["address_person"];
        $province_person=$_POST["province_person"];
        $distrct_person=$_POST["distrct_person"];
        $parish_person=$_POST["parish_person"];
        $zip_code_person=$_POST["zip_code_person"];  
        $county_person=$_POST["county_person"]; 
        $phone_number_person= $_POST["phone_number_person"];
        $Email_person=$_POST["Email_person"];
         
        $sql = "INSERT INTO personal_information(ID_cardnumber,name_surname,address_person,province_person,distrct_person,parish_person,zip_code_person,county_person,
        phone_number_person,Email_person) VALUES('$ID_cardnumber','$name_surname','$address_person','$province_person','$distrct_person',
        '$parish_person','$zip_code_person','$county_person','$phone_number_person','$Email_person')";
         
         $result=mysqli_query($connect,$sql);


         ?>
     <?php   
    require('dbconnect.php');
     $query="SELECT * FROM personal_information";
     $person=mysqli_query($connect,$query);

    ?>
<?php
    while($rows=mysqli_fetch_assoc($person))
    {
 ?>
    <tr>
        <td><?php echo $rows['ID_cardnumber']; ?></td>
        <td><?php echo $rows['name_surname']; ?></td>
        <td><?php echo $rows['address_person']; ?></td>
        <td><?php echo $rows['province_person']; ?></td>
        <td><?php echo $rows['distrct_person']; ?></td>
        <td><?php echo $rows['parish_person'];?></td>
        <td><?php echo $rows['zip_code_person']; ?></td>
        <td><?php echo $rows['county_person']; ?></td>
        <td><?php echo $rows['phone_number_person']; ?></td>
        <td><?php echo $rows['Email_person']; ?></td>

</tr>
<?php
}
?>
      </tr>
     
    </tbody>
  </table>
</div>

</body>
          
         

       
  

