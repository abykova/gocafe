-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2019 г., 20:21
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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Дамп данных таблицы `application`
--

INSERT INTO `application` (`id`, `name`, `tell`, `text`) VALUES
(29, 'fdg', '8765453413', 'dfggdf'),
(30, 'Болат', '8765453413', 'sdfsf'),
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
(15, 'fgdfgdfg', 'dfgdfg', 'fgfdg'),
(16, 'Диас', '87056518676', 'Я хочу у вас заказать столик'),
(17, 'r', 'r', 'r'),
(18, '', '', ''),
(20, 'Болат', '8765453413', 'Хочу перекусить у вас'),
(21, 'Болат', '8765453413', 'цукцкауцкауцкауууууу'),
(22, 'Болат', 'rdgtedrtdr', 'drtdtdrt'),
(23, 'Болат', '45454636', 'drtdtdrt'),
(24, 'Болат', '45454636', 'drtdtdrt'),
(25, 'Болат', '45454636', 'drtdtdrt'),
(26, 'Болат', '45454636', 'drtdtdrt'),
(27, 'fdg', 'dfg', 'dfg'),
(28, 'fdg', 'rdgtedrtdr', 'м'),
(31, 'fdg', 'sdf', 'sdf');

-- --------------------------------------------------------

--
-- Структура таблицы `cafes`
--

DROP TABLE IF EXISTS `cafes`;
CREATE TABLE IF NOT EXISTS `cafes` (
  `id_cafe` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `kitchen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `evarage_check` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '3000',
  `working_hours` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tell` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'no-image.png',
  `hit` enum('0','1') CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `new` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_cafe`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cafes`
--

INSERT INTO `cafes` (`id_cafe`, `name`, `kitchen`, `content`, `evarage_check`, `working_hours`, `address`, `tell`, `img`, `hit`, `new`) VALUES
(3, '106', 'Авторская', 'Живая музыка - по пятницам и субботам - с 19:00 до 00:00.\r\n\r\nDJ-сеты - по пятницам и субботам - с 19:00.\r\n\r\nДискотека - по пятницам и субботам - с 19:00 до последнего гостя.', '1000-1500', 'Каждый день 12:00 - последний гость', 'Ленинградское шоссе, д. 106', '+74955146575', 'image_1.jpg', '0', '0'),
(2, '01КАФЕ', 'Русская', 'Проходя мимо \"01КАФЕ\", вечно спешащие и занятые прохожие вдруг замедляют шаг, забывают о неотложных делах и решительно распахивают двери кафе-бара, который уже для многих стал единственным и неповторимым. Вероятно, дело в том, что \"01КАФЕ\" искренне заботится об удобстве и комфорте своих гостей, а может - и в мастерстве и неистощимой фантазии шеф-повара.', 'до 5000', 'столовая: пн - пт 11:00 - 17:00 (кроме праздников), кафе: пн - пт 17:00 - 00:00, сб - вс 11:00 - 00:00', 'ул. Чаянова, д. 11/2', '+74953671623', 'image_2.jpg', '1', '0'),
(4, '12 Винный бар', 'Европейская', '12 WINE BAR - одно из самых нетривиальных мест на карте гастрономической Москвы. Настоящий Secret Place в красивейшем историческом месте - Бадаевском заводе.\r\n\r\nРаньше здесь был цех розлива, а теперь - винный бар.', '5000-7500', 'Каждый день 16:00 - 00:00', 'Кутузовский пр., д. 12, стр. 1', '+74953671629', 'image_3.jpg', '1', '0'),
(5, '1516', 'Европейская', '', '10000-15000', 'вс-чт 12:00-00:00, пт-сб 12:00-02:00', 'Москва, Абельмановская ул., д. 4А', '+74959882656', 'image_4.jpg', '0', '0'),
(6, '19 Bar & Atmosphere', 'Итальянская', 'Ресторан 19 Bar & Atmosphere на улице Покровка - место для натур сильных, творческих, неординарных и не лишенных чувства юмора.\r\n\r\nРесторан 19 Bar & Atmosphere на улице Покровка - место действительно атмосферное. ', '7500-10000', '17:00 - 05:00', 'ул. Покровка, д. 19', '+74953671619', 'image_5.jpg', '1', '0'),
(7, '25:45', 'Японская', 'Ресторан 19 Bar & Atmosphere на улице Покровка - место для натур сильных, творческих, неординарных и не лишенных чувства юмора.\r\n\r\nРесторан 19 Bar & Atmosphere на улице Покровка - место действительно атмосферное. ', '7500-10000', '17:00 - 05:00', 'ул. Покровка, д. 19', '+74953671619', 'image_6.jpg', '1', '0'),
(8, '37/37', 'Восточная', 'Ресторан 19 Bar & Atmosphere на улице Покровка - место для натур сильных, творческих, неординарных и не лишенных чувства юмора.\r\n\r\nРесторан 19 Bar & Atmosphere на улице Покровка - место действительно атмосферное. ', '7500-10000', '17:00 - 05:00', 'ул. Покровка, д. 19', '+74953671619', 'no-image.png', '0', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
