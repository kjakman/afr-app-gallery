# changes.sql

alter table user_map add column soft_delete tinyint(1) not null default 0;

ALTER TABLE `minisite`
ADD `artist_menu_title` varchar(255) NOT NULL AFTER `location_id`,
ADD `artist_page_title` varchar(255) NOT NULL AFTER `artist_menu_title`,
ADD `exhibition_menu_title` varchar(255) NOT NULL AFTER `artist_page_title`,
ADD `exhibition_page_title` varchar(255) NOT NULL AFTER `exhibition_menu_title`;

ALTER TABLE `minisite`
ADD `exhibition_type` varchar(64) NOT NULL;

ALTER TABLE `minisite`
DROP `exhibition_type`;

ALTER TABLE `minisite`
ADD `show_gallery` tinyint(1) NULL DEFAULT '0' AFTER `exhibition_page_title`,
ADD `show_artfair` tinyint(1) NULL DEFAULT '0' AFTER `show_gallery`,
ADD `show_others` tinyint(1) NULL DEFAULT '0' AFTER `show_artfair`,
ADD `show_past` tinyint(1) NULL DEFAULT '0' AFTER `show_others`,
ADD `show_current` tinyint(1) NULL DEFAULT '0' AFTER `show_past`,
ADD `show_future` tinyint(1) NULL DEFAULT '0' AFTER `show_current`,
ADD `show_latest` tinyint(1) NULL DEFAULT '1' AFTER `show_future`;
ADD `show_recent` tinyint(1) NULL DEFAULT '1' AFTER `show_latest`;

ALTER TABLE `minisite`
DROP `artist_menu_title`,
DROP `artist_page_title`,
DROP `exhibition_menu_title`,
DROP `exhibition_page_title`,
DROP `show_gallery`,
DROP `show_artfair`,
DROP `show_others`,
DROP `show_past`,
DROP `show_current`,
DROP `show_future`,
DROP `show_latest`,
DROP `show_recent`,

ALTER TABLE `minisite`
ADD `sub_title` varchar(128) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `name`;
ADD `description` varchar(225) COLLATE 'utf8_general_ci' NOT NULL AFTER `sub_title`;
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
  `exhibition_menu_title` varchar(255) NOT NULL,
  `exhibition_page_title` varchar(255) NOT NULL,
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

INSERT INTO `minisite_artist_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`)
VALUES ('1000', now(), now(), '247', '1004', '20361', '100', '1', 'Artist Page', 'Artist Page');

INSERT INTO `minisite_home_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`, 'show_gallery', 'show_artfair', 'show_others', 'show_past', 'show_current', 'show_future', 'show_latest', 'show_recent')
VALUES ('1000', now(), now(), '247', '1004', '20361', '100', '1', 'Home Page', 'Home Page', '1', '1', '1','1', '1', '1', '1');

INSERT INTO `minisite_exhibition_page` (`id`, `created`, `timestamp`, `site_id`, `client_id`, `user_id`, `page_id`, `active`, `menu_title`, `page_title`, 'show_gallery', 'show_artfair', 'show_others', 'show_past', 'show_current', 'show_future', 'show_latest', 'show_recent')
VALUES ('1000', now(), now(), '247', '1004', '20361', '100', '1', 'Exhibition Page', 'Exhibition Page', '1', '1', '1','1', '1', '1', '1');

CREATE TABLE `minisite_layout` (
  `id` tinyint(2) NOT NULL DEFAULT '0',
  `name` varchar(20) NULL
);

INSERT INTO `minisite_layout` (`id`, `name`)
VALUES ('1', 'default');

INSERT INTO `minisite_layout` (`id`, `name`)
VALUES ('2', 'timeline');

ALTER TABLE `user_profile`
ADD `gallery_name` varchar(50) COLLATE 'utf8_general_ci' NULL DEFAULT '' AFTER `display_name`,
ADD `mon_start_time` datetime NOT NULL,
ADD `mon_end_time` datetime NOT NULL AFTER `mon_start_time`,
ADD `tues_start_time` datetime NOT NULL AFTER `mon_end_time`,
ADD `tues_end_time` datetime NOT NULL AFTER `tues_start_time`,
ADD `wed_start_time` datetime NOT NULL AFTER `tues_end_time`,
ADD `wed_end_time` datetime NOT NULL AFTER `wed_start_time`,
ADD `thur_start_time` datetime NOT NULL AFTER `wed_end_time`,
ADD `thur_end_time` datetime NOT NULL AFTER `thur_start_time`,
ADD `fri_start_time` datetime NOT NULL AFTER `thur_end_time`,
ADD `fri_end_time` datetime NOT NULL AFTER `fri_start_time`,
ADD `instagram` varchar(50) NOT NULL AFTER `fri_end_time`,
ADD `facebook` varchar(50) NOT NULL AFTER `instagram`,
ADD `twitter` varchar(50) NOT NULL AFTER `facebook`;