<?php 
session_start(); 
// protection 
if( !isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] == 'no' ) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local libraries -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script> -->

    <!-- cdn for libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="assets/js/script.js"></script>

    <title>BootsApp | Home</title>
    <style>
    </style>
</head>

<body>

    <!-- Navigation -->
 
 
    <?php include("navigation.php"); ?>

    <!-- Content Start -->
    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <i class="fas fa-user"></i> Edit Profile</h1>

                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.html" class="btn btn-light btn-block">
                        <i class="fas fa-arrow-left"></i> Back To Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block">
                        <i class="fas fa-lock"></i> Change Password
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger btn-block">
                        <i class="fas fa-trash"></i> Delete Account
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROFILE -->
    <section id="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" value="Username from login page">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value=" ">
                                </div>
                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea class="form-control"
                                        name="editor1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid unde at fugiat explicabo temporibus, tempora animi sunt iusto quod beatae optio veritatis velit natus odit error! Possimus esse quisquam quibusdam eveniet autem! Minus dolore quisquam nemo similique doloribus perspiciatis tempore.</textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <form action="file_upload.php" method="POST" enctype="multipart/form-data">
                        <h3>Your Avatar</h3>
                        <?php
                        $filename = "uploads/".$_SESSION["username"]."/avatar.jpg";
                        // username alek > uploads/alek/avatar.jpg
                        // username john > uploads/john/avatar.jpg 
                        echo ' <img src="'.$filename.'" alt="" class="d-block img-fluid mb-3">'
                        ?>
                        <!-- <img src="assets/img/avatar.png" alt="" class="d-block img-fluid mb-3"> -->
                        <div class="form-group">
                            <input type="file" name="userAvatar" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Upload Image</button>
                        <button class="btn btn-danger btn-block">Delete Image</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Content End -->



</body>

</html>