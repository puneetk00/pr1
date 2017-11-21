<?php
/**
 * FAQ accordion for Magento

 */

$installer = $this;

$installer->startSetup();

$installer->run("

ALTER TABLE `{$this->getTable('tv_faq/faq')}`
ADD COLUMN `position` INT(10);

");

$installer->endSetup();
