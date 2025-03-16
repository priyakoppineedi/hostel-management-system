-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 06:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bvchdb`
--
CREATE DATABASE IF NOT EXISTS `bvchdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bvchdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admlogin`
--

CREATE TABLE `admlogin` (
  `uid` varchar(30) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admlogin`
--

INSERT INTO `admlogin` (`uid`, `pw`) VALUES
('hostel', 'hms');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `usid` varchar(30) NOT NULL,
  `amount1` float NOT NULL,
  `amount2` float NOT NULL,
  `amount3` float NOT NULL,
  `paymentid` varchar(20) NOT NULL,
  `date1` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`usid`, `amount1`, `amount2`, `amount3`, `paymentid`, `date1`) VALUES
('priya', 137975, 137775, 200, 'priyaC DEL1375769127', '2022-11-27'),
('priya', 136775, 135775, 1000, 'priyaC DEL137766772', '2022-12-01'),
('priya', 137775, 136775, 1000, 'priyaC DEL137886026', '2022-11-27'),
('raji', 101000, 100000, 1000, 'rajiON-AC97968841538', '2022-12-01'),
('x', 1, 1, 1, 'x', '2022-11-09'),
('x', 0, -1000, 1000, 'x288220193', '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `reqroom`
--

CREATE TABLE `reqroom` (
  `pin` varchar(20) NOT NULL,
  `n` varchar(30) NOT NULL,
  `co` varchar(20) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `phn` int(11) NOT NULL,
  `ei` varchar(50) NOT NULL,
  `usid` varchar(30) NOT NULL,
  `t` varchar(100) NOT NULL,
  `ni` varchar(20) NOT NULL,
  `du` varchar(20) NOT NULL,
  `ms` varchar(15) NOT NULL,
  `dj` varchar(30) NOT NULL,
  `alloted` varchar(10) NOT NULL DEFAULT '0',
  `roomid` varchar(20) NOT NULL,
  `report` varchar(300) NOT NULL,
  `fees` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reqroom`
--

INSERT INTO `reqroom` (`pin`, `n`, `co`, `ad`, `phn`, `ei`, `usid`, `t`, `ni`, `du`, `ms`, `dj`, `alloted`, `roomid`, `report`, `fees`) VALUES
('20cm27', 'Abhirami', 'cme', 'amp', 88888899, 'Abhi@mail.com', 'abhi', 'AC DELUXE ROOM WITH ATTACHED TOILET WITHOUT STUDY ROOM (3 Bed)', 'single installment', 'AcademicYear', 'vegetarian', '2022-12-08', 'yes', 'C DEL122', '0', 122975),
('20cm51', 'Akshaya', 'cme', 'amp', 88888888, 'Akshaya@whitemail.com', 'akshaya', 'AC DELUXE ROOM WITH ATTACHED TOILET WITH STUDY ROOM (3-BED)', 'single installment', 'AcademicYear', 'Non-vegetarian', '2022-12-08', 'yes', 'C DEL137', 'fgfg', 137975),
('20cm69', 'fathima', 'aiml', 'kkd', 99999999, 'fati@mail.com', 'fathima', 'AC ROOM WITH COMMON  TOILET  (4-BED)', 'one sem', 'Single Semester', 'Non-vegetarian', '2023-01-05', 'yes', 'C ROO107', 'howarre you \r\n', 70200),
('20cm68', 'Nani', 'mce', 'rjy', 77886699, 'nani@mail.com', 'nani', 'NON-AC ROOM WITH COMMON TOILET  (1-BED)', '2 installements', 'AcademicYear', 'Non-vegetarian', '2023-01-05', '0', '', '', 0),
('20cm101', 'prabha', 'cme', 'amp', 8888888, 'prabha@gmail.com', 'prabha', 'AC SUPER DELUXE ROOM WITH ATTACHED TOILET  (2-BED)', 'one sem', 'Single Semester', 'Non-vegetarian', '2023-01-06', '0', '', '', 0),
('20cm13', 'Priya', 'cme', 'amp', 2147483647, 'Priya@whitemail.com', 'priya', 'AC DELUXE ROOM WITH ATTACHED TOILET WITH STUDY ROOM (3-BED)', 'single installment', 'Single Semester', 'vegetarian', '2022-12-07', 'yes', 'C DEL137', 'hi', 135775),
('20cm67', 'Rajesh', 'ece', 'kpt', 89898989, 'rajesh@mail.com', 'rajesh', 'NON-AC ROOM WITH COMMON TOILET (4-BED)', 'single installment', 'AcademicYear', 'vegetarian', '2022-12-08', '0', '', 'hi', 0),
('20cm56', 'raji', 'cme', 'amp', 56784, 'raji@mail.com', 'raji', 'NON-AC ROOM WITH COMMON TOILET (4-BED)', '2 installements', 'AcademicYear', 'vegetarian', '2022-12-07', 'yes', 'ON-AC979', '0', 100000),
('20cm41', 'Sruthi', 'cme', 'amp', 88888888, 'sruthi@mail.com', 'sruthi', 'AC SUPER DELUXE ROOM WITH ATTACHED TOILET  (2-BED)', 'single installment', 'AcademicYear', 'vegetarian', '2022-12-07', 'yes', 'C SUP142', '0', 142975),
('20cm100', 'Tony', 'CME', 'amp', 88776677, 'tonu@gmail.com', 'tony', 'AC SUPER DELUXE ROOM WITH ATTACHED TOILET  (2-BED)', '2 installements', 'AcademicYear', 'Non-vegetarian', '2023-01-05', '0', '', 'hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `type` varchar(100) NOT NULL,
  `noofrooms1` int(11) NOT NULL,
  `noofrooms` int(11) NOT NULL,
  `sin` int(11) NOT NULL,
  `dou` int(11) NOT NULL,
  `m1` int(11) NOT NULL,
  `m2` float NOT NULL,
  `onesem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`type`, `noofrooms1`, `noofrooms`, `sin`, `dou`, `m1`, `m2`, `onesem`) VALUES
('A/C Common Toilet (3-bed)', 21, 20, 112900, 58000, 35700, 11900, 73500),
('AC DELUXE ROOM WITH ATTACHED TOILET WITH STUDY ROOM (3-BED)', 20, 16, 137975, 70500, 43200, 14400, 90000),
('AC DELUXE ROOM WITH ATTACHED TOILET WITHOUT STUDY ROOM (3 Bed)', 20, 19, 122975, 63000, 38700, 12900, 80000),
('AC ROOM WITH COMMON  TOILET  (4-BED)', 20, 18, 107975, 55500, 34200, 11400, 70200),
('AC SUPER DELUXE ROOM WITH ATTACHED TOILET  (2-BED)', 20, 19, 142975, 73000, 44700, 14900, 93000),
('Non A/C attached (3-bed)', 20, 19, 107975, 55500, 34200, 11400, 71000),
('Non A/C Common Toilet (3-bed)', 20, 20, 102975, 53000, 32700, 10900, 67000),
('NON-AC ROOM WITH COMMON TOILET  (1-BED)', 20, 20, 112975, 58000, 35700, 11900, 73500),
('NON-AC ROOM WITH COMMON TOILET (4-BED)', 20, 18, 97975, 50500, 31200, 10400, 63700);

-- --------------------------------------------------------

--
-- Table structure for table `stu_reg`
--

CREATE TABLE `stu_reg` (
  `pinno` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phoneno` int(11) NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `usid` varchar(20) NOT NULL,
  `pw` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_reg`
--

INSERT INTO `stu_reg` (`pinno`, `Name`, `Course`, `Address`, `Phoneno`, `Emailid`, `usid`, `pw`) VALUES
('20cm06', 'Pallavi', 'cme', 'amp', 77777777, 'pallavi@mail.com', 'pallavi', 'p'),
('20cm100', 'Tony', 'CME', 'amp', 88776677, 'tonu@gmail.com', 'tony', 't'),
('20cm101', 'prabha', 'cme', 'amp', 8888888, 'prabha@gmail.com', 'prabha', 'p'),
('20cm13', 'Priya', 'cme', 'amp', 2147483647, 'Priya@whitemail.com', 'priya', 'p'),
('20cm27', 'Abhirami', 'cme', 'amp', 88888899, 'Abhi@mail.com', 'abhi', 'a'),
('20cm41', 'Sruthi', 'cme', 'amp', 88888888, 'sruthi@mail.com', 'sruthi', 's'),
('20cm51', 'Akshaya', 'cme', 'amp', 88888888, 'Akshaya@whitemail.com', 'akshaya', 'a'),
('20cm56', 'raji', 'cme', 'amp', 56784, 'raji@mail.com', 'raji', 'r'),
('20cm67', 'Rajesh', 'ece', 'kpt', 89898989, 'rajesh@mail.com', 'rajesh', 'r'),
('20cm68', 'Nani', 'mce', 'rjy', 77886699, 'nani@mail.com', 'nani', 'n'),
('20cm69', 'fathima', 'aiml', 'kkd', 99999999, 'fati@mail.com', 'fathima', 'f'),
('20pm100', 'modi', 'politics', 'delhi', 2147483647, 'modi@bjp.com', 'modi', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admlogin`
--
ALTER TABLE `admlogin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `reqroom`
--
ALTER TABLE `reqroom`
  ADD PRIMARY KEY (`usid`),
  ADD UNIQUE KEY `pin` (`pin`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `stu_reg`
--
ALTER TABLE `stu_reg`
  ADD PRIMARY KEY (`pinno`),
  ADD UNIQUE KEY `usid` (`usid`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"bvchdb\",\"table\":\"admlogin\"},{\"db\":\"bvchdb\",\"table\":\"rooms\"},{\"db\":\"bvchdb\",\"table\":\"reqroom\"},{\"db\":\"bvchdb\",\"table\":\"stu_reg\"},{\"db\":\"bvchdb\",\"table\":\"payment\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-12-19 05:47:19', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
