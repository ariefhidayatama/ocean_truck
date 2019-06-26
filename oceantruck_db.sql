-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2019 at 10:54 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `id_kategori`, `slug`, `judul`, `isi`, `gambar`, `create_at`) VALUES
(1, 1, 'about-us', 'ABOUT US', '<p><strong>OCEAN TRUCK &ndash; TRUCK LOGISTICS GROUP CO.PTE.LTD</strong> is located in Southeast Asia Logistics center Singapore, cornerstone for enginerring and resources logistics, we continous improves our strategic assets covering engineering trading, equipment leasing, warehousing, regional shipping, logistic estate and logistic finance, devote ourselves to become the most competitive logistic solution provider and integrated investment platform for Chinese International Project. We have always been comitted to establish a logistic enterprise adapt to new era with concept of systematism and view of whole dimensionality, to become advocates and practitioners of modern logistics services.</p>\r\n<p><strong>PT. INDONESIA OCEAN TRUCK</strong> is a project logistics company under <strong>OCEAN &ndash; TRUCK LOGISTICS GROUP CO.PTE.LTD</strong>&nbsp; which is focused on the Indonesian market. The company is headquartered in Jakarta; logistics center is located in the Southeast Sulawesi, Kendari, Business throughout the major islands of Indonesia, such as Papua, Sulawesi, Kalimantan, Maluku, Sumatra and other regions with office.</p>\r\n<p><strong>PT. INDONESIA OCEAN TRUCK</strong> is committed to provide EPC enterprises and related logistics company on point to point supply chain management and logistics services in Indonesia regions. Our Business cover project logistics, warehousing, import and export agent, leasing, supply chain finance and port unloading services, industry involved including bulk stock, infrastructure, petroleum, and petrochemical, mining mettalurgy and equipment manufacturing. Our company owned and controlled more than 60 units lifting machinery and transportation vehicles, have the maximum lifting capacity up to 650 tons and long-term leasing flat barge of 18 units,.</p>\r\n<p><strong>PT. INDONESIA OCEAN TRUCK</strong> has a strong custom clearence power in Indonesia major trading port with professional temporary jetty construction company, independent insurance survey company, shipping agent, so as to comprehensive escort the performing on the whole project.</p>\r\n<p>Adhering to the <strong>OCEAN &ndash; TRUCK LOGISTICS GROUP CO.PTE.LTD</strong> culture &ldquo;<strong>YOUR REALIBLE PARTNER LINKED TO INDONESIA</strong>&ldquo;, <strong>PT. INDONESIA OCEAN TRUCK</strong> always adhere to the concept of assist project in logistic, consider create value for project custom as the ultimate goal, join hands with Chinese Shipping and logistic companies, promote mutual benefit and achieve common development to build as a benchmark enterprise in Indonesia Project Logistics area who belongs to Chinese.</p>', 'about.jpg', '2019-06-01 06:47:40'),
(2, 1, 'equipment', 'EQUIPMENT', '<h5 class=\"heading-content  style-1\" style=\"box-sizing: border-box; font-family: Montserrat; font-weight: 500; line-height: 1.35em; color: #333333; margin-top: 8.5px; margin-bottom: 8.5px; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box;\">OUR VEHICLES</span></h5>\r\n<p style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.7em; color: #777777; font-family: \'PT Sans\'; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">We have a modern, extensive fleet which can operate world wide. Our complete fleet consists of over 60 vehicles including Prime Movers, body trucks, tilt tray and various trailer types. All vehicles and equipment are on constant service and maintenance.</p>\r\n<p style=\"box-sizing: border-box; margin: 20px 0px 0px; line-height: 1.7em; color: #777777; font-family: \'PT Sans\'; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">We have all kind of trailers for any kind of cargo. We include drop deck trailers, container trailers.&nbsp;We set very high standards of professionalism and we continue to improve our vehicles and our capabilities.</p>\r\n<p style=\"box-sizing: border-box; margin: 20px 0px 0px; line-height: 1.7em; color: #777777; font-family: \'PT Sans\'; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n<h5 class=\"heading-content  style-1\" style=\"box-sizing: border-box; font-family: Montserrat; font-weight: 500; line-height: 1.35em; color: #333333; margin-top: 8.5px; margin-bottom: 8.5px; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box;\">TYPES AND OPTIONS</span></h5>\r\n<div class=\"wpb_text_column wpb_content_element \" style=\"box-sizing: border-box; margin-bottom: 0px; clear: both; color: #777777; font-family: \'PT Sans\'; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: border-box; max-width: 100%; position: relative; margin-bottom: 0px;\">\r\n<p style=\"box-sizing: border-box; margin: 20px 0px 0px; line-height: 1.7em;\">Types on vehicles on our disposal. Constantly maintained and serviced and with on road assistance your cargo will never get stranded:</p>\r\n</div>\r\n</div>\r\n<div class=\"wpb_single_image wpb_content_element vc_align_left\" style=\"box-sizing: border-box; margin-bottom: 0px; clear: both; text-align: left; color: #777777; font-family: \'PT Sans\'; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</div>\r\n<div class=\"vc_row wpb_row vc_inner vc_row-fluid\" style=\"box-sizing: border-box; margin-left: -15px; margin-right: -15px; color: #777777; font-family: \'PT Sans\'; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\" style=\"box-sizing: border-box; width: 292.5px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner \" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 292.5px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: border-box; max-width: 100%; position: relative;\">\r\n<ul style=\"list-style-type: disc;\">\r\n<li>11 Prime movers</li>\r\n<li>9 Short trucks</li>\r\n<li>10 Body trucks</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\" style=\"box-sizing: border-box; width: 292.5px; position: relative; min-height: 1px; padding-left: 0px; padding-right: 0px; float: left;\">\r\n<div class=\"vc_column-inner \" style=\"box-sizing: border-box; padding-left: 15px; padding-right: 15px; width: 292.5px;\">\r\n<div class=\"wpb_wrapper\" style=\"box-sizing: border-box; max-width: 100%; position: relative;\">\r\n<ul class=\"list \" style=\"box-sizing: border-box; margin: 15px 0px 20px; list-style: outside none disc; padding-left: 0px;\">\r\n<li style=\"box-sizing: border-box;\">8 Buses</li>\r\n<li style=\"box-sizing: border-box; margin-top: 13px;\">12 Vans</li>\r\n<li style=\"box-sizing: border-box; margin-top: 13px;\">10 Pick up trucks</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', '', '2019-06-09 00:59:42'),
(3, 1, 'contact-us', 'CONTACT US', '<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p><strong>HEAD OFFICE<br /> OCEAN TRUCK INDONESIA. CO. PTE</strong></p>\r\n<p>Sedayu Square Blok B No. 30 &ndash; 31, JL. Outer Ringroad Lingkar Luar RT/RW 03/008 Kel. Cengkareng Barat, Kec. Cengkareng, jakarta Barat 11730</p>\r\n<p>&nbsp;Telephone: +021 22554237<br /> Email: indonesiaoceantruck@ocean-truck.com<br /> www.indonesiaoceantruck.com</p>\r\n<p><strong>Marketing</strong></p>\r\n<p>Ivy Li</p>\r\n<p>Phone: +62 81286947912 (indonesia)</p>\r\n<p>+86 18210103018 (China)</p>\r\n<p>Email: <a href=\"mailto:ivy_li@ocean-truck.com\">ivy_li@ocean-truck.com</a></p>\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>Feel free to talk to our representative at any time you please use our contact form on our website or one of our contact numbers. Let us build your future together.</p>\r\n<p>You can always visit us at our HQ, we have a friendly staff and a mean cup of coffee.</p>\r\n<p>for international calls use our &nbsp;<strong>Phone number: +62 21 22554237</strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '', '2019-06-09 14:58:14'),
(4, 1, 'shipping', 'SHIPPING', '<p>Shipping agency for vessel&rsquo;s procedures of entry/ exit the port and cargo&rsquo;s handling permission at port, vessel maintenance and crew management.</p>\r\n<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>', '', '2019-06-10 14:43:20'),
(5, 1, 'custom-clearance', 'CUSTOM CLEARANCE', '<p>Custom declaration/ clearance/ import permit application in the most mainly port of Indonesia. The advantage areas including North Sumatra /North and Southeast Sulawesi/ Maluku islands/ West Papua/ East Kalimantan.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2019-06-10 14:47:41'),
(6, 1, 'logistic', 'LOGISTIC', '<p>Port to door service for project cargo (especially equipment, steel structure and engineering vehicle etc.) transport between Indonesia islands by barge/LCT/trailers.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2019-06-10 14:48:46'),
(7, 1, 'stevedoring', 'STEVEDORING', '<p>Qualified harbor and material for loading and unloading between vessel/barge/trailer, even directly by special vehicles, and the work for inland haulage.</p>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2019-06-10 14:49:24'),
(8, 11, 'gathering-pt-indonesia-ocean-truck', 'Gathering PT. Indonesia Ocean Truck', '<p>Logistic and organization are two most important&nbsp;things for successfully running a warehouse. Warehouse&nbsp;must be optimized for fast loading on the trucks and unloading from them on the arrival. There is no place for&nbsp;mistakes, because if one truck has to wait a minute too long, ten after them will have to wait as well. Just image what would happen if a cargo would get misplaced, or if it wouldn&rsquo;t be accessible for&nbsp;forklift to pick it up.</p>\r\n<p>&nbsp;In order to prevent delays, modern warehouses depend on technology. Every pallet that comes in&nbsp;the warehouse is immediately entered into the central informational system, where it gets&nbsp;a unique id with important information about it. We use QR codes and scanners to easily make&nbsp;all information about the cargo&nbsp;available at any time. QR codes are printed at the entrance and attached to the pallets before they actually enter the warehouse.</p>\r\n<h3><strong>\"Our capacities give us the freedom to take care of your cargo from storage to delivery. From small cargo to cargo of grand scale.\"</strong></h3>\r\n<p>Logistic and organization are two most important&nbsp;things for successfully running a warehouse. Warehouse&nbsp;must be optimized for fast loading on the trucks and unloading from them on the arrival. There is no place for&nbsp;mistakes, because if one truck has to wait a minute too long, ten after them will have to wait as well. Just image what would happen if a cargo would get misplaced, or if it wouldn&rsquo;t be accessible for&nbsp;forklift to pick it up.</p>', 'Gathering.jpg', '2019-06-23 23:24:02'),
(9, 11, 'the-goal-for-2017', 'THE GOAL FOR 2017', '<p>Logistic and organization are two most important&nbsp;things for successfully running a warehouse. Warehouse&nbsp;must be optimized for fast loading on the trucks and unloading from them on the arrival. There is no place for&nbsp;mistakes, because if one truck has to wait a minute too long, ten after them will have to wait as well. Just image what would happen if a cargo would get misplaced, or if it wouldn&rsquo;t be accessible for&nbsp;forklift to pick it up.</p>\r\n<p>&nbsp;In order to prevent delays, modern warehouses depend on technology. Every pallet that comes in&nbsp;the warehouse is immediately entered into the central informational system, where it gets&nbsp;a unique id with important information about it. We use QR codes and scanners to easily make&nbsp;all information about the cargo&nbsp;available at any time. QR codes are printed at the entrance and attached to the pallets before they actually enter the warehouse.</p>\r\n<h3><strong>\"Our capacities give us the freedom to take care of your cargo from storage to delivery. From small cargo to cargo of grand scale.\"</strong></h3>\r\n<p>Logistic and organization are two most important&nbsp;things for successfully running a warehouse. Warehouse&nbsp;must be optimized for fast loading on the trucks and unloading from them on the arrival. There is no place for&nbsp;mistakes, because if one truck has to wait a minute too long, ten after them will have to wait as well. Just image what would happen if a cargo would get misplaced, or if it wouldn&rsquo;t be accessible for&nbsp;forklift to pick it up.</p>', 'goal.jpg', '2019-06-23 23:29:30'),
(10, 11, 'story-of-a-woman-trucker', 'STORY OF A WOMAN TRUCKER', '<p>Logistic and organization are two most important&nbsp;things for successfully running a warehouse. Warehouse&nbsp;must be optimized for fast loading on the trucks and unloading from them on the arrival. There is no place for&nbsp;mistakes, because if one truck has to wait a minute too long, ten after them will have to wait as well. Just image what would happen if a cargo would get misplaced, or if it wouldn&rsquo;t be accessible for&nbsp;forklift to pick it up.</p>\r\n<p>&nbsp;In order to prevent delays, modern warehouses depend on technology. Every pallet that comes in&nbsp;the warehouse is immediately entered into the central informational system, where it gets&nbsp;a unique id with important information about it. We use QR codes and scanners to easily make&nbsp;all information about the cargo&nbsp;available at any time. QR codes are printed at the entrance and attached to the pallets before they actually enter the warehouse.</p>\r\n<h3><strong>\"Our capacities give us the freedom to take care of your cargo from storage to delivery. From small cargo to cargo of grand scale.\"</strong></h3>\r\n<p>Logistic and organization are two most important&nbsp;things for successfully running a warehouse. Warehouse&nbsp;must be optimized for fast loading on the trucks and unloading from them on the arrival. There is no place for&nbsp;mistakes, because if one truck has to wait a minute too long, ten after them will have to wait as well. Just image what would happen if a cargo would get misplaced, or if it wouldn&rsquo;t be accessible for&nbsp;forklift to pick it up.</p>', 'woman.jpg', '2019-06-23 23:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `front_menu`
--

CREATE TABLE `front_menu` (
  `id` int(11) NOT NULL,
  `menu_title` varchar(70) NOT NULL,
  `link` varchar(150) NOT NULL,
  `parent` int(11) NOT NULL,
  `menu_title_seo` varchar(150) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_menu`
--

INSERT INTO `front_menu` (`id`, `menu_title`, `link`, `parent`, `menu_title_seo`, `create_at`) VALUES
(1, 'ABOUT US', 'http://localhost/truck/about-us', 0, 'about-us', '2019-06-01 05:37:29'),
(2, 'SERVICES', 'services', 0, 'services', '2019-06-01 06:34:00'),
(3, 'EQUIPMENTS', 'http://localhost/truck/equipment', 0, 'equipments', '2019-06-01 06:38:10'),
(4, 'INFORMATION', 'information', 0, 'information', '2019-06-01 06:38:41'),
(5, 'CONTACT US', 'http://localhost/truck/contact-us', 0, 'contact-us', '2019-06-01 06:41:08'),
(6, 'NEWS', 'http://localhost/truck/news', 0, 'news', '2019-06-01 06:41:45'),
(7, 'SHIPPING', 'shipping', 2, 'shipping', '2019-06-01 06:48:58'),
(8, 'GALLERY PHOTO', 'http://localhost/truck/galeri-foto', 4, 'galeri-foto', '2019-06-16 08:30:28'),
(9, 'GALLERY VIDEO', 'http://localhost/truck/galeri-video', 4, 'galeri-video', '2019-06-16 08:31:22'),
(10, 'Custom Clearance', 'custom-clearance', 2, 'custom-clearance', '2019-06-16 08:36:45'),
(11, 'Logistic', 'logistic', 2, 'logistic', '2019-06-16 08:46:07'),
(12, 'Stevedoring', 'stevedoring', 2, 'stevedoring', '2019-06-16 09:07:53'),
(13, 'Travel', 'Travel', 2, 'travel', '2019-06-16 09:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `id_kategori`, `gambar`, `status`, `create_at`) VALUES
(1, 'Kegiatan 1', 2, 'lowbed21.jpg', '1', '2019-06-02 10:21:19'),
(2, 'Indonesia Ocean Truck 1', 4, 'slider.jpg', '1', '2019-06-02 10:26:13'),
(3, 'Indonesia Ocean Truck 2', 4, 'slider2.jpg', '1', '2019-06-02 13:29:24'),
(4, 'Crane-1', 6, 'crane1.jpg', '1', '2019-06-09 00:48:00'),
(5, 'Crane-2', 6, 'crane2.jpg', '1', '2019-06-09 00:48:26'),
(6, 'Crane-3', 6, 'crane3.jpg', '1', '2019-06-09 00:48:58'),
(7, 'prime-1', 7, 'prime-mover1.jpg', '1', '2019-06-09 14:02:02'),
(8, 'prime-2', 7, 'prime-mover2.jpg', '1', '2019-06-09 14:02:27'),
(9, 'barge-1', 8, 'barge1.jpg', '1', '2019-06-09 14:15:08'),
(10, 'forklift-1', 9, 'forklift1.jpg', '1', '2019-06-09 14:15:26'),
(11, 'forklift-2', 9, 'forklift2.jpg', '1', '2019-06-09 14:15:48'),
(12, 'lowbed-1', 10, 'lowbed1.jpg', '1', '2019-06-09 14:16:07'),
(13, 'lowbed-2', 10, 'lowbed2.jpg', '1', '2019-06-09 14:16:23'),
(14, 'kegiatan 2', 2, 'crane21.jpg', '1', '2019-06-19 05:50:21'),
(15, 'kegiatan 3', 2, 'forklift11.jpg', '1', '2019-06-19 05:50:52'),
(16, 'kegiatan 4', 2, 'prime-mover21.jpg', '1', '2019-06-19 05:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `urutan` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id`, `nama_kategori`, `keterangan`, `urutan`, `create_at`) VALUES
(1, 'Informasi Perusahaan', 'Semua Artikel yang berkaitan tentang Perusahaan', 1, '2019-05-12 06:21:15'),
(2, 'Galeri Foto', 'Untuk Membuat Galeri Foto di halaman depan', 2, '2019-05-12 06:21:15'),
(3, 'Galeri Video', 'Untuk Membuat Galeri Video di halaman depan', 3, '2019-06-03 02:14:12'),
(4, 'Slider', 'Membuat Slideshow ', 4, '2019-06-03 02:22:10'),
(5, 'Klien', 'Foto Perusahaan Klien', 5, '2019-06-07 14:17:17'),
(6, 'Crane', 'Produk Alat Berat', 6, '2019-06-09 00:41:23'),
(7, 'Prime Mover', 'Produk Alat Berat', 7, '2019-06-09 00:41:57'),
(8, 'Barge', 'Produk Alat Berat', 8, '2019-06-09 00:42:36'),
(9, 'Forklift', 'Produk Alat Berat', 9, '2019-06-09 00:43:05'),
(10, 'Lowbed', 'Produk Alat Berat', 10, '2019-06-09 00:43:31'),
(11, 'News', 'Artikel Kegiatan Perusahaan', 11, '2019-06-23 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id`, `id_kategori`, `nama_perusahaan`, `alamat`, `telepon`, `email`, `status`, `gambar`, `create_at`) VALUES
(1, 5, 'Client-1', '-', '-', '-', '1', 'client-6.jpg', '2019-06-07 15:14:14'),
(2, 5, 'Client-2', '-', '-', '-', '1', 'client-4.jpg', '2019-06-07 16:06:27'),
(3, 5, 'Client-3', '-', '-', '-', '1', 'client-5.jpg', '2019-06-09 15:16:41'),
(4, 5, 'Client-4', '-', '-', '-', '1', 'client-1.jpg', '2019-06-09 16:00:39'),
(5, 5, 'Client-5', '-', '-', '-', '1', 'client-3.jpg', '2019-06-09 16:01:12'),
(6, 5, 'Client-6', '-', '-', '-', '1', 'client-2.jpg', '2019-06-09 16:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_artikel`, `parent_id`, `nama`, `email`, `comment`, `create_at`) VALUES
(1, 8, 0, 'Test Arief', 'arief@gmail.com', 'Good Event', '2019-06-24 09:54:11'),
(2, 8, 0, 'Diiiaaa', 'dia@gmail.com', 'good performance', '2019-06-24 09:55:14'),
(3, 8, 1, 'second', 'second@gmail.com', 'second comment in article 8', '2019-06-24 20:01:35'),
(4, 10, 0, 'The One', 'one@gmail.com', 'First Commet in article 10', '2019-06-25 01:31:04'),
(5, 10, 4, 'The Second', 'second@gmail.com', 'The Second comment in article 10', '2019-06-25 01:36:35'),
(6, 9, 0, 'Test Arief', 'bnp2tki@kemnaker.go.id', 'sdfsfsdfds sfsdfsdfds', '2019-06-25 01:46:44'),
(7, 9, 6, 'Coba comment', 'coba@gmail.com', 'Coba comment', '2019-06-25 10:45:03'),
(8, 8, 3, 'Third', 'third@gmail.com', 'Third Comment', '2019-06-25 11:19:23'),
(9, 10, 5, 'The Third', 'three@gmail.com', 'shfksdhfjksdhjk', '2019-06-25 14:43:13'),
(10, 10, 4, 'The Fourth', 'four@gmail.com', 'suhfiuehfjsdhfius', '2019-06-25 14:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jam_kantor` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `nama_perusahaan`, `alamat`, `email`, `telepon`, `fax`, `gambar`, `jam_kantor`, `create_at`) VALUES
(1, 'OCEAN TRUCK INDONESIA. CO. PTE', 'Sedayu Square Blok B No. 30 – 31, JL. Outer Ringroad Lingkar Luar RT/RW 03/008 Kel. Cengkareng Barat, Kec. Cengkareng, jakarta Barat 11730', 'indonesiaoceantruck@ocean-truck.com', '021 22554237', '021 22554237', 'logo-footer.png', 'Monday - Friday : 09:00 - 17:00 (excluding major holidays) ', '2019-05-12 08:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id` int(11) NOT NULL,
  `division` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `telepon1` varchar(15) NOT NULL,
  `telepon2` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id`, `division`, `nama`, `telepon1`, `telepon2`, `email`, `create_at`) VALUES
(1, 'Marketing', 'Ivy Li', '+62 81286947912', '+86 18210103018', 'ivy_li@ocean-truck.com', '2019-05-12 08:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `akses_level` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `gambar`, `akses_level`, `create_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'administrator', '25d55ad283aa400af464c76d713c07ad', 'avatar1.png', '1', '2019-05-12 06:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul`, `id_kategori`, `video`, `status`, `create_at`) VALUES
(1, 'PT INDONESIA OCEAN TRUCK', 3, 'EYNykJuXlX0', '1', '2019-06-03 14:19:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_menu`
--
ALTER TABLE `front_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `front_menu`
--
ALTER TABLE `front_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
