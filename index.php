<!-- https://www.youtube.com/watch?v=JDn6OAMnJwQ 
ระบบlogin ทั้งหมด เอามาจากคลิปนี้-->
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post" >
     <h2>LOGIN</h2>
     <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
     
     <label>E-mail</label>
     <input type="text" name="Email" placeholder="E-mail"><br>

     <label>Password</label>
     <input type="password" name="password" placeholder="Password"><br>

     <button type="submit">Login</button>
    </form>
</body>
</html>
