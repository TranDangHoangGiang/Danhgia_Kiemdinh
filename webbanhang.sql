-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2023 lúc 05:43 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'giang', 'giang@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(20) NOT NULL COMMENT 'Mã số hàng hóa',
  `TenHH` varchar(255) NOT NULL COMMENT 'Tên hàng hóa',
  `QuyCach` varchar(500) NOT NULL COMMENT 'Quy cách ',
  `Gia` int(11) NOT NULL COMMENT 'Giá',
  `SoLuongHang` int(50) NOT NULL COMMENT 'Số Lượng hàng hóa',
  `MaLoaiHang` int(20) NOT NULL COMMENT 'Mã loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `QuyCach`, `Gia`, `SoLuongHang`, `MaLoaiHang`) VALUES
(1, 'Bộ Bình Nước Thủy Tinh Màu Rượu Vang', 'Bộ Bình Nước Thủy Tinh Màu Rượu Vang BN20 được làm bằng chất liệu thủy tinh cao cấp, giúp bình trà thủy tinh có khả năng chịu nhiệt cực kỳ tốt. Đồng thời, với sự ổn định của của các nguyên liệu hóa học cấu tạo, được thử nghiệm trong môi trường nhiệt cao, chất liệu thủy tinh láng bóng, không hấp thụ hương vị trà, bộ thưởng trà thủy tinh này sẽ giúp người dùng thưởng thức trọn vẹn mùi vị trà nguyên chất và tinh khiết nhất. Nắp đậy có lỗ lọc trà. Thiết kế phong cách Bắc Âu đơn giản, sang trọng và r', 45990000, 50, 1),
(2, 'Bộ Bình Nước Thủy Tinh Màu Xám Phong Cách Bắc Âu', 'Bộ Bình Nước Thủy Tinh Màu Xám Phong Cách Bắc Âu BN19 có thể chịu nhiệt độ cao tiện lợi khi sử dụng. Được làm bằng thủy tinh dày, bền, sáng và trong suốt với thiết kế đẹp và tiện dụng. Nắp đậy có lỗ lọc trà. Bộ bình gồm 1 bình 1.2L, 6 cốc, khay, giá treo sang trọng và rất dễ vệ sinh, đảm bảo an toàn khi sử dụng. \n\nNgày càng có nhiều người sử dụng bình thủy tinh hơn bởi sự tiện dụng, tiết kiệm, có thể tái sử dụng nhiều lần. Đặc biệt với những người có lối sống xanh, bảo vệ môi trường, bình thủy t', 30450000, 100, 1),
(3, 'Bộ Bình Nước Thủy Tinh Màu Xám Phong Cách Bắc Âu', 'Bộ Bình Trà Thủy Tinh Cao Cấp có thể chịu nhiệt độ cao tiện lợi khi sử dụng. Được làm bằng thủy tinh dày, bền, sáng và trong suốt với thiết kế đẹp và tiện dụng. Nắp đậy có lỗ lọc trà. Bộ bình gồm 1 bình 1.2L, 6 cốc, khay, giá treo sang trọng và rất dễ vệ sinh, đảm bảo an toàn khi sử dụng.', 9690000, 80, 1),
(4, 'Bộ Bình Trà Thủy Tinh Cao Cấp', 'Bộ bình trà thủy tinh 6 chén 2 lớp đẹp độc đáo được làm từ thủy tinh cao cấp mang độ bền cao. Dòng thủy tinh cao cấp mang một loại kính chịu nhiệt mạnh mẽ truyền thống sử dụng để làm cho thủy tinh phòng thí nghiệm khoa học. Được gắn kết với nhau chặt chẽ, dẫn đến ly mạnh mẽ hơn, nhẹ hơn. Dòng thủy tinh này không cần phải dày như thủy tinh truyền thống. Nhưng ly cafe thủy tinh 2 lớp có khả năng chống biến động nhiệt độ, an toàn sẽ không mờ theo thời gian; bạn có thể yên tâm rằng sau thời gian sử ', 6590000, 95, 1),
(5, 'Bộ Ghế Sofa Bọc Da Cao Cấp\n', 'Ghế sofa da là mảnh ghép lý tưởng dành cho những không gian nội thất mang phong cách sang trọng, quý phái. Trọn bộ gồm sofa văng, sofa đơn và ghế đôi được thiết kế với kiểu dáng sang trọng, ấn tượng, hứa hẹn mang đến vẻ đẹp đẳng cấp cho không gian phòng khách tại nhà biệt thự, căn hộ chung cư hạng sang hoặc các khu văn phòng hội nghị cao cấp. Hãy để sofa da của nội thất M8 giúp bạn có những giây phút nghỉ ngơi, quây quần bên gia đình thoải mái, hoàn hảo nhất nhé!\n', 25000000, 40, 2),
(6, 'Bộ Ghế Sofa Góc Bọc Da Cao Cấp\n', 'Ghế sofa da luôn là mẫu sofa được nhiều người ao ước có được trong không gian phòng khách của mình. Với gam màu kem tương đối tươi sáng phù hợp với nhiều không gian khác nhau, từ những không gian cổ điển cho tới những không gian chung cư có phòng khách hẹp. Màu kem sẽ mang tới cảm giác rộng rãi, thoáng đãng cho cả không gian phòng khách của gia đình. \n\nKiểu dáng mềm mại với phần tựa lưng được thiết kế hơi nghiêng về phía sau rất tiện cho những phút nghỉ ngơi giải trí của cả gia đình trong phòng ', 12990000, 45, 2),
(7, 'Bộ Khay Gốm Đựng Trái Cây Khung Kim Loại', 'Những chiếc khay xinh xắn và vô cùng đẹp mắt được làm bằng chất liệu gốm cao cấp, giá đỡ kim loại mạ vàng chắc chắn giúp không gian nhà bạn tỏa sáng rực rỡ. Làm tô điểm thêm cho những món ăn trở nên ngon và đẹp mắt, độc đáo nhưng không kém phần sang trọng.\n', 1690000, 70, 7),
(8, 'Bộ Khay Hoa Quả, Gạt Tàn, Hộp Giấy', 'Bộ Khay Hoa Quả, Gạt Tàn, Hộp Giấy là set vật dụng tiện dụng với hoa văn độc đáo dành cho phòng khách nhà bạn. Set đồ màu xanh cùng hoa văn độc đáo mang lại cảm giác quý phái, sang trọng. Bạn có thể sử dụng set trên để trang trí phòng khách, làm quà tặng bạn bè, người thân nhận dịp khai trương cửa hàng, tân gia…\n', 1190000, 90, 7),
(9, 'Bộ Bàn Ghế Gỗ Tiếp Khách', 'Bàn ghế phòng khách  bằng gỗ tự nhiên được thiết kế với phong cách cổ điển với cách chi tiết chạm khắc cầu kỳ, tinh tế, các đường cong mềm mại làm tôn lên vẻ trang trọng cho khu phòng khách. Sản phẩm có tạo hình đẹp, kết cấu vững chắc phù hợp làm nội thất gia đình cho phòng khách rộng rãi.\n', 2990000, 35, 2),
(10, 'Bộ Bàn Ghế Gỗ Tiếp Khách Cao Cấp', 'Sản phẩm được bọc da bò được nhập khẩu trực tiếp từ Italia có giấy tờ chứng nhận nguồn gốc xuất xứ. Được xử lý kỹ càng bởi công nghệ hàng đầu tại Ý hiện nay, đảm bảo an toàn tuyệt đối cho người dùng, phần đệm ngồi được sử dụng là nệm lông vũ cao cấp, có độ đàn hồi cao. Tạo sự êm ái và cực kỳ thoải mái khi sử dụng.', 6990000, 40, 2),
(11, 'Bộ Bàn Ghế Tiếp Khách Bọc Vải Nhung Cao Cấp', 'Bộ Bàn Ghế Tiếp Khách Bọc Vải Nhung Cao Cấp được thiết kế tinh xảo. Bàn được sản xuất từ đá cao cấp, sở hữu bề mặt bóng đẹp chống ố, chống xước, chịu nhiệt độ cao mang tới vẻ sáng mới, tinh tế cho không gian bài trí. Ghế nệm được bọc vải nhung, lưng dáng tựa ngả mang tới tư thế ngồi thoải mái nhất.. Chân ghế thép sơn tĩnh điện bọc ống inox mạ vàng mang đến sự sang trọng, đẳng cấp cho bộ bàn ghế.\n', 13990000, 50, 2),
(12, 'Bộ Bàn Ghế Tiếp Khách Cao Cấp', 'Bộ Bàn Ghế Tiếp Khách Cao Cấp BTK02 được làm từ chất liệu đặc biệt. Mặt bàn mica giả đá viền inox mạ vàng tinh xảo. Chịu được tác động va đập mạnh từ bên ngoài. Kết hợp cùng với đó là phần chân ghế được làm từ chất liệu thép sơn tĩnh điện. Viền inox mạ vàng rất bền lại thể hiện được sự sang trọng khi trang trí trong phòng. Phần mặt bàn nhẵn dễ vệ sinh sau khi sử dụng.\n', 7490000, 60, 2),
(13, 'Ấm Trà Thủy Tinh Có Đế Điện Chịu Nhiệt', 'Chất liệu thủy tinh cao cấp có khả năng chịu nhiệt cực kỳ tốt. Đồng thời, với sự ổn định của của các nguyên liệu hóa học cấu tạo, được thử nghiệm trong môi trường nhiệt cao, chất liệu thủy tinh láng bóng, không hấp thụ hương vị trà, ấm trà thủy tinh này sẽ giúp người dùng thưởng thức trọn vẹn mùi vị trà nguyên chất và tinh khiết nhất. Màu sắc của nước trà, cánh trà, hoa trà hay lớp sương khói mờ ảo cũng được thể hiện toàn bộ bên trong lớp thủy tinh trong suốt, mang lại một cảm quan duy mĩ, cảm g', 3490000, 90, 1),
(14, 'Bình Nước Thủy Tinh Xanh Phong Cách Châu Âu', 'Bình Nước Thủy Tinh Xanh Phong Cách Châu Âu được làm bằng thủy tinh brosilicate cho khả năng chịu nhiệt tốt. Phủ màu xanh cho hiệu ứng đổi màu nước bên trong độc đáo và sang trọng. Sử dụng tiện lợi và trang trí cho không gian phòng khách hay phòng bếp nhà bạn. Đặc biệt nắp làm bằng silicon có miếng nệm cao su được bo theo nắp sẽ dính chặt vào bình, không còn tình trạng rót nước bị văng nắp ra ngoài nữa.', 24490000, 100, 1),
(15, 'Bộ Ấm Trà Sứ Họa Tiết Hươu Bắc Âu', 'Bộ Ấm Trà Sứ Họa Tiết Hươu Bắc Âu BG30 là bộ ấm trà kiểu Âu sang trọng và bắt mắt. Dòng sản phẩm chúng tôi giới thiệu dưới đây, chắc chắn sẽ làm bạn cảm thấy hài lòng về kiểu dáng, mẫu mã cũng nhưng chất liệu của bộ. Ngoài ra bộ ấm trà sứ còn có khả năng chịu nhiệt, giữ nhiệt tốt và rất an toàn cho người sử dụng. Rất thích hợp để trang trí và sử dụng tạo điểm nhấn cho gia đình bạn tươi mới khi bắt đầu một ngày mới .\n', 33990000, 100, 1),
(16, 'Bộ Ấm Trà Sứ Xương 15 Món Cao Cấp pro hhhhh', 'Bộ ấm chén uống trà hiệu Noritake 15 món sản xuất tại Nhật Bản với viền mạ vàng 23K sang trọng, chất liệu sứ xương cao cấp. Bộ sản phẩm phù hợp sử dụng trong gia đình, hoặc làm quà tặng trung thu, quà tặng tết cao cấp cho sếp, quà tặng khách hàng VIP. ', 36990000, 100, 5),
(24, 'Gia dụng vip', 'đồ xịn thực sự ', 100, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhhanghoa`
--

CREATE TABLE `hinhhanghoa` (
  `MaHinh` int(20) NOT NULL COMMENT 'Mã hình ',
  `TenHinh` varchar(255) NOT NULL COMMENT 'Tên Hình',
  `MSHH` int(20) NOT NULL COMMENT 'Mã số hàng hóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hinhhanghoa`
--

INSERT INTO `hinhhanghoa` (`MaHinh`, `TenHinh`, `MSHH`) VALUES
(1, 'phongkhach1.jpg', 1),
(2, 'phongkhach2.jpg', 2),
(3, 'phongkhach3.jpg', 3),
(4, 'phongkhach4.jpg', 4),
(5, 'phongkhach5.jpg', 5),
(6, 'phongkhach6.jpg', 6),
(7, 'phongkhach7.jpg', 7),
(8, 'phongkhach8.jpg', 8),
(9, 'phongkhach9.jpg', 9),
(10, 'phongkhach10.jpg', 10),
(11, 'phongkhach11.jpg', 11),
(12, 'phongkhach12.jpg', 12),
(13, 'phongkhach13.jpg', 13),
(14, 'phongkhach14.jpg', 14),
(15, 'phongkhach15.jpg', 15),
(16, 'phongkhach16.jpg', 16),
(26, 'phongbep2-8.jpg', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `MaLoaiHang` int(20) NOT NULL COMMENT 'Mã loại hàng',
  `TenLoaiHang` varchar(255) NOT NULL COMMENT 'Tên loại hàng hóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`MaLoaiHang`, `TenLoaiHang`) VALUES
(1, 'Ấm, chén'),
(2, 'Bàn ghế'),
(3, 'Tủ lạnh'),
(4, 'Máy giặt'),
(5, 'Kệ tủ'),
(6, 'Giường'),
(7, 'Gia dụng khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(12, 'Giangdz', 'hihi1@gmail.com', '$2y$10$M6w5WudRlwRxbnMannv88Ok1uo0r0BoZyjColxFm4.Vznrghsz2rS'),
(13, 'Giang', 'a@gmail.com', '$2y$10$HdXMgfamUC.A8.RzfIawDu5nc0tL/LlRysVZK9HQC4wQwDtI.xs4O'),
(14, 'Nam', 'b@gmail.com', '$2y$10$VIp/Tq0zfPl11Ve4gPQn7e9pmvEmLW3ahDUllVZrQcayLZR3255uC');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaLoaiHang` (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  ADD PRIMARY KEY (`MaHinh`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Chỉ mục cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MSHH` int(20) NOT NULL AUTO_INCREMENT COMMENT 'Mã số hàng hóa', AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  MODIFY `MaHinh` int(20) NOT NULL AUTO_INCREMENT COMMENT 'Mã hình ', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  MODIFY `MaLoaiHang` int(20) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`);

--
-- Các ràng buộc cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  ADD CONSTRAINT `hinhhanghoa_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
