<div class="heading">
    <h1>Add Products</h1>
</div>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

    <div class="detail">
        <p>Enter product name</p>
        <input type="text" placeholder="Enter Product name" name="ProductName">
    </div>

    <div class="detail">
        <p>Enter product price</p>
        <input type="text" placeholder="Enter Product price" name="Price">
    </div>

    <div class="detail">
        <p>Choose a category</p>
        <input type="text" placeholder="Enter product category" name="Category">
    </div>

    <div class="detail">
        <p>Choose a sub-category</p>
        <input type="text" placeholder="Enter a sub-category" name="SubCategory">
    </div>
    <div class="detail" style="display: flex;">
        <p>Choose a list</p>
        <select name="list" id="">
            <option value="">select the list</option>
            <option value="1">first-listing</option>
            <option value="2">second listing</option>
            <option value="3">third listing</option>
            <option value="4">fourth listing</option>
        </select>
    </div>
    <div class="detail-photo">
        <p>Upload product images</p>
        <!-- <div class="image-preview" >
            <img src="./images/<?php echo $filename ?>" alt="">
        </div> -->
        <div class="upload">
            <input type="file" placeholder="Choose Files" class="imageInput" name="uploadfile">
            <!-- <button type="submit" name="upload" id="upload">UPLOAD</button> -->
        </div>
    </div>
    <div class="submit">
        <input type="submit" name="submit">
    </div>

</form>
<?php
   include_once "../config/dbconnect.php";
    if(isset($_POST['submit'])){
        $ProductName=$_POST['ProductName'];
        $Price=$_POST['Price'];
        $Category=$_POST['Category'];
        $SubCategory=$_POST['SubCategory'];
        $list=$_POST['list'];

        

        $filename = $_FILES['uploadfile']['name'];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../images/" . $filename;

        move_uploaded_file($tempname, $folder);

        switch($list){
            case 1:
                $folder = "..../images/listing-first" . $filename;
                move_uploaded_file($tempname, $folder);
                $sql1="INSERT INTO `first_list`(`item_image`) VALUES ('$filename')";
                $qry1=mysqli_query($conn,$sql1);
                break;
            case 2:
                $folder = "..../images/second-big" . $filename;
                move_uploaded_file($tempname, $folder);
                $sql1="INSERT INTO `second_list`(`item_image`) VALUES ('$filename')";
                $qry1=mysqli_query($conn,$sql1);
                break;
            case 3:
                $folder = "..../images/fourth-listing" . $filename;
                move_uploaded_file($tempname, $folder);
                $sql1="INSERT INTO `third_list`(`item_image`) VALUES ('$filename')";
                $qry1=mysqli_query($conn,$sql1);
                break;
            case 4:
                $folder = "..../images/sixth-listing" . $filename;
                move_uploaded_file($tempname, $folder);
                $sql1="INSERT INTO `fourth_list`(`item_image`) VALUES ('$filename')";
                $qry1=mysqli_query($conn,$sql1);
                break;
        }

        $sql1="INSERT INTO `product_detail`(`ProductName`, `Price`, `Category`, `SubCategory`,`fileName`) VALUES ('$ProductName','$Price','Category','$SubCategory','$filename')";
        $qry1=mysqli_query($conn,$sql1);

        $sql2 = "INSERT INTO `image_item` (`filename`) VALUES ('$filename')";
        $qry2 = mysqli_query($conn, $sql2);

        header("location: ../admin.php");

        if (move_uploaded_file($tempname, $folder) && $qry1 && $qry2) {
            echo "<script>
                alert('Image upload successfully');
            </script>";
        } else {
            echo mysqli_error($conn);
        }
       
    }
?>