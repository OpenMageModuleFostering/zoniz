<?php
class Zoniz_Bar_Adminhtml_WebController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        
        $block = $this->getLayout()->getBlock('web');
        $barModel = Mage::getModel('bar/bar')->load(1);
		$account_name = $barModel->getAccountName();
		$stream_name = $barModel->getStreamName();
		
    	$block->setData('account_name',$account_name);
    	$block->setData('stream_name',$stream_name);
		
    	$this->renderLayout();
    }
    
    public function postAction()
    {
        $post = $this->getRequest()->getPost();
        try {
            if (empty($post)) {
                Mage::throwException($this->__('Invalid form data.'));
            }
            $barModel = Mage::getModel('bar/bar');
            $item = $barModel->load(1);
			
			if(!$item->getId()) {
				$barModel->setAccountName($post['account_name'])
                    ->setStreamName($post['stream_name'])
                    ->save();
			} else {
				$barModel->setId(1)
            		->setAccountName($post['account_name'])
                    ->setStreamName($post['stream_name'])
                    ->save();
			}
                    
            $message = $this->__('Your form has been submitted successfully.');
            Mage::getSingleton('adminhtml/session')->addSuccess($message);
        } catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        }
        $this->_redirect('*/*');
    }
}