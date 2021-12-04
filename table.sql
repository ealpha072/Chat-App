CREATE TABLE `chat-app`.`users` ( `id` INT(10) NOT NULL AUTO_INCREMENT , 
`firstname` TEXT NOT NULL , 
`lastname` TEXT NOT NULL , 
`email` VARCHAR(100) NOT NULL , 
`photo` VARCHAR(100) NOT NULL , 
`password` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) 
ENGINE = InnoDB;

ALTER TABLE `users` ADD `unique_id` INT(255) NOT NULL AFTER `id`;
ALTER TABLE `users` ADD `status` TEXT NOT NULL AFTER `password`;


CREATE TABLE `chat-app`.`messages` ( `msg_id` INT NOT NULL AUTO_INCREMENT , 
`incoming_msg_id` INT(255) NOT NULL , 
`outgoing_msg_id` INT(255) NOT NULL , 
`msg` INT(255) NOT NULL , PRIMARY KEY (`msg_id`)) ENGINE = InnoDB;