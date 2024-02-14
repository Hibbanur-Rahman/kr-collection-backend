<div class="users">
    <h1>All Users</h1>
    <table>
        <tr>
            <th>S.N.</th>
            <th>Username</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>
        <?php
            include_once "../config/dbconnect.php";
            $sql="SELECT * FROM `user_info`";
            $qry=mysqli_query($conn,$sql);
            $count=1;
            if(mysqli_num_rows($qry)){
                while($row=$qry->fetch_assoc()){
        ?>
        <tr>
            <td><?=$count?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['UserId']?></td>
            <td>9973152523</td>
        </tr>
        <?php 
            $count++;
                }
            }
            
        ?>
        
    </table>
</div>