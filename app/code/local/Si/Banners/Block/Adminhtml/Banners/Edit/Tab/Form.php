<?php
class Si_Banners_Block_Adminhtml_Banners_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("banners_form", array("legend"=>Mage::helper("banners")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("banners")->__("Title"),
						"name" => "title",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('banners')->__('Image Select'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("description", "textarea", array(
						"label" => Mage::helper("banners")->__("Description"),
						"name" => "description",
						));
						
						$fieldset->addField('banner_position', 'select', array(
						'label'     => Mage::helper('banners')->__('Banner Postion home page'),
						'values'   => Si_Banners_Block_Adminhtml_Banners_Grid::getValueArray9(),
						'name' => 'banner_position',
						));
					
						$fieldset->addField("position", "text", array(
						"label" => Mage::helper("banners")->__("Position"),
						"name" => "position",
						));
					
						$fieldset->addField("action_url", "text", array(
						"label" => Mage::helper("banners")->__("Action Url"),
						"name" => "action_url",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('banners')->__('Status'),
						'values'   => Si_Banners_Block_Adminhtml_Banners_Grid::getValueArray8(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getBannersData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getBannersData());
					Mage::getSingleton("adminhtml/session")->setBannersData(null);
				} 
				elseif(Mage::registry("banners_data")) {
				    $form->setValues(Mage::registry("banners_data")->getData());
				}
				return parent::_prepareForm();
		}
}
