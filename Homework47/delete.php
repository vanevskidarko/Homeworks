<?php

include 'users.php';
$delete = "DELETE FROM users  WHERE id = ?";

$stmt3 = $database->prepare($delete);

$stmt3->execute([$_GET['id']]);
header('Location: users.php');
