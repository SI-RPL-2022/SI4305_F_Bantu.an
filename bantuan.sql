-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 06.21
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bantuan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_donasi`
--

CREATE TABLE `barang_donasi` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(25) NOT NULL,
  `donatur` int(11) NOT NULL,
  `tanggal_donasi` datetime NOT NULL,
  `status_cek` int(11) NOT NULL,
  `ketersediaan` int(11) NOT NULL,
  `metode_pengiriman` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_donasi`
--

INSERT INTO `barang_donasi` (`id`, `nama_barang`, `jenis_barang`, `donatur`, `tanggal_donasi`, `status_cek`, `ketersediaan`, `metode_pengiriman`, `deskripsi`, `gambar`, `harga`) VALUES
(1, 'Lenovo Ideapad Gaming 5', 'Barang Elektronik', 4, '2022-04-09 19:21:12', 2, 3, 'Go-Send', 'Sangat baik dan mantap jiwa', '1509105914217.jpg', 100000),
(2, 'Uniklo', 'Pakaian', 7, '2022-04-09 19:22:06', 2, 3, 'Datang Sendiri', 'Sangat baik dan mantap jiwa', '1509105914217.jpg', 150000),
(3, 'Lemari Pakaian', 'Perabotan', 4, '2022-04-09 20:49:01', 2, 2, 'Go-Send', 'Sangat baik dan mantap jiwa', '1509105914217.jpg', 1000000),
(4, 'Lemari Es', 'Perabotan', 4, '2022-04-09 20:49:01', 2, 1, 'Datang Sendiri', 'Sangat baik dan mantap jiwa', '1509105914217.jpg', 25000),
(5, 'aaaa', 'Pakaian', 4, '2022-04-10 16:57:22', 1, 2, 'Go-Send', 'aaaaaa', '1635778001499.jpg', 0),
(6, 'aaaaaaa', 'Pakaian', 4, '2022-04-10 17:03:56', 0, 0, 'Go-Send', 'aaaaaa', 'C:\\xampp\\tmp\\php5A42.tmp', 0),
(7, 'Kotak Sabun', 'Pakaian', 4, '2022-04-12 16:53:24', 2, 2, 'Go-Send', 'Kotak sabun abad pertengahan', '1649782404.jpg', 500000),
(8, 'Lenovo Legion', 'Perabotan', 9, '2022-04-19 05:50:53', 0, 3, 'Go-Send', 'Barang bagus', '1650347453.jpg', 200000),
(9, 'aaaa', 'Pakaian', 9, '2022-04-19 05:51:52', 0, 1, 'Go-Send', '1111', '1650347512.png', 0),
(10, 'Laptop', 'Barang ELektronik', 10, '2022-04-19 06:11:17', 0, 1, 'Go-Send', 'Barang Bekas', '1650348677.jpg', 0),
(11, 'Pakaian', 'Pakaian', 10, '2022-04-19 06:13:03', 0, 0, 'Datang Sendiri', 'Pakaian bekas', '1650348783.png', 0),
(12, 'Bahan Makanan', 'Barang ELektronik', 4, '2022-05-30 19:01:44', 0, 0, 'Go-Send', 'Bahan makanan untuk elektronik', '1653937304.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `charity`
--

CREATE TABLE `charity` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `tgl_donasi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `charity`
--

INSERT INTO `charity` (`id`, `user`, `pesan`, `tgl_donasi`) VALUES
(1, 4, 'Tes 123', '2022-06-21 02:24:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `donatur` int(11) NOT NULL,
  `tujuan` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(50) NOT NULL,
  `barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `nama_gambar`, `barang`) VALUES
(1, '1509105914217.jpg', 3),
(2, '1509105914258.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_barang` int(11) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_barang`, `jenis_barang`) VALUES
(1, 'Pakaian'),
(2, 'Peralatan Rumah Tangga'),
(3, 'Peralatan Elektronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_donasi`
--

CREATE TABLE `kegiatan_donasi` (
  `id` int(11) NOT NULL,
  `nama_donasi` varchar(50) NOT NULL,
  `mitra` varchar(100) NOT NULL,
  `batas_waktu` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan_donasi`
--

INSERT INTO `kegiatan_donasi` (`id`, `nama_donasi`, `mitra`, `batas_waktu`, `deskripsi`, `dokumen`, `status`) VALUES
(1, 'Donasi untuk Anak Bangsa', 'Yayasan Anak Bangsa', '2022-06-02', 'Acara amal untuk membantu bangsa menjadi lebih baik', '', 1),
(2, 'Donasi Bencana Alam', 'Bisa Bangkit Edusolve', '2022-06-16', 'Donasi untuk bencana alam di seluruh indonesia', '', 1),
(3, 'Membangun Digital Startup', 'Bisa Bangkit Edusolve', '2022-12-20', 'Membangun Digital Startup Bersama', '1655730949.txt', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `jenis_log` varchar(15) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `tanggal` datetime NOT NULL,
  `aktor` int(11) NOT NULL,
  `barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_donasi`
--

CREATE TABLE `mitra_donasi` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(50) NOT NULL,
  `jenis_mitra` varchar(50) NOT NULL,
  `tanggal_bergabung` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra_donasi`
--

INSERT INTO `mitra_donasi` (`id`, `nama_mitra`, `jenis_mitra`, `tanggal_bergabung`) VALUES
(1, 'Yayasan Anak Bangsa', 'Yayasan', '2022-05-30 15:38:12'),
(2, 'Panti Jompo Sinar Jaya', 'Panti Jompo', '2022-05-30 15:38:12'),
(3, 'Bisa Bangkit Edusolve', 'Yayasan', '2022-06-20 13:15:30'),
(4, 'Bisa Bangkit Edusolve', 'Yayasan', '2022-06-20 13:15:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_barang`
--

CREATE TABLE `pengajuan_barang` (
  `id_pengajuan` int(11) NOT NULL,
  `pengaju` int(11) NOT NULL,
  `barang` int(11) NOT NULL,
  `metode_pengiriman` varchar(20) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `tgl_pengajuan` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_barang`
--

INSERT INTO `pengajuan_barang` (`id_pengajuan`, `pengaju`, `barang`, `metode_pengiriman`, `alasan`, `tgl_pengajuan`, `status`) VALUES
(1, 4, 10, 'Go-Send', 'Cek 1...2...3', '2022-05-30 19:47:41', 2),
(2, 4, 9, 'Go-Send', 'Pengen AJa', '2022-05-31 06:21:14', 2),
(3, 4, 9, 'Go-Send', 'Pengen AJa', '2022-05-31 06:23:42', 2),
(4, 4, 9, 'Go-Send', 'Pengen AJa', '2022-05-31 06:24:56', 2),
(5, 4, 9, 'Go-Send', 'Mantap Jiwa Mempesondre', '2022-05-31 07:06:46', 0),
(6, 4, 9, 'Go-Send', 'Karena Kebutuhan', '2022-05-31 07:29:55', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_charity`
--

CREATE TABLE `pengajuan_charity` (
  `id_pengajuan_charity` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `deskripsi kegiatan` varchar(150) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `penyelenggara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengecekan_barang`
--

CREATE TABLE `pengecekan_barang` (
  `id` int(11) NOT NULL,
  `barang` int(11) NOT NULL,
  `tanggal_pengecekan` datetime NOT NULL DEFAULT current_timestamp(),
  `status_pengecekan` int(11) NOT NULL,
  `jenis_pengecekan` int(11) NOT NULL,
  `catatan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengecekan_barang`
--

INSERT INTO `pengecekan_barang` (`id`, `barang`, `tanggal_pengecekan`, `status_pengecekan`, `jenis_pengecekan`, `catatan`) VALUES
(1, 3, '2022-04-10 02:26:00', 1, 1, 'Gambar masih kurang jelas namun secara sekilas dapat diterima sebagai barang donasi'),
(2, 7, '2022-04-12 20:20:41', 1, 1, 'cocok'),
(3, 7, '2022-04-12 20:21:35', 1, 1, 'aaaa'),
(4, 7, '2022-04-12 20:21:48', 1, 1, 'aaaa'),
(5, 7, '2022-04-12 20:22:20', 1, 1, 'aaaa'),
(6, 1, '2022-04-19 05:56:04', 1, 1, 'Bagus'),
(7, 1, '2022-04-19 05:56:29', 2, 1, 'Ada cacat dikit'),
(8, 2, '2022-04-19 06:18:26', 1, 1, 'Kurang memadai'),
(9, 2, '2022-04-19 06:19:36', 2, 1, 'Bisa untuk didonasikan langsung'),
(10, 3, '2022-05-30 20:21:56', 2, 1, 'Tanpa ada masalah berarti'),
(11, 3, '2022-05-30 20:22:13', 2, 1, 'Tanpa ada masalah berarti'),
(12, 4, '2022-05-30 20:22:57', 2, 1, 'Cukup bagus untuk barang bekas'),
(13, 10, '2022-05-30 21:08:35', 2, 3, 'Pijar Istimewa'),
(14, 10, '2022-05-30 21:10:46', 2, 3, 'Pakar Istimewa'),
(15, 9, '2022-05-31 07:19:09', 2, 3, 'Silahkan'),
(16, 9, '2022-05-31 07:27:40', 2, 3, 'Diterima'),
(17, 5, '2022-06-20 16:13:32', 1, 1, 'Kang Cpet'),
(18, 5, '2022-06-20 16:16:09', 1, 1, 'Papapa'),
(19, 7, '2022-06-20 16:16:32', 2, 1, 'Goks'),
(20, 7, '2022-06-20 16:16:34', 2, 1, 'Goks'),
(21, 7, '2022-06-20 16:17:59', 2, 1, 'Goks'),
(22, 9, '2022-06-20 16:18:38', 2, 3, 'Silahkan dicatat'),
(23, 9, '2022-06-20 16:18:57', 1, 3, 'Kang Cpet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poin`
--

CREATE TABLE `poin` (
  `id_poin` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `jenis_poin` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `barang` int(11) NOT NULL,
  `aktor` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `metode_pengiriman` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `barang`, `aktor`, `tanggal_transaksi`, `metode_pengiriman`, `status`) VALUES
(1, 1, 4, '2022-05-30 19:01:08', 'Datang Sendiri', 1),
(2, 3, 5, '2022-05-30 19:01:08', 'Datang Sendiri', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(10) NOT NULL,
  `foto_profil` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `foto_profil`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@itsolutionstuff.com', NULL, '$2y$10$JJmwDEbEa3wwqKRnnwrJ.eqOTehSIpDh3HPC4.vVvPMKoil9Fm7bW', 1, 'avatar.png', NULL, '2022-04-01 10:19:21', '2022-04-01 10:19:21'),
(2, 'Manager User', 'manager@itsolutionstuff.com', NULL, '$2y$10$IPhhk28XdN4Wl9P0Hrknzu4ePzMFDuFMdyNe/rdUIT0PdrcGWTE0.', 2, 'avatar.png', NULL, '2022-04-01 10:19:21', '2022-04-01 10:19:21'),
(3, 'User', 'user@itsolutionstuff.com', NULL, '$2y$10$zJqEo5Ijeanku2GZpgfOR.uNKlXkh/ASsk49j2Nks5O.FUA.QSSHS', 0, 'avatar.png', NULL, '2022-04-01 10:19:22', '2022-04-01 10:19:22'),
(4, 'Andrian Firmansyah', 'andrianfirmansyah6290@gmail.com', NULL, '$2y$10$doMLwLVtt0.WrXwxNKd5Wu/QW2GioztCOi90Nu0B754c62aW26pBi', 0, 'avatar.png', NULL, '2022-04-01 10:53:43', '2022-04-01 10:53:43'),
(5, 'Ahmad Subagja', 'ahmada@gmail.com', NULL, '$2y$10$tbpx6t/MjDe/yFjovN4FYeRAMH/LGPSIcvX.4FiJN6yeeHNBhAP1i', 0, 'avatar.png', NULL, '2022-04-02 01:21:24', '2022-04-02 01:21:24'),
(6, 'Andrian Firmansyah', 'andrianfirmansyah@student.telkomuniversity.ac.id', NULL, '$2y$10$9vL0B2KkCx1otUl4/kbENuWAIxvIbH0i0yMPoBk5w52yX35atFjjO', 0, 'avatar.png', NULL, '2022-04-02 01:29:38', '2022-04-02 01:29:38'),
(7, 'AndProjectTest', 'aaa@gmail.com', NULL, '$2y$10$fxhSdUoi9EMpn/lD1shf6.j.ZuJI2VXWiQHFMYSqheOaER.I8GNaq', 0, 'avatar.png', NULL, '2022-04-02 01:37:05', '2022-04-02 01:37:05'),
(8, 'Ahmad Subagja', 'ahmad@fleker.us', NULL, '$2y$10$NZImMEBxR7i6H.cTGo5YMuyuP7iqXIOdbinG3jYwjleJxQ61nvBom', 0, 'foto.jpg', NULL, '2022-04-18 20:34:41', '2022-04-18 20:34:41'),
(9, 'Ahmad Subagja Baasit', 'basit@gmail.com', NULL, '$2y$10$2Uyq177tXo.u/9SEGSFbDeXZDVT9SRzAHvBszweAAQ961/S3LIz1e', 0, 'foto.jpg', NULL, '2022-04-18 22:49:35', '2022-04-18 22:49:35'),
(10, 'Sinung', 'sinung@gmail.com', NULL, '$2y$10$n8cX4.aLRjoYDqJ56vhGKOjFSKiFRoXo2m5Y0SZmLuuEPDTw1jD4u', 0, 'foto.jpg', NULL, '2022-04-18 23:08:42', '2022-04-18 23:08:42'),
(11, 'Andrian Firmansyah', 'aaa@jfak.cla', NULL, '$2y$10$tw0.iMVVWJQjgZpVAZV.7usgxsdBBQHGXpJJU1JcmZRgHY0svqxLe', 0, 'foto.jpg', NULL, '2022-06-19 01:22:41', '2022-06-19 01:22:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_donasi`
--
ALTER TABLE `barang_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `kegiatan_donasi`
--
ALTER TABLE `kegiatan_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra_donasi`
--
ALTER TABLE `mitra_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `pengajuan_charity`
--
ALTER TABLE `pengajuan_charity`
  ADD PRIMARY KEY (`id_pengajuan_charity`);

--
-- Indeks untuk tabel `pengecekan_barang`
--
ALTER TABLE `pengecekan_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `poin`
--
ALTER TABLE `poin`
  ADD PRIMARY KEY (`id_poin`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

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
-- AUTO_INCREMENT untuk tabel `barang_donasi`
--
ALTER TABLE `barang_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `charity`
--
ALTER TABLE `charity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kegiatan_donasi`
--
ALTER TABLE `kegiatan_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mitra_donasi`
--
ALTER TABLE `mitra_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_charity`
--
ALTER TABLE `pengajuan_charity`
  MODIFY `id_pengajuan_charity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengecekan_barang`
--
ALTER TABLE `pengecekan_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `poin`
--
ALTER TABLE `poin`
  MODIFY `id_poin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
