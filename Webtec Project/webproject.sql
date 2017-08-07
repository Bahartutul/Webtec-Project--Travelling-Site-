-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 06:21 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin1', '0123'),
('admin2', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `location` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image1` varchar(500) NOT NULL,
  `image2` varchar(500) NOT NULL,
  `image3` varchar(500) NOT NULL,
  `dspn` varchar(5000) NOT NULL,
  `package` varchar(5000) NOT NULL,
  `available_seat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`location`, `image`, `image1`, `image2`, `image3`, `dspn`, `package`, `available_seat`) VALUES
('dhaka', 'dha1.jpg', 'dha2.jpg', 'dha3.jpg', 'dha4.jpg', 'Dhaka is the capital and largest city of Bangladesh. \r\nWith its colorful history and rich cultural traditions, Dhaka is known the world over as the city of mosques and muslin.\r\n Its fame attracted travelers from far and near throughout the ages.\r\n ', 'Package include:\r\n1)3day 2night.\r\n2)Transportation:Ac/Non-Ac Bus.\r\n3)Seat Available:', 20),
('coxsbazar', 'cox1.jpg', 'cox2.jpg', 'cox3.jpg', 'cox4.jpg', 'Coxs Bazar is known for its wide sandy beach which is claimed to be the worlds longest natural sandy sea beach.It is an unbroken 125km sandy sea beach with a gentle slope.Coxs Bazar is also known by the name panowa.Its other old name was palongkee.', 'package include:\r\n1)4day 3night stay.', 20),
('sylhet', 'sylhet1.jpg', 'sylhet2.jpg', 'sylhet3.jpg', 'sylhet4.jpg', 'Sylhet also known as Jalalabad, is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal', 'Package include:\r\n1)3day 2night.\r\n2)Transportation:Ac/Non-Ac Bus.\r\n3)Seat Available:', 20);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Serial` int(100) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Birth_Date` varchar(10) NOT NULL,
  `Birth_Month` varchar(10) NOT NULL,
  `Birth_Year` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Booking_date` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Present_Address` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Serial`, `First_Name`, `Last_Name`, `Birth_Date`, `Birth_Month`, `Birth_Year`, `Gender`, `Booking_date`, `Phone`, `Email`, `Present_Address`, `Location`, `Action`) VALUES
(1, 'bahar', 'tutul', '11', '6', '1993', 'Male', '27/12/2016', '01840052203', 'tutulaiub@gmail.com', 'dhaka', 'sylhet', 'paid'),
(2, 't', 'v', '5', '5', '1981', 'Male', '27/12/2016', '0188*******', 'abc@gmail.com', 'dhaka', 'sylhet', 'pending'),
(3, 'f', 'q', '9', '9', '2001', 'Male', '27/12/2016', '0191*******', 'y@gmail.com', 'dhaka', 'sylhet', 'paid'),
(4, 't', 'u', '11', '6', '1986', 'Male', '27/12/2016', '0188*******', 'tutulaiub@gmail.com', 'dhaka', 'dhaka', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD UNIQUE KEY `Serial` (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `Serial` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
