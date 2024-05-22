<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');
});

require_once get_stylesheet_directory() . '/how-many-chingu/how-many-chingu.php';

/* Custom Shoping Cart in the top */
function blocksy_child_wc_print_mini_cart() {
    ?>
    <div id="blocksy-child-minicart-top">
        <?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>
            <ul class="blocksy-child-minicart-top-products">
                <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                $_product = $cart_item['data'];
                // Only display if allowed
                if ( ! apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) || ! $_product->exists() || $cart_item['quantity'] == 0 ) continue;
                // Get price
                $product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();
                $product_price = apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $cart_item, $cart_item_key );
                ?>
                <li class="blocksy-child-mini-cart-product clearfix">
                    <span class="blocksy-child-mini-cart-thumbnail">
                        <?php echo $_product->get_image(); ?>
                    </span>
                    <span class="blocksy-child-mini-cart-info">
                        <a class="blocksy-child-mini-cart-title" href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">
                            <h4><?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?></h4>
                        </a>
                        <?php echo apply_filters( 'woocommerce_widget_cart_item_price', '<span class="woffice-mini-cart-price">' . __('Unit Price', 'blocksy-child') . ':' . $product_price . '</span>', $cart_item, $cart_item_key ); ?>
                        <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="blocksy-child-mini-cart-quantity">' . __('Quantity', 'woffice') . ':' . $cart_item['quantity'] . '</span>', $cart_item, $cart_item_key ); ?>
                    </span>
                </li>
                <?php endforeach; ?>
            </ul><!-- end .blocksy-child-mini-cart-products -->
        <?php else : ?>
            <p class="blocksy-child-mini-cart-product-empty"><?php _e( 'No products in the cart.', 'blocksy-child' ); ?></p>
        <?php endif; ?>
        <?php if (sizeof( WC()->cart->get_cart()) > 0) : ?>
            <h4 class="text-center blocksy-child-mini-cart-subtotal"><?php _e( 'Cart Subtotal', 'blocksy-child' ); ?>: <?php echo WC()->cart->get_cart_subtotal(); ?></h4>
            <div class="text-center">
                <a href="<?php echo WC()->cart->get_cart_url(); ?>" class="cart btn btn-default">
                    <i class="fa fa-shopping-cart"></i> <?php _e( 'Cart', 'blocksy-child' ); ?>
                </a>
                <a href="<?php echo WC()->cart->get_checkout_url(); ?>" class="alt checkout btn btn-default">
                    <i class="fa fa-credit-card"></i> <?php _e( 'Checkout', 'blocksy-child' ); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <?php
}