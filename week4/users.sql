-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2013 at 11:44 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
=======
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2013 at 11:18 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
>>>>>>> dddb7f9232dcd1e7b19415e93c636a1ddc353134


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
<<<<<<< HEAD
-- Database: `db_users`
=======
-- Database: `db_user`
>>>>>>> dddb7f9232dcd1e7b19415e93c636a1ddc353134
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
<<<<<<< HEAD
  `username` varchar(30) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email_address`, `password`) VALUES
(9, 'momokmom', 'mo@yahoo.com', '27c9d5187cd283f8d160ec1ed2b5ac89'),
(11, 'sdfsdsd', 'dfff@webmail.com', 'e369853df766fa44e1ed0ff613f563bd'),
(12, 'sbu123...', 'sbu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(13, 'sbu123...', 'sbu@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9');
=======
  `user_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
>>>>>>> dddb7f9232dcd1e7b19415e93c636a1ddc353134

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
