-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2022 pada 09.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remboeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `link_tokped` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `name`, `description`, `status`, `link_tokped`, `id_user`) VALUES
(1, 'Fiber Optic Cable', 'asd', 'Tersedia', 'tes', 1),
(7, 'Fiber Optic Cable', 'TES 2020', 'Tersedia', 'tes', 1),
(8, 'Able printer', 'asdas', 'Tersedia', '', 1),
(9, 'Gendero', 'Tes', 'Tersedia', '', 21),
(10, 'Proyektor ', 'TES BEH', 'Tersedia', '', 22),
(11, '', '', 'Tersedia', '', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartikel`
--

CREATE TABLE `kartikel` (
  `id_kartikel` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kartikel`
--

INSERT INTO `kartikel` (`id_kartikel`, `nama`, `isActive`) VALUES
(2, 'Biji Kopi', 1),
(3, 'Tentang Kopi', 1),
(4, 'Roasting Kopi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kproduk`
--

CREATE TABLE `kproduk` (
  `id_kproduk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isActive` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kproduk`
--

INSERT INTO `kproduk` (`id_kproduk`, `nama`, `isActive`) VALUES
(1, 'Biji Kopi', '1'),
(2, 'Mesin', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id_partner`, `name`, `alamat`, `instagram`, `maps`) VALUES
(1, 'Tes', 'Tes Alamat No21 Malang 56123', '@Remboegpawon', 'https://maps.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id_posting` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `seo_judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `featured` char(1) NOT NULL,
  `choice` char(1) NOT NULL,
  `thread` char(1) NOT NULL,
  `id_kartikel` int(11) NOT NULL,
  `isActive` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id_posting`, `judul`, `seo_judul`, `konten`, `featured`, `choice`, `thread`, `id_kartikel`, `isActive`, `date`) VALUES
(3, 'Testing Judul', 'testing-judul', '<p>1. Testing&nbsp;</p>\r\n\r\n<p>2. TESTINGGG</p>\r\n\r\n<p>3. TESTING</p>\r\n', 'N', 'Y', 'N', 3, 1, '2022-05-03'),
(4, 'Testing Judul', 'testing-judul', '<p>1. Testing&nbsp;</p>\r\n\r\n<p>2. TESTINGGG</p>\r\n\r\n<p>3. TESTING</p>\r\n', 'N', 'Y', 'N', 3, 1, '2022-05-03'),
(5, 'Testing Judul Baru Koopen', 'testing-judul-baru-koopen', '<p><strong>Buat artikel Baru</strong></p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'N', 'N', 'N', 2, 1, '2022-05-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `gambar_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id_slide`, `gambar_name`) VALUES
(1, 'ikan-koi-sampul5.jpg'),
(2, 'pos_3.jpg'),
(3, 'ikan-koi-sampul6.jpg'),
(4, 'ikan-koi-sampul7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('admin','master') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '025123456789', 'master', '$2a$12$erIFWPSHn8Nb10AwdHkHfO5Pv4F7ZdeMZ6eodBNGzGkmdJTGx86Y.', 1568689561, 'd5f22535b639d55be7d099a7315e1f7f.png', 1),
(20, 'Dummy Akun', 'tes', 'demo@getcraftable.com', '123109293', 'admin', '$2y$10$ctMaQzDJI31ii6zTNftZR.C1lcmft95pGNZMYEdNiqbYevHegdm.m', 1635823901, 'user.png', 1),
(21, 'Bhakti Karya Mahasiswa', 'bkm', 'bkm@bkm.com', '19827893612', 'admin', '$2y$10$I8KYCVbW4ABZlSNm9XBqcOAZpJidKliZokIj5LkiHWeI8TMt69ZEa', 1639328171, 'user.png', 1),
(22, 'Dewan Perwakilan Mahasiswa', 'dpm', 'dpm@polinema.ac.id', '086251239182', 'admin', '$2y$10$bLch0dB1552wQc7QTLF9Ye7mykwzOKj0cAZcwS8vO5aUI14kzX8pK', 1639919237, 'user.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `kartikel`
--
ALTER TABLE `kartikel`
  ADD PRIMARY KEY (`id_kartikel`);

--
-- Indeks untuk tabel `kproduk`
--
ALTER TABLE `kproduk`
  ADD PRIMARY KEY (`id_kproduk`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`),
  ADD KEY `id_kartikel` (`id_kartikel`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kartikel`
--
ALTER TABLE `kartikel`
  MODIFY `id_kartikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kproduk`
--
ALTER TABLE `kproduk`
  MODIFY `id_kproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Ketidakleluasaan untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`id_kartikel`) REFERENCES `kartikel` (`id_kartikel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
