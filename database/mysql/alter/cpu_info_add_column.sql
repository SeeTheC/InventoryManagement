ALTER TABLE `cc_inventory`.`tbl_cpuinfo` 
CHANGE COLUMN `vendor` `vendor` VARCHAR(100) NULL DEFAULT NULL ,
ADD COLUMN `processor_vendor` VARCHAR(100) NULL AFTER `processor_speed`,
ADD COLUMN `processor_purchase_date` TIMESTAMP NULL AFTER `processor_vendor`,
ADD COLUMN `processor_warrenty` VARCHAR(100) NULL AFTER `processor_purchase_date`,
ADD COLUMN `processor_ops_ref_no` VARCHAR(100) NULL AFTER `processor_warrenty`,
ADD COLUMN `processor_gnatid` VARCHAR(100) NULL AFTER `processor_ops_ref_no`,

ADD COLUMN `motherboard_vendor` VARCHAR(100) NULL AFTER `processor_gnatid`,
ADD COLUMN `motherboard_purchase_date` TIMESTAMP NULL AFTER `motherboard_vendor`,
ADD COLUMN `motherboard_warrenty` VARCHAR(100) NULL AFTER `motherboard_purchase_date`,
ADD COLUMN `motherboard_ops_ref_no` VARCHAR(100) NULL AFTER `motherboard_warrenty`,
ADD COLUMN `motherboard_gnatid` VARCHAR(100) NULL AFTER `motherboard_ops_ref_no`,

ADD COLUMN `ram_vendor` VARCHAR(100) NULL AFTER `motherboard_gnatid`,
ADD COLUMN `ram_purchase_date` TIMESTAMP NULL AFTER `ram_vendor`,
ADD COLUMN `ram_warrenty` VARCHAR(100) NULL AFTER `ram_purchase_date`,
ADD COLUMN `ram_ops_ref_no` VARCHAR(100) NULL AFTER `ram_warrenty`,
ADD COLUMN `ram_gnatid` VARCHAR(100) NULL AFTER `ram_ops_ref_no`,

ADD COLUMN `hdd_vendor` VARCHAR(100) NULL AFTER `ram_gnatid`,
ADD COLUMN `hdd_purchase_date` TIMESTAMP NULL AFTER `hdd_vendor`,
ADD COLUMN `hdd_warrenty` VARCHAR(100) NULL AFTER `hdd_purchase_date`,
ADD COLUMN `hdd_ops_ref_no` VARCHAR(100) NULL AFTER `hdd_warrenty`,
ADD COLUMN `hdd_gnatid` VARCHAR(100) NULL AFTER `hdd_ops_ref_no`;

ALTER TABLE `cc_inventory`.`tbl_cpuinfo` 
ADD COLUMN `counter_no` int(11) NULL AFTER `mid`;


