ALTER TABLE `media_collection`
ADD `exhibition_sequence` char(20) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `end_date`;