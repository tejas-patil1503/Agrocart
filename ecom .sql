-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 03:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(32) NOT NULL,
  `qty` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` varchar(50) NOT NULL,
  `pcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `qty`, `quantity`, `total`, `pcode`) VALUES
(306, 'mango', '250', 'img/b12.jpg', 3, 12, '750', '456'),
(307, 'cabbage', '250', 'img/b14.jpg', 1, 13, '250', '697931200');

-- --------------------------------------------------------

--
-- Table structure for table `ecom`
--

CREATE TABLE `ecom` (
  `id` int(11) NOT NULL,
  `mtxt` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecom`
--

INSERT INTO `ecom` (`id`, `mtxt`, `unit`, `qty`, `quantity`, `cat`, `descr`, `price`, `image`, `pcode`) VALUES
(78, 'mango', 'dozen', 9, 3, 'Fruits', 'sweet and delicious', '250', 'img/b12.jpg', '456'),
(80, 'mphos', 'kg', 0, 1, 'Fertilizer', 'fastest growth for your crops', '125', 'img/f2.jpg', '789'),
(83, 'crop', 'kg', 38, 1, 'Vegetables', 'sadsd', '342', 'img/b5.jpg', '123'),
(84, 'cabbage', 'kg', 12, 1, 'Vegetables', 'fresh', '250', 'img/b14.jpg', '697931200'),
(87, 'mxtxt', 'kg', 5, 0, 'Fertilizer', 'pesticide', '250', 'img/f3.jpg', '315906945');

-- --------------------------------------------------------

--
-- Table structure for table `ecomlogin`
--

CREATE TABLE `ecomlogin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecomlogin`
--

INSERT INTO `ecomlogin` (`id`, `fname`, `lname`, `mobile`, `email`, `password`, `address`) VALUES
(24, 'pankaj', 'Savantre', '7996351892', 'pankyps07@gmail.com', 'pankaj@1998', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(25, 'pankaj', 'Savantre', '7019053432', 'pankyps07@gmail.com', '123', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(27, 'vaibhav', 'patil', '9113660349', 'pankyps07@gmail.com', 'abc@123', 'benadi'),
(28, 'adsd', 'fdsf', '7019053423', 'pankyps07@gmail.com', 'pankaj@1998', 'Ap-khadaklat'),
(29, 'pankaj', 'Savantre', '9874563210', 'pankyps07@gmail.com', 'pankaj@1998', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(31, 'pankaj', 'Savantre', '7019053431', 'pankyps07@gmail.com', 'pankaj123@', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(32, 'pankaj', 'Savantre', '9019053432', 'pankyps07@gmail.com', '123', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(33, 'pankaj', 'Savantre', '7019053435', 'pankyps07@gmail.com', '123', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `id` int(11) NOT NULL,
  `mtxt` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pcode` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`id`, `mtxt`, `price`, `descr`, `image`, `pcode`) VALUES
(4, 'Roller', '50', 'Roller Machine For Farming', 'img/t9.jpg', '1680143740'),
(5, 'Cultivator', '30', 'for Cultivating The crops', 'img/t11.jpg', '568313568'),
(6, 'Plough', '30', 'turns the soil over ready for seeds to be planted', 'img/t10.png', '1488747032');

-- --------------------------------------------------------

--
-- Table structure for table `machinecart`
--

CREATE TABLE `machinecart` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `pcode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machinecart`
--

INSERT INTO `machinecart` (`id`, `name`, `price`, `image`, `total`, `pcode`) VALUES
(15, 'Roller', '50', 'img/t9.jpg', '50', '1680143740'),
(16, 'Cultivator', '30', 'img/t11.jpg', '30', '568313568');

-- --------------------------------------------------------

--
-- Table structure for table `machineorders`
--

CREATE TABLE `machineorders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fduration` varchar(255) NOT NULL,
  `tduration` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machineorders`
--

INSERT INTO `machineorders` (`id`, `name`, `email`, `phone`, `fduration`, `tduration`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(2, 'pankaj Savantre', 'pankyps07@gmail.com', '+917019053432', '2020-12-30', '2020-12-31', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi', 'cod', '', '250'),
(3, 'pankaj', 'ps@gmail.com', '', '', '', '', 'cod', '', '500'),
(4, 'product_code', 'ps@gmail.com', '7019053432', '2020-12-29', '2020-12-29', 'sgdfshgdf', 'netbanking', '', '250'),
(5, 'pankaj', 'ps@gmail.com', '7019053432', '', '', 'sgdfshgdf', 'cod', '', '500'),
(6, 'fsdgs', 'pankyps07@gmail.com', '7019053432', '2020-12-29', '2020-12-30', 'dsfdsf', 'cod', '', '100');

-- --------------------------------------------------------

--
-- Table structure for table `ordernow`
--

CREATE TABLE `ordernow` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordernow`
--

INSERT INTO `ordernow` (`id`, `name`, `mno`, `email`, `address`) VALUES
(22, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(23, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(24, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(25, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(26, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(27, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(28, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(29, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(30, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(31, 'hjg', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(32, 'hjg', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(33, 'hjg', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(34, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(35, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(36, 'Pankaj', '7019053432', 'pankyps07@gmail.com', '#1135\nKhadaklat near bustand'),
(37, 'Pankaj', '0701905343', 'pankyps07@gmail.com', '#1135\nKhadaklat near bustand'),
(38, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(39, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(40, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(41, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi'),
(42, 'pankaj Savantre', '7019053432', 'pankyps07@gmail.com', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(234) NOT NULL,
  `email` varchar(23) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(43) NOT NULL,
  `pmode` varchar(35) NOT NULL,
  `products` varchar(35) NOT NULL,
  `amount_paid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(3, 'Pankaj', 'pankyps07@gmail.com', '07019053432', '#1135\r\nKhadaklat near bustand', 'cards', 'mango(1), cabbage(2)', '750'),
(6, 'pankaj Savantre', 'pankyps07@gmail.com', '+917019053432', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi', 'cod', '', '250'),
(7, 'pankaj Savantre', 'pankyps07@gmail.com', '7019053432', 'Ap-khadaklat.  Tq-Chikkodi. Dist-Belagavi', 'netbanking', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`pcode`);

--
-- Indexes for table `ecom`
--
ALTER TABLE `ecom`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`pcode`);

--
-- Indexes for table `ecomlogin`
--
ALTER TABLE `ecomlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pcode` (`pcode`);

--
-- Indexes for table `machinecart`
--
ALTER TABLE `machinecart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pcode` (`pcode`);

--
-- Indexes for table `machineorders`
--
ALTER TABLE `machineorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordernow`
--
ALTER TABLE `ordernow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `ecom`
--
ALTER TABLE `ecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `ecomlogin`
--
ALTER TABLE `ecomlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `machinecart`
--
ALTER TABLE `machinecart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `machineorders`
--
ALTER TABLE `machineorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ordernow`
--
ALTER TABLE `ordernow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
