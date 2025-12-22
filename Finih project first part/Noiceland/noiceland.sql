-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Час створення: Гру 22 2025 р., 14:32
-- Версія сервера: 5.6.34-log
-- Версія PHP: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `noiceland`
--
CREATE DATABASE IF NOT EXISTS `noiceland` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `noiceland`;

-- --------------------------------------------------------

--
-- Структура таблиці `table_first`
--

CREATE TABLE `table_first` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `table_first`
--

INSERT INTO `table_first` (`id`, `photo`, `title`, `text`, `autor`, `created_at`) VALUES
(1, '/img/banner_img.jpg', 'Illustration', 'Japan House opens in mountainside to foster peak creativity.', 'By Reta Torphy', '2025-12-16 17:40:42'),
(2, '/img/art-1.jpg', 'Photography', 'Helmut Lang celebrates taxi drivers worldwide in latest campaign', 'By Alessandra Ortiz', '2025-12-16 17:40:42'),
(3, '/img/art-2.jpg', 'Photography', 'Bowlcut launch a new summer collection that pays homage to â€œUK legendsâ€', 'By Rosanna Ondricka', '2025-12-16 17:40:42'),
(4, '/img/art-3.jpg', 'Photography', 'Thousands of previously unseen photographs by Andy Warhol will be made public this Autumn', 'By Annie Lueilwitz', '2025-12-16 17:40:42'),
(5, '/img/art-4.jpg', 'Interactive Design', 'London-based Yinka Iloriâ€™s storytelling furniture', 'By Annie Lueilwitz', '2025-12-16 17:40:42'),
(6, '/img/art-5.jpg', 'Graphic Design', 'Anonymous Israeli art collective Broken Fingaz direct music video for U2 and Beck', 'By Simeon Brekke', '2025-12-16 17:40:42'),
(7, '/img/art-6.jpg', 'Architecture', 'Suzanne Saroffâ€™s meticulously arranged photographs alter perceptions', 'By Reta Torphy', '2025-12-16 17:40:42'),
(8, '/img/l_art-7.jpg', 'Architecture', 'Anu Ambasnaâ€™s playful illustrations celebrate club culture, brown bodies and perfect paunches', 'By Leo Bartell', '2025-12-16 17:40:42'),
(9, '/img/f_art-1.jpg', 'Graphic Design', 'A Brief History of the FIFA World Cup Logo', 'By Clem Onojeghuo', '2025-12-16 17:40:42'),
(10, '/img/f_art-2.jpg', 'Graphic Design', 'Need a guide to LAâ€™s graphic design scene? Shopliftersâ€™ new issue has got your back', 'By Alessandra Ortiz', '2025-12-16 17:40:42'),
(11, '/img/f_art-3.jpg', 'Photography', 'Fred Rowson directs film for Years and Years', 'By Coby Gottlie', '2025-12-16 17:40:42'),
(12, '/img/f_art-4.jpg', 'Illustration', 'M&C Saatchi and Fontsmith collaborate on font collection for House of St Barnabas', 'By Annie Lueilwitz', '2025-12-16 17:40:42');

-- --------------------------------------------------------

--
-- Структура таблиці `table_second`
--

CREATE TABLE `table_second` (
  `id` int(11) NOT NULL,
  `above` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `down` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `table_second`
--

INSERT INTO `table_second` (`id`, `above`, `down`, `one_one`, `one`, `two`, `three`, `created_at`) VALUES
(1, 'Animation', 'Interactive Design', '', '', '', '', '2025-12-17 14:39:49'),
(2, 'Architecture', 'Miscellaneous', '', '', '', '', '2025-12-17 14:39:49'),
(3, 'Graphic Design', 'Photography', '', '', '', '', '2025-12-17 14:39:49'),
(4, 'Illustration', 'Product Design', '', '', '', '', '2025-12-17 14:39:50'),
(5, '', '', 'Information', 'about', 'contact', 'terms', '2025-12-17 14:39:50'),
(6, '', '', 'follow us', 'instagram', 'facebook', 'twitter', '2025-12-17 14:39:50'),
(7, '', '', 'Template', 'Image License Info', 'Powered by Webflow', '', '2025-12-17 14:39:50');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `table_first`
--
ALTER TABLE `table_first`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `table_second`
--
ALTER TABLE `table_second`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `table_first`
--
ALTER TABLE `table_first`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблиці `table_second`
--
ALTER TABLE `table_second`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
