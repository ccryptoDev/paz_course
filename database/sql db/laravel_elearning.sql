# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.39)
# Database: laravel_elearning
# Generation Time: 2024-08-06 07:27:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table answers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `answers`;

CREATE TABLE `answers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `question_id` bigint(20) unsigned NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_student_id_index` (`student_id`),
  KEY `answers_question_id_index` (`question_id`),
  CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `answers_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table checkouts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `checkouts`;

CREATE TABLE `checkouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `txnid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 active, 0 inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `checkouts` WRITE;
/*!40000 ALTER TABLE `checkouts` DISABLE KEYS */;

INSERT INTO `checkouts` (`id`, `cart_data`, `student_id`, `txnid`, `status`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(18,'eyJjYXJ0Ijp7IjYiOnsidGl0bGVfZW4iOiJGdWxsLVN0YWNrIFdlYiBEZXZlbG9wbWVudCBCb290Y2FtcDogQmFzaWNzIHRvIEFkdmFuY2VkIiwicXVhbnRpdHkiOjEsInByaWNlIjoiNTAwMC4wMCIsIm9sZF9wcmljZSI6IjkwMDAuMDAiLCJpbWFnZSI6IjE0MDE3MDQxMjY5NzIuanBnIiwiZGlmZmljdWx0eSI6ImJlZ2lubmVyIiwiaW5zdHJ1Y3RvciI6IkJ1cmhhbiBVZGRpbiBGdWFkIn19LCJjYXJ0X2RldGFpbHMiOnsiY2FydF90b3RhbCI6NTAwMCwiY291cG9uX2NvZGUiOiJvZmZlcjIwIiwiZGlzY291bnQiOiIyMC4wMCIsImRpc2NvdW50X2Ftb3VudCI6MTAwMCwidGF4Ijo2MDAsInRvdGFsX2Ftb3VudCI6NDYwMH19',17,'SSLCZ_TXN_6592f9adf2b79',1,'2024-01-01 12:43:09','2024-01-01 12:43:52',NULL);

/*!40000 ALTER TABLE `checkouts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table coupons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_until` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coupons_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;

INSERT INTO `coupons` (`id`, `code`, `discount`, `valid_from`, `valid_until`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'offer20',20.00,'2023-12-09','2024-03-26','2023-12-09 10:30:32','2023-12-09 10:30:32',NULL),
	(2,'el50',50.00,'2023-12-09','2024-12-16','2023-12-09 10:34:18','2023-12-09 10:34:18',NULL);

/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table course_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `course_categories`;

CREATE TABLE `course_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>active 2=>inactive',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `course_categories` WRITE;
/*!40000 ALTER TABLE `course_categories` DISABLE KEYS */;

INSERT INTO `course_categories` (`id`, `category_name`, `category_status`, `category_image`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(2,'Graphics Desgin',1,'3241701795877.jpg','2023-11-19 01:24:08','2023-12-05 12:04:37',NULL),
	(4,'Web Design',1,'1601701795901.jpg','2023-11-19 02:23:53','2023-12-05 12:05:01',NULL),
	(5,'Web Development',1,'4441701795922.jpg','2023-11-19 02:24:44','2023-12-05 12:05:22',NULL),
	(6,'Digital Marketing',1,'9691701795938.jpg','2023-11-19 22:20:48','2023-12-05 12:05:38',NULL),
	(37,'Video Editing',1,'3621701795955.jpg','2023-11-26 04:36:04','2023-12-05 12:05:55',NULL),
	(38,'2D Animation',1,'8361701795972.jpg','2023-12-05 11:47:40','2023-12-05 12:06:12',NULL),
	(39,'3D Animation',1,'3241701795877.jpg','2023-11-19 01:24:08','2023-12-05 12:04:37',NULL),
	(40,'Mobile Development',1,'1601701795901.jpg','2023-11-19 02:23:53','2023-12-05 12:05:01',NULL),
	(41,'Game Development',1,'4441701795922.jpg','2023-11-19 02:24:44','2023-12-05 12:05:22',NULL),
	(42,'Database Design & Development',1,'9691701795938.jpg','2023-11-19 22:20:48','2023-12-05 12:05:38',NULL),
	(43,'Data Science',1,'3621701795955.jpg','2023-11-26 04:36:04','2023-12-05 12:05:55',NULL),
	(44,'Entrepreneurship',1,'8361701795972.jpg','2023-12-05 11:47:40','2023-12-05 12:06:12',NULL),
	(45,'Network Technology',1,'3241701795877.jpg','2023-11-19 01:24:08','2023-12-05 12:04:37',NULL),
	(46,'Hardware',1,'1601701795901.jpg','2023-11-19 02:23:53','2023-12-05 12:05:01',NULL),
	(47,'Software & Security',1,'4441701795922.jpg','2023-11-19 02:24:44','2023-12-05 12:05:22',NULL),
	(48,'Operating System & Server',1,'9691701795938.jpg','2023-11-19 22:20:48','2023-12-05 12:05:38',NULL);

/*!40000 ALTER TABLE `course_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table courses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8mb4_unicode_ci,
  `course_category_id` bigint(20) unsigned NOT NULL,
  `instructor_id` bigint(20) unsigned NOT NULL,
  `type` enum('free','paid','subscription') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'paid',
  `price` decimal(10,2) DEFAULT '0.00',
  `old_price` decimal(10,2) DEFAULT NULL,
  `subscription_price` decimal(10,2) DEFAULT NULL,
  `start_from` timestamp NULL DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `lesson` int(11) DEFAULT NULL,
  `prerequisites` text COLLATE utf8mb4_unicode_ci,
  `difficulty` enum('beginner','intermediate','advanced') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` enum('popular','featured','upcoming') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 pending, 1 inactive, 2 active,',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_category_id_index` (`course_category_id`),
  KEY `courses_instructor_id_index` (`instructor_id`),
  CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`course_category_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;

INSERT INTO `courses` (`id`, `title`, `description`, `course_category_id`, `instructor_id`, `type`, `price`, `old_price`, `subscription_price`, `start_from`, `duration`, `lesson`, `prerequisites`, `difficulty`, `course_code`, `image`, `thumbnail_image`, `thumbnail_video`, `tag`, `status`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(6,'Full-Stack Web Development Bootcamp: Basics to Advanced','Dive into the world of web development with a comprehensive bootcamp covering both front-end and back-end technologies. From HTML and CSS to server-side scripting, this course will equip you with the skills to build dynamic and interactive web applications.',5,6,'paid',5000.00,9000.00,NULL,'2024-06-03 00:00:00',3,35,'Basic understanding of HTML and CSS; familiarity with programming concepts is beneficial but not required.','beginner',NULL,'1401704126972.jpg','8191704126972.jpg','https://www.youtube.com/watch?v=el5Mdxe8HPY','popular',2,'2023-11-26 04:30:17','2024-08-05 12:47:25',NULL),
	(7,'Adobe Creative Suite Mastery: Photoshop, Illustrator, InDesign','Gain proficiency in Adobe Creative Suite\'s powerhouse tools—Photoshop for image editing, Illustrator for vector graphics, and InDesign for layout design. Learn to seamlessly integrate these applications to bring your creative visions to life.',2,3,'paid',4500.00,NULL,NULL,'2023-09-19 00:00:00',NULL,NULL,NULL,'intermediate',NULL,'4091704127086.jpg','3521704127086.jpg','https://www.youtube.com/watch?v=O8bOWQy6bu0','popular',2,'2023-11-26 04:32:44','2024-08-05 12:47:56',NULL),
	(8,'Search Engine Optimization (SEO): Boosting Website Visibility','Demystify the world of SEO and discover techniques to improve website visibility in search engine results. Learn keyword research, on-page optimization, and off-page strategies to drive organic traffic and enhance online presence.',6,3,'paid',3000.00,NULL,NULL,'2024-02-20 00:00:00',NULL,NULL,NULL,'advanced',NULL,'6891704127114.jpg','8491704127114.jpg','https://www.youtube.com/watch?v=hEaaFDAZYDY','popular',2,'2023-11-26 04:34:25','2024-08-05 12:48:17',NULL),
	(9,'3D Animation Basics: Getting Started with Blender','Delve into the basics of 3D animation using Blender. Learn the fundamentals of modeling, rigging, and animation to bring characters and scenes to life in a three-dimensional space.',39,9,'free',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'beginner',NULL,'6781704127193.jpg','7821704127193.jpg','https://www.youtube.com/watch?v=_VAad-Xar_8','popular',2,'2023-11-26 04:37:43','2024-08-05 10:34:04',NULL),
	(10,'React.js Fundamentals: Building Modern User Interfaces','Delve into the fundamentals of React.js and discover how to build modern, component-based user interfaces. From state management to routing, this course guides you through React\'s core concepts, enabling you to create powerful and maintainable front-end applications.',5,6,'free',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'beginner',NULL,'4341704127229.jpg','6681704127229.jpg','https://www.youtube.com/watch?v=hQAHSlTtcmY','popular',2,'2023-11-26 04:39:29','2024-08-05 10:34:53',NULL),
	(11,'Blockchain Learning Course',NULL,5,6,'subscription',NULL,NULL,100.00,NULL,120,23,NULL,'advanced',NULL,'6301722856734.jpg','5231722856734.jpg',NULL,'featured',2,'2024-08-05 11:18:54','2024-08-05 11:30:33',NULL);

/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table discussions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `discussions`;

CREATE TABLE `discussions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discussions_user_id_index` (`user_id`),
  KEY `discussions_course_id_index` (`course_id`),
  CONSTRAINT `discussions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `discussions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table enrollments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `enrollments`;

CREATE TABLE `enrollments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `enrollment_date` timestamp NOT NULL DEFAULT '2023-11-27 10:13:29',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enrollments_student_id_index` (`student_id`),
  KEY `enrollments_course_id_index` (`course_id`),
  CONSTRAINT `enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `enrollments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci,
  `goal` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hosted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;

INSERT INTO `events` (`id`, `title`, `description`, `image`, `topic`, `goal`, `location`, `hosted_by`, `date`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(11,'TechTalk Series: Exploring the Future of Artificial Intelligence','Join us for an immersive exploration into the fascinating world of Artificial Intelligence. In this TechTalk series, our expert panelists will delve deep into the latest trends, breakthroughs, and real-world applications of AI. From machine learning to natural language processing, discover how AI is reshaping industries and influencing our daily lives. This virtual event is designed for both enthusiasts and professionals seeking a comprehensive understanding of the future possibilities that AI holds. Do not miss out on this opportunity to engage with thought leaders and expand your knowledge in the realm of Artificial Intelligence.','1.jpg','Artificial Intelligence','Enhance understanding of AI current landscape and its potential future impact.','Virtual Event','Your Platform Team','2024-08-05 00:00:00',NULL,'2024-08-05 12:16:06',NULL),
	(12,'Mastering Web Design and Development: A Hands-On Workshop','Embark on a journey to master the art of web development with our intensive hands-on workshop. Whether you are a beginner or an experienced developer, this event is designed to elevate your skills to new heights. Join industry professionals as they guide you through essential coding techniques, best practices, and the latest trends in web development. Bring your laptop and get ready to code alongside experts in a collaborative virtual environment. This workshop promises an interactive and enriching experience for all participants.','2.jpg','Web Development','Equip participants with practical skills to excel in web development.','On Site Classroom','Your Platform Team','2024-02-15 00:00:00',NULL,NULL,NULL),
	(13,'Digital Marketing Trends: Navigating the Ever-Changing Landscape','Stay ahead of the curve in the dynamic world of digital marketing. Our in-depth webinar explores the latest trends, tools, and strategies that are shaping the digital marketing landscape. Led by seasoned marketing professionals, this event is a must-attend for anyone looking to enhance their online presence and stay competitive in the digital realm. From social media marketing to SEO best practices, gain actionable insights to elevate your digital marketing game.','3.jpg','Digital Marketing','Provide an overview of current digital marketing trends and effective implementation strategies.','Online Webinar','Your Platform Team','2024-03-20 00:00:00',NULL,NULL,NULL),
	(14,'Multicultural Language Learning Fiesta: A Global Celebration','Embark on a linguistic and cultural journey with our Language Learning Fiesta. Immerse yourself in a multicultural celebration where language enthusiasts can explore diverse languages, traditions, and cuisines from around the world. This virtual event is designed to foster cultural appreciation and language diversity. Join us for a fun-filled experience that transcends borders, connecting people through the universal language of curiosity and understanding.','4.jpg','Language Learning and Cultural Exchange','Foster cultural appreciation and language diversity.','Virtual Cultural Hub','Your Platform Team','2024-04-25 00:00:00',NULL,'2024-08-05 12:16:33',NULL),
	(15,'Finance Masterclass: Navigating the Stock Market','Unlock the secrets of successful investing with our comprehensive finance masterclass. Led by seasoned financial experts, this event goes beyond the basics, guiding participants through the intricacies of the stock market. From investment strategies to risk management, gain valuable insights that will empower both beginners and seasoned investors. Whether you are looking to build a solid investment portfolio or enhance your financial literacy, this online seminar is a must-attend for anyone seeking success in the world of finance.','5.jpg','Finance and Stock Market','Empower participants with knowledge and strategies for successful investing.','Online Seminar','Your Platform Team','2024-05-30 00:00:00',NULL,NULL,NULL),
	(16,'Innovate & Inspire: Tech Entrepreneurship Summit','Embark on a transformative journey into the realm of tech entrepreneurship. Our summit brings together visionaries, successful entrepreneurs, and industry experts to share insights, strategies, and stories of innovation. From startup success stories to navigating challenges in the tech industry, this event is a goldmine for aspiring and seasoned entrepreneurs alike. Join us in this virtual summit to ignite your entrepreneurial spirit and discover the keys to building successful tech ventures.','6.jpg','Tech Entrepreneurship','Inspire and educate participants on the principles and challenges of tech entrepreneurship.','Virtual Summit','Your Platform Team','2024-06-15 00:00:00',NULL,NULL,NULL),
	(17,'Environmental Sustainability Symposium: Shaping a Greener Future','Join us for a thought-provoking symposium on environmental sustainability. In this gathering of eco-conscious minds, we will explore the pressing issues facing our planet and discuss innovative solutions for a sustainable future. From renewable energy to waste reduction strategies, this event aims to raise awareness and inspire action towards a greener and more sustainable world. Be part of the change, and let us shape a future that prioritizes the well-being of our planet.','7.jpg','Environmental Sustainability','Raise awareness and inspire action for a more sustainable future.','Online Symposium','Your Platform Team','2024-07-20 00:00:00',NULL,NULL,NULL),
	(18,'Wellness and Mindfulness Retreat: Nurturing Your Mind and Body','Take a break from the hustle and join us for a virtual wellness retreat focused on nurturing your mind and body. In this rejuvenating experience, we will explore mindfulness practices, relaxation techniques, and holistic wellness approaches. Led by experienced wellness practitioners, this retreat is designed to help you unwind, de-stress, and foster a healthy work-life balance. Prioritize your well-being and join us for a day of self-care and mindfulness.','8.jpg','Wellness and Mindfulness','Promote well-being by providing participants with tools and practices for mindfulness and self-care.','Virtual Retreat','Your Platform Team','2024-08-25 00:00:00',NULL,NULL,NULL);

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table instructors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `instructors`;

CREATE TABLE `instructors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 active, 0 inactive',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `instructors_contact_en_unique` (`phone`),
  UNIQUE KEY `instructors_email_unique` (`email`),
  KEY `instructors_role_id_index` (`role_id`),
  CONSTRAINT `instructors_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `instructors` WRITE;
/*!40000 ALTER TABLE `instructors` DISABLE KEYS */;

INSERT INTO `instructors` (`id`, `name`, `phone`, `email`, `role_id`, `bio`, `image`, `status`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(3,'John Baker','+1 (405) 439 2877','john.baker@gmail.com',3,'I am an Animation Expert and Video/Graphics Instructor known for her innovative approach to storytelling through animation. With a background in both 2D and 3D animation, Emily guides students through the world of visual storytelling, helping them unleash their creative potential.','Instructor_John Baker_994.webp',1,'$2y$12$BhK8UWvbrOtCBU0Zusnp6.3BdQjzyO4SzJWNbxGXwQsbdWwzCU/aC',NULL,'2023-12-04 18:25:20','2024-08-05 09:32:41',NULL),
	(6,'Andrey Jin','0123456789','andreypp29@gmail.com',3,'Andrey is a highly skilled Full Stack Web Developer with over 10 years of experience. He specializes in front-end and back-end development, bringing a wealth of knowledge in modern web technologies. John is passionate about teaching and enjoys sharing his expertise with aspiring developers.','Instructor_Andrey Jin_726.png',1,'$2y$12$Y/RxUCfykZMHYXDuVyatZ.OxM52p2aaccndc8BFGz8Ypp./tOTxj.',NULL,'2024-07-30 11:15:23','2024-08-05 08:01:02',NULL),
	(9,'Gill Thomas','+1 (562) 433 7232','gill.thomas@gmail.com',3,'Gill is an experienced Full Stack Web Developer known for her expertise in building scalable and robust web applications. With a background in both front-end and back-end development, Jane is dedicated to helping students master the skills needed for success in the ever-evolving field of web development.','Instructor_Gill Thomas_737.jpg',1,'$2y$12$CLZi.tJdys.BwDTHhhK3n.gZwffzugkHnTQnsSZPvsB2Zmopd/AG2',NULL,'2024-07-31 13:34:10','2024-08-05 08:01:14',NULL);

/*!40000 ALTER TABLE `instructors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table lessons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lessons`;

CREATE TABLE `lessons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lessons_course_id_index` (`course_id`),
  CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table materials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `materials`;

CREATE TABLE `materials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lesson_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('video','document','quiz') COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `materials_lesson_id_index` (`lesson_id`),
  CONSTRAINT `materials_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` bigint(20) unsigned NOT NULL,
  `receiver_id` bigint(20) unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_sender_id_index` (`sender_id`),
  KEY `messages_receiver_id_index` (`receiver_id`),
  CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(5,'2023_10_12_031415_create_roles_table',1),
	(9,'2023_11_19_053448_create_course_categories_table',2),
	(10,'2023_11_22_143059_create_permissions_table',3),
	(14,'2023_11_25_034933_create_students_table',4),
	(17,'2023_11_26_034558_create_courses_table',5),
	(18,'2023_11_26_153556_create_enrollments_table',6),
	(20,'2023_11_26_153639_create_quizzes_table',6),
	(21,'2023_11_26_153659_create_questions_table',6),
	(22,'2023_11_26_153719_create_answers_table',6),
	(23,'2023_11_26_153735_create_reviews_table',6),
	(25,'2023_11_26_153818_create_subscriptions_table',6),
	(27,'2023_11_26_153902_create_discussions_table',6),
	(28,'2023_11_26_153916_create_messages_table',6),
	(29,'2023_11_26_153660_create_options_table',7),
	(30,'2023_12_09_135359_create_coupons_table',8),
	(32,'2023_12_09_170943_create_checkouts_table',9),
	(33,'2023_11_26_153754_create_payments_table',10),
	(34,'2023_11_26_153557_create_lessons_table',11),
	(35,'2023_11_26_153620_create_materials_table',12),
	(36,'2023_11_26_153844_create_progress_table',12),
	(37,'2023_12_20_031354_create_watchlists_table',13),
	(38,'2023_12_23_070253_add_tag_to_courses_table',14),
	(41,'2023_11_12_031401_create_instructors_table',15),
	(42,'2023_11_12_031402_create_users_table',15),
	(43,'2024_01_01_121113_add_column_to_user_table',15),
	(44,'2024_01_03_073449_create_events_table',16);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table options
# ------------------------------------------------------------

DROP TABLE IF EXISTS `options`;

CREATE TABLE `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint(20) unsigned NOT NULL,
  `option_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `options_question_id_index` (`question_id`),
  CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table payments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `currency_value` decimal(10,2) DEFAULT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txnid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 pending, 1 successfull, 2 fail',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;

INSERT INTO `payments` (`id`, `student_id`, `currency`, `currency_code`, `amount`, `currency_value`, `method`, `txnid`, `status`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,10,'BDT','BDT',182.16,1.00,'SSLCommerz','SSLCZ_TXN_657699d29ce57',0,'2023-12-11 00:10:42','2023-12-11 00:10:42',NULL),
	(2,10,'BDT','BDT',91.08,1.00,'SSLCommerz','SSLCZ_TXN_65769ad5411ed',1,'2023-12-11 00:15:01','2023-12-11 00:15:05',NULL),
	(3,10,'BDT','BDT',91.08,1.00,'SSLCommerz','SSLCZ_TXN_65769e8f0cf11',1,'2023-12-11 00:30:55','2023-12-11 00:30:59',NULL),
	(4,10,'BDT','BDT',182.16,1.00,'SSLCommerz','SSLCZ_TXN_65769f2a84099',1,'2023-12-11 00:33:30','2023-12-11 00:33:34',NULL),
	(5,14,'BDT','BDT',113.85,1.00,'SSLCommerz','SSLCZ_TXN_6576a5e82a723',1,'2023-12-11 01:02:16','2023-12-11 01:02:25',NULL),
	(6,14,'BDT','BDT',113.85,1.00,'SSLCommerz','SSLCZ_TXN_6576a7c21ecb3',0,'2023-12-11 01:10:10','2023-12-11 01:10:10',NULL),
	(7,14,'BDT','BDT',113.85,1.00,'SSLCommerz','SSLCZ_TXN_6576a8b00421a',1,'2023-12-11 01:14:08','2023-12-11 01:14:48',NULL),
	(8,14,'BDT','BDT',113.85,1.00,'SSLCommerz','SSLCZ_TXN_6576a8f323604',1,'2023-12-11 01:15:15','2023-12-11 01:15:26',NULL),
	(9,17,'BDT','BDT',145.36,1.00,'SSLCommerz','SSLCZ_TXN_657fea661d5b3',0,'2023-12-18 01:44:54','2023-12-18 01:44:54',NULL),
	(10,17,'BDT','BDT',145.36,1.00,'SSLCommerz','SSLCZ_TXN_657feb1853ccc',0,'2023-12-18 01:47:52','2023-12-18 01:47:52',NULL),
	(11,17,'BDT','BDT',91.08,1.00,'SSLCommerz','SSLCZ_TXN_657fee632397d',0,'2023-12-18 02:01:55','2023-12-18 02:01:55',NULL),
	(12,17,'BDT','BDT',113.85,1.00,'SSLCommerz','SSLCZ_TXN_657fef18a049e',0,'2023-12-18 02:04:56','2023-12-18 02:04:56',NULL),
	(13,17,'BDT','BDT',113.85,1.00,'SSLCommerz','SSLCZ_TXN_657ff023049f9',1,'2023-12-18 02:09:23','2023-12-18 02:09:26',NULL),
	(14,17,'BDT','BDT',0.00,1.00,'SSLCommerz','SSLCZ_TXN_65810ee5590a9',0,'2023-12-18 22:32:53','2023-12-18 22:32:53',NULL),
	(15,17,'BDT','BDT',0.00,1.00,'SSLCommerz','SSLCZ_TXN_65810eeaba3cd',0,'2023-12-18 22:32:58','2023-12-18 22:32:58',NULL),
	(16,17,'BDT','BDT',67.85,1.00,'SSLCommerz','SSLCZ_TXN_65810efe527f4',1,'2023-12-18 22:33:18','2023-12-18 22:33:25',NULL),
	(17,17,'BDT','BDT',4600.00,1.00,'SSLCommerz','SSLCZ_TXN_65829556dfd67',1,'2023-12-20 02:18:46','2023-12-20 02:18:53',NULL),
	(18,17,'BDT','BDT',4600.00,1.00,'SSLCommerz','SSLCZ_TXN_658412e42bb29',1,'2023-12-21 05:26:44','2023-12-21 05:26:50',NULL),
	(19,17,'BDT','BDT',5750.00,1.00,'SSLCommerz','SSLCZ_TXN_658676a7d8af0',1,'2023-12-23 00:56:55','2023-12-23 00:57:02',NULL),
	(20,17,'BDT','BDT',4600.00,1.00,'SSLCommerz','SSLCZ_TXN_6592f9adf2b79',1,'2024-01-01 12:43:10','2024-01-01 12:43:52',NULL);

/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_role_id_index` (`role_id`),
  CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `role_id`, `name`, `created_at`, `updated_at`)
VALUES
	(185,1,'user.index','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(186,1,'user.create','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(187,1,'user.show','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(188,1,'user.edit','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(189,1,'user.destroy','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(190,1,'role.index','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(191,1,'role.create','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(192,1,'role.show','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(193,1,'role.edit','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(194,1,'role.destroy','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(195,1,'student.index','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(196,1,'student.create','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(197,1,'student.show','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(198,1,'student.edit','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(199,1,'student.destroy','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(200,1,'instructor.index','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(201,1,'instructor.create','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(202,1,'instructor.show','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(203,1,'instructor.edit','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(204,1,'instructor.destroy','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(205,1,'courseCategory.index','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(206,1,'courseCategory.create','2023-11-29 01:37:43','2023-11-29 01:37:43'),
	(207,1,'courseCategory.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(208,1,'courseCategory.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(209,1,'courseCategory.destroy','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(210,1,'course.index','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(211,1,'course.create','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(212,1,'course.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(213,1,'course.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(214,1,'course.destroy','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(215,1,'material.index','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(216,1,'material.create','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(217,1,'material.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(218,1,'material.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(219,1,'material.destroy','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(220,1,'quiz.index','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(221,1,'quiz.create','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(222,1,'quiz.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(223,1,'quiz.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(224,1,'quiz.destroy','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(225,1,'question.index','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(226,1,'question.create','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(227,1,'question.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(228,1,'question.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(229,1,'question.destroy','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(230,1,'option.index','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(231,1,'option.create','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(232,1,'option.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(233,1,'option.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(234,1,'option.destroy','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(235,1,'answer.index','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(236,1,'answer.create','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(237,1,'answer.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(238,1,'answer.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(239,1,'answer.destroy','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(240,1,'review.index','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(241,1,'review.create','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(242,1,'review.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(243,1,'review.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(244,1,'review.destroy','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(245,1,'discussion.index','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(246,1,'discussion.create','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(247,1,'discussion.show','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(248,1,'discussion.edit','2023-11-29 01:37:44','2023-11-29 01:37:44'),
	(249,1,'discussion.destroy','2023-11-29 01:37:45','2023-11-29 01:37:45'),
	(250,1,'message.index','2023-11-29 01:37:45','2023-11-29 01:37:45'),
	(251,1,'message.create','2023-11-29 01:37:45','2023-11-29 01:37:45'),
	(252,1,'message.show','2023-11-29 01:37:45','2023-11-29 01:37:45'),
	(253,1,'message.edit','2023-11-29 01:37:45','2023-11-29 01:37:45'),
	(254,1,'message.destroy','2023-11-29 01:37:45','2023-11-29 01:37:45'),
	(255,1,'permission.list','2023-11-29 01:37:45','2023-11-29 01:37:45'),
	(256,2,'student.index','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(257,2,'student.create','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(258,2,'student.show','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(259,2,'student.edit','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(260,2,'student.destroy','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(261,2,'instructor.index','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(262,2,'instructor.create','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(263,2,'instructor.show','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(264,2,'instructor.edit','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(265,2,'instructor.destroy','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(266,2,'courseCategory.index','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(267,2,'courseCategory.create','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(268,2,'courseCategory.show','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(269,2,'courseCategory.edit','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(270,2,'courseCategory.destroy','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(271,2,'course.index','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(272,2,'course.create','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(273,2,'course.show','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(274,2,'course.edit','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(275,2,'course.destroy','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(276,2,'material.index','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(277,2,'material.create','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(278,2,'material.show','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(279,2,'material.edit','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(280,2,'material.destroy','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(281,2,'quiz.index','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(282,2,'quiz.create','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(283,2,'quiz.show','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(284,2,'quiz.edit','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(285,2,'quiz.destroy','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(286,2,'question.index','2023-11-29 01:38:42','2023-11-29 01:38:42'),
	(287,2,'question.create','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(288,2,'question.show','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(289,2,'question.edit','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(290,2,'question.destroy','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(291,2,'option.index','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(292,2,'option.create','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(293,2,'option.show','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(294,2,'option.edit','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(295,2,'option.destroy','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(296,2,'answer.index','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(297,2,'answer.create','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(298,2,'answer.show','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(299,2,'answer.edit','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(300,2,'answer.destroy','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(301,2,'review.index','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(302,2,'review.create','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(303,2,'review.show','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(304,2,'review.edit','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(305,2,'review.destroy','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(306,2,'discussion.index','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(307,2,'discussion.create','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(308,2,'discussion.show','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(309,2,'discussion.edit','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(310,2,'discussion.destroy','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(311,2,'message.index','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(312,2,'message.create','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(313,2,'message.show','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(314,2,'message.edit','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(315,2,'message.destroy','2023-11-29 01:38:43','2023-11-29 01:38:43'),
	(345,3,'user.index','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(346,3,'role.index','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(347,3,'student.index','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(348,3,'instructor.index','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(349,3,'courseCategory.index','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(350,3,'courseCategory.create','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(351,3,'courseCategory.show','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(352,3,'courseCategory.edit','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(353,3,'courseCategory.destroy','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(354,3,'course.index','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(355,3,'course.create','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(356,3,'course.show','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(357,3,'course.edit','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(358,3,'course.destroy','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(359,3,'material.index','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(360,3,'material.create','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(361,3,'material.show','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(362,3,'material.edit','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(363,3,'material.destroy','2024-01-02 01:45:52','2024-01-02 01:45:52'),
	(364,3,'lesson.index','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(365,3,'lesson.create','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(366,3,'lesson.show','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(367,3,'lesson.edit','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(368,3,'lesson.destroy','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(369,3,'coupon.index','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(370,3,'coupon.create','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(371,3,'coupon.show','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(372,3,'coupon.edit','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(373,3,'coupon.destroy','2024-01-02 01:45:53','2024-01-02 01:45:53'),
	(374,3,'enrollment.index','2024-01-02 01:45:53','2024-01-02 01:45:53');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table progress
# ------------------------------------------------------------

DROP TABLE IF EXISTS `progress`;

CREATE TABLE `progress` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `progress_percentage` int(11) NOT NULL DEFAULT '0',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `last_viewed_material_id` bigint(20) unsigned DEFAULT NULL,
  `last_viewed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `progress_student_id_index` (`student_id`),
  KEY `progress_course_id_index` (`course_id`),
  KEY `progress_last_viewed_material_id_index` (`last_viewed_material_id`),
  CONSTRAINT `progress_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `progress_last_viewed_material_id_foreign` FOREIGN KEY (`last_viewed_material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE,
  CONSTRAINT `progress_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table questions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` bigint(20) unsigned NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('multiple_choice','true_false','short_answer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_quiz_id_index` (`quiz_id`),
  CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table quizzes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `quizzes`;

CREATE TABLE `quizzes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quizzes_course_id_index` (`course_id`),
  CONSTRAINT `quizzes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table reviews
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_student_id_index` (`student_id`),
  KEY `reviews_course_id_index` (`course_id`),
  CONSTRAINT `reviews_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `reviews_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_type_unique` (`name`),
  UNIQUE KEY `roles_identity_unique` (`identity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`)
VALUES
	(1,'Super Admin','superadmin','2023-11-16 13:16:34',NULL),
	(2,'Admin','admin','2023-11-16 13:16:34',NULL),
	(3,'Instructor','instructor','2023-11-16 13:16:34',NULL),
	(4,'Student','student','2023-11-16 13:16:34',NULL),
	(5,'Visitor','visitor','2023-11-23 10:13:19','2023-11-23 10:13:19');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table students
# ------------------------------------------------------------

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 active, 0 inactive',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;

INSERT INTO `students` (`id`, `name`, `phone`, `email`, `date_of_birth`, `gender`, `image`, `bio`, `profession`, `address`, `city`, `state`, `postcode`, `country`, `status`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(18,'Ming Jin','0123456789','smartwebdev90@gmail.com','1991-02-15',NULL,'5341721722546.png','A senior full stack web & application developer','software development',NULL,NULL,NULL,NULL,NULL,1,'$2y$12$fN/IXhvxqf0WQbX6vYYuouO4i.JMOfOqKdUyp16igvQMAS5vz0Q1.',NULL,'2024-07-23 08:05:41','2024-07-23 08:15:46',NULL);

/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table subscriptions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `plan` enum('monthly','yearly') COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` enum('active','canceled','expired') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_student_id_index` (`student_id`),
  KEY `subscriptions_course_id_index` (`course_id`),
  CONSTRAINT `subscriptions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `subscriptions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `role_id` bigint(20) unsigned NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=>yes, 0=>no',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=>active 2=>inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_contact_en_unique` (`phone`),
  KEY `users_role_id_index` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role_id`, `password`, `image`, `full_access`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(2,'Paz Admin','paz.admin@gmail.com','+972 6 123-4567',1,'$2y$12$bd8mKniTQ6xQnICHLi1nUek3p7KXLGwbpohEwPD2wrGfRhQFMNjwu','7741704114296.png',1,1,NULL,'2024-01-01 07:47:43','2024-08-05 09:38:13',NULL),
	(6,'John Baker','john.baker@gmail.com','+1 (405) 439 2877',3,'$2y$12$Z7HgoGLSBCdgu1coE6uqH.XbKHa3DMWtiyABiEui7HKObHrhF5/uy','7601722850814.webp',0,1,NULL,'2024-01-01 08:50:18','2024-08-05 09:40:14',NULL),
	(9,'Andrey Jin','andreypp29@gmail.com','0123456789',3,'$2y$12$lW/dKCmpze78MlCRBGzcGeN5C8iHLQkgfYA.01haBzCKRUhERwbwG','Instructor_Andrey Jin_726.png',0,1,NULL,'2024-07-30 11:15:24','2024-08-05 07:56:28',NULL),
	(10,'David Jackson','david.jackson@gmail.com','+47 431 323 2432',4,'$2y$12$3wwHZc./IbcC7M6jA9ISeeD9/kuAxfQWbpAtfULvxUj4XsNvBu50O','7151722431320.webp',1,1,NULL,'2024-07-31 13:08:40','2024-07-31 13:08:40',NULL),
	(11,'Ming Jin','smartwebdev90@gmail.com','+1 (405) 356 5194',4,'$2y$12$Sr1TrBTGux28ktbAIT4lqOjkNWRAXlkHZrIJMEgfMUwa/3QbEvtK2','8391722844999.jpg',0,1,NULL,'2024-08-02 08:14:15','2024-08-05 08:03:19',NULL),
	(12,'Robert Wilson','robert.wilson@gmail.com','',4,'$2y$12$bd8mKniTQ6xQnICHLi1nUek3p7KXLGwbpohEwPD2wrGfRhQFMNjwu',NULL,0,1,NULL,'2024-08-06 04:12:51','2024-08-06 04:12:51',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table watchlists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `watchlists`;

CREATE TABLE `watchlists` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `lesson_id` bigint(20) unsigned NOT NULL,
  `material_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `watchlists_student_id_index` (`student_id`),
  KEY `watchlists_course_id_index` (`course_id`),
  KEY `watchlists_lesson_id_index` (`lesson_id`),
  KEY `watchlists_material_id_index` (`material_id`),
  CONSTRAINT `watchlists_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `watchlists_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `watchlists_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE,
  CONSTRAINT `watchlists_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
