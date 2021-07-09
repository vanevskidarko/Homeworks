<?php

include 'users.php';



//update
if (isset($_GET['id'])) {
    $stmt = $database->prepare("SELECT * FROM users  WHERE id=" . $_GET['id']);
    $stmt->execute();

    $user  = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $userToUpdate = $user[0];
}
// if (isset($_POST['update_user'])) {
//     $toUpdate = "UPDATE users SET name=?, WHERE id=?";
//     $stmt2 = $database->prepare($toUpdate);
//     $stmt2->execute('Some user', 4);
// }
