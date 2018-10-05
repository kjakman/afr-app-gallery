# changes.sql

alter table user_map add column soft_delete tinyint(1) not null default 0;

ALTER TABLE `minisite`
ADD `artist_menu_title` varchar(255) NOT NULL AFTER `location_id`,
ADD `artist_page_title` varchar(255) NOT NULL AFTER `artist_menu_title`,
ADD `exhibition_menu_title` varchar(255) NOT NULL AFTER `artist_page_title`,
ADD `exhibition_page_title` varchar(255) NOT NULL AFTER `exhibition_menu_title`;

ALTER TABLE `minisite`
ADD `exhibition_type` varchar(64) NOT NULL;
