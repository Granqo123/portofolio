-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2021 at 06:02 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `description`, `price`) VALUES
(1, 'ROXAS (BRING ARTS ACTION FIGURE)', 'images/roxas.jpg', 'Collectible action figure of Roxas from the video game Kingdom Hearts III. Excellent quality and detail multi-hinged figure made of PVC material, height 15 cm.', 100),
(2, 'SORA (WISDOM FORM ACTION FIGURE)', 'images/sora.jpg', 'Collective action figure of Sora (Wisdom Form) from the video game Kingdom Hearts III. Multi-jointed figure made of PVC material, height 17 cm, by Diamond Select.', 28),
(3, 'GYARADOS (EPIC BATTLE SERIES)', 'images/gyarados.jpg', 'Action figure with the Pokemon Gyarados (Epic Battle Series) from the anime and video game series Pokemon. Figure from PVC material, with joints, height 23 cm, from BOTI.', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
