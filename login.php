<?php include('./config/constants.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-item" href="#">
                <div class="logo">
                    <a href="#" title="Logo">
                        <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                    </a>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu text-right" id="navbarText">
                <div class="navbar-nav me-auto mb-2 mb-lg-0 "></div>
                <div class="navbar-nav me-auto mb-2 mb-lg-0 "></div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                        <a href="<?php echo SITEURL; ?>index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo SITEURL; ?>#">Contact</a>
                    </li>
                    <!-- <li><img src="./images/person.jpg" alt="" class="rounded-circle" width="50rem" height="50rem"></li> -->
                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar Section Starts Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">

            <h2 class="text-center text-white">Sign In</h2>

            <form action="<?php echo SITEURL;?>php/login.php" method="post" class="order">
                <fieldset>
                    <?php if (isset($_SESSION['customerlogin'])) {
                        echo $_SESSION['customerlogin'];
                        unset($_SESSION['customerlogin']);
                    }if (isset($_SESSION['loginuser'])) {
                        echo $_SESSION['loginuser'];
                        unset($_SESSION['loginuser']);
                    } ?>
                    <legend>User Details</legend>
                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="" class="input-responsive" required>

                    <div class="order-label">Password</div>
                    <input type="password" name="password" placeholder="" class="input-responsive" required>

                    <div class="order-label">Don't have an account yet? <a href="<?php echo SITEURL;?>register.php"> Sign Up</a> </div>

                    <input type="submit" name="submit" value="login" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" /></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <?php include('./main-partials/footer.php') ?>