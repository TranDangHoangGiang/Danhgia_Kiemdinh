<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style1.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php 
    session_start();
    require_once("php/header.php"); 
    require_once("admin/db_connect.php");


    if (isset($_POST['add'])){
        if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "kh_mshh");
    
        if(in_array($_POST['kh_mshh'], $item_array_id)){
            echo "<script>alert('Sản phẩm đã được thêm vào giỏ hàng..!')</script>";
            echo "<script>window.location = 'category.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'kh_mshh' => $_POST['kh_mshh'],
                'gia' => $_POST['gia'],
                'hh' => $_POST['tenhh'],
                'tenhinh' => $_POST['tenhinh'],
                'soluonghang' => 1
            );

            $_SESSION['cart'][$count] = $item_array;
            echo "<script>alert('Sản phẩm đã được thêm vào giỏ hàng..!')</script>";
            echo "<script>window.location = 'category.php'</script>";
        }

    }else{

        $item_array = array(
                'kh_mshh' => $_POST['kh_mshh'],
                'gia' => $_POST['gia'],
                'hh' => $_POST['tenhh'],
                'tenhinh' => $_POST['tenhinh'],
                'soluonghang' => 1
        );

        $_SESSION['cart'][0] = $item_array;
        }
        echo "<script>alert('Sản phẩm đã được thêm vào giỏ hàng..!')</script>";
        echo "<script>window.location = 'category.php'</script>";
    }

    // if (isset($_POST['back'])) {
    //     header('location:category.php');
    // }

    if (isset($_GET['ms_hh'])) {
        $ms_hh = $_GET['ms_hh'];
        $query = "SELECT h.mshh,h.tenhh,h.gia,h.soluonghang,h.quycach, img.tenhinh FROM hanghoa h join hinhhanghoa img on h.mshh = img.mshh WHERE h.mshh = {$ms_hh} ";
        $query_run = mysqli_query($conn, $query);
        if (mysqli_num_rows($query_run) > 0) {
            $prodItem = mysqli_fetch_array($query_run); 


    ?>

    <section style="padding: 50px 0;" class="product">
        <div class="container">
            <div class="product-top row" style="margin-bottom: 70px;">
                <h3><span style="font-weight: 400; margin: 100px 0;">Trang chủ / </span>Gia dụng phòng khách / <span>Hàng mới về / </span> <span><?= $prodItem['tenhh']; ?></span></h3>
            </div>
            <div class="product-content row">
              <form method="post" enctype="multipart/form-data" action="product.php">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="admin/image/<?= $prodItem['tenhinh']; ?>" alt="Image">
                        <input type="hidden" name="tenhinh" value="<?php echo $prodItem['tenhinh']; ?>">
                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1><?= $prodItem['tenhh']; ?></h1>
                        <p style="font-size: 16px; color: green;">MSP: <?= $prodItem['mshh']; ?></p>
                        <input type="hidden" name="tenhh" value="<?php echo $prodItem['tenhh']; ?>">
                    </div>
                    <div class="product-content-right-product-price">
                        <p><?= number_format($prodItem['gia'], 0, ".", ","); ?><sup>đ</sup></p>
                        <input type="hidden" name="gia" value="<?php echo $prodItem['gia']; ?>">
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng: <?= $prodItem['soluonghang']; ?></p>
                        <!-- <input type="number" min="0" value="<?= $prodItem['soluonghang']; ?>" style="width: 50px;">  -->
                    </div>
                    <div class="product-content-right-product-button">
                        <button style="background-color: #F05D40;
    border: 1px solid #ed8505;
    margin-right: 20px;
    color: white;
    border-radius: 5px;" type="submit" name="add"><i class="fas fa-shopping-cart"></i><p>GIỎ HÀNG</p></button>
                        <input type='hidden' name='kh_mshh' value='<?= $prodItem['mshh']; ?>'>
                        <button style=" border: 2px solid #ed8505;
    border-radius: 5px;
    color: #ed8505;
    background-color: #FFF5F1;" type="submit"><p>TÌM TẠI CỬA HÀNG</p></button>
                    </div>
                    <div style="margin-bottom: 20px;"  class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-phone-alt"></i> <p>Hotline</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="far fa-comments"></i> <p>Chat</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="far fa-envelope"></i><p>Mail</p>
                        </div>
                    </div>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item chitiet">
                                        <p style="font-size: 16px;">Chi tiết</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item cauhinh">
                                        <p style="font-size: 16px;">Cấu hình</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item danhgia">
                                    <p style="font-size: 16px;">Đánh giá sản phẩm</p>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div style="font-size: 16px;" class="product-content-right-bottom-content-danhgia">
                                    <?= $prodItem['quycach']; ?>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
              </form>
            </div>

        </div>

    </section>
<?php } 
        else{
            echo "Không có hàng hóa được tìm thấy";
        }
    }
?>
    <!-- "product-related1"------------------- -->
    <div class="product-related1">
        <div class="product-related1-title">
            <p>SẢN PHẨM LIÊN QUAN</p>
        </div>   
        <div class="product-content row_flex">
            <div class="product-related1-item">
                <img src="./img/phongbep1-1.jpg" alt="">
                <h1>ĐỒ GIA DỤNG VIP PRO</h1>
                <p>200.000<sup>đ</sup></p>
            </div>
            <div class="product-related1-item">
                <img src="./img/phongbep1-2.jpg" alt="">
                <h1>ĐỒ GIA DỤNG VIP PRO</h1>
                <p>200.000<sup>đ</sup></p>
            </div>
            <div class="product-related1-item">
                <img src="./img/phongbep1-3.jpg" alt="">
                <h1>ĐỒ GIA DỤNG VIP PRO</h1>
                <p>200.000<sup>đ</sup></p>
            </div>
            <div class="product-related1-item">
                <img src="./img/phongbep1-4.jpg" alt="">
                <h1>ĐỒ GIA DỤNG VIP PRO</h1>
                <p>200.000<sup>đ</sup></p>
            </div>
            <div class="product-related1-item">
                <img src="./img/phongbep1-5.jpg" alt="">
                <h1>ĐỒ GIA DỤNG VIP PRO</h1>
                <p>200.000<sup>đ</sup></p>
            </div>
        </div>
    </div>

<?php require_once("php/footer.php"); ?>