<?php

function getProducts($filename) {
    

    $file = fopen($filename, 'r');

    $result = [];

    while(!feof($file)) {
        $result[] = fgetcsv($file);
    }
    fclose($file);

    return $result;
}


function deleteProduct($productId) {
    $products = getProducts();
    // foreach 
    // unset of product with id $productId;
    // save $products in products_db.csv (rewrite)
}

// $product is array with id, name, descritption, price, images, sizes
/*
$product['id'=>'id from user form', 'name'=>'name from user form']
*/
function createProduct($product) {
    // check product id is unique ( we dont have same product id in our database)
    // add new row to products_db.csv
}