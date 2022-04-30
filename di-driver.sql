-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2022 г., 07:22
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `di-driver`
--

-- --------------------------------------------------------

--
-- Структура таблицы `breakdown`
--

CREATE TABLE `breakdown` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Поломки';

--
-- Дамп данных таблицы `breakdown`
--

INSERT INTO `breakdown` (`id`, `name`) VALUES
(1, 'Не исправный двигатель'),
(2, 'Не исправный инжектор');

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearRelease` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Машины';

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `name`, `yearRelease`, `new`, `classId`, `price`, `imagePath`) VALUES
(1, 'Rio', '2018', '1', '1', '123123', 'resurses/png_RIO.png'),
(2, 'Picanto', '2021', '0', '2', '7990000', 'resurses/picanto.png'),
(3, 'Kia Soul', '2019', '0', '2', '787878787', 'resurses/soul.png');

-- --------------------------------------------------------

--
-- Структура таблицы `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Класс машины';

--
-- Дамп данных таблицы `classes`
--

INSERT INTO `classes` (`id`, `name`, `price`) VALUES
(1, 'Комфорт', 1000),
(2, 'Комфорт+', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `components`
--

CREATE TABLE `components` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Компоненты';

--
-- Дамп данных таблицы `components`
--

INSERT INTO `components` (`id`, `name`, `price`) VALUES
(1, 'Магнитола', 2000),
(2, 'Электропакет', 2000);

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Покупатель ';

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `name`, `pasport`, `addres`, `phone`) VALUES
(1, 'Баскетболов Баскетбол Баскеболович', '123123', 'Адресс', '87000000');

-- --------------------------------------------------------

--
-- Структура таблицы `order1`
--

CREATE TABLE `order1` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order1`
--

INSERT INTO `order1` (`id`, `fio`, `number`, `car`, `stats`) VALUES
(1, '123123', '', '123123', 'Сатып алу'),
(2, '123123', '13123', '123123', 'Сатып алу'),
(3, '123123', '13123', '123123', 'Жондеу');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fioClient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clasessesId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `components` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Продажа';

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `fioClient`, `carId`, `year`, `clasessesId`, `components`, `price`, `date`, `color`) VALUES
(6, 'Bagi', 'Rio', '2018', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-24', 'Белый'),
(7, '123123', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(8, '123123', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(9, '123123', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(10, '123123', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(11, '123123', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(12, '123123', 'Rio', '2018', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(13, '123123', 'Rio', '2018', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(14, '123123', 'Rio', '2018', 'Комфорт', '', '555', '2022-04-25', 'Белый');

-- --------------------------------------------------------

--
-- Структура таблицы `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Должности';

--
-- Дамп данных таблицы `positions`
--

INSERT INTO `positions` (`id`, `name`) VALUES
(2, 'Продавец'),
(3, 'Механик'),
(4, 'Бухгалтер'),
(5, 'Тест-драйв'),
(6, 'Админ');

-- --------------------------------------------------------

--
-- Структура таблицы `reason`
--

CREATE TABLE `reason` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Причина поломки';

-- --------------------------------------------------------

--
-- Структура таблицы `repair`
--

CREATE TABLE `repair` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fioClient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `automobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fioMechanic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateEnd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `repair`
--

INSERT INTO `repair` (`id`, `date`, `fioClient`, `automobile`, `classId`, `fioMechanic`, `cause`, `dateEnd`) VALUES
(1, '2022-04-24', 'Bagi', 'Kia', 'Комфорт', 'Алексей', 'Не исправный двигатель', '2022-04-25'),
(2, '2022-04-25', '123123', '123', 'Комфорт', 'Алексей', 'Не исправный двигатель', '2022-04-25');

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postionId` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passowrd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Работник';

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`id`, `name`, `addres`, `phone`, `pasport`, `postionId`, `email`, `passowrd`) VALUES
(1, 'Стажор', '123123', '123123', '123123', 2, 'Продавец', '1'),
(3, 'Алексей', 'Кенесары 29', '454545', '0156468468', 3, 'alex@mail.ru', '123456'),
(4, 'Игорь', 'Богенбая 55', '457548', '78889994', 5, 'igor@mail.ru', '123456'),
(5, 'Екатерина', 'Женис 56', '845264', '4687446541', 4, 'katya@mail.ru', '123456'),
(6, 'Adimn', '', '', '', 0, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `tablename`
--

CREATE TABLE `tablename` (
  `id` int(11) NOT NULL,
  `nameTable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameTableKZ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameTableRU` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tablename`
--

INSERT INTO `tablename` (`id`, `nameTable`, `nameTableKZ`, `nameTableRU`) VALUES
(1, 'cars', 'Автомобильдер', NULL),
(2, 'breakdown', 'Закымдану', NULL),
(3, 'classes', 'Автомобиль класстары', NULL),
(4, 'components', 'Компоненттер', NULL),
(5, 'customers', 'Клиенттер', NULL),
(6, 'orders', '	Автомобильді төлеу', NULL),
(7, 'positions', 'Лауазымдар', NULL),
(8, 'reason', 'Бұзылу себептері', NULL),
(9, 'staff', 'Қызметкерлер', NULL),
(21, 'testdrive', 'Тест-драйв', NULL),
(22, 'repair', 'Жондеу', NULL),
(23, 'order1', 'Все', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `testdrive`
--

CREATE TABLE `testdrive` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fioClient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `automobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeBefore` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeAfter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsible` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testdrive`
--

INSERT INTO `testdrive` (`id`, `date`, `fioClient`, `automobile`, `classId`, `dateTest`, `timeBefore`, `timeAfter`, `responsible`) VALUES
(1, '2022-04-24', 'Bagi', '1', 'Комфорт', '2022-04-13', '15:59', '15:01', 'Игорь');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `breakdown`
--
ALTER TABLE `breakdown`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tablename`
--
ALTER TABLE `tablename`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testdrive`
--
ALTER TABLE `testdrive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `breakdown`
--
ALTER TABLE `breakdown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `order1`
--
ALTER TABLE `order1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `reason`
--
ALTER TABLE `reason`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `tablename`
--
ALTER TABLE `tablename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `testdrive`
--
ALTER TABLE `testdrive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
