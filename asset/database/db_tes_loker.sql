-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2024 pada 14.05
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tes_loker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'ngadimin', 'admin', 'admin'),
(3, 'TES', 'TES', 'TES'),
(4, 'Pentol', 'Pentol', 'Pentol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah`
--

CREATE TABLE `daerah` (
  `id_daerah` int(4) NOT NULL,
  `nama_provinsi` varchar(200) NOT NULL,
  `kab_kota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daerah`
--

INSERT INTO `daerah` (`id_daerah`, `nama_provinsi`, `kab_kota`) VALUES
(1, 'Jawa Tengah', 'Kabupaten Karanganyar'),
(9, 'Jawa Tengah', 'Kabupaten Boyolali'),
(10, 'Jawa Tengah', 'Kabupaten Sukoharjo'),
(11, 'Jawa Tengah', 'Kota Surakarta'),
(14, 'Jawa Tengah', 'Kabupaten Klaten'),
(15, 'Jawa Tengah', 'Kabupaten Sragen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan_loker`
--

CREATE TABLE `iklan_loker` (
  `id_loker` int(5) NOT NULL,
  `nama_loker` varchar(200) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `daerah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `iklan_loker`
--

INSERT INTO `iklan_loker` (`id_loker`, `nama_loker`, `nama_perusahaan`, `deskripsi`, `daerah`) VALUES
(1, 'IT Support', 'DesignKU', 'Job Description :\n\nDelivery of IT services for a site or multiple sites within a ratio of up to 250 devices (PCs, Servers, Printers, Local Network equipment) managed per FTE. \nManagement of IT Service Delivery activities at the site(s) including maintaining all user support processes, customer relations and IT asset management (procurement, configuration, repair, projects, local budget consulting, license management, security systems and phone systems).\nAbility to support Amcor standard workstation deployment and support. \nAbility to support Server and Virtualization environment\nAbility to drive process and infra improvement in relation to IT to improvise IT services under minimal supervision.\nCommunication & Education: Provide clear communication on upcoming changes and projects, implement best practices to sites and support end-user training. \nEnsure operational activities aligns with global IT standards and security policies.\nTo fulfil Site specific assignment related to IT Infrastructure /Tele- Communication and its operational requirements\nStrong involvement with delivery on improvements to support processes, IT asset management, and customer satisfaction. \n \n\nJob Specifications :\n\nBachelor’s degree in computer science is advantageous\nMinimum of 3 years in service delivery, preferably in a multi-national environment for IT technical and help desk areas\nAbility to multitask and handle high volumes in a fast-paced and demanding environment \nStrong interpersonal and communication skills\nStrong Troubleshooting skills\nFluency in English communication (spoken, written); other languages will be considered an advantage\nStrong knowledge of Windows operating systems, Microsoft Office Suite, and other common software applications\nBe accountable and prepared to address or support any cyber related concerns and issues\nFamiliarity with network protocols, LAN/WAN, switches, and wireless technologies\nRespond to IT helpdesk tickets, diagnose problems, and resolve technical issues in a timely manner\nEducate end-users on IT best practices and guidelines to enhance productivity and security  \nTroubleshoot network connectivity issues, both wired and wireless, and ensure network availability \nProvide training and support to new employees to ensure a smooth transition into the organization\nAssist with workstation setups, software installations, configurations, and troubleshooting', 'Kota Surakarta'),
(2, 'Graphic Designer', 'CV Jaya Abadi', 'Usia maksimal 30 tahun\r\nPendidikan minimal D1 / S1 jurusan Graphic Design / Visual Communication Design\r\nDapat mengoperasikan software seperti : Photoshop, Illustrator, Premiere / After Effect, Freehand\r\nSmart, creative, initiative and Team Player\r\nPengalaman di bidang graphic design minimal 2 tahun\r\nDomisili dekat dengan perusahaan (sekitar pluit, muara karang, kapuk, cengkareng)\r\nHarus Melampirkan Portofolio Design (berupa PDF atau Link pada Biodata), Tdk melampirkan tidak di proses lanjut.\r\nURGENTLY NEEDED. Serious Applicant Only. Thanks\r\nSudah Vaksin Ke 1 & 2 lebih diutamakan yang sudah vaksin ke 2', 'Kabupaten Klaten'),
(9, 'Brand Officer', 'Konimex', 'Bertanggung jawab atas tersedianya rencana strategis pemasaran brand yang menjadi tanggung jawabnya\r\n• Lulusan S1 Manajemen/ Akuntansi\r\n• IPK min. 2.75; Masa studi S1 maks. 6 tahun\r\n• Berpengalaman dalam brand management minimal 1 tahun\r\n• Mampu berpikir secara kreatif, inisiatif, dan memiliki keinginan untuk berkembang di bidang brand management\r\n• Penempatan di PT Konimex, Solo (Sukoharjo)', 'Sukoharjo'),
(10, 'HOST LIVE SHOPPE', 'CY Yucan Abadi', 'Wanita, umur 25 - 30 tahun, berpenampilan menarik\r\nPublic speaking bagus\r\nJam kerja 15.00 - 18.00\r\nLibur seminggu sekali\r\nBerpengalaman', 'Surakarta'),
(11, 'Production Officer', 'Konimex', 'Production Officer bertanggung jawab atas penyusunan dan pelaksanaan rencana produksi untuk menghasilkan produk yang sesuai dengan standar mutu, jumlah, dan waktu. Jabatan ini juga bertugas untuk mengkoordinir dan mengawasi pelaksanaan proses produksi, serta membuat laporan terkait proses produksi secara tepat waktu.\r\n\r\nPersyaratan:\r\n• Lulusan S1 Farmasi/ Profesi Apoteker\r\n• IPK S1 min. 2.75; Masa studi S1 maks. 6 tahun\r\n• Bersedia untuk bekerja secara shift\r\n• Sehat secara jasmani dan rohani\r\n• Bersedia ditempatkan di PT Konimex, Solo', 'Surakarta'),
(12, 'Area Sales Manager (Divisi Ethical)', 'Konimex', 'Bertanggung jawab terhadap peningkatan demand dengan tujuan mencapai target bulanan\r\n\r\nPersyaratan:\r\n• Lulusan pendidikan minimal SLTA Sederajat\r\n• Memiliki motor dan SIM C\r\n• Memiliki pengalaman sebagai Area Sales Manager di bidang Ethical minimal 2 tahun atau Area Sales Supervisor di bidang Ethical minimal 3 tahun', 'Sukoharjo'),
(13, 'IT Support', 'Tribun Solo', 'Deskripsi pekerjaan IT Support \r\nUsia maks. 30 th\r\nPend. minimal SMK\r\nDiutamakan memiliki pengalaman di bidang IT\r\nMemahami system installation, configuration, & analysis\r\nMemahami network, hardware, & software\r\nMemahami TCP/IP, VPN, VLAN, dan menguasai mikrotik\r\nMampu bekerja dengan deadline', 'Kota Surakarta'),
(14, 'Barista', 'Kartika Accessories Sukoharjo', '- Mengetahui tentang kopi dan meracik minuman (Berpengalaman)\r\n- Memiliki kerendahan hati dalam memberikan pelayanan ekselen kepada Pelanggan.\r\n- Melakukan penjualan (Promosi, Provokasi, Up/Down/Cross Selling).\r\n- Melakukan Greeting, Branding/Flyering.\r\n- Bersedia bekerja dengan pencapaian target (omset , beban tugas, dll).\r\n- Jadwal Kerja Shift Pagi/Shift Siang.', 'Kabupaten Sukoharjo'),
(15, 'PIMPINAN TOKO', 'Kartika Accessories Sukoharjo', 'Tanggung Jawab Pekerjaan:\r\nMemiliki kerendahan hati dalam memberikan pelayanan ekselen kepada Pelanggan.\r\nMampu memimpin dan mengelola tim dengan baik.\r\nMembuat perencanaan, evaluasi dan laporan kerja.\r\nMampu mengambil keputusan dengan tepat dan cepat.\r\nMelakukan penjualan dan pengawasan penjualan (Promosi, Provokasi, Up/Down/Cross Selling).\r\nMenguasai Product Knowledge, Pengelolaan Persediaan, Penataan Barang.\r\nMengelola sarana dan prasarana dengan baik.\r\nBersedia bekerja dengan pencapaian target (omset , beban tugas, dll)\r\n\r\nKualifikasi Umum:\r\nSehat jasmani dan rohani.\r\nLaki-laki Nilai IPK min. 3.0 dan pendidikan min. S1 semua jurusan.\r\nBerpengalaman di bidang Manajerial dan Supervisi.\r\nBersedia ditempatkan dimana saja.\r\nKomunikatif (ekspresi, intonasi, bahasa tubuh).\r\nMemiliki jiwa pelayanan, semangat, optimis, antusias serta attitude yang baik.\r\nBerintegritas tinggi, disiplin dan bertanggung jawab.', 'Kabupaten Sukoharjo'),
(16, 'Admin Toko', 'Kartika Accessories Sukoharjo', 'Deskripsi Pekerjaan\r\n\r\nMemiliki kerendahan hati dalam memberikan pelayanan ekselen kepada Pelanggan dan STAF KARYAWAN.\r\nMelaksanakan administrasi pembelian, penjualan, pembayaran lain dan laporan keuangan.\r\nMengelola sarana dan prasarana dengan baik.\r\nBersedia bekerja dengan pencapaian target (beban tugas, dll).\r\nMampu dan bersedia bekerja secara individu dan tim\r\n\r\nKualifikasi Umum\r\nSehat jasmani dan rohani.\r\nLaki-laki/Perempuan.\r\nUmur maks. 27 tahun.\r\nTinggi badan min. 155 cm Berat badan ideal.\r\nBerpengalaman diutamakan.\r\nBerpenampilan menarik Komunikatif (ekspresi, intonasi, bahasa tubuh).\r\nMemiliki jiwa pelayanan, semangat, optimis, antusias serta attitude yang baik.\r\nBerintegritas tinggi, disiplin dan bertanggung jawab\r\nMampu mengoperasikan komputer dan menguasai MS Office (Word & Excel).\r\nTidak sedang menempuh pendidikan\r\nLihat Lebih Sedikit', 'Kabupaten Sukoharjo'),
(18, 'Crew Toko', 'Kartika Accessories Sukoharjo', 'Deskripsi Pekerjaan:\r\n• Memiliki kerendahan hati dalam memberikan pelayanan ekselen kepada Pelanggan.\r\n• Melakukan penjualan (Promosi, Provokasi, Up/Down/Cross Selling).\r\n• Melakukan Greeting, Branding/Flyering.\r\n• Menguasai Product Knowledge, Pengelolaan Persediaan, Penataan Barang.\r\n• Bersedia bekerja dengan pencapaian target (omset , beban tugas, dll).\r\n• Jadwal Kerja Shift Pagi/Shift Siang.\r\n\r\nKualifikasi Umum:\r\n• Sehat jasmani dan rohani.\r\n• Laki-laki /Perempuan.\r\n• Umur maks. 27 tahun.\r\n• Tinggi badan dan Berat badan ideal.\r\n• Pendidikan min. SMU/SMA dan sederajat\r\n• Berpengalaman diutamakan.\r\n• Berpenampilan menarik.\r\n• Komunikatif (ekspresi, intonasi, bahasa tubuh).\r\n• Memiliki jiwa pelayanan, semangat, optimis, antusias serta attitude yang baik.\r\n• Berintegritas tinggi, disiplin dan bertanggung jawab.', 'Kapubaten Sukoharjo'),
(19, 'Driver', 'Kartika Accessories Sukoharjo', '- Sehat jasmani dan rohani.\r\n- Laki-laki.\r\n- Usia Maksimal 35 tahun.\r\n- Memiliki SIM B1.\r\n- Berpengalaman mínimal 2 tahun menjadi _driver _pribadi (termasuk mobil Eropa).\r\n- Berpenampilan rapi dan menarik.\r\n- Mampu mengoperasikan kendaraan Automatic/Manual.\r\n- Memiliki _attitude_ yang baik.\r\n- Disiplin dan bertanggung jawab.', 'Kabupaten Sukoharjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(150) NOT NULL,
  `nama_loker` varchar(200) NOT NULL,
  `foto` text NOT NULL,
  `usia` int(2) NOT NULL,
  `no_hp_user` int(13) NOT NULL,
  `jeniskelamin` varchar(9) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat_user` text NOT NULL,
  `file_cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `nama_user`, `nama_perusahaan`, `nama_loker`, `foto`, `usia`, `no_hp_user`, `jeniskelamin`, `tanggal_lahir`, `email`, `alamat_user`, `file_cv`) VALUES
(1, 'ALL IN', 'Kartika Accessories Sukoharjo', 'Admin Toko', 'ALL_IN.png', 0, 1372272, '', '0000-00-00', 'bakso_ujer@gmail.com', '', 'upload.png'),
(2, 'ALL IN', 'Kartika Accessories Sukoharjo', 'PIMPINAN TOKO', '1-ALL_IN.jpg', 25, 1372272, 'Perempuan', '2013-12-31', 'bakso_ujer@gmail.com', 'Jl Bakso 1234 Semarang Tengah', 'upload.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(5) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `deskripsi_perusahaan` text NOT NULL,
  `daerah` varchar(200) NOT NULL,
  `no_hp_perusahaan` int(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `logo_perusahaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat_perusahaan`, `deskripsi_perusahaan`, `daerah`, `no_hp_perusahaan`, `email`, `username`, `password`, `logo_perusahaan`) VALUES
(1, 'DesignKU', 'Jl Korintang 122 Malangkerto Jebres Suralarta', 'Perusahaan ini bekerja pada bidang Design, Percetakan', 'Kota Surakarta', 57302826, 'designku@designku.com', 'hrd-designku', 'hrd-designku', 'janggar.png'),
(2, 'CV Jaya Abadi', 'Jl Raya Wonosari - Delanggu, Wonosari, Klaten Jawa Tengah', 'Perusahaan ini bekerja pada bidang perkebunan\r\n', 'Kabupaten Klaten', 2045483647, 'hrd-jayaabadi@jayaabadi.id', 'hrd-jayaabadi', 'hrd-jayaabadi', ''),
(3, 'Kartika Accessories Sukoharjo', 'Jl Telukan - Manang Sukoharjo', 'Bidang Aksesoris Handphone, Laptop', 'Kabupaten Sukoharjo', 1024869459, 'hrd_kartika_sukoharjo@kartika.com', 'hrd_kartika_sukoharjo', 'hrd_kartika_sukoharjo', 'KSD.png'),
(4, 'aa', '', '', '', 0, 'aa', 'aa', 'aa', ''),
(5, 'Konimex', 'Jalan Gatak - Gentan Kompleks Konimex, Keamatan Gatak, Kabupaten Sukoharjo', 'Perusahaan ini bekerja pada bidang farmasi', 'Kabupaten Sukoahrjo', 2147483647, 'hrd-konimex-div-solo@konimex.co.id', 'hrd-konimex-div-solo', 'hrd-konimex-div-solo', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(3) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Jawa Tengah'),
(2, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `usia` int(3) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jeniskelamin` varchar(9) NOT NULL,
  `alamat_user` text NOT NULL,
  `daerah` varchar(200) NOT NULL,
  `no_hp_user` int(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `usia`, `tanggal_lahir`, `jeniskelamin`, `alamat_user`, `daerah`, `no_hp_user`, `email`, `username`, `password`, `foto`) VALUES
(1, 'ALL IN', 25, '2013-12-31', 'Perempuan', 'Jl Bakso 1234 Semarang Tengah', 'Semarang', 13722767, 'bakso_ujer@gmail.com', 'user', 'user', '1-ALL_IN.jpg'),
(2, 'Imanuel', 23, '2024-05-15', 'Laki Laki', 'Jl Elang Perkasa RT 4 RW 6 Keprabon Banjarsari Surakarta', 'Kota Surakarta', 456789032, 'imanuel.k@gmail.com', 'imanuel12', 'imanuel12', '2-o.png'),
(22, 'Kalem', 24, '2024-06-17', 'Laki Laki', 'hefbfhvbhfv', '', 2147483647, 'kalem12@gmail.com', 'kalem12', 'kalem12', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indeks untuk tabel `iklan_loker`
--
ALTER TABLE `iklan_loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id_daerah` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `iklan_loker`
--
ALTER TABLE `iklan_loker`
  MODIFY `id_loker` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
