---
---- Create Table '#__lds_status'
---
CREATE TABLE IF NOT EXISTS `#__lds_status` (
`id` INT(1) NULL,
`status` CHAR(50) NULL
)  TYPE=MyISAM CHARACTER SET `utf8` COLLATE `utf8_general_ci`;

---
---- Create Table '#__lds_ordertype'
---
CREATE TABLE IF NOT EXISTS `#__lds_ordertype` (
`id` INT(1) NULL,
`ordertype` CHAR(50) NULL
) TYPE=MyISAM CHARACTER SET `utf8` COLLATE `utf8_general_ci`;

---
---- Create Table '#__lds_version'
---
CREATE TABLE IF NOT EXISTS `#__lds_version` (
`id` INT(3) NULL,
`version` CHAR(50) NULL
)  TYPE=MyISAM CHARACTER SET `utf8` COLLATE `utf8_general_ci`;

---
---- Create Table '#__lds_log'
---
CREATE TABLE IF NOT EXISTS `#__lds_log` (
`id` INT(10) NULL,
`user_id` INT(10) NULL,
`date_modify` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
`orders_id` INT(11) NULL,
`status_id` INT(1) NULL,
`remarks` VARCHAR(500) NULL,
`tablename` CHAR(50) NULL
)  TYPE=MyISAM CHARACTER SET `utf8` COLLATE `utf8_general_ci`;

---
---- Create Table '#__lds_orders'
---
CREATE TABLE IF NOT EXISTS `#__lds_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dealer_number` int(10) NOT NULL,
  `customer_number` int(10) NOT NULL,
  `ind_number` int(4) NOT NULL,
  `order_type` tinyint(1) NOT NULL,
  `from_version` varchar(10) NOT NULL,
  `to_version` varchar(10) NOT NULL,
  `desired_date` date NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `timestamp_new` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
)  TYPE=MyISAM CHARACTER SET `utf8` COLLATE `utf8_general_ci`;

