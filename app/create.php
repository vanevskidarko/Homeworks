<?php

require('functions.php');

if(isset($_POST['create_product'])) {
    // $product['id'] = $_POST['product-id'];
    // $product['name'] = $_POST['product-name'];
    // $product['desc'] = $_POST['desc'];
    // $product['price'] = $_POST['price'];
    createProduct($product);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="product-id">
        <input type="text" name="product-name">

    </form>
</body>
</html>