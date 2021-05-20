<?php
$products = [
    'id' => 44,
    'type' => 'variable',
    'SKU' => 'woo-vneck-tee',
    'name' => 'V-Neck T-Shirt',
    'visibility' => 'visible',
    'short_description' => 'This is a variable product', 
    'description' => '"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.	"',
    'stock' => 1,
    'sale_price' => 18,
    'regular_price' => 20,
    'categories' => ['clothing','tshirts'],
    'images' => [
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/vneck-tee-2.jpg',
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/vnech-tee-green-1.jpg',
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/vnech-tee-blue-1.jpg'
    ],
    'color' => [
        'blue',
        'green',
        'red'
    ],
    'size' => [
        'large',
        'medium',
        'small'
    ],

    ['id' => 45,
    'type' => 'variable',
    'SKU' => '"woo-hoodie',
    'name' => 'Hoodie',
    'visibility' => 'visible',
    'short_description' => 'This is a variable product', 
    'description' => '"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.	"',
    'stock' => 1,
    'sale_price' => 24,
    'regular_price' => 30,
    'categories' => ['clothing','hoodies'],
    'images' => [
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/hoodie-2.jpg',
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/hoodie-blue-1.jpg',
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/hoodie-green-1.jpg',
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/hoodie-with-logo-2.jpg'
    ],
    'color' => [
        'blue',
        'green',
        'red'
    ],
    'size' => [
        'large',
        'medium',
        'small'
    ],
],


    ['id' => 87,
    'type' => 'grouped',
    'SKU' => 'logo-collection',
    'name' => 'Hoodie',
    'visibility' => 'visible',
    'short_description' => 'This is a variable product', 
    'description' => '"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.	"',
    'stock' => 1,
    'sale_price' => 24,
    'regular_price' => 30,
    'categories' => 'clothing',
    'images' => [
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/logo-1.jpg',
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/beanie-with-logo-1.jpg',
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/t-shirt-with-logo-1.jpg',
        'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/hoodie-with-logo-2.jpg'
    ],
    'color' => [
        'blue',
        'green',
        'red'
    ],
    'size' => [
        'large',
        'medium',
        'small'
    ],
],

    ['id' => 70,
    'type' => 'simple',
    'SKU' => 'woo-polo',
    'name' => 'Polo',
    'visibility' => 'visible',
    'short_description' => 'This is a variable product', 
    'description' => '"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.	"',
    'stock' => 1,
    'sale_price' => 24,
    'regular_price' => 30,
    'categories' => ['clothing','tshirts'],
    'images' => 'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/polo-2.jpg',
    'color' => [
        'blue',
    ],
    'size' => [
        'large',
        'medium',
        'small'
    ]
    ],


    ['id' => 62,
    'type' => 'simple',
    'SKU' => 'woo-sunglasses',
    'name' => 'Sunglasses',
    'visibility' => 'visible',
    'short_description' => 'This is a variable product', 
    'description' => '"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.	"',
    'stock' => 1,
    'sale_price' => 24,
    'regular_price' => 30,
    'categories' => ['clothing','tshirts'],
    'images' => 'https://woocommercecore.mystagingwebsite.com/wp-content/uploads/2017/12/polo-2.jpg',
    'color' => [
        'blue',
    ],
    'size' => [
        'large',
        'medium',
        'small'
    ],
]
];

echo $products['SKU'];
echo '<br>';
echo $products['images'][0];
echo '<br>';
echo $products[0]['categories'][1];
echo '<br>';
print_r($products['size']) ;