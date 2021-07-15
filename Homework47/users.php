<?php

//Create class to work with databse

//Connection to database
//CRUD create  read update delete  functions


$database = new PDO('sqlite:' . __DIR__ . "/database/webshop.db");
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['create_user'])) {

    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    try {



        $insert = "INSERT INTO users (id, name, username, email, password, phone) VALUES (:id, :name,:username, :email, :password, :phone)";

        $statement = $database->prepare($insert);

        $statement->bindParam(':id', $id);
        $statement->bindParam(':name', $username);
        $statement->bindParam(':username', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->bindParam(':phone', $phone);

        $statement->execute();



        echo "<p> User created in the database! </p>";
    } catch (\Throwable $th) {
        echo "Cant save user, some error appeard! " . $e->getMessage();
    }
}

//update
if (isset($_GET['id'])) {   
    $stmt = $database->prepare("SELECT * FROM users  WHERE id=" . $_GET['id']);
    $stmt->execute();

    $user  = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $userToUpdate = $user[0];
}
if (isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $toUpdate = "UPDATE users SET  name=?, username=?, email=?, password=?, phone=? WHERE id=$id";
    $stmt2 = $database->prepare($toUpdate);
    $stmt2->execute([$username, $name, $email, $password, $phone]);
}

$stmt = $database->prepare("SELECT * FROM users");
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Create user</h1>
    <form action="" method="POST">
        <label for=""> ID <input type="text" name="id"></label>
        <label for=""> Username <input type="text" name="username"></label>
        <label for=""> Name <input type="text" name="name"> </label>
        <label for=""> Email <input type="text" name="email"> </label>
        <label for=""> Password <input type="text" name="password"></label>
        <label for=""> Phone <input type="text" name="phone"></label>
        <button type="submit" name="create_user">Create</button>
    </form>

    <h1>Update user</h1>
    <form action="" method="POST">
        <label for=""> ID <input type="text" name="id" value="<?php echo $userToUpdate['id'] ?>"></label>
        <label for=""> Username <input type="text" name="username" value="<?php echo $userToUpdate['username'] ?>"></label>
        <label for=""> Name <input type=" text" name="name" value="<?php echo $userToUpdate['name'] ?>"> </label>
        <label for=""> Email <input type=" text" name="email" value="<?php echo $userToUpdate['email'] ?>"> </label>
        <label for=""> Password <input type=" text" name="password" value="<?php echo $userToUpdate['password'] ?>"></label>
        <label for=""> Phone <input type=" text" name="phone" value="<?php echo $userToUpdate['phone'] ?>"></label>
        <button type="submit" name="update_user">Update</button>
    </form>
    <h1>All users in database table</h1>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>

        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td> *******</td>
                <td><a href="read.php?id=<?php echo $user['id']; ?>"" class=" btn btn-secondary">Read</a></td>
                <td><a href="edit.php?id=<?php echo $user['id']; ?>"" class=" btn btn-primary">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $user['id']; ?>"" class=" btn btn-danger">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>