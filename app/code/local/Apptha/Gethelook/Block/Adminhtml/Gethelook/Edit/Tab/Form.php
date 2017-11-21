<?php
class Apptha_Gethelook_Block_Adminhtml_Gethelook_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("gethelook_form", array("legend"=>Mage::helper("gethelook")->__("Item information")));

				
						$fieldset->addField("name", "text", array(
						"label" => Mage::helper("gethelook")->__("Style Name"),
						"name" => "name",
						));
									
						$fieldset->addField('image1', 'image', array(
						'label' => Mage::helper('gethelook')->__('Image 1'),
						'name' => 'image1',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						$fieldset->addField('image2', 'image', array(
						'label' => Mage::helper('gethelook')->__('Image 2'),
						'name' => 'image2',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						$fieldset->addField('image3', 'image', array(
						'label' => Mage::helper('gethelook')->__('Image 3'),
						'name' => 'image3',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						$fieldset->addField('image4', 'image', array(
						'label' => Mage::helper('gethelook')->__('Image 4'),
						'name' => 'image4',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						$fieldset->addField('image5', 'image', array(
						'label' => Mage::helper('gethelook')->__('Image 5'),
						'name' => 'image5',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						$fieldset->addField('image6', 'image', array(
						'label' => Mage::helper('gethelook')->__('Image 6'),
						'name' => 'image6',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField('category_products', 'hidden', array(
						'label' => Mage::helper('gethelook')->__('Image 6'),
						'name' => 'category_products',
						));
				

				if (Mage::getSingleton("adminhtml/session")->getGethelookData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getGethelookData());
					Mage::getSingleton("adminhtml/session")->setGethelookData(null);
				} 
				elseif(Mage::registry("gethelook_data")) {
				    $form->setValues(Mage::registry("gethelook_data")->getData());
				}
				return parent::_prepareForm();
		}
}
