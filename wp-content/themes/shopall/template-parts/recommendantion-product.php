<?php

$args = array(
    'status' => 'publish',
    'limit' => 10,
    'orderby' => 'date',
    'order' => 'DESC'
);
$products = wc_get_products( $args );

foreach ( $products as $product ) {

    $product_one = wc_get_product( $product);
    echo $product_one->get_image();
    
    // echo '<div class="product">';
    // echo '<h4><a href="' . esc_url( $product->get_permalink() ) . '">'.'</a></h4>';
    // echo '<div class="product-image">' . $product->get_image() . '</div>';
    // echo '<div class="product-price">' . $product->get_price_html() . '</div>';
    // echo '</div>';
}
?>