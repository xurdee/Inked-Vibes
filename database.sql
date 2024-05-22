-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 09:16 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(11, 'babars'),
(12, 'zohaib'),
(16, 'hellos');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES
(1, 1012456788, 'babar', 'babar786', 4, 'jeljda@gmailc.om', 'jlsdjf.com', 'unknown-picture.png', 'this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. this is demo comment. ', 'approve'),
(10, 1454232171, 'saleem', 'user', 3, 'lasjfads@gmail.com', 'jflajadsflfdasj.com', 'unknown-picture.png', 'pakistan ', 'approve'),
(11, 1454233069, 'Muhammad Babar,', 'babar786', 3, 'babar786@gmail.com', '', 'slider-img2.jpg', 'great work', 'approve'),
(12, 1454451788, 'lldfsjadsfd', 'user', 15, 'ljadslfjaslasfj', 'jasdlfjaldkjdf', 'unknown-picture.png', 'helolo', 'approve'),
(13, 1454453211, 'ildjladfjadl', 'user', 1, 'jasdlfjadljf', 'ldjlfajf', 'unknown-picture.png', 'ldasfjladjfdlkfdasj', 'approve'),
(14, 1454453241, 'Muhammad Babar,', 'babar786', 1, 'babar786@gmail.com', '', 'slider-img2.jpg', 'good', 'approve'),
(15, 1454454437, 'Muhammad Babar', 'babar786', 1, 'babar786@gmail.com', '', 'slider-img2.jpg', 'hello', 'pending'),
(16, 1454499324, 'asdjlfjdsal', 'user', 15, 'kjsdaljfdafslkj', 'ljdfljladkjf', 'unknown-picture.png', 'dlsfjldasjflda', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`) VALUES
(31, 'cobweb_weaving_macro_136408_1280x720.jpg'),
(32, 'cocoa_marshmallow_humor_136294_1280x720.jpg'),
(33, 'coffee_cappuccino_cup_136699_1280x720.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_data` text NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `categories`, `tags`, `post_data`, `views`, `status`) VALUES
(1, 1457895484, 'Here are some of my Visiting Cards list. hello gee', 'babar786', 'profile-black.jpg', 'Babar786 Wallpaper.jpg', 'hellos', 'jadslfjadlj', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>babar Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/visiting Card of nadeem.jpg\" alt=\"visiting Card of nadeem.jpg\" width=\"518\" height=\"296\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/usman visiting cards.jpg\" alt=\"usman visiting cards.jpg\" width=\"457\" height=\"259\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/sohail card.jpg\" alt=\"sohail card.jpg\" width=\"349\" height=\"200\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/Facebook-Page-Cover-photo.png\" alt=\"Facebook-Page-Cover-photo.png\" width=\"524\" height=\"194\" /></p>\r\n</body>\r\n</html>', 55, 'publish'),
(11, 1454400657, 'Here are some of my Visiting Cards list. hello gee', 'babar786', 'slider-img2.jpg', 'Babar786 Wallpaper.jpg', 'hellos', 'jadslfjadlj', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>babar Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/visiting Card of nadeem.jpg\" alt=\"visiting Card of nadeem.jpg\" width=\"518\" height=\"296\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/usman visiting cards.jpg\" alt=\"usman visiting cards.jpg\" width=\"457\" height=\"259\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/sohail card.jpg\" alt=\"sohail card.jpg\" width=\"349\" height=\"200\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/Facebook-Page-Cover-photo.png\" alt=\"Facebook-Page-Cover-photo.png\" width=\"524\" height=\"194\" /></p>\r\n</body>\r\n</html>', 6, 'publish'),
(12, 1454401102, 'Here are some of my Visiting Cards list. hello geejjjj', 'babar786', 'slider-img2.jpg', 'Babar786 Wallpaper.jpg', 'hellos', 'jadslfjadlj', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>babar Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/visiting Card of nadeem.jpg\" alt=\"visiting Card of nadeem.jpg\" width=\"518\" height=\"296\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/usman visiting cards.jpg\" alt=\"usman visiting cards.jpg\" width=\"457\" height=\"259\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/sohail card.jpg\" alt=\"sohail card.jpg\" width=\"349\" height=\"200\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/Facebook-Page-Cover-photo.png\" alt=\"Facebook-Page-Cover-photo.png\" width=\"524\" height=\"194\" /></p>\r\n</body>\r\n</html>', 1, 'publish'),
(13, 1454403833, 'Here are some of my Visiting Cards list. hello gee', 'babar786', 'slider-img2.jpg', 'Babar786 Wallpaper.jpg', 'hellos', 'jadslfjadlj', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>babar Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/visiting Card of nadeem.jpg\" alt=\"visiting Card of nadeem.jpg\" width=\"518\" height=\"296\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/usman visiting cards.jpg\" alt=\"usman visiting cards.jpg\" width=\"457\" height=\"259\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/sohail card.jpg\" alt=\"sohail card.jpg\" width=\"349\" height=\"200\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/Facebook-Page-Cover-photo.png\" alt=\"Facebook-Page-Cover-photo.png\" width=\"524\" height=\"194\" /></p>\r\n</body>\r\n</html>', 1, 'publish'),
(14, 1454403933, 'Here are some of my Visiting Cards list. hello gee', 'babar786', 'slider-img2.jpg', 'Facebook-Page-Cover-photo.png', 'hellos', 'jadslfjadlj', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>babar Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/visiting Card of nadeem.jpg\" alt=\"visiting Card of nadeem.jpg\" width=\"518\" height=\"296\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/usman visiting cards.jpg\" alt=\"usman visiting cards.jpg\" width=\"457\" height=\"259\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/sohail card.jpg\" alt=\"sohail card.jpg\" width=\"349\" height=\"200\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/Facebook-Page-Cover-photo.png\" alt=\"Facebook-Page-Cover-photo.png\" width=\"524\" height=\"194\" /></p>\r\n</body>\r\n</html>', 0, 'publish'),
(15, 1454405440, 'My new post', 'babar786', 'slider-img2.jpg', 'sohail card.jpg', 'babars', 'babar', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>Muhammad BAbar</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/visiting Card of nadeem.jpg\" alt=\"visiting Card of nadeem.jpg\" width=\"518\" height=\"296\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/usman visiting cards.jpg\" alt=\"usman visiting cards.jpg\" width=\"457\" height=\"259\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/sohail card.jpg\" alt=\"sohail card.jpg\" width=\"349\" height=\"200\" /></p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"media/Facebook-Page-Cover-photo.png\" alt=\"Facebook-Page-Cover-photo.png\" width=\"524\" height=\"194\" /></p>\r\n</body>\r\n</html>', 4, 'publish'),
(16, 1565270797, 'Deadpool Is Every Marvel Fans Love.', 'adityavogue', 'IMG_20190421_184011.jpg', '4k-wallpaper-adorable-blur-1148998.jpg', 'babars', 'sdjwkjdhej,dswdjwdne,wsdhdwmdbdwjd,wididjdjd', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><em><strong>Deadpool</strong></em> is a 2016 American <a title=\"Superhero film\" href=\"https://en.wikipedia.org/wiki/Superhero_film\">superhero film</a> based on the <a title=\"Marvel Comics\" href=\"https://en.wikipedia.org/wiki/Marvel_Comics\">Marvel Comics</a> character <a title=\"Deadpool\" href=\"https://en.wikipedia.org/wiki/Deadpool\">of the same name</a>. Distributed by <a title=\"20th Century Fox\" href=\"https://en.wikipedia.org/wiki/20th_Century_Fox\">20th Century Fox</a>, it is the eighth film in the <a title=\"X-Men (film series)\" href=\"https://en.wikipedia.org/wiki/X-Men_(film_series)\"><em>X-Men</em> film series</a> and the first standalone <em>Deadpool</em> film. Directed by <a title=\"Tim Miller (director)\" href=\"https://en.wikipedia.org/wiki/Tim_Miller_(director)\">Tim Miller</a> from a screenplay by <a title=\"Rhett Reese\" href=\"https://en.wikipedia.org/wiki/Rhett_Reese\">Rhett Reese</a> and <a title=\"Paul Wernick\" href=\"https://en.wikipedia.org/wiki/Paul_Wernick\">Paul Wernick</a>, the film stars <a title=\"Ryan Reynolds\" href=\"https://en.wikipedia.org/wiki/Ryan_Reynolds\">Ryan Reynolds</a> as Wade Wilson / Deadpool alongside <a title=\"Morena Baccarin\" href=\"https://en.wikipedia.org/wiki/Morena_Baccarin\">Morena Baccarin</a>, <a title=\"Ed Skrein\" href=\"https://en.wikipedia.org/wiki/Ed_Skrein\">Ed Skrein</a>, <a class=\"mw-redirect\" title=\"T. J. Miller\" href=\"https://en.wikipedia.org/wiki/T._J._Miller\">T. J. Miller</a>, <a title=\"Gina Carano\" href=\"https://en.wikipedia.org/wiki/Gina_Carano\">Gina Carano</a> and <a title=\"Brianna Hildebrand\" href=\"https://en.wikipedia.org/wiki/Brianna_Hildebrand\">Brianna Hildebrand</a>. In the film, Wilson&mdash;as the <a title=\"Antihero\" href=\"https://en.wikipedia.org/wiki/Antihero\">antihero</a> Deadpool&mdash;hunts down the man who gave him <a title=\"Mutant (Marvel Comics)\" href=\"https://en.wikipedia.org/wiki/Mutant_(Marvel_Comics)\">mutant</a> abilities and caused his scarred physical appearance.</p>\r\n<p><img class=\"img-responsive\" src=\"media/coffee_cappuccino_cup_136699_1280x720.jpg\" alt=\"coffee_cappuccino_cup_136699_1280x720.jpg\" width=\"831\" height=\"467\" /></p>\r\n<p>Development of a Deadpool film starring Reynolds began in February 2004, before he went on to play the character in <em><a title=\"X-Men Origins: Wolverine\" href=\"https://en.wikipedia.org/wiki/X-Men_Origins:_Wolverine\">X-Men Origins: Wolverine</a></em> in 2009. Reese and Wernick were hired for a spinoff in 2010. They worked with Reynolds to adapt the character more faithfully (including his <a title=\"Fourth wall\" href=\"https://en.wikipedia.org/wiki/Fourth_wall\">fourth wall</a> breaking) after the portrayal in <em>Wolverine</em> was criticized for not doing so. Miller was hired in 2011 marking his <a title=\"List of directorial debuts\" href=\"https://en.wikipedia.org/wiki/List_of_directorial_debuts\">directorial debut</a>. An enthusiastic response to leaked test footage he created with Reynolds led to a green-light from Fox in 2014. Additional casting began in early 2015, and filming took place in <a title=\"Vancouver\" href=\"https://en.wikipedia.org/wiki/Vancouver\">Vancouver</a>, Canada, from March to May of that year. Several vendors provided visual effects for the film, ranging from the addition of blood and gore to the creation of the <a title=\"Computer-generated imagery\" href=\"https://en.wikipedia.org/wiki/Computer-generated_imagery\">CG</a> character <a title=\"Colossus (comics)\" href=\"https://en.wikipedia.org/wiki/Colossus_(comics)\">Colossus</a>.</p>\r\n<p><em>Deadpool</em> was released in the United States on February 12, 2016, after an <a title=\"Marketing for Deadpool (film)\" href=\"https://en.wikipedia.org/wiki/Marketing_for_Deadpool_(film)\">unconventional marketing campaign</a>. The film achieved both financial and critical success. It earned over $783&nbsp;million against a $58&nbsp;million budget, breaking numerous records: it became the highest-grossing <a title=\"Motion Picture Association of America film rating system\" href=\"https://en.wikipedia.org/wiki/Motion_Picture_Association_of_America_film_rating_system\">R-rated</a> film, the highest-grossing <em>X-Men</em> film, and the <a title=\"2016 in film\" href=\"https://en.wikipedia.org/wiki/2016_in_film\">ninth-highest-grossing 2016 film</a>. Critics praised Reynolds\' performance, the film\'s style and faithfulness to the comics, and its action sequences. Some detractors criticized the plot as formulaic as well as the sheer number of jokes in the film. It also <a title=\"List of accolades received by Deadpool (film)\" href=\"https://en.wikipedia.org/wiki/List_of_accolades_received_by_Deadpool_(film)\">received many awards and nominations</a>, including two <a title=\"Critics\' Choice Movie Awards\" href=\"https://en.wikipedia.org/wiki/Critics%27_Choice_Movie_Awards\">Critics\' Choice Awards</a> and two <a class=\"mw-redirect\" title=\"Golden Globe Award\" href=\"https://en.wikipedia.org/wiki/Golden_Globe_Award\">Golden Globe</a> nominations. A sequel, <em><a title=\"Deadpool 2\" href=\"https://en.wikipedia.org/wiki/Deadpool_2\">Deadpool 2</a></em>, was released on May 18, 2018.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>zzaxxwdvcxxavbxsmcxvbnmxvnmxvbnxzab cvxshx v vsdccdvvx whdvhcgdy</p>\r\n</body>\r\n</html>', 74, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `quote_of_the_day`
--

CREATE TABLE `quote_of_the_day` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `your_quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote_of_the_day`
--

INSERT INTO `quote_of_the_day` (`id`, `date`, `your_quote`) VALUES
(1, '0000-00-00', 'hfkjvbkfvsbvdskckcbsvcj cskvnc '),
(2, '0000-00-00', 'afdvdvfrvcvfe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `salt` varchar(255) NOT NULL DEFAULT '$2y$10$quickbrownfoxjumpsover'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`, `details`, `salt`) VALUES
(15, 1565287849, 'Atul', 'Singh', 'adityavogue', 'atuladityasingh001@gmail.com', 'IMG_20190421_184011.jpg', '$2y$10$quickbrownfoxjumpsoveeGTIYVaty2lbrLZCXixNGXguJeDTgY9S', 'admin', '', '$2y$10$quickbrownfoxjumpsover'),
(16, 1565287908, 'Aditya', 'Chauhan', 'atulrogue', 'atulpre113@gmail.com', '533941.jpg', '$2y$10$quickbrownfoxjumpsoveeYbqGFb8yDFmW91t5faUmLT/KeRF9ZRK', 'author', '', '$2y$10$quickbrownfoxjumpsover');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_of_the_day`
--
ALTER TABLE `quote_of_the_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quote_of_the_day`
--
ALTER TABLE `quote_of_the_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
