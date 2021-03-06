<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_Sociallogin
 * @version     0.1.8
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2014 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 * */
?>
<?php

$installer = $this;

$installer->startSetup ();

$installer = new Mage_Eav_Model_Entity_Setup ( 'core_setup' );

$installer->addAttribute ( 'customer', 'login_provider', array (
        'label' => 'Provider',
        'type' => 'varchar',
        'input' => 'text',
        'visible' => true,
        'required' => false 
) );

$eavConfig = Mage::getSingleton ( 'eav/config' );
$attribute = $eavConfig->getAttribute ( 'customer', 'login_provider' );
$attribute->setData ( 'used_in_forms', array (
        'adminhtml_customer',
        'customer_account_create',
        'customer_account_edit' 
) ); 
// enable all action

$attribute->save ();

$installer->endSetup (); 