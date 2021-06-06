-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 02:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `nama`) VALUES
(1, 'admin', 'admin@peduli.com', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id_campaign` int(11) NOT NULL,
  `id_user` int(225) NOT NULL,
  `id_kategori` int(225) NOT NULL,
  `batas_waktu` datetime NOT NULL,
  `judul` varchar(225) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `medsos` varchar(225) NOT NULL,
  `alasan_penggalangan` varchar(225) NOT NULL,
  `tempat_tinggal` varchar(225) NOT NULL,
  `kondisi_terkini` varchar(225) NOT NULL,
  `instansi` varchar(225) NOT NULL,
  `profil_diri` varchar(225) NOT NULL,
  `penerima_manfaat` varchar(225) NOT NULL,
  `ajakan_singkat` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nomor_hp` int(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `tanggal_buat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id_campaign`, `id_user`, `id_kategori`, `batas_waktu`, `judul`, `pekerjaan`, `medsos`, `alasan_penggalangan`, `tempat_tinggal`, `kondisi_terkini`, `instansi`, `profil_diri`, `penerima_manfaat`, `ajakan_singkat`, `foto`, `nomor_hp`, `status`, `tanggal_buat`) VALUES
(4, 6, 1, '2021-05-25 00:00:00', 'ak', 'ak', '', 'ak', 'k', 'ak', 'ak', 'k', 'ak', 'ak', '156944703_2639142909668597_7624897998029448836_n.jpg', 987987, 'Diterima', '2021-05-21 21:54:46'),
(5, 6, 1, '2021-05-31 00:00:00', 'hb', 'khkjh', '', 'jkkj', 'kjjk', 'kjkj', 'kjjk', 'jkjkkj', 'jnjk', 'bkjbk', 'GATE VALVE 14INCH 20K.jpg', 897987, 'Diterima', '2021-05-28 21:54:46'),
(6, 6, 1, '2021-05-31 20:39:39', 'khbuhuhouhoih', 'jkjk', '', 'kjb', 'kjnkjn', 'jnjln', 'jnjkn', 'jknjk', 'kjnjkn', 'kjkjbkjb', 'GATE VALVE CF8M 600LB RF new.png', 987987, 'Diterima', '2021-05-28 21:54:46'),
(7, 6, 1, '2021-05-31 00:00:00', 'lj', 'juoij', '', 'jhkjnkjn', 'iojoij', 'ihioh', 'iojioj', 'ijoi', 'oihoih', 'kjkj', 'valve3.jpg', 2147483647, 'Ditolak', '2021-05-29 00:40:21'),
(8, 7, 1, '2021-06-17 00:00:00', 'xxxxxxxxxxxx', 'petani', '', 'xxxxxxxxxxxxxx', 'bjgkjjjbkjknsksq', 'xxxxxxxxxxxxxxxx', 'ksxqnb', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'SB_MATH_AMA_RV_X-1536x864.jpg', 2147483647, 'proses', '2021-06-04 19:34:09'),
(9, 7, 1, '2021-07-10 00:00:00', 'Membantu Korban Gaza', 'Mahasiswa', '', 'Untuk membantu warga Gaza dalam memenuhi kebutuhan serta membantu dalam pengobatan', 'Jalan Salak Kemendung Sidodadi', 'Banyak korban mengalami serangan dari zionis', 'Universitas Negeri Surabaya', 'Mahasiswa Sistem Informasi Semester 4', 'Warga Gaza Palestina', 'mari bantu saudara kita di gaza! satu sen bantuan teman teman sangat membantu', '1642196970.jpg', 2147483647, 'Diterima', '2021-06-05 15:23:40'),
(10, 9, 1, '2021-06-16 00:00:00', 'Membantu Banjir Jakarta', 'Beauty Vloger', '', 'membantu warga jakarta', 'Jakarta', 'Banjir 20 meter', 'tidak ada', 'Beauty Vloger Zaman Now', 'Warga Jakarta', 'mari berdonasi', '1001795_720.jpg', 2147483647, 'DIterima', '2021-06-05 15:32:06'),
(11, 10, 1, '2021-07-07 00:00:00', 'Gempa Malang', 'Pengusaha', '', 'membantu warga kota malang ', 'Medan', 'Malang terkena gempa 6.2 Magnitudo', 'PT. Maju Jaya', 'pengusaha sukses', 'Warga Kota Malang', 'mari berdonasi', '1013519_720.jpg', 2147483647, 'Diterima', '2021-06-05 15:46:52'),
(12, 12, 1, '2021-06-24 00:00:00', 'membantu korban bencana', 'Mahasiswa', '', 'untuk membantu pengobatan ', 'Jalan Salak Kemendung Sidodadi', 'terkena tsunami aceh', 'unesa', 'mahasiswa semester 4', 'bapak widodo', 'mari berdonasi bersama', '1001795_720.jpg', 2147483647, 'Diterima', '2021-06-06 15:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `id_campaign` int(225) NOT NULL,
  `id_user` int(225) NOT NULL,
  `nominal` int(225) NOT NULL,
  `pesan` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `tanggal_buat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `id_campaign`, `id_user`, `nominal`, `pesan`, `status`, `tanggal_buat`) VALUES
(3, 4, 6, 989898, 'jhjhj', 'Diterima', '2021-05-28 21:37:55'),
(4, 4, 6, 70000, 'uhuh', 'Belum Transfer', '2021-05-28 21:37:55'),
(5, 4, 6, 70000, 'uhuh', 'Belum Transfer', '2021-05-28 21:37:55'),
(6, 4, 6, 8787, 'jhjh', 'Belum Transfer', '2021-05-28 21:37:55'),
(7, 4, 6, 87989, 'jkhkj', 'Ditolak', '2021-05-28 21:37:55'),
(11, 7, 7, 10000, 'xxxxxxxxxxxxxxxxxx', 'Diterima', '2021-06-04 19:35:12'),
(12, 9, 9, 1000000, 'semoga bisa membantu', 'Diterima', '2021-06-05 15:33:44'),
(13, 11, 12, 10000, 'membantu', 'Diterima', '2021-06-06 14:31:39'),
(14, 11, 13, 20000, 'semoga bermanfaat', 'Proses Konfirmasi', '2021-06-06 14:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Kemanusiaan'),
(2, 'Bencana');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_donasi` int(225) NOT NULL,
  `bukti` varchar(225) NOT NULL,
  `atas_nama` varchar(225) NOT NULL,
  `tanggal_buat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_donasi`, `bukti`, `atas_nama`, `tanggal_buat`) VALUES
(1, 7, '156944703_2639142909668597_7624897998029448836_n.jpg', 'erik', '2021-05-28 21:37:26'),
(2, 3, 'GATE VALVE 14INCH 300.jpg', 'erik', '2021-05-28 22:00:54'),
(3, 11, 'siklus pengolahan data.jpg', 'xxxxxxx', '2021-06-04 19:35:32'),
(4, 12, 'GATE VALVE CF8M 600LB RF new.png', 'Tasya Farasya', '2021-06-05 15:34:04'),
(5, 13, '1001795_720.jpg', 'Ajeng ratna', '2021-06-06 14:32:04'),
(6, 14, '1001795_720.jpg', 'Ratna Sari', '2021-06-06 14:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `telepon` int(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `email`, `nama`, `telepon`, `jenis_kelamin`, `alamat`) VALUES
(1, 'admin123', 'admin@peduli.com', 'halooo', 883983, 'l', 'surabaya'),
(2, 'kljlkj', 'jllj', 'tryuioop', 0, '', ''),
(3, 'hiuhiuh', 'ouhouh', 'ijhuhuoh', 0, '', ''),
(4, 'hiuhiuh', 'ouhouhkj', 'ijhuhuoh', 0, '', ''),
(5, 'alya123', 'alya@gmail.com', 'alyaa', 809, 'l', 'surabaya'),
(6, 'a', 'a', 'alya choirum', 879879893, 'p', 'surabayaaa'),
(7, 'lizah', 'lizah@gmail.com', 'lizah', 2147483647, '', 'Jalan Salak Kemendung sidodadi '),
(8, 'alya123', 'alyachoirum@gmail.com', 'Alya Choirum', 0, '', ''),
(9, 'tasya', 'tasyafarasya@gmail.com', 'Tasya Farasya', 2147483647, '', 'Jalan Salak Kemendung sidodadi '),
(10, 'fatimah123', 'fatimah@gmail.com', 'Fatimah Azzahra', 0, '', ''),
(11, 'rahma123', 'rahma@gmail.com', 'Rahmawati', 878676587, 'p', 'surabaya'),
(12, 'ajeng123', 'ajeng@gmail.com', 'Ajeng ratna', 0, '', ''),
(13, 'ratna123', 'ratna@gmail.com', 'Ratna Sari', 2147483647, 'p', 'Jalan Salak Kemendung sidodadi ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id_campaign`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id_campaign` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
