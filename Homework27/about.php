<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="assets/js/script.js"></script>

    <title>About - BootsApp</title>
</head>

<body>
    <!-- Navigation -->
    <?php include("navigation.php"); ?>
    <!-- Content -->
    <div class="container mb-4">
        <h3 class="text-center display-3 mb-4">About Us</h3>
        <div class="card shadow" style="width: 100%;height: auto;">
            <div class="card-body">
                <?php
                $posts = ['post1.txt', 'post2.txt', 'post3.txt'];

                $postsContent = "";

                foreach ($posts as $post) {
                    if (file_exists('posts/' . $post)) {
                        $content = file_get_contents('posts/' . $post);
                        $postsContent .=   $content . '<hr>';
                    }
                }

                echo $postsContent;
                ?>

                <div class="row">
                    <div class="col-md-3 col-sm-12"></div>
                    <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                        <div class="form">
                            <h3 style="text-align: center" class="pb-4">Subscribe to our newsletter</h3>
                            <form class="form-group" method="POST" action="">
                                <input type="text" class="form-control" name='email2' placeholder="Enter E-mail">
                                <br>
                                <button class="btn btn-primary btn-block">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("register_email.php"); ?>

    <?php include("footer.php"); ?>

</html>