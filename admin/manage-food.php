<?php include('./partials/menu.php') ?>

<div class="main-content">
<div class="wrapper row py-lg-4 py-md-3 col-md-12">
            <p class="fs-2"><strong>Manage Food</strong></p>
            <?php if (isset($_SESSION['addfood'])) {
                echo $_SESSION['addfood'];
                unset($_SESSION['addfood']);
            } ?>
            <div class="mb-3">
        <a href="<?php SITEURL ?>add-food.php" class="btn-sm btn-info text-light p-2">Add Food</a>
        </div>
        <table>
            <tr class="border-bottom">
            <th class="p-2">S.N.</th>
            <th class="p-2">Title</th>
            <th class="p-2">Image</th>
            <th class="p-2">Price</th>
            <th class="p-2">Featured</th>
            <th class="p-2">Active</th>
            <th class="p-2">Action</th>
            </tr>
            <?php 
            $query = "SELECT * FROM tbl_food";
            $result = mysqli_query($db, $query);
            if ($result == true){
                $count = mysqli_num_rows($result);
                if ($count == 0){
                    // if food not found on db
                    echo '<p class="text-danger">error no food found</p>';
                }else{
                    // if food found on db
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                <td class="p-2">1</td>
                <td class="p-2"><?php echo $row['title']; ?></td>
                <td class="p-2"><?php echo $row['title']; ?></td>
                <td class="p-2"><?php echo $row['price']; ?></td>
                <td class="p-2"><?php echo $row['featured']; ?></td>
                <td class="p-2"><?php echo $row['active']; ?></td>
                <td class="p-2 flex-wrap d-flex">
                    <a href="" class="btn-sm btn-success p-2">Update Food</a>
                    <a href="" class="btn-sm btn-danger p-2">Delete Food</a>
                </td>
            </tr>
                        <?php
                    }
                }
            }
            ?>
            
        </table>
        </div>
</div>

<?php include('./partials/footer.php') ?>