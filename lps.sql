
	CREATE TABLE `lps`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `uname` VARCHAR(100) NOT NULL , `village` VARCHAR(100) NOT NULL , `taluka` VARCHAR(100) NOT NULL , `district` VARCHAR(100) NOT NULL , `phoneno` BIGINT NOT NULL , `adhaarno` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

	INSERT INTO `user` (`id`, `uname`, `village`, `taluka`, `district`, `phoneno`, `adhaarno`) VALUES (ABS('1'), 'Kunal Singh', 'Dehuroad', 'Haveli', 'Pune', '9011525149', '454545454545545');
	INSERT INTO `user` (`id`, `uname`, `village`, `taluka`, `district`, `phoneno`, `adhaarno`) VALUES (ABS('2'), 'Nilesh Singh', 'Dehu', 'Haveli', 'Pune', '2211525149', '6745454545545')	
	INSERT INTO `user` (`id`, `uname`, `village`, `taluka`, `district`, `phoneno`, `adhaarno`) VALUES (ABS('3'), 'abhi wagh', 'pimpri', 'Haveli', 'Pune', '7878675653', '9897867656453')



	ALTER TABLE `user` ADD `length` INT NOT NULL AFTER `adhaarno`, ADD `breadth` INT NOT NULL AFTER `length`, ADD `rate` INT NOT NULL AFTER `breadth`, ADD `totalarea` INT NOT NULL AFTER `rate`, ADD `totalamount` INT NOT NULL AFTER `totalarea`, ADD `invoiceid` INT NOT NULL AFTER `totalamount`;
