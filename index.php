<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شاشة تسجيل الدخول</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div id="form">
        
        <form name="form" action="login.php" method="post">
        <h1 style="text-align: center;">تسجيل الدخول</h1>
        <input style="text-align: center;" type="text" id="user"name="user">
        <label style="text-align: center;">اسم المستخدم</label></br></br>
        <input type="password" id="pass"name="pass">
        <label>كلمـــة الســر</label></br></br>
        <input type="submit" id="btn" value="تسجيل الدخول"name="submit"/>
           <p>already have an account? <a href="register_form.php">login now</a></a></p>
        </form>
    </div>
</body>
</html>