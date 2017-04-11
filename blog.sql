-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 11 2017 г., 18:02
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `citata` text NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `citata`, `date`, `text`, `content`) VALUES
(1, 'Первая статья', 'Александр Лебедев', 'Наконец сделал, можно проверить', '2017-04-10', ' файле где у вас админка (как я понял это файл admin_main.php) создаём форму:', 'если вы не встречались PhP + MySQL то копать вам нужно в гугле. потому что самый лучший способ это хранение новостей в базе имхо. в админ панель делаете форму на запись новости в базу, а на общедоступной странице делаете вывод новостей. с помощью html, css, js и прочее уже оформляете на сколько красиво и где будет вывод новостей. вот вам лёгкий пример.\r\nв файле где у вас админка (как я понял это файл admin_main.php) создаём форму:'),
(2, 'Новостной раздел', 'Пушкин', 'Лукоморье дуб с рубили', '2017-04-10', 'Дуб на поленья, что делать?', 'Зачем твой дивный карандаш Рисует мой арапский профиль? Хоть ты векам его предашь, Его освищет Мефистофель. Рисуй Олениной черты. В жару сердечных вдохновений, Лишь юности и красоты Поклонником быть должен гений'),
(3, 'Новая статья для меня', 'Максё', 'Цитата кунфуция', '2017-04-18', 'Ну типа апец', 'многа букав');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
