-- Added by Vinayak
-- 24/08/2021
-- Adding created_at column in featured_news
ALTER TABLE `featured_news` ADD `created_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `UpdationDate`;
-- Adding created_by column in featured_news
ALTER TABLE `featured_news` ADD `created_by` VARCHAR(80) NOT NULL AFTER `created_at`;