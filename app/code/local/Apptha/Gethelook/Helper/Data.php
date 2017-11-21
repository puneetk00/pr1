<?php
class Apptha_Gethelook_Helper_Data extends Mage_Core_Helper_Abstract
{
	
	public function resize($img, $size){
		$path_size = str_replace(',','x',$size);
		// actual path of image
		$_imageUrl = Mage::getBaseDir('media').DS.$img;

		// path of the resized image to be saved
		// here, the resized image is saved in media/resized folder
		$imageResized = Mage::getBaseDir('media').DS."gethelook".DS."resized".DS.$path_size.DS.$img;

		// resize image only if the image file exists and the resized image file doesn't exist
		// the image is resized proportionally with the width/height 135px
		if (!file_exists($imageResized) && file_exists($_imageUrl)) :
		$imageObj = new Varien_Image($_imageUrl);
		$imageObj->constrainOnly(TRUE);
		$imageObj->keepAspectRatio(TRUE);
		$imageObj->keepFrame(FALSE);
		$imageObj->resize($size);
		$imageObj->save($imageResized);
		endif;
		
		return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).DS.'gethelook'.DS."resized".DS.$path_size.DS.$img;
	
	}
}
	 