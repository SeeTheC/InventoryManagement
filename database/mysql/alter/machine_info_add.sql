ALTER TABLE `cc_inventory`.`tbl_machineinfo` 
ADD COLUMN `subsection_id` INT NULL AFTER `section_id`;

ALTER TABLE `cc_inventory`.`tbl_machineinfo` 
ADD CONSTRAINT `fk_tbl_machineinfo_subsection`
  FOREIGN KEY (`subsection_id`)
  REFERENCES `cc_inventory`.`tbl_subsection` (`id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
