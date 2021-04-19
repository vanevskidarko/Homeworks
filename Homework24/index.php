<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>the get method</h1>
    <form action="home.html" method="get">
        <label for="user">Username</label>
        <input type="text" name="user" id="">
        <label for="password">Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="submit">
    </form>
    <?php
    if(isset($_GET['submit'])){
        $un = $_GET['username'];
        $pw = $_GET['password'];
        if ($un=='username' && $pw=='password'){
            header("location:home.html");
        }
    }
?>


<h1>the post method</h1>
<form action="home.html" method="post">
        <label for="user">Username</label>
        <input type="text" name="user" id="">
        <label for="password">Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="submit">
    </form>
    <?php
    include('post.php');
    ?>
</body>

</html>