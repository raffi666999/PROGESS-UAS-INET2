-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `angkatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `nim`, `jabatan`, `angkatan`) VALUES
(13, 'Nadya Azizah', '19041001', 'Komandan', '5'),
(14, 'Anir', '22041132', 'Wakil Komandan', '6'),
(15, 'Rahmat Aditya', '19041122', 'Bendahara', '5');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `gambar`, `judul`, `isi`) VALUES
(1, 'latdas.jpg', 'Kegiatan Latihan Dasar 120 Jam', 'Foto Saat Pelatihan Dasar 120 Jam Di Lapangan'),
(2, 'latgab.png', 'Kegiatan Latihan Gabungan', 'Foto Saat Latihan Gabungan Perti Se Kalimantan Selatan'),
(11, 'latdas.jpg', 'TINYMCE', '<p><em><strong>TEST</strong></em></p>');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `nama`, `nim`, `tanggal`, `ket`) VALUES
(9, 'Uciha Madara', '19041111', '2023-01-08', 'Sakit Kepala'),
(10, 'Saitama', '19041120', '2023-01-09', 'Sakit Gigi'),
(11, 'Raffi', '19041140', '2023-01-27', 'sakit kepala');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `Pertanyaan_1` varchar(50) DEFAULT NULL,
  `Pertanyaan_2` varchar(50) DEFAULT NULL,
  `Pertanyaan_3` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `pendaftar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `Pertanyaan_1`, `Pertanyaan_2`, `Pertanyaan_3`, `status`, `pendaftar_id`) VALUES
(7, 'rizal', 'roy', 'agi', 1, 9),
(8, 'abc', 'asd', '123', 1, 11),
(9, '12121', '1231', '1231', 2, 15),
(10, 'sada', 'asdsa', 'asdsa', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kegunaan` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama`, `kegunaan`, `stok`) VALUES
(0, 'Bodrex', 'Sakit Kepala', 3),
(0, 'BETADINE', 'obat luka', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tmpt_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `nrp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `email`, `telepon`, `foto`, `users_id`, `nrp`) VALUES
(6, '', '', '1970-01-01', '', '', '', '', '', '', 14, ''),
(7, 'raffi', 'banjarmasin', '2022-12-30', 'L', 'islam', 'gfghhg', 'mroyrizqym@gmail.com', '08213213131', '', 15, ''),
(9, 'Raffi', 'Banjarmasin', '2022-12-20', 'L', 'islam', 'jl.benua anyar', 'raffi@gmail.com', '012311431', 'Raffi.jpg', 17, ''),
(10, 'Muhammad Raffi Arsyad', 'Banjarmasin', '2000-01-30', '', 'islam', 'Banjarmasin', 'raffi123@gmail.com', '12345678910', '', 18, ''),
(11, 'Raffi1', 'banjarmasin', '2023-01-30', 'L', 'islam', 'banua nayar', 'mraffi400@gmail.com', '12104104', '', 19, ''),
(12, 'Raffi', 'Banjarmasin', '2023-01-15', 'L', 'islam', 'INDONESIA', 'raffi1234@gmail.com', '08123456789', '', 20, ''),
(13, 'Raffi', 'Banjarmasin', '2023-01-23', 'L', 'islam', 'AMERIKA SERIKAT', 'raffi0@gmail.com', '', '', 21, ''),
(14, 'Raffi', 'Banjarmasin', '2023-01-15', 'L', 'islam', 'waasd', 'rrq1@gmail.com', '123441', '', 22, ''),
(15, 'Raffi', 'Banjarmasin', '2023-01-02', 'L', 'islam', 'gp', 'raffi12@gmail.com', '1411515', '', 23, '19041140'),
(16, 'Roy', 'Kota Baru', '2023-01-03', 'L', 'kristen', 'KANDANGAN', 'roy1@gmail.com', '123456789', '', 24, '19041140'),
(17, 'Raffi', 'Banjarmasin', '2000-01-30', 'L', 'islam', 'Banjarmasin', 'raffi11@gmail.com', '08123456789', '', 25, '19041140');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(8, 'Administrator', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(14, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'siswa'),
(15, 'raffi', 'mroyrizqym@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'siswa'),
(17, 'Raffi', 'raffi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'siswa'),
(18, 'Muhammad Raffi Arsyad', 'raffi123@gmail.com', '409eb95609b0871803ca5aeb16f0987f', 'siswa'),
(19, 'Raffi1', 'mraffi400@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(20, 'Raffi', 'raffi1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(21, 'Raffi', 'raffi0@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(22, 'Raffi', 'rrq1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(23, 'Raffi', 'raffi12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(24, 'Roy', 'roy1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa'),
(25, 'Raffi', 'raffi11@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nilai_pendaftar1_idx` (`pendaftar_id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_pendaftar_users_idx` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_nilai_pendaftar1` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `fk_pendaftar_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
