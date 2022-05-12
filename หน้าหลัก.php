<?php include('conn.php'); ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <title>หน้าหลัก</title><!-- 
<<https://www.w3schools.com/howto/howto_js_topnav.asp แท็บข้างบน และปรับแก้เอง-->
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
      <li class="active"><a href="หน้าหลัก.php">Home</a></li>
      <li><a href="เขต.php">ข้อมูลเจ้าหน้าที่</a></li>
      <li><a href="รวมแผนก.php">ข้อมูลลูกค้า</a></li>
      <!-- <li><a href="เพิ่มรหัสบิล_ออเดอร์หน้า8.php">ข้อมูลลูกค้า</a></li>-->
      <li><a href="หน้าสินค้า.php">สินค้า</a></li>
    <!--  <div class="action-list-box">
                <div class="nav navbar-nav"><a href="logout.php">ออกจากระบบ </a></div>
            </div>-->
    </ul>
  </div>
</nav>
<body>

<div class="container">
  <div class="page-header">
    <h1><br>EAEM Company</br></h1> 
    <p>ภาคใต้ตอนบน</p>      
  </div>
</div>
<!-- ปัญญารัตน์เป็นคนสอน -->
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
   
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
</head>
<body class="default">
 
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-8 py-4">
        <form class="row" method="POST">
          <div class="col col-lg-2">
          
          </div>
         <!--https://www.w3schools.com/html/html_forms_attributes.asp
        ดูเป็นแนวและปรับเปลี่ยนเองตามความเข้าใจ -->
          <div class="col">
            <input type="text" class="form-control" name="value" value="<?php if (isset($_POST['value'])) {echo $_POST['value'];} ?>" required/>
          </div>
          <div class="col-md-auto">
            <button type="submit" name="submit" class="btn btn-success">ค้นหา</button>
            <div class="container">
           
          </div>
          
              </form> 
        </form>
        <?php
        if (isset($_POST['submit'])) {
          $num = 1;

 //เชื่องตาราง3ตารางเข้าด้วยกัน      https://www.rangforever.com/detail.php?id_t=9&id=117 ดูคลิปนี้และปรับเปลี่ยนตามความเข้าใจ และมีเพื่อนกลุ่มอื่นมาช่วยดู    
          $sql = "SELECT governmant_agency.hospital_name,personal_information.name_surname,private_company.company_name
          FROM name1 INNER JOIN governmant_agency ON name1.taxpayer_code_governmant = governmant_agency.taxpayer_code_governmant
          INNER JOIN personal_information ON name1.ID_cardnumber = personal_information.ID_cardnumber
          INNER JOIN private_company ON name1.taxpayer_code_private = private_company.taxpayer_code_private";


          //$sql = "SELECT * FROM login_db WHERE hospital_name LIKE OR name_surname LIKE OR company_name "." LIKE '".$_POST['value']."%'";
          $query = mysqli_query($Connection,$sql);
          $check_data = mysqli_num_rows($query);
          if ($check_data == 0) {
            echo '<p class="text-center py-4"><span class="badge bg-danger" style="font-size: 20px;">ไม่พบข้อมูล</span></p>';
          }else{
            ?>
            <table class="table table-bordered mt-4">
              <thead class="table-secondary">
                <tr>

                  <th scope="col">ชื่อโรงพยาบาล</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                while ($result = mysqli_fetch_array($query)) {
                  ?>
                  <tr>
                    <td><?php echo $num++; ?></td>
                    <td><?php echo $result['hospital_name'].$result['company_name'].' '.$result['name_surname']; ?></td>

                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
            <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <?php mysqli_close($Connection);?>
  
</body>
</html>


    







</form>
</div>
</body>



