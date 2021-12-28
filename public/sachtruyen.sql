-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 18, 2021 lúc 06:08 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sachtruyen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `id` int(10) UNSIGNED NOT NULL,
  `truyen_id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `slug_chapter` varchar(255) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` longtext NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chapter`
--

INSERT INTO `chapter` (`id`, `truyen_id`, `tieude`, `slug_chapter`, `tomtat`, `noidung`, `kichhoat`) VALUES
(1, 4, 'Chapter 1: Quả bom chọc trời (1997)', 'chapter-1-qua-bom-choc-troi-1997', 'Nội dung:Trong tập phim này, Shinichi nhận lời mời dự tiệc từ kiến trúc sư Teiji Moriya,người không hề biết cậu đã bị thu nhỏ thành Conan.Cùng lúc đó,một kẻ lạ mặt gọi điện thách thức cậu tìm ra những quả bom đang được đặt xung quanh Tokyo.Hai sự kiện này liệu có liên quan đến nhau?Mọi việc càng trở nên nghiêm trọng khi Ran bị mắc kẹt tại một trong những tòa nhà đã bị đặt bom.Liệu Conan có tìm ra hung thủ và cứu cô bạn mình khỏi khoảnh khắc sinh tử?', 'Ngày xưa, có một ông già nhà quê có một cô gái đẹp. Trong nhà phải thuê một đầy tớ trai, ông ta muốn lợi dụng nó làm việc khỏi trả tiền, mới bảo nó rằng: “Mày chịu khó làm ăn với tao rồi tao gả con gái cho”. Người ở mừng lắm, ra sức làm lụng tới khuya không nề hà mệt nhọc. Nó giúp việc được ba năm, nhà ông ta mỗi ngày một giàu có.\r\n\r\nÔng nhà giàu không còn nghĩ đến lời hứa cũ nữa, đem con gái gả cho con một nhà phú hộ khác ở trong làng.\r\n\r\nSáng hôm sắp đưa dâu, ông chủ gọi đứa ở lên lừa nó một lần nữa, bảo rằng: “Bây giờ mày lên rừng tìm cho ra một cây tre có trăm đốt đem về đây làm đũa ăn cưới, thì tao cho mày lấy con gái tao ngay”.\r\n\r\nĐứa ở tưởng thật, vác dao đi rừng. Nó kiếm khắp nơi, hết rừng này qua rừng nọ, không tìm đâu thấy có cây tre đủ trăm đốt. Buồn khổ quá, nó ngồi một chỗ ôm mặt khóc. Bỗng thấy có một ông lão râu tóc bạc phơ, tay cầm gậy trúc hiện ra bảo nó: “Tại sao con khóc, hãy nói ta nghe, ta sẽ giúp cho”. Nó bèn đem đầu đuôi câu chuyện ông phú hộ hứa gả con gái cho mà kể lại. Ông lão nghe xong, mới bảo rằng: “Con đi chặt đếm đủ trăm cái đốt tre rồi đem lại đây ta bảo”.\r\n\r\nNó làm theo y lời dặn, ông dạy nó đọc: “Khắc nhập, khắc nhập” (vào ngay, vào ngay) đủ ba lần, thì một trăm khúc tre tự nhiên dính lại với nhau thành một cây trẻ đủ một trăm đốt. Nó mừng quá, định vác về, nhưng cây tre dài quá, vướng không đi được. Ông lão bảo nó đọc: “Khắc xuất, khắc xuất” (ra ngay, ra ngay) đúng ba lần thì cây tre trăm đốt lại rời ra ngay từng khúc.\r\n\r\nNó bèn bó cả lại mà gánh về nhà. Đến nơi thấy hai họ đang ăn uống vui vẻ, sắp đến lúc rước dâu, nó mới hay là ông chủ đã lừa nó đem gả con gái cho người ta rồi. Nó không nói gì, đợi lúc nhà trai đốt pháo cưới, bèn đem một trăm khúc tre xếp dài dưới đất, rồi lẩm bẩm đọc: “Khắc nhập, khắc nhập” cho liền lại thành một cây tre trăm đốt, đoạn gọi ông chủ đến bảo là đã tìm ra được, và đòi gả con gái cho nó. Ông chủ lấy làm lạ cầm cây tre lên xem, nó đọc luôn: “Khắc nhập, khắc nhập”, thì ông ta bị dính liền ngay vào cây tre, không làm sao gỡ ra được. Ông thông gia thấy vậy chạy đến, định gỡ cho, nó lại đọc luôn: “Khắc nhập, khắc nhập”, thì cả ông cũng bị dính theo luôn, không lôi ra được nữa.\r\n\r\nHai họ thấy thế không còn ai dám lại gần nó nữa. Còn hai ông kia không còn biết làm thế nào đành van lạy xin nó thả ra cho. Ông chủ hứa gả con gái cho nó, ông thông gia xin về nhà ngay, nó để cho cả hai thề một hồi rồi nó mới đọc: “Khắc xuất, khắc xuất” thì hai ông rời ngay cây tre, và cây tre cũng rời ra trăm khúc.\r\n\r\nMọi người đều lấy làm khiếp phục đứa ở, ông chủ vội gả con gái cho nó, và từ đó không còn dám khinh thường nó nữa.', 0),
(2, 4, 'Chapter 2: Mục tiêu thứ 14', 'chapter-2-muc-tieu-thu-14', 'Mở đầu câu truyện, cậu học sinh trung học 17 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu củaThám tử lừng danh Conan được miêu tả là một thám tử học đường xuất sắc. Trong một lần đi chơi công viên \"Miền Nhiệt đới\" với cô bạn từ thuở nhỏ Ran Mori, cậu tình cờ chứng kiến vụ một án giết người, Kishida - một hành khách trong trò chơi Chuyến tàu tốc hành đã bị giết một cách dã man. Cậu đã giúp cảnh sát làm sáng tỏ vụ án. Trên đường về nhà, cậu vô tình phát hiện một vụ làm ăn mờ ám của những người đàn ông mặc toàn đồ đen. Khi chúng phát hiện ra cậu, Shinichi đã bị đánh ngất đi. Sau đó những người đàn ông áo đen đó đã cho cậu uống một thứ thuốc độc chưa qua thử nghiệm là Apotoxin-4869 (APTX 4869) với mục đích thủ tiêu cậu. Tuy nhiên chất độc đã không giết chết Kudo. Khi tỉnh lại, cậu bàng hoàng nhận thấy mình đã bị teo nhỏ lại thành hình dạng của một cậu học sinh tiểu học.', 'Mở đầu câu truyện, cậu học sinh trung học 17 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu củaThám tử lừng danh Conan được miêu tả là một thám tử học đường xuất sắc. Trong một lần đi chơi công viên \"Miền Nhiệt đới\" với cô bạn từ thuở nhỏ Ran Mori, cậu tình cờ chứng kiến vụ một án giết người, Kishida - một hành khách trong trò chơi Chuyến tàu tốc hành đã bị giết một cách dã man. Cậu đã giúp cảnh sát làm sáng tỏ vụ án. Trên đường về nhà, cậu vô tình phát hiện một vụ làm ăn mờ ám của những người đàn ông mặc toàn đồ đen. Khi chúng phát hiện ra cậu, Shinichi đã bị đánh ngất đi. Sau đó những người đàn ông áo đen đó đã cho cậu uống một thứ thuốc độc chưa qua thử nghiệm là Apotoxin-4869 (APTX 4869) với mục đích thủ tiêu cậu. Tuy nhiên chất độc đã không giết chết Kudo. Khi tỉnh lại, cậu bàng hoàng nhận thấy mình đã bị teo nhỏ lại thành hình dạng của một cậu học sinh tiểu học.', 0),
(3, 5, 'Chapter 1: Cây tre trăm đốt', 'chapter-1-cay-tre-tram-dot', 'Ngày xưa, có một ông già nhà quê có một cô gái đẹp. Trong nhà phải thuê một đầy tớ trai, ông ta muốn lợi dụng nó làm việc khỏi trả tiền, mới bảo nó rằng: “Mày chịu khó làm ăn với tao rồi tao gả con gái cho”. Người ở mừng lắm, ra sức làm lụng tới khuya không nề hà mệt nhọc. Nó giúp việc được ba năm, nhà ông ta mỗi ngày một giàu có.', 'Ngày xưa, có một ông già nhà quê có một cô gái đẹp. Trong nhà phải thuê một đầy tớ trai, ông ta muốn lợi dụng nó làm việc khỏi trả tiền, mới bảo nó rằng: “Mày chịu khó làm ăn với tao rồi tao gả con gái cho”. Người ở mừng lắm, ra sức làm lụng tới khuya không nề hà mệt nhọc. Nó giúp việc được ba năm, nhà ông ta mỗi ngày một giàu có.\r\n\r\nÔng nhà giàu không còn nghĩ đến lời hứa cũ nữa, đem con gái gả cho con một nhà phú hộ khác ở trong làng.\r\n\r\nSáng hôm sắp đưa dâu, ông chủ gọi đứa ở lên lừa nó một lần nữa, bảo rằng: “Bây giờ mày lên rừng tìm cho ra một cây tre có trăm đốt đem về đây làm đũa ăn cưới, thì tao cho mày lấy con gái tao ngay”.\r\n\r\nĐứa ở tưởng thật, vác dao đi rừng. Nó kiếm khắp nơi, hết rừng này qua rừng nọ, không tìm đâu thấy có cây tre đủ trăm đốt. Buồn khổ quá, nó ngồi một chỗ ôm mặt khóc. Bỗng thấy có một ông lão râu tóc bạc phơ, tay cầm gậy trúc hiện ra bảo nó: “Tại sao con khóc, hãy nói ta nghe, ta sẽ giúp cho”. Nó bèn đem đầu đuôi câu chuyện ông phú hộ hứa gả con gái cho mà kể lại. Ông lão nghe xong, mới bảo rằng: “Con đi chặt đếm đủ trăm cái đốt tre rồi đem lại đây ta bảo”.\r\n\r\nNó làm theo y lời dặn, ông dạy nó đọc: “Khắc nhập, khắc nhập” (vào ngay, vào ngay) đủ ba lần, thì một trăm khúc tre tự nhiên dính lại với nhau thành một cây trẻ đủ một trăm đốt. Nó mừng quá, định vác về, nhưng cây tre dài quá, vướng không đi được. Ông lão bảo nó đọc: “Khắc xuất, khắc xuất” (ra ngay, ra ngay) đúng ba lần thì cây tre trăm đốt lại rời ra ngay từng khúc.\r\n\r\nNó bèn bó cả lại mà gánh về nhà. Đến nơi thấy hai họ đang ăn uống vui vẻ, sắp đến lúc rước dâu, nó mới hay là ông chủ đã lừa nó đem gả con gái cho người ta rồi. Nó không nói gì, đợi lúc nhà trai đốt pháo cưới, bèn đem một trăm khúc tre xếp dài dưới đất, rồi lẩm bẩm đọc: “Khắc nhập, khắc nhập” cho liền lại thành một cây tre trăm đốt, đoạn gọi ông chủ đến bảo là đã tìm ra được, và đòi gả con gái cho nó. Ông chủ lấy làm lạ cầm cây tre lên xem, nó đọc luôn: “Khắc nhập, khắc nhập”, thì ông ta bị dính liền ngay vào cây tre, không làm sao gỡ ra được. Ông thông gia thấy vậy chạy đến, định gỡ cho, nó lại đọc luôn: “Khắc nhập, khắc nhập”, thì cả ông cũng bị dính theo luôn, không lôi ra được nữa.\r\n\r\nHai họ thấy thế không còn ai dám lại gần nó nữa. Còn hai ông kia không còn biết làm thế nào đành van lạy xin nó thả ra cho. Ông chủ hứa gả con gái cho nó, ông thông gia xin về nhà ngay, nó để cho cả hai thề một hồi rồi nó mới đọc: “Khắc xuất, khắc xuất” thì hai ông rời ngay cây tre, và cây tre cũng rời ra trăm khúc.\r\n\r\nMọi người đều lấy làm khiếp phục đứa ở, ông chủ vội gả con gái cho nó, và từ đó không còn dám khinh thường nó nữa.', 0),
(4, 5, 'chapter 4: Ông lão đánh cá', 'chapter-4-ong-lao-danh-ca', 'ông lão đánh cá và con cá vàng', '<p>C&oacute; 2 vợ chồng &ocirc;ng l&atilde;o đ&aacute;nh c&aacute; ngh&egrave;o khổ sống trong một t&uacute;p lều b&ecirc;n bờ biển. Ng&agrave;y ng&agrave;y, &ocirc;ng l&atilde;o ra biển thả lưới đ&aacute;nh bắt c&aacute;. Một h&ocirc;m, &ocirc;ng l&atilde;o quăng nhiều mẻ lưới m&agrave; kh&ocirc;ng bắt được g&igrave;. Đến mẻ lưới cuối c&ugrave;ng, &ocirc;ng bắt được một con c&aacute; v&agrave;ng nhỏ x&iacute;u. C&aacute; v&agrave;ng khẩn thiết cầu xin &ocirc;ng l&atilde;o đ&aacute;nh c&aacute;, nếu &ocirc;ng thả n&oacute; về biển th&igrave; n&oacute; sẽ đ&aacute;p ứng mọi y&ecirc;u cầu của &ocirc;ng. &Ocirc;ng l&atilde;o đ&aacute;nh c&aacute; vui vẻ thả C&aacute; v&agrave;ng về biển m&agrave; kh&ocirc;ng đ&ograve;i hỏi g&igrave;.<br />\r\nKhi &ocirc;ng l&atilde;o đ&aacute;nh c&aacute; trở về nh&agrave; th&igrave; thấy vợ đang giặt quần &aacute;o trong chiếc chậu gỗ đ&atilde; vỡ một miếng. &Ocirc;ng kể cho b&agrave; vợ nghe chuyện đ&aacute;nh được con C&aacute; v&agrave;ng. B&agrave; vợ nghe xong, n&oacute;i:<br />\r\n&ndash; Sao &ocirc;ng kh&ocirc;ng đ&ograve;i n&oacute; cho một c&aacute;i chậu gỗ mới?</p>\r\n\r\n<p>Ng&agrave;y h&ocirc;m sau, &ocirc;ng l&atilde;o đ&aacute;nh c&aacute; đi ra biển gọi C&aacute; v&agrave;ng, C&aacute; v&agrave;ng ngoi l&ecirc;n mặt nước. &Ocirc;ng l&atilde;o bảo c&aacute;:<br />\r\n&ndash; C&aacute; v&agrave;ng ơi, mụ vợ ta bắt ta phải xin một chiếc chậu gỗ mới.<br />\r\nC&aacute; v&agrave;ng nhận lời, bảo &ocirc;ng l&atilde;o cứ y&ecirc;n t&acirc;m trở về. Khi &ocirc;ng l&atilde;o về đến nh&agrave; th&igrave; thấy nh&agrave; đ&atilde; c&oacute; một chiếc chậu mới. B&agrave; vợ lại bảo:<br />\r\n&ndash; &Ocirc;ng n&ecirc;n đ&ograve;i th&ecirc;m một ng&ocirc;i nh&agrave; thật đẹp nữa.</p>\r\n\r\n<p>Ng&agrave;y h&ocirc;m sau, &ocirc;ng l&atilde;o đ&aacute;nh c&aacute; lại đi ra biển, bảo C&aacute;:<br />\r\n&ndash; C&aacute; v&agrave;ng ơi, b&agrave; vợ ta lại muốn c&oacute; một ng&ocirc;i nh&agrave; mới.<br />\r\nC&aacute; v&agrave;ng nhận lời. &Ocirc;ng l&atilde;o đ&aacute;nh c&aacute; trở về nh&agrave;, b&agrave; vợ &ocirc;ng lại đ&ograve;i hỏi:<br />\r\n&ndash; &Ocirc;ng h&atilde;y đi bảo con C&aacute; v&agrave;ng rằng, t&ocirc;i muốn được l&agrave;m nữ ho&agrave;ng.<br />\r\n&Ocirc;ng l&atilde;o lại đi ra biển một lần nữa, gọi C&aacute; v&agrave;ng v&agrave; bảo:<br />\r\n&ndash; C&aacute; v&agrave;ng ơi, b&agrave; vợ ta kh&ocirc;ng để cho ta y&ecirc;n. B&agrave; ta muốn được sống trong cung điện.<br />\r\nC&aacute; v&agrave;ng lại một lần nữa đ&aacute;p ứng đ&ograve;i hỏi của b&agrave; vợ.</p>\r\n\r\n<p>Khi &ocirc;ng l&atilde;o về đến nh&agrave; th&igrave; b&agrave; vợ đ&atilde; l&ecirc;n l&agrave;m nữ ho&agrave;ng, nhưng b&agrave; ta vẫn chưa thoả m&atilde;n:<br />\r\n&ndash; &Ocirc;ng h&atilde;y đi bảo con C&aacute; v&agrave;ng rằng, t&ocirc;i muốn l&agrave;m long vương dưới biển kia, v&agrave; h&agrave;ng ng&agrave;y C&aacute; v&agrave;ng sẽ phải nghe t&ocirc;i sai bảo.<br />\r\n&Ocirc;ng l&atilde;o đ&aacute;nh c&aacute; đi ra biển lần thứ 4 để t&igrave;m C&aacute; v&agrave;ng. C&aacute; v&agrave;ng ngoi l&ecirc;n mặt nước, nghe lời của &ocirc;ng l&atilde;o đ&aacute;nh c&aacute;, n&oacute; kh&ocirc;ng n&oacute;i g&igrave;, quẫy đu&ocirc;i một c&aacute;i rồi biến mất v&agrave;o đại dương s&acirc;u thẳm.</p>\r\n\r\n<p>&Ocirc;ng l&atilde;o đ&aacute;nh c&aacute; trở về nh&agrave;, thấy cung điện nguy nga đ&atilde; biến mất. Trước căn lều cỏ, b&agrave; vợ &ocirc;ng đang giặt quần &aacute;o bằng chiếc chậu vỡ.</p>', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `slug_danhmuc` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `slug_danhmuc`, `mota`, `kichhoat`) VALUES
(1, 'Truyện kinh dị', 'truyen-kinh-di', 'truyện kinh dị hay nhất thế giới', 0),
(3, 'Truyện 18+', 'truyen-18', 'truyện 18+ hay nhất thế giới', 0),
(4, 'Truyện trinh tham', 'truyen-trinh-tham', 'Truyện kinh thám hay nhất mọi thời đại', 0),
(5, 'Cổ tích', 'co-tich', '100 câu chuyện cổ tích', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(10) UNSIGNED NOT NULL,
  `tentheloai` varchar(255) NOT NULL,
  `slug_theloai` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `kichhoat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `tentheloai`, `slug_theloai`, `mota`, `kichhoat`) VALUES
(1, 'Cổ tích', 'co-tich', 'cổ tích kì bí', 0),
(2, 'Kinh dị', 'kinh-di', 'Kinh dị hay nhất', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `theloai_id` int(10) UNSIGNED NOT NULL,
  `tentruyen` varchar(255) NOT NULL,
  `tukhoa` text NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  `slug_truyen` varchar(255) NOT NULL,
  `tomtat` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `kichhoat` int(11) NOT NULL,
  `created_at` varchar(30) DEFAULT NULL,
  `updated_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `danhmuc_id`, `theloai_id`, `tentruyen`, `tukhoa`, `tacgia`, `slug_truyen`, `tomtat`, `hinhanh`, `kichhoat`, `created_at`, `updated_at`) VALUES
(2, 5, 1, 'Đề thi đẫm máu', 'Đề thi đẫm máu, de thi dam mau, truyen ma am', 'Jonny', 'de-thi-dam-mau', 'Đề thi đẫm máu hay nhất', 'trinhtham166.jpg', 0, '2021-04-04 17:49:24', '2021-08-04 17:49:24'),
(3, 5, 1, 'Oan hồn quỷ có độc', 'Oan hồn quỷ có độc, oan hon quy co doc, truyen kinh di', 'David', 'oan-hon-quy-co-doc', 'Oan hồn quỷ có độc hấp dẫn nhất mọi thời đại', 'kinhdi32.jpg', 0, '2021-01-04 11:49:24', '2021-08-04 17:49:24'),
(4, 5, 1, 'Truyện conan', 'truyện conan, truyen conan, truyen trinh tham', 'Messi', 'truyen-conan', 'Truyện conan full các chương hay nhất', 'trinhtham20.jpg', 0, '2021-05-04 13:49:24', '2021-08-04 17:49:24'),
(5, 5, 1, 'Truyện cổ tích cây tre trăm đốt', 'cây tre trăm đốt, cay tre tram dot, truyen co tich', 'Ronaldo', 'truyen-co-tich-cay-tre-tram-dot', 'Mọi người đều lấy làm khiếp phục đứa ở, ông chủ vội gả con gái cho nó, và từ đó không còn dám khinh thường nó nữa.', 'cotich74.jpg', 0, '2021-08-11 23:00:46', '2021-08-04 17:49:24'),
(6, 5, 1, 'abc', 'abc,cde,đef', 'âvvsdfvf', 'abc', 'dsvfFVFSDV', 'conan83.jpg', 0, '2021-08-11 22:00:46', '2021-08-11 23:02:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Công Minh', 'leminh@gmail.com', NULL, '$2y$10$0yZvKR7tBmyamFsDh8eFKuCAuevhIDICiyoWWqbPb6w0qZZurFcY.', NULL, '2021-07-17 03:05:54', '2021-07-17 03:05:54');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `truyen_id` (`truyen_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
