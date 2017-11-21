<?php
class Apptha_Gethelook_Block_Adminhtml_Gethelook_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("gethelook_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("gethelook")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("gethelook")->__("Style Information"),
				"title" => Mage::helper("gethelook")->__("Style Information"),
				"content" => $this->getLayout()->createBlock("gethelook/adminhtml_gethelook_edit_tab_form")->toHtml(),
				));
				
				$this->addTab("products_section", array(
				"label" => Mage::helper("gethelook")->__("Products assign"),
				"title" => Mage::helper("gethelook")->__("Products assign"),
				"content" => $this->getLayout()->createBlock("gethelook/adminhtml_gethelook_edit_tab_products")->setTemplate("custom/products.phtml")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
