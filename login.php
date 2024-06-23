<?php
include "./admin/db_connect.php";
session_start();
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);
        $checkEmail = mysqli_num_rows($query);
        if($checkEmail == 1){
            $checkPass = password_verify($password, $data['password']);
            if($checkPass){
                // lưu vào session
                $_SESSION['user']= $data;
                header('location: index1.php');
            }else{
                echo "Sai mật khẩu";
            }
        }else{
            echo "Email không tồn tại";
        }
    }
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Đăng nhập</title> 
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login User</span></div>
        <form action="" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="./signup.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>