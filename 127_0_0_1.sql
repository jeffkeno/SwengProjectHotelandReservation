-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2014 at 09:19 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelr`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`Message_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message_ID`, `Name`, `Address`, `Contact`, `Email`, `Message`) VALUES
(3, 'mr madam', 'caloocan city', '09283827392', 'madama@yahoo.com', 'i love your service');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`RoomID` int(11) NOT NULL,
  `RoomNumber` varchar(255) NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `Qty` varchar(255) NOT NULL,
  `Availability` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomID`, `RoomNumber`, `RoomType`, `Qty`, `Availability`, `Price`, `Picture`, `Description`) VALUES
(3, '102', 'Standard Room', '4', 'Available', '4000', 'standard.jpg', 'Room with 1 king size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower'),
(4, '103', 'Standard Room', '4', 'Available', '4000', 'standard.jpg', 'Room with 1 king size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower'),
(5, '104', 'Standard Room', '4', 'Available', '4000', 'standard.jpg', 'Room with 1 king size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower'),
(6, '201', 'Deluxe Room', '4', 'Available', '5000', 'deluxe.jpg', 'Room with 2 queen size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe'),
(7, '202', 'Deluxe Room', '4', 'Available', '5000', 'deluxe.jpg', 'Room with 2 queen size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe'),
(8, '203', 'Deluxe Room', '4', 'Available', '5000', 'deluxe.jpg', 'Room with 2 queen size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe'),
(9, '204', 'Deluxe Room', '4', 'Available', '5000', 'deluxe.jpg', 'Room with 2 queen size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe'),
(10, '205', 'Deluxe Room', '4', 'Available', '5000', 'deluxe.jpg', 'Room with 2 queen size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe'),
(11, '301', 'Deluxe Suite', '5', 'Available', '7000', 'deluxes.jpg', 'Room with 2 queen size bed, extra matress, couch and coffee table, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe, mini bar'),
(12, '302', 'Deluxe Suite', '5', 'Available', '7000', 'deluxes.jpg', 'Room with 2 queen size bed, extra matress, couch and coffee table, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe, mini bar'),
(13, '303', 'Deluxe Suite', '5', 'Available', '7000', 'deluxes.jpg', 'Room with 2 queen size bed, extra matress, couch and coffee table, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe, mini bar'),
(14, '401', 'Grand Deluxe Suite', '6', 'Available', '8000', 'grand.jpg', 'Room with 2 queen size bed, extra matress, couch and coffee table, computer table and rotating chair, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe, mini bar,terrace'),
(15, '402', 'Grand Deluxe Suite', '6', 'Available', '8000', 'grand.jpg', 'Room with 2 queen size bed, extra matress, couch and coffee table, computer table and rotating chair, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe, mini bar,terrace'),
(16, '403', 'Grand Deluxe Suite', '6', 'Available', '8000', 'grand.jpg', 'Room with 2 queen size bed, extra matress, couch and coffee table, computer table and rotating chair, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and bath tub,electronic safe, mini bar,terrace'),
(18, '234', 'Deluxe Room', '4', 'Available', '5000', 'deluxe.jpg', 'Room with 2 queen size bed, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower and BATH TUB,electronic safe'),
(19, '101', 'Standard Room', '4', 'Available', '4000', 'standard.jpg', 'Room with 1 KING SIZE BED, free wifi, flat screen television with cable, mp3 player, coffee and tea facilities, walk-in shower');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`UserID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Checkin` varchar(255) NOT NULL,
  `Checkout` varchar(255) NOT NULL,
  `RoomType` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `RoomID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Title`, `FirstName`, `MiddleName`, `LastName`, `Address`, `Phone`, `Email`, `Quantity`, `Checkin`, `Checkout`, `RoomType`, `Code`, `RoomID`) VALUES
(2, 'Mr', 'Joven', 'C.', 'PodPod', '123 Bagumbayan Street Caloocan City', '09068762335', 'Jov@yahoo.com', '3', '11/14/2014', '11/17/2014', 'Deluxe Room', '', 1),
(5, 'Mr.', ' Micheal', 'Ol', ' Tan', '173 Hindi street caloocan city', ' 09873645221', ' mc@yahoo.com', '1', '9/1/2014', '9/7/2015', 'Grand Deluxe Suite', '', 0),
(6, 'Mr.', ' Cederick', 'Manigit', ' Prinsipe', 'Sangandaan', ' 09382212359', ' Cederick@yahoo.com', '3', '6/6/2014', '6/8/2014', 'Deluxe Suite', '', 0),
(8, 'Mr.', ' Patrick', 'Patpat', ' Cantonjos', 'Bulacan', ' 09183828281', ' CantonjosPat@yahoo.com', '4', '3/9/2014', '3/12/2014', 'Deluxe Room', '', 0),
(10, 'Mr.', ' Jovz', 'Deymos', ' Podpodz', 'BLK 21 LOT 21 phase 1-b Navotas City', ' 09281736411', ' JovzPodpodz', '2', '1/23/2014', '2/1/2014', 'Standard Room', '', 0),
(11, 'Mr.', ' sadas', 'sads', ' sda', 'asdasd', ' asdsa', ' saddsad', '5', '2/1/2014', '1/1/2014', 'Deluxe Suite', '5241311550', 0),
(12, '', '', '', '', '', '', '', '', '//', '//', '', '6144353320', 0),
(13, 'Mr.', ' dsf', '', ' sdfs', '', ' ', ' sdf', '4', '1/1/2014', '1/1/2014', 'Deluxe Room', '8120715012', 0),
(14, 'Mr.', ' sadasas', '', ' sda', '', ' ', ' ', '4', '1/1/2014', '1/1/2014', 'Standard Room', '2498516652', 0),
(15, 'Mr.', ' sdas', '', ' sddas', '', ' ', ' asda', '4', '1/1/2014', '1/1/2014', 'Deluxe Room', '8115339763', 0),
(16, 'Mr.', ' dsdf', 'dsfsd', ' sdfsdf', 'sdfsdfsdf', ' 34565432343', ' dfsd', '4', '1/1/2014', '1/1/2014', 'Standard Room', '6925823424', 0),
(17, 'Mr.', ' fsdfssdf', 'sdfsdf', '  dfsdf', 'sdfsdf', ' 32433432342', ' sdfsd', '4', '1/1/2014', '1/1/2014', 'Standard Room', '1470279191', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`Message_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `Message_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
