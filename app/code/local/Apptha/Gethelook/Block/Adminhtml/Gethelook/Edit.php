<?php
	
class Apptha_Gethelook_Block_Adminhtml_Gethelook_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "gethelook";
				$this->_controller = "adminhtml_gethelook";
				$this->_updateButton("save", "label", Mage::helper("gethelook")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("gethelook")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("gethelook")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("gethelook_data") && Mage::registry("gethelook_data")->getId() ){

				    return Mage::helper("gethelook")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("gethelook_data")->getId()));

				} 
				else{

				     return Mage::helper("gethelook")->__("Add Item");

				}
		}
}