-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2019 г., 10:11
-- Версия сервера: 5.7.24
-- Версия PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `tell` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `text` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `application`
--

INSERT INTO `application` (`id`, `name`, `tell`, `text`) VALUES
(1, 'Диас', '86004564', 'ываываыва'),
(2, 'Диас', '870555246', '56tdertdfg'),
(3, 'Диас', '870555', 'sdfsfds'),
(4, 'dias', '87055524655', 'hggdhkf'),
(5, 'Диас', '513424324563456345', 'rererserfsr'),
(6, 'dfgdfgdf', '860045643645646', 'dfgdfg'),
(7, 'Диас', '860045643645646', 'rttrddrtdr'),
(8, 'Диас', '87055524655', 'dffsfdf'),
(9, 'dxfxf', '858754', '54'),
(10, 'tfhgfh', 'hfghfgh', 'fghf'),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, 'dsfsdf', '794646785', 'dfgdfgfdgdf'),
(15, 'fgdfgdfg', 'dfgdfg', 'fgfdg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
