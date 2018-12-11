# changes.sql

alter table user_map add column soft_delete tinyint(1) not null default 0;


ALTER TABLE `minisite`
ADD `sub_title` varchar(128) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `name`,
ADD `description` varchar(225) COLLATE 'utf8_general_ci' NOT NULL AFTER `sub_title`,
ADD `footer` varchar(255) NOT NULL;

CREATE TABLE `minisite_exhibition_page` (
  `id` int(4) NOT NULL,
  `created` date NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `site_id` int(8) NOT NULL,
  `client_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `page_id` int(8) NOT NULL,
  `active` tinyint(1) NULL DEFAULT '1',
  `menu_title` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `show_gallery` tinyint(1) NULL DEFAULT '1',
  `show_artfair` tinyint(1) NULL DEFAULT '1',
  `show_others` tinyint(1) NULL DEFAULT '1',
  `show_past` tinyint(1) NULL DEFAULT '1',
  `show_current` tinyint(1) NULL DEFAULT '1',
  `show_future` tinyint(1) NULL DEFAULT '1',
  `show_latest` tinyint(1) NULL DEFAULT '1',
  `show_recent` tinyint(1) NULL DEFAULT '1'
);

CREATE TABLE `minisite_home_page` (
  `id` int(4) NOT NULL,
  `created` date NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `site_id` int(8) NOT NULL,
  `client_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `page_id` int(8) NOT NULL,
  `menu_title` varchar(128) NOT NULL,
  `page_title` varchar(128) NOT NULL,
  `active` tinyint(1) NULL DEFAULT '1',
  `show_gallery` tinyint(1) NULL DEFAULT '1',
  `show_artfair` tinyint(1) NULL DEFAULT '1',
  `show_others` tinyint(1) NULL DEFAULT '1',
  `show_past` tinyint(1) NULL DEFAULT '1',
  `show_current` tinyint(1) NULL DEFAULT '1',
  `show_future` tinyint(1) NULL DEFAULT '1',
  `show_latest` tinyint(1) NULL DEFAULT '1',
  `show_recent` tinyint(1) NULL DEFAULT '1'
);

CREATE TABLE `minisite_artist_page` (
  `id` int(4) NOT NULL,
  `created` date NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `site_id` int(8) NOT NULL,
  `client_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `page_id` int(8) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `menu_title` varchar(128) NOT NULL,
  `page_title` varchar(128) NOT NULL
);

INSERT INTO `minisite_artist_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`)
SELECT '1000', now(), now(), '247', '1004', '20361', '100', '1', 'Artist Page', 'Artist Page'from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_artist_page` WHERE `id` = '1000');

INSERT INTO `minisite_home_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `layout`, `active`, `menu_title`, `page_title`,
`show_gallery`, `show_artfair`, `show_others`, `show_past`, `show_current`, `show_future`, `show_latest`, `show_recent`)
SELECT '1000', now(), now(), '247', '1004', '20361', '100', '1', '1', 'Home Page', 'Home Page', '1', '1', '1', '1','1', '1', '1', '1' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_home_page` WHERE `id` = '1000');

INSERT INTO `minisite_exhibition_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`,
`show_gallery`, `show_artfair`, `show_others`, `show_past`, `show_current`, `show_future`, `show_latest`, `show_recent`)
SELECT '1000', now(), now(), '247', '1004', '20361', '100', '1', 'Exhibition Page', 'Exhibition Page','1', '1', '1', '1','1', '1', '1', '1' FROM dual
WHERE NOT EXISTS (SELECT * FROM `minisite_exhibition_page` WHERE `id` = '1000');

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

CREATE TABLE `minisite_pages` (
  `id` int(8) NOT NULL,
  `created` date NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NULL DEFAULT '1',
  `site_id` int(8) NOT NULL,
  `client_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `type` varchar(32) NOT NULL,
  `page_name` varchar(32) NOT NULL
);

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

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'minisite_pages', '101' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'minisite_pages');

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'minisite_artist_page', '1001' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'minisite_artist_page');

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'minisite_exhibition_page', '1001' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'minisite_exhibition_page');

INSERT INTO `db_sequence` (`seq_name`, `nextid`)
SELECT 'minisite_home_page', '1001' from dual
WHERE NOT EXISTS (SELECT * FROM `db_sequence` WHERE `seq_name` = 'minisite_home_page');


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
                       
INSERT INTO `minisite_pages` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`)
SELECT '100', now(), now(), '1', '247', '1004', '20361', '10', 'home' from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_pages` WHERE `id` = '100');

INSERT INTO `minisite_pages` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`)
SELECT '101', now(), now(), '1', '247', '1004', '20361', '30', 'exhibition' from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_pages` WHERE `id` = '101');

INSERT INTO `minisite_pages` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`)
SELECT '102', now(), now(), '1', '247', '1004', '20361', '20', 'artist' from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_pages` WHERE `id` = '102');

ALTER TABLE `minisite_pages`
RENAME TO `minisite_page`;

ALTER TABLE `minisite_page`
ADD `path` varchar(128) COLLATE 'utf8mb4_general_ci' NOT NULL DEFAULT '';

UPDATE `db_sequence` SET
`seq_name` = 'minisite_page',
`nextid` = '103'
WHERE `seq_name` = 'minisite_pages' AND `seq_name` = 'minisite_pages';

-- Changed by Kjetil              
ALTER TABLE `user_profile` ADD COLUMN `facebook` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '';
ALTER TABLE `user_profile` ADD COLUMN `instagram` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '';
ALTER TABLE `user_profile` ADD COLUMN `twitter` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '';
ALTER TABLE `user_profile` ADD COLUMN `artist` tinyint(1) NOT NULL DEFAULT 0;

-- Added by Kjetil
DROP table minisite_pages;
ALTER TABLE `user_profile` ADD COLUMN gallery_name  varchar(128) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '';
                                        
insert into minisite_page_type values (1, 'generic');
insert into minisite_page_type values (40, 'exhibitions');
alter table minisite_page add column path varchar(64) not null default '';
alter table minisite_page add column slug varchar(64) not null default '';
alter table minisite_page add column search text not null default '';
alter table minisite_page add column minisite_id int(11) not null;

ALTER TABLE `media_collection` ADD COLUMN `title_image_option` tinyint(1) NOT NULL DEFAULT 0;

-- INSERT INTO minisite_pages ('id', 'created', 'timestamp', 'active', 'site_id', 'client_id', 'user_id', 'type', 'page_name', 'path', 'slug', 'search')
-- VALUES (103,'2018-11-11','','','','','','','');
 
INSERT INTO `minisite_page` (`id`, `minisite_id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`, `path`,`slug`,`search` )
SELECT '103', 1000, now(), now(), '1', '247', '1004', '20361', '40', 'Art Fairs', '', 'art-fairs', '{"id": [2789, 2786, 2783]}' from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page` WHERE `id` = '103');

INSERT INTO `minisite_page` (`id`, `minisite_id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`, `path`,`slug`,`search` )
SELECT '104', 1000, now(), now(), '1', '247', '1004', '20361', '1', 'Test Page', 'test-page', '', '' from dual
WHERE NOT EXISTS (SELECT * FROM `minisite_page` WHERE `id` = '104');

update db_sequence set nextid = 104 where seq_name='minisite_pages';

