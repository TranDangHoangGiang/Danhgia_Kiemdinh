<?php 
	require_once("db_connect.php");

	$ms_hh = $_GET['ms_hh'];
	$sql_img = "DELETE  FROM `hinhhanghoa` WHERE mshh = $ms_hh";
	$query_img = mysqli_query($conn,$sql_img);


	$sql_hh = "DELETE  FROM `hanghoa` WHERE mshh = $ms_hh";
	$query_hh = mysqli_query($conn,$sql_hh);	
	echo "<script>alert('Hàng hóa đã được xóa...!')</script>";
    echo "<script>window.location = 'product.php'</script>";

?>

