-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 03:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_ID` int(10) NOT NULL,
  `book name` char(44) NOT NULL,
  `author` varchar(20) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image_filename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_ID`, `book name`, `author`, `publisher`, `price`, `category`, `image_filename`) VALUES
(1, ' In Search of Lost Time', 'Marcel Proust', 'Swann\'s Way', 10, 'novel', 'in search.jpg'),
(2, ' Ulysses', ' Leopold Bloom', 'James Joyce', 20, 'novel', 'ulyss.jpg'),
(3, 'Batman', 'Frank miller', 'marvel', 30, 'comic', 'batman.jpg'),
(4, ' Don Quixote', ' Miguel de Cervantes', 'La Mancha', 40, 'drama', 'don quix.jpg'),
(5, 'clockwise orange', 'stanley kubrick', 'leon', 50, 'fiction', 'orange.jpg'),
(6, 'The Adventures of Huckleberry Finn', ' Mark Twain', 'town\'s children', 1200, ' literature', 'huckleberry.jpg'),
(7, 'On the Origin of Species', ' Charles Darwin', ' Wikipedia', 3800, ' literature', 'origin.jpg'),
(8, 'The Divine Comedy', 'Dante Alighieri', 'Publisher', 1300, 'comedy', 'divine.jpg'),
(9, 'The Republic', 'Plato', ' Wikipedia', 3700, 'comedy', 'republic.jpg'),
(10, 'Das Kapital', ' Karl Marx', 'Kritik', 1460, 'political', 'kapital.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `book_ID` int(10) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `image_filename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`book_ID`, `book_name`, `price`, `image_filename`) VALUES
(2, ' Ulysses', 20, 'ulyss.jpg'),
(4, ' Don Quixote', 40, 'don quix.jpg'),
(5, 'clockwise orange', 50, 'orange.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(10) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `author` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(30) NOT NULL,
  `delivery` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image_filename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `book_name`, `author`, `price`, `status`, `delivery`, `quantity`, `image_filename`) VALUES
(1, ' Miguel de Cervantes', ' Don Quixote', 720, 'Delivered', '12/09/2022', 2, 'don quix.jpg'),
(2, 'moby bick', ' Leopold Bloom', 1200, 'in transit ', '23/03/2023', 3, 'moby bick.jpg'),
(3, ' In Search of Lost T', 'Marcel Proust', 500, 'Cancelled', '22/08/2023', 5, 'in search.jpg'),
(4, 'great gatsby', 'steven bence', 570, 'preparing', '12/09/2023', 4, 'gatsby.jpg'),
(5, 'Swann\'s Way', ' Ulysses ', 699, 'Cancelled', '08/07/2022', 4, 'ulyss.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`book_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213126;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
