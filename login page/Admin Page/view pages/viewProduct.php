<div class="productView">
    <h3>Product Items</h3>
    <table>
        <tr>
            <th>S.N</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>Sub Category</th>
            <th>Price</th>
        </tr>
        <?php
            include_once "../config/dbconnect.php";
            $sql="SELECT * FROM product_detail";
            $result=mysqli_query($conn,$sql);
            $count=1;
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
        ?>
        <tr>
            <td><?=$count ?>.</td>
            <td>
                <img src="./images/<?=$row['fileName']?>" alt="">
            </td>
            <td><?= $row['ProductName']?></td>
            <td><?=$row['Category']?></td>
            <td><?=$row['SubCategory']?></td>
            <td><?=$row['Price']?></td>
        </tr>
        <?php 
                $count=$count+1;
                }
            }
        ?>
    </table>
</div>