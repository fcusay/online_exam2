-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2014 at 04:04 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `olexam`
--
CREATE DATABASE IF NOT EXISTS `olexam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `olexam`;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` longtext NOT NULL,
  `choice_a` longtext NOT NULL,
  `choice_b` longtext NOT NULL,
  `choice_c` longtext NOT NULL,
  `choice_d` longtext NOT NULL,
  `answer` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `question`, `choice_a`, `choice_b`, `choice_c`, `choice_d`, `answer`) VALUES
(1, 'Which famous scientist introduced the idea of natural selection?', 'Charles Darwin', 'Isac Newton', 'Jocel Weak', 'Daren Sexy', 'A'),
(2, ' A person who studies biology is known as a?', 'Biologist', 'Scientist', 'Dotalagist', 'Mayoralogist', 'A'),
(3, 'Botany is the study of?', 'Animal', 'Copy Paste', 'Plants', 'Rock', 'C'),
(4, 'Can frogs live in salt water?', 'Maybe', 'Yes', 'Exactly', 'No', 'D'),
(5, 'Animals which eat both plants and other animals are known as what?', 'Omnivores', 'Dragon ', 'Spider', 'Fish', 'A'),
(6, 'Bacterial infections in humans can be treated with what?', 'Antibiotics', 'Drugs', 'Biogesic', 'Neosep', 'A'),
(7, ' A single piece of coiled DNA is known as a?', 'Genetic', 'Blodd', 'Chromosome', 'Genes', 'C'),
(8, 'A group of dog offspring is known as a?', ' Litter', 'Bitter', 'Kitter', 'Minner', 'A'),
(9, 'The death of every member of a particular species is known as what?', 'Expedition', 'Littition', 'Extinction\n', 'Limit', 'C'),
(10, ' A change of the DNA in an organism that results in a new trait is known as a?', 'Prustration', 'Eddition', 'Mutation', 'Likage', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'as', 'as', 'as@gmail.com', '123'),
(2, 'a', 'a', 'as@gmail.comq', 'a'),
(3, 'Ferdinand', 'Cusay', 'cferdzz11@gmail.com', 'kalambor001'),
(4, 'gian', 'gall', 'gg@gmail.com', '123'),
(5, 'cferzz', 'cusay1', 'cferdzz@yahoo.com', '123'),
(6, 'ferdi', 'cus', 'cferdzz1@yahoo.com', '123'),
(7, 'jonathan', 'almazora', 'jonathan_almazora@yahoo.com', 'jonathan'),
(8, 'robin', 'cortes', 'robin@gmail.com', '111'),
(9, 'Mario', 'Cusay', 'Mario@gmail.com', 'desaresad'),
(10, '', '', '', ''),
(11, 'jeffrey', 'weak', 'wek@gmail.com', 'weak'),
(12, 'daren', 'taba', 'darentaba@yahoo.com', 'daren'),
(13, 'randi', 'mabini', 'randi@yahoo.com', '123'),
(14, 'Melito', 'rui', 'melito@gmail.com', 'melito');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
