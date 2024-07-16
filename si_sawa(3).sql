-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2024 pada 08.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_sawa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bab`
--

CREATE TABLE `bab` (
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `judhul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bab`
--

INSERT INTO `bab` (`bab_id`, `judhul`, `gambar`, `alias`) VALUES
(1, 'Tembang Dolanan', 'images/bab/tembang_dolanan.png', 'tembang_dolanan'),
(2, 'Gamelan', 'images/bab/gamelan.png', 'gamelan'),
(3, 'Dongeng Kewan', 'images/bab/dongeng_kewan.png', 'dongeng_kewan'),
(4, 'Prastawa Alam', 'images/bab/prastawa_alam.png', 'prastawa_alam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bab_dolanan`
--

CREATE TABLE `bab_dolanan` (
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `dolanan_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bab_dolanan`
--

INSERT INTO `bab_dolanan` (`bab_id`, `dolanan_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 4),
(3, 7),
(3, 1),
(4, 5),
(4, 6),
(4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dolanan`
--

CREATE TABLE `dolanan` (
  `dolanan_id` bigint(20) UNSIGNED NOT NULL,
  `judhul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dolanan`
--

INSERT INTO `dolanan` (`dolanan_id`, `judhul`, `gambar`, `detail`) VALUES
(1, 'Teka-Teki Silang', 'images/dolanan/teka_teki_silang.png', 'dolanan_tts'),
(2, 'Nyanyi lan Joged', 'images/dolanan/nyanyi_lan_joged.png', 'dolanan_nyanyi_lan_joged'),
(3, 'Temokake Tembung', 'images/dolanan/temokake_tembung.png', 'dolanan_temokake_tembung'),
(4, 'Bedhek Ingatan karo Gambar', 'images/dolanan/tebak_gambar.png', 'dolanan_tebak_gambar'),
(5, 'Nyusun Ukara (SPOK)', 'images/dolanan/susun_spok.png', 'dolanan_susun_spok'),
(6, 'Nyocokake Prastawa Alam', 'images/dolanan/nyocokake.png', 'dolanan_nyocokake'),
(7, 'Nyocokake Dongeng', 'images/dolanan/nyocokake.png', 'dolanan_nyocokake_dongeng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dolanan_nyanyi_lan_joged`
--

CREATE TABLE `dolanan_nyanyi_lan_joged` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `dolanan_id` bigint(20) UNSIGNED NOT NULL,
  `swara` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dolanan_nyanyi_lan_joged`
--

INSERT INTO `dolanan_nyanyi_lan_joged` (`id`, `bab_id`, `dolanan_id`, `swara`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'uploads/bab/tembang_dolanan/gundul_pacul.mp3', '2024-06-08 12:36:19', '2024-06-27 12:36:19'),
(2, 1, 2, 'uploads/bab/tembang_dolanan/jaranan.mp3', '2024-06-08 12:36:19', '2024-06-27 12:36:19'),
(3, 1, 2, 'uploads/bab/tembang_dolanan/LirIlir.mp3', '2024-06-08 12:36:19', '2024-06-27 12:36:19'),
(4, 1, 2, 'uploads/bab/tembang_dolanan/PadhangBulan.mp3', '2024-06-08 12:36:19', '2024-06-27 12:36:19'),
(5, 1, 2, 'uploads/bab/tembang_dolanan/sluku_bathok.mp3', '2024-06-08 12:36:19', '2024-06-27 12:36:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dolanan_nyocokake`
--

CREATE TABLE `dolanan_nyocokake` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `dolanan_id` bigint(20) UNSIGNED NOT NULL,
  `pitakon1` varchar(255) DEFAULT NULL,
  `wangsulan1` varchar(255) DEFAULT NULL,
  `pitakon2` varchar(255) DEFAULT NULL,
  `wangsulan2` varchar(255) DEFAULT NULL,
  `pitakon3` varchar(255) DEFAULT NULL,
  `wangsulan3` varchar(255) DEFAULT NULL,
  `pitakon4` varchar(255) DEFAULT NULL,
  `wangsulan4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dolanan_nyocokake`
--

INSERT INTO `dolanan_nyocokake` (`id`, `bab_id`, `dolanan_id`, `pitakon1`, `wangsulan1`, `pitakon2`, `wangsulan2`, `pitakon3`, `wangsulan3`, `pitakon4`, `wangsulan4`, `created_at`, `updated_at`) VALUES
(1, 4, 6, 'uploads/bab/prastawa_alam/tsunami.jpeg', 'uploads/bab/prastawa_alam/tsunami_GempaPantai_animasi.jpeg', 'uploads/bab/prastawa_alam/longsor.jpeg', 'uploads/bab/prastawa_alam/PenebanganPohon_animasi.jpg', 'uploads/bab/prastawa_alam/GempaBumi.jpg', 'uploads/bab/prastawa_alam/GempaBumi_animasi.webp', 'uploads/bab/prastawa_alam/Banjir.jpg', 'uploads/bab/prastawa_alam/SampahSembarangan_animasi.jpg', '2024-06-08 12:33:02', '2024-06-27 12:33:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dolanan_nyocokake_dongeng`
--

CREATE TABLE `dolanan_nyocokake_dongeng` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `dolanan_id` bigint(20) UNSIGNED NOT NULL,
  `pitakon1` varchar(255) DEFAULT NULL,
  `wangsulan1` varchar(255) DEFAULT NULL,
  `pitakon2` varchar(255) DEFAULT NULL,
  `wangsulan2` varchar(255) DEFAULT NULL,
  `pitakon3` varchar(255) DEFAULT NULL,
  `wangsulan3` varchar(255) DEFAULT NULL,
  `pitakon4` varchar(255) DEFAULT NULL,
  `wangsulan4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dolanan_nyocokake_dongeng`
--

INSERT INTO `dolanan_nyocokake_dongeng` (`id`, `bab_id`, `dolanan_id`, `pitakon1`, `wangsulan1`, `pitakon2`, `wangsulan2`, `pitakon3`, `wangsulan3`, `pitakon4`, `wangsulan4`, `created_at`, `updated_at`) VALUES
(1, 3, 7, 'uploads/bab/dongeng_kewan/gagak2.jpg', 'awake dhewe kudu tansah mawas', 'uploads/bab/dongeng_kewan/itik1.jpg', 'kabeh apa-apa butuh wayah lan upaya', 'uploads/bab/dongeng_kewan/kura_kelinci1.jpg', 'ora oleh nyawang remeh wong liya', 'uploads/bab/dongeng_kewan/semut1.jpg', 'sipat kesed lan gumedhe arep mendatangkan katunan kanggo dhiri dhewe sarta ora disenengi dening wong liya', '2024-06-08 12:34:01', '2024-06-27 12:34:01'),
(2, 3, 7, 'uploads/bab/dongeng_kewan/itik2.jpg', 'Itik Ala Rupane', 'uploads/bab/dongeng_kewan/semut2.jpg', 'Semut lan Walang', 'uploads/bab/dongeng_kewan/kura_kelinci2.jpg', 'Terwelu lan Bulus', 'uploads/bab/dongeng_kewan/kancil1.jpg', 'Kancil lan Baya', '2024-06-08 12:34:01', '2024-06-27 12:34:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dolanan_susun_spok`
--

CREATE TABLE `dolanan_susun_spok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `dolanan_id` bigint(20) UNSIGNED NOT NULL,
  `kata1` varchar(255) NOT NULL,
  `kata2` varchar(255) DEFAULT NULL,
  `kata3` varchar(255) DEFAULT NULL,
  `kata4` varchar(255) DEFAULT NULL,
  `kata5` varchar(255) DEFAULT NULL,
  `kata6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dolanan_susun_spok`
--

INSERT INTO `dolanan_susun_spok` (`id`, `bab_id`, `dolanan_id`, `kata1`, `kata2`, `kata3`, `kata4`, `kata5`, `kata6`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 'Tsunami', 'nyebabake', 'kerusakan', 'omah lan bangunan', 'ing', 'Kutha Semarang', '2024-06-08 12:34:49', '2024-06-27 12:34:49'),
(2, 4, 5, 'Omahe', 'Andi', 'kena', 'banjir', 'wingi', 'bengi', '2024-06-08 12:34:49', '2024-06-27 12:34:49'),
(3, 4, 5, 'Gunung Merapi', 'njeblug', 'ngetokake asap ireng', 'sing kebak awu', 'wingi', 'awan', '2024-06-08 12:34:49', '2024-06-27 12:34:49'),
(4, 4, 5, 'Andi', 'lan Susi', 'menehi', 'sandhangan kanggo', 'korban lindhu', 'ing Semarang', '2024-06-08 12:34:49', '2024-06-27 12:34:49'),
(5, 4, 5, 'Ing ', 'tlatah Jawa', 'kerep dumadi', 'angin puting beliung', 'sajrone', 'setaun', '2024-06-08 12:34:49', '2024-06-27 12:34:49'),
(6, 4, 5, 'Alas ', 'asring ngalami ', 'panebangan liar', 'wit-witan sing nyebabake ', 'lemah longsor', 'esuk mau', '2024-06-08 12:34:49', '2024-06-27 12:34:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dolanan_tebak_gambar`
--

CREATE TABLE `dolanan_tebak_gambar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `dolanan_id` bigint(20) UNSIGNED NOT NULL,
  `gambar1` varchar(255) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL,
  `gambar4` varchar(255) DEFAULT NULL,
  `gambar5` varchar(255) DEFAULT NULL,
  `gambar6` varchar(255) DEFAULT NULL,
  `wangsulan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dolanan_tebak_gambar`
--

INSERT INTO `dolanan_tebak_gambar` (`id`, `bab_id`, `dolanan_id`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `wangsulan`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'uploads/bab/gamelan/suling.jpeg', 'uploads/bab/gamelan/siter.jpeg', 'uploads/bab/gamelan/kendhang.jpg', 'uploads/bab/gamelan/bonang.jpg', 'uploads/bab/gamelan/rebab.jpg', 'uploads/bab/gamelan/gong.jpg', 'gambar1', '2024-06-08 12:35:39', '2024-06-27 12:35:39'),
(2, 2, 4, 'uploads/bab/gamelan/bonang.jpg', 'uploads/bab/gamelan/kendhang.jpg', 'uploads/bab/gamelan/saron.jpg', 'uploads/bab/gamelan/siter.jpeg', 'uploads/bab/gamelan/suling.jpeg', 'uploads/bab/gamelan/rebab.jpg', 'gambar2', '2024-06-08 12:35:39', '2024-06-27 12:35:39'),
(3, 2, 4, 'uploads/bab/gamelan/suling.jpeg', 'uploads/bab/gamelan/saron.jpg', 'uploads/bab/gamelan/rebab.jpg', 'uploads/bab/gamelan/bonang.jpg', 'uploads/bab/gamelan/siter.jpeg', 'uploads/bab/gamelan/kendhang.jpg', 'gambar3', '2024-06-08 12:35:39', '2024-06-27 12:35:39'),
(4, 2, 4, 'uploads/bab/gamelan/rebab.jpg', 'uploads/bab/gamelan/suling.jpeg', 'uploads/bab/gamelan/kendhang.jpg', 'uploads/bab/gamelan/bonang.jpg', 'uploads/bab/gamelan/siter.jpeg', 'uploads/bab/gamelan/saron.jpg', 'gambar4', '2024-06-08 12:35:39', '2024-06-27 12:35:39'),
(5, 2, 4, 'uploads/bab/gamelan/bonang.jpg', 'uploads/bab/gamelan/saron.jpg', 'uploads/bab/gamelan/kendhang.jpg', 'uploads/bab/gamelan/rebab.jpg', 'uploads/bab/gamelan/siter.jpeg', 'uploads/bab/gamelan/suling.jpeg', 'gambar5', '2024-06-08 12:35:39', '2024-06-27 12:35:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dolanan_temokake_tembung`
--

CREATE TABLE `dolanan_temokake_tembung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `dolanan_id` bigint(20) UNSIGNED NOT NULL,
  `kata1` varchar(255) NOT NULL,
  `kata2` varchar(255) DEFAULT NULL,
  `kata3` varchar(255) DEFAULT NULL,
  `kata4` varchar(255) DEFAULT NULL,
  `kata5` varchar(255) DEFAULT NULL,
  `kata6` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dolanan_temokake_tembung`
--

INSERT INTO `dolanan_temokake_tembung` (`id`, `bab_id`, `dolanan_id`, `kata1`, `kata2`, `kata3`, `kata4`, `kata5`, `kata6`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'jaranan', 'ilir', 'pachul', 'mbulan', 'kalijaga', 'bathok', '2024-06-08 05:17:42', '2024-06-27 05:17:42'),
(2, 1, 3, 'tandure', 'sumilir', 'ijo', 'royo', 'sega', 'latar', '2024-06-08 05:17:42', '2024-06-27 05:17:42'),
(3, 1, 3, 'rembulan', 'rina', 'turu', 'sore', 'kancane', 'guyonan', '2024-06-08 05:17:42', '2024-06-27 05:17:42'),
(4, 4, 3, 'Ngobong', 'Mbuwang', 'Nandur', 'Njeblug', 'Ngancurake', 'Ngentirake', '2024-06-08 05:17:42', '2024-06-27 05:17:42'),
(5, 4, 3, 'Mili', 'Ngresiki', 'Ngrusak', 'Ngratakake', 'Mubeng', 'Nyebarake', '2024-06-08 05:17:42', '2024-06-27 05:17:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dolanan_tts`
--

CREATE TABLE `dolanan_tts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `dolanan_id` bigint(20) UNSIGNED NOT NULL,
  `pitakonan` varchar(255) NOT NULL,
  `wangsulan` varchar(255) NOT NULL,
  `pilihan1` varchar(255) NOT NULL,
  `pilihan2` varchar(255) NOT NULL,
  `pilihan3` varchar(255) NOT NULL,
  `pilihan4` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dolanan_tts`
--

INSERT INTO `dolanan_tts` (`id`, `bab_id`, `dolanan_id`, `pitakonan`, `wangsulan`, `pilihan1`, `pilihan2`, `pilihan3`, `pilihan4`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Tembang dolanan endi sing nduweni teges utawa crita babagan “teges urip lan kewajiban ngibadah” ?', 'lir-ilir', 'sluku-sluku bathok', 'jaranan', 'lir-ilir', 'gundul-gundul pachul', '2024-06-08 12:31:56', '2024-06-26 22:18:25'),
(2, 1, 1, 'Tembang dolanan endi kang nduweni teges utawa crita ngenani “adimuka kang ngupaya kamakmuran rakyate” ?', 'gundul-gundul pacul', 'sluku-sluku bathok', 'jaranan', 'lir-ilir', 'gundul-gundul pacul', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(3, 2, 1, 'Kendhang yaiku piranti gamelan kang dinggo karo cara ?', 'ditabuh', 'disebul', 'digenjreng', 'ditabuh', 'digesek', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(4, 1, 1, '“Nyunggi nyunggi wakul kul, gembelengan” iku larik saka tembang dolanan apa ?', 'gundul-gundul pacul', 'padhang mbulan', 'jaranan', 'lir-ilir', 'gundul-gundul pacul', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(5, 1, 1, '\"Mumpung padang rembulane, mumpung jembar kalangane\" iku larik saka tembang dolanan apa ?', 'lir-ilir', 'padhang mbulan', 'jaranan', 'lir-ilir', 'gundul-gundul pacul', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(6, 1, 1, 'Tembang dolanan endi kang nduweni teges utawa crita ngenani “mujudake rasa syukur marang kanikmatan lan kaendahan kang diparingake dening Gusti” ?', 'padhang mbulan', 'sluku-sluku bathok', 'jaranan', 'lir-ilir', 'padhang mbulan', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(7, 1, 1, '\"Yo prokonco dolanan neng njobo\" iku larik saka tembang dolanan apa ?', 'padhang mbulan', 'padhang mbulan', 'jaranan', 'lir-ilir', 'gundul-gundul pacul', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(8, 1, 1, 'Apa piwulang saka tembang dolanan Jaranan ?', 'ngajeni wong tuwa lan tresna marang wong liya', 'ngajeni wong tuwa lan tresna marang wong liya', 'mujudake rasa syukur marang kanikmatan lan kaendahan kang diparingake dening Gusti', 'adimuka kang ngupaya kamakmuran rakyate', 'kewajiban ngibadah', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(9, 1, 1, 'Apa piwulang saka tembang dolanan Sluku-Sluku Bathok ?', 'gunakake wektu ing urip kanthi apik', 'Adimuka kang ngupaya kamakmuran rakyate', 'gunakake wektu ing urip kanthi apik', 'kewajiban ngibadah', 'ngajeni wong tuwa lan tresna marang wong liya', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(10, 1, 1, 'Kepriye kelanjutane cakepan tembang “Bathoké éla élo” ing tembang dolanan Sluku-Sluku Bathok ?', 'si Rama menyang Solo', 'nyunggi nyunggi wakul kul, gembelengan', 'gedebuk krincing … gedebuk krincing', 'yo prokonco dolanan neng njobo', 'si Rama menyang Solo', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(11, 1, 1, 'Kepriye kelanjutane cakepan tembang “Jarane jaran teji” ing tembang dolanan Jaranan ?', 'sing numpak ndoro Bei', 'jaranan jaranan ... jaranan', 'sing ngiring poro abdi', 'sing numpak ndoro Bei', 'si Rama menyang Solo', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(12, 1, 1, 'Kepriye kelanjutane cakepan tembang “Cah angon, cah angon, penekno blimbing kuwi” ing tembang dolanan lir-Ilir ?', 'lunyu lunyu penekno, kanggo mbasuh dodot ira', 'lunyu lunyu penekno, kanggo mbasuh dodot ira', 'lir-ilir, lir-ilir, tandure wus sumilir', 'dodot ira, dodot ira, kumitir bedhah ing pinggir', 'tak ijo royo-royo, tak sengguh temanten anyar', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(13, 2, 1, 'Suling yaiku piranti gamelan kang dinggo karo cara ?', 'disebul', 'disebul', 'digenjreng', 'dituthuk', 'ditabuh', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(14, 2, 1, 'Siter yaiku piranti gamelan kang dinggo karo cara ?', 'digenjreng', 'disebul', 'digenjreng', 'dituthuk', 'ditabuh', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(15, 2, 1, 'Bonang yaiku piranti gamelan kang dinggo karo cara ?', 'dituthuk', 'disebul', 'digenjreng', 'dituthuk', 'ditabuh', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(16, 2, 1, 'Gamelan kendhang dinggo karo cara dipukul migunakake piranti apa ?', 'tlapak tangan', 'tabuh kayu', 'tlapak tangan', 'tongkat', 'angin', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(17, 3, 1, 'Sapa wae paraga kewan ing crita “Itik Ala Rupane” ?', 'itik, banyak lan kucing', 'itik, pitik lan lembu', 'itik, banyak lan kucing', 'banyak, macam lan manuk', 'iwak, pitik lan manuk', '2024-06-08 12:31:56', '2024-06-27 12:31:56'),
(18, 3, 1, 'Paraga kewan endi sing nduweni sipat kesed ing crita “Walang lan Semut” ?', 'walang', 'walang', 'macan', 'semut', 'kodhok', '2024-06-27 12:31:56', '2024-06-27 12:31:56'),
(19, 3, 1, 'Kenging punapa semut anggenipun ngumpulaken pangan ?', 'amarga bakal padha ngadhepi mangsa \"ketiga\"', 'amarga semut mangan akeh banget', 'amarga ora ana prelu liyane', 'amarga bakal padha ngadhepi mangsa \"ketiga\"', 'amarga dhawuhe raja semut', '2024-06-27 12:31:56', '2024-06-27 12:31:56'),
(20, 3, 1, 'Paraga kewan endi sing nduweni sipat ora gampang nyerah ing crita “ Terwelu lan Bulus” ?', 'bulus', 'terwelu', 'bulus', 'kancil', 'manuk', '2024-06-27 12:31:56', '2024-06-27 12:31:56'),
(21, 3, 1, 'Saka crita \"Gagak lan Rubah\" kok gagak bisa kelangan empale?', 'gagak bungah amerga dialem dening rubah', 'gagak ora duwe empal', 'gagak menehi empale marang rubah', 'empale gagak tiba nalika dheweke mabur', 'gagak bungah amerga dialem dening rubah', '2024-06-27 12:31:56', '2024-06-27 12:31:56'),
(22, 3, 1, 'Napa terwelu bisa kalah balapan karo bulus ?', 'amarga terwelu iku angkuh lan ngremehake saingan', 'amarga terlewu lara weteng', 'amarga kompetisi ora dianakake', 'amarga terwelu iku angkuh lan ngremehake saingan', 'amarga terwelu wedi nglawan bulus', '2024-06-27 12:31:56', '2024-06-27 12:31:56'),
(23, 3, 1, 'Apa sing ditindakake walang nalika semut sregep ngumpulake panganan ?', 'kesed karo mubeng lan nyanyi', 'ngumpulake panganan', 'nulungi semut', 'turu sedina muput', 'kesed karo mubeng lan nyanyi', '2024-06-27 12:31:56', '2024-06-27 12:31:56'),
(24, 3, 1, 'Kenapa kok itik krasa sedhih lan putus asa ?', 'dipoyoki amarga beda', 'amarga itik padha luwe', 'amarga dheweke angkuh', 'dipoyoki amarga beda', 'amarga dheweke ora pinter srawung', '2024-06-27 12:31:56', '2024-06-27 12:31:56'),
(25, 3, 1, 'Crita \"Kancil lan Baya\" dumadi saka latar panggonan apa ?', 'kali', 'kali', 'lapangan suket', 'segara', 'arga', '2024-06-27 12:31:56', '2024-06-27 12:31:56'),
(26, 3, 1, 'Paraga kewan endi sing nduweni sipat gampang diapuasi ing crita “ kancil lan baya” ?', 'baya', 'kancil', 'manuk', 'baya', 'iwak', '2024-06-27 12:31:56', '2024-06-27 12:31:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `name`, `email`, `password`, `no_telp`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nip`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anik Rahmawati', 'guru@gmail.com', '$2y$12$bCKPpNPctsG9FFN4DRdKtO9j7kDpQGoClERBp7N4saP1oxBl9bWJ2', '085692086090', 'W', 'Kab.Semarang', '1992-03-21', 'Ungaran', '20240601', NULL, '2024-06-23 05:11:57', '2024-07-15 00:37:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `materi_id` bigint(20) UNSIGNED NOT NULL,
  `bab_id` bigint(20) UNSIGNED NOT NULL,
  `judhul` varchar(255) DEFAULT NULL,
  `cerita` longtext DEFAULT NULL,
  `katrangan` varchar(255) DEFAULT NULL,
  `larik` varchar(255) DEFAULT NULL,
  `pesen` longtext DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `gambar1` varchar(255) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `swara` varchar(255) DEFAULT NULL,
  `penyebab` longtext DEFAULT NULL,
  `tab` varchar(255) NOT NULL DEFAULT 'informasi',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`materi_id`, `bab_id`, `judhul`, `cerita`, `katrangan`, `larik`, `pesen`, `video`, `gambar1`, `gambar2`, `swara`, `penyebab`, `tab`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jaranan', NULL, NULL, 'uploads/bab/tembang_dolanan/jaranan.jpg', 'Pengembangan unggah-ungguh ngurmati wong kang luwih tuwa, nduweni kalungguhan dhuwur utawa siji panggedhe. Kanggo padha-padha kinasihan sapadha-padha lan sikap rukun kanggo njaga keharmonisan saengga terhindar saka raos padha mungsuhan.', 'https://www.youtube.com/watch?v=vNDGfcNmkco', NULL, NULL, NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-07-14 07:35:23'),
(2, 1, 'Sluku-Sluku Bathok', NULL, NULL, 'uploads/bab/tembang_dolanan/sluku.jpg', 'Gunakno wayah karo becik. Ojo lali tansah beribadah lan ngelingi tuhan. Manungsa ora ana kang mangerteni kapan wayah seda saengga aja lali beramal lan tumindak apik.', 'https://www.youtube.com/watch?v=lSkwcevbRRc', NULL, NULL, NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(3, 1, 'Lir-Ilir', NULL, NULL, 'uploads/bab/tembang_dolanan/LirIlir.jpg', 'Pangemutan ngenani kuwajiban beribadah nggo umat muslim dadi sangu kanggo kauripan ing akhirat.', 'https://www.youtube.com/watch?v=puC8hkMEaAE', NULL, NULL, NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(4, 1, 'Padhang Mbulan', NULL, NULL, 'uploads/bab/tembang_dolanan/PadhangMbulan.jpg', 'Kanggo padha-padha ngajeni wong liya, ngenehi asih tresna lan silaturrahmi. Berempati karo kanca-kanca utawa tangga teparo. Aja turu nganti sore dina pinuju wengi amarga bisa nggawe penggalih lan jiwa dadi tansah ala.', 'https://youtu.be/J568rft2Wco?feature=shared', NULL, NULL, NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(5, 1, 'Gundul-Gundul Pacul', NULL, NULL, 'uploads/bab/tembang_dolanan/GundulPacul.jpg', 'Panggedhe utawa adimuka ora oleh gumedhe lan congkak jero ngemban amanat, panggedhe saestune kudu ngupayakake kesejahteraan kanggo rakyate.', 'https://youtu.be/JhH6SLBYqIE?si=gI8ptkL3Yq7-bAAB', NULL, NULL, NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(7, 2, 'Kendhang', NULL, 'Ditabuh', NULL, NULL, NULL, 'uploads/bab/gamelan/kendhang.jpg', NULL, 'uploads/bab/gamelan/kendhang.mp3', NULL, 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(8, 2, 'Saron', NULL, 'Dituthuk', NULL, NULL, NULL, 'uploads/bab/gamelan/saron.jpg', NULL, 'uploads/bab/gamelan/saron.mp3', NULL, 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(9, 2, 'Bonang', NULL, 'Dituthuk', NULL, NULL, NULL, 'uploads/bab/gamelan/bonang.jpg', NULL, 'uploads/bab/gamelan/bonang.mp3', NULL, 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(10, 2, 'Siter', NULL, 'Digenjreng', NULL, NULL, NULL, 'uploads/bab/gamelan/siter.jpeg', NULL, 'uploads/bab/gamelan/siter.mp3', NULL, 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(11, 2, 'Suling', NULL, 'Disebul', NULL, NULL, NULL, 'uploads/bab/gamelan/suling.jpeg', NULL, 'uploads/bab/gamelan/suling.mp3', NULL, 'pesen', '2024-06-27 12:37:24', '2024-06-27 12:37:24'),
(12, 3, 'Itik Ala Rupane', 'Siji dina, katon siji ibu itik lagi ngingu endhog-endhoge. Siji persiji endhog kasebut menetas nanging, kaya kuwi kagete ibu itik wektu weruh sawijining anake seje. Anak itik kasebut nduweni warna abu-abu lan berbadan gedhe, beda karo anake sing liyane. Ibu itik ora peduli lan tetep nimbali anak-anake sing wis lair menyang donya. Nalika dheweke kabeh nglangi, kewan liyane miwiti ndremimil \"sapa iku? Dheweke elek banget, beda karo sadulure sing liyane.\" Kabeh kewan, malah sadulure dhewe, ngguyu lan ngejek si itik ala rupa. Itik ngrasa sedhih lan mutusake kanggo lunga dhewe. Dheweke lumaku mrana-mrene lan ketemu siji asu nanging, asu kasebut malah menjauhine. Dheweke terusake perjalanan, lan nalika jroning perjalanan, dheweke kesel lan keturon ing ngarep siji omah. Teko siji kucing lan pitik, banjur dheweke kabeh ngusir si itik ala rupa. Karo perasaan kang sedhih, dheweke nerusake perjalanane. Wektu lagi leren ing pinggiring kali, si itik weruh rombongan bebek sing ayu banget. Dheweke ngrasa iri deleng ayu para bebek kasebut. \"Kenapa kowe bersedih?\" sapa salah siji bebek. \"Aku sedhih amarga elek lan ora bisa kaya kowe kabeh,\" jawab si itik karo sedhih. Rombongan bebek mung ngguyu, \"sapa sing ngomong kowe elek? Kowe ayu banget kaya kita,\" jawab bebek kasebut. Rombongan bebek ngajak si itik ala rupa kanggo nyedhaki tepining kali. Kaya kuwi kagete si itik wektu weruh pantulane ing kali. Dheweke ora weruh sosoke kang ala rupa, nanging sesosok bebek putih kang ayu banget. Saiki dheweke dudu itik ala rupa maneh. Si itik uga melu mabur bareng bebek liyane lan ngupadi papan kanggo dheweke kabeh tinggali.', 'Apa kang kowe mangerteni utawa oleh saka carita kang wis diwaca?', NULL, 'Dadi bedha ora salawase bab kang ala, kabeh apa-apa butuh wayah lan proses kang dawa.', NULL, 'uploads/bab/dongeng_kewan/itik1.jpg', 'uploads/bab/dongeng_kewan/itik2.jpg', NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(13, 3, 'Semut lan Walang', 'Ing siji alas kang ketel lan endah, sekawanan semut nembe nyambut gawe ngumpulake panganan menyang jroning omah dheweke kabeh. Karo sengkuyung, dheweke kabeh padha-padha ngrewangi nggawa macem-macem jinising panganan, kaya sayur lan woh kang langsung dheweke kabeh petik saka wataraning alas. Nalika lagi asyik lumaku, walang kang deleng kagiyatan gotong royong para semut wiwit penasaran lan nyedhak. Karo lantang dheweke takon, “apa kang lagi kowe kabeh tindakake?” takon walang. Salah siji semut njawab karo ora kalah lantang, “kita lagi ngumpulake lan nyimpen pasdhiyan panganan kanggo wayah mangsa ketiga” wangsulan saka salah siji semut iku nggawe walang ngguyu. “Koe kabeh iku terlalu sregep, mangsa ketiga isih suwe kudune kowe kabeh ongkang-ongkang wae kaya aku” walang sengkuyung banget ngeledek semut. Ananging, para semut ora urus ledekan iku, dheweke kabeh tetep sengkuyung njupuk akeh panganan. Berselang pirang-pirang sasi, mangsa ketiga teka. Walang wiwit kedangdapan amarga woh lan sayur ing wataraning alas wis meh entek. Dheweke mung bisa nemu sathithik panganan kanggo ngilangake raos luwe. Dina-dina sabanjure, walang bener-bener kentengan panganan. Karo langkah lemes, piyambake lumaku menyang omah para semut. Semut kang mbuka lawang tamtu wae kaget weruh rai pucet walang. Semut takon “ana prelu apa kowe mrene?” walang age mbales “aku ngeleh, oleh aku nyuwun panganan kowe kabeh?” semut bali nanggepi tetembungan walang, “apa kowe ora isin wis tau ngeledek kita kang bersusah payah ngumpulake panganan?” walang tersinggung krungu pitakon salah siji semut iku. Dheweke age-age mbalikake awak lan mulih menyang omah. Pirang-pirang wayah sabanjure, para semut wiwit nguwatirake walang. Dheweke kabeh karo gedhe ati njupuk pirang-pirang woh kang ana ing panggonaning panyimpenan panganan, banjur mbungkusake menyang jero kain werna coklat. Semut kang ngeblegna lawang wau dikei tugas kanggo ngeterake buah-buahan iku marang walang. Ananging sesampaine ing omah walang, ora ana wangsulan kang krungu sawise ping pira-pira semut iku nimbali walang. Amarga kuwatir, semut bali menyang omah lan nyuwun rewangan kanca kang liya kanggo mbuka lawang omah walang. Sawise gotong royong, dheweke kabeh isa mbuka lawang omah walang. Dheweke kabeh kaget banget nalika nemu walang kang klenger ngeleh. Salah siji semutpun age-age mbuka cangkem walang lan menehake banyu perasan woh jeruk. Ora suwe sabanjure, jebul cara iku kasil. Walang kawangun lan piyambake ora pracaya para kawanan semut lagi ana ing omahe. Walang age-age rumangsani kaluputan kang wis piyambake tindakake “aku njaluk pangapura,” ucap walang karo kebak raos sesal. “Seharuse, aku ora ngeledek kowe kabeh samesthine, aku nuladha sipat sregep kowe kabeh” kawanan semut makumpul nyedhak lan nyikep walang. Dheweke kabeh ngapura walang lan pungkasane dheweke kabeh dadi kanca apik.', 'Apa kang kowe mangerteni utawa oleh saka carita kang wis diwaca?', NULL, 'Pakaryan arep luwih gampang lan entheng menawa ditindakake kanthi gotong royong sarta kerja sama, nduweni rencana kanggo masa depan karo nyiyapake bab wigati wiwit saka adoh-adoh dina. Nalika nggarap utawa nglakoni apa-apa, kabeh  kudu dilakoni kanthi sregep lan ngupakara saapik mungkin, sipat kesed lan gumedhe nyebabake katunan kanggo dhiri dhewe sarta ora disenengi dening wong liya.', NULL, 'uploads/bab/dongeng_kewan/semut1.jpg', 'uploads/bab/dongeng_kewan/semut2.jpg', NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(14, 3, 'Terwelu lan Bulus', 'Dahulukala, urip lah siji terwelu. Terwelu bisa mlayu karo banter banget, piyambake bungah karo keahliane iku. Siji dina, terwelu weruh bulus kang lumaku alon banget. Terwelu ngguyoni bulus lan ngomong, \"kowe lumaku alon banget! hahaha.\" \"kancaku, rupane kowe bungah karo kacepatan sing mbok nduweni. amarga iku, mangga balapan lan awake dhewe deleng sapa kang sabenere luwih banter,\" tutur bulus. Terwelu lan bulus uga balapan, terwelu sing mlayu banter banget wis adoh ninggalake bulus. Sawetara wektu, terwelu mbalik kanggo weruh ing endi bulus ana. Jebul, bulus lumaku alon banget lan ana adoh ing mburine. \"bulus butuh wayah suwe banget kanggo nyedak,\" pikir terwelu. Terwelu uga mikir karo turu awan sadhela ing ngisoring wit. Ora suwe, bulus uga alon nanging mesthi ngliwati terwelu kang tetep keturon pules. Wektu terwelu pungkasane kawangun, piyambake kaget weruh bulus wis cedhak banget karo garis finish. Age-age terwelu gumregah lan mlayu, nanging usahane sia-sia bulus wis menangake balapan. Terwelu kuciwa banget lan kapeksa ngakoni bulus lah kang dadi pamenange.', 'Apa kang kowe mangerteni utawa oleh saka carita kang wis diwaca?', NULL, 'Awake dhewe ora oleh nyawang remeh wong liya utawa uga ngrasa gumedhe karo keahlian kang awake dhewe duweni lan awake dhewe kudu tansah ngupakara kang paling apik nalika nglakokake apa wae.', NULL, 'uploads/bab/dongeng_kewan/kura_kelinci1.jpg', 'uploads/bab/dongeng_kewan/kura_kelinci2.jpg', NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(15, 3, 'Kancil lan Baya', 'Ing siji alas, urip siji kancil kang pinter ing awan kang terik, kancil katon sumelang amarga pasdhiyan panganan ing papan manggone tansaya menipis. Dheweke uga duwe rencana metu saka tlatahe lan ngupadi sumber panganan anyar. Terike cahya srengenge nggawe kancil ngrasa ngelak. Ora suwe sawise lumaku, piyambake nemu kali gedhe kang banyune bening banget. Kancil uga mandheg lan ombe banyu ing kali iku, piyambake uga mangan suket ijo ing wataraning kali. Sawise leren, kancil nerusake perjalane, piyambake banjur nemu siji lemah-lapang ing pinggiring kali. Ing sabrang kali kasebut, ana siji tlatah kang akeh woh-wohan uga uwoh ketel lan mateng. Kancil nimbali kancane si baya kang lagi kungkum ing kali. Dheweke arep nyuwun rewangan marang baya nanging, baya sanjang menawa dheweke luwe banget lan pengin mangan kancil. Kancil uga nduwe pikiran yaiku piyambake ngomong menawa dheweke kuru banget saengga ora sedhep kanggo dipangan, piyambake pungkasane nyuwun rewangan baya kanggo nggawe awake lemu. Baya lan kanca-kancane dijaluk berbaris ing kali ben kancil iso nyeberang kali lan teka ing kebon woh kang subur. Baya sanjang ing kancil menawa permintaane yaiku bab kang gampang, nanging piyambake mengini imbalan. Kancil nawakake pirang-pirang woh kang mateng kanggo baya lan kanca-kancane nanging baya ora mengini woh, dheweke nyuwun kancil nimbali wedhus utawa awakke dewe kanggo dipangan dening para baya. Krungu bab iku, kancil uga setuju lan janji mengabulkan panjalukan baya. Baya nimbali kanca-kancane kang liya, dheweke kabeh baris dawa nganti menyang sabrang kali karo imbalan daging wedhus utawa kancil. Dheweke kabeh ngrewangi kancil karo seneng amarga mengini imbalan. Sawise kancil nyabrang, kancil mlumpat karo rasa bungah lan dheweke nyuwun pangapurane marang para baya amarga ora bisa ngorbanake wedhus utawa awake dewe. Banjur, kancil mlayu secepat ndean menyang arah kebon tanduran woh kang papane rada dhuwur saka kali. Baya kang ora bisa ngoyak kancil mung bisa nesu amarga dheweke ketipu, dheweke kabeh mbubarake dhiri lan bali menyang jroning banyu. Saperangan saka dheweke kabeh menepi kanggo ngupadi mangan, nanging ora ana daging kancil kang lemu ing kana.', 'Apa kang kowe mangerteni utawa oleh saka carita kang wis diwaca?', NULL, 'Kecerdasan utawa kepinteran kudu dimanfaatake kanggo babagan kang apik lan ora oleh ngremehake pawongan kang cilik.', NULL, 'uploads/bab/dongeng_kewan/kancil1.jpg', 'uploads/bab/dongeng_kewan/kancil2.jpg', NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(16, 3, 'Rubah lan Gagak', 'Siji dina sajroning alas, rubah weruh siji manuk gagak mabur karo sairis empal ing cucuke. Gagak banjur nangkring ing dahan wit, rubah kang wiwit esuk durung mangan pengin banget ngolehake empal kasebut. Piyambake uga lumaku nganti menyang ngisoring wit kang dipencloki gagak wau. \"Sugeng awan, nyonya gagak kang ayu,\" ramene. \"Kaya kuwi mempesonane penampilanmu dina iki. Mripatmu katon cerah, cucukmu resik lan bulumu ngabra\" krungu pujian iku, gagak menoleh mengingsor. Seneng banget piyambake ngolehi rubah lagi ngalembana ing kana. Weruh reaksi gagak, rubah nerusake rencanane. Piyambake ngalem gagak luwih adoh maneh, \"Weruh penampilanmu kang ayu, aku ngandel swaramu mesthi ngluwihi swara manuk liya ing alas iki. Aku pingin krungu tembang sing mbok nyanyiake nyonya gagak, tamtu krungu merdu banget!\" jare rubah. Ngrasa bungah, gagak ngangkat sirahe lan siap-siap mbuka swara. Piyambake lali, ana empal ing cucuke!  sairis empal kang tiba menyang lemah age-age dijupuk dening rubah, sawetara gagak terus wae nembang. Nalika piyambake rampung nembang lan rubah wis adoh lunga, gagak nembe rumangsani apa kang wis kedadeyan. Piyambake getun, ora njaga panganane amarga diapusi gagak sing ngunakake pangalem.', 'Apa kang kowe mangerteni utawa oleh saka carita kang wis diwaca?', NULL, 'Awake dhewe kudu tansah ngati-ati lan ora lengah kahanan apa wae bisa kadadean, ana wong kang menehi pujian mung amarga pengin njupuk bathi utawa nggawe piala dhiri awake dhewe.', NULL, 'uploads/bab/dongeng_kewan/gagak1.jpg', 'uploads/bab/dongeng_kewan/gagak2.jpg', NULL, NULL, 'informasi', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(17, 4, 'Banjir', NULL, 'Banjir mujudake prastawa akehe banyu sing mili menyang lemah sing biasane garing.', NULL, 'Opo sing sampeyan ngerteni utawa entuk saka video utawa gambar sadurunge?', 'https://www.youtube.com/watch?v=-q37GJN5JNc', 'uploads/bab/prastawa_alam/Banjir.jpg', NULL, NULL, 'Curah udan deres, banyu kali sing akeh wes ora bisa ditampung dening saluran banyu sing ana, dhuwur lan cendhake struktur lemah, kurange panggonan sing isa dadi wadhuk banyu utawa saluran got ngo mbuwang banyu, pangundhulan alas, mbuwang sampah ora neng pangonane.', 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(18, 4, 'Gunung Njeblug', NULL, 'Gunung Njeblug yaiku kahanan siji gunung kang njeblug utawa kabukak saengga ngetokake swara kang banter banget nguncalake material vulkanik kaya awu, gas, lava, lan watu saka jroning gunung geni menyang lumahing bumi liwat jeblugan.', NULL, 'Opo sing sampeyan ngerteni utawa entuk saka video utawa gambar sadurunge?', 'https://youtu.be/apDw37dqjL4?si=0sG1-n3NGsDWfLJF', 'uploads/bab/prastawa_alam/GunungMeletus.jpg', NULL, NULL, 'Amarga anane tekanan utawa dorongan kang kuwat banget, suhu ing kawah mundhak kanthi cepet, mundhake glombang magnet lan listrik, kahanan lindhu vulkanik mundhak amarga lempeng-lempeng bumi padha ndemek.', 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(19, 4, 'Tsunami', NULL, 'Tsunami yaiku glombang pasang kang ngasilke glombang banyu kang obah menyang dharatan nanging obahe glombang luwih dhuwur luwih gedhe, luwih cepet lan luwih suwe saengga nyilakani.', NULL, 'Opo sing sampeyan ngerteni utawa entuk saka video utawa gambar sadurunge?', 'https://youtu.be/ZTMaqTwp1tA?si=TSJ2UXHbWwnsE3eb', 'uploads/bab/prastawa_alam/tsunami.jpeg', NULL, NULL, 'Gunung njeblug, longsor ing ngisor segara kedadeyan akibat anane tabrakan watara lempeng sagara lan lempeng bawana, tibane meteor ukuran gedhe ing segara.', 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(20, 4, 'Longsor', NULL, 'Longsor yaiku lemah sing obah bebarengan karo watu-watu utawa material liyane ing lereng gunung utawa gumuk.', NULL, 'Opo sing sampeyan ngerteni utawa entuk saka video utawa gambar sadurunge?', 'https://youtu.be/HjHRW7eJt7U?si=sWY1u-Edgo-Wf-Oz', 'uploads/bab/prastawa_alam/longsor.jpeg', NULL, NULL, 'Curah udan dhuwur (curah udan kang dhuwur oleh nggawe lemah dadi jenuh banyu, nambahi risiko longsor), lindhu ngganggu kaseimbangan lereng lan dadi pemicu longsor, pangundhulan alas (penebangan alas kanthi gedhe oleh ngurangi daya serap lemah), ngowah panggunaan lahan (pembangunan utawa ngowah lahan sing ana ing cedhak lereng).', 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(21, 4, 'Lindu', NULL, 'Lindhu yaiku getaran utawa guncangan sing dumadi ing lumahing bumi.', NULL, 'Opo sing sampeyan ngerteni utawa entuk saka video utawa gambar sadurunge?', 'https://youtu.be/9b4Y628BsVk?si=qTPdG-TI_XfEVfE1', 'uploads/bab/prastawa_alam/GempaBumi.jpg', NULL, NULL, 'Amarga gunung geni utawa runtuhan watu-watuan lan obahan lempeng tektonik kang mbentuk kerak bumi saengga lempeng-lempeng iki padha obah, dumuk-dumukan, utawa padha-padha njepit siji karo liyane.', 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(22, 4, 'Kobongan Alas ', NULL, 'Kobongan alas yaiku siji prastawa kobongan, becik alami utawa dening pegawean manungsa kang ditandhani karo penjalaran geni karo mardika kang ngobong alas utawa lahan sing dilaluine.', NULL, 'Opo sing sampeyan ngerteni utawa entuk saka video utawa gambar sadurunge?', 'https://youtu.be/XeL8Ep_uPYk?si=VjGyXDjDhqT0mkrv', 'uploads/bab/prastawa_alam/KebakaranSuhu_animasi.jpg', NULL, NULL, 'Kobongan jero lapisan lemah, kagiyatan vulkanis, samberan bledhek, mangsa ketiga sing dawa, ninggalake bekas geni utawa mbuwang puntung rokok ing alas, lahan sing kobong.', 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(23, 2, 'Rebab', NULL, 'Digesek', NULL, NULL, NULL, 'uploads/bab/gamelan/rebab.jpg', NULL, 'uploads/bab/gamelan/rebab.mp3', NULL, 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(24, 2, 'Gong', NULL, 'Dituthuk', NULL, NULL, NULL, 'uploads/bab/gamelan/gong.jpg', NULL, 'uploads/bab/gamelan/gong.mp3', NULL, 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24'),
(25, 2, 'Kenong', NULL, 'Dituthuk', NULL, NULL, NULL, 'uploads/bab/gamelan/kenong.jpeg', NULL, 'uploads/bab/gamelan/kenong.mp3', NULL, 'pesen', '2024-06-08 12:37:24', '2024-06-27 12:37:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_guru_table', 1),
(5, '2024_06_08_083504_create_konten', 1),
(7, '0001_01_01_000001_create_cache_table', 2),
(8, '0001_01_01_000002_create_jobs_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DL1OVfMSZCwxSaeHKSbDePKJ1eqlQ8OEqsW1OYg9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWdQdnIxRmw0ak56UU9UTUQ5anRjSkhXSUloVXpJTkZiWXNTNWs0ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iYWIvcHJhc3Rhd2FfYWxhbT9qdWRodWw9S29ib25nYW4lMjBBbGFzJTIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721109241),
('RCCwtYd5tEqIHCiNgrZWZdl110l9ULvoZ0nhCuIg', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlFBOGY5dkRYVndmUHhRY09HSmxMeDZkcFloZmlwallkS2xQQmRYUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iYWIvZG9uZ2VuZ19rZXdhbj9qdWRodWw9VGVyd2VsdSUyMGxhbiUyMEt1cmEtS3VyYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721106589);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bab`
--
ALTER TABLE `bab`
  ADD PRIMARY KEY (`bab_id`),
  ADD UNIQUE KEY `bab_alias_unique` (`alias`);

--
-- Indeks untuk tabel `bab_dolanan`
--
ALTER TABLE `bab_dolanan`
  ADD KEY `bab_dolanan_bab_id_foreign` (`bab_id`),
  ADD KEY `bab_dolanan_dolanan_id_foreign` (`dolanan_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `dolanan`
--
ALTER TABLE `dolanan`
  ADD PRIMARY KEY (`dolanan_id`);

--
-- Indeks untuk tabel `dolanan_nyanyi_lan_joged`
--
ALTER TABLE `dolanan_nyanyi_lan_joged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dolanan_nyanyi_lan_joged_bab_id_foreign` (`bab_id`),
  ADD KEY `dolanan_nyanyi_lan_joged_dolanan_id_foreign` (`dolanan_id`);

--
-- Indeks untuk tabel `dolanan_nyocokake`
--
ALTER TABLE `dolanan_nyocokake`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dolanan_nyocokake_bab_id_foreign` (`bab_id`),
  ADD KEY `dolanan_nyocokake_dolanan_id_foreign` (`dolanan_id`);

--
-- Indeks untuk tabel `dolanan_nyocokake_dongeng`
--
ALTER TABLE `dolanan_nyocokake_dongeng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dolanan_nyocokake_dongeng_bab_id_foreign` (`bab_id`),
  ADD KEY `dolanan_nyocokake_dongeng_dolanan_id_foreign` (`dolanan_id`);

--
-- Indeks untuk tabel `dolanan_susun_spok`
--
ALTER TABLE `dolanan_susun_spok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dolanan_susun_spok_bab_id_foreign` (`bab_id`),
  ADD KEY `dolanan_susun_spok_dolanan_id_foreign` (`dolanan_id`);

--
-- Indeks untuk tabel `dolanan_tebak_gambar`
--
ALTER TABLE `dolanan_tebak_gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dolanan_tebak_gambar_bab_id_foreign` (`bab_id`),
  ADD KEY `dolanan_tebak_gambar_dolanan_id_foreign` (`dolanan_id`);

--
-- Indeks untuk tabel `dolanan_temokake_tembung`
--
ALTER TABLE `dolanan_temokake_tembung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dolanan_temokake_tembung_bab_id_foreign` (`bab_id`),
  ADD KEY `dolanan_temokake_tembung_dolanan_id_foreign` (`dolanan_id`);

--
-- Indeks untuk tabel `dolanan_tts`
--
ALTER TABLE `dolanan_tts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dolanan_tts_bab_id_foreign` (`bab_id`),
  ADD KEY `dolanan_tts_dolanan_id_foreign` (`dolanan_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`materi_id`),
  ADD KEY `materi_bab_id_foreign` (`bab_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`last_activity`) USING BTREE,
  ADD KEY `sessions_last_activity_index` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bab`
--
ALTER TABLE `bab`
  MODIFY `bab_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dolanan`
--
ALTER TABLE `dolanan`
  MODIFY `dolanan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dolanan_nyanyi_lan_joged`
--
ALTER TABLE `dolanan_nyanyi_lan_joged`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dolanan_nyocokake`
--
ALTER TABLE `dolanan_nyocokake`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dolanan_nyocokake_dongeng`
--
ALTER TABLE `dolanan_nyocokake_dongeng`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dolanan_susun_spok`
--
ALTER TABLE `dolanan_susun_spok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dolanan_tebak_gambar`
--
ALTER TABLE `dolanan_tebak_gambar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dolanan_temokake_tembung`
--
ALTER TABLE `dolanan_temokake_tembung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dolanan_tts`
--
ALTER TABLE `dolanan_tts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `materi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bab_dolanan`
--
ALTER TABLE `bab_dolanan`
  ADD CONSTRAINT `bab_dolanan_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`),
  ADD CONSTRAINT `bab_dolanan_dolanan_id_foreign` FOREIGN KEY (`dolanan_id`) REFERENCES `dolanan` (`dolanan_id`);

--
-- Ketidakleluasaan untuk tabel `dolanan_nyanyi_lan_joged`
--
ALTER TABLE `dolanan_nyanyi_lan_joged`
  ADD CONSTRAINT `dolanan_nyanyi_lan_joged_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`),
  ADD CONSTRAINT `dolanan_nyanyi_lan_joged_dolanan_id_foreign` FOREIGN KEY (`dolanan_id`) REFERENCES `dolanan` (`dolanan_id`);

--
-- Ketidakleluasaan untuk tabel `dolanan_nyocokake`
--
ALTER TABLE `dolanan_nyocokake`
  ADD CONSTRAINT `dolanan_nyocokake_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`),
  ADD CONSTRAINT `dolanan_nyocokake_dolanan_id_foreign` FOREIGN KEY (`dolanan_id`) REFERENCES `dolanan` (`dolanan_id`);

--
-- Ketidakleluasaan untuk tabel `dolanan_nyocokake_dongeng`
--
ALTER TABLE `dolanan_nyocokake_dongeng`
  ADD CONSTRAINT `dolanan_nyocokake_dongeng_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`),
  ADD CONSTRAINT `dolanan_nyocokake_dongeng_dolanan_id_foreign` FOREIGN KEY (`dolanan_id`) REFERENCES `dolanan` (`dolanan_id`);

--
-- Ketidakleluasaan untuk tabel `dolanan_susun_spok`
--
ALTER TABLE `dolanan_susun_spok`
  ADD CONSTRAINT `dolanan_susun_spok_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`),
  ADD CONSTRAINT `dolanan_susun_spok_dolanan_id_foreign` FOREIGN KEY (`dolanan_id`) REFERENCES `dolanan` (`dolanan_id`);

--
-- Ketidakleluasaan untuk tabel `dolanan_tebak_gambar`
--
ALTER TABLE `dolanan_tebak_gambar`
  ADD CONSTRAINT `dolanan_tebak_gambar_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`),
  ADD CONSTRAINT `dolanan_tebak_gambar_dolanan_id_foreign` FOREIGN KEY (`dolanan_id`) REFERENCES `dolanan` (`dolanan_id`);

--
-- Ketidakleluasaan untuk tabel `dolanan_temokake_tembung`
--
ALTER TABLE `dolanan_temokake_tembung`
  ADD CONSTRAINT `dolanan_temokake_tembung_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`),
  ADD CONSTRAINT `dolanan_temokake_tembung_dolanan_id_foreign` FOREIGN KEY (`dolanan_id`) REFERENCES `dolanan` (`dolanan_id`);

--
-- Ketidakleluasaan untuk tabel `dolanan_tts`
--
ALTER TABLE `dolanan_tts`
  ADD CONSTRAINT `dolanan_tts_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`),
  ADD CONSTRAINT `dolanan_tts_dolanan_id_foreign` FOREIGN KEY (`dolanan_id`) REFERENCES `dolanan` (`dolanan_id`);

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_bab_id_foreign` FOREIGN KEY (`bab_id`) REFERENCES `bab` (`bab_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
