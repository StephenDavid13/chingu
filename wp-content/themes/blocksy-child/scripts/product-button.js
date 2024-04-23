jQuery(document).ready(function($) {
    $('.single-product-add-to-cart').on('click', function(e) {
        e.preventDefault();
        var productId = '531';
        var quantity = 1;

        $.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'woocommerce_ajax_add_to_cart',
                product_id: productId,
                quantity: quantity,
                security: wc_add_to_cart_params.nonce
            },
            success: function(response) {
                if (response && response.success) {
                    window.location.href = wc_add_to_cart_params.cart_url;
                } else {
                    console.error('Error adding product to cart:', response);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });
    
    $('.ten-pack-product-add-to-cart').on('click', function(e) {
        e.preventDefault();
        var productId = '538';
        var quantity = 1;

        $.ajax({
            type: 'POST',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'woocommerce_ajax_add_to_cart',
                product_id: productId,
                quantity: quantity,
                security: wc_add_to_cart_params.nonce
            },
            success: function(response) {
                if (response && response.success) {
                    window.location.href = wc_add_to_cart_params.cart_url;
                } else {
                    console.error('Error adding product to cart:', response);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });
});
