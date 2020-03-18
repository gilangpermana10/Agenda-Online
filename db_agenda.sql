-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 10:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nm_siswa` varchar(35) NOT NULL,
  `nm_kelas` varchar(50) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `jumlah_hadir` int(10) NOT NULL,
  `jumlah_tidak_hadir` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absen`
--

INSERT INTO `tb_absen` (`id_absen`, `nis`, `nm_siswa`, `nm_kelas`, `keterangan`, `tanggal`, `id_kelas`, `jumlah_hadir`, `jumlah_tidak_hadir`) VALUES
(100001, 11718007, 'gilang permana', 'XII RPL', 'sakit', '2019-10-17', 0, 0, 0),
(100002, 11718008, 'helmia agustina', 'XII RPL', '-', '2019-10-17', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_user` int(15) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `nm_kelas` varchar(50) NOT NULL,
  `id_mapel` int(15) NOT NULL,
  `nm_mapel` varchar(50) NOT NULL,
  `jam_ke` int(10) NOT NULL,
  `materi_ajar` varchar(100) NOT NULL,
  `penugasan` varchar(100) NOT NULL,
  `id_guru` int(15) NOT NULL,
  `nm_guru` varchar(35) NOT NULL,
  `tanggal` date NOT NULL,
  `id_agenda` int(15) NOT NULL,
  `jam_terisi` int(5) NOT NULL,
  `jam_kosong` int(5) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `id_wali_kelas` int(15) NOT NULL,
  `nm_wali_kelas` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_user`, `id_kelas`, `nm_kelas`, `id_mapel`, `nm_mapel`, `jam_ke`, `materi_ajar`, `penugasan`, `id_guru`, `nm_guru`, `tanggal`, `id_agenda`, `jam_terisi`, `jam_kosong`, `keterangan`, `id_wali_kelas`, `nm_wali_kelas`) VALUES
(17311, 170301, 'XII Rekayasa Perangkat Lunak', 12345, 'pai', 2, 'bab nikah', 'harus nikah', 1414, 'tia wahyuni', '2020-02-08', 1, 2, 5, 'hjg', 1234, 'jodoh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(15) NOT NULL,
  `nm_guru` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nm_guru`) VALUES
(1001, 'Rizal Pangestu Bujang M.Kom'),
(1002, 'Asep Budiyansah S.Hum., M.Pd'),
(1003, 'Tia Mutiari  S.Kom'),
(1004, 'Suherlan S.Kom'),
(1005, 'Munawar Holil S.Pd.i'),
(1006, 'Asep Suherman S.E'),
(1007, 'Madlin Supahman S.Pd'),
(1008, 'Diniah Ulpa S.Pd'),
(1009, 'Moh Muzayyin M.S.i');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `nm_kelas` varchar(50) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `id_user` int(15) NOT NULL,
  `jumlah_siswa` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`nm_kelas`, `id_kelas`, `gambar`, `id_user`, `jumlah_siswa`) VALUES
('X 3 Bisnis Daring Pemasaran ', 190104, 'img/gambar/X BDP 3.png', 0, 0),
('X 2 Bisnis Daring Pemasaran ', 190103, 'img/gambar/X BDP 2.png', 0, 0),
('X Rekayasa Perangkat Lunak', 190301, 'img/gambar/X RPL.png', 0, 0),
('X 1 Bisnis Daring Pemasaran ', 190102, 'img/gambar/X BDP 1.png', 0, 0),
('X 1 Otomatisasi Tata Kelola Perkantoran', 190205, 'img/gambar/X OTKP 1.png', 0, 0),
('X 2 Otomatisasi Tata Kelola Perkantoran', 100206, 'img/gambar/X OTKP 2.png', 0, 0),
('X 3 Otomatisasi Tata Kelola Perkantoran', 190207, 'img/gambar/X OTKP 3.png', 0, 0),
('XI Rekayasa Perangkat Lunak', 180301, 'img/gambar/XI RPL.png', 0, 0),
('XI 1 Bisnis Daring Pemasaran', 180102, 'img/gambar/XI BDP 1.png', 0, 0),
('XI 2 Bisnis Daring Pemasaran', 180103, 'img/gambar/XI BDP 2.png', 0, 0),
('XI 3 Bisnis Daring Pemasaran', 180104, 'img/gambar/XI BDP 3.png', 0, 0),
('XI 1 Otomatisasi Tata Kelola Perkantoran', 180205, 'img/gambar/XI OTKP 1.png', 0, 0),
('XI 2 Otomatisasi Tata Kelola Perkantoran', 180206, 'img/gambar/XI OTKP 2.png', 0, 0),
('XII Rekayasa Perangkat Lunak (reapel07)', 123111, '5e70e0eebc4d9.png', 17311, 41),
('XII 1 Bisnis Daring Pemasaran', 170102, 'img/gambar/XII BDP 1.png', 0, 0),
('XII 2 Bisnis Daring Pemasaran', 170103, 'img/gambar/XII BDP 2.png', 17123, 30),
('XII 1 Otomatisasi Tata Kelola Perkantoran', 170204, 'img/gambar/XII OTKP 1.png', 12111, 0),
('XII 2 Otomatisasi Tata Kelola Perkantoran', 170205, 'img/gambar/XII OTKP 2.png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(15) NOT NULL,
  `nm_mapel` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nm_mapel`) VALUES
(10001, 'PAI'),
(10002, 'Bahasa Indonesia'),
(10003, 'Bahasa Inggris'),
(10004, 'Pendidikan Pancasila dan Kewarganegaraan'),
(10005, 'Matematika'),
(10006, 'Pendidikan Jasmani Olahraga dan Kesehatan'),
(11301, 'Pemrograman Berorientasi Objek'),
(11302, 'Pemodelan Perangkat Lunak'),
(11303, 'Basis Data'),
(11304, 'Pemrograman Web dan Perangkat Bergerak'),
(11305, 'Fisika'),
(11306, 'Jaringan Komputer'),
(11307, 'Sistem Komputer'),
(11308, 'Dasar Desain Grafis'),
(11309, 'Pemrograman Dasar'),
(12001, 'Prakarya dan Kewirausahaan'),
(12002, 'Teknologi Informasi dan Komunikasi'),
(12003, 'Pendidikan Budaya dan Karakter Bangsa'),
(12004, 'Bahasa Sunda'),
(12005, 'Pendidikan Lingkungan Hidup'),
(12006, 'Sejarah Indonesia'),
(12007, 'Simulasi dan Komunikasi Digital'),
(12008, 'Seni Budaya dan Keterampilan'),
(12009, 'Baca Tulis Al-Quran'),
(12010, 'Persatuan Umat Islam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(15) NOT NULL,
  `nm_siswa` varchar(35) NOT NULL,
  `Jenis_kelamin` varchar(50) NOT NULL,
  `Tempat_lahir` varchar(35) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Alamat` varchar(35) NOT NULL,
  `No_tlp` int(15) NOT NULL,
  `id_kelas` int(15) NOT NULL,
  `jurusan` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nm_siswa`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Alamat`, `No_tlp`, `id_kelas`, `jurusan`) VALUES
(11718008, 'Helmia Agustina', '', '0', '0000-00-00', '', 0, 170301, ''),
(11718001, 'Alvin dela', 'Laki-laki', 'sukabumi', '2020-03-16', 'kp. ciangrit', 2147483647, 170301, ''),
(11718002, 'Dimas Dion', '', '0', '0000-00-00', '', 0, 170301, ''),
(11718033, 'Tia Wahyuni', '', '0', '0000-00-00', 'Kp. Jambatan Hideung', 0, 170301, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `Username` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL COMMENT 'Password',
  `rule` varchar(15) NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tabel login';

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`Username`, `password`, `rule`, `id_user`) VALUES
('12345', '54321', 'admin', 17311),
('12346', '64321', 'siswa', 17123),
('gilanghyper27@gmail.com', 'hypersport', 'wali kelas', 11718009),
('Tia', '1407', 'kepala sekolah', 140701);

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali_kelas`
--

CREATE TABLE `tb_wali_kelas` (
  `id_wali_kelas` int(15) NOT NULL,
  `nm_wali_kelas` varchar(35) NOT NULL,
  `kelas` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wali_kelas`
--

INSERT INTO `tb_wali_kelas` (`id_wali_kelas`, `nm_wali_kelas`, `kelas`) VALUES
(1, 'Rizal Pangestu Bujang', 'X Rekayasa Perangkat Lunak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `id` (`id_agenda`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `nm_kelas` (`nm_kelas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
