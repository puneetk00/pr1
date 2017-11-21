<?php

class Apptha_Gethelook_Block_Adminhtml_Gethelook_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("gethelookGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("gethelook/gethelook")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("gethelook")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("name", array(
				"header" => Mage::helper("gethelook")->__("Style Name"),
				"index" => "name",
				));
				
			//$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			//$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_gethelook', array(
					 'label'=> Mage::helper('gethelook')->__('Remove Gethelook'),
					 'url'  => $this->getUrl('*/adminhtml_gethelook/massRemove'),
					 'confirm' => Mage::helper('gethelook')->__('Are you sure?')
				));
			return $this;
		}
			

}