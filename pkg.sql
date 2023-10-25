-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2022 at 12:41 PM
-- Server version: 5.7.23
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkg2`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_responden`
--

CREATE TABLE `data_responden` (
  `id_data_responden` int(11) NOT NULL,
  `id_penilai` int(11) NOT NULL,
  `id_responden` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `total_nilai` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_responden`
--

INSERT INTO `data_responden` (`id_data_responden`, `id_penilai`, `id_responden`, `id_guru`, `total_nilai`) VALUES
(1, 1, 2, 51, 98.81),
(2, 1, 3, 51, 31.25),
(4, 18, 1, 51, 11.67),
(5, 20, 1, 51, 93.33),
(7, 26, 1, 51, NULL),
(8, 19, 1, 51, 98.33),
(9, 53, 1, 51, NULL),
(10, 2, 2, 51, NULL),
(11, 3, 2, 51, NULL),
(12, 4, 2, 51, NULL),
(13, 5, 2, 51, NULL),
(14, 2, 3, 51, NULL),
(15, 3, 3, 51, 100),
(16, 4, 3, 51, 93.75),
(17, 5, 3, 51, NULL),
(35, 37, 1, 30, NULL),
(36, 47, 1, 30, NULL),
(37, 58, 1, 30, NULL),
(38, 43, 1, 30, NULL),
(39, 45, 1, 30, NULL),
(40, 46, 1, 30, NULL),
(41, 23, 1, 30, NULL),
(42, 31, 1, 30, NULL),
(43, 20, 1, 30, NULL),
(44, 32, 1, 30, NULL),
(45, 42, 1, 30, NULL),
(46, 34, 1, 30, NULL),
(47, 59, 1, 30, NULL),
(48, 15, 1, 30, NULL),
(49, 55, 1, 30, NULL),
(50, 24, 1, 30, NULL),
(51, 33, 1, 30, NULL),
(52, 4, 2, 30, NULL),
(53, 4, 3, 30, 93.75),
(54, 13, 2, 30, NULL),
(55, 13, 3, 30, NULL),
(56, 7, 2, 30, NULL),
(57, 7, 3, 30, NULL),
(58, 18, 2, 30, NULL),
(59, 18, 3, 30, NULL),
(60, 12, 2, 30, NULL),
(61, 12, 3, 30, NULL),
(62, 45, 2, 30, NULL),
(63, 45, 3, 30, NULL),
(64, 50, 2, 30, NULL),
(65, 50, 3, 30, NULL),
(66, 43, 2, 30, NULL),
(67, 43, 3, 30, NULL),
(68, 38, 2, 30, NULL),
(69, 38, 3, 30, NULL),
(70, 52, 2, 30, NULL),
(71, 52, 3, 30, NULL),
(72, 65, 2, 30, NULL),
(73, 65, 3, 30, NULL),
(74, 77, 2, 30, NULL),
(75, 77, 3, 30, NULL),
(76, 71, 2, 30, NULL),
(77, 71, 3, 30, NULL),
(78, 85, 2, 30, NULL),
(79, 85, 3, 30, NULL),
(80, 86, 2, 30, NULL),
(81, 86, 3, 30, NULL),
(82, 121, 2, 30, NULL),
(83, 121, 3, 30, NULL),
(84, 128, 2, 30, NULL),
(85, 128, 3, 30, NULL),
(86, 136, 2, 30, NULL),
(87, 136, 3, 30, NULL),
(88, 150, 2, 30, NULL),
(89, 150, 3, 30, NULL),
(90, 139, 2, 30, NULL),
(91, 139, 3, 30, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) UNSIGNED NOT NULL,
  `id_mapel` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_seri_karpeg` bigint(20) NOT NULL,
  `nuptk` bigint(20) NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_golongan` date NOT NULL,
  `tmt_guru` date NOT NULL,
  `tmt_sekolah` date NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_sk` date NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_sk_penugasan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `id_mapel`, `nama`, `nip`, `nomor_seri_karpeg`, `nuptk`, `tempat_lahir`, `tanggal_lahir`, `pangkat`, `tmt_golongan`, `tmt_guru`, `tmt_sekolah`, `pendidikan`, `jk`, `program_keahlian`, `tanggal_sk`, `status`, `nomor_sk_penugasan`) VALUES
(1, 10, 'Admin', 'admin@admin.com', 25, 66, 'Serang', '1974-07-01', 'II/c', '2002-04-03', '1992-02-06', '2000-12-31', 'S4', '2', '5', '1992-02-01', '1', '91'),
(14, 8, 'Drs. Moh. Zainuri, M.Si', '196907131994031005', 14532, 811946912, 'Surabaya', '1976-01-31', 'IV/b', '2002-01-23', '1991-05-27', '1999-06-28', 'Pasca Sarjana (S2)', '1', '8', '1990-05-08', '1', '01/SK/1/2010/2.V!/21'),
(15, 20, 'Dra. Suherijani, MM.', '196009271988032005', 21089, 832965112, 'Surabaya', '1974-08-06', 'IV/b', '2001-03-22', '1990-05-21', '2001-02-09', 'Pasca Sarjana (S2)', '2', '20', '1991-03-01', '1', '01/SK/1/2010/2.V!/22'),
(16, 12, 'Dra. Endang Sri Lestari W', '196105061987032005', 12419, 397894410, 'Surabaya', '1974-05-25', 'IV/b', '2001-08-05', '1991-05-24', '1999-10-04', 'Sarjana (S1)', '2', '12', '1990-06-09', '1', '01/SK/1/2010/2.V!/23'),
(17, 7, 'Mun Eni, S.Pd', '196110071987102002', 14320, 22182438, 'Surabaya', '1975-11-14', 'IV/b', '2001-12-22', '1991-06-27', '2000-02-18', 'Sarjana (S1)', '2', '7', '1990-05-14', '1', '01/SK/1/2010/2.V!/24'),
(18, 12, 'Dra. Hj. Sri Marijani, MM.', '196204101988032011', 14170, 1247472429, 'Surabaya', '1975-11-01', 'IV/b', '2000-10-06', '1990-12-04', '2000-01-25', 'Pasca Sarjana (S2)', '2', '12', '1992-03-08', '1', '01/SK/1/2010/2.V!/25'),
(19, 1, 'Drs. Akhmad Basyori, MM.', '196205041988031016', 18939, 725650377, 'Surabaya', '1975-03-27', 'IV/b', '2001-07-27', '1991-11-01', '2000-08-08', 'Pasca Sarjana (S2)', '1', '1', '1991-07-05', '1', '01/SK/1/2010/2.V!/26'),
(20, 9, 'Drs. Wasito Legowo', '196205161987121002', 19552, 615211260, 'Surabaya', '1974-05-05', 'IV/b', '2001-03-25', '1992-01-27', '1999-07-01', 'Pasca Sarjana (S2)', '1', '9', '1990-08-29', '1', '01/SK/1/2010/2.V!/27'),
(21, 5, 'S u l i s t i a n I, S.Pd., MM.', '196304021985122005', 14424, 1278656532, 'Surabaya', '1975-09-03', 'IV/b', '2001-02-06', '1990-07-12', '2000-05-04', 'Pasca Sarjana (S2)', '2', '5', '1990-06-09', '1', '01/SK/1/2010/2.V!/28'),
(22, 12, 'Anik Retno Winarni, SPd.', '196305041987022005', 15791, 1088784334, 'Surabaya', '1975-01-03', 'IV/b', '2001-06-30', '1992-02-04', '1999-11-22', 'Sarjana (S1)', '2', '12', '1991-11-17', '1', '01/SK/1/2010/2.V!/29'),
(23, 7, 'Sri Wulandiyah, SPd.', '196310261985122001', 13160, 1025941791, 'Surabaya', '1975-09-11', 'IV/b', '2001-11-03', '1990-07-23', '2001-02-07', 'Pasca Sarjana (S2)', '2', '7', '1991-10-01', '1', '01/SK/1/2010/2.V!/30'),
(24, 24, 'Bibit Rusianto, SPd., MM.', '196209191989011005', 21530, 1274847616, 'Surabaya', '1975-02-16', 'IV/b', '2000-05-22', '1992-03-08', '2000-07-12', 'Pasca Sarjana (S2)', '1', '24', '1990-10-16', '1', '01/SK/1/2010/2.V!/31'),
(25, 2, 'Dra. Esti Priandari', '196209271989032008', 21029, 167630650, 'Surabaya', '1976-03-21', 'IV/b', '2002-02-04', '1990-12-01', '1999-12-30', 'Sarjana (S1)', '2', '2', '1990-05-19', '1', '01/SK/1/2010/2.V!/32'),
(26, 7, 'Dra. Sri Sayekti, MM', '196304101990032009', 13885, 1008914756, 'Surabaya', '1975-05-24', 'IV/b', '2000-12-24', '1991-09-14', '2001-01-25', 'Pasca Sarjana (S2)', '2', '7', '1991-03-14', '1', '01/SK/1/2010/2.V!/33'),
(27, 9, 'Dra. Nisa\'ul Khoiriyah', '196411011990032003', 14294, 769190576, 'Surabaya', '1975-12-25', 'IV/b', '2002-04-16', '1991-06-07', '2000-01-10', 'Sarjana (S1)', '2', '9', '1990-07-10', '1', '01/SK/1/2010/2.V!/34'),
(28, 24, 'Elok Chandra A, SPd., M.Pd.', '196507051989032018', 17913, 1275975563, 'Surabaya', '1975-05-27', 'IV/b', '2002-03-08', '1991-09-24', '1999-08-08', 'Pasca Sarjana (S2)', '2', '24', '1990-09-10', '1', '01/SK/1/2010/2.V!/35'),
(29, 18, 'Drs. M. Toha, MM', '196404171994121005', 18715, 655950007, 'Surabaya', '1974-09-23', 'IV/b', '2001-09-17', '1992-01-09', '2000-08-06', 'Pasca Sarjana (S2)', '1', '18', '1991-07-24', '1', '01/SK/1/2010/2.V!/36'),
(30, 8, 'Dra. Diharul Fatati, MM', '196307101995122002', 17977, 884860413, 'Surabaya', '1975-02-10', 'IV/b', '2001-09-06', '1990-08-09', '2000-11-12', 'Pasca Sarjana (S2)', '2', '8', '1991-05-29', '1', '01/SK/1/2010/2.V!/37'),
(31, 8, 'Tri Kurniawati, M.Pd', '197203251997032003', 13111, 1033980197, 'Surabaya', '1975-01-16', 'IV/b', '2000-12-11', '1990-08-13', '2001-03-14', 'Pasca Sarjana (S2)', '2', '8', '1992-01-06', '1', '01/SK/1/2010/2.V!/38'),
(32, 10, 'Nanik Handayati Saleh', '196111281985122002', 12949, 1166142438, 'Surabaya', '1975-07-19', 'IV/a', '2001-05-07', '1990-12-09', '2000-02-02', 'Sarjana (S1)', '2', '10', '1991-07-14', '1', '01/SK/1/2010/2.V!/39'),
(33, 25, 'Dra.Niniek Tri Rachmani', '196806212005012010', 16981, 693880680, 'Surabaya', '1976-04-13', 'IV/a', '2001-07-30', '1990-07-08', '1999-07-03', 'Sarjana (S1)', '2', '25', '1991-04-18', '1', '01/SK/1/2010/2.V!/40'),
(34, 15, 'Drs. Usman Daud, MA', '196201012006041026', 20221, 419304321, 'Surabaya', '1974-06-12', 'III/d', '2001-07-08', '1991-06-11', '1999-12-03', 'Pasca Sarjana (S2)', '1', '15', '1991-07-18', '1', '01/SK/1/2010/2.V!/41'),
(35, 12, 'Bambang Sugiono, S.Pd', '196301302008011003', 13582, 188021691, 'Surabaya', '1975-01-17', 'III/d', '2000-07-11', '1991-05-03', '1999-10-12', 'Sarjana (S1)', '1', '12', '1991-07-04', '1', '01/SK/1/2010/2.V!/42'),
(36, 12, 'Drs. Hariyono, MM', '196405162007011010', 13720, 1244311969, 'Surabaya', '1975-07-27', 'III/d', '2001-10-01', '1992-01-07', '1999-10-18', 'Pasca Sarjana (S2)', '1', '12', '1990-07-29', '1', '01/SK/1/2010/2.V!/43'),
(37, 1, 'Drs. Sunardi', '196406112007011014', 18232, 515332498, 'Surabaya', '1974-05-19', 'III/d', '2000-11-05', '1991-10-04', '2000-04-24', 'Sarjana (S1)', '1', '1', '1992-01-11', '1', '01/SK/1/2010/2.V!/44'),
(38, 12, 'Dra. Endang Roosanti, MM', '196606272007012010', 21201, 423222016, 'Surabaya', '1974-11-11', 'III/d', '2000-08-25', '1990-05-31', '2000-11-09', 'Pasca Sarjana (S2)', '2', '12', '1992-01-31', '1', '01/SK/1/2010/2.V!/45'),
(39, 9, 'Dra. Werdiati Handayani, MM', '196608142007012015', 18289, 173891090, 'Surabaya', '1974-11-04', 'III/d', '2000-05-19', '1990-06-16', '2000-01-09', 'Pasca Sarjana (S2)', '2', '9', '1992-01-05', '1', '01/SK/1/2010/2.V!/46'),
(40, 6, 'Dra. Harmijati', '196611182007012011', 21117, 896684846, 'Surabaya', '1975-04-21', 'III/d', '2001-08-15', '1990-09-20', '2000-03-17', 'Sarjana (S1)', '2', '6', '1991-06-24', '1', '01/SK/1/2010/2.V!/47'),
(41, 7, 'Pundhi, MM', '196706252008012004', 21440, 299012963, 'Surabaya', '1975-08-26', 'III/d', '2000-08-21', '1991-11-23', '1999-08-26', 'Pasca Sarjana (S2)', '2', '7', '1991-01-10', '1', '01/SK/1/2010/2.V!/48'),
(42, 12, 'Sugeng Hartoto, S.Pd', '196707052007011038', 17224, 964623050, 'Surabaya', '1976-01-10', 'III/d', '2001-12-30', '1990-12-27', '2000-04-20', 'Sarjana (S1)', '1', '12', '1990-05-15', '1', '01/SK/1/2010/2.V!/49'),
(43, 4, 'Indrowati, S.Pd', '196709142008012008', 21734, 509184551, 'Surabaya', '1974-11-08', 'III/d', '2001-09-28', '1990-12-08', '2001-03-23', 'Sarjana (S1)', '2', '4', '1990-06-09', '1', '01/SK/1/2010/2.V!/50'),
(44, 2, 'Julia Fatma, S.Pd', '196806132007012018', 12769, 623378351, 'Surabaya', '1975-11-08', 'III/d', '2000-05-25', '1991-05-18', '1999-11-22', 'Sarjana (S1)', '2', '2', '1990-10-02', '1', '01/SK/1/2010/2.V!/51'),
(45, 5, 'Sitti Zainah, S.Pd', '197006062007012018', 15344, 361441627, 'Surabaya', '1974-05-20', 'III/d', '2000-06-04', '1991-10-03', '2000-06-17', 'Sarjana (S1)', '2', '5', '1992-02-15', '1', '01/SK/1/2010/2.V!/52'),
(46, 6, 'Aning Ernawati, M.Pd', '197008052007012029', 21028, 254303726, 'Surabaya', '1976-01-08', 'III/d', '2000-08-09', '1992-04-22', '2001-04-20', 'Sarjana (S1)', '2', '6', '1992-01-16', '1', '01/SK/1/2010/2.V!/53'),
(47, 2, 'Agustina Hidayati Purwaningsih, S.Pd', '197008102008012022', 16439, 398223644, 'Surabaya', '1974-08-19', 'III/d', '2001-06-02', '1991-12-16', '1999-10-18', 'Sarjana (S1)', '2', '2', '1991-07-05', '1', '01/SK/1/2010/2.V!/54'),
(48, 7, 'Andria Agustin, S.Pd', '197008172007012041', 18877, 804761620, 'Surabaya', '1974-10-07', 'III/d', '2000-12-16', '1990-07-16', '1999-09-30', 'Sarjana (S1)', '2', '7', '1991-02-02', '1', '01/SK/1/2010/2.V!/55'),
(49, 1, 'Nunuk Idayati, MM', '197109242007012011', 14880, 222810326, 'Surabaya', '1975-08-08', 'III/d', '2002-03-15', '1990-06-27', '2000-01-05', 'Pasca Sarjana (S2)', '2', '1', '1990-08-04', '1', '01/SK/1/2010/2.V!/56'),
(50, 6, 'Pipin Riyanto, M.Pd', '197210212008011006', 20285, 1072992152, 'Surabaya', '1975-05-22', 'III/d', '2001-10-21', '1990-06-26', '1999-07-02', 'Pasca Sarjana (S2)', '1', '6', '1991-05-11', '1', '01/SK/1/2010/2.V!/57'),
(51, 8, 'Nana Petty Puspitasari', '197308022008012009', 17272, 1005374893, 'Surabaya', '1975-10-23', 'III/d', '2002-02-03', '1990-08-21', '2000-02-20', 'Pasca Sarjana (S2)', '2', '8', '1990-09-10', '1', '01/SK/1/2010/2.V!/58'),
(52, 1, 'Haliim Murhandini, S.Pd', '197406092008012005', 21474, 1041386343, 'Surabaya', '1974-07-20', 'III/d', '2000-09-18', '1991-05-30', '2000-11-08', 'Sarjana (S1)', '2', '1', '1991-01-23', '1', '01/SK/1/2010/2.V!/59'),
(53, 8, 'Dian Tri Septiningtyas, S.Pd', '197509032007012007', 19894, 1244702855, 'Surabaya', '1974-12-30', 'III/d', '2000-12-20', '1990-10-23', '2000-07-17', 'Sarjana (S1)', '2', '8', '1990-11-24', '1', '01/SK/1/2010/2.V!/60'),
(54, 6, 'Anis Susanti,S.Pd, MPd.', '198208152006042022', 20624, 525605557, 'Surabaya', '1975-01-01', 'III/d', '2000-05-18', '1991-06-27', '2000-10-26', 'Pasca Sarjana (S2)', '2', '6', '1990-12-23', '1', '01/SK/1/2010/2.V!/61'),
(55, 23, 'Drs. Rudi Rahmat, MM', '196808142008011010', 19559, 542250112, 'Surabaya', '1975-09-12', 'III/c', '2000-08-24', '1990-09-06', '2001-02-23', 'Pasca Sarjana (S2)', '1', '23', '1991-11-12', '1', '01/SK/1/2010/2.V!/62'),
(56, 10, 'Moh. Taufik Hidayat, S.Pd', '197702022011011008', 20239, 1058118894, 'Surabaya', '1975-02-24', 'III/b', '2001-10-11', '1990-08-12', '1999-12-15', 'Sarjana (S1)', '1', '10', '1992-01-25', '1', '01/SK/1/2010/2.V!/63'),
(57, 12, 'Dra. Dwi Ratnawati', '196804092014122001', 16483, 530227354, 'Surabaya', '1976-04-29', 'III/a', '2000-08-12', '1990-09-11', '2000-12-30', 'Sarjana (S1)', '2', '12', '1990-05-31', '1', '01/SK/1/2010/2.V!/64'),
(58, 3, 'Bini, S.Pd', '197203242014122001', 20951, 941438331, 'Surabaya', '1975-11-09', 'III/a', '2001-05-30', '1991-04-24', '1999-10-19', 'Sarjana (S1)', '2', '3', '1991-07-14', '1', '01/SK/1/2010/2.V!/65'),
(59, 18, 'Wahyu Nursasi, S.Pd', '197911212014121002', 13092, 739756325, 'Surabaya', '1975-12-24', 'III/a', '2000-11-17', '1992-02-22', '2000-09-03', 'Sarjana (S1)', '1', '18', '1992-02-08', '1', '01/SK/1/2010/2.V!/66');

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `id_indikator` int(10) UNSIGNED NOT NULL,
  `id_kompetensi` int(10) UNSIGNED NOT NULL,
  `nama_indikator` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id_indikator`, `id_kompetensi`, `nama_indikator`) VALUES
(1, 1, 'Guru dapat mengidentifikasi karakteristik belajar setiap peserta didiknya di kelasnya.'),
(2, 1, 'Guru memastikan bahwa semua peserta didik mendapatkan kesempatan yang sama untuk berpartisipasi aktif dalam kegiatan pembelajaran.'),
(3, 1, 'Guru dapat mengatur kelas untuk memberikan kesempatan belajar yang sama pada semua peserta didik dengan kelainan fisik dan kemampuan belajar yang berbeda.'),
(4, 1, 'Guru mencoba mengetahui penyebab penyimpangan perilaku peserta didik untuk mencegah agar perilaku tersebut tidak merugikan peserta didik lainnya.'),
(5, 1, 'Guru membantu mengembangkan potensi dan mengatasi kekurangan peserta didik.'),
(6, 1, 'Guru memperhatikan peserta didik dengan kelemahan fisik tertentu agar dapat mengikuti aktivitas pembelajaran, sehingga peserta didik tersebut tidak termarginalkan (tersisihkan, diolok-olok, minder, dsb).'),
(7, 2, 'Guru memberi kesempatan kepada peserta didik untuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.'),
(8, 2, 'Guru selalu memastikan tingkat pemahaman peserta didik terhadap materi pembelajaran tertentu dan menyesuaikan aktivitas pembelajaran berikutnya berdasarkan tingkat pemahaman tersebut.'),
(9, 2, 'Guru dapat menjelaskan alasan pelaksanaan kegiatan/aktivitas yang dilakukannya, baik yang sesuai maupun yang berbeda dengan rencana, terkait keberhasilan pembelajaran.'),
(10, 2, 'Guru menggunakan berbagai teknik untuk memotiviasi kemauan belajar peserta didik.'),
(11, 2, 'Guru merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik.'),
(12, 2, 'Guru memperhatikan respon peserta didik yang belum/kurang memahami materi pembelajaran yang diajarkan dan menggunakannya untuk memperbaiki rancangan pembelajaran berikutnya.'),
(13, 6, 'Guru dapat menyusun silabus yang sesuai dengan kurikulum.'),
(14, 6, 'Guru merancang rencana pembelajaran yang sesuai dengan silabus untuk membahas materi ajar tertentu agar peserta didik dapat mencapai kompetensi dasar yang ditetapkan.'),
(15, 6, 'Guru mengikuti urutan materi pembelajaran dengan memperhatikan tujuan pembelajaran.'),
(16, 6, 'Guru memilih materi pembelajaran yang:  a) sesuai dengan tujuan pembelajaran,  b) tepat dan mutakhir,  c) sesuai dengan usia dan tingkat kemampuan belajar peserta didik, dan d) dapat dilaksanakan di kelas,  e) sesuai dengan konteks kehidupan sehari-hari peserta didik.'),
(17, 7, 'Guru melaksanakan aktivitas pembelajaran sesuai dengan rancangan yang telah disusun secara lengkap dan pelaksanaan aktivitas tersebut mengindikasikan bahwa guru mengerti tentang tujuannya.'),
(18, 7, 'Guru melaksanakan aktivitas pembelajaran yang bertujuan untuk membantu proses belajar peserta didik, bukan untuk menguji sehingga membuat peserta didik merasa tertekan.'),
(19, 7, 'Guru mengkomunikasikan informasi baru (misalnya materi tambahan) sesuai dengan usia dan tingkat kemampuan belajar peserta didik.'),
(20, 7, 'Guru menyikapi kesalahan yang dilakukan peserta didik sebagai tahapan proses pembelajaran, bukan semata-mata kesalahan yang harus dikoreksi. Misalnya: dengan mengetahui terlebih dahulu peserta didik lain yang setuju atau tidak setuju dengan jawaban tersebut, sebelum memberikan penjelasan tentang jawaban yang benar.'),
(21, 7, 'Guru melaksanakan kegiatan pembelajaran sesuai isi kurikulum dan mengkaitkannya dengan konteks kehidupan sehari-hari peserta didik.'),
(22, 7, 'Guru melakukan aktivitas pembelajaran secara bervariasi dengan waktu yang cukup untuk kegiatan pembelajaran yang sesuai dengan usia dan tingkat kemampuan belajar dan mempertahankan perhatian peserta didik.'),
(23, 7, 'Guru mengelola kelas dengan efektif tanpa mendominasi atau sibuk dengan kegiatannya sendiri agar semua waktu peserta dapat termanfaatkan secara produktif.'),
(24, 7, 'Guru mampu menyesuaikan aktivitas pembelajaran yang dirancang dengan kondisi kelas.'),
(25, 7, 'Guru memberikan banyak kesempatan kepada peserta didik untuk bertanya, mempraktekkan dan berinteraksi dengan peserta didik lain.'),
(26, 7, 'Guru mengatur pelaksanaan aktivitas pembelajaran secara sistematis untuk membantu proses belajar peserta didik. Sebagai contoh: guru menambah informasi baru setelah mengevaluasi pemahaman peserta didik terhadap materi sebelumnya.'),
(27, 7, 'Guru menggunakan alat bantu mengajar, dan/atau audio-visual (termasuk TIK) untuk meningkatkan motivasi belajar peserta didik dalam mencapai tujuan pembelajaran.'),
(28, 8, 'Guru menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap setiap peserta didik untuk mengetahui tingkat kemajuan masing-masing.'),
(29, 8, 'Guru merancang dan melaksanakan aktivitas pembelajaran yang mendorong peserta didik untuk belajar sesuai dengan kecakapan dan pola belajar masing-masing.'),
(30, 8, 'Guru merancang dan melaksanakan aktivitas pembelajaran untuk memunculkan daya kreativitas dan kemampuan berfikir kritis peserta didik.'),
(31, 8, 'Guru secara aktif membantu peserta didik dalam proses pembelajaran dengan memberikan perhatian kepada setiap individu.'),
(32, 8, 'Guru dapat mengidentifikasi dengan benar tentang bakat, minat, potensi, dan kesulitan belajar masing-masing peserta didik.'),
(33, 8, 'Guru memberikan kesempatan belajar kepada peserta didik sesuai dengan cara belajarnya masing-masing.'),
(34, 8, 'Guru memusatkan perhatian pada interaksi dengan peserta didik dan mendorongnya untuk memahami dan menggunakan informasi yang disampaikan.'),
(35, 9, 'Guru menggunakan pertanyaan untuk mengetahui pemahaman dan menjaga partisipasi peserta didik, termasuk memberikan pertanyaan terbuka yang menuntut peserta didik untuk menjawab dengan ide dan pengetahuan mereka.'),
(36, 9, 'Guru memberikan perhatian dan mendengarkan semua pertanyaan dan tanggapan peserta didik, tanpa menginterupsi, kecuali jika diperlukan untuk membantu atau mengklarifikasi pertanyaan/tanggapan tersebut.'),
(37, 9, 'Guru menanggapinya pertanyaan peserta didik secara tepat, benar, dan mutakhir, sesuai tujuan pembelajaran dan isi kurikulum, tanpa mempermalukannya.'),
(38, 9, 'Guru menyajikan kegiatan pembelajaran yang dapat menumbuhkan kerja sama yang baik antar peserta didik.'),
(39, 9, 'Guru mendengarkan dan memberikan perhatian terhadap semua jawaban peserta didik baik yang benar maupun yang dianggap salah untuk mengukur tingkat pemahaman peserta didik.'),
(40, 9, 'Guru memberikan perhatian terhadap pertanyaan peserta didik dan meresponnya secara lengkap dan relevan untuk menghilangkan kebingungan pada peserta didik.'),
(41, 10, 'Guru menyusun alat penilaian yang sesuai dengan tujuan pembelajaran untuk mencapai kompetensi tertentu seperti yang tertulis dalam RPP.'),
(42, 10, 'Guru melaksanakan penilaian dengan berbagai teknik dan jenis penilaian, selain penilaian formal yang dilaksanakan sekolah, dan mengumumkan hasil serta implikasinya kepada peserta didik, tentang tingkat pemahaman terhadap materi pembelajaran yang telah dan akan dipelajari.'),
(43, 10, 'Guru menganalisis hasil penilaian untuk mengidentifikasi topik/kompetensi dasar yang sulit sehingga diketahui kekuatan dan kelemahan masing-masing peserta didik untuk keperluan remedial dan pengayaan.'),
(44, 10, 'Guru memanfaatkan masukan dari peserta didik dan merefleksikannya untuk meningkatkan pembelajaran selanjutnya, dan dapat membuktikannya melalui catatan, jurnal pembelajaran, rancangan pembelajaran, materi tambahan, dan sebagainya.'),
(45, 10, 'Guru memanfatkan hasil penilaian sebagai bahan penyusunan rancangan pembelajaran yang akan dilakukan selanjutnya.'),
(46, 11, 'Guru menghargai dan mempromosikan prinsip-prinsip Pancasila sebagai dasar ideologi dan etika bagi semua warga Indonesia.'),
(47, 11, 'Guru mengembangkan kerjasama dan membina kebersamaan dengan teman sejawat tanpa memperhatikan perbedaan yang ada (misalnya: suku, agama, dan gender).'),
(48, 11, 'Guru saling menghormati dan menghargai teman sejawat sesuai dengan kondisi dan keberadaan masing-masing.'),
(49, 11, 'Guru memiliki rasa persatuan dan kesatuan sebagai bangsa Indonesia.'),
(50, 11, 'Guru mempunyai pandangan yang luas tentang keberagaman bangsa Indonesia (misalnya: budaya, suku, agama).'),
(51, 12, 'Guru bertingkah laku sopan dalam berbicara, berpenampilan, dan berbuat terhadap semua peserta didik, orang tua, dan teman sejawat.'),
(52, 12, 'Guru mau membagi pengalamannya dengan teman sejawat, termasuk mengundang mereka untuk mengobservasi cara mengajarnya dan memberikan masukan.'),
(53, 12, 'Guru mampu mengelola pembelajaran yang membuktikan bahwa guru dihormati oleh peserta didik, sehingga semua peserta didik selalu memperhatikan guru dan berpartisipasi aktif dalam proses pembelajaran.'),
(54, 12, 'Guru bersikap dewasa dalam menerima masukan dari peserta didik dan memberikan kesempatan kepada peserta didik untuk berpartisipasi dalam proses pembelajaran.'),
(55, 12, 'Guru berperilaku baik untuk mencitrakan nama baik sekolah.'),
(56, 13, 'Guru mengawali dan mengakhiri pembelajaran dengan tepat waktu.'),
(57, 13, 'Jika guru harus meninggalkan kelas, guru mengaktifkan siswa dengan melakukan hal-hal produktif terkait dengan mata pelajaran, dan meminta guru piket atau guru lain untuk mengawasi kelas.'),
(58, 13, 'Guru memenuhi jam mengajar dan dapat melakukan semua kegiatan lain di luar jam mengajar berdasarkan ijin dan persetujuan pengelola sekolah.'),
(59, 13, 'Guru meminta ijin dan memberitahu lebih awal, dengan memberikan alasan dan bukti yang sah jika tidak menghadiri kegiatan yang telah direncanakan, termasuk proses pembelajaran di kelas.'),
(60, 13, 'Guru menyelesaikan semua tugas administratif dan non-pembelajaran dengan tepat waktu sesuai standar yang ditetapkan.'),
(61, 13, 'Guru memanfaatkan waktu luang selain mengajar untuk kegiatan yang produktif terkait dengan tugasnya.'),
(62, 13, 'Guru memberikan kontribusi terhadap pengembangan sekolah dan mempunyai prestasi yang berdampak positif terhadap nama baik sekolah.'),
(63, 13, 'Guru merasa bangga dengan profesinya sebagai guru.'),
(64, 14, 'Guru memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing-masing, tanpa memperdulikan faktor personal.'),
(65, 14, 'Guru menjaga hubungan baik dan peduli dengan teman sejawat (bersifat inklusif), serta berkontribusi positif terhadap semua diskusi formal dan informal terkait dengan pekerjaannya.'),
(66, 14, 'Guru sering berinteraksi dengan peserta didik dan tidak membatasi perhatiannya hanya pada kelompok tertentu (misalnya: peserta didik yang pandai, kaya, berasal dari daerah yang sama dengan guru).'),
(67, 15, 'Guru menyampaikan informasi tentang kemajuan, kesulitan, dan potensi peserta didik kepada orang tuanya, baik dalam pertemuan formal maupun tidak formal antara guru dan orang tua, teman sejawat, dan dapat menunjukkan buktinya.'),
(68, 15, 'Guru ikut berperan aktif dalam kegiatan di luar pembelajaran yang diselenggarakan oleh sekolah dan masyarakat dan dapat memberikan bukti keikutsertaannya.'),
(69, 15, 'Guru memperhatikan sekolah sebagai bagian dari masyarakat, berkomunikasi dengan masyarakat sekitar, serta berperan dalam kegiatan sosial di masyarakat.'),
(70, 16, 'Guru melakukan pemetaan standar kompetensi dan kompetensi dasar untuk mata pelajaran yang diampunya, untuk mengidentifikasi materi pembelajaran yang dianggap sulit, melakukan perencanaan dan pelaksanaan pembelajaran, dan memperkirakan alokasi waktu yang diperlukan.'),
(71, 16, 'Guru menyertakan informasi yang tepat dan mutakhir di dalam perencanaan dan pelaksanaan pembelajaran.'),
(72, 16, 'Guru menyusun materi, perencanaan dan pelaksanaan pembelajaran yang berisi informasi yang tepat, mutakhir, dan yang membantu peserta didik untuk memahami konsep materi pembelajaran.'),
(73, 17, 'Guru melakukan evaluasi diri secara spesifik, lengkap, dan didukung dengan contoh pengalaman diri sendiri.'),
(74, 17, 'Guru memiliki jurnal pembelajaran, catatan masukan dari kolega atau hasil penilaian proses pembelajaran sebagai bukti yang menggambarkan kinerjanya.'),
(75, 17, 'Guru memanfaatkan bukti gambaran kinerjanya untuk mengembangkan perencanaan dan pelaksanaan pembelajaran selanjutnya dalam program Pengembangan Keprofesian Berkelanjutan (PKB).'),
(76, 17, 'Guru dapat mengaplikasikan pengalaman PKB dalam perencanaan, pelaksanaan, penilaian pembelajaran dan tindak lanjutnya.'),
(77, 17, 'Guru melakukan penelitian, mengembangkan karya inovasi, mengikuti kegiatan ilmiah (misalnya seminar, konferensi), dan aktif dalam melaksanakan PKB.'),
(78, 17, 'Guru dapat memanfaatkan TIK dalam berkomunikasi dan pelaksanaan PKB.');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X-MIPA-1'),
(2, 'X-MIPA-2'),
(3, 'X-MIPA-3'),
(4, 'X-MIPA-4'),
(5, 'X-MIPA-5'),
(6, 'X-MIPA-6'),
(7, 'X-MIPA-7'),
(8, 'X-MIPA-8'),
(9, 'X-IPS-1'),
(10, 'X-IPS-2'),
(11, 'X-IPS-3'),
(12, 'X-IPS-4'),
(13, 'XI-MIPA-1'),
(14, 'XI-MIPA-2'),
(15, 'XI-MIPA-3'),
(16, 'XI-MIPA-4'),
(17, 'XI-MIPA-5'),
(18, 'XI-MIPA-6'),
(19, 'XI-MIPA-7'),
(20, 'XI-MIPA-8'),
(21, 'XI-IPS-1'),
(22, 'XI-IPS-2'),
(23, 'XI-IPS-3'),
(24, 'XI-IPS-4'),
(25, 'XII-MIPA-1'),
(26, 'XII-MIPA-2'),
(27, 'XII-MIPA-3'),
(28, 'XII-MIPA-4'),
(29, 'XII-MIPA-5'),
(30, 'XII-MIPA-6'),
(31, 'XII-MIPA-7'),
(32, 'XII-MIPA-8'),
(33, 'XII-IPS-1'),
(34, 'XII-IPS-2'),
(35, 'XII-IPS-3'),
(36, 'XII-IPS-4');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_ajar`
--

CREATE TABLE `kelas_ajar` (
  `id_kelas_ajar` int(10) UNSIGNED NOT NULL,
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_ajar`
--

INSERT INTO `kelas_ajar` (`id_kelas_ajar`, `id_kelas`, `id_guru`) VALUES
(1, 9, 1),
(3, 9, 18),
(4, 9, 30),
(5, 9, 32),
(7, 2, 51),
(8, 1, 51),
(9, 3, 51),
(10, 10, 30),
(11, 1, 30),
(12, 2, 30),
(13, 3, 30),
(14, 5, 30);

-- --------------------------------------------------------

--
-- Table structure for table `kode_kompetensi`
--

CREATE TABLE `kode_kompetensi` (
  `id_kompetensi` int(10) UNSIGNED NOT NULL,
  `nama_kompetensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kode_kompetensi`
--

INSERT INTO `kode_kompetensi` (`id_kompetensi`, `nama_kompetensi`) VALUES
(1, 'KOMPETENSI 1 (PEDAGOGIK) : MENGENAL KARAKTERISTIK PESERTA DIDIK'),
(2, 'KOMPETENSI 2 (PEDAGOGIK) : MENGUASAI TEORI BELAJAR DAN PRINSIP-PRINSIP PEMBELAJARAN YANG MENDIDIK'),
(6, 'KOMPETENSI 3 (PEDAGOGIK) : PENGEMBANGAN KURIKULUM'),
(7, 'KOMPETENSI 4 (PEDAGOGIK) : KEGIATAN PEMBELAJARAN YANG MENDIDIK'),
(8, 'KOMPETENSI 5 (PEDAGOGIK) : PENGEMBANGAN POTENSI ANAK DIDIK'),
(9, 'KOMPETENSI 6 (PEDAGOGIK) : KOMUNIKASI DENGAN PESERTA DIDIK'),
(10, 'KOMPETENSI 7 (PEDAGOGIK) : PENILAIAN DAN EVALUASI'),
(11, 'KOMPETENSI 8 (KEPRIBADIAN) : BERTINDAK SESUAI DENGAN NORMA AGAMA, HUKUM, SOSIAL DAN KEBUDAYAAN NASIONAL INDONESIA'),
(12, 'KOMPETENSI 9 (KEPRIBADIAN) : MENUNJUKKAN PRIBADI YANG DEWASA DAN TELADAN'),
(13, 'KOMPETENSI 10 (KEPRIBADIAN) : ETOS KERJA, TANGGUNG JAWAB YANG TINGGI, DAN RASA BANGGA MENJADI GURU'),
(14, 'KOMPETENSI 11 (SOSIAL) : BERSIKAP INKLUSIF, BERTINDAK OBYEKTIF, SERTA TIDAK DISKRIMINATIF'),
(15, 'KOMPETENSI 12 (SOSIAL) : KOMUNIKASI DENGAN SESAMA GURU, TENAGA KEPENDIDIKAN, ORANG TUA PESERTA DIDIK, DAN MASYARAKAT'),
(16, 'KOMPETENSI 13 (PROFESIONAL) : PENGUASAAN MATERI, STRUKTUR, KONSEP DAN POLA KEILMUAN YANG MENDUKUNG MATA PELAJARAN YANG DIAMPU'),
(17, 'KOMPETENSI 14 (PROFESIONAL) : MENGEMBANGKAN KEPROFESIAN MELALUI TINDAKAN REFLEKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `kode_respondensi`
--

CREATE TABLE `kode_respondensi` (
  `id_kode_respondensi` int(10) UNSIGNED NOT NULL,
  `nama_respondensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kode_respondensi`
--

INSERT INTO `kode_respondensi` (`id_kode_respondensi`, `nama_respondensi`) VALUES
(1, 'RESPONDEN GURU TEMAN SEJAWAT'),
(2, 'RESPONDEN PESERTA DIDIK'),
(3, 'RESPONDEN ORANG TUA PESERTA DIDIK');

-- --------------------------------------------------------

--
-- Table structure for table `komponen_kuisioner`
--

CREATE TABLE `komponen_kuisioner` (
  `id_komponen` int(10) UNSIGNED NOT NULL,
  `id_responden` int(11) UNSIGNED NOT NULL,
  `nama_komponen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komponen_kuisioner`
--

INSERT INTO `komponen_kuisioner` (`id_komponen`, `id_responden`, `nama_komponen`) VALUES
(1, 1, 'Perilaku Guru Sehari-Hari'),
(2, 1, 'Hubungan Guru Dengan Teman Sejawat'),
(3, 1, 'Perilaku Profesional Guru'),
(4, 2, 'Penugasan Materi'),
(5, 2, 'Kemahiran Dalam Mengajar'),
(6, 2, 'Perilaku Guru Sehari-Hari'),
(7, 2, 'Hubungan Sosial Dengan Peserta Didik'),
(8, 3, 'Komunikasi'),
(9, 3, 'Kepercayaan Dalam Memberikan Pendidikan Kepada Peserta Didik');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(10) UNSIGNED NOT NULL,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Bahasa Inggris'),
(3, 'Bahasa Jepang'),
(4, 'Bahasa Jerman'),
(5, 'Bimbingan dan Konseling/Konselor (BP/BK)'),
(6, 'Biologi'),
(7, 'Ekonomi'),
(8, 'Fisika'),
(9, 'Geografi'),
(10, 'Kimia'),
(11, 'Matematika (Peminatan)'),
(12, 'Matematika (Umum)'),
(13, 'Muatan Lokal Bahasa Daerah'),
(14, 'Pendidikan Agama Hindu dan Budi Pekerti'),
(15, 'Pendidikan Agama Islam dan Budi Pekerti'),
(16, 'Pendidikan Agama Katholik dan Budi Pekerti'),
(17, 'Pendidikan Agama Kristen dan Budi Pekerti'),
(18, 'Pendidikan Jasmani, Olahraga, dan Kesehatan'),
(19, 'Pendidikan Kepercayaan terhadap Tuhan YME dan Budi Pekerti'),
(20, 'Pendidikan Pancasila dan Kewarganegaraan'),
(21, 'Prakarya dan Kewirausahaan'),
(22, 'Sejarah'),
(23, 'Sejarah Indonesia'),
(24, 'Seni Budaya'),
(25, 'Sosiologi');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_06_04_150001_create_mapel_table', 1),
(2, '2022_06_04_150500_create_guru_table', 1),
(3, '2022_06_04_150590_create_kelas_table', 1),
(4, '2022_06_04_150600_create_siswa_table', 1),
(5, '2022_06_04_150601_create_users_table', 1),
(6, '2022_06_13_150002_create_komponen_kuisioner', 1),
(7, '2022_06_13_200215_create_kelas_ajar', 1),
(9, '2022_06_13_201399_create_kode_kompetensi', 1),
(10, '2022_06_13_201400_create_indikator', 1),
(11, '2022_06_13_201422_create_skor_kompetensi', 1),
(12, '2022_06_13_202030_create_nilai_kompetensi', 1),
(13, '2022_06_13_202100_create_kode_respondensi', 1),
(14, '2022_06_13_202252_create_penilaian_respondensi', 1),
(15, '2022_06_13_202802_create_pernyataan_kuisioner', 1),
(16, '2022_06_13_204241_create_nilai_respondensi', 1),
(18, '2022_06_13_200429_create_penilai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kompetensi`
--

CREATE TABLE `nilai_kompetensi` (
  `id_nilai_kompetensi` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL,
  `id_kompetensi` int(10) UNSIGNED NOT NULL,
  `jumlah_skor_kompetensi` int(11) NOT NULL,
  `nilai_kompetensi` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_kompetensi`
--

INSERT INTO `nilai_kompetensi` (`id_nilai_kompetensi`, `id_guru`, `id_kompetensi`, `jumlah_skor_kompetensi`, `nilai_kompetensi`) VALUES
(1, 51, 1, 12, 100.00),
(2, 51, 2, 11, 91.67),
(3, 51, 6, 7, 87.50),
(4, 51, 17, 11, 91.67),
(5, 51, 8, 14, 100.00),
(6, 51, 7, 21, 95.45),
(7, 51, 9, 12, 100.00),
(8, 51, 10, 9, 90.00),
(9, 51, 11, 0, 0.00),
(10, 51, 12, 7, 70.00),
(11, 51, 13, 12, 75.00),
(12, 51, 14, 6, 100.00),
(13, 51, 15, 3, 50.00),
(14, 51, 16, 5, 83.33);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_respondensi`
--

CREATE TABLE `nilai_respondensi` (
  `id_nilai_respondensi` int(10) UNSIGNED NOT NULL,
  `id_kode_respondensi` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL,
  `jumlah_skor_respondensi` int(11) NOT NULL,
  `nilai_respondensi` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilai`
--

CREATE TABLE `penilai` (
  `id_penilai` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL,
  `id_guru_penilai` int(10) UNSIGNED NOT NULL,
  `nomor_sk_penugasan_penilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_sk_penilai` date NOT NULL,
  `tanggal_berlaku_sk` date NOT NULL,
  `tahun_penilaian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_formatif` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_sumatif` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_penilaian` date NOT NULL,
  `periode_penilaian_awal` date NOT NULL,
  `periode_penilaian_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penilai`
--

INSERT INTO `penilai` (`id_penilai`, `id_guru`, `id_guru_penilai`, `nomor_sk_penugasan_penilai`, `tanggal_sk_penilai`, `tanggal_berlaku_sk`, `tahun_penilaian`, `status_formatif`, `status_sumatif`, `tanggal_penilaian`, `periode_penilaian_awal`, `periode_penilaian_akhir`) VALUES
(1, 51, 14, '800/245/101.6.28/2017', '2022-01-01', '2022-12-31', '2022', '1', '1', '2022-01-01', '2022-01-01', '2022-12-31'),
(2, 56, 32, 'Test 123', '2022-07-11', '2022-07-11', '2022', '1', '1', '2022-07-01', '2022-07-01', '2022-07-31'),
(3, 41, 26, 'teste12', '2022-07-22', '2022-07-22', '2022', '1', '1', '2022-07-22', '2022-07-22', '2022-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_respondensi`
--

CREATE TABLE `penilaian_respondensi` (
  `id_penilaian_resndensi` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL,
  `id_responden` int(11) NOT NULL,
  `id_kode_respondensi` int(10) UNSIGNED NOT NULL,
  `id_komponen` int(10) UNSIGNED NOT NULL,
  `id_pernyataan` int(11) NOT NULL,
  `skor_penilaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penilaian_respondensi`
--

INSERT INTO `penilaian_respondensi` (`id_penilaian_resndensi`, `id_guru`, `id_responden`, `id_kode_respondensi`, `id_komponen`, `id_pernyataan`, `skor_penilaian`) VALUES
(1, 16, 1, 3, 8, 73, 2),
(2, 16, 1, 3, 8, 74, 2),
(3, 16, 1, 3, 8, 75, 1),
(4, 16, 1, 2, 4, 31, 2),
(5, 17, 16, 1, 1, 7, 2),
(6, 17, 16, 1, 2, 20, 2),
(7, 17, 16, 1, 3, 30, 2),
(8, 17, 16, 1, 1, 2, 0),
(9, 16, 1, 2, 4, 33, 1),
(10, 16, 1, 2, 6, 51, 1),
(11, 16, 1, 2, 6, 65, 1),
(12, 18, 16, 1, 1, 2, 1),
(13, 18, 16, 1, 2, 15, 1),
(14, 18, 16, 1, 3, 30, 2),
(15, 16, 1, 2, 4, 34, 1),
(16, 18, 16, 1, 3, 29, 1),
(17, 16, 1, 2, 7, 72, 2),
(18, 16, 1, 3, 9, 80, 2),
(19, 16, 18, 1, 1, 1, 2),
(20, 16, 18, 1, 1, 2, 1),
(21, 16, 18, 1, 3, 30, 2),
(22, 16, 18, 1, 3, 29, 2),
(23, 16, 1, 2, 4, 32, 2),
(24, 16, 1, 3, 9, 76, 1),
(25, 16, 1, 3, 9, 77, 2),
(26, 16, 1, 2, 5, 37, 2),
(27, 16, 1, 2, 5, 38, 2),
(28, 16, 1, 2, 4, 35, 2),
(29, 16, 1, 2, 4, 36, 2),
(30, 16, 1, 3, 9, 78, 2),
(31, 16, 1, 3, 9, 79, 1),
(32, 51, 20, 1, 1, 1, 2),
(33, 51, 20, 1, 1, 2, 2),
(34, 51, 20, 1, 1, 3, 2),
(35, 51, 20, 1, 1, 4, 2),
(36, 51, 20, 1, 1, 5, 2),
(37, 51, 20, 1, 1, 6, 2),
(38, 51, 20, 1, 1, 7, 2),
(39, 51, 20, 1, 1, 8, 2),
(40, 51, 20, 1, 1, 9, 2),
(41, 51, 20, 1, 1, 10, 2),
(42, 51, 20, 1, 1, 11, 1),
(43, 51, 20, 1, 2, 12, 1),
(44, 51, 20, 1, 2, 13, 2),
(45, 51, 20, 1, 2, 14, 1),
(46, 51, 20, 1, 2, 15, 1),
(47, 51, 20, 1, 2, 16, 2),
(48, 51, 20, 1, 2, 17, 2),
(49, 51, 20, 1, 2, 18, 2),
(50, 51, 20, 1, 2, 19, 2),
(51, 51, 20, 1, 2, 20, 2),
(52, 51, 20, 1, 2, 21, 2),
(53, 51, 20, 1, 3, 22, 2),
(54, 51, 20, 1, 3, 23, 2),
(55, 51, 20, 1, 3, 24, 2),
(56, 51, 20, 1, 3, 25, 2),
(57, 51, 20, 1, 3, 26, 2),
(58, 51, 20, 1, 3, 27, 2),
(59, 51, 20, 1, 3, 28, 2),
(60, 51, 20, 1, 3, 29, 2),
(61, 51, 20, 1, 3, 30, 2),
(62, 51, 3, 3, 4, 31, 2),
(63, 51, 3, 3, 4, 32, 2),
(64, 51, 3, 3, 4, 33, 1),
(65, 51, 3, 3, 4, 34, 2),
(66, 51, 3, 3, 4, 35, 2),
(67, 51, 3, 3, 4, 36, 2),
(68, 51, 3, 3, 5, 37, 2),
(69, 51, 3, 3, 5, 38, 2),
(70, 51, 3, 3, 5, 39, 2),
(71, 51, 3, 3, 5, 40, 2),
(72, 51, 3, 3, 5, 41, 2),
(73, 51, 3, 3, 5, 42, 2),
(74, 51, 3, 3, 5, 43, 2),
(75, 51, 3, 3, 5, 44, 2),
(76, 51, 3, 3, 5, 45, 2),
(77, 51, 3, 3, 5, 46, 2),
(78, 51, 3, 3, 5, 47, 2),
(79, 51, 3, 3, 5, 48, 2),
(80, 51, 3, 3, 5, 49, 2),
(81, 51, 3, 3, 5, 50, 2),
(82, 51, 3, 3, 6, 51, 1),
(83, 51, 3, 3, 6, 52, 2),
(84, 51, 3, 3, 6, 53, 2),
(85, 51, 3, 3, 6, 54, 2),
(86, 51, 3, 3, 6, 55, 2),
(87, 51, 3, 3, 6, 56, 2),
(88, 51, 3, 3, 6, 57, 2),
(89, 51, 3, 3, 6, 58, 2),
(90, 51, 3, 3, 6, 59, 2),
(91, 51, 3, 3, 6, 60, 2),
(92, 51, 3, 3, 6, 61, 2),
(93, 51, 3, 3, 6, 62, 2),
(94, 51, 3, 3, 6, 63, 1),
(95, 51, 3, 3, 6, 64, 2),
(96, 51, 3, 3, 6, 65, 2),
(97, 51, 3, 3, 7, 66, 2),
(98, 51, 3, 3, 7, 67, 2),
(99, 51, 3, 3, 7, 68, 2),
(100, 51, 3, 3, 7, 69, 2),
(101, 51, 3, 3, 7, 70, 2),
(102, 51, 3, 3, 7, 71, 2),
(103, 51, 3, 3, 7, 72, 1),
(104, 51, 3, 3, 8, 73, 2),
(105, 51, 3, 3, 8, 74, 2),
(106, 51, 3, 3, 8, 75, 2),
(107, 51, 3, 3, 9, 76, 2),
(108, 51, 3, 3, 9, 77, 2),
(109, 51, 3, 3, 9, 78, 2),
(110, 51, 3, 3, 9, 79, 2),
(111, 51, 3, 3, 9, 80, 2),
(112, 51, 19, 1, 1, 1, 2),
(113, 51, 19, 1, 1, 2, 2),
(114, 51, 19, 1, 1, 3, 2),
(115, 51, 19, 1, 1, 4, 2),
(116, 51, 19, 1, 1, 5, 2),
(117, 51, 19, 1, 1, 6, 2),
(118, 51, 19, 1, 1, 7, 2),
(119, 51, 19, 1, 1, 8, 2),
(120, 51, 19, 1, 1, 9, 2),
(121, 51, 19, 1, 1, 10, 2),
(122, 51, 19, 1, 1, 11, 2),
(123, 51, 19, 1, 2, 12, 2),
(124, 51, 19, 1, 2, 13, 2),
(125, 51, 19, 1, 2, 14, 2),
(126, 51, 19, 1, 2, 15, 2),
(127, 51, 19, 1, 2, 16, 2),
(128, 51, 19, 1, 2, 17, 2),
(129, 51, 19, 1, 2, 18, 2),
(130, 51, 19, 1, 2, 19, 2),
(131, 51, 19, 1, 2, 20, 2),
(132, 51, 19, 1, 2, 21, 2),
(133, 51, 19, 1, 3, 22, 2),
(134, 51, 19, 1, 3, 23, 2),
(135, 51, 19, 1, 3, 24, 1),
(136, 51, 19, 1, 3, 25, 2),
(137, 51, 19, 1, 3, 26, 2),
(138, 51, 19, 1, 3, 27, 2),
(139, 51, 19, 1, 3, 28, 2),
(140, 51, 19, 1, 3, 29, 2),
(141, 51, 19, 1, 3, 30, 2),
(142, 51, 1, 2, 4, 31, 2),
(143, 51, 1, 2, 4, 32, 2),
(144, 51, 1, 2, 4, 33, 2),
(145, 51, 1, 2, 4, 34, 2),
(146, 51, 1, 2, 4, 35, 2),
(147, 51, 1, 2, 4, 36, 2),
(148, 51, 1, 2, 5, 37, 1),
(149, 51, 1, 2, 5, 38, 2),
(150, 51, 1, 2, 5, 39, 2),
(151, 51, 1, 2, 5, 40, 2),
(152, 51, 1, 2, 5, 41, 2),
(153, 51, 1, 2, 5, 42, 2),
(154, 51, 1, 2, 5, 43, 2),
(155, 51, 1, 2, 5, 44, 2),
(156, 51, 1, 2, 5, 45, 2),
(157, 51, 1, 2, 5, 46, 2),
(158, 51, 1, 2, 5, 47, 2),
(159, 51, 1, 2, 5, 48, 2),
(160, 51, 1, 2, 5, 49, 2),
(161, 51, 1, 2, 5, 50, 2),
(162, 51, 1, 2, 6, 51, 2),
(163, 51, 1, 2, 6, 52, 2),
(164, 51, 1, 2, 6, 53, 2),
(165, 51, 1, 2, 6, 54, 2),
(166, 51, 1, 2, 6, 55, 2),
(167, 51, 1, 2, 6, 56, 2),
(168, 51, 1, 2, 6, 57, 2),
(169, 51, 1, 2, 6, 58, 2),
(170, 51, 1, 2, 6, 59, 2),
(171, 51, 1, 2, 6, 60, 2),
(172, 51, 1, 2, 6, 61, 2),
(173, 51, 1, 2, 6, 62, 2),
(174, 51, 1, 2, 6, 63, 2),
(175, 51, 1, 2, 6, 64, 2),
(176, 51, 1, 2, 6, 65, 2),
(177, 51, 1, 2, 7, 66, 2),
(178, 51, 1, 2, 7, 67, 2),
(179, 51, 1, 2, 7, 68, 2),
(180, 51, 1, 2, 7, 69, 2),
(181, 51, 1, 2, 7, 70, 2),
(182, 51, 1, 2, 7, 71, 2),
(183, 51, 1, 2, 7, 72, 2),
(184, 51, 7, 3, 7, 72, 2),
(185, 51, 7, 3, 4, 31, 2),
(186, 51, 7, 3, 4, 32, 2),
(187, 51, 7, 3, 4, 33, 2),
(188, 51, 7, 3, 4, 34, 2),
(189, 51, 7, 3, 4, 35, 2),
(190, 51, 7, 3, 4, 36, 2),
(191, 51, 7, 3, 7, 66, 2),
(192, 51, 7, 3, 7, 67, 2),
(193, 51, 7, 3, 7, 68, 2),
(194, 51, 7, 3, 7, 69, 2),
(195, 51, 7, 3, 7, 70, 2),
(196, 51, 7, 3, 7, 71, 1),
(197, 51, 4, 3, 4, 31, 2),
(198, 51, 4, 3, 4, 32, 2),
(199, 51, 4, 3, 4, 33, 1),
(200, 51, 4, 3, 4, 34, 2),
(201, 30, 4, 3, 8, 73, 2),
(202, 30, 4, 3, 8, 74, 2),
(203, 30, 4, 3, 8, 75, 2),
(204, 51, 4, 3, 8, 73, 2),
(205, 51, 4, 3, 8, 74, 2),
(206, 51, 4, 3, 8, 75, 2),
(207, 51, 4, 3, 9, 76, 1),
(208, 51, 4, 3, 9, 77, 2),
(209, 51, 4, 3, 9, 78, 2),
(210, 51, 4, 3, 9, 79, 2),
(211, 51, 4, 3, 9, 80, 2),
(212, 30, 4, 3, 9, 76, 1),
(213, 30, 4, 3, 9, 77, 2),
(214, 30, 4, 3, 9, 78, 2),
(215, 30, 4, 3, 9, 79, 2),
(216, 30, 4, 3, 9, 80, 2),
(217, 51, 4, 3, 4, 35, 2),
(218, 51, 4, 3, 4, 36, 2),
(219, 51, 1, 3, 8, 73, 2),
(220, 51, 1, 3, 8, 74, 1),
(221, 51, 1, 3, 8, 75, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pernyataan_kuisioner`
--

CREATE TABLE `pernyataan_kuisioner` (
  `id_pernyataan` int(10) UNSIGNED NOT NULL,
  `id_komponen` int(10) UNSIGNED NOT NULL,
  `nama_pernyataan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pernyataan_kuisioner`
--

INSERT INTO `pernyataan_kuisioner` (`id_pernyataan`, `id_komponen`, `nama_pernyataan`) VALUES
(1, 1, 'Guru mentaati peraturan yang berlaku di sekolah'),
(2, 1, 'Guru bekerja sesuai jadwal yang ditetapkan'),
(3, 1, 'Guru berpakaian rapi dan/atau sopan'),
(4, 1, 'Guru rajin mengikuti upacara bendera'),
(5, 1, 'Guru berprilaku baik terhadap saya dan guru lain'),
(6, 1, 'Guru bersedia menerima kritik dan saran dari saya atau guru lain'),
(7, 1, 'Guru dapat menjadi teladan bagi saya dan teman-teman'),
(8, 1, 'Guru pandai mengendalikan diri'),
(9, 1, 'Guru ikut aktif menjaga lingkungan sekolah bebas dari asap rokok'),
(10, 1, 'Guru berpartisipasi aktif dalam kegiatan ekstrakurikuler'),
(11, 1, 'Guru berpartisispasi aktif dalam kegiatan peningkatan prestasi sekolah'),
(12, 2, 'Guru bersikap ramah kepada saya atau orang lain'),
(13, 2, 'Guru berbahasa santun kepada saya atau orang lain'),
(14, 2, 'Guru memberi motivasi kepada saya atau teman-teman guru lain'),
(15, 2, 'Guru pandai berkomunikasi secara lisan atau tertulis'),
(16, 2, 'Guru memotivasi diri dan rekan sejawat secara aktif dan kreatif dalam melaksanakan proses pendidikan'),
(17, 2, 'Guru menciptakan suasana kekeluargaan di dalam dan luar sekolah'),
(18, 2, 'Guru mudah bekerjasama dengan saya atau guru lainnya'),
(19, 2, 'Guru bersedia diajak berdikusi tentang segala hal terkait kepentingan peserta didik dan sekolah'),
(20, 2, 'Guru bersedia membantu menyelesaikan masalah saya dan guru lainnya'),
(21, 2, 'Guru menghargai kemampuan saya dan guru lainnya'),
(22, 3, 'Guru memiliki kretivitas dalam pembelajaran'),
(23, 3, 'Guru memiliki pengetahuan dan keterampilan Teknologi Informasi (TI) yang memadai'),
(24, 3, 'Guru memiliki perangkat pembelajaran yang lengkap'),
(25, 3, 'Guru ada di sekolah meskipun tidak mengajar di kelas'),
(26, 3, 'Guru memulai pembelajaran tepat waktu'),
(27, 3, 'Guru mengakhiri pembelajaran tepat waktu'),
(28, 3, 'Guru memberikan tugas kepada peserta didik apa bila berhalangan hadir untuk mengajar'),
(29, 3, 'Guru memberi informasi kepada saya atau guru lain jika berhalangan hadir untuk mengajar'),
(30, 3, 'Guru memperlakukan peserta didik dengan penuh kasih sayang'),
(31, 4, 'Guru menyampaikan materi pelajaran dengan contoh dalam kehidupan sehari-hari'),
(32, 4, 'Guru menjelaskan materi pelajaran dari buku paket dan sumber belajar lainnya'),
(33, 4, 'Guru memberikan contoh atau permasalahan yang berhubungan dengan keadaan saat ini'),
(34, 4, 'Guru menjawab pertanyaan dengan jelas'),
(35, 4, 'Guru menjawab pertanyaan dengan benar'),
(36, 4, 'Guru  mengajar sesuai dengan materi pelajaran'),
(37, 5, 'Guru menyampaikan kegiatan yang akan dilakukan selama pembelajaran.'),
(38, 5, 'Guru  memberikan motivasi kepada  saya dan teman-teman'),
(39, 5, 'Guru menyampaikan materi pelajaran dengan mudah dimengerti'),
(40, 5, 'Guru  mengajar dengan cara yang bervariasi misalnya diskusi, demonstrasi, tanya jawab, ceramah, dll.'),
(41, 5, 'Guru  berbicara dengan jelas ketika menyampaikan materi pelajaran'),
(42, 5, 'Guru  meminta  belajar secara berkelompok'),
(43, 5, 'Guru mengajar dengan cara yang menyenangkan dan menarik'),
(44, 5, 'Guru  terampil  menggunakan alat bantu saat mengajar'),
(45, 5, 'Guru membimbing saya  dan teman-teman ketika mengalami kesulitan'),
(46, 5, 'Guru membuat suasana nyaman saat melaksanakan pembelajaran.'),
(47, 5, 'Guru  memberi kesempatan kepada saya  dan teman-teman untuk bertanya atau menjawab'),
(48, 5, 'Guru  menghargai kemampuan  saya dan teman-teman'),
(49, 5, 'Guru   memberitahukan nilai hasil belajar'),
(50, 5, 'Guru memberikan tugas dalam pembelajaran'),
(51, 6, 'Guru mengajak saya dan teman-teman untuk berperilaku baik'),
(52, 6, 'Guru memberi contoh perilaku yang sesuai aturan'),
(53, 6, 'Guru menjalankan ibadah sesuai dengan ajaran agamanya'),
(54, 6, 'Guru berpakaian rapi sesuai aturan sekolah'),
(55, 6, 'Guru menghargai perbedaan asal, suku, ras dan agama'),
(56, 6, 'Guru berpakaian sopan'),
(57, 6, 'Guru berbicara dengan santun'),
(58, 6, 'Guru ramah'),
(59, 6, 'Guru sabar'),
(60, 6, 'Guru memulai pembelajaran tepat waktu'),
(61, 6, 'Guru mengakhiri pembelajaran tepat waktu'),
(62, 6, 'Guru memberikan tugas apabila berhalangan hadir'),
(63, 6, 'Guru menjaga lingkungan sekolah tanpa asap rokok'),
(64, 6, 'Guru menjaga kebersihan lingkungan sekolah'),
(65, 6, 'Guru memulai dan mengakhiri pembelajaran dengan berdoa bersama'),
(66, 7, 'Guru memperhatikan kebutuhan belajar saya dan teman-teman'),
(67, 7, 'Guru menyebutkan nama  saya dan teman-teman selama kegiatan pembelajaran atau kegiatan lainnya)'),
(68, 7, 'Guru memberi perhatian kepada saya dan teman-teman'),
(69, 7, 'Guru memilihara komunikasi yang baik dengan semua peserta didik'),
(70, 7, 'Guru mudah dihubungi pada saat diperlukan untuk diskusi'),
(71, 7, 'Guru akrab dengan saya dan teman-teman'),
(72, 7, 'Guru ikut serta dalam berbagai macam kegiatan sekolah (upacara, kegiatan keagamaan, senam bersama)'),
(73, 8, 'Guru memberitahukan perkembangan belajar putra/putri saya'),
(74, 8, 'Guru  memberi kesempatan berkomunikasi dengan saya yang berkaitan dengan perilaku atau kesulitan belajar'),
(75, 8, 'Guru bekerja sama dengan orang tua untuk menyelesaikan kesulitan belajar putra/putri saya'),
(76, 9, 'Guru berperan sebagai orang tua bagi putra/putri saya di sekolah'),
(77, 9, 'Guru mengubah perilaku putra/putri saya menjadi lebih baik'),
(78, 9, 'Guru memberikan bimbingan dalam pembelajaran kepada putra/putri saya yang dapat dimanfaatkan dalam kehidupan sehari-hari'),
(79, 9, 'Guru disenangi oleh putra/putri saya dan teman-temannya'),
(80, 9, 'Guru mengembalikan hasil belajar (PR, tugas, hasil ulangan) putra/putri saya dilengkapi dengan catatan');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `nis`, `nama_siswa`) VALUES
(1, 1, 1202, 'Dariati Mandasari'),
(2, 1, 1201, 'Danang Agustina'),
(3, 1, 1220, 'Kania Puspita'),
(4, 1, 1213, 'Fathonah Mangunsong'),
(5, 1, 1230, 'Amelia Nurdiyanti'),
(6, 1, 1226, 'Cemani Prasetya'),
(7, 1, 1223, 'Mutia Mulyani'),
(8, 1, 1229, 'Hilda Yulianti'),
(9, 1, 1212, 'Mala Suryono'),
(10, 1, 1204, 'Nadia Nurdiyanti'),
(11, 1, 1208, 'Daniswara Utami'),
(12, 1, 1225, 'Hartana Safitri'),
(13, 1, 1227, 'Omar Saragih'),
(14, 1, 1218, 'Yessi Anggriawan'),
(15, 1, 1228, 'Pangestu Pangestu'),
(16, 1, 1207, 'Clara Saputra'),
(17, 1, 1214, 'Sarah Puspita'),
(18, 1, 1215, 'Ajeng Farida'),
(19, 1, 1206, 'Emil Prasetyo'),
(20, 1, 1221, 'Ina Nasyiah'),
(21, 1, 1216, 'Tami Prakasa'),
(22, 1, 1217, 'Gaiman Saputra'),
(23, 1, 1210, 'Rini Wahyuni'),
(24, 1, 1224, 'Juli Rahayu'),
(25, 1, 1200, 'Raisa Namaga'),
(26, 1, 1203, 'Cinthia Wahyuni'),
(27, 1, 1222, 'Rina Nurdiyanti'),
(28, 1, 1219, 'Putri Purwanti'),
(29, 1, 1205, 'Marsudi Namaga'),
(30, 1, 1211, 'Garan Widiastuti'),
(31, 2, 1260, 'Jagapati Budiyanto'),
(32, 2, 1252, 'Vivi Purwanti'),
(33, 2, 1250, 'Almira Samosir'),
(34, 2, 1251, 'Bakianto Pudjiastuti'),
(35, 2, 1231, 'Gabriella Maulana'),
(36, 2, 1245, 'Intan Saefullah'),
(37, 2, 1238, 'Laras Thamrin'),
(38, 2, 1253, 'Fitria Halim'),
(39, 2, 1254, 'Raihan Mardhiyah'),
(40, 2, 1243, 'Karimah Sitorus'),
(41, 2, 1248, 'Raharja Tamba'),
(42, 2, 1234, 'Uli Kusmawati'),
(43, 2, 1255, 'Najwa Laksita'),
(44, 2, 1249, 'Wani Wijayanti'),
(45, 2, 1256, 'Soleh Hidayat'),
(46, 2, 1241, 'Puti Situmorang'),
(47, 2, 1236, 'Paramita Maryati'),
(48, 2, 1237, 'Salwa Ramadan'),
(49, 2, 1235, 'Kemba Pradana'),
(50, 2, 1259, 'Gangsa Purwanti'),
(51, 2, 1232, 'Hafshah Mulyani'),
(52, 2, 1258, 'Iriana Hutagalung'),
(53, 2, 1240, 'Calista Fujiati'),
(54, 2, 1244, 'Karman Wastuti'),
(55, 2, 1247, 'Oni Winarsih'),
(56, 2, 1239, 'Danang Riyanti'),
(57, 2, 1233, 'Abyasa Agustina'),
(58, 2, 1242, 'Hilda Wahyudin'),
(59, 2, 1257, 'Luwes Nurdiyanti'),
(60, 2, 1246, 'Humaira Prasetya'),
(61, 3, 1279, 'Najwa Winarno'),
(62, 3, 1262, 'Nalar Mahendra'),
(63, 3, 1280, 'Sabrina Prasasta'),
(64, 3, 1290, 'Padmi Rahayu'),
(65, 3, 1272, 'Galuh Maryati'),
(66, 3, 1287, 'Ajimat Mardhiyah'),
(67, 3, 1261, 'Puji Sihotang'),
(68, 3, 1270, 'Wardi Nasyidah'),
(69, 3, 1266, 'Halim Usamah'),
(70, 3, 1273, 'Bagas Pradipta'),
(71, 3, 1284, 'Johan Mardhiyah'),
(72, 3, 1268, 'Kania Maheswara'),
(73, 3, 1277, 'Saka Halim'),
(74, 3, 1288, 'Gawati Mahendra'),
(75, 3, 1274, 'Puji Yulianti'),
(76, 3, 1283, 'Calista Salahudin'),
(77, 3, 1267, 'Ratna Sudiati'),
(78, 3, 1263, 'Prayitna Marpaung'),
(79, 3, 1276, 'Cinta Yuliarti'),
(80, 3, 1264, 'Bella Hidayat'),
(81, 3, 1281, 'Tania Safitri'),
(82, 3, 1282, 'Teguh Suartini'),
(83, 3, 1269, 'Ulva Pertiwi'),
(84, 3, 1275, 'Fitriani Megantara'),
(85, 3, 1286, 'Wulan Hartati'),
(86, 3, 1271, 'Mala Riyanti'),
(87, 3, 1265, 'Ulya Wulandari'),
(88, 3, 1285, 'Ina Pratama'),
(89, 3, 1289, 'Wisnu Maheswara'),
(90, 3, 1278, 'Gina Hasanah'),
(91, 4, 1316, 'Raden Prastuti'),
(92, 4, 1309, 'Hadi Anggriawan'),
(93, 4, 1298, 'Yance Aryani'),
(94, 4, 1305, 'Garang Siregar'),
(95, 4, 1291, 'Dimaz Damanik'),
(96, 4, 1306, 'Capa Permadi'),
(97, 4, 1301, 'Nilam Sinaga'),
(98, 4, 1300, 'Harsanto Megantara'),
(99, 4, 1302, 'Karsa Susanti'),
(100, 4, 1296, 'Salsabila Laksita'),
(101, 4, 1319, 'Emas Utama'),
(102, 4, 1307, 'Nugraha Mustofa'),
(103, 4, 1315, 'Lutfan Suryatmi'),
(104, 4, 1292, 'Dipa Suryatmi'),
(105, 4, 1304, 'Warsita Prabowo'),
(106, 4, 1312, 'Cengkir Pertiwi'),
(107, 4, 1311, 'Tina Maulana'),
(108, 4, 1299, 'Yuni Oktaviani'),
(109, 4, 1297, 'Olivia Permadi'),
(110, 4, 1294, 'Alika Lailasari'),
(111, 4, 1318, 'Aslijan Siregar'),
(112, 4, 1308, 'Banawi Manullang'),
(113, 4, 1313, 'Hairyanto Kuswoyo'),
(114, 4, 1314, 'Melinda Oktaviani'),
(115, 4, 1310, 'Ade Latupono'),
(116, 4, 1317, 'Melinda Pangestu'),
(117, 4, 1293, 'Nova Wijayanti'),
(118, 4, 1320, 'Emong Budiman'),
(119, 4, 1295, 'Cengkir Yulianti'),
(120, 4, 1303, 'Intan Putra'),
(121, 5, 1339, 'Nrima Hutagalung'),
(122, 5, 1332, 'Yuliana Mansur'),
(123, 5, 1343, 'Karya Mandasari'),
(124, 5, 1335, 'Agus Rahimah'),
(125, 5, 1342, 'Nurul Farida'),
(126, 5, 1348, 'Aris Maryadi'),
(127, 5, 1346, 'Dinda Wahyuni'),
(128, 5, 1344, 'Latika Dabukke'),
(129, 5, 1337, 'Ika Damanik'),
(130, 5, 1333, 'Oman Wibowo'),
(131, 5, 1350, 'Yulia Sirait'),
(132, 5, 1330, 'Zelda Siregar'),
(133, 5, 1329, 'Cayadi Laksita'),
(134, 5, 1331, 'Tira Hastuti'),
(135, 5, 1321, 'Kacung Winarsih'),
(136, 5, 1341, 'Laksana Sudiati'),
(137, 5, 1322, 'Raditya Mayasari'),
(138, 5, 1349, 'Makara Wibowo'),
(139, 5, 1347, 'Wage Padmasari'),
(140, 5, 1325, 'Cengkal Kuswoyo'),
(141, 5, 1327, 'Ajeng Yuniar'),
(142, 5, 1328, 'Wadi Namaga'),
(143, 5, 1338, 'Arsipatra Wahyuni'),
(144, 5, 1340, 'Hartana Mandala'),
(145, 5, 1324, 'Edi Lestari'),
(146, 5, 1336, 'Amalia Palastri'),
(147, 5, 1326, 'Laila Setiawan'),
(148, 5, 1323, 'Tiara Puspasari'),
(149, 5, 1334, 'Yuliana Maulana'),
(150, 5, 1345, 'Ismail Namaga');

-- --------------------------------------------------------

--
-- Table structure for table `skor_kompetensi`
--

CREATE TABLE `skor_kompetensi` (
  `id_skor_kompetensi` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED NOT NULL,
  `id_indikator` int(10) UNSIGNED NOT NULL,
  `id_kompetensi` int(10) UNSIGNED NOT NULL,
  `skor_kompetensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skor_kompetensi`
--

INSERT INTO `skor_kompetensi` (`id_skor_kompetensi`, `id_guru`, `id_indikator`, `id_kompetensi`, `skor_kompetensi`) VALUES
(1, 51, 1, 1, 2),
(2, 51, 2, 1, 2),
(3, 51, 3, 1, 2),
(4, 51, 4, 1, 2),
(5, 51, 5, 1, 2),
(6, 51, 6, 1, 2),
(7, 51, 7, 2, 2),
(8, 51, 8, 2, 2),
(9, 51, 9, 2, 2),
(10, 51, 10, 2, 2),
(11, 51, 11, 2, 2),
(12, 51, 12, 2, 1),
(13, 51, 13, 6, 2),
(14, 51, 14, 6, 2),
(15, 51, 15, 6, 2),
(16, 51, 16, 6, 1),
(17, 51, 73, 17, 1),
(18, 51, 74, 17, 2),
(19, 51, 75, 17, 2),
(20, 51, 76, 17, 2),
(21, 51, 77, 17, 2),
(22, 51, 78, 17, 2),
(23, 51, 28, 8, 2),
(24, 51, 29, 8, 2),
(25, 51, 30, 8, 2),
(26, 51, 31, 8, 2),
(27, 51, 32, 8, 2),
(28, 51, 33, 8, 2),
(29, 51, 34, 8, 2),
(30, 51, 17, 7, 2),
(31, 51, 18, 7, 2),
(32, 51, 19, 7, 2),
(33, 51, 20, 7, 1),
(34, 51, 21, 7, 2),
(35, 51, 22, 7, 2),
(36, 51, 23, 7, 2),
(37, 51, 24, 7, 2),
(38, 51, 25, 7, 2),
(39, 51, 26, 7, 2),
(40, 51, 27, 7, 2),
(41, 51, 35, 9, 2),
(42, 51, 36, 9, 2),
(43, 51, 37, 9, 2),
(44, 51, 38, 9, 2),
(45, 51, 39, 9, 2),
(46, 51, 40, 9, 2),
(47, 51, 41, 10, 2),
(48, 51, 42, 10, 2),
(49, 51, 43, 10, 1),
(50, 51, 44, 10, 2),
(51, 51, 45, 10, 2),
(52, 51, 46, 11, 0),
(53, 51, 47, 11, 0),
(54, 51, 48, 11, 0),
(55, 51, 49, 11, 0),
(56, 51, 50, 11, 0),
(57, 51, 51, 12, 2),
(58, 51, 52, 12, 1),
(59, 51, 53, 12, 1),
(60, 51, 54, 12, 2),
(61, 51, 55, 12, 1),
(62, 51, 56, 13, 2),
(63, 51, 57, 13, 2),
(64, 51, 58, 13, 2),
(65, 51, 59, 13, 2),
(66, 51, 60, 13, 1),
(67, 51, 61, 13, 2),
(68, 51, 62, 13, 1),
(69, 51, 63, 13, 0),
(70, 51, 64, 14, 2),
(71, 51, 65, 14, 2),
(72, 51, 66, 14, 2),
(73, 51, 67, 15, 1),
(74, 51, 68, 15, 1),
(75, 51, 69, 15, 1),
(76, 51, 70, 16, 2),
(77, 51, 71, 16, 2),
(78, 51, 72, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) UNSIGNED DEFAULT NULL,
  `id_siswa` int(10) UNSIGNED DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `id_guru`, `id_siswa`, `level`, `email`, `password`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'admin', 'admin@admin.com', '$2y$10$u9rq1f7j6aIA9TPF4uWcQ.PVRY3Ffm.AsKKxZIOjuNMH4sYlljKYe', 1, '2022-06-29 03:49:13', '2022-06-29 03:49:13'),
(2, 14, NULL, 'penilai', '196907131994031005', '$2y$10$3gocno9H1NgXS.ZEopvzdezV8vfUreZobUPitOwB.tz1yXJfDX8o.', 1, '2022-06-30 07:06:15', '2022-06-30 07:06:15'),
(3, 15, NULL, 'penilai', '196009271988032005', '$2y$10$zUPaLlDgCfNYTH39CyjPDezY05IlXMZegtB2I7EvbVYybK1WXz7Ii', 1, '2022-06-30 07:06:15', '2022-06-30 07:06:15'),
(4, 16, NULL, 'guru', '196105061987032005', '$2y$10$t9jBfhtlEC6ebdi3szwJwus5wvGGiNey58kgNmhJX61ar6otdUSSq', 1, '2022-06-30 07:06:15', '2022-06-30 07:06:15'),
(5, 17, NULL, 'guru', '196110071987102002', '$2y$10$PbCb6ZCrOahAwdjumLamUeCWwqvaPnq2qsLPdPw26Z/LQaylrfPv2', 1, '2022-06-30 07:06:15', '2022-06-30 07:06:15'),
(6, 18, NULL, 'guru', '196204101988032011', '$2y$10$X/3qjwvs18zaFYrQR55BoOtyajeCbUR/x.uW5UZ8dTUjKL2/Xitxa', 1, '2022-06-30 07:06:15', '2022-06-30 07:06:15'),
(7, 19, NULL, 'guru', '196205041988031016', '$2y$10$hQFZNo4PqNPMic1ZR.XywOP.iyFCsTQdvDdgAk/A7dj7NDgBsv0oy', 1, '2022-06-30 07:06:15', '2022-06-30 07:06:15'),
(8, 20, NULL, 'guru', '196205161987121002', '$2y$10$JK9EmfxCNLXs/.Leg4nPMutXlJDc1fMVMGlVGwpzIU3Zo25ckenlS', 1, '2022-06-30 07:06:16', '2022-06-30 07:06:16'),
(9, 21, NULL, 'guru', '196304021985122005', '$2y$10$.yMxw6l7ney1Dk8KXJCj4OLswEVoRcyLVB7PvJ5ApTEKZgc8kyZc2', 1, '2022-06-30 07:06:16', '2022-06-30 07:06:16'),
(10, 22, NULL, 'guru', '196305041987022005', '$2y$10$sdPn7TVr67ABy66YBehnluQUHIhhPt4mNZBCW2yKtAtFHBWM2fO.C', 1, '2022-06-30 07:06:16', '2022-06-30 07:06:16'),
(11, 23, NULL, 'guru', '196310261985122001', '$2y$10$m9lRJR4/G10MaxhUy02Vk.lrl5BgjoSwQD0oBlflFV2v39E92tydu', 1, '2022-06-30 07:06:16', '2022-06-30 07:06:16'),
(12, 24, NULL, 'guru', '196209191989011005', '$2y$10$URpAC6zHsR4CKJ03sTo6UO1XUDMrpzse4H9nnadsrgkYEC6e/J2/u', 1, '2022-06-30 07:06:16', '2022-06-30 07:06:16'),
(13, 25, NULL, 'guru', '196209271989032008', '$2y$10$BDjszP7mvCvkcZwLRuMdWeyTNC2jO7MpFlx9F8ug66QBkEtIdOx22', 1, '2022-06-30 07:06:16', '2022-06-30 07:06:16'),
(14, 26, NULL, 'penilai', '196304101990032009', '$2y$10$VHdqSplV2T3dW/Yy8I2.p.g/Uai3ozD/oD.pzfpXPQCHuia/grd26', 1, '2022-06-30 07:06:16', '2022-07-22 03:22:19'),
(15, 27, NULL, 'guru', '196411011990032003', '$2y$10$MswoWfWJYh4Ce4UZI.3XzOXuE3N/rsNayMn8otID8B76uhxBZgVby', 1, '2022-06-30 07:06:16', '2022-06-30 07:06:16'),
(16, 28, NULL, 'guru', '196507051989032018', '$2y$10$UT2gbG9ueexL2yEI1l7Bze5mZpsgTLtBZHuEpy5PJRq34jKPbC/sC', 1, '2022-06-30 07:06:16', '2022-06-30 07:06:16'),
(17, 29, NULL, 'guru', '196404171994121005', '$2y$10$glmzTk6kEv.qVgBmOMVx9.r5bk4ayNGK3G4xT20YHbFvF/FiJruCC', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(18, 30, NULL, 'guru', '196307101995122002', '$2y$10$dZZbuOezPSEEQN5lxCVlI.JRXvVlj8fqznrqSOLELNgc389I0BhC6', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(19, 31, NULL, 'guru', '197203251997032003', '$2y$10$sKObZ.sBDJ0ptRwAvG3xHuJ2KG6LMnKFmpoMfTfWLU2hnzrIStonm', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(20, 32, NULL, 'penilai', '196111281985122002', '$2y$10$nSiO39paR.5E.fmRowam/OIvTySdbga5XrgCsDjk9Ff7IR5KZFTs.', 1, '2022-06-30 07:06:17', '2022-07-11 04:35:21'),
(21, 33, NULL, 'guru', '196806212005012010', '$2y$10$U6u63XdeWmYZqKA7kDKbneRguj/Lt0xKk20bmpbWf9XijXHhu0jOy', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(22, 34, NULL, 'guru', '196201012006041026', '$2y$10$a3grjyoU2Yj/../WgH4YE.DrvHVk4h2Dy2Tv0AKYYGSBaXZeDEHmy', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(23, 35, NULL, 'guru', '196301302008011003', '$2y$10$zIYe18k1F7GJ4ovv65HKi.5xc6H5WqjyY8blkfKn5FyLqQvemfVo.', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(24, 36, NULL, 'guru', '196405162007011010', '$2y$10$MJ2l.FYYPUyqtJNNv9El9e9s1DRN6l5yC9z9SNqHYUSvwIjdTs7w2', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(25, 37, NULL, 'guru', '196406112007011014', '$2y$10$fEhj9sadcQdLhptkNvJ1OegO60JYzGmM9qTgWQEDiCQNmRG6f23Je', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(26, 38, NULL, 'guru', '196606272007012010', '$2y$10$kUdTWK9tIVfxqV7HrpJzt.1OlMNX7r3FIl/D0V2EzQt5TDECxZ4LK', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(27, 39, NULL, 'guru', '196608142007012015', '$2y$10$XdDzcmnpqFp882scU50Y6uC9IJh5eDwtrL.GWHu8VtWyWnRAoitdi', 1, '2022-06-30 07:06:17', '2022-06-30 07:06:17'),
(28, 40, NULL, 'guru', '196611182007012011', '$2y$10$7CM8DbwKUYa1OmODkx/a2.zbtJWNxHbKhA2AY6tLAhjoOWI/B1pV.', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(29, 41, NULL, 'guru', '196706252008012004', '$2y$10$/GA9jt8i9hgtlnK7s9dMluV2TQSDDmdI1qQ5oEH0eGHCNbq.bYXtC', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(30, 42, NULL, 'guru', '196707052007011038', '$2y$10$9.23pAkiKkODczGLRoKyXee1yHs/EqukXwvteEO2UPen176YXytCW', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(31, 43, NULL, 'guru', '196709142008012008', '$2y$10$5NxdwQCm8MyKPSG8CBbM0u3ipeQwCCpwdZ4NpKuoJCwTitX3vWtye', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(32, 44, NULL, 'guru', '196806132007012018', '$2y$10$La75/7yDuvM38ACTTmiWKOpBX0IhOF7.c7A5Q9k2AVkaUZeNzcp9y', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(33, 45, NULL, 'guru', '197006062007012018', '$2y$10$hSuTwOJCib21/bfPwpLuye2iyW29zEg8WnjuLRKHFaecBM/IP0jGK', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(34, 46, NULL, 'guru', '197008052007012029', '$2y$10$CO3n2WxOnALZVqZUC0yq0.gQTitoQoN6ZDxWzpVMPgFRsdkwe3IJq', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(35, 47, NULL, 'guru', '197008102008012022', '$2y$10$bMl63TpZaZ3q0HMAmYjZW.4lJbqeuYm0USIRlVj9zrNPx8HHsKqze', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(36, 48, NULL, 'guru', '197008172007012041', '$2y$10$OMq1mW7jWZdVK4YZy0ZJoeNHr4OW7Vyiks8WvgYxo1XzqHzdlcRbe', 1, '2022-06-30 07:06:18', '2022-06-30 07:06:18'),
(37, 49, NULL, 'guru', '197109242007012011', '$2y$10$hmop4LCzMvhSM1fVMXGZieW07LQcMz7IpEz7X.Utc/rCbtipBBcbe', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(38, 50, NULL, 'guru', '197210212008011006', '$2y$10$tJHeJ98XZXH5wA6g7FwAPe95Vfr4rTy0GmIcWmnBaDdGU45CpTNZO', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(39, 51, NULL, 'guru', '197308022008012009', '$2y$10$fWk.CNB8ILuh7pmScAnVuu3UmcNYZx/BpZ.zdIDNLIHRhX1lRsyQi', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(40, 52, NULL, 'guru', '197406092008012005', '$2y$10$XGu6b3sN.FeFk/gqOqbieun8qd9d/YFv90aOO5DIaM5OV8K0vJ7N2', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(41, 53, NULL, 'guru', '197509032007012007', '$2y$10$o/J8mEeEdCI6KcQ2WoH7LOd2k51M2usYUFR8c.HR5sH5tX0stK.Hu', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(42, 54, NULL, 'guru', '198208152006042022', '$2y$10$MINyYP/.OSlf/UWvhrdQVO9QM8nvDwGbHdQyXidU59uEaDD3h0.RS', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(43, 55, NULL, 'guru', '196808142008011010', '$2y$10$/vRyUpqI8mCEyg/OTeNSFOMP5U7U2EyvbVYGrNtO9MiFREWCZipiO', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(44, 56, NULL, 'guru', '197702022011011008', '$2y$10$IvDE6mp7KUMzHwVU2P4Uy.i8JC8UJxyEX73Hqri.NAEC6/Ci8Qide', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(45, 57, NULL, 'guru', '196804092014122001', '$2y$10$cVjViE47k7iusbl4gfaAxe7esHHZLU66MhsOqK48Ml2Lf.Ha3PdJC', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(46, 58, NULL, 'guru', '197203242014122001', '$2y$10$hwsyLhJsEzphuoChnnV8zu.bqfw/n9m3v7RZxU6Gb3OcFRkJjrWcq', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(47, 59, NULL, 'guru', '197911212014121002', '$2y$10$H3bQYMpAf5M87q0VN9dH6./fsb3vsWx2oVpModIXaDDmi5.NJaTT6', 1, '2022-06-30 07:06:19', '2022-06-30 07:06:19'),
(48, NULL, 1, 'siswa', '1202', '$2y$10$2WTk74WZ3VJc6YBZuGtTDu/VFOEyOfw6sy0/Wl5c7ePGjqbHA4Smm', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(49, NULL, 2, 'siswa', '1201', '$2y$10$U9GCSCn.cBTksHka4/isZOUWjcbrDeVlZ0ncIp2e.QHaT6gq1lVa2', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(50, NULL, 3, 'siswa', '1220', '$2y$10$E5dMgbrh6wdYb5cX173ecenme8g/Gk0oGyjjcmw7hMAdhsFyKf8kq', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(51, NULL, 4, 'siswa', '1213', '$2y$10$4PNthfTCniKSKZJoDIoOU.BXEnZmh008wwNHazcaUQhQuGufuEYZS', 1, '2022-07-02 07:05:43', '2022-07-24 22:59:06'),
(52, NULL, 5, 'siswa', '1230', '$2y$10$98H4oIxgomdvPh/Qe5RfxO7GTn0iffqnQnSSxKMuhH7ZXNdGSrg92', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(53, NULL, 6, 'siswa', '1226', '$2y$10$WzRs73nQL8dunmZSLzYRpeqcwFWTEVUy.UhEzt4x4qhgOJVG9Pz92', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(54, NULL, 7, 'siswa', '1223', '$2y$10$Lwo9V2zgHbPxXyz03SlJNudkpyUQM52qcGaYAMtoynyEgWEcJZxSG', 1, '2022-07-02 07:05:43', '2022-07-24 22:59:07'),
(55, NULL, 8, 'siswa', '1229', '$2y$10$fni4EmkRzUkaIssrKIMTmOJTORzamZpqocgHVy1H0kbp7tEB5.X2C', 1, '2022-07-02 07:05:44', '2022-07-02 07:05:44'),
(56, NULL, 9, 'siswa', '1212', '$2y$10$STXchL0iDNRCYL17EQBCgOvGBUAHrh/s6hhE6bf6ooZH5qbARjfBC', 1, '2022-07-02 07:05:44', '2022-07-02 07:05:44'),
(57, NULL, 10, 'siswa', '1204', '$2y$10$2f5ZY8WqU18kBJP2nX7q8.ZWIgYw9FeMC6FBn.rwf4RDVoEAgOFwO', 1, '2022-07-02 07:05:44', '2022-07-02 07:05:44'),
(58, NULL, 11, 'siswa', '1208', '$2y$10$8V9hjBG9biTg3SfcuaZxfeGqz9194qAEB3naKZA1JQaOc4POAxJT.', 1, '2022-07-02 07:05:44', '2022-07-02 07:05:44'),
(59, NULL, 12, 'siswa', '1225', '$2y$10$V4mlu3L9xmSpJJPUIUh7FeCSgns0WoEm54bHsil3GVfdODhEy6XdW', 1, '2022-07-02 07:05:44', '2022-07-24 22:59:07'),
(60, NULL, 13, 'siswa', '1227', '$2y$10$fM75rUfwwGkJi.GaBKnB2eSLmmS8T3HdVx3AbG/ZSBt3M/cPGM1WG', 1, '2022-07-02 07:05:44', '2022-07-24 22:59:07'),
(61, NULL, 14, 'siswa', '1218', '$2y$10$ZN48LgrK009e0lX0dxBr6ObTWX1ZrcyXULaTNjRgQZoi5GseWpdaa', 1, '2022-07-02 07:05:44', '2022-07-02 07:05:44'),
(62, NULL, 15, 'siswa', '1228', '$2y$10$cV4YYSidc3IW4uqwcUlwiuwl36pSGxeG.uWbP/q7wjYIWxI1TFFbq', 1, '2022-07-02 07:05:44', '2022-07-02 07:05:44'),
(63, NULL, 16, 'siswa', '1207', '$2y$10$u4YHDFSekPByqiUKYN21lebtcDanrHsMiszU2qKnRaGlWuL.cHGtS', 1, '2022-07-02 07:05:44', '2022-07-02 07:05:44'),
(64, NULL, 17, 'siswa', '1214', '$2y$10$Z1AuUYje0mIc7PyK1z7NZeQgpFF/khidUiE6WCHyJLEeCXs9H2Jru', 1, '2022-07-02 07:05:44', '2022-07-02 07:05:44'),
(65, NULL, 18, 'siswa', '1215', '$2y$10$wVpiPG8GsqQz77YK975gCeSSV6n30XD7NL7Pv1spavfIsmeO3oxg.', 1, '2022-07-02 07:05:45', '2022-07-24 22:59:07'),
(66, NULL, 19, 'siswa', '1206', '$2y$10$2XYC9wzomt9K9iTkbko6TeL8cdZKPPDBl4dP5TBGEmaqTbUGvcsIq', 1, '2022-07-02 07:05:45', '2022-07-02 07:05:45'),
(67, NULL, 20, 'siswa', '1221', '$2y$10$FxACfyOXNrlt15tdXMnYHehcjD04lXM47auaago/YMOS6xS3b.CTu', 1, '2022-07-02 07:05:45', '2022-07-02 07:05:45'),
(68, NULL, 21, 'siswa', '1216', '$2y$10$5SvWdlPxODJ3ZyOQ8JZmKuI.Fhrc9x9gxsk5MK8Ptnj.vpl7LLIyy', 1, '2022-07-02 07:05:45', '2022-07-02 07:05:45'),
(69, NULL, 22, 'siswa', '1217', '$2y$10$XNrOOcXXzsbAWzO6G8Dy2ulOfP8qrtZaQS7ORJvDrvsh3Aq6Hko5y', 1, '2022-07-02 07:05:45', '2022-07-02 07:05:45'),
(70, NULL, 23, 'siswa', '1210', '$2y$10$JdUPnr.O1Qo5X8nE6tnKM.eh1IFxZhldN.DdEr/OMPC.hu0vImRTq', 1, '2022-07-02 07:05:45', '2022-07-02 07:05:45'),
(71, NULL, 24, 'siswa', '1224', '$2y$10$FEM/31qO36Lbj6fNIx768uUSdCm9mDx8TO7tVjwsHL9rBKSUCaY96', 1, '2022-07-02 07:05:45', '2022-07-02 07:05:45'),
(72, NULL, 25, 'siswa', '1200', '$2y$10$Dv6PpT4kje9QV17eiIX9cO2lYNPTAFB40D.JsrrcZAlMuHLtzyeuG', 1, '2022-07-02 07:05:45', '2022-07-02 07:05:45'),
(73, NULL, 26, 'siswa', '1203', '$2y$10$uY4f78aJ1TWBqfEbQqtFOOJlyc0/9WfHxnBV3azU28JkSEFI/h1qq', 1, '2022-07-02 07:05:45', '2022-07-02 07:05:45'),
(74, NULL, 27, 'siswa', '1222', '$2y$10$96txEEUT6AZzQNdFOGiEfu5XqfaPc4eLuAXL/cJK93lm3n.F1xH7y', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(75, NULL, 28, 'siswa', '1219', '$2y$10$SF0ZwECzVBfAwS2IHSQt6OVIDV50G1zxgIBKDgtw3nQv9SLvbTZqy', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(76, NULL, 29, 'siswa', '1205', '$2y$10$56dVOLLoGQ7aoxkQFCtP/OQmEPacqS6HjjomLMZEiSmkBxqrl4H8m', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(77, NULL, 30, 'siswa', '1211', '$2y$10$n4YGOE9UkKlt4QCShx.BretIQP6/1egenD.S.zeg5keK6NgkvHKdq', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(78, NULL, 31, 'siswa', '1260', '$2y$10$ZWifHthkbfDICVfqJwm0U.zKwXYWQtN49wGXAochPGEWRNixKAuQq', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(79, NULL, 32, 'siswa', '1252', '$2y$10$S/asd9S0VOqwwsZnbUysxONkEHV.MpfOFqTquPe.ZOy5NaFeYeILO', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(80, NULL, 33, 'siswa', '1250', '$2y$10$B17Xa5YjM5BLbY28.Y9byOIIpxCLKcc8DZp2W.DbCx./x1WH/sVDS', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(81, NULL, 34, 'siswa', '1251', '$2y$10$OsURoWB6Y9FSVa6Pmc2vce2.gDR0LuyHSWLzA4BdDoy.a4ekoB8ka', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(82, NULL, 35, 'siswa', '1231', '$2y$10$VcKLqW0TJuRtTzWSmC5bl.taAUfrMiRNrS2X4PG/yCY4J7ikxQcF6', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(83, NULL, 36, 'siswa', '1245', '$2y$10$4VTUqeJMnBCFKw17LQjIKezKArHHEMtoXwf2yDdlPWWKZjGNfQMdO', 1, '2022-07-02 07:05:46', '2022-07-02 07:05:46'),
(84, NULL, 37, 'siswa', '1238', '$2y$10$o/s8OJe2A0Kt9EVthm/mCOPouBKgekc2eQwQ1AS5IEm0Dfi04r2U.', 1, '2022-07-02 07:05:47', '2022-07-02 07:05:47'),
(85, NULL, 38, 'siswa', '1253', '$2y$10$B15lQvJ/6sHxFurmzerxE.7pJrRd1GTXdNn1DoVttgSAs6eAdicsK', 1, '2022-07-02 07:05:47', '2022-07-24 22:59:08'),
(86, NULL, 39, 'siswa', '1254', '$2y$10$tXCtvoPz2D8Tn0aDq4d7hOGZ3YLpQOsArJiHq6nkiVr/K1FZUCqYi', 1, '2022-07-02 07:05:47', '2022-07-02 07:05:47'),
(87, NULL, 40, 'siswa', '1243', '$2y$10$xHMYPexpaBDMxOmEFc5BM.B3hgv6GKN0SE/CJL2AXHJe05pgXMzjq', 1, '2022-07-02 07:05:47', '2022-07-02 07:05:47'),
(88, NULL, 41, 'siswa', '1248', '$2y$10$2G.K5g8S65quUChwn8BjQe3DxRTtuKwg8bV4Z5T/jLAm.dzLmgdGS', 1, '2022-07-02 07:05:47', '2022-07-02 07:05:47'),
(89, NULL, 42, 'siswa', '1234', '$2y$10$4jkJnw8u./JNVS/.AjqZf.mZm3f9dlVP9nn1bh3LjOyDUM3bV9ir2', 1, '2022-07-02 07:05:47', '2022-07-02 07:05:47'),
(90, NULL, 43, 'siswa', '1255', '$2y$10$m80/8t2k1cmrHMxVLiTDL.6T6que3jlH/WBm.lkVburAjX1bJykwO', 1, '2022-07-02 07:05:47', '2022-07-24 22:59:08'),
(91, NULL, 44, 'siswa', '1249', '$2y$10$VYalHpdqRh52gu2eRWlroO7LJW/T5kkPrvCfvBIf4Q4FQF/OGP6Wa', 1, '2022-07-02 07:05:47', '2022-07-02 07:05:47'),
(92, NULL, 45, 'siswa', '1256', '$2y$10$c824076QjyTB4tf9RjLPjeJMidLiy4psywD1apYAxlAsGlKWj51ka', 1, '2022-07-02 07:05:47', '2022-07-24 22:59:07'),
(93, NULL, 46, 'siswa', '1241', '$2y$10$E9ol.O0joa44/Tby7kdjUe.TTIhKZ6N/mOs6FjpYS2TGnlFD/zFkm', 1, '2022-07-02 07:05:47', '2022-07-02 07:05:47'),
(94, NULL, 47, 'siswa', '1236', '$2y$10$lUPS8mbYMnFpUSkwz7U6muB5vsWDIHJ8ilJojC7lcQXSHRZ0wb9cW', 1, '2022-07-02 07:05:47', '2022-07-02 07:05:47'),
(95, NULL, 48, 'siswa', '1237', '$2y$10$T7J9rBbZmVEUXSWt2P4/s.zY8CunsSozGMPb/bgxlZ55w3MWd2bnK', 1, '2022-07-02 07:05:48', '2022-07-02 07:05:48'),
(96, NULL, 49, 'siswa', '1235', '$2y$10$0nEEBjJNmHruD7tDPBWTYOP5fq6hjn.Zx9A4KKQxBJCz/zsktaZza', 1, '2022-07-02 07:05:48', '2022-07-02 07:05:48'),
(97, NULL, 50, 'siswa', '1259', '$2y$10$nmKUEpK.Zqzxih5gLncvGetM31F8vjRZwHktbx.hygyqclerXLjBS', 1, '2022-07-02 07:05:48', '2022-07-24 22:59:08'),
(98, NULL, 51, 'siswa', '1232', '$2y$10$rZZaWQ7gzWnvUjniqcdn7uPuy.I.QetEDM7DiyadS5OJc6sKNCTky', 1, '2022-07-02 07:05:48', '2022-07-02 07:05:48'),
(99, NULL, 52, 'siswa', '1258', '$2y$10$IHKdSJ251mS0gKZfOG2AdevpMX6C4CE9YDS5g8qaB4Qw5rpFg95h.', 1, '2022-07-02 07:05:48', '2022-07-24 22:59:08'),
(100, NULL, 53, 'siswa', '1240', '$2y$10$j6MvSwCo0mp6XuiSFAelXumv/hRbOT1j5y4T2V/rViZKeb756Evpu', 1, '2022-07-02 07:05:48', '2022-07-02 07:05:48'),
(101, NULL, 54, 'siswa', '1244', '$2y$10$mIwIdgFLvOgEL5BV9K5a9u5PR5Vanysqu8RmLWMohikPVN3qgbrji', 1, '2022-07-02 07:05:48', '2022-07-02 07:05:48'),
(102, NULL, 55, 'siswa', '1247', '$2y$10$UBU08OrxBUY.64ZY2CydJOe1zBeA75fPQzyXXlo4x5/gTd4CCn6K.', 1, '2022-07-02 07:05:48', '2022-07-02 07:05:48'),
(103, NULL, 56, 'siswa', '1239', '$2y$10$Cx5RtDOBrmrZgGvx9s9/fOD0d1K3xgfN4tmX1b2HqEk9jEV06.I0a', 1, '2022-07-02 07:05:48', '2022-07-02 07:05:48'),
(104, NULL, 57, 'siswa', '1233', '$2y$10$GKiABXcZdxLEr7iSKJ41uepVZor.bUiEuXwkSmQZyJ51t9K8Tl0PW', 1, '2022-07-02 07:05:48', '2022-07-02 07:05:48'),
(105, NULL, 58, 'siswa', '1242', '$2y$10$1FXYsDNBnS.s7cfInn6voeTV1NTz/BbDo8D9hYhuLf2qvkAL8KYtG', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(106, NULL, 59, 'siswa', '1257', '$2y$10$Fy6JJ/GwGifPuMYQzrWvcuAN3eJCazh/p9zHaMc/vATCWE45uOyGy', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(107, NULL, 60, 'siswa', '1246', '$2y$10$3IJ93cP/40f.l1ZeIiJteOLOgFhd4fmDD12fJMiCCzMy9PXwk89IS', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(108, NULL, 61, 'siswa', '1279', '$2y$10$LZ./hqNNgZQWNPhpe2niqOmRToYYhqHIKdqj6IYKmtRhb5DAcDEMi', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(109, NULL, 62, 'siswa', '1262', '$2y$10$iJ7KmcBdN5wcdjh.NRxMIuET459lcA1dSLXt1ME7RJDkLZZbnnara', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(110, NULL, 63, 'siswa', '1280', '$2y$10$/7VVHvHiNlRO07whwx.BpeZQQ2ilA.q71hqXZLqXYFdxeXi3qcBgm', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(111, NULL, 64, 'siswa', '1290', '$2y$10$28XNNck3yZ1qaT7.PmB15OKYryukheDI/PUxanUg8CcMgirlBjqCm', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(112, NULL, 65, 'siswa', '1272', '$2y$10$i3hVec4wxo50Jo5YZqLSjewAuDSsrxaiC9SnADVPaqYQ5.AMoHyaS', 1, '2022-07-02 07:05:49', '2022-07-24 22:59:09'),
(113, NULL, 66, 'siswa', '1287', '$2y$10$7eApgvq9prnji0OdvpV.suPi2FAihptjeiioYGAZ2tEGHXDK/vQM.', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(114, NULL, 67, 'siswa', '1261', '$2y$10$0IY2p3AL0yMIIoYyErpD1ekVfinpXgaJUGuUF1HnMXqUM6Out6832', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(115, NULL, 68, 'siswa', '1270', '$2y$10$xpKc.PzBzquYSJVevPVibe7Fs0XwFjgsu/EktOdr1NoYz8zYy5thW', 1, '2022-07-02 07:05:49', '2022-07-02 07:05:49'),
(116, NULL, 69, 'siswa', '1266', '$2y$10$ptVfIKTIQ.fTIj6eZaObRemzC5ZLLN7N2/shyyjXT3bvdfye37WOS', 1, '2022-07-02 07:05:50', '2022-07-02 07:05:50'),
(117, NULL, 70, 'siswa', '1273', '$2y$10$PGhaOGe0QOpIvDV4R6ErT.CTP1XmPPGQCMuEAyaDGSMKZ3vca2ZSu', 1, '2022-07-02 07:05:50', '2022-07-02 07:05:50'),
(118, NULL, 71, 'siswa', '1284', '$2y$10$oAiZIwbWY9/YxE6y6JyD6ezxnSS7nDTz3c5ErORAe7Upoci7PJEG2', 1, '2022-07-02 07:05:50', '2022-07-24 22:59:09'),
(119, NULL, 72, 'siswa', '1268', '$2y$10$jGAOWT7AHREzwYPnrbVqY.euSO6ySuA9fNBc45FhSS6QbCiktvTKe', 1, '2022-07-02 07:05:50', '2022-07-02 07:05:50'),
(120, NULL, 73, 'siswa', '1277', '$2y$10$ow0GJUZLeD6raqeJDq5M.OrdOCYP4f29pROZA2VAgEfJO8mtVQ2Ai', 1, '2022-07-02 07:05:50', '2022-07-02 07:05:50'),
(121, NULL, 74, 'siswa', '1288', '$2y$10$4iWg62Y73efzI9q/fFcOaOiDuBy1SQvwH5ak8kx1sRdea0b7YI7vS', 1, '2022-07-02 07:05:50', '2022-07-02 07:05:50'),
(122, NULL, 75, 'siswa', '1274', '$2y$10$WrpCyyDQmmTKJvmNtDs0NeGbdUlYXEe4ZbdEvUO9zinlas6D61oBW', 1, '2022-07-02 07:05:50', '2022-07-02 07:05:50'),
(123, NULL, 76, 'siswa', '1283', '$2y$10$pw2KPZePOlEqcGmkR9JdO..j/mrib9hesjWQIJ8WpkcU9FtpmR5EK', 1, '2022-07-02 07:05:50', '2022-07-02 07:05:50'),
(124, NULL, 77, 'siswa', '1267', '$2y$10$yg577WUuC0E1eL/4iMsmhOGjzjI0E8nCq.fB//HsLML6FGUa8CgMS', 1, '2022-07-02 07:05:50', '2022-07-24 22:59:09'),
(125, NULL, 78, 'siswa', '1263', '$2y$10$CaA03EdSdTq19L.kq/8TfOol1v/vOgp9/Bg/K8sIUdC2Yy1wS/Htq', 1, '2022-07-02 07:05:50', '2022-07-02 07:05:50'),
(126, NULL, 79, 'siswa', '1276', '$2y$10$9f8EddIwAIMycj2LHy/lCOC/QaCHEfBEu83ai2N.rRBHnd9K1fGxW', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(127, NULL, 80, 'siswa', '1264', '$2y$10$6/qP1VWXANG9UjZwWuH1sOxe8JB.k/rWAGy5Infbt1fkejzvbpFwS', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(128, NULL, 81, 'siswa', '1281', '$2y$10$0lIqeB6yzJC2KoMcz6z4luRidSxYOThBuRfAvEA.TThSaHFjX71B.', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(129, NULL, 82, 'siswa', '1282', '$2y$10$2M3aHIYZ0OsqCDo5ZGWPZ.QlKefG57LpgKkyjAYGFCcmg57g2nC9u', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(130, NULL, 83, 'siswa', '1269', '$2y$10$qasUMpPtUDrQRmZmxdmHj.oooFFJwqjCndf2QZYcJaBhWq1Ze/yDe', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(131, NULL, 84, 'siswa', '1275', '$2y$10$BN6BmIOUNHqIvbU105PrCOJMGOSHFdk2D9VT9VPNo3UKyBxx3BZFi', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(132, NULL, 85, 'siswa', '1286', '$2y$10$to/g8I7hto/TidzMo9Lr3uFshmFytgnt7OOWExd30gyY9Kdj8IjOy', 1, '2022-07-02 07:05:51', '2022-07-24 22:59:09'),
(133, NULL, 86, 'siswa', '1271', '$2y$10$0hFoLPDUonIlRbFxzEvYUO//noGTgdYcAgWzNrBFiveNCgYlW0l7q', 1, '2022-07-02 07:05:51', '2022-07-24 22:59:09'),
(134, NULL, 87, 'siswa', '1265', '$2y$10$OMcMnqiKrJCWXn5XSdNtqeTIEN5wZK.Y2tO41LW7xuCK1lyKrgaa2', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(135, NULL, 88, 'siswa', '1285', '$2y$10$SV2hBqvIGpNDNc3zWoAlWuxZwfRIVkquvoKeKNvFto2xG1jhzNDje', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(136, NULL, 89, 'siswa', '1289', '$2y$10$A.Mu2LeDtXmJ3pJfkepaYOsggpwWfvYnSro2.tnrzoBXZ1YMpkwqC', 1, '2022-07-02 07:05:51', '2022-07-02 07:05:51'),
(137, NULL, 90, 'siswa', '1278', '$2y$10$JQUXfWKsZESI0h5G7Cxbsui2Ts/hG8Ldm9jtoqC/Yu6kGqjPeyJfS', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(138, NULL, 91, 'siswa', '1316', '$2y$10$X/kV8qUE3Dm7i6mtPEcJVe49eNbZD/ZtVIFWVC1bTBALAA6YtFtM.', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(139, NULL, 92, 'siswa', '1309', '$2y$10$E3t8a7E6vuYo8eyFP8R3beDoVCKYPR1P4gT1crFpOf.RN6YYew8Km', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(140, NULL, 93, 'siswa', '1298', '$2y$10$CD092dgKS0O/3z.1DtRFjuPiNVHysH68o3rVEuSHySXDbNOANbF7m', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(141, NULL, 94, 'siswa', '1305', '$2y$10$S7IFnpn.ZfKe28Z5ZNAd6uxNtyiSZobWepNDGkWqYMXWuOivhC3tO', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(142, NULL, 95, 'siswa', '1291', '$2y$10$A/R8DD66go1qJh8OzfCiM.89AkUzwwqRLMtrjQp792kK8CW4uLLjO', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(143, NULL, 96, 'siswa', '1306', '$2y$10$5HVMtN1srQgYnAaYeq/Hj.Cok2sGVEXfZFiyHX6GUsIRwSt4VO./m', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(144, NULL, 97, 'siswa', '1301', '$2y$10$nArcymbX32CSv4YXJ10mA.SwQTOu.aqz3.7K6s1Qr8tZVeMkYcj.e', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(145, NULL, 98, 'siswa', '1300', '$2y$10$mxh.sHwuOIwZu1AqUefBh.JTCY06SIYNnga9SfZlNdoK/6ROaJGY2', 1, '2022-07-02 07:05:52', '2022-07-02 07:05:52'),
(146, NULL, 99, 'siswa', '1302', '$2y$10$nF4hZaA7RUmxwwh5tbj4C.BD2p/8z6XjG/jh/FRzFr0dGCfps1a72', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(147, NULL, 100, 'siswa', '1296', '$2y$10$TqmCTwbW2ntsmM4JYZiTOuSVns0Ap6DzFEmU7JrhsPQrG2MaCJ5B6', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(148, NULL, 101, 'siswa', '1319', '$2y$10$8IwT6w.13LW//wDj0STh8u9GNAwyBZLagv8172VtqTymqZDtsJmPW', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(149, NULL, 102, 'siswa', '1307', '$2y$10$GgnYJDWOEmlInWwtqPFXNeKJM2nSqYklmqOcEjWtkXsfzthH7.hPm', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(150, NULL, 103, 'siswa', '1315', '$2y$10$AWhR/BL1KDoTw6bCUX/12OwBcLuoza8K5JAA9EvQmy1ZtdnvgKUNa', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(151, NULL, 104, 'siswa', '1292', '$2y$10$1wO/p2n0tWeHnCa9pgb9LuoKLmuoijHlBTySmSwTNFeA5sMyKDa7u', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(152, NULL, 105, 'siswa', '1304', '$2y$10$RWQY2ajTvGoWsysnCnr1BuMozJyhaYsz8bZGvDXiJjEkW46WjJ.wy', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(153, NULL, 106, 'siswa', '1312', '$2y$10$SH2neAsBuaKiSACqV0VKhOh3loICN2r/EdC9Ac53KJ7WzKPXOoSdS', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(154, NULL, 107, 'siswa', '1311', '$2y$10$ri0c5/hME/Qa36X5ie/9Ae9GqKjk6rqWPQT6Mu1QNXo4pJ4g/xa82', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(155, NULL, 108, 'siswa', '1299', '$2y$10$.HoL5ivwh2U2UxanDDDbA.S7AkeYzZj4bCzntqRh0bs63g9km4Nta', 1, '2022-07-02 07:05:53', '2022-07-02 07:05:53'),
(156, NULL, 109, 'siswa', '1297', '$2y$10$r0eBY4wnnZtnih5q442TueDs7Sek75xM0mJErc0mM1Sdzbz4Z2TUC', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(157, NULL, 110, 'siswa', '1294', '$2y$10$lqn8apqRz9IAaf25P6Ba5./E.XblCCPm8N3n5Qb9xPidLxhNcqziO', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(158, NULL, 111, 'siswa', '1318', '$2y$10$W8AICuxoXdG1iilYi2YxyOhtv8hmEs6PIA1NHbpH6aKQlOIHKWfT.', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(159, NULL, 112, 'siswa', '1308', '$2y$10$fQqtpLpGB6KAl04vKFCBQ.8Ns29pBzgU70GgA45uUQ/wLp5d0r6/i', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(160, NULL, 113, 'siswa', '1313', '$2y$10$lLjjpLSxSUvnDec/KzbFUOCYo.iwwbv0Zlex2qjQtxeoBv7G5oLq6', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(161, NULL, 114, 'siswa', '1314', '$2y$10$ejujZD3FQ2St1yS4Otfa6OLAW1lPXckYLS8Ox6Sr1StZPVmwQugn.', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(162, NULL, 115, 'siswa', '1310', '$2y$10$OhwNSrnVtjsUCBSlJxq2.eDkC.vxIe.se/ds5ItBYLgANUrUvh.96', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(163, NULL, 116, 'siswa', '1317', '$2y$10$V78zx7PsaMoFNW8k5KbfruC0VT00SeBYEmIcF1VeoOAjWFZV8A3Ru', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(164, NULL, 117, 'siswa', '1293', '$2y$10$djDNj3UhcZSkbFAB3ZnqeuguZovdr17VnyyeoogiHR9gbgVk31SAe', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(165, NULL, 118, 'siswa', '1320', '$2y$10$2XavPAyNG6xPR9e06RqoTOdDuchHyxbiqfz5iNCh1eHtsCNLAuVIW', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(166, NULL, 119, 'siswa', '1295', '$2y$10$LUfDqsbsul3J/n1nU7G9rO8kFURJYAdvyh9v8Q1C9Z7CefHkPSm4K', 1, '2022-07-02 07:05:54', '2022-07-02 07:05:54'),
(167, NULL, 120, 'siswa', '1303', '$2y$10$OGeptse3u93sJ85zFJNPV.patwnse5VQmUu1YKLrQp9tM3XcrQRsW', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(168, NULL, 121, 'siswa', '1339', '$2y$10$IUAUkt2KvXqZdUjtd0oTaOOVer/oNTM1qHo0GbxuWHt8AIULLfJPq', 1, '2022-07-02 07:05:55', '2022-07-24 22:59:10'),
(169, NULL, 122, 'siswa', '1332', '$2y$10$E2H4oontK4nfYmyXdM/FuOhlia/riNUpI45M/aEfXsl4S7zntIeLu', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(170, NULL, 123, 'siswa', '1343', '$2y$10$7y7q4i0H2PAZwZdXc3TCk.So8CjKAwvQOg4g4SM.iIZA1G21wYeSa', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(171, NULL, 124, 'siswa', '1335', '$2y$10$FaXIM96.qxKeGtzDT2MDPOMpbP6YOQyk9h09wUP3McEywA2RJGG3e', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(172, NULL, 125, 'siswa', '1342', '$2y$10$v.rGYd7LLrTYBeyPilCww.TFEMTn4sXEe2TsF5Q.1dpIGBhKCKEaW', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(173, NULL, 126, 'siswa', '1348', '$2y$10$P6hIXcAjHfCvcbnzYuzapudkr7x3RL6rvhBP6dlXUDvajT6PuQUdq', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(174, NULL, 127, 'siswa', '1346', '$2y$10$0wcuDBK5Ot4SXsF2h.ghhOq0xCwoUvUfr0oZQIsgrIz9UrQ8HpCde', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(175, NULL, 128, 'siswa', '1344', '$2y$10$CQKEJO9OCVyerI1rTWzbce9BFf8p7UWr3HjbfHXD64IfrzklMMXSu', 1, '2022-07-02 07:05:55', '2022-07-24 22:59:10'),
(176, NULL, 129, 'siswa', '1337', '$2y$10$HN8wrLjI88FCoxeUl60OUefuEm6ox.2UI3JQ1bCTZLXhfgkbOt9OW', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(177, NULL, 130, 'siswa', '1333', '$2y$10$ndI0HEvdebGdgpyuYjnfeOtOgcpPaaO0K7Cy.brXbgMZa5AUDGQqq', 1, '2022-07-02 07:05:55', '2022-07-02 07:05:55'),
(178, NULL, 131, 'siswa', '1350', '$2y$10$yWxJuaGIGFRHAHuUoN7uveT/hiArNRUAuolqHZUVu7ZsXW2foZAGa', 1, '2022-07-02 07:05:56', '2022-07-02 07:05:56'),
(179, NULL, 132, 'siswa', '1330', '$2y$10$6ypsMpGNfvl51wDfCchLgehSyCyjdE17HGTrUMcpM32fVPtvHAvya', 1, '2022-07-02 07:05:56', '2022-07-02 07:05:56'),
(180, NULL, 133, 'siswa', '1329', '$2y$10$WjNbxNOQWIDAiY.VoUCdmODIB7HCp1HZltZjGjr2gix7bJdtk1azm', 1, '2022-07-02 07:05:56', '2022-07-02 07:05:56'),
(181, NULL, 134, 'siswa', '1331', '$2y$10$qPZ1cDF4kwi8QVhBWbsKxu5d2p2cgZVJr4uAmB4lo.eYa5Bs8fIM2', 1, '2022-07-02 07:05:56', '2022-07-02 07:05:56'),
(182, NULL, 135, 'siswa', '1321', '$2y$10$bELnOxQfgA.x/Fj5HmMUTeeSyE9pmo.TaAhiTb6QqVgBcOYE14GEy', 1, '2022-07-02 07:05:56', '2022-07-02 07:05:56'),
(183, NULL, 136, 'siswa', '1341', '$2y$10$2aZWA5/4HS4alG1bZtjvf.2/DpCCy0o2Msw2xmY6aigsNJdpNslcW', 1, '2022-07-02 07:05:56', '2022-07-24 22:59:10'),
(184, NULL, 137, 'siswa', '1322', '$2y$10$S7ptxuabOz/ObFmpMQLc.uJRDhwBQM0oXzMoab87TtHGvraRqNiZO', 1, '2022-07-02 07:05:56', '2022-07-02 07:05:56'),
(185, NULL, 138, 'siswa', '1349', '$2y$10$7TVI29JxDGChCSufRw5nveEXmltWgjkmX6tcChxms1uy5W4vLxKV6', 1, '2022-07-02 07:05:57', '2022-07-02 07:05:57'),
(186, NULL, 139, 'siswa', '1347', '$2y$10$PsDfoLmjTHgie0Aq2GjxLO9HfZbVLc5nyse6mR3XvIj8f7RR0fQhO', 1, '2022-07-02 07:05:57', '2022-07-24 22:59:11'),
(187, NULL, 140, 'siswa', '1325', '$2y$10$9jsqKhoKmmrknaHyeRZL5uxYNdZlj/7LXcEzMuXaQxYfxdEomqHW2', 1, '2022-07-02 07:05:57', '2022-07-02 07:05:57'),
(188, NULL, 141, 'siswa', '1327', '$2y$10$dhkH3r6vPNINloaoFfEwAuWYPoLDgNti3BHYzTgafJP1aukFguBEq', 1, '2022-07-02 07:05:57', '2022-07-02 07:05:57'),
(189, NULL, 142, 'siswa', '1328', '$2y$10$ibCuQssiG93TJn.YZxfOWuuDUeMk5Qx0eNPNcUZXtl6emuUyv6wmO', 1, '2022-07-02 07:05:57', '2022-07-02 07:05:57'),
(190, NULL, 143, 'siswa', '1338', '$2y$10$TcbHunzzqadf1QfUAXxJvutDMWIvXJlnN4IvJHNk/VwJO18MDTzB6', 1, '2022-07-02 07:05:57', '2022-07-02 07:05:57'),
(191, NULL, 144, 'siswa', '1340', '$2y$10$qEiiTR7MktMcz868diClK.jdHThe.b08yOXCSCY7F.SEhArpbRk.K', 1, '2022-07-02 07:05:57', '2022-07-02 07:05:57'),
(192, NULL, 145, 'siswa', '1324', '$2y$10$8UWRRx3kPkifGgQKvZkR2uFljrOtxbZJWg96RP09LFNrGktP4tbSq', 1, '2022-07-02 07:05:57', '2022-07-02 07:05:57'),
(193, NULL, 146, 'siswa', '1336', '$2y$10$5EsgZ3/OYVskYazJmqz63OTNsKHyumMMs4TN01rDwMf6jhPSE5btu', 1, '2022-07-02 07:05:58', '2022-07-02 07:05:58'),
(194, NULL, 147, 'siswa', '1326', '$2y$10$Gon7zDmWF0NHEiKAmY5.nutRdL42F/BOWufmzmRIP5TVYl.iBPSJO', 1, '2022-07-02 07:05:58', '2022-07-02 07:05:58'),
(195, NULL, 148, 'siswa', '1323', '$2y$10$ioxeokIszPMVxqzywkr14OIQeZFK3ljOMUl8bl8x1NY1gT4XARICm', 1, '2022-07-02 07:05:58', '2022-07-02 07:05:58'),
(196, NULL, 149, 'siswa', '1334', '$2y$10$xIQyZtFsY4NR1nzaccgkYediQUixwtKm55bql7vVgRRcnEWzG2caq', 1, '2022-07-02 07:05:58', '2022-07-02 07:05:58'),
(197, NULL, 150, 'siswa', '1345', '$2y$10$7vmTUM3zduRo/WnJvpNpoOaV0708rgkepgzJzEm/vi/6LYvjU6xNO', 1, '2022-07-02 07:05:58', '2022-07-24 22:59:10'),
(198, NULL, 1, 'wali', 'wali_1202', '$2y$10$2WTk74WZ3VJc6YBZuGtTDu/VFOEyOfw6sy0/Wl5c7ePGjqbHA4Smm', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(199, NULL, 2, 'wali', 'wali_1201', '$2y$10$2WTk74WZ3VJc6YBZuGtTDu/VFOEyOfw6sy0/Wl5c7ePGjqbHA4Smm', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(200, NULL, 3, 'wali', 'wali_1220', '$2y$10$2WTk74WZ3VJc6YBZuGtTDu/VFOEyOfw6sy0/Wl5c7ePGjqbHA4Smm', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(201, NULL, 4, 'wali', 'wali_1213', '$2y$10$VHtISZsd66VPwincPKpVk.pJ9EhIwVWwxxNUiMm6MZ3lb2/Lx7B62', 1, '2022-07-02 07:05:43', '2022-07-24 22:59:06'),
(202, NULL, 5, 'wali', 'wali_1226', '$2y$10$2WTk74WZ3VJc6YBZuGtTDu/VFOEyOfw6sy0/Wl5c7ePGjqbHA4Smm', 1, '2022-07-02 07:05:43', '2022-07-02 07:05:43'),
(203, NULL, NULL, 'wali', 'wali_1227', '$2y$10$XzRPJhDujejBZX521m/E0.lQiR32k/W9XCBabDBq2RDUVQx38l43m', 1, '2022-07-24 22:59:07', '2022-07-24 22:59:07'),
(204, NULL, NULL, 'wali', 'wali_1223', '$2y$10$iBAU0Jv/s.AWN4v6sCRvme3gA8jxMIeWuZM8VMBNqjc4SdPkimRt6', 1, '2022-07-24 22:59:07', '2022-07-24 22:59:07'),
(205, NULL, NULL, 'wali', 'wali_1215', '$2y$10$H1ipuPy6LpucN9Tz8B1s7.esH6Si6Z/eqmCqY3Eny6dg5pXPDb8ku', 1, '2022-07-24 22:59:07', '2022-07-24 22:59:07'),
(206, NULL, NULL, 'wali', 'wali_1225', '$2y$10$1fXUm51KseOom2i8TE8A3eP1VU8o2Kx9USH7sJ/.uCoP6Hpuc7hFy', 1, '2022-07-24 22:59:07', '2022-07-24 22:59:07'),
(207, NULL, NULL, 'wali', 'wali_1256', '$2y$10$ygatsffYLNaq10yrnWzdNuxEJ3dXvxdl9RZevrBNzarJHSayaWGIq', 1, '2022-07-24 22:59:07', '2022-07-24 22:59:07'),
(208, NULL, NULL, 'wali', 'wali_1259', '$2y$10$k.8kk.HzqrY31d90D.rqxOOSwNI2RuEofzjtHDpO1lQ8hotGrxBUG', 1, '2022-07-24 22:59:08', '2022-07-24 22:59:08'),
(209, NULL, NULL, 'wali', 'wali_1255', '$2y$10$QvtwP12k0VP7EJT3tZ0touzep902Aw51YB75tBMi.2Laon5z4eYYS', 1, '2022-07-24 22:59:08', '2022-07-24 22:59:08'),
(210, NULL, NULL, 'wali', 'wali_1253', '$2y$10$QnGxm4zYvq8WbEL8hWM1NublELDBVJX7p0a5EQgGiAVb9VIeKSSjq', 1, '2022-07-24 22:59:08', '2022-07-24 22:59:08'),
(211, NULL, NULL, 'wali', 'wali_1258', '$2y$10$c.UsATLYrbI2PAYI/E8IheEvxC4Z3GfnYGIcL4cVT3L.OJP/50dee', 1, '2022-07-24 22:59:08', '2022-07-24 22:59:08'),
(212, NULL, NULL, 'wali', 'wali_1272', '$2y$10$szPz8REykrrGswrXGszug.LBtLLV6E3oc4qHvmKZw/bjdqUZA7/JG', 1, '2022-07-24 22:59:09', '2022-07-24 22:59:09'),
(213, NULL, NULL, 'wali', 'wali_1267', '$2y$10$2O3f/fn.AfqUrj3SP.hifeIXDBnG4KYo4QxC3z8psvNITdgYhMYa6', 1, '2022-07-24 22:59:09', '2022-07-24 22:59:09'),
(214, NULL, NULL, 'wali', 'wali_1284', '$2y$10$KawjcrYpZOO8p61aF6fgiOr44qgy4migioUPHqIx6VxBrXeqP4edS', 1, '2022-07-24 22:59:09', '2022-07-24 22:59:09'),
(215, NULL, NULL, 'wali', 'wali_1286', '$2y$10$y5x/EmcHadEREMiLZ01tpOWVtZj.BLXLDUs0i5bHdYHPV86Qd3COi', 1, '2022-07-24 22:59:09', '2022-07-24 22:59:09'),
(216, NULL, NULL, 'wali', 'wali_1271', '$2y$10$9T7/Njbgk0HdILHxIrjTnuDVdUeAmgR1J2V6xoI/iUkms20iljH0W', 1, '2022-07-24 22:59:09', '2022-07-24 22:59:09'),
(217, NULL, NULL, 'wali', 'wali_1339', '$2y$10$1gaU4DHgufVVCcvUqLFJhe0IPFXSR/L3rqjxiWZpJn8/7NSXAoye2', 1, '2022-07-24 22:59:10', '2022-07-24 22:59:10'),
(218, NULL, NULL, 'wali', 'wali_1344', '$2y$10$DQUmgFn2ibrBAvtJwIOotesVn/DGbr1bk5YDiJo8K1qCz9RaJ.Rke', 1, '2022-07-24 22:59:10', '2022-07-24 22:59:10'),
(219, NULL, NULL, 'wali', 'wali_1341', '$2y$10$4Xm0gg8aTnTPlPtkVCpGS.4dEETE.xkqCwqUrvy7xO3VdqRBsRqxO', 1, '2022-07-24 22:59:10', '2022-07-24 22:59:10'),
(220, NULL, NULL, 'wali', 'wali_1345', '$2y$10$.z.OkSs92jSWrt8B6eXpwOdjVYrS14zjyF6RcnZwWcB71eCLgtBsu', 1, '2022-07-24 22:59:10', '2022-07-24 22:59:10'),
(221, NULL, NULL, 'wali', 'wali_1347', '$2y$10$4KSio7hntbkEdmCEPM.S3uxZ7gZxT9lV2w7YnC2sXMtP0.lV4ywmG', 1, '2022-07-24 22:59:11', '2022-07-24 22:59:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_responden`
--
ALTER TABLE `data_responden`
  ADD PRIMARY KEY (`id_data_responden`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `guru_id_guru_index` (`id_guru`),
  ADD KEY `guru_id_mapel_index` (`id_mapel`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id_indikator`),
  ADD KEY `indikator_id_indikator_index` (`id_indikator`),
  ADD KEY `indikator_id_kompetensi_index` (`id_kompetensi`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kelas_id_kelas_index` (`id_kelas`);

--
-- Indexes for table `kelas_ajar`
--
ALTER TABLE `kelas_ajar`
  ADD PRIMARY KEY (`id_kelas_ajar`),
  ADD KEY `kelas_ajar_id_kelas_ajar_index` (`id_kelas_ajar`),
  ADD KEY `kelas_ajar_id_kelas_index` (`id_kelas`),
  ADD KEY `kelas_ajar_id_guru_index` (`id_guru`);

--
-- Indexes for table `kode_kompetensi`
--
ALTER TABLE `kode_kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`),
  ADD KEY `kode_kompetensi_id_kompetensi_index` (`id_kompetensi`);

--
-- Indexes for table `kode_respondensi`
--
ALTER TABLE `kode_respondensi`
  ADD PRIMARY KEY (`id_kode_respondensi`),
  ADD KEY `kode_respondensi_id_kode_respondensi_index` (`id_kode_respondensi`);

--
-- Indexes for table `komponen_kuisioner`
--
ALTER TABLE `komponen_kuisioner`
  ADD PRIMARY KEY (`id_komponen`),
  ADD KEY `komponen_kuisioner_id_komponen_index` (`id_komponen`),
  ADD KEY `id_responden` (`id_responden`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `mapel_id_mapel_index` (`id_mapel`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_kompetensi`
--
ALTER TABLE `nilai_kompetensi`
  ADD PRIMARY KEY (`id_nilai_kompetensi`),
  ADD KEY `nilai_kompetensi_id_nilai_kompetensi_index` (`id_nilai_kompetensi`),
  ADD KEY `nilai_kompetensi_id_guru_index` (`id_guru`),
  ADD KEY `nilai_kompetensi_id_kompetensi_index` (`id_kompetensi`);

--
-- Indexes for table `nilai_respondensi`
--
ALTER TABLE `nilai_respondensi`
  ADD PRIMARY KEY (`id_nilai_respondensi`),
  ADD KEY `nilai_respondensi_id_nilai_respondensi_index` (`id_nilai_respondensi`),
  ADD KEY `nilai_respondensi_id_kode_respondensi_index` (`id_kode_respondensi`),
  ADD KEY `nilai_respondensi_id_guru_index` (`id_guru`);

--
-- Indexes for table `penilai`
--
ALTER TABLE `penilai`
  ADD PRIMARY KEY (`id_penilai`),
  ADD KEY `penilai_id_penilai_index` (`id_penilai`),
  ADD KEY `penilai_id_guru_index` (`id_guru`),
  ADD KEY `penilai_id_guru_penilai_index` (`id_guru_penilai`);

--
-- Indexes for table `penilaian_respondensi`
--
ALTER TABLE `penilaian_respondensi`
  ADD PRIMARY KEY (`id_penilaian_resndensi`),
  ADD KEY `penilaian_respondensi_id_penilaian_resndensi_index` (`id_penilaian_resndensi`),
  ADD KEY `penilaian_respondensi_id_guru_index` (`id_guru`),
  ADD KEY `penilaian_respondensi_id_kode_respondensi_index` (`id_kode_respondensi`),
  ADD KEY `penilaian_respondensi_id_komponen_index` (`id_komponen`);

--
-- Indexes for table `pernyataan_kuisioner`
--
ALTER TABLE `pernyataan_kuisioner`
  ADD PRIMARY KEY (`id_pernyataan`),
  ADD KEY `pernyataan_kuisioner_id_pernyataan_index` (`id_pernyataan`),
  ADD KEY `pernyataan_kuisioner_id_komponen_index` (`id_komponen`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `siswa_id_siswa_index` (`id_siswa`),
  ADD KEY `siswa_id_kelas_index` (`id_kelas`);

--
-- Indexes for table `skor_kompetensi`
--
ALTER TABLE `skor_kompetensi`
  ADD PRIMARY KEY (`id_skor_kompetensi`),
  ADD KEY `skor_kompetensi_id_skor_kompetensi_index` (`id_skor_kompetensi`),
  ADD KEY `skor_kompetensi_id_guru_index` (`id_guru`),
  ADD KEY `skor_kompetensi_id_indikator_index` (`id_indikator`),
  ADD KEY `skor_kompetensi_id_kompetensi_index` (`id_kompetensi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_users_index` (`id_users`),
  ADD KEY `users_id_guru_index` (`id_guru`),
  ADD KEY `users_id_siswa_index` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_responden`
--
ALTER TABLE `data_responden`
  MODIFY `id_data_responden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id_indikator` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kelas_ajar`
--
ALTER TABLE `kelas_ajar`
  MODIFY `id_kelas_ajar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kode_kompetensi`
--
ALTER TABLE `kode_kompetensi`
  MODIFY `id_kompetensi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kode_respondensi`
--
ALTER TABLE `kode_respondensi`
  MODIFY `id_kode_respondensi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komponen_kuisioner`
--
ALTER TABLE `komponen_kuisioner`
  MODIFY `id_komponen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nilai_kompetensi`
--
ALTER TABLE `nilai_kompetensi`
  MODIFY `id_nilai_kompetensi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai_respondensi`
--
ALTER TABLE `nilai_respondensi`
  MODIFY `id_nilai_respondensi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilai`
--
ALTER TABLE `penilai`
  MODIFY `id_penilai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penilaian_respondensi`
--
ALTER TABLE `penilaian_respondensi`
  MODIFY `id_penilaian_resndensi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `pernyataan_kuisioner`
--
ALTER TABLE `pernyataan_kuisioner`
  MODIFY `id_pernyataan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `skor_kompetensi`
--
ALTER TABLE `skor_kompetensi`
  MODIFY `id_skor_kompetensi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_id_mapel_foreign` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE;

--
-- Constraints for table `indikator`
--
ALTER TABLE `indikator`
  ADD CONSTRAINT `indikator_id_kompetensi_foreign` FOREIGN KEY (`id_kompetensi`) REFERENCES `kode_kompetensi` (`id_kompetensi`) ON DELETE CASCADE;

--
-- Constraints for table `kelas_ajar`
--
ALTER TABLE `kelas_ajar`
  ADD CONSTRAINT `kelas_ajar_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelas_ajar_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_kompetensi`
--
ALTER TABLE `nilai_kompetensi`
  ADD CONSTRAINT `nilai_kompetensi_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_kompetensi_id_kompetensi_foreign` FOREIGN KEY (`id_kompetensi`) REFERENCES `kode_kompetensi` (`id_kompetensi`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_respondensi`
--
ALTER TABLE `nilai_respondensi`
  ADD CONSTRAINT `nilai_respondensi_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_respondensi_id_kode_respondensi_foreign` FOREIGN KEY (`id_kode_respondensi`) REFERENCES `kode_respondensi` (`id_kode_respondensi`) ON DELETE CASCADE;

--
-- Constraints for table `penilai`
--
ALTER TABLE `penilai`
  ADD CONSTRAINT `penilai_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilai_id_guru_penilai_foreign` FOREIGN KEY (`id_guru_penilai`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE;

--
-- Constraints for table `penilaian_respondensi`
--
ALTER TABLE `penilaian_respondensi`
  ADD CONSTRAINT `penilaian_respondensi_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilaian_respondensi_id_kode_respondensi_foreign` FOREIGN KEY (`id_kode_respondensi`) REFERENCES `kode_respondensi` (`id_kode_respondensi`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilaian_respondensi_id_komponen_foreign` FOREIGN KEY (`id_komponen`) REFERENCES `komponen_kuisioner` (`id_komponen`) ON DELETE CASCADE;

--
-- Constraints for table `pernyataan_kuisioner`
--
ALTER TABLE `pernyataan_kuisioner`
  ADD CONSTRAINT `pernyataan_kuisioner_id_komponen_foreign` FOREIGN KEY (`id_komponen`) REFERENCES `komponen_kuisioner` (`id_komponen`) ON DELETE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE;

--
-- Constraints for table `skor_kompetensi`
--
ALTER TABLE `skor_kompetensi`
  ADD CONSTRAINT `skor_kompetensi_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE,
  ADD CONSTRAINT `skor_kompetensi_id_indikator_foreign` FOREIGN KEY (`id_indikator`) REFERENCES `indikator` (`id_indikator`) ON DELETE CASCADE,
  ADD CONSTRAINT `skor_kompetensi_id_kompetensi_foreign` FOREIGN KEY (`id_kompetensi`) REFERENCES `kode_kompetensi` (`id_kompetensi`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
