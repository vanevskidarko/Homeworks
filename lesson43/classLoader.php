<?php
// spl_autoload_register() - autoload class files by class name

function loadShoppingCart($class) {
    @include "ShoppingCart/".$class.".php";
} 

function loadModels($class) {
    @include "Models/".$class.".php";
} 

spl_autoload_register('loadModels');
spl_autoload_register('loadShoppingCart');

$productsArr = include_once "database/products.php";