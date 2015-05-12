CREATE TABLE IF NOT EXISTS `news` (
	`ID` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(50),
	`author` VARCHAR(50),
	`email` VARCHAR(50),
	`article` text(5000),
	`picture` VARCHAR(100),
	`date_submitted` DATETIME,
	PRIMARY KEY (ID)
)