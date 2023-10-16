<?php
include("connection.php");
if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $sql ="select * from login where un = '$username' and ps = '$password' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $COUNT = mysqli_num_rows($result);
    if($COUNT == 1){
        header("location:mainpage.php");
    }else
    {
        echo '<script>
        window.location.href="index.php";
        alert("login failed.invalid username or password!!!")
        </script>';
    }
    
}


?>

