-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2021 г., 14:41
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(28) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`) VALUES
(1, 'nikita', 'nikita@mail.ru', '$2y$10$o88oZyCjqhDYtDHMtl3bz.Yoab6oZigQjJIu9nC/PF5hmrWMd0Rje'),
(2, 'ivan', 'ivan@gmail.com', '$2y$10$UiVl26HkQA6fZtOcHDiEXuTSYKNP7rflNyOl75sMYRWyA2ElYlN.S'),
(3, 'ivanBoss', 'ivanBoss@gmail.com', '$2y$10$imB.Ph4qHlph74LI5d/A6ugGANcmXg.f9zf4rR4yQWSdhnbrwUZ72'),
(4, 'viktor', 'viktor@mail.ru', '$2y$10$mc3MTlJnDw2BVyViK9P/LuEn.N3rhMa.mFai1TuDT0zDEj0zdN8b6'),
(5, 'denis', 'denis@mail.ru', '$2y$10$aNSiOKz/6MnY/7t5tYrOguJT.qWq.Pf2ic/kDJf74dveIdoPVOpNi'),
(6, 'homura', 'homura@gmail.com', '$2y$10$Z5MwTIPLWOkCEbAKZ4cY.OAOo74nkOegk209SJugvT0m6cF57/DIa'),
(7, 'user', 'user@mail.ru', '$2y$10$suKKSEb1GvcHU.DqonbzL.kuSHM5IpRSFQzNjSEGJJHanOpb4IvtO');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
