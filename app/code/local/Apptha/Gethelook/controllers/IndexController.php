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
 * @package     Apptha_Marketplace
 * @version     1.9.1
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2016 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 * 
 */


class Apptha_Gethelook_IndexController extends Mage_Core_Controller_Front_Action{
	
	protected function _getSession() {
	  return Mage::getSingleton ( 'customer/session' );
	}
	
	
  public function indexAction() {

   if (! $this->_getSession ()->isLoggedIn ()) {
    Mage::getSingleton ( 'core/session' )->addError ( $this->__ ( 'You must have a Seller Account to access this page' ) );
    $this->_redirect ( 'marketplace/seller/login' );
    return;
   }
   
   $this->loadLayout ();
   $this->renderLayout ();
  
  }
  
  public function NewAction() {

   if (! $this->_getSession ()->isLoggedIn ()) {
    Mage::getSingleton ( 'core/session' )->addError ( $this->__ ( 'You must have a Seller Account to access this page' ) );
    $this->_redirect ( 'marketplace/seller/login' );
    return;
   }
   
   $this->loadLayout ();
   $this->renderLayout ();
  
  }
  
  public function saveAction()
	{

		$post_data=$this->getRequest()->getPost();
		//echo "<pre>";
		//print_r($post_data); die;

		if ($post_data) {

			try {

								
						 //save image
				try{

					if((bool)$post_data['image1']['delete']==1) {

								$post_data['image1']='';

					}
					else {

						unset($post_data['image1']);

						if (isset($_FILES)){

							if ($_FILES['image1']['name']) {

								if($this->getRequest()->getParam("id")){
									$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
									if($model->getData('image1')){
											$io = new Varien_Io_File();
											$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image1'))));	
									}
								}
											$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
											$uploader = new Varien_File_Uploader('image1');
											$uploader->setAllowedExtensions(array('jpg','png','gif'));
											$uploader->setAllowRenameFiles(false);
											$uploader->setFilesDispersion(false);
											$destFile = $path.$_FILES['image1']['name'];
											$filename = $uploader->getNewFileName($destFile);
											$uploader->save($path, $filename);

											$post_data['image1']='gethelook/gethelook/'.$filename;
							}
						}
					}

				} catch (Exception $e) {
						Mage::getSingleton('core/session')->addError($e->getMessage());
						$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
						return;
				}
		//save image

						 //save image
				try{

					if((bool)$post_data['image2']['delete']==1) {

								$post_data['image2']='';

					}
					else {

						unset($post_data['image2']);

						if (isset($_FILES)){

							if ($_FILES['image2']['name']) {

								if($this->getRequest()->getParam("id")){
									$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
									if($model->getData('image2')){
											$io = new Varien_Io_File();
											$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image2'))));	
									}
								}
											$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
											$uploader = new Varien_File_Uploader('image2');
											$uploader->setAllowedExtensions(array('jpg','png','gif'));
											$uploader->setAllowRenameFiles(false);
											$uploader->setFilesDispersion(false);
											$destFile = $path.$_FILES['image2']['name'];
											$filename = $uploader->getNewFileName($destFile);
											$uploader->save($path, $filename);

											$post_data['image2']='gethelook/gethelook/'.$filename;
							}
						}
					}

				} catch (Exception $e) {
						Mage::getSingleton('core/session')->addError($e->getMessage());
						$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
						return;
				}
		//save image

						 //save image
				try{

					if((bool)$post_data['image3']['delete']==1) {

								$post_data['image3']='';

					}
					else {

						unset($post_data['image3']);

						if (isset($_FILES)){

							if ($_FILES['image3']['name']) {

								if($this->getRequest()->getParam("id")){
									$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
									if($model->getData('image3')){
											$io = new Varien_Io_File();
											$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image3'))));	
									}
								}
											$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
											$uploader = new Varien_File_Uploader('image3');
											$uploader->setAllowedExtensions(array('jpg','png','gif'));
											$uploader->setAllowRenameFiles(false);
											$uploader->setFilesDispersion(false);
											$destFile = $path.$_FILES['image3']['name'];
											$filename = $uploader->getNewFileName($destFile);
											$uploader->save($path, $filename);

											$post_data['image3']='gethelook/gethelook/'.$filename;
							}
						}
					}

				} catch (Exception $e) {
						Mage::getSingleton('core/session')->addError($e->getMessage());
						$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
						return;
				}
		//save image

						 //save image
				try{

						if((bool)$post_data['image4']['delete']==1) {

									$post_data['image4']='';

						}
						else {

							unset($post_data['image4']);

							if (isset($_FILES)){

								if ($_FILES['image4']['name']) {

									if($this->getRequest()->getParam("id")){
										$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
										if($model->getData('image4')){
												$io = new Varien_Io_File();
												$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image4'))));	
										}
									}
												$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
												$uploader = new Varien_File_Uploader('image4');
												$uploader->setAllowedExtensions(array('jpg','png','gif'));
												$uploader->setAllowRenameFiles(false);
												$uploader->setFilesDispersion(false);
												$destFile = $path.$_FILES['image4']['name'];
												$filename = $uploader->getNewFileName($destFile);
												$uploader->save($path, $filename);

												$post_data['image4']='gethelook/gethelook/'.$filename;
								}
							}
						}

				} catch (Exception $e) {
						Mage::getSingleton('core/session')->addError($e->getMessage());
						$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
						return;
				}
		//save image

						 //save image
				try{

					if((bool)$post_data['image5']['delete']==1) {

								$post_data['image5']='';

					}
					else {

					unset($post_data['image5']);

							if (isset($_FILES)){

								if ($_FILES['image5']['name']) {

									if($this->getRequest()->getParam("id")){
										$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
										if($model->getData('image5')){
												$io = new Varien_Io_File();
												$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image5'))));	
										}
									}
												$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
												$uploader = new Varien_File_Uploader('image5');
												$uploader->setAllowedExtensions(array('jpg','png','gif'));
												$uploader->setAllowRenameFiles(false);
												$uploader->setFilesDispersion(false);
												$destFile = $path.$_FILES['image5']['name'];
												$filename = $uploader->getNewFileName($destFile);
												$uploader->save($path, $filename);

												$post_data['image5']='gethelook/gethelook/'.$filename;
								}
							}
						}

				} catch (Exception $e) {
						Mage::getSingleton('core/session')->addError($e->getMessage());
						$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
						return;
				}
		//save image

						 //save image
				try{

		if((bool)$post_data['image6']['delete']==1) {

					$post_data['image6']='';

		}
		else {

			unset($post_data['image6']);

			if (isset($_FILES)){

				if ($_FILES['image6']['name']) {

					if($this->getRequest()->getParam("id")){
						$model = Mage::getModel("gethelook/gethelook")->load($this->getRequest()->getParam("id"));
						if($model->getData('image6')){
								$io = new Varien_Io_File();
								$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image6'))));	
						}
					}
								$path = Mage::getBaseDir('media') . DS . 'gethelook' . DS .'gethelook'.DS;
								$uploader = new Varien_File_Uploader('image6');
								$uploader->setAllowedExtensions(array('jpg','png','gif'));
								$uploader->setAllowRenameFiles(false);
								$uploader->setFilesDispersion(false);
								$destFile = $path.$_FILES['image6']['name'];
								$filename = $uploader->getNewFileName($destFile);
								$uploader->save($path, $filename);

								$post_data['image6']='gethelook/gethelook/'.$filename;
				}
			}
		}

				} catch (Exception $e) {
						Mage::getSingleton('core/session')->addError($e->getMessage());
						$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
						return;
				}
		//save image


								$model = Mage::getModel("gethelook/gethelook")
								->addData($post_data)
								->setId($this->getRequest()->getParam("id"))
								->save();

								Mage::getSingleton("core/session")->addSuccess(Mage::helper("gethelook")->__("Gethelook was successfully saved"));
								Mage::getSingleton("core/session")->setGethelookData(false);

								if ($this->getRequest()->getParam("back")) {
									$this->_redirect("*/*/edit", array("id" => $model->getId()));
									return;
								}
								$this->_redirect("*/*/");
								return;
							} 
							catch (Exception $e) {
								Mage::getSingleton("core/session")->addError($e->getMessage());
								Mage::getSingleton("core/session")->setGethelookData($this->getRequest()->getPost());
								$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
							return;
							}

						}
						$this->_redirect("*/*/");
		}
		
		public function editAction()
		{			    
			    $id = $this->getRequest()->getParam("id");
				
				$model = Mage::getModel("gethelook/gethelook")->load($id);
				
				if ($model->getId()) {
					Mage::register("gethelook_data", $model);
					$this->loadLayout();
					$this->renderLayout();
				} 
				else {
					Mage::getSingleton("core/session")->addError(Mage::helper("gethelook")->__("Item does not exist."));
					$this->_redirect("*/*/");
				}
		}
		
		public function deleteAction()
		{
				if( $this->getRequest()->getParam("id") > 0 ) {
					try {
						$model = Mage::getModel("gethelook/gethelook");
						$model->setId($this->getRequest()->getParam("id"))->delete();
						Mage::getSingleton("core/session")->addSuccess(Mage::helper("gethelook")->__("Item was successfully deleted"));
						$this->_redirect("*/*/");
					} 
					catch (Exception $e) {
						Mage::getSingleton("core/session")->addError($e->getMessage());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					}
				}
				$this->_redirect("*/*/");
		}
 
}