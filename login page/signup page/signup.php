<?php
include_once "../config/dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $loginId = $_POST['loginId'];
    $password = $_POST['password'];
    $username = $_POST['Name'];

    if (empty($loginId) || empty($password) || empty($username)) {
        echo "Invalid credential";
    } else {
        $sql = "INSERT INTO `user_info`(`name`, `UserId`, `password`) VALUES ('$username','$loginId','$password')";
        $qry = mysqli_query($conn, $sql);

        if ($qry) {
            // Successful registration, perform the redirect here.
            header("location: ../index.php");
            exit; // Make sure to exit after the header to prevent further execution.
        } else {
            echo mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="./signup.css">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="Name" placeholder="User Name">
        <input type="text" name="loginId" placeholder="Login Id">
        <input type="password" name="password" placeholder="password">
        <button name="submit">Submit</button>
        <div class="lower">
            <div class="signup">
                <a href="../index.php">
                    <p>Already have an account? Sign In</p>
                </a>
            </div>
        </div>
    </form>
</body>
</html>
