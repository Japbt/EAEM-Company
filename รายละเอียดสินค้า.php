<!DOCTYPE html>
<html lang="en">

<head>
  <title>รายละเอียดสินค้า</title>

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

/* อ้างอิงจาก https://www.w3schools.com/css/css_image_gallery.asp โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ */
div.gallery 
{
  border: 1px solid #ccc;  
  background-color: white;
  float: left;
  width: 250px;
  height: 270px;
  margin-top: 100px;
  margin-left: 70px;

  overflow: hidden;
}

div.gallery img 
{
  /* border: 1px solid #ccc; */
  width: 100%;
  height: auto;
}

/* การกำหนดความกว้าง ความสูง อ้างอิงจาก https://www.w3schools.com/css/tryit.asp?filename=trycss_max-width โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ */
div.scope_img
  {
    width: 250px;
    height: 270px;
    display: table-cell;
    vertical-align: middle;
  }

div.name
{   
  /* border: 3px solid #73AD21; */
  width: 600px;
  height: 1000px;
  margin-top: 80px;
  margin-left: 350px;
  margin-right: 70px;
}

p.a
{
  /* border: 3px solid #73AD21; */
  width: 600px;
  height: auto;
  
  /*** ย่อหน้า ***/
  /* text-indent: 40px;   */

  padding-top: 20px;
  padding-left: 10px;
  line-height: 2.5;
}

input[type=number], input[type=submit],input[type=text] {line-height: 1.43;}
input[type=text] {width: 110px;}


/* การตกแต่ง Dropdown อ้างอิงจาก https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_filter 
และ https://www.w3schools.com/css/tryit.asp?filename=trycss_dropdown_right โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ */
.dropbtn 
{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown 
{
  position: relative;
  display: inline-block;
  padding-left: 7px;
}

.dropdown-content 
{
  display: none;
  padding: 15px;
  min-width: 200px;
  overflow: auto;
  border: 1px solid #ddd;
  /* right: 0; *** */
  background-color: #f6f6f6;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  position: absolute;
  z-index: 1;
}

.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>


<!-- การกรอกข้อมูลให้สามารถกรอกได้แค่ตัวเลขดท่านั้น อ้างอิงจาก http://www.code-father.com/เขียนโค้ด-html-input-ได้เฉพาะตัวเลข_00029.html -->
<script language="javascript">
  function CheckNum()
  {
    if (event.keyCode < 46 || event.keyCode > 57)
    {
      event.returnValue = false;
    }
  }
</script>


<!-- การคำนวณเลขอัตโนมัติ อ้างอิงจาก http://ging-ks.blogspot.com/2014/05/jquery-input-text-2.html โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
<script type='text/javascript'>
  $(function() 
  {
    var output_element = $('#output_ele');
    var output_element1 = $('#output_ele1');

    $('#the_input_id').keyup(function() 
    {  
        updateTotal();
    });
    
    $('#the_input_id1').keyup(function() 
    {  
        updateTotal();
    });
    
    var updateTotal = function ()
    {
      var input1 = parseInt($('#the_input_id').val());
      var input2 = parseFloat($('#the_input_id1').val());
      var totals = parseFloat(input1 * input2) || 0;
      //parseFloat($('#totals').val()) || 0; 
      $('#total').val(totals);
    };
    

  // output_total.text(total);

  });
</script>


<!-- การรับข้อมูลจาก Input ในหน้าเว็บอื่นที่กำหนดให้ส่งข้อมูล มายังหน้าเว็บนี้ อ้างอิงจาก https://www.thaicreate.com/php/php-html-hidden-field.html 
และ https://www.thaicreate.com/php/php-html-input-text-field.html โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->

<?php //รหัสที่ส่งมา หลังจากการทำการเลือกสินค้า บ่งบอกให้ทราบว่าผู้ใช้เลือกสินค้าตัวไหน
  $name = $_POST["name"];  
  // echo "code-son-teen : ". $name;
?>



<!-- การเชื่อมฐานข้อมูล อ้างอิงจาก https://vpn-th.com/how-to-connect-mysql-database-with-php-websites/ โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
<!-- การตัดข้อมูลที่ซ้ำออก จากการนำเข้าข้อมูล จากฐานข้อมูล อ้างอิงจาก https://www.thaicreate.com/php/forum/092800.html โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ  -->
<?php
  $servername = "localhost";
  $database = "login_db";
  $username = "root";
  $password = "";
  $con = mysqli_connect($servername, $username, $password, $database) or die("ไม่สามารถเชื่อมฐานข้อมูลได้1");

  // $query1 = "SELECT DISTINCT category_secon_pd FROM product_eaem ORDER BY id_pd";
  $query1 = "SELECT DISTINCT category_secon_pd FROM product_eaem WHERE category_secon_pd = '$name' ORDER BY id_pd";
  $result1 = mysqli_query($con, $query1);
  $row1 = mysqli_fetch_row($result1);

  $query2 = "SELECT image_pd FROM product_eaem WHERE category_secon_pd ='{$row1[0]}' ORDER BY id_pd";
  $result2 = mysqli_query($con, $query2);
  $row2 = mysqli_fetch_row($result2);


  $list1 = "SELECT DISTINCT category_third_pd FROM product_eaem WHERE category_secon_pd = '$name' ORDER BY id_pd";
  $result_list1 = mysqli_query($con, $list1);


  ?>
  
  <li class="product">
    <div class="gallery">
      <div class = "scope_img">
        <?php     
          echo '<img src="data:image/jpeg;base64,'.base64_encode($row2{0}).'" /> ';
        ?> 
      </div>
    </div>
  </li>


  <div class="name">
    <h2> <?php echo $row1{0}; ?> </h2>
    <!-- <h3 style="text-align: right;">ราคา ..... บาท</h3> -->

    <p class = "a">
      <?php 
        while($row_list1 = mysqli_fetch_row($result_list1))
        {
          $list2 = "SELECT * FROM product_eaem WHERE category_secon_pd = '$name' AND category_third_pd = '{$row_list1[0]}' ORDER BY id_pd";
          $result_list2 = mysqli_query($con, $list2);

// การเว้นวรรค อ้างอิงจาก https://th.wikihow.com/เว้นวรรคห่างๆ-ใน-HTML 
          // echo " ◉&ensp;". $name. " > ". $row_list1{0};
          ?>

<!-- การทำ Dropdown อ้างอิงจาก https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_filter
และ https://www.w3schools.com/css/tryit.asp?filename=trycss_dropdown_right โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
          <div class="dropdown">
            <button class="dropbtn"> <?php echo $row_list1{0}; ?> </button>
            <div class="dropdown-content">
              <?php  

                  
                while($row_list2 = mysqli_fetch_row($result_list2))
                { 
                    echo "<br>ขนาด ". $row_list2[3]. " [ ". $row_list2[4]. " บ./". $row_list2[6]. " ]";  // **บอก Size_pd
                    // echo " (เหลือ ". "{$row_list2[14]}". " ชิ้น)";  // **บอกจำนวน Stock_pd
                  ?>

<!-- การทำข้อมูลให้อยู่ในรูปแบบของตาราง อ้างอิงจาก https://www.w3schools.com/html/tryit.asp?filename=tryhtml_table6 โดยนำมาปรับใช้ให้เหมาะสมกับงานที่ทำ -->
                  <table style="width:100%">
                    <tr>
                      <form name = "order" action = "ตะกร้าสินค้า(ใบสั่งซื้อสินค้า).php" method = "post">
                        <td> <input id="the_input_id" name="amount" type="number" value="0" min="0" max="<?php echo $row_list2[14]; ?>" onKeyPress="CheckNum()" style="text-align: center;"> </td>
                        <td style="padding-left: 5px;"> <input id="the_input_id1" name="price" type="text" placeholder="ราคาขาย / หน่วย" onKeyPress="CheckNum()" style="text-align: center;"> </td>
                        <td style="padding-left: 5px;"> <input id="total" name="sum_p" type="text" placeholder="ราคาสุทธิ" style="text-align: center;" disabled> </td>
                        <input type="hidden" name="id_pd" value="<?php echo $row_list2[0]; ?>">
                        <td style="padding-left: 15px;"> <input type="submit" value="Add"> </td>
                      </form> 
                    </tr>
                  </table>

                  <?php
                  echo "<br>";
                }
                echo "<br>";
                ?>            

              </div>
            </div>   
            <?php
        }
        ?>

      <?php
    mysqli_close($con);
?>
</p>
</div>

