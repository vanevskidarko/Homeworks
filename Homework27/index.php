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
    <div class="container header">
        <div class="jumbotron">
            <div class="header-content mt-4">
                <h2 class="display-2">Company Inc.</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut unde quaerat consequatur?</p>
                <a href="login.html" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>


    <div class="container products">
        <h2 class="text-center mb-4">Our Products</h2>

        <div class="row mt-4 p-4">
            <div class="col-md-5 col-sm-12">
                <img src="https://images.unsplash.com/photo-1501959181532-7d2a3c064642?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9ffb47d2c8a236bae5e5bb86b2c400b9&auto=format&fit=crop&w=1070&q=80"
                    style="height: 100%;width: 100%;" alt="product-image" class="shadow-lg">
            </div>
            <div class="col-md-7 col-sm-12 mt-sm-4" style="display:flex;align-items:center;">
                <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nobis officiis unde
                    necessitatibus esse alias expedita quia doloremque assumenda. Cupiditate nam exercitationem
                    voluptatem quidem ad dolore ullam aliquid culpa ducimus qui, ut dignissimos inventore veniam!</p>
            </div>
        </div>

    </div>

    <!-- Content End -->

    <!-- Footer -->
    <?php include("footer.php"); ?>

</body>

</html>