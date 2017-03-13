

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `nickmane` (
  `id` int(9) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `nickmane` (`id`, `nickname`) VALUES
(28, 'chutiya');

CREATE TABLE `teacher` (
  `id` int(9) NOT NULL,
  `rank` int(9) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `name` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `teacher` (`id`, `rank`, `pic`, `branch`, `name`) VALUES
(1, 0, 'img/civil/1.jpg', 'CE', NULL),
(2, 0, 'img/civil/2.jpg', 'CE', NULL),
(3, 0, 'img/civil/3.jpg', 'CE', NULL),
(4, 0, 'img/civil/4.jpg', 'CE', NULL),
(5, 0, 'img/civil/5.jpg', 'CE', NULL),
(6, 0, 'img/civil/6.jpg', 'CE', NULL),
(7, 0, 'img/civil/7.jpg', 'CE', NULL),
(8, 0, 'img/civil/8.jpg', 'CE', NULL),
(9, 0, 'img/civil/9.jpg', 'CE', NULL),
(10, 0, 'img/civil/10.jpg', 'CE', NULL),
(11, 0, 'img/civil/11.jpg', 'CE', NULL),
(12, 0, 'img/civil/12.jpg', 'CE', NULL),
(13, 0, 'img/civil/13.jpg', 'CE', NULL),
(14, 0, 'img/civil/14.jpg', 'CE', NULL),
(15, 0, 'img/civil/15.jpg', 'CE', NULL),
(16, 0, 'img/civil/16.jpg', 'CE', NULL),
(17, 0, 'img/civil/17.jpg', 'CE', NULL),
(18, 0, 'img/civil/18.jpg', 'CE', NULL),
(19, 0, 'img/cseit/19.jpg', 'CSEIT', NULL),
(20, 0, 'img/cseit/20.jpg', 'CSEIT', NULL),
(21, 0, 'img/cseit/21.jpg', 'CSEIT', NULL),
(22, 0, 'img/cseit/22.jpg', 'CSEIT', NULL),
(23, 0, 'img/cseit/23.jpg', 'CSEIT', NULL),
(24, 0, 'img/cseit/24.jpg', 'CSEIT', NULL),
(25, 0, 'img/cseit/25.jpg', 'CSEIT', NULL),
(26, 0, 'img/cseit/26.jpg', 'CSEIT', NULL),
(27, 0, 'img/cseit/27.jpg', 'CSEIT', NULL),
(28, 0, 'img/cseit/28.jpg', 'CSEIT', NULL),
(29, 0, 'img/cseit/29.jpg', 'CSEIT', NULL),
(30, 0, 'img/cseit/30.jpg', 'CSEIT', NULL),
(31, 0, 'img/cseit/31.jpg', 'CSEIT', NULL),
(32, 0, 'img/cseit/32.jpg', 'CSEIT', NULL),
(33, 0, 'img/cseit/33.jpg', 'CSEIT', NULL),
(34, 0, 'img/cseit/34.jpg', 'CSEIT', NULL),
(35, 0, 'img/cseit/35.jpg', 'CSEIT', NULL),
(36, 0, 'img/cseit/36.jpg', 'CSEIT', NULL),
(37, 0, 'img/ee/37.jpg', 'EE', NULL),
(38, 0, 'img/ee/38.jpg', 'EE', NULL),
(39, 0, 'img/ee/39.jpg', 'EE', NULL),
(40, 0, 'img/ee/40.jpg', 'EE', NULL),
(41, 0, 'img/ee/41.jpg', 'EE', NULL),
(42, 0, 'img/ee/42.jpg', 'EE', NULL),
(43, 0, 'img/ee/43.jpg', 'EE', NULL),
(44, 0, 'img/ee/44.jpg', 'EE', NULL),
(45, 0, 'img/ee/45.jpg', 'EE', NULL),
(46, 0, 'img/ee/46.jpg', 'EE', NULL),
(47, 0, 'img/ee/47.jpg', 'EE', NULL),
(48, 0, 'img/ee/48.jpg', 'EE', NULL),
(49, 0, 'img/ee/49.jpg', 'EE', NULL),
(50, 0, 'img/ee/50.jpg', 'EE', NULL),
(51, 0, 'img/ee/51.jpg', 'EE', NULL),
(52, 0, 'img/ee/52.jpg', 'EE', NULL),
(53, 0, 'img/ee/53.jpg', 'EE', NULL),
(54, 0, 'img/ee/54.jpg', 'EE', NULL),
(55, 0, 'img/ee/55.jpg', 'EE', NULL),
(56, 0, 'img/ee/56.jpg', 'EE', NULL),
(57, 0, 'img/etc/58.jpg', 'ETC', NULL),
(58, 0, 'img/etc/59.jpg', 'ETC', NULL),
(59, 0, 'img/etc/60.jpg', 'ETC', NULL),
(60, 0, 'img/etc/61.jpg', 'ETC', NULL),
(61, 0, 'img/etc/62.jpg', 'ETC', NULL),
(62, 0, 'img/etc/63.jpg', 'ETC', NULL),
(63, 0, 'img/etc/64.jpg', 'ETC', NULL),
(64, 0, 'img/etc/65.jpg', 'ETC', NULL),
(65, 0, 'img/etc/66.jpg', 'ETC', NULL),
(66, 0, 'img/etc/67.jpg', 'ETC', NULL),
(67, 0, 'img/etc/68.jpg', 'ETC', NULL),
(68, 0, 'img/etc/69.jpg', 'ETC', NULL),
(69, 0, 'img/etc/70.jpg', 'ETC', NULL),
(70, 0, 'img/etc/71.jpg', 'ETC', NULL),
(71, 0, 'img/etc/72.jpg', 'ETC', NULL),
(72, 0, 'img/etc/73.jpg', 'ETC', NULL),
(73, 0, 'img/etc/74.jpg', 'ETC', NULL),
(74, 0, 'img/me/75.jpg', 'ME', NULL),
(75, 0, 'img/me/76.jpg', 'ME', NULL),
(76, 0, 'img/me/77.jpg', 'ME', NULL),
(77, 0, 'img/me/78.jpg', 'ME', NULL),
(78, 0, 'img/me/79.jpg', 'ME', NULL),
(79, 0, 'img/me/80.jpg', 'ME', NULL),
(80, 0, 'img/me/81.jpg', 'ME', NULL),
(81, 0, 'img/me/82.jpg', 'ME', NULL),
(82, 0, 'img/me/83.jpg', 'ME', NULL),
(83, 0, 'img/me/84.jpg', 'ME', NULL),
(84, 0, 'img/me/85.jpg', 'ME', NULL),
(85, 0, 'img/me/86.jpg', 'ME', NULL),
(86, 0, 'img/prodn/87.jpg', 'PE', NULL),
(87, 0, 'img/prodn/88.jpg', 'PE', NULL),
(88, 0, 'img/prodn/89.jpg', 'PE', NULL),
(89, 0, 'img/prodn/90.jpg', 'PE', NULL),
(90, 0, 'img/prodn/91.jpg', 'PE', NULL),
(91, 0, 'img/prodn/92.jpg', 'PE', NULL),
(92, 0, 'img/prodn/93.jpg', 'PE', NULL),
(93, 0, 'img/prodn/94.jpg', 'PE', NULL),
(94, 0, 'img/prodn/95.jpg', 'PE', NULL);

ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `teacher`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
