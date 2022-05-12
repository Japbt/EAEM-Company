<!-- เอกชน -->
<!DOCTYPE html>
<html lang="th">
<head>
  <title>ข้อมูลหน่วยงานเอกชน</title>
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
        <th>ชื่อบริษัท</th>
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
echo $taxpayer_code_private=$_POST["taxpayer_code_private"]."<br>";
?>
</td>
<td><?php
echo $company_name=$_POST["company_name"]."<br>";
?>
</td>
<td><?php
echo $division_private=$_POST["division_private"]."<br>";
?>
</td>
<td><?php
echo  $address_private=$_POST["address_private"]."<br>";
?>
</td>
<td><?php
echo $province_private=$_POST["province_private"]."<br>";
?>
</td>
<td><?php
echo $distrct_private=$_POST["distrct_private"]."<br>";
?>
</td>
<td><?php
echo $parish_private=$_POST["parish_private"]."<br>";
?>
</td>
<td><?php
echo $zip_code_private=$_POST["zip_code_private"]."<br>";
?>
</td>
<td><?php
echo $county_private=$_POST["county_private"]."<br>";
?>
</td>
<td><?php
echo $phone_number_private= $_POST["phone_number_private"]."<br>";
?>
</td>
<td><?php
echo $contact_department_private=$_POST["contact_department_private"]."<br>";
?>
</td>
<td><?php
echo $Email_private=$_POST["Email_private"]."<br>";
?>
</td>
<!--https://www.youtube.com/watch?v=hT0juFPWVPc
    https://www.youtube.com/watch?v=K_PGMKBaFww
ตั้งแต่ บรรทัดที่ 95-142 -->
      <?php
          require('dbconnect.php');
        
          $taxpayer_code=$_POST["taxpayer_code_private"];
          $company_name=$_POST["company_name"];
          $division_private=$_POST["division_private"];
          $address_private=$_POST["address_private"];
          $province_private=$_POST["province_private"];
          $distrct_private=$_POST["distrct_private"];
          $parish_private=$_POST["parish_private"];
          $zip_code=$_POST["zip_code_private"];  
          $county_private=$_POST["county_private"]; 
          $phone_number= $_POST["phone_number_private"];
          $contact_department=$_POST["contact_department_private"];  
          $Email_private=$_POST["Email_private"];
         
          $sql = "INSERT INTO private_company(taxpayer_code_private,company_name,division_private
          ,address_private,province_private,distrct_private,parish_private,zip_code_private,county_private,
          phone_number_private,contact_department_private,Email_private) VALUES(
        '$taxpayer_code_private','$company_name','$division_private','$address_private','$province_private','$distrct_private',
        '$parish_private','$zip_code_private','$county_private','$phone_number_private','$contact_department_private','$Email_private')";
         
         $result=mysqli_query($connect,$sql);


         ?>
     <?php   
    require('dbconnect.php');
     $query="SELECT * FROM private_company";
     $company=mysqli_query($connect,$query);

    ?>
<?php
    while($rows=mysqli_fetch_assoc($company))
    {
 ?>
    <tr>
        <td><?php echo $rows['taxpayer_code_private']; ?></td>
        <td><?php echo $rows['company_name']; ?></td>
        <td><?php echo $rows['division_private']; ?></td>
        <td><?php echo $rows['address_private']; ?></td>
        <td><?php echo $rows['province_private']; ?></td>
        <td><?php echo $rows['distrct_private'];?></td>
        <td><?php echo $rows['parish_private']; ?></td>
        <td><?php echo $rows['zip_code_private']; ?></td>
        <td><?php echo $rows['county_private']; ?></td>
        <td><?php echo $rows['phone_number_private']; ?></td>
        <td><?php echo $rows['contact_department_private']; ?></td>
        <td><?php echo $rows['Email_private']; ?></td>
</tr>
<?php
}
?>
      </tr>
     
    </tbody>
  </table>
</div>

</body>
          
         

       
  

