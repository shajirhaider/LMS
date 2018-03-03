-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 07:39 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbooks`
--

CREATE TABLE `addbooks` (
  `id` int(11) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_image` varchar(500) NOT NULL,
  `books_author_name` varchar(50) NOT NULL,
  `books_publication_name` varchar(50) NOT NULL,
  `books_purchase_date` varchar(50) NOT NULL,
  `books_price` varchar(50) NOT NULL,
  `books_qty` int(30) NOT NULL,
  `avail_qty` int(30) NOT NULL,
  `librarian_username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbooks`
--

INSERT INTO `addbooks` (`id`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `avail_qty`, `librarian_username`) VALUES
(6, 'car', 'books image/cd87827dfdf5a83dc2b32a38c0b6a240car2.jpg', 'Ford1', 'ford', '22/2/17', '150', 10, 8, ''),
(7, 'Python', 'books image/55e4090a455948a22424b93a0201b9b3python.jpg', 'eeeee', 'ppppp', '03/03/2018', '250', 40, 38, 'abc'),
(8, 'PHP', 'books image/c6b2b4667cecc941ad2028ceaf8dc16ePhp.jpg', 'ppppp', 'bbbbb', '03/03/2018', '280', 40, 38, 'abc'),
(9, 'Php 2', 'books image/7fb4faf41d12488a0d9c53e7d7e1825dPhp.jpg', 'ttttt', 'yyyy', '03/03/2018', '280', 40, 38, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `issuse_book`
--

CREATE TABLE `issuse_book` (
  `id` int(5) NOT NULL,
  `student_enrollment` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_sem` varchar(50) NOT NULL,
  `student_contact` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_issue_date` varchar(50) NOT NULL,
  `books_return_date` varchar(50) NOT NULL,
  `student_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuse_book`
--

INSERT INTO `issuse_book` (`id`, `student_enrollment`, `student_name`, `student_sem`, `student_contact`, `student_email`, `books_name`, `books_issue_date`, `books_return_date`, `student_username`) VALUES
(4, '1204029', '  SHAJIR UDDIN T', '  2', '  aaaa', '  alan04turing@gmail.com', 'car', '  22/Feb/2018', '25-02-2018', 'sut'),
(5, '1204028', '  Sha yui', '  a', '  aaa', '  nmdfn', 'car', '  25/Feb/2018', '25-02-2018', 'su'),
(6, '1204029', '  SHAJIR UDDIN T', '  2', '  aaaa', '  alan04turing@gmail.com', 'car', '  26/Feb/2018', '02-03-2018', 'sut'),
(7, '1204001', '  Nish Khan', '  2', '  test', '  Nk@gmail.com', 'car', '  02/Mar/2018', '02-03-2018', 'Nk'),
(8, '1204001', '  Nish Khan', '  2', '  test', '  Nk@gmail.com', 'car', '  02/Mar/2018', '', 'Nk'),
(9, '1204001', '  Nish Khan', '  2', '  test', '  Nk@gmail.com', 'Php 2', '  02/Mar/2018', '', 'Nk');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'abc', 'def', 'abc', 'abc', 'abc@gmail.com', 'abc'),
(2, 'SHAJIR UDDIN', 'HAIDER', 'Shajir', '123456', 'shajirhaider04@gmail.com', '01681470970');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `susername` varchar(50) NOT NULL,
  `dusername` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `read1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `susername`, `dusername`, `title`, `msg`, `read1`) VALUES
(3, '', '  sut', 'Test', 'hello', 'n'),
(4, 'abc', '  sut', 'Title', 'hellooooo', 'n'),
(6, 'abc', '  sut', 'hello', 'testing', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `enrollment` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `sem`, `enrollment`, `status`) VALUES
(2, 'SHAJIR UDDIN', 'T', 'sut', '123456', 'alan04turing@gmail.com', 'aaaa', '2', '1204029', 'yes'),
(3, 'Sha', 'yui', 'su', '12345', 'nmdfn', 'aaa', 'a', '1204028', 'no'),
(4, 'Nish', 'Khan', 'Nk', '123456', 'Nk@gmail.com', 'test', '2', '1204001', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbooks`
--
ALTER TABLE `addbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuse_book`
--
ALTER TABLE `issuse_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbooks`
--
ALTER TABLE `addbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `issuse_book`
--
ALTER TABLE `issuse_book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
