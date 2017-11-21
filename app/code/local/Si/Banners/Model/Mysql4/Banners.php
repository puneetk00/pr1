<?php
class Si_Banners_Model_Mysql4_Banners extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("banners/banners", "id");
    }
}