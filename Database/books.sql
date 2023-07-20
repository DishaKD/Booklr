-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 04:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booklr`
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
(10, 'Das Kapital', ' Karl Marx', 'Kritik', 1460, 'political', 'kapital.jpg'),
(1000, 'Business Book Cover', 'Salford & Co.', 'Marketing Agency', 2500, 'Business & Marketing', '9.jpg'),
(1100, 'Treasure', 'Olivia Wilson', 'Agency 5', 9000, 'Novel', '10.jpg'),
(1200, 'King', 'Olivia Wilson', 'Agency 5', 7500, 'Novel', '11.jpg'),
(1300, 'Roman', 'Olivia Wilson', 'Agency 5', 6000, 'Novel', '12.jpg'),
(1500, 'Warrior', 'Olivia Wilson', 'Agency 5', 4500, 'Novel', '14.jpg'),
(1600, 'The way to Success', 'Francois Mercer', 'Ocean Publishers', 4000, 'Business & Marketing', '15.jpg'),
(1700, 'The Story of The Tree', 'Helene Paquet', 'Lamour Publishers', 6000, 'Kids', '16.jpg'),
(1800, 'Ranch', 'Olivia Wilson', 'Agency 5', 5000, 'Novel', '17.jpg'),
(1900, 'City', 'Jason Hayes', 'Seal Publishers', 6000, 'Magazine', '18.jpg'),
(2000, 'Design Guide', 'Ramond Perry', '001', 5900, 'Guide', '19.jpg'),
(2100, 'Alone A True Story', 'Morgna Maxwell', 'Ant Publishers', 4500, 'Novel', '20.jpg'),
(2200, 'SOLO', 'Olivia Wilson', 'Agency 5', 1500, 'Novel', '21.jpg'),
(2300, 'Science 101 For Children', 'Matt Zhang', 'Roid', 3400, 'Kids', 'book-1.jpg'),
(1400, 'Solider', 'Olivia Wilson', 'Agency 5', 7500, 'Novel', '13.jpg'),
(2400, 'The Lost World', 'Olivia Wilson', 'Agency 5', 9000, 'Novel', 'book-2.jpg'),
(2500, 'The Black Universe', 'Greta Mae Evans', 'Agency 5', 4500, 'Novel', 'book-3.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
