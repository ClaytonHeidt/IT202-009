ALTER table Users ADD COLUMN visibility tinyint(1) 
default 0
COMMENT 'Boolean of private (0) or public (1) profile';