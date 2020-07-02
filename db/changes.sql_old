# changes.sql

#static tables with static values

DROP TABLE IF EXISTS `exhibition_type`;
CREATE TABLE `exhibition_type` (
  `id` smallint(3) unsigned NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `exhibition_type` (`id`, `name`, `description`) VALUES
(10,  'Gallery Show', ''),
(20,  'Art Fair', ''),
(30,  'Other Event',  ''),
(40,  'Series/Selection', ''),
(50,  'Private Link', '');

#Drop unwanted table and db_seq

DROP TABLE `minisite_exhibition_layout`;

DROP TABLE `minisite_contact_layout`;

DROP TABLE `page_map`;
DELETE FROM `db_sequence`
WHERE `seq_name` = 'page_map' AND ((`seq_name` = 'page_map' AND `seq_name` = 'page_map' COLLATE utf8mb4_bin));

DROP TABLE `profile_media_map`;
DELETE FROM `db_sequence`
WHERE `seq_name` = 'profile_media_map' AND ((`seq_name` = 'profile_media_map' AND `seq_name` = 'profile_media_map' COLLATE utf8mb4_bin));

# Jan -18

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

#jan 28

# 22 Mar 2019

ALTER TABLE `user_profile` ADD `bio_description` text COLLATE 'utf8_general_ci' NOT NULL default '';
ALTER TABLE `user_profile` ADD `free_text` text NOT NULL default '';

# 4 April 2019

ALTER TABLE `minisite_layout` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `minisite_layout` CHANGE `id` `id` smallint(3) unsigned NOT NULL DEFAULT '0' FIRST;
ALTER TABLE `minisite_page` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `opening_hours` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `profile_media_map` ADD PRIMARY KEY `id` (`id`);

#6 June 2019
#statically updated
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


ALTER TABLE `minisite`
ADD `font_type` int(25) NOT NULL,
ADD `menu_type` int(25) NOT NULL;
ADD `icon_size` int(8) NOT NULL;

DROP TABLE IF EXISTS `exhibition_map`;
CREATE TABLE `exhibition_map` (
  `id` int(8) NOT NULL,
  `media_collection_id` int(8) NOT NULL,
  `media_id` int(8) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'single',
  `curator_id` int(11) NOT NULL,
  `page_id` int(8) NOT NULL,
  `rank` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
VALUES ('exhibition_map', '10');

#30 Aug 2019

ALTER TABLE `minisite`
ADD `sitetitle_size` int(8) NOT NULL;

ALTER TABLE `minisite`
ADD `title_size` int(8) NOT NULL;

ALTER TABLE `gallery`
ADD `type` varchar(10) COLLATE 'utf8_general_ci' NOT NULL DEFAULT 'folder';

ALTER TABLE `gallery`
CHANGE `title` `name` varchar(100) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `user_id`;

DROP TABLE IF EXISTS `media_folder`;
CREATE TABLE `media_folder` (
  `id` int(8) NOT NULL,
  `site_id` int(8) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `filename` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `tags` text CHARACTER SET utf8mb4 NOT NULL,
  `type` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `rank` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
VALUES ('media_folder', '5000');

## Add static media folders to live DB

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5000', '247', '1', now(), now(), '20699', 'Uploads', '', 'folder', '/user/20699/vault/5000', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5001', '247', '1', now(), now(), '20361', 'Uploads', '', 'folder', '/user/20361/vault/5001', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5002', '247', '1', now(), now(), '20685', 'Uploads', '', 'folder', '/user/20685/vault/5002', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5003', '247', '1', now(), now(), '17800', 'Uploads', '', 'folder', '/user/17800/vault/5003', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5004', '247', '1', now(), now(), '17476', 'Uploads', '', 'folder', '/user/17476/vault/5004', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5005', '247', '1', now(), now(), '17470', 'Uploads', '', 'folder', '/user/17470/vault/5005', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5006', '247', '1', now(), now(), '20669', 'Uploads', '', 'folder', '/user/20669/vault/5006', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5007', '247', '1', now(), now(), '20049', 'Uploads', '', 'folder', '/user/20049/vault/5007', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5008', '247', '1', now(), now(), '17391', 'Uploads', '', 'folder', '/user/17391/vault/5008', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5009', '247', '1', now(), now(), '20649', 'Uploads', '', 'folder', '/user/20649/vault/5009', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5010', '247', '1', now(), now(), '20661', 'Uploads', '', 'folder', '/user/20661/vault/5010', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5011', '247', '1', now(), now(), '17243', 'Uploads', '', 'folder', '/user/17243/vault/5011', '1');

INSERT INTO `media_folder` (`id`, `site_id`, `active`, `created`, `timestamp`, `user_id`, `filename`, `tags`, `type`, `path`, `rank`)
VALUES ('5012', '247', '1', now(), now(), '20658', 'Uploads', '', 'folder', '/user/20658/vault/5012', '1');

ALTER TABLE `media`
ADD `folder_id` int(11) NOT NULL DEFAULT '0' AFTER `parent_id`;

ALTER TABLE `media_collection_map`
DROP INDEX `media_collection_id`;

ALTER TABLE `media`
ADD `tags` text NOT NULL;

DROP TABLE IF EXISTS `artwork_related_types`;

DROP TABLE IF EXISTS `artwork_related_type`;
CREATE TABLE `artwork_related_type` (
  `id` smallint(3) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `rank` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `artwork_related_type` (`id`, `name`, `rank`) VALUES
(10,  'Blank - leave blank',  1),
(20,  'Detail', 3),
(30,  'Installation', 2),
(40,  'Studio', 5),
(50,  'Inspiration',  6),
(60,  'Influences', 7),
(70,  'Event',  4);

DROP TABLE IF EXISTS `artwork_media`;
CREATE TABLE `artwork_media` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `artwork_id` bigint(20) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `description` text,
  `media` text,
  `row_order` int(11) DEFAULT NULL,
  `created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `artwork_media`
ADD PRIMARY KEY `id` (`id`),
ADD INDEX `type` (`type`);

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
VALUES ('artwork_media', '10');

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

ALTER TABLE `minisite_page`
ADD `search1` text NOT NULL;

DROP TABLE IF EXISTS `minisite_menu`;
CREATE TABLE `minisite_menu` (
  `id` int(8) NOT NULL,
  `created` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL,
  `name` varchar(25) NOT NULL DEFAULT '',
  `logo` text NOT NULL,
  `sub_title` text NOT NULL,
  `menu_title` text NOT NULL,
  `icon_default` int(5) NOT NULL,
  `icon1` int(5) NOT NULL,
  `icon2` int(5) NOT NULL,
  `icon3` int(5) NOT NULL,
  `icon4` int(5) NOT NULL,
  `icon5` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_menu` (`id`, `created`, `timestamp`, `active`, `name`, `logo`, `sub_title`, `menu_title`, `icon_default`, `icon1`, `icon2`, `icon3`, `icon4`, `icon5`, `image`) VALUES
(1, '2019-08-16', '2019-08-16 12:20:37',  1,  'Oslo', 'font-size: 36px !important;',  'font-size: 12px !important;text-transform: uppercase !important;', 'font-size: 12px !important;text-transform: uppercase !important;', 36, 40, 50, 60, 70, 80, 'OlsoMenu.png'),
(2, '2019-08-16', '2019-08-16 12:22:02',  1,  'Madrid', 'font-size: 28px !important;',  'font-size: 12px !important;text-transform: uppercase !important;', 'font-size: 15px !important;text-transform: none !important;',  28, 28, 35, 40, 45, 50, 'MadridMenu.png'),
(3, '2019-08-16', '2019-08-16 12:23:16',  1,  'Milan',  'font-size: 30px !important;',  'font-size: 12px !important;text-transform: uppercase !important;', 'font-size: 16px !important;text-transform: capitalize !important;',  30, 40, 50, 60, 70, 80, 'Milan.png'),
(4, '2019-08-16', '2019-08-16 12:25:16',  1,  'Nicosia',  'font-size: 30px !important;',  'font-size: 12px !important;text-transform: uppercase !important;', 'font-size: 20px !important;text-transform: uppercase !important;', 30, 40, 50, 60, 70, 80, 'Nicosia.png'),
(5, '2019-08-16', '2019-08-16 12:26:22',  1,  'Athens', 'font-size: 28px !important;',  'font-size: 14px !important;text-transform: capitalize !important;',  'font-size: 16px !important;text-transform: capitalize !important;',  28, 35, 40, 45, 50, 55, 'Athens.png'),
(6, '2019-08-16', '2019-08-16 12:27:44',  1,  'Lisbon', 'font-size: 28px !important;',  'font-size: 14px !important;text-transform: capitalize !important;',  'font-size: 20px !important;text-transform: capitalize !important;',  28, 35, 40, 45, 50, 55, 'Lisbon.png'),
(7, '2019-08-16', '2019-08-16 12:28:53',  1,  'Marseille',  'font-size: 28px !important;',  'font-size: 14px !important;text-transform: capitalize !important;',  'font-size: 20px !important;text-transform: capitalize !important;',  28, 35, 40, 45, 50, 55, 'Marseilles.png'),
(8, '2019-08-16', '2019-08-16 12:29:51',  1,  'Alexandria', 'font-size: 28px !important;',  'font-size: 14px !important;text-transform: capitalize !important;',  'font-size: 20px !important;text-transform: capitalize !important;',  28, 35, 40, 45, 50, 55, 'Alexandria.png');

ALTER TABLE `media_collection_map`
ADD `description` varchar(128) COLLATE 'utf8_general_ci' NOT NULL AFTER `name`,
ADD `type` int(11) NOT NULL DEFAULT '30' AFTER `collection_type`;

ALTER TABLE `media_collection_map`
CHANGE `media_id` `media_id` int(8) NULL AFTER `media_collection_id`;

DROP TABLE IF EXISTS `media_tags`;
CREATE TABLE `media_tags` (
  `id` int(4) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(25) NOT NULL DEFAULT '',
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `media_tags` (`id`, `created`, `timestamp`, `name`, `active`) VALUES
(10,  '2019-08-13 06:16:48',  '2019-08-13 06:16:48',  'Painting', 1),
(11,  '2019-08-13 06:16:59',  '2019-08-13 06:16:59',  'Sculpture',  1),
(12,  '2019-08-13 06:17:08',  '2019-08-13 06:17:08',  'Photograph', 1),
(13,  '2019-08-13 06:17:19',  '2019-08-13 06:17:19',  'Print',  1),
(14,  '2019-08-13 06:17:50',  '2019-08-13 06:17:50',  'Drawing',  1),
(15,  '2019-08-13 06:18:02',  '2019-08-13 06:18:02',  'Film', 1),
(16,  '2019-08-13 06:18:10',  '2019-08-13 06:18:10',  'Video',  1),
(17,  '2019-08-13 06:18:21',  '2019-08-13 06:18:21',  'Cast', 1),
(18,  '2019-08-13 06:18:43',  '2019-08-13 06:18:43',  'Installation', 1),
(19,  '2019-08-13 06:19:41',  '2019-08-13 06:19:41',  'Performance',  1),
(20,  '2019-08-13 06:20:30',  '2019-08-13 06:20:30',  'Profile',  1),
(21,  '2019-08-13 06:20:44',  '2019-08-13 06:20:44',  'Portrait', 1),
(22,  '2019-08-13 06:21:32',  '2019-08-13 06:21:32',  'Detail', 1),
(23,  '2019-08-13 06:22:47',  '2019-08-13 06:22:47',  'Studio', 1),
(23,  '2019-08-13 06:22:57',  '2019-08-13 06:22:57',  'Inspiration',  1),
(24,  '2019-08-13 06:24:16',  '2019-08-13 06:24:16',  'Influence',  1),
(25,  '2019-08-13 06:24:29',  '2019-08-13 06:24:29',  'Event',  1),
(26,  '2019-08-13 06:24:42',  '2019-08-13 06:24:42',  'Award',  1),
(27,  '2019-08-13 06:24:56',  '2019-08-13 06:24:56',  'Press',  1),
(28,  '2019-08-13 06:25:08',  '2019-08-13 06:25:08',  'Prize',  1);

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


INSERT INTO `minisite_tpl` (`id`, `created`, `active`, `type`, `parts`, `template`, `page`)
SELECT '15', '2019-08-30', '1', '90', '1', 'extlink', 'extlink'
FROM `minisite_tpl`
WHERE `id` = '14' AND `created` = '2019-08-30' AND `active` = '1' AND `type` = '80' AND `parts` = '2' AND `template` = 'manualexb' AND `template` = 'manualexb' COLLATE utf8mb4_bin AND `page` = 'manualexb' AND `page` = 'manualexb' COLLATE utf8mb4_bin
LIMIT 1;

#Vignesh 05-06-2020

ALTER TABLE `minisite`
ADD `meta_title` varchar(128) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `sub_title`;

ALTER TABLE `minisite`
CHANGE `email_address` `email_address` varchar(128) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `name`,
CHANGE `url` `url` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `email_address`,
CHANGE `domain` `domain` varchar(128) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `url`,
ADD `url_slug` varchar(128) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `domain`;

#End 05-06-2020

#vignesh 18-06-2020

DROP TABLE IF EXISTS `minisite_parent_layout`;
CREATE TABLE `minisite_parent_layout` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `page_type` int(11) NOT NULL,
  `page_subtype` int(11) NOT NULL,
  `layout_type` int(11) NOT NULL,
  `row_order` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_parent_layout` (`id`, `name`, `image`, `page_type`, `page_subtype`, `layout_type`, `row_order`, `active`, `created`, `timestamp`) VALUES
(10,  'Masonry',  'MasonryScreenshot.png',  30, 1,  10, 1,  1,  '2019-06-14 12:59:31',  '2019-09-30 12:58:49'),
(20,  'Landscape Resized',  'LandsscapeScreenshot.png', 30, 1,  20, 2,  0,  '2019-06-17 08:38:17',  '2019-11-25 10:59:24'),
(30,  'Hanging',  'HangingScreenshot.png',  30, 1,  10, 3,  1,  '2019-06-17 08:40:16',  '2019-09-30 12:59:30'),
(40,  'Angler', 'LandscapeScreenShot.png',  30, 1,  30, 7,  1,  '2019-06-17 12:39:30',  '2019-11-18 12:23:10'),
(50,  'Square Artist',  'ArtistsLayoutSquare.png',  20, 1,  0,  1,  1,  '2019-06-18 06:32:29',  '2019-09-30 12:59:45'),
(60,  'Circle artist',  'ArtistsLayoutCircle.png',  20, 1,  0,  2,  1,  '2019-06-18 06:33:07',  '2019-09-30 12:59:51'),
(70,  'List Mouseover', 'ArtistsLayoutList.png',  20, 1,  0,  3,  1,  '2019-06-18 06:33:45',  '2019-09-30 12:59:55'),
(80,  'Single page Exhibition', '', 60, 1,  0,  1,  1,  '2019-06-24 12:15:10',  '2019-09-30 13:00:12'),
(90,  'Baltimore (16:9)', 'BaltimoreScreenshot.png',  30, 1,  20, 5,  1,  '2019-07-02 12:55:02',  '2019-09-30 13:00:34'),
(100, 'Casablanca (4:3)', 'CasablancaScreenshot.png', 30, 1,  20, 6,  1,  '2019-07-04 05:45:32',  '2019-09-30 13:00:40'),
(101, 'Standing ',  'StandingScreenshot.png', 30, 1,  10, 4,  1,  '2019-07-05 07:16:12',  '2019-09-30 13:00:45'),
(102, 'Billboard',  'Billboard.png',  30, 1,  40, 9,  1,  '2019-08-19 13:35:36',  '2019-09-30 13:00:50'),
(103, 'Normandy (3:2)', 'Normandy.png', 30, 1,  20, 8,  1,  '2019-09-26 05:50:11',  '2019-11-21 05:11:02'),
(104, 'Berlin Full Profile',  'BerlinFullx.png',  20, 2,  10, 1,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:10:15'),
(105, 'Manhattan Full Profile', 'ManhattanFullx.png', 20, 2,  10, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:10:30'),
(106, 'Bio - Berlin Style', 'BioBerlin.png',  20, 2,  20, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:10:54'),
(107, 'Bio - Manhattan Style',  'BioManhattan.png', 20, 2,  20, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:11:42'),
(108, 'CV - Classic', 'CV-Berlin.png',  20, 2,  20, 2,  1,  '2019-09-26 09:29:36',  '2019-11-27 10:21:39'),
(109, 'Selected Art Masonry', 'profileMasonry.png', 20, 2,  30, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:11:53'),
(110, 'Selected Art Hanging', 'SArtHanging.png',  20, 2,  30, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:11:58'),
(111, 'Selected Art Standing',  'SArtStanding.png', 20, 2,  30, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:05'),
(112, 'Selected Art Masonry Extreme', 'SAmasonryExt.png', 20, 2,  30, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12'),
(113, 'Seoul',  'seoul.png',  30, 2,  10, 1,  1,  '2019-09-26 09:29:36',  '2019-10-02 04:53:00'),
(114, 'Kyoto',  'kyoto.png',  30, 2,  10, 2,  1,  '2019-09-26 09:29:36',  '2019-10-02 04:53:07'),
(115, 'Art - Masonry',  'profileMasonry.png', 30, 2,  20, 1,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12'),
(116, 'Art - Hanging',  'SArtHanging.png',  30, 2,  20, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12'),
(117, 'Art - Standing', 'SArtStanding.png', 30, 2,  20, 3,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12'),
(118, 'Art - Masonry Extreme',  'SAmasonryExt.png', 30, 2,  20, 4,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12'),
(119, 'Parallax', 'Parallax.png', 30, 1,  40, 10, 1,  '2019-08-19 13:35:36',  '2019-11-21 05:08:52'),
(120, 'Guillotine', 'Guillotine.png', 30, 1,  40, 11, 1,  '2019-08-19 13:35:36',  '2019-11-21 05:09:10'),
(121, 'Life', 'Life.png', 30, 1,  40, 12, 1,  '2019-08-19 13:35:36',  '2019-11-21 05:09:43'),
(122, 'Granada (Image only - pair with text effect/animation)', 'Granada.png',  30, 1,  40, 13, 1,  '2019-08-19 13:35:36',  '2019-11-21 05:10:23'),
(123, 'Niagara',  'Niagara.png',  30, 1,  40, 14, 1,  '2019-08-19 13:35:36',  '2019-11-21 05:10:37'),
(124, 'Seoul',  'seoul.png',  60, 2,  10, 1,  1,  '2019-09-26 09:29:36',  '2019-10-02 04:53:00'),
(125, 'Kyoto',  'kyoto.png',  60, 2,  10, 2,  1,  '2019-09-26 09:29:36',  '2019-10-02 04:53:07'),
(126, 'Art - Masonry',  'profileMasonry.png', 60, 2,  20, 1,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12'),
(127, 'Art - Hanging',  'SArtHanging.png',  60, 2,  20, 2,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12'),
(128, 'Art - Standing', 'SArtStanding.png', 60, 2,  20, 3,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12'),
(129, 'Art - Masonry Extreme',  'SAmasonryExt.png', 60, 2,  20, 4,  1,  '2019-09-26 09:29:36',  '2019-09-30 13:12:12');

#End 18-06-2020

#Vignesh 19-06-2020

DROP TABLE IF EXISTS `minisite_layout`;
CREATE TABLE `minisite_layout` (
  `id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `subtype` int(11) NOT NULL DEFAULT '1',
  `separator` varchar(50) NOT NULL,
  `level1_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `row_order` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_layout` (`id`, `parent_id`, `type`, `subtype`, `separator`, `level1_id`, `name`, `row_order`, `image`, `active`, `created`, `timestamp`) VALUES
(26,  0,  30, 1,  'none', 92, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-14 10:49:33'),
(101, 40, 30, 1,  'off',  14, 'OFF',  13, '', 1,  '2019-06-06 11:34:26',  '2019-09-26 06:57:03'),
(102, 40, 30, 1,  'on', 13, 'ON', 14, '', 1,  '2019-06-10 07:37:55',  '2019-09-26 06:58:31'),
(103, 10, 30, 1,  '3C', 11, 'None', 1,  '', 1,  '2019-06-10 07:38:11',  '2019-09-26 06:58:51'),
(104, 10, 30, 1,  '4C', 12, 'None', 3,  '', 1,  '2019-06-10 07:38:17',  '2019-09-26 06:59:25'),
(105, 10, 30, 1,  '3CT',  11, 'Past, Current, Future',  2,  '', 1,  '2019-06-10 07:38:23',  '2019-09-26 06:58:57'),
(106, 10, 30, 1,  '4CT',  12, 'Past, Current, Future',  4,  '', 1,  '2019-06-10 07:38:29',  '2019-09-26 06:59:04'),
(107, 20, 30, 1,  '3C', 20, 'None', 5,  '', 1,  '2019-06-10 07:38:35',  '2019-09-26 06:59:14'),
(108, 20, 30, 1,  '4C', 21, 'None', 7,  '', 1,  '2019-06-10 07:38:49',  '2019-09-26 07:00:32'),
(109, 20, 30, 1,  '3CT',  20, 'Past, Current, Future',  6,  '', 1,  '2019-06-10 07:38:57',  '2019-09-26 07:00:39'),
(110, 20, 30, 1,  '4CT',  21, 'Past, Current, Future',  8,  '', 1,  '2019-06-10 07:39:03',  '2019-09-26 07:00:53'),
(111, 30, 30, 1,  '3C', 22, 'None', 9,  '', 1,  '2019-06-10 07:39:25',  '2019-09-26 07:31:04'),
(112, 30, 30, 1,  '4C', 23, 'None', 11, '', 1,  '2019-06-10 07:39:33',  '2019-09-26 07:31:10'),
(113, 30, 30, 1,  '3CT',  22, 'Past, Current, Future',  10, '', 1,  '2019-06-10 07:39:41',  '2019-09-26 07:31:16'),
(114, 30, 30, 1,  '4CT',  23, 'Past, Current, Future',  12, '', 1,  '2019-06-10 07:39:47',  '2019-09-26 07:31:23'),
(115, 0,  30, 1,  '', 0,  'Cover Page', 15, '', 1,  '2019-06-10 08:04:21',  '2019-06-10 08:04:21'),
(116, 0,  30, 1,  '', 0,  'Cover Page & Landscape', 16, '', 1,  '2019-06-10 08:04:29',  '2019-06-10 08:04:29'),
(117, 0,  40, 1,  '', 0,  'Tosca',  1,  'contact_layout1.png',  1,  '2019-06-10 08:04:37',  '2019-07-01 11:19:17'),
(118, 0,  40, 1,  '', 0,  'Carmen', 2,  'contact_layout2.png',  1,  '2019-06-10 08:04:55',  '2019-07-01 11:19:29'),
(119, 50, 20, 1,  '3C', 10, 'Default',  2,  '', 1,  '2019-06-10 07:37:41',  '2019-09-25 09:35:08'),
(124, 60, 20, 1,  '4C', 0,  'Layout 1', 4,  '', 1,  '2019-06-07 06:48:42',  '2019-09-23 12:35:49'),
(125, 50, 20, 1,  '4C', 0,  'Layout 2', 1,  '', 1,  '2019-06-07 06:56:25',  '2019-09-23 12:35:59'),
(126, 60, 20, 1,  '3C', 10, 'Layout 3', 3,  '', 1,  '2019-06-07 06:57:09',  '2019-09-25 09:35:15'),
(127, 70, 20, 1,  'off',  0,  'Layout 4', 6,  '', 1,  '2019-06-11 12:21:43',  '2019-09-23 12:36:19'),
(128, 104,  20, 2,  '', 40, 'Leave Out',  1,  'BerlinFullx.png',  1,  '2019-06-11 12:54:19',  '2019-10-02 05:02:34'),
(129, 104,  20, 2,  '', 39, 'Leave Out',  2,  'BerlinSlimx.png',  1,  '2019-06-11 12:55:01',  '2019-10-02 05:02:43'),
(130, 105,  20, 2,  '', 42, 'Leave Out',  3,  'ManhattanFullx.png', 1,  '2019-06-11 12:55:40',  '2019-10-02 05:02:53'),
(131, 105,  20, 2,  '', 41, 'Leave Out',  4,  'ManhattanSlimx.png', 1,  '2019-06-11 12:57:33',  '2019-10-02 05:03:02'),
(132, 114,  30, 2,  '', 0,  'Show Location',  1,  'kyoto.png',  1,  '2019-06-11 13:23:08',  '2019-10-02 04:52:05'),
(133, 113,  30, 2,  '', 0,  'Show Location',  2,  'seoul.png',  1,  '2019-06-11 13:23:40',  '2019-10-02 04:51:55'),
(134, 70, 20, 1,  'on', 0,  'Layout 5', 5,  '', 1,  '2019-07-01 09:09:24',  '2019-09-23 12:36:27'),
(135, 125,  60, 2,  '', 0,  'Show Location',  1,  'seoul.png',  1,  '2019-06-24 12:19:11',  '2019-12-02 06:50:13'),
(136, 125,  60, 1,  '', 0,  'Hide Location',  2,  '', 1,  '2019-06-24 12:39:30',  '2019-12-02 06:51:09'),
(137, 10, 30, 1,  '3CY',  11, 'Year', 17, '', 1,  '2019-07-02 06:19:45',  '2019-09-26 07:04:45'),
(138, 10, 30, 1,  '4CY',  12, 'Year', 18, '', 1,  '2019-07-02 06:20:42',  '2019-09-26 07:04:51'),
(139, 20, 30, 1,  '3CY',  20, 'Year', 0,  '', 1,  '2019-07-02 07:24:23',  '2019-09-26 07:06:09'),
(140, 20, 30, 1,  '4CY',  21, 'Year', 0,  '', 1,  '2019-07-02 07:25:39',  '2019-09-26 07:06:18'),
(141, 30, 30, 1,  '3CY',  22, 'Year', 0,  '', 1,  '2019-07-02 07:27:25',  '2019-09-26 07:31:29'),
(142, 30, 30, 1,  '4CY',  23, 'Year', 0,  '', 1,  '2019-07-02 07:28:08',  '2019-09-26 07:31:37'),
(143, 90, 30, 1,  '3C', 26, 'None', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:32:11'),
(144, 90, 30, 1,  '4C', 27, 'None', 0,  '', 1,  '2019-07-03 04:59:50',  '2019-09-26 07:32:16'),
(145, 90, 30, 1,  '3CT',  26, 'Past, Current, Future',  0,  '', 1,  '2019-07-03 05:01:40',  '2019-09-26 07:32:20'),
(146, 90, 30, 1,  '4CT',  27, 'Past, Current, Future',  0,  '', 1,  '2019-07-03 05:03:23',  '2019-09-26 07:32:27'),
(147, 90, 30, 1,  '3CY',  26, 'Year', 0,  '', 1,  '2019-07-03 05:04:18',  '2019-09-26 07:32:31'),
(148, 90, 30, 1,  '4CY',  27, 'Year', 0,  '', 1,  '2019-07-03 05:04:53',  '2019-09-26 07:32:36'),
(149, 100,  30, 1,  '3C', 28, 'None', 0,  '', 1,  '2019-07-04 05:48:26',  '2019-09-26 07:33:10'),
(150, 100,  30, 1,  '3C', 29, 'None', 0,  '', 1,  '2019-07-04 05:50:00',  '2019-09-26 07:33:14'),
(151, 100,  30, 1,  '3CT',  28, 'Past, Current, Future',  0,  '', 1,  '2019-07-04 05:51:01',  '2019-09-26 07:33:19'),
(152, 100,  30, 1,  '4CT',  29, 'Past, Current, Future',  0,  '', 1,  '2019-07-04 05:51:37',  '2019-09-26 07:33:25'),
(153, 100,  30, 1,  '3CY',  28, 'Year', 0,  '', 1,  '2019-07-04 05:59:26',  '2019-09-26 07:33:34'),
(154, 100,  30, 1,  '4CY',  29, 'Year', 0,  '', 1,  '2019-07-04 06:00:48',  '2019-09-26 07:33:38'),
(155, 106,  20, 2,  '', 0,  'Bio - Berlin Style', 5,  'BioBerlin.png',  1,  '2019-07-04 13:05:33',  '2019-09-30 12:46:45'),
(156, 107,  20, 2,  '', 0,  'Bio - Manhattan Style',  6,  'BioManhattan.png', 1,  '2019-07-05 05:34:47',  '2019-09-30 12:46:51'),
(157, 108,  20, 2,  '', 0,  'CV - Berlin Style',  7,  'CV-Berlin.png',  1,  '2019-07-05 05:48:09',  '2019-11-27 10:20:22'),
(158, 101,  30, 1,  '3C', 24, 'None', 0,  '', 1,  '2019-07-05 07:20:46',  '2019-09-26 07:34:17'),
(159, 101,  30, 1,  '4C', 25, 'None', 0,  '', 1,  '2019-07-05 07:21:25',  '2019-09-26 07:34:21'),
(160, 101,  30, 1,  '3CT',  24, 'Past, Current, Future ', 0,  '', 1,  '2019-07-05 07:22:16',  '2019-09-26 07:34:26'),
(161, 101,  30, 1,  '4CT',  25, 'Past, Current, Future ', 0,  '', 1,  '2019-07-05 07:22:38',  '2019-09-26 07:34:30'),
(162, 101,  30, 1,  '3CY',  24, 'Year', 0,  '', 1,  '2019-07-05 07:23:12',  '2019-09-26 07:34:36'),
(163, 101,  30, 1,  '4CY',  25, 'Year', 0,  '', 1,  '2019-07-05 07:23:41',  '2019-09-26 07:34:41'),
(164, 109,  20, 2,  '', 0,  'Selected Art Masonry', 8,  'profileMasonry.png', 1,  '2019-07-05 11:04:57',  '2019-09-30 12:47:01'),
(165, 110,  20, 2,  '', 0,  'Selected Art Hanging', 9,  'SArtHanging.png',  1,  '2019-07-09 06:12:40',  '2019-09-30 12:47:20'),
(166, 111,  20, 2,  '', 0,  'Selected Art Standing',  10, 'SArtStanding.png', 1,  '2019-07-09 06:54:35',  '2019-09-30 12:47:25'),
(167, 112,  20, 2,  '', 0,  'Selected Art Masonry Extreme', 11, 'SAmasonryExt.png', 1,  '2019-07-09 07:00:27',  '2019-09-30 12:47:30'),
(168, 115,  30, 2,  '', 0,  'Art - Masonry',  3,  'profileMasonry.png', 1,  '2019-07-09 10:35:29',  '2019-10-01 10:05:03'),
(169, 116,  30, 2,  '', 0,  'Art - Hanging',  4,  'SArtHanging.png',  1,  '2019-07-09 10:36:06',  '2019-10-01 10:05:11'),
(170, 117,  30, 2,  '', 0,  'Art - Standing', 5,  'SArtStanding.png', 1,  '2019-07-09 10:36:52',  '2019-10-01 10:05:21'),
(171, 118,  30, 2,  '', 0,  'Art - Masonry Extreme',  6,  'SAmasonryExt.png ',  1,  '2019-07-09 10:37:30',  '2019-10-01 10:05:29'),
(172, 126,  60, 1,  '', 0,  'Art - Masonry',  3,  'profileMasonry.png', 1,  '2019-07-11 06:06:39',  '2019-11-29 12:08:56'),
(173, 127,  60, 1,  '', 0,  'Art - Hanging',  4,  'SArtHanging.png',  1,  '2019-07-11 06:07:27',  '2019-11-29 12:09:20'),
(174, 129,  60, 1,  '', 0,  'Art - Masonry Extreme',  5,  'SAmasonryExt.png', 1,  '2019-07-11 06:08:02',  '2019-12-02 07:33:02'),
(175, 128,  60, 1,  '', 0,  'Art - Standing', 6,  'SArtStanding.png', 1,  '2019-07-11 06:09:09',  '2019-12-02 07:33:26'),
(176, 666,  30, 1,  'time', 0,  'Banner- Time filter',  2,  '', 1,  '2019-08-20 07:49:41',  '2019-09-26 11:13:43'),
(177, 666,  30, 1,  'year', 0,  'Banner- Year filter',  3,  '', 1,  '2019-08-20 07:55:33',  '2019-09-26 11:13:48'),
(178, 102,  30, 1,  'none', 56, 'Banner', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:51:54'),
(179, 105,  20, 2,  '', 41, 'Include',  12, 'ManhattanSlimx.png', 1,  '2019-06-11 12:57:33',  '2019-10-02 05:03:30'),
(180, 90, 30, 1,  '2C', 10, 'None', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:32:43'),
(181, 90, 30, 1,  '2C', 10, 'Past, Current, Future',  0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:32:51'),
(182, 90, 30, 1,  '2C', 10, 'Year', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:32:56'),
(183, 100,  30, 1,  '2C', 30, 'None', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:33:53'),
(184, 100,  30, 1,  '2C', 30, 'Past, Current, Future',  0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:33:59'),
(185, 100,  30, 1,  '2C', 30, 'Year', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:34:03'),
(186, 20, 30, 1,  '2C', 31, 'None', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:06:30'),
(187, 20, 30, 1,  '2CT',  31, 'Past, Current, Future',  0,  '', 1,  '2019-07-03 04:58:53',  '2019-10-24 10:41:26'),
(188, 20, 30, 1,  '2CY',  31, 'Year', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-10-24 10:42:48'),
(189, 103,  30, 1,  '2C', 32, 'None', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:35:36'),
(190, 103,  30, 1,  '2C', 32, 'Past, Current, Future',  0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:35:40'),
(191, 103,  30, 1,  '2C', 32, 'Year', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:35:47'),
(192, 103,  30, 1,  '3C', 33, 'None', 0,  '', 1,  '2019-07-03 04:58:53',  '2019-09-26 07:35:52'),
(193, 103,  30, 1,  '3CT',  33, 'Past, Current, Future',  0,  '', 1,  '2019-07-03 05:01:40',  '2019-09-26 07:48:25'),
(194, 103,  30, 1,  '3CY',  33, 'Year', 0,  '', 1,  '2019-07-03 05:04:18',  '2019-09-26 07:48:31'),
(195, 103,  30, 1,  '4C', 34, 'None', 0,  '', 1,  '2019-07-03 04:59:50',  '2019-09-26 07:48:37'),
(196, 103,  30, 1,  '4CT',  34, 'Past, Current, Future',  0,  '', 1,  '2019-07-03 05:03:23',  '2019-09-26 07:48:44'),
(197, 103,  30, 1,  '4CY',  34, 'Year', 0,  '', 1,  '2019-07-03 05:04:53',  '2019-09-26 07:48:49'),
(198, 102,  30, 1,  '2C', 36, '2 Column', 1,  '', 1,  '2019-09-26 11:16:56',  '2019-09-26 11:16:56'),
(199, 102,  30, 1,  '3C', 36, '3 Column', 2,  '', 1,  '2019-09-26 11:18:18',  '2019-09-26 11:18:18'),
(200, 102,  30, 1,  '4C', 36, '4 Column', 0,  '', 1,  '2019-09-26 11:19:08',  '2019-09-26 11:19:08'),
(201, 102,  30, 1,  '2C', 37, '2 Column', 1,  '', 1,  '2019-09-26 11:16:56',  '2019-09-26 11:16:56'),
(202, 102,  30, 1,  '3C', 37, '3 Column', 2,  '', 1,  '2019-09-26 11:18:18',  '2019-09-26 11:18:18'),
(203, 102,  30, 1,  '4C', 37, '4 Column', 0,  '', 1,  '2019-09-26 11:19:08',  '2019-09-26 11:19:08'),
(204, 102,  30, 1,  '2C', 38, '2 Column', 1,  '', 1,  '2019-09-26 11:16:56',  '2019-09-26 11:16:56'),
(205, 102,  30, 1,  '3C', 38, '3 Column', 2,  '', 1,  '2019-09-26 11:18:18',  '2019-09-26 11:18:18'),
(206, 102,  30, 1,  '3C', 38, '4 Column', 2,  '', 1,  '2019-09-26 11:18:18',  '2019-09-27 06:57:08'),
(207, 105,  20, 2,  '', 42, 'Include',  13, '', 1,  '2019-06-11 12:57:33',  '2019-10-02 05:03:48'),
(208, 104,  20, 2,  '', 40, 'Include',  14, '', 1,  '2019-06-11 12:57:33',  '2019-10-02 05:03:54'),
(209, 104,  20, 2,  '', 39, 'Include',  15, '', 1,  '2019-06-11 12:57:33',  '2019-10-02 05:04:00'),
(210, 114,  30, 2,  '', 0,  'Hide Location',  7,  '', 1,  '2019-06-11 13:23:08',  '2019-10-02 04:51:23'),
(211, 113,  30, 2,  '', 0,  'Hide Location',  8,  '', 1,  '2019-06-11 13:23:08',  '2019-10-02 04:51:31'),
(212, 102,  30, 1,  'none', 43, 'Casablanca', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 06:06:54'),
(213, 102,  30, 1,  'none', 44, 'Normandy', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 06:06:59'),
(214, 102,  30, 1,  'none', 45, 'Baltimore',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 06:06:46'),
(215, 121,  30, 1,  'none', 46, 'Parallax', 1,  '', 0,  '2019-08-22 05:19:31',  '2019-11-08 08:14:20'),
(216, 102,  30, 1,  'none', 47, 'Casablanca', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 06:07:03'),
(217, 102,  30, 1,  'none', 48, 'Normandy', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:15:25'),
(218, 102,  30, 1,  'none', 49, 'Baltimore',  3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:14:21'),
(219, 102,  30, 1,  'none', 50, 'Casablanca with Baltimore',  4,  '', 1,  '2019-08-22 05:19:31',  '2019-11-21 13:34:00'),
(220, 102,  30, 1,  'none', 55, 'Zig-Zag',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(221, 119,  30, 1,  'none', 57, 'Parallax', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 06:04:42'),
(222, 119,  30, 1,  'none', 63, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(223, 119,  30, 1,  'none', 63, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:54'),
(224, 119,  30, 1,  'none', 63, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:49'),
(225, 119,  30, 1,  'none', 64, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(226, 119,  30, 1,  'none', 64, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:42'),
(227, 119,  30, 1,  'none', 64, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:37'),
(228, 119,  30, 1,  'none', 65, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(229, 119,  30, 1,  'none', 65, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:32'),
(230, 119,  30, 1,  'none', 65, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:26'),
(231, 119,  30, 1,  'none', 66, 'Baltimore',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(232, 119,  30, 1,  'none', 67, 'Casablanca', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:19'),
(233, 119,  30, 1,  'none', 68, 'Normandy', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:13'),
(234, 119,  30, 1,  'none', 69, 'Baltimore',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(235, 119,  30, 1,  'none', 70, 'Casablanca', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:13:04'),
(236, 119,  30, 1,  'none', 71, 'Normandy', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:12:56'),
(237, 119,  30, 1,  'none', 72, 'Casablanca & Baltimore', 4,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:12:49'),
(238, 119,  30, 1,  'none', 61, 'Life', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 06:04:22'),
(239, 120,  30, 1,  'none', 78, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(240, 120,  30, 1,  'none', 78, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:09:26'),
(241, 120,  30, 1,  'none', 78, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:09:18'),
(242, 120,  30, 1,  'none', 79, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(243, 120,  30, 1,  'none', 79, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:09:08'),
(244, 120,  30, 1,  'none', 79, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:09:01'),
(245, 120,  30, 1,  'none', 80, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(246, 120,  30, 1,  'none', 80, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:08:54'),
(247, 120,  30, 1,  'none', 80, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:08:46'),
(248, 120,  30, 1,  'none', 81, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(249, 120,  30, 1,  'none', 81, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(250, 120,  30, 1,  'none', 81, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(251, 120,  30, 1,  'none', 82, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(252, 120,  30, 1,  'none', 82, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(253, 120,  30, 1,  'none', 82, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(255, 120,  30, 1,  'none', 83, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(256, 120,  30, 1,  'none', 83, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(257, 120,  30, 1,  'none', 84, 'Baltimore',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(258, 120,  30, 1,  'none', 85, 'Casablanca', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:22:17'),
(259, 120,  30, 1,  'none', 86, 'Normandy', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:22:22'),
(260, 120,  30, 1,  'none', 87, 'Casablanca & Baltimore', 4,  '', 1,  '2019-08-22 05:19:31',  '2019-11-12 12:52:01'),
(261, 120,  30, 1,  'none', 77, 'Life', 0,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:24:05'),
(262, 121,  30, 1,  'none', 89, 'Life', 0,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 07:24:05'),
(263, 121,  30, 1,  'none', 92, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:53:23'),
(264, 121,  30, 1,  'none', 92, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:54:32'),
(265, 121,  30, 1,  'none', 92, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:54:32'),
(266, 121,  30, 1,  'none', 93, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:53:23'),
(267, 121,  30, 1,  'none', 93, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:54:32'),
(268, 121,  30, 1,  'none', 93, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:56:22'),
(269, 121,  30, 1,  'none', 94, '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:53:23'),
(270, 121,  30, 1,  'none', 94, '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:54:32'),
(271, 121,  30, 1,  'none', 94, '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:56:22'),
(272, 121,  30, 1,  'none', 95, 'Baltimore',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:53:23'),
(273, 121,  30, 1,  'none', 96, 'Casablanca', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:53:23'),
(274, 121,  30, 1,  'none', 97, 'Normandy', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 08:53:23'),
(275, 122,  30, 1,  'none', 102,  'Baltimore',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-15 07:25:28'),
(276, 122,  30, 1,  'none', 103,  'Casablanca', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-15 07:25:39'),
(277, 122,  30, 1,  'none', 104,  'Normandy', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-15 07:25:55'),
(278, 122,  30, 1,  'none', 111,  'Casablanca & Baltimore', 4,  '', 1,  '2019-08-22 05:19:31',  '2019-11-15 07:26:08'),
(279, 122,  30, 1,  'none', 105,  '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(280, 122,  30, 1,  'none', 105,  '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:19'),
(281, 122,  30, 1,  'none', 105,  '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:36'),
(282, 122,  30, 1,  'none', 106,  '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(283, 122,  30, 1,  'none', 106,  '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:46:49'),
(284, 122,  30, 1,  'none', 106,  '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:46:54'),
(285, 122,  30, 1,  'none', 107,  '2 Column', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(286, 122,  30, 1,  'none', 107,  '3 Column', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(287, 122,  30, 1,  'none', 107,  '4 Column', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(288, 122,  30, 1,  'none', 108,  'Baltimore',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(289, 122,  30, 1,  'none', 109,  'Casablanca', 2,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:49:42'),
(290, 122,  30, 1,  'none', 110,  'Normandy', 3,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(291, 123,  30, 1,  'none', 112,  'Baltimore',  1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(292, 123,  30, 1,  'none', 113,  'Casablanca', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(293, 123,  30, 1,  'none', 114,  'Normandy', 1,  '', 1,  '2019-08-22 05:19:31',  '2019-11-13 10:43:14'),
(294, 124,  60, 2,  '', 0,  'Show Location',  1,  'seoul.png',  1,  '2019-06-24 12:19:11',  '2019-12-02 06:50:13'),
(295, 124,  60, 1,  '', 0,  'Hide Location',  2,  '', 1,  '2019-06-24 12:39:30',  '2019-12-02 06:51:09');

#End Vignesh


#vignesh 19-06-2020

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
(20,  'Artists Page', 'artist', 5,  1),
(30,  'Multiple Exhibitions - Smart Filter',  'exhibition', 2,  1),
(40,  'Contact Page', 'contact',  6,  1),
(50,  'Bio/Profile/CV', 'bio',  4,  1),
(60,  'Single Exhibition',  'singleExhibition', 1,  1),
(70,  'Embed External Site ', 'extSite',  7,  1),
(80,  'Multiple Exhibitions - Manually Selected', 'manualexb',  3,  1),
(90,  'External Link (Not Suitable as Home Page)',  'extlink',  8,  1);

#End 19-06-2020


