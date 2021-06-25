<?php
include_once "classLoader.php";

$products = [];
foreach($productsArr as $productArr) {
    $products[] = new Product($productArr[0], $productArr[1], $productArr[2], $productArr[3]);
}

echo "<pre>";
print_r($products);
echo "</pre>";
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
        <h1>Products</h1>
 
        <a href="/cart_web.php" class="btn btn-success mb-2">Cart 
 
    </a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Available quantity</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Write Your Foreach here! -->
                <?php foreach($products as $product):?>

                <tr>
                    <td> <?php echo $product->getId(); ?> </td>
                    <td> <a href="/edit.php?product_id=<?php echo $product->getId(); ?>"><?php echo $product->getName(); ?> </a></td>
 
                    <td> <?php echo $product->getPrice(); ?> </td>
                    <td> <?php echo $product->getAvailableQuantity(); ?></td>
 
                    <td>
                         <a href="/cart_web.php?product_id=<?php echo $product->getId(); ?>" class="btn btn-success">Add to Cart</a>
 
                    </td>
                </tr> 
                    

                <?php endforeach; ?>
 
            </tbody>
        </table>
        <a href="/create.php" class="btn btn-primary"> Create Product</a>
    </div>
</body>
</html>

