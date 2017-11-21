jQuery(document).ready(function(){
   jQuery(".msg-btn, .close_msg").click(function(){
		jQuery(".seller_message").toggle();
	});
	
	jQuery('#revieve_coin').click(function() {			
			jQuery('html, body').animate({ scrollTop:jQuery('.coin-collection-container').offset().top	}, 1000);
	});
	
	jQuery('#hair_product').click(function() {			
			jQuery('html, body').animate({ scrollTop:jQuery('.all-product-container').offset().top	}, 1000);
	});
	
});