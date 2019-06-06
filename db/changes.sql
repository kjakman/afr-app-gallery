# changes.sql

# Jan -18

#ALTER TABLE `user_profile`
#DROP `facebook`,
#DROP `instagram`,
#DROP `twitter`,
#DROP `show_awards`;

ALTER TABLE `user_profile`
ADD `solo_shows_` text COLLATE 'utf8_general_ci' NOT NULL,
ADD `group_shows_` text COLLATE 'utf8_general_ci' NOT NULL ,
ADD `press_data` text COLLATE 'utf8_general_ci' NOT NULL ,
ADD `show_data` text COLLATE 'utf8_general_ci' NOT NULL;

INSERT INTO `minisite_page_type` (`id`, `name`)
SELECT '40', 'contact' from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '40');

ALTER TABLE `media_collection`
ADD `about_title` varchar(100) NOT NULL;

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

ALTER TABLE `media_collection`
ADD `filter` tinyint(1) NOT NULL DEFAULT '1';

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'profile_media_map', '100' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'profile_media_map');

#jan 28

CREATE TABLE `minisite_exhibition_layout` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
);
TRUNCATE TABLE `minisite_exhibition_layout`;

INSERT INTO `minisite_exhibition_layout` (`id`, `name`)
VALUES ('10', 'Cover Page');

INSERT INTO `minisite_exhibition_layout` (`id`, `name`)
VALUES ('20', 'Landscape With Time Separator');

INSERT INTO `minisite_exhibition_layout` (`id`, `name`)
VALUES ('30', 'Cover Page & Landscape');

INSERT INTO `minisite_exhibition_layout` (`id`, `name`)
VALUES ('40', 'Timeline');

INSERT INTO `minisite_exhibition_layout` (`id`, `name`)
VALUES ('50', 'Natural With Time Separator');

INSERT INTO `minisite_exhibition_layout` (`id`, `name`)
VALUES ('60', 'Natural');

INSERT INTO `minisite_exhibition_layout` (`id`, `name`)
VALUES ('70', 'tiles');

CREATE TABLE `minisite_contact_layout` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
);
TRUNCATE TABLE `minisite_contact_layout`;

INSERT INTO `minisite_contact_layout` (`id`, `name`)
VALUES ('10', 'Contact');

INSERT INTO `minisite_contact_layout` (`id`, `name`)
VALUES ('20', 'Bio & CV');


CREATE TABLE `minisite_page_type` (
  `id` smallint(4) NOT NULL,
  `name` varchar(32) NOT NULL
);

TRUNCATE TABLE `minisite_page_type`;


INSERT INTO `minisite_page_type` (`id`, `name`)
SELECT '10', 'Home' from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '10');


INSERT INTO `minisite_page_type` (`id`, `name`)
SELECT '20', 'Artists/Contacts' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '20');


INSERT INTO `minisite_page_type` (`id`, `name`)
SELECT '30', 'Exhibitions - Smart Filter' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '30');

insert into `minisite_page_type` (`id`, `name`)
SELECT '40', 'Contact/Bio' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '40');

UPDATE `exhibition_type` SET
`id` = '40',
`name` = 'Showroom/Selection',
`description` = ''
WHERE `id` = '40';

# 22 Mar 2019

ALTER TABLE `user_profile` ADD `bio_description` text COLLATE 'utf8_general_ci' NOT NULL default '';
ALTER TABLE `user_profile` ADD `free_text` text NOT NULL default '';

# 4 April 2019

ALTER TABLE `minisite_contact_layout` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `minisite_contact_layout` CHANGE `id` `id` smallint(3) unsigned NOT NULL DEFAULT '0' FIRST;
ALTER TABLE `minisite_exhibition_layout` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `minisite_exhibition_layout` CHANGE `id` `id` smallint(3) unsigned NOT NULL DEFAULT '0' FIRST;
ALTER TABLE `minisite_layout` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `minisite_layout` CHANGE `id` `id` smallint(3) unsigned NOT NULL DEFAULT '0' FIRST;
ALTER TABLE `minisite_page` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `minisite_page_type` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `minisite_page_type` CHANGE `id` `id` smallint(4) unsigned NOT NULL DEFAULT '0' FIRST;
ALTER TABLE `opening_hours` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `page_map` ADD PRIMARY KEY `id` (`id`);
ALTER TABLE `profile_media_map` ADD PRIMARY KEY `id` (`id`);

#6 June 2019

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_font` (`id`, `created`, `timestamp`, `active`, `name`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `p`, `title`, `sub_title`, `menu_title`, `font_family`) VALUES
(1, '2019-04-29', '2019-06-05 12:55:52',  1,  'Gotham Light', 'font-size: 2em; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 12px; color: #000; font-family: gotham_lightregular,Arial,sans-serif;', 'font-size: 1.188em; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 1.2em; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 1.25rem; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 14px; color: #000; font-family: gotham_lightregular,Arial,sans-serif;', 'font-size: 13px; line-height: 15px; font-family: gotham_lightregular,Arial,sans-serif;', 'font-size: 2em; color: #000; font-family: gotham_lightregular,Arial,sans-serif;',  'font-size: 12px; color: #000; font-family: gotham_lightregular,Arial,sans-serif;', 'font-size: .825em; font-weight: 400; color: #444; font-family: gotham_lightregular,Arial,sans-serif;', 'font-family: \'gotham_lightregular\', Arial, sans-serif;'),
(2, '2019-04-29', '2019-06-05 12:57:43',  1,  'Helvetica Neue', 'font-size: 32px; color: #444; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 32px; color: #000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 26px; color: #000;  font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 16px; color: #000;  font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 13.28 px; color: #000;  font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 12px; color: #000;  font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 17px;  color: #000;  font-family: Helvetica Neue; ',  '', 'font-size: 32px; color: #000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 16px;  font-weight: bold; letter-spacing: normal; color: #000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;'),
(3, '2019-05-08', '2019-06-05 13:00:20',  1,  'Avenir - Close', 'font-size: 1.75rem; color: #000000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 32px; font-weight: 500; color: #000000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 24px; line-height: 30px; font-weight: 800; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 1rem; font-weight: 900; color: #000000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 0.83em; color: #000000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 0.75em; color: #000000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 1.125rem; color: #000000; line-height: 1.625rem; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 1.75rem; color: #000000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 2rem; font-weight: 500; color: #000000; font-family: \'Avenir\', \'Sans Serif\';',  'padding: 1em 1.1em; font-size: 0.9375rem; font-weight: 500; letter-spacing: normal;  color: #000000; font-family: \'Avenir\', \'Sans Serif\';',  'font-family: \'Avenir\', \'Sans Serif\';'),
(4, '2019-05-08', '2019-06-05 13:01:29',  1,  'Gotham Light - Close', 'font-size: 1.75rem; color: #000; font-family: \'gotham_lightregular\', Arial, sans-serif;',  'font-size: 32px; font-weight: 600; color: #000; font-family: \'gotham_lightregular\', Arial, sans-serif;', 'font-size: 24px; line-height: 30px; font-weight: 800; font-family: \'gotham_lightregular\', Arial, sans-serif;', 'font-size: 1rem; font-weight: 900; color: #000000; font-family: \'gotham_lightregular\', Arial, sans-serif;',  'font-size: 0.83em; color: #000; font-family: \'gotham_lightregular\', Arial, sans-serif;', 'font-size: 0.75em; color: #000; font-family: \'gotham_lightregular\', Arial, sans-serif;', 'font-size: 1.125rem; color: #000; line-height: 1.625rem; font-family: \'gotham_lightregular\', Arial, sans-serif;',  'font-size: 1.75rem; color: #000; font-family: \'gotham_lightregular\', Arial, sans-serif;',  'font-size: 32px; font-weight: 600; color: #000000; font-family: \'gotham_lightregular\', Arial, sans-serif;',  'font-size: 0.9375rem; font-weight: 500; letter-spacing: normal;  color: #000; font-family: \'gotham_lightregular\', Arial, sans-serif;', 'font-family: \'gotham_lightregular\', Arial, sans-serif;'),
(5, '2019-05-08', '2019-06-05 13:05:58',  1,  'Helvetica Neue - Close', 'font-size: 1.75rem; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 32px; font-weight: 600; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 24px; line-height: 30px; font-weight: 800; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 1rem; font-weight: 900; color: #000000; font-family:  \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 0.83em; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 0.75em; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 1.125rem; color: #000000; line-height: 1.625rem; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 1.75rem; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-size: 32px; font-weight: 600; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;',  'font-size: 0.9375rem; font-weight: 500; letter-spacing: normal;  color: #000000; font-family:  \'Helvetica Neue\', Helvetica, Arial, sans-serif;', 'font-family:  \'Helvetica Neue\', Helvetica, Arial, sans-serif;'),
(6, '2019-05-08', '2019-05-22 10:24:50',  1,  'Avenir', 'font-size: 2em; color: #000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 12px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 1.188em; color: #000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 1.2em; color: #000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 1.25rem; color: #000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 14px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 13px; line-height: 15px; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: 2em; color: #000; font-family: \'Avenir\', \'Sans Serif\';',  'font-size: 12px; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-size: .825em; font-weight: 400; color: #000; font-family: \'Avenir\', \'Sans Serif\';', 'font-family: \'Avenir\', \'Sans Serif\'; font-family: \'Avenir\', \'Sans Serif\';');


ALTER TABLE `minisite_page`
ADD `colour` varchar(600) COLLATE 'utf8mb4_general_ci' NOT NULL;

ALTER TABLE `minisite_page`
CHANGE `page_title` `page_title` varchar(32) COLLATE 'utf8mb4_general_ci' NOT NULL DEFAULT '' AFTER `menu_title`;

INSERT INTO `minisite_page_type` (`id`, `name`)
VALUES ('50', 'Bio');

ALTER TABLE `minisite_page`
CHANGE `data` `data` text COLLATE 'utf8mb4_general_ci' NOT NULL AFTER `row_order`;

ALTER TABLE `minisite_page`
ADD `page_layout` int(25) NOT NULL,
ADD `exhibition_layout` int(25) NOT NULL AFTER `page_layout`;

UPDATE `exhibition_type` SET
`id` = '40',
`name` = 'Series/Selection',
`description` = ''
WHERE `id` = '40';

INSERT INTO `exhibition_type` (`id`, `name`, `description`)
VALUES ('50', 'Showroom/Private Link', NULL);

DROP TABLE IF EXISTS `minisite_layout`;
CREATE TABLE `minisite_layout` (
  `id` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `row_order` int(10) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `minisite_layout` (`id`, `type`, `name`, `image`, `row_order`, `active`, `created`, `timestamp`) VALUES
(101, 30, 'Timeline', 'layout4.png',  1,  1,  '2019-06-06 11:34:26',  '2019-06-06 11:34:26'),
(102, 30, 'Timeline - with Filter', 'layout13.png', 2,  1,  '0000-00-00 00:00:00',  '2019-06-06 06:47:54'),
(103, 30, 'Masonry - 3 Column', 'layout14.png', 3,  1,  '0000-00-00 00:00:00',  '2019-06-06 06:48:05'),
(104, 30, 'Masonry - 4 Column', 'layout16.png', 4,  1,  '0000-00-00 00:00:00',  '2019-06-06 06:48:18'),
(105, 30, 'Masonry - 3 Column; by Past, Current, Future', 'layout15.png', 5,  1,  '0000-00-00 00:00:00',  '2019-06-06 06:48:30'),
(106, 30, 'Masonry - 4 Column; by Past, Current, Future', 'layout17.png', 6,  1,  '0000-00-00 00:00:00',  '2019-06-06 06:48:41'),
(107, 30, 'Landscape- 3 Column',  'layout10.png', 7,  1,  '0000-00-00 00:00:00',  '2019-06-06 06:48:51'),
(108, 30, 'Landscape- 4 Column',  'layout9.png',  8,  1,  '0000-00-00 00:00:00',  '2019-06-06 06:49:03'),
(109, 30, 'Landscape- 3 Column; by Past, Current, Future',  'layout8.png',  9,  1,  '0000-00-00 00:00:00',  '2019-06-06 06:49:18'),
(110, 30, 'Landscape- 4 Column; by Past, Current, Future',  'layout2.png',  10, 1,  '0000-00-00 00:00:00',  '2019-06-06 06:49:33'),
(111, 30, 'Hanging Line - 3 Coiumn',  'layout6.png',  11, 1,  '0000-00-00 00:00:00',  '2019-06-06 06:49:43'),
(112, 30, 'Hanging Line - 4 Column',  'layout7.png',  12, 1,  '0000-00-00 00:00:00',  '2019-06-06 06:49:56'),
(113, 30, 'Hanging Line - 3 Column; by Past, Current, Future',  'layout11.png', 13, 1,  '0000-00-00 00:00:00',  '2019-06-06 06:50:07'),
(114, 30, 'Hanging Line - 4 Column; by Past, Current, Future',  'layout5.png',  14, 1,  '0000-00-00 00:00:00',  '2019-06-06 06:50:18'),
(115, 30, 'Cover Page', 'layout1.png',  15, 1,  '0000-00-00 00:00:00',  '2019-06-06 06:50:28'),
(116, 30, 'Cover Page & Landscape', 'layout3.png',  16, 1,  '0000-00-00 00:00:00',  '2019-06-06 06:50:38'),
(117, 40, 'Default',  'contact_layout1.png',  1,  1,  '0000-00-00 00:00:00',  '2019-06-06 08:00:45'),
(118, 40, 'Layout 1', 'contact_layout2.png',  2,  1,  '0000-00-00 00:00:00',  '2019-06-06 08:01:35'),
(119, 20, 'Default',  '', 1,  1,  '0000-00-00 00:00:00',  '2019-06-06 08:42:05'),
(120, 50, 'Default',  '', 1,  1,  '0000-00-00 00:00:00',  '2019-06-06 11:19:20'),
(121, 50, 'Layout 1', '', 2,  1,  '0000-00-00 00:00:00',  '2019-06-06 11:19:56'),
(122, 50, 'Layout2',  '', 2,  1,  '0000-00-00 00:00:00',  '2019-06-06 11:33:55'),
(123, 50, 'Layout3',  '', 3,  1,  '2019-06-06 13:57:06',  '2019-06-06 13:57:06');

ALTER TABLE `minisite`
ADD `font_type` int(25) NOT NULL,
ADD `menu_type` int(25) NOT NULL;