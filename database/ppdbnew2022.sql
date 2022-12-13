-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 23.30
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbnew2022`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` varchar(20) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_daftar` int(10) NOT NULL,
  `jumlah_bayar` int(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `keterangan` int(10) DEFAULT NULL,
  `bukti` varchar(50) DEFAULT NULL,
  `verifikasi` int(1) NOT NULL DEFAULT 0,
  `hapus` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bayar`
--

INSERT INTO `bayar` (`id_bayar`, `id_user`, `id_daftar`, `jumlah_bayar`, `tgl_bayar`, `keterangan`, `bukti`, `verifikasi`, `hapus`) VALUES
('202212070001', 0, 305, 100000, '2022-12-07', NULL, 'bukti_transaksi/bukti_202212070001.jpg', 0, NULL),
('202212110001', 0, 0, 1000000, '2022-12-11', NULL, 'bukti_transaksi/bukti_202212110001.jpeg', 0, NULL),
('202212110002', 0, 0, 1000000, '2022-12-11', NULL, 'bukti_transaksi/bukti_202212110002.jpeg', 0, NULL),
('202212110003', 0, 0, 1000000, '2022-12-11', NULL, 'bukti_transaksi/bukti_202212110003.jpeg', 0, NULL),
('202212120001', 0, 301, 1000000, '2022-12-12', NULL, 'bukti_transaksi/bukti_202212120001.jpeg', 1, NULL),
('202212130001', 0, 302, 1000000, '2022-12-13', NULL, 'bukti_transaksi/bukti_202212130001.jpeg', 1, NULL),
('202212130002', 0, 307, 1000000, '2022-12-13', NULL, 'bukti_transaksi/bukti_202212130002.jpeg', 1, NULL),
('202212130003', 0, 308, 1000000, '2022-12-13', NULL, 'bukti_transaksi/bukti_202212130003.jpeg', 1, NULL),
('202212140001', 0, 299, 1000000, '2022-12-14', NULL, 'bukti_transaksi/bukti_202212140001.jpeg', 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` varchar(50) NOT NULL,
  `nama_biaya` varchar(200) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biaya`
--

INSERT INTO `biaya` (`id_biaya`, `nama_biaya`, `jumlah`, `status`) VALUES
('ADMIN', 'ADMINISTRASI', 800000, '1'),
('PPDB', 'SERAGAM', 200000, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `no_daftar` varchar(20) DEFAULT NULL,
  `jenis` int(1) DEFAULT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `no_kk` varchar(30) DEFAULT NULL,
  `nisn` varchar(30) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `warga_siswa` varchar(20) DEFAULT NULL,
  `foto` varchar(128) NOT NULL,
  `jenkel` varchar(1) DEFAULT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `asal_sekolah` varchar(128) DEFAULT NULL,
  `npsn_asal` varchar(20) DEFAULT NULL,
  `kelas` varchar(11) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT '',
  `jenjang` varchar(11) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `status_tinggal` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `koordinat` varchar(100) DEFAULT NULL,
  `transportasi` varchar(128) DEFAULT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `anak_ke` int(2) DEFAULT NULL,
  `saudara` int(11) DEFAULT NULL,
  `biaya_sekolah` varchar(100) DEFAULT NULL,
  `paud` text DEFAULT NULL,
  `tk` text DEFAULT NULL,
  `hepatitis` varchar(10) DEFAULT NULL,
  `polio` varchar(10) DEFAULT NULL,
  `bcg` varchar(10) DEFAULT NULL,
  `campak` varchar(10) DEFAULT NULL,
  `dpt` varchar(10) DEFAULT NULL,
  `covid` varchar(10) DEFAULT NULL,
  `citacita` text NOT NULL,
  `hobi` text NOT NULL,
  `status_keluarga` varchar(50) DEFAULT NULL,
  `tinggal` varchar(128) DEFAULT NULL,
  `jarak` varchar(128) DEFAULT NULL,
  `waktu` varchar(128) DEFAULT NULL,
  `nik_ayah` varchar(16) DEFAULT NULL,
  `nama_ayah` varchar(128) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(100) DEFAULT NULL,
  `tahun_ayah` date DEFAULT NULL,
  `status_ayah` varchar(128) DEFAULT NULL,
  `pendidikan_ayah` varchar(128) DEFAULT NULL,
  `pekerjaan_ayah` varchar(128) DEFAULT NULL,
  `penghasilan_ayah` varchar(128) DEFAULT NULL,
  `no_hp_ayah` varchar(16) DEFAULT NULL,
  `nik_ibu` varchar(16) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(100) DEFAULT NULL,
  `tahun_ibu` date DEFAULT NULL,
  `status_ibu` varchar(128) DEFAULT NULL,
  `pendidikan_ibu` varchar(128) DEFAULT NULL,
  `pekerjaan_ibu` varchar(128) DEFAULT NULL,
  `penghasilan_ibu` varchar(128) DEFAULT NULL,
  `no_hp_ibu` varchar(16) DEFAULT NULL,
  `nik_wali` varchar(16) DEFAULT NULL,
  `nama_wali` varchar(128) DEFAULT NULL,
  `tempat_lahir_wali` varchar(100) DEFAULT NULL,
  `tahun_wali` date DEFAULT NULL,
  `pendidikan_wali` varchar(50) DEFAULT NULL,
  `pekerjaan_wali` varchar(50) DEFAULT NULL,
  `penghasilan_wali` varchar(50) DEFAULT NULL,
  `no_hp_wali` varchar(16) DEFAULT NULL,
  `bb` varchar(128) DEFAULT NULL,
  `tt` varchar(128) DEFAULT NULL,
  `bb_lahir` varchar(128) DEFAULT NULL,
  `penyakit_sd` varchar(30) DEFAULT NULL,
  `penyakit_pd` varchar(256) DEFAULT NULL,
  `kk` text DEFAULT NULL,
  `pantangan_makan` varchar(100) DEFAULT NULL,
  `ijazah` varchar(256) DEFAULT NULL,
  `akta` varchar(256) DEFAULT NULL,
  `file_shun` varchar(256) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `alasan_keluar` varchar(100) DEFAULT NULL,
  `surat_keluar` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `aktif` int(1) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  `sekolah_tujuan` varchar(10) DEFAULT NULL,
  `npsn_sekolah_tujuan` varchar(10) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_konfirmasi` date DEFAULT NULL,
  `konfirmasi` int(1) DEFAULT NULL,
  `bayar` varchar(100) DEFAULT NULL,
  `online` int(1) DEFAULT 0,
  `password` text DEFAULT NULL,
  `jumlah` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `no_daftar`, `jenis`, `nis`, `nik`, `no_kk`, `nisn`, `nama`, `warga_siswa`, `foto`, `jenkel`, `tempat_lahir`, `tgl_lahir`, `asal_sekolah`, `npsn_asal`, `kelas`, `jurusan`, `jenjang`, `agama`, `status_tinggal`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `koordinat`, `transportasi`, `no_hp`, `email`, `anak_ke`, `saudara`, `biaya_sekolah`, `paud`, `tk`, `hepatitis`, `polio`, `bcg`, `campak`, `dpt`, `covid`, `citacita`, `hobi`, `status_keluarga`, `tinggal`, `jarak`, `waktu`, `nik_ayah`, `nama_ayah`, `tempat_lahir_ayah`, `tahun_ayah`, `status_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nik_ibu`, `nama_ibu`, `tempat_lahir_ibu`, `tahun_ibu`, `status_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `nik_wali`, `nama_wali`, `tempat_lahir_wali`, `tahun_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_wali`, `bb`, `tt`, `bb_lahir`, `penyakit_sd`, `penyakit_pd`, `kk`, `pantangan_makan`, `ijazah`, `akta`, `file_shun`, `tgl_keluar`, `alasan_keluar`, `surat_keluar`, `level`, `aktif`, `status`, `sekolah_tujuan`, `npsn_sekolah_tujuan`, `tgl_daftar`, `tgl_konfirmasi`, `konfirmasi`, `bayar`, `online`, `password`, `jumlah`) VALUES
(299, 'PPDB2022006', 1, '', '32423423', '4312432423', '120301', 'NANDA ILHAMI', 'WNI', 'default.png', 'L', 'Depok', '2018-02-06', 'GDSFGSD', '3421312', NULL, 'KELAS A', NULL, 'Islam', 'Tinggal dengan Orangtua/Wali', 'JL. PONDOK CINA GG.KAPUK RT.001/RW.004 BEJI, DEPOK', '4', '4', 'FDGDF', 'GFDGFD', 'GFDGFD', 'GFDGDF', '16424', '', 'Sepeda Motor', '0895621732309', 'NANDAILHAMI626@GMAIL.COM', 4, 4, 'Orang Tua', 'Ya', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'PNS', 'OIahraga', '', NULL, 'Kurang dari 5 km', '1-10 menit', '34213', 'DFSFSD', 'DEPOK', '2022-12-06', 'Masih Hidup', 'SMA/Sederajat', 'PNS', 'Lebih dari 5.000.000', '432423', '432423', 'FGDSGFSD', 'DEPOK', '2022-12-06', 'Masih Hidup', 'SMP/Sederajat', 'Seniman/Pelukis/Artis/Sejenis', 'Kurang dari 500.000', '423432', '', '', NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', NULL, 'GBUISDAIFGDAS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '2022-12-06', 1, NULL, 1, 'nandainun12', NULL),
(300, 'PPDB2022007', 0, NULL, '', '', 'arif', 'Arif', NULL, 'default.png', 'L', 'Depok', '2022-12-06', '', '', NULL, 'KELAS A', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0895621732309', NULL, 4, 0, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '123', NULL),
(301, 'PPDB2022008', NULL, NULL, NULL, NULL, 'owi', 'OWI', NULL, 'assets/upload/foto_siswa/siswa684.jpg', 'L', 'Jambi', '2019-01-15', '', '', NULL, '', NULL, NULL, NULL, 'Jalan Bacang', '4', '5', NULL, 'Beji', 'Depok', 'Jawa Barat', NULL, NULL, NULL, '0895621732309', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'Angga', 'Depok', '1997-01-11', NULL, 'S2', 'Guru/Dosen', NULL, '0896765443', NULL, 'Eva', 'Surabaya', '1996-01-11', NULL, 'D4/S1', 'Guru/Dosen', NULL, '0821987361', NULL, '', NULL, '0000-00-00', '', '', NULL, '', '30', '144', '3,3', '-', '-', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '2022-12-11', 1, NULL, 1, '123', NULL),
(302, 'PPDB2022009', NULL, NULL, NULL, NULL, 'eva', 'EVA', NULL, 'assets/upload/foto_siswa/siswa454.png', 'P', 'Surabaya', '2018-06-13', '', '', NULL, '', NULL, NULL, '', 'Jalan wahab', '1', '2', '', 'Beji', 'Depok', 'Jawa Barat', '', '', '', '657674645', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, '', '', '', 'Nanda Ilhami', 'DEPOK', '2001-12-01', '', 'D4/S1', 'Politikus', '', '63456435', '', 'mijuana', 'DEPOK', '2001-03-12', '', 'D4/S1', 'Politikus', '', '64563456345', '', '', NULL, '0000-00-00', '', '', '', '', '30', '120', '3,3', 'Flu', 'Batuk', 'assets/upload/kk/kk457.jpg', 'Pedas dan Asam', NULL, 'assets/upload/akta/akta808.jpg', NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '2022-12-11', 1, NULL, 1, '123', NULL),
(304, 'PPDB2022010', NULL, NULL, NULL, NULL, '', 'DAFFA', NULL, 'default.png', 'L', 'Depok', '2019-01-08', '', '', NULL, 'KELAS A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0895621732309', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '123', NULL),
(305, 'PPDB2022011', NULL, NULL, NULL, NULL, 'silvia', 'Silvia', NULL, 'default.png', 'P', 'Depok', '2017-01-07', '', '', NULL, 'KELAS A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0895621732309', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '123', NULL),
(307, 'PPDB2022012', NULL, NULL, NULL, NULL, '', 'SATRIO DWI', NULL, 'assets/upload/foto_siswa/siswa529.png', 'L', 'Surabaya', '2018-12-13', '', '', NULL, '', NULL, NULL, NULL, 'Gang Bcang', '2', '7', NULL, 'Beji', 'Depok', 'Jawa Barat', NULL, NULL, NULL, '0895621732309', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'Rizky', 'DEPOK', '1994-12-12', NULL, 'S3', 'PNS', NULL, '08654564464', NULL, 'Silvia', 'DEPOK', '1995-12-12', NULL, 'S2', 'Dokter/Bidan/Perawat', NULL, '087635367281', NULL, '', NULL, '0000-00-00', '', '', NULL, '', '30', '120', '3,3', 'Flu', 'Asma', NULL, 'seafood', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, '2022-12-13', '2022-12-13', 1, NULL, 1, '123', NULL),
(308, 'PPDB2022013', NULL, NULL, NULL, NULL, 'rizky', 'RIZKY', NULL, 'assets/upload/foto_siswa/siswa964.jpg', 'L', 'Depok', '2019-01-13', '', '', NULL, '', NULL, NULL, NULL, 'Jalan alabababababa', '10', '9', NULL, 'Jebi', 'Depok', 'Jawa Barat', NULL, NULL, NULL, '0895621732309', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'dsadas', 'dsadas', '1990-01-01', NULL, 'S2', 'Pilot/Pramugara', NULL, '98765443554', NULL, 'hhsdf', 'hsghfg', '1990-11-11', NULL, 'D4/S1', 'Pegawai Swasta', NULL, '654754744564', NULL, '', NULL, '0000-00-00', '', '', NULL, '', '30', '144', '3,3', '-', '-', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, '2022-12-13', '2022-12-13', 1, NULL, 1, '123', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `id` int(11) NOT NULL,
  `id_permohonan` varchar(30) NOT NULL,
  `nik` int(30) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` varchar(50) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `status`) VALUES
('PD', 'Pindahan', 1),
('SB', 'Siswa Baru', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE `jenjang` (
  `id_jenjang` varchar(5) NOT NULL,
  `nama_jenjang` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `wali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(50) NOT NULL,
  `nama_jurusan` varchar(100) DEFAULT NULL,
  `umur` varchar(40) NOT NULL,
  `jam_kelas` varchar(40) NOT NULL,
  `kelompok` varchar(40) NOT NULL,
  `ket` varchar(40) NOT NULL,
  `kuota` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `umur`, `jam_kelas`, `kelompok`, `ket`, `kuota`, `status`) VALUES
('KELAS A', 'KELAS A', '3 - 4', '07.30 - 10.30', 'KELOMPOK PG', '-', 0, 1),
('KELAS B', 'KELAS B', '5 - 6 ', '07.30 - 10.30', 'Kelompok B	', 'Kelas B Merupakan Kelas Yang Santrinya B', 10, 1),
('KELAS C', 'KELAS C', '6 -7', '07.30 - 10.30', 'ANAK - ANAK', '-', NULL, 1),
('PLAY GROUP', 'PLAY GROUP', '3 - 4', '07.30 - 09.30	', 'Kelompok PG	', 'Play Grup Merupakan Kelas Yang Santrinya', 20, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(50) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `kuota` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kuota`, `status`) VALUES
('10', 'Kelas X', 108, 1),
('11', 'Kelas XI', 108, 1),
('12', 'Kelas XII', 108, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(50) DEFAULT NULL,
  `no_kontak` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kontak`, `no_kontak`, `status`) VALUES
(1, 'CS 1', '089999999999', 1),
(2, 'CS 2', '082222222', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `pengumuman` text DEFAULT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_user`, `judul`, `pengumuman`, `tgl`, `jenis`) VALUES
(3, 5, 'Info PPDB Online 2022', '<p><b>Gelombang Pertama</b> Tanggal 1 Desember 2021 Sampai 30 Mei 2022 <b>Gelombang Kedua </b>Tanggal 1 Juni Sampai Tanggal 30 Juni 2022</p><p>Note: Pendaftaran Gelombang Pertama Gratis Biaya Pendaftaran dan Biaya Daftar Ulang</p>', '2022-12-06 16:43:23', 2),
(4, 5, 'Persyaratan Daftar Ulang', '<p><span style=\"color: rgb(133, 135, 150); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; text-align: justify;\">Siswa yang sudah berhasil melengkapi data diri wajib melakukan daftar ulang dengan membawa berkas sebagai berikut :</span></p><ol><li><span style=\"color: rgb(133, 135, 150); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; text-align: justify;\">FOTOCOPY AKTA 2 LEMBAR</span></li><li><span style=\"color: rgb(133, 135, 150); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; text-align: justify;\">FOTOCOPY&nbsp; KARTU KELUARGA 2 LEMBAR</span></li><li><span style=\"color: rgb(133, 135, 150); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; text-align: justify;\">FOTOCOPY KTP AYAH &amp; IBU 2 LEMBAR</span></li><li><span style=\"color: rgb(133, 135, 150); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; text-align: justify;\">PAS FOTO 3X4 2 LEMBAR<br></span><br></li></ol>', '2022-12-09 19:19:29', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `npsn` varchar(16) NOT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`npsn`, `nama_sekolah`, `alamat`, `status`) VALUES
('69977331', 'MTsN 1 WONOGIRI', 'Jl. Tandon Giriwono Wonogiri', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(1) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `jenjang` int(11) NOT NULL,
  `nsm` varchar(30) NOT NULL,
  `npsn` varchar(30) DEFAULT NULL,
  `status` text NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `klikchat` text DEFAULT NULL,
  `livechat` text DEFAULT NULL,
  `nolivechat` varchar(50) DEFAULT NULL,
  `infobayar` text DEFAULT NULL,
  `syarat` text DEFAULT NULL,
  `kab` text NOT NULL,
  `kec` text NOT NULL,
  `web` text NOT NULL,
  `kepala` text NOT NULL,
  `nip` text NOT NULL,
  `ppdb` text DEFAULT NULL,
  `kop` varchar(50) NOT NULL,
  `logo_ppdb` varchar(100) NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `tgl_tutup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_sekolah`, `jenjang`, `nsm`, `npsn`, `status`, `alamat`, `kota`, `provinsi`, `logo`, `favicon`, `email`, `no_telp`, `klikchat`, `livechat`, `nolivechat`, `infobayar`, `syarat`, `kab`, `kec`, `web`, `kepala`, `nip`, `ppdb`, `kop`, `logo_ppdb`, `tgl_pengumuman`, `tgl_tutup`) VALUES
(1, 'PAUDQU NURUL HIDAYAH', 2, '402232010315', '70024372', 'Swasta', 'Jl. Masjid Al-Baliyah Rt. 05/011 Kebon Kopi Pabuaran 16916', 'Wonogiri', 'Jawa Barat', 'assets/img/logo/logo886.png', NULL, 'paudqunurulhidayah@gmail.com', '081234567893', 'Assalamu Alaikum,\r\n\r\nMohon informasi PPDB', 'Assalamu Alaikum,\r\n\r\nMohon informasi PPDB', '0895621732309', '<p>Pembayaran bisa melalui transfer bank berikut:</p><p>BCA : A/N Nanda Ilhami</p><table class=\"table table-bordered\"><tbody><tr><td>4210415241</td></tr></tbody></table><p><br></p>', '<p><br></p><ol><li>Surat Keterangan Lulus</li><li>Akta Kelahiran</li><li>Kartu Keluarga</li></ol>', 'Bogor', 'Cibinong  ', '-', 'Siti Nurmalaela S.Pd.I', '0000', '1', 'assets/img/kop/kop754.png', 'assets/img/logo/logo_ppdb733.png', '2022-04-08', '2021-05-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL,
  `foto` int(11) NOT NULL,
  `mapel` text NOT NULL,
  `nuptk` text NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmt` year(4) NOT NULL,
  `no_sk` text NOT NULL,
  `jenis` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `level`, `username`, `password`, `status`, `foto`, `mapel`, `nuptk`, `jenkel`, `tempat_lahir`, `tgl_lahir`, `tmt`, `no_sk`, `jenis`, `no_hp`, `nik`) VALUES
(5, 'ADMIN', 'admin', 'admin', '$2y$10$9a7b78YWmpUO1yS3Q2CeMOuWvemjp4Q13q52ykg5alI/f9NrICqB.', 1, 0, '', '', '', '', '0000-00-00', 0000, '', '', '', 0),
(64, 'nanda', 'admin', 'nanda', '$2y$10$7f0mn./wr41.GT8vHP54qO71TQ.H2nt5KNDkhEhBbQXIxMYFVG0ai', 1, 0, '', '', '', '', '0000-00-00', 0000, '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
