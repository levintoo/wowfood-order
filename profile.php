<?php include('./main-partials/nav.php');
include('./main-partials/customer-login.php');

$email = $_SESSION['customer'];

$query = "SELECT * FROM tbl_customer WHERE email= '$email'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$fullname = $row['full_name'];
$contact = $row['contact'];
$address = $row['address'];

?>
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search">
    <div class="container">


        <form action="" class="order" method="POST">
            <fieldset>

                <legend class="text-center">User</legend>
                <div class="order-label">Full Name: <span class="input-responsive text-success"><?php echo $fullname; ?></span></div>

                <div class="order-label">Email: <span class="input-responsive text-success"><?php echo $email; ?></span></div>

                <div class="order-label">Phone Number: <span class="input-responsive text-success"><?php echo $contact; ?></span></div>


                <div class="order-label">Adress : <span class="input-responsive text-success"><?php echo $address; ?></span></div>


                <br>
                <a type="submit" href="<?php echo SITEURL; ?>edit-profile.php?id=<?php echo $id; ?>" value="" class="btn btn-success">edit details</a>
                <a type="submit" href="#" value="" class="btn btn-warning">check orders</a>


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