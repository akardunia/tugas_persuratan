-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 11:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup_surat_keluar`
--

CREATE TABLE `backup_surat_keluar` (
  `no_surat` varchar(20) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kepada` varchar(80) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `pembuat` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL,
  `file` varchar(40) DEFAULT NULL,
  `nomor` int(5) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup_surat_keluar`
--

INSERT INTO `backup_surat_keluar` (`no_surat`, `tgl_surat`, `tgl_update`, `kepada`, `alamat`, `perihal`, `pembuat`, `keterangan`, `file`, `nomor`, `tahun`) VALUES
('0005/UN27.50/HM/2017', '2017-04-17', '2018-04-04 07:02:26', 'Kepala dinas tanjung jabung', 'Kepala dinas tanjung jabung', 'Kepala dinas tanjung jabung', 'STAFF ADMIN', 'Jawaban kunjungan', 'db6415ea5e7a7ab70344154b98c83219.pdf', 5, 2017),
('001/UN27.50/TU/2017', '2017-01-03', '2018-04-04 07:02:26', 'Luxsee Meirvin Dan Bagus Iksan Sukoco', 'Luxsee Meirvin Dan Bagus Iksan Sukoco', 'UNS', 'Amiruddin Romadhoni', '-', 'eb95082e975194245b329d3365d1cce4.pdf', 1, 2017),
('001a/UN27.50/TU/2017', '2017-01-24', '2018-04-04 07:02:26', 'Hotel Sahid Jaya Solo', 'Solo', 'Surat Pesanan/Permohonan', 'STAFF ADMIN', 'Surat Pesanan/Permohonan', '67c466c904249cfd83cb62b1a78f2546.pdf', 1, 2017),
('002/UN27.50/TU/2017', '2017-01-12', '2018-04-04 07:02:26', 'Pembantu Satker UNS', '-', 'Berita Acara Stok Opname Barang Persediaan', 'Amiruddin Romadhoni', '-', '96b882f7aaf074278412a4458b778506.pdf', 2, 2017),
('003/UN 27.50/TU/2017', '2017-05-31', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'UNS', 'Berita Acara Stok Opname Barang Persediaan', 'STAFF ADMIN', 'Berita Acara Stok Opname Barang Persediaan', '2c78dafe8a664d8856aced1467d26384.pdf', 3, 2017),
('0036/UN27.50/TU/2017', '2017-05-31', '2018-04-04 07:02:26', 'Mahasiswa', 'Madiun', 'Surat Keterangan Masih Kuliah', 'STAFF ADMIN', 'Surat Keterangan Masih Kuliah', '8d2579d1a3429eb6c3523f708769060c.pdf', 36, 2017),
('004/UN27.50/HM/2017', '2017-04-17', '2018-04-04 07:02:26', 'INKA', 'INKA', 'Madiun', 'STAFF ADMIN', 'Pengajuan kelas khusus', '742eaf641aa6b7ead96fc1ec026f5ea4.pdf', 4, 2017),
('0043/UN27.50/TU/2017', '2017-05-05', '2018-04-04 07:02:26', 'Bagian BMN UNS ', 'UNS', 'Berita Acara Rekon BMN UNS', 'STAFF ADMIN', 'Berita Acara Rekon BMN UNS', '3f5509b520bcd0cf068f4cc6bda8171a.pdf', 43, 2017),
('0044/UN27.50/TU/2017', '2017-05-05', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'UNS', 'Berita Acara Rekon BMN Internal UNS ', 'STAFF ADMIN', 'Berita Acara Rekon BMN Internal UNS ', '04560a1e976519f852b76efed6b257e9.pdf', 44, 2017),
('0047/UN27.50/TU/2017', '2017-06-01', '2018-04-04 07:02:26', 'Instansi', 'Madiun', 'Surat Keterangan', 'STAFF ADMIN', 'Surat Keterangan', '3cd46ba5dbad4d801fb03caa0fe2ac92.pdf', 47, 2017),
('0048/UN27.50/TU/2017', '2017-05-31', '2018-04-04 07:02:26', 'Instansi', 'Madiun', 'Surat Keterangan Jarak Tempuh', 'STAFF ADMIN', 'Surat Keterangan Jarak Tempuh', '7c799cbaa0fdc1231f9757c01257aefe.pdf', 49, 2017),
('0049/UN27.50/TU/2017', '2017-05-31', '2018-04-04 07:02:26', 'dosen', 'madiun', 'undangan', 'STAFF ADMIN', 'undangan', 'fdc2d51fda3bd7e215063c5fa2054691.pdf', 49, 2017),
('0053/UN27.50/TU/2017', '2017-05-31', '2018-04-04 07:02:26', 'UNS', '-', 'Menyiapkan Program Kegiatan Kerja sama', 'STAFF ADMIN', 'Surat Tugas', 'de2f1a6a4bee4b784e825bfa8736c195.pdf', 53, 2017),
('0056/UN27.50/TU/2018', '2018-04-04', '2018-04-04 07:04:18', 'erter', 'ertert', 'erterter', 'Pendekar Mouse', 'ertert', '7574a617b28403abd95457ae168ef6a9.pdf', 56, 2018),
('006/UN27.50/TU/2017', '2017-02-01', '2018-04-04 07:02:26', 'KSP Shakti Bahtera Masyarakat', 'KSP Shakti Bahtera Masyarakat', 'KSP Shakti Bahtera Masyarakat', 'Amiruddin Romadhoni', '-', '23ac38914137b0a790e8400b1ba327d9.pdf', 6, 2017),
('007/UN27.50/TU/2017', '2017-02-07', '2018-04-04 07:02:26', 'Pendeta', 'Pendeta', 'Pendeta', 'Amiruddin Romadhoni', '-', 'b8f77ce43f55420364cadf8d5e5089df.pdf', 7, 2017),
('008/UN27.50/TU/2017', '2017-02-09', '2018-04-04 07:02:26', 'Kepala Biro APSI', 'Kepala Biro APSI', 'Kepala Biro APSI', 'Amiruddin Romadhoni', 'UNS', 'f5f03781bcf74f83fd2cf67eec59e524.pdf', 8, 2017),
('009/UN27.50/TU/2017', '2017-02-09', '2018-04-04 07:02:26', 'Surat Tugas', 'Surat Tugas', 'Surat Tugas', 'STAFF ADMIN', 'Surat Tugas Konsultasi Keuangan', '4b64fc7cca686bc5dcc6e85b78fa9535.pdf', 9, 2017),
('010/UN27.50/TU/2017', '2017-02-09', '2018-04-04 07:02:26', 'Pimpinan KSP Shakti Bahter Masyarakat', 'Pimpinan KSP Shakti Bahter Masyarakat', 'Pimpinan KSP Shakti Bahter Masyarakat', 'STAFF ADMIN', '-', '88c98788fc0bfb4d50cb629d822c1a74.pdf', 10, 2017),
('010a/UN27.50/TU/2017', '2017-02-14', '2018-04-04 07:02:26', 'UNS', 'Solo', 'Surat Tugas Konsultasi Keuangan', 'STAFF ADMIN', 'Surat Tugas Konsultasi Keuangan', '6023bea65e4e18b6de524d9e37cc5fcb.pdf', 10, 2017),
('012/UN27.50/TU/2017', '2017-02-14', '2018-04-04 07:02:26', 'Ketua Seleksi SPMB UNS', 'Ketua Seleksi SPMB UNS', 'Ketua Seleksi SPMB UNS', 'STAFF ADMIN', 'UNS', '309583d072cfd3c22a9881524e5d7653.pdf', 10, 2017),
('012a/UN27.50/TU/2017', '2017-02-14', '2018-04-04 07:02:26', 'Hotel Sahid Jaya Solo', 'Solo', 'Serah Terima Pekerjaan', 'STAFF ADMIN', 'Serah Terima Pekerjaan', 'e936c6a49cdc9f595f8df1838843aa33.pdf', 12, 2017),
('013/UN27.50/TU/2017', '2017-02-17', '2018-04-04 07:02:26', 'Surat Tugas', 'Surat Tugas', 'Surat Tugas', 'STAFF ADMIN', 'Surat Tugas ', 'd1fb983c07b8bdfdc79da5878e74b9e5.pdf', 13, 2017),
('015.a/UN27.50/TU/201', '2017-02-27', '2018-04-04 07:02:26', 'Surat Tugas', 'Surat Tugas', 'Surat Tugas', 'STAFF ADMIN', 'Surat Tugas ', '8855c945061ae80b61fc6dfa8a810cb8.pdf', 15, 2017),
('015/UN 27.50/TU/2017', '2017-02-13', '2018-04-04 07:02:26', 'UNS', 'UNS', 'SK SPMB', 'STAFF ADMIN', 'SK SPMB', '3add82edcf9b4e4f8c2e1c9edf93f68b.pdf', 15, 2017),
('019/UN27.50/TU/2017', '2017-03-06', '2018-04-04 07:02:26', 'Surat Tugas Ke Kopi dan Kakao Jember', 'Surat Tugas Ke Kopi dan Kakao Jember', 'Surat Tugas Ke Kopi dan Kakao Jember', 'STAFF ADMIN', '-', '2b97a6d95d8ac71bfa26b4bab5c05ffd.pdf', 19, 2017),
('020/UN27.50/TU/2017', '2017-03-10', '2018-04-04 07:02:26', 'Bupati Madiun', 'Bupati Madiun', 'Bupati Madiun', 'STAFF ADMIN', '-', 'b62cc88cdb7e4f24550eee7ef8e13dcf.pdf', 20, 2017),
('021/UN27.50/TU/2017', '2017-03-10', '2018-04-04 07:02:26', 'Surat Keterangan ', 'Surat Keterangan ', 'Surat Keterangan ', 'STAFF ADMIN', '-', '4fda12409546b19b4b2883504e465ba3.pdf', 21, 2017),
('022/UN27.50/TU/2017', '2017-03-17', '2018-04-04 07:02:26', 'Ketua Ngudi Utomo', 'Ketua Ngudi Utomo', 'Ketua Ngudi Utomo', 'STAFF ADMIN', '-', '64f7c29af5e00f38a58dd0f66aadf875.pdf', 22, 2017),
('023/UN 27.50/TU/2017', '2017-05-04', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'Solo', 'BA Serah Terima Barang', 'STAFF ADMIN', 'BA Serah Terima Barang', '281b043fbb42bf1fbf2ed7bcb51a4df6.pdf', 23, 2017),
('023a/UN 27.50/TU/201', '2017-05-04', '2018-04-04 07:02:26', 'UNS', 'UNS', 'Surat Tugas Konsultasi Akademik', 'STAFF ADMIN', 'Surat Tugas Konsultasi Akademik', '380e7e95465bccd7a2bfc4cc1861ab9a.pdf', 23, 2017),
('024/UN27.50/TU/2017', '2017-05-04', '2018-04-04 07:02:26', 'UNS', 'UNS', 'Surat izin Belajar', 'STAFF ADMIN', 'Surat izin Belajar', '5bae7586f75d5a82bdf7c862bbae1a5b.pdf', 24, 2017),
('024a/UN 27.50/TU/201', '2017-05-04', '2018-04-04 07:02:26', 'UNS', 'UNS', 'Surat Tugas Konsultasi Keuangan', 'STAFF ADMIN', 'Surat Tugas Konsultasi Keuangan', '254841237d72b9497f5700fbd92e5e97.pdf', 24, 2017),
('025/UN 27.50/TU/2017', '2017-05-04', '2018-04-04 07:02:26', 'SMA/SMK', 'Madiun', 'Permohonan Rekomendasi Beasiswa', 'STAFF ADMIN', 'Permohonan Rekomendasi Beasiswa', 'a97893d8cd3f4176d2b3f5355f6984da.pdf', 25, 2017),
('026/UN27.50/TU/2017', '2017-04-05', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'UNS', 'Berita Acara Rekon BMN Internal UNS', 'STAFF ADMIN', 'Berita Acara Rekon Internal BMN ', '8eebf08bf06587bfcef1449a34c85a34.pdf', 26, 2017),
('027/UN27.50/TU/2017', '2017-04-05', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'UNS', 'Berita Acara Rekon Internal BMN', 'STAFF ADMIN', 'Berita Acara Rekon Internal BMN', '7344b33d7bbf56f27c7a7c247adc6650.pdf', 27, 2017),
('028/UN27.50/TU/2017', '2017-04-05', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'Bagian BMN UNS', 'UNS', 'STAFF ADMIN', 'Berita Acara Rekon Internal BMN', '7344b33d7bbf56f27c7a7c247adc6650.pdf', 28, 2017),
('029/UN27.50/TU/2017', '2017-04-05', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'UNS', 'Berita Acara Rekon Internal BMN', 'STAFF ADMIN', 'Berita Acara Rekon Internal BMN', '1bc1ee700ce4a296cbc33b24786f8f1e.pdf', 29, 2017),
('029a/UN 27.50/KM/201', '2018-04-02', '2018-04-04 07:02:26', 'Polsek', 'Madiun', 'Ijin Penggalangan Dana', 'STAFF ADMIN', 'Ijin Penggalangan Dana', '87f71f23f031e491f54c0a5fa7f45c6f.pdf', 29, 2017),
('030/UN27.50/KP/2017', '2017-04-18', '2018-04-04 07:02:26', 'SEKRETARIS DAERAH KABUPATEN MADIUN', 'SEKRETARIS DAERAH KABUPATEN MADIUN', 'SEKRETARIS DAERAH KABUPATEN MADIUN', 'HERU SETIYAWAN', 'Permohonan Usulan Keputusan Tim Pelaksana Teknis, Dosen Pengampu, dan Asisten Dosen PDD UNS Madiun\r\n', 'a6d8032b6e1af0c40fda6ff910a4a256.pdf', 30, 2017),
('030/UN27.50/TU/2017', '2017-04-05', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'UNS', 'Berita Acara Rekon Internal BMN', 'STAFF ADMIN', 'Berita acara rekon internal BMN', '804a4b50e2dfd8ccee42a2e121f4ed2e.pdf', 30, 2017),
('031/UN27.50/TU/2017', '2017-04-05', '2018-04-04 07:02:26', 'Bagian BMN UNS', 'UNS', 'Berita Acara Rekon Internal BMN', 'STAFF ADMIN', 'Berita Acara Rekon Internal BMN ', 'ca3d681ab2e679114e9afffdcb09e066.pdf', 31, 2017),
('031a/UN27.50/TU/2017', '2018-04-02', '2018-04-04 07:02:26', 'Ekasari', 'Madiun', 'Permohonan Survey Lapangan', 'STAFF ADMIN', 'Permohonan Survey Lapangan', 'ab3febfba55bcd1046807faaec334cb1.pdf', 31, 2017),
('033/UN27.50/KM/2017', '2018-04-02', '2018-04-04 07:02:26', 'UNS', 'UNS', 'Surat Permohonan', 'STAFF ADMIN', 'Surat Permohonan', '7abd4a81b32faef02a29243cf55ec877.pdf', 33, 2017),
('034/UN27.50/AK/2017', '2018-04-02', '2018-04-04 07:02:26', 'UNS', 'UNS', 'Permohonan Dana Talangan', 'STAFF ADMIN', 'Permohonan Dana Talangan', '33a63e8ccb55420dca52eee7592d55be.pdf', 34, 2017),
('035/UN27.50/TU/2017', '2018-04-02', '2018-04-04 07:02:26', 'Mahasiswa Baru', 'Madiun', 'Penerimaan Mahasiswa Baru', 'STAFF ADMIN', 'Penerimaan Mahasiswa Baru', '8fcb234bf2cb4b1f8fd1b6f6f725e709.pdf', 35, 2017),
('037/UN27.50/KM/2017', '2018-04-02', '2018-04-04 07:02:26', 'Orang tua Mahasiswa', 'Madiun', 'Surat Izin', 'STAFF ADMIN', 'Surat Izin', '5b772d8a215df2bbafe59f59a71901b5.pdf', 37, 2017),
('038/UN27.50/KM/2017', '2018-04-02', '2018-04-04 07:02:26', 'Instansi', 'Madiun', 'Dispensasi', 'STAFF ADMIN', 'Dispensasi', 'ad3e9b72012411ae559d553ce6f16dad.pdf', 38, 2017),
('039/UN27.50/KM/2017', '2018-04-02', '2018-04-04 07:02:26', 'Pemateri LDK', 'Madiun', 'Undangan', 'STAFF ADMIN', 'Undangan', '5ba00837a0ce3f454dc51e5bc95961f1.pdf', 39, 2017),
('040/UN27.50/TU/2017', '2018-04-02', '2018-04-04 07:02:26', 'UNS', 'UNS', 'SK Pengurus BEM', 'STAFF ADMIN', 'SK Pengurus BEM', '81600c0d17d595510c98cd983403717c.pdf', 40, 2017),
('041/UN27.50/KS/2017', '2017-05-04', '2018-04-04 07:02:26', 'Direktur Akademi Komunitas Negeri Bengkalis', 'Bengkalis', 'Permohonan Studi Banding ', 'STAFF ADMIN', 'Permohonan Studi Banding ', 'e01689c82496634b5af01c1985502792.pdf', 41, 2017),
('046/UN27.50/ TU /201', '2017-05-10', '2018-04-04 07:02:26', 'Wakil Rektor Universitas Sebelas Maret', 'UNS', 'Permohonan SPPD ', 'STAFF ADMIN', 'Permohonan SPPD ', '16a675788afdaa26fac851cb62c05944.pdf', 46, 2017),
('047/UN27.50/TU/2017', '2017-05-17', '2018-04-04 07:02:26', 'Surat Keterangan', '-', 'Surat Keterangan Masih Kuliah', 'STAFF ADMIN', 'surat keterangan masik aktif mengikuti perkuliahan', '85a8158edf778b0c57a425174c19f960.pdf', 47, 2017),
('048/UN27.50/TU/2017', '2017-05-17', '2018-04-04 07:02:26', 'Surat Keterangan', '-', 'Surat Keterangan Masih Kuliah', 'STAFF ADMIN', 'surat keterangan masik aktif mengikuti perkuliahan', '85c7bfaf05b4deaee935d0077258b48a.pdf', 48, 2017),
('049/UN27.50/TU/2017', '0000-00-00', '2018-04-04 07:02:26', 'Bpk/Ibu Dosen', '-', 'Rapat Koordinasi dan Buka Bersama', 'STAFF ADMIN', 'Rapat ', '5520610ef90e283616df72ba151fa285.pdf', 49, 2017),
('049a/UN27.50/TU/2017', '0000-00-00', '2018-04-04 07:02:26', 'Surat Tugas', '-', 'Surat Tugas Koordinasi Keuangan', 'STAFF ADMIN', 'Surat Tugas Bu Tanjung', '7d0717f1ca30d292436f9258962b3a94.pdf', 49, 2017),
('050/UN27.50/TU/2017', '0000-00-00', '2018-04-04 07:02:26', 'UNS', '-', 'Berita Acara Rekonsiliasi Internal', 'STAFF ADMIN', 'Berita Acara', '76506e01c4b0ee87281d73859f5a7050.pdf', 50, 2017),
('051/UN27.50/TU/2017', '0000-00-00', '2018-04-04 07:02:26', 'UNS', '-', 'Berita Acara Rekonsiliasi Internal', 'STAFF ADMIN', 'Berita Acara', '7c542a951b1a9bea7e8bad95107a0138.pdf', 51, 2017),
('052/UN27.50/TU/2017', '0000-00-00', '2018-04-04 07:02:26', 'UNS', '-', 'Berita Acara Rekonsiliasi Internal', 'STAFF ADMIN', 'Berita ', '3b3e3c3dd1a516352fbfeb2cf5c48e79.pdf', 52, 2017),
('055/UN.27.50/TU/17', '2017-09-06', '2018-04-04 07:02:26', 'BUPATI MADIUN', 'BUPATI MADIUN', 'Cq. Kepala BPKAD Kab, Madiun', 'HERU SETIYAWAN', 'Permohonan Mobil Dinas Operasional', '77355c952ca59a421cfbe7304535f726.pdf', 55, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `backup_surat_masuk`
--

CREATE TABLE `backup_surat_masuk` (
  `id_surat_masuk` int(5) NOT NULL,
  `no_surat` varchar(35) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL,
  `no_agenda` varchar(15) DEFAULT NULL,
  `tgl_agenda` date DEFAULT NULL,
  `pencatat` varchar(30) DEFAULT NULL,
  `tgl_terima` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `asal_surat` text,
  `perihal` varchar(100) DEFAULT NULL,
  `sifat` varchar(50) DEFAULT NULL,
  `status` enum('diterima','terdisposisi','ok') NOT NULL,
  `tahun` year(4) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_dispo` int(7) NOT NULL,
  `no_surat` varchar(40) DEFAULT NULL,
  `tgl_dispo` datetime DEFAULT NULL,
  `ditujukan` varchar(60) DEFAULT NULL,
  `ket` text,
  `status` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_dispo`, `no_surat`, `tgl_dispo`, `ditujukan`, `ket`, `status`) VALUES
(1, '5/UTCC/5/18', '2018-05-30 11:05:19', 'Kemahasiswaan', 'silahkan bapak Heru Setiawan bisa berangkat', 'manual'),
(2, '055/UN.27.50/TU/17', '2018-05-30 11:05:01', 'Pendidikan Pengajara', 'uye', 'manual');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `kode` int(10) NOT NULL,
  `klasifikasi` varchar(40) DEFAULT NULL,
  `id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`kode`, `klasifikasi`, `id`) VALUES
(1, 'Ketatausahaan', 'TU'),
(2, 'Organisasi dan ketatalaksanaan', 'OT'),
(3, 'Kemahasiswaan', 'KM'),
(4, 'Kepegawaian', 'KP'),
(5, 'Data dan Informasi Akademik', 'AK'),
(6, 'Pendidikan Pengajara', 'PP'),
(7, 'Penelitian', 'PN'),
(8, 'Pengabdian Kepada Ma', 'PM'),
(9, 'Tata Pamong Pergurua', 'DT'),
(11, 'Perlengkapan', 'LK'),
(12, 'Kerumahtanggaan', 'RT'),
(13, 'Pengawasan', 'WS'),
(14, 'Kerjasama', 'KS'),
(15, 'Hubungan Masyarakat', 'HM'),
(16, 'Perencanaan', 'PR'),
(17, 'Informatika/SIM/TIK', 'TI'),
(18, 'Pendidikan dan Penelitian', 'DL'),
(19, 'Penelitian Pengkajian dan Pengembangan', 'PG'),
(20, 'Keuangan', 'KU');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_surat` varchar(22) NOT NULL,
  `tgl_surat` date DEFAULT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kepada` varchar(80) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `pembuat` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  `file` varchar(40) DEFAULT NULL,
  `nomor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_surat`, `tgl_surat`, `tgl_update`, `kepada`, `alamat`, `perihal`, `pembuat`, `keterangan`, `tahun`, `file`, `nomor`) VALUES
('0008/UN27.50/KM/2017', '2017-11-27', '2017-11-27 04:57:36', 'Seamolec', 'tangerang selatan', 'Workshop', 'STAFF ADMIN', 'uyee', 0, '1bb4f055b5726c77f6fdfa785aa838ed.pdf', 8),
('0009/UN27.50/UT/2017', '2017-12-19', '2017-12-05 11:16:10', 'SMKN Mejayan', 'Mejayan', 'workshop', 'STAFF ADMIN', 'undangan workshop', 0, '7a5b255e9723811472eaa728d9fe294e.pdf', 9),
('0010/UN27.50/TU/2018', '2018-01-04', '2018-01-07 00:17:56', 'SMKN 1 Mejayan', 'Menjayan pojok dewe', 'Workshop', 'STAFF ADMIN', 'mengharap kehadiran semua guru penganajar RPL', 0, '32680fa1c7f79477e3e8b6f4a4f1f4f5.pdf', 10),
('0011/UN27.50/TU/2018', '2018-05-28', '2018-05-28 10:26:03', 'erter', 'ertert', 'hhhhhhhhhhhhhh', 'STAFF ADMIN', 'hhhhh', 2018, 'f05f5a54feb2da8ce2549c373ef261d9.pdf', 11),
('0012/UN27.50/TU/2018', '2018-05-30', '2018-05-30 09:19:30', 'Amirudddin', 'Jakarta', 'Undangan Menjadi Narasumber', 'STAFF ADMIN', 'oke', 2018, '3aa34d60adddaa24d59e4bf44b283559.pdf', 12),
('a010/UN27.50/OT/2018', '2018-01-03', '2018-01-07 00:57:45', 'lkjkjl', 'kljoijli', 'klhjjygujuhj', 'STAFF ADMIN', 'lkjoiujougkhj', 0, 'd4fe03be2f0a6eafe668eab80d2035ed.pdf', 0),
('b009/UN27.50/PN/2018', '2018-01-02', '2018-01-07 00:57:33', 'opopopoi', 'lkopkl', 'poipoip', 'STAFF ADMIN', 'opoi', 0, 'e8df61141d287beb7a066bf97aca5225.pdf', 0),
('j004/UN27.50/TU/2017', '2017-12-05', '2018-01-07 00:57:40', 'kkkkkkk', 'kkkkkkkkkkk', 'jjjjjjjjjjjjjjj', 'STAFF ADMIN', 'jjjjjjjjjjj', 0, '234265e0e9ff9cfd252f53f13ac008b9.pdf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(5) NOT NULL,
  `no_surat` varchar(35) DEFAULT NULL,
  `tgl_surat` timestamp NULL DEFAULT NULL,
  `no_agenda` varchar(15) DEFAULT NULL,
  `tgl_agenda` timestamp NULL DEFAULT NULL,
  `pencatat` varchar(30) DEFAULT NULL,
  `tgl_terima` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `asal_surat` text,
  `perihal` varchar(100) DEFAULT NULL,
  `sifat` varchar(50) DEFAULT NULL,
  `status` enum('diterima','terdisposisi','ok') NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `no_surat`, `tgl_surat`, `no_agenda`, `tgl_agenda`, `pencatat`, `tgl_terima`, `asal_surat`, `perihal`, `sifat`, `status`, `foto`) VALUES
(1, 'OT/23/23/17', '2017-11-27 17:00:00', '0001/XI/17', '2017-11-28 17:00:00', 'STAFF ADMIN', '2017-11-28 10:23:32', 'SEAMOLEC', 'Workshop', 'penting', 'diterima', 'e91e851ed50abbf47aec3024b2262aba.pdf'),
(2, '055/UN.27.50/TU/17', '2018-05-29 17:00:00', '0002/V/18', '2018-05-30 17:00:00', 'STAFF ADMIN', '2018-05-30 07:53:42', 'SEAMOLEC', 'Worksop TO', 'penting', 'terdisposisi', '7bd1f20930b31c4eccbc1ad431e3b2b8.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(69) DEFAULT NULL,
  `level` enum('admin','pimpinan','user') DEFAULT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `username`, `password`, `level`, `jabatan`) VALUES
(7, 'STAFF ADMIN', 'info@akmadiun.net', 'admin', 'ff3bd2230f9810b4f3931a5e565faf50', 'admin', 'ADMIN'),
(9, 'Fauzi Ihsan', 'ihsan@gmail.com', 'pimpinan', 'ff3bd2230f9810b4f3931a5e565faf50', 'pimpinan', 'PIMPINAN'),
(11, 'Pendekar Mouse', 'duniaakar@gmail.com', 'user', 'ff3bd2230f9810b4f3931a5e565faf50', 'user', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup_surat_keluar`
--
ALTER TABLE `backup_surat_keluar`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `backup_surat_masuk`
--
ALTER TABLE `backup_surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_dispo`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup_surat_masuk`
--
ALTER TABLE `backup_surat_masuk`
  MODIFY `id_surat_masuk` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_dispo` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
