-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 05:44 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripbuilderapi_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

DROP TABLE IF EXISTS `airlines`;
CREATE TABLE IF NOT EXISTS `airlines` (
  `Airline_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(255) NOT NULL,
  `IATA` char(10) NOT NULL,
  `ICAO` char(10) NOT NULL,
  `Country` char(50) NOT NULL,
  `Active` char(5) NOT NULL,
  PRIMARY KEY (`Airline_ID`),
  KEY `IATA` (`IATA`)
) ENGINE=InnoDB AUTO_INCREMENT=19846 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

DROP TABLE IF EXISTS `airports`;
CREATE TABLE IF NOT EXISTS `airports` (
  `Airport_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(255) NOT NULL,
  `City` char(50) NOT NULL,
  `Country` char(50) NOT NULL,
  `IATA_FAA` char(10) NOT NULL,
  `ICAO` char(10) NOT NULL,
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL,
  `Timezone` int(10) NOT NULL,
  `DST` char(10) NOT NULL,
  `time_zone_area` char(100) NOT NULL,
  PRIMARY KEY (`Airport_ID`),
  KEY `Airport_ID` (`Airport_ID`),
  KEY `IATA_FAA` (`IATA_FAA`)
) ENGINE=InnoDB AUTO_INCREMENT=9542 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `Airline` char(10) NOT NULL,
  `Airline_Id` int(11) NOT NULL,
  `Source_airport` char(10) NOT NULL,
  `Source_airport_Id` int(11) NOT NULL,
  `Destination_airport` char(10) NOT NULL,
  `Destination_airport_Id` int(11) NOT NULL,
  `Stops` int(11) NOT NULL,
  `Equipment` char(25) NOT NULL,
  PRIMARY KEY (`Airline_Id`,`Source_airport_Id`,`Destination_airport_Id`),
  KEY `Airline` (`Airline`),
  KEY `Airline Id` (`Airline_Id`),
  KEY `Source airport` (`Source_airport`),
  KEY `Source airport Id` (`Source_airport_Id`),
  KEY `Destination airport` (`Destination_airport`,`Destination_airport_Id`),
  KEY `Destination airport Id` (`Destination_airport_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `AirlineID` FOREIGN KEY (`Airline_Id`) REFERENCES `airlines` (`Airline_ID`),
  ADD CONSTRAINT `routes_ibfk_1` FOREIGN KEY (`Source_airport_Id`) REFERENCES `airports` (`Airport_ID`),
  ADD CONSTRAINT `routes_ibfk_2` FOREIGN KEY (`Destination_airport_Id`) REFERENCES `airports` (`Airport_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
