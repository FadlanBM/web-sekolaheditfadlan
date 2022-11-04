-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 05:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkj`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploadedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `path`, `uploadedOn`) VALUES
(63, '1664670614IMG-20221001-WA0023.jpg', '2022-10-02 07:30:14'),
(64, '1664670614IMG-20221001-WA0025.jpg', '2022-10-02 07:30:14'),
(65, '1664670614IMG-20221001-WA0027.jpg', '2022-10-02 07:30:14'),
(66, '1664670614IMG-20221001-WA0026.jpg', '2022-10-02 07:30:14'),
(67, '1664670614IMG-20221001-WA0028.jpg', '2022-10-02 07:30:14'),
(68, '1664670614IMG-20221001-WA0031.jpg', '2022-10-02 07:30:14'),
(69, '1664670614IMG-20221001-WA0030.jpg', '2022-10-02 07:30:14'),
(70, '1664670614IMG-20221001-WA0029.jpg', '2022-10-02 07:30:14'),
(71, '1664670614IMG-20221001-WA0038.jpg', '2022-10-02 07:30:14'),
(72, '1664670614IMG-20221001-WA0022.jpg', '2022-10-02 07:30:14'),
(73, '1664670707IMG-20221001-WA0009.jpg', '2022-10-02 07:31:47'),
(74, '1664670708IMG-20221001-WA0010.jpg', '2022-10-02 07:31:48'),
(75, '1664670708IMG-20221001-WA0013.jpg', '2022-10-02 07:31:48'),
(76, '1664670708IMG-20221001-WA0011.jpg', '2022-10-02 07:31:48'),
(77, '1664670708IMG-20221001-WA0014.jpg', '2022-10-02 07:31:48'),
(78, '1664670708IMG-20221001-WA0012.jpg', '2022-10-02 07:31:48'),
(79, '1664670708IMG-20221001-WA0007.jpg', '2022-10-02 07:31:48'),
(80, '1664670708IMG-20221001-WA0008.jpg', '2022-10-02 07:31:48'),
(81, '1664670925IMG-20221001-WA0004.jpg', '2022-10-02 07:35:25'),
(82, '1664670925IMG-20221001-WA0005.jpg', '2022-10-02 07:35:25'),
(83, '1664670925IMG-20221001-WA0006.jpg', '2022-10-02 07:35:25'),
(84, '1664670925IMG-20221001-WA0016.jpg', '2022-10-02 07:35:25'),
(85, '1664670925IMG-20221001-WA0015.jpg', '2022-10-02 07:35:25'),
(86, '1664670925IMG-20221001-WA0017.jpg', '2022-10-02 07:35:25'),
(87, '1664670925ioknjk.jpg', '2022-10-02 07:35:25'),
(88, '1664670925IMG-20221001-WA0019.jpg', '2022-10-02 07:35:25'),
(89, '1664670925WhatsApp Image 2022-10-01 at .jpg', '2022-10-02 07:35:25'),
(90, '1664670925WhatsApp Image 2022-10-01 at 16.56.04.jpg', '2022-10-02 07:35:25'),
(91, '1664670925WhatsApp Image 2022-10-01 at 16.56.05.jpg', '2022-10-02 07:35:25'),
(92, '1664670925WhatsApp Image 2022-10-01 at 16.56.jpg', '2022-10-02 07:35:25'),
(93, '1664670925IMG-20221001-WA0003.jpg', '2022-10-02 07:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` enum('X TKJ 1','X TKJ 2','XI TKJ 1','XI TKJ 2','XII TKJ 1','XII TKJ 2') NOT NULL,
  `tingkat` enum('nasional','provinsi','kabupaten') NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `hasil` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `nama`, `kelas`, `tingkat`, `jenis`, `tgl`, `hasil`) VALUES
(13, 'Fitri Suryani', 'X TKJ 2', 'provinsi', 'Tri Lomba Juang', '2018-07-23', '2'),
(14, 'Pandu Febriyanto', 'XII TKJ 2', 'nasional', 'Kejurnas Tinju Amatir Yunior', '2018-08-28', '3'),
(15, 'Jihan', 'XI TKJ 1', 'provinsi', 'Lomba VLOG kelas Berbahasa Perancis', '2018-09-04', '3'),
(16, 'Ahlish Hidayatulloh', 'X TKJ 1', 'provinsi', 'Pencak Silat UPY CUP II', '2020-02-29', '2'),
(17, 'Muhammad Aziz Al Fathoni', 'X TKJ 1', 'kabupaten', 'O2SN Cabor Karate', '2020-03-16', '1'),
(18, 'Dimas Rizqi Kurniawan', 'X TKJ 2', 'kabupaten', 'O2SN Cabor Karate', '2020-03-16', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int(11) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `userType`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', 'phpgurukulofficial@gmail.com', 1, '2021-05-26 18:30:00', '2021-11-11 16:23:15'),
(2, 'aldi', '648ceaa6447a6a2004ec51b797c78247', NULL, 1, '2022-09-16 13:50:46', NULL),
(3, 'subadmin', 'f925916e2754e5e03f75dd58a5733251', 'sudamin@gmail.in', 0, '2021-11-10 18:28:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(6, 'Politics', 'Politics', '2021-06-21 18:30:00', '2022-10-03 06:09:43', 0),
(10, 'Pelajaran', 'pelajaran', '2022-10-19 14:58:14', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` int(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'About News Portal', '<font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, å¾®è½¯é›…é»‘, å®‹ä½“, SimSun, STXihei, åŽæ–‡ç»†é»‘, serif\"><span style=\"font-size: 26px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></font><br>', '2021-06-29 18:30:00', '2021-11-06 18:30:00'),
(2, 'contactus', 'Contact Details', '<p><br></p><p><b>Address :&nbsp; </b>New Delhi India</p><p><b>Phone Number : </b>+91 -01234567890</p><p><b>Email -id : </b>phpgurukulofficial@gmail.com</p>', '2021-06-29 18:30:00', '2021-11-06 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `viewCounter` int(11) DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` int(10) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama`, `nip`, `jenis_kelamin`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `alamat`, `foto`) VALUES
(15, 'Bu Daryanti', 0, 'P', '0893687677', '-', '1977-06-27', 'TKJ', '-', 'ssdsd.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `img_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`img_id`, `img_name`, `img_path`, `img_type`, `img_title`) VALUES
(19, 'a2.jpg', 'img/a2.jpg', 'image/jpeg', 'Captain America'),
(20, 'ironSpiderPopHeadArtwork.jpg', 'img/ironSpiderPopHeadArtwork.jpg', 'image/jpeg', 'Iron Spider-Man'),
(21, 'venom.jpg', 'img/venom.jpg', 'image/jpeg', 'Venom'),
(22, 'thanosnew.jpg', 'img/thanosnew.jpg', 'image/jpeg', 'Thanos'),
(24, 'thomyorkkk.jpg', 'img/thomyorkkk.jpg', 'image/jpeg', 'Thom Yorke'),
(26, 'thorgroot.jpg', 'img/thorgroot.jpg', 'image/jpeg', 'Thor, Groot & Rocket - Wakanda Scene'),
(27, 'drstrange.jpg', 'img/drstrange.jpg', 'image/jpeg', 'Doctor Strange'),
(28, 'bp-2.jpg', 'img/bp-2.jpg', 'image/jpeg', 'Black Panther');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) DEFAULT NULL,
  `kelas` enum('X TKJ 1','X TKJ 2','XI TKJ 1','XI TKJ 2','XII TKJ 1','XII TKJ 2') DEFAULT NULL,
  `id` int(11) NOT NULL,
  `NIS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `kelas`, `id`, `NIS`) VALUES
('Agrapratama Janu Putra Aji', 'X TKJ 1', 2, 16675),
('Arul Reza Alfahrezi', 'X TKJ 1', 4, 16677),
('Burhan Shalahuddin', 'X TKJ 1', 5, 16678),
('Daviq Kurniawan', 'X TKJ 1', 6, 16679),
('Dea Putri Arlistia', 'X TKJ 1', 7, 16680),
('Endri Irawan', 'X TKJ 1', 8, 16681),
('Farid Hidayat', 'X TKJ 1', 9, 16682),
('Fawwaz Bagdi Prastowo Akbar', 'X TKJ 1', 10, 16683),
('Fendy Bagus Purwanto', 'X TKJ 1', 11, 16684),
('Fitri Astuti', 'X TKJ 1', 12, 16685),
('Haidar Rosyid Alfaqih', 'X TKJ 1', 13, 16686),
('Hanan Nur Ikhsan', 'X TKJ 1', 14, 16687),
('Hanifa Nur Aini', 'X TKJ 1', 15, 16688),
('Helma Dimas Prasetyo', 'X TKJ 1', 16, 16689),
('Inka Rahmawati', 'X TKJ 1', 17, 16690),
('Khaila Dewi Fatika Sari', 'X TKJ 1', 18, 16691),
('Lindu Aji Putra Pratama', 'X TKJ 1', 19, 16692),
('Lindu Arif Puji Nugroho', 'X TKJ 1', 20, 16693),
('Muhamad Hasyim Abdul Majid', 'X TKJ 1', 21, 16694),
('Muhammad Bintang Wicaksono', 'X TKJ 1', 22, 16695),
('Muhammad Khoirudin Ashari', 'X TKJ 1', 23, 16696),
('Muhammad Zaki Pahlevi', 'X TKJ 1', 24, 16697),
('Raditya Eka Evandri', 'X TKJ 1', 25, 16698),
('Raditya Panji Prayogi', 'X TKJ 1', 26, 16699),
('Raditya Putra Pratama', 'X TKJ 1', 27, 16700),
('Rasya Maulana Hafidts', 'X TKJ 1', 28, 16701),
('Rayhan Aditya Pradhana', 'X TKJ 1', 29, 16702),
('Rayhan Damarjati Wijanarko', 'X TKJ 1', 30, 16703),
('Rehan Herdian Pamungkas', 'X TKJ 1', 31, 16704),
('Retno Muninggar', 'X TKJ 1', 32, 16705),
('Ribby Saskia Mecca', 'X TKJ 1', 33, 16706),
('Seto Sujatmiko', 'X TKJ 1', 34, 16707),
('Sunu Wicaksono', 'X TKJ 1', 35, 16708),
('Yoppy Desyanto Pujakusuma', 'X TKJ 1', 36, 16709),
('Abqori Ikhwanul Wakhidan', 'X TKJ 2', 37, 16710),
('Ade Dani Oktavian', 'X TKJ 2', 38, 16711),
('Adzkiya', 'X TKJ 2', 39, 16712),
('Ais Khoirul Rifan', 'X TKJ 2', 40, 16713),
('Akbar Aviantoro', 'X TKJ 2', 41, 16714),
('Amanda Setyawati', 'X TKJ 2', 42, 16715),
('Ardhan Anandhika', 'X TKJ 2', 43, 16716),
('Arina Maula Manasikana', 'X TKJ 2', 44, 16717),
('Arya Alfah Reza', 'X TKJ 2', 45, 16718),
('Daffa Rifky Haidar Ghazwan', 'X TKJ 2', 46, 16719),
('Desta Dwiangga', 'X TKJ 2', 47, 16720),
('Fatihah Al Aisyiyah', 'X TKJ 2', 48, 16721),
('Ibnu Fikri Ardiansyah', 'X TKJ 2', 49, 16722),
('Ilham Kurnia Putra Prapanca', 'X TKJ 2', 50, 16723),
('Irfan Maulana', 'X TKJ 2', 51, 16724),
('Jehan Arsyad Setyawan', 'X TKJ 2', 52, 16725),
('Meysa Tunggal Kharista', 'X TKJ 2', 53, 16726),
('Miftah Abit Rakhalana', 'X TKJ 2', 54, 16727),
('Muhammad Akmal Rasyid', 'X TKJ 2', 55, 16728),
('Muhammad Faisal', 'X TKJ 2', 56, 16729),
('Muhammad Hafidz Saputra', 'X TKJ 2', 57, 16730),
('Nabila Nur Riyanta', 'X TKJ 2', 58, 16731),
('Nur Dwi Cahyo', 'X TKJ 2', 59, 16732),
('Rahmat Diky Alfianzah', 'X TKJ 2', 60, 16733),
('Rama Putra Linggadiyanto', 'X TKJ 2', 61, 16734),
('Restu Agus Jatmiko', 'X TKJ 2', 62, 16735),
('Rizki Wahyu Nurrahman', 'X TKJ 2', 63, 16736),
('Sandi Bayu Darmawan', 'X TKJ 2', 64, 16737),
('Sinar Ing Jagad', 'X TKJ 2', 65, 16738),
('Tegar Fajar Ramadhan', 'X TKJ 2', 66, 16739),
('Teguh Firmansyah', 'X TKJ 2', 67, 16740),
('Thomas Yuda Setiawan', 'X TKJ 2', 68, 16741),
('Tomi Tabah Swasono', 'X TKJ 2', 69, 16742),
('Wildan Alghifari', 'X TKJ 2', 70, 16743),
('Yulia Ika Pratiwi', 'X TKJ 2', 71, 16744),
('Zolla Andra Pangestu', 'X TKJ 2', 72, 16745),
('Abyan Bergas Irmawan', 'XI TKJ 1', 73, 16100),
('Ahmad Fauzan', 'XI TKJ 1', 74, 16101),
('Amin Novi Tri Kurniati', 'XI TKJ 1', 75, 16102),
('Angel Setya Kasih', 'XI TKJ 1', 76, 16103),
('Aulana Dwi Andrian', 'XI TKJ 1', 77, 16104),
('Devon Alviantoro', 'XI TKJ 1', 78, 16105),
('Faiz Ubaidillah', 'XI TKJ 1', 79, 16106),
('Faiza Nisrina Abiyyah', 'XI TKJ 1', 80, 16107),
('Felix Giovanni', 'XI TKJ 1', 81, 16108),
('Ferdinan Lestiawan', 'XI TKJ 1', 82, 16109),
('Gaza Ghozali Hermawan', 'XI TKJ 1', 83, 16110),
('Hafshah Nurul Azizah', 'XI TKJ 1', 84, 16111),
('Hasta Maulana', 'XI TKJ 1', 85, 16112),
('Ilham Wibi Sahrofi', 'XI TKJ 1', 86, 16113),
('Imam Wahid Ardi Putro', 'XI TKJ 1', 87, 16114),
('Irvan Annassruallah', 'XI TKJ 1', 88, 16115),
('Kori Wulan Rahmadani', 'XI TKJ 1', 89, 16116),
('Luna Sabrina Meisya Asnanta', 'XI TKJ 1', 90, 16117),
('Meylan Extonika Sari', 'XI TKJ 1', 91, 16118),
('Mirza Fahmi Fadhilah', 'XI TKJ 1', 92, 16119),
('Muhammad Gufron Fauzi', 'XI TKJ 1', 93, 16120),
('Muhammad Nur Alfianto', 'XI TKJ 1', 94, 16121),
('Muhammad Nur Luthfi', 'XI TKJ 1', 95, 16122),
('Muhammad Wildan Al Fathoni', 'XI TKJ 1', 96, 16123),
('Mustaqim Kumara Prabhatakala', 'XI TKJ 1', 97, 16124),
('Nugroho Wisnu Murti', 'XI TKJ 1', 98, 16125),
('Pradipa Arka Prasetya', 'XI TKJ 1', 99, 16126),
('Raden Roro Widia Marcha Sasikirana', 'XI TKJ 1', 100, 16127),
('Rafa Adib Prabowo', 'XI TKJ 1', 101, 16128),
('Reihan Ardiansyah', 'XI TKJ 1', 102, 16129),
('Restu Aji Pamukti', 'XI TKJ 1', 103, 16130),
('Rifan Zulfantoro', 'XI TKJ 1', 104, 16131),
('Rizal Ainurohman', 'XI TKJ 1', 105, 16132),
('Yahya Nur Wakhid', 'XI TKJ 1', 106, 16133),
('Zulfidar Ibnu Nardi', 'XI TKJ 1', 107, 16134),
('Agnazaki Alefta Anandian Arafi', 'XI TKJ 2', 108, 16135),
('Aisyah Nur Maya Silviyani', 'XI TKJ 2', 109, 16136),
('Alfian Rahmansyah', 'XI TKJ 2', 110, 16137),
('Ardiansyah Restu Noor Maulana', 'XI TKJ 2', 111, 16138),
('Daffa Wahyu Prayudha', 'XI TKJ 2', 112, 16139),
('Dea Muslikhasari', 'XI TKJ 2', 113, 16140),
('Deni Maryanto', 'XI TKJ 2', 114, 16141),
('Dido Angga Saputra', 'XI TKJ 2', 115, 16143),
('Dony Setyawan', 'XI TKJ 2', 116, 16144),
('Eva Dewi Agustin', 'XI TKJ 2', 117, 16601),
('Fajar Nail Fauzan', 'XI TKJ 2', 118, 16145),
('Faril Syaiful Nur Dzaky', 'XI TKJ 2', 119, 16146),
('Gilang Yudha Prajatma', 'XI TKJ 2', 120, 16147),
('Habib Cahya Buwana', 'XI TKJ 2', 121, 16148),
('Kanaka Najib Imam Bukhary', 'XI TKJ 2', 122, 16149),
('Maulana Arif Hidayat', 'XI TKJ 2', 123, 16150),
('Maulina Mega Putri Lembayung', 'XI TKJ 2', 124, 16151),
('Melanie Prima Rusty', 'XI TKJ 2', 125, 16152),
('Muhammad Bagus Khoirudin', 'XI TKJ 2', 126, 16153),
('Muhammad Daffiq Raffiqan', 'XI TKJ 2', 127, 16154),
('Muhammad Zalfa Nur Alamsyah', 'XI TKJ 2', 128, 16155),
('Muzakki Rizki Ardana', 'XI TKJ 2', 129, 16156),
('Novia Safitri', 'XI TKJ 2', 130, 16157),
('Nursalina Khusnul Urba', 'XI TKJ 2', 131, 16158),
('Patrick Dhimas Esa Yudhistira', 'XI TKJ 2', 132, 16159),
('Paulus Febrian Gagah Wicaksono', 'XI TKJ 2', 133, 16160),
('Putra Adiyan Naufal Adani', 'XI TKJ 2', 134, 16161),
('Raditya Bayu Wirawan', 'XI TKJ 2', 135, 16162),
('Raditya Hevi Ferdiansyah', 'XI TKJ 2', 136, 16163),
('Rafa Alfikri', 'XI TKJ 2', 137, 16164),
('Ramadhan Wahyu Pratama', 'XI TKJ 2', 138, 16165),
('Rizky Fathurrahman Syahdira', 'XI TKJ 2', 139, 16166),
('Sifa Suryani', 'XI TKJ 2', 140, 16167),
('Silvester Ananda Allun Aditya', 'XI TKJ 2', 141, 16168),
('ADAM AQEEL PRIYOJATI', 'XII TKJ 1', 143, 15525),
('ADE KHUDORI RAMADAN', 'XII TKJ 1', 144, 15526),
('AFIF MAULANA IKHSAN', 'XII TKJ 1', 145, 15527),
('AGUS PRASETYO', 'XII TKJ 1', 146, 15528),
('ALLIA RAMADHANI', 'XII TKJ 1', 147, 15529),
('ALOYSIUS DIRGANEO ANDROVEDA FEBIARTO **', 'XII TKJ 1', 148, 15530),
('AMELINDA ALFAT', 'XII TKJ 1', 149, 15531),
('ANGGA ARJUN PRATAMA', 'XII TKJ 1', 150, 15532),
('AZFA SAIFA ROHIM', 'XII TKJ 1', 151, 15533),
('BRIAN AGUNG WIJAYA', 'XII TKJ 1', 152, 15534),
('BUDI SANTOSA', 'XII TKJ 1', 153, 15535),
('CHRISTANTRAYOGA GRAHITO HUTOMO *', 'XII TKJ 1', 154, 15536),
('DANNIEL DWI KARUNIA SAKTI **', 'XII TKJ 1', 155, 15537),
('DONI PRASETYO', 'XII TKJ 1', 156, 15538),
('DWI HANDOKO', 'XII TKJ 1', 157, 15539),
('FARID NUR FATHONI', 'XII TKJ 1', 158, 15540),
('FARID SWARNA SAPUTRA', 'XII TKJ 1', 159, 15541),
('FIRMANSYAH ADJI PURNOMO', 'XII TKJ 1', 160, 15542),
('FUAD KHUSNA', 'XII TKJ 1', 161, 15543),
('GATHOT NANDAR WIRA YUDHA', 'XII TKJ 1', 162, 15544),
('GILANG AL RASYID', 'XII TKJ 1', 163, 15545),
('GINJI FAHRELDI RIFIANSYAH', 'XII TKJ 1', 164, 15546),
('HERMAN YOSEP YOGA PRADANA HORIO BONNE **', 'XII TKJ 1', 165, 15547),
('ICHSAN', 'XII TKJ 1', 166, 15548),
('ILHAM', 'XII TKJ 1', 167, 15549),
('INDRI WIJIARTI', 'XII TKJ 1', 168, 15550),
('ISNANDUNG RIZKY MAGHRIBI SETYA PAMBUDI', 'XII TKJ 1', 169, 15551),
('MUHAMAD NOVAN FAZDILAH AKBAR', 'XII TKJ 1', 170, 15552),
('RIZKI SURYA WIJAYANTA', 'XII TKJ 1', 171, 15553),
('SALSABILA AZZAHRA', 'XII TKJ 1', 172, 15554),
('SHERY ANDHIKA PUTRA', 'XII TKJ 1', 173, 15555),
('SILVESTER RAMAWIJAYA KSATRIA KINASIH **', 'XII TKJ 1', 174, 15556),
('SONY DEWANTARA SUNJAYA *', 'XII TKJ 1', 175, 15557),
('VIRGIAWAN MEGA PUTRANTO', 'XII TKJ 1', 176, 15558),
('YUSUF ALFAHAD', 'XII TKJ 1', 177, 15559),
('ADHITYA CAHYO SETYAWAN', 'XII TKJ 2', 178, 15560),
('ADITIA FAHKRU RIYANTO', 'XII TKJ 2', 179, 15561),
('AHMAD RHIZKI PAMUNGKAS', 'XII TKJ 2', 180, 15562),
('ALFATH RAFA SATRIA', 'XII TKJ 2', 181, 15563),
('DICKY FIRDHA FIRMANSYAH', 'XII TKJ 2', 182, 15564),
('DZULKHA RIZQI AFRIZAL', 'XII TKJ 2', 183, 15565),
('EKA RAFI RAHMAWAN', 'XII TKJ 2', 184, 15566),
('FEBRI ADIMAS ANTON SAPUTRA', 'XII TKJ 2', 185, 15567),
('HAFIDH HADI NAGARI', 'XII TKJ 2', 186, 15568),
('IQBAL SURYA ASTAMA', 'XII TKJ 2', 187, 15569),
('JOHAN EFENDI', 'XII TKJ 2', 188, 15570),
('JOHAN IKHWAN NUR RAHMAT', 'XII TKJ 2', 189, 15571),
('JOHAN MANGLIAWAN', 'XII TKJ 2', 190, 15572),
('KHAIRUL IHZA PRASETYA', 'XII TKJ 2', 191, 15573),
('KHOLIS SYAMSUDIN', 'XII TKJ 2', 192, 15574),
('MAKRIFAT NUR EKA PUTRA', 'XII TKJ 2', 193, 15575),
('MUHAMMAD ALVIN PARAMAYUDHA', 'XII TKJ 2', 194, 15576),
('MUHAMMAD ANDRA PRAMUDIA ANANTO', 'XII TKJ 2', 195, 15577),
('MUHAMMAD ARIF FADHILLAH', 'XII TKJ 2', 196, 15578),
('MUHAMMAD AZID ABDILLAH', 'XII TKJ 2', 197, 15579),
('MUHAMMAD ULUL ALBAB', 'XII TKJ 2', 198, 15580),
('MUHAMMAD WILDAN KHAURYAN', 'XII TKJ 2', 199, 15581),
('MUHAMMAD ZAKY FIRMANSYAH HASIBUAN', 'XII TKJ 2', 200, 15582),
('NUR ARIEF KURNIAWAN', 'XII TKJ 2', 201, 15583),
('OKA KUSUMAYUDHA', 'XII TKJ 2', 202, 15584),
('PIPIN NUR KOSIH', 'XII TKJ 2', 203, 15585),
('RAFLI GILANG RAMADHAN', 'XII TKJ 2', 204, 15586),
('RANGGA KAUTSAR', 'XII TKJ 2', 205, 15587),
('RICKY AURYEL SATRIA PRATAMA', 'XII TKJ 2', 206, 15588),
('RIO LAKSONO', 'XII TKJ 2', 207, 15589),
('SINTA AZZAHROH', 'XII TKJ 2', 208, 15590),
('SUCI SUSILAWATI', 'XII TKJ 2', 209, 15591),
('TEGUH WARASTRO JATI', 'XII TKJ 2', 210, 15592),
('VANESA BELSCHIN CHELSYIFA', 'XII TKJ 2', 211, 15593),
('VIANDARI LUTHFIA RAHMA', 'XII TKJ 2', 212, 15594),
('YUBDA SHAUMA ARIYANTO', 'XII TKJ 2', 213, 15595);

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `Nis` int(5) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`Nis`, `Nama`, `Kelas`, `Alamat`) VALUES
(16602, 'ADITYA DWI NUGROHO', 'X PPLG 1', ''),
(16603, 'AFRIZAL ARNANDYA PUT', 'X PPLG 1', ''),
(16604, 'AJIE WILDAN RIFANI', 'X PPLG 1', ''),
(16605, 'AKMAL OKTAVIAN PRADA', 'X PPLG 1', ''),
(16606, 'ANDIKA JAYA SAPUTRA', 'X PPLG 1', ''),
(16607, 'ANDREAN NUR WAHID', 'X PPLG 1', ''),
(16608, 'AVITO TUNGGA SAHITYA', 'X PPLG 1', ''),
(16609, 'CAHYA DEWI SHOLIKHAH', 'X PPLG 1', ''),
(16610, 'CLAUDIA MARIA FRANSI', 'X PPLG 1', ''),
(16611, 'DEVRIO DWI ANGGORO', 'X PPLG 1', ''),
(16612, 'DINI AVIANTI', 'X PPLG 1', ''),
(16613, 'FAIRUZ ZAKI', 'X PPLG 1', ''),
(16614, 'FAIZ ZAINURI', 'X PPLG 1', ''),
(16615, 'FANI KURNIAWATI', 'X PPLG 1', ''),
(16616, 'FAVIAN ARDIYANTO', 'X PPLG 1', ''),
(16617, 'GILANG JATI NUGRAHA', 'X PPLG 1', ''),
(16618, 'GUSTAF GIRANDA SETYA', 'X PPLG 1', ''),
(16619, 'HARYO DJATI RISNADIA', 'X PPLG 1', ''),
(16620, 'IHDINA WAHYU NURSAFI', 'X PPLG 1', ''),
(16621, 'IRFAN NUGROHO', 'X PPLG 1', ''),
(16622, 'IRSYAD ARSYADUTA', 'X PPLG 1', ''),
(16623, 'JENNY KRISNA PURNAWA', 'X PPLG 1', ''),
(16624, 'KHANIF ROKHAWI', 'X PPLG 1', ''),
(16625, 'MAULANA HERNANDA', 'X PPLG 1', ''),
(16626, 'MIFTAKHUL HASANAH', 'X PPLG 1', ''),
(16627, 'MUHAMMAD ALBAN HUSEI', 'X PPLG 1', ''),
(16628, 'MUHAMMAD EKSA ARIFA', 'X PPLG 1', ''),
(16629, 'MUHAMMAD FARID FADHL', 'X PPLG 1', ''),
(16630, 'MUHAMMAD IKHSAN MORG', 'X PPLG 1', ''),
(16631, 'NAUFAL ZAKY MAYLANDR', 'X PPLG 1', ''),
(16632, 'QAIA ABIYASHA', 'X PPLG 1', ''),
(16633, 'RAFA NAUFAL YUSUF PR', 'X PPLG 1', ''),
(16634, 'RASYID NUGROHO', 'X PPLG 1', ''),
(16635, 'SOFA\' TASTAFTIYAN', 'X PPLG 1', ''),
(16636, 'SOLEH FADIL SABANA', 'X PPLG 1', ''),
(16637, 'SYAHRUL ANDIKA WAHYU', 'X PPLG 1', '');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(44) NOT NULL,
  `visi` varchar(1000) NOT NULL,
  `misi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`) VALUES
(4, 'Mewujudkan Lulusan Teknik Komputer dan Jaringan yang berkualitas,produktif,berkarakter dan berwawasan Global\r\n', '1.Membekali siswa dengan pengetahuan keterampilan dan sikap yang mulia bermartabat dan bertaqwa kepada Tuhan Yang Maha Esa<br>\r\n2.Melatih siswa dengan menyelenggarakan Pendidikan dengan basis kompetisi sesuai dengan kebutuhan industri<br>\r\n3.Menghasilkan Lulusan yang berkompeten, professional');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AdminUserName` (`AdminUserName`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postcatid` (`CategoryId`),
  ADD KEY `postsucatid` (`SubCategoryId`),
  ADD KEY `subadmin` (`postedBy`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`),
  ADD KEY `catid` (`CategoryId`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`Nis`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD CONSTRAINT `pid` FOREIGN KEY (`postId`) REFERENCES `tblposts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD CONSTRAINT `postcatid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `postsucatid` FOREIGN KEY (`SubCategoryId`) REFERENCES `tblsubcategory` (`SubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subadmin` FOREIGN KEY (`postedBy`) REFERENCES `tbladmin` (`AdminUserName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD CONSTRAINT `catid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
