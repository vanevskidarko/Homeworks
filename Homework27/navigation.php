<nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
        <a class="navbar-brand" href="#">LOGO </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php"> My page </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Register </a>
                </li>
                <!-- ako user e logiran / ako Cookie loggedIn == no -->
                <!-- $_COOKIE["loggedIn"] == 'no'  e isto sto i 'no' == $_COOKIE["loggedIn"]  -->
                <?php 
                    if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] == 'no' ) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"> Login</a>
                    </li>
                <?php } ?>

                <!-- ako user e logiran / ako Cookie loggedIn == yes -->
                <?php 
                    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == 'yes' ) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php"> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoff.php"> Logoff</a>
                </li>
                <?php } ?>


        
                
            </ul>
        </div>
    </nav>