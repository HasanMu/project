-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2019 pada 06.54
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `foto` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `foto`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin Hebat', 'images/V7OCzbatyVs5MhRWRNPaSUfVh7EeqrNwJsk0hkeP.jpeg', 'admin@hebat.com', 'terserah', '2019-01-04 00:41:28', '2019-01-03 18:41:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `judul` varchar(191) DEFAULT NULL,
  `content` text,
  `foto` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `judul`, `content`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'SMK Assalaam', '<p>Lorem ipsum</p>', 'images/bgrpl.JPG', '2019-01-04 07:27:41', '2019-01-04 01:27:41'),
(2, 'SMK Assalaam II', '<p><strong>Lorem Ipsum</strong></p>', 'images/software.jpg', '2019-01-04 00:27:59', '0000-00-00 00:00:00'),
(3, 'SMK Assalaam III', '<p><i>Lorem Ipsum</i></p>', 'images/no1.png', '2019-01-04 00:27:59', '0000-00-00 00:00:00'),
(4, 'SMK Assalaam IV', '<blockquote><p>Lorem Ipsum</p></blockquote>', 'images/rpl.JPG', '2019-01-04 00:27:59', '0000-00-00 00:00:00'),
(5, 'SMK Assalaam V', '<p>Lorem Ipsum..</p>', 'images/lamp.jpg', '2019-01-04 00:27:59', '0000-00-00 00:00:00'),
(6, 'SMK Assalaam VI', '<p>hehe</p>', 'images/lamp.png', '2019-01-04 00:27:59', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
