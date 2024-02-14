<?php
session_start();
require "includes/database_connect.php";

if (!isset($_SESSION["user_id"])) {
    header("location: index.php");
    die();
}
$user_id = $_SESSION['user_id'];

$sql_1 = "SELECT * FROM users WHERE id = $user_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!";
    return;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        include "includes/head_links.php";
    ?>

    <link rel="stylesheet" href="css/dashboard.css"/>
    <title>Dashboard</title>
</head>
<body>
    <div class="container1">

        <?php
            include "includes/header.php";
        ?>

        <div class="my-profile">
            <h1>My Profile</h1>
            <div class="row">
                <div class="col-md-3 profile-img-container">
                    <i class="fas fa-user profile-img"></i>
                </div>
                <div class="col-md-9">
                    <div class="row no-gutters justify-content-between align-items-end">
                        <div class="profile">
                            <div class="name"><?= $user['full_name'] ?></div>
                            <div class="email"><?= $user['email'] ?></div>
                            <div class="phone"><?= $user['phone'] ?></div>
                        </div>
                        <div class="edit">
                            <div class="edit-profile">Edit Profile</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
            include "includes/signup_modal.php";
            include "includes/login_modal.php";
            include "includes/footer.php";
        ?>

    </div>
</body>
</html>