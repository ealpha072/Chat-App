CREATE TABLE `chat-app`.`users` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `firstname` TEXT NOT NULL , 
`lastname` TEXT NOT NULL , 
`email` VARCHAR(100) NOT NULL , 
`photo` VARCHAR(100) NOT NULL , 
`password` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) 
ENGINE = InnoDB;