<!-- รัฐบาล -->
<!DOCTYPE html>
<html lang="th">
<head>
  <title>ข้อมูลหน่วยงานรัฐบาล</title>
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
        <th>เลขรหัสผู้เสียภาษี</th>
        <th>ชื่อโรงพยาบาล</th>
        <th>แผนก</th>
        <th>อยู่ที่</th>
        <th>จังหวัด</th>
        <th>อำเภอ</th>
        <th>ตำบล</th>
        <th>เลขรหัสไปรษณีย์</th>
        <th>เขต</th>
        <th>เบอร์โทรศัพท์</th>
        <th>แผนกที่ติดต่อ</th>
        <th>E-mail</th>

      </tr>
    </thead>
    <tbody>
     <!-- https://dev.to/supaluckn/php-mysqli-4ke6 
      การบันทึกลงในฐานข้อมูล และดึกออกมาแสดง-->
      <tr>
<td><?php
echo $taxpayer_code=$_POST["taxpayer_code_governmant"]. "<br>";
?>
</td>
<td><?php
echo $hospital_name=$_POST["hospital_name"]."<br>";
?>
</td>
<td><?php
echo $division_governmant=$_POST["division_governmant"]."<br>";
?>
</td>
<td><?php
echo $address_governmant=$_POST["address_governmant"]."<br>";
?>
</td>
<td><?php
echo $province_governmant=$_POST["province_governmant"]."<br>";
?>
</td>
<td><?php
echo $distrct_governmant=$_POST["distrct_governmant"]."<br>";
?>
</td>
<td><?php
echo $parish_governmant=$_POST["parish_governmant"]."<br>";
?>
</td>
<td><?php
echo $zip_code=$_POST["zip_code"]."<br>";
?>
</td>
<td><?php
echo $county_governmant=$_POST["county_governmant"]."<br>";
?>
</td>
<td><?php
echo $phone_number= $_POST["phone_number"]."<br>";
?>
</td>
<td><?php
echo $contact_department=$_POST["contact_department"]."<br>";
?>
</td>
<td><?php
echo $Email_governmant=$_POST["Email_governmant"]."<br>";
?>
</td>
<!--https://www.youtube.com/watch?v=hT0juFPWVPc
    https://www.youtube.com/watch?v=K_PGMKBaFww
ตั้งแต่ บรรทัดที่ 95-142 -->
      <?php
          require('dbconnect.php');
        
        $taxpayer_code_governmant=$_POST["taxpayer_code_governmant"];
        $hospital_name=$_POST["hospital_name"];
        $division_governmant=$_POST["division_governmant"];
        $address_governmant=$_POST["address_governmant"];
        $province_governmant=$_POST["province_governmant"];
        $distrct_governmant=$_POST["distrct_governmant"];
        $parish_governmant=$_POST["parish_governmant"];
        $zip_code=$_POST["zip_code"];  
        $county_governmant=$_POST["county_governmant"]; 
        $phone_number= $_POST["phone_number"];
        $contact_department=$_POST["contact_department"];  
        $Email_governmant=$_POST["Email_governmant"];
         
        $sql = "INSERT INTO governmant_agency(taxpayer_code_governmant,hospital_name,division_governmant
          ,address_governmant,province_governmant,distrct_governmant,parish_governmant,zip_code,county_governmant,
          phone_number,contact_department,Email_governmant) VALUES(
        '$taxpayer_code_governmant','$hospital_name','$division_governmant','$address_governmant','$province_governmant','$distrct_governmant',
        '$parish_governmant','$zip_code','$county_governmant','$phone_number','$contact_department','$Email_governmant')";
         
         $result=mysqli_query($connect,$sql);


         ?>
     <?php   
    require('dbconnect.php');
     $query="SELECT * FROM governmant_agency";
     $company=mysqli_query($connect,$query);

    ?>
<?php
    while($rows=mysqli_fetch_assoc($company))
    {
 ?>


    <tr>
        <td><?php echo $rows['taxpayer_code_governmant']; ?></td>
        <td><?php echo $rows['hospital_name']; ?></td>
        <td><?php echo $rows['division_governmant']; ?></td>
        <td><?php echo $rows['address_governmant']; ?></td>
        <td><?php echo $rows['province_governmant']; ?></td>
        <td><?php echo $rows['distrct_governmant'];?></td>
        <td><?php echo $rows['parish_governmant']; ?></td>
        <td><?php echo $rows['zip_code'] ;?></td>
        <td><?php echo $rows['county_governmant']; ?></td>
        <td><?php echo $rows['phone_number'] ;?></td>
        <td><?php echo $rows['contact_department']; ?></td>
        <td><?php echo $rows['Email_governmant'];?></td>
</tr>
<?php
}
?>
      </tr>
     
    </tbody>
  </table>
</div>

</body>
          
         

       
  

