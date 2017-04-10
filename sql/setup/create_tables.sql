--
-- practice code for slim3
--
DROP TABLE IF EXISTS `library`;

CREATE TABLE `library` (
	`book_id` int(11) NOT NULL AUTO_INCREMENT,
	`book_name` varchar(100) DEFAULT NULL,
	`book_isbn` varchar(100) DEFAULT NULL,
	`book_category` varchar(100) DEFAULT NULL,
	primary key(book_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

