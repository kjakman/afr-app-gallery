# changes.sql

alter table user_map add column soft_delete tinyint(1) not null default 0;


ALTER TABLE `minisite`
ADD `sub_title` varchar(128) COLLATE 'utf8_general_ci' NOT NULL,
ADD `description` varchar(225) COLLATE 'utf8_general_ci' NOT NULL,
ADD `footer` varchar(255) NOT NULL;

#CREATE TABLE `minisite_exhibition_page` (
#  `id` int(4) NOT NULL,
#  `created` date NULL,
#  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
#  `site_id` int(8) NOT NULL,
#  `client_id` int(8) NOT NULL,
#  `user_id` int(8) NOT NULL,
#  `page_id` int(8) NOT NULL,
#  `active` tinyint(1) NULL DEFAULT '1',
#  `menu_title` varchar(255) NOT NULL,
#  `page_title` varchar(255) NOT NULL,
#  `show_gallery` tinyint(1) NULL DEFAULT '1',
#  `show_artfair` tinyint(1) NULL DEFAULT '1',
#  `show_others` tinyint(1) NULL DEFAULT '1',
#  `show_past` tinyint(1) NULL DEFAULT '1',
#  `show_current` tinyint(1) NULL DEFAULT '1',
#  `show_future` tinyint(1) NULL DEFAULT '1',
#  `show_latest` tinyint(1) NULL DEFAULT '1',
#  `show_recent` tinyint(1) NULL DEFAULT '1'
#);

#CREATE TABLE `minisite_home_page` (
#  `id` int(4) NOT NULL,
#  `created` date NULL,
#  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
#  `site_id` int(8) NOT NULL,
#  `client_id` int(8) NOT NULL,
#  `user_id` int(8) NOT NULL,
#  `page_id` int(8) NOT NULL,
#  `menu_title` varchar(128) NOT NULL,
#  `page_title` varchar(128) NOT NULL,
#  `active` tinyint(1) NULL DEFAULT '1',
#  `show_gallery` tinyint(1) NULL DEFAULT '1',
#  `show_artfair` tinyint(1) NULL DEFAULT '1',
#  `show_others` tinyint(1) NULL DEFAULT '1',
#  `show_past` tinyint(1) NULL DEFAULT '1',
#  `show_current` tinyint(1) NULL DEFAULT '1',
#  `show_future` tinyint(1) NULL DEFAULT '1',
#  `show_latest` tinyint(1) NULL DEFAULT '1',
#  `show_recent` tinyint(1) NULL DEFAULT '1'
#);

#CREATE TABLE `minisite_artist_page` (
#  `id` int(4) NOT NULL,
#  `created` date NULL,
#  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
#  `site_id` int(8) NOT NULL,
#  `client_id` int(8) NOT NULL,
#  `user_id` int(8) NOT NULL,
#  `page_id` int(8) NOT NULL,
#  `active` tinyint(1) NOT NULL DEFAULT '1',
#  `menu_title` varchar(128) NOT NULL,
#  `page_title` varchar(128) NOT NULL
#);

#INSERT INTO `minisite_artist_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`, `slug`)
#SELECT '1000', now(), now(), '247', '1004', '20361', '102', '1', 'Artist Page', 'Artist Page', '/artistpage/' FROM dual
#WHERE NOT EXISTS (SELECT * FROM `minisite_artist_page` WHERE `id` = '1000');

#INSERT INTO `minisite_home_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `layout`, `active`, `menu_title`, `page_title`, `show_gallery`, `show_artfair`, `show_others`, `show_past`, `show_current`, `show_future`, `show_latest`, `show_recent`)
#SELECT '1000', now(), now(), '247', '1004', '20361', '100', '1', '1', 'Home Page', 'Home Page', '1', '1', '1', '1','1', '1', '1', '1' FROM dual
#WHERE NOT EXISTS (SELECT * FROM `minisite_home_page` WHERE `id` = '1000');

#INSERT INTO `minisite_exhibition_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`, `show_gallery`, `show_artfair`, `show_others`, `show_past`, `show_current`, `show_future`, `show_latest`, `show_recent`, `slug`)
#SELECT '1000', now(), now(), '247', '1004', '20361', '101', '1', 'Exhibition Page', 'Exhibition Page','1', '1', '1', '1','1', '1', '1', '1', '/exhibitionpage/' FROM dual
#WHERE NOT EXISTS (SELECT * FROM `minisite_exhibition_page` WHERE `id` = '1000');

CREATE TABLE `minisite_layout` (
  `id` tinyint(2) NOT NULL DEFAULT '0',
  `name` varchar(20) NULL
);

INSERT INTO `minisite_layout` (`id`, `name`)
SELECT '1', 'single column' from dual
WHERE NOT EXISTS (SELECT * FROM minisite_layout WHERE id = '1');

INSERT INTO `minisite_layout` (`id`, `name`)
SELECT '2', 'timeline' from dual
WHERE NOT EXISTS (SELECT * FROM minisite_layout WHERE id = '2');

#DROP TABLE `minisite_pages`;

DELETE FROM `db_sequence` WHERE `seq_name`='minisite_pages';

CREATE TABLE `minisite_page` (
  `id` int(8) NOT NULL,
  `created` date NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NULL DEFAULT '1',
  `site_id` int(8) NOT NULL,
  `client_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `type` varchar(32) NOT NULL,
  `page_name` varchar(32) NOT NULL,
  `path` varchar(128) NOT NULL DEFAULT ''
);

TRUNCATE TABLE `minisite_page`;

#INSERT INTO `minisite_page` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`, `menu_title`, `page_title`, `path`, `slug`, `minisite_id`)
#SELECT '100', now(), now(), '1', '247', '1004', '20361', '10', 'Home', 'Home Page', 'Home Page', '/homepage/', '/homepage/', '1000' FROM dual
#WHERE NOT EXISTS (SELECT * FROM `minisite_page` WHERE `id` = '100');

INSERT INTO `minisite_page` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`,  `menu_title`, `page_title`, `slug`, `data`, `minisite_id`, `search`, `row_order`)
SELECT '100', now(), now(), '1', '247', '1004', '20361', '10', 'home', 'Home Page', '/home/', '{"layout":"2","show_recent":"1","show_past":"1","show_current":"1","show_future":"1","show_latest":"0","show_gallery":"1","show_artfair":"1","show_others":"1"}', '1000', '','' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page` WHERE `id` = '100');

#INSERT INTO `minisite_page` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`, `menu_title`, `page_title`, `path`, `slug`, `minisite_id`)
#SELECT '102', now(), now(), '1', '247', '1004', '20361', '20', 'Artist', 'Artist Page', 'Artist Page', '/artistpage/', '/artistpage/', '1000' FROM dual
#WHERE NOT EXISTS (SELECT * FROM `minisite_page` WHERE `id` = '102');

INSERT INTO `minisite_page` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`,  `menu_title`, `page_title`, `slug`, `data`, `minisite_id`, `search`, `row_order`)
SELECT '101', now(), now(), '1', '247', '1004', '20361', '20', 'artist', 'Artist Page', '/artist/', ' ', '1000', '[20440,20429,20424,20415,20388]','' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page` WHERE `id` = '101');

#INSERT INTO `minisite_page` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`, `menu_title`, `page_title`, `path`, `slug`, `minisite_id`)
#SELECT '101', now(), now(), '1', '247', '1004', '20361', '30', 'Exhibition', 'Exhibition Page', 'Exhibition Page', '/exhibitionpage/', '/exhibitionpage/', '1000' FROM dual
#WHERE NOT EXISTS (SELECT * FROM `minisite_page` WHERE `id` = '101');

INSERT INTO `minisite_page` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`,  `menu_title`, `page_title`, `slug`, `data`, `minisite_id`, `search`, `row_order`)
SELECT '102', now(), now(), '1', '247', '1004', '20361', '30', 'exhibition', 'Exhibition Page', '/exhibition/', '{"show_recent":"1","show_past":"1","show_current":"1","show_future":"1","show_latest":"0","show_gallery":"1","show_artfair":"1","show_others":"1"}', '1000', '','' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page` WHERE `id` = '102');



INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'minisite_page', '101' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'minisite_page');

ALTER TABLE `minisite`
ADD `show_title` tinyint(1) NOT NULL DEFAULT '1',
ADD `show_subtitle` tinyint(1) NOT NULL DEFAULT '1' AFTER `show_title`,
ADD `show_timing` tinyint(1) NOT NULL DEFAULT '1' AFTER `show_subtitle`,
ADD `show_social` tinyint(1) NOT NULL DEFAULT '1' AFTER `show_timing`;

CREATE TABLE `opening_hours` (
  `id` int(8) NOT NULL,
  `created` date NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(8) NOT NULL, 
  `day` varchar(128) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `holiday` tinyint(1) NULL DEFAULT '1'
);

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'opening_hours', '1000' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'opening_hours');

#INSERT INTO `db_sequence` (`seq_name`, `nextid`)
#SELECT 'minisite_artist_page', '1001' from dual
#WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'minisite_artist_page');

#INSERT INTO `db_sequence` (`seq_name`, `nextid`)
#SELECT 'minisite_exhibition_page', '1001' from dual
#WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'minisite_exhibition_page');

#INSERT INTO `db_sequence` (`seq_name`, `nextid`)
#SELECT 'minisite_home_page', '1001' from dual
#WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'minisite_home_page');

DELETE FROM `db_sequence` WHERE `seq_name`='minisite_artist_page';

DELETE FROM `db_sequence` WHERE `seq_name`='minisite_exhibition_page';

DELETE FROM `db_sequence` WHERE `seq_name`='minisite_home_page';


CREATE TABLE `minisite_page_type` (
  `id` smallint(4) NOT NULL,
  `name` varchar(32) NOT NULL
);


INSERT INTO `minisite_page_type` (`id`, `name`)
SELECT '10', 'home' from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '10');


INSERT INTO `minisite_page_type` (`id`, `name`)
SELECT '20', 'artist' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '20');


INSERT INTO `minisite_page_type` (`id`, `name`)
SELECT '30', 'exhibition' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '30');


ALTER TABLE `user_profile`
CHANGE `facebook` `facebook` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '',
CHANGE `instagram` `instagram` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '',
CHANGE `twitter` `twitter` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '';

#insert into minisite_page_type (`id`, `name`)
#SELECT 1, 'generic' FROM dual
#WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '1');

#insert into minisite_page_type (`id`, `name`)
#SELECT 40, 'exhibitions' FROM dual
#WHERE NOT EXISTS (SELECT * FROM `minisite_page_type` WHERE `id` = '40');

alter table minisite_page add column path varchar(64) not null default '';
alter table minisite_page add column slug varchar(64) not null default '';
alter table minisite_page add column search text not null default '';
alter table minisite_page add column minisite_id int(11) not null;


CREATE TABLE `page_map` (
  `id` int(4) NOT NULL,
  `created` date NULL,
  `user_id` int(8) NOT NULL,
  `host_user_id` int(8) NOT NULL,
  `page_id` int(8) NOT NULL,
  `active` int(8) NOT NULL
);

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'page_map', '10' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'page_map');

#ALTER TABLE `minisite_artist_page`
#ADD `slug` varchar(64) NOT NULL;

#ALTER TABLE `minisite_exhibition_page`
#ADD `slug` varchar(64) NULL;

ALTER TABLE `minisite_page`
ADD `row_order` int(11) NOT NULL;

ALTER TABLE `minisite_page`
ADD `menu_title` varchar(32) NOT NULL,
ADD `page_title` varchar(32) NOT NULL ;

ALTER TABLE `minisite_page`
DROP `page_name`,
DROP `path`;

ALTER TABLE `media_collection`
ADD `title_image_option` tinyint(1) NOT NULL DEFAULT '1';

ALTER TABLE `minisite_page`
ADD `data` varchar(100) NOT NULL DEFAULT '';

DROP TABLE `minisite_home_page`;

DROP TABLE `minisite_artist_page`;

DROP TABLE `minisite_exhibition_page`;

ALTER TABLE `user_profile`
ADD `awards` text NOT NULL;

ALTER TABLE `user_profile`
ADD `working_hours` text NOT NULL;

ALTER TABLE `user_profile`
ADD `mobile` varchar(20) NOT NULL;

ALTER TABLE `user_profile`
ADD `fax` varchar(20) NOT NULL ;

ALTER TABLE `user_profile`
ADD `contact` text  NOT NULL;

ALTER TABLE `user_profile`
ADD `show_awards` tinyint(1) NOT NULL DEFAULT '1';

ALTER TABLE `user_profile`
ADD `social` varchar(128) NOT NULL DEFAULT '';



