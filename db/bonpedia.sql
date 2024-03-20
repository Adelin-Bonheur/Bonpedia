-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 03:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonpedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_sys`
--

CREATE TABLE `app_sys` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(256) NOT NULL,
  `a_version` varchar(30) NOT NULL,
  `a_image` varchar(200) NOT NULL,
  `a_size` varchar(30) NOT NULL,
  `a_download` varchar(1000) NOT NULL,
  `a_rated` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_sys`
--

INSERT INTO `app_sys` (`a_id`, `a_name`, `a_version`, `a_image`, `a_size`, `a_download`, `a_rated`) VALUES
(16, 'Windows 10 Professional', 'V 1903', 'windows10-professional.jpg', '5 GB', 'https://drive.google.com/uc?id=1nTQBCvkq-3EY3qceU7u6NqFTHKVeqc3_&export=download', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `auto_comp`
--

CREATE TABLE `auto_comp` (
  `id` int(11) NOT NULL,
  `country` varchar(40) NOT NULL,
  `country_code` text NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto_comp`
--

INSERT INTO `auto_comp` (`id`, `country`, `country_code`, `city`) VALUES
(1, 'China', 'CN', 'Tange Zhen'),
(2, 'Sweden', 'SE', 'Lulea'),
(3, 'Indonesia', 'ID', 'Cilongkrangupsaka'),
(4, 'Afganstan', 'AF', 'Sang-e M?shah'),
(5, 'Macedonia', 'MK', 'Bel?ista'),
(6, 'Argentina', 'AR', 'Vikuna Macena'),
(7, 'Columbia', 'CO', 'San Diego'),
(8, 'Japan', 'JP', 'Aioi'),
(9, 'Serbia', 'RS', 'Orlovat'),
(10, 'Rwanda', 'RW', 'Kigali'),
(11, 'Burundi', 'BR', 'Bugarama'),
(12, 'Uganda', 'UG', 'Kampala'),
(13, 'Tanzania', 'TZ', 'Dodoma'),
(14, 'Kenya', 'KN', 'Nairobi'),
(15, 'South Sudan', 'SS', 'Juba'),
(16, 'DRC', 'RD', 'Bukavu'),
(17, 'Senegal', 'SG', 'Dakar'),
(18, 'Cameroon', 'CN', 'Yahoonde'),
(19, 'Zambia', 'ZA', 'Lusaka'),
(20, 'Ivory Cost', 'IC', 'Abidja'),
(21, 'Nigeria', 'NA', 'Lagos'),
(22, 'England', 'UK', 'London'),
(23, 'France', 'FR', 'Paris'),
(24, 'USA', 'US', 'California');

-- --------------------------------------------------------

--
-- Table structure for table `live_games`
--

CREATE TABLE `live_games` (
  `f_id` int(11) NOT NULL,
  `t_one` varchar(200) NOT NULL,
  `t_two` varchar(200) NOT NULL,
  `f_stream` varchar(1000) NOT NULL,
  `f_competition` varchar(200) NOT NULL,
  `kick_off` time NOT NULL,
  `m_view` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_games`
--

INSERT INTO `live_games` (`f_id`, `t_one`, `t_two`, `f_stream`, `f_competition`, `kick_off`, `m_view`) VALUES
(1, 'Borussia Dortmund', 'Shalke 04', 'https://www.youtube.com/embed/hlkHbBcWVzo', 'Germany Bundesliga', '15:30:00', 'yes'),
(2, 'RB Leipzig', 'Freiburg', 'https://www.youtube.com/embed/hlkHbBcWVzo', 'Germany Bundesliga', '15:30:00', 'yes'),
(3, 'Hoffenheim', 'Hertha BSC', 'https://www.youtube.com/embed/hlkHbBcWVzo', 'Germany Bundesliga', '15:30:00', 'yes'),
(4, 'Fortuna Düsseldorf', 'SC Paderborn 07', 'https://www.youtube.com/embed/hlkHbBcWVzo', 'Germany Bundesliga', '15:30:00', 'yes'),
(5, 'Augsburg', 'Wolfsburg', 'https://www.youtube.com/embed/hlkHbBcWVzo', 'Germany Bundesliga', '15:30:00', 'yes'),
(6, 'Eintracht Frankfurt', 'Borussia Mönchengladbach', 'https://www.youtube.com/embed/hlkHbBcWVzo', 'Germany Bundesliga', '18:30:00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(256) NOT NULL,
  `m_image` varchar(200) NOT NULL,
  `m_year` int(11) NOT NULL,
  `m_genre` varchar(256) NOT NULL,
  `other_genres` varchar(500) NOT NULL,
  `m_duration` varchar(30) NOT NULL,
  `m_size` varchar(30) NOT NULL,
  `m_download` varchar(1000) NOT NULL,
  `m_subs` varchar(1000) NOT NULL,
  `m_trailer` varchar(1000) NOT NULL,
  `how_old` varchar(11) NOT NULL,
  `top_rated` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `m_image`, `m_year`, `m_genre`, `other_genres`, `m_duration`, `m_size`, `m_download`, `m_subs`, `m_trailer`, `how_old`, `top_rated`) VALUES
(1, 'Avatar', 'Avatar.jpg', 2009, 'Action', 'Action, Adventure, Fantasy', '2h 42min', '2.51 GB', 'https://drive.google.com/uc?id=1h1UPRa91BruJliaoQYT_x0BkiPQLWdk7&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt0499549', 'https://www.youtube.com/embed/5PSNL1qE6VY', '#', '#'),
(2, 'Annabelle', 'Annabelle.jpg', 2014, 'Horror', 'Horror, Mystery, Thriller', '1h 39min', '758 MB', 'https://drive.google.com/uc?id=1nylXOGIWcpGLeqHvEdeH0ytSSnb8K2ah&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt3322940', 'https://www.youtube.com/embed/paFgQNPGlsg', '#', '#'),
(3, 'It', 'It.jpg', 2017, 'Horror', 'Horror', '2h 15min', '997.65 MB', 'https://drive.google.com/uc?id=1ycFd4pFNrpt8dc2x6W-Ufo-N6R--KXp7&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt1396484', 'https://www.youtube.com/embed/xKJmEC5ieOk', '#', '#'),
(4, 'Annabelle Creation', 'Annabelle Creation.jpg', 2017, 'Horror', 'Horror, Mystery, Thriller', '1h 49min', '801 MB', 'https://drive.google.com/uc?id=1yZyRriG9sFqyFh_aPYxr4JXJsYOwp6di&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt5140878', 'https://www.youtube.com/embed/EjZkJa6Z-SY', '#', '#'),
(5, 'Annabelle Comes Home', 'Annabelle Comes Home.jpg', 2019, 'Horror', 'Horror, Mystery, Thriller', '1h 46min', '942 MB', 'https://drive.google.com/uc?id=1XuPzKLtS_Lk9TPTaGJVbWF1KnQay2ZRG&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt8350360', 'https://www.youtube.com/embed/EMa-KFfatT0', '#', '#'),
(6, 'Angel Has Fallen', 'Angel Has Fallen.jpg', 2019, 'Action', 'Action, Thriller', '2h 1min', '1.88 GB', 'https://drive.google.com/uc?id=1DHSnHyDZ0bmblIL6XBfMO30Q9Tnb0jiv&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-542653', 'https://www.youtube.com/embed/l4AQchYSxwc', '#', '#'),
(7, 'Once Upon a Time in Hollywood', 'Once Upon a Time in Hollywood.jpg', 2019, 'Comedy', 'Comedy, Drama', '2h 41min', '1.4 GB', 'https://drive.google.com/uc?id=1-0gFrRgvCFxhwaKNq3G8QRtGb5zMwTl0&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt7131622', 'https://www.youtube.com/embed/ELeMaP8EPAA', '#', 'yes'),
(8, 'Toy Story 4', 'Toy Story 4.jpg', 2019, 'Animation', 'Animation, Adventure, Comedy', '1h 40min', '882 MB', 'https://drive.google.com/uc?id=1XuHgUWlrfkprfvtkRFfBfsX5o1T-PFLu&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt1979376', 'https://www.youtube.com/embed/Pl9JS8-gnWQ', '#', '#'),
(9, 'Fast and farious, Presents Hobbs and Shaw', 'Fast and farious Hobbs and Shaw.jpg', 2019, 'Action', 'Action, Adventure', '2h 17min', '1.19 GB', 'https://drive.google.com/uc?id=1BhRw8jkpfYmOo8ygwN_2z0TE5tP5Zo8-&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt6806448', 'https://www.youtube.com/embed/9SA7FaKxZVI', '#', '#'),
(10, 'Avengers: Endgame', 'Avengers Endgame.jpg', 2019, 'Action', 'Action, Adventure, Drama', '3h 1min', '1.43 GB', 'https://drive.google.com/uc?id=1kcLcfque13Zb6RDPF7_FxQlHBaXkDOYo&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt4154796', 'https://www.youtube.com/embed/TcMBFSGVi1c', '#', 'yes'),
(11, 'Joker', 'Joker.jpg', 2019, 'Crime', 'Crime, Drama, Thriller', '2h 2min', '1.07 GB', 'https://drive.google.com/uc?id=1YuiQ9LaXUSdUEt41HbNP1HnHkm6XCMVz&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt7286456', 'https://www.youtube.com/embed/zAGVQLHvwOY', '#', 'yes'),
(12, 'Rambo: Last Blood', 'Rombo Last Blood.jpg', 2019, 'Action', 'Action, Adventure, Thriller', '1h 29min', '1.57 GB', 'https://drive.google.com/uc?id=1c0AHHmD0cM8UqhuyNhPZVDGZ2grZr34r&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-34867', 'https://www.youtube.com/embed/YPuhNtG47M0', '#', '#'),
(14, 'It Chapter Two', 'It Chapter Two.jpg', 2019, 'Drama', 'Drama, Fantasy, Horror', '2h 49min', '1.47 GB', 'https://drive.google.com/uc?id=1ZzgWoxngTf5AbvqfSl7CkH0t2vUM_TE8&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt7349950', 'https://www.youtube.com/embed/xhJ5P7Up3jA', '#', '#'),
(15, 'Ad Astra', 'Ad Astra.jpg', 2019, 'Adventure', 'Adventure, Drama, Mystery', '2h 03min', '1.08 GB', 'https://drive.google.com/uc?id=1pTqSQHrivtunfQxSoRPzllRrekHivwNT&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt2935510', 'https://www.youtube.com/embed/t6g0dsQzfqY', '#', '#'),
(16, 'Isn\'t It Romantic', 'Isnt It Romantic.jpg', 2019, 'Comedy', 'Comedy, Fantasy, Romance', '1h 29min', '749 MB', 'https://drive.google.com/uc?id=18kTIom_CiN9_15YY8-N8cYGH3Or98zHC&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt2452244', 'https://www.youtube.com/embed/8ZwgoVmILQU', '#', '#'),
(17, 'Captain Marvel', 'Captain Marvel.jpg', 2019, 'Action', 'Action, Adventure, Sci-Fi', '2h 3min', '1.04 GB', 'https://drive.google.com/uc?id=1jKfX5jrvySWr6vUw56r3-YD12lyKiz1r&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt4154664', 'https://www.youtube.com/embed/Z1BCujX3pw8', '#', '#'),
(18, 'Portrait of a Lady on Fire', 'Portrait of a Lady on Fire.jpg', 2019, 'Drama', 'Drama, Romance', '2h 1min', '1.09 GB', 'https://drive.google.com/uc?id=1Lf5estlzAw3C68ThLkvMLoov339WGZLz&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-760063', 'https://www.youtube.com/embed/R-fQPTwma9o', '#', 'yes'),
(19, 'The Lion King', 'The Lion King.jpg', 2019, 'Animation', 'Animation, Adventure, Drama', '1h 58min', '1.04 GB', 'https://drive.google.com/uc?id=15ktAW4DuBcJv0TCOsFoYCX0NmGIP9a0P', 'https://www.yifysubtitles.com/movie-imdb/tt6105098', 'https://www.youtube.com/embed/7TavVZMewpY', '#', '#'),
(20, 'John Wick: Chapter 3 - Parabellum', 'John Wick Chap 3.jpg', 2019, 'Action', 'Action, Crime, Thriller', '2h 11min', '1.13 GB', 'https://drive.google.com/uc?id=1wzOk-yohuLpImIGxLkXNxBtQ5UsdrZx7&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt6146586', 'https://www.youtube.com/embed/M7XM597XO94', '#', '#'),
(21, 'Spider-Man: Far from Home', 'Spiderman Far from home.jpg', 2019, 'Action', 'Action, Adventure, Sci-Fi', '2h 9min', '1.13 GB', 'https://drive.google.com/uc?id=1y4YtqrZQxu5GfnmVSasa8lCddTW94aQH&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt6320628', 'https://www.youtube.com/embed/Nt9L1jCKGnE', '#', '#'),
(22, 'Pokémon Detective Pikachu', 'Pokemon Detective.jpg', 2019, 'Action', 'Action, Adventure, Comedy', '1h 44min', '1.71 GB', 'https://drive.google.com/uc?id=1-M3hukwPgYcvmJJt-vFoGo2BqQSadt4r&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt5884052', 'https://www.youtube.com/embed/bILE5BEyhdo', '#', '#'),
(23, 'The Irishman', 'Irishman.jpg', 2019, 'Biography', 'Biography, Crime, Drama', '3h 29min', '1.79 GB', 'https://drive.google.com/uc?id=1MIWOQtI3b9-Opp2ljt41XJLy2Ae_uYwB&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt1302006', 'https://www.youtube.com/embed/WHXxVmeGQUc', '#', '#'),
(24, 'Marriage Story', 'Marriage Story.jpg', 2019, 'Comedy', 'Comedy, Drama, Romance', '2h 17min', '1.18 GB', 'https://drive.google.com/uc?id=1SBn_I7juhK9Zw7A5ycIzkodEyMTsd0yg&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt7653254', 'https://www.youtube.com/embed/BHi-a1n8t7M', '#', '#'),
(25, 'Parasite', 'Parasite.jpg', 2019, 'Comedy', 'Comedy, Drama, Thriller', '2h 12min', '1.15 GB', 'https://drive.google.com/uc?id=1Nk0GEvDWZ7FZRGq6z_4iJDycpA1dR-np&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt6751668', 'https://www.youtube.com/embed/5xH0HfJHsaY', '#', '#'),
(26, 'Uncut Gems', 'Uncut Gems.jpg', 2019, 'Crime', 'Crime, Drama, Mystery', '2h 15min', '1.17 GB', 'https://drive.google.com/uc?id=1KSK9KfiiT4hQMxGH4IjI2mCDzREVwU9h&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt5727208', 'https://www.youtube.com/embed/vTfJp2Ts9X8', '#', '#'),
(27, 'Terminator: Dark Fate', 'Terminator the dark.jpg', 2019, 'Action', 'Action, Adventure, Sci-Fi', '2h 8min', '1.12 GB', 'https://drive.google.com/uc?id=1rqs4HBwRRdaa1W9kMZF4ZH-uI6H4Ry7T&export=download', 'https://yts-subs.com/movie-imdb/tt6450804', 'https://www.youtube.com/embed/oxy8udgWRmo', '#', '#'),
(28, 'Zombieland: Double Tap', 'Zombie Land Doubletap.jpg', 2019, 'Action', 'Action, Comedy, Horror', '1h 39min', '880.8 MB', 'https://drive.google.com/uc?id=1MRbFa-WLc_virfMZMMbrVE3i-i7Ysmwh&export=download', 'https://yts-subs.com/movie-imdb/tt1560220', 'https://www.youtube.com/embed/ZlW9yhUKlkQ', '#', '#'),
(29, 'Us', 'Us.jpg', 2019, 'Horror', 'Horror, Mystery, Thriller', '1h 56min', '996.1 MB', 'https://drive.google.com/uc?id=1Q01fhOAd3r5HIPpvQvAfgv1YCLDQTzft&export=download', 'https://yts-subs.com/movie-imdb/tt6857112', 'https://www.youtube.com/embed/hNCmb-4oXJA', '#', '#'),
(30, 'Maleficent: Mistress of Evil', 'Maleficent Mistress of Evil.jpg', 2019, 'Adventure', 'Adventure, Family, Fantasy', '1h 59min', '1.04 GB', 'https://drive.google.com/uc?id=1UxbdmlbA4cnQYl0YpZL2h6lln9XILV2k&export=download', 'https://yts-subs.com/movie-imdb/tt4777008', 'https://www.youtube.com/embed/yL1f8yNxGBk', '#', '#'),
(31, 'Ford v Ferrari', 'Ford v Ferrari.jpg', 2019, 'Action', 'Action, Biography, Drama', '2h 32min', '1.37 GB', 'https://drive.google.com/uc?id=1BnbW5533U4bxJCGCLA18LcR-In-4xVDz&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt1950186', 'https://www.youtube.com/embed/I3h9Z89U9ZA', '#', '#'),
(32, 'Frozen II', 'Frozen.jpg', 2019, 'Animation', 'Animation, Adventure, Comedy', '1h 43min', '947 MB', 'https://drive.google.com/uc?id=1RrZvm4LNrU3bW0jANEa4jqzU6tCEQD1w&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt4520988', 'https://www.youtube.com/embed/bwzLiQZDw2I', '#', 'yes'),
(33, 'Booksmart', 'Booksmart.jpg', 2019, 'Comedy', 'Comedy', '1h 42min', '896 MB', 'https://drive.google.com/uc?id=1fxzF8eWd_hj0iwToSqqLIbAQ9i0rsCVs&export=download', 'https://yts-subs.com/movie-imdb/tt1489887', 'https://www.youtube.com/embed/tX2MvB0kyA0', '#', '#'),
(34, 'Pain and Glory', 'Pain and Glory.jpg', 2019, 'Drama', 'Drama', '1h 53min', '1009 MB', 'https://drive.google.com/uc?id=162pSnCCtf3Q8mg5ALUz6AnFHn4jyNhvd&export=download', 'https://yts-subs.com/movie-imdb/tt8291806', 'https://www.youtube.com/embed/slW5bh11JBc', '#', '#'),
(35, 'Jojo Rabbit', 'Jojo Rabbit.jpg', 2019, 'Comedy', 'Comedy, Drama, War', '1h 48min', '996 MB', 'https://drive.google.com/uc?id=1FoQj3r3XIwla0VabHFxkAMZBlSS5jafK&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt2584384', 'https://www.youtube.com/embed/eDOEIUbaT-U', '#', '#'),
(36, 'Midsommar', 'Midsommar.jpg', 2019, 'Drama', 'Drama, Horror, Mystery', '2h 27min', '1.27 GB', 'https://drive.google.com/uc?id=1SL4HqJw2IF4RmarU-uneuGsOpmL5Tcva&export=download', 'https://yts-subs.com/movie-imdb/tt8772262', 'https://www.youtube.com/embed/1Vnghdsjmd0', '#', '#'),
(37, 'Bombshell', 'Bombshell.jpg', 2019, 'Biography', 'Biography, Drama', '1h 49min', '998 MB', 'https://drive.google.com/uc?id=1t_lx0LesyzJtoBV3dcQiXb7SR-Tb_X4o&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt6394270', 'https://www.youtube.com/embed/0rBnkBIhoFE', '#', '#'),
(38, 'Midway', 'Midway.jpg', 2019, 'Action', 'Action, Drama, History', '2h 18min', '1.24GB', 'https://drive.google.com/uc?id=1uWSj6HwvGHGREIASJmCdt1mx2OJWrgQV&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt6924650', 'https://www.youtube.com/embed/l9laReRAYFk', '#', '#'),
(39, 'Doctor Sleep', 'Doctor Sleep.jpg', 2019, 'Drama', 'Drama, Fantasy, Horror', '2h 32min', '1.37 GB', 'https://drive.google.com/uc?id=1PyzVdYgG6kG7p69Ny3C_6xZl-VEHww2y&export=download', 'https://yts-subs.com/movie-imdb/tt5606664', 'https://www.youtube.com/embed/BOzFZxB-8cw', '#', 'yes'),
(40, 'Aladdin', 'Aladdin.jpg', 2019, 'Adventure', 'Adventure, Family, Fantasy', '2h 8min', '1.11 GB', 'https://drive.google.com/uc?id=1sOLmh_e79DXrdYs7OTGx_NkWvmZJS1N6&export=download', 'https://yts-subs.com/movie-imdb/tt6139732', 'https://www.youtube.com/embed/foyufD52aog', '#', '#'),
(41, 'Harriet', 'Harriet.jpg', 2019, 'Action', 'Action, Biography, Drama', '2h 5min', '1.1 GB', 'https://drive.google.com/uc?id=1BF2qCCGAqA6f0p1XRJu3_mve5B4PhC_Q&export=download', 'https://yts-subs.com/movie-imdb/tt4648786', 'https://www.youtube.com/embed/osP9iJjvlAE', '#', '#'),
(42, 'Wrong Turn', 'Wrong Turn.jpg', 2003, 'Horror', 'Horror', '1h 24min', '648 MB', 'https://drive.google.com/uc?id=1gTt_8yMd6nbww9oKmeMqmWaGzRcQAd2X&export=download', 'https://yts-subs.com/movie-imdb/tt0295700', 'https://www.youtube.com/embed/naUUyD-_oPc', '#', '#'),
(43, 'Knives Out', 'Knives Out.jpg', 2019, 'Comedy', 'Comedy, Crime, Drama', '2h 11min', '1.17 GB', 'https://drive.google.com/uc?id=1sx6tBrySZut6ennMhBzC4VcwYKdlNRGo&export=download', 'https://www.yifysubtitles.com/subtitles/knives-out-english-yify-163053', 'https://www.youtube.com/embed/qGqiHJTsRkQ', '#', 'yes'),
(44, '1917', '1917.jpg', 2019, 'Drama', 'Drama, War', '1h 59min', '1.07 GB', 'https://drive.google.com/uc?id=1-l80ieplPQ9M34pi5LnAu31ThIySIS9t&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt8579674', 'https://www.youtube.com/embed/YqNYrYUiMfg', '#', '#'),
(45, 'The Lighthouse', 'The Light House.jpg', 2019, 'Drama', 'Drama, Fantasy, Horror', '1h 49min', '972 MB', 'https://drive.google.com/uc?id=1Pu9RZDfc3j6RiyrkZrCchRzY4R6KP4wU&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt7984734', 'https://www.youtube.com/embed/fKvcPzskauY', '#', 'yes'),
(46, 'Jumanji: The Next Level', 'Jumanji Next Level.jpg', 2019, 'Action', 'Action, Adventure, Comedy', '2h 3min', '1.1 GB', 'https://drive.google.com/uc?id=1LTDT9b_iIbdfoXojujjkZD8mlS6UdRuw&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt7975244', 'https://www.youtube.com/embed/rBxcF-r9Ibs', '#', '#'),
(47, 'Hustlers', 'Hustlers.jpg', 2019, 'Comedy', 'Comedy, Crime, Drama', '1h 50min', '972 MB', 'https://drive.google.com/uc?id=14HRqtoAu0B1Y8pSWkXJ6xS68aBAOmn29&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt5503686', 'https://www.youtube.com/embed/46XaikZ0FSw', '#', '#'),
(48, 'Dark Waters', 'Dark Waters.jpg', 2019, 'Biography', 'Biography, Drama, History', '2h 6min', '1.14 GB', 'https://drive.google.com/uc?id=1VcqMMDThk9pEYmmhmSStL9zTUlpWyy6f&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt9071322', 'https://www.youtube.com/embed/RvAOuhyunhY', '#', 'yes'),
(49, 'Birds of Prey: And the Fantabulous Emancipation of One Harley Quinn', 'Birds of Prey.jpg', 2020, 'Action', 'Action, Adventure, Crime', '1h 49min', '999 MB', 'https://drive.google.com/uc?id=1h74bO8CN3KvTlcFnEzL3wuDsmexZhGjN&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt7713068', 'https://www.youtube.com/embed/x3HbbzHK5Mc', '#', '#'),
(50, 'The Grudge', 'The Grudge.jpg', 2020, 'Horror', 'Horror, Mystery', '1h 34min', '860 MB', 'https://drive.google.com/uc?id=1d9-a5xjX-YguJiG7fdgjJm486mE3idlm&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt3612126', 'https://www.youtube.com/embed/O2NKzO-fxwQ', '#', '#'),
(51, 'Star Wars: Episode IX - The Rise of Skywalker', 'Star Wars X.jpg', 2019, 'Action', 'Action, Adventure, Fantasy', '2h 22min', '1.27 GB', 'https://drive.google.com/uc?id=16hjRi3Z3zuO--zbAY7wY3dWEDmQBkX0h&export=download', 'https://www.yifysubtitles.com/movie-imdb/tt2527338', 'https://www.youtube.com/embed/8Qn_spdM5Zg', '#', '#'),
(52, 'Alita: Battle Angel', 'Alita Battle.jpg', 2019, 'Action', 'Action, Adventure, Sci-Fi', '2h 2min', '1.96 GB', 'https://drive.google.com/uc?id=1eFvlc0VV738xUaPahrkS7DckwQUcWCPR&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt0437086', 'https://www.youtube.com/embed/cislZ9S0ocA', '#', '#'),
(53, 'Atlantics', 'Atlantics.jpg', 2019, 'Drama', 'Drama', '1h 46min', '837 MB', 'https://drive.google.com/uc?id=1ZjuRx5fTky778kahd-p7xrhlLqqyKejy&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt10199586', 'https://www.youtube.com/embed/u6b4PgKq2dE', '#', '#'),
(54, 'Gemini Man', 'Gemini Man.jpg', 2019, 'Action', 'Action, Drama, Sci-Fi ', '1h 57min', '1.03 GB', 'https://drive.google.com/uc?id=1ll75Mh8nA3EUI1Q6sCa4GmZ-JiWr2fVI&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt1025100', 'https://www.youtube.com/embed/6orc_lHvJKY', '#', '#'),
(55, 'Honey Boy', 'Honey Boy.jpg', 2019, 'Drama', 'Drama', '1h 34min', '864 MB', 'https://drive.google.com/uc?id=1w22ryq6cbJzI3xDD6NChoVhHb5dw-x6v&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt8151874', 'https://www.youtube.com/embed/5RR8WTQzwSk', '#', '#'),
(56, 'Rocketman', 'Rocketman.jpg', 2019, 'Biography', 'Biography, Drama, Music', '2h 1min', '973 MB', 'https://drive.google.com/uc?id=1vs6Za8qEdjhVlqKUIY3t-Ylmvc7pc7Jg&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-eng/idmovie-167147', 'https://www.youtube.com/embed/S3vO8E2e6G0', '#', '#'),
(57, 'The Last Black Man in San Francisco', 'The Last Black.jpg', 2019, 'Drama', 'Drama', '2h 1min', '1.04 GB', 'https://drive.google.com/uc?id=1_4STh3vQIlH380lcmRNBiZyAptmLlpbU&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-eng/idmovie-733939', 'https://www.youtube.com/embed/C0FnJDhY9-0', '#', '#'),
(58, 'Little Women', 'Little Women.jpg', 2019, 'Drama', 'Drama, Romance', '2h 15min', '1.21 GB', 'https://drive.google.com/uc?id=1mfL_bDBaZFZigk39ezQBPN6BFWvmyXmu&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt3281548', 'https://www.youtube.com/embed/AST2-4db4ic', '#', 'yes'),
(59, 'The Souvenir', 'Souvenir.jpg', 2019, 'Drama', 'Drama, Mystery, Romance', '2h', '955 MB', 'https://drive.google.com/uc?id=1ThrCiFsrPo03ji7BzCfYDhVhuQ3s2-ne&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt6920356', 'https://www.youtube.com/embed/t9Al2nC0vzY', '#', '#'),
(60, 'Waves', 'Waves.jpg', 2019, 'Drama', 'Drama, Romance, Sport', '2h 15min', '1.22 GB', 'https://drive.google.com/uc?id=1TesVsXEZvhIpO9Er1UqRsT6Z794R01QE&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt8652728', 'https://www.youtube.com/embed/V5z3cr8AB5g', '#', '#'),
(61, 'The Report', 'The Report.jpg', 2019, 'Biography ', 'Biography, Crime, Drama', '1h 59min', '1.03 GB', 'https://drive.google.com/uc?id=1yQHwjGWsGXR2PTmmX_6emUXA1TY-wnYC&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt8236336', 'https://www.youtube.com/embed/ul5GFfMAvtg', '#', '#'),
(62, 'Sonic the Hedgehog', 'Sonic Hedgehog.jpg', 2020, 'Action', 'Action, Adventure, Comedy', '1h 39min', '911 MB', 'https://drive.google.com/uc?id=1JdS1VxyOmG93t1IDk8JBv_-m3oSBpRTb&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt3794354', 'https://www.youtube.com/embed/szby7ZHLnkA', '#', '#'),
(63, 'Escape from Pretoria', 'Escape Pretoria.jpg', 2020, 'Thriller', 'Thriller', '1h 46min', '974 MB', 'https://drive.google.com/uc?id=1txDdY5F-npsfnwDfPxX7YDGD0yurz1xY&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt5797184', 'https://www.youtube.com/embed/VfjoofUEcy0', '#', '#'),
(64, 'Escape Room', 'Escape Room.jpg', 2019, 'Action', 'Action, Adventure, Horror', '1h 39min', '854 MB', 'https://drive.google.com/uc?id=1f3mRg-m6q1SPboCFm6X_CmKfAwSOWlIp&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt5886046', 'https://www.youtube.com/embed/6dSKUoV0SNI', '#', '#'),
(65, 'Godzilla: King of the Monsters', 'Godzilla.jpg', 2019, 'Action', 'Action, Adventure, Fantasy', '2h 12min', '2.08 GB', 'https://drive.google.com/uc?id=1QC-le23_hmKscPTKlSFAmU31u8E0Zae4&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt3741700', 'https://www.youtube.com/embed/QFxN2oDKk0E', '#', '#'),
(66, 'X-Men: Dark Phoenix', 'X-Men Dark Phoenix.jpg', 2019, 'Action', 'Action, Adventure, Sci-Fi', '1h 53min', '1023 MB', 'https://drive.google.com/uc?id=1iKVK_sxCoU8yk3xBj2DZ7YmnIYWcet6A&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt6565702', 'https://www.youtube.com/embed/azvR__GRQic', '#', '#'),
(67, 'Contagion', 'Contagion.jpg', 2011, 'Action', ' Action, Drama, Thriller', '1h 46min', '978 MB', 'https://drive.google.com/uc?id=1BNDG2x1sPztIzj35e04RhApbr3Gul2Im&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt1598778', 'https://www.youtube.com/embed/4sYSyuuLk5g', '#', '#'),
(68, 'Wrong Turn 2: Dead End', 'Wrong Turn 2.jpg', 2007, 'Horror', 'Horror', '1h 33min', '699 MB', 'https://drive.google.com/uc?id=1243GKru-ZeHji0UHLnTWt6CyDDNZgR1c&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt0804555', 'https://www.youtube.com/embed/VanCRj8eI9o', '#', '#'),
(69, 'Wrong Turn 3: Left for Dead', 'Wrong Turn 3.jpg', 2009, 'Horror', 'Horror', '1h 32min', '698 MB', 'https://drive.google.com/uc?id=19uzsZS2EZyHG7IhuHmo2hGXuRXXncFkq&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt1261978', 'https://www.youtube.com/embed/yYAyDmOjZi0', '#', '#'),
(70, 'Wrong Turn 4: Bloody Beginnings', 'Wrong Turn 4.jpg', 2011, 'Horror', 'Horror', '1h 33min', '696 MB', 'https://drive.google.com/uc?id=123yUeJfW9AtDBl_dQsGhz30jUBPInFYO&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt1865567', 'https://www.youtube.com/embed/fulKeIZM2-s', '#', '#'),
(71, 'Wrong Turn 5: Bloodlines', 'Wrong Turn 5.jpg', 2012, 'Horror', 'Horror', '1h 31min', '695 MB', 'https://drive.google.com/uc?id=1okIFmCiSy9e2q7ymdTPnTIlQyQnvxsMa&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt2375779', 'https://www.youtube.com/embed/5yi0aIRi3eg', '#', '#'),
(72, 'Wrong Turn 6: Last Resort', 'Wrong Turn 6.jpg', 2014, 'Horror', 'Horror', '1h 31min', '1.33 GB', 'https://drive.google.com/uc?id=1QPmoJYkm8iDuuw22VKMMgBUaeslyB6hw&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-182960', 'https://www.youtube.com/embed/c9TqCwh_RW4', '#', '#'),
(73, 'The Nun', 'The Nun.jpg', 2018, 'Horror', 'Horror, Mystery, Thriller', '1h 36min', '836 MB', 'https://drive.google.com/uc?id=1WFBiM4YA9VX345x1-hKGjF-qqMomkHyE&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt5814060', 'https://www.youtube.com/embed/pzD9zGcUNrw', '#', '#'),
(74, 'The Call of the Wild', 'The Call Wild.jpg', 2020, 'Adventure', 'Adventure, Drama, Family', '1h 40min', '915 MB', 'https://drive.google.com/uc?id=102-6LB-ZG5e6dlDXfeuM7faFHmAk4eAK&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt7504726', 'https://www.youtube.com/embed/5P8R2zAhEwg', '#', '#'),
(75, 'The Gentlemen', 'The Gentemen.jpg', 2019, 'Action', 'Action, Comedy, Crime', '1h 53min', '1.02 GB', 'https://drive.google.com/uc?id=199duFpFUi37PyL-6M5F8Ir_-lkb4d3Uh&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt8367814', 'https://www.youtube.com/embed/Qkr7xwyIKbg', '#', '#'),
(76, 'Onward', 'Onward.jpg', 2020, 'Animation', 'Animation, Adventure, Comedy', '1h 42min', '939 MB', 'https://drive.google.com/uc?id=1CMpTVzmZe5rz6qmmggix_muxmnXDdiSS&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt7146812', 'https://www.youtube.com/embed/HxKXiQvyG_o', '#', 'yes'),
(77, 'Bloodshot', 'Bloodshot.jpg', 2020, 'Action', 'Action, Drama, Sci-Fi', '1h 49min', '1005 MB', 'https://drive.google.com/uc?id=1rFf5RE_uYio1vLl8iJhPxy5es3O_Isbg&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt1634106', 'https://www.youtube.com/embed/vOUVVDWdXbo', '#', '#'),
(78, 'Bad Boys for Life', 'Bad Boys 3.jpg', 2020, 'Action', 'Action, Comedy, Crime', '2h 4min', '1.11 GB', 'https://drive.google.com/uc?id=1TDoUqJYTnvgz02m38gMOaifB0W72GOUk&export=download', 'http://www.yifysubtitles.com/movie-imdb/tt1502397', 'https://www.youtube.com/embed/R228yPrwqTo', 'new', '#'),
(79, 'Underwater', 'Underwater.jpg', 2020, 'Action', 'Action, Drama, Horror', '1h 35min', '871 MB', 'https://drive.google.com/uc?id=14tdUqtxPFVN4rKZ1zJWlojMGqw_iATl4&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-774920', 'https://www.youtube.com/embed/jCFWEzIVILc', 'new', '#'),
(80, 'Abominable', 'Abominable.jpg', 2019, 'Animation', 'Animation, Adventure, Comedy', '1h 37min', '864 MB', 'https://drive.google.com/uc?id=14glaj5W9Jm6UOEoqAfoD1GSP45oZ_7Rs&export=download', 'https://yts-subs.com/movie-imdb/tt6324278', 'https://www.youtube.com/embed/Ap0NRJD-2ts', '#', '#'),
(81, 'Justice League Dark: Apokolips War', 'Justice League 2020.jpg', 2020, 'Animation', 'Animation', '1h 30min', '877 MB', 'https://drive.google.com/uc?id=1_poI3qgCreABGDLqFAS6JC0zfy426keW&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-911390', 'https://www.youtube.com/embed/tnCkn5xD2jg', 'new', 'yes'),
(82, 'Extraction', 'Extraction 2020.jpg', 2020, 'Action', ' Action, Thriller', '1h 56min', '1.05 GB', 'https://drive.google.com/uc?id=1ZBTQwEWZv1D1KnwhKe4JSfn7GSPZ7GS3&export=download', 'https://yifysubtitles.org/movie-imdb/tt8936646', 'https://www.youtube.com/embed/L6P3nI6VnlY', 'new', '#'),
(83, 'My Spy', 'My Spy 2020.jpg', 2020, 'Action', 'Action, Comedy, Family', '1h 39min', '911 MB', 'https://drive.google.com/uc?id=1Go5aIJtAWkzfB4Wi5yh_XSUtPtpMAgo_&export=download', 'https://yifysubtitles.org/movie-imdb/tt8242084', 'https://www.youtube.com/embed/pfAhQSz-j_o', 'new', '#'),
(84, 'Mortal Kombat Legends: Scorpion\'s Revenge', 'Mortal Kombat 2020.jpg', 2020, 'Animation', 'Animation, Action, Adventure', '1h 20min', '734 MB', 'https://drive.google.com/uc?id=1G5lAUSzWBjjvYSab1hfKrao-8RWJzp0P&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-903018', 'https://www.youtube.com/embed/I1vccr3yWBU', 'new', '#'),
(85, 'The Lodge', 'The Lodge 2020.jpg', 2019, ' Drama', ' Drama, Horror, Thriller', '1h 48min', '994 MB', 'https://drive.google.com/uc?id=13GfD9CVUIHW2g1sS7U3kk1cAnpSd6RDp&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-714787', 'https://www.youtube.com/embed/dCLOqdzAP9E', 'new', '#'),
(86, 'The Assistant', 'The Assistant 2019.jpg', 2019, 'Drama', 'Drama', '1h 27min', '806 MB', 'https://drive.google.com/uc?id=118bn0HIlkzqixJB23PJ10X_PWfCI8DZI&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-895270', 'https://www.youtube.com/embed/6cLf0i-kYio', 'new', '#'),
(87, 'The Turning', 'The turnig 2020.jpg', 2020, 'Drama', 'Drama, Horror, Mystery', '1h 34min', '867 MB', 'https://drive.google.com/uc?id=1eBTgDxWfHoivY-ylZkO1LrnfXJ9UnXoR&export=download', 'https://www.opensubtitles.org/en/search/sublanguageid-all/idmovie-776857', 'https://www.youtube.com/embed/rl33gU2APIs', '#', '#'),
(88, 'Fantasy Island', 'Fantasy Island 2020.jpg', 2020, 'Adventure', 'Adventure, Fantasy, Horror', '1h 49min', '1004 MB', 'https://drive.google.com/uc?id=1EF-UP53eKf1gOElln7yCtfoZT04PMDIN&export=download', 'https://yifysubtitles.org/movie-imdb/tt0983946', 'https://www.youtube.com/embed/AuDROG1g6bM', '#', '#'),
(89, 'Brahms: The Boy II', 'The Boy 2020.jpg', 2020, 'Drama', 'Drama, Horror, Mystery', '1h 26min', '794 MB', 'https://drive.google.com/uc?id=17ujOwJ3iD0Y5WX7SVxjrmD1Bof3LbwZa&export=download', 'https://yifysubtitles.org/movie-imdb/tt9173418', 'https://www.youtube.com/embed/ytxEldPKnyA', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `pc_games`
--

CREATE TABLE `pc_games` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(256) NOT NULL,
  `g_image` varchar(200) NOT NULL,
  `g_size` varchar(30) NOT NULL,
  `g_year` varchar(30) NOT NULL,
  `g_download` varchar(1000) NOT NULL,
  `g_trailer` varchar(1000) NOT NULL,
  `g_rated` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_games`
--

INSERT INTO `pc_games` (`g_id`, `g_name`, `g_image`, `g_size`, `g_year`, `g_download`, `g_trailer`, `g_rated`) VALUES
(16, 'Pro Evolution Soccer', 'PES 2019.jpg', '11.97 GB', '2019', 'https://drive.google.com/uc?id=1GlXE6RcbRuvKzLi9it5z7O_1EWX213d1&export=download', 'https://www.youtube.com/embed/xCY6rJI5CvY', 'yes'),
(17, 'Grand Theft Auto V', 'GTA 5.jpg', '41 GB', '2013', 'https://drive.google.com/uc?id=1KP074Z931CABHteTc0ynlouMn711VARG&export=download', 'https://www.youtube.com/embed/hvoD7ehZPcM', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `se_epi`
--

CREATE TABLE `se_epi` (
  `sp_id` int(11) NOT NULL,
  `sw_name` varchar(30) NOT NULL,
  `se_num` varchar(30) NOT NULL,
  `epi_num` varchar(30) NOT NULL,
  `sp_download` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `se_epi`
--

INSERT INTO `se_epi` (`sp_id`, `sw_name`, `se_num`, `epi_num`, `sp_download`) VALUES
(1, 'Power', 'SE 01', 'EP 01', 'https://www.wootly.ch/e/YRZEEEE4'),
(2, 'Power', 'SE 01', 'EP 02', 'https://www.wootly.ch/e/1RZEEEE4'),
(3, 'Power', 'SE 01', 'EP 03', 'https://www.wootly.ch/e/RRZEEEE4'),
(4, 'Power', 'SE 01', 'EP 04', 'https://www.wootly.ch/e/SRZEEEE4'),
(5, 'Power', 'SE 01', 'EP 05', 'https://www.wootly.ch/e/3RZEEEE4'),
(6, 'Power', 'SE 01', 'EP 06', 'https://www.wootly.ch/e/DRZEEEE4'),
(7, 'Power', 'SE 01', 'EP 07', 'https://www.wootly.ch/e/JRZEEEE4'),
(8, 'Power', 'SE 01', 'EP 08', 'https://www.wootly.ch/e/2RZEEEE4'),
(9, 'Power', 'SE 02', 'EP 01', 'https://www.wootly.ch/e/RM3EEEE4'),
(10, 'Power', 'SE 02', 'EP 02', 'https://www.wootly.ch/e/SM3EEEE4'),
(11, 'Power', 'SE 02', 'EP 03', 'https://www.wootly.ch/e/3M3EEEE4'),
(12, 'Power', 'SE 02', 'EP 04', 'https://www.wootly.ch/e/DM3EEEE4'),
(13, 'Power', 'SE 02', 'EP 05', 'https://www.wootly.ch/e/JM3EEEE4'),
(14, 'Power', 'SE 02', 'EP 06', 'https://www.wootly.ch/e/2M3EEEE4'),
(15, 'Power', 'SE 02', 'EP 07', 'https://www.wootly.ch/e/0M3EEEE4'),
(16, 'Power', 'SE 02', 'EP 08', 'https://www.wootly.ch/e/5M3EEEE4'),
(17, 'Power', 'SE 02', 'EP 09', 'https://www.wootly.ch/e/CM3EEEE4'),
(18, 'Power', 'SE 02', 'EP 10', 'https://www.wootly.ch/e/NM3EEEE4'),
(19, 'Power', 'SE 03', 'EP 01', 'https://www.wootly.ch/e/I364EEE4'),
(20, 'Power', 'SE 03', 'EP 02', 'https://www.wootly.ch/e/Q364EEE4'),
(21, 'Power', 'SE 03', 'EP 03', 'https://www.wootly.ch/e/T364EEE4'),
(22, 'Power', 'SE 03', 'EP 04', 'https://www.wootly.ch/e/W364EEE4'),
(23, 'Power', 'SE 03', 'EP 05', 'https://www.wootly.ch/e/H364EEE4'),
(24, 'Power', 'SE 03', 'EP 06', 'https://www.wootly.ch/e/U364EEE4'),
(25, 'Power', 'SE 03', 'EP 07', 'https://www.wootly.ch/e/X364EEE4'),
(26, 'Power', 'SE 03', 'EP 08', 'https://www.wootly.ch/e/V364EEE4'),
(27, 'Power', 'SE 03', 'EP 09', 'https://www.wootly.ch/e/O364EEE4'),
(28, 'Power', 'SE 03', 'EP 10', 'https://www.wootly.ch/e/P364EEE4'),
(29, 'Power', 'SE 04', 'EP 01', 'https://www.wootly.ch/e/Y364EEE4'),
(30, 'Power', 'SE 04', 'EP 02', 'https://www.wootly.ch/e/1364EEE4'),
(31, 'Power', 'SE 04', 'EP 03', 'https://www.wootly.ch/e/R364EEE4'),
(32, 'Power', 'SE 04', 'EP 04', 'https://www.wootly.ch/e/S364EEE4'),
(33, 'Power', 'SE 04', 'EP 05', 'https://www.wootly.ch/e/3364EEE4'),
(34, 'Power', 'SE 04', 'EP 06', 'https://www.wootly.ch/e/D364EEE4'),
(35, 'Power', 'SE 04', 'EP 07', 'https://www.wootly.ch/e/J364EEE4'),
(36, 'Power', 'SE 04', 'EP 08', 'https://www.wootly.ch/e/2364EEE4'),
(37, 'Power', 'SE 04', 'EP 09', 'https://www.wootly.ch/e/0364EEE4'),
(38, 'Power', 'SE 04', 'EP 10', 'https://www.wootly.ch/e/5364EEE4'),
(39, 'Power', 'SE 05', 'EP 01', 'https://www.wootly.ch/e/BODEEEE4'),
(40, 'Power', 'SE 05', 'EP 02', 'https://www.wootly.ch/e/OCDEEEE4'),
(41, 'Power', 'SE 05', 'EP 03', 'https://www.wootly.ch/e/XGJEEEE4'),
(42, 'Power', 'SE 05', 'EP 04', 'https://www.wootly.ch/e/CUJEEEE4'),
(43, 'Power', 'SE 05', 'EP 05', 'https://www.wootly.ch/e/WDJEEEE4'),
(44, 'Power', 'SE 05', 'EP 06', 'https://www.wootly.ch/e/PNJEEEE4'),
(45, 'Power', 'SE 05', 'EP 07', 'https://www.wootly.ch/e/8ZJEEEE4'),
(46, 'Power', 'SE 05', 'EP 08', 'https://www.wootly.ch/e/AW2EEEE4'),
(47, 'Power', 'SE 05', 'EP 09', 'https://www.wootly.ch/e/WH2EEEE4'),
(48, 'Power', 'SE 05', 'EP 10', 'https://www.wootly.ch/e/ZU2EEEE4'),
(49, 'Power', 'SE 06', 'EP 01', 'https://www.wootly.ch/e/NAY4EEE4'),
(50, 'Power', 'SE 06', 'EP 02', 'https://www.wootly.ch/e/52Y4EEE4'),
(51, 'Power', 'SE 06', 'EP 03', 'https://www.wootly.ch/e/XV14EEE4'),
(52, 'Power', 'SE 06', 'EP 04', 'https://www.wootly.ch/e/EZ14EEE4'),
(53, 'Power', 'SE 06', 'EP 05', 'https://www.wootly.ch/e/F9R4EEE4'),
(54, 'Power', 'SE 06', 'EP 06', 'https://www.wootly.ch/e/FXR4EEE4'),
(55, 'Power', 'SE 06', 'EP 07', 'https://www.wootly.ch/e/4JR4EEE4'),
(56, 'Power', 'SE 06', 'EP 08', 'https://www.wootly.ch/e/WNR4EEE4'),
(57, 'Power', 'SE 06', 'EP 09', 'https://www.wootly.ch/e/FDS4EEE4'),
(58, 'Power', 'SE 06', 'EP 10', 'https://www.wootly.ch/e/DT34EEE4'),
(59, 'Power', 'SE 06', 'EP 11', 'https://www.wootly.ch/e/0704EEE4'),
(60, 'Power', 'SE 06', 'EP 12', 'https://www.wootly.ch/e/DH04EEE4'),
(61, 'Power', 'SE 06', 'EP 13', 'https://www.wootly.ch/e/7V54EEE4'),
(62, 'Power', 'SE 06', 'EP 14', 'https://www.wootly.ch/e/5TN4EEE4'),
(63, 'Breaking Bad', 'SE 01', 'EP 01', 'https://www.wootly.ch/e/U4Y4EEE4'),
(64, 'Breaking Bad', 'SE 01', 'EP 02', 'https://www.wootly.ch/e/X4Y4EEE4'),
(65, 'Breaking Bad', 'SE 01', 'EP 03', 'https://www.wootly.ch/e/V4Y4EEE4'),
(66, 'Breaking Bad', 'SE 01', 'EP 04', 'https://www.wootly.ch/e/O4Y4EEE4'),
(67, 'Breaking Bad', 'SE 01', 'EP 05', 'https://www.wootly.ch/e/P4Y4EEE4'),
(68, 'Breaking Bad', 'SE 01', 'EP 06', 'https://www.wootly.ch/e/Y4Y4EEE4'),
(69, 'Breaking Bad', 'SE 01', 'EP 07', 'https://www.wootly.ch/e/14Y4EEE4'),
(70, 'Breaking Bad', 'SE 02', 'EP 01', 'https://www.wootly.ch/e/R4Y4EEE4'),
(71, 'Breaking Bad', 'SE 02', 'EP 02', 'https://www.wootly.ch/e/S4Y4EEE4'),
(72, 'Breaking Bad', 'SE 02', 'EP 03', 'https://www.wootly.ch/e/34Y4EEE4'),
(73, 'Breaking Bad', 'SE 02', 'EP 04', 'https://www.wootly.ch/e/D4Y4EEE4'),
(74, 'Breaking Bad', 'SE 02', 'EP 05', 'https://www.wootly.ch/e/J4Y4EEE4'),
(75, 'Breaking Bad', 'SE 02', 'EP 06', 'https://www.wootly.ch/e/24Y4EEE4'),
(76, 'Breaking Bad', 'SE 02', 'EP 07', 'https://www.wootly.ch/e/04Y4EEE4'),
(77, 'Breaking Bad', 'SE 02', 'EP 08', 'https://www.wootly.ch/e/54Y4EEE4'),
(78, 'Breaking Bad', 'SE 02', 'EP 09', 'https://www.wootly.ch/e/C4Y4EEE4'),
(79, 'Breaking Bad', 'SE 02', 'EP 10', 'https://www.wootly.ch/e/N4Y4EEE4'),
(80, 'Breaking Bad', 'SE 02', 'EP 11', 'https://www.wootly.ch/e/84Y4EEE4'),
(81, 'Breaking Bad', 'SE 02', 'EP 12', 'https://www.wootly.ch/e/L4Y4EEE4'),
(82, 'Breaking Bad', 'SE 02', 'EP 13', 'https://www.wootly.ch/e/M4Y4EEE4'),
(83, 'Breaking Bad', 'SE 03', 'EP 01', 'https://www.wootly.ch/e/Z4Y4EEE4'),
(84, 'Breaking Bad', 'SE 03', 'EP 02', 'https://www.wootly.ch/e/E7Y4EEE4'),
(85, 'Breaking Bad', 'SE 03', 'EP 03', 'https://www.wootly.ch/e/47Y4EEE4'),
(86, 'Breaking Bad', 'SE 03', 'EP 04', 'https://www.wootly.ch/e/77Y4EEE4'),
(87, 'Breaking Bad', 'SE 03', 'EP 05', 'https://www.wootly.ch/e/A7Y4EEE4'),
(88, 'Breaking Bad', 'SE 03', 'EP 06', 'https://www.wootly.ch/e/F7Y4EEE4'),
(89, 'Breaking Bad', 'SE 03', 'EP 07', 'https://www.wootly.ch/e/67Y4EEE4'),
(90, 'Breaking Bad', 'SE 03', 'EP 08', 'https://www.wootly.ch/e/97Y4EEE4'),
(91, 'Breaking Bad', 'SE 03', 'EP 09', 'https://www.wootly.ch/e/G7Y4EEE4'),
(92, 'Breaking Bad', 'SE 03', 'EP 10', 'https://www.wootly.ch/e/B7Y4EEE4'),
(93, 'Breaking Bad', 'SE 03', 'EP 11', 'https://www.wootly.ch/e/K7Y4EEE4'),
(94, 'Breaking Bad', 'SE 03', 'EP 12', 'https://www.wootly.ch/e/I7Y4EEE4'),
(95, 'Breaking Bad', 'SE 03', 'EP 13', 'https://www.wootly.ch/e/Q7Y4EEE4'),
(96, 'Breaking Bad', 'SE 04', 'EP 01', 'https://www.wootly.ch/e/T7Y4EEE4'),
(97, 'Breaking Bad', 'SE 04', 'EP 02', 'https://www.wootly.ch/e/W7Y4EEE4'),
(98, 'Breaking Bad', 'SE 04', 'EP 03', 'https://www.wootly.ch/e/H7Y4EEE4'),
(99, 'Breaking Bad', 'SE 04', 'EP 04', 'https://www.wootly.ch/e/U7Y4EEE4'),
(100, 'Breaking Bad', 'SE 04', 'EP 05', 'https://www.wootly.ch/e/X7Y4EEE4'),
(101, 'Breaking Bad', 'SE 04', 'EP 06', 'https://www.wootly.ch/e/V7Y4EEE4'),
(102, 'Breaking Bad', 'SE 04', 'EP 07', 'https://www.wootly.ch/e/O7Y4EEE4'),
(103, 'Breaking Bad', 'SE 04', 'EP 08', 'https://www.wootly.ch/e/P7Y4EEE4'),
(104, 'Breaking Bad', 'SE 04', 'EP 09', 'https://www.wootly.ch/e/Y7Y4EEE4'),
(105, 'Breaking Bad', 'SE 04', 'EP 10', 'https://www.wootly.ch/e/17Y4EEE4'),
(106, 'Breaking Bad', 'SE 04', 'EP 11', 'https://www.wootly.ch/e/R7Y4EEE4'),
(107, 'Breaking Bad', 'SE 04', 'EP 12', 'https://www.wootly.ch/e/Z7Y4EEE4'),
(108, 'Breaking Bad', 'SE 04', 'EP 13', 'https://www.wootly.ch/e/S7Y4EEE4'),
(109, 'Breaking Bad', 'SE 05', 'EP 01', 'https://www.wootly.ch/e/37Y4EEE4'),
(110, 'Breaking Bad', 'SE 05', 'EP 02', 'https://www.wootly.ch/e/D7Y4EEE4'),
(111, 'Breaking Bad', 'SE 05', 'EP 03', 'https://www.wootly.ch/e/J7Y4EEE4'),
(112, 'Breaking Bad', 'SE 05', 'EP 04', 'https://www.wootly.ch/e/27Y4EEE4'),
(113, 'Breaking Bad', 'SE 05', 'EP 05', 'https://www.wootly.ch/e/07Y4EEE4'),
(114, 'Breaking Bad', 'SE 05', 'EP 06', 'https://www.wootly.ch/e/57Y4EEE4'),
(115, 'Breaking Bad', 'SE 05', 'EP 07', 'https://www.wootly.ch/e/C7Y4EEE4'),
(116, 'Breaking Bad', 'SE 05', 'EP 08', 'https://www.wootly.ch/e/N7Y4EEE4'),
(117, 'Breaking Bad', 'SE 05', 'EP 09', 'https://www.wootly.ch/e/87Y4EEE4'),
(118, 'Breaking Bad', 'SE 05', 'EP 10', 'https://www.wootly.ch/e/L7Y4EEE4'),
(119, 'Breaking Bad', 'SE 05', 'EP 11', 'https://www.wootly.ch/e/M7Y4EEE4'),
(120, 'Breaking Bad', 'SE 05', 'EP 12', 'https://www.wootly.ch/e/EAY4EEE4'),
(121, 'Breaking Bad', 'SE 05', 'EP 13', 'https://www.wootly.ch/e/4AY4EEE4'),
(122, 'Breaking Bad', 'SE 05', 'EP 14', 'https://www.wootly.ch/e/7AY4EEE4'),
(123, 'Breaking Bad', 'SE 05', 'EP 15', 'https://www.wootly.ch/e/AAY4EEE4'),
(124, 'Breaking Bad', 'SE 05', 'EP 16', 'https://www.wootly.ch/e/FAY4EEE4'),
(125, 'Power', 'SE 06', 'EP 15', 'https://www.wootly.ch/e/8GM4EEE4');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(250) NOT NULL,
  `t_watch` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`t_id`, `t_name`, `t_watch`) VALUES
(1, 'How to use any browser rather than YTD to download videos on YouTube', 'https://www.youtube.com/embed/VT2_v42_L3w'),
(2, 'How to fix errors of xinput1_3.dll, d3dx9_43.dll & 0xc000007b.dll in PES 2015', 'https://www.youtube.com/embed/3P9A9iWLblE'),
(3, 'How to recover Windows 7 forgot password using a USB Flash drive and Lazesoft Recovery software', 'https://www.youtube.com/embed/wUKs904T4PQ'),
(4, 'How to change a VB 6.0 program\'s icon and it\'s extension to .exe', 'https://www.youtube.com/embed/xMhanXJ26xE'),
(5, 'How to watch free live TV channels on your android device using Mobdro or Live NetTV', 'https://www.youtube.com/embed/abpVquEc6vM'),
(6, 'How to decrease internet data loss on windows 10', 'https://www.youtube.com/embed/AcMLe2w8WzU'),
(7, 'How to download a movie or other file on Bonpedia', 'https://www.youtube.com/embed/hvn5T-1FSdI'),
(8, 'It is possible to install GTA 3 on your Android device', 'https://www.youtube.com/embed/pQpU51ZuFtg');

-- --------------------------------------------------------

--
-- Table structure for table `tv_series`
--

CREATE TABLE `tv_series` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(256) NOT NULL,
  `s_image` varchar(200) NOT NULL,
  `s_year` int(11) NOT NULL,
  `s_genre` varchar(256) NOT NULL,
  `s_trailer` varchar(1000) NOT NULL,
  `s_rated` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv_series`
--

INSERT INTO `tv_series` (`s_id`, `s_name`, `s_image`, `s_year`, `s_genre`, `s_trailer`, `s_rated`) VALUES
(16, 'Power', 'Power.jpg', 2014, 'Crime', 'https://www.youtube.com/embed/Gatzb-DKP10', 'yes'),
(22, 'Breaking Bad', 'Breaking Bad.jpg', 2008, 'Crime', 'https://www.youtube.com/embed/lrcqbavlbyQ', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_sys`
--
ALTER TABLE `app_sys`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `auto_comp`
--
ALTER TABLE `auto_comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_games`
--
ALTER TABLE `live_games`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `pc_games`
--
ALTER TABLE `pc_games`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `se_epi`
--
ALTER TABLE `se_epi`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tv_series`
--
ALTER TABLE `tv_series`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_sys`
--
ALTER TABLE `app_sys`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `auto_comp`
--
ALTER TABLE `auto_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `live_games`
--
ALTER TABLE `live_games`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `pc_games`
--
ALTER TABLE `pc_games`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `se_epi`
--
ALTER TABLE `se_epi`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tv_series`
--
ALTER TABLE `tv_series`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
