<?php
/**
 * Created by PhpStorm.
 * User: caian
 * Date: 05/12/2018
 * Time: 08:26
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->run("
ALTER TABLE '{$installer->getTable('sales/quote_payment')}'
ADD 'boleto_token' VARCHAR( 255 ) NOT NULL;
  
ALTER TABLE '{$installer->getTable('sales/order_payment')}' 
ADD 'boleto_token' VARCHAR( 255 ) NOT NULL;
");

$installer->endSetup();