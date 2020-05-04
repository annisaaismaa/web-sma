-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jul 2019 pada 06.18
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `nis` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_masuk` varchar(10) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `no_telp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tahun_masuk`, `tahun_lulus`, `no_telp`) VALUES
(456789, 'Devi fermatasari', 'Palembang', '0000-00-00', 'P', 'Jln KH Wahid Hasyim Lr.AA no90 Palembang      ', '2012', '2018', '0823768789889');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beranda`
--

CREATE TABLE `beranda` (
  `id_beranda` int(4) NOT NULL,
  `informasi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beranda`
--

INSERT INTO `beranda` (`id_beranda`, `informasi`, `gambar`) VALUES
(8, 'SD Negeri 79 Palembang terletak di jalan KH. A. Azhari lorong Manunggal  kelurahan 9/10 Ulu kecamatan Jakabaring Palembang nomor NSS (Nomor Statistik Sekolah) : 10603489 dan NPSN (Nomor Pokok Sekolah Nasional : 101116003489 hingga saat ini. Dengan  waktu penyelenggaraan kombinasi (pagi dan siang).                        ', 'beranda/files/13.jpg'),
(21, 'Asal usul SD Negeri 79 Palembang, berawal pada tahun 1914 berdiri pada sebidang tanah berukuran 3.333 m2 dengan status bangunan hibah. Sekolah yang pertama yaitu Sekolah Rakyat, dari Sekolah Rakyat (SR) menjadi Sekolah Dasar (SD). Sekolah Dasar terdiri dari tujuh sekolah yaitu: SD Negeri 8, SD Negeri 37, SD Negeri 49, SD Negeri 51, SD Negeri 367, SD Negeri 448 dan SD Negeri 562. Kemudian di regrouping menjadi tiga sekolah, yaitu: SD Negeri 109, SD Negeri 110 dan SD Negeri 111. Berdasarkan Peraturan Walikota Palembang Nomor 21 tahun 2005 tentang Penggabungan, Penghapusan, Penggantian Nama dan Nomor Statistik Sekolah Dasar, maka SD Negeri 109 berganti menjadi SD Negeri 84.  ', 'beranda/files/12.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(4) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal_berita`, `judul_berita`, `isi_berita`, `gambar`) VALUES
(5, '2019-07-04', 'Sudah Tahu Cara Kirim Pesan WhatsApp Tanpa Simpan Nomor?', 'Buat yang belum tahu, kamu bisa saja kirim pesan alias chat WhatsApp tanpa menyimpan nomor orang yang dituju. \r\nWhatsapp populer digunakan untuk mengirim pesan instan. Nah, bisa saja ada kalanya kamu malas menyimpan nomor orang ketika ingin berkirim pesan.\r\nSehubungan itu, kamu pun bisa saja nge-chat WhatsApp tanpa harus lebih dulu menyimpan nomor orang yang hendak dikirimkan pesan. Metode ini sendiri tak butuh aplikasi tertentu dan bisa dipakai di iOS maupun Android.\r\nBagaimana caranya? Langsung saja ikuti cara berikut ini, seperti dikutip dari Android Pit.\r\n            ', 'berita/files/bc251a16-acd9-4dc2-ad81-bcceb44698ec_169.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id_bukutamu` int(4) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `pesan` text NOT NULL,
  `balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id_bukutamu`, `nama`, `pesan`, `balasan`) VALUES
(4, 'Bpk. Narto Likuan', 'Saya mau tanya bagaimana cara untuk mendaftar online ke SD N 79 Palembang ini ? dan apakah ada pilihan kelas Pagi dan Siang ?<br>Dikirim : 08-07-2019 Pkl. 05:56:38 Wib', 'Terima kasih Bpk.Narto Likuan atas pesannya <br>\r\nUntuk mendaftar online silahkan mengklik tautan berikut <a href="http://localhost/websekolah/index.php?page=tambah_daftar" target="_blank">Link Pendaftaran Siswa Baru 2019</a>\r\n<br>\r\nUntuk pilihan kelas ada 2 yaitu : Pagi dan Siang\r\n<br>\r\nInfo lebih lanjut silahkan hubungi kami di menu Kontak Kami\r\nTerima Kasih\r\n<br>Dikirim : 08-07-2019 Pkl. 07:03:23 Wib      <br>Dikirim : 08-07-2019 Pkl. 07:08:30 Wib');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(4) NOT NULL,
  `tanggal_galeri` date NOT NULL,
  `judul_galeri` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `tanggal_galeri`, `judul_galeri`, `keterangan`, `gambar`) VALUES
(1, '2019-07-04', 'Lokasi Pembangunan Gedung Baru', 'Rencana Lokasi Pembangunan Gedung Baru', 'galeri/files/a4.jpg'),
(2, '2019-07-04', 'Pentas Seni 2019', 'Penutupan Pentas Seni 2019 ', 'galeri/files/a6.jpg'),
(3, '2019-07-04', 'Upacara 17 Agustus 2018', 'Pembukaan Upacara 17 Agustus 2018', 'galeri/files/a8.jpg'),
(4, '2019-07-04', 'Tahapan Pendaftaran', 'Tahapan Pendaftaran Siswa Baru Tahun Ajaran 2019    ', 'galeri/files/a17.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `ijazah_terakhir` varchar(30) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `pendidikan` varchar(35) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `ijazah_terakhir`, `tahun_lulus`, `pendidikan`, `jabatan`, `alamat`, `status`) VALUES
(2147483647, 'Hj. Azizah, S.Pd', 'Palembang', '2019-07-13', 'P', 'S1', '2010', 'Sarjana Pendidikan', 'Kepala Sekolah', 'Jalan Sungai Sahang No 89 Palembang                                          ', 'Guru Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pendaftaran` int(8) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tk_asal` varchar(50) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan_ortu` varchar(50) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `tanggal_daftar`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `tk_asal`, `nama_ortu`, `pekerjaan_ortu`, `no_telp`, `alamat`, `status`, `foto`) VALUES
(4, '2019-07-05', 'Basuki Kurniawan', 'Palembang', '2013-01-01', 'Islam', 'L', 'TK Payung Hitam Palembang', 'Hermansyah, S.Kom', 'Guru Komputer', '08197646888', 'Jalan Seduduk Putih Blok 1A No.89 Palembang            ', 'Belum Verifikasi', 'daftar/files/Koala.jpg'),
(14, '2019-07-01', 'Robi Hidayat', 'Palembang', '2012-10-01', 'Islam', 'L', 'TK Harapan Mulya Palembang', 'Tri Basuki Purnama, ST', 'PNS', '081276534567', 'Jalan Sudirman No.45 Palembang', 'Belum Verifikasi', ''),
(16, '2019-07-11', 'Dedi Tarmizi', 'Palembang', '1989-07-12', 'Islam', 'L', 'TK Sakinah Palembang', 'Herman', 'PNS', '08197658667', 'Jalan Sudirman No.90 Palembang', 'Belum Verifikasi', 'daftar/files/Koala.jpg'),
(17, '2019-07-09', 'Rahmat Tarmizi', 'Palembang', '1989-07-12', 'Islam', 'L', 'TK Sakinah Palembang', 'Hermansyah', 'PNS', '08197658667', 'Jalan Bangau No 60 Palembang', 'Belum Verifikasi', 'daftar/files/Penguins.jpg'),
(18, '2019-07-18', 'fghhdfh', 'dfh', '2019-07-23', 'Islam', 'L', 'fdghfghdfg', 'dfhf', 'dfgj', 'fgj', 'dfj', 'Belum Verifikasi', 'daftar/files/Desert - Copy.jpg'),
(19, '2019-07-19', 'Rahmat Tarmizi', 'Palembang', '2019-07-24', 'Islam', 'L', 'TK Sakinah Palembang', 'fdhdfg', 'dfj', 'fdj', 'fdjdfj', 'Belum Verifikasi', 'daftar/files/Hydrangeas.jpg'),
(20, '2019-07-11', 'Feri Ardian', 'Lampung', '2000-07-07', 'Islam', 'L', 'TK Sakinah Palembang', 'Dedi Januari', 'PNS', '0821787889', 'Jalan Maryam No 90 Palembang      ', 'Belum Verifikasi', 'daftar/files/Chrysanthemum.jpg'),
(21, '2019-07-19', 'Rahmat Tarmizi', 'Palembang', '2010-07-14', 'Islam', 'L', 'TK Sakinah Palembang', 'Hermansyah', 'PNS', '08197658667', 'sgdsgsdg', 'Belum Verifikasi', 'files/Penguins.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polingpelayanan`
--

CREATE TABLE `polingpelayanan` (
  `id_poling` int(4) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `smemuaskan` int(4) NOT NULL,
  `memuaskan` int(4) NOT NULL,
  `cmemuaskan` int(4) NOT NULL,
  `kmemuaskan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `polingpelayanan`
--

INSERT INTO `polingpelayanan` (`id_poling`, `pertanyaan`, `smemuaskan`, `memuaskan`, `cmemuaskan`, `kmemuaskan`) VALUES
(1, 'Bagaimana pendapat anda tentang pelayanan kami ?', 15, 7, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `polingweb`
--

CREATE TABLE `polingweb` (
  `id_poling` int(4) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `sangat_baik` int(4) NOT NULL,
  `baik` int(4) NOT NULL,
  `cukup` int(4) NOT NULL,
  `kurang` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `polingweb`
--

INSERT INTO `polingweb` (`id_poling`, `pertanyaan`, `sangat_baik`, `baik`, `cukup`, `kurang`) VALUES
(2, 'Apa pendapat anda tentang website ini ?', 27, 10, 13, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kelas`, `alamat`, `no_telp`, `nama_ayah`, `nama_ibu`, `pekerjaan`) VALUES
(123456, 'Deni Erwansyah', 'Palembang', '2012-07-10', 'L', 'XIII-3', 'Jalan Macan Kumbang 5 A No 50 Palembang       ', '0895686787354', 'Ishak', 'Meli', 'PNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator Website', 'admin', 'admin123', 'admin'),
(2, 'Laela Giatri', 'laela', 'laela123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id_beranda`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id_bukutamu`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `polingpelayanan`
--
ALTER TABLE `polingpelayanan`
  ADD PRIMARY KEY (`id_poling`);

--
-- Indexes for table `polingweb`
--
ALTER TABLE `polingweb`
  ADD PRIMARY KEY (`id_poling`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id_beranda` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id_bukutamu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `no_pendaftaran` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `polingpelayanan`
--
ALTER TABLE `polingpelayanan`
  MODIFY `id_poling` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `polingweb`
--
ALTER TABLE `polingweb`
  MODIFY `id_poling` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
