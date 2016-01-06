<?php
 require_once './app/Mage.php';
Mage::app();
Mage::setIsDeveloperMode(true);
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(0);
ini_set('memory_limit','3048M');
//ensure to set current store as product attributes are store specific
//Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
//$productCollection = Mage::getModel('catalog/product')->getCollection();
 $categoryid = $_GET['cat'];
if($categoryid==''){
echo "Please provide category id";	
exit;
}
    $category = new Mage_Catalog_Model_Category();
    $category->load($categoryid);
    $productCollection = $category->getProductCollection();
	$i=0;
foreach($productCollection as $product) 
{
    $attributeCode = "shipping_details";
    echo "\n".'updating '.$product->getSku()."...".$i."<br>";
	//echo $product->getName()."<br>";
    $product = Mage::getModel('catalog/product')
                   ->load($product->getEntityId());
    $product->setData($attributeCode, "<p>FREE shipping on all orders over AED 140 (within UAE).<br>Flat Rate on All orders within GCC of AED 50.<br>Express International Shipping of USD 22.<br>Standard International Shipping of USD 10.<br>Please see Return and Exchange policy.<br>")->getResource()->saveAttribute($product, $attributeCode);
$i++;
}