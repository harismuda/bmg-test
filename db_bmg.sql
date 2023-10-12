-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2023 pada 02.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bmg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `thumbnail_artikel` varchar(255) NOT NULL,
  `tag_artikel` varchar(255) NOT NULL,
  `kategori_artikel` varchar(255) NOT NULL,
  `logo_artikel` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `thumbnail_artikel`, `tag_artikel`, `kategori_artikel`, `logo_artikel`, `created_at`, `updated_at`) VALUES
(20, 'Ecofoodd', 'thumbnail1697043646.jpg', 'Foodd', 'Makanann', 'logo1697043646.png', '2023-10-11 17:00:46', '2023-10-11 10:00:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_artikel`
--

CREATE TABLE `content_artikel` (
  `id_content` int(11) NOT NULL,
  `artikel_id` int(11) NOT NULL,
  `judul_content` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `thumbnail_content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content_artikel`
--

INSERT INTO `content_artikel` (`id_content`, `artikel_id`, `judul_content`, `isi`, `thumbnail_content`, `created_at`, `updated_at`) VALUES
(5, 20, 'Keluarga ceria dengan masakan enak', 'Haii.. Saya Upin dan ini adek saya Ipin', 'ContentThumbnail1697043715.jpg', '2023-10-11 10:00:03', '2023-10-11 10:01:55'),
(6, 20, 'Lorem ipsum dolor sit.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati.', 'ContentThumbnail1697066949.jpg', '2023-10-11 16:29:09', NULL),
(7, 20, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, enim temporibus.', 'ContentThumbnail1697067068.jpg', '2023-10-11 16:31:08', NULL),
(8, 20, 'Lorem ipsum dolor sit amet consectetur.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ex nulla nisi consectetur!', 'ContentThumbnail1697067184.jpg', '2023-10-11 16:33:04', NULL),
(9, 20, 'Lorem ipsum dolor sit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit!', 'ContentThumbnail1697067233.jpg', '2023-10-11 16:33:53', NULL),
(10, 20, 'Lorem ipsum dolor sit amet consectetur.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, reiciendis eum.', 'ContentThumbnail1697067278.jpg', '2023-10-11 16:34:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'harismuda', 'email1@gmail.com', '$2y$10$LhWdAozPm6tLfFBoHbNuIueHtFMIR8P6QKWvzZtEb2Lu3kbAWUCAW', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `content_artikel`
--
ALTER TABLE `content_artikel`
  ADD PRIMARY KEY (`id_content`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `content_artikel`
--
ALTER TABLE `content_artikel`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
