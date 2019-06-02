
CREATE TABLE IF NOT EXISTS `users` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`fn` varchar(50) NOT NULL,
	`ln` varchar(50) NOT NULL,
	`c` varchar(50) NOT NULL,
    `p` varchar(50) NOT NULL,
    `age` int(10) NOT NULL,
    `gender` varchar(50) NOT NULL,
	`regData` timestamp DEFAULT CURRENT_TIMESTAMP ,   
	PRIMARY KEY (`id`)
);