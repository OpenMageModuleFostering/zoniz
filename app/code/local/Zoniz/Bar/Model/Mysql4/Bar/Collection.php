<?php
class Zoniz_Bar_Model_Mysql4_Bar_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{ 
    public function _construct()
    {
		$this->_init('bar/bar');
    }
}