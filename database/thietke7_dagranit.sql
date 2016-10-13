-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2016 at 06:33 PM
-- Server version: 5.6.30-1+deb.sury.org~wily+2
-- PHP Version: 7.0.9-1+deb.sury.org~wily+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thietke7_dagranit`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`name`, `id`, `slug`, `created_at`, `updated_at`) VALUES
('Slide lớn trang chủ', 1, 'slide-lon-trang-chu', '2016-09-20 08:31:52', '2016-09-20 08:31:52'),
('Album ảnh kế khung \'Giới thiệu\'', 2, 'album-anh-ke-khung-gioi-thieu', '2016-09-20 08:32:12', '2016-09-20 08:32:12'),
('Album slide cột bên trái', 3, 'album-slide-cot-ben-trai', '2016-09-20 08:32:28', '2016-09-20 08:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `cate_id` tinyint(4) NOT NULL,
  `content` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_hot` tinyint(1) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `custom_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `alias`, `description`, `image_url`, `cate_id`, `content`, `created_at`, `updated_at`, `created_user`, `updated_user`, `status`, `is_hot`, `display_order`, `meta_title`, `meta_description`, `meta_keywords`, `custom_text`) VALUES
(1, 'Cuộc chiến khốc liệt ở nhóm di động 4 triệu tại Việt Nam', 'cuoc-chien-khoc-liet-o-nhom-di-dong-4-trieu-tai-viet-nam', 'Cuoc chien khoc liet o nhom di dong 4 trieu tai Viet Nam', 'Oppo, Samsung là hai tên tuổi thống trị phân khúc này, trong khi trước đó vài năm, Nokia và các tên tuổi lớn chiếm giữ ngôi vị.', '2016/07/24/oppo-vs-samsung-1469342801.JPG', 1, '<p>Trong khi d&ograve;ng cao cấp dần trở th&agrave;nh cuộc đua song m&atilde; giữa Samsung v&agrave; Apple, ph&acirc;n kh&uacute;c gi&aacute; thấp ng&agrave;y c&agrave;ng trở n&ecirc;n khốc liệt hơn. Smartphone ng&agrave;y c&agrave;ng phổ biến, gi&aacute; thiết bị ng&agrave;y c&agrave;ng rẻ hơn, theo đ&oacute; cấu h&igrave;nh, thiết kế được c&aacute;c nh&agrave; sản xuất ch&uacute; trọng.</p>\r\n\r\n<p>Ở mức dưới 4 triệu, smartphone ng&agrave;y c&agrave;ng phong ph&uacute;, thay thế dần điện thoại cơ bản, những t&ecirc;n tuổi mới xuất hiện nhắm v&agrave;o ph&acirc;n kh&uacute;c n&agrave;y, đe dọa thế qu&acirc;n b&igrave;nh nhiều năm qua.</p>\r\n\r\n<h3>&Ocirc;ng lớn teo t&oacute;p, t&ecirc;n tuổi mới l&ecirc;n ng&ocirc;i</h3>\r\n\r\n<p>B&aacute;o c&aacute;o của IDC cho thấy, chỉ t&iacute;nh tới qu&yacute; II/2015, 51% điện thoại b&aacute;n ra tại Việt Nam l&agrave; smartphone, tương đương khoảng 3,3 triệu chiếc với gi&aacute; trị l&ecirc;n đến 607 triệu USD, v&agrave; con số c&oacute; dấu hiệu tăng so với thời điểm trước đ&oacute;.</p>\r\n\r\n<p>Thống k&ecirc; từ FPT Shop, trong năm 2015, tỷ lệ b&aacute;n ra giữa điện thoại cơ bản v&agrave; smartphone tại chuỗi cửa h&agrave;ng n&agrave;y l&agrave; 4:6, trong đ&oacute; c&aacute;c d&ograve;ng smartphone b&aacute;n chạy c&oacute; 7/10 sản phẩm thuộc ph&acirc;n kh&uacute;c từ 3-6 triệu đồng.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Cuoc chien khoc liet o nhom di dong 4 trieu tai Viet Nam hinh anh 1" src="http://img.v3.news.zdn.vn/w660/Uploaded/wohasku/2016_07_21/oppo_in_vietnam.JPG" style="height:478px; width:660px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Oppo tăng trưởng mạnh từ khi v&agrave;o Việt Nam. Ảnh:&nbsp;<em><strong>Duy T&iacute;n.</strong></em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Do đ&oacute;, chỉ trong v&ograve;ng khoảng 2 năm, h&agrave;ng loạt t&ecirc;n tuổi tiến v&agrave;o ph&acirc;n kh&uacute;c n&agrave;y. Khoảng 1 năm trước, thị trường gi&aacute; rẻ khoảng dưới 4 triệu l&agrave; s&acirc;n chơi ch&iacute;nh của Samsung với c&aacute;c sản phẩm như Galaxy Grand Prime, Core Prime, Galaxy J1 c&ugrave;ng Microsoft với Lumia 430, 530.</p>\r\n\r\n<p>Theo b&aacute;o c&aacute;o của IDC, thời điểm năm 2014, Samsung v&agrave; Microsoft chiếm lần lượt 30,2% v&agrave; 26,4% thị phần ph&acirc;n kh&uacute;c n&agrave;y. Phần c&ograve;n lại được chia đều cho h&agrave;ng chục t&ecirc;n tuổi, đ&aacute;ng kể nhất l&agrave; Oppo, Asus vừa bước v&agrave;o thị trường, HTC, Mobiistar, Sony đồng hạng, nhưng cũng chỉ được v&agrave;i phần trăm.</p>\r\n\r\n<p>Thế nhưng, b&aacute;o c&aacute;o mới nhất từ GfK v&agrave;o th&aacute;ng 5/2016 cho thấy những thay đổi mạnh mẽ của ph&acirc;n kh&uacute;c n&agrave;y. Samsung c&oacute; bước tăng trưởng nhẹ l&ecirc;n 34,7%, đ&aacute;ng ch&uacute; &yacute;, Microsoft sụt giảm nghi&ecirc;m trọng, chỉ c&ograve;n 4,7%.</p>\r\n\r\n<p>Trong cơn ng&atilde; ngựa của c&aacute;c đại gia, chứng kiến c&uacute; vươn l&ecirc;n ngoạn mục của Oppo, từ 7% của năm 2014, thương hiệu n&agrave;y đ&atilde; chiếm đến 21,8% thị phần dưới 4 triệu trong th&aacute;ng 5/2016.</p>\r\n\r\n<p>Trong buổi gặp gỡ b&aacute;o ch&iacute; tại TP HCM, đại diện Oppo cho biết, khoảng cuối 2014, họ đ&atilde; may mắn gi&agrave;nh được 25% thị phần nh&oacute;m 2-4 triệu đồng với phi&ecirc;n bản Neo. Thế hệ Neo 3 ra mắt một năm sau đ&oacute; đạt 400.000 m&aacute;y (gấp 4 lần bản đầu). D&ograve;ng di động n&agrave;y l&agrave; &ldquo;c&ocirc;ng thần&quot; gi&uacute;p họ tăng trưởng, n&acirc;ng thị phần 2015 l&ecirc;n tr&ecirc;n 15%, trong đ&oacute; nh&oacute;m 2-4 triệu họ chiếm tới 41,9% to&agrave;n thị trường, 600.000 bản Neo 5 đ&atilde; đến tay người d&ugrave;ng, theo GfK.</p>\r\n\r\n<p>N&oacute;i với&nbsp;<em>Zing.vn</em>, anh Trần Nguy&ecirc;n Trực, ng&agrave;nh h&agrave;ng điện thoại của Thế Giới Di Động cho biết, s&acirc;n chơi ch&iacute;nh trong nh&oacute;m n&agrave;y l&agrave; cuộc đối đầu song m&atilde;: Oppo v&agrave; Samsung. Kh&ocirc;ng chỉ trong mức 4 triệu, hầu hết c&aacute;c model của hai t&ecirc;n tuổi n&agrave;y cũng chiếm giữ c&aacute;c vị tr&iacute; b&aacute;n chạy nhất to&agrave;n thị trường. Ng&ocirc;i sao trong nh&oacute;m n&agrave;y l&agrave; Oppo Neo 5, Neo 7, Galaxy J5, A5. Trong đ&oacute;, c&aacute;c vị tr&iacute; đầu bảng li&ecirc;n tục được thay phi&ecirc;n.</p>\r\n\r\n<p>&ldquo;Ch&iacute;nh những t&ecirc;n tuổi mới thay đổi cuộc chơi, khiến thị trường chuyển biến mạnh hơn&rdquo;, anh Ng&ocirc; Duy B&aacute;, quản l&yacute; một cửa h&agrave;ng tr&ecirc;n đường 3/2, quận 10, TP HCM cho biết. C&aacute;c thiết kế từ Oppo, Asus, Xiaomi hay cuộc chạy đua về cấu h&igrave;nh đ&atilde; khiến Samsung, Sony, LG phải cật lực thay đổi.</p>\r\n\r\n<p>Chỉ trong v&ograve;ng nửa đầu năm 2016, h&agrave;ng loạt t&ecirc;n tuổi vừa quen vừa lạ tiếp tục gia nhập thị trường Việt Nam như Flash, Gionee, Intex, Coolpad&hellip; Tất cả khiến cho ph&acirc;n kh&uacute;c n&agrave;y trở n&ecirc;n s&ocirc;i động.</p>\r\n\r\n<h3>Quảng c&aacute;o mạnh, đ&aacute;nh v&agrave;o kh&aacute;ch h&agrave;ng mới</h3>\r\n\r\n<p>Kh&ocirc;ng kh&oacute; để thấy, nh&oacute;m điện thoại dưới 4 triệu chủ yếu được ưa chuộng bởi những người d&ugrave;ng mới, lần đầu biết đến smartphone, để phục vụ c&aacute;c nhu cầu giải tr&iacute;.</p>\r\n\r\n<p>Theo anh Trần Nguy&ecirc;n Trực, đặc điểm chung người d&ugrave;ng nh&oacute;m n&agrave;y l&agrave; thu nhập ở mức trung b&igrave;nh, hầu hết l&agrave; vừa chuyển đổi từ điện thoại phổ th&ocirc;ng qua, t&igrave;m kiếm gi&aacute; trị về cấu h&igrave;nh, t&iacute;nh năng v&agrave; gi&aacute; tốt. Họ l&agrave; sinh vi&ecirc;n, học sinh, c&ocirc;ng nh&acirc;n, người d&ugrave;ng trẻ. Do đ&oacute;, c&aacute;c nhu cầu được đ&aacute;p ứng ở mức cơ bản nhất, chưa đi s&acirc;u nhiều về t&iacute;nh năng.</p>\r\n\r\n<p>Trong khi đ&oacute;, anh Lạc Huy, đại diện hệ thống CellphoneS cho rằng &ldquo;đ&ocirc;ng người mua v&agrave; dễ b&aacute;n, c&aacute;c h&atilde;ng kh&ocirc;ng cần qu&aacute; đầu tư về thiết kế hay t&iacute;nh năng, miễn c&oacute; th&ocirc;ng số cao l&agrave; sẽ b&aacute;n được, do kh&aacute;ch h&agrave;ng ở ph&acirc;n kh&uacute;c n&agrave;y đ&ograve;i hỏi &iacute;t&rdquo;.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Cuoc chien khoc liet o nhom di dong 4 trieu tai Viet Nam hinh anh 2" src="http://img.v3.news.zdn.vn/w660/Uploaded/wohasku/2016_07_21/oppo_vs_samsung.JPG" style="height:440px; width:660px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cuộc chiến mạnh v&igrave; gạo, bạo v&igrave; tiền trong chi ti&ecirc;u quảng c&aacute;o của Oppo v&agrave; Samsung. Ảnh:&nbsp;<strong><em>Khương Nha.</em></strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tuy vậy, sức n&oacute;ng của thị trường khiến c&aacute;c h&atilde;ng đua chen nhau tăng độ hấp dẫn cho sản phẩm, nếu như 1-2 năm trước, điện thoại dưới 4 triệu được gắn với vỏ nhựa, thiết kế xấu, cấu h&igrave;nh vừa phải th&igrave; hiện tại, kh&ocirc;ng kh&oacute; t&igrave;m được những sản phẩm nguy&ecirc;n khối, kim loại, cấu h&igrave;nh cao v&agrave; nhiều t&iacute;nh năng như v&acirc;n tay, camera tốt vốn trước đ&acirc;y chỉ c&oacute; tr&ecirc;n d&ograve;ng cao cấp.</p>\r\n\r\n<p>Điều n&agrave;y dẫn đến việc người d&ugrave;ng &ldquo;bội thực&rdquo; c&aacute;c sản phẩm gi&aacute; rẻ, dễ dẫn đến t&igrave;nh trạng &ldquo;loay hoay&rdquo; khi mua thiết bị, nhất l&agrave; với nh&oacute;m người d&ugrave;ng đặc th&ugrave; kh&ocirc;ng r&agrave;nh rẽ về c&ocirc;ng nghệ.</p>\r\n\r\n<p>Do đ&oacute;, c&aacute;c nh&agrave; ph&acirc;n phối cho rằng chiến lược quảng c&aacute;o sẽ l&agrave; ch&igrave;a kh&oacute;a để thu h&uacute;t người d&ugrave;ng mới, h&atilde;ng n&agrave;o l&agrave;m tốt điều n&agrave;y th&igrave; đại l&yacute; sẽ b&aacute;n tốt, c&ograve;n kh&ocirc;ng chỉ c&oacute; thể b&aacute;n được sản phẩm trong thời gian ngắn.</p>\r\n\r\n<p>Theo nhiều nh&agrave; b&aacute;n lẻ, c&aacute;c chương tr&igrave;nh quảng c&aacute;o đang t&aacute;c động mạnh đến thị hiếu người d&ugrave;ng nh&oacute;m n&agrave;y. Nếu như trước đ&acirc;y, di động cao cấp được ch&uacute; &yacute; để quảng b&aacute;, th&igrave; hiện c&aacute;c video quảng c&aacute;o xuất hiện tr&ecirc;n truyền h&igrave;nh, mạng x&atilde; hội lại tập trung mạnh v&agrave;o nh&oacute;m thấp.</p>\r\n\r\n<p>Tuy vậy, quảng c&aacute;o cũng chỉ l&agrave; bước đầu để b&aacute;n được h&agrave;ng, đến cuối c&ugrave;ng, chất lượng sản phẩm vẫn l&agrave; yếu tố then chốt cho th&agrave;nh c&ocirc;ng của một thương hiệu, theo đại diện của FPT Shop, c&aacute;c h&atilde;ng n&ecirc;n &ldquo;cố gắng x&acirc;y dựng chuỗi gi&aacute; trị bền vững, đối t&aacute;c chiến lược d&agrave;i hạn hơn l&agrave; ch&uacute; trọng qu&aacute; nhiều v&agrave;o chi ph&iacute;, sản phẩm đảm bảo, ch&iacute;nh s&aacute;ch hậu m&atilde;i hợp l&yacute; v&agrave; tr&aacute;ch nhiệm&rdquo;.</p>\r\n\r\n<p>Theo c&aacute;c chuy&ecirc;n gia, thị trường di động Việt dự b&aacute;o sẽ tăng th&ecirc;m 20-35% so với 2015. Trong 5 th&aacute;ng đầu 2016, 5,8 triệu điện thoại đ&atilde; đến tay người d&ugrave;ng (1,2 triệu m&aacute;y/th&aacute;ng). Trong đ&oacute;, ph&acirc;n kh&uacute;c 2-4 triệu chiếm gần 40%, Oppo chiếm ⅔ thị phần. C&aacute;c nh&agrave; b&aacute;n lẻ dự đo&aacute;n, ph&acirc;n kh&uacute;c n&agrave;y tiếp tục l&agrave; m&agrave;n song đấu giữa Samsung, Oppo. D&ugrave; vậy, thị trường sẽ phức tạp hơn khi Asus, c&aacute;c t&ecirc;n tuổi mới gia nhập hay c&aacute;c nh&agrave; sản xuất lớn cũng đang dồn lực đ&aacute;nh chiếm.</p>\r\n', '2016-07-24 06:48:22', '2016-07-24 07:14:31', 0, 0, 1, 1, 0, '', '', '', ''),
(3, 'Người dùng VN còn một tuần để nâng cấp miễn phí Windows 10', 'nguoi-dung-vn-con-mot-tuan-de-nang-cap-mien-phi-windows-10', 'Nguoi dung VN con mot tuan de nang cap mien phi Windows 10', 'Người sử dụng thiết bị Windows 7 và Windows 8.1 cần nâng cấp lên Windows 10 trước khi kỳ hạn nâng cấp miễn phí kết thúc vào ngày 29/7.', '2016/07/24/windows-1469342999.jpg', 1, '<p>Theo th&ocirc;ng tin mới đ&acirc;y từ Microsoft, khoảng gần một nửa số thiết bị đủ ti&ecirc;u ch&iacute; tại ch&acirc;u &Aacute; đối mặt với nguy cơ bỏ lỡ việc n&acirc;ng cấp l&ecirc;n Windows 10 miễn ph&iacute; trước ng&agrave;y 29/7.</p>\r\n\r\n<p>Theo StarCouter, 48,5% PC trong khu vực hiện vẫn sử dụng Windows 7 hoặc Windows 8.1. Đ&acirc;y l&agrave; 2 nền tảng hợp lệ được n&acirc;ng cấp miễn ph&iacute; l&ecirc;n Windows 10.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Nguoi dung VN con mot tuan de nang cap mien phi Windows 10 hinh anh 1" src="http://img.v3.news.zdn.vn/w660/Uploaded/Aohuouk/2016_07_23/Windows.jpg" style="height:317px; width:586px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Cũng theo b&aacute;o c&aacute;o của StarCouter, hơn 60% m&aacute;y t&iacute;nh hợp lệ tại Ấn Độ đối mặt với nguy cơ bỏ lỡ cơ hội n&acirc;ng cấp, H&agrave;n Quốc l&agrave; 58,2%, Th&aacute;i Lan gần 57% v&agrave; Philippines l&agrave; 56,4%.</p>\r\n\r\n<p>Microsoft Việt Nam vừa ph&aacute;t đi th&ocirc;ng điệp, khuyến kh&iacute;ch người d&ugrave;ng trong nước n&acirc;ng cấp miễn ph&iacute; l&ecirc;n Windows 10 để trải nghiệm những t&iacute;nh năng mới của nền tảng n&agrave;y.</p>\r\n\r\n<p>Theo lịch tr&igrave;nh, Microsoft sẽ tung ra bản cập nhật Windows mới c&oacute; t&ecirc;n Windows 10 Anniversary Update v&agrave;o ng&agrave;y 2/8, bổ sung 6 t&iacute;nh năng mới bao gồm h&agrave;ng loạt t&iacute;nh năng bảo mật, Windows Ink (đưa t&iacute;nh năng của Windows l&ecirc;n b&uacute;t kỹ thuật số để viết tr&ecirc;n thiết bị như viết tr&ecirc;n giấy), Cortana cải tiến, tăng hiệu năng cho tr&igrave;nh duyệt Edge, trải nghiệm game tốt hơn v&agrave; những t&iacute;nh năng cải tiến cho lớp học hiện đại.</p>\r\n\r\n<p>Theo c&aacute;c khảo s&aacute;t gần đ&acirc;y, Windows 10 đang c&oacute; mặt tr&ecirc;n khoảng 350 triệu thiết bị, đem đến mức độ h&agrave;i l&ograve;ng lớn nhất so với c&aacute;c bản Windows trước đ&acirc;y với hơn 135 tỷ giờ sử dụng cho đến nay.</p>\r\n\r\n<p>Sau ng&agrave;y 29/7, những thiết bị chưa n&acirc;ng cấp sẽ phải mua bản Windows 10 Anniversary Update.</p>\r\n', '2016-07-24 06:50:18', '2016-07-24 07:15:32', 0, 0, 1, 1, 0, '', '', '', ''),
(4, 'Cận cảnh laptop mỏng nhất thế giới vừa về VN', 'can-canh-laptop-mong-nhat-the-gioi-vua-ve-vn', 'Can canh laptop mong nhat the gioi vua ve VN', 'Với độ dày chỉ 10,4 mm, HP Spectre hiện là chiếc laptop mỏng nhất thế giới. Model này tập trung nhiều về thiết kế với kiểu dáng thời trang, hướng đến nhóm khách hàng doanh nhân.', '2016/07/24/hp-spectre-zing11-1469343059.jpg', 1, '<h1>&nbsp;</h1>\r\n\r\n<p>&nbsp;Với độ d&agrave;y chỉ 10,4 mm, HP Spectre hiện l&agrave; chiếc laptop mỏng nhất thế giới. Model n&agrave;y tập trung nhiều về thiết kế với kiểu d&aacute;ng thời trang, hướng đến nh&oacute;m kh&aacute;ch h&agrave;ng doanh nh&acirc;n.</p>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 1" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing11.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Spectre l&agrave; mẫu m&aacute;y t&iacute;nh x&aacute;ch tay đầu bảng của HP. M&aacute;y vừa về Việt Nam với gi&aacute; 43 triệu đồng.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 2" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing13.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiếc laptop mỏng nhất thế giới chỉ d&agrave;y 10,4 mm, nặng 1,11 kg, sử dụng khung nh&ocirc;m v&agrave; mặt đ&aacute;y bằng sợi carbon si&ecirc;u nhẹ.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 3" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing14.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tất cả c&aacute;c cổng kết nối đều được dời về cạnh sau để ưu ti&ecirc;n cho độ mỏng của m&aacute;y.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 4" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing15_1.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Spectre được trang bị 3 cổng USB Type C, trong đ&oacute; c&oacute; 2 cổng hỗ trợ giao tiếp tốc độ cao Thunderbolt.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 5" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing16.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Giắc cắm tai nghe được dồn về g&oacute;c tr&aacute;i.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 6" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing7_1.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>HP cũng trang bị cho Spectre 2 quạt tản nhiệt, c&aacute;c khe tho&aacute;t gi&oacute; được thiết kế theo dạng mang c&aacute;, song song với nhau.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 7" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing3.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Để đạt được độ mỏng ấn tượng n&agrave;y, HP đ&atilde; phải chia đều thỏi pin về 2 b&ecirc;n th&acirc;n m&aacute;y. Spectre sử dụng pin lion, sạc qua cổng USB Type C, c&ocirc;ng nghệ hybrid cho thời gian sử dụng l&ecirc;n đến 9,5 tiếng.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 8" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing17.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>HP Spectre cũng được trang bị cấu h&igrave;nh tốt với m&agrave;n h&igrave;nh 13,3 inch, Full HD. M&aacute;y chạy hệ điều h&agrave;nh&nbsp;Windows 10 Home, chip xử l&yacute; Core i7, RAM 8 GB, ổ cứng 256 GB theo chuẩn PCle cho băng th&ocirc;ng lớn hơn chuẩn SATA th&ocirc;ng thường.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 9" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing19.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phần bản lề được thiết kế k&iacute;n với pitt&ocirc;ng đẩy ph&iacute;a trong khiến m&aacute;y tr&ocirc;ng thời trang hơn nhưng vẫn đảm bảo qu&aacute; tr&igrave;nh gập mở được thỏa m&aacute;i.&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 10" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing20.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>B&agrave;n ph&iacute;m hỗ trợ đ&egrave;n LED, ch&uacute;ng được thiết kế mềm, mỏng v&agrave; &iacute;t g&acirc;y ra tiếng k&ecirc;u, h&agrave;nh tr&igrave;nh ph&iacute;m ngắn, cho tốc độ soạn thảo nhanh.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 11" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/IMG_6701.JPG" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dải loa Bang &amp; Olufsen chia đều về 2 cạnh b&ecirc;n.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 12" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing1_1.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bắt đầu từ Spectre, tất cả những model cao cấp của HP sẽ sử dụng logo mới với thiết k&ecirc; tinh giản v&agrave; sang trọng hơn.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align="center">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Can canh laptop mong nhat the gioi vua ve VN hinh anh 13" src="http://img.v3.news.zdn.vn/w660/Uploaded/spcwvovd/2016_07_05/HP_Spectre_zing18.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Trong tầm gi&aacute; tr&ecirc;n 40 triệu, HP Spectre sẽ ph&ugrave; hợp hơn với nh&oacute;m kh&aacute;ch h&agrave;ng doanh nh&acirc;n, những người cần 1 laptop c&oacute; thiết kế thời trang, kh&ocirc;ng qu&aacute; ch&uacute; trọng về cấu h&igrave;nh.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2016-07-24 06:51:24', '2016-07-24 07:15:37', 0, 0, 1, 1, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `articles_cate`
--

CREATE TABLE `articles_cate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `custom_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles_cate`
--

INSERT INTO `articles_cate` (`id`, `name`, `slug`, `alias`, `description`, `created_at`, `updated_at`, `created_user`, `updated_user`, `status`, `display_order`, `meta_title`, `meta_description`, `meta_keywords`, `custom_text`) VALUES
(1, 'Tin tức', 'tin-tuc', 'Tin tuc', '', '2016-07-24 06:34:20', '2016-07-24 06:37:09', 0, 0, 1, 0, 'Tin tức', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `display_order` int(11) NOT NULL DEFAULT '1',
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `custom_text` varchar(255) DEFAULT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `alias`, `description`, `display_order`, `slug`, `status`, `meta_title`, `meta_description`, `meta_keywords`, `custom_text`, `created_user`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 'ĐÁ GRANITE', 'DA GRANITE', '', 1, 'da-granite', 1, 'ĐÁ GRANITE', 'ĐÁ GRANITE', 'ĐÁ GRANITE', 'ĐÁ GRANITE', 1, 1, '2016-09-19 01:45:16', '2016-09-19 01:45:16'),
(2, 'ĐÁ MARBLE', 'DA MARBLE', '', 1, 'da-marble', 1, 'ĐÁ MARBLE', 'ĐÁ MARBLE', 'ĐÁ MARBLE', 'ĐÁ MARBLE', 1, 1, '2016-09-19 01:45:33', '2016-09-19 01:45:33'),
(3, 'ĐÁ NHÂN TẠO', 'DA NHAN TAO', '', 1, 'da-nhan-tao', 1, 'ĐÁ NHÂN TẠO', 'ĐÁ NHÂN TẠO', 'ĐÁ NHÂN TẠO', 'ĐÁ NHÂN TẠO', 1, 1, '2016-09-19 01:45:46', '2016-09-19 01:45:46'),
(4, 'ĐÁ CẨM THẠCH', 'DA CAM THACH', '', 1, 'da-cam-thach', 1, 'ĐÁ CẨM THẠCH', 'ĐÁ CẨM THẠCH', 'ĐÁ CẨM THẠCH', 'ĐÁ CẨM THẠCH', 1, 1, '2016-09-19 01:45:57', '2016-09-19 01:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `album_id` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `album_id`, `created_at`, `updated_at`) VALUES
(1, '2016/09/20/40700801-1474360367.png', 1, '2016-09-20 08:32:48', '2016-09-20 08:32:48'),
(2, '2016/09/20/89765347-1474360780.png', 1, '2016-09-20 08:32:54', '2016-09-20 08:39:41'),
(3, '2016/09/20/82514814-1474360380.png', 1, '2016-09-20 08:33:00', '2016-09-20 08:33:00'),
(4, '2016/09/20/08957657-1474360395.jpg', 2, '2016-09-20 08:33:15', '2016-09-20 08:33:15'),
(5, '2016/09/20/20502088-1474360401.jpg', 2, '2016-09-20 08:33:22', '2016-09-20 08:33:22'),
(6, '2016/09/20/43182773-1474360408.jpg', 2, '2016-09-20 08:33:29', '2016-09-20 08:33:29'),
(7, '2016/09/20/51989522-1474360414.jpg', 2, '2016-09-20 08:33:35', '2016-09-20 08:33:35'),
(8, '2016/09/20/20739105-1474360420.jpg', 2, '2016-09-20 08:33:41', '2016-09-20 08:33:41'),
(9, '2016/09/20/10951532-1474360512.jpg', 3, '2016-09-20 08:35:13', '2016-09-20 08:35:13'),
(10, '2016/09/20/58220510-1474360519.jpg', 3, '2016-09-20 08:35:20', '2016-09-20 08:35:20'),
(11, '2016/09/20/58220510-1474360638.jpg', 3, '2016-09-20 08:37:18', '2016-09-20 08:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(111) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `content` text,
  `image_url` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `custom_text` varchar(255) DEFAULT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `alias`, `description`, `content`, `image_url`, `slug`, `status`, `meta_title`, `meta_description`, `meta_keywords`, `custom_text`, `created_user`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 'Gioi thieu', 'Đá Marble và Granite là loại đá được ứng dụng rộng rãi trong ốp lát ngành xây dựng. Với Ưu điểm của 2 loại vật liệu này là tạo phong cách lịch lãm, thoáng mát, cách nhiệt mang đến cho chủ nhân căn nhà một sự hòa hợp tuyệt vời giữa phong cách cổ điển và hiện đại. Ngoài ra, đá marble – Granite còn có tính chịu lực cao và độ bền tốt. Độ dày của đá cho phép nền nhà chịu được sự va đập mạnh.', '<p>Đ&aacute; Marble v&agrave; Granite l&agrave; loại đ&aacute; được ứng dụng rộng r&atilde;i trong ốp l&aacute;t ng&agrave;nh x&acirc;y dựng. Với Ưu điểm của 2 loại vật liệu n&agrave;y l&agrave; tạo phong c&aacute;ch lịch l&atilde;m, tho&aacute;ng m&aacute;t, c&aacute;ch nhiệt mang đến cho chủ nh&acirc;n căn nh&agrave; một sự h&ograve;a hợp tuyệt vời giữa phong c&aacute;ch cổ điển v&agrave; hiện đại. Ngo&agrave;i ra, đ&aacute; marble &ndash; Granite c&ograve;n c&oacute; t&iacute;nh chịu lực cao v&agrave; độ bền tốt. Độ d&agrave;y của đ&aacute; cho ph&eacute;p nền nh&agrave; chịu được sự va đập mạnh.</p>\r\n', '2016/09/20/30062159-1474369497.png', 'gioi-thieu', 1, 'Giới thiệu', 'Giới thiệu', 'Giới thiệu', 'Giới thiệu', 0, 0, '2016-09-20 11:04:32', '2016-09-20 11:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cate_id` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `content` text,
  `image_url` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `custom_text` text,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cate_id`, `name`, `alias`, `description`, `content`, `image_url`, `price`, `is_hot`, `slug`, `status`, `meta_title`, `meta_description`, `meta_keywords`, `custom_text`, `created_user`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 1, 'Đá granite 1', 'Da granite 1', '', '', '2016/09/19/764445508392-1474249978.jpg', '580000', 0, 'da-granite-1', 1, 'Đá granite 1', 'Đá granite 1', 'Đá granite 1', 'Đá granite 1', 0, 0, '2016-09-19 01:53:20', '2016-09-19 01:53:20'),
(2, 1, 'Đá granite 2', 'Da granite 2', '', '', '2016/09/20/selection-045-1474362908.png', '320000', 0, 'da-granite-2', 1, '', '', '', '', 0, 0, '2016-09-20 09:11:25', '2016-09-20 09:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` longtext NOT NULL,
  `updated_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 'base_url', 'http://nghien.biz', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(2, 'site_title', 'Đá hoa cương Hưng Thịnh', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:27'),
(3, 'site_description', 'Đá hoa cương Hưng Thịnh', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:27'),
(4, 'site_keywords', 'Đá hoa cương Hưng Thịnh', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:27'),
(5, 'admin_email', 'nghien.biz@gmail.com', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(22, 'mail_server', 'mail.example.com', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(23, 'mail_login_name', 'login@example.com', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(24, 'mail_password', 'password', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(105, 'site_name', 'Đá hoa cương Hưng Thịnh', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:26'),
(113, 'google_analystic', 'UA-78246182-1', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:26'),
(114, 'facebook_appid', '1704278759791793', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:26'),
(115, 'google_fanpage', '', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:26'),
(116, 'facebook_fanpage', 'https://www.facebook.com/nhakhoavietkhoa', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:26'),
(117, 'twitter_fanpage', '', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:26'),
(130, 'logo', '2016/09/01/penguins-1472700629.jpg', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:27'),
(131, 'favicon', '2016/09/01/koala-1472700632.jpg', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:27'),
(141, 'banner', '2016/09/01/lighthouse-1472700634.jpg', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:27'),
(142, 'custom_text', '', 1, '2016-07-27 14:37:52', '2016-09-20 11:03:27'),
(143, 'ten_skype_1', 'Mr Tuấn', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(144, 'ten_skype_2', 'Mrs Trang', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(145, 'nick_skype_1', 'nick1', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(146, 'nick_skype_2', 'nick2', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(147, 'hot_line', '093.857.8439', 1, '2016-07-27 14:37:52', '2016-07-27 14:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` bigint(20) NOT NULL,
  `meta_id` bigint(20) DEFAULT NULL,
  `slug` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `description` varchar(32) DEFAULT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tag_objects`
--

CREATE TABLE `tag_objects` (
  `object_id` int(20) NOT NULL,
  `tag_id` int(20) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1 : film, 1 : tin tuc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `changed_password` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) NOT NULL,
  `created_user` int(11) NOT NULL,
  `updated_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`, `status`, `changed_password`, `remember_token`, `created_user`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@dagranit.vn', '$2y$10$BQWISt5.Vn.9kyR2/0c/COCGACNL6zbCzhpTWZwFP.k/RXRxy2IKS', 3, 1, 0, 'dMhrijH9Fl29Nw5yFRHtDZA0RnDdlScUfRGTARE7dq2gJCH157hCOwrsekMV', 1, 1, '2016-08-27 05:26:18', '2016-09-20 11:07:19'),
(6, 'Hoang Nguyen', 'hoangnhpublic@gmail.com', '$2y$10$8sMegaFE.07wPr6S74IhUe1a61CdrWjOOLEmFXvx2ATe/gVekhkEq', 1, 2, 0, '', 1, 1, '2016-08-27 05:26:18', '2016-08-27 13:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `youtube_url`, `created_at`, `updated_at`) VALUES
(1, 'Cắt đá hoa cương', 'https://www.youtube.com/watch?v=LCVs_ov7yFA', '2016-09-20 09:19:31', '2016-09-20 09:19:31'),
(2, 'Đá hoa cương ốp cầu thang', 'https://www.youtube.com/watch?v=IT4y2Gni8bQ', '2016-09-20 09:19:52', '2016-09-20 09:19:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles_cate`
--
ALTER TABLE `articles_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_name` (`name`) USING BTREE;

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_objects`
--
ALTER TABLE `tag_objects`
  ADD PRIMARY KEY (`object_id`,`tag_id`,`type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `articles_cate`
--
ALTER TABLE `articles_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
