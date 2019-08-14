<?php

class Zoniz_Bar_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	$this->loadLayout();	
    	$block = $this->getLayout()->createBlock(
		    'Mage_Core_Block_Template',
		    'bar',
			array('template' => 'bar/webcode.phtml')
		);
		$barModel = Mage::getModel('bar/bar')->load(1);
		$account_name = $barModel->getAccountName();
		$stream_name = $barModel->getStreamName();
		
    	$block->setData('account_name',$account_name);
    	$block->setData('stream_name',$stream_name);
    	
    	$this->getLayout()->getBlock('before_body_end')->append($block);
    	$this->renderLayout();
    }
} 
