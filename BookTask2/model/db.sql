create database book2;

use book2;

CREATE TABLE `books` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `isbn` int(13) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
);
