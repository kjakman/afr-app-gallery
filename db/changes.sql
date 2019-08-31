# changes.sql

# Jan -18

<<<<<<< HEAD

/*
ALTER TABLE `user_profile`
DROP `facebook`,
DROP `instagram`,
DROP `twitter`,
DROP `show_awards`;

=======
>>>>>>> 7a1ad3763dc577958c5f868eb680c2d14cb5ff16
ALTER TABLE `user_profile`
ADD `solo_shows_` text COLLATE 'utf8_general_ci' NOT NULL,
ADD `group_shows_` text COLLATE 'utf8_general_ci' NOT NULL ,
ADD `press_data` text COLLATE 'utf8_general_ci' NOT NULL ,
ADD `show_data` text COLLATE 'utf8_general_ci' NOT NULL;

ALTER TABLE `media_collection`
ADD `about_title` varchar(100) NOT NULL;

ALTER TABLE "media_collection"
DROP "about_title";

ALTER TABLE `media_collection`
ADD `filter` tinyint(1) NOT NULL DEFAULT '1';

CREATE TABLE `profile_media_map` (
  `id` int(8) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_id` int(8) NOT NULL,
  `site_id` int(11) NULL,
  `artist_id` int(11) NULL,
  `name` varchar(128) NOT NULL DEFAULT '',
  `curator_id` int(11) NULL,
  `original_year` varchar(4) NOT NULL DEFAULT '',
  `original_technique` varchar(255) NOT NULL DEFAULT '',
  `artist_name` varchar(50) NOT NULL DEFAULT '',
  `curator_name` varchar(50) NOT NULL DEFAULT '',
  `created` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `artwork_id` int(11) NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
);

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'profile_media_map', '100' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'profile_media_map');

#jan 28

DROP TABLE `minisite_exhibition_layout`;

DROP TABLE `minisite_contact_layout`;

DROP TABLE `page_map`;

DROP TABLE IF EXISTS `minisite_page_type`;
CREATE TABLE `minisite_page_type` (
  `id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `row_order` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_page_type` (`id`, `name`, `row_order`) VALUES
(20,  'Showcase Managed Profiles',  4),
(30,  'Multiple Exhibitions - Smart Filter',  2),
(40,  'Contact Page', 5),
(50,  'Showcase User Profile',  3),
(60,  'Single Exhibition - Smart Filter', 1);

# 22 Mar 2019

ALTER TABLE `user_profile` ADD `bio_description` text COLLATE 'utf8_general_ci' NOT NULL default '';
ALTER TABLE `user_profile` ADD `free_text` text NOT NULL default '';

# 4 April 2019

ALTER TABLE `minisite_layout` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `minisite_layout` CHANGE `id` `id` smallint(3) unsigned NOT NULL DEFAULT '0' FIRST;
ALTER TABLE `minisite_page` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `opening_hours` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `profile_media_map` ADD PRIMARY KEY `id` (`id`);
*/

# 6 June 2019
# statically updated
DROP TABLE IF EXISTS `minisite_font`;
CREATE TABLE `minisite_font` (
  `id` int(8) NOT NULL,
  `created` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `h1` text NOT NULL,
  `h2` text NOT NULL,
  `h3` text NOT NULL,
  `h4` text NOT NULL,
  `h5` text NOT NULL,
  `h6` text NOT NULL,
  `p` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `menu_title` text NOT NULL,
  `font_family` text NOT NULL,
  `title_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `minisite_font`;
CREATE TABLE `minisite_font` (
  `id` int(8) NOT NULL,
  `created` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `h1` text NOT NULL,
  `h2` text NOT NULL,
  `h3` text NOT NULL,
  `h4` text NOT NULL,
  `h5` text NOT NULL,
  `h6` text NOT NULL,
  `p` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `menu_title` text NOT NULL,
  `font_family` text NOT NULL,
  `title_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_font` (`id`, `created`, `timestamp`, `active`, `name`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `p`, `title`, `sub_title`, `menu_title`, `font_family`, `title_image`) VALUES
(1, '2019-04-29', '2019-06-25 06:30:54',  1,  'Gotham Light', 'font-size: 2em; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 12px; color: #000; font-family: gotham_lightregular,Arial,sans-serif;', 'font-size: 1.188em; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 1.2em; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 1.25rem; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 14px; color: #000; font-family: gotham_lightregular,Arial,sans-serif;', 'font-size: 13px; line-height: 21px; font-family: gotham_lightregular,Arial,sans-serif;', 'font-size: 2em; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 12px; color: #000; font-family: gotham_lightregular,Arial,sans-serif;', 'font-size: .825em; font-weight: 400; color: #5d5d5d; font-family: gotham_lightregular,Arial,sans-serif;',  'font-family: \'gotham_lightregular\', Arial, sans-serif;', 'height: 2em;'),
(2, '2019-04-29', '2019-08-19 11:16:29',  1,  'Helvetica Neue', 'font-size: 28px; color: #000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 24px; color: #000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 21px; color: #000;  font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 18px; color: #000;  font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 14px; color: #000;  font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 12px; color: #000;  font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 14px; line-height: 21px; color: #000; color: #000;  font-family: Helvetica Neue; ', 'font-size: 28px; color: #000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 24px; color: #000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 18px;  font-weight: bold; letter-spacing: normal; color: #000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'height: 28px;'),
(6, '2019-05-08', '2019-08-19 11:16:44',  1,  'Avenir', 'font-size: 28px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 24px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 21px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 18px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 12px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 14px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 13px; line-height: 21px; color: #000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 28px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 24px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 18px; font-weight: 400; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-family: \'Avenir\', \'Sans Serif\';', 'height: 28px;'),
(7, '2019-06-19', '2019-08-19 11:16:59',  1,  'Open Sans Regular',  'font-size: 28px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-size: 24px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-size: 21px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-size: 18px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-size: 14px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-size: 12px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-size: 14px; line-height: 21px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';', 'font-size: 28px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-size: 24px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-size: 18px; color: #000; font-family: \'Open Sans\', \'Sans Serif\';',  'font-family: \'Open Sans\', \'Sans Serif\';',  'height: 28px;'),
(8, '2019-08-16', '2019-08-19 11:17:08',  1,  'RadikalW03-Regular', 'font-size: 28px; color: #000; font-family: \'Radikal W03 Regular\';',  'font-size: 24px; color: #000; font-family: \'Radikal W03 Regular\';',  'font-size: 21px; color: #000; font-family: \'Radikal W03 Regular\';',  'font-size: 18px; color: #000; font-family: \'Radikal W03 Regular\';',  'font-size: 14px; color: #000; font-family: \'Radikal W03 Regular\';',  'font-size: 12px; color: #000; font-family: \'Radikal W03 Regular\';',  'font-size: 14px; line-height: 21px; color: #000; font-family: \'Radikal W03 Regular\';', 'font-size: 28px; color: #000; font-family: \'Radikal W03 Regular\';',  'font-size: 24px; color: #000; font-family: \'Radikal W03 Regular\';',  'font-size: 18px; color: #000; font-family: \'Radikal W03 Regular\';',  ' font-family: \'Radikal W03 Regular\';', 'height: 28px;'),
(9, '2019-08-19', '2019-08-19 11:35:08',  1,  'Calluna',  'font-size: 28px; color: #000; font-family: \'Calluna-Regular\';',  'font-size: 24px; color: #000; font-family: \'Calluna-Regular\';',  'font-size: 21px; color: #000; font-family: \'Calluna-Regular\';',  'font-size: 18px; color: #000; font-family: \'Calluna-Regular\';',  'font-size: 14px; color: #000; font-family: \'Calluna-Regular\';',  'font-size: 12px; color: #000; font-family: \'Calluna-Regular\';',  'font-size: 14px; line-height: 21px; color: #000; font-family: \'Calluna-Regular\';', 'font-size: 28px; color: #000; font-family: \'Calluna-Regular\';',  'font-size: 24px; color: #000; font-family: \'Calluna-Regular\';',  'font-size: 18px; color: #000; font-family: \'Calluna-Regular\';',  'font-family: \'Calluna-Regular\';',  'height: 28px;'),
(10,  '2019-08-19', '2019-08-19 11:34:45',  1,  'Brandon Groutesque', 'font-size: 28px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-size: 24px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-size: 21px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-size: 18px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-size: 14px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-size: 12px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-size: 14px; line-height: 21px; color: #000; font-family: \'BrandonGrotesque-Regular\';',  'font-size: 28px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-size: 24px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-size: 18px; color: #000; font-family: \'BrandonGrotesque-Regular\';', 'font-family: \'BrandonGrotesque-Regular\';', 'height: 28px;'),
(11,  '2019-08-19', '2019-08-19 11:17:38',  1,  'Roboto', 'font-size: 28px; color: #000; font-family: \'Roboto\';', 'font-size: 24px; color: #000; font-family: \'Roboto\';', 'font-size: 21px; color: #000; font-family: \'Roboto\';', 'font-size: 18px; color: #000; font-family: \'Roboto\';', 'font-size: 12px; color: #000; font-family: \'Roboto\';', 'font-size: 14px; color: #000; font-family: \'Roboto\';', 'font-size: 13px; line-height: 21px; color: #000; font-family: \'Roboto\';',  'font-size: 28px; color: #000; font-family: \'Roboto\';', 'font-size: 24px; color: #000; font-family: \'Roboto\';', 'font-size: 18px; font-weight: 400; color: #000; font-family: \'Roboto\';', 'font-family: \'Roboto\';', 'height: 28px;'),
(12,  '2019-08-19', '2019-08-19 12:49:38',  1,  'InhouseGothic',  'font-size: 28px; color: #000; font-family: \'InhouseGothic\';',  'font-size: 24px; color: #000; font-family: \'InhouseGothic\';',  'font-size: 21px; color: #000; font-family: \'InhouseGothic\';',  'font-size: 18px; color: #000; font-family: \'InhouseGothic\';',  'font-size: 14px; color: #000; font-family: \'InhouseGothic\';',  'font-size: 12px; color: #000; font-family: \'InhouseGothic\';',  'font-size: 14px; line-height: 21px; font-family: \'InhouseGothic\';',  'font-size: 28px; color: #000; font-family: \'InhouseGothic\';',  'font-size: 24px; color: #000; font-family: \'InhouseGothic\';',  'font-size: 18px; font-weight: 400; color: #000; font-family: \'InhouseGothic\';',  'font-family: \'InhouseGothic\';',  'height: 2em;'),
(13,  '2019-08-19', '2019-08-19 12:51:07',  1,  'ff-din web', 'font-size: 28px; color: #000; font-family: \'FF-DIN\';', 'font-size: 24px; color: #000; font-family: \'FF-DIN\';', 'font-size: 21px; color: #000; font-family: \'FF-DIN\';', 'font-size: 18px; color: #000; font-family: \'FF-DIN\';', 'font-size: 14px; color: #000; font-family: \'FF-DIN\';', 'font-size: 12px; color: #000; font-family: \'FF-DIN\';', 'font-size: 14px; line-height: 21px; font-family: \'FF-DIN\';', 'font-size: 28px; color: #000; font-family: \'FF-DIN\';', 'font-size: 24px; color: #000; font-family: \'FF-DIN\';', 'font-size: 18px; font-weight: 400; color: #000; font-family: \'FF-DIN\';', 'font-family: \'FF-DIN\';', 'height: 28px;'),
(14,  '2019-08-19', '2019-08-19 12:17:27',  1,  'Gill Sans W01 Book', 'font-size: 28px; color: #000; font-family: \'GillSansMT\';', 'font-size: 24px; color: #000; font-family: \'GillSansMT\';', 'font-size: 21px; color: #000; font-family: \'GillSansMT\';', 'font-size: 18px; color: #000; font-family: \'GillSansMT\';', 'font-size: 14px; color: #000; font-family: \'GillSansMT\';', 'font-size: 12px; color: #000; font-family: \'GillSansMT\';', 'font-size: 14px; line-height: 21px; color: #000; font-family: \'GillSansMT\';',  'font-size: 28px; color: #000; font-family: \'GillSansMT\';', 'font-size: 24px; color: #000; font-family: \'GillSansMT\';', 'font-size: 18px; color: #000; font-family: \'GillSansMT\';', 'font-family: \'GillSansMT\';', 'height: 28px;'),
(15,  '2019-08-19', '2019-08-19 12:20:25',  1,  'Graphik LC Web', 'font-size: 28px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-size: 24px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-size: 21px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-size: 18px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-size: 14px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-size: 12px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-size: 14px; line-height: 21px; color: #000; font-family: \'GraphikLCWeb-Regular\';',  'font-size: 28px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-size: 24px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-size: 18px; color: #000; font-family: \'GraphikLCWeb-Regular\';', 'font-family: \'GraphikLCWeb-Regular\';', 'height: 28px;'),
(16,  '2019-08-19', '2019-08-19 12:26:28',  1,  'Portrait Regular', 'font-size: 28px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-size: 24px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-size: 21px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-size: 18px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-size: 14px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-size: 12px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-size: 14px; line-height: 21px; color: #000; font-family: \'Portrait_Web_Regular\';',  'font-size: 28px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-size: 24px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-size: 18px; color: #000; font-family: \'Portrait_Web_Regular\';', 'font-family: \'Portrait_Web_Regular\';', 'height: 28px;'),
(17,  '2019-08-19', '2019-08-19 12:31:52',  1,  'New Transport',  'font-size: 28px; color: #000; font-family: \'TransportMedium\';',  'font-size: 24px; color: #000; font-family: \'TransportMedium\';',  'font-size: 21px; color: #000; font-family: \'TransportMedium\';',  'font-size: 18px; color: #000; font-family: \'TransportMedium\';',  'font-size: 14px; color: #000; font-family: \'TransportMedium\';',  'font-size: 12px; color: #000; font-family: \'TransportMedium\';',  'font-size: 14px; line-height: 21px; color: #000; font-family: \'TransportMedium\';', 'font-size: 28px; color: #000; font-family: \'TransportMedium\';',  'font-size: 24px; color: #000; font-family: \'TransportMedium\';',  'font-size: 18px; color: #000; font-family: \'TransportMedium\';',  'font-family: \'TransportMedium\';',  'height: 28px;'),
(18,  '2019-08-19', '2019-08-19 12:38:20',  1,  'UniversRoman', 'font-size: 28px; color: #000; font-family: \'UniversRoman\';', 'font-size: 24px; color: #000; font-family: \'UniversRoman\';', 'font-size: 21px; color: #000; font-family: \'UniversRoman\';', 'font-size: 18px; color: #000; font-family: \'UniversRoman\';', 'font-size: 14px; color: #000; font-family: \'UniversRoman\';', 'font-size: 12px; color: #000; font-family: \'UniversRoman\';', 'font-size: 14px; line-height: 21px; color: #000; font-family: \'UniversRoman\';',  'font-size: 28px; color: #000; font-family: \'UniversRoman\';', 'font-size: 24px; color: #000; font-family: \'UniversRoman\';', 'font-size: 18px; color: #000; font-family: \'UniversRoman\';', 'font-family: \'UniversRoman\';', 'height: 28px;'),
(19,  '2019-08-19', '2019-08-19 12:42:14',  1,  'Whitney A',  'font-size: 28px; color: #000; font-family: \'Whitney-Book\';', 'font-size: 24px; color: #000; font-family: \'Whitney-Book\';', 'font-size: 21px; color: #000; font-family: \'Whitney-Book\';', 'font-size: 18px; color: #000; font-family: \'Whitney-Book\';', 'font-size: 14px; color: #000; font-family: \'Whitney-Book\';', 'font-size: 12px; color: #000; font-family: \'Whitney-Book\';', 'font-size: 14px; line-height: 21px; color: #000; font-family: \'Whitney-Book\';',  'font-size: 28px; color: #000; font-family: \'Whitney-Book\';', 'font-size: 24px; color: #000; font-family: \'Whitney-Book\';', 'font-size: 18px; color: #000; font-family: \'Whitney-Book\';', 'font-family: \'Whitney-Book\';', 'height: 28px;');

ALTER TABLE `minisite_page`
ADD `colour` varchar(600) COLLATE 'utf8mb4_general_ci' NOT NULL;

ALTER TABLE `minisite_page`
CHANGE `page_title` `page_title` varchar(32) COLLATE 'utf8mb4_general_ci' NOT NULL DEFAULT '' AFTER `menu_title`;

ALTER TABLE `minisite_page`
CHANGE `data` `data` text COLLATE 'utf8mb4_general_ci' NOT NULL AFTER `row_order`;

ALTER TABLE `minisite_page`
ADD `page_layout` int(25) NOT NULL,
ADD `second_layout` int(25) NOT NULL AFTER `page_layout`;

UPDATE `exhibition_type` SET
`id` = '40',
`name` = 'Series/Selection',
`description` = ''
WHERE `id` = '40';

INSERT INTO `exhibition_type` (`id`, `name`, `description`)
VALUES ('50', 'Showroom/Private Link', '');

ALTER table `minisite_page_type` ADD COLUMN `row_order` int(10) NOT NULL;


#statically updated

DROP TABLE IF EXISTS `minisite_layout`;
CREATE TABLE `minisite_layout` (
  `id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `subtype` int(11) NOT NULL DEFAULT '1',
  `separator` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `row_order` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

<<<<<<< HEAD
=======
DROP TABLE IF EXISTS `minisite_layout`;
CREATE TABLE `minisite_layout` (
  `id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `subtype` int(11) NOT NULL DEFAULT '1',
  `separator` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `row_order` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> 7a1ad3763dc577958c5f868eb680c2d14cb5ff16

INSERT INTO `minisite_layout` (`id`, `parent_id`, `type`, `subtype`, `separator`, `name`, `row_order`, `image`, `active`, `created`, `timestamp`) VALUES
(101, 40, 30, 1,  'off',  'Timeline', 13, '', 1,  '2019-06-06 11:34:26',  '2019-07-01 09:15:15'),
(102, 40, 30, 1,  'on', 'Timeline - with Filter', 14, '', 1,  '2019-06-10 07:37:55',  '2019-07-01 09:15:27'),
(103, 10, 30, 1,  '3C', 'Masonry - 3 Column', 1,  '', 1,  '2019-06-10 07:38:11',  '2019-07-01 09:10:28'),
(104, 10, 30, 1,  '4C', 'Masonry - 4 Column', 3,  '', 1,  '2019-06-10 07:38:17',  '2019-07-01 09:11:29'),
(105, 10, 30, 1,  '3CT',  'Masonry - 3 Column; by Past, Current, Future', 2,  '', 1,  '2019-06-10 07:38:23',  '2019-07-01 09:10:48'),
(106, 10, 30, 1,  '4CT',  'Masonry - 4 Column; by Past, Current, Future', 4,  '', 1,  '2019-06-10 07:38:29',  '2019-07-01 09:11:40'),
(107, 20, 30, 1,  '3C', 'Landscape- 3 Column',  5,  '', 1,  '2019-06-10 07:38:35',  '2019-07-01 09:12:38'),
(108, 20, 30, 1,  '4C', 'Landscape- 4 Column',  7,  '', 1,  '2019-06-10 07:38:49',  '2019-07-01 09:13:13'),
(109, 20, 30, 1,  '3CT',  'Landscape- 3 Column; by Past, Current, Future',  6,  '', 1,  '2019-06-10 07:38:57',  '2019-07-01 09:12:54'),
(110, 20, 30, 1,  '4CT',  'Landscape- 4 Column; by Past, Current, Future',  8,  '', 1,  '2019-06-10 07:39:03',  '2019-07-01 09:13:27'),
(111, 30, 30, 1,  '3C', 'Hanging Line - 3 Coiumn',  9,  '', 1,  '2019-06-10 07:39:25',  '2019-07-01 09:13:42'),
(112, 30, 30, 1,  '4C', 'Hanging Line - 4 Column',  11, '', 1,  '2019-06-10 07:39:33',  '2019-07-01 09:14:15'),
(113, 30, 30, 1,  '3CT',  'Hanging Line - 3 Column; by Past, Current, Future',  10, '', 1,  '2019-06-10 07:39:41',  '2019-07-01 09:14:00'),
(114, 30, 30, 1,  '4CT',  'Hanging Line - 4 Column; by Past, Current, Future',  12, '', 1,  '2019-06-10 07:39:47',  '2019-07-01 09:14:36'),
(115, 0,  30, 1,  '', 'Cover Page', 15, '', 1,  '2019-06-10 08:04:21',  '2019-06-10 08:04:21'),
(116, 0,  30, 1,  '', 'Cover Page & Landscape', 16, '', 1,  '2019-06-10 08:04:29',  '2019-06-10 08:04:29'),
(117, 0,  40, 1,  '', 'Tosca',  1,  'contact_layout1.png',  1,  '2019-06-10 08:04:37',  '2019-07-01 11:19:17'),
(118, 0,  40, 1,  '', 'Carmen', 2,  'contact_layout2.png',  1,  '2019-06-10 08:04:55',  '2019-07-01 11:19:29'),
(119, 50, 20, 1,  '3C', 'Default',  2,  '', 1,  '2019-06-10 07:37:41',  '2019-08-28 10:13:04'),
(124, 60, 20, 1,  '4C', 'Layout 1', 4,  '', 1,  '2019-06-07 06:48:42',  '2019-07-01 09:08:19'),
(125, 50, 20, 1,  '4C', 'Layout 2', 1,  '', 1,  '2019-06-07 06:56:25',  '2019-08-28 10:13:09'),
(126, 60, 20, 1,  '3C', 'Layout 3', 3,  '', 1,  '2019-06-07 06:57:09',  '2019-07-01 09:08:00'),
(127, 70, 20, 1,  'off',  'Layout 4', 6,  '', 1,  '2019-06-11 12:21:43',  '2019-07-01 09:09:13'),
(128, 0,  20, 2,  '', 'Berlin 3 Tabs',  1,  'BerlinFullx.png',  1,  '2019-06-11 12:54:19',  '2019-07-03 11:29:34'),
(129, 0,  20, 2,  '', 'Berlin 2 Tabs',  2,  'BerlinSlimx.png',  1,  '2019-06-11 12:55:01',  '2019-07-03 11:29:48'),
(130, 0,  20, 2,  '', 'Manhattan 6 Tabs', 3,  'ManhattanFullx.png', 1,  '2019-06-11 12:55:40',  '2019-07-03 11:30:03'),
(131, 0,  20, 2,  '', 'Manhattan 2 Tabs', 4,  'ManhattanSlimx.png', 1,  '2019-06-11 12:57:33',  '2019-07-03 11:30:18'),
(132, 0,  30, 2,  '', 'Kyoto',  1,  'kyoto.png',  1,  '2019-06-11 13:23:08',  '2019-07-01 11:12:34'),
(133, 0,  30, 2,  '', 'Seoul',  2,  'seoul.png',  1,  '2019-06-11 13:23:40',  '2019-07-01 11:12:52'),
(134, 70, 20, 1,  'on', 'Layout 5', 5,  '', 1,  '2019-07-01 09:09:24',  '2019-07-01 09:09:24'),
(135, 80, 60, 1,  '', 'Kyoto',  1,  'kyoto.png',  1,  '2019-06-24 12:19:11',  '2019-07-03 06:27:45'),
(136, 80, 60, 1,  '', 'Seoul',  2,  'seoul.png',  1,  '2019-06-24 12:39:30',  '2019-07-03 06:27:59'),
(137, 10, 30, 1,  '3CY',  'Masonry - 3 Column; by Year',  17, '', 1,  '2019-07-02 06:19:45',  '2019-07-02 06:19:45'),
(138, 10, 30, 1,  '4CY',  'Masonry - 4 Column; by Year',  18, '', 1,  '2019-07-02 06:20:42',  '2019-07-02 06:20:42'),
(139, 20, 30, 1,  '3CY',  'Landscape- 3 Column; by Year', 0,  '', 1,  '2019-07-02 07:24:23',  '2019-07-02 07:24:23'),
(140, 20, 30, 1,  '4CY',  'Landscape- 4 Column; by Year', 0,  '', 1,  '2019-07-02 07:25:39',  '2019-07-02 07:25:39'),
(141, 30, 30, 1,  '3CY',  'Hanging Line - 3 Coiumn; by Year', 0,  '', 1,  '2019-07-02 07:27:25',  '2019-07-02 07:27:25'),
(142, 30, 30, 1,  '4CY',  'Hanging Line - 4 Coiumn; by Year', 0,  '', 1,  '2019-07-02 07:28:08',  '2019-07-02 07:28:08'),
(143, 90, 30, 1,  '3C', '16:9- 3 Column', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-07-03 05:02:12'),
(144, 90, 30, 1,  '4C', '16:9- 4 Column', 0,  '', 1,  '2019-07-03 04:59:50',  '2019-07-03 05:02:21'),
(145, 90, 30, 1,  '3CT',  '16:9- 3 Column; by Past, Current, Future', 0,  '', 1,  '2019-07-03 05:01:40',  '2019-07-03 05:02:46'),
(146, 90, 30, 1,  '4CT',  '16:9- 4 Column; by Past, Current, Future', 0,  '', 1,  '2019-07-03 05:03:23',  '2019-07-03 05:03:23'),
(147, 90, 30, 1,  '3CY',  '16:9- 3 Column; by Year',  0,  '', 1,  '2019-07-03 05:04:18',  '2019-07-03 05:04:18'),
(148, 90, 30, 1,  '4CY',  '16:9- 4 Column; by Year',  0,  '', 1,  '2019-07-03 05:04:53',  '2019-07-03 05:04:53'),
(149, 100,  30, 1,  '3C', '4:3- 3 Column',  0,  '', 1,  '2019-07-04 05:48:26',  '2019-07-04 05:48:26'),
(150, 100,  30, 1,  '4C', '4:3- 4 Column',  0,  '', 1,  '2019-07-04 05:50:00',  '2019-07-04 05:50:10'),
(151, 100,  30, 1,  '3CT',  '4:3- 3 Column; by Past, Current, Future',  0,  '', 1,  '2019-07-04 05:51:01',  '2019-07-04 05:51:01'),
(152, 100,  30, 1,  '4CT',  '4:3- 4 Column; by Past, Current, Future',  0,  '', 1,  '2019-07-04 05:51:37',  '2019-07-04 05:51:37'),
(153, 100,  30, 1,  '3CY',  '4:3- 3 Column; by Year', 0,  '', 1,  '2019-07-04 05:59:26',  '2019-07-04 06:00:57'),
(154, 100,  30, 1,  '4CY',  '4:3- 4 Column; by Year', 0,  '', 1,  '2019-07-04 06:00:48',  '2019-07-04 06:00:48'),
(155, 0,  20, 2,  '', 'Bio - Berlin Style', 5,  'BioBerlin.png',  1,  '2019-07-04 13:05:33',  '2019-07-05 10:15:46'),
(156, 0,  20, 2,  '', 'Bio - Manhattan Style',  6,  'BioManhattan.png', 1,  '2019-07-05 05:34:47',  '2019-07-05 10:16:53'),
(157, 0,  20, 2,  '', 'CV - Berlin Style',  7,  'CV-Berlin.png',  1,  '2019-07-05 05:48:09',  '2019-07-05 10:17:05'),
(158, 101,  30, 1,  '3C', 'Standing - 3C',  0,  '', 1,  '2019-07-05 07:20:46',  '2019-07-05 07:20:46'),
(159, 101,  30, 1,  '4C', 'Standing_4C',  0,  '', 1,  '2019-07-05 07:21:25',  '2019-07-05 07:21:25'),
(160, 101,  30, 1,  '3CT',  'Stanging- 3C; by Past, Current, Future ',  0,  '', 1,  '2019-07-05 07:22:16',  '2019-07-05 07:22:16'),
(161, 101,  30, 1,  '4CT',  'Stanging- 4C; by Past, Current, Future ',  0,  '', 1,  '2019-07-05 07:22:38',  '2019-07-05 07:22:38'),
(162, 101,  30, 1,  '3CY',  'Stanging- 3C; by Year',  0,  '', 1,  '2019-07-05 07:23:12',  '2019-07-05 07:23:12'),
(163, 101,  30, 1,  '4CY',  'Stanging- 4C; by Year',  0,  '', 1,  '2019-07-05 07:23:41',  '2019-07-05 07:23:41'),
(164, 0,  20, 2,  '', 'Selected Art Masonry', 8,  'profileMasonry.png', 1,  '2019-07-05 11:04:57',  '2019-07-09 05:46:09'),
(165, 0,  20, 2,  '', 'Selected Art Hanging', 9,  'SArtHanging.png',  1,  '2019-07-09 06:12:40',  '2019-07-09 12:21:14'),
(166, 0,  20, 2,  '', 'Selected Art Standing',  10, 'SArtStanding.png', 1,  '2019-07-09 06:54:35',  '2019-07-09 12:21:23'),
(167, 0,  20, 2,  '', 'Selected Art Masonry Extreme', 11, 'SAmasonryExt.png', 1,  '2019-07-09 07:00:27',  '2019-07-09 12:31:27'),
(168, 0,  30, 2,  '', 'Art - Masonry',  3,  'profileMasonry.png', 1,  '2019-07-09 10:35:29',  '2019-07-10 05:46:49'),
(169, 0,  30, 2,  '', 'Art - Hanging',  4,  'SArtHanging.png',  1,  '2019-07-09 10:36:06',  '2019-07-10 05:46:58'),
(170, 0,  30, 2,  '', 'Art - Standing', 5,  'SArtStanding.png', 1,  '2019-07-09 10:36:52',  '2019-07-10 05:47:08'),
(171, 0,  30, 2,  '', 'Art - Masonry Extreme',  6,  'SAmasonryExt.png ',  1,  '2019-07-09 10:37:30',  '2019-07-10 05:47:17'),
(172, 80, 60, 1,  '', 'Art - Masonry',  3,  'profileMasonry.png', 1,  '2019-07-11 06:06:39',  '2019-07-11 07:07:22'),
(173, 80, 60, 1,  '', 'Art - Hanging',  4,  'SArtHanging.png',  1,  '2019-07-11 06:07:27',  '2019-07-11 07:07:33'),
(174, 80, 60, 1,  '', 'Art - Masonry Extreme',  5,  'SAmasonryExt.png', 1,  '2019-07-11 06:08:02',  '2019-07-11 07:07:45'),
(175, 80, 60, 1,  '', 'Art - Standing', 6,  'SArtStanding.png', 1,  '2019-07-11 06:09:09',  '2019-07-11 07:07:55'),
(176, 102,  30, 1,  'time', 'Banner- Time filter',  2,  '', 1,  '2019-08-20 07:49:41',  '2019-08-22 05:19:40'),
(177, 102,  30, 1,  'year', 'Banner- Year filter',  3,  '', 1,  '2019-08-20 07:55:33',  '2019-08-22 05:19:46'),
(178, 102,  30, 1,  'none', 'Banner', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-08-22 05:19:31'),
(179, 0,  20, 2,  '', 'Manhattan 2 Tabs with Exhibitions',  12, 'ManhattanSlimx.png', 1,  '2019-06-11 12:57:33',  '2019-08-30 11:04:48');

ALTER TABLE `minisite`
ADD `font_type` int(25) NOT NULL,
ADD `menu_type` int(25) NOT NULL;
ADD `icon_size` int(8) NOT NULL;

/*
CREATE TABLE `exhibition_map` (
  `id` int(8) NOT NULL,
  `media_collection_id` int(8) NOT NULL,
  `media_id` int(8) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `curator_id` int(11) NOT NULL,
  `page_id` int(8) NOT NULL
);
*/

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
VALUES ('exhibition_map', '10');


DROP TABLE IF EXISTS `minisite_parent_layout`;
CREATE TABLE `minisite_parent_layout` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `row_order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_parent_layout` (`id`, `name`, `image`, `type`, `row_order`, `active`, `created`, `timestamp`) VALUES
(10,  'Masonry',  'MasonryScreenshot.png',  30, 1,  1,  '2019-06-14 12:59:31',  '2019-07-05 10:07:23'),
(20,  'Landscape Resized',  'LandsscapeScreenshot.png', 30, 2,  1,  '2019-06-17 08:38:17',  '2019-07-05 10:19:47'),
(30,  'Hanging',  'HangingScreenshot.png',  30, 3,  1,  '2019-06-17 08:40:16',  '2019-07-05 10:08:15'),
(40,  'Timeline', 'LandscapeScreenShot.png',  30, 7,  1,  '2019-06-17 12:39:30',  '2019-07-05 10:09:05'),
(50,  'Square Artist',  'ArtistsLayoutSquare.png',  20, 1,  1,  '2019-06-18 06:32:29',  '2019-06-24 14:00:46'),
(60,  'Circle artist',  'ArtistsLayoutCircle.png',  20, 2,  1,  '2019-06-18 06:33:07',  '2019-06-24 14:01:14'),
(70,  'List Mouseover', 'ArtistsLayoutList.png',  20, 3,  1,  '2019-06-18 06:33:45',  '2019-06-24 14:01:02'),
(80,  'Single page Exhibition', '', 60, 1,  1,  '2019-06-24 12:15:10',  '2019-06-24 12:35:03'),
(90,  'Baltimore (16:9)', 'BaltimoreScreenshot.png',  30, 5,  1,  '2019-07-02 12:55:02',  '2019-07-05 10:04:56'),
(100, 'Casablanca (4:3)', 'CasablancaScreenshot.png', 30, 6,  1,  '2019-07-04 05:45:32',  '2019-07-05 10:04:33'),
<<<<<<< HEAD
(101, 'Standing ',  'StandingScreenshot.png', 30, 4,  1,  '2019-07-05 07:16:12',  '2019-07-05 10:03:03');
=======
(101, 'Standing ',  'StandingScreenshot.png', 30, 4,  1,  '2019-07-05 07:16:12',  '2019-07-05 10:03:03'),
(102, 'Billboard',  'Billboard.png',  30, 8,  1,  '2019-08-19 13:35:36',  '2019-08-30 10:59:10');

#30 Aug 2019

ALTER TABLE `minisite`
ADD `sitetitle_size` int(8) NOT NULL;

ALTER TABLE `gallery`
ADD `type` varchar(10) COLLATE 'utf8_general_ci' NOT NULL DEFAULT 'folder';

ALTER TABLE `gallery`
CHANGE `title` `name` varchar(100) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `user_id`;

CREATE TABLE `media_folder` (
  `id` int(8) NOT NULL,
  `site_id` int(8) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL DEFAULT '',
  `tags` text NOT NULL,
  `type` varchar(25) NOT NULL,
  `path` varchar(255) NOT NULL DEFAULT ''
);
ALTER TABLE `media_folder`
ADD PRIMARY KEY `id` (`id`),
ADD INDEX `user_id` (`user_id`);

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
VALUES ('media_folder', '5000');

ALTER TABLE `media`
ADD `folder_id` int(11) NOT NULL DEFAULT '0' AFTER `parent_id`;

ALTER TABLE `media_collection_map`
DROP INDEX `media_collection_id`;

ALTER TABLE `media`
ADD `tags` text NOT NULL;

CREATE TABLE `artwork_related_types` (
  `id` smallint(3) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `rank` int(10) NOT NULL
);

CREATE TABLE `artwork_related_media` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NULL,
  `artwork_id` bigint NULL,
  `type` varchar(25) NULL,
  `description` text NULL,
  `media` text NULL
);

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
VALUES ('artwork_related_media', '10');

ALTER TABLE `artwork_media`
ADD PRIMARY KEY `id` (`id`),
ADD INDEX `type` (`type`);

ALTER TABLE `minisite_page`
ADD `secondary_title` varchar(60) COLLATE 'utf8mb4_general_ci' NOT NULL AFTER `page_title`;

ALTER TABLE `minisite_page`
CHANGE `page_title` `page_title` varchar(60) COLLATE 'utf8mb4_general_ci' NOT NULL DEFAULT '' AFTER `menu_title`;

ALTER TABLE `minisite`
ADD `footer_data` text NOT NULL;

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
(1, '2019-08-30', 1,  20, 1,  'artists',  'artists'),
(2, '2019-08-30', 1,  30, 1,  'exhibitions',  'exhibitions'),
(3, '2019-08-30', 1,  40, 1,  'contact',  'contact'),
(4, '2019-08-30', 1,  50, 1,  'bio',  'bio'),
(5, '2019-08-30', 1,  60, 1,  'singleExhibitions',  'singleExhibitions'),
(6, '2019-08-30', 1,  70, 1,  'shopifyTest',  'shopifyTest'),
(8, '2019-08-30', 1,  80, 1,  'mailchimpTest',  'mailchimpTest'),
(9, '2019-08-30', 1,  20, 2,  'artist', 'artist'),
(10,  '2019-08-30', 1,  30, 2,  'exhibition', 'exhibition'),
(11,  '2019-08-30', 1,  40, 2,  'contact',  'contact'),
(12,  '2019-08-30', 1,  50, 2,  'bio',  'bio'),
(13,  '2019-08-30', 1,  60, 2,  'singleExhibitions',  'singleExhibitions');
>>>>>>> 7a1ad3763dc577958c5f868eb680c2d14cb5ff16
