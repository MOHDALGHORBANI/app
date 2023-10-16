<?php
include("connection.php");
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $send = $_POST['submit'];
    if($send){
        $query = "INSERT INTO login(un,email,ps,psc) VALUE('$name','$email','$pass','$cpass')";
        $result = mysqli_query($conn,$query);
        echo "seccessfuly send";
    }
    else{
        echo "seccessfuly not send";
    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="form">
    <form style="align-items: center;" action="register_form.php" method="post">
    <div style="align-items: center;" class="container">
        <h3 style="text-align: center;">إنشاء حساب </h3>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        
        ?>
        <input type="text" name="name" required placeholder="enter your name">
        <label style="text-align: center;">اسم المستخدم</label></br>
        <input type="email" name="email" required placeholder="enter your email">
        <label style="text-align: center;"> الايميل</label></br>
        <input type="password" name="password" required placeholder="enter your password">
        <label style="text-align: center;"> كلمة السر</label></br>
        <input type="password" name="cpassword" required placeholder="enter your password">
        <label style="text-align: center;">تأكيد كلمة السر</label></br>
        <input style="align-items: center" type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="index.php">login now</a></a></p>
        </div>
    </form>
    
</div> 
</body>
</html>