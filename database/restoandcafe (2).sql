-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2020 pada 17.06
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoandcafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `password`, `nama`) VALUES
(1, 21232, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery`
--

CREATE TABLE `delivery` (
  `id_delivery` int(11) NOT NULL,
  `nama_d` varchar(90) NOT NULL,
  `harga_d` int(11) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `delivery`
--

INSERT INTO `delivery` (`id_delivery`, `nama_d`, `harga_d`, `alamat`, `no_hp`) VALUES
(8, 'handi', 210000, 'Tambak segaran 1/65', '081230016481'),
(8, 'handi', 5000, 'Tambak segaran 1/65', '081230016481'),
(9, 'handi', 72000, 'Tambak segaran 1/65', '081230016481');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `nama_menu` varchar(32) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail`, `id_pesanan`, `nama_menu`, `harga_menu`, `jumlah_pesanan`, `harga_total`) VALUES
(1, 1, 'ayam geprek', 15000, 1, 15000),
(2, 1, 'Es Teh Manis', 10000, 2, 20000),
(3, 1, 'Es Jeruk', 5000, 3, 15000),
(4, 2, 'ayam geprek', 15000, 1, 15000),
(5, 2, 'Es Teh Manis', 10000, 2, 20000),
(6, 2, 'Es Jeruk', 5000, 3, 15000),
(7, 3, 'ayam geprek', 15000, 1, 15000),
(8, 3, 'Es Teh Manis', 10000, 2, 20000),
(9, 3, 'Es Jeruk', 5000, 3, 15000),
(10, 4, 'ayam geprek', 15000, 1, 15000),
(11, 4, 'Es Teh Manis', 10000, 3, 30000),
(12, 4, 'Es Jeruk', 5000, 1, 5000),
(13, 5, 'Ayam Geprek', 15000, 3, 45000),
(14, 5, 'Es Teh', 5000, 1, 5000),
(15, 6, 'Ayam Geprek', 15000, 3, 45000),
(16, 6, 'Es Teh', 5000, 4, 20000),
(17, 7, 'Ayam Geprek', 15000, 7, 105000),
(18, 8, 'Ayam Geprek', 15000, 14, 210000),
(19, 8, 'Es Teh', 5000, 1, 5000),
(20, 9, 'Mie iblis', 12000, 6, 72000),
(21, 10, 'Ayam Geprek', 15000, 2, 30000),
(22, 10, 'Es Teh', 5000, 1, 5000),
(23, 11, 'Ayam Geprek', 15000, 5, 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `map`
--

CREATE TABLE `map` (
  `id_map` int(11) NOT NULL,
  `nama_resto` varchar(255) NOT NULL,
  `alamat_resto` varchar(200) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `map`
--

INSERT INTO `map` (`id_map`, `nama_resto`, `alamat_resto`, `lat`, `lng`) VALUES
(2, 'Geprek Bensu', 'Jl. Dharmahusada No.72, Mojo, Kec. Gubeng, Kota SBY, Jawa Timur 60285', '-7.266245', '112.7634033'),
(3, 'Mie Gacoan', 'No, Jl. Ambengan No.51, Ketabang, Genteng, Surabaya City, East Java 60272', '-7.2662447', '112.7568372'),
(4, 'Restoran Padang Sederhana', 'Jl. Raya Kertajaya Indah No.100, Manyar Sabrangan, Kec. Mulyorejo, Kota SBY, Jawa Timur 60116', '-7.2662433', '112.7305724'),
(5, 'Martabak Boss', '1, Jl. Poltangan Raya No.3, RT.1/RW.5, Tj. Bar., Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12530', '-6.2966684', '106.8419888'),
(6, 'Soto Ayam Pakelan', 'Jl. Ngagel Madya No.35, Baratajaya, Kec. Gubeng, Kota SBY, Jawa Timur 60284', '-7.2909659', '112.7579503'),
(7, 'Dancing Crab', 'Jl. Sumatera No.21, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', '-6.9163689', '107.6111779');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_warung` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `id_warung`, `nama`, `harga`, `gambar`) VALUES
(6, 2, 'Mie iblis', 12000, 'Mie_iblis.jpeg'),
(30, 1, 'Ayam Geprek', 15000, 'ayam_geprek.jpg'),
(31, 1, 'Es Teh', 5000, 'esteh_bensu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_warung` int(11) NOT NULL,
  `nama_pesanan` varchar(32) NOT NULL,
  `no_meja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_warung`, `nama_pesanan`, `no_meja`) VALUES
(1, 1, 'handi', 3),
(2, 1, 'handi', 3),
(3, 1, 'handi', 3),
(4, 1, 'handi', 1),
(5, 1, 'admin', 4),
(6, 1, 'admin', 4),
(7, 1, 'handi', 1),
(8, 1, 'handi', 8),
(9, 2, 'handi', 1),
(10, 1, 'handi', 3),
(11, 1, 'handi', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id_booking` int(11) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `nama_pemesan` varchar(90) NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id_booking`, `tempat`, `nama_pemesan`, `jumlah_orang`, `waktu`) VALUES
(1, 'Jl. Dharmahusada No.72, Mojo, Kec. Gubeng, Kota SBY, Jawa Timur 60285', 'handi', 7, '2020-05-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `restoran`
--

CREATE TABLE `restoran` (
  `id_resto` int(11) NOT NULL,
  `nama_resto` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_resto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `restoran`
--

INSERT INTO `restoran` (`id_resto`, `nama_resto`, `alamat`, `deskripsi`, `gambar_resto`) VALUES
(1, 'Ayam Geprek Bensu', 'Jl. Dharmahusada No.72, Mojo, Kec. Gubeng, Kota SBY, Jawa Timur 60285', 'Geprek Bensu merupakan sebuah waralaba Ayam Geprek makanan cepat siap saji yang Milik aktor Ruben Onsu yang selaku CEO PT Onsu Pangan Perkasa (OPP) yang didirikan pada Tanggal 17 April 2017', '1.jpg'),
(2, 'Mie gacoan', 'No, Jl. Ambengan No.51, Ketabang, Genteng, Surabaya City, East Java 60272', 'Mie Gacoan menjadi tempat bersantap mie terbaik terutama bagi pelajar dan mahasiswa, dimana mereka bisa nongkrong, kerja tugas, ngobrol santai, dan ngeksis bareng. Dengan tempat yang atraktif, dan juga dilengkapi berbagai fasilitas seperti: wifi, colokan listrik, musik – musik terupdate, dijamin akan bikin customer betah dan selalu ingin kembali lagi.', '2.jpg'),
(3, 'Sederhana Padang', 'Jl. Raya Kertajaya Indah No.100, Manyar Sabrangan, Kec. Mulyorejo, Kota SBY, Jawa Timur 60116', 'Restoran Sederhana berawal pada tahun 1972 dari sebuah rumah makan Padang kecil milik Bustaman di Pasar Bendungan Hilir, Jakarta. Dalam mengelola restorannya, Bustaman yang berasal dari Lintau, Sumatra Barat, selalu menyesuaikannya dengan lidah orang kebanyakan, sehingga ia mengurangi rasa pedas dalam masakan Padang buatannya. Ia juga memiliki hidangan khusus, yakni Ayam Pop yang telah dikenal luas.', '3.jpg'),
(4, 'Martabak Boss', 'Jl. Poltangan Raya No.3, RT.1/RW.5,', 'Martabak merupakan salah satu kuliner Indonesia yang selalu cocok dinikmati dalam berbagai suasana . Menemukannya juga cukup mudah, banyak penjual camilan ini di pinggir jalanan di seputaran Jakarta, mau telor atau pun manis tergantung selera. Anda yang suka dengan makanan khas yang satu ini, berikut 8 martabak terbaik di Jakarta yang patut Anda coba.', '4.jpg'),
(5, 'Soto Ayam Pakelan', 'Jl. Ngagel Madya No.35, Baratajaya, Kec. Gubeng, Kota SBY, Jawa Timur 60284', 'Soto ayam Pakelan memang ok punya. Sudah pelayanannya ramah, lokasi mudah dijangkau, dan yang penting soal rasa...wow...bikin lidah ketagihan. Tidak heran sampai SBY, mantan presiden kita juga makan di sini. Harga...? Terbayarkan dengan rasanya, apalagi porsinya bikin kenyang.... Bagi yang belum pernah, ayo segera merapat ke soto Pakelan', '5.jpg'),
(6, 'Dancing Crab', 'Jl. Sumatera No.21, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'Piscator Seafood Buffet menyajikan makanannya secara prasmanan. Nama \"Piscator\"sendiri berasal dari bahasa Itala yang berarti nelayan. Itulah alasannya restoran seafood yang satu ini menggunakan desain kapal pada interiornya. Restoran ini juga menyediakan berbagai macam makanan seperti makanan Jepang, western dan Korea. Tom Yam Seafood, Bamboo clam, Crab with Singapore sauce adalah beberapa makanan favorit di restoran ini. Jika Anda memiliki waktu luang untuk berkunjung dan merasakan makanan jepang, Anda dapat memesan Seafood Gratine. Makanan ini dimasak dengan baik, sayuran dan kejunya yang meleh dimulut melengkapi gurihnya kerang rebus. Gurihnya sushi juga dapat Anda nikmati sebagai makanan penutup.\r\n', '6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp_user` varchar(12) NOT NULL,
  `alamat_user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no_hp_user`, `alamat_user`, `password`, `jenis_kelamin`) VALUES
(1, 'handi', '081230016481', 'Tambak segaran 1/65', 'd06aab75b19db81f44975b164a5fe86f', 'L');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id_map`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id_resto`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `map`
--
ALTER TABLE `map`
  MODIFY `id_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id_resto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
