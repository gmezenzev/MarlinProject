-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2019 at 01:58 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MarlinProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`) VALUES
(3, 'Статья №1', 'PHP позволяет делать для сайта многое интересное. Но уйма сайтов взломана из-за того же PHP. Либо выставляются неправильные права доступа к файлам, либо неправильно написаны скрипты работы с файлами, либо из-за ошибок в работе скрипта возможно посмотреть структуру каталогов сайта и т.д.'),
(4, 'Статья №2', 'PHP позволяет делать для сайта многое интересное. Но уйма сайтов взломана из-за того же PHP. Либо выставляются неправильные права доступа к файлам, либо неправильно написаны скрипты работы с файлами, либо из-за ошибок в работе скрипта возможно посмотреть структуру каталогов сайта и т.д.'),
(7, 'Статья №3', 'PHP позволяет делать для сайта многое интересное. Но уйма сайтов взломана из-за того же PHP. Либо выставляются неправильные права доступа к файлам, либо неправильно написаны скрипты работы с файлами, либо из-за ошибок в работе скрипта возможно посмотреть структуру каталогов сайта и т.д.'),
(8, 'Статья №4', 'PHP позволяет делать для сайта многое интересное. Но уйма сайтов взломана из-за того же PHP. Либо выставляются неправильные права доступа к файлам, либо неправильно написаны скрипты работы с файлами, либо из-за ошибок в работе скрипта возможно посмотреть структуру каталогов сайта и т.д.'),
(10, 'Статья №5', 'PHP позволяет делать для сайта многое интересное. Но уйма сайтов взломана из-за того же PHP. Либо выставляются неправильные права доступа к файлам, либо неправильно написаны скрипты работы с файлами, либо из-за ошибок в работе скрипта возможно посмотреть структуру каталогов сайта и т.д.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
