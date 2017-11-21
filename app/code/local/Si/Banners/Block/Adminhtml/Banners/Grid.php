<?php

class Si_Banners_Block_Adminhtml_Banners_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("bannersGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("banners/banners")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("banners")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("title", array(
				"header" => Mage::helper("banners")->__("Title"),
				"index" => "title",
				));
				$this->addColumn("position", array(
				"header" => Mage::helper("banners")->__("Position"),
				"index" => "position",
				));
				$this->addColumn("action_url", array(
				"header" => Mage::helper("banners")->__("Action Url"),
				"index" => "action_url",
				));
				$this->addColumn('banner_position', array(
				'header' => Mage::helper('banners')->__('Banner Postion home page'),
				'index' => 'banner_position',
				'type' => 'options',
				'options'=>Si_Banners_Block_Adminhtml_Banners_Grid::getOptionArray9(),				
				));

				$this->addColumn('status', array(
				'header' => Mage::helper('banners')->__('Status'),
				'index' => 'status',
				'type' => 'options',
				'options'=>Si_Banners_Block_Adminhtml_Banners_Grid::getOptionArray8(),				
				));
						

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
			$this->getMassactionBlock()->addItem('remove_banners', array(
					 'label'=> Mage::helper('banners')->__('Remove Banners'),
					 'url'  => $this->getUrl('*/adminhtml_banners/massRemove'),
					 'confirm' => Mage::helper('banners')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray8()
		{
            $data_array=array(); 
			$data_array[1]='Enabled';
			$data_array[0]='Disabled';
            return($data_array);
		}
		static public function getValueArray8()
		{
            $data_array=array();
			foreach(Si_Banners_Block_Adminhtml_Banners_Grid::getOptionArray8() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray9()
		{
            $data_array=array(); 
			$data_array[0]= "-- Select option --";		
            $data_array[1]= "Home Main Banner";		
            $data_array[2]= "Premium Bundlenaires";
            return($data_array);
		}
		
		static public function getValueArray9()
		{
            
            $data_array=array();
			foreach(Si_Banners_Block_Adminhtml_Banners_Grid::getOptionArray9() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}