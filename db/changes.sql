DROP TABLE IF EXISTS `minisite_tpl`;
CREATE TABLE `minisite_tpl` (
  `id` int(8) NOT NULL,
  `created` date NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `type` int(10) DEFAULT NULL,
  `parts` int(11) NOT NULL DEFAULT '0',
  `template` varchar(20) NOT NULL,
  `page` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_tpl` (`id`, `created`, `active`, `type`, `parts`, `template`, `page`) VALUES
(1,	'2019-08-30',	1,	20,	1,	'artists',	'artists'),
(2,	'2019-08-30',	1,	30,	1,	'exhibitions',	'exhibitions'),
(3,	'2019-08-30',	1,	40,	1,	'contact',	'contact'),
(4,	'2019-08-30',	1,	50,	1,	'bio',	'bio'),
(5,	'2019-08-30',	1,	60,	1,	'singleExhibitions',	'singleExhibitions'),
(6,	'2019-08-30',	1,	70,	1,	'shopifyTest',	'shopifyTest'),
(8,	'2019-08-30',	1,	80,	1,	'manualexbs',	'manualexbs'),
(9,	'2019-08-30',	1,	20,	2,	'artist',	'artist'),
(10,	'2019-08-30',	1,	30,	2,	'exhibition',	'exhibition'),
(11,	'2019-08-30',	1,	40,	2,	'contact',	'contact'),
(12,	'2019-08-30',	1,	50,	2,	'bio',	'bio'),
(13,	'2019-08-30',	1,	60,	2,	'singleExhibitions',	'singleExhibitions'),
(14,	'2019-08-30',	1,	80,	2,	'manualexb',	'manualexb'),
(15,	'2019-08-30',	1,	90,	1,	'extlink',	'extlink');