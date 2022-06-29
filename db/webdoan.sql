-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2021 lúc 01:44 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `id_Cpost` int(11) UNSIGNED NOT NULL,
  `title_Cpost` varchar(200) NOT NULL,
  `desc_Cpost` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`id_Cpost`, `title_Cpost`, `desc_Cpost`) VALUES
(1, 'Anime', 'các thể loại anime'),
(3, 'Esports', 'game'),
(5, 'Wildlife', 'Động vật hoang dã');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `idCP` int(11) UNSIGNED NOT NULL,
  `titelCP` varchar(200) NOT NULL,
  `destCP` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`idCP`, `titelCP`, `destCP`) VALUES
(1, 'Naruto', 'Naruto cực ngầu'),
(2, 'Dragon Ball', 'Dragon Ball đẹp đầy đủ các loại'),
(4, 'One Piece', 'mô hình OnePiece'),
(5, 'Marvel & DC', 'Marvel & DC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`) VALUES
(4, 'Nguyễn Bình Nguyên', 'nguyen123@gmai.com', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(200) NOT NULL,
  `order_date` varchar(200) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `order_date`, `order_status`) VALUES
(21, '2630', '01/11/2021 12:32:53am', 1),
(22, '5873', '01/11/2021 12:36:11am', 1),
(23, '1539', '11/11/2021 02:08:49pm', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_code` varchar(200) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `noidung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_quantity`, `name`, `sodienthoai`, `email`, `diachi`, `noidung`) VALUES
(26, '2630', 13, 1, '1', '1', 'trong.uchiha1@gmail.com', '1', '2'),
(27, '2630', 12, 1, '1', '1', 'trong.uchiha1@gmail.com', '1', '2'),
(28, '2630', 11, 1, '1', '1', 'trong.uchiha1@gmail.com', '1', '2'),
(29, '2630', 8, 1, '1', '1', 'trong.uchiha1@gmail.com', '1', '2'),
(30, '2630', 5, 1, '1', '1', 'trong.uchiha1@gmail.com', '1', '2'),
(31, '5873', 13, 3, '1', '1', 'trong.uchiha1@gmail.com', '1', '12'),
(32, '5873', 9, 1, '1', '1', 'trong.uchiha1@gmail.com', '1', '12'),
(33, '1539', 15, 1, 'Nguyễn Thế Trọng', '0949213792', 'trong123@gmail.com', '534 núi thành ,Đà nẵng', 'gui hang nhanh nhe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(200) NOT NULL,
  `content_post` text NOT NULL,
  `image_post` varchar(255) NOT NULL,
  `id_Cpost` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `title_post`, `content_post`, `image_post`, `id_Cpost`) VALUES
(3, 'Nếu tộc Uchiha kết hôn với tộc Hyuga thì sẽ có nhãn thuật mạnh mẽ như thế nào?', '<h1>&nbsp;</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Bạn đ&atilde; bao giờ tưởng tượng nếu 2 gia tộc Uchiha v&agrave; Hyuga trong Naruto kết h&ocirc;n với nhau th&igrave; con ch&aacute;u của họ sẽ sở hữu đồng thuật hay năng lực như n&agrave;o chưa.</h2>\r\n\r\n<p><em><a href=\"http://kenhkhampha.info/boruto-lieu-co-con-nhan-vat-nao-so-huu-con-mat-jougan-nhu-con-trai-naruto-nua-khong-3.html\">Boruto: Liệu c&oacute; c&ograve;n nh&acirc;n vật n&agrave;o sở hữu con mắt Jougan như con trai Naruto nữa kh&ocirc;ng?</a></em></p>\r\n\r\n<p><em><a href=\"http://kenhkhampha.info/gia-thuyet-boruto-moi-lien-ket-bi-an-giua-hai-con-mat-h%cc%bcu%cc%bcy%cc%bce%cc%bct%cc%bc-ke-gioi-han-jougan-va-byakugan.html\">Giả thuyết Boruto: Mối li&ecirc;n kết b&iacute; ẩn giữa hai con mắt h̼u̼y̼ế̼t̼ kế giới hạn Jougan v&agrave; Byakugan</a></em></p>\r\n\r\n<p>Thế giới trong Naruto kh&ocirc;ng chỉ g&acirc;y ấn tượng với người xem bởi những Ninja với nhiều Nhẫn thuật đỉnh cao m&agrave; c&ograve;n bởi những đồng thuật sở hữu thứ sức mạnh b&aacute; đạo đến k̼i̼n̼h̼ ̼n̼g̼ạ̼c̼. Nổi bật nhất trong số đ&oacute; l&agrave; Sharingan v&agrave; Byakugan .</p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 1.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-1-15496811512131349051831.jpg\" /></p>\r\n\r\n<p>Sharingan l&agrave; h̼u̼y̼ế̼t̼ kế giới hạn của gia tộc Uchiha khi sử dụng đ&ocirc;i mắt của người d&ugrave;ng sẽ chuyển sang m&agrave;u đỏ. Chỉ những th&agrave;nh vi&ecirc;n mang d&ograve;ng m̼&aacute;̼u̼ Uchiha mới c&oacute; thể k&iacute;ch hoạt đồng thuật n&agrave;y.</p>\r\n\r\n<p>Người n&agrave;o thức tỉnh được đ&ocirc;i mắt Sharingan cũng đồng nghĩa với việc người đ&oacute; sẽ sở hữu những sức mạnh to lớn như nh&igrave;n thấy chakra, nh&igrave;n r&otilde; c&aacute;c chi&ecirc;u thức của đối phương kể cả ảo thuật, thể thuật hay nhẫn thuật, sao ch&eacute;p thuật v&agrave; d&ugrave;ng ảo th̼u̼ậ̼t̼ ̼t̼h̼&ocirc;̼i̼ ̼m̼i̼&ecirc;̼n̼ ̼đ̼ị̼c̼h̼ ̼t̼h̼ủ̼.̼</p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 2.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-1-1549681155453500459970.jpg\" /></p>\r\n\r\n<p>Byakugan l&agrave; h̼u̼y̼ế̼t̼ kế giới hạn của gia tộc Hyuga , đ&ocirc;i mắt Byakugan mang m&agrave;u trắng đặc trưng v&agrave; kh&ocirc;ng c&oacute; đ̼ồ̼n̼g̼ ̼t̼ử̼. Khi ở trạng th&aacute;i c̼h̼i̼ế̼n̼ ̼đ̼ấ̼u̼, người sở hữu Byakugan sẽ xuất hiện những g&acirc;n m̼&aacute;̼u̼ nổi r&otilde; ở hai b&ecirc;n th&aacute;i dương.</p>\r\n\r\n<p>Đ&ocirc;i mắt Bạch nh&atilde;n mang tới cho người d&ugrave;ng những năng lực tuyệt với m&agrave; ai cũng th&egrave;m muốn như: tầm nh&igrave;n cực xa, cực rộng (ngoại trừ một điểm &ldquo;m&ugrave;&rdquo; ở gần đốt sống thứ nhất), nh&igrave;n xuy&ecirc;n mọi thứ, nh&igrave;n t&iacute;nh chất chakra của đối phương, bao gồm cả hệ thống lu&acirc;n chuyển v&agrave; d&ograve;ng chảy chakra, l&agrave; ch&igrave;a kh&oacute;a để sử dụng Nhu quyền.</p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 3.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-2-15496811554551700729160.png\" /></p>\r\n\r\n<p>Chưa kể đến, Uchiha c&ograve;n l&agrave; hậu duệ của Indra Otsutsuki, con trai trưởng của Lục Đạo Ti&ecirc;n Nh&acirc;n Hagoromo Otsutsuki trong khi Hyuga l&agrave; hậu duệ của Hamura Ōtsutsuki (em trai Lục Đạo) nữa đấy.</p>\r\n\r\n<p>Từng c&oacute; một thời gian, nhiều người thắc mắc l&agrave; tại sao c&aacute;c th&agrave;nh vi&ecirc;n trong gia tộc Hyuga kh&ocirc;ng c&oacute; sức mạnh lớn như Uchiha d&ugrave; sở hữu đồng thuật qu&yacute; hiếm như nhau?</p>\r\n\r\n<p>C&acirc;u trả lời được ủng hộ nhiều nhất đ&oacute; l&agrave; bởi v&igrave; họ chưa bao giờ nắm giữ vai tr&ograve; quan trọng như gia tộc Uchiha trong to&agrave;n bộ c&acirc;u chuyện. Vậy nếu vai tr&ograve; của tộc Hyuga được n&acirc;ng l&ecirc;n th&igrave; c&oacute; lẽ ch&uacute;ng ta đ&atilde; được biết hơn nhiều về họ rồi nhỉ.</p>\r\n\r\n<p>V&agrave; bạn đ&atilde; bao giờ tưởng tượng nếu 2 gia tộcUchiha v&agrave; Hyuga kết h&ocirc;n với nhau th&igrave; con ch&aacute;u của họ sẽ sở hữu đồng thuật hay năng lực như n&agrave;o chưa?</p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 4.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-3-15496811554561192217516.jpg\" /></p>\r\n\r\n<p>Giả sử như nếu Sasuke kết h&ocirc;n với Hinata th&igrave; những đứa con của họ c&oacute; khả năng sử dụng cả Byakugan lẫn Sharingan kh&ocirc;ng nhỉ?</p>\r\n\r\n<p>Hay l&agrave; khi 2 gen đồng thuật kết hợp sẽ tạo ra một đồng thuật mới si&ecirc;u mạnh.</p>\r\n\r\n<p>T&ocirc;i thật kh&ocirc;ng thể tưởng tượng chuyện g&igrave; sẽ xảy ra tiếp theo nhưng c&aacute; nh&acirc;n t&ocirc;i thấy l&agrave; Sasuke v&agrave; Hinata kh&aacute; đẹp đ&ocirc;i.</p>\r\n\r\n<p>C&oacute; ai thấy điều n&agrave;y kh&ocirc;ng? V&agrave; chắc chắn l&agrave; Hinata &ldquo;mắn&rdquo; hơn Sakura, v&ocirc; c&ugrave;ng ph&ugrave; hợp với người mang trọng tr&aacute;ch l&agrave; người duy nhất s̼ố̼n̼g̼ ̼s̼&oacute;̼t̼ của gia tộc như Sasuke. Bạn thấy đấy, trong khi Naruto đ&atilde; 1 n&aacute;ch 2 con th&igrave; Sasuke mới chỉ c&oacute; 1 đứa con g&aacute;i.</p>\r\n\r\n<p>Sau đ&acirc;y, mời c&aacute;c bạn thưởng thức loạt ảnh t&igrave;nh bể b&igrave;nh giữa đ&ocirc;i trai t&agrave;i g&aacute;i sắc Sasuke v&agrave; Hinata để c&ugrave;ng nhau nu&ocirc;i dưỡng ước mơ của ch&uacute;ng ta nh&eacute;!</p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 6.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-4-1549681155459750444861.jpg\" /></p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 7.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-5-15496811554622119103767.jpg\" /></p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 8.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-6-15496811554671554703634.jpg\" /></p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 9.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-7-15496811554692008529716.jpg\" /></p>\r\n\r\n<p><img alt=\"Naruto: Nếu 2 gia tộc sở hữu đồng thuật mạnh nhất là Sharingan và Byakugan kết hợp với nhau thì sẽ thế nào? - Ảnh 10.\" src=\"https://sohanews.sohacdn.com/2019/2/9/photo-8-15496811554711184350288.jpg\" /></p>\r\n', 'eqw1636092811.jpg', 1),
(5, 'Top 5 sự thật vô cùng thú vị có thể bạn chưa biết về Clan Uchiha', '<p>&nbsp;</p>\r\n\r\n<p><strong>Uchiha l&agrave; một trong những gia tộc mạnh mẽ v&agrave; c&oacute; sức ảnh hưởng nhất l&agrave;ng L&aacute; (trước thời Itachi), sau đ&acirc;y h&atilde;y c&ugrave;ng t&igrave;m hiểu về một v&agrave;i b̼&iacute;̼ ̼m̼ậ̼t̼ c&oacute; thể bạn chưa biết về gia tộc n&agrave;y.</strong></p>\r\n\r\n<p><a href=\"http://kenhkhampha.info/top-5-su-that-vo-cung-thu-vi-co-the-ban-chua-biet-ve-gia-toc-uchiha.html\">Top 5 sự thật v&ocirc; c&ugrave;ng th&uacute; vị c&oacute; thể bạn chưa biết về gia tộc Uchiha</a></p>\r\n\r\n<p><a href=\"http://kenhkhampha.info/sasuke-khong-con-kha-nang-nao-sau-khi-%e1%b4%8da%d1%82-rinnegan.html\">Sasuke kh&ocirc;ng c&ograve;n khả năng n&agrave;o sau khi ᴍấт Rinnegan?</a></p>\r\n\r\n<p><a href=\"http://kenhkhampha.info/su-kien-se-xay-ra-neu-naruto-%c9%a1%c9%aae%d1%82-sasuke-trong-tran-%e1%b4%84%d2%bb%c9%aae%d0%bf-cuoi-cung.html\">Sự kiện sẽ xảy ra nếu Naruto ɡɪếт Sasuke trong trận ᴄһɪếп cuối c&ugrave;ng</a></p>\r\n\r\n<p><img alt=\"Top 5 sự thật thú vị có thể bạn chưa biết về gia tộc Uchiha\" src=\"https://ecdn.game4v.com/g4v-content/uploads/2021/10/19144911/Uchiha-1-game4v-1634629751-46.jpg\" /></p>\r\n\r\n<p>Top 5 sự thật th&uacute; vị c&oacute; thể bạn chưa biết về gia tộc Uchiha</p>\r\n\r\n<p>Nhắc đến Uchiha l&agrave; người ta nghĩ đến ngay một gia tộc mạnh mẽ v&agrave; sở hữu số lượng thi&ecirc;n t&agrave;i v&ocirc; c&ugrave;ng đ&ocirc;ng đảo (cũng như l&agrave; gia tộc sở hữu to&agrave;n nh&acirc;n vật được c&aacute;c fan y&ecirc;u th&iacute;ch), một v&agrave;i c&aacute;i t&ecirc;n nổi bật ch&uacute;ng ta c&oacute; thể kể đến như Uchiha Sasuke (trong phần Naruto), Uchiha Itachi, Uchiha Madara, Uchiha Obito, Uchiha Shisui,&hellip;</p>\r\n\r\n<p>Sau đ&acirc;y h&atilde;y c&ugrave;ng t&igrave;m hiểu về một v&agrave;i b̼&iacute;̼ ̼m̼ậ̼t̼ &nbsp;th&uacute; vị c&oacute; thể bạn chưa biết xoay quanh gia tộc v&ocirc; c&ugrave;ng mạnh mẽ nhưng cũng đầy b&iacute; ẩn n&agrave;y.</p>\r\n\r\n<h2><strong>C&aacute;i t&ecirc;n Uchiha c&ugrave;ng gia huy của tộc</strong></h2>\r\n\r\n<p><img alt=\"Top 4 sự thật thú vị có thể bạn chưa biết về gia tộc Uchiha\" src=\"https://ecdn.game4v.com/g4v-content/uploads/2021/10/19145118/Uchiha-2-game4v-1634629878-58.jpg\" /></p>\r\n\r\n<p>Gia huy của gia tộc Uchiha được t&aacute;c giả Kishimoto Masashi lấy cảm hứng từ chiếc quạt</p>\r\n\r\n<p>Trong t&aacute;c phẩm của Kishimoto Masashi th&igrave; &ocirc;ng đ&atilde; tạo cho Uchiha một gia huy (biểu tượng của gia tộc) đặc biệt tr&ocirc;ng giống một chiếc quạt với phần tr&ecirc;n m&agrave;u đỏ c&ograve;n phần c&aacute;n quạt mang m&agrave;u trắng. Theo t&aacute;c giả giải th&iacute;ch th&igrave; &ldquo;Uchiha&rdquo; l&agrave; một c&aacute;ch ph&aacute;t &acirc;m kh&aacute;c của &ldquo;uchiwa&rdquo; (団 扇, quạt giấy), cũng ch&iacute;nh h&igrave;nh ảnh n&agrave;y được t&aacute;c giả mang l&agrave;m biểu tượng của cả tộc.</p>\r\n\r\n<p>Uchiwa c&oacute; thể được sử dụng để quạt lửa, l&agrave;m cho ngọn lửa n&oacute;ng hơn, điều n&agrave;y cũng hợp l&yacute; khi Uchiha l&agrave; một tộc sở hữu t&agrave;i năng thi&ecirc;n bẩm với Hỏa Độn.</p>\r\n\r\n<p>V̼ũ̼ ̼k̼h̼&iacute;̼ m&agrave; Madara sở hữu cũng l&agrave; một chiếc quạt khổng lồ v&agrave; n&oacute; cũng được xem như l&aacute; cờ để chỉ huy to&agrave;n bộ gia tộc.</p>\r\n\r\n<h2><strong>Trang phục</strong></h2>\r\n\r\n<p><img alt=\"\" src=\"https://ecdn.game4v.com/g4v-content/uploads/2021/10/19145623/Uchiha-3-game4v-1634630181-70.png\" /></p>\r\n\r\n<p>V&igrave; th&oacute;i n̼g̼ạ̼o̼ ̼m̼ạ̼n̼ n&ecirc;n trong c̼h̼i̼ế̼n̼ ̼t̼r̼a̼n̼h̼, c&aacute;c th&agrave;nh vi&ecirc;n của gia tộc Uchiha kh&ocirc;ng hề trang bị b&ecirc;n bất k&igrave; d̼ụ̼n̼g̼ ̼c̼ụ̼ ̼b̼ả̼o̼ ̼h̼ộ̼ ̼c̼ơ̼ ̼t̼h̼ể̼ n&agrave;o</p>\r\n\r\n<p>Trang phục của tộc nh&acirc;n Uchiha trong qu&aacute; khứ thường được đ̼&aacute;̼n̼h̼ ̼g̼i̼&aacute;̼ l&agrave; k&eacute;m kh&ocirc;n ngoan, c&aacute;c th&agrave;nh vi&ecirc;n trong gia tộc lu&ocirc;n ưa chuộng những bộ trang phục c&oacute; cổ cao v&agrave; gi&uacute;p nổi bật l&ecirc;n biểu tượng của gia tộc được đ&iacute;nh tr&ecirc;n lưng một c&aacute;ch tự h&agrave;o. Trong thời C̼h̼i̼ế̼n̼ quốc, Uchiha từ chối mang bất kỳ bộ gi&aacute;p n&agrave;o tr&ecirc;n lưng để tự h&agrave;o thể hiện biểu tượng của gia tộc m&igrave;nh, đ&oacute; cũng l&agrave; phần l&yacute; do dẫn đến sự yếu thế của Uchiha trước Senju. Qua nhiều thế hệ, trang phục của họ đ&atilde; thay đổi với trang phục ban đầu bao gồm &aacute;o cho&agrave;ng m&agrave;u tối c&ugrave;ng với quần, sau đ&oacute; trở th&agrave;nh &aacute;o sơ mi v&agrave; quần đơn giản, nhưng đặc điểm cổ &aacute;o cao th&igrave; vẫn được giữ lại.</p>\r\n\r\n<h2><strong>Nhẫn Thuật</strong></h2>\r\n\r\n<p>Nhiều nhẫn thuật của gia tộc Uchiha như Tsukuyomi, Amaterasu,&hellip; được t&aacute;c giả Kishimoto Masashi đặt t&ecirc;n theo c&aacute;c vị thần Shinto trong thần thoại s&aacute;ng tạo của Nhật Bản.</p>\r\n\r\n<h2><strong>Gia tộc bị Q̼u̼ỷ̼ ̼&aacute;̼m̼</strong></h2>\r\n\r\n<p><img alt=\"\" src=\"https://ecdn.game4v.com/g4v-content/uploads/2021/10/19150119/Uchiha-4-game4v-1634630479-40.jpg\" /></p>\r\n\r\n<p>Đệ Nhị lu&ocirc;n xem Uchiha l&agrave; tộc bị Q̼u̼ỷ̼ ̼&aacute;̼m̼</p>\r\n\r\n<p>Theo lời của Hokage Đệ Nhị Tobirama th&igrave; khi một Uchiha cảm thấy v&ocirc; c&ugrave;ng đ̼a̼u̼ ̼đ̼ớ̼n̼,̼ ̼t̼u̼y̼ệ̼t̼ ̼v̼ọ̼n̼g̼,̼ ̼x̼&uacute;̼c̼ ̼đ̼ộ̼n̼g̼,&hellip;. n&oacute;i chung l&agrave; khi cảm x&uacute;c được đẩy l&ecirc;n mức cao tr&agrave;o (thường l&agrave; cảm x&uacute;c t̼i̼&ecirc;̼u̼ ̼c̼ự̼c̼) th&igrave; sẽ l&agrave;m cho một d&ograve;ng chakra đặc biệt c̼h̼ả̼y̼ ̼q̼u̼a̼ ̼n̼&atilde;̼o̼ ̼g̼&acirc;̼y̼ ̼p̼h̼ả̼n̼ ̼ứ̼n̼g̼ ̼t̼h̼ầ̼n̼ ̼k̼i̼n̼h̼ ̼v̼&agrave;̼ ̼s̼ự̼ ̼b̼i̼ế̼n̼ ̼đ̼ổ̼i̼ ̼m̼ắ̼t̼ ̼r̼ồ̼i̼ ̼g̼i̼&uacute;̼p̼ ̼h̼ọ̼ ̼s̼ở̼ ̼h̼ữ̼u̼ Mangekyou Sharingan. Nhưng cũng ch&iacute;nh con mắt n&agrave;y l&agrave; n̼g̼u̼ồ̼n̼ ̼c̼ơ̼n̼ ̼c̼h̼o̼ ̼v̼&ocirc;̼ ̼s̼ố̼ ̼b̼i̼ ̼k̼ị̼c̼h̼ xảy đến với tộc Uchiha sau n&agrave;y.</p>\r\n\r\n<p>Vậy lu&ocirc;n Cụ Nhị l&uacute;c n&agrave;o cũng cảnh gi&aacute;c với Uchiha v&agrave; quyết định c&ocirc; lập gia tộc họ ra khỏi l&agrave;ng, điều n&agrave;y đ&atilde; gi&aacute;n tiếp dẫn đến sự kiện Uchiha chuẩn bị l&agrave;̼m̼ ̼p̼h̼ả̼n̼ v&agrave; Itachi phải đ̼ồ̼ ̼s̼&aacute;̼t̼ ̼c̼ả̼ ̼g̼i̼a̼ ̼t̼ộ̼c̼ ̼đ̼ể̼ ̼n̼g̼ă̼n̼ ̼c̼ả̼n̼ c̼h̼i̼ế̼n̼ ̼t̼r̼a̼n̼h̼ n̼ổ̼ ̼r̼a̼.</p>\r\n\r\n<h2><strong>Những t&agrave;i sản m&agrave; Uchiha sở hữu&nbsp;</strong></h2>\r\n\r\n<p>Thường ch&uacute;ng ta rất &iacute;t khi được đề cập đến những t&agrave;i sản hay cửa h&agrave;ng m&agrave; gia tộc Uchiha sở hữu, thứ được nhắc đến nhiều nhất c&oacute; lẽ ch&iacute;nh l&agrave; c̼ă̼n̼ ̼h̼ầ̼m̼ ̼b̼&iacute;̼ ̼m̼ậ̼t̼ của gia tộc nơi bọn họ b&agrave;n bạc v&agrave; đưa ra những quyết định quan trọng, nhưng thật ra vẫn c&ograve;n một v&agrave;i tải sản kh&aacute;c thuộc quyền quản l&yacute; của họ như:</p>\r\n\r\n<ul>\r\n	<li><em>Một cửa h&agrave;ng senbei nổi tiếng khắp l&agrave;ng.</em></li>\r\n	<li><em>Một ng&ocirc;i đền b̼&iacute;̼ ̼m̼ậ̼t̼ &nbsp;của gia tộc.</em></li>\r\n	<li><em>Một cơ sở tiếp tế ở Sora-ku.</em></li>\r\n	<li><em>Nơi ẩ̼n̼ ̼n̼&aacute;̼u̼ m&agrave; Sasuke v&agrave; Itachi đ&atilde; giao c̼h̼i̼ế̼n̼ lần cuối c&ugrave;ng cũng thuộc q̼u̼y̼ề̼n̼ ̼s̼ở̼ ̼h̼ữ̼u̼ của tộc Uchiha.</em></li>\r\n</ul>\r\n', '1111636092294.jpg', 1),
(6, '10 nhân vật đã từng ƌấu tay đôi với Jinchuuriki, Vĩ thú và giành được ᴄһɪếп thắng', '<h1>&nbsp;</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đối với những fan của bộ truyện t̼r̼a̼n̼h̼ v&agrave; phim hoạt h&igrave;nh Naruto, Vĩ Th&uacute; v&agrave; Jinchuuriki đ&atilde; trở th&agrave;nh những kh&aacute;i niệm quen thuộc v&agrave; nhắc đến ch&uacute;ng l&agrave; nghĩ đến những sức mạnh k̼i̼n̼h̼ ̼k̼h̼ủ̼n̼g̼. Vậy m&agrave; đ&atilde; c&oacute; kh&ocirc;ng &iacute;t nh&acirc;n vật đ̼ụ̼n̼g̼ ̼đ̼ộ̼ với một Jinchuuriki hay Vĩ th&uacute; m&agrave; đ&atilde; gi&agrave;nh c̼h̼i̼ế̼n̼ thắng rồi đấy. C&ugrave;ng xem họ l&agrave; những ai nh&eacute;!</p>\r\n\r\n<p><em><a href=\"https://ve-que.com/4-tam-guong-thay-tro-xuc-dong-nhat-trong-naruto/\">4 Tấm Gương Thầy Tr&ograve; X&uacute;c Động Nhất Trong Naruto</a></em></p>\r\n\r\n<p><em><a href=\"https://ve-que.com/boruto-d%cc%bca%cc%bcn%cc%bch%cc%bc-gia-suc-manh-2-to-chuc-k%cc%bch%cc%bce%cc%bct%cc%bc-tieng-akatsuki-vs-kara-ai-se-chien-thang/\">Boruto: Đ̼&aacute;̼n̼h̼ gi&aacute; sức mạnh 2 tổ chức k̼h̼&eacute;̼t̼ tiếng Akatsuki vs Kara, ai sẽ chiến thắng?</a></em></p>\r\n\r\n<p><strong>10. Raikage đệ tam</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 1.\" src=\"https://genk.mediacdn.vn/thumb_w/640/2018/7/21/dmvgn6lueaans1ibysennin15-dc10f37-1532145701033585880913.png\" /></p>\r\n\r\n<p>Raikage đệ tam được coi l&agrave; vị kage mạnh nhất trong lịch sử l&agrave;ng M&acirc;y. &Ocirc;ng được đ̼&aacute;̼n̼h̼ gi&aacute; l&agrave; c&oacute; nguồn chakra mạnh mẽ như một con vĩ th&uacute; v&agrave; đ&atilde; từng đối đầu với vĩ th&uacute; t&aacute;m đu&ocirc;i, Gyuki. Thậm ch&iacute; Gyuki c&ograve;n ca ngợi kỹ năng của Raikage đệ tam cũng như phong c&aacute;ch c̼h̼i̼ế̼n̼ ̼đ̼ấ̼u̼ của &ocirc;ng. Raikage đệ tam l&agrave; một trong số &iacute;t người g̼i̼a̼o̼ ̼đ̼ấ̼u̼ ̼t̼r̼ự̼c̼ ̼d̼i̼ệ̼n̼ ̼v̼ớ̼i̼ ̼m̼ộ̼t̼ ̼v̼ĩ̼ ̼t̼h̼&uacute;̼ ̼m̼&agrave;̼ ̼c̼o̼n̼ ̼s̼ố̼n̼g̼ ̼s̼&oacute;̼t̼.̼</p>\r\n\r\n<p><strong>9. Kisame Hoshigaki</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 2.\" src=\"https://genk.mediacdn.vn/thumb_w/640/2018/7/21/hoshigakikisame-15321457279982080998263.png\" /></p>\r\n\r\n<p>Kisame Hoshigaki l&agrave; một th&agrave;nh vi&ecirc;n của Akatsuki v&agrave; một shinobi đ̼&agrave;̼o̼ ̼t̼ẩ̼u̼ từ l&agrave;ng Sương M&ugrave;. Kisame được mệnh danh l&agrave; &ldquo;Tailless Tailed Beast&rdquo; (Vĩ th&uacute; kh&ocirc;ng đu&ocirc;i) do c&oacute; lượng chakra khổng lồ nhờ thanh kiếm của Samehada hấp thụ từ người kh&aacute;c truyền cho.</p>\r\n\r\n<p>Kisame Hoshigaki từng đối đầu với Jinchuuriki của B&aacute;t vĩ l&agrave; Killer Bee v&agrave; đ&atilde; to&agrave;n mạng trong c̼u̼ộ̼c̼ ̼c̼h̼i̼ế̼n̼ tuyệt vời đ&oacute;.</p>\r\n\r\n<p><strong>8. Killer Bee</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 3.\" src=\"https://genk.mediacdn.vn/thumb_w/640/2018/7/21/killerbeebycathysensei-d42m5zf-1532145755689240351692.jpg\" /></p>\r\n\r\n<p>Killer Bee l&agrave; Jinchuuriki của b&aacute;t vĩ Gyuki. &Ocirc;ng được xem l&agrave; v̼ũ̼ ̼k̼h̼&iacute;̼ mạnh nhất của l&agrave;ng M&acirc;y do sở hữu sức mạnh to lớn cả về thể chất lẫn sức mạnh c̼h̼i̼ế̼n̼ ̼đ̼ấ̼u̼. Ngo&agrave;i ra, Killer Bee c&ograve;n được xem l&agrave; kiếm sĩ mạnh nhất trong Naruto bởi khả năng kiếm thuật lu&ocirc;n &aacute;p đảo mọi đối thủ. Đặc biệt, &ocirc;ng c&oacute; thể sử dụng bảy thanh kiếm c&ugrave;ng l&uacute;c m&agrave; vẫn v&ocirc; c&ugrave;ng linh hoạt khiến k̼ẻ̼ ̼t̼h̼&ugrave;̼ ̼k̼h̼&ocirc;̼n̼g̼ ̼k̼ị̼p̼ ̼t̼r̼ở̼ ̼t̼a̼y̼.̼</p>\r\n\r\n<p>C&ugrave;ng với B&aacute;t vĩ, Bee đ&atilde; c̼h̼i̼ế̼n̼ ̼đ̼ấ̼u̼ với v&agrave;i vĩ th&uacute; trong cuộc Đ̼ạ̼i̼ ̼c̼h̼i̼ế̼n̼ ninja lần thứ 4.</p>\r\n\r\n<p><strong>7. Hashirama Senju</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 4.\" src=\"https://genk.mediacdn.vn/thumb_w/640/2018/7/21/hashiramassagemode-153214580090280615710.png\" /></p>\r\n\r\n<p>Hashirama Senju l&agrave; người đồng s&aacute;ng lập v&agrave; Hokage đầu ti&ecirc;n của l&agrave;ng L&aacute;. &Ocirc;ng sở hữu h̼u̼y̼ế̼t̼ kế giới hạn mộc độn m&agrave; kh&ocirc;ng ai c&oacute;, nhờ khả năng n&agrave;y m&agrave; &ocirc;ng c&oacute; thể khống chế bất cứ vĩ th&uacute; n&agrave;o. Khi &ocirc;ng c̼h̼i̼ế̼n̼ ̼đ̼ấ̼u̼ với cửu vĩ Kurama, &ocirc;ng đ&atilde; gi&agrave;nh chiến thắng m&agrave; kh&ocirc;ng gặp qu&aacute; nhiều kh&oacute; khăn.</p>\r\n\r\n<p><strong>6. Madara Uchiha</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 5.\" src=\"https://genk.mediacdn.vn/thumb_w/640/2018/7/21/695428-15321458735431750066548.jpg\" /></p>\r\n\r\n<p>Madara Uchiha l&agrave; người l&atilde;nh đạo huyền thoại của gia tộc Uchiha v&agrave; l&agrave; người đồng s&aacute;ng lập của l&agrave;ng L&aacute;. &Ocirc;ng l&agrave; nh&acirc;n vật p̼h̼ả̼n̼ ̼d̼i̼ệ̼n̼ ch&iacute;nh của cuộc Đ̼ạ̼i̼ ̼c̼h̼i̼ế̼n̼ ninja lần thứ tư. Một m&igrave;nh &ocirc;ng đ&atilde; c̼h̼ố̼n̼g̼ ̼l̼ạ̼i̼ tất cả ch&iacute;n con vĩ th&uacute; v&agrave; th&agrave;nh c&ocirc;ng trong việc đ̼&aacute;̼n̼h̼ ̼b̼ạ̼i̼ ch&uacute;ng d&ugrave; l&uacute;c đ&oacute; chưa c&oacute; Rinnegan của ch&iacute;nh m&igrave;nh.</p>\r\n\r\n<p><strong>5. Hidan</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 6.\" src=\"https://genk.mediacdn.vn/thumb_w/640/2018/7/21/hidan2-15321458946971966329569.png\" /></p>\r\n\r\n<p>Hidan l&agrave; một nh&acirc;n vật b̼ấ̼t̼ ̼t̼ử̼ trong series Naruto. L&agrave; th&agrave;nh vi&ecirc;n của Akatsuki, hắn được giao nhiệm vụ đi bắt Jinchuuriki của Nhị vĩ Matatabi c&ugrave;ng với cộng sự của m&igrave;nh. Hắn đ&atilde; đ̼&aacute;̼n̼h̼ ̼b̼ạ̼i̼ Yugito v&agrave; mang về cho tổ chức.</p>\r\n\r\n<p><strong>4. Deidara</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 7.\" src=\"https://genk.mediacdn.vn/2018/7/21/deidarafull1113294-1532145921858360801700.jpg\" /></p>\r\n\r\n<p>Deidara l&agrave; một nh&acirc;n vật mạnh mẽ kh&aacute;c cũng thuộc tổ chức Akatsuki được giao nhiệm vụ đi bắt Jinchuuriki của Nhất Vĩ c&ugrave;ng với Sasori. Sau một hồi gi̼a̼o̼ ̼đ̼ấ̼u̼ ̼k̼h̼ố̼c̼ ̼l̼i̼ệ̼t̼ với Gara, hắn đ&atilde; bắt được cậu v&agrave; mang về cho tổ chức.</p>\r\n\r\n<p>G̼a̼a̼r̼a̼ ̼đ̼&atilde;̼ ̼b̼ị̼ ̼A̼k̼a̼t̼s̼u̼k̼i̼ ̼g̼i̼ế̼t̼ ̼t̼r̼ư̼ớ̼c̼ ̼k̼h̼i̼ ̼N̼a̼r̼u̼t̼o̼ ̼đ̼ế̼n̼ ̼k̼ị̼p̼ ̼n̼h̼ư̼n̼g̼ ̼b̼&agrave;̼ ̼C̼h̼i̼y̼o̼ ̼đ̼&atilde;̼ ̼d̼&ugrave;̼n̼g̼ ̼n̼h̼ẫ̼n̼ ̼t̼h̼u̼ậ̼t̼ ̼c̼h̼u̼y̼ể̼n̼ ̼s̼i̼n̼h̼ ̼đ̼ể̼ ̼đ̼ổ̼i̼ ̼m̼ạ̼n̼g̼ ̼m̼&igrave;̼n̼h̼ ̼c̼ứ̼u̼ ̼s̼ố̼n̼g̼ ̼c̼ậ̼u̼,̼ ̼n̼h̼ư̼n̼g̼ ̼S̼h̼u̼k̼a̼k̼u̼ ̼c̼ũ̼n̼g̼ ̼k̼h̼&ocirc;̼n̼g̼ ̼c̼&ograve;̼n̼ ̼t̼r̼o̼n̼g̼ ̼n̼g̼ư̼ờ̼i̼ ̼G̼a̼a̼r̼a̼ ̼n̼ữ̼a̼.̼</p>\r\n\r\n<p><strong>3. Nagato Uzumaki</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 8.\" src=\"https://genk.mediacdn.vn/thumb_w/640/2018/7/21/nanabynanahaon-d8by05z-15321459770741308602696.jpg\" /></p>\r\n\r\n<p>Lục Đạo của Pain c&oacute; thể đối đầu với vĩ th&uacute; được gọi l&agrave; Saiken. Nagato đ&atilde; đ̼&aacute;̼n̼h̼ ̼b̼ạ̼i̼ Jinchuuriki của Lục Vĩ l&agrave; Utakata của l&agrave;ng Sương M&ugrave;. Đen đủi cho Utakata v&igrave; đối thủ của cậu l&agrave; Pain n&ecirc;n ngay từ đầu đ&atilde; kh&ocirc;ng c&oacute; cửa thắng.</p>\r\n\r\n<p><strong>2. Sasuke Uchiha</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 9.\" src=\"https://genk.mediacdn.vn/thumb_w/640/2018/7/21/v6224-15321460045031714448283.jpg\" /></p>\r\n\r\n<p>Sasuke Uchiha từng gia nhập Akatsuki trong một thời gian ngắn n&ecirc;n đ&atilde; được giao nhiệm vụ đi bắt Jinchuuriki của B&aacute;t vĩ Gyuki. Sasuke đ&atilde; đ̼ố̼i̼ ̼đ̼ầ̼u̼ ̼v̼ớ̼i̼ ̼K̼i̼l̼l̼e̼r̼ ̼B̼e̼e̼ ̼v̼&agrave;̼ ̼c̼&oacute;̼ ̼p̼h̼ầ̼n̼ ̼l̼&eacute;̼p̼ ̼v̼ế̼ ̼n̼h̼ư̼n̼g̼ ̼c̼u̼ố̼i̼ ̼c̼&ugrave;̼n̼g̼ ̼c̼ậ̼u̼ ̼đ̼&atilde;̼ ̼d̼&ugrave;̼n̼g̼ ̼A̼m̼a̼t̼e̼r̼a̼s̼u̼ ̼t̼h̼i̼&ecirc;̼u̼ ̼đ̼ố̼t̼ ̼B̼e̼e̼ ̼v̼&agrave;̼ ̼g̼i̼&agrave;̼n̼h̼ ̼c̼h̼i̼ế̼n̼ ̼t̼h̼ắ̼n̼g̼.̼ ̼T̼h̼ự̼c̼ ̼t̼ế̼ ̼l̼&uacute;̼c̼ ̼đ̼&oacute;̼ ̼S̼a̼s̼u̼k̼e̼ ̼c̼h̼ỉ̼ ̼l̼ấ̼y̼ ̼đ̼ư̼ợ̼c̼ ̼m̼ộ̼t̼ ̼m̼ẩ̼u̼ ̼v̼&ograve;̼i̼ ̼b̼ạ̼c̼h̼ ̼t̼u̼ộ̼c̼ ̼c̼ủ̼a̼ ̼B̼&aacute;̼t̼ ̼v̼ĩ̼ ̼m̼a̼n̼g̼ ̼v̼ề̼ ̼c̼h̼o̼ ̼T̼o̼b̼i̼ ̼m̼&agrave;̼ ̼t̼h̼&ocirc;̼i̼.</p>\r\n\r\n<p><strong>1. Uzumaki Naruto</strong></p>\r\n\r\n<p><img alt=\"Naruto: 10 nhân vật đã từng đánh nhau với Jinchuuriki, Vĩ thú và giành được chiến thắng - Ảnh 10.\" src=\"https://genk.mediacdn.vn/2018/7/21/naruto-kurama-1532146036182239574089.jpg\" /></p>\r\n\r\n<p>Naruto l&agrave; Hokage đệ thất của Konoha v&agrave; l&agrave; Jinchuuriki của của cửu vĩ Kurama. Trong cuộc Đ̼ạ̼i̼ ̼c̼h̼i̼ế̼n̼ ninja lần thứ tư, cậu đ&atilde; phải c̼h̼i̼ế̼n̼ ̼đ̼ấ̼u̼ c̼h̼ố̼n̼g̼ ̼l̼ạ̼i̼ nhiều vĩ th&uacute; một l&uacute;c do Obito đ̼i̼ề̼u̼ ̼k̼h̼i̼ể̼n̼ ̼n̼h̼ư̼n̼g̼ ̼đ̼&atilde;̼ ̼c̼h̼ế̼ ̼n̼g̼ự̼ được ch&uacute;ng. Naruto cũng l&agrave; Jinchuuriki duy nhất c&oacute; được sức mạnh của tất cả c&aacute;c vĩ th&uacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'ffffffffffffv-678x3811636092419.jpg', 1),
(7, 'How did the sea lizard Mosasaurus dominate the prehistoric ocean?', '<p>How did the sea lizard Mosasaurus dominate the prehistoric ocean?</p>\r\n\r\n<p>Mosasaurus (also known as the Meuse River lizard), has a long evolutionary story. That story begins about 96 million years ago. At that time, the ancestors of the Mosasaurs were just a small reptile that had to live under the heels of giant dinosaurs, with nowhere to live, forced to look down the river to see the sea. This seemed to be the end of the Mosasaurs, but in fact, the ancestors of the Mosasaurs did something smarter than ever<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/5-Platecarpus-1140x570-1-300x150.jpg\" style=\"height:314px; width:628px\" /><br />\r\nWithin 3 million years, it evolved into Dallasaurus, which is still small, but its feet are webbed so they don&rsquo;t have to return to land. 6 million years after Dalla, which is about 86 million years ago, everything changed. Dalla has evolved and become the most brutal carnivore in the ocean &ndash; Tylosaurus. But in the early days, even Tylosaurus was small, only about 10m-12m long, so it was not big enough to dominate the ocean. It is locked in a fierce battle with the Cretoxyrhina giant shark and other marine reptiles<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/Dallasaurus_CGI-2048x1581-1-300x232.jpg\" style=\"height:490px; width:633px\" /><br />\r\nTylosaurus existed between 76-86 million years ago in North America. The body is elongated like a sea snake, and can swim up to 50km/h. Advantage for lightning attack or hiding from large enemies. The skull is up to 1.8m long with 70 sturdy conical teeth to catch prey. The flexible and loose skull has two jaw joints that allow them to open the jaw wider. To devour large prey like modern snakes<br />\r\nIn addition, Tylosaurus also has an extra set of teeth located in its upper jaw. And these teeth are completely independent of other parts to help them hold and pull prey down the throat. The skull of Tylosaurus also has a hard bony crest protruding right in front of the nose. This bony crest is hard and can be used to butcher prey or in special battles. Tylosaurus also has a special part of the ear that allows them to hear sounds in the water 38 times louder than normal<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/Tylosaurus_BW-300x131.jpg\" style=\"height:270px; width:618px\" /><br />\r\nAnd after a few million years, the Cretaceous, about 65.5-75 million years ago. The Tylosaur family had 1 member with the most terrifying hunting skills in the sea at that time &ndash; Mosasaurus, spear dragon, Meuse lizard. Mosasaurus is 15 meters long and weighs about 20 tons. Lives extensively in North America and Western Europe</p>\r\n\r\n<p>Mosa in general has the same structure as Tylo but still has some differences. Mosa has a more muscular build than a Tylo of the same size. Therefore it may not be as agile. But it will be much stronger. The skull is also quite similar, but there are still some differences. Mosa&rsquo;s skull does not have a hard bony crest in front of his nose like Tylo&rsquo;s. It is also more solidly constructed than the Tylo. Mosa&rsquo;s lower jaw is closely connected to the skull, and the skull is also wider<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/mosasaurus3_8967-300x169.jpg\" style=\"height:357px; width:633px\" /><br />\r\nTherefore, Mosa has a much stronger bite force than Tylo, but because the skull is less flexible. So it cannot swallow its prey whole, but has to tear them to pieces. Mosasaurus&rsquo; teeth were so tightly attached to the jaws that there must have been a great deal of force applied. In order for the necessary tooth to be firmly attached, add a wider skull. And the structure is more solid than other mosasaur species (like Tylo or Haino). Meaning Mosasaurus must have bite force at least equal to Trex or stronger<br />\r\nMosasaur is born as a machine that fights against opponents of great caliber with weapons, speed, agility and strength. Mosasaurus at this time is a horror for any animal that can swim or has unfortunately fallen into the water. It has stood at the top and blocked countless food chains. And become one of the most powerful men in the ocean<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/1-Khung-long-300x169.jpg\" style=\"height:334px; width:593px\" /><br />\r\nAn asteroid hit the Earth at 45000 mph 66 million years ago at a location 39 km from the Yucatan Peninsula, Mexico. Creates a crater 179 km wide and 48 km deep, causing strong tremors. Release a huge amount of dust gas, cover the atmosphere, change the Earth&rsquo;s climate. Combine a series of other consecutive disasters such as sea level rise, volcanoes, etc. Ended the time when dinosaurs dominated the land as well as the peak evolution of the mosasaur in the ocean. The days of terror at sea were over for the Mosasaur<br />\r\nSad for mosasaurs but happy for humans and mammals. Because if the mosasaur hadn&rsquo;t gone extinct, humans would never have appeared. And we&rsquo;re not here to look back to past history to remember the most perfect predator; the most successful of the deep blue sea!</p>\r\n', '11121636093267.jpg', 5),
(8, 'Laugh with funny wild animal photos', '<h1>Laugh with funny wild animal photos</h1>\r\n\r\n<p>The final round of the Funny Wildlife Photography Awards 2020 brings together many golden faces in the animal laughter village<br />\r\nHumor is an indispensable element in each of our lives. The animal world is the same, they also have very cute and funny gestures</p>\r\n\r\n<p>The 2020 Funny Wildlife Photo Awards have revealed the best photos. This year&rsquo;s awards attracted hundreds of hilarious wildlife photos sent in from around the world<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/67aa16be478f89d725a704705287baba-300x300.jpg\" style=\"height:561px; width:561px\" /><br />\r\nComedy Wildlife Photography Awards &ndash; The humorous wildlife photography awards have attracted the attention of many people over the years. In 2020, the contest takes place in the context of the world facing many difficulties, so the photos that make you laugh immediately attract more attention than ever<br />\r\nFounders and photographers from Tanzania, Paul Joynson-Hicks and Tom Sullam each shared that the main goal of the contest was not only to show how much difference there is in the animal world, but to attract attention. Paying attention to the preservation of the natural environment, in order to raise the public&rsquo;s awareness of the wildlife world, with the aim of conserving and saving the lives of species in the wild that are threatened in terms of species, quantity, as well as the environment<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/bat-cuoi-voi-anh-dong-vat-hoang-da-vui-nhon-300x225.jpg\" style=\"height:418px; width:557px\" /><br />\r\nThe founders collaborated with the Born Free Foundation, the wildlife conservation organization that has maintained the competition over the years<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/bat-cuoi-voi-anh-dong-vat-hoang-da-vui-nhon-7-300x225.jpg\" style=\"height:432px; width:575px\" /><br />\r\nThe picture is titled &lsquo;Mom, look what I have for you!&rsquo; by Kunal Gupta<br />\r\n<img alt=\"\" src=\"https://ve-que.com/wp-content/uploads/2021/11/bat-cuoi-voi-anh-dong-vat-hoang-da-vui-nhon-11-300x225.jpg\" style=\"height:447px; width:596px\" /><br />\r\nPhoto titled &lsquo;Difficult Negotiation&rsquo; by Ayala Fishaimer</p>\r\n', 'bat-cuoi-voi-anh-dong-vat-hoang-da-vui-nhon-14-326x2451636093447.jpg', 5),
(9, 'Clydesdale & Labrador Puppy Reunite In New Heartfelt Budweiser Commercial', '<p>It&rsquo;s been a difficult past few months for bars and restaurants across the country. Now that many are starting to reopen, Budweiser is celebrating the return of grabbing a drink with a buddy by reuniting some adorable furry friends.</p>\r\n\r\n<p>In the beer brand&rsquo;s new &ldquo;Reuniting with Buds&rdquo; commercial, Budweiser&rsquo;s famous Clydesdale horses and an adorable Labrador retriever puppy each travel from afar to meet up &mdash; presumably after spending the last several weeks social distancing responsibly.</p>\r\n\r\n<p><img alt=\"This furry friend is horsing around in Budweiser\'s new ad celebrating the return of bars. \" src=\"https://media3.s-nbcnews.com/j/newscms/2020_26/1584030/budweiser-te-main-200624_14da3132e3944fc14aee17f998e149e9.fit-760w.jpg\" /></p>\r\n\r\n<p>The spot begins with a Budweiser sign flickering back to life, followed by a beautiful Clydesdale horse leaping over a fence, then breaking into a run as the puppy peeks his head out from a bale of hay.</p>\r\n\r\n<p><img src=\"https://ilovemydogsomuch.tv/wp-content/uploads/2020/06/clydesdale-and-puppy-ad.jpg\" /></p>\r\n\r\n<p>The animals run towards each other as a bartender is seen drying a glass, signifying the return to a &ldquo;new normal&rdquo; that Americans have been anticipating throughout the coronavirus pandemic.</p>\r\n\r\n<p><strong>Finally, the horse and puppy friends are reunited</strong></p>\r\n\r\n<p><img src=\"https://ilovemydogsomuch.tv/wp-content/uploads/2020/06/Screen-Shot-2020-06-29-at-2.30.05-AM.png\" /></p>\r\n\r\n<p>The iconic Clydesdale and cute Labrador first met in a 2014 Super Bowl spot called &lsquo;Puppy Love&rsquo;, where the animals&rsquo; budding friendship began.</p>\r\n\r\n<p>As the entire country slowly starts to reopen and share this very same excitement of getting together.</p>\r\n', '2-1-678x3811636093581.png', 5),
(10, 'Sau khi dừng chân sớm ở CKTG 2021, RNG tiếp tục gặp \"hạn\" vì chi nhánh của đội bị phạt tiền lên tới hơn 12 tỷ', '<p>&nbsp;</p>\r\n\r\n<h2>Fan LPL tỏ ra lo lắng cho tương lai của RNG khi đội tuyển n&agrave;y c&oacute; thể sẽ đứng ngo&agrave;i thị trường chuyển nhượng hậu CKTG 2021 sắp tới.</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>C&aacute;ch đ&acirc;y &iacute;t ng&agrave;y, một th&ocirc;ng tin kh&aacute; buồn đối với những fan của khu vực LPL n&oacute;i chung v&agrave; đội tuyển&nbsp;<a href=\"https://gamek.vn/royal-never-give-up.htm\" target=\"_blank\">Royal Never Give Up</a>&nbsp;n&oacute;i ri&ecirc;ng đ&atilde; được lan truyền nhanh ch&oacute;ng tr&ecirc;n mạng x&atilde; hội. Cụ thể th&igrave; một chi nh&aacute;nh của tổ chức RNG - C&ocirc;ng ty Shanghai Jingxin Chengfeng Media đ&atilde; bị T&ograve;a &aacute;n nh&acirc;n d&acirc;n quận Phi&ecirc;n Ngung, th&agrave;nh phố Quảng Ch&acirc;u tuy&ecirc;n &aacute;n phạt 3,56 triệu NDT (hơn 12 tỷ VNĐ).</p>\r\n\r\n<p>Nguy&ecirc;n nh&acirc;n cho &aacute;n phạt n&agrave;y tới từ việc chi nh&aacute;nh kể tr&ecirc;n c&ugrave;ng C&ocirc;ng ty TNHH Truyền th&ocirc;ng Văn h&oacute;a Shangrao Tiantong đ&atilde; kh&ocirc;ng thanh to&aacute;n đầy đủ khoản ph&iacute; gia c&ocirc;ng quần &aacute;o cho nguy&ecirc;n đơn. Số tiền phạt kể tr&ecirc;n bao gồm 3,382 triệu NDT ph&iacute; gia c&ocirc;ng c&ugrave;ng với tiền l&atilde;i do thanh to&aacute;n qu&aacute; hạn.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/1636079158560494146171-16360791832421814343790.png\" target=\"_blank\"><img alt=\"Sau khi dừng chân sớm ở CKTG 2021, RNG tiếp tục gặp hạn vì chi nhánh của đội bị phạt tiền lên tới hơn 12 tỷ - Ảnh 1.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/5/1636079158560494146171-16360791832421814343790.png\" /></a></p>\r\n\r\n<p>Th&ocirc;ng tin về việc chi nh&aacute;nh của tổ chức RNG bị phạt 3,56 triệu NDT (hơn 12 tỷ VNĐ) đ&atilde; lan truyền nhanh ch&oacute;ng tr&ecirc;n mạng x&atilde; hội</p>\r\n\r\n<p>Sau khi th&ocirc;ng tin n&agrave;y được chia sẻ rộng r&atilde;i th&igrave; những người h&acirc;m mộ LPL tỏ ra kh&aacute; lo lắng cho giai đoạn chuyển nhượng hậu CKTG 2021 của Royal Never Give Up. L&yacute; do cũng kh&aacute; dễ hiểu khi tổ chức n&agrave;y gặp phải rắc rối lớn về mặt t&agrave;i ch&iacute;nh th&igrave; RNG kh&oacute; c&oacute; thể &quot;chi đậm&quot; để chi&ecirc;u mộ một ng&ocirc;i sao tầm cỡ về đội. Trong khi rất nhiều người cho rằng RNG cần phải thay người chơi Đường giữa hiện tại bởi Cryin tỏ ra tương đối yếu về khoản đi đường cũng như bể tướng kh&aacute; hẹp.</p>\r\n\r\n<p>Điều n&agrave;y được thể hiện cực kỳ r&otilde; r&agrave;ng ở&nbsp;<a href=\"https://gamek.vn/cktg-2021.htm\" target=\"_blank\">CKTG 2021</a>&nbsp;vừa rồi khi tuyển thủ n&agrave;y đ&atilde; chơi Twisted Fate trong 5/7 v&aacute;n ở V&ograve;ng Bảng (bao gồm trận tiebreak). Tại trận Tứ Kết với&nbsp;<a href=\"https://gamek.vn/edward-gaming.htm\" target=\"_blank\">EDward Gaming</a>&nbsp;th&igrave; Cryin lu&ocirc;n để thua trong c&aacute;c k&egrave;o đấu ở Đường giữa trước Scout. Nếu như Xiaohu kh&ocirc;ng chơi xuất sắc ở v&aacute;n 1 v&agrave; v&aacute;n 4 th&igrave; RNG khả năng cao l&agrave; đội tuyển n&agrave;y đ&atilde; bị hạ gục với tỷ số 0-3 ch&oacute;ng v&aacute;nh khi để Scout b&ecirc;n ph&iacute;a EDG qu&aacute; thoải m&aacute;i như vậy.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/photo-1-1636079238692248644965.jpg\" target=\"_blank\"><img alt=\"Sau khi dừng chân sớm ở CKTG 2021, RNG tiếp tục gặp hạn vì chi nhánh của đội bị phạt tiền lên tới hơn 12 tỷ - Ảnh 2.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/5/photo-1-1636079238692248644965.jpg\" /></a></p>\r\n\r\n<p>Cryin trong năm vừa qua thường bị coi l&agrave; mắt x&iacute;ch yếu nhất trong đội h&igrave;nh RNG</p>\r\n\r\n<p>Mặc d&ugrave; Cryin bị chỉ tr&iacute;ch nhiều trong thời gian qua nhưng tuyển thủ n&agrave;y dường như lại c&oacute; được sự tin tưởng của ban huấn luyện Royal Never Give Up. Thậm ch&iacute; khi trả lời tin nhắn về tuyển thủ n&agrave;y, HLV Poppy của RNG cũng n&oacute;i rằng người xem kh&ocirc;ng hiểu Cryin đ&atilde; tập luyện chăm chỉ ra sao. Vị HLV n&agrave;y cũng khẳng định đội sẽ kh&ocirc;ng thể đạt được th&agrave;nh quả trong năm nay nếu như thiếu Cryin.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/photo-1-16360792761791620123762.jpg\" target=\"_blank\"><img alt=\"Sau khi dừng chân sớm ở CKTG 2021, RNG tiếp tục gặp hạn vì chi nhánh của đội bị phạt tiền lên tới hơn 12 tỷ - Ảnh 3.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/5/photo-1-16360792761791620123762.jpg\" /></a></p>\r\n\r\n<p>HLV Poppy tỏ ra rất tin tưởng v&agrave;o Cryin d&ugrave; tuyển thủ n&agrave;y phải chịu nhiều chỉ tr&iacute;ch</p>\r\n\r\n<p>Với sự tin tưởng lớn như vậy c&ugrave;ng việc Royal Never Give Up gặp kh&oacute; khăn về t&agrave;i ch&iacute;nh th&igrave; tỷ lệ họ giữ nguy&ecirc;n đội h&igrave;nh ở m&ugrave;a 2022 sắp tới l&agrave; rất cao. Đương nhi&ecirc;n Cryin cũng phải cải thiện bản th&acirc;n, đặc biệt l&agrave; bể tướng, để gi&uacute;p RNG c&oacute; được sự đa dạng nhất định về mặt chiến thuật nhằm gặt h&aacute;i những danh hiệu lớn.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/photo-1-16360800883901128841532.jpg\" target=\"_blank\"><img alt=\"Sau khi dừng chân sớm ở CKTG 2021, RNG tiếp tục gặp hạn vì chi nhánh của đội bị phạt tiền lên tới hơn 12 tỷ - Ảnh 4.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/5/photo-1-16360800883901128841532.jpg\" /></a></p>\r\n\r\n<p>C&oacute; lẽ đội h&igrave;nh hiện tại của RNG sẽ tiếp tục gắn b&oacute; với nhau tại m&ugrave;a giải 2022 sắp tới</p>\r\n', 'photo-1-163608008839011288415321636093713.jpg', 3),
(11, 'Sốc: Vợ QTV bất ngờ thông báo đã ly hôn, ám chỉ \"thủ phạm\" không chỉ có 1 người khiến cộng đồng mạng sững sờ', '<h2>Hương Giang - vợ của QTV bất ngờ th&ocirc;ng b&aacute;o ly h&ocirc;n giữa đ&ecirc;m khiến d&acirc;n t&igrave;nh x&ocirc;n xao.</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Trong l&agrave;ng&nbsp;<a href=\"https://gamek.vn/lmht.htm\" target=\"_blank\">LMHT</a>&nbsp;Việt, c&oacute; lẽ kh&ocirc;ng ai kh&ocirc;ng biết đến Nguyễn Trần &ldquo;<a href=\"https://gamek.vn/qtv.htm\" target=\"_blank\">QTV</a>&rdquo; Tường Vũ - tuyển thủ đường tr&ecirc;n t&agrave;i năng một thời của&nbsp;<a href=\"https://gamek.vn/vcs.htm\" target=\"_blank\">VCS</a>. Anh l&agrave; một trong những tuyển thủ đời đầu của l&agrave;ng LMHT Việt, từng kho&aacute;c &aacute;o rất nhiều đội tuyển lớn thời bấy giờ như Boba Marines, Saigon Jokers v&agrave; SaiGon Fantastic Five.</p>\r\n\r\n<p>Sở hữu vẻ ngo&agrave;i điển trai, l&atilde;ng tử c&ugrave;ng t&agrave;i năng chơi game đỉnh cao, QTV cũng c&oacute; một hậu phương v&ocirc; c&ugrave;ng vững chắc. Vợ anh l&agrave; hot girl&nbsp;<a href=\"https://gamek.vn/qtv-raina.htm\" target=\"_blank\">Raina</a>, t&ecirc;n thật l&agrave; B&ugrave;i Hương Giang. C&ocirc; l&agrave; một streamer kh&aacute; nổi tiếng v&agrave; cũng l&agrave; một game thủ c&oacute; hạng của tựa game PlayerUnknown&rsquo;s Battlegrounds. Cặp đ&ocirc;i ch&iacute;nh thức về một nh&agrave; năm 2018 v&agrave; c&oacute; với nhau cậu con trai t&ecirc;n Kha Long v&ocirc; c&ugrave;ng đ&aacute;ng y&ecirc;u. Với một tuyển thủ Esports như QTV, anh đ&atilde; c&oacute; tất cả mọi thứ, từ sự nghiệp lừng lẫy cho đến m&aacute;i ấm gia đ&igrave;nh hạnh ph&uacute;c với vợ đẹp, con kh&ocirc;n.</p>\r\n\r\n<p>Ấy vậy nhưng, mới đ&acirc;y, Hương Giang đ&atilde; bất ngờ đăng th&ocirc;ng b&aacute;o ngay giữa đ&ecirc;m cho biết c&ocirc; v&agrave; QTV đ&atilde; đ&atilde; ch&iacute;nh thức ly h&ocirc;n v&agrave; c&ocirc; sẽ nhận quyền nu&ocirc;i dưỡng, chăm s&oacute;c b&eacute; Kha Long.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/-1636047856345280189980.jpg\" target=\"_blank\"><img alt=\"Sốc: Vợ QTV bất ngờ thông báo đã ly hôn, ám chỉ thủ phạm không chỉ có 1 người khiến cộng đồng mạng sững sờ - Ảnh 1.\" src=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/-1636047856345280189980.jpg\" /></a></p>\r\n\r\n<p>D&ograve;ng trạng th&aacute;i của Hương Giang khiến người h&acirc;m mộ của cặp đ&ocirc;i kh&ocirc;ng khỏi b&agrave;ng ho&agrave;ng</p>\r\n\r\n<p>Người h&acirc;m mộ của cặp đ&ocirc;i v&ocirc; c&ugrave;ng b&agrave;ng ho&agrave;ng, sửng sốt v&agrave; tiếc cho một chuyện t&igrave;nh đẹp. Nhưng đ&aacute;ng ch&uacute; &yacute;, c&aacute;c fan của cả hai, nhất l&agrave; của QTV c&agrave;ng sửng sốt hơn khi Hương Giang &aacute;m chỉ &ldquo;thủ phạm&rdquo; đ&atilde; &ldquo;ph&aacute; vỡ sự chịu đựng&rdquo; của c&ocirc; kh&ocirc;ng chỉ 1 m&agrave; l&agrave; &ldquo;những chị, em&rdquo;. Nhiều người đo&aacute;n, sự việc c&oacute; li&ecirc;n quan người thứ 3, v&agrave; kẻ n&agrave;y kh&ocirc;ng chỉ c&oacute; 1 người. B&ecirc;n cạnh đ&oacute;, nhiều b&igrave;nh luận cũng an ủi, động vi&ecirc;n Hương Giang cũng như b&agrave;y tỏ sự x&oacute;t xa cho b&eacute; Kha Long khi c&ograve;n qu&aacute; nhỏ đ&atilde; phải chịu cảnh gia đ&igrave;nh tan vỡ.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/qtv-3-16360480553501752900525.png\" target=\"_blank\"><img alt=\"Sốc: Vợ QTV bất ngờ thông báo đã ly hôn, ám chỉ thủ phạm không chỉ có 1 người khiến cộng đồng mạng sững sờ - Ảnh 2.\" src=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/qtv-3-16360480553501752900525.png\" /></a></p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/qtv-4-1636048055353190384357.png\" target=\"_blank\"><img alt=\"Sốc: Vợ QTV bất ngờ thông báo đã ly hôn, ám chỉ thủ phạm không chỉ có 1 người khiến cộng đồng mạng sững sờ - Ảnh 3.\" src=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/qtv-4-1636048055353190384357.png\" /></a></p>\r\n\r\n<p>D&acirc;n mạng cũng b&agrave;y tỏ sự thất vọng v&agrave; đặc biệt l&agrave; lo cho b&eacute; Kha Long</p>\r\n\r\n<p>Hiện b&ecirc;n ph&iacute;a QTV vẫn chưa c&oacute; động th&aacute;i g&igrave; về sự việc. Vậy l&agrave;, một trong những chuyện t&igrave;nh đẹp nhất l&agrave;ng Esports Việt đ&atilde; kết th&uacute;c theo c&aacute;ch đ&aacute;ng tiếc nhất. V&agrave; trong c&acirc;u chuyện n&agrave;y, người đ&aacute;ng thương nhất chắc chắn l&agrave; b&eacute; Kha Long khi phải thiếu vắng một t&igrave;nh thương đủ đầy từ cả cha v&agrave; mẹ khi c&ograve;n qu&aacute; nhỏ.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/5/5305793620940923240318657474619679303008256n-163604898561075749404.jpg\" target=\"_blank\"><img alt=\"Sốc: Vợ QTV bất ngờ thông báo đã ly hôn, ám chỉ thủ phạm không chỉ có 1 người khiến cộng đồng mạng sững sờ - Ảnh 4.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/5/5305793620940923240318657474619679303008256n-163604898561075749404.jpg\" /></a></p>\r\n\r\n<p>Vợ chồng QTV - Hương Giang thuở c&ograve;n mặn nồng</p>\r\n', '5305793620940923240318657474619679303008256n-1636048985610757494041636093791.jpg', 3);
INSERT INTO `tbl_post` (`id_post`, `title_post`, `content_post`, `image_post`, `id_Cpost`) VALUES
(12, 'Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu', '<h2>Đội h&igrave;nh Yordle ở Đấu Trường Ch&acirc;n L&yacute; m&ugrave;a 6 c&oacute; c&aacute;ch vận h&agrave;nh cực kỳ đặc biệt.</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Tại&nbsp;<em><a href=\"https://gamek.vn/dau-truong-chan-ly.htm\" target=\"_blank\">Đấu Trường Ch&acirc;n L&yacute;</a></em>&nbsp;m&ugrave;a 6, tộc Yordle sở hữu hiệu ứng cực kỳ đặc biệt đ&oacute; l&agrave; đưa cho game thủ một unit của tộc n&agrave;y ở đầu round d&agrave;n trận. Điều n&agrave;y gi&uacute;p cho game thủ c&oacute; thể n&acirc;ng cấp đội h&igrave;nh một c&aacute;ch v&ocirc; c&ugrave;ng nhanh ch&oacute;ng, thậm ch&iacute; l&agrave; đẩy cả team l&ecirc;n 3 sao. Tuy nhi&ecirc;n đ&acirc;y lại l&agrave; c&aacute;i bẫy cực kỳ lớn v&agrave; khiến game thủ dễ thua trận v&igrave; tham n&acirc;ng cấp cả đội h&igrave;nh. Để tr&aacute;nh rơi v&agrave;o c&aacute;i bẫy n&agrave;y th&igrave; bạn n&ecirc;n học hỏi những mẹo hay dưới đ&acirc;y từ kỳ thủ&nbsp;<a href=\"https://gamek.vn/thach-dau.htm\" target=\"_blank\">Th&aacute;ch Đấu</a>&nbsp;m&aacute;y chủ NA - Mismatched Socks.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/1-1636011360272323746887.png\" target=\"_blank\"><img alt=\"Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu - Ảnh 1.\" src=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/1-1636011360272323746887.png\" /></a></p>\r\n\r\n<p>Mismatched Socks từng đứng ở vị tr&iacute; top 11 Th&aacute;ch Đấu Bắc Mỹ trước khi chuyển sang m&aacute;y chủ PBE để nghi&ecirc;n cứu m&ugrave;a 6</p>\r\n\r\n<p>Đầu ti&ecirc;n th&igrave; ch&uacute;ng ta cần biết rằng Yordle kh&ocirc;ng phải l&agrave; dạng đội h&igrave;nh m&agrave; bạn c&oacute; thể &quot;force comp&quot; ở mọi trận đấu khi phụ thuộc v&agrave;o những unit khởi đầu. Bạn chỉ n&ecirc;n hướng tới team Yordle khi k&iacute;ch hoạt được mốc 3 tướng sau khi 3 round qu&aacute;i đầu ti&ecirc;n kết th&uacute;c. Việc n&agrave;y gi&uacute;p cho game thủ c&oacute; th&ecirc;m thời gian để nhận c&aacute;c unit Yordle v&agrave; gia tăng tốc độ n&acirc;ng cấp đội h&igrave;nh.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/1-16360114816781678990464.png\" target=\"_blank\"><img alt=\"Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu - Ảnh 2.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/4/1-16360114816781678990464.png\" /></a></p>\r\n\r\n<p>Bạn chỉ n&ecirc;n chơi team Yordle khi k&iacute;ch hoạt được mốc 3 tướng sau khi 3 round qu&aacute;i đầu trận kết th&uacute;c</p>\r\n\r\n<p>Theo chia sẻ từ Mismatched Socks th&igrave; 4 unit bạn lu&ocirc;n lu&ocirc;n n&acirc;ng l&ecirc;n 3 sao khi chơi team Yordle đ&oacute; l&agrave; Ziggs, Poppy,&nbsp;<a href=\"https://gamek.vn/tristana.htm\" target=\"_blank\">Tristana</a>&nbsp;v&agrave; Lulu. Với Ziggs v&agrave; Tristana th&igrave; đ&acirc;y l&agrave; 2 nguồn s&aacute;t thương chủ yếu cho của đội h&igrave;nh n&agrave;y n&ecirc;n ch&uacute;ng cần được ưu ti&ecirc;n để n&acirc;ng l&ecirc;n 3 sao. Poppy cũng cần được n&acirc;ng cấp c&agrave;ng sớm c&agrave;ng tốt bởi đ&acirc;y l&agrave; unit chống chịu ch&iacute;nh của đội h&igrave;nh n&agrave;y v&agrave; thường đứng một m&igrave;nh ở tuyến trước. Trong khi đ&oacute; Lulu l&ecirc;n 3 sao sẽ buff rất nhiều m&aacute;u v&agrave; đảm bảo khả năng sống s&oacute;t cho cả team.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/-16360115641031944349045.jpg\" target=\"_blank\"><img alt=\"Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu - Ảnh 3.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/4/-16360115641031944349045.jpg\" /></a></p>\r\n\r\n<p>Lulu 3 sao được Mismatched Socks m&ocirc; tả l&agrave; ngưỡng sức mạnh lớn nhất của đội h&igrave;nh n&agrave;y</p>\r\n\r\n<p>Về Vex v&agrave; Heimerdinger th&igrave; Mismatched Socks khuy&ecirc;n rằng bạn kh&ocirc;ng n&ecirc;n đầu tư v&agrave;o 2 unit n&agrave;y để đẩy ch&uacute;ng l&ecirc;n 3 sao với mục đ&iacute;ch lấy Veigar. Bạn cần nhớ rằng để sống s&oacute;t qua được giai đoạn đầu trận th&igrave; Ziggs v&agrave; Tristana buộc phải c&oacute; đồ nhằm đảm bảo lượng s&aacute;t thương đầu ra. Kể cả khi bạn c&oacute; th&agrave;nh c&ocirc;ng trong việc n&acirc;ng cấp Veigar th&igrave; cũng chẳng c&oacute; item để qu&acirc;n cờ n&agrave;y g&acirc;y s&aacute;t thương. Hệ quả l&agrave; bạn sẽ tốn 1 vị tr&iacute; trong đội h&igrave;nh nhưng hiệu quả mang lại th&igrave; v&ocirc; c&ugrave;ng thấp.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/2/veigar-16358378937551715667627.png\"><img alt=\"Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu - Ảnh 4.\" src=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/2/veigar-16358378937551715667627.png\" /></a></p>\r\n\r\n<p>Veigar dường như kh&ocirc;ng &quot;g&aacute;nh team&quot; mạnh mẽ như game thủ tưởng</p>\r\n\r\n<p>Ở giai đoạn cuối trận th&igrave; bạn sẽ c&oacute; 2 hướng ho&agrave;n thiện đội h&igrave;nh dựa theo c&aacute;c unit m&igrave;nh mua được. Nếu bạn sở hữu Jhin v&agrave; Janna th&igrave; đội h&igrave;nh 6 Yordle kết hợp với 2 Xạ Thủ sẽ được ưu ti&ecirc;n khi Tristana c&oacute; thể g&acirc;y damage rất mạnh. Trong trường hợp bạn mua th&ecirc;m được những unit c&oacute; gi&aacute; trị cao như Jayce, Yuumi, Braum th&igrave; c&oacute; thể giảm xuống mốc 3 Yordle để tận dụng sức mạnh của ch&uacute;ng.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/photo-1-1636011651719498267013.png\" target=\"_blank\"><img alt=\"Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu - Ảnh 5.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/4/photo-1-1636011651719498267013.png\" /></a></p>\r\n\r\n<p>Đội h&igrave;nh 6 Yordle kết hợp với Jhin v&agrave; Janna ở cấp độ 8</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/photo-1-16360116578091334769849.png\" target=\"_blank\"><img alt=\"Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu - Ảnh 6.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/11/4/photo-1-16360116578091334769849.png\" /></a></p>\r\n\r\n<p>Nếu bạn roll ra Jayce, Yuumi, Braum th&igrave; c&oacute; thể &aacute;p dụng đội h&igrave;nh Yordle - Thuật Sư ở cuối trận</p>\r\n\r\n<p>Về mặt x&acirc;y dựng trang bị, Tristana ở thời điểm hiện tại cần c&oacute; được Cuồng Đao Guinsoo v&agrave; V&ocirc; Cực Kiếm để đảm bảo lượng s&aacute;t thương đầu ra ở tuyến sau. Ở trang bị thứ 3 th&igrave; B&agrave;n Tay C&ocirc;ng L&yacute; l&agrave; lựa chọn tối ưu khi vừa gia tăng s&aacute;t thương lẫn khả năng hồi phục. Nếu bạn sở hữu nhiều item tăng s&aacute;t thương kỹ năng, mana th&igrave; Ziggs v&agrave; Lulu l&agrave; những qu&acirc;n cờ n&ecirc;n được cầm trang bị.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/tris-16360119784831783599381.jpg\" target=\"_blank\"><img alt=\"Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu - Ảnh 7.\" src=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/tris-16360119784831783599381.jpg\" /></a></p>\r\n\r\n<p>Nếu gặp nhiều đối thủ m&aacute;u tr&acirc;u th&igrave; bạn c&oacute; thể đổi B&agrave;n Tay C&ocirc;ng L&yacute; th&agrave;nh Diệt Khổng Lồ</p>\r\n\r\n<p>Đối với Poppy ở tuyến trước th&igrave; bạn n&ecirc;n gh&eacute;p cho vị tướng n&agrave;y c&agrave;ng nhiều Th&uacute; Tượng Thạch Gi&aacute;p c&agrave;ng tốt. L&yacute; do l&agrave; bởi s&aacute;t thương từ kỹ năng của Poppy giờ đ&acirc;y sẽ tương t&aacute;c với chỉ số gi&aacute;p từ unit n&agrave;y. Khi c&oacute; được 2-3 chiếc Th&uacute; Tượng Thạch Gi&aacute;p th&igrave; Poppy 3 sao ho&agrave;n to&agrave;n c&oacute; thể hạ gục được chủ lực của đối thủ chỉ trong khoảng 10-15 gi&acirc;y.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/poppy-1636012089527450252152.jpg\" target=\"_blank\"><img alt=\"Đấu Trường Chân Lý: Học hỏi những mẹo hay khi xây dựng team Yordle từ kỳ thủ Thách Đấu - Ảnh 8.\" src=\"https://gamek.mediacdn.vn/133514250583805952/2021/11/4/poppy-1636012089527450252152.jpg\" /></a></p>\r\n\r\n<p>Th&uacute; Tượng Thạch Gi&aacute;p l&agrave; item trấn ph&aacute;i của Poppy ở m&ugrave;a 6</p>\r\n', 'tft-163601244288612348323041636093840.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `title_product` varchar(200) NOT NULL,
  `desc_product` text NOT NULL,
  `price_product` varchar(100) NOT NULL,
  `product_hot` int(11) NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `idCP` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `title_product`, `desc_product`, `price_product`, `product_hot`, `quantity_product`, `image`, `idCP`) VALUES
(5, 'Mô hình Naruto - Might Guy', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 34cm<br />\r\n- C&oacute; đ&egrave;n led ở đế v&agrave; mắt</p>\r\n', '1250000', 1, 20, 'guy1635695715.jpg', 1),
(6, 'Mô hình Akasuki - Deidara', '<p>Chất liệu : PVC v&agrave; ABS<br />\r\nChiều cao : 26cm</p>\r\n', '1690000', 1, 50, 'daidera1635695831.jpg', 1),
(7, 'Mô hình Hatake Kakashi', '<p>Chất liệu : Nhựa ABS v&agrave; PVC<br />\r\nChiều cao : 29cm</p>\r\n', '800000', 0, 50, 'kakashi11635695902.jpg', 1),
(8, 'Mô hình Hatake Kakashi', '<p>Chất liệu : Nhựa ABS v&agrave; PVC<br />\r\nChiều cao : 29cm</p>\r\n', '1000000', 1, 10, 'kakashi1635695945.jpg', 1),
(9, 'Mô hình Uchiha Sasuke', '<p>Chất liệu : Nhựa ABS v&agrave; PVC<br />\r\nChiều cao : 29cm</p>\r\n', '1250000', 1, 20, 'sasuke21635696001.jpg', 1),
(10, 'Mô hình Uchiha Sasuke', '<p>Chất liệu : Nhựa ABS v&agrave; PVC<br />\r\nChiều cao : 29cm</p>\r\n', '600000', 0, 50, 'sasuke11635696025.jpg', 1),
(11, 'Mô hình Naruto cửu vĩ', '<p>Chất liệu : Nhựa ABS v&agrave; PVC<br />\r\nChiều cao : 29cm</p>\r\n', '2150000', 1, 10, 'narutocuvi1635696085.jpg', 1),
(12, 'Mô hình Uchiha Obito', '<p>Chất liệu : Nhựa ABS v&agrave; PVC<br />\r\nChiều cao : 31cm</p>\r\n', '1250000', 1, 10, 'obito1635696473.jpg', 1),
(13, 'Mô hình Uchiha Itachi', '<p>Chất liệu : Nhựa ABS v&agrave; PVC<br />\r\nChiều cao : 31cm</p>\r\n', '1250000', 1, 10, 'itachi11635696527.jpg', 1),
(14, 'Mô hình Naruto', '<p>Chất liệu : Nhựa ABS v&agrave; PVC<br />\r\nChiều cao : 31cm</p>\r\n', '1000000', 0, 50, 'naruto11635696553.jpg', 1),
(15, 'Mô hình Vegeta', '<p>Tượng Vegeta chất liệu Resin tỉ lệ 1:1 cao 210 CM.<br />\r\n- T&iacute;nh năng đặc biệt l&agrave; hệ thống đ&egrave;n LED đổi m&agrave;u rất s&aacute;ng v&agrave; bắt mắt&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '33900000', 1, 3, 'dra11636089115.jpg', 2),
(16, 'Mô hình Son Goku', '<p>- Tỉ lệ 1/4: cao 71cm, rộng 48cm, s&acirc;u 40cm.&nbsp;</p>\r\n\r\n<p>- Tỉ lệ 1/6: cao 47cm, rộng 32cm, s&acirc;u 27cm.&nbsp;</p>\r\n', '3000000', 1, 12, 'dr21636089293.jpg', 2),
(17, 'Mô hình Goku comic', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 33cm</p>\r\n', '690000', 0, 50, 'dr31636089375.jpg', 2),
(18, 'Mô hình Quy lão Kamê', '<p>Chất liệu : Nhựa ABS &amp; PVC&nbsp;<br />\r\nChiều cao : 18 cm</p>\r\n', '320000', 0, 50, 'dr41636089486.jpg', 2),
(19, 'Mô hình Cell', '<p>Chiều cao: 17 cm</p>\r\n', '300000', 0, 50, 'dr51636089555.png', 2),
(20, 'Mô hình OnePiece - Ace lửa', '<p>Chất liệu : Nhựa PVC &amp; ABS<br />\r\nChiều cao : 24cm</p>\r\n', '850000', 0, 50, '11636094833.jpg', 4),
(21, 'Mô hình OnePiece - Ace', '<p>Chất liệu : Nhựa ABS &amp; PVC&nbsp;<br />\r\nChiều cao : 41cm&nbsp;<br />\r\n- C&oacute; đ&egrave;n ở tay lửa v&agrave; đế&nbsp;</p>\r\n', '1500000', 1, 10, 'once1636094909.jpg', 4),
(22, 'Mô hình One Piece - Law', '<p>Chất liệu : Nhựa PVC &amp; ABS<br />\r\nChiều cao : 30cm</p>\r\n', '990000', 0, 100, '61c670d5309d7e5cf0bb3947ac908bde0c2a257644ee9044afba09ca1636095045.jpg', 4),
(23, 'Mô hình One Piece - Sabo dáng bay', '<p>Chất liệu : Nhựa PVC &amp; ABS<br />\r\nChiều Cao : 33cm</p>\r\n', '1200000', 0, 100, '60ec0a4db23c43eec676145a6a4fbb5aa30bc8f5ef71a47b652e7bf71636095114.jpg', 4),
(24, 'Mô hình One Piece - Zoro tam kiếm', '<p>Đặc điểm : Bao gồm 2 kiểu đầu v&agrave; 3 kiếm&nbsp;<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 37cm</p>\r\n', '1450000', 0, 10, '3267b750bc9669e41eb4cfaec49cae460d869d65613e71b166c8a7211636095194.jpg', 4),
(25, 'Mô hình Marvel - Ironman MK50', '<p>Chi tiết :&nbsp;<br />\r\n- C&oacute; khớp cử động chắc chắn - tạo nhiều d&aacute;ng&nbsp;<br />\r\n- Nhiều phụ kiện đi k&egrave;m đầy đủ như tr&ecirc;n ảnh&nbsp;<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 16cm</p>\r\n', '950000', 0, 50, '0ee67c2fae9ce72e318f14e6e1df5c8be2098a017ed37b612fe645441636095341.jpg', 5),
(26, 'Mô hình Marvel - Hulk', '<p>Chi tiết :<br />\r\n- C&oacute; khớp cử động&nbsp;<br />\r\n- Quần bằng vải<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 22cm</p>\r\n', '680000', 0, 50, 'c3cb423f76df020f8531e3225d957faa4e0edc6a0794262271da38501636095396.jpg', 5),
(27, 'Mô hình Marvel - Spiderman ', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 16cm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n', '600000', 0, 50, '91bacbe0a211a84d6846d162a4845dfaaf9de43c2cee1273ef4e0d6e1636095463.jpg', 5),
(28, 'Mô hình Marvel - Thanos End-Game edition', '<p>Chi tiết :&nbsp;<br />\r\n- C&oacute; khớp chắc chắn tạo d&aacute;ng theo &yacute; muốn<br />\r\n- Nhiều phụ kiện thay thế&nbsp;<br />\r\nChất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 20cm</p>\r\n', '1000000', 0, 20, 'c284cecbd4a4314abac06d22aa17199b7f3e6ab467dec315f2f525a61636095505.jpg', 5),
(29, 'Mô hình Batman Robin', '<p>Chất liệu : Nhựa ABS &amp; PVC<br />\r\nChiều cao : 37cm</p>\r\n', '1350000', 0, 50, 'b7c17a324c326245e67cb9d18bcb00d27694d804981deed0786e40041636095596.jpg', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`id_Cpost`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`idCP`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_Cpost` (`id_Cpost`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `idCP` (`idCP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `id_Cpost` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `idCP` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id_product`);

--
-- Các ràng buộc cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`id_Cpost`) REFERENCES `tbl_category_post` (`id_Cpost`);

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`idCP`) REFERENCES `tbl_category_product` (`idCP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
