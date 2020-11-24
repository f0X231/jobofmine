# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.22-log)
# Database: laravel
# Generation Time: 2020-11-24 01:20:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` int(11) NOT NULL,
  `title` text NOT NULL,
  `detail` text,
  `credit` varchar(150) DEFAULT NULL,
  `banner` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `gallery_id` int(8) DEFAULT NULL,
  `is_home` enum('Y','N') DEFAULT 'N',
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `create_date` datetime DEFAULT NULL,
  `create_by` int(3) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `order_no`, `title`, `detail`, `credit`, `banner`, `thumbnail`, `gallery_id`, `is_home`, `is_active`, `is_delete`, `create_date`, `create_by`, `update_date`, `update_by`)
VALUES
	(1,4,'a:2:{s:2:\"th\";s:128:\"คนใกล้ตัวมีแนวโน้มฆ่าตัวตาย จะรับมืออย่างไร?\";s:2:\"en\";s:128:\"คนใกล้ตัวมีแนวโน้มฆ่าตัวตาย จะรับมืออย่างไร?\";}',NULL,NULL,NULL,'a:2:{s:2:\"th\";s:40:\"/images/article/thumbnail/article_04.jpg\";s:2:\"en\";s:40:\"/images/article/thumbnail/article_04.jpg\";}',NULL,'N','Y','N',NULL,NULL,NULL,NULL),
	(2,5,'a:2:{s:2:\"th\";s:99:\"ทำอย่างไรเมื่อเด็กมีปัญหาการเรียน\";s:2:\"en\";s:99:\"ทำอย่างไรเมื่อเด็กมีปัญหาการเรียน\";}',NULL,NULL,NULL,'a:2:{s:2:\"th\";s:40:\"/images/article/thumbnail/article_05.jpg\";s:2:\"en\";s:40:\"/images/article/thumbnail/article_05.jpg\";}',NULL,'N','Y','N',NULL,NULL,NULL,NULL),
	(3,1,'a:2:{s:2:\"th\";s:66:\"โรคซึมเศร้าเรารักษาได้\";s:2:\"en\";s:66:\"โรคซึมเศร้าเรารักษาได้\";}',NULL,NULL,NULL,'a:2:{s:2:\"th\";s:40:\"/images/article/thumbnail/article_01.jpg\";s:2:\"en\";s:40:\"/images/article/thumbnail/article_01.jpg\";}',NULL,'N','Y','N',NULL,NULL,NULL,NULL),
	(4,6,'a:2:{s:2:\"th\";s:73:\"ลูกเราสมาธิสั้นหรือเปล่า?\";s:2:\"en\";s:74:\"ลูกเราสมาธิสั้นหรือเปล่า? \";}',NULL,NULL,NULL,'a:2:{s:2:\"th\";s:40:\"/images/article/thumbnail/article_06.jpg\";s:2:\"en\";s:40:\"/images/article/thumbnail/article_06.jpg\";}',NULL,'N','Y','N',NULL,NULL,NULL,NULL),
	(5,2,'a:2:{s:2:\"th\";s:54:\"วิธีจัดการความโกรธ\";s:2:\"en\";s:54:\"วิธีจัดการความโกรธ\";}',NULL,NULL,NULL,'a:2:{s:2:\"th\";s:40:\"/images/article/thumbnail/article_02.jpg\";s:2:\"en\";s:40:\"/images/article/thumbnail/article_02.jpg\";}',NULL,'N','Y','N',NULL,NULL,NULL,NULL),
	(6,3,'a:2:{s:2:\"th\";s:75:\"คุณวิตกกังวลมากไปหรือป่าว\";s:2:\"en\";s:75:\"คุณวิตกกังวลมากไปหรือป่าว\";}',NULL,NULL,NULL,'a:2:{s:2:\"th\";s:40:\"/images/article/thumbnail/article_03.jpg\";s:2:\"en\";s:40:\"/images/article/thumbnail/article_03.jpg\";}',NULL,'N','Y','N',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table banner
# ------------------------------------------------------------

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `page` varchar(50) NOT NULL DEFAULT '',
  `page_id` int(11) DEFAULT NULL,
  `typefile` enum('IMG','VDO') NOT NULL DEFAULT 'IMG',
  `sourcefile` varchar(350) NOT NULL DEFAULT '',
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `create_date` datetime DEFAULT NULL,
  `create_by` int(3) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;

INSERT INTO `banner` (`id`, `order_no`, `title`, `page`, `page_id`, `typefile`, `sourcefile`, `start_date`, `end_date`, `is_active`, `is_delete`, `create_date`, `create_by`, `update_date`, `update_by`)
VALUES
	(1,1,'ปัญหาวัยรุ่นว้าวุ่นใจ','services',2,'IMG','a:2:{s:2:\"th\";s:36:\"/images/banner/banner_service_02.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_service_02.jpg\";}',NULL,NULL,'Y','N',NULL,NULL,NULL,NULL),
	(2,2,'ปัญหาในวัยทำงาน','services',1,'IMG','a:2:{s:2:\"th\";s:36:\"/images/banner/banner_service_02.jpg\";s:2:\"en\";s:36:\"/images/banner/banner_service_02.jpg\";}',NULL,NULL,'Y','N',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table doctors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `doctors`;

CREATE TABLE `doctors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` int(11) DEFAULT NULL,
  `name` varchar(350) NOT NULL DEFAULT '',
  `license` int(11) DEFAULT NULL,
  `position` varchar(350) DEFAULT NULL,
  `department` varchar(350) DEFAULT NULL,
  `education` text,
  `work` text,
  `research` text,
  `extended` text,
  `thumbnail` varchar(350) DEFAULT NULL,
  `picture` varchar(350) DEFAULT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `create_date` datetime DEFAULT NULL,
  `create_by` int(3) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;

INSERT INTO `doctors` (`id`, `order_no`, `name`, `license`, `position`, `department`, `education`, `work`, `research`, `extended`, `thumbnail`, `picture`, `is_active`, `is_delete`, `create_date`, `create_by`, `update_date`, `update_by`)
VALUES
	(1,1,'a:2:{s:2:\"th\";s:67:\"นายแพทย์จตุภัทร คุณสงค์\";s:2:\"en\";s:67:\"นายแพทย์จตุภัทร คุณสงค์\";}',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/images/doctor/thumbnail/doctor_01.jpg','/images/doctor/picture/doctor_01.jpg','Y','N',NULL,NULL,NULL,NULL),
	(2,5,'a:2:{s:2:\"th\";s:64:\"นายแพทย์ภูมิปภพ สุนศุข\";s:2:\"en\";s:64:\"นายแพทย์ภูมิปภพ สุนศุข\";}',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/images/doctor/thumbnail/doctor_05.jpg','/images/doctor/picture/doctor_05.jpg','Y','N',NULL,NULL,NULL,NULL),
	(3,6,'a:2:{s:2:\"th\";s:73:\"แพทย์หญิงมนิสสรา เกตุแก้ว\";s:2:\"en\";s:73:\"แพทย์หญิงมนิสสรา เกตุแก้ว\";}',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/images/doctor/thumbnail/doctor_07.jpg','/images/doctor/picture/doctor_06.jpg','Y','N',NULL,NULL,NULL,NULL),
	(4,2,'a:2:{s:2:\"th\";s:64:\"แพทย์หญิงปรานี ปวีณชนา\";s:2:\"en\";s:64:\"แพทย์หญิงปรานี ปวีณชนา\";}',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/images/doctor/thumbnail/doctor_02.jpg','/images/doctor/picture/doctor_02.jpg','Y','N',NULL,NULL,NULL,NULL),
	(5,4,'a:2:{s:2:\"th\";s:91:\"แพทย์หญิงสุชาวดี พงศ์ธนวิสุทธิ์\";s:2:\"en\";s:91:\"แพทย์หญิงสุชาวดี พงศ์ธนวิสุทธิ์\";}',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/images/doctor/thumbnail/doctor_04.jpg','/images/doctor/picture/doctor_04.jpg','Y','N',NULL,NULL,NULL,NULL),
	(6,3,'a:2:{s:2:\"th\";s:82:\"แพทย์หญิงวิลาวัลย์ กำจรปรีชา\";s:2:\"en\";s:82:\"แพทย์หญิงวิลาวัลย์ กำจรปรีชา\";}',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/images/doctor/thumbnail/doctor_03.jpg','/images/doctor/picture/doctor_03.jpg','Y','N',NULL,NULL,NULL,NULL),
	(7,8,'a:2:{s:2:\"th\";s:82:\"พญ.ดร. ประวีณ์นุช เพ็ญภาสกานต์\";s:2:\"en\";s:82:\"พญ.ดร. ประวีณ์นุช เพ็ญภาสกานต์\";}',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'N','N',NULL,NULL,NULL,NULL),
	(8,7,'a:2:{s:2:\"th\";s:76:\"แพทย์หญิงเต็มหทัย นาคเทวัญ\";s:2:\"en\";s:76:\"แพทย์หญิงเต็มหทัย นาคเทวัญ\";}',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/images/doctor/thumbnail/doctor_06.jpg','/images/doctor/picture/doctor_07.jpg','Y','N',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(50) NOT NULL DEFAULT '',
  `page_id` int(11) NOT NULL,
  `order_no` int(3) DEFAULT NULL,
  `picture` varchar(150) NOT NULL DEFAULT '',
  `description` varchar(150) DEFAULT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `create_date` datetime DEFAULT NULL,
  `createy_by` int(3) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;

INSERT INTO `gallery` (`id`, `page`, `page_id`, `order_no`, `picture`, `description`, `is_active`, `is_delete`, `create_date`, `createy_by`, `update_date`, `update_by`)
VALUES
	(1,'services',1,1,'service_1_01.jpg',NULL,'Y','N',NULL,NULL,NULL,NULL),
	(2,'services',1,2,'service_1_02.jpg',NULL,'Y','N',NULL,NULL,NULL,NULL),
	(3,'services',1,3,'service_1_03.jpg',NULL,'Y','N',NULL,NULL,NULL,NULL),
	(4,'services',1,4,'service_1_04.jpg',NULL,'Y','N',NULL,NULL,NULL,NULL),
	(5,'services',2,1,'service_2_01.jpg',NULL,'Y','N',NULL,NULL,NULL,NULL),
	(6,'services',2,2,'service_2_02.jpg',NULL,'Y','N',NULL,NULL,NULL,NULL),
	(7,'services',2,3,'service_2_03.jpg',NULL,'Y','N',NULL,NULL,NULL,NULL),
	(8,'services',2,4,'service_2_04.jpg',NULL,'Y','N',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` int(11) DEFAULT NULL,
  `title` text,
  `description` text,
  `detail` text,
  `thumbnail` varchar(500) DEFAULT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `create_date` datetime DEFAULT NULL,
  `create_by` int(3) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `order_no`, `title`, `description`, `detail`, `thumbnail`, `is_active`, `is_delete`, `create_date`, `create_by`, `update_date`, `update_by`)
VALUES
	(1,1,'a:2:{s:2:\"th\";s:45:\"ปัญหาในวัยทำงาน\";s:2:\"en\";s:45:\"ปัญหาในวัยทำงาน\";}','a:2:{s:2:\"th\";s:305:\"รับฟังปัญหาของคุณ และให้เวลาในการพูดคุยเต็มที่โดยจิตแพทย์ผู้เชียวชาญ สรุปปัญหาและค้นหาทางแก้ไขไปร่วมกัน\";s:2:\"en\";s:305:\"รับฟังปัญหาของคุณ และให้เวลาในการพูดคุยเต็มที่โดยจิตแพทย์ผู้เชียวชาญ สรุปปัญหาและค้นหาทางแก้ไขไปร่วมกัน\";}','a:2:{s:2:\"th\";s:2335:\"<h3>ปัญหาส่วนใหญ่ที่พบ</h3><ul><li>ปัญหาเรื่องงาน</li><li>เพื่อนร่วมงานไม่เข้าใจ</li><li>เบื่อหัวหน้า</li><li>ปรับตัวกับงานใหม่ไม่ได้</li><li>ไม่เป็นที่ชื่นชม</li><li>ประสิทธิภาพในการทำงานลดลง</li><li>หมดไฟ</li><li>ขาดความก้าวหน้าในอาชีพ</li></ul><h3>ปัญหาครอบครับ</h3><ul><li>พ่อแม่ไม่เข้าใจ</li><li>ลูกดื้อ</li><li>ทะเลาะกับสามี/ภรรยา</li><li>การทำงานแบบกงสี</li><li>รู้สึกว่าพ่อแม่รักไม่เท่ากัน</li><li>การสูญเสียคนในครอบครับ</li></ul><h3>ปัญหาความรัก</h3><ul><li>ผิดหวังในความรัก</li><li>ความไม่เข้าใจกันในชีวิตคู่</li><li>หย่อนสมรรถภาพทางเพศ</li><li>ปัญหาของเพศทางเลือก</li><li>ถูกนอกใจ</li><li>การสูญเสียคนรัก</li><li>ควบคุมอารมณ์ไม่ได้</li><li>ซึมเศร้า</li><li>หงุดหงิดง่าย</li><li>ใช้จ่ายมากเกินไป</li><li>วิตกกังวล</li><li>ย้ำคิดย้ำทำ</li><li>ปัญหาการนอน</li><li>ตื่นบ่อย</li><li>ฝันร้าย</li><li>ละเมอ</li><li>ง่วงตลอดเวลา</li><li>หลับมากเกินไป</li></ul><h3>ปัญหาการเสพติด</h3><ul><li>ติดพนัน</li><li>อยากเลิกเหล้า</li><li>ติดเกม</li><li>สารเสพติด: ไอซ์ กัญชา โคเคน เป็นต้น</li><li>ติด sex</li><li>เสพติดศัลยกรรม</li><li>ป่วยทางกายที่หาสาเหตุไม่ได้</li></ul>\";s:2:\"en\";s:2335:\"<h3>ปัญหาส่วนใหญ่ที่พบ</h3><ul><li>ปัญหาเรื่องงาน</li><li>เพื่อนร่วมงานไม่เข้าใจ</li><li>เบื่อหัวหน้า</li><li>ปรับตัวกับงานใหม่ไม่ได้</li><li>ไม่เป็นที่ชื่นชม</li><li>ประสิทธิภาพในการทำงานลดลง</li><li>หมดไฟ</li><li>ขาดความก้าวหน้าในอาชีพ</li></ul><h3>ปัญหาครอบครับ</h3><ul><li>พ่อแม่ไม่เข้าใจ</li><li>ลูกดื้อ</li><li>ทะเลาะกับสามี/ภรรยา</li><li>การทำงานแบบกงสี</li><li>รู้สึกว่าพ่อแม่รักไม่เท่ากัน</li><li>การสูญเสียคนในครอบครับ</li></ul><h3>ปัญหาความรัก</h3><ul><li>ผิดหวังในความรัก</li><li>ความไม่เข้าใจกันในชีวิตคู่</li><li>หย่อนสมรรถภาพทางเพศ</li><li>ปัญหาของเพศทางเลือก</li><li>ถูกนอกใจ</li><li>การสูญเสียคนรัก</li><li>ควบคุมอารมณ์ไม่ได้</li><li>ซึมเศร้า</li><li>หงุดหงิดง่าย</li><li>ใช้จ่ายมากเกินไป</li><li>วิตกกังวล</li><li>ย้ำคิดย้ำทำ</li><li>ปัญหาการนอน</li><li>ตื่นบ่อย</li><li>ฝันร้าย</li><li>ละเมอ</li><li>ง่วงตลอดเวลา</li><li>หลับมากเกินไป</li></ul><h3>ปัญหาการเสพติด</h3><ul><li>ติดพนัน</li><li>อยากเลิกเหล้า</li><li>ติดเกม</li><li>สารเสพติด: ไอซ์ กัญชา โคเคน เป็นต้น</li><li>ติด sex</li><li>เสพติดศัลยกรรม</li><li>ป่วยทางกายที่หาสาเหตุไม่ได้</li></ul>\";}','a:2:{s:2:\"th\";s:31:\"/images/services/service_01.jpg\";s:2:\"en\";s:31:\"/images/services/service_01.jpg\";}','Y','N',NULL,NULL,NULL,NULL),
	(2,2,'a:2:{s:2:\"th\";s:63:\"ปัญหาวัยรุ่นว้าวุ่นใจ\";s:2:\"en\";s:63:\"ปัญหาวัยรุ่นว้าวุ่นใจ\";}','a:2:{s:2:\"th\";s:427:\"พูดคุยกับคุณหมอจิตแพทย์เด็กและวัยรุ่นที่พร้อมรับฟังและเข้าใจ หาทางออกของปัญหาร่วมกันระหว่างวัยรุ่น จิตแพทย์ ผู้ปกครอง รวมถึงผู้ที่เกี่ยวข้องอื่นๆ\";s:2:\"en\";s:427:\"พูดคุยกับคุณหมอจิตแพทย์เด็กและวัยรุ่นที่พร้อมรับฟังและเข้าใจ หาทางออกของปัญหาร่วมกันระหว่างวัยรุ่น จิตแพทย์ ผู้ปกครอง รวมถึงผู้ที่เกี่ยวข้องอื่นๆ\";}','a:2:{s:2:\"th\";s:2765:\"<h3>ปัญหาส่วนใหญ่ที่พบ</h3><ul><li>ครอบครัวไม่เข้าใจ</li><li>ถูกตำหนิต่อว่าบ่อยๆ</li><li>ครอบครัวละเลยไม่สนใจ</li><li>ถูกบังคับมากไปจนขาดอิสระ</li></ul><h3>ปัญหาความรัก</h3><ul><li>ผิดหวังในความรัก</li><li>มีเพศสัมพันธ์ก่อนวัยอันควรหรือไม่ปลอดภัย</li><li>สับสนรสนิยมทางเพศ</li><li>ปรึกษาเรื่องเพศทางเลือก</li></ul><h3>ปัญหาเรื่องเพื่อน</h3><ul><li>เข้ากับเพื่อนไม่ได้</li><li>เพื่อนไม่ยอมรับ</li><li>มีปัญหาเรื่องทำงานกลุ่ม</li><li>ถูกรังแก</li><li>แยกตัว</li><li>อยากมีเพื่อนแต่ไม่รู้ต้องทำยังไง</li><li>คบเพื่อนเกเร</li></ul><h3>ปัญหาการเรียน</h3><ul><li>ไม่อยากไปโรงเรียน</li><li>อ่าน เขียน คำนวนไม่คล่อง</li><li>ส่งงานไม่ครบ ทำงานไม่ทัน</li><li>ความจำไม่ดี</li><li>ติดเกมส์/โซเซียลมีเดีย</li><li>ติดพนันออนไลน์</li></ul><h3>ปัญหาด้านอารมณ์</h3><ul><li>เศร้า</li><li>เบื่อ</li><li>หงุดหงิดง่าย</li><li>วิตกกังวล</li><li>ย้ำคิดย้ำทำ</li><li>ผวาหลอนจากการเจอเรื่องแย่ๆ</li></ul><h3>ปัญหาเรื่องการกิน</h3><ul><li>กลัวการกินอาหาร</li><li>กินมากเกินไป</li><li>นอนไม่หลับ หรือ นอนมากไป</li><li>ไม่รู้ความต้องการของตัวเอง เลือกเส้นทางชีวิตไม่ได้</li><li>เนือย เฉื่อยชา หมดไฟ ไม่อยากทำอะไร</li><li>มีอากาทางกายที่หาสาเหตุไม่ได้ เช่น ปวดหัว, ปวดท้อง, พฤติกรรมเสี่ยง เช่น การใช้สารเสพติด, หนีออกจากบ้าน</li></ul>\";s:2:\"en\";s:2765:\"<h3>ปัญหาส่วนใหญ่ที่พบ</h3><ul><li>ครอบครัวไม่เข้าใจ</li><li>ถูกตำหนิต่อว่าบ่อยๆ</li><li>ครอบครัวละเลยไม่สนใจ</li><li>ถูกบังคับมากไปจนขาดอิสระ</li></ul><h3>ปัญหาความรัก</h3><ul><li>ผิดหวังในความรัก</li><li>มีเพศสัมพันธ์ก่อนวัยอันควรหรือไม่ปลอดภัย</li><li>สับสนรสนิยมทางเพศ</li><li>ปรึกษาเรื่องเพศทางเลือก</li></ul><h3>ปัญหาเรื่องเพื่อน</h3><ul><li>เข้ากับเพื่อนไม่ได้</li><li>เพื่อนไม่ยอมรับ</li><li>มีปัญหาเรื่องทำงานกลุ่ม</li><li>ถูกรังแก</li><li>แยกตัว</li><li>อยากมีเพื่อนแต่ไม่รู้ต้องทำยังไง</li><li>คบเพื่อนเกเร</li></ul><h3>ปัญหาการเรียน</h3><ul><li>ไม่อยากไปโรงเรียน</li><li>อ่าน เขียน คำนวนไม่คล่อง</li><li>ส่งงานไม่ครบ ทำงานไม่ทัน</li><li>ความจำไม่ดี</li><li>ติดเกมส์/โซเซียลมีเดีย</li><li>ติดพนันออนไลน์</li></ul><h3>ปัญหาด้านอารมณ์</h3><ul><li>เศร้า</li><li>เบื่อ</li><li>หงุดหงิดง่าย</li><li>วิตกกังวล</li><li>ย้ำคิดย้ำทำ</li><li>ผวาหลอนจากการเจอเรื่องแย่ๆ</li></ul><h3>ปัญหาเรื่องการกิน</h3><ul><li>กลัวการกินอาหาร</li><li>กินมากเกินไป</li><li>นอนไม่หลับ หรือ นอนมากไป</li><li>ไม่รู้ความต้องการของตัวเอง เลือกเส้นทางชีวิตไม่ได้</li><li>เนือย เฉื่อยชา หมดไฟ ไม่อยากทำอะไร</li><li>มีอากาทางกายที่หาสาเหตุไม่ได้ เช่น ปวดหัว, ปวดท้อง, พฤติกรรมเสี่ยง เช่น การใช้สารเสพติด, หนีออกจากบ้าน</li></ul>\";}','a:2:{s:2:\"th\";s:31:\"/images/services/service_02.jpg\";s:2:\"en\";s:31:\"/images/services/service_02.jpg\";}','Y','N',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
