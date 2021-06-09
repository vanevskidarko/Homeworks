<?php

require 'product.php';
$product = new Product();

$product->setImages("https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/hoodie-2.jpg");

echo $product;