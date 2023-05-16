-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 04:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlcourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Antonio', 'Garcia', 'antonio@email.com'),
(2, 'Maria', 'Jimenez', 'maria@email.com'),
(3, 'Pedro', ' Perez', 'pedro@email.com'),
(4, 'Juana', ' Gonzalez', 'juana@email.es'),
(5, 'Enrique', ' Pastor', 'enrique@email.es'),
(6, 'Amador', ' Rivas', 'amador@email.es'),
(7, 'Fermin', ' Trujillo', 'fermin@email.es'),
(8, 'Jose', ' Rodriguez', 'jose@email.es'),
(9, 'Lola', ' Flores', 'lola@email.com'),
(10, 'Isabel', ' Dominguez', 'isabel@email.com'),
(11, 'Beltran', ' Acevedo', 'beltran@email.com'),
(12, 'Judith', ' Becquer', 'judith@email.es'),
(13, 'Javier', ' Maroto', 'javier@email.com'),
(14, 'Vicente', ' Maroto', 'vicente@email.com'),
(15, 'Maite', ' Figueroa', 'maite@email.com'),
(16, 'Alicia', ' Wonderland', 'alicia@email.es'),
(17, 'Alba', ' Recio', 'alba@email.es'),
(18, 'Bruno', ' Quiroga', 'bruno@email.es'),
(19, 'Aracelys', ' Madariaga', 'aracelys@email.es');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
