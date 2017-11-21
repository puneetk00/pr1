<?php 

ini_set("soap.wsdl_cache_enabled", 0);
$proxy = new SoapClient('http://www.forevernew.co.in/index.php/api/soap/?wsdl');

// If somestuff requires api authentification,
// then get a session token
$sessionId = $proxy->login('apiuser', 'testpassword');

try{
// Create a quote, get quote identifier
//$shoppingCartId = 29695; //845;
//$shoppingCartId = $proxy->call( $sessionId, 'cart.create', 2 );
//print_r($shoppingCartId); //die;



//$resultCustomerSet = $proxy->call($sessionId, 'customwebservice.totals', array(array( 'store' => '2', 'id' => '379') ) );
// print_r($resultCustomerSet);

// die; 


//Set customer, for example guest
// $customerAsGuest = array(
    // "firstname" => ,
	// "lastname" => ,
    // "email" => ,
    // "website_id" => "1",
    // "store_id" => "2",
    // "mode" => "guest"
    
// );

 $customerAsGuest = array(
'firstname' => 'Kaory',
'lastname' => 'Makimura',
'email' => 'pdsafdk@magento.com',
"website_id" => 1,
"store_id" => 2,
'password' => 'dsafds',
'mode' => 'guest'
);
 
 
//$resultCustomerSet = $proxy->call($sessionId, 'cart_customer.set', array( $shoppingCartId, $customerAsGuest) );
//print_r($resultCustomerSet);

// Set customer addresses, for example guest's addresses
 $arrAddresses = array(
    array(
        "mode" => "shipping",
        "firstname" => "testFirstname",
        "lastname" => "testLastname",
        "company" => "testCompany",
        "street" => "testStreet",
        "city" => "testCity",
        "region" => "",
		"region_id" => "518",
        "postcode" => "201301",
        "country_id" => "IN",
        "telephone" => "0123456789",
        "fax" => "0123456789",
        "is_default_shipping" => 0,
        "is_default_billing" => 0
    ),
    array(
        "mode" => "billing",
        "firstname" => "testFirstname",
        "lastname" => "testLastname",
        "company" => "testCompany",
        "street" => "testStreet",
        "city" => "testCity",
        "region" => "",
		"region_id" => "518",
        "postcode" => "201301",
        "country_id" => "IN",
        "telephone" => "0123456789",
        "fax" => "0123456789",
        "is_default_shipping" => 0,
        "is_default_billing" => 0
    )
); 
// $arrAddresses = array(
   
    // array(
        // "mode" => "billing",
        // "firstname" => NULL,
        // "lastname" => NULL,
        // "company" => NULL,
        // "street" => NULL,
        // "city" => NULL,
        // "region" => NULL,
		// "region_id" => NULL,
        // "postcode" => NULL,
        // "country_id" => NULL,
        // "telephone" => NULL,
        // "is_default_shipping" => 1,
        // "is_default_billing" => 0
    // )
// );

//$resultCustomerAddresses = $proxy->call($sessionId, "cart_customer.addresses", array($shoppingCartId, $arrAddresses , 2));




// add products into shopping cart
// $license = $proxy->call($sessionId, "cart.license", $shoppingCartId);
// print_r($license);

	$arrProducts = array( 
		array(
			'product_id' => 825,   // config product id
			'sku' => '2023616203007',
			/* 'super_attribute' => array(
				 201 => 3007,
				 142 => 2998
				
			), */ 
			'qty' => '1'
		) 
	);   
	
 /* $arrProducts = array( 
		array(
			'product_id' => 142,   // config product id
			'sku' => 'giftcard',
			//'super_attribute' => array(
				 // 92 => 18,
				 // 142 => 12
				
			// ),
			'options' => array(
			3 => 1,
			2 => 'fdafdasf dafdsad',
			1 => 'test test test terst'
			),
			'qty' => '1'
		) 
	);   */ 

//$resultCartProductAdd = $proxy->call($sessionId, "cart_product.add", array($shoppingCartId, $arrProducts, 2));
//echo "cart_product.add<br>"; print_r( $resultCartProductAdd );

/* $couponCode = "10OFF";
$resultCartCouponRemove = $proxy->call(
	$sessionId,
	"cart_coupon.add",
	array(
		$shoppingCartId,
		$couponCode
	)
); */
/* $resultCartCouponRemove = $proxy->call(
	$sessionId,
	"cart_coupon.remove",
	array(
		$shoppingCartId
	)
); */

//get list of products
//$shoppingCartProducts = $proxy->call($sessionId, "cart_product.list", array($shoppingCartId));
///print_r( $shoppingCartProducts );

//$result = $proxy->call($sessionId,'cart.totals', $shoppingCartId, 2);
//print_r($result);


// get list of shipping methods
//$resultShippingMethods = $proxy->call($sessionId, "cart_shipping.list", array($shoppingCartId));
//echo "<pre>";
//print_r( $resultShippingMethods );
//$catid = 6;
$filter = array(/* "size"=>2994, 'color' => 3027 */);
//$array = array("categoryid" => 263, "filters" => $filter, "page"=> 1, "img_width" => 500);
$array = array("store" => 2, "id" => 8994);

$resultShippingMethods = $proxy->call($sessionId, "customwebservice.configpr", array($array)); 
//$resultShippingMethods = $proxy->call($sessionId, "catalog_product.info", 8809); 29506
//$resultShippingMethods = $proxy->call($sessionId, "customwebservice.quoteclr", array($array)); 
//echo "<pre>";
print_r( $resultShippingMethods );

//$resultShippingMethods = $proxy->call($sessionId, "cart.info", array($shoppingCartId)); 
//echo "<pre>";
//print_r( $resultShippingMethods );



}catch(Exception $e){
 die($e->getMessage());
}

die('<br /> working fine');
?>