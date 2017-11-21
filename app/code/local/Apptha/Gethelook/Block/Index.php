<?php   
class Apptha_Gethelook_Block_Index extends Mage_Core_Block_Template{   

 public function getmediaurl($media){
		$url = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).$media;
		return $url; 
 }



}