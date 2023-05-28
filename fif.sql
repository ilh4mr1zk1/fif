-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 12:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fif`
--

-- --------------------------------------------------------

--
-- Table structure for table `fif`
--

CREATE TABLE `fif` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 NOT NULL,
  `nomer_kontrak` varchar(128) CHARACTER SET latin1 NOT NULL,
  `bayar` varchar(128) CHARACTER SET latin1 NOT NULL,
  `via` varchar(128) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(128) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fif`
--

INSERT INTO `fif` (`id`, `nama`, `nomer_kontrak`, `bayar`, `via`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Sigit Gunawan', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Sigit Gunawan.jpg', '2021-09-01 08:02:30', '2021-09-01 08:02:30'),
(2, 'Ilham', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Ilham.jpg', '2021-10-01 06:02:28', '2021-10-01 06:02:28'),
(3, 'Ilh4m Rizki', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Ilh4m Rizki.jpg', '2021-11-01 09:03:49', '2021-11-01 09:03:49'),
(4, 'Ilham Rizk1', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Ilham Rizk1.jpg', '2021-12-01 13:33:24', '2021-12-01 13:33:24'),
(5, '1lh4m Rizki', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', '1lh4m Rizki.jpg', '2022-01-01 09:51:34', '2022-01-01 09:51:34'),
(6, 'ILH4M R', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'ILH4M R.jpg', '2022-02-01 13:03:59', '2022-02-01 13:03:59'),
(7, 'Ilham R1zk1', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Ilham R1zk1.jpg', '2022-03-01 06:05:12', '2022-03-01 06:05:12'),
(8, 'Ilh@m R', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Ilh@m R.jpg', '2022-04-01 11:48:14', '2022-04-01 11:48:14'),
(9, 'Ilh@m Rizki', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Ilh@m Rizki.jpg', '2022-05-01 07:11:29', '2022-05-01 07:11:29'),
(10, 'Ilh@m R1zki', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Ilh@m R1zki.jpg', '2022-06-01 08:16:45', '2022-06-01 08:16:45'),
(11, 'S1git Gunawan', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'S1git Gunawan.jpg', '2022-07-01 07:32:23', '2022-07-01 07:32:23'),
(12, 'Si9it Gunawan', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Si9it Gunawan.jpg', '2022-08-02 17:26:16', '2022-08-02 17:26:16'),
(13, 'Ilh@m R1zki', '142001459621', 'Rp. 1.010.000', 'BNI Mobile', 'Ilh@m R1zki.jpg', '2022-09-01 12:26:29', '2022-09-01 12:26:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fif`
--
ALTER TABLE `fif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fif`
--
ALTER TABLE `fif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
