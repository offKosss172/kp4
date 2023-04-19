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

}
?>