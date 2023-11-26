-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 09.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `idp` varchar(22) DEFAULT NULL,
  `nama_akun` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `id_level`, `id_prodi`, `idp`, `nama_akun`, `email`, `no_telp`, `alamat`, `username`, `password`, `foto`) VALUES
(1, 1, 13, '2001301002', 'Admin', 'admin@politala.ac.id', '082156889822', 'Angsau', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2001301095_-_Muhammad_Ehsan_Naufal.jpg'),
(2, 3, 1, '198904212019032026', 'Herfia Rhomadhona, S.Kom, M.Cs', 'herfia.rhomadhona@dsn.politala.ac.id', '082157889111', 'Politeknik Negeri Tanah Laut', 'herfia rhomadhona', '23bfcee1c3023b2677bc60509a17c778', 'dosen_bu_herfia.jpg'),
(3, 3, 1, '198408022019031005', 'Ir. Agustian Noor, M.Kom', 'agustian.noor@dsn.politala.ac.id', '082157889333', 'Politeknik Negeri Tanah Laut', 'agustian noor', '23bfcee1c3023b2677bc60509a17c778', 'dosen_pak_agus.jpg'),
(4, 3, 1, '199205052019032040', 'Rabini Sayyidati, M.Pd', 'rabini.sayyidati@dsn.politala.ac.id', '082157889222', 'Politeknik Negeri Tanah Laut', 'rabini sayyidati', '23bfcee1c3023b2677bc60509a17c778', 'dosen_bu_dati.jpg'),
(5, 3, 1, '198807032019031009', 'Jaka Permadi, S.Si., M.Cs', 'jaka.permadi@dsn.politala.ac.id', '082157889444', 'Politeknik Negeri Tanah Laut', 'jaka permadi', '23bfcee1c3023b2677bc60509a17c778', 'dosen_pak_jaka.jpg'),
(8, 2, 1, '2001301007', 'Anggie Yulistiawan', 'anggie.yulistiawan@mhs.politala.ac.id', '082157889345', 'Jl. Manunggal, Kel. Angsau', '2001301007', '23bfcee1c3023b2677bc60509a17c778', 'anggie.jpg'),
(9, 2, 1, '2001301011', 'Sukma Gandi', 'sukma.gandi@mhs.politala.ac.id', '082157889311', 'Jl. Pusaka, Kec. Pelaihari', '2001301011', '23bfcee1c3023b2677bc60509a17c778', 'gande.jpg'),
(10, 2, 1, '2001301022', 'Lois Arista', 'lois.arista@mhs.politala.ac.id', '082157889322', 'Komp. Mahkota panggung', '2001301022', '23bfcee1c3023b2677bc60509a17c778', 'LOIS_(_FILE_AJA_).JPG'),
(11, 2, 1, '2001301033', 'Erni Nisa Mahmudah', 'erni.nisa.m@mhs.politala.ac.id', '082157889333', 'Kabupaten Balangan', '2001301033', '23bfcee1c3023b2677bc60509a17c778', 'Erni.jpeg'),
(12, 2, 3, '2001301044', 'Ahmad Ramadhan', 'ahmad.ramadhan@mhs.politala.ac.id', '082157889344', 'Jl. Beramban, Kec. Pelaihari', '2001301044', '23bfcee1c3023b2677bc60509a17c778', 'amad.jpg'),
(13, 2, 3, '2001301055', 'Dani Rizkianor', 'dani.rizkianor@mhs.politala.ac.id', '082157889355', 'Kel. Panggung', '2001301055', '23bfcee1c3023b2677bc60509a17c778', 'Foto_Dani.jpg'),
(14, 2, 3, '2001301066', 'Rahmad Diva Sri Mahendra', 'rahmad.diva.sm@mhs.politala.ac.id', '082157889366', 'Desa Damit, Kec. Jorong', '2001301066', '23bfcee1c3023b2677bc60509a17c778', 'Foto_Diva.jpg'),
(15, 2, 6, '2001301077', 'Erna Nisa Mahmudah', 'erna.nisa.m@mhs.politala.ac.id', '082157889377', 'Kabupaten Balangan', '2001301077', '23bfcee1c3023b2677bc60509a17c778', 'Erna.jpeg'),
(16, 2, 6, '2001301088', 'Muhammad Saffa Anjani', 'saffa.anjani@mhs.politala.ac.id', '082157889388', 'Kecamatan Rantau, Kabupaten Tapin', '2001301088', '23bfcee1c3023b2677bc60509a17c778', 'saffa.jpg'),
(17, 2, 6, '2001301099', 'Muhammad Dava Karen Supriyadi', 'dava.karen@mhs.politala.ac.id', '082157889399', 'Desa Tirta Jaya, Kec. Bajuin', '2001301099', '23bfcee1c3023b2677bc60509a17c778', 'Foto_Dava.jpg'),
(18, 2, 6, '2001301010', 'Muhammad Khaical Akbar', 'khaical.akbar@mhs.politala.ac.id', '082157889310', 'Jl. Pusaka, Kec. Pelaihari', '2001301010', '23bfcee1c3023b2677bc60509a17c778', 'Foto_Haikal.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nip` varchar(22) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `id_prodi`, `nip`, `nama_dosen`) VALUES
(12, 6, '198503062019032007', 'Marliza Noor Hayatie, S.E., M.M'),
(13, 6, '199110142019032018', 'Widiya Astuti Alam Sur, S.Pd., M.Sc'),
(14, 6, '198909032019032015', 'Noor Amelia, S. ST, M. Si'),
(15, 6, '100102028', 'Eni Suasri, SE., M.M'),
(16, 6, '199206212018032001', 'Karolina, M.Pd'),
(17, 6, '090801008', 'Rina Pebriana, SE., M. Comm'),
(18, 3, '199102132018032001', 'Adzani Ghani Ilmannafian, M.SI'),
(19, 3, '199409232020122006', 'Titis Linangsari, S.T.P..M.Se'),
(20, 3, '198102122021212012', 'Raden Rizki Amalia, S.T., M.Si'),
(21, 3, '198805042019032019', 'Nina Hairiyah, S.T.P., M.Si'),
(22, 3, '198804202018032001', 'Ika Kusuma Nugraheni, S.Si., M.Sc'),
(23, 3, '170103174', '	Mariatul Kiptiah, S.Sos., M.Si'),
(24, 1, '198408022019031005', 'Ir. Agustian Noor, M.Kom'),
(26, 1, '198906012019031015', '	Khairul Anwar Hafizd, M.Kom'),
(27, 1, '199205052019032040', 'Rabini Sayyidati, M.Pd'),
(28, 1, '198402022019032010', 'Wiwik Kusrini, S.Kom., M.Cs'),
(29, 1, '199004172018032002', 'Winda Aprianti, S.Si., M.Si');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ebooks`
--

CREATE TABLE `tb_ebooks` (
  `id_ebooks` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tanggal_luncur` date NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `edisi` varchar(4) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `buku` varchar(250) NOT NULL,
  `status_buku` varchar(20) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ebooks`
--

INSERT INTO `tb_ebooks` (`id_ebooks`, `id_penerbit`, `id_kategori`, `tanggal_luncur`, `judul_buku`, `pengarang`, `tahun_terbit`, `edisi`, `isbn`, `foto`, `buku`, `status_buku`, `views`) VALUES
(58, 23, 1, '2023-06-10', 'Jendela Dunia', 'HAE-WON JEON', '2020', '1', '145541', 'photo_6230906195762328603_y1.jpg', 'ebooks10.pdf', 'Free', 8),
(59, 14, 3, '2023-06-16', 'Tuntunan Generasi Muda', 'Baddiuzaman Said Nursi', '2023', '123', '43254536', 'photo_6158702310843331868_y1.jpg', 'ebooks11.pdf', 'Premium', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(3, 'Kepala UPA Perpustakaan'),
(4, 'Staff Perpustakaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Novel'),
(2, 'Komputer'),
(3, 'Agama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'ADMIN'),
(2, 'MAHASISWA'),
(3, 'DOSEN / STAFF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nip` varchar(22) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `id_jabatan`, `nip`, `nama_pegawai`) VALUES
(4, 3, '198807032019031009', 'Jaka Permadi, S.Si., M.Cs'),
(5, 4, '198108312005011007', 'Sugeng Mukti Wibowo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(7, 'Deepublish'),
(8, 'Gramedia Pustaka Utama'),
(9, 'Grasindo'),
(10, ' Elex Media Komputindo'),
(11, 'Penerbit Mizan'),
(12, 'Gagas Media'),
(13, 'Bukune'),
(14, 'Media Kita'),
(15, 'Noura Books'),
(16, 'Bentang Pustaka'),
(17, 'Diva Press'),
(18, 'Detak Pustaka'),
(19, 'Penerbit Andi'),
(20, 'Stiletto Book'),
(21, 'Penerbit Ikon'),
(22, 'Penerbit Inari'),
(23, 'Bintang Media'),
(24, 'Kata Depan'),
(25, 'Falcon Publishing'),
(26, 'Penerbit Twigora'),
(27, 'Penerbit Haru'),
(28, 'Republika'),
(29, 'Penerbit Erlangga'),
(30, 'Quanta'),
(31, 'Tiga Serangkai'),
(32, 'Tiga Ananda'),
(33, 'Tinta Medina'),
(34, 'Metagraf'),
(35, 'Metafind'),
(36, 'Bentang Belia'),
(38, 'Penerbit PlotPoint');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pkl`
--

CREATE TABLE `tb_pkl` (
  `id_pkl` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tanggal_pkl` date NOT NULL,
  `judul_pkl` varchar(250) NOT NULL,
  `tempat_pkl` varchar(250) NOT NULL,
  `laporan_pkl` varchar(100) NOT NULL,
  `dosen_pembimbing1` varchar(50) NOT NULL,
  `dosen_penguji1` varchar(50) NOT NULL,
  `pembimbing_lapangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pkl`
--

INSERT INTO `tb_pkl` (`id_pkl`, `id_akun`, `tanggal_pkl`, `judul_pkl`, `tempat_pkl`, `laporan_pkl`, `dosen_pembimbing1`, `dosen_penguji1`, `pembimbing_lapangan`) VALUES
(24, 17, '2023-06-05', 'Analisis Kinerja Keuangan Perusahaan Pada PT Sariguna Primtirata Tbk Menggunakan Metode Rasio', 'PT Sariguna Primtirata Tbk', 'Laporan_PKL1.pdf', 'Widiya Astuti Alam Sur, S.Pd., M.Sc', 'Karolina, M.Pd', ''),
(25, 16, '2023-06-05', 'Analisis Akuntabilitas dan Transparansi Pengelolaan Dana Bantuan Operasional Sekolah', 'SMP Negeri 3 Pelaihari', 'Laporan_PKL2.pdf', 'Eni Suasri, SE., M.M', 'Noor Amelia, S. ST, M. Si', ''),
(26, 15, '2023-06-05', 'Akuntansi aset tetap (PSAP 07) pada kantor desa batu tungku kecamatan panyipatan', 'kantor desa batu tungku kecamatan panyipatan', 'Laporan_PKL3.pdf', 'Widiya Astuti Alam Sur, S.Pd., M.Sc', 'Marliza Noor Hayatie, S.E., M.M', ''),
(27, 14, '2023-06-05', 'Strategi pengembangan produk agroindustri ', 'UMKM di rumah usaha masyarakat Bumi Jaya', 'Laporan_PKL4.pdf', 'Raden Rizki Amalia, S.T., M.Si', 'Ika Kusuma Nugraheni, S.Si., M.Sc', ''),
(28, 13, '2023-06-05', 'Analisis Preprensi konsumen terhadap prodak agroindustri', 'UMKM Bumi Jaya', 'Laporan_PKL5.pdf', 'Adzani Ghani Ilmannafian, M.SI', 'Nina Hairiyah, S.T.P., M.Si', ''),
(29, 12, '2023-06-05', 'Analisis prospektif terhadap produk UMKM Agroindustri yang ada di Bumi Jaya', 'UMKM Bumi Jaya', 'Laporan_PKL6.pdf', 'Raden Rizki Amalia, S.T., M.Si', 'Ika Kusuma Nugraheni, S.Si., M.Sc', ''),
(31, 9, '2023-06-05', 'Sistem Informasi Pengelolaan Penelitian dan Pengabdian Dana DIPA Politeknik Negeri Tanah Laut ', 'Politeknik Negeri Tanah Laut ', 'Laporan_PKL8.pdf', 'Herfia Rhomadhona, S.Kom, M.Cs', '	Khairul Anwar Hafizd, M.Kom', ''),
(32, 11, '2023-06-05', 'Sistem Monitoring kelembapan udara pada budidaya jangkrik di Citra Jaya Abadi Farm menggunakan IOT ', 'Citra Jaya Abadi Farm', 'Laporan_PKL9.pdf', 'Herfia Rhomadhona, S.Kom, M.Cs', 'Rabini Sayyidati, M.Pd', ''),
(44, 18, '2023-06-30', 'Sistem Instalasi dan Perbaikan di Rumah Sakit Idaman Kota Banjarbaru', 'Rumah Sakit Idaman Kota Banjarbaru', 'Abstrak3.pdf', 'Widiya Astuti Alam Sur, S.Pd., M.Sc', 'Marliza Noor Hayatie, S.E., M.M', ''),
(45, 10, '2023-07-04', 'Sistem Instalasi dan Perbaikan di Rumah Sakit Idaman Kota Banjarbaru', 'Rumah Sakit Idaman Kota Banjar', 'Laporan_PKL18.pdf', '	Khairul Anwar Hafizd, M.Kom', '	Khairul Anwar Hafizd, M.Kom', ''),
(46, 8, '2023-08-15', 'Sistem Instalasi dan Perbaikan di Rumah Sakit Idaman Kota Banjarbaru', 'Rumah Sakit Idaman Kota Banjarbaru', 'pengesahan.pdf', 'Ir. Agustian Noor, M.Kom', 'Rabini Sayyidati, M.Pd', 'Gandee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `diploma` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`, `diploma`) VALUES
(1, 'Teknologi Informasi', 'D3'),
(3, 'Agroindustri', 'D3'),
(5, 'Teknologi Otomotif', 'D3'),
(6, 'Akuntansi', 'D3'),
(7, 'Teknologi Rekayasa Pemeliharaan Alat Berat', 'D4'),
(8, 'Teknologi Rekayasa Konstruksi Jalan dan Jembatan', 'D4'),
(9, 'Teknologi Pakan Ternak', 'D4'),
(10, 'Akuntansi Perpajakan', 'D4'),
(11, 'Pengembangan Produk Agroindustri', 'D4'),
(12, 'Teknologi Rekayasa Komputer Jaringan', 'D4'),
(13, 'Other', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `tanggal_registrasi` datetime NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id_registrasi`, `id_prodi`, `tanggal_registrasi`, `nim`, `nama`) VALUES
(8, 1, '2023-04-19 11:48:49', '2001301007', 'Anggie Yulistiawan'),
(10, 10, '2023-05-04 22:43:47', '2001301007', 'Erni Nisa Mahmudah'),
(11, 1, '2023-06-04 00:28:04', '2001301022', 'Lois Arista'),
(12, 6, '2023-06-04 00:28:22', '2001301011', 'Erna Nisa Mahmudah'),
(13, 6, '2023-06-05 22:53:39', '2001301096', 'Rahmad Diva Mahendra'),
(14, 1, '2023-06-05 22:54:10', '2001301095', 'Muhammad Ehsan'),
(15, 5, '2023-06-05 22:54:50', '2001301153', 'Febrian Bayu Nugroho'),
(16, 1, '2023-06-07 13:55:50', '2001301007', 'Anggie Yulistiawan'),
(17, 1, '2023-06-09 21:40:19', '2001301007', 'Anggie Yulistiawan'),
(18, 1, '2023-06-09 21:40:39', '2001301022', 'Erni Nisa Mahmudah'),
(19, 1, '2023-06-12 11:22:28', '2001301007', 'Anggie Yulistiawan'),
(20, 13, '2023-06-14 01:35:44', '2001301007', 'Anggie'),
(21, 6, '2023-06-14 01:47:01', '2001301095', 'Anggie'),
(22, 1, '2023-06-16 22:41:28', '2001301007', 'Anggie Yulistiawan'),
(23, 5, '2023-06-16 22:42:20', '2001301022', 'Erni Nisa Mahmudah'),
(24, 10, '2023-06-16 22:43:44', '2001301011', 'Erni Nisa Mahmudah'),
(25, 1, '2023-06-16 22:44:52', '2001301007', 'Ayu Norlia Nisa'),
(26, 6, '2023-06-16 22:45:50', '2001301095', 'Ayu Norlia Nisa'),
(27, 1, '2023-06-16 22:55:54', '2001301007', 'Anggie Yulistiawan'),
(28, 6, '2023-06-16 22:57:49', '2001301007', 'Ayu Norlia Nisa'),
(29, 6, '2023-06-29 22:52:51', '2001301022', 'Anggie Yulistiawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_pkl` int(11) DEFAULT NULL,
  `id_ta` int(11) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `keterangan_surat` varchar(250) DEFAULT NULL,
  `status_surat` varchar(100) DEFAULT NULL,
  `kategori_surat` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `id_akun`, `id_pegawai`, `id_pkl`, `id_ta`, `tanggal_surat`, `nomor_surat`, `keterangan_surat`, `status_surat`, `kategori_surat`) VALUES
(15, 8, NULL, NULL, NULL, '2023-08-12', '001', NULL, 'Dikonfirmasi', 'stop'),
(17, 8, NULL, NULL, NULL, '2023-08-12', '003', NULL, 'Dikonfirmasi', 'stop'),
(19, 8, NULL, NULL, NULL, '2023-08-12', NULL, NULL, 'Menunggu Konfirmasi', 'stop'),
(23, NULL, NULL, NULL, NULL, '2023-08-13', '004', 'Perbaikan AC', NULL, 'umum'),
(26, 8, 4, 46, 42, '2023-08-15', '005', NULL, 'Dikonfirmasi', 'lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ta`
--

CREATE TABLE `tb_ta` (
  `id_ta` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tanggal_ta` date NOT NULL,
  `judul_ta` varchar(250) NOT NULL,
  `objek_ta` varchar(250) NOT NULL,
  `laporan_ta` varchar(100) NOT NULL,
  `abstrak_ta` varchar(100) NOT NULL,
  `dosen_pembimbing1` varchar(50) NOT NULL,
  `dosen_pembimbing2` varchar(50) NOT NULL,
  `dosen_penguji1` varchar(50) NOT NULL,
  `nilai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ta`
--

INSERT INTO `tb_ta` (`id_ta`, `id_akun`, `tanggal_ta`, `judul_ta`, `objek_ta`, `laporan_ta`, `abstrak_ta`, `dosen_pembimbing1`, `dosen_pembimbing2`, `dosen_penguji1`, `nilai`) VALUES
(31, 18, '2023-06-05', 'Manajemen pengendalian persediaan pupuk pada PT Kintap Jaya Wattindo Perkebunan Kintap 1 ', 'PT Kintap Jaya Wattindo', 'Laporan_TA.pdf', 'Abstrak.pdf', 'Karolina, M.Pd', 'Rina Pebriana, SE., M. Comm', 'Eni Suasri, SE., M.M', NULL),
(32, 17, '2023-06-05', 'Penerapan Sistem Informasi Akuntansi Penerimaan dan Pengeluaran Kas pada Organisasi Nirlaba', ' PMI Kabupaten Tanah Laut', 'Laporan_TA1.pdf', 'Abstrak1.pdf', 'Widiya Astuti Alam Sur, S.Pd., M.Sc', 'Marliza Noor Hayatie, S.E., M.M', 'Karolina, M.Pd', NULL),
(33, 16, '2023-06-05', 'Penerapan Pencatatan Akuntansi Persediaan pada Persediaan Barang Minimarket Syariah Insan Nurul Muhibbin', 'Minimarket Syariah Insan Nurul Muhibbin', 'Laporan_TA2.pdf', 'Abstrak2.pdf', 'Karolina, M.Pd', 'Rina Pebriana, SE., M. Comm', 'Noor Amelia, S. ST, M. Si', NULL),
(34, 15, '2023-06-05', 'Perhitungan Penyusutan Aset Tetap Terhadap Laba Perusahaan Pada CV. Usaha Berkah Mulia', 'CV. Usaha Berkah Mulia', 'Laporan_TA3.pdf', 'Abstrak3.pdf', 'Eni Suasri, SE., M.M', 'Widiya Astuti Alam Sur, S.Pd., M.Sc', 'Rina Pebriana, SE., M. Comm', NULL),
(35, 14, '2023-06-05', 'Stik Daun Kelor', 'Tumbuhan', 'Laporan_TA4.pdf', 'Abstrak4.pdf', 'Titis Linangsari, S.T.P..M.Se', 'Ika Kusuma Nugraheni, S.Si., M.Sc', '	Mariatul Kiptiah, S.Sos., M.Si', NULL),
(36, 13, '2023-06-05', 'Formulasi pembuatan sabun cair dengan penambahan VCO serta ekstrak jeriangau ', 'Sabun', 'Laporan_PKL.pdf', 'Abstrak5.pdf', 'Ika Kusuma Nugraheni, S.Si., M.Sc', 'Raden Rizki Amalia, S.T., M.Si', 'Nina Hairiyah, S.T.P., M.Si', NULL),
(37, 12, '2023-06-05', 'Brownies Crispy', 'Makanan', 'Laporan_TA5.pdf', 'Abstrak6.pdf', 'Ika Kusuma Nugraheni, S.Si., M.Sc', '	Mariatul Kiptiah, S.Sos., M.Si', 'Raden Rizki Amalia, S.T., M.Si', NULL),
(38, 10, '2023-06-05', 'Sistem Informasi Inventory Barang Berbasis Web Di Koperasi Kodim 1009/Pelaihari ', 'Koperasi Kodim 1009/Pelaihari ', 'Laporan_TA6.pdf', 'Abstrak7.pdf', 'Winda Aprianti, S.Si., M.Si', 'Wiwik Kusrini, S.Kom., M.Cs', 'Rabini Sayyidati, M.Pd', NULL),
(39, 9, '2023-06-05', 'Sistem Informasi Pelayanan Masyarakat Desa Tirta Jaya Berbasis Web', 'Kelurahan Tirta Jaya', 'Laporan_TA7.pdf', 'Abstrak8.pdf', 'Wiwik Kusrini, S.Kom., M.Cs', 'Winda Aprianti, S.Si., M.Si', 'Ir. Agustian Noor, M.Kom', NULL),
(40, 11, '2023-06-05', 'Sistem Informasi Manajemen Laundry Berbasis Web Pada Laundry Sasa Pelaihari ', 'Laundry Sasa Pelaihari ', 'Laporan_TA8.pdf', 'Abstrak9.pdf', 'Rabini Sayyidati, M.Pd', 'Wiwik Kusrini, S.Kom., M.Cs', 'Herfia Rhomadhona, S.Kom, M.Cs', NULL),
(42, 8, '2023-08-15', 'Sistem Informasi Instalasi dan Perbaikan di Rumah Sakit Idaman Kota Banjarbaru', 'Rumah Sakit Idaman Kota Banjarbaru', 'Laporan_TA11.pdf', 'Abstrak12.pdf', 'Ir. Agustian Noor, M.Kom', 'Rabini Sayyidati, M.Pd', '	Khairul Anwar Hafizd, M.Kom', 'B+');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_usulan`
--

CREATE TABLE `tb_usulan` (
  `id_usulan` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `tanggal_usulan` date NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `tahun_terbit` varchar(4) DEFAULT NULL,
  `edisi` varchar(4) DEFAULT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `alasan` varchar(250) DEFAULT NULL,
  `status_usulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_usulan`
--

INSERT INTO `tb_usulan` (`id_usulan`, `id_akun`, `id_penerbit`, `tanggal_usulan`, `judul_buku`, `pengarang`, `tahun_terbit`, `edisi`, `isbn`, `alasan`, `status_usulan`) VALUES
(29, 9, 15, '2023-06-06', 'Ayat Ayat Cinta', 'Habiburrahman El Shirazy', '2020', '', '', NULL, 'Dikonfirmasi'),
(30, 9, 11, '2023-06-06', 'Dilan', 'Pidi Baiq', '', '', '', NULL, 'Dikonfirmasi'),
(31, 10, 9, '2023-06-06', 'Masih Ada Hari Esok ', 'Pipiet Senja', '2023', '', '', 'buku sulit dicari', 'Ditolak'),
(32, 10, 35, '2023-06-06', 'Penjelajah Antariksa', 'Djoko Lelono', '', '2', '', NULL, 'Menunggu Konfirmasi'),
(33, 11, 33, '2023-06-06', '5 CM ', 'Donny Dhirgantoro', '2023', '', '', NULL, 'Dikonfirmasi'),
(34, 12, 36, '2023-06-06', 'Laskar Pelangi', 'Andrea Hirata', '2023', '1', '9789792972270', NULL, 'Dikonfirmasi'),
(35, 12, 20, '2023-06-06', 'Ronggeng Dukuh Paruk ', 'Ahmad Tohari', '2023', '', '', NULL, 'Dikonfirmasi'),
(41, 1, 23, '2023-06-20', 'akuntansi', '', '', '', '', NULL, 'Menunggu Konfirmasi'),
(42, 1, 16, '2023-06-20', 'Jendela Dunia', '', '', '', '', NULL, 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `views`
--

INSERT INTO `views` (`id`, `count`) VALUES
(1, 136);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indeks untuk tabel `tb_ebooks`
--
ALTER TABLE `tb_ebooks`
  ADD PRIMARY KEY (`id_ebooks`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `tb_pkl`
--
ALTER TABLE `tb_pkl`
  ADD PRIMARY KEY (`id_pkl`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_pkl` (`id_pkl`),
  ADD KEY `id_ta` (`id_ta`);

--
-- Indeks untuk tabel `tb_ta`
--
ALTER TABLE `tb_ta`
  ADD PRIMARY KEY (`id_ta`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `tb_usulan`
--
ALTER TABLE `tb_usulan`
  ADD PRIMARY KEY (`id_usulan`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- Indeks untuk tabel `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_ebooks`
--
ALTER TABLE `tb_ebooks`
  MODIFY `id_ebooks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_pkl`
--
ALTER TABLE `tb_pkl`
  MODIFY `id_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_ta`
--
ALTER TABLE `tb_ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `tb_usulan`
--
ALTER TABLE `tb_usulan`
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD CONSTRAINT `tb_akun_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`),
  ADD CONSTRAINT `tb_akun_ibfk_2` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);

--
-- Ketidakleluasaan untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD CONSTRAINT `tb_dosen_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`);

--
-- Ketidakleluasaan untuk tabel `tb_ebooks`
--
ALTER TABLE `tb_ebooks`
  ADD CONSTRAINT `tb_ebooks_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`),
  ADD CONSTRAINT `tb_ebooks_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`);

--
-- Ketidakleluasaan untuk tabel `tb_pkl`
--
ALTER TABLE `tb_pkl`
  ADD CONSTRAINT `tb_pkl_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD CONSTRAINT `tb_registrasi_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`);

--
-- Ketidakleluasaan untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD CONSTRAINT `tb_surat_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tb_ta` (`id_ta`),
  ADD CONSTRAINT `tb_surat_ibfk_2` FOREIGN KEY (`id_pkl`) REFERENCES `tb_pkl` (`id_pkl`),
  ADD CONSTRAINT `tb_surat_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tb_surat_ibfk_4` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `tb_ta`
--
ALTER TABLE `tb_ta`
  ADD CONSTRAINT `tb_ta_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`);

--
-- Ketidakleluasaan untuk tabel `tb_usulan`
--
ALTER TABLE `tb_usulan`
  ADD CONSTRAINT `tb_usulan_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`),
  ADD CONSTRAINT `tb_usulan_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
