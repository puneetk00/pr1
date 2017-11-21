<?php
class Si_Banners_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
				/* $collection = Mage::getModel('catalog/product')->getCollection();
				$collection->getSelect()->join(array('refer' => 'test'), 'refer.id = e.entity_id'); 
				$collection->addAttributeToSelect('*');
				echo "<pre>";
				//print_r($collection);
				foreach($collection as $_product){
					print_r($_product->getData());
				} */
		
		$imageUrl = 'http://synapse.asia/marketplace9196/media/marketplace/resized/frame-j_3_3.png';
        // create folder
        if(!file_exists("./media/customimage/resized"))
        mkdir("./media/customimage/resized",0777);
        
        // get image name
        $imageName = substr(strrchr($imageUrl,"/"),1);
        
        // resized image path (media/catalog/category/resized/IMAGE_NAME)
        $imageResized = Mage::getBaseDir('media').DS."customimage".DS."resized".DS.$imageName;
        
        // changing image url into direct path
        $dirImg = Mage::getBaseDir().str_replace("/",DS,strstr($imageUrl,'/media'));
        
        // if resized image doesn't exist, save the resized image to the resized directory
        
            $imageObj = new Varien_Image($dirImg);
            $imageObj->constrainOnly(TRUE);
			$imageObj->keepTransparency(true);
            $imageObj->keepAspectRatio(TRUE);
            $imageObj->keepFrame(FALSE);
            $imageObj->resize(300, 300);
            $imageObj->save($imageResized);
        
        
        $newImageUrl = Mage::getBaseUrl('media')."customimage/resized/".$imageName;
        echo "<img src='$newImageUrl' />";
				
    }
}