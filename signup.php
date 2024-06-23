<?php
include "./admin/db_connect.php";
$err = [];
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rPassword = $_POST['rPassword'];
    if(empty($name)){
        $err['name'] = 'Bạn chưa nhập tên';
    }
    if(empty($email)){
        $err['email'] = 'Bạn chưa nhập email';
    }
    if(empty($password)){
        $err['password'] = 'Bạn chưa nhập pass';
    }
    if($password != $rPassword){
        $err['rPassword'] = 'Mật khẩu nhập lại không đúng';
    }
    if(empty($err)){
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user(name,email,password) VALUES ('$name', '$email', '$pass')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: login.php');
        }
    }
    // die();

}
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Đăng ký</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Register an account</span></div>
        <form action="" method="POST">
          <div class="row">
            <input type="text" placeholder="Username" name="name" required>
          </div>
          <div class="row">
            <input type="text" placeholder="Email" name="email"  required>
          </div>
          <div class="row">
            <input type="password" placeholder="Password" name="password"  required>
          </div>
          <div class="row">
            <input type="password" placeholder="Enter password again" name="rPassword" required>
            <div class="has_error" style="padding: 30px 0;">
                <span><?php echo (isset($err['rPassword']) ? $err['rPassword'] : '');?></span>
            </div>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Signup">
          </div>
          <div class="signup-link">You had an account? <a href="login.php">Login now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>