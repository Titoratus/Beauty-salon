-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 15 2018 г., 22:13
-- Версия сервера: 10.0.34-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `forallne_salon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `address` varchar(70) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `vk` varchar(50) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `inst` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`address`, `hours`, `email`, `phone`, `vk`, `fb`, `inst`) VALUES
('Петрозаводск, ул. Энтузиастов, д. 15', 'С 10:00 до 20:00 Без выходных', 'labouclette@gmail.com', '8 (911) 051-96-92', 'https://vk.com/club147802874', 'https://vk.com/club147802874', 'https://vk.com/club147802874');

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `o_id` int(4) NOT NULL,
  `o_name` varchar(100) NOT NULL,
  `price` varchar(30) NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` (`o_id`, `o_name`, `price`, `service`) VALUES
(11, 'Средние волосы', '500', 'Стрижка модельная «Каре», «Каре на ножке»'),
(12, 'Удлинённые волосы', '600', 'Стрижка модельная «Каре», «Каре на ножке»'),
(13, 'Средние волосы', '550', 'Стрижка креативная'),
(14, 'Удлинённые волосы', '600-650', 'Стрижка креативная'),
(16, 'Наращивание ногтей с однотонным покрытием', '1500', 'Ногтевой сервис'),
(17, 'Дизайн ногтей (1 ноготь)', '50', 'Ногтевой сервис'),
(20, 'Модельная стрижка', '400-450', 'Модельная стрижка'),
(21, 'Наголо', '200', 'Стрижка'),
(22, 'Крупный нож', '250', 'Стрижка'),
(26, 'Мужская насадками', '220', 'Мужской зал'),
(27, 'Мужская ножницами', '300', 'Мужской зал'),
(41, 'Усики', '200', 'Депиляция плёночным воском'),
(42, 'Усики + подбородок', '300', 'Депиляция плёночным воском'),
(43, 'Лицо', '500', 'Депиляция плёночным воском'),
(44, 'Подмышки', '400-500', 'Депиляция плёночным воском'),
(45, 'Голень', 'от 500', 'Депиляция плёночным воском'),
(46, 'Бёдра', 'от 600', 'Депиляция плёночным воском'),
(47, 'Ноги полностью', '1200', 'Депиляция плёночным воском'),
(48, 'Руки до локтя', 'от 400', 'Депиляция плёночным воском'),
(49, 'Руки полностью', 'от 500', 'Депиляция плёночным воском'),
(50, 'Классическое бикини', '900', 'Депиляция плёночным воском'),
(51, 'Глубокое бикини', '1300', 'Депиляция плёночным воском'),
(52, 'Волосы ("Каскад")', '450', 'Депиляция плёночным воском'),
(53, 'Гель-лак', '200', 'Снятие без маникюра'),
(54, 'Гель', '300', 'Снятие без маникюра'),
(55, 'Хорошие ноги', '1200', 'Аппаратный педикюр'),
(56, 'Проблемные ноги', '1500', 'Аппаратный педикюр'),
(57, 'С покрытием гель-лак на ногах', '+300', 'Аппаратный педикюр'),
(63, 'Короткие волосы', '300', 'Стрижка для девочек младше 12 лет'),
(64, 'Удлинённые волосы ("Каре", "Каскад")', '400', 'Стрижка для девочек младше 12 лет'),
(65, 'Длинные волосы', '450', 'Стрижка для девочек младше 12 лет'),
(66, 'Подравнивание волос', '250', 'Стрижка для девочек младше 12 лет'),
(67, 'Подравнивание чёлки', '100', 'Стрижка для девочек младше 12 лет'),
(68, 'Спортивная', '300', 'Стрижка для мальчиков младше 12 лет'),
(69, 'Модельная', '350', 'Стрижка для мальчиков младше 12 лет'),
(70, 'Креативная', '400', 'Стрижка для мальчиков младше 12 лет'),
(75, 'Модельная', '300', 'Женский зал'),
(76, 'Простая', '250', 'Женский зал'),
(77, 'Удлинённые волосы ("Каре")', '400', 'Женский зал'),
(78, 'Волосы ("Каскад")', '450', 'Женский зал');

-- --------------------------------------------------------

--
-- Структура таблицы `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `service` varchar(70) NOT NULL,
  `opt` varchar(70) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`id`, `name`, `phone`, `email`, `service`, `opt`, `date`, `time`) VALUES
(2, 'Анна Шуваловна Шумалодовна', '89637452156', 'lanna@yandex.ru', 'Ногтевой сервис', 'Наращивание ногтей с однотонным покрытием', '231117', '1530'),
(4, 'Леонид Ньютонович', '896374112415', 'kopeen@gmail.com', 'Мужской зал', 'Мужская ножницами', '201117', '1100'),
(5, 'Лубан Авеев', '89638415376', 'queen@yandex.ru', 'Стрижка креативная', 'Средние волосы', '201117', '2030'),
(6, 'Королевна', '896374259652', 'kjsddfg@yandex.ru', 'Стрижка', 'Наголо', '201117', '1900'),
(7, 'Андрей ', '89637425361', 'nooox@yandex.ru', 'Стрижка креативная', 'Средние волосы', '91117', '1900'),
(8, 'Евгений', '896374219242', 'leki@yandex.ru', 'Стрижка модельная «Каре», «Каре на ножке»', 'Средние волосы', '161117', '1600'),
(19, 'Виталий', '+79535440390', 'vitalik758153@gmail.com', 'Монокль', 'Аврора', '31117', '1800'),
(22, '', '', '', 'Женский зал', 'Модельная', '110418', '1400'),
(23, 'Виола', '89004639157', 'suzi.viola1997@gmail.com', 'Ногтевой сервис', 'Наращивание ногтей с однотонным покрытием', '170518', '1400');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `ID` int(3) unsigned NOT NULL,
  `author` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`ID`, `author`, `message`, `link`) VALUES
(6, 'Виола Сузи', 'Спасибо большое за прекрасную причёску Ирине Ратмановой! Всё сделано супер, быстро и качественно, я в восторге, СОВЕТУЮ!!!', 'https://vk.com/id159267568'),
(7, 'Татьяна Романова', 'Хочу выразить огромную благодарность Вашему салону, и мастеру с волшебными руками Ратмановой Ирине, сказать СПАСИБО за стильную стрижку, прическу и прекрасное настроение с которым покидаешь салон и непременно хочется вернуться вновь за очередной порцией красоты.', 'https://vk.com/id119662782'),
(8, 'Оля Лесси', 'Более 20 лет Ирина Ратманова мой мастер парикмахер! Спасибо большое тебе Ириша за твой труд, терпение и профессиональный подход, у тебя золотые руки', 'https://vk.com/id288417358');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `ID` int(4) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`ID`, `s_name`, `category`) VALUES
(8, 'Стрижка модельная «Каре», «Каре на ножке»', 'women'),
(9, 'Стрижка креативная', 'women'),
(10, 'Ногтевой сервис', 'women'),
(11, 'Модельная стрижка', 'men'),
(12, 'Стрижка', 'men'),
(14, 'Мужской зал', 'olders'),
(23, 'Депиляция плёночным воском', 'women'),
(24, 'Снятие без маникюра', 'women'),
(25, 'Аппаратный педикюр', 'women'),
(27, 'Стрижка для девочек младше 12 лет', 'kids'),
(28, 'Стрижка для мальчиков младше 12 лет', 'kids'),
(30, 'Женский зал', 'olders');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `nickname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`nickname`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `weekends`
--

CREATE TABLE IF NOT EXISTS `weekends` (
  `num` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `service` (`service`);

--
-- Индексы таблицы `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `name` (`s_name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nickname`);

--
-- Индексы таблицы `weekends`
--
ALTER TABLE `weekends`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `o_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT для таблицы `records`
--
ALTER TABLE `records`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`service`) REFERENCES `services` (`s_name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
