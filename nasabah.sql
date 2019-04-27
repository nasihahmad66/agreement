-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2014 at 11:13 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nasabah`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir1`
--

CREATE TABLE IF NOT EXISTS `formulir1` (
  `Kode_AE` varchar(20) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` int(11) NOT NULL,
  `Bulan_lahir` int(11) NOT NULL,
  `Tahun_lahir` int(11) NOT NULL,
  `Alamat_Rumah` varchar(100) NOT NULL,
  `Kode_Pos` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `No_Identitas` varchar(30) NOT NULL,
  `No_Telp` varchar(12) NOT NULL,
  `Pekerjaan` varchar(20) NOT NULL,
  `Transaksi` varchar(30) NOT NULL,
  `sebutkan` varchar(150) NOT NULL,
  `Jenis_Transaksi` varchar(200) NOT NULL,
  PRIMARY KEY (`Kode_AE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir1`
--

INSERT INTO `formulir1` (`Kode_AE`, `Nama_Lengkap`, `Tempat_Lahir`, `Tanggal_Lahir`, `Bulan_lahir`, `Tahun_lahir`, `Alamat_Rumah`, `Kode_Pos`, `email`, `No_Identitas`, `No_Telp`, `Pekerjaan`, `Transaksi`, `sebutkan`, `Jenis_Transaksi`) VALUES
('12342', 'akjdkwjkdjkj', 'kjkjkkjk', 2, 2, 2012, 'kjkjk', 0, 'go@yahoo.com', 'kj', 'jk', 'jk', 'sudah pernah, sebutkan', 'KJKJKAJKWJDKJKAJWD', 'USD_500_Kontrak_Deritvative_Forex_dan_Loco_London');

-- --------------------------------------------------------

--
-- Table structure for table `formulir2`
--

CREATE TABLE IF NOT EXISTS `formulir2` (
  `Menerima` varchar(10) NOT NULL,
  `Tanggal` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir2`
--

INSERT INTO `formulir2` (`Menerima`, `Tanggal`, `email`) VALUES
('Ya', '10-02-2014', 'go@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir3`
--

CREATE TABLE IF NOT EXISTS `formulir3` (
  `Nama_Lengkap` varchar(150) NOT NULL,
  `Tempat_Lahir` varchar(30) NOT NULL,
  `Tanggal_Lahir` int(11) NOT NULL,
  `Bulan_lahir` int(11) NOT NULL,
  `Tahun_lahir` int(11) NOT NULL,
  `Alamat_Rumah` varchar(100) NOT NULL,
  `Kode_Pos` int(11) NOT NULL,
  `No_Identitas` varchar(50) NOT NULL,
  `No_Demo` varchar(50) NOT NULL,
  `Menerima` varchar(20) NOT NULL,
  `Tanggal` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir3`
--

INSERT INTO `formulir3` (`Nama_Lengkap`, `Tempat_Lahir`, `Tanggal_Lahir`, `Bulan_lahir`, `Tahun_lahir`, `Alamat_Rumah`, `Kode_Pos`, `No_Identitas`, `No_Demo`, `Menerima`, `Tanggal`, `email`) VALUES
('akjdkwjkdjkj', 'kjkjkkjk', 2, 2, 2012, 'kjkjk', 0, 'kj', '9090989', 'Ya', '10-02-2014', 'go@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir4`
--

CREATE TABLE IF NOT EXISTS `formulir4` (
  `Nama_Lengkap` varchar(150) NOT NULL,
  `Tempat_Lahir` varchar(30) NOT NULL,
  `Tanggal_Lahir` int(11) NOT NULL,
  `Bulan_lahir` int(11) NOT NULL,
  `Tahun_lahir` int(11) NOT NULL,
  `Alamat_Rumah` varchar(100) NOT NULL,
  `Kode_Pos` int(11) NOT NULL,
  `No_Identitas` varchar(50) NOT NULL,
  `No_Demo` varchar(50) NOT NULL,
  `Nama_Pialang` varchar(150) NOT NULL,
  `Menerima` varchar(20) NOT NULL,
  `Tanggal` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir4`
--

INSERT INTO `formulir4` (`Nama_Lengkap`, `Tempat_Lahir`, `Tanggal_Lahir`, `Bulan_lahir`, `Tahun_lahir`, `Alamat_Rumah`, `Kode_Pos`, `No_Identitas`, `No_Demo`, `Nama_Pialang`, `Menerima`, `Tanggal`, `email`) VALUES
('akjdkwjkdjkj', 'kjkjkkjk', 2, 2, 2012, 'kjkjk', 0, 'kj', '9090989', 'KIKOKJKJ', 'Ya', '10-02-2014', 'go@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir5`
--

CREATE TABLE IF NOT EXISTS `formulir5` (
  `Kode_Nasabah` varchar(50) NOT NULL,
  `Nama_Lengkap` varchar(150) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_Lahir` int(11) NOT NULL,
  `Bulan_lahir` int(11) NOT NULL,
  `Tahun_lahir` int(11) NOT NULL,
  `No_Identitas` varchar(50) NOT NULL,
  `No_NPWP` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Namaistrisuami` varchar(50) NOT NULL,
  `Nama_Ibu_Kandung` varchar(50) NOT NULL,
  `Status_Perkawinan` varchar(20) NOT NULL,
  `Alamat_Rumah` varchar(50) NOT NULL,
  `kde_Pos` int(11) NOT NULL,
  `No_telp` varchar(20) NOT NULL,
  `No_fax` varchar(20) NOT NULL,
  `Notelphp` varchar(20) NOT NULL,
  `Status_Rumah` varchar(20) NOT NULL,
  `lainnyaSR` varchar(50) NOT NULL,
  `Tujuan_Rekening` varchar(50) NOT NULL,
  `lainnyaTR` varchar(50) NOT NULL,
  `Pengalaman_Investasi` varchar(50) NOT NULL,
  `bidanginv` varchar(50) NOT NULL,
  `Anggota_Keluarga` varchar(20) NOT NULL,
  `namaAK` varchar(50) NOT NULL,
  `Pailit_Pengadilan` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Kod_pos` int(11) NOT NULL,
  `no_tl` varchar(20) NOT NULL,
  `Hubungan` varchar(50) NOT NULL,
  `Pekerjaan` varchar(20) NOT NULL,
  `lainnyaPKJ` varchar(30) NOT NULL,
  `Nama_Perusahaan` varchar(100) NOT NULL,
  `Bidang_Usaha` varchar(100) NOT NULL,
  `Jabatan` varchar(100) NOT NULL,
  `Lama_Bekerja` int(11) NOT NULL,
  `Kantor_Sebelum` varchar(100) NOT NULL,
  `Alamat_Kantor` varchar(50) NOT NULL,
  `Kd_Pos` int(11) NOT NULL,
  `No_Tlp` varchar(15) NOT NULL,
  `no_fx` varchar(25) NOT NULL,
  `Penghasilan_Tahun` varchar(50) NOT NULL,
  `Rumah_Lokasi` varchar(50) NOT NULL,
  `Nilai_NJOP` varchar(50) NOT NULL,
  `Deposit_Bank` varchar(150) NOT NULL,
  `Jumlah` varchar(150) NOT NULL,
  `Lainnya` varchar(150) NOT NULL,
  `nam_Bank` varchar(50) NOT NULL,
  `Cabang` varchar(50) NOT NULL,
  `Noac` varchar(100) NOT NULL,
  `No_tel` varchar(20) NOT NULL,
  `Jenis_Rekening` varchar(50) NOT NULL,
  `lainnyaJR1` varchar(50) NOT NULL,
  `Nama_bank` varchar(50) NOT NULL,
  `caban` varchar(50) NOT NULL,
  `No_AC` varchar(100) NOT NULL,
  `NoTlp` varchar(20) NOT NULL,
  `Jns_Rekening` varchar(50) NOT NULL,
  `lainnyaJR2` varchar(150) NOT NULL,
  `Rekening_Tagihan` longblob,
  `Rekening_Telp` longblob,
  `Tambah_1` longblob,
  `Tambah_2` longblob,
  `Foto_Kini` longblob,
  `Foto_KTP` longblob,
  `Menerima` varchar(20) NOT NULL,
  `Tanggal` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir5`
--

INSERT INTO `formulir5` (`Kode_Nasabah`, `Nama_Lengkap`, `Tempat_lahir`, `Tanggal_Lahir`, `Bulan_lahir`, `Tahun_lahir`, `No_Identitas`, `No_NPWP`, `Jenis_Kelamin`, `Namaistrisuami`, `Nama_Ibu_Kandung`, `Status_Perkawinan`, `Alamat_Rumah`, `kde_Pos`, `No_telp`, `No_fax`, `Notelphp`, `Status_Rumah`, `lainnyaSR`, `Tujuan_Rekening`, `lainnyaTR`, `Pengalaman_Investasi`, `bidanginv`, `Anggota_Keluarga`, `namaAK`, `Pailit_Pengadilan`, `Nama`, `Alamat`, `Kod_pos`, `no_tl`, `Hubungan`, `Pekerjaan`, `lainnyaPKJ`, `Nama_Perusahaan`, `Bidang_Usaha`, `Jabatan`, `Lama_Bekerja`, `Kantor_Sebelum`, `Alamat_Kantor`, `Kd_Pos`, `No_Tlp`, `no_fx`, `Penghasilan_Tahun`, `Rumah_Lokasi`, `Nilai_NJOP`, `Deposit_Bank`, `Jumlah`, `Lainnya`, `nam_Bank`, `Cabang`, `Noac`, `No_tel`, `Jenis_Rekening`, `lainnyaJR1`, `Nama_bank`, `caban`, `No_AC`, `NoTlp`, `Jns_Rekening`, `lainnyaJR2`, `Rekening_Tagihan`, `Rekening_Telp`, `Tambah_1`, `Tambah_2`, `Foto_Kini`, `Foto_KTP`, `Menerima`, `Tanggal`, `email`) VALUES
('', 'akjdkwjkdjkj', 'kjkjkkjk', 2, 2, 2012, 'kj', 'kjakjdkjwkd', 'Laki-Laki', 'kajdkjakwjdk', 'jkjkjwkdw', 'Kawin', 'kkjkajkwjdkjkjkk', 0, 'kjkj', 'kj', 'jk', '', 'KJKJKJKKJK', '', 'KKJKJKJ', 'Ya, Bidang', 'KJKJKDAJWKD', 'Ya,', 'KAJDKJKAJKJDKSJIDJAW', 'Ya', 'KJKAJDKJKWJKJ', 'kkjkajkwjdkjkjkk', 0, 'jkjkjkj', 'kjkjk', '', 'kjkjkjkjkjkjk', 'kkjkjkjkjk', 'jkjkjkj', 'kjkjkjkj', 10, '8', 'kajkjdkjwkajdkwjk', 0, 'kjkwjdkjkwj', 'kjk', 'Antara 250-500 juta', 'kjkjkkjk', 'jkjkjkjk', 'jkjkjkkjk', 'jkjj', 'kkk', 'jkjkjkjkk', 'jkjk', 'jkjkjk', 'jkjkjkj', '', 'kjkjjk', 'jkjkjkj', 'kk', 'jk', 'jk', '', 'kjkjkjkjkkjkjkjkj', 0x67616d6261722f696d616765732e6a7067, 0x67616d6261722f50414b2e6a7067, 0x67616d6261722f7374617a206b616d6568616d6568612e6a7067, 0x67616d6261722f686b2e6a7067, 0x67616d6261722f7374617a2e706e67, 0x67616d6261722f42726f7375722e6a7067, 'Ya', '10-02-2014', 'go@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir6_1`
--

CREATE TABLE IF NOT EXISTS `formulir6_1` (
  `1_1` varchar(50) NOT NULL,
  `1_2` varchar(50) NOT NULL,
  `1_3` varchar(50) NOT NULL,
  `1_4` varchar(50) NOT NULL,
  `1_5` varchar(50) NOT NULL,
  `1_6` varchar(50) NOT NULL,
  `1_7` varchar(50) NOT NULL,
  `1_8` varchar(50) NOT NULL,
  `1_9` varchar(50) NOT NULL,
  `1_10` varchar(50) NOT NULL,
  `1_11` varchar(50) NOT NULL,
  `1_12` varchar(50) NOT NULL,
  `1_13` varchar(50) NOT NULL,
  `1_14` varchar(50) NOT NULL,
  `1_15` varchar(50) NOT NULL,
  `1_16` varchar(50) NOT NULL,
  `Menerima` varchar(10) NOT NULL,
  `Tanggal` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formulir6_2`
--

CREATE TABLE IF NOT EXISTS `formulir6_2` (
  `1_1` varchar(50) NOT NULL,
  `1_2` varchar(50) NOT NULL,
  `1_3` varchar(50) NOT NULL,
  `1_4` varchar(50) NOT NULL,
  `1_5` varchar(50) NOT NULL,
  `1_6` varchar(50) NOT NULL,
  `1_7` varchar(50) NOT NULL,
  `1_8` varchar(50) NOT NULL,
  `1_9` varchar(50) NOT NULL,
  `1_10` varchar(50) NOT NULL,
  `1_11` varchar(50) NOT NULL,
  `1_12` varchar(50) NOT NULL,
  `1_13` varchar(50) NOT NULL,
  `1_14` varchar(50) NOT NULL,
  `1_15` varchar(50) NOT NULL,
  `Menerima` varchar(10) NOT NULL,
  `Tanggal` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir6_2`
--

INSERT INTO `formulir6_2` (`1_1`, `1_2`, `1_3`, `1_4`, `1_5`, `1_6`, `1_7`, `1_8`, `1_9`, `1_10`, `1_11`, `1_12`, `1_13`, `1_14`, `1_15`, `Menerima`, `Tanggal`, `email`) VALUES
('saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'Ya', '10-02-2014', 'go@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir7_1`
--

CREATE TABLE IF NOT EXISTS `formulir7_1` (
  `hari1` varchar(10) NOT NULL,
  `tanggal1` int(11) NOT NULL,
  `bulan1` varchar(20) NOT NULL,
  `tahun1` int(11) NOT NULL,
  `nama1` varchar(30) NOT NULL,
  `pekerjaan1` varchar(20) NOT NULL,
  `alamat1` varchar(50) NOT NULL,
  `1_1` varchar(50) NOT NULL,
  `1_2` varchar(50) NOT NULL,
  `2_1` varchar(50) NOT NULL,
  `2_2` varchar(50) NOT NULL,
  `2_3` varchar(50) NOT NULL,
  `2_4` varchar(50) NOT NULL,
  `3_1` varchar(50) NOT NULL,
  `3_2` varchar(50) NOT NULL,
  `3_3` varchar(50) NOT NULL,
  `4_1` varchar(50) NOT NULL,
  `4_2` varchar(50) NOT NULL,
  `4_3` varchar(50) NOT NULL,
  `4_4` varchar(50) NOT NULL,
  `4_5` varchar(50) NOT NULL,
  `5` varchar(50) NOT NULL,
  `6` varchar(50) NOT NULL,
  `7` varchar(50) NOT NULL,
  `8` varchar(50) NOT NULL,
  `9_1` varchar(50) NOT NULL,
  `9_2` varchar(50) NOT NULL,
  `9_3` varchar(50) NOT NULL,
  `10_1` varchar(50) NOT NULL,
  `10_2` varchar(50) NOT NULL,
  `11` varchar(50) NOT NULL,
  `12` varchar(50) NOT NULL,
  `13_1` varchar(50) NOT NULL,
  `13_2` varchar(50) NOT NULL,
  `13_3` varchar(50) NOT NULL,
  `13_4` varchar(50) NOT NULL,
  `13_5` varchar(50) NOT NULL,
  `14` varchar(50) NOT NULL,
  `15` varchar(50) NOT NULL,
  `16` varchar(50) NOT NULL,
  `17` varchar(50) NOT NULL,
  `18_1` varchar(50) NOT NULL,
  `18_2` varchar(50) NOT NULL,
  `18_3` varchar(50) NOT NULL,
  `19` varchar(50) NOT NULL,
  `20_1` varchar(50) NOT NULL,
  `20_2` varchar(50) NOT NULL,
  `20_3` varchar(50) NOT NULL,
  `21_1` varchar(50) NOT NULL,
  `21_2` varchar(50) NOT NULL,
  `21_3` varchar(50) NOT NULL,
  `21_4` varchar(50) NOT NULL,
  `22` varchar(50) NOT NULL,
  `23` varchar(50) NOT NULL,
  `24_1` varchar(50) NOT NULL,
  `24_2` varchar(50) NOT NULL,
  `24_3melalui` varchar(50) NOT NULL,
  `lainnya` varchar(20) NOT NULL,
  `s24_4daftar_kantor` varchar(50) NOT NULL,
  `25` varchar(50) NOT NULL,
  `menerima` varchar(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formulir7_2`
--

CREATE TABLE IF NOT EXISTS `formulir7_2` (
  `hari1` varchar(20) NOT NULL,
  `tanggal1` int(11) NOT NULL,
  `bulan1` varchar(20) NOT NULL,
  `tahun1` int(11) NOT NULL,
  `nama1` varchar(30) NOT NULL,
  `pekerjaan1` varchar(20) NOT NULL,
  `alamat1` varchar(50) NOT NULL,
  `1_1` varchar(50) NOT NULL,
  `1_2` varchar(50) NOT NULL,
  `2_1` varchar(50) NOT NULL,
  `2_2` varchar(50) NOT NULL,
  `2_3` varchar(50) NOT NULL,
  `3_1` varchar(50) NOT NULL,
  `3_2` varchar(50) NOT NULL,
  `3_3` varchar(50) NOT NULL,
  `3_4` varchar(50) NOT NULL,
  `3_5` varchar(50) NOT NULL,
  `4` varchar(50) NOT NULL,
  `5` varchar(50) NOT NULL,
  `6` varchar(50) NOT NULL,
  `7_1` varchar(50) NOT NULL,
  `7_2` varchar(50) NOT NULL,
  `7_3` varchar(50) NOT NULL,
  `8_1` varchar(50) NOT NULL,
  `8_2` varchar(50) NOT NULL,
  `9` varchar(50) NOT NULL,
  `10` varchar(50) NOT NULL,
  `11_1` varchar(50) NOT NULL,
  `11_2` varchar(50) NOT NULL,
  `11_3` varchar(50) NOT NULL,
  `11_4` varchar(50) NOT NULL,
  `11_5` varchar(50) NOT NULL,
  `12` varchar(50) NOT NULL,
  `13` varchar(50) NOT NULL,
  `14` varchar(50) NOT NULL,
  `15` varchar(50) NOT NULL,
  `16_1` varchar(50) NOT NULL,
  `16_2` varchar(50) NOT NULL,
  `16_3` varchar(50) NOT NULL,
  `17` varchar(50) NOT NULL,
  `18_1` varchar(50) NOT NULL,
  `18_2` varchar(50) NOT NULL,
  `18_3` varchar(50) NOT NULL,
  `19_1` varchar(50) NOT NULL,
  `19_2` varchar(50) NOT NULL,
  `19_3` varchar(50) NOT NULL,
  `19_4` varchar(50) NOT NULL,
  `20` varchar(50) NOT NULL,
  `21` varchar(50) NOT NULL,
  `22_1` varchar(50) NOT NULL,
  `22_2` varchar(50) NOT NULL,
  `22_3melalui` varchar(100) NOT NULL,
  `lainnya` varchar(30) NOT NULL,
  `22_4` varchar(50) NOT NULL,
  `23` varchar(50) NOT NULL,
  `menerima` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir7_2`
--

INSERT INTO `formulir7_2` (`hari1`, `tanggal1`, `bulan1`, `tahun1`, `nama1`, `pekerjaan1`, `alamat1`, `1_1`, `1_2`, `2_1`, `2_2`, `2_3`, `3_1`, `3_2`, `3_3`, `3_4`, `3_5`, `4`, `5`, `6`, `7_1`, `7_2`, `7_3`, `8_1`, `8_2`, `9`, `10`, `11_1`, `11_2`, `11_3`, `11_4`, `11_5`, `12`, `13`, `14`, `15`, `16_1`, `16_2`, `16_3`, `17`, `18_1`, `18_2`, `18_3`, `19_1`, `19_2`, `19_3`, `19_4`, `20`, `21`, `22_1`, `22_2`, `22_3melalui`, `lainnya`, `22_4`, `23`, `menerima`, `tanggal`, `email`) VALUES
('Senin', 10, 'Februari', 2014, 'akjdkwjkdjkj', 'jk', 'kjkjk', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'saya sudah membaca dan memahami', 'Pengadilan Negeri', 'llmalkwdlkalkdowdw', 'Jakarta Barat', 'saya sudah membaca dan memahami', 'Ya', '10-02-2014', 'go@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir8_2`
--

CREATE TABLE IF NOT EXISTS `formulir8_2` (
  `Menerima` varchar(5) NOT NULL,
  `Tanggal` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir8_2`
--

INSERT INTO `formulir8_2` (`Menerima`, `Tanggal`, `email`) VALUES
('Ya', '10-02-2014', 'go@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir8_3`
--

CREATE TABLE IF NOT EXISTS `formulir8_3` (
  `Menerima` varchar(5) NOT NULL,
  `Tanggal` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formulir8_4`
--

CREATE TABLE IF NOT EXISTS `formulir8_4` (
  `Menerima` varchar(5) NOT NULL,
  `Tanggal` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formulir8_5`
--

CREATE TABLE IF NOT EXISTS `formulir8_5` (
  `Menerima` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `Tanggal` varchar(30) CHARACTER SET armscii8 NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir8_5`
--

INSERT INTO `formulir8_5` (`Menerima`, `Tanggal`, `email`) VALUES
('Ya', '07-02-2014', 'aaaa@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir8_7`
--

CREATE TABLE IF NOT EXISTS `formulir8_7` (
  `Menerima` varchar(10) NOT NULL,
  `Tanggal` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
