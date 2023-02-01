-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 10:37 AM
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
-- Database: `pengguna`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_registrasi`
--

CREATE TABLE `data_registrasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_registrasi`
--

INSERT INTO `data_registrasi` (`id`, `nama`, `username`, `password1`) VALUES
(8, 'Salwa', 'salwa94', '$2y$10$jKB.Va/9lQ3d25YPXAzitO5FtyHHpRu6xLig3oPIMbKfkXGEHbcXm'),
(9, 'Salwa', 'salwa12', '$2y$10$MJ5CMa0kWaIgvQd3APsQvuQ7YPIn7NLXYf4yKpSAou5LNNvnTTkPm'),
(11, 'wildan', 'run', '$2y$10$veK8p8Ul1qJclWyeiQaW6.Ub6SyFpWULxewemC4/TLlveHfTscePi'),
(13, 'wil', 'wil', '$2y$10$IHcbVUoB7/CB0.1bNqPAieuI.XQ6NcU1DpOlxLlUc5YYSHk/6Fvji'),
(14, 'mang', 'mang', '$2y$10$CflgN0dK4m7kSmLVIqn04uEBrwGXB.H7hDdkYL9TqmNLHLhsZXF3m'),
(15, 'gibrik', 'gibrik', '$2y$10$Tx983cL4Hhe40yjqL0yMPOrULUAqQAsdk/71eL/XlvqJFPO3.1Vsu'),
(20, 'pler', 'audy', '$2y$10$k.VEQsf1Y/FKVhr/Zu37q.H2bl9N9RO0BW8MFJegwRDKj6k4/kT7C'),
(22, 'mamang', 'wadaw', '$2y$10$J/fIf7hFZSSYOgGc3XH3YuPhpP/KKsZoR4u/u2zWZhNzKFMU4Rzfi'),
(24, 'melani', 'mela', '$2y$10$lb4f7yd3W7eMT2FL4pu39uyN3uptZO9oCSIANBy2RsLDe63lBWG16'),
(25, 'admin', 'admin', '$2y$10$nK1lAY7GJsULejAvHRnzVulmMbsgKffSml09KqXIYa6fvLvg.81F2'),
(26, 'Baginda', 'yogi', '$2y$10$65ysn4j1W4iPoLGeZ0AE4OWJ4wKdJ.QrV7J.AICo3hNEEbSHNxA5y');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up-data`
--

CREATE TABLE `sign_up-data` (
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usia` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_registrasi`
--
ALTER TABLE `data_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_registrasi`
--
ALTER TABLE `data_registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
