-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2020 at 01:24 PM
-- Server version: 10.3.22-MariaDB-0+deb10u1
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakeBuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `calda_sabor`
--

CREATE TABLE `calda_sabor` (
  `ID` int(11) NOT NULL,
  `sabor` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `tipo_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `calda_tipo`
--

CREATE TABLE `calda_tipo` (
  `ID` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_formato`
--

CREATE TABLE `m_formato` (
  `ID` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_sabor`
--

CREATE TABLE `m_sabor` (
  `ID` int(11) NOT NULL,
  `sabor` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_tamanho`
--

CREATE TABLE `m_tamanho` (
  `ID` int(11) NOT NULL,
  `diametro` int(11) NOT NULL,
  `porciones` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pastelesPredefinidos`
--

CREATE TABLE `pastelesPredefinidos` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla de pasteles predefinidos para compra rápida';

-- --------------------------------------------------------

--
-- Table structure for table `relleno_sabor`
--

CREATE TABLE `relleno_sabor` (
  `ID` int(11) NOT NULL,
  `sabor` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calda_tipo`
--
ALTER TABLE `calda_tipo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m_formato`
--
ALTER TABLE `m_formato`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m_sabor`
--
ALTER TABLE `m_sabor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `m_tamanho`
--
ALTER TABLE `m_tamanho`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pastelesPredefinidos`
--
ALTER TABLE `pastelesPredefinidos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `relleno_sabor`
--
ALTER TABLE `relleno_sabor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calda_tipo`
--
ALTER TABLE `calda_tipo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_formato`
--
ALTER TABLE `m_formato`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_sabor`
--
ALTER TABLE `m_sabor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_tamanho`
--
ALTER TABLE `m_tamanho`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pastelesPredefinidos`
--
ALTER TABLE `pastelesPredefinidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `relleno_sabor`
--
ALTER TABLE `relleno_sabor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
