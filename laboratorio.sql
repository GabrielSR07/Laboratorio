-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 09:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorio`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `azucar` int(5) NOT NULL,
  `hemoglobina` int(5) NOT NULL,
  `colesterol` int(5) NOT NULL,
  `trigliceridos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `lastname`, `age`, `email`, `address`, `azucar`, `hemoglobina`, `colesterol`, `trigliceridos`) VALUES
(1, 'Pedro', 'Perez', 37, 'pedrop@yahoo.com', 'Maracaibo', 235, 6, 342, 165),
(2, 'Juan', 'Villa', 43, 'villajuan@hotmail.com', 'Maracay', 352, 7, 252, 231),
(7, 'Gabriel', 'Suarez', 20, 'gabriel@prueba.com', 'Valera, Estado Trujillo', 241, 8, 253, 249),
(23, 'Alvaro', 'Gonzalez', 34, 'alvarogonzl@outlook.com', 'Maracaibo, Urb. La Trinidad', 243, 9, 320, 287),
(24, 'Martin', 'Lopez', 28, 'martinlpz@gmail.com', 'Maracaibo, Tierra Negra', 272, 9, 311, 298),
(25, 'Gerardo', 'Martinez', 37, 'gerardmrtnz@hotmail.com', 'San Francisco', 273, 8, 297, 263),
(26, 'Marcos', 'Hernandez', 25, 'marcoshz@gmail.com', 'Mene Grande', 238, 8, 321, 298),
(27, 'Jose', 'Fernandez', 26, 'josef23@gmail.com', 'Mara', 276, 10, 323, 286);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
