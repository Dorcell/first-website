-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 19 2018 г., 20:34
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `exam`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `link`, `name`) VALUES
(0, 'Z:/home/examination.ru/www/contact/photos/', 'cruela.jpeg'),
(0, 'Z:/home/examination.ru/www/contact/photos/', 'malificenta.jpeg'),
(0, 'Z:/home/examination.ru/www/contact/photos/', 'queen.jpeg'),
(0, 'Z:/home/examination.ru/www/contact/photos/', 'ursula.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `logos`
--

CREATE TABLE IF NOT EXISTS `logos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `logos`
--

INSERT INTO `logos` (`id`, `link`, `name`) VALUES
(8, 'Z:/home/examination.ru/www/filesAdd/pictures/', 'green.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `menuitems`
--

CREATE TABLE IF NOT EXISTS `menuitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `menuitems`
--

INSERT INTO `menuitems` (`id`, `item`, `link`) VALUES
(1, 'Главная', '../index.php'),
(2, 'Редактор', '../editMenu/redactor.php'),
(3, 'Контакты', '../contact/contacts.php'),
(4, 'Something', '../somewhere/something.php');

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `link`, `name`) VALUES
(1, 'Z:/home/examination.ru/www/filesAdd/pictures/', 'red.jpg'),
(2, 'Z:/home/examination.ru/www/filesAdd/pictures/', 'Blueberry.jpg'),
(3, 'Z:/home/examination.ru/www/filesAdd/pictures/', 'green.jpg'),
(4, 'Z:/home/examination.ru/www/filesAdd/pictures/', 'yellow.jpg'),
(5, 'Z:/home/examination.ru/www/filesAdd/pictures/', 'purple.jpg'),
(6, 'Z:/home/examination.ru/www/filesAdd/pictures/', '1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `textfiles`
--

CREATE TABLE IF NOT EXISTS `textfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `textfiles`
--

INSERT INTO `textfiles` (`id`, `file`) VALUES
(1, 0x727864767466626e6d6c6e6f3b0d0a),
(2, 0x696e7365727420696e746f206e6f7465730d0a28637265617465642c207469746c652c2061727469636c65290d0a76616c756573202831322f32372f313939352c202748656c6c6f272c2027492077617320626f726e27293b0d0a696e7365727420696e746f206e6f7465730d0a28637265617465642c207469746c652c2061727469636c65290d0a76616c756573202830392f30312f323030332c202748656c6c6f20616761696e272c20274920616d20676f696e6720746f207363686f6f6c27293b0d0a696e7365727420696e746f206e6f7465730d0a28637265617465642c207469746c652c2061727469636c65290d0a76616c756573202830392f30322f323031342c202749606d206164756c74206e6f77272c202746697273742064617920696e2074686520756e697665727369747927293b0d0a696e7365727420696e746f20636f6d6d656e74730d0a28637265617465642c20617574686f722c636f6d6d656e742c206172745f6964290d0a76616c756573202831322f32372f313939352c20274d756d6d79272c202748692c2073776565746965272c2031293b0d0a696e7365727420696e746f20636f6d6d656e74730d0a28637265617465642c20617574686f722c636f6d6d656e742c206172745f6964290d0a76616c756573202831322f30312f313939372c20274461646479272c20274279652d6279652c2066616d696c79272c2031293b0d0a696e7365727420696e746f20636f6d6d656e74730d0a28637265617465642c20617574686f722c636f6d6d656e742c206172745f6964290d0a76616c756573202830392f30312f323030332c2027416e6f6e272c202747657420726561647920666f72207468652068656c6c272c2032290d0a696e7365727420696e746f20636f6d6d656e74730d0a28637265617465642c20617574686f722c636f6d6d656e742c206172745f6964290d0a76616c756573202830392f30352f323031352c202744756d70794772756d7079272c2027446f6e607420796f75206665656c20736f20736d61727420616e796d6f72653f272c203329),
(3, 0xd0bcd0b8d0bbd0bbd0b8d0bed0bdd0b5d18020d0b8d0b720d182d180d183d189d0bed0b10d0ad0a1d0bad180d18bd182d18bd0b520d184d0b8d0b3d183d180d18b0d0ad09cd0bed0b0d0bdd0b00d0a3230303120d0bad0bed181d0bcd0b8d187d0b5d181d0bad0b0d18f20d0bed0b4d0b8d181d181d0b5d18f0d0ad0b6d0b8d0b7d0bdd18c20d0bfd0b80d0ad0b3d180d0b0d0b2d0b8d182d0b0d186d0b8d18f0d0ad0bed181d0bdd0bed0b2d0bdd0bed0b920d0b8d0bdd181d182d0b8d0bdd0bad1820d0ad0bbd0b8d186d0be20d181d0be20d188d180d0b0d0bcd0bed0bc0d0ad18dd184d184d0b5d0bad18220d0b1d0b0d0b1d0bed187d0bad0b80d0ad0b7d0b2d0b5d180d0bed0bfd0bed0b90d0ad181d182d180d0b8d0bdd0b3d0b5d1800d0ad0b7d0bed0b4d0b8d0b0d0ba0d0a),
(4, 0x626c61626c61626c61626c61626c61626c61626c61626c61626c61626c61626c61626c61626c61626c61626c61);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
