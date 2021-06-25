<?php

include_once "classLoader.php";


 require_once("ShoppingCart/Cart.php");
 require_once("ShoppingCart/CartItem.php");
 require_once("ShoppingCart/Product.php");

$cart = new Cart();

$person = new Person(1, "John Snow", 25);

if(isset($_GET['product_id'])) {
 

    $searchedProduct = null;
    $id = $_GET['product_id'];

    foreach ($productsArr as $key => $productArr) {
        if($productArr[0] == $_GET['product_id']) {
            $searchedProduct = $productArr;
            break;
        }
    }


    $newProduct = new Product($searchedProduct[0], $searchedProduct[1],$searchedProduct[2],$searchedProduct[3]);
    $cart->addProduct($newProduct, 1);
}


// $product1 = new Product(1, "Keyboard", 100, 5);
// $product2 = new Product(2, "Computer Mouse", 60, 15);
// $cart->addProduct($product1, 1);
// $cart->addProduct($product2, 2);

// echo "<pre>";
// print_r($cart);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
            .products-img {
                width: 100px;
                height: 100px;
            }
        </style>
</head>
    <body>
        <div class="container-fluid">
            <h1>Shopping Cart</h1>
            <a href="/index.php" class="btn btn-success"> Back to products</a>
            <a href="/delete_cart.php" class="btn btn-danger">Empty Cart</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                <tr>
                    <th width="30%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>
                <?php if(count($cart->items) > 0): ?>
                    <?php foreach($cart->items as $cartItem): ?>
                        <form action="" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $cartItem->getProduct()->getId(); ?>">
                            <tr>
                                <td width="30%"><?php echo $cartItem->getProduct()->getName(); ?> </td>
                                <td width="10%"><input type="text" name="product_qty" value="<?php echo $cartItem->getQuantity(); ?>"></td>
                                <td width="13%"><?php echo $cartItem->getProduct()->getPrice(); ?></td>
                                <td width="10%"><?php echo ( $cartItem->getProduct()->getPrice() * $cartItem->getQuantity()); ?></td>
                                <td width="17%">
                                    <button type="submit" class="btn btn-danger mx-1" name="remove_product">Remove Item</a>
                                    <button type="submit" class="btn btn-warning  mx-1" name="save_product">Save</button>
                                </td>
                            </tr>
                        </form>
                    <?php endforeach; ?>
                    <tr>
                    <td colspan="3">Total</td>
                    <td><?php echo $cart->getTotalSum() ?></td>
                    <td></td>
                </tr>
                <?php else: ?>
                    <tr>
                            <td colspan="5">No products in cart</td>
                    </tr>
                <?php endif; ?> 
 
                </table>
            </div>
        </div>
    </body>
</html>