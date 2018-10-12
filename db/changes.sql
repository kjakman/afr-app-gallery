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