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
ADD `about_title` varchar(100) NOT NULL DEFAULT ;

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
  `Id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
);

INSERT INTO `minisite_exhibition_layout` (`Id`, `name`)
VALUES ('10', 'Cover Page');

INSERT INTO `minisite_exhibition_layout` (`Id`, `name`)
VALUES ('20', 'Landscape With Time Separator');

INSERT INTO `minisite_exhibition_layout` (`Id`, `name`)
VALUES ('30', 'Cover Page & Landscape');

INSERT INTO `minisite_exhibition_layout` (`Id`, `name`)
VALUES ('40', 'Timeline');

INSERT INTO `minisite_exhibition_layout` (`Id`, `name`)
VALUES ('50', 'Natural With Time Separator');

INSERT INTO `minisite_exhibition_layout` (`Id`, `name`)
VALUES ('60', 'Natural');

INSERT INTO `minisite_exhibition_layout` (`Id`, `name`)
VALUES ('70', 'tiles');

CREATE TABLE `minisite_contact_layout` (
  `Id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
);
TRUNCATE TABLE `minisite_contact_layout`;

INSERT INTO `minisite_contact_layout` (`id`, `name`)
VALUES ('10', 'Contact');

INSERT INTO `minisite_contact_layout` (`id`, `name`)
VALUES ('20', 'Bio & CV');

TRUNCATE TABLE `minisite_page_type`;

CREATE TABLE `minisite_page_type` (
  `id` smallint(4) NOT NULL,
  `name` varchar(32) NOT NULL
);


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
