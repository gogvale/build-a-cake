-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2021 at 01:26 PM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buildacake`
--

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(6,2) NOT NULL DEFAULT 0.00,
  `picture` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`ID`, `name`, `description`, `price`, `picture`) VALUES
(1, 'Pastel de Zanahoria', 'Coberturas Disponibles: Chocolate, Vainilla, Philadelphia, Glacé Mármore', '200.00', 'pastel_zanahoria.jpeg'),
(2, 'Pastel de Chocolate', 'Coberturas Disponibles: Chocolate, Vainilla, Philadelphia, Glacé Mármore', '200.00', 'pastel_chocolate.jpg'),
(3, 'Pastel de Vainilla', 'Coberturas Disponibles: Chocolate, Vainilla, Philadelphia, Glacé Mármore', '200.00', 'default.png'),
(4, 'Pastel de Naranja', 'Coberturas Disponibles: Chocolate, Vainilla, Philadelphia, Glacé Mármore', '200.00', 'default.png'),
(5, 'Pastel de Limón', 'Coberturas Disponibles: Chocolate, Vainilla, Philadelphia, Glacé Mármore', '200.00', 'default.png'),
(6, 'Pastel Red Velvet', 'Coberturas Disponibles: Chocolate, Vainilla, Philadelphia, Glacé Mármore', '200.00', 'red_velvet.jpeg'),
(7, 'Pastel Alberca Zanahoria', 'Coberturas Disponibles: Chocolate, Vainilla, Cream Phily', '240.00', 'default.png'),
(8, 'Pastel Alberca Chocolate', 'Coberturas Disponibles: Chocolate, Vainilla, Cream Phily', '240.00', 'pastel_alberca_chocolate.jpeg'),
(9, 'Pastel Alberca Naranja', 'Coberturas Disponibles: Chocolate, Vainilla, Cream Phily', '240.00', 'pastel_alberca_zanahoria.jpeg'),
(10, 'Pastel Alberca Red Velvet', 'Coberturas Disponibles: Chocolate, Vainilla, Cream Phily', '240.00', 'default.png'),
(11, 'Naked Cake 20cm', 'Naked Cake 20cm', '350.00', 'naked_grande.jpeg'),
(12, 'Naked Cake 17cm', 'Naked Cake 17cm', '250.00', 'naked_mediano.jpeg'),
(13, 'Naked Cake 12cm', 'Naked Cake 12cm', '180.00', 'naked_pequeno.jpeg'),
(14, 'Pastel Volcán Zanahoria', 'Pastel Volcán Zanahoria 20cm -  Coberturas: Chocolate y Vainilla', '250.00', 'default.png'),
(15, 'Pastel Volcán Chocolate', 'Pastel Volcán Chocolate 20cm -  Coberturas: Chocolate y Vainilla', '250.00', 'default.png'),
(16, 'Pastel Volcán Vainilla', 'Pastel Volcán Vainilla 20cm -  Coberturas: Chocolate y Vainilla', '250.00', 'default.png'),
(17, 'Pastel Volcán Limón', 'Pastel Volcán Limón 20cm -  Coberturas: Chocolate y Vainilla', '250.00', 'default.png'),
(18, 'Pastel Alberca Vainilla', 'Coberturas Disponibles: Chocolate, Vainilla, Cream Phily', '240.00', 'pastel_alberca_vainilla.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
