<!-- https://www.youtube.com/watch?v=JDn6OAMnJwQ 
ระบบlogin ทั้งหมด เอามาจากคลิปนี้-->
<?php
include "db_conn.php";
if (isset($_POST['Email']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $Email = validate($_POST['Email']);
    $pass = validate($_POST['password']);

    if (empty($Email)) {
        header("Location: index.php?error= E-mail is required");
        exit();
    }else if(empty($pass)) {
        header("Location: index.php?error= password is required");
        exit();
    }else{
        $sql = "SELECT * FROM login_1 WHERE email='$Email'AND passwoed='$pass'";

        $result = mysqli_query($conn, $sql);
       
        if (mysqli_num_rows($result)==1) {
         header("Location: หน้าหลัก.php");

        }
    }

}else{
    header("Location: index.php");
    exit();
}
