<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style1.css">
</head>
<body>
<?php 

    session_start();

    require_once("admin/db_connect.php");
    // require_once("php/component.php");
    
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

    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $key = $_GET['search'];

        $result = mysqli_query($conn, 'select count(mshh) as total from hanghoa');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];

        //TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 999;

        //TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);

        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        $sql = "SELECT h.mshh, h.tenhh, img.tenhinh, h.soluonghang, h.gia FROM hanghoa h join hinhhanghoa img on h.mshh = img.mshh join loaihanghoa l on h.maloaihang = l.maloaihang WHERE h.tenhh LIKE '%$key%' OR l.tenloaihang LIKE '%$key%' LIMIT $start, $limit ";

    }
    elseif (isset($_GET['filter'])) 
    {   
        $filter = $_GET['filter'];
        //TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(mshh) as total from hanghoa');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];

        //TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 20;

        //TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);

        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;


        $sort_option = "";

        if ($filter == "high-low") {
            $sort_option = "DESC";
        }
        else{
            $sort_option = "ASC";
        }    

        $sql = "SELECT h.mshh, h.tenhh, img.tenhinh, h.soluonghang, h.gia FROM hanghoa h join hinhhanghoa img on h.mshh = img.mshh ORDER BY h.gia $sort_option LIMIT $start, $limit ";
    }
    else{
        //TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(mshh) as total from hanghoa');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];

        //TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 8;

        //TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);

        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;

        $sql = "SELECT h.mshh, h.tenhh, img.tenhinh, h.soluonghang, h.gia FROM hanghoa h join hinhhanghoa img on h.mshh = img.mshh LIMIT $start, $limit";
    }

    $result = mysqli_query($conn,$sql); 

    


?>

<?php require_once("php/header.php"); ?>

    <section class="cartegory">
        <div class="container">
            <div class="cartegory-top row">
            <h3><span>Trang chủ / </span>Gia dụng phòng khách</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="cartegory-left">
                    <ul>
                        <li class="cartegory-left-li "><a href="#">Gia dụng</a>
                        </li>
                        <li class="cartegory-left-li"><a href="#">Điều hòa</a>
                        </li>
                        <li class="cartegory-left-li"><a href="">Tủ lạnh</a></li>
                        <li class="cartegory-left-li"><a href="">Máy giặt</a></li>
                        <li class="cartegory-left-li"><a href="">Bát đĩa</a></li>
                    </ul>

                </div>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item">
                        <p>HÀNG MỚI VỀ</p>
                    </div>
                    <div class="cartegory-right-top-item">
                        <select name="filter" >
                            <option value="">Sắp xếp</option>
                            <option value="high-low" <?php if(isset($_GET['filter']) && $_GET['filter'] == "high-low"){ echo "selected";} ?>>Giá cao đến thấp</option>
                            <option value="low-high" <?php if(isset($_GET['filter']) && $_GET['filter'] == "low-high"){ echo "selected";} ?>>Giá thấp đến cao</option>
                        </select>  
                        </form>                
                    </div>
                    
                    <div class="cartegory-right-content row">
                        <?php 
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) { 
                                    $ms = $row['mshh'];
                                    $hh = $row['tenhh'];
                                    $hinh = $row['tenhinh'];
                                    $price = $row['gia'];
                        ?>
                                    <div class="cartegory-right-content-item">
                                        <form action="category.php" method="post">
                                            <a href="product.php?ms_hh=<?php echo $ms; ?>"><img src="./admin/image/<?php echo $hinh; ?>" alt="Image" name="hinh"></a>
                                            <h1><?php echo $hh; ?></h1>
                                            <p><?php echo number_format($price, 0, ".", ",");?><sup>đ</sup></p>
                                            <button style="background-color: #F05D40; color: white; border: none;
    border-radius: 5px; height: 20px; width: 80px; cursor: pointer;" type="submit" name="add"><i class="fas fa-shopping-cart"></i> Giỏ hàng </button>

                                            <input type='hidden' name='kh_mshh' value='<?php echo $ms; ?>'>
                                            <input type="hidden" name="gia" value="<?php echo $price; ?>">
                                            <input type="hidden" name="tenhh" value="<?php echo $hh; ?>">
                                            <input type="hidden" name="tenhinh" value="<?php echo $hinh; ?>">
                                        </form>
                                    </div>
                          <?php } ?>
                      <?php } ?>
                    </div>
                   <div class="cartegory-right-bottom row">
                       <div class="cartegory-right-bottom-items">
                        <?php 
                            // nếu current_page > 1 và total_page > 1 mới hiển thị nút Trước
                            if ($current_page > 1 && $total_page > 1){
                                echo '<a href="category.php?page='.($current_page-1).'">Trước</a> | ';
                            }
                            // Lặp khoảng giữa
                            for ($i = 1; $i <= $total_page; $i++){
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                                if ($i == $current_page){
                                    echo '<span>'.$i.'</span> | ';
                                }
                                else{
                                    echo '<a href="category.php?page='.$i.'">'.$i.'</a> | ';
                                }
                            }

                            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút Tiếp
                            if ($current_page < $total_page && $total_page > 1){
                                echo '<a href="category.php?page='.($current_page+1).'">Tiếp</a>  ';
                            }
                        ?>
                        </div>
                   </div> 
                </div>
                
            </div>
        </div>
    </section>

     
<?php require_once('php/footer.php') ?>
</body>
</html>