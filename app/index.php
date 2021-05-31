<?php
require('functions.php');

if(isset($_POST['delete'])) {
    $productId = $_POST['product-id'];
    deleteProduct($productId);
}

$products = getProducts('database/products_db.csv');


array_shift($products);
// $products[0][11] = "https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/vneck-tee-2.jpg, https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/vnech-tee-green-1.jpg, https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/vnech-tee-blue-1.jpg"
foreach($products as $key => $product) {
 

    
    $newArray = explode(",", $product[11]);
    $products[$key][11] = $newArray;
    // print_r($newArray);
    // // print_r($product);
    // echo "</pre>";
}
// echo "<pre>";
//  print_r($products);
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
        <h1>Products</h1>
 
            
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Short description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Images</th>
                    <th scope="col">Sizes</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Write Your Foreach here! -->
                <?php foreach($products as $product):?>

                <tr>
                    <td> <?php echo $product[0]; ?> </td>
                    <td> <?php echo $product[4]; ?> </td>
                    <td> <?php echo $product[5]; ?> </td>
                    <td> <?php echo $product[8]; ?> </td>
                    <td> 
                        <?php foreach($product[11] as $image): ?>
                            <img src=" <?php echo $image; ?>" class="img-fluid img-thumbnail products-img">
                        <?php endforeach; ?>
                    </td>
                    <td> <?php echo $product[13]; ?> </td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="product-id" value="<?php echo $product[0]?>">
                            <button class="btn btn-danger" name="delete">Delete</button>
                         </form>
                    </td>
                </tr> 
                    

                <?php endforeach; ?>
 
            </tbody>
        </table>
        <a href="/create.php" class="btn btn-primary"> Create Product</a>
    </div>
</body>
</html>