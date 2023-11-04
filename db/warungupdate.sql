-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 06.13
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.34
-- Waktu pembuatan: 04 Nov 2023 pada 12.49
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warungupdate`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `status`, `role`) VALUES
(15, 'chell223', '2345', 'approved', 'admin'),
(17, 'septol', '123', 'approved', 'admin'),
(20, 'yehezkiel', '1212', 'approved', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `id` int(11) NOT NULL,
  `nama_bahan` varchar(255) NOT NULL,
  `jumlah_bahan` int(255) NOT NULL,
  `satuan` enum('gram','kg','ml') NOT NULL,
  `kategori_produk` enum('kitchen','bar') NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_exp` date NOT NULL,
  `harga_beli` int(255) NOT NULL,
  `harga_beli_pergram` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`id`, `nama_bahan`, `jumlah_bahan`, `satuan`, `kategori_produk`, `tanggal_masuk`, `tanggal_exp`, `harga_beli`, `harga_beli_pergram`) VALUES
(36, 'Tomat', 2000, 'gram', 'kitchen', '2023-11-13', '2023-11-22', 100000, 50),
(37, 'Ayam', 2000, '', 'kitchen', '2023-11-12', '2023-11-19', 80000, 40),
(38, 'Ayam', 100, '', 'kitchen', '2023-11-19', '2023-11-26', 10000, 100),
(39, 'Gula', 1000, '', 'kitchen', '2023-11-12', '2023-11-26', 10000, 10),
(40, 'Kecap', 1000, '', 'kitchen', '2023-11-12', '2023-11-12', 50000, 50),
(41, 'Garam', 1000, '', 'kitchen', '2023-11-12', '2023-11-12', 20000, 20),
(42, 'Cabai Merah', 1000, '', 'kitchen', '2023-11-12', '2023-11-12', 100000, 100),
(43, 'Garam', 2000, '', 'kitchen', '2023-11-13', '2023-11-27', 50000, 25),
(44, 'Beras', 50000, '', 'kitchen', '2023-11-13', '2023-11-27', 100000, 2),
(45, 'Beras', 20000, '', 'kitchen', '2023-11-13', '2023-11-27', 500000, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(255) NOT NULL,
  `nama_produk` char(30) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_modal` double NOT NULL,
  `kuantitas` double NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `nama_produk`, `harga_jual`, `harga_modal`, `kuantitas`, `tgl`) VALUES
(1, 'Ayam', 20000, 10000, 10, '2022-02-02'),
(2, 'Bebek', 10000, 5000, 10, '2023-11-04'),
(3, 'Sayur', 5000, 3000, 2, '2023-02-22'),
(4, 'nasi', 10000, 5000, 32, '2023-11-04'),
(5, 'ayam bakar', 20000, 15000, 50, '2023-11-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `selling_price` int(255) NOT NULL,
  `category` enum('kitchen','bar') NOT NULL,
  `composition` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `selling_price`, `category`, `composition`) VALUES
(38, 'Jus Tomat', 5000, 'kitchen', '{\"bahan1\":\"Tomat\",\"jumlah1\":\"20\",\"bahan2\":\"Gula\",\"jumlah2\":\"20\"}'),
(39, 'Ayam Suwir', 15000, 'kitchen', '{\"bahan1\":\"Ayam\",\"jumlah1\":\"100\",\"bahan2\":\"Cabai Merah\",\"jumlah2\":\"10\",\"bahan3\":\"Beras\",\"jumlah3\":\"100\",\"bahan4\":\"Garam\",\"jumlah4\":\"10\"}'),
(40, 'Jus Avocado', 20000, 'bar', '{\"bahan1\":\"Avocado\",\"jumlah1\":\"10\",\"bahan2\":\"Gula\",\"jumlah2\":\"300\"}'),
(41, 'ayam bakar', 20000, 'kitchen', '{\"bahan1\":\"Ayam\",\"jumlah1\":\"20\",\"bahan2\":\"Kecap\",\"jumlah2\":\"10\",\"bahan3\":\"Beras\",\"jumlah3\":\"50\"}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `property`
--

CREATE TABLE `property` (
  `id` int(255) NOT NULL,
  `nama_properti` varchar(255) NOT NULL,
  `jumlah_properti` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `property`
--

INSERT INTO `property` (`id`, `nama_properti`, `jumlah_properti`) VALUES
(1238, 'meja', 43),
(1239, 'Meja', 10),
(1240, 'kursi plastik', 20);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `property`
--
ALTER TABLE `property`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1241;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
