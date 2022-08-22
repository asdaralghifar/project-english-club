-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2022 pada 02.56
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
-- Database: `db_cek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`) VALUES
(3, '0344a833407f4946d72909035c6ec5b5.jpg'),
(5, 'images.jpg'),
(6, 'baru2.png'),
(7, 'images1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_informasi` text NOT NULL,
  `tgl_informasi` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul`, `isi_informasi`, `tgl_informasi`, `foto`) VALUES
(1, 'slmanml', '<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.bing.com/ck/a?!&amp;&amp;p=94f34230a2b7a74dJmltdHM9MTY2MDIzNzkyMyZpZ3VpZD00ZDhiZWY3OC0zMWZmLTQ5MzktOWU3My0yZDhiYzllNzgwZTgmaW5zaWQ9NTQ1OQ&amp;ptn=3&amp;hsh=3&amp;fclid=b7b2245d-1998-11ed-8562-520819a209f4&amp;u=a1L2ltYWdlcy9zZWFyY2g_cT1hYm91dCtjaGFybGllK3B1dGgmcXB2dD1hYm91dCtjaGFybGllK3B1dGgmRk9STT1FUU5BU00&amp;ntb=1\" target=\"_blank\">See all</a></p>\r\n\r\n<p>Charles Otto Puth Jr</p>\r\n\r\n<hr />\r\n<p>Charlie&rsquo;s full name is<strong>&nbsp;Charles Otto Puth Jr</strong>. He is 30 years old and was born on December 2, 1991, in Rumson, New Jersey, United States. Puth&rsquo;s star sign is Sagittarius, putting him alongside other celebs including Taylor Swift, Nicki Minaj, and Vanessa Hudgens.</p>\r\n', '11-08-2022', 'images.jpg'),
(4, 'slm', '<p>oahdajos</p>\r\n', '12-08-2022', 'baru2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_materi`
--

CREATE TABLE `kategori_materi` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_materi`
--

INSERT INTO `kategori_materi` (`id_kategori`, `nama_kategori`, `foto`) VALUES
(1, 'reading', '5eac5513c761909f35377c492be18322.jpg'),
(2, 'writing', '8879ff4cfdc4a86d1a507b3b91912787.jpg'),
(3, 'speaking', 'ed9a4416c4f2a4c2364e0b14d220b665.jpg'),
(4, 'listening', '12dc5f08ba9d7aaddf105421d5a43c0e.jpg'),
(5, 'grammar', '112247f5d045c26e9c3eac6f3c4558fb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `pesan`) VALUES
(1, 'hamlik', 'laodehamlik18018@gmail.com', 'sldnsja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `judul_materi` varchar(255) NOT NULL,
  `isi_materi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_kategori`, `judul_materi`, `isi_materi`, `foto`) VALUES
(6, 'reading', 'hamlik', '<p>almxa</p>\r\n', 'foto9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `nama_founder` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tentang_kec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `nama_founder`, `foto`, `tentang_kec`) VALUES
(1, 'hamlik123', '00503ecd7664340d4cbfb0552535b166.png', '<p>Charlie&rsquo;s full name is<strong>&nbsp;Charles Otto Puth Jr</strong>. He is 30 years old and was born on December 2, 1991, in Rumson, New Jersey, United States. Puth&rsquo;s star sign is Sagittarius, putting him alongside other celebs&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`, `foto`) VALUES
(1, 'hamlik', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'efa0af70225dfb7416e4f37c1cf32be5.jpg'),
(12, 'hamliksdsds', 'hamlik@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'images5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `kategori_materi`
--
ALTER TABLE `kategori_materi`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori_materi`
--
ALTER TABLE `kategori_materi`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
