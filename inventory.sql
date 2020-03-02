-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2020 pada 02.21
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode` int(5) NOT NULL,
  `Nama_Barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode`, `Nama_Barang`) VALUES
(3, 123, 'meja'),
(4, 111, 'kursi'),
(5, 122, 'lemari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `id` int(5) NOT NULL,
  `Nama_Barang` varchar(20) NOT NULL,
  `Departement` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `Keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`id`, `Nama_Barang`, `Departement`, `Tanggal`, `Jumlah`, `Keterangan`) VALUES
(3, 'komputer', 'IT Departement', '2020-01-26', 1, 'Rusak'),
(4, 'lemari', 'IT Departement', '2020-01-24', 2, 'Baik'),
(5, 'meja', 'GA', '2020-01-24', 2, 'Baik'),
(7, 'lemari', 'GA', '2020-01-24', 1, 'Rusak'),
(8, 'meja', 'GA', '2020-01-25', 2, 'Baik'),
(10, 'meja', 'IT Departement', '2020-01-24', 3, 'Baik'),
(27, 'meja', 'IT Departement', '2020-01-27', 1, 'Rusak'),
(29, 'lemari', 'IT Departement', '2020-01-27', 1, 'Rusak'),
(31, 'lemari', 'GA', '2020-01-27', 2, 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
