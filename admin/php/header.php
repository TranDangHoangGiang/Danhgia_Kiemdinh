<?php
    session_start();


    $admin = array();


    if(isset($_SESSION['msnv'])){
        require('db_connect.php');
    }

    // if (isset($_POST['permission'])){
    //   $_SESSION['permission'] = 1;
    //   if (isset($_SESSION['permission'])) {
    //     echo "<script>alert('Đã cấp quyền đăng ký admin!')</script>";
    //     echo "<script>window.location = 'index.php'</script>";
    //   }
    // }
    
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header style="background-color: #0F5B99;">
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3 style="color: white;">Quản lý bán hàng</h3>
      </div>
      <div class="right_area">
        
        <a href="log-out.php" class="logout_btn">Đăng xuất</a>
      </div>
    </header>
    <!--header area end-->