<?php

$args = array(
    'status' => 'publish',
    'limit' => 6,
    'orderby' => 'date',
    'order' => 'DESC'
);
$products = wc_get_products( $args );

foreach ( $products as $product ) {

    $prod_one = wc_get_product( $product);
    //echo $prod_one->get_image();
    //wc_get_template_part('content', 'product');

    ?>
    <div class="block-recommendantion-kosss-test">
        <div class="product type-product has-post-thumbnail shipping-taxable purchasable product-type-simple">
            <a href="<?php echo esc_url( $prod_one->get_permalink() ) ?>" class="woocommerce-link woocommerce-loop-product__link">
            <img width="273" height="300" src="<?php echo wp_get_attachment_image_url( $product->get_image_id(), 'thumbnail' ) ?>" 
            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy">
            <h5 class="woocommerce-loop-product__title"><?php echo $prod_one->get_name() ?></h5> 
                <span class="price">
                    <span class="woocommerce-Price-amount amount">
                        <bdi>
                            <span class="woocommerce-Price-currencySymbol">€<?php echo $prod_one->get_price() ?></span>
                        </bdi>
                    </span>
                </span>
            </a>
            <span>
            <a href="?add-to-cart=<?php echo $prod_one->get_id() ?>" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" 
            data-product_id="<?php echo $prod_one->get_id() ?>" data-product_sku="" aria-label="Додайте “<?php echo $prod_one->get_name() ?>” до кошика" rel="nofollow">Додати в кошик</a></li>
            </span>
        </div>
    </div>
<?php
    // echo '<div class="product">';
    // echo '<div class="product-image">' . $prod_one->get_image() . '</div>';
    // echo '<h4 class="woocommerce-loop-product__title"><a href="' . esc_url( $prod_one->get_permalink() ) . '">'. $prod_one->get_name() .'</a></h4>';
    // echo '<div class="product-price">' . $prod_one->get_price_html() . '</div>';
    // echo '</div>';

}
?>
