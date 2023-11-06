-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
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
  `harga_beli` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`id`, `nama_bahan`, `jumlah_bahan`, `satuan`, `kategori_produk`, `tanggal_masuk`, `tanggal_exp`, `harga_beli`) VALUES
(3, 'beras', 2, 'kg', 'kitchen', '2023-11-03', '2023-12-03', 20000),
(5, 'beras', 5, 'kg', 'kitchen', '2024-01-03', '2024-01-03', 30000),
(9, 'kopi', 100, 'gram', 'bar', '2023-11-03', '2023-12-03', 20000),
(10, 'kopi', 30, 'gram', 'bar', '2023-11-03', '2023-12-22', 30000),
(11, 'tomat', 1000, 'gram', 'kitchen', '2023-11-03', '2023-11-10', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `nama_produk` char(30) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_modal` double NOT NULL,
  `kuantitas` double NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`nama_produk`, `harga_jual`, `harga_modal`, `kuantitas`, `tgl`) VALUES
('Ayam', 20000, 10000, 10, '2022-02-02'),
('Bebek', 10000, 5000, 10, '2023-11-04'),
('Sayur', 5000, 3000, 2, '2023-02-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `cost_price` decimal(10,2) NOT NULL,
  `category` enum('kitchen','bar') NOT NULL,
  `composition` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `selling_price`, `cost_price`, `category`, `composition`) VALUES
(2, 'bagas', '200.00', '400.00', 'bar', 'safa'),
(3, 'dihyab', '24.00', '54.00', 'kitchen', '');

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
(1238, 'meja', 43);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `property`
--
ALTER TABLE `property`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1239;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
