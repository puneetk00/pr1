<?php


class Apptha_Gethelook_Block_Adminhtml_Gethelook extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_gethelook";
	$this->_blockGroup = "gethelook";
	$this->_headerText = Mage::helper("gethelook")->__("Gethelook Manager");
	$this->_addButtonLabel = Mage::helper("gethelook")->__("Add New Item");
	parent::__construct();
	
	}

}