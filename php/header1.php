<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán đồ gia dụng</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="../style1.css">

</head>
<body>
<header>
        <div class="navbar">
            <div class="nav-logo">
                <div class="logo">
                    <a href="index.php"><img src="./img/logosale.jpg" alt=""></a>
                </div>
            </div>
            <div class="nav-address" id="adress_form">  
                <p class="add-first" >Giao hàng đến</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="add-second">Viet Nam</p>
                </div>
            </div>
            <div class="nav-search">
                <form action="" method="">
                                <input type="text" placeholder="Tìm kiếm">                      
                </form>
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="nav-signin">
                <p><span><a href="login.php">Xin chào, đăng nhập</a></span></p>
                <p class="nav-second"><a href="login.php">Tài khoản</a></p>
            </div>
            <div class="nav-return">
                <p><span>Mua sắm</span></p>
                <p class="nav-second">& Đặt hàng </p>
            </div>
            <div class="nav-card">
                <!-- Thêm id "cart-link" cho thẻ <a> của giỏ hàng -->
<a href="" id="cart-link"><i class="fa-solid fa-cart-shopping"></i></a>
<a href=""><p class="nav-second">Giỏ hàng</p></a>

<script>
// Sử dụng JavaScript để kiểm tra xem người dùng đã đăng nhập hay chưa
document.getElementById('cart-link').addEventListener('click', function (event) {
  // Kiểm tra điều kiện đăng nhập ở đây (ví dụ: kiểm tra biến userLoggedIn)
  
    // Người dùng chưa đăng nhập, hiển thị thông báo hoặc chuyển họ đến trang đăng nhập
    alert("Bạn phải đăng nhập để xem giỏ hàng");
    event.preventDefault(); // Ngăn chuyển hướng đến trang cart.php
    // Hoặc chuyển hướng đến trang đăng nhập: window.location.href = 'login.php';
  
});
</script>

            </div>
            <div class="adress_form">
                <div class="adress_form_content">
                    <h2>Chọn địa chỉ nhận hàng <span id="adress_close">X Đóng</span></h2>
                    <form action="">
                        <p>Quý khách vui lòng cho biết Địa Chỉ Nhận Hàng để biết chính xác thời gian giao hàng</p>
                        <select name="" id="">
                            <option value="#">Chọn địa điểm</option>
                            <option value="#">Đà Nẵng</option>
                        </select>
                        <select name="" id="">
                            <option value="#">Chọn Quận/Huyện</option>
                            <option value="#">Đà Nẵng</option>
                        </select>
                        <select name="" id="">
                            <option value="#">Chọn Phường/Xã</option>
                            <option value="#">Đà Nẵng</option>
                        </select>
                        <input type="text" placeholder="Số nhà, tên đường">
                        <button>Xác nhận</button>
                    </form>
                </div>
            </div>
        </div>
            <div class="panel-dropdown">
                <div class="panel-dropdown-menu">
                    <ul>
                        <li><a href="index.php"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
                        <li><a href="livingr.html"><i class="fa-solid fa-couch"></i>Gia dụng phòng khách</a>
                            <ul id="submenu">
                                <li><a href="livingr.html">Bàn, ghế</a></li>
                                <li><a href="livingr.html">Kệ tủ</a></li>
                                <li><a href="livingr.html">Đồ trang trí</a></li>
                                <li><a href="livingr.html">Đồ gia dụng khác</a></li>
                            </ul>
                        </li>
                        <li><a href="kitchen.html"><i class="fa-solid fa-kitchen-set"></i>Gia dụng phòng bếp</a>
                            <ul id="submenu">
                                <li><a href="kitchen.html">Bàn, ghế</a></li>
                                <li><a href="kitchen.html">Dụng cụ nấu ăn</a></li>
                                <li><a href="kitchen.html">Kệ, tủ bếp</a></li>
                                <li><a href="kitchen.html">Đồ gia dụng khác</a></li>
                            </ul>
                        </li>
                        <li><a href="bathr.html"><i class="fa-solid fa-shower"></i>Gia dụng phòng tắm</a>
                            <ul id="submenu">
                                <li><a href="bathr.html">Bồn tắm, Bồn rửa mặt</a></li>
                                <li><a href="bathr.html">Toilet</a></li>
                                <li><a href="bathr.html">Gương tắm</a></li>
                                <li><a href="bathr.html">Đồ gia dụng khác</a></li>
                            </ul>
                        </li>
                        <li><a href="bedr.html"><i class="fa-solid fa-bed"></i>Gia dụng phòng ngủ</a>
                            <ul id="submenu">
                                <li><a href="bedr.html">Giường</a></li>
                                <li><a href="bedr.html">Tủ quần áo</a></li>
                                <li><a href="bedr.html">Đồ trang trí</a></li>
                                <li><a href="bedr.html">Đồ gia dụng khác</a></li>
                            </ul>
                        </li>
                        <li><a href="news.html"><i class="fa-solid fa-comment"></i>Tin tức</a></li>
                        <li><a href="blog.html"><i class="fa-solid fa-blog"></i>Blog kiến thức</a></li>
                        <li><a href="contact.html"><i class="fa-solid fa-phone"></i>Liên hệ</a></li>
                    </ul>
                </div>
            </div>
    </header>