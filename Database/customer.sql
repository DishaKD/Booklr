-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 09:24 AM
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
-- Database: `booklr`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Phone_number` int(10) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `F_name`, `L_name`, `Gender`, `Phone_number`, `Email_Address`, `Address`, `DOB`, `Password`) VALUES
(1, 'Kavindu', 'Dilshan', 'Male', 719726893, 'kavindu69@gmail.com', '383/C/17, Lake Road, Kandy.', '2001-10-08', 'kavi@123'),
(2, 'Sachith', 'Nimendra', 'Male', 787624873, 'sachith69@gmail.com', '23/A/25, Temple Road, Padukka.', '2000-06-13', 'sachi66'),
(3, 'Dishal', 'Kanishka', 'Male', 779538762, 'dishalorg@mc.lk', '234/A/21, Rathnapura Road, Munagama.', '2000-05-10', 'dishal34'),
(4, 'Mihiranga', 'Fernando', 'Male', 753972639, 'mihiranga@gmail.com', '432/A/24/ Panadura Road, Bandaragama.', '1998-06-16', 'mihi57'),
(5, 'Tharindu', 'Raveen', 'Male', 746728376, 'raveen@uk.com', '231/2, Galle Road, Panadura.', '2005-10-10', 'raveen365');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
