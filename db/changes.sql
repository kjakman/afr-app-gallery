# changes.sql

alter table user_map add column soft_delete tinyint(1) not null default 0;
