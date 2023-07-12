# Add New Column media_collection Table exhibition_sequence
ALTER TABLE `media_collection`
ADD `exhibition_sequence` char(20) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' AFTER `end_date`;

# Manual Update Data in Artfair, Gallery and Event
UPDATE  `media_collection` SET `exhibition_sequence` = `start_date` WHERE `subtype` IN (10,20,30);

# Manual Update Data in Selection and Private Link Just run url link automatically updated respective data into new column (exhibition_sequence).

URL NEW DCI: https://new.vpatina.dci.in/manual_update_selection
URL DEV: https://dev.vpatina.com/manual_update_selection
URL LIVE: https://vpatina.com/manual_update_selection