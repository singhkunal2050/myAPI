
	-- "CustomerName": this.CustomerName,
	-- "Village": this.village,
	-- "Taluka": this.taluka,
	-- "District": this.district,
	-- "MobileNumber":this.mobile,
	-- "AdharNumber":this.adharnumber

	--database name 
	-- lps

	-- user table 
	CREATE TABLE `lps`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `uname` VARCHAR(100) NOT NULL , `village` VARCHAR(100) NOT NULL , `taluka` VARCHAR(100) NOT NULL , `district` VARCHAR(100) NOT NULL , `phoneno` BIGINT NOT NULL , `adhaarno` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

	-- insert into table
	INSERT INTO `user` (`id`, `uname`, `village`, `taluka`, `district`, `phoneno`, `adhaarno`) VALUES (ABS('1'), 'Kunal Singh', 'Dehuroad', 'Haveli', 'Pune', '9011525149', '454545454545545');
	INSERT INTO `user` (`id`, `uname`, `village`, `taluka`, `district`, `phoneno`, `adhaarno`) VALUES (ABS('2'), 'Nilesh Singh', 'Dehu', 'Haveli', 'Pune', '2211525149', '6745454545545')	
	INSERT INTO `user` (`id`, `uname`, `village`, `taluka`, `district`, `phoneno`, `adhaarno`) VALUES (ABS('3'), 'abhi wagh', 'pimpri', 'Haveli', 'Pune', '7878675653', '9897867656453')
