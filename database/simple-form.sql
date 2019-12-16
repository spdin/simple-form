-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 04:37 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple-form`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_qm`
--

CREATE TABLE `data_qm` (
  `id` int(11) NOT NULL,
  `majelis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_qm`
--

INSERT INTO `data_qm` (`id`, `majelis`) VALUES
(1, 'Balikpapan-Tarakan'),
(2, 'Bandung Tengah'),
(3, 'Bangka'),
(4, 'Banjaran-Arjasari-Pinggirsari-Pangalengan'),
(5, 'Banjar-Ciamis-Banjarsari'),
(6, 'Banjarmasin'),
(7, 'Baros'),
(8, 'Batam'),
(9, 'Batang-Gemuh'),
(10, 'Batujajar'),
(11, 'Batusangkar-Bukit Tinggi-Ujung Gading-Payakumbuh'),
(12, 'Bau-bau-Pasar Wajo'),
(13, 'Bawang-Bawang Utara-Banjarnegara-Klampok'),
(14, 'Bekasi'),
(15, 'Belawan-Hinai-Tanjungpura'),
(16, 'Belitung'),
(17, 'Bengkulu-Lubuk Linggau'),
(18, 'Bogor'),
(19, 'Bojongsirna'),
(20, 'Bontang-Berau'),
(21, 'Brastagi-Kabanjahe'),
(22, 'Bunijaya'),
(23, 'Burnai Mulya-Pematang Jaya'),
(24, 'Ciandam-Cikalong Kulon'),
(25, 'Cianjur'),
(26, 'Cibatu-Sukawening-Malangbong'),
(27, 'Cibinong-Citeureup-Cileungsi'),
(28, 'Cibitung Wetan-Karyasari-Leuwisadeng'),
(29, 'Cicakra'),
(30, 'Cicalengka-Majalaya-Sukatali'),
(31, 'Cigunungtilu'),
(32, 'Ciherang'),
(33, 'Cikampek'),
(34, 'Cikarang Utara'),
(35, 'Ciledug'),
(36, 'Cilegon-Merak'),
(37, 'Cimahi-Padalarang'),
(38, 'Ciparay'),
(39, 'Cipeuyeum-Bunikasih'),
(40, 'Cirebon'),
(41, 'Cisalada-Ciaruteun'),
(42, 'Cisarua-Lembang'),
(43, 'Cisitu-Ranca Umbul-Agrabinta-Kebon Kopi'),
(44, 'Citalahab-Waluran'),
(45, 'Citeguh'),
(46, 'Datar Kupa'),
(47, 'Denpasar'),
(48, 'Depok'),
(49, 'Garut-Nyalindung-Sanding'),
(50, 'Gedangan-Taman'),
(51, 'Gondrong'),
(53, 'Gunung Kerinci'),
(54, 'Gunung Muria-Gabus-Ngaringan-Panawangan'),
(55, 'Indramayu'),
(56, 'Jakarta Pusat'),
(57, 'Jakarta Timur'),
(58, 'Jakarta Utara'),
(59, 'Jambi'),
(60, 'Jeneponto-Bulukumba-Takalar'),
(61, 'Kampung Anam-Bengkayang-Andeng'),
(62, 'Karawang-Bojong'),
(63, 'Kawalu-Sukapura'),
(64, 'Kebayoran'),
(65, 'Kemang'),
(66, 'Kendari'),
(67, 'Kersamaju'),
(68, 'Konarom-Gorontalo'),
(69, 'Konda-Masagena-Morosi-Tinanggea'),
(70, 'Koronua-Kondoano-Ladongi-Landono-Tete Singi'),
(71, 'Kosinggolan'),
(72, 'Kota Bangun'),
(73, 'Kota Merauke'),
(74, 'Kotamobagu'),
(75, 'Kualuh Hilir-Tanjung Balai-Bangun Baru'),
(76, 'Kunto Darussalam-Pasir Pangairan-Batulangka'),
(77, 'Kurik Merauke'),
(78, 'Lampung-Abung Selatan'),
(79, 'Lamunti-Pangkoh III'),
(80, 'Lebaksari'),
(81, 'Lengkong-Bendungan-Wonosari-Jawaran'),
(82, 'Lenteng Agung'),
(83, 'Madiun-Plosoklaten-Puncu-Kediri-Nganjuk-Magetan'),
(84, 'Makassar-Gowa'),
(85, 'Manado'),
(86, 'Mandau Kulin'),
(87, 'Manislor 1 (An-Nur, Al-Hidayah, At-Taqwa, Baiturrahman, Kuningan)'),
(88, 'Manislor 2 (Al-Hikmah, Al-Masroor)'),
(89, 'Manislor 3 (Al-Jihad)'),
(90, 'Manislor 4 (Al-Barokah, Al-Ikhsan)'),
(91, 'Mataram'),
(92, 'Medan-LhokSeumawe'),
(93, 'Nagrak'),
(94, 'Namorambe-Tanjung Morawa'),
(95, 'Neglasari'),
(96, 'Numbing'),
(97, 'Padang-Pampangan-Duku'),
(98, 'Pagelaran-Pringsewu'),
(99, 'Pagentan'),
(100, 'Palaihari'),
(101, 'Palangkaraya'),
(102, 'Palembang-Bayung Lincir'),
(103, 'Palu-Sigi Biromaru'),
(104, 'Pamatang Bandar-Bah Damar'),
(105, 'Pancor'),
(106, 'Paninggilan'),
(107, 'Panjalu-Cisaat-Karang Tengah'),
(108, 'Panunggangan Pusat'),
(109, 'Panunggangan Timur'),
(110, 'Panyairan'),
(111, 'Parakansalak'),
(112, 'Pasar Minggu'),
(113, 'Pasar Muara Bungo'),
(114, 'Pekanbaru-Perawang-Pangkalan Krinci-Tuah Karya'),
(115, 'Penyabangan-Singaraja'),
(116, 'Perigi'),
(117, 'Pontianak'),
(118, 'Praya'),
(119, 'Purwokerto-Purwokerto Utara-Kedung Banteng-Sumbang'),
(120, 'Rangkasbitung-Cisereh'),
(121, 'Rengat-Kateman'),
(122, 'Sadasari-Majalengka'),
(123, 'Samarang'),
(124, 'Samarinda-Melak-Mook Manaar'),
(125, 'Sampit-Tanggul Harapan'),
(127, 'Sebamban'),
(128, 'Semarang'),
(129, 'Serang'),
(130, 'Serua'),
(131, 'Bakauheni-Sidomulyo-Sidorahayu'),
(132, 'Simpang Kanan'),
(133, 'Sindangbarang'),
(134, 'Singaparna-Mayangcinde'),
(135, 'Singkut-Sungai Merah'),
(136, 'Sintang-Penyelimau Jaya-Balaigana'),
(137, 'Solo'),
(138, 'Solok Selatan'),
(139, 'Soreang'),
(140, 'Maniis-Purwakarta'),
(141, 'Sukabumi'),
(142, 'Sukamaju'),
(143, 'Sukasari'),
(144, 'Surabaya-Benowo-Gresik'),
(145, 'Susukan-Salatiga-Getasan-Magelang-Temanggung'),
(146, 'Talaga-Warga Asih-Sindangkerta'),
(147, 'Talang-Lurah Ingu'),
(148, 'Tambun'),
(149, 'Tanah Grogot'),
(150, 'Tanah Putih'),
(151, 'Tangerang-Kampung Kramat-Pasir Semut'),
(153, 'Tasikmalaya-Indihiang'),
(154, 'Tawangmangu'),
(155, 'Tebing Tinggi-Paya Pasir-Lima Puluh'),
(156, 'Wanasigra'),
(157, 'Wanasigra Wetan'),
(158, 'Warung Mangga'),
(159, 'Warungkiara-Cikembar'),
(160, 'Wonosobo-Kebumen-Gombong-Wadas Lintang'),
(161, 'Yogyakarta-Piyungan-Gunung Kidul-Sleman'),
(162, 'Pulau Buru'),
(163, 'Jengkol-Madukara'),
(164, 'Tegal-Brebes'),
(165, 'Bandung Wetan-Bandung Kidul'),
(166, 'Bandung Kulon'),
(167, 'Sungai Rangau'),
(168, 'Jakarta Barat'),
(169, 'Malang-Bangil-Jember'),
(170, 'Pagedangan'),
(171, 'Subang'),
(172, 'Cimayang-Cibeureum'),
(173, 'Karangpawitan'),
(174, 'Tanjung Pinang'),
(175, 'Manokwari'),
(176, 'Talang Padang'),
(177, 'Jati-Lahat'),
(178, 'Ambon'),
(179, 'Sekarmulya-Cikedung'),
(180, 'Rawapitu-Menggala'),
(181, 'Ikatan Saudara-Budijaya');

-- --------------------------------------------------------

--
-- Table structure for table `list_pejanji`
--

CREATE TABLE `list_pejanji` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `nama` varchar(100) NOT NULL,
  `noaims` varchar(7) NOT NULL,
  `id_majelis` varchar(3) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_qm`
--
ALTER TABLE `data_qm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_pejanji`
--
ALTER TABLE `list_pejanji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_pejanji`
--
ALTER TABLE `list_pejanji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
