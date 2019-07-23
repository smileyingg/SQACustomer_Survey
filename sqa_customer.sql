-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2019 at 03:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqa_customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `company_name` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_position` varchar(200) NOT NULL,
  `customer_telephone` varchar(10) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `q1_1` int(11) NOT NULL,
  `q1_2` int(11) NOT NULL,
  `q1_3` int(11) NOT NULL,
  `q1_4` int(11) NOT NULL,
  `q1_5` int(11) NOT NULL,
  `q2_1` int(11) NOT NULL,
  `q2_2` int(11) NOT NULL,
  `q2_3` int(11) NOT NULL,
  `q2_4` int(11) NOT NULL,
  `q2_5` int(11) NOT NULL,
  `q3_1` int(11) NOT NULL,
  `q3_2` int(11) NOT NULL,
  `q3_3` int(11) NOT NULL,
  `q3_4` int(11) NOT NULL,
  `suggestions_detail` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'admin',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `username`, `pass`, `status`) VALUES
(1, 'sdiadmin', 'mis@Pass01', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(5) NOT NULL AUTO_INCREMENT,
  `group_question_id` int(5) NOT NULL,
  `q_id` varchar(5) NOT NULL,
  `question` varchar(200) NOT NULL,
  PRIMARY KEY (`question_id`,`group_question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `group_question_id`, `q_id`, `question`) VALUES
(1, 1, 'q1_1', 'มีการแต่งกาย บุคลิกที่สุภาพเรียบร้อย และการรักษาพฤติกรรม มารยาทอันดี'),
(2, 1, 'q1_2', 'มีความตรงต่อเวลา มีวินัย'),
(3, 1, 'q1_3', 'มีความเอาใจใส่ กระตือรือร้น และพร้อมที่จะให้บริการ'),
(4, 1, 'q1_4', 'มีความรู้ มีความสามาถ และความเชี่ยวชาญในการให้บริการงาน'),
(5, 1, 'q1_5', 'มีความซื่อสัตย์สุจริตในการปฏิบัติหน้าที่ เช่น ไม่ขอ และไม่รับสิ่งตอบแทน'),
(6, 2, 'q2_1', 'มีการประสานงานได้อย่างมีประสิทธิภาพ สามารถติดต่อได้เสมอ ทันการณ์'),
(7, 2, 'q2_2', 'ความสามารถในการหาทางแก้ไขปัญหาได้ตรงจุด'),
(8, 2, 'q2_3', 'การให้ข้อเสนอแนะ หรือนำเสนอแนวทางการทำงานอย่างสร้างสรรค์'),
(9, 2, 'q2_4', 'การตรงต่อเวลา'),
(10, 2, 'q2_5', 'ความน่าเชื่อถือ สามารถประสานงานจนงานนั้นสำเร็จลุล่วง'),
(11, 3, 'q3_1', 'ได้รับการส่งมอบงานตรงเวลาและสามารถส่งมอบงานตามสัญญา'),
(12, 3, 'q3_2', 'ได้รับการบริการ/ผลงานที่คุ้มค่ากับงบประมาณที่ใช้ไป'),
(13, 3, 'q3_3', 'ความพึงพอใจโดยภาพรวมที่ได้รับจากการบริการ'),
(14, 3, 'q3_4', 'รายงาน/เอกสารประกอบการให้บริการมีความถูกต้องเรียบร้อย');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
