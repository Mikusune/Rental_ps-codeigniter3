-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 05:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental-ps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `Title`, `Deskripsi`, `foto`, `tgl`) VALUES
(2, 'Rental Mobil Bulanan di Jakarta', '<h1 style=\"text-align:center\">Rental Mobil Bulanan Jakarta</h1>\r\n\r\n<p style=\"text-align:justify\">Rental Mobil Bulanan di Jakarta. Armada lengkap terawat. Supir Ramah &amp; Profesional, Bisa Lepas Kunci. Asikrentcars&nbsp;atau Asikrentcars&nbsp; merupakan salah satu perusahaan layanan transportasi profesional yang menyediakan jasa penyewaan kendaraan serta layanan pengemudi di Jakarta.&nbsp;Selain sebagai penyedia jasa sewa kendaraan,&nbsp;kami juga menawarkan kerja sama yang saling menguntungkan, yaitu membuka penitipan kendaraan untuk disewakan. Anda bisa mendapatkan penghasilan bersih setiap bulan tanpa melakukan apa-apa, cukup dengan menitipkan kendaraan anda di tempat kami untuk digunakan sebagai kendaraan rental. Untuk info lebih detail silahkan hubungi kami.</p>\r\n\r\n<p>RENTAL MOBIL HARIAN, RENTAL MOBIL MINGGUAN, RENTAL MOBIL BULANAN, RENTAL MOBIL SEJABODETABEK.</p>\r\n\r\n<p><strong>Rental Mobil Lepas Kunci</strong></p>\r\n\r\n<p>Bebas pergi ke mana pun dan bebas atur waktu perjalanan Anda dengan&nbsp;sewa mobil bulanan di jakarta. Tenang saja, keamanan Anda tetap terjaga dengan jaminan kondisi mobil prima dan asuransi perjalanan. Pilih paket rental 12 jam atau perday 18 jam dengan opsi tambahan waktu atau trip keluar kota sesuai keperluan Anda.</p>\r\n\r\n<p><strong>Rental Mobil dengan Pengemudi</strong></p>\r\n\r\n<p>Ingin duduk santai menikmati perjalanan tanpa harus menyetir mobil sendiri. Manfaatkan sewa mobil dengan layanan pengemudi dari Asikrentcars&nbsp;. Layanan ini sudah termasuk sewa mobil, layanan pengemudi, asuransi perjalanan, biaya bensin, tol, dan parkir. Pengemudi andal kami akan menjemput dan mengantarkan Anda sampai ke tujuan dengan mengedepankan ketepatan waktu juga layanan yang ramah dan profesional. Pilih paket sesuai kebutuhan Anda: 12 jam atau 18 jam.</p>\r\n\r\n<p><strong>Hubungi : </strong>+62 813-81945880</p>\r\n', 'f781188e0b6d381443b74993fe8acc8e.jpg', '2020-07-08'),
(3, 'Sewa Mobil di Jakarta Dengan Supir', '<h1 style=\"text-align:center\">Sewa Mobil Jakarta Dengan Supir</h1>\r\n\r\n<p>RENTAL MOBIL HARIAN, RENTAL MOBIL MINGGUAN, RENTAL MOBIL BULANAN, RENTAL MOBIL SEJABODETABEK.</p>\r\n\r\n<ul>\r\n	<li><strong>Rental Mobil Lepas Kunci</strong>&nbsp;Bebas pergi ke mana pun dan bebas atur waktu perjalanan Anda dengan&nbsp;rental mobil jakarta timur. Tenang saja, keamanan Anda tetap terjaga dengan jaminan kondisi mobil prima dan asuransi perjalanan. Pilih paket rental 12 jam atau perday 18 jam dengan opsi tambahan waktu atau trip keluar kota sesuai keperluan Anda.</li>\r\n	<li><strong>Rental Mobil dengan Pengemudi</strong>&nbsp;Ingin duduk santai menikmati perjalanan tanpa harus menyetir mobil sendiri. Manfaatkan Asikrentcars&nbsp;dengan layanan pengemudi dari Asikrentcars. Layanan ini sudah termasuk sewa mobil, layanan pengemudi, asuransi perjalanan, biaya bensin, tol, dan parkir. Pengemudi andal kami akan menjemput dan mengantarkan Anda sampai ke tujuan dengan mengedepankan ketepatan waktu juga layanan yang ramah dan profesional. Pilih paket sesuai kebutuhan Anda: 12 jam atau 18 jam.</li>\r\n</ul>\r\n\r\n<p><strong>Hubungi : +62 813-8194-5880</strong></p>\r\n\r\n<p>Berikut jenis mobil yang kami sewakan adalah:</p>\r\n\r\n<ol>\r\n	<li><strong>Mobil keluarga MPV</strong>&nbsp;Toyota Innova Reborn, Kijang Innova Luxury, Toyota Avanza, Daihatsu Xenia, Honda Mobilio, Suzuki Ertiga, Suzuki APV, Daihatsu Grandmax, Daihatsu Luxio, Nissan Grand Livina,</li>\r\n	<li><strong>Mobil City Car</strong>&nbsp;Honda Jazz, Toyota Yaris, Honda Brio, Suzuki Swift.</li>\r\n	<li><strong>Mobil Sedan</strong>&nbsp;Honda City, Toyota Vios, dan Corolla</li>\r\n	<li><strong>Mobil Premium</strong>&nbsp;Toyota Alphard, Vellfire, Toyota Camry, BMW, Mercedes Benz (Mercy)</li>\r\n	<li><strong>Mobil SUV</strong>&nbsp;Mitsubishi Pajero Sport, Toyota Fortuner, Lexus, Range Rover, Honda HR-V dan CR-V</li>\r\n	<li><strong>Mobil Pariwisata &nbsp;</strong>Hiace, Isuzu Elf, Bus 3/4 (medium), HDD maupun SHD dengan kapasitas 20-60 penumpang.</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Segera hubungi kami untuk mendapatkan informasi mengenai sewa mobil murah dengan Asikrentcars, berkualitas dan terlengkap kami siap melayani anda 24 jam.</p>\r\n\r\n<p>RENTAL MOBIL DENGAN PENGEMUDI</p>\r\n\r\n<p>Ingin duduk santai menikmati perjalanan tanpa harus menyetir mobil sendiri. Manfaatkan sewa mobil dengan layanan pengemudi dari Asikrentcars. Layanan ini sudah termasuk sewa mobil, layanan pengemudi, asuransi perjalanan, biaya bensin, tol, dan parkir. Pengemudi andal kami akan menjemput dan mengantarkan Anda sampai ke tujuan dengan mengedepankan ketepatan waktu juga layanan yang ramah dan profesional. Pilih paket sesuai kebutuhan Anda: 12 jam atau 24 jam.</p>\r\n', '2b12b40099f83ab6e1f9f5c147a38995.jpg', '2020-07-08'),
(4, 'ps5 pro akan keluar', '<p style=\"text-align:center\">Ps 5Pro&nbsp;</p>\r\n', '9c3653339b0e85ecb9cf762faf4283e5.jpeg', '2024-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nama_rental` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `nama_rental`, `username`, `alamat`, `gender`, `no_telp`, `no_ktp`, `password`, `role_id`) VALUES
(6, 'Admin', '', 'admin', 'admin', 'Laki-laki', '000', '000', '21232f297a57a5a743894a0e4a801fc3', 1),
(22, 'Spartan Playstation', 'Spartan Playstation', 'spartan', 'Jl. H. Gari, Pesanggrahan, Kec. Pesanggrahan, Kota Jakarta Selatan', 'Laki-laki', '085715863901', '3098876782146782', '202cb962ac59075b964b07152d234b70', 3),
(23, 'Rental Arafah', 'Rental Arafah Playstation', 'arafah', 'Jl. Keadilan Raya No.411, Bakti Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16417', 'Laki-laki', '089545464623', '3467812364784443003', '202cb962ac59075b964b07152d234b70', 3),
(25, 'efra', '', 'efra', 'jalan dongkal', 'Laki-laki', '0787756387562', '3871249634342', '202cb962ac59075b964b07152d234b70', 2),
(26, 'seva', '', 'seva', 'jalan kapitan', 'Laki-laki', '087657526622', '37867867873', '202cb962ac59075b964b07152d234b70', 2),
(27, 'alzora', '', 'alzora', 'jalan jatijajar', 'Laki-laki', '089565432230', '30087677866899', '202cb962ac59075b964b07152d234b70', 2),
(28, 'mury', '', 'mury', 'jalan saudara rt 04 rw 010 no 11a', 'Laki-laki', '089530807615', '39089073444', '202cb962ac59075b964b07152d234b70', 2),
(29, 'mikusune', '', 'miku', 'jalan kemang', 'Perempuan', '087655433324', '39078978964', '202cb962ac59075b964b07152d234b70', 2),
(30, 'tri', '', 'tri', 'DEPOK', 'Laki-laki', '089530987654', '3993837255264', '202cb962ac59075b964b07152d234b70', 2),
(31, 'R.A Gaming', 'R.A Gaming', 'ragaming', 'Jl. Merdeka No.22, Depok Timur, Abadijaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16417', 'Laki-laki', '0811826577', '21783467836278163891798', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_mess` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telp` varchar(255) NOT NULL,
  `Pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_mess`, `Nama`, `Email`, `Telp`, `Pesan`) VALUES
(1, 'Ahmad Subadri', 'ahmadsubadri08@gmail.com', '085268929843', 'Pelayananya sangat nyaman, dan kendaraanya juga nyaman untuk digunakan berkendara di dalam atauoun luar kota'),
(3, 'efra', 'efradwi@gmail.com', '097652356723', 'kurang murah'),
(4, 'mury', 'trimuryanto78@gmail.com', '089530807615', 'mantap');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `nama_payment` varchar(120) NOT NULL,
  `key_payment` varchar(120) NOT NULL,
  `atas_nama` varchar(120) DEFAULT NULL,
  `nama_rental` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `nama_payment`, `key_payment`, `atas_nama`, `nama_rental`) VALUES
(2, 'Bank BRI', '42367482374', 'Mang Group', 'Jaya Rental'),
(3, 'Bank Kai', '123', NULL, 'Murah Rental'),
(6, 'nro', 'ljk', NULL, 'Murah Rental'),
(7, 'jkjk', '899', 'fdsfs', 'Murah Rental'),
(8, 'Paypal', 'mang@mangkok.com', 'Mang Group', 'Jaya Rental'),
(9, 'BANK BRI', '478657865432656', 'Sejahtera Travel', 'Sejahtera Travel'),
(10, 'DANA', '08115656777', 'Sejahtera Travel', 'Sejahtera Travel'),
(11, 'OVO', '08115656777', 'Sejahtera Travel', 'Sejahtera Travel'),
(12, 'BANK BNI', '2367489773', 'Sejahtera Travel', 'Sejahtera Travel'),
(13, 'BANK MANDIRI', '3493439897432', 'Sejahtera Travel', 'Sejahtera Travel'),
(14, 'BANK BRI', '324349897689743', 'Permata Rental', 'Permata Rental'),
(15, 'BANK BNI', '2487539893', 'Permata Rental', 'Permata Rental'),
(16, 'BANK BRI', '47254587854765', 'Putra Riau Travel', 'Putra Riau Travel'),
(17, 'BANK BNI', '5247698584', 'Putra Riau Travel', 'Putra Riau Travel'),
(18, 'BANK MANDIRI', '4373487899322', 'Putra Riau Travel', 'Putra Riau Travel'),
(19, 'Bank BCA', '23678216478623', 'Efra Dwi', 'Spartan Playstation');

-- --------------------------------------------------------

--
-- Table structure for table `ps`
--

CREATE TABLE `ps` (
  `id_ps` int(11) NOT NULL,
  `nama_rental` varchar(120) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `ukuran_disk` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `kabel_hdmi` int(11) NOT NULL,
  `kabel_power` int(11) NOT NULL,
  `controller` int(11) NOT NULL,
  `game` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ps`
--

INSERT INTO `ps` (`id_ps`, `nama_rental`, `kode_type`, `merk`, `ukuran_disk`, `warna`, `tahun`, `status`, `harga`, `denda`, `kabel_hdmi`, `kabel_power`, `controller`, `game`, `gambar`) VALUES
(21, 'Spartan Playstation', 'xbox', 'Xbox Series S', '256 gb', 'HITAM', '2020', '0', 75000, 8000, 1, 1, 1, 1, 'xbox-series-s.jpg'),
(22, 'Spartan Playstation', 'ntd', 'Nintedo Switch', '128gb', 'MERAH&BIRU', '2020', '1', 50000, 5000, 1, 1, 1, 1, 'nintendo_switch.jpg'),
(23, 'Rental Arafah Playstation', 'PS', 'PLAYSTATION 5', '1TB', 'putih', 'puti', '1', 100000, 10000, 1, 1, 0, 1, 'ps52.jpg'),
(24, 'Rental Arafah Playstation', 'pc', 'Steam Deck', '64gb', 'HITAM', '2023', '1', 150000, 15000, 0, 0, 1, 1, 'Steam_Deck.jpg'),
(25, 'Rental Arafah Playstation', 'pc', 'GPD Win 4', '256 gb', 'HITAM', '2023', '1', 125000, 15000, 0, 1, 1, 1, 'GPD_Win_4.jpg'),
(26, 'R.A Gaming', 'PS', 'PLAYSTATION 4', '1TB', 'HITAM', '2018', '1', 75000, 7500, 1, 1, 1, 1, 'ps41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_ps` int(11) NOT NULL,
  `nama_rental` varchar(120) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `total_denda` varchar(120) NOT NULL DEFAULT '0',
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(130) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_ps`, `nama_rental`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(10, 9, 17, 'Sejahtera Travel', '2020-06-08', '2020-06-12', 800000, 100000, '58604166.666667', '2022-01-19', 'Kembali', 'Selesai', '009.PNG', 1),
(15, 20, 9, 'Putra Riau Travel', '2022-01-09', '2022-01-12', 300000, 45000, '90000', '2022-01-14', 'Kembali', 'Selesai', 'Bukti_Pembayaran_Contoh.jpg', 1),
(17, 21, 20, 'Spartan Playstation', '2024-06-15', '2024-06-16', 50000, 5000, '0', '2024-06-16', 'Kembali', 'Selesai', 'WhatsApp-Image-2023-04-16-at-13_05_52.jpeg', 1),
(18, 28, 21, 'Spartan Playstation', '2024-06-18', '2024-06-19', 75000, 8000, '0', '2024-06-19', 'Belum Kembali', 'Belum Selesai', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(7, 'PS', 'PLAYSTATION'),
(8, 'xbox', 'Microsoft Xbox'),
(9, 'ntd', 'Nintendo'),
(10, 'pc', 'Pc console'),
(11, 'arc', 'Arcade Game');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_mess`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `ps`
--
ALTER TABLE `ps`
  ADD PRIMARY KEY (`id_ps`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_mess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ps`
--
ALTER TABLE `ps`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
