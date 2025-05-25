---- Tabelle für die users in phpmyadmin einpflegen

DROP TABLE IF EXISTS `shopUser`;

CREATE TABLE `shopUser` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `2facode` varchar(30) NOT NULL
);

ALTER TABLE `shopUser` ADD PRIMARY KEY(`id`);

ALTER TABLE `shopUser` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;