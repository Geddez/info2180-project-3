DROP DATABASE IF EXISTS HireMe;
CREATE DATABASE HireMe;
USE HireMe;

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users`(
  `id` int(30) NOT NULL auto_increment,
  `firstname` char(30) NOT NULL default '',
  `lastname` char(30) NOT NULL default '',
  `password` varchar(100) NOT NULL default '',
  `email` varchar(30) NOT NULL default '',
  `telephone` int(11) NOT NULL,
  `date_join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Users` VALUES(1,'Daniel','Geddes','$2y$10$D4KSUJdQJSETNQf7kOHjd.RSyMmOo78lO5yenqsDFkGaZW7rlWnnq','admin@hireme.com','18764484586','2018-12-03 22:16:00');

DROP TABLE IF EXISTS `Jobs`;
CREATE TABLE `Jobs`(
  `id` int(11) NOT NULL auto_increment,
  `job_title` char(30) NOT NULL default '',
  `job_description` text(350) NOT NULL default '',
  `category` enum('optionA','optionB','optionC') NOT NULL default 'optionC',
  `company_name` varchar(30) NOT NULL default '',
  `company_location` varchar(30) NOT NULL default '',
  `date_posted` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `Jobs_applied`;
CREATE TABLE `Jobs_applied`(
  `id` int(11) NOT NULL auto_increment,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_applied` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;