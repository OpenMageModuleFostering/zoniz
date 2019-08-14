<?php
class Zoniz_Bar_Block_Footer extends Mage_Core_Block_Template
{
    function __construct() {
		parent::__construct();
		$barModel = Mage::getModel('bar/bar')->load(1);
		$account_name = $barModel->getAccountName();
		$stream_name = $barModel->getStreamName();
		
    	$this->setData('account_name',$account_name);
    	$this->setData('stream_name',$stream_name);
    }
}
