<?php
include_once('../config/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="./includes/sidebar.css">
    <link rel="stylesheet" href="./view pages/viewProduct.css">
    <link rel="stylesheet" href="./view pages/dashboard.css">
    <link rel="stylesheet" href="./view pages/users.css">
    <!-- <link rel="stylesheet" href="../style.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300&family=Roboto:wght@300;400&display=swap"
        rel="stylesheet">

</head>

<body oncontextmenu="return true">
    <?php
    include('./includes/sidebar.php');
    ?>
    <div class="logout-button" id="logout">
        <p>Logout</p>
    </div>
    <div class="main">

    </div>


    <script>
        var main = document.querySelector('.main');
        window.addEventListener('DOMContentLoaded', () => {
            $.ajax({
                url: "./view pages/dashboard.php",
                success: function (result) {
                    $('.main').html(result);
                }
            });
        }
        );


        var addProduct = document.querySelector('#addProduct');
        addProduct.addEventListener('click', () => {
            console.log("hello add");
            $.ajax({
                url: "./controller/AddProducts.php",
                success: function (result) {
                    $(".main").html(result);
                }
            });
        })

        var viewProduct = document.querySelector('#viewProduct');
        viewProduct.addEventListener('click', () => {
            $.ajax({
                url: "./view pages/viewProduct.php",
                success: function (result) {
                    $(".main").html(result);
                }
            });
        })

        var dashboard = document.querySelector('#dashboard');
        dashboard.addEventListener('click', () => {
            $.ajax({
                url: "./view pages/dashboard.php",
                success: function (result) {
                    $('.main').html(result);
                }
            });
        })

        var users = document.querySelector('#users');
        users.addEventListener('click', () => {
            $.ajax({
                url: "./view pages/users.php",
                success: function (result) {
                    $('.main').html(result);
                }
            });
        })

        var logout = document.querySelector('#logout');
        logout.addEventListener('click', () => {
            $.ajax({
                url: "../index.php",
                success: function (result) {
                    $('body').html(result);
                }
            });
        })
    </script>
    <script src="./admin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>