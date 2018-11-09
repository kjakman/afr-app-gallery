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
  `show_gallery` tinyint(1) NULL DEFAULT '1' AFTER `page_title`,
  `show_artfair` tinyint(1) NULL DEFAULT '1' AFTER `show_gallery`,
  `show_others` tinyint(1) NULL DEFAULT '1' AFTER `show_artfair`,
  `show_past` tinyint(1) NULL DEFAULT '1' AFTER `show_others`,
  `show_current` tinyint(1) NULL DEFAULT '1' AFTER `show_past`,
  `show_future` tinyint(1) NULL DEFAULT '1' AFTER `show_current`,
  `show_latest` tinyint(1) NULL DEFAULT '1' AFTER `show_future`,
  `show_recent` tinyint(1) NULL DEFAULT '1' AFTER `show_latest`
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

IF NOT EXISTS (SELECT * FROM minisite_artist_page WHERE id = '1000')
BEGIN
  INSERT INTO `minisite_artist_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`)
  VALUES ('1000', now(), now(), '247', '1004', '20361', '100', '1', 'Artist Page', 'Artist Page');
END

IF NOT EXISTS (SELECT * FROM minisite_home_page WHERE id = '1000')
BEGIN
  INSERT INTO `minisite_home_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `layout`, `active`, `menu_title`, `page_title`, 'show_gallery', 'show_artfair', 'show_others', 'show_past', 'show_current', 'show_future', 'show_latest', 'show_recent')
  VALUES ('1000', now(), now(), '247', '1004', '20361', '100', '1', 'Home Page', 'Home Page', '1', '1', '1', '1','1', '1', '1', '1');
END

IF NOT EXISTS (SELECT * FROM minisite_exhibition_page WHERE id = '1000')
BEGIN
  INSERT INTO `minisite_exhibition_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`, 'show_gallery', 'show_artfair', 'show_others', 'show_past', 'show_current', 'show_future', 'show_latest', 'show_recent')
  VALUES ('1000', now(), now(), '247', '1004', '20361', '100', '1', 'Exhibition Page', 'Exhibition Page', '1', '1', '1','1', '1', '1', '1');
END

CREATE TABLE `minisite_layout` (
  `id` tinyint(2) NOT NULL DEFAULT '0',
  `name` varchar(20) NULL
);

IF NOT EXISTS (SELECT * FROM minisite_layout WHERE id = '1')
BEGIN
  INSERT INTO `minisite_layout` (`id`, `name`)
  VALUES ('1', 'single column');
END

IF NOT EXISTS (SELECT * FROM minisite_layout WHERE id = '2')
BEGIN
  INSERT INTO `minisite_layout` (`id`, `name`)
  VALUES ('2', 'timeline');
END

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
  `opening_time` time NOT NULL AFTER `day`,
  `closing_time` time NOT NULL AFTER `opening_time`,
  `holiday` tinyint(1) NULL DEFAULT '1',
);

IF NOT EXISTS (SELECT * FROM db_sequence WHERE seq_name = 'opening_hours')
BEGIN
  INSERT INTO `db_sequence` (`seq_name`, `nextid`)
  VALUES ('opening_hours', '1000');
END

IF NOT EXISTS (SELECT * FROM db_sequence WHERE seq_name = 'minisite_pages')
BEGIN
  INSERT INTO `db_sequence` (`seq_name`, `nextid`)
  VALUES ('minisite_pages', '101');
END

IF NOT EXISTS (SELECT * FROM db_sequence WHERE seq_name = 'minisite_artist_page')
BEGIN
  INSERT INTO `db_sequence` (`seq_name`, `nextid`)
  VALUES ('minisite_artist_page', '1001');
END

IF NOT EXISTS (SELECT * FROM db_sequence WHERE seq_name = 'minisite_exhibition_page')
BEGIN
  INSERT INTO `db_sequence` (`seq_name`, `nextid`)
  VALUES ('minisite_exhibition_page', '1001');
END

IF NOT EXISTS (SELECT * FROM db_sequence WHERE seq_name = 'minisite_home_page')
BEGIN
  INSERT INTO `db_sequence` (`seq_name`, `nextid`)
  VALUES ('minisite_home_page', '1001');
END


CREATE TABLE `minisite_page_type` (
  `id` smallint(4) NOT NULL,
  `name` varchar(32) NOT NULL
);

IF NOT EXISTS (SELECT * FROM minisite_page_type WHERE id = '10')
BEGIN
INSERT INTO `minisite_page_type` (`id`, `name`)
VALUES ('10', 'home');
END

IF NOT EXISTS (SELECT * FROM minisite_page_type WHERE id = '20')
BEGIN
INSERT INTO `minisite_page_type` (`id`, `name`)
VALUES ('20', 'artist');
END

IF NOT EXISTS (SELECT * FROM minisite_page_type WHERE id = '30')
BEGIN
INSERT INTO `minisite_page_type` (`id`, `name`)
VALUES ('30', 'exhibition');
END

IF NOT EXISTS (SELECT * FROM minisite_pages WHERE id = '100')
BEGIN
INSERT INTO `minisite_pages` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`)
VALUES ('100', now(), now(), '1', '247', '1004', '20361', '10', 'home');
END

IF NOT EXISTS (SELECT * FROM minisite_pages WHERE id = '101')
BEGIN
INSERT INTO `minisite_pages` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`)
VALUES ('101', now(), now(), '1', '247', '1004', '20361', '30', 'exhibition');
END

IF NOT EXISTS (SELECT * FROM minisite_pages WHERE id = '102')
BEGIN
INSERT INTO `minisite_pages` (`id`, `created`, `timestamp`, `active`, `site_id`, `client_id`, `user_id`, `type`, `page_name`)
VALUES ('102', now(), now(), '1', '247', '1004', '20361', '20', 'artist');
END

ALTER TABLE `minisite_pages`
RENAME TO `minisite_page`;

ALTER TABLE `minisite_page`
ADD `path` varchar(128) COLLATE 'utf8mb4_general_ci' NOT NULL DEFAULT '';

UPDATE `db_sequence` SET
`seq_name` = 'minisite_page',
`nextid` = '103'
WHERE `seq_name` = 'minisite_pages' AND `seq_name` = 'minisite_pages';

ALTER TABLE `user_profile`
CHANGE `facebook` `facebook` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `data`,
CHANGE `instagram` `instagram` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `facebook`,
CHANGE `twitter` `twitter` varchar(64) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `instagram`;

