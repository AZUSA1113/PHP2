-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 2 月 04 日 00:30
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `unit_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `unit_table`
--

CREATE TABLE `unit_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `naiyou` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `unit_table`
--

INSERT INTO `unit_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(1, 'ジーズ太郎', 'test1@test.test', 'テスト1', '2015-06-15 00:00:00'),
(3, 'ジーズ次郎', 'test2@test.test', 'テスト2', '2022-01-29 15:12:16'),
(4, 'ジーズ次郎', 'test2@test.test', 'テスト4', '2022-01-29 15:13:41'),
(5, 'あずあず', '', 'aa', '2022-01-29 16:14:24'),
(6, 'あずあず', 'a@aa', '', '2022-01-29 16:20:23'),
(7, 'あず', 'a@l', 'aaaa', '2022-01-29 16:20:46'),
(8, 'あずあず', 'a@a', 'hai', '2022-01-29 16:31:21'),
(9, 'あずあず', 'a@l', 'こんにちは', '2022-02-02 16:43:20'),
(10, 'あずあず', 'a@l', 'kokoko', '2022-02-04 09:13:27'),
(11, 'あずあず', 'g@r', 'あいう', '2022-02-04 09:18:55'),
(12, 'あずあず', 'a@l', 'mmm', '2022-02-04 09:24:13');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `unit_table`
--
ALTER TABLE `unit_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `unit_table`
--
ALTER TABLE `unit_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
