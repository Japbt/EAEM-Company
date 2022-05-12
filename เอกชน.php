<!DOCTYPE html>
<html lang="th">
<head>
  <title>ข้อมูลหน่วยงานเอกชน</title><!-- 
<link rel="stylesheet" type="text/css" href="style_หน้าหลัก.css"> -->
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
    <li ><a href="รวมแผนก.php.php">ข้อมูลลูกค้า</a></li>
      <li><a href="หน้าสินค้า.php">สินค้า</a></li>
  <!--https://www.w3schools.com/howto/howto_js_topnav.asp แท็บข้างบน และปรับแก้เอง-->
    </ul>
  </div>
  </nav>

<!-- ปัญญารัตน์เป็ฯคนสอน -->
  <style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 450px;
  padding: 12px 20px;
  margin: 5px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
 box-sizing: border-box;
}

input[type=submit] {
  width: 40%;
  background-color: #04AA6D;
  color: white;
  padding: 15px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
div.container {
  width: 65vmin;
  height: 145vmin;
  border-radius:30px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<center>
  <div class="page-header">
    <h3><br>ข้อมูลหน่วยงานเอกชน</br></h3>   
   
  </div>
</center>
</div>
<!--https://www.w3schools.com/html/html_forms_attributes.asp
        ดูเป็นแนวและปรับเปลี่ยนเองตามความเข้าใจ -->
<div class="container">
<form action="inserData1.php" method="POST" >
    <label for="#">เลขรหัสผู้เสียภาษี</label>
    
    <input type="text" name="taxpayer_code_private" placeholder="เลขรหัสผู้เสียภาษี..">

    <label for="#">ชื่อบริษัท</label>
    <input type="text" name="company_name" placeholder="ชื่อบริษัท..">

    <label for="#">แผนก</label>
    <input type="text" name="division_private"  placeholder="แผนก..">

    <label for="#">อยู่ที่</label>
    <input type="text" name="address_private"  placeholder="อยู่ที่..">

    <label for="#">จังหวัด</label>
    <select id="province_private" name="province_private">
    <option value="จังหวัด">จังหวัด</option>
      <option value="กระบี่">กระบี่</option>
      <option value="กรุงเทพมหานคร	">กรุงเทพมหานคร	</option>
      <option value="กาญจนบุรี">กาญจนบุรี</option>
      <option value="กาฬสินธุ์	">กาฬสินธุ์	</option>
      <option value="กำแพงเพชร">กำแพงเพชร</option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
      <option value="ชลบุรี">ชลบุรี</option>
      <option value="ชัยนาท">ชัยนาท</option>
      <option value="ชัยภูมิ">ชัยภูมิ</option>
      <option value="ชุมพร">ชุมพร</option>
      <option value="เชียงราย">เชียงราย</option>
      <option value="เชียงใหม่">เชียงใหม่	</option>
      <option value="ตรัง">ตรัง</option>
      <option value="ตราด">ตราด</option>
      <option value="ตาก">ตาก</option>
      <option value="นครนายก">นครนายก	</option>
      <option value="นครปฐม">นครปฐม</option>
      <option value="นครพนม">นครพนม</option>
      <option value="นครราชสีมา">นครราชสีมา</option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
      <option value="นครสวรรค์">นครสวรรค์</option>
      <option value="นนทบุรี">นนทบุรี</option>
      <option value="นราธิวาส	">นราธิวาส	</option>
      <option value="น่าน">น่าน</option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="ปทุมธานี">ปทุมธานี</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
      <option value="ปราจีนบุรี	">ปราจีนบุรี	</option>
      <option value="ปัตตานี">ปัตตานี</option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
      <option value="พะเยา">พะเยา</option>
      <option value="พังงา">พังงา</option>
      <option value="พัทลุง">พัทลุง</option>
      <option value="พิจิตร">พิจิตร</option>
      <option value="พิษณุโลก">พิษณุโลก</option>
      <option value="เพชรบุรี">เพชรบุรี</option>
      <option value="เพชรบูรณ์">เพชรบูรณ์</option>
      <option value="แพร่">แพร่</option>
      <option value="ภูเก็ต">ภูเก็ต</option>
      <option value="มุกดาหาร">มุกดาหาร</option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option> 
      <option value="ยโสธร">ยโสธร</option> 
      <option value="ยะลา">ยะลาม</option> 
      <option value="ร้อยเอ็ด">ร้อยเอ็ด</option> 
      <option value="ระนอง">ระนอง</option> 
      <option value="ระยอง">ระยอง</option> 
      <option value="ราชบุรี">ราชบุรี</option> 
      <option value="ลพบุรี">ลพบุรี</option> 
      <option value="ลำปาง">ลำปาง</option> 
      <option value="ลำพูน">ลำพูน</option> 
      <option value="เลย">เลย</option> 
      <option value="ศรีสะเกษ">ศรีสะเกษ</option> 
      <option value="สกลนคร">สกลนคร</option> 
      <option value="สงขลา">สงขลา</option> 
      <option value="สตูล">สตูล</option> 
      <option value="สมุทรปราการ">สมุทรปราการ</option> 
      <option value="สมุทรสงคราม">สมุทรสงคราม</option> 
      <option value="สมุทรสาคร">สมุทรสาคร</option> 
      <option value="สระแก้ว">สระแก้ว</option> 
      <option value="สระบุรี">สระบุรี</option> 
      <option value="สิงห์บุรี">สิงห์บุรี</option>
      <option value="สุโขทัย">สุโขทัย</option> 
      <option value="สุพรรณบุรี">สุพรรณบุรี</option> 
      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option> 
      <option value="สุรินทร์">สุรินทร์</option> 
      <option value="หนองคาย">หนองคาย</option> 
      <option value="หนองบัวลำภู">หนองบัวลำภู</option> 
      <option value="อ่างทอง">อ่างทอง</option> 
      <option value="อำนาจเจริญ">อำนาจเจริญ</option>  
      <option value="อุดรธานี">อุดรธานี</option>  
      <option value="อุตรดิตถ์">อุตรดิตถ์</option>  
      <option value="อุทัยธานี">อุทัยธานี</option>  
      <option value="อุบลราชธานี">อุบลราชธานี</option>


    </select>
    <label for="#">อำเภอ</label>
    <input type="text"  name="distrct_private" placeholder="อำเภอ..">

    <label for="#">ตำบล</label>
    <input type="text" name="parish_private"  placeholder="ตำบล..">

    <label for="#">เลขรหัสไปรษณีย์</label>
    <input type="text" name="zip_code_private"   placeholder="เลขรหัสไปรษณีย์..">

    <label for="#">เขต</label>
    <input type="text" name="county_private"  placeholder="เขต..">

    <label for="#">เบอร์โทรศัพท์</label>
    <input type="text" name="phone_number_private"  placeholder="เบอร์โทรศัพท์..">

    <label for="#">แผนกที่ติดต่อ</label>
    <input type="text" name="contact_department_private"  placeholder="แผนกที่ติดต่อ..">

    <label for="#">E-mail</label>
    <input type="text" name="Email_private" placeholder="E-mail..">
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>
