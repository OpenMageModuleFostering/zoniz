<?php

class Zoniz_Bar_Model_Mysql4_Bar extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
    	$this->_init('bar/bar', 'id');
    }
}