<?php

try {
    $database = new PDO('sqlite:' . __DIR__ . "/database/webshop.db");

    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    //add row of data in our db

    $data = [
        "id" => "1111",
        'name' => 'Darko Kuskule',
        'product' => 'Spika',
        'price' => 500,
        'adress' => 'Portland'
    ];
    //first way
    // $insert = "INSERT INTO orders (id,name,product,price,adress) VALUES (:id, :name, :product, :price, :adress)";
    // $statement = $database->prepare($insert);
    // $statement->bindParam(':id', $data['id']);
    // $statement->bindParam(':name', $data['name']);
    // $statement->bindParam(':product', $data['product']);
    // $statement->bindParam(':price', $data['price']);
    // $statement->bindParam(':adress', $data['adress']);
    // $statement->execute();

    //update
    //whatt table? what we want to update?

    $toUpdate = "UPDATE orders SET product=? WHERE id=111";
    $statement = $database->prepare($toUpdate);
    $statement->execute(['Notebook Air 12 Vivobook']);
    $select = "SELECT * FROM orders";


    //delete
    //we also need WHERE variable from SQL
    $delete = "DELETE FROM orders WHERE id=1111";
    $statement2 = $database->prepare($delete);
    $statement2->execute();

    //read
    // table ? - read
    //what data do we want to get? All data? filter data?
    $statement = $database->prepare($select);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch (Exception $th) {
    echo "Some error occured" . $th->getMessage();
}
