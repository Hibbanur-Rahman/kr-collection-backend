<?php
include_once "./config/dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $loginId = $_POST['loginId'];
    $passwordUser = $_POST['password'];
    if (empty($loginId) || empty($passwordUser)) {
        echo "invalid credentials";
    } else {
        //    $sql="INSERT INTO `user_info`(`name`, `id`, `password`) VALUES ('$loginId','$loginId','$password')";
        $sql = "SELECT `UserId`,`name`,`password` FROM user_info WHERE UserId='$loginId' AND `password`='$passwordUser'";
        $qry = mysqli_query($conn, $sql);
        if ($qry) {
            if (mysqli_num_rows($qry) == 1) {
                $row = mysqli_fetch_assoc($qry);
                echo "success full login<br>";
                echo "Name: {$row['name']} <br>" .
                    "id:{$row['UserId']}<br>" .
                    "password: {$row['password']}";
                    echo '<script>window.location.href = "./Admin Page/admin.php";</script>';
                    exit; // Make sure to exit after the redirection
            } else {
                echo "you entered the wrong credential";
            }
        } else {
            echo "Sorry, you enter the wrong credential" . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="login">
        <input type="text" name="loginId" placeholder="Login Id">
        <input type="password" name="password" placeholder="password">
        <button name="submit">Submit</button>
        <div class="lower">
            <div class="forget">
                <a href="">
                    <p>Forget password ?</p>
                </a>

            </div>
            <div class="signup">
                <a href="./signup page/signup.php">
                    <p>Sign Up</p>
                </a>

            </div>
        </div>

    </form>

</body>

</html>