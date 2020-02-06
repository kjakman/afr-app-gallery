DROP TABLE IF EXISTS `minisite_level1`;
CREATE TABLE `minisite_level1` (
  `id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `level_2` tinyint(1) NOT NULL DEFAULT '0',
  `row_order` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_level1` (`id`, `parent_id`, `name`, `level_2`, `row_order`) VALUES
(10,  90, '2 Column', 0,  0),
(11,  10, '3 Column', 0,  0),
(12,  10, '4 Column', 0,  0),
(13,  40, 'ON', 0,  0),
(14,  40, 'OFF',  0,  0),
(15,  0,  'BillBoard',  0,  0),
(16,  0,  'grid', 0,  0),
(17,  0,  '16:9', 0,  0),
(18,  0,  '4:3',  0,  0),
(19,  0,  '3:2',  0,  0),
(20,  20, '3 Column', 0,  2),
(21,  20, '4 Column', 0,  3),
(22,  30, '3 Column', 0,  0),
(23,  30, '4 Column', 0,  0),
(24,  101,  '3 Column', 0,  0),
(25,  101,  '4 Column', 0,  0),
(26,  90, '3 Column', 0,  0),
(27,  90, '4 Column', 0,  0),
(28,  100,  '3 Column', 0,  2),
(29,  100,  '4 Column', 0,  3),
(30,  100,  '2 Column', 0,  1),
(31,  20, '2 Column', 0,  1),
(32,  103,  '2 Column', 0,  0),
(33,  103,  '3 Column', 0,  0),
(34,  103,  '4 Column', 0,  0),
(35,  102,  'Billboard',  56, 1),
(36,  102,  'Baltimore (16:9)', 52, 1),
(37,  102,  'Casablanca (4:3)', 52, 2),
(38,  102,  'Normandy (3:2)', 52, 3),
(39,  104,  '2 Tabs', 0,  1),
(40,  104,  '3 Tabs', 0,  2),
(41,  105,  '2 Tabs', 0,  1),
(42,  105,  '6 Tabs', 0,  2),
(43,  102,  'Casablanca (4:3)', 53, 2),
(44,  102,  'Normandy (3:2)', 53, 3),
(45,  102,  'Baltimore (16:9)', 53, 1),
(46,  0,  'Parallax', 0,  1),
(47,  102,  'Casablanca (4:3)', 54, 2),
(48,  102,  'Normandy (3:2)', 54, 3),
(49,  102,  'Baltimore (16:9)', 54, 1),
(50,  102,  'Casablanca & Baltimore', 54, 4),
(51,  102,  'Life', 55, 5),
(52,  102,  'Grid', 0,  2),
(53,  102,  'Niagara',  0,  3),
(54,  102,  'Granada',  0,  4),
(55,  102,  'Life', 0,  5),
(56,  102,  'Billboard',  0,  1),
(57,  119,  'Parallax', 0,  1),
(58,  119,  'Grid', 0,  2),
(59,  119,  'Niagara',  0,  3),
(60,  119,  'Granada',  0,  4),
(61,  119,  'Life', 0,  5),
(62,  119,  'Parallax', 57, 1),
(63,  119,  'Baltimore (16:9)', 58, 1),
(64,  119,  'Casablanca (4:3)', 58, 2),
(65,  119,  'Normandy (3:2)', 58, 3),
(66,  119,  'Baltimore (16:9)', 59, 1),
(67,  119,  'Casablanca (4:3)', 59, 2),
(68,  119,  'Normandy (3:2)', 59, 3),
(69,  119,  'Baltimore (16:9)', 60, 1),
(70,  119,  'Casablanca (4:3)', 60, 2),
(71,  119,  'Normandy (3:2)', 60, 3),
(72,  119,  'Casablanca & Baltimore', 60, 4),
(73,  119,  'Life', 61, 5),
(74,  120,  'Grid', 0,  2),
(75,  120,  'Niagara',  0,  3),
(76,  120,  'Granada',  0,  4),
(77,  120,  'Life', 0,  1),
(78,  120,  'Baltimore (16:9)', 74, 1),
(79,  120,  'Casablanca (4:3)', 74, 2),
(80,  120,  'Normandy (3:2)', 74, 3),
(81,  120,  'Baltimore (16:9)', 75, 1),
(82,  120,  'Casablanca (4:3)', 75, 2),
(83,  120,  'Normandy (3:2)', 75, 3),
(84,  120,  'Baltimore (16:9)', 76, 1),
(85,  120,  'Casablanca (4:3)', 76, 2),
(86,  120,  'Normandy (3:2)', 76, 3),
(87,  120,  'Casablanca & Baltimore', 76, 4),
(88,  120,  'Life', 77, 1),
(89,  121,  'Life', 0,  1),
(90,  121,  'Grid', 0,  2),
(91,  121,  'Niagara',  0,  3),
(92,  121,  'Baltimore (16:9)', 90, 1),
(93,  121,  'Casablanca (4:3)', 90, 2),
(94,  121,  'Normandy (3:2)', 90, 3),
(95,  121,  'Baltimore (16:9)', 91, 1),
(96,  121,  'Casablanca (4:3)', 91, 2),
(97,  121,  'Normandy (3:2)', 91, 3),
(98,  121,  'Life', 89, 1),
(99,  122,  'Granada',  0,  1),
(100, 122,  'Grid', 0,  1),
(101, 122,  'Niagara',  0,  1),
(102, 122,  'Baltimore (16:9)', 99, 1),
(103, 122,  'Casablanca (4:3)', 99, 2),
(104, 122,  'Normandy (3:2)', 99, 3),
(105, 122,  'Baltimore (16:9)', 100,  1),
(106, 122,  'Casablanca (4:3)', 100,  2),
(107, 122,  'Normandy (3:2)', 100,  3),
(108, 122,  'Baltimore (16:9)', 101,  1),
(109, 122,  'Casablanca (4:3)', 101,  2),
(110, 122,  'Normandy (3:2)', 101,  3),
(111, 122,  'Casablanca & Baltimore', 99, 4),
(112, 123,  'Baltimore (16:9)', 0,  1),
(113, 123,  'Casablanca (4:3)', 0,  2),
(114, 123,  'Normandy (3:2)', 0,  3);


ALTER TABLE `minisite`
ADD `fixed_header` tinyint(1) NOT NULL DEFAULT '1' AFTER `title_size`;

ALTER TABLE `minisite`
ADD `show_homemenu` tinyint(1) NOT NULL DEFAULT '1' AFTER `fixed_header`;

ALTER TABLE `minisite`
ADD `hover_type` int(8) NOT NULL DEFAULT '1003' AFTER `menu_type`;
ALTER TABLE `minisite`
ADD `art_animation` int(8) NOT NULL DEFAULT '1003' AFTER `hover_type`;
ALTER TABLE `minisite`
ADD `hover_text` int(8) NOT NULL DEFAULT '1003' AFTER `art_animation`;

ALTER TABLE `minisite_page`
ADD `template` int(10) NOT NULL,
ADD `show_details` int(5) NOT NULL AFTER `show_tpl`;

ALTER TABLE `artwork`
CHANGE `video_time` `video_time` time NULL DEFAULT '00:00' AFTER `secondary_year`;

ALTER TABLE `artwork`
ADD `presentation` int(5) NOT NULL AFTER `frame`;

ALTER TABLE `artwork`
ADD `video_director` varchar(128) NOT NULL DEFAULT '' AFTER `video_time`;

ALTER TABLE `minisite`
ADD `connect_domain` tinyint(1) NOT NULL DEFAULT '0';

DROP TABLE IF EXISTS `minisite_page_type`;
CREATE TABLE `minisite_page_type` (
 `id` smallint(4) unsigned NOT NULL DEFAULT '0',
 `name` varchar(50) NOT NULL,
 `tab` varchar(50) NOT NULL,
 `row_order` int(10) NOT NULL,
 `active` tinyint(1) NOT NULL DEFAULT '1',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `minisite_page_type` (`id`, `name`, `tab`, `row_order`, `active`) VALUES
(20,	'Artists Page',	'artist',	5,	1),
(30,	'Multiple Exhibitions - Smart Filter',	'exhibition',	2,	1),
(40,	'Contact Page',	'contact',	6,	1),
(50,	'Bio/Profile/CV',	'bio',	4,	1),
(60,	'Single Exhibition',	'singleExhibition',	1,	1),
(70,	'Embed External Site ',	'extSite',	7,	1),
(80,	'Multiple Exhibitions - Manually Selected',	'manualexb',	3,	1),
(90,	'External Link (Not Suitable as Home Page)',	'extlink',	8,	1);

INSERT INTO `minisite_tpl` (`id`, `created`, `active`, `type`, `parts`, `template`, `page`)
SELECT '15', '2019-08-30', '1', '90', '1', 'extlink', 'extlink'
FROM `minisite_tpl`
WHERE `id` = '14' AND `created` = '2019-08-30' AND `active` = '1' AND `type` = '80' AND `parts` = '2' AND `template` = 'manualexb' AND `template` = 'manualexb' COLLATE utf8mb4_bin AND `page` = 'manualexb' AND `page` = 'manualexb' COLLATE utf8mb4_bin
LIMIT 1;