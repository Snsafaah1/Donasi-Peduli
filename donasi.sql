-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 15.12
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `nama`) VALUES
(1, 'admin', 'admin@peduli.com', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `campaign`
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
-- Dumping data untuk tabel `campaign`
--

INSERT INTO `campaign` (`id_campaign`, `id_user`, `id_kategori`, `batas_waktu`, `judul`, `pekerjaan`, `medsos`, `alasan_penggalangan`, `tempat_tinggal`, `kondisi_terkini`, `instansi`, `profil_diri`, `penerima_manfaat`, `ajakan_singkat`, `foto`, `nomor_hp`, `status`, `tanggal_buat`) VALUES
(4, 6, 1, '2021-05-25 00:00:00', 'ak', 'ak', '', 'ak', 'k', 'ak', 'ak', 'k', 'ak', 'ak', '156944703_2639142909668597_7624897998029448836_n.jpg', 987987, 'Proses Verifikasi', '2021-05-21 21:54:46'),
(5, 6, 1, '2021-05-31 00:00:00', 'hb', 'khkjh', '', 'jkkj', 'kjjk', 'kjkj', 'kjjk', 'jkjkkj', 'jnjk', 'bkjbk', 'GATE VALVE 14INCH 20K.jpg', 897987, 'Diterima', '2021-05-28 21:54:46'),
(6, 6, 1, '2021-05-31 20:39:39', 'khbuhuhouhoih', 'jkjk', '', 'kjb', 'kjnkjn', 'jnjln', 'jnjkn', 'jknjk', 'kjnjkn', 'kjkjbkjb', 'GATE VALVE CF8M 600LB RF new.png', 987987, 'Diterima', '2021-05-28 21:54:46'),
(7, 6, 1, '2021-05-31 00:00:00', 'lj', 'juoij', '', 'jhkjnkjn', 'iojoij', 'ihioh', 'iojioj', 'ijoi', 'oihoih', 'kjkj', 'valve3.jpg', 2147483647, 'Ditolak', '2021-05-29 00:40:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
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
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `id_campaign`, `id_user`, `nominal`, `pesan`, `status`, `tanggal_buat`) VALUES
(3, 4, 6, 989898, 'jhjhj', 'Proses Konfirmasi', '2021-05-28 21:37:55'),
(4, 4, 6, 70000, 'uhuh', 'Belum Transfer', '2021-05-28 21:37:55'),
(5, 4, 6, 70000, 'uhuh', 'Belum Transfer', '2021-05-28 21:37:55'),
(6, 4, 6, 8787, 'jhjh', 'Belum Transfer', '2021-05-28 21:37:55'),
(7, 4, 6, 87989, 'jkhkj', 'Ditolak', '2021-05-28 21:37:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Kemanusiaan'),
(2, 'Bencana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_donasi` int(225) NOT NULL,
  `bukti` varchar(225) NOT NULL,
  `atas_nama` varchar(225) NOT NULL,
  `tanggal_buat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_donasi`, `bukti`, `atas_nama`, `tanggal_buat`) VALUES
(1, 7, '156944703_2639142909668597_7624897998029448836_n.jpg', 'erik', '2021-05-28 21:37:26'),
(2, 3, 'GATE VALVE 14INCH 300.jpg', 'erik', '2021-05-28 22:00:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `email`, `nama`, `telepon`, `jenis_kelamin`, `alamat`) VALUES
(1, 'admin123', 'admin@peduli.com', 'halooo', 883983, 'l', 'surabaya'),
(2, 'kljlkj', 'jllj', 'tryuioop', 0, '', ''),
(3, 'hiuhiuh', 'ouhouh', 'ijhuhuoh', 0, '', ''),
(4, 'hiuhiuh', 'ouhouhkj', 'ijhuhuoh', 0, '', ''),
(5, 'alya123', 'alya@gmail.com', 'alyaa', 809, 'l', 'surabaya'),
(6, 'a', 'a', 'alya choirum', 879879893, 'p', 'surabayaaa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id_campaign`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`password`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id_campaign` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
