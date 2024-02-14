<?php
    include_once "../config/dbconnect.php";
?>

<div class="dashboard">
    <div class="card">
        <i class="fa-solid fa-users"></i>
        <h1>Total User</h1>
        <?php
            $sql="SELECT `name` from `user_info`";
            $qry=mysqli_query($conn,$sql);
        ?>
        <h1>
            <?php
                echo mysqli_num_rows($qry);
            ?>
        </h1>
    </div>
    <div class="card">
        <i class="fa fa-th-large"></i>
        <h1>Total Categories</h1>
        <h1>
            <?php
                $sql1="SELECT `SubCategory` from `product_detail`";
                $qry1=mysqli_query($conn,$sql1);
                echo mysqli_num_rows($qry1);
            ?>
        </h1>
    </div>
    <div class="card">
        <i class="fa fa-list"></i>
        <h1>Total Product</h1>
        <h1>
            <?php
                $sql1="SELECT `SubCategory` from `product_detail`";
                $qry1=mysqli_query($conn,$sql1);
                echo mysqli_num_rows($qry1);
            ?>
        </h1>
    </div>
</div>