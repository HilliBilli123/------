-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2022 г., 18:49
-- Версия сервера: 10.3.29-MariaDB
-- Версия PHP: 7.1.33

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
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harackterId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Машины';

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `name`, `yearRelease`, `new`, `classId`, `price`, `imagePath`, `harackterId`) VALUES
(1, 'Seltos', '2020', '0', '5', '7990000', 'resurses/seltos.png', 1),
(2, 'K5', '2022', '1', '3', '7990000', 'resurses/K5.png', 1),
(3, 'Cerato', '2022', '1', '3', '7990000', 'resurses/cerato.png', 1),
(4, 'Rio X', '2021', '1', '2', '79000000', 'resurses/rioX.png', 1),
(5, 'Picanto', '2020', '0', '1', '79000000', 'resurses/picanto.png', 3),
(6, 'Soul', '2019', '0', '2', '79000000', 'resurses/soul.png', 1),
(7, 'Rio', '2020', '0', '2', '79000000', 'resurses/rio.png', 1),
(8, 'Sportage', '2021', '1', '5', '79000000', 'resurses/sportage.png', 2),
(9, 'Sorento', '2021', '1', '5', '790000000', 'resurses/sorento.png', 2);

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
(1, 'Эконом', 1000),
(2, 'Комфорт', 0),
(3, 'Комфорт +', 0),
(4, 'Бизнес', 0),
(5, 'Кроссовер', 0);

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
-- Структура таблицы `detailed`
--

CREATE TABLE `detailed` (
  `id` int(11) NOT NULL,
  `carId` int(11) DEFAULT NULL,
  `titleImg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior` varchar(700) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interiorImg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security` varchar(700) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `securityImg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine` varchar(700) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engineImg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `detailed`
--

INSERT INTO `detailed` (`id`, `carId`, `titleImg`, `interior`, `interiorImg`, `security`, `securityImg`, `engine`, `engineImg`, `img1`, `img2`, `img3`) VALUES
(1, 1, 'resurses/titleImg1.jpg', 'Бақылау тақтасының дисплейлері сіздің көру сызығында болу үшін аздап бұрылады. Бірақ Селтос сені ғана ойламайды. Көліктің интерьері мен функционалдық шешімдері мұқият ойластырылған, осылайша сапар серіктері үшін де ыңғайлы және қызықты болады.', 'resurses/interior1.jpg', 'Seltos корпусы, сондай-ақ ауыр жүк көтергіш шассиі жоғары беріктігі бар AHSS болатын кеңінен қолдану арқылы жасалған, бұл тазартылған өңдеу сезімін және жағымды динамикасын арттырады, бұл ретте сіз және сіздің серіктестер жақсы қорғалған.', 'resurses/security1.png', 'Kia Seltos-тің жоғары өнімді қозғалтқыштарының арқасында сіз динамика мен басқару мүмкіндігінің рахатынан бас тартпай, отынды үнемдей аласыз.', 'resurses/engine.jpg', NULL, NULL, NULL),
(2, 2, 'resurses/titleImg2.jpg', 'Kia K5 Kia автомобиль дизайнының жаңа дәуірін ашады. Бұл инновациялық седан динамизм мен жайлылықты батыл және сенімді профильмен үйлестіреді. Оның талғампаздығы бөлшектерге мұқият назар аударудан көрінеді.', 'resurses/Interior2.jpg', 'Жолаушыларды қорғау және соқтығысқан жағдайда жарақат алу қаупін азайту үшін K5 жүргізуші мен жолаушыға арналған екі алдыңғы және екі бүйірлік қауіпсіздік жастықтарымен, сондай-ақ екі жағында екі толық ұзындықтағы перделік қауіпсіздік жастықтарымен жабдықталған.', 'resurses/security2.png', 'Жаңа Kia K5-тегі қуат берілістері таңқаларлық тиімді және қуатты. Жаңа 2,5 литрлік қозғалтқышпен Kia K5 рульінде нағыз ләззат алыңыз. Керемет динамика мен отын үнемдеу үшін 8 жылдамдықты автоматты беріліс қорабымен біріктірілген GDI.', 'resurses/engine.jpg', NULL, NULL, NULL),
(3, 3, 'resurses/titleImg3.jpg', 'Cerato бақылау тақтасы тегіс көрінеді\r\nжәне дизайнның арқасында премиум, онда артық ештеңе жоқ. Шешімдердің талғампаздығы, мультимедиялық жүйенің бақылау тақтасында және дисплейінде драйверді хабардар етудің жақсы ойластырылған алгоритмі. Фиништегі металл екпін береді\r\nспорттық, бірақ талғампаз көрініс,\r\nжәне ағынды сызықтар турбина тәрізді желдеткіштердің біркелкі дизайнын толықтырады.', 'resurses/Interior3.jpg', 'Drive Wise – қауіпсіздікті арттыра отырып және күнделікті жүргізудің жалықтырмайтын тапсырмаларын шеше отырып, көлік жүргізуден ләззат алуға бағытталған Kia компаниясының ADAS (Advanced Driver Assistance System) технологиялар жинағы. Жетілдірілген сенсорлар мен деректерді өңдеу технологиялары көлік жүргізуді мүмкіндігінше қауіпсіз, жеңіл және тиімді етуге көмектеседі.', 'resurses/security3.png', 'Бензинді қозғалтқыштардың жарқын динамикасынан рахат алыңыз - 1,6 литрлік және қуатты 2,0 литрлік. Қозғалтқыштар қос ауыспалы клапанның уақыт жүйесімен (D-CVVT) және заманауи электронды басқарылатын отын бүрку жүйесімен жабдықталған.', 'resurses/engine.jpg', NULL, NULL, NULL),
(4, 4, 'resurses/titleImg4.jpg', 'Жылтыр, бірақ ыңғайлы, эргономикалық түрде орналастырылған жылтыр хром қабаты бар ауысу тұтқасы - бұл таңқаларлық, бірақ жоғары функционалды дизайн.', 'resurses/interior4.jpeg', 'Электрондық тұрақтылықты бақылау (ESC)\r\nЖүйе сырғанау қаупі болған жағдайда доңғалақтардың бірін автоматты түрде тежеу арқылы мүмкін сырғанау жағдайында қозғалыс траекториясын сақтауға көмектеседі.\r\n', 'resurses/security4.jpeg', 'Заманауи қозғалтқыштар, беріліс қорабы мен суспензия жеңіл жүрісті адамдарға арналған сияқты. Кез келген жолда кез келген сапарда сіз керемет динамика мен жайлылықты бағалайтын боласыз. Жаңартылған Kia Rio X сізді жиі саяхаттағыңыз келеді.', 'resurses/engine.jpg', NULL, NULL, NULL),
(5, 5, 'resurses/titleImg5.jpg', 'Стильді және жарқын, Kia Picanto энергияға және таңғажайып технологияға толы: жайлылық, қауіпсіздік және коммуникация салаларындағы жабдықтың байлығы автомобильдің жас мінезі мен жетілген жүргізу ләззатын біріктіреді.', 'resurses/interior5.jpeg', 'Picanto белсенді қауіпсіздік жүйелері кез келген жағдайда өзіңізді сенімді сезінуге мүмкіндік береді. Тығыз тұрақ орындарына қысу керек пе немесе соқтығысуды болдырмау керек пе, электронды жүйелер қауіпсіз маневр жасауға көмектеседі.', 'resurses/security5.jpeg', 'Picanto қозғалтқыштары сенімді, тиімді және қалалық циклге тамаша бейімделген.', 'resurses/engine.jpg', NULL, NULL, NULL),
(6, 6, 'resurses/titleImg6.jpg', 'Рульге отырған бойда сіз жаңа Kia Soul материалдарының кеңдігі мен сапасын бірден бағалайсыз. Реттеудің кең ауқымы, артқы қатардағы аяққа арналған орын, барлық жолаушылар үшін бүйірлік тірегі бар ыңғайлы орындықтар - барлығы кез келген сапарда жайлылық үшін жасалған. Бақылау тақтасының эргономикасы ең ыңғайлы басқаруды қамтамасыз етуге арналған.', 'resurses/interior6.jpg', 'Көлік жүргізуден ләззат алу үшін жан тыныштығы қажет. Сондықтан жаңа Kia Soul инновациялық жүйелер мен озық технологиялармен жабдықталған, бұл ең жоғары көлік жүргізу жайлылығы мен қауіпсіздігіне кепілдік береді.', 'resurses/security6.jpg', 'Kia Soul сізді ең ыңғайлы жүргізу үшін жаңа технологияларды пайдаланатын қозғалтқыштардың сапасымен таң қалдырады. Оны қаланы аралағанда бірден сезінесіз.', 'resurses/engine.jpg', NULL, NULL, NULL),
(7, 7, 'resurses/titleImg7.jpg', 'Kia Rio интерьері талғампаз және өте функционалды. Көлікте спорттық екпін сезіледі. Мұнда интуитивті басқару элементтері жоғары сапалы материалдармен біріктірілген. Kia Rio жайлылықты, сенімділікті және жақсы көңіл-күйді қамтамасыз етеді.', 'resurses/interior7.jpeg', 'VSM жүйесі тежеу күштерін баяулау траекториядан ауытқусыз болатындай етіп таратады және тежеу кезінде дөңгелектердің құлыпталуын болдырмайды.', 'resurses/security7.jpeg', 'Kia Rio сіздің жүргізу мәнеріңізге бейімделеді. Ең әдемі, қызықты бағытты және дұрыс компанияны таңдаңыз. Біздің техникалық сипаттамаларымызға сай жасалған қозғалтқыштар мен беріліс қорабы сіз күткен өнімділікті береді және кез келген саяхатқа толқу әкеледі. Кішкентай корпус - газды басу үшін.', 'resurses/engine.jpg', NULL, NULL, NULL),
(8, 8, 'resurses/titleImg8.jpg', 'Sportage интерьері жоғары сапаны жүргізушіге бағытталған дизайнмен үйлестіреді. Эстетика мен эргономика симбиозы барлық басқару элементтерін интуитивті және дәл табуға мүмкіндік береді. Салондағы ең таңғаларлық элементтердің бірі - мультимедиа саласындағы соңғы жетістіктерге қол жеткізуді қамтамасыз ететін қисық панорамалық біріктірілген дисплей.', 'resurses/interior8.jpg', 'VSM жүйесі тежеу күштерін баяулау траекториядан ауытқусыз болатындай етіп таратады және тежеу кезінде дөңгелектердің құлыпталуын болдырмайды.', 'resurses/security7.jpeg', 'Sportage сізді ең ыңғайлы жүргізу үшін жаңа технологияларды пайдаланатын қозғалтқыштардың сапасымен таң қалдырады. Оны қаланы аралағанда бірден сезінесіз.', 'resurses/engine.jpg', NULL, NULL, NULL),
(9, 9, 'resurses/titleImg9.jpg', 'Жаңа Kia Sorento интерьеріндегі күрделі шешімдер мүсіндік рельефпен және тегіс сызықтармен көз тартады. Навигация экраны, электронды аспаптар тақтасы, көп функциялы руль дөңгелегі және климаттық бақылау блогы жүргізушінің айналасында бірегей орта жасайды, бұл көлік жүргізуді қызықты және қызықты уақытты өткізуге мүмкіндік береді.', 'resurses/interior9.jpeg', 'Жаңа технологияны пайдалана отырып, жаңа Kia Sorento сізді жолдағы жағдайдан хабардар етеді және мүмкін болатын кедергілер туралы алдын ала ескертеді. Drive Wise интеллектуалды қауіпсіздік және жүргізушіге көмек көрсету жүйелері соқтығыстың алдын алуға және сізді және басқа жол қозғалысына қатысушылардың қауіпсіздігін сақтауға көмектесетін сәтте араласады.', 'resurses/security9.jpeg', 'Шапшаң және жүргізуге жауап беретін жаңа Kia Sorento қуатты және отын үнемдейтін қозғалтқыштардың таңдауын ұсынады.', 'resurses/engine.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `harackter`
--

CREATE TABLE `harackter` (
  `id` int(11) NOT NULL,
  `engCap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuelType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeDrive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engPower` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gearboxType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberGears` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `harackter`
--

INSERT INTO `harackter` (`id`, `engCap`, `fuelType`, `typeDrive`, `engPower`, `gearboxType`, `numberGears`) VALUES
(1, '1.6', 'Бензин', 'Передний', '123 л.с.', 'Автомат', '6 АТ'),
(2, '2.5', 'Бензин', 'Полный', '179 л.с.', 'Автомат', '6 АТ'),
(3, '1.2', 'Бензин', 'Передний', '84 л.с.', 'Автомат', '6 АТ');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fioClient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numClient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `orders` (`id`, `fioClient`, `numClient`, `carId`, `year`, `clasessesId`, `components`, `price`, `date`, `color`) VALUES
(6, 'Bagi', '', 'Rio', '2018', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-24', 'Белый'),
(7, '123123', '', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(8, '123123', '', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(9, '123123', '', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(10, '123123', '', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(11, '123123', '', 'Rio', '', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(12, '123123', '', 'Rio', '2018', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(13, '123123', '', 'Rio', '2018', 'Комфорт', 'Магнитола,Электропакет', '555', '2022-04-25', 'Белый'),
(14, 'Bagi', '87475608836', 'Seltos', NULL, 'Эконом', NULL, '555', '2022-04-30', NULL),
(15, 'Bagi', '87475608836', 'Seltos', NULL, 'Эконом', NULL, '0', '2022-04-30', NULL);

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
(6, 'admin');

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
  `numClient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `automobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fioMechanic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateEnd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `repair`
--

INSERT INTO `repair` (`id`, `date`, `fioClient`, `numClient`, `automobile`, `classId`, `fioMechanic`, `cause`, `dateEnd`) VALUES
(1, '2022-04-24', 'Bagi', NULL, 'Kia', 'Комфорт', 'Алексей', 'Не исправный двигатель', '2022-04-25'),
(2, '2022-04-30', 'Bagi', '87475608836', 'Kia', '', NULL, 'Не исправный двигатель', NULL),
(3, '2022-04-30', 'Bagi', '87475608836', 'Kia', NULL, NULL, 'Не исправный инжектор', NULL);

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
(6, 'Adimn', 'Adimn', 'Adimn', 'Adimn', 6, 'Admin', 'Admin');

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
(22, 'repair', 'Жондеу', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `testdrive`
--

CREATE TABLE `testdrive` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fioClient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numClient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `automobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateTest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeBefore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeAfter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsible` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testdrive`
--

INSERT INTO `testdrive` (`id`, `date`, `fioClient`, `numClient`, `automobile`, `classId`, `dateTest`, `timeBefore`, `timeAfter`, `responsible`) VALUES
(1, '2022-04-24', 'Bagi', NULL, '1', 'Комфорт', '2022-04-13', '15:59', '15:01', 'Игорь'),
(2, '2022-04-30', 'Bagi', '87475608836', 'K5', 'Комфорт', '2022-04-30', NULL, NULL, NULL);

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
-- Индексы таблицы `detailed`
--
ALTER TABLE `detailed`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `harackter`
--
ALTER TABLE `harackter`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT для таблицы `detailed`
--
ALTER TABLE `detailed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `harackter`
--
ALTER TABLE `harackter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `tablename`
--
ALTER TABLE `tablename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `testdrive`
--
ALTER TABLE `testdrive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
