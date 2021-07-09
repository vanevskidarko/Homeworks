<?php

// class PDO to work with database
// phpinfo();


try {
    $database = new PDO('sqlite:' . __DIR__ . "/database/webshop.db");
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




    // CRUD
    // create/insert, read, update, delete

    // Create  ( add/insert row of data in our database)

    // table ? - orders
    // what data we want to add?

    $data = [
        "id" => 2222,
        "name" => "Alice Wonderland",
        "product" => "Speaker",
        "price" => 50,
        "address" => "Wonderland, Rabbit hole 2"
    ];

    // First way

    // $insert = "INSERT INTO orders (id, name, product, price, address) VALUES (:id, :name, :product, :price, :address)";

    // $statement = $database->prepare($insert);

    // $statement->bindParam(':id', $data['id']);
    // $statement->bindParam(':name', $data['name']);
    // $statement->bindParam(':product', $data['product']);
    // $statement->bindParam(':price', $data['price']);
    // $statement->bindParam(':address', $data['address']);

    // $statement->execute();


    // Short way without checking input
    // $stmt = $database->prepare("INSERT INTO orders (id, name, product, price, address) VALUES (?, ?, ?, ?, ?)");
    // $stmt->execute([1, "Some order", "Some product", 1111, "Some address 1234"]);



    // echo "Order created! Order id is: ".$data['id'];



    // READ 
    // table ? - orders
    // what data we want to get ? All data? Part of data according our needs


    // UPDATE

    $toUpdate = "UPDATE orders SET name=? WHERE id=?";

    $stmt2 = $database->prepare($toUpdate);

    $stmt2->execute(['New John Doe', 1111]); // 'New John Doe' first question mark, 1111 second question mark




    // DELETE 

    $delete = "DELETE FROM orders WHERE id = ?";

    $stmt3 = $database->prepare($delete);

    $stmt3->execute([0]);




    // SELECT 
    $stmt = $database->prepare("SELECT * FROM orders");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // print each row with foreach loop

    // foreach($result as $row) {
    //     echo "Id: ".$row['id']." Name: ".$row['name']."<br>";
    // }
    echo "<pre>";

    print_r($result);
} catch (Exception $e) {
    //throw $th;
    echo "Some error occured! " . $e->getMessage();
}
